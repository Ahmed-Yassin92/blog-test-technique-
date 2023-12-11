<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231209182131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, user_id INT NOT NULL, rate INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE raiting');
        $this->addSql('ALTER TABLE article CHANGE description description LONGTEXT NOT NULL, CHANGE context content LONGTEXT NOT NULL, CHANGE created_ad created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE sexe sexe TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE raiting (id INT AUTO_INCREMENT NOT NULL, articles_id INT NOT NULL, user_id INT NOT NULL, rate INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE rating');
        $this->addSql('ALTER TABLE article CHANGE description description VARCHAR(255) NOT NULL, CHANGE content context LONGTEXT NOT NULL, CHANGE created_at created_ad DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE sexe sexe VARCHAR(255) NOT NULL');
    }
}
