<?php

declare(strict_types=1);

namespace App\Backoffice\CertificacionObra\Application\Post;

use App\Backoffice\CertificacionObra\Domain\CertificacionObra;
use App\Backoffice\CertificacionObra\Domain\CertificacionObraRepository;
use App\Shared\Domain\ValueObject\Uuid;
use DateTime;


final class CertificacionObraCreator
{
    private CertificacionObraRepository $repository;

    public function __construct(
        CertificacionObraRepository $repository
    )
    {
        $this->repository = $repository;
    }

    public function __invoke(
        $id,
        $nombres,
        $apellido,
        $numeroObra,
        $etapa,
        $permiteModificarComputo,
        $certificacionManual,
        $insGrabaCert,
        $programa,
        $departamento,
        $localidad,
        $codigoPostal,
        $numeroLicitacion,
        $tipoLicitacion,
        $fechaLicitacion,
        $fechaInicioObra,
        $plazo,
        $contratista,
        $anticipoFinancieroNacion,
        $anticipoFinancieroProvincia,
        $aporteNacion,
        $aporteProvincia,
        $ampliacionMontoNacion,
        $ampliacionMontoProvincia,
        $porcentajeEntregaNacion,
        $porcentajeEntregaProvincia,
        $coeficienteActivo,
        $porcentajeReparo,
        $bapin,
        $montoContratado,
        $presupuestoOficial,
        $costoObra
    )
    {
        $id                = new Uuid($id);
        $createAt          = new DateTime();
        $certificacionObra = new CertificacionObra();
        $fechaLicitacion   = new \DateTime($fechaLicitacion);
        $fechaInicioObra   = new \DateTime($fechaInicioObra);

        $certificacionObra->setId($id->value());
        $certificacionObra->setNombres($nombres);
        $certificacionObra->setApellido($apellido);
        $certificacionObra->setNumeroObra((int)$numeroObra);
        $certificacionObra->setEtapa($etapa);
        $certificacionObra->setPermiteModificarComputo((bool)$permiteModificarComputo);
        $certificacionObra->setCertificacionManual((bool)$certificacionManual);
        $certificacionObra->setInsGrabaCert((bool)$insGrabaCert);
        $certificacionObra->setPrograma($programa);
        $certificacionObra->setDepartamento($departamento);
        $certificacionObra->setLocalidad($localidad);
        $certificacionObra->setCodigoPostal((int)$codigoPostal);
        $certificacionObra->setNumeroLicitacion($numeroLicitacion);
        $certificacionObra->setTipoLicitacion($tipoLicitacion);
        $certificacionObra->setFechaLicitacion($fechaLicitacion);
        $certificacionObra->setFechaInicioObra($fechaInicioObra);
        $certificacionObra->setPlazo((int)$plazo);
        $certificacionObra->setContratista($contratista);
        $certificacionObra->setanticipoFinancieroNacion((float)$anticipoFinancieroNacion);
        $certificacionObra->setanticipoFinancieroProvincia((float)$anticipoFinancieroProvincia);
        $certificacionObra->setAporteNacion((float)$aporteNacion);
        $certificacionObra->setAporteProvincia((float)$aporteProvincia);
        $certificacionObra->setAmpliacionMontoNacion((float)$ampliacionMontoNacion);
        $certificacionObra->setAmpliacionMontoProvincia((float)$ampliacionMontoProvincia);
        $certificacionObra->setporcentajeEntregaNacion((float)$porcentajeEntregaNacion);
        $certificacionObra->setporcentajeEntregaProvincia((float)$porcentajeEntregaProvincia);
        $certificacionObra->setCoeficienteActivo((float)$coeficienteActivo);
        $certificacionObra->setPorcentajeReparo((float)$porcentajeReparo);
        $certificacionObra->setBapin($bapin);
        $certificacionObra->setMontoContratado((float)$montoContratado);
        $certificacionObra->setPresupuestoOficial((float)$presupuestoOficial);
        $certificacionObra->setCostoObra((float)$costoObra);
        $certificacionObra->setCreateAt($createAt);

        $this->repository->save($certificacionObra);

    }
}