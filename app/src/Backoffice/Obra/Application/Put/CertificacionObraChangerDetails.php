<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Application\Put;

use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Domain\ObraRepository;


final class CertificacionObraChangerDetails
{
    private ObraRepository                   $repository;
    private ObraFinder                       $finder;

    public function __construct(ObraRepository $repository
    )
    {
        $this->repository = $repository;
        $this->finder     = new ObraFinder($repository);
    }

    public function __invoke(
        $id,
        $nombreObra,
        $fuenteFinanciera,
        $codigoPresupuestario,
        $expedientePrincipal,
        $montoObra,
        $presupuestoNecesario,
        $presupuestoDisponibleRegularizado,
        $estadoPresupuestario,
        $estadoObra,
        $estadoTramite
    )
    {
        $obra = $this->finder->__invoke($id);

        $obra->setNombreObra($nombreObra);
        $obra->setFuenteFinanciera($fuenteFinanciera);
        $obra->setCodigoPresupuestario($codigoPresupuestario);
        $obra->setExpedientePrincipal($expedientePrincipal);
        $obra->setMontoObra($montoObra);
        $obra->setPresupuestoNecesario($presupuestoNecesario);
        $obra->setPresupuestoDisponibleRegularizado($presupuestoDisponibleRegularizado);
        $obra->setEstadoPresupuestario($estadoPresupuestario);
        $obra->setEstadoObra($estadoObra);
        $obra->setEstadoTramite($estadoTramite);


        $this->repository->save($obra);
    }
}