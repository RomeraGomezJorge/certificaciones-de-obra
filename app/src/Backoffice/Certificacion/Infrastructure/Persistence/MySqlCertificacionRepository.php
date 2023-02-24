<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Infrastructure\Persistence;

use App\Backoffice\Certificacion\Domain\Certificacion;
use App\Backoffice\Certificacion\Domain\CertificacionRepository;
use App\Backoffice\Obra\Domain\Obra;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\ValueObject\Uuid;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineCriteriaConverter;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria as DoctrineCriteria;


final class MySqlCertificacionRepository extends DoctrineRepository implements CertificacionRepository
{
    const NOT_SETTING_VALUE          = null;
    const ENTITY_CLASS               = Certificacion::class;
    const IS_NOT_DEFINED_AS_A_FILTER = NULL;
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

    public function searchByObra(string $id)
    {
        return $this->repository(self::ENTITY_CLASS)
            ->createQueryBuilder('c')
            ->innerJoin('c.obra','o')
            ->andWhere('o = :id')->setParameter(':id', $id)
            ->getQuery()
            ->getResult();
    }

    public function matching(Criteria $criteria, ?Obra $obra): array
    {
        $doctrineCriteria        = DoctrineCriteriaConverter::convert($criteria);
        $doctrineCriteria        = $this->addAnAssociationAsCriteria($doctrineCriteria, $obra, 'obra');
        $matching                = $this->repository(self::ENTITY_CLASS)->matching($doctrineCriteria);
        $this->totalMatchingRows = $matching->count();

        return $matching->toArray();
    }

    private function addAnAssociationAsCriteria(DoctrineCriteria $doctrineCriteria, $entity, $fieldName): DoctrineCriteria
    {
        if ($entity === self::IS_NOT_DEFINED_AS_A_FILTER) {
            return $doctrineCriteria;
        }

        return $doctrineCriteria->andWhere(DoctrineCriteria::expr()->eq($fieldName, $entity));
    }

    private function getMatchingFrom(Criteria $criteria): Collection
    {
        $doctrineCriteria = DoctrineCriteriaConverter::convert($criteria);

        return $this->repository(self::ENTITY_CLASS)->matching($doctrineCriteria);
    }

    public function totalMatchingRows(Criteria $criteria, ?Obra $obra): int
    {
        if ($this->totalMatchingRows === self::NOT_SETTING_VALUE) {
             $this->matching($criteria,$obra);
        }

        return $this->totalMatchingRows;
    }

    public function delete(Certificacion $certificacion): void
    {
        $this->remove($certificacion);
    }
}