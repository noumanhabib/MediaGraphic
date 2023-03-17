-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2023 at 05:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediagraphic`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci COMMENT 'If user not logged in then we use this key',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `key`, `created_at`, `updated_at`) VALUES
(1, NULL, '6402fb2fa040616779169756402fb2fa040a', '2023-03-04 04:40:15', '2023-03-04 04:40:15'),
(2, 1, NULL, '2023-03-04 04:44:28', '2023-03-04 04:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_details` longtext COLLATE utf8mb4_unicode_ci,
  `no_of_copies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `files` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint UNSIGNED NOT NULL,
  `from_user_id` int NOT NULL,
  `to_user_id` int NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `file_format` text COLLATE utf8mb4_unicode_ci,
  `print` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paper` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shaping` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desired_copies` bigint DEFAULT NULL,
  `maximum_deliver_copies` bigint DEFAULT NULL,
  `deliver_date` date DEFAULT NULL,
  `subtotal` double(11,2) DEFAULT NULL,
  `tax` double(11,2) DEFAULT NULL,
  `total` double(11,2) DEFAULT NULL,
  `payment_via` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commande_detail`
--

CREATE TABLE `commande_detail` (
  `id` bigint UNSIGNED NOT NULL,
  `commande_id` int UNSIGNED NOT NULL,
  `orientation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_transparent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `black_and_white_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_print` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `binding_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint UNSIGNED NOT NULL,
  `main_order_id` bigint UNSIGNED NOT NULL,
  `amount` double NOT NULL,
  `status` enum('pending','done','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_via` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'stripe',
  `charge_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `main_order_id`, `amount`, `status`, `payment_via`, `charge_id`, `due_date`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1353, 'done', 'stripe', 'ch_3MhqfdJWO97SHZvi1mFtDgnH', '2023-03-04', '2023-03-04', '2023-03-04 04:42:26', '2023-03-04 04:42:26'),
(2, 2, 74.1, 'pending', 'stripe', NULL, '2023-04-02', NULL, '2023-03-04 04:44:30', '2023-03-04 04:44:30'),
(3, 3, 288, 'pending', 'stripe', NULL, '2023-04-10', NULL, '2023-03-12 06:14:06', '2023-03-12 06:14:06'),
(4, 4, 240, 'done', 'stripe', 'ch_3MksYxJWO97SHZvi15CNZqiE', '2023-03-12', '2023-03-12', '2023-03-12 13:20:04', '2023-03-12 13:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `main_orders`
--

CREATE TABLE `main_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `subtotal` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `payment_status` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_orders`
--

INSERT INTO `main_orders` (`id`, `user_id`, `subtotal`, `tax`, `total`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1127.5, 225.5, 1353, 1, 2, '2023-03-04 04:42:26', '2023-03-12 13:45:08'),
(2, 1, 61.75, 12.35, 74.1, 0, 2, '2023-03-04 04:44:30', '2023-03-06 03:51:02'),
(3, 1, 240, 48, 288, 0, 0, '2023-03-12 06:14:06', '2023-03-12 06:14:06'),
(4, 1, 200, 40, 240, 1, 2, '2023-03-12 13:20:04', '2023-03-12 13:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `main_order_items`
--

CREATE TABLE `main_order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `main_order_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_details` longtext COLLATE utf8mb4_unicode_ci,
  `no_of_copies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `files` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_order_items`
--

