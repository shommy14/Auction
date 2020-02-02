-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2020 at 11:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

DROP TABLE IF EXISTS `bids`;
CREATE TABLE IF NOT EXISTS `bids` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bids_user_id_foreign` (`user_id`),
  KEY `bids_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `user_id`, `product_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 500, '2020-02-02 21:58:42', NULL),
(2, 6, 3, 800, '2020-02-02 21:58:42', NULL),
(3, 6, 1, 2000, '2020-02-02 21:58:42', NULL),
(4, 7, 1, 3000, '2020-02-02 21:58:42', NULL),
(5, 2, 2, 3000, '2020-02-02 21:58:42', NULL),
(7, 3, 3, 355, '2020-02-02 22:08:25', '2020-02-02 22:08:25'),
(8, 5, 4, 1200, '2020-02-02 22:14:26', '2020-02-02 22:14:26'),
(9, 9, 4, 1700, '2020-02-02 22:14:55', '2020-02-02 22:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Clothes'),
(2, 'Books'),
(3, 'Phones'),
(4, 'Art'),
(5, 'Games'),
(6, 'Computers'),
(7, 'Shoes'),
(8, 'Babies stuff'),
(9, 'Music'),
(10, 'Films'),
(11, 'Body care'),
(12, 'Collectibles'),
(13, 'Tools'),
(14, 'Cars'),
(15, 'Magazine');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_28_154634_create_categories_table', 1),
(4, '2020_01_28_161318_create_products_table', 1),
(5, '2020_01_29_170236_create_bids_table', 1),
(6, '2020_02_01_193730_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT 0,
  `starter_price` double NOT NULL,
  `due_date` date NOT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `price_sold` double DEFAULT NULL,
  `catId` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_catid_foreign` (`catId`),
  KEY `products_userid_foreign` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `payment`, `shipment`, `sold`, `starter_price`, `due_date`, `buyer_id`, `price_sold`, `catId`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'Product1', 'some description', 'card', '2 days', 0, 200, '2020-02-12', NULL, NULL, 2, 1, '2020-02-02 21:58:42', NULL),
(2, 'Product2', 'some description', 'cash', '1 day', 0, 400, '2020-02-12', NULL, NULL, 5, 3, '2020-02-02 21:58:42', NULL),
(3, 'Product3', 'random description', 'cash', '1 day', 1, 300, '2020-01-30', 6, 800, 6, 3, '2020-01-19 23:00:00', '2020-02-02 22:15:33'),
(4, 'Laptop', 'New dell laptop', 'cash', '3 days', 0, 700, '2020-01-15', NULL, NULL, 5, 8, '2020-02-02 22:12:56', '2020-02-02 22:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abigale Kuvalis', 'kuhic.malvina@example.org', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '7qX9AkfdSK', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(2, 'Celine Daugherty', 'herminio.witting@example.com', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '2srQ8RIDl1', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(3, 'Johnson Olson', 'tremblay.vivianne@example.org', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'JnJF9Gwz0o', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(4, 'Darrin Witting V', 'justina.schroeder@example.org', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ngarpNhTq5', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(5, 'Abdullah Smith', 'cstreich@example.org', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'qRFoMBGY3f', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(6, 'Reta Beer', 'erdman.jaqueline@example.com', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'sErFVeDX7y', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(7, 'Lafayette O\'Reilly III', 'zboncak.loy@example.com', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ItL8a2SI3v', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(8, 'Rosie Wilderman', 'schuster.gilda@example.com', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'lufq96A52W', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(9, 'Estrella Hegmann', 'gmann@example.net', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Eh4lJcGAaF', '2020-02-02 21:58:42', '2020-02-02 21:58:42'),
(10, 'Mona Murray Sr.', 'shyann85@example.net', '2020-02-02 21:58:42', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'pSGMdWXKOc', '2020-02-02 21:58:42', '2020-02-02 21:58:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
