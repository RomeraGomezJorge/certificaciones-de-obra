<?php

declare(strict_types=1);

namespace App\Backoffice\CertificacionObra\Infrastructure\UserInterface\Web;

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
                'id'                          => new Assert\Uuid(),
                'nombres'                     => [new  Assert\Optional()],
                'apellido'                    => [new  Assert\Optional()],
                'numeroObra'                  => [new  Assert\Optional(), new Assert\Positive()],
                'etapa'                       => [new  Assert\Optional()],
                'permiteModificarComputo'     => [new  Assert\Optional(), new Assert\Choice(['0', '1'])],
                'certificacionManual'         => [new  Assert\Optional(), new Assert\Choice(['0', '1'])],
                'insGrabaCert'                => [new  Assert\Optional(), new Assert\Choice(['0', '1'])],
                'programa'                    => [new  Assert\Optional()],
                'departamento'                => [new  Assert\Optional()],
                'localidad'                   => [new  Assert\Optional()],
                'codigoPostal'                => [new  Assert\Optional(), new Assert\Positive()],
                'numeroLicitacion'            => [new  Assert\Optional()],
                'tipoLicitacion'              => [new  Assert\Optional()],
                'fechaLicitacion'             => [new  Assert\Optional(), new Assert\Date()],
                'fechaInicioObra'             => [new  Assert\Optional(), new Assert\Date()],
                'plazo'                       => [new  Assert\Optional(), new Assert\Positive()],
                'contratista'                 => [new  Assert\Optional()],
                'anticipoFinancieroNacion'    => [new  Assert\Optional(),new Assert\Positive()],
                'anticipoFinancieroProvincia' => [new  Assert\Optional(),new Assert\Positive()],
                'aporteNacion'                => [new  Assert\Optional(),new Assert\Positive()],
                'aporteProvincia'             => [new  Assert\Optional(),new Assert\Positive()],
                'ampliacionMontoNacion'       => [new  Assert\Optional(),new Assert\Positive()],
                'ampliacionMontoProvincia'    => [new  Assert\Optional(),new Assert\Positive()],
                'porcentajeEntregaNacion'     => [new  Assert\Optional(),new Assert\Positive()],
                'porcentajeEntregaProvincia'  => [new  Assert\Optional(),new Assert\Positive()],
                'coeficienteActivo'           => [new  Assert\Optional()],
                'porcentajeReparo'            => [new  Assert\Optional()],
                'bapin'                       => [new  Assert\Optional()],
                'montoContratado'             => [new  Assert\Optional()],
                'presupuestoOficial'          => [new  Assert\Optional(),new Assert\Positive()],
                'costoObra'                   => [new  Assert\Optional(),new Assert\Positive()],
                'csrf_token'                  => new Assert\NotBlank()

            ]
        );

        $input = $request->request->all();

        return $this->validator->validate($input, $constraint);
    }
}