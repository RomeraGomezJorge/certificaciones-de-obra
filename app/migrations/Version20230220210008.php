<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220210008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion ADD obra_id VARCHAR(36) DEFAULT NULL');
        $this->addSql('ALTER TABLE certificacion ADD CONSTRAINT FK_A1F202533C2672C8 FOREIGN KEY (obra_id) REFERENCES obra (id)');
        $this->addSql('CREATE INDEX IDX_A1F202533C2672C8 ON certificacion (obra_id)');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion DROP FOREIGN KEY FK_A1F202533C2672C8');
        $this->addSql('DROP INDEX IDX_A1F202533C2672C8 ON certificacion');
        $this->addSql('ALTER TABLE certificacion DROP obra_id, CHANGE monto_pagado monto_pagado NUMERIC(12, 2) DEFAULT NULL');

    }
}
