<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109134857 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__position AS SELECT id, etage_position, cote_position, distance_metre FROM position');
        $this->addSql('DROP TABLE position');
        $this->addSql('CREATE TABLE position (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_aile_position_id INTEGER DEFAULT NULL, etage_position INTEGER NOT NULL, cote_position BOOLEAN NOT NULL, distance_metre INTEGER NOT NULL, CONSTRAINT FK_462CE4F5E14C7D80 FOREIGN KEY (id_aile_position_id) REFERENCES aile_position (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO position (id, etage_position, cote_position, distance_metre) SELECT id, etage_position, cote_position, distance_metre FROM __temp__position');
        $this->addSql('DROP TABLE __temp__position');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_462CE4F5E14C7D80 ON position (id_aile_position_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__position AS SELECT id, etage_position, cote_position, distance_metre FROM position');
        $this->addSql('DROP TABLE position');
        $this->addSql('CREATE TABLE position (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, etage_position INTEGER NOT NULL, cote_position BOOLEAN NOT NULL, distance_metre INTEGER NOT NULL)');
        $this->addSql('INSERT INTO position (id, etage_position, cote_position, distance_metre) SELECT id, etage_position, cote_position, distance_metre FROM __temp__position');
        $this->addSql('DROP TABLE __temp__position');
    }
}
