<?php

declare(strict_types=1);

namespace App\Backoffice\Empresa\Domain\Exception;

use App\Shared\Domain\DomainError;

final class EmpresaNotExist extends DomainError
{
    private string $id;

    public function __construct($id)
    {
        $this->id = $id;

        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'empresa_not_exist';
    }

    protected function errorMessage(): string
    {
        return sprintf('La empresa con el id "%s" no existe!', $this->id);
    }
}