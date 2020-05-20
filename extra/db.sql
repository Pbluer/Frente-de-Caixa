CREATE SCHEMA `produtos` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `produtos`.`produto` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `codigo` INT NOT NULL,
  `produto` VARCHAR(100) NOT NULL,
  `quantidade` INT NOT NULL,
  `valor` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`ID`));
