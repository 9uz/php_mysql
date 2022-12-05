-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_praktik
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_praktik
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_praktik` DEFAULT CHARACTER SET utf8 ;
USE `db_praktik` ;

-- -----------------------------------------------------
-- Table `db_praktik`.`tbl_pengguna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_praktik`.`tbl_pengguna` (
  `id_pengguna` INT NOT NULL AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(100) NOT NULL,
  `alamat` TEXT NOT NULL,
  `gender` ENUM('P', 'W') NOT NULL,
  `agama` INT(1) NULL COMMENT '1= Islam\n2= Kristen Protestan\n3= Kristen Katolik\n4=  Hindu\n5= Buddha\n6=  Konghucu',
  PRIMARY KEY (`id_pengguna`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
