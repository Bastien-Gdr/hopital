<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109144715 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__traitement AS SELECT id, id_medicament_id FROM traitement');
        $this->addSql('DROP TABLE traitement');
        $this->addSql('CREATE TABLE traitement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_medicament_id INTEGER DEFAULT NULL, id_statut_traitement_id INTEGER DEFAULT NULL, CONSTRAINT FK_2A356D271525B092 FOREIGN KEY (id_medicament_id) REFERENCES medicament (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_2A356D27679AEB9D FOREIGN KEY (id_statut_traitement_id) REFERENCES statut_traitement (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO traitement (id, id_medicament_id) SELECT id, id_medicament_id FROM __temp__traitement');
        $this->addSql('DROP TABLE __temp__traitement');
        $this->addSql('CREATE INDEX IDX_2A356D271525B092 ON traitement (id_medicament_id)');
        $this->addSql('CREATE INDEX IDX_2A356D27679AEB9D ON traitement (id_statut_traitement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__traitement AS SELECT id, id_medicament_id FROM traitement');
        $this->addSql('DROP TABLE traitement');
        $this->addSql('CREATE TABLE traitement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_medicament_id INTEGER DEFAULT NULL, CONSTRAINT FK_2A356D271525B092 FOREIGN KEY (id_medicament_id) REFERENCES medicament (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO traitement (id, id_medicament_id) SELECT id, id_medicament_id FROM __temp__traitement');
        $this->addSql('DROP TABLE __temp__traitement');
        $this->addSql('CREATE INDEX IDX_2A356D271525B092 ON traitement (id_medicament_id)');
    }
}
