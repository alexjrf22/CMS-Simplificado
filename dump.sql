CREATE SCHEMA IF NOT EXISTS `site` DEFAULT CHARACTER SET utf8 ;
USE `site` ;

-- -----------------------------------------------------
-- Table users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`idusers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pages` (
  `idpages` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(250) NOT NULL,
  `url` VARCHAR(250) NOT NULL,
  `body` TEXT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  `users_idusers` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idpages`),
  INDEX `fk_pages_users_idx` (`users_idusers` ASC),
  CONSTRAINT `fk_pages_users`
    FOREIGN KEY (`users_idusers`)
    REFERENCES `users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;




