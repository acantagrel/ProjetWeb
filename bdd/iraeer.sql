-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 05 mars 2018 à 11:50
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `iraeer`
--

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

CREATE TABLE `campagne` (
  `id` int(11) NOT NULL,
  `id_exp1` int(11) NOT NULL,
  `id_exp2` int(11) DEFAULT NULL,
  `id_exp3` int(11) DEFAULT NULL,
  `id_exp4` int(11) DEFAULT NULL,
  `id_exp5` int(11) DEFAULT NULL,
  `quest` int(11) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '0',
  `état` tinyint(1) NOT NULL DEFAULT '0',
  `config` int(11) NOT NULL,
  `descr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `donneeattr`
--

CREATE TABLE `donneeattr` (
  `id` int(11) NOT NULL,
  `gauche` varchar(50) NOT NULL,
  `droite` varchar(50) NOT NULL,
  `inv` tinyint(1) NOT NULL DEFAULT '0',
  `partie` varchar(5) NOT NULL,
  `numeroPartie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donneeattr`
--

INSERT INTO `donneeattr` (`id`, `gauche`, `droite`, `inv`, `partie`, `numeroPartie`) VALUES
(1, 'Humain', 'Technique', 1, 'QP', 1),
(2, 'M\'isole', 'Me sociabilise', 0, 'QHI', 1),
(3, 'Plaisant', 'Déplaisant', 1, 'ATT', 1),
(4, 'Original', 'Conventionnel', 1, 'QHS', 1),
(5, 'Simple', 'Compliqué', 1, 'QP', 2),
(6, 'Professionnel', 'Amateur', 1, 'QHI', 2),
(7, 'Laid', 'Beau', 0, 'ATT', 2),
(8, 'Pratique', 'Pas pratique', 1, 'QP', 3),
(9, 'Agréable', 'Désagréable', 1, 'ATT', 3),
(10, 'Fastidieux', 'Efficace', 0, 'QP', 4),
(11, 'De bon goût', 'De mauvais goût', 1, 'QHI', 3),
(12, 'Prévisible', 'Imprévisible', 1, 'QP', 5),
(13, 'Bas de gamme', 'Haut de gamme', 0, 'QHI', 4),
(14, 'M\'exclut', 'M\'intègre', 0, 'QHI', 5),
(15, 'Me rapproche des autres', 'Me sépare des autres', 1, 'QHI', 6),
(16, 'Non présentable', 'Présentable', 0, 'QHI', 7),
(17, 'Rebutant', 'Attirant', 0, 'ATT', 4),
(18, 'Sans imagination', 'Créatif', 0, 'QHS', 2),
(19, 'Bon', 'Mauvais', 1, 'ATT', 5),
(20, 'Confus', 'Clair', 0, 'QP', 6),
(21, 'Repoussant', 'Attrayants', 0, 'ATT', 6),
(22, 'Audacieux', 'Prudent', 1, 'QHS', 3),
(23, 'Novateur', 'Consevateur', 1, 'QHS', 4),
(24, 'Ennuyeux', 'Captivant', 0, 'QHS', 5),
(25, 'Peu exigeant', 'Challenging', 0, 'QHS', 6),
(26, 'Motivant', 'Décourageant', 1, 'ATT', 7),
(27, 'Nouveau', 'Commun', 1, 'QHS', 7),
(28, 'Incontrôlable', 'Maîtrisable', 0, 'QP', 7);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `naissance` date NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_camp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ordre` tinyint(1) NOT NULL DEFAULT '0',
  `interface` tinyint(1) NOT NULL DEFAULT '0',
  `QP1` int(11) NOT NULL,
  `QP2` int(11) NOT NULL,
  `QP3` int(11) NOT NULL,
  `QP4` int(11) NOT NULL,
  `QP5` int(11) NOT NULL,
  `QP6` int(11) NOT NULL,
  `QP7` int(11) NOT NULL,
  `QHS1` int(11) NOT NULL,
  `QHS2` int(11) NOT NULL,
  `QHS3` int(11) NOT NULL,
  `QHS4` int(11) NOT NULL,
  `QHS5` int(11) NOT NULL,
  `QHS6` int(11) NOT NULL,
  `QHS7` int(11) NOT NULL,
  `QHI1` int(11) NOT NULL,
  `QHI2` int(11) NOT NULL,
  `QHI3` int(11) NOT NULL,
  `QHI4` int(11) NOT NULL,
  `QHI5` int(11) NOT NULL,
  `QHI6` int(11) NOT NULL,
  `QHI7` int(11) NOT NULL,
  `ATT1` int(11) NOT NULL,
  `ATT2` int(11) NOT NULL,
  `ATT3` int(11) NOT NULL,
  `ATT4` int(11) NOT NULL,
  `ATT5` int(11) NOT NULL,
  `ATT6` int(11) NOT NULL,
  `ATT7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exp1` (`id_exp1`),
  ADD KEY `exp2` (`id_exp2`),
  ADD KEY `exp3` (`id_exp3`),
  ADD KEY `exp4` (`id_exp4`),
  ADD KEY `exp5` (`id_exp5`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_camp`,`id_user`,`interface`),
  ADD KEY `profil` (`id_user`),
  ADD KEY `id_camp` (`id_camp`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD CONSTRAINT `exp1` FOREIGN KEY (`id_exp1`) REFERENCES `profil` (`id`),
  ADD CONSTRAINT `exp2` FOREIGN KEY (`id_exp2`) REFERENCES `profil` (`id`),
  ADD CONSTRAINT `exp3` FOREIGN KEY (`id_exp3`) REFERENCES `profil` (`id`),
  ADD CONSTRAINT `exp4` FOREIGN KEY (`id_exp4`) REFERENCES `profil` (`id`),
  ADD CONSTRAINT `exp5` FOREIGN KEY (`id_exp5`) REFERENCES `profil` (`id`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `campagne` FOREIGN KEY (`id_camp`) REFERENCES `campagne` (`id`),
  ADD CONSTRAINT `profil` FOREIGN KEY (`id_user`) REFERENCES `profil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
