<?php
	
	declare(strict_types=1);
	
	namespace App\Backoffice\Obra\Domain;
	
	use App\Shared\Domain\Criteria\Criteria;
	use App\Shared\Domain\ValueObject\Uuid;
	
	interface ObraRepository
	{
		public function save(Obra $obra): void;
		
		public function search(Uuid $id): ?Obra;
		
		public function searchAll(): array;
		
		public function matching(Criteria $criteria): array;
		
		public function totalMatchingRows(Criteria $criteria): int;
		
		public function delete(Obra $obra): void;
		
		public function isAvailable(array $criteria): bool;
	}