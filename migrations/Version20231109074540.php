<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109074540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aile_position (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, aile_position VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE detecteur_rfid (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, num_rfid INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE dossier_patient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_patient INTEGER NOT NULL, id_rdv CLOB NOT NULL --(DC2Type:array)
        , id_ordonnance CLOB NOT NULL --(DC2Type:array)
        , id_taitement CLOB NOT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TABLE formulaire_prise_en_charge (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, num_ss_formulaire INTEGER NOT NULL, date_formulaire DATETIME NOT NULL, motif_formulaire CLOB NOT NULL)');
        $this->addSql('CREATE TABLE lit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_rfid INTEGER NOT NULL, id_salle INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE medicament (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_medicament VARCHAR(255) NOT NULL, dosage_medicament VARCHAR(255) NOT NULL, mode_administration_medicament VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE ordonnance (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, detail_ordonnance CLOB NOT NULL, id_patient INTEGER NOT NULL, id_personnel INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE patient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_patient VARCHAR(255) NOT NULL, prenom_patient VARCHAR(255) NOT NULL, adresse_mail_patient VARCHAR(255) NOT NULL, num_tel_patient INTEGER NOT NULL, num_ss_patient INTEGER NOT NULL, date_de_naissance_patient DATETIME NOT NULL, id_utilisateur INTEGER NOT NULL, sexe_patient INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE personnel (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_personnel VARCHAR(255) NOT NULL, prenom_personnel VARCHAR(255) NOT NULL, adresse_mail_personnel VARCHAR(255) NOT NULL, num_tel_personnel INTEGER NOT NULL, num_ss_personnel INTEGER NOT NULL, date_de_naissance_personnel DATETIME NOT NULL, sexe_personnel INTEGER NOT NULL, id_utilisateur INTEGER NOT NULL, id_service INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE position (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, aile_position INTEGER NOT NULL, etage_position INTEGER NOT NULL, code_position BOOLEAN NOT NULL, distance_metre INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE rdv (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, duree_rdv TIME NOT NULL, date_rdv DATETIME NOT NULL, diagnostique_rdv CLOB NOT NULL, id_patient INTEGER NOT NULL, id_medecin CLOB NOT NULL --(DC2Type:array)
        , id_infirmier CLOB NOT NULL --(DC2Type:array)
        , id_service INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE role (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_role VARCHAR(255) NOT NULL, nom_securite_role VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE salle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nb_lits_salle INTEGER DEFAULT NULL, id_type_salle INTEGER NOT NULL, id_position INTEGER NOT NULL, id_service INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE service (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_service VARCHAR(255) NOT NULL, id_position INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE statut_traitement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, statut_traitement VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE stock (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite_medicament_stock INTEGER NOT NULL, id_medicament INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE traitement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_statut_traitement INTEGER NOT NULL, id_patient INTEGER NOT NULL, id_personnel_preparateur INTEGER NOT NULL, id_personnel_administateur INTEGER NOT NULL, id_ordonnance INTEGER NOT NULL, id_medicament INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE type_salle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type_salle VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE utilisateur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, role_utilisateur VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(255) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE aile_position');
        $this->addSql('DROP TABLE detecteur_rfid');
        $this->addSql('DROP TABLE dossier_patient');
        $this->addSql('DROP TABLE formulaire_prise_en_charge');
        $this->addSql('DROP TABLE lit');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE ordonnance');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE rdv');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE statut_traitement');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE traitement');
        $this->addSql('DROP TABLE type_salle');
        $this->addSql('DROP TABLE utilisateur');
    }
}
