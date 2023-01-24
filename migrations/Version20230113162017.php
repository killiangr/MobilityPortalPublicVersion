<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230113162017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE budget_line (id INT AUTO_INCREMENT NOT NULL, line_nature_id INT NOT NULL, project_id INT NOT NULL, society_id INT NOT NULL, application_id INT NOT NULL, provider_id INT NOT NULL, accounting_code_id INT DEFAULT NULL, label LONGTEXT NOT NULL, amount_ot DOUBLE PRECISION NOT NULL, ramount DOUBLE PRECISION NOT NULL, INDEX IDX_ABD0B6A68BC8D539 (line_nature_id), INDEX IDX_ABD0B6A6166D1F9C (project_id), INDEX IDX_ABD0B6A6E6389D24 (society_id), INDEX IDX_ABD0B6A63E030ACD (application_id), INDEX IDX_ABD0B6A6A53A8AA (provider_id), INDEX IDX_ABD0B6A61E520320 (accounting_code_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A68BC8D539 FOREIGN KEY (line_nature_id) REFERENCES general_setup (id)');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A6166D1F9C FOREIGN KEY (project_id) REFERENCES general_setup (id)');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A6E6389D24 FOREIGN KEY (society_id) REFERENCES general_setup (id)');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A63E030ACD FOREIGN KEY (application_id) REFERENCES general_setup (id)');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A6A53A8AA FOREIGN KEY (provider_id) REFERENCES general_setup (id)');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A61E520320 FOREIGN KEY (accounting_code_id) REFERENCES general_setup (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A68BC8D539');
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A6166D1F9C');
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A6E6389D24');
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A63E030ACD');
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A6A53A8AA');
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A61E520320');
        $this->addSql('DROP TABLE budget_line');
    }
}
