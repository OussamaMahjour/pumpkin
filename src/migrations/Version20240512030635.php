<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240512030635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inbox (id INT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT UNSIGNED DEFAULT NULL, admin_id INT UNSIGNED DEFAULT NULL, add_date DATETIME NOT NULL, seen TINYINT(1) NOT NULL, message VARCHAR(255) NOT NULL, INDEX IDX_7E11F339A76ED395 (user_id), INDEX IDX_7E11F339642B8210 (admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inbox ADD CONSTRAINT FK_7E11F339A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE inbox ADD CONSTRAINT FK_7E11F339642B8210 FOREIGN KEY (admin_id) REFERENCES admins (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inbox DROP FOREIGN KEY FK_7E11F339A76ED395');
        $this->addSql('ALTER TABLE inbox DROP FOREIGN KEY FK_7E11F339642B8210');
        $this->addSql('DROP TABLE inbox');
    }
}
