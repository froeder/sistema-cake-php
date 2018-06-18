CREATE TABLE `estoque`.`usuarios` (
     `id` INT NOT NULL AUTO_INCREMENT ,
     `usuario` VARCHAR(255) NOT NULL , 
     `senha` VARCHAR(255) NOT NULL , 
     `level` VARCHAR(10) NOT NULL , 
     PRIMARY KEY (`id`)
     ) ENGINE = InnoDB;