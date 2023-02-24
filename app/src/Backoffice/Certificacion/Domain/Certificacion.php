<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Domain;

use App\Backoffice\Obra\Domain\Obra;
use App\Backoffice\Obra\Domain\ObraConstant;
use DateTime;

class Certificacion
{
    private string       $id;
    private ?int         $numeroCertificado;
    private ?DateTime    $fecha;
    private ?string      $expedienteCertificado;
    private ?float       $porcentajeAvanceObra;
    private ?float       $montoPagadoNacion;
    private ?float       $montoPagadoProvincia;
    private ?string      $ubicacion;
    private ?string      $numeroSidif;
    private ?DateTime    $fechaInicioPago;
    private ?DateTime    $fechaFinPago;
    private Obra         $obra;
    private Datetime     $createAt;

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
     * @return null|int
     */
    public function getNumeroCertificado(): ?int
    {
        return $this->numeroCertificado;
    }

    /**
     * @param null|int $numeroCertificado
     */
    public function setNumeroCertificado(?int $numeroCertificado): void
    {
        $this->numeroCertificado = $numeroCertificado;
    }

    /**
     * @return null|DateTime
     */
    public function getFecha(): ?DateTime
    {
        return $this->fecha;
    }

    /**
     * @param null|DateTime $fecha
     */
    public function setFecha(?DateTime $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return null|string
     */
    public function getExpedienteCertificado(): ?string
    {
        return $this->expedienteCertificado;
    }

    /**
     * @param null|string $expedienteCertificado
     */
    public function setExpedienteCertificado(?string $expedienteCertificado): void
    {
        $this->expedienteCertificado = $expedienteCertificado;
    }

    /**
     * @return null|float
     */
    public function getPorcentajeAvanceObra(): ?float
    {
        return $this->porcentajeAvanceObra;
    }

    /**
     * @param null|float $porcentajeAvanceObra
     */
    public function setPorcentajeAvanceObra(?float $porcentajeAvanceObra): void
    {
        $this->porcentajeAvanceObra = $porcentajeAvanceObra;
    }

    /**
     * @return null|float
     */
    public function getMontoPagadoNacion(): ?float
    {
        return $this->montoPagadoNacion;
    }

    /**
     * @param null|float $montoPagadoNacion
     */
    public function setMontoPagadoNacion(?float $montoPagadoNacion): void
    {
        $this->montoPagadoNacion = $montoPagadoNacion;
    }

    /**
     * @return null|float
     */
    public function getMontoPagadoProvincia(): ?float
    {
        return $this->montoPagadoProvincia;
    }

    /**
     * @param null|float $montoPagadoProvincia
     */
    public function setMontoPagadoProvincia(?float $montoPagadoProvincia): void
    {
        $this->montoPagadoProvincia = $montoPagadoProvincia;
    }

    /**
     * @return null|string
     */
    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    /**
     * @param null|string $ubicacion
     */
    public function setUbicacion(?string $ubicacion): void
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * @return null|string
     */
    public function getNumeroSidif(): ?string
    {
        return $this->numeroSidif;
    }

    /**
     * @param null|string $numeroSidif
     */
    public function setNumeroSidif(?string $numeroSidif): void
    {
        $this->numeroSidif = $numeroSidif;
    }

    /**
     * @return null|Datetime
     */
    public function getFechaInicioPago(): ?Datetime
    {
        return $this->fechaInicioPago;
    }

    /**
     * @param null|Datetime $fechaInicioPago
     */
    public function setFechaInicioPago(?Datetime $fechaInicioPago): void
    {
        $this->fechaInicioPago = $fechaInicioPago;
    }

    /**
     * @return null|DateTime
     */
    public function getFechaFinPago(): ?DateTime
    {
        return $this->fechaFinPago;
    }

    /**
     * @param null|DateTime $fechaFinPago
     */
    public function setFechaFinPago(?DateTime $fechaFinPago): void
    {
        $this->fechaFinPago = $fechaFinPago;
    }

    /**
     * @param Obra $obra
     */
    public function setObra(Obra $obra): void
    {
        $this->obra = $obra;
    }

    /**
     * @return Obra
     */
    public function getObra()
    {
        return $this->obra;
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

    /**
     * @return string
     */
    public function getUbicacionDespription():string
    {
        if ($this->ubicacion) {
            return CertificacionConstant::UBICACIONES_DESCRIPTION[$this->ubicacion];
        }

        return '';
    }

    public function getFuenteFinancieraCertificado()
    {
        $fuenteFinanciera = ObraConstant::FUENTE_FINACIERA_SIN_DEFINIR;

        if($this->montoPagadoProvincia && $this->montoPagadoNacion) {
            $fuenteFinanciera = ObraConstant::FUENTE_FINACIERA_NACION_Y_PROVINCIA;
        } elseif($this->montoPagadoProvincia) {
            $fuenteFinanciera = ObraConstant::FUENTE_FINACIERA_PROVINCIA;
        } elseif($this->montoPagadoNacion) {
            $fuenteFinanciera = ObraConstant::FUENTE_FINANCIERA_NACION;
        }

        return ObraConstant::FUENTES_FINANCIERAS_DESCRIPTION[$fuenteFinanciera];
    }

}
