<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220211206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE obra CHANGE monto_obra monto_obra NUMERIC(12, 2) DEFAULT NULL, CHANGE presupuesto_necesario presupuesto_necesario NUMERIC(12, 2) DEFAULT NULL, CHANGE presupuesto_disponible_regularizado presupuesto_disponible_regularizado NUMERIC(12, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE obra CHANGE monto_obra monto_obra NUMERIC(12, 1) DEFAULT NULL, CHANGE presupuesto_necesario presupuesto_necesario NUMERIC(12, 1) DEFAULT NULL, CHANGE presupuesto_disponible_regularizado presupuesto_disponible_regularizado NUMERIC(12, 1) DEFAULT NULL');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
    }
}
