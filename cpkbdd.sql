-- MySQL Script generated by MySQL Workbench
-- Wed Feb 24 19:23:18 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema cpk
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cpk
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cpk` DEFAULT CHARACTER SET utf8 ;
USE `cpk` ;

-- -----------------------------------------------------
-- Table `cpk`.`Membres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`Membres` (
  `idMembres` INT NOT NULL,
  `NLicence` INT NULL,
  `nomMembre` VARCHAR(45) NOT NULL,
  `prenomMembre` VARCHAR(45) NOT NULL,
  `sexe` TINYINT NOT NULL,
  `dateNaissance` DATE NOT NULL,
  `adresse` VARCHAR(45) NOT NULL,
  `cp` VARCHAR(45) NOT NULL,
  `ville` VARCHAR(45) NOT NULL,
  `telephoneMobile` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `photo` VARCHAR(255) NULL,
  `payementAdhésion` TINYINT NOT NULL,
  `dateInscription` DATETIME NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `telFixe` VARCHAR(45) NULL,
  `MembresComite` TINYINT NOT NULL,
  `nivResponsabilite` TINYINT NULL,
  PRIMARY KEY (`idMembres`),
  UNIQUE INDEX `Membrescol_UNIQUE` (`MembresComite` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`Representant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`Representant` (
  `idRepresentant` INT NOT NULL,
  `nomRepresentant` VARCHAR(45) NOT NULL,
  `prenomRepresentant` VARCHAR(45) NOT NULL,
  `adresseRepresentant` VARCHAR(45) NOT NULL,
  `cpRepresentant` VARCHAR(45) NOT NULL,
  `villeRepresentant` VARCHAR(45) NOT NULL,
  `telephoneMobile` VARCHAR(45) NOT NULL,
  `mailRepresentant` VARCHAR(45) NULL,
  `telephoneFixe` VARCHAR(45) NULL,
  PRIMARY KEY (`idRepresentant`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`Represente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`Represente` (
  `idRepresentant` INT NOT NULL,
  `Membres_idMembres` INT NOT NULL,
  INDEX `fk_Represente_Representant1_idx` (`idRepresentant` ASC),
  PRIMARY KEY (`Membres_idMembres`, `idRepresentant`),
  CONSTRAINT `fk_Represente_Representant1`
    FOREIGN KEY (`idRepresentant`)
    REFERENCES `cpk`.`Representant` (`idRepresentant`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Represente_Membres1`
    FOREIGN KEY (`Membres_idMembres`)
    REFERENCES `cpk`.`Membres` (`idMembres`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`Equipes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`Equipes` (
  `idEquipe` INT NOT NULL AUTO_INCREMENT,
  `EquipeNom` VARCHAR(45) NOT NULL,
  `imageEquipe` VARCHAR(255) NULL,
  PRIMARY KEY (`idEquipe`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`Joue`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`Joue` (
  `Equipe_idNomEquipe` INT NOT NULL,
  `Membres_idMembres` INT NOT NULL,
  `isCapitaine` TINYINT NULL,
  INDEX `fk_Joue_Equipe1_idx` (`Equipe_idNomEquipe` ASC),
  PRIMARY KEY (`Membres_idMembres`, `Equipe_idNomEquipe`),
  CONSTRAINT `fk_Joue_Equipe1`
    FOREIGN KEY (`Equipe_idNomEquipe`)
    REFERENCES `cpk`.`Equipes` (`idEquipe`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Joue_Membres1`
    FOREIGN KEY (`Membres_idMembres`)
    REFERENCES `cpk`.`Membres` (`idMembres`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`Fonctions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`Fonctions` (
  `idFonction` INT NOT NULL AUTO_INCREMENT,
  `Fonction` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFonction`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`Actualites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`Actualites` (
  `idArticle` INT NOT NULL,
  `titre` VARCHAR(45) NOT NULL,
  `contenuArticle` LONGTEXT NOT NULL,
  `imageArticle` VARCHAR(255) NULL,
  `Membres_idMembres` INT NOT NULL,
  PRIMARY KEY (`idArticle`, `Membres_idMembres`),
  INDEX `fk_Actualites_Membres1_idx` (`Membres_idMembres` ASC),
  CONSTRAINT `fk_Actualites_Membres1`
    FOREIGN KEY (`Membres_idMembres`)
    REFERENCES `cpk`.`Membres` (`idMembres`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`EquipeVisiteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`EquipeVisiteur` (
  `idEquipeVisiteur` INT NOT NULL AUTO_INCREMENT,
  `EquipeVisiteurNom` VARCHAR(45) NOT NULL,
  `logoEquipeVisiteur` VARCHAR(255) NULL,
  PRIMARY KEY (`idEquipeVisiteur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`CalendrierClub`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`CalendrierClub` (
  `idMatch` INT NOT NULL AUTO_INCREMENT,
  `dateMatch` VARCHAR(45) NOT NULL,
  `heureMatch` VARCHAR(45) NOT NULL,
  `lieu` VARCHAR(45) NULL,
  `resultat` VARCHAR(45) NULL,
  `Equipe_idNomEquipe` INT NOT NULL,
  `EquipeVisiteur_idEquipeVisiteur` INT NOT NULL,
  `Membres_idMembres` INT NOT NULL,
  PRIMARY KEY (`idMatch`, `Membres_idMembres`),
  INDEX `fk_CalendrierClub_Equipe1_idx` (`Equipe_idNomEquipe` ASC),
  INDEX `fk_CalendrierClub_EquipeVisiteur1_idx` (`EquipeVisiteur_idEquipeVisiteur` ASC),
  INDEX `fk_CalendrierClub_Membres1_idx` (`Membres_idMembres` ASC),
  CONSTRAINT `fk_CalendrierClub_Equipe1`
    FOREIGN KEY (`Equipe_idNomEquipe`)
    REFERENCES `cpk`.`Equipes` (`idEquipe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CalendrierClub_EquipeVisiteur1`
    FOREIGN KEY (`EquipeVisiteur_idEquipeVisiteur`)
    REFERENCES `cpk`.`EquipeVisiteur` (`idEquipeVisiteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CalendrierClub_Membres1`
    FOREIGN KEY (`Membres_idMembres`)
    REFERENCES `cpk`.`Membres` (`idMembres`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cpk`.`DatesDeFonctions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cpk`.`DatesDeFonctions` (
  `idDatesDeFonctions` INT NOT NULL AUTO_INCREMENT,
  `DatesDeFonctionsDebut` DATETIME NOT NULL,
  `DatesDeFonctionsFin` DATETIME NOT NULL,
  `Fonctions_idFonction` INT NOT NULL,
  `Membres_idMembres` INT NOT NULL,
  PRIMARY KEY (`idDatesDeFonctions`, `Fonctions_idFonction`, `Membres_idMembres`),
  INDEX `fk_DatesDeFonctions_Fonctions1_idx` (`Fonctions_idFonction` ASC),
  INDEX `fk_DatesDeFonctions_Membres1_idx` (`Membres_idMembres` ASC),
  CONSTRAINT `fk_DatesDeFonctions_Fonctions1`
    FOREIGN KEY (`Fonctions_idFonction`)
    REFERENCES `cpk`.`Fonctions` (`idFonction`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DatesDeFonctions_Membres1`
    FOREIGN KEY (`Membres_idMembres`)
    REFERENCES `cpk`.`Membres` (`idMembres`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
