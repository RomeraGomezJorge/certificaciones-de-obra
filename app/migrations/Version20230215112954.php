<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215112954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion_obra CHANGE anticipo_financiero_nacion anticipo_financiero_nacion NUMERIC(12, 2) DEFAULT NULL, CHANGE anticipo_financiero_provincia anticipo_financiero_provincia NUMERIC(12,2) DEFAULT NULL, CHANGE aporte_nacion aporte_nacion NUMERIC(12,2) DEFAULT NULL, CHANGE aporte_provincia aporte_provincia NUMERIC(12,2) DEFAULT NULL, CHANGE ampliacion_monto_nacion ampliacion_monto_nacion NUMERIC(12,2) DEFAULT NULL, CHANGE ampliacion_monto_provincia ampliacion_monto_provincia NUMERIC(12,2) DEFAULT NULL, CHANGE porcentaje_entrega_nacion porcentaje_entrega_nacion NUMERIC(12,2) DEFAULT NULL, CHANGE porcentaje_entrega_provincia porcentaje_entrega_provincia NUMERIC(12,2) DEFAULT NULL, CHANGE coeficiente_activo coeficiente_activo NUMERIC(12,2) DEFAULT NULL, CHANGE porcentaje_reparo porcentaje_reparo NUMERIC(12,2) DEFAULT NULL, CHANGE monto_contratado monto_contratado NUMERIC(12,2) DEFAULT NULL, CHANGE presupuesto_oficial presupuesto_oficial NUMERIC(12,2) DEFAULT NULL, CHANGE costo_obra costo_obra NUMERIC(12,2) DEFAULT NULL, CHANGE insgrabacert ins_graba_cert TINYINT(1) DEFAULT NULL, CHANGE codigopostal codigo_postal INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificacion_obra CHANGE anticipo_financiero_nacion anticipo_financiero_nacion NUMERIC(12, 2) DEFAULT NULL, CHANGE anticipo_financiero_provincia anticipo_financiero_provincia NUMERIC(12, 2) DEFAULT NULL, CHANGE aporte_nacion aporte_nacion NUMERIC(12, 2) DEFAULT NULL, CHANGE aporte_provincia aporte_provincia NUMERIC(12, 2) DEFAULT NULL, CHANGE ampliacion_monto_nacion ampliacion_monto_nacion NUMERIC(12, 2) DEFAULT NULL, CHANGE ampliacion_monto_provincia ampliacion_monto_provincia NUMERIC(12, 2) DEFAULT NULL, CHANGE porcentaje_entrega_nacion porcentaje_entrega_nacion NUMERIC(12, 2) DEFAULT NULL, CHANGE porcentaje_entrega_provincia porcentaje_entrega_provincia NUMERIC(12, 2) DEFAULT NULL, CHANGE coeficiente_activo coeficiente_activo NUMERIC(12, 2) DEFAULT NULL, CHANGE porcentaje_reparo porcentaje_reparo NUMERIC(12, 2) DEFAULT NULL, CHANGE monto_contratado monto_contratado NUMERIC(12, 2) DEFAULT NULL, CHANGE presupuesto_oficial presupuesto_oficial NUMERIC(12, 2) DEFAULT NULL, CHANGE costo_obra costo_obra INT DEFAULT NULL, CHANGE ins_graba_cert insGrabaCert TINYINT(1) DEFAULT NULL, CHANGE codigo_postal codigoPostal INT DEFAULT NULL');
    }
}
