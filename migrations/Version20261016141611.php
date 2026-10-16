<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261016141611 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE description_dispositif DROP FOREIGN KEY `FK_F8F5210C6793FFFA`');
        $this->addSql('DROP INDEX IDX_F8F5210C6793FFFA ON description_dispositif');
        $this->addSql('ALTER TABLE description_dispositif CHANGE id_dispositif_id dispositif_id INT NOT NULL');
        $this->addSql('ALTER TABLE description_dispositif ADD CONSTRAINT FK_F8F5210CD9BB2E9F FOREIGN KEY (dispositif_id) REFERENCES dispositif (id)');
        $this->addSql('CREATE INDEX IDX_F8F5210CD9BB2E9F ON description_dispositif (dispositif_id)');
        $this->addSql('ALTER TABLE evenement_culture DROP FOREIGN KEY `FK_B5AC8B3769C54407`');
        $this->addSql('ALTER TABLE evenement_culture DROP FOREIGN KEY `FK_B5AC8B378B203A57`');
        $this->addSql('DROP INDEX IDX_B5AC8B378B203A57 ON evenement_culture');
        $this->addSql('DROP INDEX IDX_B5AC8B3769C54407 ON evenement_culture');
        $this->addSql('ALTER TABLE evenement_culture ADD culture_monde_id INT DEFAULT NULL, ADD culture_urbaine_id INT DEFAULT NULL, DROP id_culture_monde_id, DROP id_culture_urbaine_id');
        $this->addSql('ALTER TABLE evenement_culture ADD CONSTRAINT FK_B5AC8B3768AA6F86 FOREIGN KEY (culture_monde_id) REFERENCES culture_du_monde (id)');
        $this->addSql('ALTER TABLE evenement_culture ADD CONSTRAINT FK_B5AC8B37EAE7F6A8 FOREIGN KEY (culture_urbaine_id) REFERENCES culture_urbaine (id)');
        $this->addSql('CREATE INDEX IDX_B5AC8B3768AA6F86 ON evenement_culture (culture_monde_id)');
        $this->addSql('CREATE INDEX IDX_B5AC8B37EAE7F6A8 ON evenement_culture (culture_urbaine_id)');
        $this->addSql('ALTER TABLE gastronomie_dalle DROP FOREIGN KEY `FK_57D854C08B203A57`');
        $this->addSql('DROP INDEX IDX_57D854C08B203A57 ON gastronomie_dalle');
        $this->addSql('ALTER TABLE gastronomie_dalle CHANGE id_culture_monde_id culture_monde_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gastronomie_dalle ADD CONSTRAINT FK_57D854C068AA6F86 FOREIGN KEY (culture_monde_id) REFERENCES culture_du_monde (id)');
        $this->addSql('CREATE INDEX IDX_57D854C068AA6F86 ON gastronomie_dalle (culture_monde_id)');
        $this->addSql('ALTER TABLE media_autre ADD nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE media_evenement_culture ADD CONSTRAINT FK_E355E6CC407298D3 FOREIGN KEY (evenement_culture_id) REFERENCES evenement_culture (id)');
        $this->addSql('ALTER TABLE media_objet_culture DROP FOREIGN KEY `FK_89C0B47134F204E7`');
        $this->addSql('DROP INDEX IDX_89C0B47134F204E7 ON media_objet_culture');
        $this->addSql('ALTER TABLE media_objet_culture CHANGE objetculture_id objet_culture_id INT NOT NULL');
        $this->addSql('ALTER TABLE media_objet_culture ADD CONSTRAINT FK_89C0B4716216B6E7 FOREIGN KEY (objet_culture_id) REFERENCES objet_culture (id)');
        $this->addSql('CREATE INDEX IDX_89C0B4716216B6E7 ON media_objet_culture (objet_culture_id)');
        $this->addSql('ALTER TABLE objet_culture DROP FOREIGN KEY `FK_6DA78AD01482A44A`');
        $this->addSql('DROP INDEX IDX_6DA78AD01482A44A ON objet_culture');
        $this->addSql('ALTER TABLE objet_culture CHANGE id_culture_id culture_id INT NOT NULL');
        $this->addSql('ALTER TABLE objet_culture ADD CONSTRAINT FK_6DA78AD0B108249D FOREIGN KEY (culture_id) REFERENCES culture_du_monde (id)');
        $this->addSql('CREATE INDEX IDX_6DA78AD0B108249D ON objet_culture (culture_id)');
        $this->addSql('ALTER TABLE objet_habitant ADD nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE symbole_culture DROP FOREIGN KEY `FK_B0BD57941482A44A`');
        $this->addSql('DROP INDEX IDX_B0BD57941482A44A ON symbole_culture');
        $this->addSql('ALTER TABLE symbole_culture ADD updated_at DATETIME DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE id_culture_id culture_id INT NOT NULL');
        $this->addSql('ALTER TABLE symbole_culture ADD CONSTRAINT FK_B0BD5794B108249D FOREIGN KEY (culture_id) REFERENCES culture_du_monde (id)');
        $this->addSql('CREATE INDEX IDX_B0BD5794B108249D ON symbole_culture (culture_id)');
        $this->addSql('ALTER TABLE texte_ateliers DROP FOREIGN KEY `FK_1B96613427684FE2`');
        $this->addSql('DROP INDEX IDX_1B96613427684FE2 ON texte_ateliers');
        $this->addSql('ALTER TABLE texte_ateliers CHANGE id_atelier_id atelier_id INT NOT NULL');
        $this->addSql('ALTER TABLE texte_ateliers ADD CONSTRAINT FK_1B96613482E2CF35 FOREIGN KEY (atelier_id) REFERENCES ateliers_plantes (id)');
        $this->addSql('CREATE INDEX IDX_1B96613482E2CF35 ON texte_ateliers (atelier_id)');
        $this->addSql('ALTER TABLE texte_culture DROP FOREIGN KEY `FK_CFBCBBC869C54407`');
        $this->addSql('ALTER TABLE texte_culture DROP FOREIGN KEY `FK_CFBCBBC88B203A57`');
        $this->addSql('DROP INDEX IDX_CFBCBBC88B203A57 ON texte_culture');
        $this->addSql('DROP INDEX IDX_CFBCBBC869C54407 ON texte_culture');
        $this->addSql('ALTER TABLE texte_culture ADD culture_monde_id INT DEFAULT NULL, ADD culture_urbaine_id INT DEFAULT NULL, DROP id_culture_monde_id, DROP id_culture_urbaine_id');
        $this->addSql('ALTER TABLE texte_culture ADD CONSTRAINT FK_CFBCBBC868AA6F86 FOREIGN KEY (culture_monde_id) REFERENCES culture_du_monde (id)');
        $this->addSql('ALTER TABLE texte_culture ADD CONSTRAINT FK_CFBCBBC8EAE7F6A8 FOREIGN KEY (culture_urbaine_id) REFERENCES culture_urbaine (id)');
        $this->addSql('CREATE INDEX IDX_CFBCBBC868AA6F86 ON texte_culture (culture_monde_id)');
        $this->addSql('CREATE INDEX IDX_CFBCBBC8EAE7F6A8 ON texte_culture (culture_urbaine_id)');
        $this->addSql('ALTER TABLE texte_evenement_plantes DROP FOREIGN KEY `FK_FFB38B83B43DE193`');
        $this->addSql('DROP INDEX IDX_FFB38B83B43DE193 ON texte_evenement_plantes');
        $this->addSql('ALTER TABLE texte_evenement_plantes CHANGE id_evenement_plantes_id evenement_plantes_id INT NOT NULL');
        $this->addSql('ALTER TABLE texte_evenement_plantes ADD CONSTRAINT FK_FFB38B83B8CD1037 FOREIGN KEY (evenement_plantes_id) REFERENCES evenement_plantes (id)');
        $this->addSql('CREATE INDEX IDX_FFB38B83B8CD1037 ON texte_evenement_plantes (evenement_plantes_id)');
        $this->addSql('ALTER TABLE texte_gastronomie DROP FOREIGN KEY `FK_526A0DE4B7CE1778`');
        $this->addSql('DROP INDEX IDX_526A0DE4B7CE1778 ON texte_gastronomie');
        $this->addSql('ALTER TABLE texte_gastronomie CHANGE id_gastronomie_id gastronomie_id INT NOT NULL');
        $this->addSql('ALTER TABLE texte_gastronomie ADD CONSTRAINT FK_526A0DE48AA8AA7E FOREIGN KEY (gastronomie_id) REFERENCES gastronomie_dalle (id)');
        $this->addSql('CREATE INDEX IDX_526A0DE48AA8AA7E ON texte_gastronomie (gastronomie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, mail VARCHAR(70) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, password VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, role VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, username VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE description_dispositif DROP FOREIGN KEY FK_F8F5210CD9BB2E9F');
        $this->addSql('DROP INDEX IDX_F8F5210CD9BB2E9F ON description_dispositif');
        $this->addSql('ALTER TABLE description_dispositif CHANGE dispositif_id id_dispositif_id INT NOT NULL');
        $this->addSql('ALTER TABLE description_dispositif ADD CONSTRAINT `FK_F8F5210C6793FFFA` FOREIGN KEY (id_dispositif_id) REFERENCES dispositif (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_F8F5210C6793FFFA ON description_dispositif (id_dispositif_id)');
        $this->addSql('ALTER TABLE evenement_culture DROP FOREIGN KEY FK_B5AC8B3768AA6F86');
        $this->addSql('ALTER TABLE evenement_culture DROP FOREIGN KEY FK_B5AC8B37EAE7F6A8');
        $this->addSql('DROP INDEX IDX_B5AC8B3768AA6F86 ON evenement_culture');
        $this->addSql('DROP INDEX IDX_B5AC8B37EAE7F6A8 ON evenement_culture');
        $this->addSql('ALTER TABLE evenement_culture ADD id_culture_monde_id INT DEFAULT NULL, ADD id_culture_urbaine_id INT DEFAULT NULL, DROP culture_monde_id, DROP culture_urbaine_id');
        $this->addSql('ALTER TABLE evenement_culture ADD CONSTRAINT `FK_B5AC8B3769C54407` FOREIGN KEY (id_culture_urbaine_id) REFERENCES culture_urbaine (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE evenement_culture ADD CONSTRAINT `FK_B5AC8B378B203A57` FOREIGN KEY (id_culture_monde_id) REFERENCES culture_du_monde (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_B5AC8B378B203A57 ON evenement_culture (id_culture_monde_id)');
        $this->addSql('CREATE INDEX IDX_B5AC8B3769C54407 ON evenement_culture (id_culture_urbaine_id)');
        $this->addSql('ALTER TABLE gastronomie_dalle DROP FOREIGN KEY FK_57D854C068AA6F86');
        $this->addSql('DROP INDEX IDX_57D854C068AA6F86 ON gastronomie_dalle');
        $this->addSql('ALTER TABLE gastronomie_dalle CHANGE culture_monde_id id_culture_monde_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gastronomie_dalle ADD CONSTRAINT `FK_57D854C08B203A57` FOREIGN KEY (id_culture_monde_id) REFERENCES culture_du_monde (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_57D854C08B203A57 ON gastronomie_dalle (id_culture_monde_id)');
        $this->addSql('ALTER TABLE media_autre DROP nom');
        $this->addSql('ALTER TABLE media_evenement_culture DROP FOREIGN KEY FK_E355E6CC407298D3');
        $this->addSql('ALTER TABLE media_objet_culture DROP FOREIGN KEY FK_89C0B4716216B6E7');
        $this->addSql('DROP INDEX IDX_89C0B4716216B6E7 ON media_objet_culture');
        $this->addSql('ALTER TABLE media_objet_culture CHANGE objet_culture_id objetculture_id INT NOT NULL');
        $this->addSql('ALTER TABLE media_objet_culture ADD CONSTRAINT `FK_89C0B47134F204E7` FOREIGN KEY (objetculture_id) REFERENCES objet_culture (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_89C0B47134F204E7 ON media_objet_culture (objetculture_id)');
        $this->addSql('ALTER TABLE objet_culture DROP FOREIGN KEY FK_6DA78AD0B108249D');
        $this->addSql('DROP INDEX IDX_6DA78AD0B108249D ON objet_culture');
        $this->addSql('ALTER TABLE objet_culture CHANGE culture_id id_culture_id INT NOT NULL');
        $this->addSql('ALTER TABLE objet_culture ADD CONSTRAINT `FK_6DA78AD01482A44A` FOREIGN KEY (id_culture_id) REFERENCES culture_du_monde (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_6DA78AD01482A44A ON objet_culture (id_culture_id)');
        $this->addSql('ALTER TABLE objet_habitant DROP nom');
        $this->addSql('ALTER TABLE symbole_culture DROP FOREIGN KEY FK_B0BD5794B108249D');
        $this->addSql('DROP INDEX IDX_B0BD5794B108249D ON symbole_culture');
        $this->addSql('ALTER TABLE symbole_culture DROP updated_at, CHANGE image image VARCHAR(255) NOT NULL, CHANGE culture_id id_culture_id INT NOT NULL');
        $this->addSql('ALTER TABLE symbole_culture ADD CONSTRAINT `FK_B0BD57941482A44A` FOREIGN KEY (id_culture_id) REFERENCES culture_du_monde (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_B0BD57941482A44A ON symbole_culture (id_culture_id)');
        $this->addSql('ALTER TABLE texte_ateliers DROP FOREIGN KEY FK_1B96613482E2CF35');
        $this->addSql('DROP INDEX IDX_1B96613482E2CF35 ON texte_ateliers');
        $this->addSql('ALTER TABLE texte_ateliers CHANGE atelier_id id_atelier_id INT NOT NULL');
        $this->addSql('ALTER TABLE texte_ateliers ADD CONSTRAINT `FK_1B96613427684FE2` FOREIGN KEY (id_atelier_id) REFERENCES ateliers_plantes (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1B96613427684FE2 ON texte_ateliers (id_atelier_id)');
        $this->addSql('ALTER TABLE texte_culture DROP FOREIGN KEY FK_CFBCBBC868AA6F86');
        $this->addSql('ALTER TABLE texte_culture DROP FOREIGN KEY FK_CFBCBBC8EAE7F6A8');
        $this->addSql('DROP INDEX IDX_CFBCBBC868AA6F86 ON texte_culture');
        $this->addSql('DROP INDEX IDX_CFBCBBC8EAE7F6A8 ON texte_culture');
        $this->addSql('ALTER TABLE texte_culture ADD id_culture_monde_id INT DEFAULT NULL, ADD id_culture_urbaine_id INT DEFAULT NULL, DROP culture_monde_id, DROP culture_urbaine_id');
        $this->addSql('ALTER TABLE texte_culture ADD CONSTRAINT `FK_CFBCBBC869C54407` FOREIGN KEY (id_culture_urbaine_id) REFERENCES culture_urbaine (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE texte_culture ADD CONSTRAINT `FK_CFBCBBC88B203A57` FOREIGN KEY (id_culture_monde_id) REFERENCES culture_du_monde (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_CFBCBBC88B203A57 ON texte_culture (id_culture_monde_id)');
        $this->addSql('CREATE INDEX IDX_CFBCBBC869C54407 ON texte_culture (id_culture_urbaine_id)');
        $this->addSql('ALTER TABLE texte_evenement_plantes DROP FOREIGN KEY FK_FFB38B83B8CD1037');
        $this->addSql('DROP INDEX IDX_FFB38B83B8CD1037 ON texte_evenement_plantes');
        $this->addSql('ALTER TABLE texte_evenement_plantes CHANGE evenement_plantes_id id_evenement_plantes_id INT NOT NULL');
        $this->addSql('ALTER TABLE texte_evenement_plantes ADD CONSTRAINT `FK_FFB38B83B43DE193` FOREIGN KEY (id_evenement_plantes_id) REFERENCES evenement_plantes (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_FFB38B83B43DE193 ON texte_evenement_plantes (id_evenement_plantes_id)');
        $this->addSql('ALTER TABLE texte_gastronomie DROP FOREIGN KEY FK_526A0DE48AA8AA7E');
        $this->addSql('DROP INDEX IDX_526A0DE48AA8AA7E ON texte_gastronomie');
        $this->addSql('ALTER TABLE texte_gastronomie CHANGE gastronomie_id id_gastronomie_id INT NOT NULL');
        $this->addSql('ALTER TABLE texte_gastronomie ADD CONSTRAINT `FK_526A0DE4B7CE1778` FOREIGN KEY (id_gastronomie_id) REFERENCES gastronomie_dalle (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_526A0DE4B7CE1778 ON texte_gastronomie (id_gastronomie_id)');
    }
}
