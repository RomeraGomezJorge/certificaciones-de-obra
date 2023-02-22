<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Domain;

use App\Backoffice\Certificacion\Domain\Certificacion;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Obra
{
    private string                     $id;
    private ?string                    $nombreObra;
    private ?string                    $fuenteFinanciera;
    private ?string                    $codigoPresupuestario;
    private ?string                    $expedientePrincipal;
    private ?float                     $montoObra;
    private ?float                     $presupuestoNecesario;
    private ?float                     $presupuestoDisponibleRegularizado;
    private ?string                    $estadoPresupuestario;
    private ?string                    $estadoObra;
    private ?string                    $estadoTramite;
    private ?Collection                $certificaciones;
    private Datetime                   $createAt;

    public function __construct()
    {
        $this->certificaciones = new ArrayCollection();
    }

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
     * @return string|null
     */
    public function getNombreObra(): ?string
    {
        return $this->nombreObra;
    }

    /**
     * @param null|string $nombreObra
     */
    public function setNombreObra(?string $nombreObra): void
    {
        $this->nombreObra = $nombreObra;
    }

    /**
     * @return string|null
     */
    public function getFuenteFinanciera(): ?string
    {
        return $this->fuenteFinanciera;
    }

    /**
     * @param null|string $fuenteFinanciera
     */
    public function setFuenteFinanciera(?string $fuenteFinanciera): void
    {
        $this->fuenteFinanciera = $fuenteFinanciera;
    }

    /**
     * @return string|null
     */
    public function getCodigoPresupuestario(): ?string
    {
        return $this->codigoPresupuestario;
    }

    /**
     * @param null|string $codigoPresupuestario
     */
    public function setCodigoPresupuestario(?string $codigoPresupuestario): void
    {
        $this->codigoPresupuestario = $codigoPresupuestario;
    }

    /**
     * @return string|null
     */
    public function getExpedientePrincipal(): ?string
    {
        return $this->expedientePrincipal;
    }

    /**
     * @param null|string $expedientePrincipal
     */
    public function setExpedientePrincipal(?string $expedientePrincipal): void
    {
        $this->expedientePrincipal = $expedientePrincipal;
    }

    /**
     * @return float|null
     */
    public function getMontoObra(): ?float
    {
        return $this->montoObra;
    }

    /**
     * @param null|float $montoObra
     */
    public function setMontoObra(?float $montoObra): void
    {
        $this->montoObra = $montoObra;
    }

    /**
     * @return float|null
     */
    public function getPresupuestoNecesario(): ?float
    {
        return $this->presupuestoNecesario;
    }

    /**
     * @param null|float $presupuestoNecesario
     */
    public function setPresupuestoNecesario(?float $presupuestoNecesario): void
    {
        $this->presupuestoNecesario = $presupuestoNecesario;
    }

    /**
     * @return float|null
     */
    public function getPresupuestoDisponibleRegularizado(): ?float
    {
        return $this->presupuestoDisponibleRegularizado;
    }

    /**
     * @param null|float $presupuestoDisponibleRegularizado
     */
    public function setPresupuestoDisponibleRegularizado(?float $presupuestoDisponibleRegularizado): void
    {
        $this->presupuestoDisponibleRegularizado = $presupuestoDisponibleRegularizado;
    }

    /**
     * @return string|null
     */
    public function getEstadoPresupuestario(): ?string
    {
        return $this->estadoPresupuestario;
    }

    /**
     * @param null|string $estadoPresupuestario
     */
    public function setEstadoPresupuestario(?string $estadoPresupuestario): void
    {
        $this->estadoPresupuestario = $estadoPresupuestario;
    }

    /**
     * @return string|null
     */
    public function getEstadoObra(): ?string
    {
        return $this->estadoObra;
    }

    /**
     * @param null|string $estadoObra
     */
    public function setEstadoObra(?string $estadoObra): void
    {
        $this->estadoObra = $estadoObra;
    }

    /**
     * @return string|null
     */
    public function getEstadoTramite(): ?string
    {
        return $this->estadoTramite;
    }

    /**
     * @param null|string $estadoTramite
     */
    public function setEstadoTramite(?string $estadoTramite): void
    {
        $this->estadoTramite = $estadoTramite;
    }

//    /**
//     * @param null|ArrayCollection $certificaciones
//     */
//    public function setCertificaciones(?ArrayCollection $certificaciones): void
//    {
//        $this->certificaciones = $certificaciones;
//    }
//
//
//    /**
//     * @return null|ArrayCollection
//     */
//    public function getCertificaciones(): ?ArrayCollection
//    {
//        return $this->certificaciones;
//    }

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
