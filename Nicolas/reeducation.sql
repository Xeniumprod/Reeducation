-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 30 Août 2016 à 22:49
-- Version du serveur :  5.5.38
-- Version de PHP :  5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `reeducation`
--
CREATE DATABASE IF NOT EXISTS `reeducation` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `reeducation`;

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE `chambres` (
`chambre_id` int(11) NOT NULL,
  `numero_chambre` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `etage` int(11) NOT NULL,
  `prestation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=132 ;

--
-- Contenu de la table `chambres`
--

INSERT INTO `chambres` (`chambre_id`, `numero_chambre`, `active`, `etage`, `prestation`) VALUES
(1, '201', 1, 2, 1),
(2, '202', 0, 2, 1),
(3, '202P', 1, 2, 0),
(4, '202F', 1, 2, 0),
(5, '203', 1, 2, 1),
(6, '204', 1, 2, 1),
(7, '205', 1, 2, 1),
(8, '206', 1, 2, 1),
(9, '207', 1, 2, 1),
(10, '208', 1, 2, 1),
(11, '209', 1, 2, 1),
(12, '210', 1, 2, 1),
(13, '211', 1, 2, 1),
(14, '212A', 1, 2, 1),
(15, '212B', 0, 2, 1),
(16, '212BP', 1, 2, 0),
(17, '212BF', 1, 2, 0),
(18, '214', 0, 2, 1),
(19, '214G', 1, 2, 0),
(20, '214D', 1, 2, 0),
(21, '216', 0, 2, 1),
(22, '216G', 1, 2, 0),
(23, '216D', 1, 2, 0),
(24, '217', 0, 2, 1),
(25, '217P', 1, 2, 0),
(26, '217F', 1, 2, 0),
(27, '218', 1, 2, 1),
(28, '301', 1, 3, 1),
(29, '302', 0, 3, 1),
(30, '302P', 1, 3, 0),
(31, '302F', 1, 3, 0),
(32, '303', 1, 3, 1),
(33, '304', 1, 3, 1),
(34, '305', 1, 3, 1),
(35, '306', 1, 3, 1),
(36, '307', 1, 3, 1),
(37, '308', 1, 3, 1),
(38, '309', 1, 3, 1),
(39, '310', 1, 3, 1),
(40, '311', 1, 3, 1),
(41, '312A', 1, 3, 1),
(42, '312B', 0, 3, 1),
(43, '312BP', 1, 3, 0),
(44, '312BF', 1, 3, 0),
(45, '314', 0, 3, 1),
(46, '314G', 1, 3, 0),
(47, '314D', 1, 3, 0),
(48, '316', 0, 3, 1),
(49, '316G', 1, 3, 0),
(50, '316D', 1, 3, 0),
(51, '317', 0, 3, 1),
(52, '317P', 1, 3, 0),
(53, '317F', 1, 3, 0),
(54, '318', 1, 3, 1),
(55, '401', 1, 4, 1),
(56, '402', 0, 4, 1),
(57, '402P', 1, 4, 0),
(58, '402F', 1, 4, 0),
(59, '403', 1, 4, 1),
(60, '404', 1, 4, 1),
(61, '405', 1, 4, 1),
(62, '406', 1, 4, 1),
(63, '407', 1, 4, 1),
(64, '408', 1, 4, 1),
(65, '409', 1, 4, 1),
(66, '410', 1, 4, 1),
(67, '411', 1, 4, 1),
(68, '412A', 1, 4, 1),
(69, '412B', 0, 4, 1),
(70, '412BP', 1, 4, 0),
(71, '412BF', 1, 4, 0),
(72, '414', 0, 4, 1),
(73, '414G', 1, 4, 0),
(74, '414D', 1, 4, 0),
(75, '416', 0, 4, 1),
(76, '416G', 1, 4, 0),
(77, '416D', 1, 4, 0),
(78, '417', 0, 4, 1),
(79, '417P', 1, 4, 0),
(80, '417F', 1, 4, 0),
(81, '418', 1, 4, 1),
(82, '501', 1, 5, 1),
(83, '502', 0, 5, 1),
(84, '502P', 1, 5, 0),
(85, '502F', 1, 5, 0),
(86, '503', 1, 5, 1),
(87, '504', 1, 5, 1),
(88, '505', 1, 5, 1),
(89, '506', 1, 5, 1),
(90, '507', 1, 5, 1),
(91, '508', 1, 5, 1),
(92, '509', 1, 5, 1),
(93, '510', 1, 5, 1),
(94, '511', 1, 5, 1),
(95, '512A', 1, 5, 1),
(96, '512B', 0, 5, 1),
(97, '512BP', 1, 5, 0),
(98, '512BF', 1, 5, 0),
(99, '514', 0, 5, 1),
(100, '514G', 1, 5, 0),
(101, '514D', 1, 5, 0),
(102, '516', 0, 5, 1),
(103, '516G', 1, 5, 0),
(104, '516D', 1, 5, 0),
(105, '517', 0, 5, 1),
(106, '517P', 1, 5, 0),
(107, '517F', 1, 5, 0),
(108, '518', 1, 5, 1),
(109, '601', 1, 6, 1),
(110, '602', 0, 6, 1),
(111, '602P', 1, 6, 0),
(112, '602F', 1, 6, 0),
(113, '603', 1, 6, 1),
(114, '604', 1, 6, 1),
(115, '605', 1, 6, 1),
(116, '606', 1, 6, 1),
(117, '607', 1, 6, 1),
(118, '608', 1, 6, 1),
(119, '609', 1, 6, 1),
(120, '610', 1, 6, 1),
(121, '611', 0, 6, 1),
(122, '611P', 1, 6, 0),
(123, '611F', 1, 6, 0),
(124, '612', 0, 6, 1),
(125, '612G', 1, 6, 0),
(126, '612D', 1, 6, 0),
(127, '614', 1, 6, 1),
(128, '614G', 0, 6, 0),
(129, '614D', 0, 6, 0),
(130, '615', 1, 6, 1),
(131, '616', 1, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etablissements`
--

DROP TABLE IF EXISTS `etablissements`;
CREATE TABLE `etablissements` (
  `id` int(11) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `type etablissement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etablissements`
--

INSERT INTO `etablissements` (`id`, `etablissement`, `type etablissement`) VALUES
(196, 'Port Royal', 'CRF');

-- --------------------------------------------------------

--
-- Structure de la table `fauteuils`
--

DROP TABLE IF EXISTS `fauteuils`;
CREATE TABLE `fauteuils` (
`id` int(11) NOT NULL,
  `NS` varchar(255) DEFAULT NULL,
  `CIP` varchar(255) DEFAULT NULL,
  `Inventaire` varchar(255) DEFAULT NULL,
  `utilise` tinyint(1) NOT NULL DEFAULT '0',
  `commentaire` text,
  `numero` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fauteuils`
--

INSERT INTO `fauteuils` (`id`, `NS`, `CIP`, `Inventaire`, `utilise`, `commentaire`, `numero`) VALUES
(1, '051124291228', '70045800469', '51124291228', 0, NULL, 'FRM01'),
(2, NULL, '70045800463', '51124291222', 0, NULL, 'FRM02'),
(3, '051124291211', '70045800452', '51124291211', 0, NULL, 'FRM03');

-- --------------------------------------------------------

--
-- Structure de la table `journals`
--

DROP TABLE IF EXISTS `journals`;
CREATE TABLE `journals` (
`id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

DROP TABLE IF EXISTS `materiels`;
CREATE TABLE `materiels` (
`materiel_id` int(11) NOT NULL,
  `test_canne` int(11) DEFAULT NULL,
  `test_deamb` int(11) DEFAULT NULL,
  `fauteuil_id` int(11) DEFAULT NULL,
  `verifie` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
`id` int(11) NOT NULL,
  `etablissement_id` int(11) NOT NULL,
  `nombre` int(3) NOT NULL,
  `IPP` int(5) NOT NULL,
  `IPP_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `genre` tinyint(1) NOT NULL,
  `chambre_id` int(11) NOT NULL,
  `date_entree` date NOT NULL,
  `date_sortie` date DEFAULT NULL,
  `presence` tinyint(1) NOT NULL,
  `medecin_id` int(11) NOT NULL,
  `kine_id` int(11) DEFAULT NULL,
  `ergo_id` int(11) DEFAULT NULL,
  `apa_id` int(11) DEFAULT NULL,
  `materiel_id` int(11) DEFAULT NULL,
  `planning_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`id`, `etablissement_id`, `nombre`, `IPP`, `IPP_id`, `nom`, `prenom`, `age`, `genre`, `chambre_id`, `date_entree`, `date_sortie`, `presence`, `medecin_id`, `kine_id`, `ergo_id`, `apa_id`, `materiel_id`, `planning_id`) VALUES
(1, 196, 1, 34323, 2147483647, 'PASTORE', 'Lucas', 34, 0, 71, '2016-12-25', '2017-03-24', 1, 0, 15, 0, 0, NULL, NULL),
(2, 196, 1, 24566, 2147483647, 'RADGIANI', 'Fabienne', NULL, 0, 36, '2016-12-25', '2018-04-19', 1, 0, 4, 0, 0, NULL, NULL),
(3, 196, 3, 12345, 2147483647, 'NOUILLO', 'Sylvie', NULL, 1, 46, '2016-08-10', NULL, 1, 3, 15, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `plannings`
--

DROP TABLE IF EXISTS `plannings`;
CREATE TABLE `plannings` (
`planning_id` int(11) NOT NULL,
  `planning_kine_id` int(11) DEFAULT NULL,
  `planning_ergo_id` int(11) DEFAULT NULL,
  `planning_apa_id` int(11) DEFAULT NULL,
  `planning_psy_id` int(11) DEFAULT NULL,
  `planning_ortho_id` int(11) DEFAULT NULL,
  `planning_social_id` int(11) DEFAULT NULL,
  `planning_diet_id` int(11) DEFAULT NULL,
  `planning_balneo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `planning_apas`
--

DROP TABLE IF EXISTS `planning_apas`;
CREATE TABLE `planning_apas` (
`planning_apa_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `planning_balneos`
--

DROP TABLE IF EXISTS `planning_balneos`;
CREATE TABLE `planning_balneos` (
`planning_balneo_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `planning_diets`
--

DROP TABLE IF EXISTS `planning_diets`;
CREATE TABLE `planning_diets` (
`planning_diet_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `planning_ergos`
--

DROP TABLE IF EXISTS `planning_ergos`;
CREATE TABLE `planning_ergos` (
`planning_ergo_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `planning_kines`
--

DROP TABLE IF EXISTS `planning_kines`;
CREATE TABLE `planning_kines` (
`planning_kine_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `planning_orthos`
--

DROP TABLE IF EXISTS `planning_orthos`;
CREATE TABLE `planning_orthos` (
  `planning_ortho_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `planning_psys`
--

DROP TABLE IF EXISTS `planning_psys`;
CREATE TABLE `planning_psys` (
`planning_psy_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `planning_socials`
--

DROP TABLE IF EXISTS `planning_socials`;
CREATE TABLE `planning_socials` (
`planning_social_id` int(11) NOT NULL,
  `lundi_1` time DEFAULT NULL,
  `duree_lundi_1` time DEFAULT NULL,
  `lundi_2` time DEFAULT NULL,
  `duree_lundi_2` time DEFAULT NULL,
  `mardi_1` time DEFAULT NULL,
  `duree_mardi_1` time DEFAULT NULL,
  `mardi_2` time DEFAULT NULL,
  `duree_mardi_2` time DEFAULT NULL,
  `mercredi_1` time DEFAULT NULL,
  `duree_mercredi_1` time DEFAULT NULL,
  `mercredi_2` time DEFAULT NULL,
  `duree_mercredi_2` time DEFAULT NULL,
  `jeudi_1` time DEFAULT NULL,
  `duree_jeudi_1` time DEFAULT NULL,
  `jeudi_2` time DEFAULT NULL,
  `duree_jeudi_2` time DEFAULT NULL,
  `vendredi_1` time DEFAULT NULL,
  `duree_vendredi_1` time DEFAULT NULL,
  `vendredi_2` time DEFAULT NULL,
  `duree_vendredi_2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `activite`, `role`) VALUES
(4, 'Nicolas', 'Rassinier', '196RASNIC', '$2y$10$qSUlGWkuj0GGKnxfpjMfBOJG0ozD9whoBCk106J48AOe8MQg7.SBC', 'kinesitherapeute', 'admin'),
(6, 'Benoit', 'CLAMAGIRAND', '196CLABEN', '$2y$10$GvK8EZ8eHw9zXNWkq2hXH.YaGrFTss2vW.tVkTeXLYpSdngFAH9Au', 'neuropsychologue', 'user'),
(15, 'BBB', 'AAA', '196AAABBB', '$2y$10$riLFgK5LtDrjSCCej4FXruIGGOT.eX.4HrOo/t6HGYEOufgtnowwm', 'kinesitherapeute', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
 ADD PRIMARY KEY (`chambre_id`);

--
-- Index pour la table `fauteuils`
--
ALTER TABLE `fauteuils`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `journals`
--
ALTER TABLE `journals`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `materiels`
--
ALTER TABLE `materiels`
 ADD PRIMARY KEY (`materiel_id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`id`), ADD KEY `IPP` (`IPP`);

--
-- Index pour la table `plannings`
--
ALTER TABLE `plannings`
 ADD PRIMARY KEY (`planning_id`);

--
-- Index pour la table `planning_apas`
--
ALTER TABLE `planning_apas`
 ADD PRIMARY KEY (`planning_apa_id`);

--
-- Index pour la table `planning_balneos`
--
ALTER TABLE `planning_balneos`
 ADD PRIMARY KEY (`planning_balneo_id`);

--
-- Index pour la table `planning_diets`
--
ALTER TABLE `planning_diets`
 ADD PRIMARY KEY (`planning_diet_id`);

--
-- Index pour la table `planning_ergos`
--
ALTER TABLE `planning_ergos`
 ADD PRIMARY KEY (`planning_ergo_id`);

--
-- Index pour la table `planning_kines`
--
ALTER TABLE `planning_kines`
 ADD PRIMARY KEY (`planning_kine_id`);

--
-- Index pour la table `planning_orthos`
--
ALTER TABLE `planning_orthos`
 ADD PRIMARY KEY (`planning_ortho_id`);

--
-- Index pour la table `planning_psys`
--
ALTER TABLE `planning_psys`
 ADD PRIMARY KEY (`planning_psy_id`);

--
-- Index pour la table `planning_socials`
--
ALTER TABLE `planning_socials`
 ADD PRIMARY KEY (`planning_social_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
MODIFY `chambre_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT pour la table `fauteuils`
--
ALTER TABLE `fauteuils`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `journals`
--
ALTER TABLE `journals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `materiels`
--
ALTER TABLE `materiels`
MODIFY `materiel_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `plannings`
--
ALTER TABLE `plannings`
MODIFY `planning_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning_apas`
--
ALTER TABLE `planning_apas`
MODIFY `planning_apa_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning_balneos`
--
ALTER TABLE `planning_balneos`
MODIFY `planning_balneo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning_diets`
--
ALTER TABLE `planning_diets`
MODIFY `planning_diet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning_ergos`
--
ALTER TABLE `planning_ergos`
MODIFY `planning_ergo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning_kines`
--
ALTER TABLE `planning_kines`
MODIFY `planning_kine_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning_psys`
--
ALTER TABLE `planning_psys`
MODIFY `planning_psy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning_socials`
--
ALTER TABLE `planning_socials`
MODIFY `planning_social_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
