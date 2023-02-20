<?php
	
	declare(strict_types=1);
	
	namespace App\Backoffice\Certificacion\Infrastructure\Persistence;
	
	use App\Backoffice\Certificacion\Domain\Certificacion;
	use App\Backoffice\Certificacion\Domain\CertificacionRepository;
	use App\Shared\Domain\Criteria\Criteria;
	use App\Shared\Domain\ValueObject\Uuid;
	use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineCriteriaConverter;
	use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;
	use Doctrine\Common\Collections\Collection;
	
	final class MySqlCertificacionRepository extends DoctrineRepository implements CertificacionRepository
	{
		const NOT_SETTING_VALUE = null;
		const ENTITY_CLASS = Certificacion::class;
		private ?int $totalMatchingRows = null;
		
		public function save(Certificacion $certificacion): void
		{
			$this->persist($certificacion);
		}
		
		public function search(Uuid $id): ?Certificacion
		{
			return $this->repository(self::ENTITY_CLASS)->find($id);
		}
		
		public function searchAll(): array
		{
			return $this->repository(self::ENTITY_CLASS)->findAll();
		}
		
		public function isAvailable(array $criteria): bool
		{
			return !((bool)$this->repository(self::ENTITY_CLASS)->findOneBy($criteria));
		}
		
		public function matching(Criteria $criteria): array
		{
			$matching = $this->getMatchingFrom($criteria);
			
			$this->totalMatchingRows = $matching->count();
			
			return $matching->toArray();
		}
		
		private function getMatchingFrom(Criteria $criteria): Collection
		{
			$doctrineCriteria = DoctrineCriteriaConverter::convert($criteria);
			
			return $this->repository(self::ENTITY_CLASS)->matching($doctrineCriteria);
		}
		
		public function totalMatchingRows(Criteria $criteria): int
		{
			if ($this->totalMatchingRows === self::NOT_SETTING_VALUE) {
				return $this->getMatchingFrom($criteria)->count();
			}
			
			return $this->totalMatchingRows;
		}
		
		public function delete(Certificacion $certificacion): void
		{
			$this->remove($certificacion);
		}
	}