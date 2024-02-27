<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240227194318 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F5B7AF75');
        $this->addSql('CREATE TABLE admin_comment (id INT AUTO_INCREMENT NOT NULL, admin_id INT NOT NULL, post_id INT NOT NULL, user_id INT NOT NULL, content VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_5048D0E5642B8210 (admin_id), INDEX IDX_5048D0E54B89032C (post_id), INDEX IDX_5048D0E5A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, post_id INT NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_9474526CA76ED395 (user_id), INDEX IDX_9474526C4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment_response (id INT AUTO_INCREMENT NOT NULL, comment_id INT NOT NULL, comment_to_comment_id INT NOT NULL, INDEX IDX_233F68FDF8697D13 (comment_id), INDEX IDX_233F68FDF1767B23 (comment_to_comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favorite (id INT AUTO_INCREMENT NOT NULL, post_id INT NOT NULL, INDEX IDX_68C58ED94B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favorite_user (favorite_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_6395CF76AA17481D (favorite_id), INDEX IDX_6395CF76A76ED395 (user_id), PRIMARY KEY(favorite_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE follow (id INT AUTO_INCREMENT NOT NULL, follower_id INT NOT NULL, following_id INT NOT NULL, INDEX IDX_68344470AC24F853 (follower_id), INDEX IDX_683444701816E3A3 (following_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_participation (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_participation_user (user_participation_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_FDA38FFB17DB79AE (user_participation_id), INDEX IDX_FDA38FFBA76ED395 (user_id), PRIMARY KEY(user_participation_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_participation_post (user_participation_id INT NOT NULL, post_id INT NOT NULL, INDEX IDX_2ABA353F17DB79AE (user_participation_id), INDEX IDX_2ABA353F4B89032C (post_id), PRIMARY KEY(user_participation_id, post_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_comment ADD CONSTRAINT FK_5048D0E5642B8210 FOREIGN KEY (admin_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE admin_comment ADD CONSTRAINT FK_5048D0E54B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE admin_comment ADD CONSTRAINT FK_5048D0E5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE comment_response ADD CONSTRAINT FK_233F68FDF8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE comment_response ADD CONSTRAINT FK_233F68FDF1767B23 FOREIGN KEY (comment_to_comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED94B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE favorite_user ADD CONSTRAINT FK_6395CF76AA17481D FOREIGN KEY (favorite_id) REFERENCES favorite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favorite_user ADD CONSTRAINT FK_6395CF76A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE follow ADD CONSTRAINT FK_68344470AC24F853 FOREIGN KEY (follower_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE follow ADD CONSTRAINT FK_683444701816E3A3 FOREIGN KEY (following_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_participation_user ADD CONSTRAINT FK_FDA38FFB17DB79AE FOREIGN KEY (user_participation_id) REFERENCES user_participation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_participation_user ADD CONSTRAINT FK_FDA38FFBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_participation_post ADD CONSTRAINT FK_2ABA353F17DB79AE FOREIGN KEY (user_participation_id) REFERENCES user_participation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_participation_post ADD CONSTRAINT FK_2ABA353F4B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP INDEX IDX_8D93D649F5B7AF75 ON user');
        $this->addSql('ALTER TABLE user ADD address VARCHAR(255) NOT NULL, DROP address_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, rue VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ville VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, code_postal INT DEFAULT NULL, pays VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE admin_comment DROP FOREIGN KEY FK_5048D0E5642B8210');
        $this->addSql('ALTER TABLE admin_comment DROP FOREIGN KEY FK_5048D0E54B89032C');
        $this->addSql('ALTER TABLE admin_comment DROP FOREIGN KEY FK_5048D0E5A76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C4B89032C');
        $this->addSql('ALTER TABLE comment_response DROP FOREIGN KEY FK_233F68FDF8697D13');
        $this->addSql('ALTER TABLE comment_response DROP FOREIGN KEY FK_233F68FDF1767B23');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED94B89032C');
        $this->addSql('ALTER TABLE favorite_user DROP FOREIGN KEY FK_6395CF76AA17481D');
        $this->addSql('ALTER TABLE favorite_user DROP FOREIGN KEY FK_6395CF76A76ED395');
        $this->addSql('ALTER TABLE follow DROP FOREIGN KEY FK_68344470AC24F853');
        $this->addSql('ALTER TABLE follow DROP FOREIGN KEY FK_683444701816E3A3');
        $this->addSql('ALTER TABLE user_participation_user DROP FOREIGN KEY FK_FDA38FFB17DB79AE');
        $this->addSql('ALTER TABLE user_participation_user DROP FOREIGN KEY FK_FDA38FFBA76ED395');
        $this->addSql('ALTER TABLE user_participation_post DROP FOREIGN KEY FK_2ABA353F17DB79AE');
        $this->addSql('ALTER TABLE user_participation_post DROP FOREIGN KEY FK_2ABA353F4B89032C');
        $this->addSql('DROP TABLE admin_comment');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE comment_response');
        $this->addSql('DROP TABLE favorite');
        $this->addSql('DROP TABLE favorite_user');
        $this->addSql('DROP TABLE follow');
        $this->addSql('DROP TABLE user_participation');
        $this->addSql('DROP TABLE user_participation_user');
        $this->addSql('DROP TABLE user_participation_post');
        $this->addSql('ALTER TABLE user ADD address_id INT DEFAULT NULL, DROP address');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649F5B7AF75 ON user (address_id)');
    }
}
