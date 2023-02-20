<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230219012540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE certificacion (id VARCHAR(36) NOT NULL, numero_certificado INT DEFAULT NULL, fecha DATE DEFAULT NULL, expediente_certificado VARCHAR(255) DEFAULT NULL, porcentaje_avance_obra INT DEFAULT NULL, monto_pagado NUMERIC(12,2) DEFAULT NULL, ubicacion VARCHAR(255) DEFAULT NULL, numero_sidif VARCHAR(255) DEFAULT NULL, fecha_inicio_pago DATE DEFAULT NULL, fecha_fin_pago DATE DEFAULT NULL, create_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE certificacion');
    }
}