INSERT INTO `main_order_items` (`id`, `main_order_id`, `type`, `print_details`, `no_of_copies`, `date`, `amount`, `files`, `created_at`, `updated_at`) VALUES
(1, 1, 'plan', '{\"print\":\"Format identique\",\"print_size_width\":null,\"print_size_height\":null,\"color\":\"Noir et blanc\",\"work_type\":\"Plan\",\"choose_paper\":\"75gr\",\"shaping\":\"Pili\\u00e9\"}', '200', '2023-03-09', 475, '[\"/uploads/files/1677919198-Test Template 1 - Total Record 247.xlsx\"]', '2023-03-04 04:42:26', '2023-03-04 04:42:26'),
(2, 1, 'memory', '{\"file_name\":\"Test\",\"paper_size\":\"A4\",\"smallest\":null,\"largest\":null,\"orientation\":\"horizontal\",\"transparent\":\"transparent nervur\\u00e9\",\"cover_paper\":\"le-250\",\"cover\":null,\"black_and_white_pages\":\"150\",\"color_pages\":\"150\",\"weight\":\"80 gr\",\"print_size\":\"recto\",\"back_print\":\"yes\",\"clear_back\":\"not selected\",\"back_color\":\"not selected\",\"binding_type\":[\"not selected\",\"not selected\"],\"comment\":\"Test\"}', '300', '2023-03-10', 652.5, '[\"\\/uploads\\/files\\/1677919257-64030419bb278.Test Template 1 - Total Record 247.xlsx\"]', '2023-03-04 04:42:26', '2023-03-04 04:42:26'),
(3, 2, 'attach', '{\"format\":\"Autre format\",\"paper_size\":\"A0\",\"smallest\":null,\"largest\":null,\"color_pages\":\"Noir et blanc\",\"paper\":\"180gr\"}', '52', '2023-03-09', 61.75, '[\"/uploads/files/1677919461-Test Template 1 - Total Record 247.xlsx\"]', '2023-03-04 04:44:30', '2023-03-04 04:44:30'),
(4, 3, NULL, NULL, '100', NULL, 288, '[\"/uploads/files/1678615923_81464181.pdf\"]', '2023-03-12 06:14:06', '2023-03-12 06:14:06'),
(5, 4, NULL, NULL, NULL, NULL, 240, '[\"/uploads/files/1678641079_30495788.pdf\"]', '2023-03-12 13:20:04', '2023-03-12 13:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_05_26_133929_create_users_table', 1),
(6, '2022_05_31_101510_create_orders_table', 1),
(7, '2022_06_06_130608_create_commandes_table', 1),
(8, '2022_06_08_134330_create_commande_detail_table', 1),
(9, '2022_07_02_121028_create_product_settings_table', 1),
(10, '2022_07_23_080437_create_chats_table', 1),
(11, '2022_12_17_095330_create_carts_table', 1),
(12, '2022_12_17_095511_create_cart_items_table', 1),
(13, '2022_12_17_184753_create_main_orders_table', 1),
(14, '2022_12_17_184801_create_main_order_items_table', 1),
(15, '2022_12_19_044002_create_invoices_table', 1),
(17, '2022_05_28_074102_create_quotations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `quotation_id` bigint NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_include_tax` double(11,2) NOT NULL,
  `amount_exclude_tax` double(11,2) NOT NULL,
  `payment_via` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `quotation_id`, `description`, `image`, `amount_include_tax`, `amount_exclude_tax`, `payment_via`, `charge_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Good', '1678612464_71607123.pdf', 240.00, 200.00, 'stripe', 'ch_3Mkl2YJWO97SHZvi1O8TkM6q', 0, '2023-03-12 05:18:07', '2023-03-12 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_setting`
--

CREATE TABLE `products_setting` (
  `id` bigint UNSIGNED NOT NULL,
  `type` smallint UNSIGNED NOT NULL,
  `min_quantity` int NOT NULL,
  `max_quantity` int NOT NULL,
  `first_day_price` double(11,2) NOT NULL,
  `second_day_price` double(11,2) DEFAULT NULL,
  `third_day_price` double(11,2) DEFAULT NULL,
  `fourth_day_price` double(11,2) DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_setting`
--

INSERT INTO `products_setting` (`id`, `type`, `min_quantity`, `max_quantity`, `first_day_price`, `second_day_price`, `third_day_price`, `fourth_day_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 100, 250, 200.00, NULL, NULL, NULL, 1, NULL, NULL),
(2, 5, 250, 500, 300.00, NULL, NULL, NULL, 1, NULL, NULL),
(3, 5, 0, 100, 125.00, NULL, NULL, NULL, 1, NULL, NULL),
(4, 1, 0, 100, 1.25, NULL, NULL, NULL, 1, NULL, NULL),
(5, 1, 100, 250, 2.50, NULL, NULL, NULL, 1, NULL, NULL),
(6, 1, 250, 500, 3.00, NULL, NULL, NULL, 1, NULL, NULL),
(7, 1, 500, 1000, 3.25, NULL, NULL, NULL, 1, NULL, NULL),
(8, 2, 0, 100, 1.25, NULL, NULL, NULL, 1, NULL, NULL),
(9, 2, 100, 250, 2.00, NULL, NULL, NULL, 1, NULL, NULL),
(10, 2, 250, 500, 2.50, NULL, NULL, NULL, 1, NULL, NULL),
(11, 2, 500, 1000, 3.00, NULL, NULL, NULL, 1, NULL, NULL),
(12, 3, 0, 100, 1.25, NULL, NULL, NULL, 1, NULL, NULL),
(13, 3, 100, 250, 2.00, NULL, NULL, NULL, 1, NULL, NULL),
(14, 3, 250, 500, 3.50, NULL, NULL, NULL, 1, NULL, NULL),
(15, 3, 500, 1000, 6.00, NULL, NULL, NULL, 1, NULL, NULL),
(16, 4, 0, 100, 1.25, NULL, NULL, NULL, 1, NULL, NULL),
(17, 4, 100, 250, 2.00, NULL, NULL, NULL, 1, NULL, NULL),
(18, 4, 250, 500, 3.50, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalcode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_include_tax` double(11,2) DEFAULT NULL,
  `amount_exclude_tax` double(11,2) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Impression` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shaping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finishing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catridge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `first_name`, `last_name`, `email`, `phone`, `postalcode`, `city`, `description`, `image`, `amount_include_tax`, `amount_exclude_tax`, `type`, `quantity`, `Impression`, `shaping`, `finishing`, `catridge`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nouman', 'Habib', 'noumanhabib521@gmail.com', '03165667643', '43000', 'Rawalpindi', 'Good', '1678612464_71607123.pdf', 240.00, 200.00, NULL, '100', 'à l\'identique', 'sans façonnage', 'sans finition', 'yes', NULL, 3, '2023-03-12 05:14:24', '2023-03-12 05:18:07'),
(2, 'Nouman', 'Habib', 'noumanhabib521@gmail.com', '03165667643', '43000', 'Rawalpindi', 'Test', '1678615923_81464181.pdf', 288.00, 240.00, NULL, '100', 'à l\'identique', 'sans façonnage', 'sans finition', 'yes', NULL, 3, '2023-03-12 06:12:03', '2023-03-12 06:13:31'),
(3, 'Nouman', 'Habib', 'noumanhabib521@gmail.com', '012345678', '10017', 'Rawalpindi', 'Hy', '1678641079_30495788.pdf', 240.00, 200.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2023-03-12 13:11:19', '2023-03-12 13:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` enum('Mr','Mme') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('customer','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `customer_type` enum('professional','individuel') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `shiping_address` text COLLATE utf8mb4_unicode_ci,
  `shiping_postal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shiping_city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_postal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` smallint UNSIGNED DEFAULT NULL COMMENT 'Allowed: [1, 2, 3, 4, 5]',
  `social_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `title`, `role`, `customer_type`, `email`, `phone`, `email_verified_at`, `password`, `last_login`, `shiping_address`, `shiping_postal`, `shiping_city`, `billing_address`, `billing_postal`, `billing_city`, `service_id`, `social_reason`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nouman', 'Habib', 'Mr', 'customer', 'individuel', 'noumanhabib521@gmail.com', '03165667643', '2023-03-04 08:41:47', '$2y$10$D9jdr3AySI2PA7XXPqo2M.ZX37Kf5Tx72WJ.mlsPZ7LjmsR9HX3.W', NULL, 'Village Sangni Rajam, UC Sui Cheemya, Tehsil Gujar Khan, District Rawalpindi, Province Punjab, Pakistan', '43000', 'Rawalpindi', 'Village Sangni Rajam, UC Sui Cheemya, Tehsil Gujar Khan, District Rawalpindi, Province Punjab, Pakistan', '43000', 'Rawalpindi', NULL, NULL, NULL, '2023-03-04 04:41:39', '2023-03-04 04:41:39'),
(2, 'Site', 'Admin', 'Mr', 'admin', NULL, 'admin@gmail.com', '0123456789', '2023-03-06 07:47:57', '$2y$10$j.xWbEK4/kxKE5qL8zt3vOtVek5RgZMd.TZiV8/M1zBZ3WFvRoqgy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-06 03:45:23', '2023-03-06 03:45:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande_detail`
--
ALTER TABLE `commande_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_main_order_id_foreign` (`main_order_id`);

--
-- Indexes for table `main_orders`
--
ALTER TABLE `main_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `main_order_items`
--
ALTER TABLE `main_order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_order_items_main_order_id_foreign` (`main_order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products_setting`
--
ALTER TABLE `products_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commande_detail`
--
ALTER TABLE `commande_detail`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `main_orders`
--
ALTER TABLE `main_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `main_order_items`
--
ALTER TABLE `main_order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_setting`
--
ALTER TABLE `products_setting`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_main_order_id_foreign` FOREIGN KEY (`main_order_id`) REFERENCES `main_orders` (`id`);

--
-- Constraints for table `main_orders`
--
ALTER TABLE `main_orders`
  ADD CONSTRAINT `main_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `main_order_items`
--
ALTER TABLE `main_order_items`
  ADD CONSTRAINT `main_order_items_main_order_id_foreign` FOREIGN KEY (`main_order_id`) REFERENCES `main_orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
