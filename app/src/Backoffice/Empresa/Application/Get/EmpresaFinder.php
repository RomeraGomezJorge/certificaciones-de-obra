<?php

declare(strict_types=1);

namespace App\Backoffice\Empresa\Application\Get;

use App\Backoffice\Empresa\Domain\Empresa;
use App\Backoffice\Empresa\Domain\EmpresaRepository;
use App\Backoffice\Empresa\Domain\Exception\EmpresaNotExist;


final class EmpresaFinder
{
    const NOT_FOUND = null;
    private EmpresaRepository $repository;

    public function __construct(EmpresaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $id): ?Empresa
    {
        $empresa = $this->repository->search($id);

        if (self::NOT_FOUND === $empresa) {
            throw new EmpresaNotExist($id);
        }

        return $empresa;
    }
}