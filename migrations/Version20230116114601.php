<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230116114601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A640C1FEA7 FOREIGN KEY (year_id) REFERENCES general_setup (id)');
        $this->addSql('CREATE INDEX IDX_ABD0B6A640C1FEA7 ON budget_line (year_id)');
        $this->addSql('ALTER TABLE invoice ADD year_id INT NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_9065174440C1FEA7 FOREIGN KEY (year_id) REFERENCES general_setup (id)');
        $this->addSql('CREATE INDEX IDX_9065174440C1FEA7 ON invoice (year_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A640C1FEA7');
        $this->addSql('DROP INDEX IDX_ABD0B6A640C1FEA7 ON budget_line');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_9065174440C1FEA7');
        $this->addSql('DROP INDEX IDX_9065174440C1FEA7 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP year_id');
    }
}
