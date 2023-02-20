<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Application\Put;

use App\Backoffice\Certificacion\Application\Get\Single\CertificacionFinder;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;


final class CertificacionChangerDetails
{
    private CertificacionRepository                   $repository;
    private CertificacionFinder                       $finder;

    public function __construct(CertificacionRepository $repository
    )
    {
        $this->repository = $repository;
        $this->finder     = new CertificacionFinder($repository);
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
        $certificacion = $this->finder->__invoke($id);

        $fechaInicioPago = new \DateTime($fechaInicioPago);
        $fechaFinPago    = new \DateTime($fechaFinPago);

        $certificacion->setId($id->value());
        $certificacion->setNumeroCertificado($numeroCertificado);
        $certificacion->setFecha($fecha);
        $certificacion->setExpedienteCertificado($expedienteCertificado);
        $certificacion->setPorcentajeAvanceObra($porcentajeAvanceObra);
        $certificacion->setMontoPagado((float)$montoPagado);
        $certificacion->setUbicacion($ubicacion);
        $certificacion->setNumeroSidif($numeroSidif);
        $certificacion->setFechaInicioPago($fechaInicioPago);
        $certificacion->setFechaFinPago($fechaFinPago);
        $this->repository->save($certificacion);

        $this->repository->save($certificacion);
    }
}