-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 oct. 2020 à 03:18
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `newlife_live`
--

-- --------------------------------------------------------

--
-- Structure de la table `rapport_avocat`
--

CREATE TABLE `rapport_avocat` (
  `id` int(255) NOT NULL,
  `identifier` text NOT NULL,
  `client` text NOT NULL,
  `avocat` text NOT NULL,
  `type` text NOT NULL,
  `date` text NOT NULL,
  `informationsupplementaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rapport_avocat`
--

INSERT INTO `rapport_avocat` (`id`, `identifier`, `client`, `avocat`, `type`, `date`, `informationsupplementaire`) VALUES
(6, 'steam:11000011193e4f0', 'Kenzo Shadow', 'Patrick Bisonnette', 'Demande de révision de dossier', '2020/10/06', 'fdsfdsf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rapport_avocat`
--
ALTER TABLE `rapport_avocat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rapport_avocat`
--
ALTER TABLE `rapport_avocat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
