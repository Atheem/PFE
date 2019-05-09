-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 09 mai 2019 à 03:29
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
(3, 1, 1, 'tesst2', 'ltb9i tcxhof  fya', 'reglee', '2019-05-16', '2019-05-04 12:00:06', '2019-05-04 13:32:09'),
(4, 1, 2, 'dddd', 'ssssssss', 'reglee', '2019-05-06', '2019-05-06 07:26:49', '2019-05-06 07:27:57'),
(5, 1, 2, 'tesstdd', 'ltb9i tcxhof  fya', 'en attente de recevoir', '2019-05-16', '2019-05-06 08:32:53', '2019-05-06 08:37:03'),
(6, 1, 1, 'mjbj chofat', 'asidi m3mr rah tydl ichof fya', 'reglee', '2017-03-03', '2019-05-06 09:07:19', '2019-05-06 09:08:31');

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
(5, 25, 4, '2019-05-07 13:03:04', '2019-05-29', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 1, '2019-05-07 12:03:04', '2019-05-08 12:19:46'),
(6, 24, 4, '2019-05-07 13:03:50', '2019-05-29', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 12:03:50', '2019-05-07 12:03:50'),
(7, 23, 4, '2019-05-07 13:04:20', '2019-05-28', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 12:04:20', '2019-05-08 10:10:50'),
(8, 23, 4, '2019-05-07 13:04:59', '2019-05-29', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 12:04:59', '2019-05-08 10:12:57'),
(9, 23, 4, '2019-05-07 20:09:03', '2019-05-29', '2019-05-31', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 19:09:03', '2019-05-08 10:11:44'),
(10, 26, 3, '2019-05-08 00:58:20', '2019-05-30', '2019-06-06', 'MARRAKECH', 'MARRAKECH', 0, '2019-05-07 23:58:20', '2019-05-07 23:58:20');

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
(1, 'chrif rmili', 'ee78475', '12345678900', '1996-04-30', 'sssssssssssssssssss', '06-54165194', 'B215452', '2019-05-23', 's@admin.com', NULL, '$2y$10$1RXlC7eCmyRUdEgv9PKnIumjn8NMsyqHW441BXBLwMPmjVxIjmuou', NULL, '2019-04-27 16:37:49', '2019-05-04 01:11:11'),
(2, 'saad rmili', '', '', '0000-00-00', '', '', '', '0000-00-00', 'saadrmili@gmail.com', NULL, '123sa145', NULL, '2019-05-03 20:36:53', '2019-05-03 21:48:22'),
(3, 'CHRIFA', 'ee1201472', '', '2019-05-29', 'dddddd', '0666666666', '145786', '2019-05-30', 's.rmili@upm.ac.ma', NULL, '$2y$10$Usv20BJbhKyU6et67MVQj.2UlDYZs6qIdQjmj8ZyRPK5GZs49I5Wy', NULL, '2019-05-03 21:57:27', '2019-05-07 23:58:19'),
(4, 'saad rmili', 'eeeedddd', NULL, '2019-05-30', 'ddddd', '0325218', '12453567', '2019-05-25', 'saadrmili@outlook.com', NULL, '$2y$10$EVG1sh.IZKL.Xxu9UJbRyeL6cubO.uBj6EwAx2vwy4SjNGNKyduc2', NULL, '2019-05-07 11:16:01', '2019-05-07 19:09:03');

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
(23, 1, '12-a-2100', 'Renault', 'Clio 5', 'Berlines', 'Gasoline', '2019-04-29', '2019-05-07', '2019-05-08', '2019-05-17', 600, '15571864201.jpg', 'up/Agence Maamer/15571864201.jpg', 1, '2019-05-06 22:47:00', '2019-05-06 22:47:00'),
(24, 1, '11-b-14785', 'Mercedes', 'Classe A', 'Berlines', 'Diesel', '2019-03-27', '2019-05-17', '2019-05-23', '2019-05-18', 700, '155719289021.jpg', 'up/Agence Maamer/155719289021.jpg', 0, '2019-05-07 00:34:50', '2019-05-07 00:34:50'),
(25, 1, '32-h-21001', 'Range Rover', 'Evoque', '4x4', 'Diesel', '2019-05-27', '2019-05-19', '2019-05-16', '2019-05-31', 650, '155731573822.png', 'up/Agence Maamer/155731573822.png', 1, '2019-05-07 00:37:57', '2019-05-08 10:42:18'),
(26, 2, '12-a-2100', 'Mercedes', 'Classe S', 'Berlines', 'Diesel', '2019-05-14', '2019-05-11', '2019-05-21', '2019-05-31', 700, '15572770059.jpg', 'up/Agence chrif rmili/15572770059.jpg', 0, '2019-05-07 23:56:45', '2019-05-07 23:56:45');

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
  ADD KEY `reclamation_client_fk` (`id_client`),
  ADD KEY `Reclamation_agence_FK` (`id_agence`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Reservation_Client_FK` (`id_client`),
  ADD KEY `Reservation_Vehicule_FK` (`id_voiture`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD CONSTRAINT `Reclamation_agence_FK` FOREIGN KEY (`id_agence`) REFERENCES `agences` (`id`),
  ADD CONSTRAINT `reclamation_client_fk` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `Reservation_Client_FK` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `Reservation_Vehicule_FK` FOREIGN KEY (`id_voiture`) REFERENCES `voitures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD CONSTRAINT `FK_voitures_location` FOREIGN KEY (`location_id`) REFERENCES `agences` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
