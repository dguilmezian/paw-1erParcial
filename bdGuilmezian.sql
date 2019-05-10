CREATE DATABASE `encuesta` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `encuestado` (
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `respuesta` varchar(45) DEFAULT NULL,
  `idencuestado` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idencuestado`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

CREATE TABLE `lenguajes` (
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `encuesta`.`lenguajes`
(`nombre`)
VALUES
("java");
INSERT INTO `encuesta`.`lenguajes`
(`nombre`)
VALUES
("python");
