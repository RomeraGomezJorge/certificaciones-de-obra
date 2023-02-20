<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Application\Get\Single;

use App\Backoffice\Certificacion\Domain\Certificacion;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;
use App\Backoffice\Certificacion\Domain\Exception\CertificacionNotExist;
use App\Shared\Application\Get\Collection\Finder;
use App\Shared\Domain\ValueObject\Uuid;

final class CertificacionFinder implements Finder
{
    const NOT_FOUND = null;
    private CertificacionRepository $repository;

    public function __construct(CertificacionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $id): Certificacion
    {
        $id = new Uuid($id);

        $certificacion = $this->repository->search($id);

        if (self::NOT_FOUND === $certificacion) {
            throw new CertificacionNotExist(($id)->value());
        }

        return $certificacion;
    }
}