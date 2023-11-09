<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109131536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__detecteur_rfid AS SELECT id, num_rfid FROM detecteur_rfid');
        $this->addSql('DROP TABLE detecteur_rfid');
        $this->addSql('CREATE TABLE detecteur_rfid (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_lit_id INTEGER DEFAULT NULL, num_rfid INTEGER NOT NULL, CONSTRAINT FK_6F38B24A1BCE5BA FOREIGN KEY (id_lit_id) REFERENCES lit (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO detecteur_rfid (id, num_rfid) SELECT id, num_rfid FROM __temp__detecteur_rfid');
        $this->addSql('DROP TABLE __temp__detecteur_rfid');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6F38B24A1BCE5BA ON detecteur_rfid (id_lit_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__lit AS SELECT id FROM lit');
        $this->addSql('DROP TABLE lit');
        $this->addSql('CREATE TABLE lit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_salle_id INTEGER DEFAULT NULL, CONSTRAINT FK_5DDB8E9D8CEBACA0 FOREIGN KEY (id_salle_id) REFERENCES salle (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO lit (id) SELECT id FROM __temp__lit');
        $this->addSql('DROP TABLE __temp__lit');
        $this->addSql('CREATE INDEX IDX_5DDB8E9D8CEBACA0 ON lit (id_salle_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__salle AS SELECT id, nb_lits_salle FROM salle');
        $this->addSql('DROP TABLE salle');
        $this->addSql('CREATE TABLE salle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_type_salle_id INTEGER DEFAULT NULL, nb_lits_salle INTEGER DEFAULT NULL, CONSTRAINT FK_4E977E5CAFE7B6AC FOREIGN KEY (id_type_salle_id) REFERENCES type_salle (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO salle (id, nb_lits_salle) SELECT id, nb_lits_salle FROM __temp__salle');
        $this->addSql('DROP TABLE __temp__salle');
        $this->addSql('CREATE INDEX IDX_4E977E5CAFE7B6AC ON salle (id_type_salle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__detecteur_rfid AS SELECT id, num_rfid FROM detecteur_rfid');
        $this->addSql('DROP TABLE detecteur_rfid');
        $this->addSql('CREATE TABLE detecteur_rfid (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, num_rfid INTEGER NOT NULL)');
        $this->addSql('INSERT INTO detecteur_rfid (id, num_rfid) SELECT id, num_rfid FROM __temp__detecteur_rfid');
        $this->addSql('DROP TABLE __temp__detecteur_rfid');
        $this->addSql('CREATE TEMPORARY TABLE __temp__lit AS SELECT id FROM lit');
        $this->addSql('DROP TABLE lit');
        $this->addSql('CREATE TABLE lit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL)');
        $this->addSql('INSERT INTO lit (id) SELECT id FROM __temp__lit');
        $this->addSql('DROP TABLE __temp__lit');
        $this->addSql('CREATE TEMPORARY TABLE __temp__salle AS SELECT id, nb_lits_salle FROM salle');
        $this->addSql('DROP TABLE salle');
        $this->addSql('CREATE TABLE salle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nb_lits_salle INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO salle (id, nb_lits_salle) SELECT id, nb_lits_salle FROM __temp__salle');
        $this->addSql('DROP TABLE __temp__salle');
    }
}
