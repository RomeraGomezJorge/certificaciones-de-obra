<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Application\Get\Collection\CertificacionByCriteriaCounter;
use App\Backoffice\Certificacion\Application\Get\Collection\CertificacionByCriteriaSearcher;
use App\Backoffice\Obra\Infrastructure\UserInterface\Web\TwigTemplateConstants;
use App\Backoffice\Obra\Domain\ObraConstant;
use App\Shared\Infrastructure\Constant\FormConstant;
use App\Shared\Infrastructure\RamseyUuidGenerator;
use App\Shared\Infrastructure\Symfony\FlashSession;
use App\Shared\Infrastructure\Symfony\WebController;
use App\Shared\Infrastructure\UserInterface\Web\TwigTemplateGlobalConstants;
use App\Shared\Infrastructure\Utils\FilterUtils;
use App\Shared\Infrastructure\Utils\NextPage;
use App\Shared\Infrastructure\Utils\OffsetPaginationUtil;
use App\Shared\Infrastructure\Utils\PreviousPage;
use App\Shared\Infrastructure\Utils\SortUtils;
use App\Shared\Infrastructure\Utils\TotalNumberOfPagesUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObraAddController extends WebController
{
    public function __invoke(
        Request $request,
        FlashSession $flashSession,
        RamseyUuidGenerator $ramseyUuidGenerator,
        CertificacionByCriteriaSearcher $itemsByCriteriaSearcher,
        CertificacionByCriteriaCounter $counter
    ): Response
    {
        $orderBy = '';

        $order = '';

        $page = 1;

        $limit = 100;

        $filters = FilterUtils::getFiltersOrEmpyArray($request->get('filters'));

        $certificaciones = $itemsByCriteriaSearcher->__invoke($filters, $order, $orderBy, $limit,
            OffsetPaginationUtil::calculate($limit, $page));

        $totalItem = $counter->__invoke($filters, $order, $orderBy, $limit,
            OffsetPaginationUtil::calculate($limit, $page));

        $totalNumberOfPages = TotalNumberOfPagesUtil::calculate($page, $limit, $totalItem);

        return $this->render(TwigTemplateConstants::FORM_FILE_PATH, [
            'list_path'                         => TwigTemplateConstants::LIST_PATH,
            'page_title'                        => TwigTemplateConstants::SECTION_TITLE,
            'id'                                => $ramseyUuidGenerator->generate(),
            'nombreObra'                        => $flashSession->get('inputs.nombreObra'),
            'fuenteFinanciera'                  => $flashSession->get('inputs.fuenteFinanciera'),
            'codigoPresupuestario'              => $flashSession->get('inputs.codigoPresupuestario'),
            'expedientePrincipal'               => $flashSession->get('inputs.expedientePrincipal'),
            'montoObra'                         => $flashSession->get('inputs.montoObra'),
            'presupuestoNecesario'              => $flashSession->get('inputs.presupuestoNecesario'),
            'presupuestoDisponibleRegularizado' => $flashSession->get('inputs.presupuestoDisponibleRegularizado'),
            'estadoPresupuestario'              => $flashSession->get('inputs.estadoPresupuestario'),
            'estadoObra'                        => $flashSession->get('inputs.estadoObra'),
            'estadoTramite'                     => $flashSession->get('inputs.estadoTramite'),
            'fuente_financiera_choices'         => ObraConstant::FUENTES_FINANCIERAS_DESCRIPTION,
            'estado_presupuestario_choices'     => ObraConstant::ESTADOS_PRESUPUESTARIOS_DESCRIPTION,
            'estado_obra_choices'               => ObraConstant::ESTADOS_OBRA_DESCRIPTION,
            'form_action_attribute'             => TwigTemplateConstants::CREATE_PATH,
            'submit_button_label'               => FormConstant::SUBMIT_BUTTON_VALUE_TO_CREATE,
            'action_to_do'                      => FormConstant::CREATE_LABEL_TEXT,
            'edit_path'                         => TwigTemplateConstants::EDIT_PATH,
            'add_path'                          => TwigTemplateConstants::ADD_PATH,
            'delete_path'                       => TwigTemplateConstants::DELETE_PATH,
            'delete_confirmation_modal_path'    => TwigTemplateGlobalConstants::DELETE_CONFIRMATION_MODAL_PATH,
            'orderBy'                           => $orderBy,
            'order'                             => $order,
            'limit'                             => $limit,
            'filters'                           => $request->get('filters'),
            'toggleSort'                        => SortUtils::toggle($orderBy),
            'currentPage'                       => $page,
            'nextPage'                          => NextPage::calculate($page, $totalNumberOfPages),
            'previousPage'                      => PreviousPage::calculate($page),
            'totalPage'                         => $totalNumberOfPages,
            'totalItem'                         => $totalItem,
            'certificaciones'                   => $certificaciones
        ]);
    }
}
