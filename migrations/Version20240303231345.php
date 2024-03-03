<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240303231345 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table user_participation';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE user_participation (
            id INT AUTO_INCREMENT NOT NULL,
            post_id INT NOT NULL,
            user_id INT NOT NULL,
            PRIMARY KEY(id),
            INDEX IDX_user_table_post_id (post_id),
            INDEX IDX_user_table_user_id (user_id),
            CONSTRAINT FK_user_table_post_id FOREIGN KEY (post_id) REFERENCES post (id),
            CONSTRAINT FK_user_table_user_id FOREIGN KEY (user_id) REFERENCES user (id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // Revert the changes if needed
    }
}
