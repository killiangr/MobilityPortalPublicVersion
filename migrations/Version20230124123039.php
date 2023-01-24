<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230124123039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A6D4DE76CC FOREIGN KEY (link_budget_id) REFERENCES budget_line (id)');
        $this->addSql('CREATE INDEX IDX_ABD0B6A6D4DE76CC ON budget_line (link_budget_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A6D4DE76CC');
        $this->addSql('DROP INDEX IDX_ABD0B6A6D4DE76CC ON budget_line');
    }
}
