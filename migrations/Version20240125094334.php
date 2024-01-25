<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125094334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (Id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, zammadId INT NOT NULL, organizationId INT NOT NULL, login VARCHAR(180) DEFAULT NULL, email VARCHAR(180) DEFAULT NULL, lastname VARCHAR(180) DEFAULT NULL, roles VARCHAR(150) NOT NULL, secondRole VARCHAR(150) DEFAULT NULL, UNIQUE INDEX UNIQ_C7440455AA08CB10 (login), UNIQUE INDEX UNIQ_C7440455E7927C74 (email), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groups (Id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) DEFAULT NULL, zammadId INT NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE groups');
    }
}
