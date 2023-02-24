<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224110138 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
    $this->addSql('INSERT INTO `empresa` (id,nombre) VALUES ("22845217-4c05-45db-8249-446a29870d4c","Metropolitano S.r.l."),
    ("4b610749-300f-4f11-9a8d-e546868d260f","Aymara S.r.l."),
    ("12095d24-b412-43e2-85b9-b55db5cc2fbb","Riec Sa"),
    ("4a00188b-88cc-41de-9fce-ab7d4ed5f5b7","Efede S.r.l."),
    ("d8f37dd8-c6d4-4fd4-9f72-e5e6de2b99ab","Cyse S.r.l."),
    ("6c7c06ff-00d8-493a-93d6-79c51c77c89c","Fercon S.r.l."),
    ("e9706cb7-705f-496f-bda9-37100ce6a5c6","Estructuras S.r.l."),
    ("b39d4fc0-4d2b-4604-abff-7de009e544d2","Lyc S.r.l."),
    ("f769cfa4-a2be-4cce-a93d-b14887d9bd96","Grava S.r.l."),
    ("99d57107-129b-4f6f-a5f8-571a6b2f6ea0","Rodriguez Obras Y Servicios Sr"),
    ("5560f865-1881-4ff6-8527-1565d813d78b","Alejandro Fabro S.r.l."),
    ("35cb453c-0bad-4e36-80e0-cb345e2f0cba","Eco Construcciones"),
    ("7bba9385-ccc3-48ed-8af3-dd87eb8cf0d6","Bosetti Y Cia S.a"),
    ("31585ad9-231d-4184-a765-f7e629d06fb6","Infraestructura Y Servicios S.r.l."),
    ("9b68f04e-1440-4f71-aeea-20be54e5ad69","Maggiora Sa"),
    ("e08256d3-a675-45ce-85bb-8f53e7e1c4a7","Debrandi Enrique Julio"),
    ("ac849e8a-e585-46f7-9b34-c17895fce456","Diez De Ezequiel Eyzaguirre"),
    ("3e15e164-2028-4439-9f63-781c223e333a","Construcciones Gabriel De Lionel E. Flores"),
    ("39156cbd-843a-4d83-a6fc-3068f7e079fd","Arkikon"),
    ("d09b849c-8716-47b1-ae64-5018dc16dca8","Bf Construcciones"),
    ("b60e16d0-5746-481b-9166-075745abff03","Cruz Construcciones S.r.l."),
    ("3630b0aa-d94b-45a2-83e0-7a138b99e78b","Servicios S.r.l."),
    ("55beaa70-69cb-4ea1-91aa-15d45c47479c","Riojavial S.r.l."),
    ("49b68dee-21f6-46b7-8b6c-cc7f31cb4a7d","Radar Compañía Constructora S.a."),
    ("3e990e34-05fb-40b6-a254-ecec5e94c180","Ha Obras Y Servicos"),
    ("c4aa0435-464a-4fbc-b6a4-658ea447cf6d","A.d Vision S.a.s"),
    ("e80bbbca-22b6-4654-967d-57330f1e10eb","Pilartec S.r.l."),
    ("e70783d5-7d05-4408-aaf8-ac1ca8f9fdaa","A Definir")');

    }

    public function down(Schema $schema): void
    {

    }
}
