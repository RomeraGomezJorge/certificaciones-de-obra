<?php

declare(strict_types=1);

namespace App\Backoffice\CertificacionObra\Domain;

use DateTime;

class CertificacionObra
{
	private string   $id;
	private string   $nombres;
	private string   $apellido;
	private int      $numeroObra;
	private string   $etapa;
	private bool     $permiteModificarComputo;
	private bool     $certificacionManual;
	private bool     $insGrabaCert;
	private string   $programa;
	private string   $departamento;
	private string   $localidad;
	private int      $codigoPostal;
	private string   $numeroLicitacion;
	private string   $tipoLicitacion;
	private DateTime $fechaLicitacion;
	private DateTime $fechaInicioObra;
	private int      $plazo;
	private string   $contratista;
	private float    $anticipoFinancieroNacion;
	private float    $anticipoFinancieroProvincia;
	private float    $aporteNacion;
	private float    $aporteProvincia;
	private float    $ampliacionMontoNacion;
	private float    $ampliacionMontoProvincia;
	private float    $porcentajeEntregaNacion;
	private float    $porcentajeEntregaProvincia;
	private float    $coeficienteActivo;
	private float    $porcentajeReparo;
	private string   $bapin;
	private float    $montoContratado;
	private float    $presupuestoOficial;
	private float    $costoObra;
	private Datetime $createAt;

	/**
	 * @return string
	 */
	public function getId(): string
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId(string $id): void
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getNombres(): string
	{
		return $this->nombres;
	}

	/**
	 * @param string $nombres
	 */
	public function setNombres(string $nombres): void
	{
		$this->nombres = $nombres;
	}

	/**
	 * @return string
	 */
	public function getApellido(): string
	{
		return $this->apellido;
	}

	/**
	 * @param string $apellido
	 */
	public function setApellido(string $apellido): void
	{
		$this->apellido = $apellido;
	}

	/**
	 * @return int
	 */
	public function getNumeroObra(): int
	{
		return $this->numeroObra;
	}

	/**
	 * @param int $numeroObra
	 */
	public function setNumeroObra(int $numeroObra): void
	{
		$this->numeroObra = $numeroObra;
	}

	/**
	 * @return string
	 */
	public function getEtapa(): string
	{
		return $this->etapa;
	}

	/**
	 * @param string $etapa
	 */
	public function setEtapa(string $etapa): void
	{
		$this->etapa = $etapa;
	}

	/**
	 * @return bool
	 */
	public function getPermiteModificarComputo(): bool
	{
		return $this->permiteModificarComputo;
	}

	/**
	 * @param bool $permiteModificarComputo
	 */
	public function setPermiteModificarComputo(bool $permiteModificarComputo): void
	{
		$this->permiteModificarComputo = $permiteModificarComputo;
	}

	/**
	 * @return bool
	 */
	public function getCertificacionManual(): bool
	{
		return $this->certificacionManual;
	}

	/**
	 * @param bool $certificacionManual
	 */
	public function setCertificacionManual(bool $certificacionManual): void
	{
		$this->certificacionManual = $certificacionManual;
	}

	/**
	 * @return bool
	 */
	public function getInsGrabaCert(): bool
	{
		return $this->insGrabaCert;
	}

	/**
	 * @param bool $insGrabaCert
	 */
	public function setInsGrabaCert(bool $insGrabaCert): void
	{
		$this->insGrabaCert = $insGrabaCert;
	}

	/**
	 * @return string
	 */
	public function getPrograma(): string
	{
		return $this->programa;
	}

	/**
	 * @param string $programa
	 */
	public function setPrograma(string $programa): void
	{
		$this->programa = $programa;
	}

	/**
	 * @return string
	 */
	public function getDepartamento(): string
	{
		return $this->departamento;
	}

	/**
	 * @param string $departamento
	 */
	public function setDepartamento(string $departamento): void
	{
		$this->departamento = $departamento;
	}

	/**
	 * @return string
	 */
	public function getLocalidad(): string
	{
		return $this->localidad;
	}

	/**
	 * @param string $localidad
	 */
	public function setLocalidad(string $localidad): void
	{
		$this->localidad = $localidad;
	}

	/**
	 * @return int
	 */
	public function getCodigoPostal(): int
	{
		return $this->codigoPostal;
	}

	/**
	 * @param int $codigoPostal
	 */
	public function setCodigoPostal(int $codigoPostal): void
	{
		$this->codigoPostal = $codigoPostal;
	}

	/**
	 * @return string
	 */
	public function getNumeroLicitacion(): string
	{
		return $this->numeroLicitacion;
	}

	/**
	 * @param string $numeroLicitacion
	 */
	public function setNumeroLicitacion(string $numeroLicitacion): void
	{
		$this->numeroLicitacion = $numeroLicitacion;
	}

	/**
	 * @return string
	 */
	public function getTipoLicitacion(): string
	{
		return $this->tipoLicitacion;
	}

	/**
	 * @param string $tipoLicitacion
	 */
	public function setTipoLicitacion(string $tipoLicitacion): void
	{
		$this->tipoLicitacion = $tipoLicitacion;
	}

	/**
	 * @return DateTime
	 */
	public function getFechaLicitacion(): DateTime
	{
		return $this->fechaLicitacion;
	}

	/**
	 * @param DateTime $fechaLicitacion
	 */
	public function setFechaLicitacion(DateTime $fechaLicitacion): void
	{
		$this->fechaLicitacion = $fechaLicitacion;
	}

	/**
	 * @return DateTime
	 */
	public function getFechaInicioObra(): DateTime
	{
		return $this->fechaInicioObra;
	}

	/**
	 * @param DateTime $fechaInicioObra
	 */
	public function setFechaInicioObra(DateTime $fechaInicioObra): void
	{
		$this->fechaInicioObra = $fechaInicioObra;
	}

