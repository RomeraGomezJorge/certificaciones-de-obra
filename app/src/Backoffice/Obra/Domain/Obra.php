<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Domain;

use DateTime;

class Obra
{
    private string      $id;
    private string      $nombreObra;
    private string      $fuenteFinanciera;
    private string      $codigoPresupuestario;
    private string      $expedientePrincipal;
    private float       $montoObra;
    private float       $presupuestoNecesario;
    private float       $presupuestoDisponibleRegularizado;
    private string      $estadoPresupuestario;
    private string      $estadoObra;
    private string      $estadoTramite;
    private Datetime    $createAt;

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
    public function getNombreObra(): string
    {
        return $this->nombreObra;
    }

    /**
     * @param string $nombreObra
     */
    public function setNombreObra(string $nombreObra): void
    {
        $this->nombreObra = $nombreObra;
    }

    /**
     * @return string
     */
    public function getFuenteFinanciera(): string
    {
        return $this->fuenteFinanciera;
    }

    /**
     * @param string $fuenteFinanciera
     */
    public function setFuenteFinanciera(string $fuenteFinanciera): void
    {
        $this->fuenteFinanciera = $fuenteFinanciera;
    }

    /**
     * @return string
     */
    public function getCodigoPresupuestario(): string
    {
        return $this->codigoPresupuestario;
    }

    /**
     * @param string $codigoPresupuestario
     */
    public function setCodigoPresupuestario(string $codigoPresupuestario): void
    {
        $this->codigoPresupuestario = $codigoPresupuestario;
    }

    /**
     * @return string
     */
    public function getExpedientePrincipal(): string
    {
        return $this->expedientePrincipal;
    }

    /**
     * @param string $expedientePrincipal
     */
    public function setExpedientePrincipal(string $expedientePrincipal): void
    {
        $this->expedientePrincipal = $expedientePrincipal;
    }

    /**
     * @return float
     */
    public function getMontoObra(): float
    {
        return $this->montoObra;
    }

    /**
     * @param float $montoObra
     */
    public function setMontoObra(float $montoObra): void
    {
        $this->montoObra = $montoObra;
    }

    /**
     * @return float
     */
    public function getPresupuestoNecesario(): float
    {
        return $this->presupuestoNecesario;
    }

    /**
     * @param float $presupuestoNecesario
     */
    public function setPresupuestoNecesario(float $presupuestoNecesario): void
    {
        $this->presupuestoNecesario = $presupuestoNecesario;
    }

    /**
     * @return float
     */
    public function getPresupuestoDisponibleRegularizado(): float
    {
        return $this->presupuestoDisponibleRegularizado;
    }

    /**
     * @param float $presupuestoDisponibleRegularizado
     */
    public function setPresupuestoDisponibleRegularizado(float $presupuestoDisponibleRegularizado): void
    {
        $this->presupuestoDisponibleRegularizado = $presupuestoDisponibleRegularizado;
    }

    /**
     * @return string
     */
    public function getEstadoPresupuestario(): string
    {
        return $this->estadoPresupuestario;
    }

    /**
     * @param string $estadoPresupuestario
     */
    public function setEstadoPresupuestario(string $estadoPresupuestario): void
    {
        $this->estadoPresupuestario = $estadoPresupuestario;
    }

    /**
     * @return string
     */
    public function getEstadoObra(): string
    {
        return $this->estadoObra;
    }

    /**
     * @param string $estadoObra
     */
    public function setEstadoObra(string $estadoObra): void
    {
        $this->estadoObra = $estadoObra;
    }

    /**
     * @return string
     */
    public function getEstadoTramite(): string
    {
        return $this->estadoTramite;
    }

    /**
     * @param string $estadoTramite
     */
    public function setEstadoTramite(string $estadoTramite): void
    {
        $this->estadoTramite = $estadoTramite;
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
