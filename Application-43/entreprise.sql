-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour entreprise
CREATE DATABASE IF NOT EXISTS `entreprise` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `entreprise`;

-- Listage de la structure de table entreprise. artisans
CREATE TABLE IF NOT EXISTS `artisans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `artisans_user_id_foreign` (`user_id`),
  CONSTRAINT `artisans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.artisans : ~2 rows (environ)
INSERT INTO `artisans` (`id`, `phone`, `dateofbirth`, `current_address`, `permanent_address`, `created_at`, `updated_at`, `user_id`) VALUES
	(1, 'N/A', NULL, 'N/A', 'N/A', '2024-08-09 21:46:21', '2024-08-09 21:46:21', 1),
	(2, 'N/A', NULL, 'N/A', 'N/A', '2024-08-09 21:47:32', '2024-08-09 21:47:32', 2);

-- Listage de la structure de table entreprise. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_user_id_foreign` (`user_id`),
  CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.categories : ~2 rows (environ)
INSERT INTO `categories` (`id`, `name`, `user_id`, `code`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Femme', 1, '232', NULL, NULL, '2024-08-10 14:53:19', '2024-08-10 14:53:19'),
	(2, 'homme', 1, '121', NULL, NULL, '2024-08-10 14:57:21', '2024-08-10 14:57:21');

-- Listage de la structure de table entreprise. chats
CREATE TABLE IF NOT EXISTS `chats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_last_chat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_chat_time` timestamp NULL DEFAULT NULL,
  `unread_count` int NOT NULL DEFAULT '0',
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.chats : ~0 rows (environ)

-- Listage de la structure de table entreprise. ch_favorites
CREATE TABLE IF NOT EXISTS `ch_favorites` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NOT NULL,
  `favorite_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.ch_favorites : ~0 rows (environ)

-- Listage de la structure de table entreprise. ch_messages
CREATE TABLE IF NOT EXISTS `ch_messages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint NOT NULL,
  `to_id` bigint NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.ch_messages : ~0 rows (environ)

-- Listage de la structure de table entreprise. clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clients_user_id_foreign` (`user_id`),
  CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.clients : ~0 rows (environ)
INSERT INTO `clients` (`id`, `phone`, `dateofbirth`, `current_address`, `permanent_address`, `created_at`, `updated_at`, `user_id`) VALUES
	(1, 'N/A', NULL, 'N/A', 'N/A', '2024-08-11 00:24:19', '2024-08-11 00:24:19', 3);

-- Listage de la structure de table entreprise. countries
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `countries_user_id_foreign` (`user_id`),
  CONSTRAINT `countries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.countries : ~4 rows (environ)
INSERT INTO `countries` (`id`, `name`, `region`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Côte d’Ivoire', 'Afrique de l\'ouest', NULL, 1, '2024-08-09 22:39:11', '2024-08-09 22:39:11'),
	(2, 'etudiant1', 'qegs', NULL, 2, '2024-08-09 22:46:19', '2024-08-09 22:46:19'),
	(3, 'etudiant1', 'qegs', NULL, 2, '2024-08-10 15:20:24', '2024-08-10 15:20:24'),
	(4, 'Côte d’Ivoire', 'Afrique de l\'ouest', NULL, 1, '2024-08-10 15:57:55', '2024-08-10 15:57:55');

-- Listage de la structure de table entreprise. customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint unsigned NOT NULL,
  `state_id` bigint unsigned NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`),
  KEY `customers_country_id_foreign` (`country_id`),
  KEY `customers_state_id_foreign` (`state_id`),
  KEY `customers_user_id_foreign` (`user_id`),
  CONSTRAINT `customers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `customers_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.customers : ~1 rows (environ)
