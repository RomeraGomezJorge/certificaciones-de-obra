<?php

declare(strict_types=1);

namespace App\Backoffice\CertificacionObra\Application\Delete;

use App\Backoffice\CertificacionObra\Application\Get\Single\CertificacionObraFinder;
use App\Backoffice\CertificacionObra\Domain\CertificacionObraRepository;

final class CertificacionObraDeleter
{
	private CertificacionObraRepository $repository;
	private CertificacionObraFinder     $finder;

	public function __construct(
		CertificacionObraRepository $repository
	)
	{
		$this->repository = $repository;
		$this->finder     = new CertificacionObraFinder($repository);
	}

	public function __invoke(string $id)
	{
		$jobDesignation = $this->finder->__invoke($id);

		$this->repository->delete($jobDesignation);
	}
}