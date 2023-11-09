<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109134538 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__salle AS SELECT id, id_type_salle_id, nb_lits_salle FROM salle');
        $this->addSql('DROP TABLE salle');
        $this->addSql('CREATE TABLE salle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_type_salle_id INTEGER DEFAULT NULL, id_position_id INTEGER DEFAULT NULL, nb_lits_salle INTEGER DEFAULT NULL, CONSTRAINT FK_4E977E5CAFE7B6AC FOREIGN KEY (id_type_salle_id) REFERENCES type_salle (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_4E977E5CC596E3B1 FOREIGN KEY (id_position_id) REFERENCES position (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO salle (id, id_type_salle_id, nb_lits_salle) SELECT id, id_type_salle_id, nb_lits_salle FROM __temp__salle');
        $this->addSql('DROP TABLE __temp__salle');
        $this->addSql('CREATE INDEX IDX_4E977E5CAFE7B6AC ON salle (id_type_salle_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4E977E5CC596E3B1 ON salle (id_position_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__salle AS SELECT id, id_type_salle_id, nb_lits_salle FROM salle');
        $this->addSql('DROP TABLE salle');
        $this->addSql('CREATE TABLE salle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_type_salle_id INTEGER DEFAULT NULL, nb_lits_salle INTEGER DEFAULT NULL, CONSTRAINT FK_4E977E5CAFE7B6AC FOREIGN KEY (id_type_salle_id) REFERENCES type_salle (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO salle (id, id_type_salle_id, nb_lits_salle) SELECT id, id_type_salle_id, nb_lits_salle FROM __temp__salle');
        $this->addSql('DROP TABLE __temp__salle');
        $this->addSql('CREATE INDEX IDX_4E977E5CAFE7B6AC ON salle (id_type_salle_id)');
    }
}
