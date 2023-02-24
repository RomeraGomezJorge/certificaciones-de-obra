<?php

declare(strict_types=1);

namespace App\Backoffice\Certificacion\Domain;

use App\Backoffice\Obra\Domain\Obra;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\ValueObject\Uuid;

interface CertificacionRepository
{
    public function save(Certificacion $certificacion): void;

    public function search(Uuid $id): ?Certificacion;

    public function searchByObra(string $id);

    public function searchAll(): array;

    public function matching(Criteria $criteria, ?Obra $obra): array;

    public function totalMatchingRows(Criteria $criteria, ?Obra $obra): int;

    public function delete(Certificacion $certificacion): void;
}