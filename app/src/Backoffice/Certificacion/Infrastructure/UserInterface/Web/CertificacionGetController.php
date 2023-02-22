<?php

declare(strict_types=1);


namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Application\Get\Collection\CertificacionByCriteriaCounter;
use App\Backoffice\Certificacion\Application\Get\Collection\CertificacionByCriteriaSearcher;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Infrastructure\UserInterface\Web\TwigTemplateConstants as ObraTemplateConstants;
use App\Shared\Infrastructure\Symfony\WebController;
use App\Shared\Infrastructure\Utils\FilterUtils;
use App\Shared\Infrastructure\Utils\NextPage;
use App\Shared\Infrastructure\Utils\OffsetPaginationUtil;
use App\Shared\Infrastructure\Utils\PreviousPage;
use App\Shared\Infrastructure\Utils\SortUtils;
use App\Shared\Infrastructure\Utils\TotalNumberOfPagesUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CertificacionGetController extends WebController
{
    private CertificacionByCriteriaSearcher $itemsByCriteriaSearcher;
    private CertificacionByCriteriaCounter  $counter;
    private TwigTemplateConstants           $twigTemplateConstants;
    private ObraFinder                      $obraFinder;
    /**
     * @var ObraTemplateConstants
     */
    private ObraTemplateConstants $obraTemplateConstants;

    public function __construct(CertificacionByCriteriaSearcher $itemsByCriteriaSearcher, CertificacionByCriteriaCounter $counter, TwigTemplateConstants $twigTemplateConstants, ObraFinder $obraFinder, ObraTemplateConstants $obraTemplateConstants)
    {
        $this->itemsByCriteriaSearcher = $itemsByCriteriaSearcher;
        $this->counter                 = $counter;
        $this->twigTemplateConstants   = $twigTemplateConstants;
        $this->obraFinder              = $obraFinder;
        $this->obraTemplateConstants   = $obraTemplateConstants;
    }

    public function __invoke(Request $request): Response
    {
        $obraId  = $request->get('obraId');
        $orderBy = $request->get('orderBy');
        $order   = $request->get('order');
        $page    = (int)$request->get('page');
        $limit   = (int)$request->get('limit');
        $filters = FilterUtils::getFiltersOrEmpyArray($request->get('filters'));

        $defaultFilters = [
            'field'    => 'obra',
            'operator' => '=',
            'value'    => $obraId,
        ];

        array_push($filters, $defaultFilters);

        $offset          = OffsetPaginationUtil::calculate($limit, $page);
        $certificaciones = $this->itemsByCriteriaSearcher->__invoke($filters, $order, $orderBy, $limit, $offset);
        $totalItem       = $this->counter->__invoke($filters, $order, $orderBy, $limit, $offset);

        $obra = $this->obraFinder->__invoke($obraId);

        $totalNumberOfPages = TotalNumberOfPagesUtil::calculate($page, $limit, $totalItem);

        return $this->render($this->twigTemplateConstants::LIST_FILE_PATH, [
            'page_title'                    => $this->twigTemplateConstants::SECTION_TITLE,
            'obra_id'                       => $obraId,
            'delete_confirmation_modal_url' => $this->twigTemplateConstants->getDeleteConfirmationModalUrl(),
            'obra_nombre'                   => $obra->getNombreObra(),
            'list_url'                      => $this->twigTemplateConstants->getListUrl(['obraId' => $obraId]),
            'edit_path'                     => $this->twigTemplateConstants::EDIT_PATH,
            'add_url'                       => $this->twigTemplateConstants->getAddUrl(['obraId' => $obraId]),
            'delete_url'                    => $this->twigTemplateConstants->getDeleteUrl(),
            'list_obra_url'                 => $this->obraTemplateConstants->getListUrl(),
            'orderBy'                       => $orderBy,
            'order'                         => $order,
            'limit'                         => $limit,
            'filters'                       => $request->get('filters'),
            'toggleSort'                    => SortUtils::toggle($orderBy),
            'currentPage'                   => $page,
            'nextPage'                      => NextPage::calculate($page, $totalNumberOfPages),
            'previousPage'                  => PreviousPage::calculate($page),
            'totalPage'                     => $totalNumberOfPages,
            'totalItem'                     => $totalItem,
            'certificaciones'               => $certificaciones
        ]);
    }
}
