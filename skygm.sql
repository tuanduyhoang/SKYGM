-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 03, 2023 at 01:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skygm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$mu9u51maNkApBysOYMmcyepj817IlwHuz7KitWB1V44yFxAI2VD7G', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `img`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Smartphones', 'smartphones', 'storage/category/Smartphones3961693202613.jpg', 1, 'mới nhập', '2023-08-28 06:03:33', '2023-08-28 06:03:33'),
(2, 'Smartwatchs', 'smartwatchs', 'storage/category/Smartwatchs9491693202679.jpg', 1, 'mới nhập', '2023-08-28 06:04:39', '2023-08-28 06:04:39'),
(3, 'Mouse Gaming', 'mouse-gaming', 'storage/category/Mouse Gaming2691693202806.jpg', 1, 'mới nhập', '2023-08-28 06:06:46', '2023-08-28 06:06:46'),
(4, 'Headphones', 'headphones', 'storage/category/Headphones5731693214642.jpg', 1, 'mới nhập', '2023-08-28 06:10:24', '2023-08-28 09:24:02'),
(5, 'CameraSKYGM', 'cameraskygm', 'storage/category/CameraSKYGM8121693203311.jpg', 1, 'mới nhập', '2023-08-28 06:12:29', '2023-08-28 06:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(19, '2023_07_26_190344_create_categories_table', 1),
(21, '2023_07_28_163610_updateproductstable', 1),
(35, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(36, '2019_08_19_000000_create_failed_jobs_table', 2),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(38, '2023_07_26_194344_create_products_table', 2),
(39, '2023_07_28_184204_create_users_table', 2),
(40, '2023_07_28_184222_create_categories_table', 2),
(41, '2023_08_01_000249_add_column_price_products', 2),
(42, '2023_08_01_004157_add_column_catid_products', 2),
(43, '2023_08_15_014532_add_column_img_users', 2),
(44, '2023_08_17_191835_add_column_quantity', 2),
(45, '2023_08_19_130559_create_verify_users_table', 2),
(46, '2023_08_21_103235_create_admins_table', 2),
(47, '2023_08_27_221820_create_orders_table', 2),
(48, '2023_08_28_123602_create_categories_table', 3),
(49, '2023_08_28_130143_edit_categories_table', 4),
(50, '2023_08_28_171340_edit_users_table', 5),
(51, '2023_09_01_214605_create_shoppingcart_table', 6),
(52, '2023_09_02_211054_add_user_id_columns_to_orders_table', 7),
(53, '2023_09_02_211943_create_order_products_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `address`, `status`, `price`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Hoàng', '123123123', 'sc.duytuan@gmail.com', '12123123', 'pending', '83375000.00', '2023-09-02 17:00:51', '2023-09-02 17:00:51', 6),
(2, 'Hoàng', '123123123', 'sc.hoangduy@gmail.com', '123123', 'pending', '83375000.00', '2023-09-02 17:11:24', '2023-09-02 17:11:24', 6),
(4, 'Hoàng', '123123123', 'sc.hoangduy@gmail.com', '123123', 'pending', '83375000.00', '2023-09-02 17:14:57', '2023-09-02 17:14:57', 6),
(5, 'Hoàng', '123123123', 'sc.duytuan@gmail.com', '123123123', 'pending', '83375000.00', '2023-09-02 17:40:12', '2023-09-02 17:40:12', 6),
(6, 'Hoàng', '123123123', 'sc.duytuan@gmail.com', '123123123', 'pending', '83375000.00', '2023-09-02 17:41:46', '2023-09-02 17:41:46', 6),
(7, 'Hoàng', '0123456789', 'sc.duytuan@gmail.com', 'asdasdasd', 'pending', '83375000.00', '2023-09-02 17:44:10', '2023-09-02 17:44:10', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `product_id`, `order_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 6, 1, NULL, NULL),
(2, 8, 6, 1, NULL, NULL),
(3, 4, 6, 1, NULL, NULL),
(4, 3, 7, 1, NULL, NULL),
(5, 8, 7, 1, NULL, NULL),
(6, 4, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `content`, `slug`, `img`, `status`, `description`, `created_at`, `updated_at`, `price`, `category_id`) VALUES
(1, 'Iphone Xr', 'đang thử nghiệm', 'iphone-xr', 'storage/product/Iphone Xr7721693203481.jpg', 1, '<p>lorem</p>', '2023-08-28 06:18:01', '2023-08-28 06:18:01', 15000000, 1),
(2, 'Iphone 11 pro max', 'đang thử nghiệm', 'iphone-11-pro-max', 'storage/product/Iphone 11 pro max1841693203660.webp', 1, '<p>lorem</p>', '2023-08-28 06:21:00', '2023-08-28 06:21:00', 20000000, 1),
(3, 'Iphone 12 pro max', 'đang thử nghiệm', 'iphone-12-pro-max', 'storage/product/Iphone 12 pro max9801693203725.webp', 1, '<p>lorem</p>', '2023-08-28 06:22:05', '2023-08-28 06:22:05', 25000000, 1),
(4, 'Iphone 13 pro max', 'đang thử nghiệm', 'iphone-13-pro-max', 'storage/product/Iphone 13 pro max9501693203773.webp', 1, '<p>lorem</p>', '2023-08-28 06:22:53', '2023-08-28 06:22:53', 30000000, 1),
(5, 'Iphone 14 pro max', 'đang thử nghiệm', 'iphone-14-pro-max', 'storage/product/Iphone 14 pro max4591693203810.jpg', 1, '<p>lorem</p>', '2023-08-28 06:23:30', '2023-08-28 06:23:30', 35000000, 1),
(6, 'Iphone Xr 2019', 'đang thử nghiệm', 'iphone-xr-2019', 'storage/product/Iphone Xr 20193751693204055.jpg', 1, '<p>lorem</p>', '2023-08-28 06:27:35', '2023-08-28 06:27:35', 15500000, 1),
(7, 'Iphone Xr 2020', 'đang thử nghiệm', 'iphone-xr-2020', 'storage/product/Iphone Xr 20205681693204092.jpg', 1, '<p>lorem</p>', '2023-08-28 06:28:12', '2023-08-28 06:28:12', 14500000, 1),
(8, 'Iphone Xr 2020 White Pros', 'đang thử nghiệm', 'iphone-xr-2020-white-pros', 'storage/product/Iphone Xr 2020 White Pros5671693204994.jpg', 1, '<p>lorem</p>', '2023-08-28 06:29:13', '2023-08-28 06:43:14', 17500000, 1),
(9, 'Smartwatchs01', 'đang thử nghiệm', 'smartwatchs01', 'storage/product/Smartwatchs016911693213642.jpg', 1, '<p>lorem</p>', '2023-08-28 09:07:22', '2023-08-28 09:07:22', 5000000, 2),
(10, 'Smartwatchs02', 'đang thử nghiệm', 'smartwatchs02', 'storage/product/Smartwatchs024141693213671.jpg', 1, '<p>lorem</p>', '2023-08-28 09:07:51', '2023-08-28 09:07:51', 5000000, 2),
(11, 'Smartwatchs03', 'đang thử nghiệm', 'smartwatchs03', 'storage/product/Smartwatchs03151693213698.jpg', 1, '<p>lorem</p>', '2023-08-28 09:08:18', '2023-08-28 09:08:18', 5000000, 2),
(12, 'Smartwatchs04', 'đang thử nghiệm', 'smartwatchs04', 'storage/product/Smartwatchs044271693213733.jpg', 1, '<p>lorem</p>', '2023-08-28 09:08:53', '2023-08-28 09:08:53', 5000000, 2),
(13, 'Smartwatchs05', 'đang thử nghiệm', 'smartwatchs05', 'storage/product/Smartwatchs052771693213922.jpg', 1, '<p>lorem</p>', '2023-08-28 09:12:02', '2023-08-28 09:12:02', 5000000, 2),
(14, 'Smartwatchs06', 'đang thử nghiệm', 'smartwatchs06', 'storage/product/Smartwatchs066491693213964.jpg', 1, '<p>lorem</p>', '2023-08-28 09:12:44', '2023-08-28 09:12:44', 5500000, 2),
(15, 'PROGM.01', 'đang thử nghiệm', 'progm01', 'storage/product/PROGM.01661693214275.jpg', 1, '<p>lorem</p>', '2023-08-28 09:17:55', '2023-08-28 09:17:55', 2450000, 3),
(16, 'PROGM.02', 'đang thử nghiệm', 'progm02', 'storage/product/PROGM.024041693214314.jpg', 1, '<p>lorem</p>', '2023-08-28 09:18:34', '2023-08-28 09:18:34', 25000000, 3),
(17, 'PROGM.03', 'đang thử nghiệm', 'progm03', 'storage/product/PROGM.033451693214356.webp', 1, '<p>lorem</p>', '2023-08-28 09:19:16', '2023-08-28 09:19:16', 3450000, 3),
(18, 'PROGM.04', 'đang thử nghiệm', 'progm04', 'storage/product/PROGM.048831693214390.png', 1, '<p>lorem</p>', '2023-08-28 09:19:50', '2023-08-28 09:19:50', 3599000, 3),
(19, 'headphone skygm 01', 'đang thử nghiệm', 'headphone-skygm-01', 'storage/product/headphone skygm 012831693215247.jpg', 1, '<p>lorem</p>', '2023-08-28 09:34:07', '2023-08-28 09:34:07', 1450000, 4),
(20, 'headphone skygm 02', 'đang thử nghiệm', 'headphone-skygm-02', 'storage/product/headphone skygm 029311693215279.webp', 1, '<p>lorem</p>', '2023-08-28 09:34:39', '2023-08-28 09:34:39', 1599000, 4),
(21, 'headphone skygm 03', 'đang thử nghiệm', 'headphone-skygm-03', 'storage/product/headphone skygm 031141693215326.webp', 1, '<p>lorem</p>', '2023-08-28 09:35:26', '2023-08-28 09:35:26', 2450000, 4),
(22, 'headphone skygm 04', 'đang thử nghiệm', 'headphone-skygm-04', 'storage/product/headphone skygm 049511693215387.webp', 1, '<p>lorem</p>', '2023-08-28 09:36:27', '2023-08-28 09:36:27', 2690000, 4),
(23, 'CamSKYGM1', 'đang thử nghiệm', 'camskygm1', 'storage/product/CamSKYGM14931693215919.jpg', 1, '<p>lorem</p>', '2023-08-28 09:45:19', '2023-08-28 09:45:19', 2750000, 5),
(24, 'CamSKYGM2', 'đang thử nghiệm', 'camskygm2', 'storage/product/CamSKYGM21371693215957.jpg', 1, '<p>lorem</p>', '2023-08-28 09:45:57', '2023-08-28 09:45:57', 2650000, 5),
(25, 'CamSKYGM3', 'đang thử nghiệm', 'camskygm3', 'storage/product/CamSKYGM34881693215995.jpg', 1, '<p>lorem</p>', '2023-08-28 09:46:35', '2023-08-28 09:46:35', 2999000, 5),
(26, 'CamSKYGM4', 'đang thử nghiệm', 'camskygm4', 'storage/product/CamSKYGM49991693216052.jpg', 1, '<p>lorem</p>', '2023-08-28 09:47:32', '2023-08-28 09:47:32', 2890000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `identifier` varchar(255) NOT NULL,
  `instance` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `email_verified` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `email_verified`, `created_at`, `updated_at`, `quantity`, `status`) VALUES
(1, 'User', 'user@gmail.com', NULL, '$2y$10$wPDMOU6VwMvz5feW.LmivuoMGMNq7hXLdIwDbMaKELwY1GdH/fwF6', NULL, 0, NULL, NULL, NULL, 0),
(6, 'Hoàng Duy 3', 'sc.duyhoang@gmail.com', NULL, '$2y$10$/W9pOvP/xC2KDl.soaYIyux50IBpkmc/7NIYZTpVt/Er7tanA65eG', NULL, 0, '2023-08-29 17:49:41', '2023-08-29 17:49:41', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `token`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2324ff7b443acd4e7bf85ff02b13728aa2b43f4f77a3dbc61971367a782775321', 2, '2023-08-29 17:34:56', '2023-08-29 17:34:56'),
(2, '3805a718ab8d4a8b5dc252fb9c938439e16a023a289ae3f5260837917e764fb4b', 3, '2023-08-29 17:41:07', '2023-08-29 17:41:07'),
(3, '41ac4bb060419f3463d3cdd5366bdced88babeb55b5c395661e248aa00cd46c7a', 4, '2023-08-29 17:42:04', '2023-08-29 17:42:04'),
(4, '50ec729df94054d7c8ca1009159846a545b51f2f421b14b524e126ba09598d65a', 5, '2023-08-29 17:48:17', '2023-08-29 17:48:17'),
(5, '67d488ffdbd0ee7432fce1ec4f3b61f04ebd33a83d4b6d507903aea60c7ebcdba', 6, '2023-08-29 17:49:41', '2023-08-29 17:49:41'),
(6, '76c3138bde3f8b671900c74add246435aeb3c00e9ff282a773c257f994d4766be', 7, '2023-08-30 19:05:25', '2023-08-30 19:05:25'),
(7, '89529f71a88b20248b9e018c4d46ede87c25442352728314945872df37ea6bd93', 8, '2023-08-30 19:15:29', '2023-08-30 19:15:29'),
(8, '9c034da41ffb0fd876ee7f487958c805f5544c10449b32ad0f896ef14b8c7ed73', 9, '2023-08-30 19:23:05', '2023-08-30 19:23:05'),
(9, '109245656b967da532a1b8fc3c1f8b7a7ba76150a28e3bc92695899b3e0e848e05', 10, '2023-08-30 19:25:22', '2023-08-30 19:25:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
