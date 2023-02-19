<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Application\Post;

use App\Backoffice\Obra\Domain\Obra;
use App\Backoffice\Obra\Domain\ObraRepository;
use App\Shared\Domain\ValueObject\Uuid;
use DateTime;


final class ObraCreator
{
    private ObraRepository $repository;

    public function __construct(ObraRepository $repository)
    {
        $this->repository = $repository;
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
        $id       = new Uuid($id);
        $createAt = new DateTime();
        $obra     = new Obra();

        $obra->setId($id->value());
        $obra->setNombreObra($nombreObra);
        $obra->setFuenteFinanciera($fuenteFinanciera);
        $obra->setCodigoPresupuestario($codigoPresupuestario);
        $obra->setExpedientePrincipal($expedientePrincipal);
        $obra->setMontoObra((float)$montoObra);
        $obra->setPresupuestoNecesario((float)$presupuestoNecesario);
        $obra->setPresupuestoDisponibleRegularizado((float)$presupuestoDisponibleRegularizado);
        $obra->setEstadoPresupuestario($estadoPresupuestario);
        $obra->setEstadoObra($estadoObra);
        $obra->setEstadoTramite($estadoTramite);
        $obra->setCreateAt($createAt);

        $this->repository->save($obra);
    }
}