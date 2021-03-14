<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210314123005 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classroom (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, year_of_exit INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grade (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, subject_id INT NOT NULL, INDEX IDX_595AAE34CB944F1A (student_id), INDEX IDX_595AAE3423EDC87 (subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervenant (id INT AUTO_INCREMENT NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, year_of_enter INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, promotion_id INT NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, age INT NOT NULL, year_of_enter INT NOT NULL, INDEX IDX_B723AF33139DF194 (promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject (id INT AUTO_INCREMENT NOT NULL, intervenant_id INT NOT NULL, classroom_id INT NOT NULL, name VARCHAR(255) NOT NULL, date_start DATE NOT NULL, date_end VARCHAR(255) NOT NULL, INDEX IDX_FBCE3E7AAB9A1716 (intervenant_id), INDEX IDX_FBCE3E7A6278D5A8 (classroom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE grade ADD CONSTRAINT FK_595AAE34CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE grade ADD CONSTRAINT FK_595AAE3423EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33139DF194 FOREIGN KEY (promotion_id) REFERENCES classroom (id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AAB9A1716 FOREIGN KEY (intervenant_id) REFERENCES intervenant (id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7A6278D5A8 FOREIGN KEY (classroom_id) REFERENCES classroom (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF33139DF194');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7A6278D5A8');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7AAB9A1716');
        $this->addSql('ALTER TABLE grade DROP FOREIGN KEY FK_595AAE34CB944F1A');
        $this->addSql('ALTER TABLE grade DROP FOREIGN KEY FK_595AAE3423EDC87');
        $this->addSql('DROP TABLE classroom');
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE intervenant');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE user');
    }
}
