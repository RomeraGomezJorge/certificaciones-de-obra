<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Domain\Exception;

use App\Shared\Domain\DomainError;

final class CertificacionNotExist extends DomainError
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;

        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'certificacion_not_exist';
    }

    protected function errorMessage(): string
    {
        return sprintf('The job designation <%s> does not exist', $this->id);
    }
}