<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Application\Post;

use App\Backoffice\Certificacion\Domain\Certificacion;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Shared\Domain\ValueObject\Uuid;
use DateTime;


final class CertificacionCreator
{
    private CertificacionRepository $repository;
    /**
     * @var ObraFinder
     */
    private ObraFinder $obraFinder;

    public function __construct(
        CertificacionRepository $repository,
        ObraFinder $obraFinder
    )
    {
        $this->repository = $repository;
        $this->obraFinder = $obraFinder;
    }

    public function __invoke(
        $id,
        $numeroCertificado,
        $fecha,
        $expedienteCertificado,
        $porcentajeAvanceObra,
        $montoPagadoNacion,
        $montoPagadoProvincia,
        $ubicacion,
        $numeroSidif,
        $fechaInicioPago,
        $fechaFinPago,
        $obraId
    )
    {
        $obra            = $this->obraFinder->__invoke($obraId);
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
        $certificacion->setMontoPagadoNacion((float)$montoPagadoNacion);
        $certificacion->setMontoPagadoProvincia((float)$montoPagadoProvincia);
        $certificacion->setUbicacion($ubicacion);
        $certificacion->setNumeroSidif($numeroSidif);
        $certificacion->setFechaInicioPago($fechaInicioPago);
        $certificacion->setFechaFinPago($fechaFinPago);
        $certificacion->setObra($obra);
        $certificacion->setCreateAt($createAt);

        $this->repository->save($certificacion);

    }
}