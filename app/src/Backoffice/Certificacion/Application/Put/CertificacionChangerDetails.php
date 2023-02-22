<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Application\Put;

use App\Backoffice\Certificacion\Application\Get\Single\CertificacionFinder;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;


final class CertificacionChangerDetails
{
    private CertificacionRepository                   $repository;
    private CertificacionFinder                       $finder;
    /**
     * @var ObraFinder
     */
    private ObraFinder $obraFinder;

    public function __construct(CertificacionRepository $repository, ObraFinder $obraFinder)
    {
        $this->repository = $repository;
        $this->finder     = new CertificacionFinder($repository);
        $this->obraFinder = $obraFinder;
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
        $fechaFinPago,
        $obraId
    )
    {
        $certificacion = $this->finder->__invoke($id);
        $obra          = $this->obraFinder->__invoke($obraId);


        $fecha           = new \DateTime($fecha);
        $fechaInicioPago = new \DateTime($fechaInicioPago);
        $fechaFinPago    = new \DateTime($fechaFinPago);

        $certificacion->setId($id);
        $certificacion->setNumeroCertificado((int)$numeroCertificado);
        $certificacion->setFecha($fecha);
        $certificacion->setExpedienteCertificado($expedienteCertificado);
        $certificacion->setPorcentajeAvanceObra((float)$porcentajeAvanceObra);
        $certificacion->setMontoPagado((float)$montoPagado);
        $certificacion->setUbicacion($ubicacion);
        $certificacion->setNumeroSidif($numeroSidif);
        $certificacion->setFechaInicioPago($fechaInicioPago);
        $certificacion->setFechaFinPago($fechaFinPago);
        $certificacion->setObra($obra);
        $this->repository->save($certificacion);

        $this->repository->save($certificacion);
    }
}