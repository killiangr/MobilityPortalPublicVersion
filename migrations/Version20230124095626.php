<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230124095626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line ADD division_service_id INT DEFAULT NULL, ADD regroupement_id INT DEFAULT NULL, ADD montant INT DEFAULT NULL, ADD num_dai VARCHAR(255) DEFAULT NULL, ADD num_facture VARCHAR(255) DEFAULT NULL, ADD date_facture DATE DEFAULT NULL, ADD date_valid_dsi DATE DEFAULT NULL, ADD date_facturation DATE DEFAULT NULL, ADD date_reglement DATE DEFAULT NULL, ADD date_cloture DATE DEFAULT NULL, ADD montant_ouvert DOUBLE PRECISION DEFAULT NULL, ADD montant_facture DOUBLE PRECISION DEFAULT NULL, ADD created_on DATE DEFAULT NULL, ADD created_by VARCHAR(255) DEFAULT NULL, ADD modified_on DATE DEFAULT NULL, ADD modified_by VARCHAR(255) DEFAULT NULL, ADD commentaire LONGTEXT DEFAULT NULL, ADD is_deleted TINYINT(1) DEFAULT NULL, ADD date_gl_dsi DATE DEFAULT NULL, ADD date_valid_jde DATE DEFAULT NULL, ADD visee_amount INT DEFAULT NULL, ADD hors_budget VARCHAR(255) DEFAULT NULL, ADD estime DOUBLE PRECISION DEFAULT NULL, ADD date_engage DATE DEFAULT NULL, ADD date_echeance_facture DATE DEFAULT NULL, ADD date_extraction_eone DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A65844EC9D FOREIGN KEY (division_service_id) REFERENCES general_setup (id)');
        $this->addSql('ALTER TABLE budget_line ADD CONSTRAINT FK_ABD0B6A698655AD2 FOREIGN KEY (regroupement_id) REFERENCES general_setup (id)');
        $this->addSql('CREATE INDEX IDX_ABD0B6A65844EC9D ON budget_line (division_service_id)');
        $this->addSql('CREATE INDEX IDX_ABD0B6A698655AD2 ON budget_line (regroupement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A65844EC9D');
        $this->addSql('ALTER TABLE budget_line DROP FOREIGN KEY FK_ABD0B6A698655AD2');
        $this->addSql('DROP INDEX IDX_ABD0B6A65844EC9D ON budget_line');
        $this->addSql('DROP INDEX IDX_ABD0B6A698655AD2 ON budget_line');
        $this->addSql('ALTER TABLE budget_line DROP division_service_id, DROP regroupement_id, DROP montant, DROP num_dai, DROP num_facture, DROP date_facture, DROP date_valid_dsi, DROP date_facturation, DROP date_reglement, DROP date_cloture, DROP montant_ouvert, DROP montant_facture, DROP created_on, DROP created_by, DROP modified_on, DROP modified_by, DROP commentaire, DROP is_deleted, DROP date_gl_dsi, DROP date_valid_jde, DROP visee_amount, DROP hors_budget, DROP estime, DROP date_engage, DROP date_echeance_facture, DROP date_extraction_eone');
    }
}
