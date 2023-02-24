<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224195020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion ADD monto_pagado_provincia NUMERIC(12, 2) DEFAULT NULL, CHANGE monto_pagado monto_pagado_nacion NUMERIC(12, 2) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion ADD monto_pagado NUMERIC(12, 2) DEFAULT NULL, DROP monto_pagado_nacion, DROP monto_pagado_provincia');
    }
}
