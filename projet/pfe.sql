-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 14 mai 2019 à 02:25
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Younes', 'Younes@admin.com', NULL, '$2y$10$XJfV2v4gzHPg8xIMGD00NeTOGsUwPlgrqhsiHzpoe/F1gJtPyObXO', NULL, '2019-05-11 12:31:36', '2019-05-11 12:31:36');

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

CREATE TABLE `agences` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `name`, `adresse`, `ville`, `tel`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maamer', '7ay karimaa', 'marrakech', '06513245548', 'mehdi@admin.com', NULL, '$2y$10$f.rIsEqKfhiHwjN3JtROHOkch7MUUbVRtp79YoAFVbTX9u/zRthw.', NULL, '2019-04-27 16:55:19', '2019-05-08 10:44:02'),
(2, 'chrif rmili', '510 lot lahrach', 'marrakech', '06-54165194', 'saad@gmail.com', NULL, '$2y$10$MEdJ5JMq7a9j03bKCi/0jeKECBHh8e2L3PEyX1ToKBI.GVGsZugfW', NULL, '2019-04-27 20:22:12', '2019-04-27 20:22:12');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `name`, `sujet`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sssssssss', 'sssssssssssss', 'ssss@dddd', 'ssssssssssssssssssssssssssssss', '2019-05-12 12:02:59', '2019-05-12 12:02:59'),
(2, 'saad', 'm3mr', 'ssss@dddd', 'dddddddddddddddd', '2019-05-12 19:15:50', '2019-05-12 19:15:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_27_170128_create_agences_table', 1),
(4, '2019_04_27_170312_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` int(11) NOT NULL,
  `id_client` int(10) UNSIGNED NOT NULL,
  `id_agence` int(11) UNSIGNED NOT NULL,
  `title_rec` varchar(250) NOT NULL,
  `description_rec` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'en attente de recevoir',
  `date_reclamation` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `id_client`, `id_agence`, `title_rec`, `description_rec`, `status`, `date_reclamation`, `created_at`, `updated_at`) VALUES
(7, 4, 1, 'alert', '120152', 'en attente de recevoir', '2019-05-11', '2019-05-11 20:58:04', '2019-05-11 20:58:04');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `id_voiture` int(10) NOT NULL,
  `id_client` int(10) UNSIGNED NOT NULL,
  `date_reservation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_depart` date NOT NULL,
  `date_retour` date NOT NULL,
  `lieu_livraison` varchar(100) DEFAULT 'MARRAKECH',
  `lieu_recuperation` varchar(100) DEFAULT 'MARRAKECH',
  `action` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `id_voiture`, `id_client`, `date_reservation`, `date_depart`, `date_retour`, `lieu_livraison`, `lieu_recuperation`, `action`, `created_at`, `updated_at`) VALUES
