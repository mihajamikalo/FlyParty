-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 07 sep. 2024 à 19:38
-- Version du serveur : 8.0.27
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `party`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_name_unique` (`name`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tiavina', 'mihajamikalo@gmail.com', '$2y$10$ajwsJBxA5vatq3j63Hvq7u2GSkMEOO4xkweo3JDEh9vvJxjZc1Vh.', '2024-08-12 10:32:02', '2024-08-12 10:32:02');

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NbrTicket` int NOT NULL,
  `demande` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `nom`, `email`, `phone`, `NbrTicket`, `demande`, `created_at`, `updated_at`) VALUES
(3, 'Tiavina', 'mihajamikalo@gmail.com', '0341970025', 2, NULL, '2024-08-12 10:52:05', '2024-08-12 10:52:05'),
(9, 'Test data erreur', 'tiavina@gmail.com', '0325089745', 8, NULL, '2024-08-14 08:00:43', '2024-08-14 08:00:43'),
(10, 'Test useur', 'user@gmail.com', '0325689798', 6, NULL, '2024-08-14 08:01:33', '2024-08-14 08:01:33'),
(5, 'tyty', 'mihajamikalo@gmail.com', '0341970025', 6, NULL, '2024-08-12 10:52:36', '2024-08-12 10:52:36'),
(8, 'hgfhg', 'fgfdhsh@gmail.com', '034-19-700-25', 5, NULL, '2024-08-14 08:00:23', '2024-08-14 08:00:23'),
(11, 'User_name', 'User_Name@gmail.com', '0334968549', 8, NULL, '2024-08-14 08:02:13', '2024-08-14 08:02:13');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mess`
--

DROP TABLE IF EXISTS `mess`;
CREATE TABLE IF NOT EXISTS `mess` (
  `Titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rapport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messes`
--

DROP TABLE IF EXISTS `messes`;
CREATE TABLE IF NOT EXISTS `messes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rapport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp(6) NOT NULL,
  `created_at` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messes`
--

INSERT INTO `messes` (`id`, `Titre`, `Author`, `Rapport`, `date`, `updated_at`, `created_at`) VALUES
(26, 'Crutial', 'Superviseur', 'Veuillez toujours vous déconnecter après chaque session pour éviter tout type d\'intrusion en cas de perte de vôtre ordinateur, merci de contacer une superviseur le plus rapidement possible en cas de problème avec vôtre compte. A nôter que vous êtes résponsable de tout type d\'incident en cas de non déclaration en cas de vol . NB: Vôtre compte sera désactiver automatiquement apès 2h en cas de démission (N\'essaie jamais de vous re_connecter car vôtre user-agent ainsi que vôtre emplacement sera enregistrer dans le base de donné', '11-08-2024', '2024-08-11 13:50:07.000000', '2024-08-11 13:50:07.000000'),
(28, 'A Noter', 'Superviseur', 'Pour les anciens et nouveu(elle) travailleur. Veuillez toujours prendre en compte que vôtre compte \"Admin FlyParty\" est une élément crutial dans vôtre travail. N\'ouvre jamais vôtre compte dans un ordinateur inconnue, Vous devriez toujours se déconnecter quand vôtre shift est fini. En cas de problème avec vos compte, contacter vôtre supérieur ou contacter directement le superviseur en cas de problème majeur. Vôtre compte devrait être ouvert 4j/7 pour faire vôtre pointage. Merci pour vôtre compréhension, Vôtre superviseur', '11-08-2024', '2024-08-11 13:51:23.000000', '2024-08-11 13:51:23.000000');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=146 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(140, '2014_10_12_000000_create_users_table', 3),
(141, '2014_10_12_100000_create_password_resets_table', 3),
(142, '2019_08_19_000000_create_failed_jobs_table', 3),
(143, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(144, '2023_12_06_184148_create_billet_tables', 3),
(145, '2023_12_26_180351_create_admins_table', 3),
(106, '2024_06_25_111523_rapport', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
