<?php
declare(strict_types=1);

namespace App\Backoffice\Empresa\Domain;

use App\Backoffice\Empresa\Domain\ValueObject\RoleId;
use App\Shared\Domain\Aggregate\AggregateRoot;

class Empresa extends AggregateRoot
{
    private string $id;
    private string $nombre;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function nombre(): string
    {
        return $this->nombre;
    }

    public function setDescription(string $nombre): void
    {
        $this->nombre = $nombre;
    }
}
