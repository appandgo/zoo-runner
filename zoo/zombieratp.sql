-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 06 Novembre 2014 à 09:25
-- Version du serveur: 5.5.40
-- Version de PHP: 5.4.4-14+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Base de données: `PaimentEnLigne`
--

-- --------------------------------------------------------

--
-- Structure de la table `alerte`
--

CREATE TABLE IF NOT EXISTS `alerte` (
  `id_alerte` int(11) NOT NULL AUTO_INCREMENT,
  `datee` datetime DEFAULT NULL,
  `confiance` int(11) DEFAULT NULL,
  `description` text CHARACTER SET latin1,
  `puissance` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alerte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;



--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(16) DEFAULT NULL,
  `mdp` varchar(32) DEFAULT NULL,
  `dateEnregistrement` datetime DEFAULT NULL,
  `dateDerniereConnexion` datetime DEFAULT NULL,
  `email` varchar(36) DEFAULT NULL,
  `confiance` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `pseudo` (`pseudo`,`email`),
  UNIQUE KEY `unique_pseudo` (`pseudo`),
  UNIQUE KEY `unique_pseudo_mail` (`pseudo`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `dateEnregistrement`, `dateDerniereConnexion`, `email`, `confiance`, `rang`) VALUES
(1, 'lol', '9cdfb439c7876e703e307864c9167a15', '2014-11-02 00:00:00', '2014-11-05 15:20:29', 'lol', 0, NULL),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', '2014-11-02 00:00:00', '2014-11-06 09:11:38', 'test', 0, NULL),
(3, 'bossard', '9a106b8cced1ae1f8dfd0e4bc5d405b3', '2014-11-03 00:00:00', '2014-11-03 15:11:59', 'bossard', 0, NULL),
(7, 'mopiou', '098f6bcd4621d373cade4e832627b4f6', '2014-11-05 00:00:00', '2014-11-05 00:00:00', 'test2', 0, NULL),
(12, 'wald', '88b0447328f114c763ebba2ef70f680c', '2014-11-05 00:00:00', '2014-11-05 21:33:03', 'wald@tctf.fr', 0, NULL),
(13, 'mathieu', 'cc479ee70694ef507cb504b0ae89cb87', '2014-11-06 00:00:00', '2014-11-06 09:00:44', 'mathieu', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `zombie`
--

CREATE TABLE IF NOT EXISTS `zombie` (
  `id_type_zombie` int(11) NOT NULL AUTO_INCREMENT,
  `type_zombie` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_type_zombie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

