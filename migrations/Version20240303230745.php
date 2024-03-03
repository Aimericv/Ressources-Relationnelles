<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class VersionYYYYMMDDHHMMSS extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Drop the table user_participation';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS user_participation');
    }

    public function down(Schema $schema): void
    {
        // Revert the changes if needed
    }
}
