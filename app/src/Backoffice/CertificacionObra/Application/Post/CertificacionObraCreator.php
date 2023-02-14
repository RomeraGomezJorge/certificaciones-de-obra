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
		$inicioObra,
		$plazo,
		$contratista,
		$anticipoFinancieroNacion,
		$anticipoFinacieroProvincia,
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
		$id = new Uuid($id);

		$createAt = new DateTime();

		$certificacionObra = new CertificacionObra();

		$certificacionObra->setId($id->value());
		$certificacionObra->setNombres($nombres);
		$certificacionObra->setApellido($apellido);
		$certificacionObra->setnumeroObra($numeroObra);
		$certificacionObra->setEtapa($etapa);
		$certificacionObra->setPermiteModificarComputo($permiteModificarComputo);
		$certificacionObra->setCertificacionManual($certificacionManual);
		$certificacionObra->setInsGrabaCert($insGrabaCert);
		$certificacionObra->setPrograma($programa);
		$certificacionObra->setDepartamento($departamento);
		$certificacionObra->setLocalidad($localidad);
		$certificacionObra->setCodigoPostal($codigoPostal);
		$certificacionObra->setNumeroLicitacion($numeroLicitacion);
		$certificacionObra->setTipoLicitacion($tipoLicitacion);
		$certificacionObra->setFechaLicitacion($fechaLicitacion);
		$certificacionObra->setInicioObra($inicioObra);
		$certificacionObra->setPlazo($plazo);
		$certificacionObra->setContratista($contratista);
		$certificacionObra->setanticipoFinancieroNacion($anticipoFinancieroNacion);
		$certificacionObra->setAnticipoFinacieroProvincia($anticipoFinacieroProvincia);
		$certificacionObra->setAporteNacion($aporteNacion);
		$certificacionObra->setAporteProvincia($aporteProvincia);
		$certificacionObra->setAmpliacionMontoNacion($ampliacionMontoNacion);
		$certificacionObra->setAmpliacionMontoProvincia($ampliacionMontoProvincia);
		$certificacionObra->setporcentajeEntregaNacion($porcentajeEntregaNacion);
		$certificacionObra->setporcentajeEntregaProvincia($porcentajeEntregaProvincia);
		$certificacionObra->setCoeficienteActivo($coeficienteActivo);
		$certificacionObra->setPorcentajeReparo($porcentajeReparo);
		$certificacionObra->setBapin($bapin);
		$certificacionObra->setMontoContratado($montoContratado);
		$certificacionObra->setPresupuestoOficial($presupuestoOficial);
		$certificacionObra->setCostoObra($costoObra);
		$certificacionObra->setCreateAt($createAt);

		$this->repository->save($certificacionObra);

	}
}