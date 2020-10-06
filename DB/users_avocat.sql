-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 oct. 2020 à 03:17
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
-- Structure de la table `users_avocat`
--

CREATE TABLE `users_avocat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `rank` varchar(255) NOT NULL DEFAULT 'Aucun',
  `photo` text NOT NULL,
  `phonenumber` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users_avocat`
--

INSERT INTO `users_avocat` (`id`, `username`, `password`, `created_at`, `rank`, `photo`, `phonenumber`) VALUES
(28, 'Patrick Bisonnette', '$2y$10$aYgTgJq/fRQDw1yhYThBb.2J1KYNh2lhxhgblfCFMrk7rb1F4Fy0i', '0000-00-00 00:00:00', 'Juge', 'https://cdn.discordapp.com/attachments/752718194212601966/752720935676674048/unknown.png', '594-3500');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users_avocat`
--
ALTER TABLE `users_avocat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users_avocat`
--
ALTER TABLE `users_avocat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
