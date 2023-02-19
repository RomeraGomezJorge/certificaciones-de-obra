<?php

declare(strict_types=1);

namespace App\Backoffice\Obra\Application\Get\Single;

use App\Backoffice\Obra\Domain\Obra;
use App\Backoffice\Obra\Domain\ObraRepository;
use App\Backoffice\Obra\Domain\Exception\ObraNotExist;
use App\Shared\Application\Get\Collection\Finder;
use App\Shared\Domain\ValueObject\Uuid;

final class ObraFinder implements Finder
{
    const NOT_FOUND = null;
    private ObraRepository $repository;

    public function __construct(ObraRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $id): Obra
    {
        $id = new Uuid($id);

        $obra = $this->repository->search($id);

        if (self::NOT_FOUND === $obra) {
            throw new ObraNotExist(($id)->value());
        }

        return $obra;
    }
}