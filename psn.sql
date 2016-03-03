-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Mars 2016 à 22:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `psn`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Description` mediumtext NOT NULL,
  `Prix` float NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NomDuVendeur` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`Id`, `Nom`, `Description`, `Prix`, `Photo`, `Date`, `NomDuVendeur`) VALUES
(1, 'Premier Article', 'Article de Test, Pour voir si la structure de la base de donnée fonctionne bien.', 10, NULL, '2016-02-28 18:26:15', '0'),
(2, 'Article Second', 'Histoire de se repèrer...', 5, NULL, '2016-02-28 18:26:15', '0'),
(3, 'Pnouf', 'Je vends un pnouf tout neuf. Prix à débattre. Contactez moi au 32', 25, NULL, '2016-02-28 18:26:15', '0'),
(10, 'Chaise', 'chaise.			', 50, NULL, '2016-02-28 18:26:15', '0'),
(18, ' table', 'Table upcyclée.				', 52, 'upload/tabouretcassettes-BD.jpg', '2016-02-28 18:26:15', '0');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de l''utilisateur',
  `Nom` tinytext COMMENT 'Nom de l''utilisateur',
  `Prenom` tinytext COMMENT 'Prénom de l''utilisateur',
  `Pseudo` varchar(255) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL,
  `Mail` tinytext COMMENT 'email de l''utilisateur',
  `Age` float DEFAULT NULL COMMENT 'Age de l''utilisateur',
  `Pays` tinytext COMMENT 'Pays de l''utilisateur',
  `Departement` varchar(255) DEFAULT NULL COMMENT 'Département de vente',
  `Adresse` tinytext COMMENT 'Addresse de résidence',
  `TypeDeVendeur` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `Nom`, `Prenom`, `Pseudo`, `MotDePasse`, `Mail`, `Age`, `Pays`, `Departement`, `Adresse`, `TypeDeVendeur`) VALUES
(1, 'Test', 'User', '', '', 'test@gmail.com', 20, 'France', '92', '30 rue des pommiers', ''),
(2, 'Alexandre', 'de Guillebon', '', '', 'alexandre.deguillebon@supelec.fr', 20, 'France', '92', '15 rue des Pyrénées 92500', ''),
(3, 'jijjio', 'bolpkjn', '', '', 'lelec-95@hotmail.fr', 20, 'France', '92', '16 rue de la mouise', ''),
(4, 'jijjio', 'bolpkjn', '', '', 'lelec-95@hotmail.fr', 20, 'France', '92', '16 rue de la mouise', ''),
(5, 'jijjio', 'bolpkjn', '', '', 'lelec-95@hotmail.fr', 20, 'France', '92', '16 rue de la mouise', ''),
(6, 'Alexandre', 'de Guillebon', '', '', 'alexandre.deguillebon@supelec.fr', 20, 'France', '92', '15 rue des Pyrénées', ''),
(7, 'Cycl''up', '', '', '', 'Cyclup@gmail.com', 21, 'France', '92', '', ''),
(8, 'Alexandre', 'de Guillebon', 'FRESHEX', 'fe95ccc52e6422bcab282838d132999fb023c4ec', 'lelec-95@hotmail.fr', 20, 'France', '92', '', ''),
(9, 'jijjio', 'bolpkjn', 'jojo', '13de8889aecf8f48d9c799a1f3fb520fa748372a', 'jojo@hotmail.fr', 25, 'France', '19', '16 rue de la mouise', 'Particulier'),
(10, 'jijjio', 'bolpkjn', 'jojo', '13de8889aecf8f48d9c799a1f3fb520fa748372a', 'jojo@hotmail.fr', 25, 'France', '19', '16 rue de la mouise', 'Particulier');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
