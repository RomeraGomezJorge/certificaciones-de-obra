<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227022827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX user_ibfk_1 ON user');
        $this->addSql('ALTER TABLE user ADD role VARCHAR(255) NOT NULL, DROP role_id');
        $this->addSql('UPDATE `user` SET `role` = \'ROLE_ADMIN\' WHERE `user`.`id` = \'47392f60-b214-48de-b7b5-ba45c6c95913\';');
        $this->addSql('UPDATE `user` SET `role` = \'ROLE_ADMIN\' WHERE `user`.`id` = \'b5c8fec1-cb9d-429a-8777-1328a470bedc\';');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE user ADD role_id VARCHAR(36) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, DROP role');
        $this->addSql('CREATE INDEX user_ibfk_1 ON user (role_id)');
    }
}