(4, 23, 4, '2019-05-07 13:00:48', '2019-05-29', '2019-05-29', 'MARRAKECH', 'MARRAKECH', 1, '2019-05-07 12:00:48', '2019-05-07 12:00:48'),
(5, 25, 4, '2019-05-07 13:03:04', '2019-05-10', '2019-05-11', 'MARRAKECH', 'MARRAKECH', 1, '2019-05-07 12:03:04', '2019-05-08 12:19:46'),
(6, 24, 4, '2019-05-07 13:03:50', '2019-05-29', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 12:03:50', '2019-05-07 12:03:50'),
(7, 23, 4, '2019-05-07 13:04:20', '2019-05-28', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 12:04:20', '2019-05-08 10:10:50'),
(8, 23, 4, '2019-05-07 13:04:59', '2019-05-29', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 12:04:59', '2019-05-08 10:12:57'),
(9, 23, 4, '2019-05-07 20:09:03', '2019-05-29', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 19:09:03', '2019-05-08 10:11:44'),
(10, 26, 3, '2019-05-08 00:58:20', '2019-05-30', '2019-06-06', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 23:58:20', '2019-05-07 23:58:20'),
(11, 26, 1, '2019-05-09 09:20:09', '2019-06-01', '2019-06-04', 'MARRAKECH', 'MARRAKECH', 1, '2019-05-09 08:20:09', '2019-05-09 08:27:25'),
(12, 30, 4, '2019-05-10 20:24:01', '2019-05-11', '2019-05-13', 'MARRAKECH', 'MARRAKECH', 1, '2019-05-10 19:24:01', '2019-05-10 19:24:46');

--
-- Déclencheurs `reservations`
--
DELIMITER $$
CREATE TRIGGER `updat` AFTER UPDATE ON `reservations` FOR EACH ROW if (new.action=1) then 
UPDATE voitures set voitures.dispo=1 WHERE id= old.id_voiture;
else 
UPDATE voitures set voitures.dispo=0 WHERE id= old.id_voiture;
end if
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CIN` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumPassport` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateNais` date DEFAULT NULL,
  `Adresse` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TEL` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Permis` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_Permis` date DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `CIN`, `NumPassport`, `DateNais`, `Adresse`, `TEL`, `Permis`, `Date_Permis`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chrif rmili', 'ee78475', '12345678900', '1996-04-30', 'sssssssssssssssssss', '06-54165194', 'B215452', '2019-05-23', 's@admin.com', NULL, '$2y$10$1RXlC7eCmyRUdEgv9PKnIumjn8NMsyqHW441BXBLwMPmjVxIjmuou', NULL, '2019-04-27 16:37:49', '2019-05-09 08:20:09'),
(3, 'CHRIFA', 'ee1201472', '', '2019-05-29', 'dddddd', '0666666666', '145786', '2019-05-30', 's.rmili@upm.ac.ma', NULL, '$2y$10$Usv20BJbhKyU6et67MVQj.2UlDYZs6qIdQjmj8ZyRPK5GZs49I5Wy', NULL, '2019-05-03 21:57:27', '2019-05-07 23:58:19'),
(4, 'saad rmili', 'eeeedddd', NULL, '2019-05-30', 'ddddd', '0325218', '12453567', '2019-05-25', 'saadrmili@outlook.com', NULL, '$2y$10$EVG1sh.IZKL.Xxu9UJbRyeL6cubO.uBj6EwAx2vwy4SjNGNKyduc2', NULL, '2019-05-07 11:16:01', '2019-05-10 19:24:01');

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `id` int(11) NOT NULL,
  `location_id` int(11) UNSIGNED NOT NULL,
  `immatriculation` varchar(50) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `mise_encirculation` date NOT NULL,
  `exp_assurance` date NOT NULL,
  `exp_visit` date NOT NULL,
  `exp_autoris` date NOT NULL,
  `prix_jour` float NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `path_pic` varchar(255) NOT NULL,
  `dispo` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`id`, `location_id`, `immatriculation`, `marque`, `modele`, `genre`, `fuel_type`, `mise_encirculation`, `exp_assurance`, `exp_visit`, `exp_autoris`, `prix_jour`, `photo`, `path_pic`, `dispo`, `created_at`, `updated_at`) VALUES
(23, 1, '12-a-2100', 'Renault', 'Clio 5', 'Berlines', 'Gasoline', '2019-04-29', '2019-05-07', '2019-05-08', '2019-05-17', 600, '15571864201.jpg', 'up/Agence Maamer/15571864201.jpg', 0, '2019-05-06 22:47:00', '2019-05-06 22:47:00'),
(24, 1, '11-b-14785', 'Mercedes', 'Classe A', 'Berlines', 'Diesel', '2019-03-27', '2019-05-17', '2019-05-23', '2019-05-18', 700, '155719289021.jpg', 'up/Agence Maamer/155719289021.jpg', 0, '2019-05-07 00:34:50', '2019-05-07 00:34:50'),
(25, 1, '32-h-21001', 'Range Rover', 'Evoque', '4x4', 'Diesel', '2019-05-27', '2019-05-19', '2019-05-16', '2019-05-31', 650, '155731573822.png', 'up/Agence Maamer/155731573822.png', 1, '2019-05-07 00:37:57', '2019-05-08 10:42:18'),
(26, 2, '12-a-2100', 'Mercedes', 'Classe S', 'Berlines', 'Diesel', '2019-05-14', '2019-05-11', '2019-05-21', '2019-05-31', 700, '15572770059.jpg', 'up/Agence chrif rmili/15572770059.jpg', 1, '2019-05-07 23:56:45', '2019-05-07 23:56:45'),
(27, 1, '1-a-2201', 'Renault', 'Talisman', 'Berlines', 'Diesel', '2017-12-01', '2019-05-01', '2019-01-01', '2019-05-16', 350, '15575187952.jpg', 'up/Agence Maamer/15575187952.jpg', 0, '2019-05-10 19:06:35', '2019-05-10 19:06:35'),
(28, 1, '2-a-23568', 'BMW', 'S3', 'Berlines', 'Diesel', '2016-01-01', '2019-02-01', '2019-01-01', '2019-02-01', 300, '15575188725.png', 'up/Agence Maamer/15575188725.png', 0, '2019-05-10 19:07:52', '2019-05-10 19:07:52'),
(29, 1, '3-a-14785', 'BMW', 'X5', '4x4', 'Gasoline', '2014-03-01', '2018-01-01', '2019-03-01', '2019-04-03', 350, '15575189917.jpg', 'up/Agence Maamer/15575189917.jpg', 0, '2019-05-10 19:09:51', '2019-05-10 19:09:51'),
(30, 1, '4-A-21450', 'Mercedes', 'G63', '4x4', 'Diesel', '2019-01-01', '2019-01-01', '2019-01-20', '2019-01-30', 500, '155751915425.png', 'up/Agence Maamer/155751915425.png', 1, '2019-05-10 19:11:24', '2019-05-10 19:12:34'),
(31, 2, '3-B-1020', 'JEEP', 'COMPASS', '4x4', 'Diesel', '2018-01-01', '2019-02-01', '2018-01-01', '2018-03-01', 350, '15575192959.png', 'up/Agence chrif rmili/15575192959.png', 0, '2019-05-10 19:14:55', '2019-05-10 19:14:55'),
(32, 2, '5-C-1200', 'Mercedes', 'Classe A M', 'Berlines', 'Diesel', '2019-05-11', '2019-05-21', '2019-06-01', '2019-06-01', 400, '15575193583.jpg', 'up/Agence chrif rmili/15575193583.jpg', 0, '2019-05-10 19:15:58', '2019-05-10 19:15:58'),
(33, 2, '7-M-5412', 'MAZDA', 'XR', 'Berlines', 'Diesel', '2019-05-09', '2019-05-01', '2019-05-15', '2019-08-09', 200, '155751942512.png', 'up/Agence chrif rmili/155751942512.png', 0, '2019-05-10 19:17:05', '2019-05-10 19:17:05'),
(34, 1, '45-f-521', 'Audi', 'A6', 'Berlines', 'Diesel', '2019-01-01', '2019-02-01', '2019-01-01', '2019-02-01', 450, '15576622072019_audi_a6_technik_032-wi.png', 'up/Agence Maamer/15576622072019_audi_a6_technik_032-wi.png', 0, '2019-05-12 10:56:47', '2019-05-12 10:56:47');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agences_email_unique` (`email`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Reclamation_agence_FK` (`id_agence`),
  ADD KEY `reclamation_client_fk` (`id_client`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Reservation_Vehicule_FK` (`id_voiture`),
  ADD KEY `Reservation_Client_FK` (`id_client`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_voitures_location` (`location_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD CONSTRAINT `Reclamation_agence_FK` FOREIGN KEY (`id_agence`) REFERENCES `agences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reclamation_client_fk` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `Reservation_Client_FK` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Reservation_Vehicule_FK` FOREIGN KEY (`id_voiture`) REFERENCES `voitures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD CONSTRAINT `FK_voitures_location` FOREIGN KEY (`location_id`) REFERENCES `agences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
