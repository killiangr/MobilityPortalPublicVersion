<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230118150456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line ADD manager_id INT NOT NULL');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A6783E3463 FOREIGN KEY (manager_id) REFERENCES general_setup (id)');
        $this->addSql('CREATE INDEX IDX_ABD0B6A6783E3463 ON budget_line (manager_id)');
        $this->addSql('ALTER TABLE invoice ADD manager_id INT NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744783E3463 FOREIGN KEY (manager_id) REFERENCES general_setup (id)');
        $this->addSql('CREATE INDEX IDX_90651744783E3463 ON invoice (manager_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A6783E3463');
        $this->addSql('DROP INDEX IDX_ABD0B6A6783E3463 ON budget_line');
        $this->addSql('ALTER TABLE budget_line DROP manager_id');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744783E3463');
        $this->addSql('DROP INDEX IDX_90651744783E3463 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP manager_id');
    }
}
