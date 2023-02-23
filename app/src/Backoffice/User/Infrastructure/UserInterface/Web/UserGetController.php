<?php

declare(strict_types=1);

namespace App\Backoffice\User\Infrastructure\UserInterface\Web;

use App\Backoffice\User\Application\Get\Collection\UserByCriteriaCounter;
use App\Backoffice\User\Application\Get\Collection\UsersByCriteriaSearcher;
use App\Backoffice\User\Domain\UserConstants;
use App\Shared\Infrastructure\Symfony\WebController;
use App\Shared\Infrastructure\Utils\FilterUtils;
use App\Shared\Infrastructure\Utils\NextPage;
use App\Shared\Infrastructure\Utils\OffsetPaginationUtil;
use App\Shared\Infrastructure\Utils\PreviousPage;
use App\Shared\Infrastructure\Utils\SortUtils;
use App\Shared\Infrastructure\Utils\TotalNumberOfPagesUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserGetController extends WebController
{
    private UsersByCriteriaSearcher $itemsByCriteriaSearcher;
    private UserByCriteriaCounter   $counter;
    private TwigTemplateConstants   $twigTemplateConstants;

    public function __construct(UsersByCriteriaSearcher $itemsByCriteriaSearcher, UserByCriteriaCounter $counter, TwigTemplateConstants $twigTemplateConstants)
    {
        $this->itemsByCriteriaSearcher = $itemsByCriteriaSearcher;
        $this->counter                 = $counter;
        $this->twigTemplateConstants   = $twigTemplateConstants;
    }

    public function __invoke(Request $request): Response
    {
        $orderBy            = $request->get('orderBy');
        $order              = $request->get('order');
        $page               = (int)$request->get('page');
        $limit              = (int)$request->get('limit');
        $filters            = FilterUtils::getFiltersOrEmpyArray($request->get('filters'));
        $offset             = OffsetPaginationUtil::calculate($limit, $page);
        $users              = $this->itemsByCriteriaSearcher->__invoke($filters, $order, $orderBy, $limit, $offset);
        $totalItem          = $this->counter->__invoke($filters, $order, $orderBy, $limit, $offset);
        $totalNumberOfPages = TotalNumberOfPagesUtil::calculate($page, $limit, $totalItem);

        return $this->render($this->twigTemplateConstants::LIST_FILE_PATH, [
            'page_title'                    => $this->twigTemplateConstants::SECTION_TITLE,
            'list_url'                      => $this->twigTemplateConstants->getListUrl(),
            'edit_path'                     => $this->twigTemplateConstants::EDIT_PATH,
            'add_url'                       => $this->twigTemplateConstants->getAddUrl(),
            'delete_url'                    => $this->twigTemplateConstants->getDeleteUrl(),
            'delete_confirmation_modal_url' => $this->twigTemplateConstants->getDeleteConfirmationModalUrl(),
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
            'roles'                         => UserConstants::ROLES_DESCRIPTION,
            'users'                         => $users
        ]);
    }
}
