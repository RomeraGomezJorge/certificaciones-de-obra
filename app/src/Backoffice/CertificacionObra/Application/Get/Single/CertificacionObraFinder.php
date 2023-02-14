<?php
	
	declare(strict_types=1);
	
	namespace App\Backoffice\CertificacionObra\Application\Get\Single;
	
	use App\Backoffice\CertificacionObra\Domain\CertificacionObra;
	use App\Backoffice\CertificacionObra\Domain\CertificacionObraRepository;
	use App\Backoffice\CertificacionObra\Domain\Exception\JobDesignationNotExist;
  use App\Shared\Application\Get\Collection\Finder;
  use App\Shared\Domain\ValueObject\Uuid;
	
	final class CertificacionObraFinder implements Finder
	{
		const NOT_FOUND = null;
		private CertificacionObraRepository $repository;
		
		public function __construct(CertificacionObraRepository $repository)
		{
			$this->repository = $repository;
		}
		
		public function __invoke(string $id): CertificacionObra
		{
			$id = new Uuid($id);
			
			$jobDesignation = $this->repository->search($id);
			
			if (self::NOT_FOUND === $jobDesignation) {
				throw new JobDesignationNotExist(($id)->value());
			}
			
			return $jobDesignation;
		}
	}