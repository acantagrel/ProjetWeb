-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 26 fév. 2018 à 09:28
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
  `état` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `naissance` date NOT NULL,
  `login` int(50) NOT NULL,
  `mdp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_camp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
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
  ADD PRIMARY KEY (`id_camp`,`id_user`),
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
