<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230223121231 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion DROP FOREIGN KEY FK_A1F202533C2672C8');
        $this->addSql('ALTER TABLE certificacion ADD CONSTRAINT FK_A1F202533C2672C8 FOREIGN KEY (obra_id) REFERENCES obra (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion DROP FOREIGN KEY FK_A1F202533C2672C8');
        $this->addSql('ALTER TABLE certificacion ADD CONSTRAINT FK_A1F202533C2672C8 FOREIGN KEY (obra_id) REFERENCES obra (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
