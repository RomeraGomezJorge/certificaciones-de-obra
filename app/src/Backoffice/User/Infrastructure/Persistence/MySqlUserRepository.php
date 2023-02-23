<?php

declare(strict_types=1);

namespace App\Backoffice\User\Infrastructure\Persistence;

use App\Backoffice\User\Domain\User;
use App\Backoffice\User\Domain\UserRepository;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\ValueObject\Uuid;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineCriteriaConverter;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

final class MySqlUserRepository extends DoctrineRepository implements UserRepository
{
    const NOT_FOUND         = null;
    const ENTITY_CLASS      = User::class;
    const NOT_SETTING_VALUE = null;
    private ?int $totalMatchingRows = null;

    public function save(User $user): void
    {
        $this->persist($user);
    }

    public function search(Uuid $id): ?User
    {
        return $this->repository(self::ENTITY_CLASS)->find($id);
    }

    public function searchByEmail(string $email): ?User
    {
        return $this->repository(self::ENTITY_CLASS)->findOneBy(['email' => $email]);
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
        $doctrineCriteria = DoctrineCriteriaConverter::convert($criteria);

        $matching = $this->repository(self::ENTITY_CLASS)->matching($doctrineCriteria);

        $this->totalMatchingRows = $matching->count();

        return $matching->toArray();
    }

    public function totalMatchingRows(Criteria $criteria): int
    {
        if ($this->totalMatchingRows === self::NOT_SETTING_VALUE) {
            $this->matching($criteria);
            return $this->totalMatchingRows;
        }

        return $this->totalMatchingRows;
    }

    public function delete(User $user): void
    {
        $this->remove($user);
    }
}