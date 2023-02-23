<?php

declare(strict_types=1);

namespace App\Backoffice\User\Application\Get\Collection;

use App\Backoffice\User\Domain\UserRepository;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\Criteria\Filters;
use App\Shared\Domain\Criteria\Order;

final class UserByCriteriaCounter
{
    private UserRepository     $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($filters, $order, $orderBy, ?int $limit, ?int $offset): int
    {
        $filters  = Filters::fromValues($filters);
        $order    = Order::fromValues($order, $orderBy);
        $criteria = new Criteria($filters, $order, $offset, $limit);

        return $this->repository->totalMatchingRows($criteria);
    }
}