SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `dbproyectosymfonycrud`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbproyectosymfonycrud`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `rol` VARCHAR(45) NULL ,
  `nombre` VARCHAR(45) NULL ,
  `apellido` VARCHAR(45) NULL ,
  `correo` VARCHAR(45) NULL ,
  `clave` VARCHAR(255) NULL ,
  `created_at` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbproyectosymfonycrud`.`tarea`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbproyectosymfonycrud`.`tarea` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL ,
  `contenido` VARCHAR(45) NULL ,
  `prioridad` VARCHAR(45) NULL ,
  `horas` INT NULL ,
  `usuario_id` INT NOT NULL ,
  `created_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `usuario_id`) ,
  INDEX `fk_tarea_usuario_idx` (`usuario_id` ASC) ,
  CONSTRAINT `fk_tarea_usuario`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `dbproyectosymfonycrud`.`usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
