SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`contestants`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`contestants` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(45) NOT NULL ,
  `lastname` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `artistname` VARCHAR(45) NOT NULL ,
  `tracktitle` VARCHAR(45) NOT NULL ,
  `soundcloud` VARCHAR(100) NOT NULL ,
  `sitelink` VARCHAR(45) NULL ,
  `votes` INT NULL ,
  PRIMARY KEY (`ID`) ,
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `soundcloud_UNIQUE` (`soundcloud` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vote_upload`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`vote_upload` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `voted` INT NULL ,
  `contestant_ID` INT NOT NULL ,
  PRIMARY KEY (`ID`) ,
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) ,
  INDEX `fk_vote_upload_competition_enter_idx` (`contestant_ID` ASC) ,
  CONSTRAINT `fk_vote_upload_competition_enter`
    FOREIGN KEY (`contestant_ID` )
    REFERENCES `mydb`.`contestants` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
