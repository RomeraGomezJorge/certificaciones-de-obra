<?php

declare(strict_types=1);

namespace App\Backoffice\Empresa\Infrastructure\Persistence;

use App\Backoffice\Empresa\Domain\Empresa;
use App\Backoffice\Empresa\Domain\EmpresaRepository;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

final class MySqlEmpresaRepository extends DoctrineRepository implements EmpresaRepository
{


    public function search(string $id): ?Empresa
    {
        return $this->repository(Empresa::class)->find($id);
    }

    public function searchAll(): array
    {
        return $this->repository(Empresa::class)->findAll();
    }
}