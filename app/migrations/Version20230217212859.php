<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217212859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE obra (id VARCHAR(36) NOT NULL, nombre_obra VARCHAR(255) DEFAULT NULL, fuente_financiera VARCHAR(4) DEFAULT NULL, codigo_presupuestario INT DEFAULT NULL, expediente_principal VARCHAR(100) DEFAULT NULL, monto_obra NUMERIC(12,1) DEFAULT NULL, presupuesto_necesario NUMERIC(12,1) DEFAULT NULL, presupuesto_disponible_regularizado NUMERIC(12,1) DEFAULT NULL, estado_presupuestario VARCHAR(4) DEFAULT NULL, estado_obra VARCHAR(4) DEFAULT NULL, estado_tramite VARCHAR(255) DEFAULT NULL, create_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE certificacion_obra');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE certificacion_obra (id VARCHAR(36) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nombres VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, apellido VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, numero_obra INT DEFAULT NULL, etapa VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, permite_modificar_computo TINYINT(1) DEFAULT NULL, certificacion_manual TINYINT(1) DEFAULT NULL, ins_graba_cert TINYINT(1) DEFAULT NULL, programa VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, departamento VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, localidad VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, codigo_postal INT DEFAULT NULL, numero_licitacion VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, tipo_licitacion VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, fecha_licitacion DATE DEFAULT NULL, fecha_inicio_obra DATE DEFAULT NULL, plazo INT DEFAULT NULL, contratista VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, anticipo_financiero_nacion NUMERIC(12, 2) DEFAULT NULL, anticipo_financiero_provincia NUMERIC(12, 2) DEFAULT NULL, aporte_nacion NUMERIC(12, 2) DEFAULT NULL, aporte_provincia NUMERIC(12, 2) DEFAULT NULL, ampliacion_monto_nacion NUMERIC(12, 2) DEFAULT NULL, ampliacion_monto_provincia NUMERIC(12, 2) DEFAULT NULL, porcentaje_entrega_nacion NUMERIC(12, 2) DEFAULT NULL, porcentaje_entrega_provincia NUMERIC(12, 2) DEFAULT NULL, coeficiente_activo NUMERIC(12, 2) DEFAULT NULL, porcentaje_reparo NUMERIC(12, 2) DEFAULT NULL, bapin VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, monto_contratado NUMERIC(12, 2) DEFAULT NULL, presupuesto_oficial NUMERIC(12, 2) DEFAULT NULL, costo_obra NUMERIC(12, 2) DEFAULT NULL, create_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE obra');
    }
}
