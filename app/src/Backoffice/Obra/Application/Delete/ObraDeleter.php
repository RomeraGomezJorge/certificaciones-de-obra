<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Application\Delete;

use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Domain\ObraRepository;

final class ObraDeleter
{
    private ObraRepository              $repository;
    private ObraFinder                  $finder;

    public function __construct(ObraRepository $repository)
    {
        $this->repository = $repository;
        $this->finder     = new ObraFinder($repository);
    }

    public function __invoke(string $id)
    {
        $obra = $this->finder->__invoke($id);

        $this->repository->delete($obra);
    }
}