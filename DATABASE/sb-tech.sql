-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 août 2021 à 18:00
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sb-tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nom_admin` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `email`, `password`) VALUES
(1, 'SB-Tech', 'info@sb-tech.ma', 'sb-tech123');

-- --------------------------------------------------------

--
-- Structure de la table `admin_meteo`
--

CREATE TABLE `admin_meteo` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin_meteo`
--

INSERT INTO `admin_meteo` (`id`, `name`, `email`, `password`) VALUES
(1, 'brahim', 'brahim@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(5) NOT NULL,
  `nom_cat` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`, `image`) VALUES
(17, 'Robotique', 'téléchargement (1).jpg'),
(18, 'Electricité', 'téléchargement (2).jpg'),
(20, 'Electricité / Robotique / Pneumatique', 'ombriere-parking-photovoltaique-1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_msg` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `societe` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `partner`
--

CREATE TABLE `partner` (
  `id_part` int(5) NOT NULL,
  `nom_part` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_prd` int(5) NOT NULL,
  `nom_prd` text NOT NULL,
  `categorie` text NOT NULL,
  `details` text NOT NULL,
  `brand` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_prd`, `nom_prd`, `categorie`, `details`, `brand`, `image1`, `image2`, `image3`, `image4`) VALUES
(82, 'Climatiseur carrier 9000 btu', 'Robotique', '<ul>\r\n	<li>disjoncteur-diff-combine-1p-n-2mod-10ac-300ma-10ka-type-ac-26286817.jpg</li>\r\n	<li>disjoncteur-diff-combine-1p-n-2mod-10ac-300ma-10ka-type-ac-26286817.jpg</li>\r\n	<li>climatiseur-carrier-9000btu.jpg</li>\r\n</ul>\r\n', 'logo.png', '106010211.png', 'disjoncteur-phase-neutre-6a.jpg.pagespeed.ce.OE1JC9i6FX.jpg', '', ''),
(83, 'Disjoncteur', 'Robotique', '<p>zz</p>\r\n', 'logo.png', 'disjoncteur-phase-neutre-6a.jpg.pagespeed.ce.OE1JC9i6FX.jpg', '103346_1.jpg', '', ''),
(84, 'Disjoncteur', 'Robotique', '<p>zz</p>\r\n', 'logo.png', 'disjoncteur-phase-neutre-6a.jpg.pagespeed.ce.OE1JC9i6FX.jpg', '103346_1.jpg', '', ''),
(85, 'Disjoncteur', 'Robotique', '<p>zz</p>\r\n', 'logo.png', 'disjoncteur-phase-neutre-6a.jpg.pagespeed.ce.OE1JC9i6FX.jpg', '103346_1.jpg', '', ''),
(86, 'Disjoncteur', 'Robotique', '<p>zz</p>\r\n', 'logo.png', 'disjoncteur-phase-neutre-6a.jpg.pagespeed.ce.OE1JC9i6FX.jpg', '103346_1.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user_meteo`
--

CREATE TABLE `user_meteo` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `station` varchar(20) NOT NULL,
  `stationID` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_meteo`
--

INSERT INTO `user_meteo` (`id_user`, `username`, `password`, `station`, `stationID`, `action`) VALUES
(1, 'AGDEZ STATION', '123456', 'AGDEZ STATION', '20011506', 'true'),
(6, 'OUARZAZATE STATION', '123456', 'OURZAZAT STATION', '20011508', 'true');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `admin_meteo`
--
ALTER TABLE `admin_meteo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_msg`);

--
-- Index pour la table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_part`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_prd`);

--
-- Index pour la table `user_meteo`
--
ALTER TABLE `user_meteo`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `admin_meteo`
--
ALTER TABLE `admin_meteo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_part` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_prd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `user_meteo`
--
ALTER TABLE `user_meteo`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
