<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Application\Put;

use App\Backoffice\Empresa\Application\Get\EmpresaFinder;
use App\Backoffice\Obra\Application\Get\Single\ObraFinder;
use App\Backoffice\Obra\Domain\ObraRepository;


final class ObraChangerDetails
{
    private ObraRepository                   $repository;
    private ObraFinder                       $finder;
    private EmpresaFinder                    $empresaFinder;

    public function __construct(ObraRepository $repository, EmpresaFinder $empresaFinder)
    {
        $this->repository    = $repository;
        $this->finder        = new ObraFinder($repository);
        $this->empresaFinder = $empresaFinder;
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
        $estadoTramite,
        $empresaId
    )
    {
        $obra    = $this->finder->__invoke($id);
        $empresa = $this->empresaFinder->__invoke($empresaId);

        $obra->setNombreObra($nombreObra);
        $obra->setFuenteFinanciera($fuenteFinanciera);
        $obra->setCodigoPresupuestario($codigoPresupuestario);
        $obra->setExpedientePrincipal($expedientePrincipal);
        $obra->setMontoObra((float)$montoObra);
        $obra->setPresupuestoNecesario((float)$presupuestoNecesario);
        $obra->setPresupuestoDisponibleRegularizado((float)$presupuestoDisponibleRegularizado);
        $obra->setEstadoPresupuestario($estadoPresupuestario);
        $obra->setEstadoObra($estadoObra);
        $obra->setEmpresa($empresa);
        $obra->setEstadoTramite($estadoTramite);

        $this->repository->save($obra);
    }
}