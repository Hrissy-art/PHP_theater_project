-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 nov. 2023 à 15:35
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_hristina`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_author`
--

DROP TABLE IF EXISTS `admin_author`;
CREATE TABLE IF NOT EXISTS `admin_author` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin_author`
--

INSERT INTO `admin_author` (`id_admin`, `first_name`, `last_name`, `email`, `password`) VALUES
(3, 'Hristina', 'Stankova', 'hristinastankova89@gmail.com', '$2y$10$njZz2JpCEn7OjBo39u2w6eKwyh13xX1ZDnqc.g//ODSDPx7P1wbIm'),
(12, 'Thomas', 'Wagner', 'thomas@gmail.com', '$2y$10$pAGbNUxVX7ZT68Zew8jl/.LT1F/b9VAGKaeSAi6d1HoWkGTJUBOra'),
(14, 'Lilian', 'Milin', 'lilian@gmail.com', '$2y$10$FRrJpb6GmMVFyxvDiBEL8eNg86TIofXQyGxKbBUbYcBqfuYT3xBLa'),
(15, 'Geoffrey', 'Duc', 'g.d@gmail.com', '$2y$10$jrY1nMSP95/IeeOiSqThV.4ZxEe/SEEJBsbzaolzsAImkJioroH9y'),
(16, 'Nancy', 'Vianne', 'nan@gmail.com', '$2y$10$KesuBW95aN.OfTbIBy2PEeE6SHo/mOlipMmG3x0L/1/B8wGGiIlWG'),
(17, 'Dana', 'Silver', 'dana@gmail.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `art_director`
--

DROP TABLE IF EXISTS `art_director`;
CREATE TABLE IF NOT EXISTS `art_director` (
  `id_art_director` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_art_director`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `art_director`
--

INSERT INTO `art_director` (`id_art_director`, `name`) VALUES
(1, 'Thomas Weills'),
(2, 'Ivan Poloniav '),
(3, 'Vincent Milin'),
(4, 'Lilian Gaudin '),
(5, 'Mihail Turbulin');

-- --------------------------------------------------------

--
-- Structure de la table `cathegory`
--

