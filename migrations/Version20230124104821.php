<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230124104821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line CHANGE line_nature_id line_nature_id INT DEFAULT NULL, CHANGE project_id project_id INT DEFAULT NULL, CHANGE society_id society_id INT DEFAULT NULL, CHANGE application_id application_id INT DEFAULT NULL, CHANGE provider_id provider_id INT DEFAULT NULL, CHANGE year_id year_id INT DEFAULT NULL, CHANGE manager_id manager_id INT DEFAULT NULL, CHANGE type_id type_id INT DEFAULT NULL, CHANGE axe4_id axe4_id INT DEFAULT NULL, CHANGE montant montant INT DEFAULT NULL, CHANGE num_dai num_dai VARCHAR(255) DEFAULT NULL, CHANGE num_facture num_facture VARCHAR(255) DEFAULT NULL, CHANGE date_facture date_facture DATE DEFAULT NULL, CHANGE date_valid_dsi date_valid_dsi DATE DEFAULT NULL, CHANGE date_facturation date_facturation DATE DEFAULT NULL, CHANGE date_reglement date_reglement DATE DEFAULT NULL, CHANGE date_cloture date_cloture DATE DEFAULT NULL, CHANGE montant_ouvert montant_ouvert DOUBLE PRECISION DEFAULT NULL, CHANGE montant_facture montant_facture DOUBLE PRECISION DEFAULT NULL, CHANGE created_on created_on DATE DEFAULT NULL, CHANGE created_by created_by VARCHAR(255) DEFAULT NULL, CHANGE modified_on modified_on DATE DEFAULT NULL, CHANGE modified_by modified_by VARCHAR(255) DEFAULT NULL, CHANGE commentaire commentaire LONGTEXT DEFAULT NULL, CHANGE is_deleted is_deleted TINYINT(1) DEFAULT NULL, CHANGE date_gl_dsi date_gl_dsi DATE DEFAULT NULL, CHANGE date_valid_jde date_valid_jde DATE DEFAULT NULL, CHANGE visee_amount visee_amount INT DEFAULT NULL, CHANGE hors_budget hors_budget VARCHAR(255) DEFAULT NULL, CHANGE estime estime DOUBLE PRECISION DEFAULT NULL, CHANGE date_engage date_engage DATE DEFAULT NULL, CHANGE date_echeance_facture date_echeance_facture DATE DEFAULT NULL, CHANGE date_extraction_eone date_extraction_eone DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget_line CHANGE line_nature_id line_nature_id INT NOT NULL, CHANGE project_id project_id INT NOT NULL, CHANGE society_id society_id INT NOT NULL, CHANGE application_id application_id INT NOT NULL, CHANGE provider_id provider_id INT NOT NULL, CHANGE year_id year_id INT NOT NULL, CHANGE manager_id manager_id INT NOT NULL, CHANGE type_id type_id INT NOT NULL, CHANGE axe4_id axe4_id INT NOT NULL, CHANGE montant montant INT NOT NULL, CHANGE num_dai num_dai VARCHAR(255) NOT NULL, CHANGE num_facture num_facture VARCHAR(255) NOT NULL, CHANGE date_facture date_facture DATE NOT NULL, CHANGE date_valid_dsi date_valid_dsi DATE NOT NULL, CHANGE date_facturation date_facturation DATE NOT NULL, CHANGE date_reglement date_reglement DATE NOT NULL, CHANGE date_cloture date_cloture DATE NOT NULL, CHANGE montant_ouvert montant_ouvert DOUBLE PRECISION NOT NULL, CHANGE montant_facture montant_facture DOUBLE PRECISION NOT NULL, CHANGE created_on created_on DATE NOT NULL, CHANGE created_by created_by VARCHAR(255) NOT NULL, CHANGE modified_on modified_on DATE NOT NULL, CHANGE modified_by modified_by VARCHAR(255) NOT NULL, CHANGE commentaire commentaire LONGTEXT NOT NULL, CHANGE is_deleted is_deleted TINYINT(1) NOT NULL, CHANGE date_gl_dsi date_gl_dsi DATE NOT NULL, CHANGE date_valid_jde date_valid_jde DATE NOT NULL, CHANGE visee_amount visee_amount INT NOT NULL, CHANGE hors_budget hors_budget VARCHAR(255) NOT NULL, CHANGE estime estime DOUBLE PRECISION NOT NULL, CHANGE date_engage date_engage DATE NOT NULL, CHANGE date_echeance_facture date_echeance_facture DATE NOT NULL, CHANGE date_extraction_eone date_extraction_eone DATE NOT NULL');
    }
}
