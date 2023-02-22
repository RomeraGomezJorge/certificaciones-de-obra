<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Application\Get\Collection;

use App\Backoffice\Certificacion\Domain\CertificacionRepository;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Shared\Application\Get\Collection\GetEntityFromFilterOrNull;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\Criteria\Filters;
use App\Shared\Domain\Criteria\Order;
use App\Shared\Infrastructure\Utils\FilterUtilsForAssociationField;

final class CertificacionByCriteriaCounter
{
    private CertificacionRepository            $repository;
    private ObraFinder                         $obraFinder;
    private GetEntityFromFilterOrNull          $getEntityFromFilterOrNull;

    public function __construct(CertificacionRepository $repository, ObraFinder $obraFinder, GetEntityFromFilterOrNull $getEntityFromFilterOrNull)
    {
        $this->repository                = $repository;
        $this->obraFinder                = $obraFinder;
        $this->getEntityFromFilterOrNull = $getEntityFromFilterOrNull;
    }

    public function __invoke($filters, $order, $orderBy, ?int $limit, ?int $offset): int
    {
        $obra     = $this->getEntityFromFilterOrNull->__invoke($filters, $this->obraFinder, 'obra');
        $filters  = FilterUtilsForAssociationField::removeFilterEqualsTo(['obra'], $filters);
        $filters  = Filters::fromValues($filters);
        $order    = Order::fromValues($order, $orderBy);
        $criteria = new Criteria($filters, $order, $offset, $limit);

        return $this->repository->totalMatchingRows($criteria, $obra);
    }
}