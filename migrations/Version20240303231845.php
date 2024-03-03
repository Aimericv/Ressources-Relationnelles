<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240303231845 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Remove favorite_user table and add user_id column to favorite table';
    }

    public function up(Schema $schema): void
    {
        // Suppression de la table favorite_user
        $this->addSql('DROP TABLE IF EXISTS favorite_user');

        // Ajout de la colonne user_id à la table favorite
        $this->addSql('ALTER TABLE favorite ADD user_id INT NOT NULL');

        // Ajout de la contrainte de clé étrangère à la colonne user_id
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_favorite_user_id FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // Suppression de la contrainte de clé étrangère
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_favorite_user_id');

        // Suppression de la colonne user_id de la table favorite
        $this->addSql('ALTER TABLE favorite DROP COLUMN user_id');

        // Recréation de la table favorite_user (optionnel, selon les besoins)
        $this->addSql('CREATE TABLE favorite_user (
            id INT AUTO_INCREMENT NOT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }
}
