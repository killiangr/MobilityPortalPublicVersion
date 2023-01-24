<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230124103821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line ADD axe4_id INT NOT NULL');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A6E0479C6A FOREIGN KEY (axe4_id) REFERENCES general_setup (id)');
        $this->addSql('CREATE INDEX IDX_ABD0B6A6E0479C6A ON budget_line (axe4_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A6E0479C6A');
        $this->addSql('DROP INDEX IDX_ABD0B6A6E0479C6A ON budget_line');
        $this->addSql('ALTER TABLE budget_line DROP axe4_id');
    }
}