DROP TABLE IF EXISTS `cathegory`;
CREATE TABLE IF NOT EXISTS `cathegory` (
  `id_cathegory` int NOT NULL AUTO_INCREMENT,
  `show_cathegory` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_cathegory`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cathegory`
--

INSERT INTO `cathegory` (`id_cathegory`, `show_cathegory`) VALUES
(1, 'comedy'),
(2, 'drame'),
(3, 'Puppet');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(7, 'Laurie', 'hristinastankova89@gmail.com', 'test'),
(8, 'Laurie', 'laurie@test.com', 'test'),
(9, 'Tatiana', 'tatiana@gmail.com', 'test'),
(10, 'Sarah', 'sarah@free.fr', 'test'),
(11, 'magdalena', 'magy@free.com', 'lorem ipsun'),
(12, 'Meijuan', 'meij@gmail.com', 'lorem ipsun'),
(13, 'Hristina Stankova', 'hristinastankova89@gmail.com', 'test'),
(14, 'Anna Povliakova', 'anna@gmail.com', 'test'),
(15, 'Anna Povliakova', 'anna@gmail.com', 'test'),
(16, 'Clement Clementin', 'c@gmail.com', 'hello? ');

-- --------------------------------------------------------

--
-- Structure de la table `show_actuality`
--

DROP TABLE IF EXISTS `show_actuality`;
CREATE TABLE IF NOT EXISTS `show_actuality` (
  `id_show` int NOT NULL AUTO_INCREMENT,
  `id_cathegory` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_actu` date NOT NULL,
  `id_art_director` int NOT NULL,
  `id_admin_author` int NOT NULL,
  PRIMARY KEY (`id_show`),
  KEY `id_cathegory` (`id_cathegory`),
  KEY `id_art_director` (`id_art_director`),
  KEY `id_admin_author` (`id_admin_author`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `show_actuality`
--

INSERT INTO `show_actuality` (`id_show`, `id_cathegory`, `title`, `image`, `texte`, `date_actu`, `id_art_director`, `id_admin_author`) VALUES
(12, 3, 'Turaquie', 'artists2-little.jpg', 'a fairytale', '2023-11-24', 3, 3),
(14, 3, 'Songe d\'été', 'circus-small.jpg', 'Lorem Ipsun ', '2023-11-24', 3, 3),
(15, 3, 'La nouvelle', 'artists-little.jpg', 'Lorem Ipsun ', '2023-12-15', 3, 3),
(16, 2, 'House of birds', 'ballet_little.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus neque tellus, quis luctus velit accumsan et. Maecenas eget tempus ipsum, in pellentesque lorem. Mauris vestibulum risus nulla, ', '2023-11-23', 2, 3),
(17, 3, 'The artist', 'dancer.jpg', 'Lorem Ipsun ', '2024-01-18', 3, 3),
(18, 2, 'Venise', 'femme2.jpg', 'Lorem Ipsun lorem ipsun lorem ', '2024-01-24', 1, 15),
(19, 3, 'Roses', 'masque2.jpg', 'Lorem Ipsun ', '2023-11-24', 3, 3),
(20, 3, 'Flying in the desert', 'little-boy.jpg', 'Lorem Ipsun ', '2024-02-08', 3, 3),
(21, 1, 'SOS', 'masques.jpg ', 'Lorem ipsun', '2023-12-08', 1, 15),
(22, 3, 'Fleurs', 'dancer.jpg', 'lorem ipsun', '2023-11-15', 3, 3),
(24, 1, 'Un miroir vers l\'océan ', 'femme-mains.jpg', 'Lorem Ipsun', '2023-12-21', 4, 16),
(27, 3, 'Je vous aime tous', 'clowns.jpg', 'lorem ipsun', '2023-11-30', 3, 3),
(28, 3, 'Henzel and Graetel', 'femme3.jpg', 'lorem ipsun', '2023-12-20', 3, 3),
(29, 3, 'Lessons of the day', 'boy2s.jpg', 'lorem ipsun', '2023-12-28', 3, 3),
(33, 2, 'test', 'artists2-little.jpg', 'lorem ipsun', '2023-11-23', 5, 16),
(44, 3, 'test', 'engin-akyurt-Heh_72fO2II-unsplash.jpg', 'lorem ipsun', '2023-11-24', 4, 16);

-- --------------------------------------------------------

--
-- Structure de la table `show_actuality_theater`
--

DROP TABLE IF EXISTS `show_actuality_theater`;
CREATE TABLE IF NOT EXISTS `show_actuality_theater` (
  `id_show_theater` int NOT NULL AUTO_INCREMENT,
  `id_show` int NOT NULL,
  `id_theater` int NOT NULL,
  PRIMARY KEY (`id_show_theater`),
  KEY `id_theater` (`id_theater`),
  KEY `id_show` (`id_show`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `show_actuality_theater`
--

INSERT INTO `show_actuality_theater` (`id_show_theater`, `id_show`, `id_theater`) VALUES
(1, 12, 1),
(2, 14, 2),
(3, 15, 3),
(4, 16, 4),
(5, 17, 5),
(6, 18, 6),
(7, 19, 7),
(8, 20, 8),
(9, 21, 11),
(10, 22, 12),
(11, 24, 14),
(12, 27, 11),
(13, 29, 14),
(14, 28, 11);

-- --------------------------------------------------------

--
-- Structure de la table `theater`
--

DROP TABLE IF EXISTS `theater`;
CREATE TABLE IF NOT EXISTS `theater` (
  `id_theater` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_theater`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `theater`
--

INSERT INTO `theater` (`id_theater`, `name`) VALUES
(1, 'Théâtre de la Croix Rousse'),
(2, 'Les Subsistances '),
(3, 'La maison'),
(4, 'Théâtre Le Voila'),
(5, 'La Maison rouge'),
(6, 'Théâtre National populaire'),
(7, 'Le rideau rouge'),
(8, 'Théâtre de Vénissieux'),
(9, 'L\'Espace Tonkin'),
(10, 'Le théâtre du coin '),
(11, 'Théâtre de Saint Priest'),
(12, 'le Géant'),
(13, 'la Comédie Odéon'),
(14, 'L\'espace zéro');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Thomas', 'Wagner', 'thomas@gmail.com', '$2y$10$anHpYo7pEaXlUwGOgujDvum5tY9zqipn4a9BBkPG7Lj0CdMckF/.O'),
(2, 'Violaine', 'Tarreaux', 'vv@gmail.com', '$2y$10$P1BLbMOZ5RTSBl4EXxvx9.0hUpfzsb0bE0kjoJMP9FgoPdSVMJs8C'),
(3, 'Nancy', 'Vianne', 'nan@gmail.com', '$2y$10$mjmnv.pM.GXl1rYaS1/Jn.xGmeVSFeNHFMHzO7E8SdObEGC24BmfG'),
(4, 'Georges', 'William', 'g@gmail.com', '$2y$10$FjvNbaqieNO1VKXLy45/s.wCEGBptuvz0IFAL/ueAlIxfp9oh9vw.'),
(5, 'Galina', 'Baouman', 'gamlina@gmail.com', '$2y$10$hRosR5N2//5DAZK6SLJAUOMRgzxvD/XE6OrNzFaCfwcAhbh6NQzfW'),
(6, 'Veronique', 'Didier', 'veronique@gmail.com', '$2y$10$iw4fGpD7KmDCatwUMOl/.OEl8hzbukwCSphZ5TEAA..aD.HcYiy3i'),
(7, 'helena', 'Robert', 'hrob@free.com', '$2y$10$/9l.fJiyol.H8nZuKX53tuw6ozdJoO1ug5Vup74tZL6s3gxMb3QWq'),
(8, 'magdalena', 'stankova', 'magdalena@gmail.com', '$2y$10$Wl92ggfy2kOfDcy6wqmnM.zBzD/gnsnhKI05XbX4BIMcQ.Qxt/p92'),
(9, 'Henri', 'Toa', 'toa@gmail.com', '$2y$10$s2QN6aJmz2hckRI3PYRGve2l9KmJdeuza7qv5v31dYHEG.qy63nRy'),
(10, 'Hristina', 'Stankova', 'hristinastankova89@gmail.com', '$2y$10$MShACJdoD7uVhd2JXziB4epBfUcUMQCpBMn7.agAdzOUOnhbBnoAO'),
(11, 'Clement', 'Clementin', 'c@gmail.com', '$2y$10$AucKn/XnGXzdY.zpr7umaOqJoEjGKuEqu.kYtU9SmhLFGqAzijdfy'),
(12, 'Thierry', 'Batteau', 't.batteau@gmail.com', '$2y$10$jKtpvw7g4OCLCKrZjnfKnuXErr3DZdA/7J/tJyMxR1d0v86q5ko0K'),
(13, 'Helena', 'Mathian', 'hel@gmail.com', '$2y$10$s1cpNbwhq516rOAEMzHLOOpr8nPH6GDJolKLzQgN3Oa6OkkJ9gyKS'),
(14, 'Tamara', 'Hacker', 'hacker@free.fr', '$2y$10$EfBozY1iexyw.WDg6DMIh.WiaHkHGKwRCsXQWXU3SHEsfbRpi4/i2'),
(15, 'Thomas', 'Vassilev', 'vassilevr@free.fr', '$2y$10$ttn.kdakfl/kCkCa9YR5HurLRPjxoySrMyBbd2zdSkbXn4t920XZm'),
(16, 'Aya', 'Bernabey', 'aya@abv.bg', '$2y$10$KqqERXg7dWmfb/w.n73BMeueSNX0QCUKuObL.H9uG4HOIanl8a2Ey'),
(17, 'Nelson', 'Meeten', 'n.meeten@yahoo.com', '$2y$10$pi4oBEuS1kf73nojDApmIuO4e.Obg5UeVS68ikC/ybEBcA01EiC86');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `show_actuality`
--
ALTER TABLE `show_actuality`
  ADD CONSTRAINT `show_actuality_ibfk_1` FOREIGN KEY (`id_cathegory`) REFERENCES `cathegory` (`id_cathegory`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `show_actuality_ibfk_2` FOREIGN KEY (`id_art_director`) REFERENCES `art_director` (`id_art_director`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `show_actuality_ibfk_3` FOREIGN KEY (`id_admin_author`) REFERENCES `admin_author` (`id_admin`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `show_actuality_theater`
--
ALTER TABLE `show_actuality_theater`
  ADD CONSTRAINT `show_actuality_theater_ibfk_1` FOREIGN KEY (`id_theater`) REFERENCES `theater` (`id_theater`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `show_actuality_theater_ibfk_2` FOREIGN KEY (`id_show`) REFERENCES `show_actuality` (`id_show`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
