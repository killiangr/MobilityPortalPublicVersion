<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230124120127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A658D9DA91 FOREIGN KEY (invst_charge_id) REFERENCES general_setup (id)');
        $this->addSql('CREATE INDEX IDX_ABD0B6A658D9DA91 ON budget_line (invst_charge_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A658D9DA91');
        $this->addSql('DROP INDEX IDX_ABD0B6A658D9DA91 ON budget_line');
    }
}