INSERT INTO `customers` (`id`, `name`, `user_id`, `email`, `phone`, `country_id`, `state_id`, `address`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(4, 'Jean-Chris-Junior', 1, 'juniorchrist525@gmail.com', '0102874749', 1, 1, 'Yopougon', NULL, 'C:\\Users\\Jonas Djeket\\AppData\\Local\\Temp\\phpD0C9.tmp', '2024-08-10 15:53:59', '2024-08-10 15:53:59'),
	(5, 'MALI', 2, 'etudiant1@gmail.com', '12345678', 2, 2, 'H/CKXKYWKYWY', NULL, 'C:\\Users\\Jonas Djeket\\AppData\\Local\\Temp\\php7A1F.tmp', '2024-08-10 15:56:53', '2024-08-10 15:56:53');

-- Listage de la structure de table entreprise. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.migrations : ~12 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_08_12_000000_create_users_table', 1),
	(2, '2014_09_26_124617_create_permission_tables', 1),
	(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(4, '2022_08_03_061918_create_user_roles_table', 1),
	(5, '2023_04_06_090813_create_categories_table', 1),
	(6, '2023_05_26_224452_create_products_table', 1),
	(7, '2024_07_22_195344_create_artisan_table', 1),
	(8, '2024_07_22_200107_create_client_table', 1),
	(9, '2024_07_26_150105_create_chats_table', 1),
	(10, '2024_07_26_171601_create_notifications_table', 1),
	(11, '2024_07_27_999999_add_active_status_to_users', 1),
	(12, '2024_07_27_999999_add_avatar_to_users', 1),
	(13, '2024_07_27_999999_add_dark_mode_to_users', 1),
	(14, '2024_07_27_999999_add_messenger_color_to_users', 1),
	(15, '2024_07_27_999999_create_chatify_favorites_table', 1),
	(16, '2024_07_27_999999_create_chatify_messages_table', 1),
	(17, '2024_07_28_235743_create_countries_table', 1),
	(18, '2024_07_29_001841_create_states_table', 1),
	(19, '2024_08_01_004615_create_customers_table', 1),
	(20, '2024_08_01_142338_create_suppliers_table', 1),
	(21, '2024_08_01_151224_create_stores_table', 1);

-- Listage de la structure de table entreprise. model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.model_has_permissions : ~0 rows (environ)

-- Listage de la structure de table entreprise. model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.model_has_roles : ~0 rows (environ)

-- Listage de la structure de table entreprise. notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_user_id_foreign` (`user_id`),
  CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.notifications : ~0 rows (environ)

-- Listage de la structure de table entreprise. permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.permissions : ~0 rows (environ)

-- Listage de la structure de table entreprise. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.personal_access_tokens : ~0 rows (environ)

-- Listage de la structure de table entreprise. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_user_id_foreign` (`user_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.products : ~0 rows (environ)
INSERT INTO `products` (`id`, `name`, `category_id`, `user_id`, `sku`, `quantity`, `description`, `price`, `status`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'robe', 1, 1, '123', 4, NULL, 2000.00, 0, 'images/VACoAivXx1nWdR2Fji9D7NtlpmXG3aUFh8RCPCiE.jpg', '2024-08-10 15:02:46', '2024-08-10 15:02:46');

-- Listage de la structure de table entreprise. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.roles : ~2 rows (environ)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Artisan', 'web', '2024-08-09 21:38:16', '2024-08-09 21:38:16'),
	(2, 'Client', 'web', '2024-08-09 21:38:16', '2024-08-09 21:38:16');

-- Listage de la structure de table entreprise. role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.role_has_permissions : ~0 rows (environ)

-- Listage de la structure de table entreprise. states
CREATE TABLE IF NOT EXISTS `states` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `country_id` bigint unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `states_country_id_foreign` (`country_id`),
  KEY `states_user_id_foreign` (`user_id`),
  CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `states_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.states : ~7 rows (environ)
INSERT INTO `states` (`id`, `name`, `user_id`, `country_id`, `status`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Abidjan', 1, 1, 1, NULL, '2024-08-09 22:45:55', '2024-08-09 22:45:55'),
	(2, 'MALI', 2, 2, 1, NULL, '2024-08-10 15:31:39', '2024-08-10 15:31:39'),
	(3, 'Abidjan', 1, 1, 1, NULL, '2024-08-10 15:58:03', '2024-08-10 15:58:03'),
	(4, 'Abidjan', 1, 1, 1, NULL, '2024-08-10 15:58:55', '2024-08-10 15:58:55'),
	(5, 'MALI', 2, 3, 1, NULL, '2024-08-10 16:03:20', '2024-08-10 16:03:20'),
	(6, 'MALI', 2, 3, 1, NULL, '2024-08-10 16:06:42', '2024-08-10 16:06:42'),
	(7, 'MALI', 2, 2, 1, NULL, '2024-08-10 16:09:04', '2024-08-10 16:09:04');

-- Listage de la structure de table entreprise. stores
CREATE TABLE IF NOT EXISTS `stores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stores_username_unique` (`username`),
  UNIQUE KEY `stores_email_unique` (`email`),
  KEY `stores_user_id_foreign` (`user_id`),
  CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.stores : ~2 rows (environ)
INSERT INTO `stores` (`id`, `name`, `user_id`, `username`, `password`, `phone`, `email`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'jorge', 1, 'Sexy~#boomm', '$2y$10$tSk1p4Elv6xMpHf4r0KLlO1Ohb7s.rJH4gcadmW6LWbrtlmi7tMCe', '0596363564', 'jeanchrist252@gmail.com', NULL, '2024-08-10 17:43:59', '2024-08-10 17:43:59'),
	(2, 'etudiant1', 2, 'ALI', '$2y$10$eZijBehkqchRTsTYVk/lq.XvLx74rpscY3FunEHXQDLcn30C9nymK', '12345678', 'admin2@gmail.com', 'store_images/aVnAVabvlYy4yMwmFLHBhc5HLiEgGSk1UtTzb5MX.jpg', '2024-08-10 17:45:59', '2024-08-10 17:45:59');

-- Listage de la structure de table entreprise. suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint unsigned NOT NULL,
  `state_id` bigint unsigned NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `suppliers_email_unique` (`email`),
  KEY `suppliers_country_id_foreign` (`country_id`),
  KEY `suppliers_state_id_foreign` (`state_id`),
  KEY `suppliers_user_id_foreign` (`user_id`),
  CONSTRAINT `suppliers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `suppliers_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  CONSTRAINT `suppliers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.suppliers : ~0 rows (environ)
INSERT INTO `suppliers` (`id`, `name`, `user_id`, `email`, `phone`, `country_id`, `state_id`, `address`, `description`, `avatar`, `created_at`, `updated_at`) VALUES
	(1, 'Jean-Chris-Junior', 1, 'juniorchrist525@gmail.com', '0102874749', 1, 1, 'Yopougon', NULL, NULL, '2024-08-09 23:01:08', '2024-08-09 23:01:08');

-- Listage de la structure de table entreprise. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` enum('Aucun','Célibataire','En couple','Marié','Fiancé') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `messenger_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.users : ~0 rows (environ)
INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `phone`, `email`, `gender`, `relationship`, `role`, `avatar`, `date_of_birth`, `join_date`, `status`, `current_address`, `permanent_address`, `role_name`, `position`, `bio`, `department`, `email_verified_at`, `password`, `remember_token`, `last_seen`, `created_at`, `updated_at`, `active_status`, `dark_mode`, `messenger_color`) VALUES
	(1, '000001', 'admin', NULL, NULL, 'admin@gmail.com', 'male', 'Aucun', NULL, 'photo_defaults.jpg', NULL, 'Fri, Aug 9, 2024 9:46 PM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$G2vx.vU8Xtvw6T09CRdPL.dLS4YQQz3lsEboDoBCPTKC92uomdrYq', NULL, '2024-08-11 02:47:33', '2024-08-09 21:46:20', '2024-08-11 02:47:33', 0, 0, NULL),
	(2, '000002', 'admin1', NULL, NULL, 'admin1@gmail.com', 'male', 'Aucun', NULL, 'photo_defaults.jpg', NULL, 'Fri, Aug 9, 2024 9:47 PM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$xkr8a05eG/Izsmk3tHe6IOn1G2j2x.N6OoUcp5Rffy52edwCn/BMC', NULL, '2024-08-10 17:45:59', '2024-08-09 21:47:32', '2024-08-10 17:45:59', 0, 0, NULL),
	(3, '000003', 'etudiant', NULL, NULL, 'etudiant@gmail.com', 'male', 'Aucun', NULL, 'photo_defaults.jpg', NULL, 'Sun, Aug 11, 2024 12:24 AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$9iYaLHNw2zcAj13cPKwl1O/ahQ1kAPDMJCmGPe9MvjMJdJxelWBj.', NULL, '2024-08-11 20:12:11', '2024-08-11 00:24:19', '2024-08-11 20:12:11', 0, 1, '#FFC107');

-- Listage de la structure de table entreprise. user_roles
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_roles_user_id_foreign` (`user_id`),
  KEY `user_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table entreprise.user_roles : ~0 rows (environ)
INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, NULL, NULL),
	(2, 2, 1, NULL, NULL),
	(3, 3, 2, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
