<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Application\Post;

use App\Backoffice\Certificacion\Domain\Certificacion;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;
use App\Shared\Domain\ValueObject\Uuid;
use DateTime;


final class CertificacionCreator
{
    private CertificacionRepository $repository;

    public function __construct(
        CertificacionRepository $repository
    )
    {
        $this->repository = $repository;
    }

    public function __invoke(
        $id,
        $numeroCertificado,
        $fecha,
        $expedienteCertificado,
        $porcentajeAvanceObra,
        $montoPagado,
        $ubicacion,
        $numeroSidif,
        $fechaInicioPago,
        $fechaFinPago
    )
    {
        $certificacion   = new Certificacion();
        $id              = new Uuid($id);
        $createAt        = new DateTime();
        $fecha           = new \DateTime($fecha);
        $fechaInicioPago = new \DateTime($fechaInicioPago);
        $fechaFinPago    = new \DateTime($fechaFinPago);

        $certificacion->setId($id->value());
        $certificacion->setNumeroCertificado((int)$numeroCertificado);
        $certificacion->setFecha($fecha);
        $certificacion->setExpedienteCertificado($expedienteCertificado);
        $certificacion->setPorcentajeAvanceObra((float)$porcentajeAvanceObra);
        $certificacion->setMontoPagado((float)$montoPagado);
        $certificacion->setUbicacion($ubicacion);
        $certificacion->setNumeroSidif($numeroSidif);
        $certificacion->setFechaInicioPago($fechaInicioPago);
        $certificacion->setFechaFinPago($fechaFinPago);
        $certificacion->setCreateAt($createAt);

        $this->repository->save($certificacion);

    }
}