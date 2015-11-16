SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `opiceisis` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `opiceisis` ;

-- -----------------------------------------------------
-- Table `opiceisis`.`isismembers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `opiceisis`.`isismembers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `realname` VARCHAR(45) NOT NULL ,
  `location` VARCHAR(45) NULL ,
  `twitter` VARCHAR(45) NULL ,
  `facebook` VARCHAR(45) NULL ,
  `youtube` VARCHAR(45) NULL ,
  `other` LONGTEXT NULL ,
  `dateadded` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `opiceisis` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
