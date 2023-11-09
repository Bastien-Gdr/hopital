<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109142007 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__medicament AS SELECT id, nom_medicament, dosage_medicament, mode_administration_medicament FROM medicament');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('CREATE TABLE medicament (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, stock_id INTEGER DEFAULT NULL, nom_medicament VARCHAR(255) NOT NULL, dosage_medicament VARCHAR(255) NOT NULL, mode_administration_medicament VARCHAR(255) NOT NULL, CONSTRAINT FK_9A9C723ADCD6110 FOREIGN KEY (stock_id) REFERENCES stock (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO medicament (id, nom_medicament, dosage_medicament, mode_administration_medicament) SELECT id, nom_medicament, dosage_medicament, mode_administration_medicament FROM __temp__medicament');
        $this->addSql('DROP TABLE __temp__medicament');
        $this->addSql('CREATE INDEX IDX_9A9C723ADCD6110 ON medicament (stock_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__medicament AS SELECT id, nom_medicament, dosage_medicament, mode_administration_medicament FROM medicament');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('CREATE TABLE medicament (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_medicament VARCHAR(255) NOT NULL, dosage_medicament VARCHAR(255) NOT NULL, mode_administration_medicament VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO medicament (id, nom_medicament, dosage_medicament, mode_administration_medicament) SELECT id, nom_medicament, dosage_medicament, mode_administration_medicament FROM __temp__medicament');
        $this->addSql('DROP TABLE __temp__medicament');
    }
}
