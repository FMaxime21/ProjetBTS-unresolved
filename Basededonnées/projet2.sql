-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 20 Mai 2020 à 08:03
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet2`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `Numero` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Images` varchar(100) NOT NULL,
  `Position` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `CodeBarre` int(11) NOT NULL,
  `ID_Categorie` int(11) NOT NULL,
  `ID_Souscategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`Numero`, `Nom`, `Prix`, `Images`, `Position`, `Stock`, `CodeBarre`, `ID_Categorie`, `ID_Souscategorie`) VALUES
(1, 'lampe', 15, 'Projet2\\Images\\Lampe.jpg', 1, 5, 101, 1, 1),
(2, 'Stylo', 3, 'Projet2\\Images\\Stylo.png', 2, 5, 102, 1, 1),
(3, 'Oreiller', 10, 'Projet2\\Images\\Oreiller.png', 3, 3, 103, 1, 2),
(4, 'Matelas', 50, 'Projet2\\Images\\Matelas.png', 4, 2, 104, 1, 2),
(5, 'Ecran', 100, 'Projet2\\Images\\Ecran.jpg', 5, 3, 105, 2, 3),
(6, 'Souris', 10, 'Projet2\\Images\\Souris.png', 6, 3, 106, 2, 3),
(7, 'telephone', 200, 'Projet2\\Images\\telephone.png', 7, 5, 107, 2, 4),
(8, 'chargeur', 20, 'Projet2\\Images\\chargeur.png', 8, 10, 108, 2, 4),
(9, 'visseuse', 90, 'Projet2\\Images\\visseuse.png', 9, 5, 109, 3, 5),
(10, 'percussion', 90, 'Projet2\\Images\\percussion.png', 10, 5, 110, 3, 5),
(11, 'electrique', 1000, 'Projet2\\Images\\electrique.png', 11, 3, 111, 3, 6),
(12, 'couchee', 1000, 'Projet2\\Images\\couchee.png', 12, 3, 112, 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `Nom`) VALUES
(1, 'Mobilier'),
(2, 'Informatique'),
(3, 'Outillage');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(50) NOT NULL DEFAULT '',
  `modepass` varchar(32) NOT NULL DEFAULT '',
  `image_url` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `utilisateur`, `modepass`, `image_url`) VALUES
(1, 'mon_login', '13b5a6978acf3f0c477bb826e43e8321', 'Lampe.png');

-- --------------------------------------------------------

--
-- Structure de la table `souscategorie`
--

CREATE TABLE `souscategorie` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `ID_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `souscategorie`
--

INSERT INTO `souscategorie` (`ID`, `Nom`, `ID_Categorie`) VALUES
(1, 'Bureau', 1),
(2, 'Lit', 1),
(3, 'PC', 2),
(4, 'telephonie', 2),
(5, 'perceuse', 3),
(6, 'betonniere', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Numero`),
  ADD KEY `fk_souscategorie_id` (`ID_Souscategorie`),
  ADD KEY `fk_categorie_id` (`ID_Categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_categorie2_id` (`ID_Categorie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `Numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_categorie_id` FOREIGN KEY (`ID_Categorie`) REFERENCES `categorie` (`ID`),
  ADD CONSTRAINT `fk_souscategorie_id` FOREIGN KEY (`ID_Souscategorie`) REFERENCES `souscategorie` (`ID`);

--
-- Contraintes pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  ADD CONSTRAINT `fk_categorie2_id` FOREIGN KEY (`ID_Categorie`) REFERENCES `categorie` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
