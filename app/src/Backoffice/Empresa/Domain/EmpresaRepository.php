<?php

declare(strict_types=1);

namespace App\Backoffice\Empresa\Domain;

interface EmpresaRepository
{
    public function search(string $id): ?Empresa;

    public function searchAll(): array;
}