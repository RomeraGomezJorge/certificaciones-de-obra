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
				'id'                         => new Assert\Uuid(),
				'nombres'                    => [new  Assert\Optional()],
				'apellido'                   => [new  Assert\Optional()],
				'numeroObra'               => [new  Assert\Optional()],
				'etapa'                      => [new  Assert\Optional()],
				'permiteModificarComputo'    => [new  Assert\Optional()],
				'certificacionManual'        => [new  Assert\Optional()],
				'insGrabaCert'               => [new  Assert\Optional()],
				'programa'                   => [new  Assert\Optional()],
				'departamento'               => [new  Assert\Optional()],
				'localidad'                  => [new  Assert\Optional()],
				'codigoPostal'               => [new  Assert\Optional()],
				'numeroLicitacion'           => [new  Assert\Optional()],
				'tipoLicitacion'             => [new  Assert\Optional()],
				'fechaLicitacion'            => [new  Assert\Optional()],
				'inicioObra'                 => [new  Assert\Optional()],
				'plazo'                      => [new  Assert\Optional()],
				'contratista'                => [new  Assert\Optional()],
				'anticipoFinancieroNacion'    => [new  Assert\Optional()],
				'anticipoFinacieroProvincia' => [new  Assert\Optional()],
				'aporteNacion'               => [new  Assert\Optional()],
				'aporteProvincia'            => [new  Assert\Optional()],
				'ampliacionMontoNacion'      => [new  Assert\Optional()],
				'ampliacionMontoProvincia'   => [new  Assert\Optional()],
				'porcentajeEntregaNacion'     => [new  Assert\Optional()],
				'porcentajeEntregaProvincia'  => [new  Assert\Optional()],
				'coeficienteActivo'          => [new  Assert\Optional()],
				'porcentajeReparo'           => [new  Assert\Optional()],
				'bapin'                      => [new  Assert\Optional()],
				'montoContratado'            => [new  Assert\Optional()],
				'presupuestoOficial'         => [new  Assert\Optional()],
				'costoObra'                  => [new  Assert\Optional()],
				'csrf_token'                 => new Assert\NotBlank()

			]
		);

		$input = $request->request->all();

		return $this->validator->validate($input, $constraint);
	}
}