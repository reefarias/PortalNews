-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.33-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema portalnews
--

CREATE DATABASE IF NOT EXISTS portalnews;
USE portalnews;

--
-- Definition of table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `login` varchar(300) NOT NULL,
  `senha` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrador`
--

/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` (`id`,`nome`,`email`,`login`,`senha`) VALUES 
 (1,'teste','teste','teste','teste'),
 (2,'Fernando','ferbs89@gmail.com','fernando.sanches','1605'),
 (3,'Renan','renan.rfarias@gmail.com','renan.farias','1234');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;


--
-- Definition of table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`,`nome`) VALUES 
 (1,'Categoria 1'),
 (2,'Categoria 2'),
 (3,'Categoria 3');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


--
-- Definition of table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAutor` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `titulo` varchar(400) NOT NULL,
  `conteudo` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAutor` (`idAutor`,`idCategoria`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticia`
--

/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` (`id`,`idAutor`,`idCategoria`,`data`,`titulo`,`conteudo`) VALUES 
 (1,1,1,'2014-08-09 14:41:00','Teste','Teste'),
 (2,2,3,'2014-08-09 14:41:00','teste','teste');
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
