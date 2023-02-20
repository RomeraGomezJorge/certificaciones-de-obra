<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Application\Delete;

use App\Backoffice\Certificacion\Application\Get\Single\CertificacionFinder;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;

final class CertificacionDeleter
{
	private CertificacionRepository $repository;
	private CertificacionFinder     $finder;

	public function __construct(
        CertificacionRepository $repository
	)
	{
		$this->repository = $repository;
		$this->finder     = new CertificacionFinder($repository);
	}

	public function __invoke(string $id)
	{
		$certificacion = $this->finder->__invoke($id);

		$this->repository->delete($certificacion);
	}
}