<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Domain;

use App\Backoffice\Obra\Domain\Obra;
use DateTime;

class Certificacion
{
    private string       $id;
    private ?int         $numeroCertificado;
    private ?DateTime    $fecha;
    private ?string      $expedienteCertificado;
    private ?float       $porcentajeAvanceObra;
    private ?float       $montoPagado;
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
     * @return ?int
     */
    public function getNumeroCertificado(): ?int
    {
        return $this->numeroCertificado;
    }

    /**
     * @param ?int $numeroCertificado
     */
    public function setNumeroCertificado(?int $numeroCertificado): void
    {
        $this->numeroCertificado = $numeroCertificado;
    }

    /**
     * @return ?DateTime
     */
    public function getFecha(): ?DateTime
    {
        return $this->fecha;
    }

    /**
     * @param ?DateTime $fecha
     */
    public function setFecha(?DateTime $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return ?string
     */
    public function getExpedienteCertificado(): ?string
    {
        return $this->expedienteCertificado;
    }

    /**
     * @param ?string $expedienteCertificado
     */
    public function setExpedienteCertificado(?string $expedienteCertificado): void
    {
        $this->expedienteCertificado = $expedienteCertificado;
    }

    /**
     * @return ?float
     */
    public function getPorcentajeAvanceObra(): ?float
    {
        return $this->porcentajeAvanceObra;
    }

    /**
     * @param ?float $porcentajeAvanceObra
     */
    public function setPorcentajeAvanceObra(?float $porcentajeAvanceObra): void
    {
        $this->porcentajeAvanceObra = $porcentajeAvanceObra;
    }

    /**
     * @return ?float
     */
    public function getMontoPagado(): ?float
    {
        return $this->montoPagado;
    }

    /**
     * @param ?float $montoPagado
     */
    public function setMontoPagado(?float $montoPagado): void
    {
        $this->montoPagado = $montoPagado;
    }

    /**
     * @return ?string
     */
    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    /**
     * @param ?string $ubicacion
     */
    public function setUbicacion(?string $ubicacion): void
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * @return ?string
     */
    public function getNumeroSidif(): ?string
    {
        return $this->numeroSidif;
    }

    /**
     * @param ?string $numeroSidif
     */
    public function setNumeroSidif(?string $numeroSidif): void
    {
        $this->numeroSidif = $numeroSidif;
    }

    /**
     * @return ?Datetime
     */
    public function getFechaInicioPago(): ?Datetime
    {
        return $this->fechaInicioPago;
    }

    /**
     * @param ?Datetime $fechaInicioPago
     */
    public function setFechaInicioPago(?Datetime $fechaInicioPago): void
    {
        $this->fechaInicioPago = $fechaInicioPago;
    }

    /**
     * @return ?DateTime
     */
    public function getFechaFinPago(): ?DateTime
    {
        return $this->fechaFinPago;
    }

    /**
     * @param ?DateTime $fechaFinPago
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

}
