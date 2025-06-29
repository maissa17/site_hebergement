-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Sam 28 Juin 2025 à 00:53
-- Version du serveur: 5.5.10
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `resaa`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `USER` char(8) NOT NULL,
  `MDP` char(10) DEFAULT NULL,
  `NOMCPTE` char(40) DEFAULT NULL,
  `PRENOMCPTE` char(30) DEFAULT NULL,
  `DATEINSCRIP` date DEFAULT NULL,
  `DATEFERME` date DEFAULT NULL,
  `TYPECOMPTE` char(3) DEFAULT NULL,
  `ADRMAILCPTE` char(60) DEFAULT NULL,
  `NOTELCPTE` char(15) DEFAULT NULL,
  `NOPORTCPTE` char(15) DEFAULT NULL,
  PRIMARY KEY (`USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`USER`, `MDP`, `NOMCPTE`, `PRENOMCPTE`, `DATEINSCRIP`, `DATEFERME`, `TYPECOMPTE`, `ADRMAILCPTE`, `NOTELCPTE`, `NOPORTCPTE`) VALUES
('admin1', 'admin123', 'Admin', 'Test', '2024-01-01', NULL, 'adm', 'admin@example.com'),
('client1', 'client123', 'Client', 'Demo', '2024-02-01', NULL, 'cli', 'client1@example.com');
-- --------------------------------------------------------

--
-- Structure de la table `etat_resa`
--

CREATE TABLE IF NOT EXISTS `etat_resa` (
  `CODEETATRESA` char(2) NOT NULL,
  `NOMETATRESA` char(15) DEFAULT NULL,
  PRIMARY KEY (`CODEETATRESA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etat_resa`
--

INSERT INTO `etat_resa` (`CODEETATRESA`, `NOMETATRESA`) VALUES
('1', 'bloquée'),
('2', 'arrhes versées'),
('3', 'solde'),
('4', 'clés retirés'),
('5', 'annulée'),
('6', 'terminée');

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

CREATE TABLE IF NOT EXISTS `hebergement` (
  `NOHEB` int(4) NOT NULL AUTO_INCREMENT,
  `CODETYPEHEB` char(5) NOT NULL,
  `NOMHEB` char(40) DEFAULT NULL,
  `NBPLACEHEB` int(2) DEFAULT NULL,
  `SURFACEHEB` int(3) DEFAULT NULL,
  `INTERNET` char(4) DEFAULT NULL,
  `ANNEEHEB` int(4) DEFAULT NULL,
  `SECTEURHEB` char(15) DEFAULT NULL,
  `ORIENTATIONHEB` char(5) DEFAULT NULL,
  `ETATHEB` char(32) DEFAULT NULL,
  `DESCRIHEB` char(200) DEFAULT NULL,
  `PHOTOHEB` char(50) DEFAULT NULL,
  `TARIFSEMHEB` decimal(7,2) DEFAULT NULL,
  `promotion` int(2) NOT NULL,
  PRIMARY KEY (`NOHEB`),
  KEY `I_FK_HEBERGEMENT_TYPE_HEB` (`CODETYPEHEB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `hebergement`
--

INSERT INTO `hebergement` (`NOHEB`, `CODETYPEHEB`, `NOMHEB`, `NBPLACEHEB`, `SURFACEHEB`, `INTERNET`, `ANNEEHEB`, `SECTEURHEB`, `ORIENTATIONHEB`, `ETATHEB`, `DESCRIHEB`, `PHOTOHEB`, `TARIFSEMHEB`, `promotion`) VALUES
(1, '1', 'La Colinne Bleue', 4, 62, 'non', 2002, '30 min de la vi', 'nord', 'operationnelle', 'petit appart ï¿½ 30 min de la ville au sud', 'appt1.jfif', 430.00, 20),
(2, '2', 'Platoche', 8, 48, 'oui', 2015, 'loin', 'nord', 'renovation', 'bon dodo', 'appt2.jfif', 480.00, 5),
(3, '1', 'Tonkam', 4, 22, 'oui', 2018, 'oui', 'ouest', 'operationnelle', 'incroyable', 'bungalow1.jfif', 320.00, 0),
(4, '1', 'Bungy', 3, 17, 'non', 1996, 'haha', 'est', 'renovation', 'froid', 'bungalow2.jfif', 122.00, 0),
(6, '1', 'test', 4, 30, 'oui', 2016, 'ZZ', 'nord', 'operationnelle', 'bien', '', 190.00, 0);

-- --------------------------------------------------------

--
-- Structure de la table `resa`
--

CREATE TABLE IF NOT EXISTS `resa` (
  `NORESA` int(5) NOT NULL AUTO_INCREMENT,
  `USER` char(8) NOT NULL,
  `DATEDEBSEM` date NOT NULL,
  `NOHEB` int(4) NOT NULL,
  `CODEETATRESA` char(2) NOT NULL,
  `DATERESA` date DEFAULT NULL,
  `DATEARRHES` date DEFAULT NULL,
  `MONTANTARRHES` decimal(7,2) DEFAULT NULL,
  `NBOCCUPANT` int(2) DEFAULT NULL,
  `TARIFSEMRESA` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`NORESA`),
  KEY `I_FK_RESA_COMPTE` (`USER`),
  KEY `I_FK_RESA_SEMAINE` (`DATEDEBSEM`),
  KEY `I_FK_RESA_HEBERGEMENT` (`NOHEB`),
  KEY `I_FK_RESA_ETAT_RESA` (`CODEETATRESA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42028 ;

--
-- Contenu de la table `resa`
--

INSERT INTO `resa` (`NORESA`, `USER`, `DATEDEBSEM`, `NOHEB`, `CODEETATRESA`, `DATERESA`, `DATEARRHES`, `MONTANTARRHES`, `NBOCCUPANT`, `TARIFSEMRESA`) VALUES
(1, 'client', '2023-08-05', 1, '1', '2024-04-28', '2024-04-28', 86.00, 6, 430.00),
(12023, 'client', '2023-08-05', 1, '1', '2023-12-01', '2023-12-01', 86.00, 7, 430.00),
(32023, 'client', '2023-09-30', 3, '1', '0000-00-00', '0000-00-00', 64.00, 3, 320.00),
(42023, 'client', '2023-10-14', 4, '1', '0000-00-00', '0000-00-00', 24.40, 6, 122.00),
(42024, 'client', '2023-09-30', 3, '1', '2024-04-28', '2024-04-28', 64.00, 14, 320.00),
(42025, 'client', '2023-09-02', 4, '1', '2024-04-28', '2024-04-28', 24.40, 4, 122.00),
(42026, 'client', '2023-10-14', 4, '1', '2024-04-28', '2024-04-28', 24.40, 3, 122.00),
(42027, 'client', '2023-08-05', 1, '1', '2024-04-30', '2024-04-30', 86.00, 3, 430.00);

-- --------------------------------------------------------

--
-- Structure de la table `semaine`
--

CREATE TABLE IF NOT EXISTS `semaine` (
  `DATEDEBSEM` date NOT NULL,
  `DATEFINSEM` date DEFAULT NULL,
  PRIMARY KEY (`DATEDEBSEM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `semaine`
--

INSERT INTO `semaine` (`DATEDEBSEM`, `DATEFINSEM`) VALUES
('2023-08-05', '2023-08-12'),
('2023-09-02', '2023-09-09'),
('2023-09-30', '2023-10-07'),
('2023-10-14', '2023-10-21'),
('2023-11-11', '2023-11-18');

-- --------------------------------------------------------

--
-- Structure de la table `type_heb`
--

CREATE TABLE IF NOT EXISTS `type_heb` (
  `CODETYPEHEB` char(5) NOT NULL,
  `NOMTYPEHEB` char(30) DEFAULT NULL,
  PRIMARY KEY (`CODETYPEHEB`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_heb`
--

INSERT INTO `type_heb` (`CODETYPEHEB`, `NOMTYPEHEB`) VALUES
('1', 'bungalow'),
('2', 'appartement'),
('3', 'maison'),
('4', 'cabane'),
('5', 'mobil home'),
('6', 'chalet'),
('7', 'tente');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD CONSTRAINT `hebergement_ibfk_1` FOREIGN KEY (`CODETYPEHEB`) REFERENCES `type_heb` (`CODETYPEHEB`);

--
-- Contraintes pour la table `resa`
--
ALTER TABLE `resa`
  ADD CONSTRAINT `resa_ibfk_1` FOREIGN KEY (`USER`) REFERENCES `compte` (`USER`),
  ADD CONSTRAINT `resa_ibfk_2` FOREIGN KEY (`DATEDEBSEM`) REFERENCES `semaine` (`DATEDEBSEM`),
  ADD CONSTRAINT `resa_ibfk_3` FOREIGN KEY (`NOHEB`) REFERENCES `hebergement` (`NOHEB`),
  ADD CONSTRAINT `resa_ibfk_4` FOREIGN KEY (`CODEETATRESA`) REFERENCES `etat_resa` (`CODEETATRESA`);
