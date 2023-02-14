<?php
	
	declare(strict_types=1);
	
	namespace App\Backoffice\CertificacionObra\Domain;
	
	use App\Shared\Domain\Criteria\Criteria;
	use App\Shared\Domain\ValueObject\Uuid;
	
	interface CertificacionObraRepository
	{
		public function save(CertificacionObra $jobDesignation): void;
		
		public function search(Uuid $id): ?CertificacionObra;
		
		public function searchAll(): array;
		
		public function matching(Criteria $criteria): array;
		
		public function totalMatchingRows(Criteria $criteria): int;
		
		public function delete(CertificacionObra $jobDesignation): void;
		
		public function isAvailable(array $criteria): bool;
	}