<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201210429 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE help_entity DROP FOREIGN KEY FK_CA2E9610A76ED395');
        $this->addSql('DROP INDEX IDX_CA2E9610A76ED395 ON help_entity');
        $this->addSql('ALTER TABLE help_entity ADD email VARCHAR(100) NOT NULL, DROP user_id, CHANGE answer answer VARCHAR(255) NOT NULL, CHANGE status status SMALLINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE help_entity ADD user_id INT DEFAULT NULL, DROP email, CHANGE answer answer VARCHAR(255) DEFAULT NULL, CHANGE status status SMALLINT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE help_entity ADD CONSTRAINT FK_CA2E9610A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CA2E9610A76ED395 ON help_entity (user_id)');
    }
}
