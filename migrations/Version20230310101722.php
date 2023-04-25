<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310101722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, nomination_adresse VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, cp VARCHAR(5) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nomination VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, id_coeff_id INT NOT NULL, id_commercial_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, raison_social VARCHAR(255) DEFAULT NULL, date_inscription DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_C7440455E7927C74 (email), INDEX IDX_C7440455DF650051 (id_coeff_id), INDEX IDX_C7440455C67CD679 (id_commercial_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coefficient (id INT AUTO_INCREMENT NOT NULL, coefficient NUMERIC(8, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, date_com DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', reduction NUMERIC(5, 2) DEFAULT NULL, total_ttc NUMERIC(8, 2) NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_6EEAA67D99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commercial (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, specificite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, id_com_id INT NOT NULL, numero_fact VARCHAR(25) NOT NULL, delai_paiement INT NOT NULL, mode_paiement VARCHAR(255) NOT NULL, date_paiement DATE NOT NULL, UNIQUE INDEX UNIQ_FE8664103A942A3C (numero_fact), UNIQUE INDEX UNIQ_FE86641052BBBADA (id_com_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, ref_fournisseur VARCHAR(25) NOT NULL, nomination VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_369ECA32CC9732BE (ref_fournisseur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habite (id_client_id INT NOT NULL, id_adresse_id INT NOT NULL, INDEX IDX_5195946B99DED506 (id_client_id), INDEX IDX_5195946BE86D5C8B (id_adresse_id), PRIMARY KEY(id_client_id, id_adresse_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (id_client_id INT NOT NULL, id_com_id INT NOT NULL, nom_historique VARCHAR(255) NOT NULL, prenom_historique VARCHAR(255) NOT NULL, mail_historique VARCHAR(255) NOT NULL, telephone_historique VARCHAR(255) NOT NULL, raison_social_historique VARCHAR(255) DEFAULT NULL, INDEX IDX_EDBFD5EC99DED506 (id_client_id), INDEX IDX_EDBFD5EC52BBBADA (id_com_id), PRIMARY KEY(id_client_id, id_com_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, ref_produit_id INT NOT NULL, id_com_id INT NOT NULL, reference VARCHAR(25) NOT NULL, quantite INT NOT NULL, designation VARCHAR(255) NOT NULL, prix NUMERIC(8, 2) NOT NULL, UNIQUE INDEX UNIQ_3170B74BAEA34913 (reference), INDEX IDX_3170B74B9F191E5 (ref_produit_id), INDEX IDX_3170B74B52BBBADA (id_com_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lister (id_liv_id INT NOT NULL, ref_produit_id INT NOT NULL, quantite INT NOT NULL, designation VARCHAR(255) NOT NULL, INDEX IDX_D6253BB2ABB52D31 (id_liv_id), INDEX IDX_D6253BB29F191E5 (ref_produit_id), PRIMARY KEY(id_liv_id, ref_produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, id_com_id INT NOT NULL, date_livraison DATE NOT NULL, INDEX IDX_A60C9F1F52BBBADA (id_com_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo (id INT AUTO_INCREMENT NOT NULL, ref_produit_id INT NOT NULL, src VARCHAR(255) NOT NULL, major_picture TINYINT(1) NOT NULL, INDEX IDX_14B784189F191E5 (ref_produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, id_categorie_id INT NOT NULL, ref_produit VARCHAR(25) NOT NULL, short_libel VARCHAR(255) NOT NULL, long_libel LONGTEXT NOT NULL, prix_ht INT NOT NULL, UNIQUE INDEX UNIQ_29A5EC27EDB1BFF7 (ref_produit), INDEX IDX_29A5EC279F34925F (id_categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stocker (ref_produit_id INT NOT NULL, ref_fournisseur_id INT NOT NULL, INDEX IDX_AD495D9F191E5 (ref_produit_id), INDEX IDX_AD495D2A9A4470 (ref_fournisseur_id), PRIMARY KEY(ref_produit_id, ref_fournisseur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455DF650051 FOREIGN KEY (id_coeff_id) REFERENCES coefficient (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455C67CD679 FOREIGN KEY (id_commercial_id) REFERENCES commercial (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641052BBBADA FOREIGN KEY (id_com_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE habite ADD CONSTRAINT FK_5195946B99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE habite ADD CONSTRAINT FK_5195946BE86D5C8B FOREIGN KEY (id_adresse_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT FK_EDBFD5EC99DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT FK_EDBFD5EC52BBBADA FOREIGN KEY (id_com_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B9F191E5 FOREIGN KEY (ref_produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B52BBBADA FOREIGN KEY (id_com_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE lister ADD CONSTRAINT FK_D6253BB2ABB52D31 FOREIGN KEY (id_liv_id) REFERENCES livraison (id)');
        $this->addSql('ALTER TABLE lister ADD CONSTRAINT FK_D6253BB29F191E5 FOREIGN KEY (ref_produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F52BBBADA FOREIGN KEY (id_com_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B784189F191E5 FOREIGN KEY (ref_produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC279F34925F FOREIGN KEY (id_categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE stocker ADD CONSTRAINT FK_AD495D9F191E5 FOREIGN KEY (ref_produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE stocker ADD CONSTRAINT FK_AD495D2A9A4470 FOREIGN KEY (ref_fournisseur_id) REFERENCES fournisseur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455DF650051');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455C67CD679');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D99DED506');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641052BBBADA');
        $this->addSql('ALTER TABLE habite DROP FOREIGN KEY FK_5195946B99DED506');
        $this->addSql('ALTER TABLE habite DROP FOREIGN KEY FK_5195946BE86D5C8B');
        $this->addSql('ALTER TABLE historique DROP FOREIGN KEY FK_EDBFD5EC99DED506');
        $this->addSql('ALTER TABLE historique DROP FOREIGN KEY FK_EDBFD5EC52BBBADA');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B9F191E5');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B52BBBADA');
        $this->addSql('ALTER TABLE lister DROP FOREIGN KEY FK_D6253BB2ABB52D31');
        $this->addSql('ALTER TABLE lister DROP FOREIGN KEY FK_D6253BB29F191E5');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F52BBBADA');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B784189F191E5');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC279F34925F');
        $this->addSql('ALTER TABLE stocker DROP FOREIGN KEY FK_AD495D9F191E5');
        $this->addSql('ALTER TABLE stocker DROP FOREIGN KEY FK_AD495D2A9A4470');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE coefficient');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commercial');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE habite');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE lister');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE photo');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE stocker');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
