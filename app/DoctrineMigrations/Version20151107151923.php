<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151107151923 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE books (id INT AUTO_INCREMENT NOT NULL, book_type_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, author VARCHAR(255) NOT NULL, name_edition VARCHAR(255) NOT NULL, year_edition INT DEFAULT 0, number_pages INT DEFAULT 0, price DOUBLE PRECISION NOT NULL, image VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_4A1B2A92566CA405 (book_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book_comments (id INT AUTO_INCREMENT NOT NULL, book_id INT NOT NULL, name VARCHAR(100) NOT NULL, comment LONGTEXT NOT NULL, enabled TINYINT(1) DEFAULT \'1\' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_4661807316A2B381 (book_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE books ADD CONSTRAINT FK_4A1B2A92566CA405 FOREIGN KEY (book_type_id) REFERENCES book_types (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE book_comments ADD CONSTRAINT FK_4661807316A2B381 FOREIGN KEY (book_id) REFERENCES books (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE book_comments DROP FOREIGN KEY FK_4661807316A2B381');
        $this->addSql('ALTER TABLE books DROP FOREIGN KEY FK_4A1B2A92566CA405');
        $this->addSql('DROP TABLE books');
        $this->addSql('DROP TABLE book_comments');
        $this->addSql('DROP TABLE book_types');
    }
}
