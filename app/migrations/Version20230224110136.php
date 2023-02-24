<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224110136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('CREATE TABLE empresa (id VARCHAR(36) NOT NULL, nombre VARCHAR(100) NOT NULL, UNIQUE INDEX id (id), UNIQUE INDEX nombre (nombre), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('DROP TABLE role');
        $this->addSql('ALTER TABLE obra ADD empresa_id VARCHAR(36) DEFAULT NULL');
        $this->addSql('ALTER TABLE obra ADD CONSTRAINT FK_2EEE6DBD521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('CREATE INDEX IDX_2EEE6DBD521E1991 ON obra (empresa_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE obra DROP FOREIGN KEY FK_2EEE6DBD521E1991');
        $this->addSql('CREATE TABLE role (id VARCHAR(36) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, UNIQUE INDEX description (description), UNIQUE INDEX id (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE empresa');
        $this->addSql('DROP INDEX IDX_2EEE6DBD521E1991 ON obra');
        $this->addSql('ALTER TABLE obra DROP empresa_id, CHANGE monto_obra monto_obra NUMERIC(12, 2) DEFAULT NULL, CHANGE presupuesto_necesario presupuesto_necesario NUMERIC(12, 2) DEFAULT NULL, CHANGE presupuesto_disponible_regularizado presupuesto_disponible_regularizado NUMERIC(12, 2) DEFAULT NULL');
    }
}
