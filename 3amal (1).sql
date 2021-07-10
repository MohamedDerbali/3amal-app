-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Juillet 2020 à 11:24
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `3amal`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrations`
--

CREATE TABLE IF NOT EXISTS `administrations` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `mdp_a` varchar(255) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `employeur`
--

CREATE TABLE IF NOT EXISTS `employeur` (
  `id_e` int(11) NOT NULL AUTO_INCREMENT,
  `nentreprise_e` varchar(255) NOT NULL,
  `sactivit_e` varchar(255) NOT NULL,
  `catg_e` varchar(255) NOT NULL,
  `taille_e` varchar(255) NOT NULL,
  `pays_e` varchar(255) NOT NULL,
  `region_e` varchar(255) NOT NULL,
  `ville_e` varchar(255) NOT NULL,
  `adresse_e` varchar(255) NOT NULL,
  `tele_e` int(15) NOT NULL,
  `prenom_e` varchar(255) NOT NULL,
  `nom_e` varchar(255) NOT NULL,
  `fonction_e` varchar(255) NOT NULL,
  `tel_e` int(15) NOT NULL,
  `email_e` varchar(255) NOT NULL,
  `mdp_e` varchar(255) NOT NULL,
  PRIMARY KEY (`id_e`),
  UNIQUE KEY `email.e` (`catg_e`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_f` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email_f` varchar(255) NOT NULL,
  `cv` text NOT NULL,
  PRIMARY KEY (`id_f`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_f`, `nom`, `email_f`, `cv`) VALUES
(0, '', 'info', '');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `mdp` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `id_p` int(11) NOT NULL,
  `date_p` date NOT NULL,
  `domaine_p` varchar(255) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id_s` int(11) NOT NULL,
  `nom_s` varchar(255) NOT NULL,
  `email_s` varchar(255) NOT NULL,
  `cv_s` text NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id_s`, `nom_s`, `email_s`, `cv_s`) VALUES
(0, 'ahmed', 'ahmed310@gmail.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `nom_u` varchar(255) NOT NULL,
  `prenom_u` varchar(255) NOT NULL,
  `age_u` int(3) NOT NULL,
  `datnais_u` int(12) NOT NULL,
  `email_u` varchar(255) NOT NULL,
  `tel_u` int(30) NOT NULL,
  `adr_u` varchar(255) NOT NULL,
  `codpost_u` int(5) NOT NULL,
  `cv_u` text NOT NULL,
  `mdp_u` varchar(255) NOT NULL,
  `nomcomp_u` varchar(255) NOT NULL,
  `domaine_u` varchar(255) NOT NULL,
  `nvetude` varchar(255) NOT NULL,
  PRIMARY KEY (`id_u`),
  UNIQUE KEY `email.u` (`email_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `nom_u`, `prenom_u`, `age_u`, `datnais_u`, `email_u`, `tel_u`, `adr_u`, `codpost_u`, `cv_u`, `mdp_u`, `nomcomp_u`, `domaine_u`, `nvetude`) VALUES
(1, 'nesrine', '1997-10-04', 23, 0, 'nesrineboumaiza24@gmail.com', 0, '', 0, '0', '', '', 'info', ''),
(5, 'asma', 'jelassi', 28, 0, 'nesbou24@gmail.com', 24074565, 'tr', 1144, '0', 'azerty', '', 'science', ''),
(6, 'asma', 'jelassi', 28, 0, 'jlassiasma310@gmail.com', 24074565, 'mornga', 1144, '0', 'asma', '', 'info', ''),
(8, '', '', 0, 0, '', 0, '', 0, '0', '', '', '', ''),
(12, 'samira', 'jlassi', 18, 0, 'asmajlassi999@gmail.com', 24074565, 'tunis', 1144, '0', 'samira.jlassi', '', 'informatique', ''),
(13, 'nour', 'jlassi', 18, 0, 'nourjlassi10@gmail.com', 24074565, 'tunis', 1144, 'asma.pfe.png', 'nourjlassi', '', 'informatique', ''),
(14, 'nour', 'trabelsi', 18, 0, 'nourtr@gmail.com', 24074565, 'tunis', 1144, 'benchmarking-grille-dANALYSE-du-site-webb.pdf', 'nour.000', '', 'informatique', ''),
(16, 'nour', 'trabelsi', 18, 0, 'nourtrabelsi20@gmail.com', 24074565, 'tunis', 1144, 'benchmarking-grille-dANALYSE-du-site-webb.pdf', 'nourtrabelsi', '', 'informatique', ''),
(17, 'houssem', 'jelassi', 23, 0, 'houssem@gmail.com', 24074565, 'mornga', 1144, 'keljob (2).pdf', 'houssem', '', 'info', ''),
(18, 'wejih', 'jelassi', 30, 0, 'wajih@gmail.com', 24074565, 'mornga', 1144, 'cahier-de-charge-3amal-2 (1).pdf', 'wa', '', 'info', ''),
(19, 'nour', 'jelassi', 28, 0, 'nour@gmail.com', 24074565, 'tr', 1144, 'farojob.pdf', 'nour', '', 'math', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
