<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Infrastructure\UserInterface\Web;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class ValidationRulesToCreateAndUpdate
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function verify($request): ConstraintViolationListInterface
    {
        $constraint = new Assert\Collection(
            [
                'id'                                => [new Assert\Uuid()],
                'nombreObra'                        => [new  Assert\Optional()],
                'fuenteFinanciera'                  => [new  Assert\Optional()],
                'codigoPresupuestario'              => [new  Assert\Optional()],
                'expedientePrincipal'               => [new  Assert\Optional()],
                'montoObra'                         => [new  Assert\Optional(), new Assert\PositiveOrZero()],
                'presupuestoNecesario'              => [new  Assert\Optional(), new Assert\PositiveOrZero()],
                'presupuestoDisponibleRegularizado' => [new  Assert\Optional(), new Assert\PositiveOrZero()],
                'estadoPresupuestario'              => [new  Assert\Optional()],
                'estadoObra'                        => [new  Assert\Optional()],
                'estadoTramite'                     => [new  Assert\Optional()],
                'csrf_token'                        => [new Assert\NotBlank()]

            ]
        );

        $input = $request->request->all();

        return $this->validator->validate($input, $constraint);
    }
}