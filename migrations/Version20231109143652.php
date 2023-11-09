<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109143652 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__traitement AS SELECT id FROM traitement');
        $this->addSql('DROP TABLE traitement');
        $this->addSql('CREATE TABLE traitement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_medicament_id INTEGER DEFAULT NULL, CONSTRAINT FK_2A356D271525B092 FOREIGN KEY (id_medicament_id) REFERENCES medicament (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO traitement (id) SELECT id FROM __temp__traitement');
        $this->addSql('DROP TABLE __temp__traitement');
        $this->addSql('CREATE INDEX IDX_2A356D271525B092 ON traitement (id_medicament_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__traitement AS SELECT id FROM traitement');
        $this->addSql('DROP TABLE traitement');
        $this->addSql('CREATE TABLE traitement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL)');
        $this->addSql('INSERT INTO traitement (id) SELECT id FROM __temp__traitement');
        $this->addSql('DROP TABLE __temp__traitement');
    }
}
