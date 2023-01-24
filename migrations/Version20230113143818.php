<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230113143818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE general_setup (id INT AUTO_INCREMENT NOT NULL, generalsetuptype_id INT NOT NULL, INDEX IDX_698C857E61A2E01A (generalsetuptype_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE general_setup ADD CONSTRAINT FK_698C857E61A2E01A FOREIGN KEY (generalsetuptype_id) REFERENCES general_setup_type (id)');
        $this->addSql('ALTER TABLE generalsetup DROP FOREIGN KEY FK_80FB360A61A2E01A');
        $this->addSql('DROP TABLE generalsetup');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE generalsetup (id INT AUTO_INCREMENT NOT NULL, generalsetuptype_id INT NOT NULL, INDEX IDX_80FB360A61A2E01A (generalsetuptype_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE generalsetup ADD CONSTRAINT FK_80FB360A61A2E01A FOREIGN KEY (generalsetuptype_id) REFERENCES general_setup_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE general_setup DROP FOREIGN KEY FK_698C857E61A2E01A');
        $this->addSql('DROP TABLE general_setup');
    }
}
