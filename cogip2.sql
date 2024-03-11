-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 11 mars 2024 à 08:59
-- Version du serveur : 8.0.36-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip2`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `type_id` int NOT NULL,
  `country` varchar(50) NOT NULL,
  `tva` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_dat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type_id`, `country`, `tva`, `created_at`, `update_dat`) VALUES
(2, 'Raviga', 2, 'United_States', 'US456 654 321', '2024-02-28 09:59:38', '2024-02-28 09:59:38'),
(3, 'Dunder Mifflin', 1, 'United_States', 'US676 787 767', '2024-02-28 10:00:44', '2024-02-28 10:00:44'),
(5, 'Pierre Cailloux', 2, 'France', 'FR 676 676 676', '2024-02-28 10:02:29', '2024-02-28 10:02:29'),
(6, 'Belgalol', 2, 'Belgium', 'BE0987 876 787', '2024-02-28 10:04:36', '2024-02-28 10:04:36'),
(7, 'Armaniche', 1, 'Romania', 'RM456 614 321', '2024-03-01 13:10:59', '2024-03-01 13:10:59'),
(8, 'Noecheatenbal', 1, 'Australia', 'AU256 617 328', '2024-03-01 13:10:59', '2024-03-01 13:10:59'),
(9, 'Agirav', 2, 'United_States', 'US672 784 767', '2024-03-01 13:18:40', '2024-03-01 13:18:40'),
(10, 'Vendeaume', 2, 'Norway', 'NO416 614 321', '2024-03-01 13:35:18', '2024-03-01 13:35:18'),
(11, 'Adamollan', 2, 'Turkey', 'TR417 743 248', '2024-03-01 13:35:18', '2024-03-01 13:35:18'),
(12, 'Zenitsu', 1, 'Japan', 'JP0487 376 485', '2024-03-01 13:38:17', '2024-03-01 13:38:17'),
(13, 'shpinax', 2, 'Belgium', 'BE0487 336 485', '2024-03-01 13:38:17', '2024-03-01 13:38:17');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `company_id`) VALUES
(1, 'John Doe', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company_id`, `email`, `phone`, `created_at`, `update_at`) VALUES
(1, 'Peter Gregory', 2, 'peter.gregory@raviga.com', '555-4567', '2024-02-28 10:07:20', '2024-02-28 10:07:20'),
(2, 'Cameron How', 3, 'cam.how@mutiny.net', ' 555-8765', '2024-02-28 10:09:58', '2024-02-28 10:09:58'),
(3, 'Gavin Belson', 5, 'gavin@hooli.com', '555-6354', '2024-02-28 10:11:14', '2024-02-28 10:11:14'),
(4, 'Jian Yang', 6, ' jian.yan@phoque.off', '555-8765', '2024-02-28 10:12:01', '2024-02-28 10:12:01'),
(5, 'Alice Johnson', 3, 'alice.johnson@dundermifflin.com', '555-123', '2024-03-01 12:18:07', '2024-03-01 12:18:07'),
(6, 'John Smith', 2, 'john.smith@pierrecailloux.com', '555-789', '2024-03-01 12:22:32', '2024-03-01 12:22:32'),
(7, 'Emily Davis', 6, 'emily.davis@belgalol.com', '555-456', '2024-03-01 12:35:40', '2024-03-01 12:35:40'),
(8, 'Michael Brown', 2, 'michael.brown@raviga.com', '555-987', '2024-03-01 12:36:37', '2024-03-01 12:36:37'),
(9, 'Sarah White', 3, 'sarah.white@dundermifflin.com', '555-321', '2024-03-01 12:37:26', '2024-03-01 12:37:26'),
(10, 'David Martinez', 5, 'david.martinez@pierrecailloux.com', '555-654', '2024-03-01 12:38:24', '2024-03-01 12:38:24'),
(11, 'Jennifer Lee', 6, 'jennifer.lee@belgalol.com', '555-741', '2024-03-01 12:39:01', '2024-03-01 12:39:01'),
(12, 'Robert Taylor', 2, 'robert.taylor@raviga.com', '555-369', '2024-03-01 12:39:42', '2024-03-01 12:39:42'),
(13, 'Samantha Clark', 3, 'samantha.clark@dundermifflin.com', '555-852', '2024-03-01 12:40:36', '2024-03-01 12:40:36'),
(14, 'Daniel Rodriguez', 5, 'daniel.rodriguez@pierrecailloux.com', '555-147', '2024-03-01 12:42:01', '2024-03-01 12:42:01'),
(15, 'Jessica Wilson', 6, 'jessica.wilson@belgalol.com', '555-258', '2024-03-01 12:43:44', '2024-03-01 12:43:44');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int NOT NULL,
  `ref` varchar(50) NOT NULL,
  `id_company` int NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `ref`, `id_company`, `created_at`, `update_at`) VALUES
(1, 'F20220915-003', 5, '2024-02-28 14:29:18', '2024-02-28 14:29:18'),
(2, 'F20220915-005', 2, '2024-02-28 14:29:18', '2024-02-28 14:29:18'),
(3, 'F20220915-002', 3, '2024-02-28 14:31:43', '2024-02-28 14:31:43'),
(4, 'F20220915-901', 6, '2024-03-01 12:48:44', '2024-03-01 12:48:44'),
(5, 'F20220915-902', 3, '2024-03-01 12:48:44', '2024-03-01 12:48:44'),
(6, 'F20220915-903', 3, '2024-03-01 12:49:49', '2024-03-01 12:49:49'),
(7, 'F20220915-904', 2, '2024-03-01 12:49:49', '2024-03-01 12:49:49'),
(8, 'F20220915-905', 5, '2024-03-01 12:50:27', '2024-03-01 12:50:27'),
(9, 'F20220915-906', 5, '2024-03-01 12:50:27', '2024-03-01 12:50:27'),
(10, 'F20220915-907', 3, '2024-03-01 12:51:15', '2024-03-01 12:51:15'),
(11, 'F20220915-908', 6, '2024-03-01 12:51:15', '2024-03-01 12:51:15'),
(12, 'F20220915-909', 2, '2024-03-01 12:51:43', '2024-03-01 12:51:43'),
(13, 'F20220915-910', 3, '2024-03-01 12:51:43', '2024-03-01 12:51:43'),
(14, 'F20220915-911', 6, '2024-03-01 12:52:08', '2024-03-01 12:52:08'),
(15, 'F20220915-912', 3, '2024-03-01 12:52:09', '2024-03-01 12:52:09'),
(16, 'F20220915-913', 5, '2024-03-01 12:52:30', '2024-03-01 12:52:30'),
(17, 'F20220915-914', 2, '2024-03-01 12:52:30', '2024-03-01 12:52:30'),
(18, 'F20220915-915', 5, '2024-03-01 12:52:50', '2024-03-01 12:52:50');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'View Companies', '2024-03-06 12:00:00', '2024-03-06 12:00:00'),
(2, 'View Contacts', '2024-03-06 12:00:00', '2024-03-06 12:00:00'),
(3, 'View Invoices', '2024-03-06 12:00:00', '2024-03-06 12:00:00'),
(4, 'Send Invoices', '2024-03-06 12:00:00', '2024-03-06 12:00:00'),
(5, 'Manage Invoices', '2024-03-06 12:00:00', '2024-03-06 12:00:00'),
(6, 'Manage Companies', '2024-03-06 12:00:00', '2024-03-06 12:00:00'),
(7, 'Manage Contacts', '2024-03-06 12:00:00', '2024-03-06 12:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'admin', '2024-03-06 00:00:00', '2024-03-06 00:00:00'),
(2, 'user', '2024-03-06 00:00:00', '2024-03-06 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `roles_permission`
--

CREATE TABLE `roles_permission` (
  `id` int NOT NULL,
  `permission_id` int NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `roles_permission`
--

INSERT INTO `roles_permission` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 1, 2),
(8, 2, 2),
(9, 3, 2),
(10, 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'Client', '2024-02-28 09:54:26', '2024-02-28 09:54:26'),
(2, 'Supplier', '2024-02-28 09:55:05', '2024-02-28 09:55:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `role_id` int NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `role_id`, `last_name`, `email`, `password`, `created_at`, `update_at`) VALUES
(1, 'Jesus', 1, 'Christ', 'jesus.christ@ciel.com', 'LeParadis_2024$$', '2024-02-27 09:54:26', '2024-02-27 09:54:26'),
(2, 'Jean-Michel', 2, 'Delacompta', 'jean-michel.delacompta@cogip.be', 'LaComptA_2024$$', '2024-02-28 09:54:26', '2024-02-28 09:54:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id_c` (`type_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id_c` (`company_id`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company_i` (`id_company`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id_rp` (`role_id`),
  ADD KEY `permission_id_rp` (`permission_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id_u` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `type_id_c` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `company_id_c` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `id_company_i` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD CONSTRAINT `permission_id_rp` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `role_id_rp` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_id_u` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
