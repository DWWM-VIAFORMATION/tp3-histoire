<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230315092151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE histoire (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, editeur VARCHAR(255) NOT NULL, auteur VARCHAR(255) NOT NULL, illustrateur VARCHAR(255) NOT NULL, traducteur VARCHAR(255) NOT NULL, illustration VARCHAR(255) NOT NULL, droits_histoire VARCHAR(255) NOT NULL, droits_images VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, histoire_id INT DEFAULT NULL, num_page INT NOT NULL, nom_fichier VARCHAR(255) NOT NULL, texte VARCHAR(255) NOT NULL, INDEX IDX_140AB6209B94373 (histoire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB6209B94373 FOREIGN KEY (histoire_id) REFERENCES histoire (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB6209B94373');
        $this->addSql('DROP TABLE histoire');
        $this->addSql('DROP TABLE page');
    }
}
