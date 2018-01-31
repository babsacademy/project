-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 31 Janvier 2018 à 16:22
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `JQUERY`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categories`
--

CREATE TABLE `Categories` (
  `idcat` int(11) NOT NULL,
  `libellecat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Categories`
--

INSERT INTO `Categories` (`idcat`, `libellecat`) VALUES
(1, 'electromenager'),
(2, 'electronique'),
(3, 'informatique');

-- --------------------------------------------------------

--
-- Structure de la table `Produit`
--

CREATE TABLE `Produit` (
  `idpdt` int(11) NOT NULL,
  `libellepdt` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `qtestock` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `idscat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Produit`
--

INSERT INTO `Produit` (`idpdt`, `libellepdt`, `prix`, `qtestock`, `image`, `idscat`) VALUES
(5, 'refrigerateur', 250000, 2, 'pdts/77.jpg', 1),
(6, 'marmite electrique', 30000, 2, 'pdts/78.jpg', 1),
(7, 'cuisiniere', 150000, 2, 'pdts/50.jpeg', 1),
(8, 'machine à laver', 900000, 1, 'pdts/51.jpeg', 2),
(9, 'aspirateur', 250000, 2, 'pdts/52.jpeg', 2),
(10, 'ordinateur', 150000, 6, 'pdts/53.jpeg', 2),
(11, 'tablette', 100000, 5, 'pdts/54.jpeg', 3),
(12, 'cable', 27000, 50, 'pdts/55.jpeg', 3),
(15, 'souris', 5000, 58, 'pdts/56.jpeg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `SousCategorie`
--

CREATE TABLE `SousCategorie` (
  `idscat` int(11) NOT NULL,
  `libellescat` varchar(20) NOT NULL,
  `idcat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `SousCategorie`
--

INSERT INTO `SousCategorie` (`idscat`, `libellescat`, `idcat`) VALUES
(1, 'cuisiniere', 1),
(2, 'machine a laver', 1),
(3, 'refrigerateur', 1),
(4, 'ordinateur', 2),
(5, 'tablette', 2),
(6, 'smartphone', 2),
(7, 'machine', 3),
(8, 'logiciel', 3),
(9, 'chargeur', 3);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `pwd` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `nom`, `prenom`, `login`, `pwd`) VALUES
(1, 'sdfghjk', 'vbn,', 'root', 'bbyou'),
(2, 'dfghjk', 'vbn', 'root', 'bbyou'),
(3, 'dfghjk', 'vbn', 'root', 'bbeihh'),
(4, 'ami', 'mbaye', 'agent', '4581ml'),
(7, 'hsqdbH', 'sdisiq', 'sshdk', 'bbyou'),
(8, 'sy', 'anta', 'admin', 'an84'),
(10, 'sy', 'ndeye anta', 'root', 'bbyou');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`idcat`);

--
-- Index pour la table `Produit`
--
ALTER TABLE `Produit`
  ADD PRIMARY KEY (`idpdt`),
  ADD KEY `idscat` (`idscat`);

--
-- Index pour la table `SousCategorie`
--
ALTER TABLE `SousCategorie`
  ADD PRIMARY KEY (`idscat`),
  ADD KEY `idcat` (`idcat`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Produit`
--
ALTER TABLE `Produit`
  MODIFY `idpdt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `SousCategorie`
--
ALTER TABLE `SousCategorie`
  MODIFY `idscat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