	/**
	 * @return int
	 */
	public function getPlazo(): int
	{
		return $this->plazo;
	}

	/**
	 * @param int $plazo
	 */
	public function setPlazo(int $plazo): void
	{
		$this->plazo = $plazo;
	}

	/**
	 * @return string
	 */
	public function getContratista(): string
	{
		return $this->contratista;
	}

	/**
	 * @param string $contratista
	 */
	public function setContratista(string $contratista): void
	{
		$this->contratista = $contratista;
	}

	/**
	 * @return float
	 */
	public function getAnticipoFinancieroNacion(): float
	{
		return $this->anticipoFinancieroNacion;
	}

	/**
	 * @param float $anticipoFinancieroNacion
	 */
	public function setAnticipoFinancieroNacion(float $anticipoFinancieroNacion): void
	{
		$this->anticipoFinancieroNacion = $anticipoFinancieroNacion;
	}

	/**
	 * @return float
	 */
	public function getAnticipoFinancieroProvincia(): float
	{
		return $this->anticipoFinancieroProvincia;
	}

	/**
	 * @param float $anticipoFinancieroProvincia
	 */
	public function setAnticipoFinancieroProvincia(float $anticipoFinancieroProvincia): void
	{
		$this->anticipoFinancieroProvincia = $anticipoFinancieroProvincia;
	}

	/**
	 * @return float
	 */
	public function getAporteNacion(): float
	{
		return $this->aporteNacion;
	}

	/**
	 * @param float $aporteNacion
	 */
	public function setAporteNacion(float $aporteNacion): void
	{
		$this->aporteNacion = $aporteNacion;
	}

	/**
	 * @return float
	 */
	public function getAporteProvincia(): float
	{
		return $this->aporteProvincia;
	}

	/**
	 * @param float $aporteProvincia
	 */
	public function setAporteProvincia(float $aporteProvincia): void
	{
		$this->aporteProvincia = $aporteProvincia;
	}

	/**
	 * @return float
	 */
	public function getAmpliacionMontoNacion(): float
	{
		return $this->ampliacionMontoNacion;
	}

	/**
	 * @param float $ampliacionMontoNacion
	 */
	public function setAmpliacionMontoNacion(float $ampliacionMontoNacion): void
	{
		$this->ampliacionMontoNacion = $ampliacionMontoNacion;
	}

	/**
	 * @return float
	 */
	public function getAmpliacionMontoProvincia(): float
	{
		return $this->ampliacionMontoProvincia;
	}

	/**
	 * @param float $ampliacionMontoProvincia
	 */
	public function setAmpliacionMontoProvincia(float $ampliacionMontoProvincia): void
	{
		$this->ampliacionMontoProvincia = $ampliacionMontoProvincia;
	}

	/**
	 * @return float
	 */
	public function getPorcentajeEntregaNacion(): float
	{
		return $this->porcentajeEntregaNacion;
	}

	/**
	 * @param float $porcentajeEntregaNacion
	 */
	public function setPorcentajeEntregaNacion(float $porcentajeEntregaNacion): void
	{
		$this->porcentajeEntregaNacion = $porcentajeEntregaNacion;
	}

	/**
	 * @return float
	 */
	public function getPorcentajeEntregaProvincia(): float
	{
		return $this->porcentajeEntregaProvincia;
	}

	/**
	 * @param float $porcentajeEntregaProvincia
	 */
	public function setPorcentajeEntregaProvincia(float $porcentajeEntregaProvincia): void
	{
		$this->porcentajeEntregaProvincia = $porcentajeEntregaProvincia;
	}

	/**
	 * @return float
	 */
	public function getCoeficienteActivo(): float
	{
		return $this->coeficienteActivo;
	}

	/**
	 * @param float $coeficienteActivo
	 */
	public function setCoeficienteActivo(float $coeficienteActivo): void
	{
		$this->coeficienteActivo = $coeficienteActivo;
	}

	/**
	 * @return float
	 */
	public function getPorcentajeReparo(): float
	{
		return $this->porcentajeReparo;
	}

	/**
	 * @param float $porcentajeReparo
	 */
	public function setPorcentajeReparo(float $porcentajeReparo): void
	{
		$this->porcentajeReparo = $porcentajeReparo;
	}

	/**
	 * @return string
	 */
	public function getBapin(): string
	{
		return $this->bapin;
	}

	/**
	 * @param string $bapin
	 */
	public function setBapin(string $bapin): void
	{
		$this->bapin = $bapin;
	}

	/**
	 * @return float
	 */
	public function getMontoContratado(): float
	{
		return $this->montoContratado;
	}

	/**
	 * @param float $montoContratado
	 */
	public function setMontoContratado(float $montoContratado): void
	{
		$this->montoContratado = $montoContratado;
	}

	/**
	 * @return float
	 */
	public function getPresupuestoOficial(): float
	{
		return $this->presupuestoOficial;
	}

	/**
	 * @param float $presupuestoOficial
	 */
	public function setPresupuestoOficial(float $presupuestoOficial): void
	{
		$this->presupuestoOficial = $presupuestoOficial;
	}

	/**
	 * @return float
	 */
	public function getCostoObra(): float
	{
		return $this->costoObra;
	}

	/**
	 * @param float $costoObra
	 */
	public function setCostoObra(float $costoObra): void
	{
		$this->costoObra = $costoObra;
	}

	/**
	 * @return DateTime
	 */
	public function getCreateAt(): DateTime
	{
		return $this->createAt;
	}

	/**
	 * @param DateTime $createAt
	 */
	public function setCreateAt(DateTime $createAt): void
	{
		$this->createAt = $createAt;
	}





}
