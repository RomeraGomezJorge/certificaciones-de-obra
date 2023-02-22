<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\UserInterface\Web;

use App\Backoffice\Certificacion\Domain\CertificacionConstant;
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
                'id'                    => [new Assert\Uuid()],
                'obraId'                    => [new Assert\Uuid()],
                'numeroCertificado'     => [new Assert\Optional()],
                'fecha'                 => [new Assert\Optional(new Assert\Date())],
                'expedienteCertificado' => [new Assert\Optional()],
                'porcentajeAvanceObra'  => [new Assert\Range(['min' => 0, 'max' => 100])],
                'montoPagado'           => [new Assert\Optional(new Assert\PositiveOrZero())],
                'ubicacion'             => [new Assert\Optional(new Assert\Choice(array_keys(CertificacionConstant::UBICACIONES_DESCRIPTION)))],
                'numeroSidif'           => [new Assert\Optional()],
                'fechaInicioPago'       => [new Assert\Optional(new Assert\Date())],
                'fechaFinPago'          => [new Assert\Optional(new Assert\Date())],
                'csrf_token'            => [new Assert\NotBlank()]
            ]
        );

        $input = $request->request->all();

        return $this->validator->validate($input, $constraint);
    }
}