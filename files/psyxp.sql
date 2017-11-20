-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Novembre 2017 à 14:15
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `psyxp`
--

-- --------------------------------------------------------

--
-- Structure de la table `passage`
--

CREATE TABLE `passage` (
  `id` varchar(16) NOT NULL,
  `segpa` varchar(5) NOT NULL,
  `codexp` varchar(4) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` char(1) NOT NULL,
  `classe` int(1) NOT NULL,
  `dys` char(1) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `postal` varchar(20) NOT NULL,
  `xp1` varchar(490) NOT NULL,
  `xp2` varchar(9) NOT NULL,
  `date_enregistrement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `passage`
--

INSERT INTO `passage` (`id`, `segpa`, `codexp`, `age`, `sexe`, `classe`, `dys`, `etablissement`, `postal`, `xp1`, `xp2`, `date_enregistrement`) VALUES
('NIRE121219987519', 'true', 'mcgo', 18, 'G', 3, 'N', 'KIKOO', '14569', '0000000000000001000110000000000001000000000000100000000000000100000001000000110100000000000101', '567654567', '2017-11-19 15:52:20'),
('NIRE111119953669', 'true', 'mcgo', 18, 'G', 3, 'N', 'KIKOO', '14569', '0000000000000001000110000000000001000000000000100000000000000100000001000000110100000000000101', '112255367', '2017-11-19 15:52:20');

-- --------------------------------------------------------

--
-- Structure de la table `result`
--

CREATE TABLE `result` (
  `id_eleve` varchar(16) NOT NULL,
  `b_rep_nc` int(11) NOT NULL,
  `b_rep_cl` int(11) NOT NULL,
  `m_rep_nc` int(11) NOT NULL,
  `m_rep_cl` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `q_rep` int(11) NOT NULL,
  `bpa` int(11) NOT NULL,
  `bpe` int(11) NOT NULL,
  `bpen` int(11) NOT NULL,
  `bpam` int(11) NOT NULL,
  `bpem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `result`
--

INSERT INTO `result` (`id_eleve`, `b_rep_nc`, `b_rep_cl`, `m_rep_nc`, `m_rep_cl`, `score`, `q_rep`, `bpa`, `bpe`, `bpen`, `bpam`, `bpem`) VALUES
('NIRE121219987519', 42, 7, 40, 5, -38, 567654567, 16, 16, 19, 5, 6),
('NIRE111119953669', 42, 7, 40, 5, -38, 112255367, 6, 12, 14, 2, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `passage`
--
ALTER TABLE `passage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id_eleve`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
