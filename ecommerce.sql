-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 05:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_attribute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `product_attribute_id`, `value`, `product_id`, `created_at`, `updated_at`) VALUES
(19, 3, 'red', 42, '2022-08-18 08:56:35', '2022-08-18 08:56:35'),
(20, 3, 'black', 42, '2022-08-18 08:56:35', '2022-08-18 08:56:35'),
(21, 4, '15', 42, '2022-08-18 08:56:35', '2022-08-18 08:56:35'),
(22, 4, '16', 42, '2022-08-18 08:56:35', '2022-08-18 08:56:35'),
(65, 3, 'Black', 44, '2022-08-18 10:35:31', '2022-08-18 10:35:31'),
(66, 3, 'White', 44, '2022-08-18 10:35:31', '2022-08-18 10:35:31'),
(67, 3, 'White', 45, '2022-08-18 10:45:21', '2022-08-18 10:45:21'),
(68, 5, 'Asus', 45, '2022-08-18 10:45:21', '2022-08-18 10:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ut est', 'ut-est', '2022-08-03 20:00:57', '2022-08-03 20:00:57'),
(2, 'laboriosam eveniet', 'laboriosam-eveniet', '2022-08-03 20:00:57', '2022-08-03 20:00:57'),
(3, 'quo enim', 'quo-enim', '2022-08-03 20:00:57', '2022-08-03 20:00:57'),
(4, 'qui earum', 'qui-earum', '2022-08-03 20:00:57', '2022-08-03 20:00:57'),
(5, 'iure ab', 'iure-ab', '2022-08-03 20:00:57', '2022-08-03 20:00:57'),
(6, 'at sint', 'at-sint', '2022-08-03 20:00:57', '2022-08-03 20:00:57'),
(7, 'est non', 'est-non', '2022-08-03 20:01:12', '2022-08-03 20:01:12'),
(8, 'rerum eos', 'rerum-eos', '2022-08-03 20:01:12', '2022-08-03 20:01:12'),
(9, 'fuga et', 'fuga-et', '2022-08-03 20:01:12', '2022-08-03 20:01:12'),
(10, 'reprehenderit modi', 'reprehenderit-modi', '2022-08-03 20:01:12', '2022-08-03 20:01:12'),
(52, 'Shoes', 'shoes', '2022-08-17 04:44:25', '2022-08-17 08:14:50'),
(60, 'Game', 'game', '2022-08-17 08:47:38', '2022-08-17 08:47:38'),
(62, 'Camera', 'camera', '2022-08-18 10:33:27', '2022-08-18 10:33:27'),
(63, 'Machine', 'machine', '2022-08-18 10:37:34', '2022-08-18 10:37:34'),
(64, 'Technology', 'technology', '2022-08-18 10:39:16', '2022-08-18 10:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Tiến Tài', 'nguyentientai10@gmail.com', '0798805741', 'Cứu tôi tôi đang không mua được điện thoại', '2022-08-11 05:13:41', '2022-08-11 05:13:41'),
(2, 'Thai Van Nam', 'nam@gmail.com', '0984913741', 'Allooooooooooooooo cứuuuuuuuuuuuuu', '2022-08-11 20:40:53', '2022-08-11 20:40:53'),
(3, 'duy thinh', 'thinh@gmail.com', '0906252977', 'sieu nhan gao', '2022-08-12 03:45:13', '2022-08-12 03:45:13'),
(4, 'Tai Nguyen Tien', 'nguyentientai10@gmai.com', '0798807541', 'ádasd', '2022-08-12 03:50:08', '2022-08-12 03:50:08'),
(5, 'thai nam Nguyen Tien', 'e@gmail.com', '0798807541', 'ádasd', '2022-08-12 03:53:13', '2022-08-12 03:53:13'),
(6, 'Tai Nguyen Tien', 'nguyentientai10@gmai.com', '0798807541', '123123', '2022-08-12 03:55:59', '2022-08-12 03:55:59'),
(7, 'Tai Nguyen Tien', 'nguyentientai10@gmai.com', '0798807541', 'ádasd', '2022-08-12 04:04:18', '2022-08-12 04:04:18'),
(8, 'Tai Nguyen Tien', 'nguyentientai10@gmai.com', '0798807541', 'ăâêăâêâê', '2022-08-12 04:06:24', '2022-08-12 04:06:24'),
(9, 'Tai Nguyen Tien', 'nguyentientai10@gmai.com', '0798807541', 'dfghj', '2022-08-12 04:07:56', '2022-08-12 04:07:56'),
(10, 'Tai Nguyen Tien', 'nguyentientai10@gmai.com', '0798807541', 'asdasd', '2022-08-12 04:08:54', '2022-08-12 04:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `created_at`, `updated_at`, `expiry_date`) VALUES
(3, 'OFF100', 'fixed', '100.00', '100.00', '2022-08-09 00:02:58', '2022-08-19 03:14:58', '2022-08-20'),
(4, 'OFF20p', 'percent', '20.00', '1200.00', '2022-08-09 00:05:42', '2022-08-09 00:05:42', '2022-08-10'),
(6, 'MT-35', 'percent', '35.00', '350.00', '2022-08-09 19:35:10', '2022-08-09 19:35:38', '2022-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sel_categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_products` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `sel_categories`, `no_of_products`, `created_at`, `updated_at`) VALUES
(1, '1,2,3,4,5', 8, '2022-08-08 04:24:59', '2022-08-07 19:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `subtitle`, `price`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Extra 25% Off', 'On online payments', '150', 'https://www.facebook.com/profile.php?id=100006139249437', '1659788982.jpg', '1', '2022-08-06 05:29:42', '2022-08-06 05:29:42'),
(4, 'Giảm giá 20%', 'Ti Vi Giá rẻ chào xuân', '80', 'https://www.facebook.com/profile.php?id=100006139249437', '1659789073.jpg', '1', '2022-08-06 05:31:13', '2022-08-06 05:31:13'),
(5, 'Giảm giá  chỉ còn 50%', 'Ghế Sô Pha', '895', 'https://www.facebook.com/profile.php?id=100006139249437', '1659789143.jpg', '1', '2022-08-06 05:32:23', '2022-08-06 05:32:23'),
(6, 'Sắn sale ngay hôm nay', 'Áo khoát cao cấp', '78', 'https://www.facebook.com/profile.php?id=100006139249437', '1659789193.jpg', '1', '2022-08-06 05:33:13', '2022-08-06 05:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_02_145912_create_sessions_table', 1),
(7, '2022_08_03_144822_create_categories_table', 1),
(8, '2022_08_03_144904_create_products_table', 1),
(9, '2022_08_06_112419_create_home_sliders_table', 2),
(10, '2022_08_07_042027_create_home_categories_table', 3),
(11, '2022_08_08_024552_create_sales_table', 4),
(12, '2022_08_08_040737_create_sales_table', 5),
(13, '2022_08_08_075707_create_profiles_table', 6),
(14, '2022_08_09_034353_create_coupons_table', 7),
(15, '2022_08_10_022144_add_expiry_date_to_coupons_table', 8),
(16, '2022_08_10_024248_create_orders_table', 9),
(17, '2022_08_10_024319_create_order_items_table', 9),
(18, '2022_08_10_024332_create_shippings_table', 9),
(19, '2022_08_10_024346_create_transactions_table', 9),
(20, '2022_08_10_064948_add_is_shipping_different', 10),
(21, '2022_08_11_030928_add_delivered_canceled_date_to_orders_table', 11),
(22, '2022_08_11_072709_create_reviews_table', 12),
(23, '2022_08_11_073925_add_rstatus_to_order_items_table', 12),
(24, '2022_08_11_114640_create_contacts_table', 13),
(25, '2022_08_12_163105_create_settings_table', 14),
(26, '2022_08_16_104348_create_shoppingcart_table', 15),
(27, '2022_08_17_112754_create_subcategories_table', 16),
(28, '2022_08_17_155859_add_subcategory_id_to_products_table', 17),
(29, '2022_08_18_111738_create_product_attributes_table', 18),
(30, '2022_08_18_140540_create_attribute_values_table', 19),
(31, '2022_08_18_162718_add_options_to_order_items_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ordered','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `canceled_date`) VALUES
(14, 7, '83.00', '0.00', '17.43', '100.43', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai10@gmai.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '6300', 'delivered', 0, '2022-08-10 20:36:14', '2022-08-15 06:54:00', '2022-08-15', '2022-08-11'),
(15, 7, '362.00', '0.00', '76.02', '438.02', 'Tien Tai', 'Nguyen Tien', '0798805741', 'nguyentientai10@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'Van Gia', 'Khánh Hòa', 'Vietnam', '6300', 'delivered', 0, '2022-08-11 01:42:32', '2022-08-11 01:42:32', NULL, NULL),
(16, 8, '362.00', '0.00', '76.02', '438.02', 'thai nam', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'Khánh Hòa', 'Vietnam', '57000', 'delivered', 0, '2022-08-15 06:53:07', '2022-08-15 06:54:17', '2022-08-15', NULL),
(17, 7, '50.00', '0.00', '10.50', '60.50', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '6300', 'ordered', 0, '2022-08-16 02:46:55', '2022-08-16 02:46:55', NULL, NULL),
(18, 7, '50.00', '0.00', '10.50', '60.50', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'Van Gia', 'Larger city / Province', 'Vietnam', '5700', 'ordered', 0, '2022-08-16 02:48:47', '2022-08-16 02:48:47', NULL, NULL),
(19, 7, '26.00', '0.00', '5.46', '31.46', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'Khánh Hòa', 'Vietnam', '57000', 'ordered', 0, '2022-08-16 02:51:17', '2022-08-16 02:51:17', NULL, NULL),
(20, 7, '50.00', '0.00', '10.50', '60.50', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '57000', 'ordered', 0, '2022-08-16 02:54:21', '2022-08-16 02:54:21', NULL, NULL),
(21, 7, '50.00', '0.00', '10.50', '60.50', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '5700', 'ordered', 0, '2022-08-16 03:26:02', '2022-08-16 03:26:02', NULL, NULL),
(22, 7, '50.00', '0.00', '10.50', '60.50', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai10@gmai.com', 'to 9 thi tran van gia', NULL, 'khánh hòa', 'nha trang', 'Vietnam', '57202', 'canceled', 0, '2022-08-16 03:28:02', '2022-08-18 03:32:40', NULL, '2022-08-18'),
(23, 7, '50.00', '0.00', '10.50', '60.50', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '57202', 'ordered', 0, '2022-08-16 03:29:55', '2022-08-16 03:29:55', NULL, NULL),
(24, 7, '100.00', '0.00', '21.00', '121.00', 'Tien Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'Van Gia', 'Khánh Hòa', 'Vietnam', '5700', 'ordered', 0, '2022-08-16 03:31:30', '2022-08-16 03:31:30', NULL, NULL),
(25, 7, '50.00', '0.00', '10.50', '60.50', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', NULL, 'khánh hòa', 'Khánh Hòa', 'Vietnam', '57000', 'ordered', 0, '2022-08-16 03:32:25', '2022-08-16 03:32:25', NULL, NULL),
(26, 7, '238.00', '0.00', '49.98', '287.98', 'Tien Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'Van Gia', 'Khánh Hòa', 'Vietnam', '5700', 'ordered', 0, '2022-08-16 03:37:06', '2022-08-16 03:37:06', NULL, NULL),
(27, 7, '586.00', '0.00', '123.06', '709.06', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai10@gmai.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '57000', 'ordered', 0, '2022-08-16 04:04:20', '2022-08-16 04:04:20', NULL, NULL),
(28, 7, '123.00', '0.00', '25.83', '148.83', 'Nguyen', 'Tai', '0798807541', 'nguyentientai10@gmai.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'Van Gia', 'Khanh Hoa', 'Vietnam', '5700', 'ordered', 0, '2022-08-18 09:33:15', '2022-08-18 09:33:15', NULL, NULL),
(29, 7, '400.00', '100.00', '84.00', '484.00', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai10@gmai.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '6300', 'ordered', 0, '2022-08-19 03:16:29', '2022-08-19 03:16:29', NULL, NULL),
(30, 7, '400.00', '100.00', '84.00', '484.00', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai10@gmai.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '6300', 'ordered', 0, '2022-08-19 03:16:48', '2022-08-19 03:16:48', NULL, NULL),
(31, 7, '238.00', '100.00', '49.98', '287.98', 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai10@gmail.com', 'to 9 thi tran van gia', 'to 9 thi tran van gia', 'khánh hòa', 'nha trang', 'Vietnam', '6300', 'delivered', 1, '2022-08-19 03:19:23', '2022-08-19 03:22:03', '2022-08-19', '2022-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL DEFAULT 0,
  `options` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`, `rstatus`, `options`) VALUES
(16, 8, 15, '362.00', 1, '2022-08-11 01:42:32', '2022-08-11 01:43:26', 1, NULL),
(17, 8, 16, '362.00', 1, '2022-08-15 06:53:07', '2022-08-15 06:53:07', 0, NULL),
(27, 7, 26, '119.00', 2, '2022-08-16 03:37:06', '2022-08-16 03:37:06', 0, NULL),
(28, 5, 27, '224.00', 1, '2022-08-16 04:04:20', '2022-08-16 04:04:20', 0, NULL),
(29, 8, 27, '362.00', 1, '2022-08-16 04:04:20', '2022-08-16 04:04:20', 0, NULL),
(30, 42, 28, '123.00', 1, '2022-08-18 09:33:15', '2022-08-18 09:33:15', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:2:{s:10:\"Colors 123\";s:5:\"black\";s:5:\"Sizes\";s:2:\"16\";}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(31, 44, 29, '500.00', 1, '2022-08-19 03:16:29', '2022-08-19 03:16:29', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(32, 44, 30, '500.00', 1, '2022-08-19 03:16:48', '2022-08-19 03:16:48', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(33, 6, 31, '338.00', 1, '2022-08-19 03:19:23', '2022-08-19 03:19:23', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$10$1QBDfJq2wdySPJHvaxwbv.keQluc1RMuPnv2ILSITxixM/7sr99JS', '2022-08-15 04:13:06'),
('admin@gmail.com', '$2y$10$z8gzN20V0o5IFwkNzNcOK.2bsquFN4..RgBY9aMFbduhzwYSJt7H6', '2022-08-15 04:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `subcategory_id`) VALUES
(3, 'impedit consequuntur optio aut', 'impedit-consequuntur-optio-aut', 'Libero non vitae rerum molestias nobis suscipit. Aperiam quo eum et nihil nam omnis voluptates molestiae. In et alias iure recusandae voluptate sit porro.', 'Adipisci veritatis odio non suscipit veritatis similique. Rerum voluptate corrupti est. Aut voluptate consequatur consequatur eius. Saepe pariatur inventore consequuntur distinctio totam. Odio architecto corrupti quas quibusdam. Maxime qui aspernatur commodi. Non sequi omnis quidem sed inventore ipsam. Et aperiam facere laborum. Eum quia corrupti voluptatem ut incidunt nihil sint. Voluptatum voluptatem velit non ea deserunt.', '461.00', '120.00', 'DIGI378', 'instock', 1, 173, 'digital_18.jpg', NULL, 5, '2022-08-10 20:05:55', '2022-08-07 19:27:55', NULL),
(5, 'et adipisci aut ea', 'et-adipisci-aut-ea', 'Quia aut quos recusandae eos aut non repudiandae asperiores. Eos distinctio quos molestiae velit. Modi aut officia quaerat vero. Totam impedit quidem optio est recusandae et consequatur doloribus.', 'Sed fugiat voluptatem reiciendis tenetur dolores. Sed odit veritatis debitis pariatur laudantium non. Libero beatae beatae rerum qui. Sed maiores sint dolore et. Aliquam qui deserunt quidem laudantium voluptates eum quos dolorem. Quidem eum quis ab veritatis voluptatem. Illum consequatur tempore dolore ipsam rerum qui sequi.', '224.00', '50.00', 'DIGI173', 'instock', 0, 143, 'digital_6.jpg', NULL, 1, '2022-08-03 20:05:55', '2022-08-07 19:28:24', NULL),
(6, 'autem ullam sit pariatur', 'autem-ullam-sit-pariatur', 'Autem aut magni tempore numquam. A cum cupiditate ducimus vitae similique. Eos amet quas mollitia ratione aut. Iure aut culpa dicta assumenda ullam.', 'Suscipit distinctio iste neque reiciendis minima est rerum. Voluptate totam eaque facilis fugit quos alias. Corrupti id commodi nostrum possimus aut. Fugit suscipit eos consequatur ducimus et rem est. Quia alias qui sit ipsa. Fugiat dignissimos earum delectus eum animi quos ad. Et error quidem qui quasi ducimus optio. Laudantium et voluptate a aut omnis consequuntur. Et quia sunt quidem sed amet. Veniam accusamus placeat ea id beatae exercitationem. Ipsa explicabo modi ratione repellat.', '338.00', '289.00', 'DIGI453', 'instock', 0, 170, 'digital_8.jpg', NULL, 5, '2022-08-03 20:05:55', '2022-08-07 19:28:45', NULL),
(7, 'consequuntur labore qui amet', 'consequuntur-labore-qui-amet', 'Aut quis placeat explicabo fuga placeat vel ducimus dolorem. Magnam quia modi ducimus facere impedit. Non rerum perferendis perspiciatis officiis.', 'Dicta dolores labore sit consequatur veniam consequatur. Quia at qui quis neque at. Est id quia sint consequatur. Repellat dicta in aliquid harum. Sed aut voluptatibus blanditiis et. Culpa assumenda ab id magnam molestiae. Distinctio sit ullam corrupti ex dolorum quia rerum sapiente. Voluptas ut molestias et molestiae velit expedita cumque sed. Repudiandae nisi quo et placeat voluptatem alias. Architecto rerum quis autem quas.', '91.00', '119.00', 'DIGI277', 'instock', 0, 173, 'digital_2.jpg', NULL, 2, '2022-08-03 20:05:55', '2022-08-07 19:28:59', NULL),
(8, 'corporis veniam animi corporis', 'corporis-veniam-animi-corporis', 'Exercitationem voluptatem aliquid beatae non perferendis harum odio. Est excepturi mollitia in tempora in quia doloremque aut. Expedita nam odit et sit ipsa necessitatibus.', 'Officiis quia autem iste porro recusandae sed impedit voluptatibus. Dignissimos omnis et sapiente consequatur excepturi dolore corporis aut. Ipsam dolorum alias eius in. Tempora facilis quisquam aperiam. Molestias quisquam ut dolores optio reiciendis magnam. Aperiam porro culpa enim quaerat ut est enim provident. Perspiciatis tenetur et excepturi dolores necessitatibus. Sequi voluptate sed aut voluptatem. Numquam omnis velit tenetur id fugiat. Ipsam tempore magnam rerum.', '362.00', NULL, 'DIGI397', 'instock', 0, 163, 'digital_19.jpg', NULL, 1, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(9, 'excepturi explicabo repellat sunt', 'excepturi-explicabo-repellat-sunt', 'Sint est dolores incidunt id voluptas maxime velit. Quidem magnam sunt rerum ducimus sed harum. Optio placeat alias distinctio fugit ut.', 'Eum exercitationem consequatur debitis quae excepturi voluptas. Voluptatem voluptatum quisquam quo ut placeat ut. Ipsum sint in ut totam. Iste ipsam aut qui blanditiis. Molestias excepturi enim a fugit. Architecto voluptatem in dolores explicabo eligendi qui. Placeat in aliquid eaque et sapiente error. Et velit quis accusantium reiciendis.', '338.00', NULL, 'DIGI311', 'instock', 0, 146, 'digital_17.jpg', NULL, 4, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(10, 'minima nihil sed eum', 'minima-nihil-sed-eum', 'Repellat deleniti iusto culpa beatae. Sunt voluptas officia eum est et quidem voluptatum. Maiores atque provident rerum est autem vel ut.', 'Sunt in numquam sit molestias reiciendis libero odit. Est rerum provident ex aut quas id vel. Est culpa accusamus sit voluptatum mollitia. Architecto molestiae fuga exercitationem ut dicta corporis aliquam aut. Sit odio occaecati id. Voluptatem atque consectetur ad. Et et aut perferendis distinctio enim quaerat. Optio labore a sit nemo. Nostrum dicta aut ut eum quas. Dicta cupiditate quos minima. Sunt autem earum alias et.', '300.00', NULL, 'DIGI438', 'instock', 0, 124, 'digital_7.jpg', NULL, 1, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(11, 'necessitatibus quas qui ullam', 'necessitatibus-quas-qui-ullam', 'Accusantium placeat inventore aut et aut sed ratione. Delectus aperiam laborum quasi consequatur. At ducimus aut quidem et magni architecto animi voluptatem. Eos corrupti est et aperiam.', 'Aut enim enim aspernatur fugiat aperiam non. Aspernatur in incidunt sit deserunt qui perferendis. Quia nemo laboriosam ad aliquam hic et eius. Occaecati corporis distinctio quas doloremque est. Aut aut neque voluptate quia. Ipsam sequi quia suscipit sit neque dolorem quisquam. Recusandae vel odio earum iste. Sint ipsum qui autem eos quam quia. Repudiandae qui quis veritatis beatae labore aspernatur vel. Ipsa aperiam nobis est velit reiciendis. Autem dolorem est sapiente modi delectus ut.', '42.00', NULL, 'DIGI436', 'instock', 0, 156, 'digital_22.jpg', NULL, 4, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(12, 'qui quis aut ea', 'qui-quis-aut-ea', 'Aspernatur eum illum ea id est dolor et. Itaque quia natus et ut voluptatem doloremque. Ut laborum repellat tempora magnam illo. Commodi ab ut placeat eum.', 'Sequi possimus voluptatem reiciendis aperiam accusantium. Expedita est incidunt voluptas et. Unde repudiandae non commodi aspernatur aut officiis itaque non. Vitae vitae et inventore odio ducimus et dolore. Minus adipisci nisi vel tempora unde. Odio aut cupiditate ullam quia quam atque sit. Earum omnis et et autem sit. Consequatur voluptatibus eos ipsum.', '436.00', NULL, 'DIGI276', 'instock', 0, 120, 'digital_9.jpg', NULL, 1, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(13, 'nemo cupiditate blanditiis consequatur', 'nemo-cupiditate-blanditiis-consequatur', 'Dolorem neque enim est nihil adipisci modi dolor. Molestias saepe ea ad voluptatibus. Iure qui dolorem et beatae doloremque.', 'Mollitia odio sit modi cumque. Vero amet repudiandae non est sit animi omnis. Ut et maxime deleniti libero sit. Enim doloremque consequuntur sint vero. Atque quidem rem eius. Omnis placeat voluptatum dolore et ut qui minima. Veniam reiciendis consequatur voluptatem harum. Labore numquam nihil autem consequatur et quibusdam aut tenetur. Suscipit nisi tempora eaque hic nemo et. Vel eum accusantium architecto non.', '299.00', NULL, 'DIGI317', 'instock', 0, 113, 'digital_16.jpg', NULL, 1, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(14, 'sed velit tempore quibusdam', 'sed-velit-tempore-quibusdam', 'Magnam voluptate aperiam esse voluptatibus mollitia sit. Quis et dolores corrupti doloremque. Est molestiae delectus molestias nulla vel nemo laudantium. Id ut et minus sequi numquam autem veritatis.', 'Nisi aut id modi molestiae asperiores aspernatur nulla. Officiis blanditiis et veniam fuga. Dolor aut perspiciatis qui suscipit. Ut hic quo iste eum nisi. Delectus optio dicta dolorem veniam repellat natus. Eaque qui in numquam cum quos veritatis alias a. Est possimus quia ut. Odio sunt voluptatem sed qui adipisci. Animi aut iusto iure qui. Est qui iure culpa. Doloribus nemo adipisci id deserunt architecto.', '155.00', NULL, 'DIGI341', 'instock', 0, 102, 'digital_21.jpg', NULL, 2, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(15, 'culpa voluptas pariatur earum', 'culpa-voluptas-pariatur-earum', 'Sapiente quibusdam et sed. Et alias in qui pariatur delectus et. Ratione ipsam debitis molestiae dolorum quia qui. Veritatis suscipit tempora quo illum.', 'Sunt dolorem ut sit voluptatem. Est consequatur laborum possimus magni dolore. Sint quidem excepturi voluptas quam earum. In eaque dignissimos laudantium omnis non nihil ab. Reiciendis esse illum aut pariatur. Ea rerum libero totam. Autem cupiditate perferendis officiis sed minus. Suscipit cum impedit est omnis dolores laboriosam repudiandae. Tempora perferendis aliquam vel. Amet et quia saepe.', '123.00', NULL, 'DIGI472', 'instock', 0, 139, 'digital_11.jpg', NULL, 4, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(16, 'quidem nam eum facere', 'quidem-nam-eum-facere', 'Aut quisquam recusandae velit. Minus excepturi similique ut iusto qui. Corrupti exercitationem fuga error voluptate corporis. Quaerat incidunt quidem est.', 'Aut ea nisi dolorem facere. Nostrum qui perferendis enim quasi est dicta qui sed. Sunt illum dolores dolor alias eos inventore. Et recusandae quaerat odio facere corrupti. Numquam assumenda quod doloremque quos nihil eius. Beatae assumenda et incidunt quo tempore et illum. Et et rerum voluptatem minima nam. Consequatur odit a minima voluptatibus optio. Est soluta adipisci et qui necessitatibus. Nostrum quam voluptatum nam doloribus quo omnis.', '445.00', NULL, 'DIGI447', 'instock', 0, 116, 'digital_14.jpg', NULL, 2, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(17, 'omnis modi consequatur neque', 'omnis-modi-consequatur-neque', 'Esse tenetur expedita illo et saepe. Beatae qui autem repellat amet aliquid sed ut. Ipsam qui aspernatur magni facere veniam.', 'Quibusdam eveniet eligendi quis vero ea labore animi. Omnis dignissimos ut voluptatem et aut ipsam quaerat. Asperiores quaerat quidem sed voluptatum minima iste. Molestiae sit ipsum perferendis aliquam ex eligendi. Veritatis dolorem culpa est quo quo similique. Perspiciatis qui omnis est. Commodi labore eos dolorem sint. Iure qui nihil earum eius repellendus aut. Quam quia distinctio at aperiam.', '161.00', NULL, 'DIGI434', 'instock', 0, 133, 'digital_12.jpg', NULL, 1, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(18, 'molestias odio est consequatur', 'molestias-odio-est-consequatur', 'Et itaque quo ratione labore. Et in similique natus enim odio nemo et. Consequatur hic incidunt et vitae eveniet dolor et.', 'Aut odio omnis adipisci perspiciatis fugit sed. Eos illum excepturi quis accusantium corrupti. Nemo voluptatum dolores eum et. Enim qui porro eos porro expedita quasi sequi. Aspernatur consequatur quo delectus suscipit nobis. Ut asperiores voluptatum dolores delectus qui deserunt ex. Voluptatem aut laudantium est hic. Dignissimos iure blanditiis voluptas est. Ratione sunt quidem unde aut ipsam laboriosam quaerat.', '394.00', NULL, 'DIGI484', 'instock', 0, 136, 'digital_13.jpg', NULL, 1, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(19, 'omnis facere quae aspernatur', 'omnis-facere-quae-aspernatur', 'Sed beatae soluta nulla quo nam. Rerum laudantium et tenetur dolore unde voluptas.', 'Nisi magnam et distinctio cum sequi suscipit. Rem magnam velit quae dolores velit. Nulla in reiciendis saepe quos laboriosam et. Voluptatem quo aut et sit autem. Enim aliquid blanditiis deleniti. Non odio facere voluptate enim. Et unde voluptatem vel veniam voluptas dolorem. Quo voluptas dolorum quia adipisci porro iusto qui. Ad quibusdam autem magni enim et numquam aperiam suscipit. Autem facilis perspiciatis qui id officia.', '304.00', NULL, 'DIGI172', 'instock', 0, 158, 'digital_5.jpg', NULL, 4, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(20, 'magnam laudantium praesentium voluptatem', 'magnam-laudantium-praesentium-voluptatem', 'Qui ducimus delectus modi et rerum exercitationem. Dolorem dolor suscipit facilis aliquid necessitatibus fuga. Officiis quaerat magnam dolor temporibus. Cupiditate cum laborum molestiae rerum.', 'Ex quis ad itaque dicta vitae. In incidunt sapiente itaque id qui quisquam. Aliquam et necessitatibus commodi aspernatur culpa sit molestiae recusandae. Aut numquam eveniet praesentium sed reprehenderit sed ipsa. Repellat nisi quis placeat quia aut molestias. Dolor omnis non et illo non id eius. Voluptas dolorum fugiat molestiae.', '171.00', NULL, 'DIGI470', 'instock', 0, 181, 'digital_4.jpg', NULL, 3, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(21, 'delectus labore explicabo nihil', 'delectus-labore-explicabo-nihil', 'Nihil sed dolorum est eius voluptatem dignissimos ut. Soluta sint ducimus dolor qui consequatur. Perspiciatis placeat non quaerat qui ex explicabo quo.', 'Voluptas molestiae impedit quia voluptates cupiditate omnis ducimus. Est eos quis ab laboriosam hic aut. Praesentium aperiam minima cum velit nemo. Est voluptatum delectus ut dolor sint voluptas. Commodi assumenda eius voluptatem molestiae. Assumenda nobis distinctio saepe eius cum ratione deserunt. Hic sunt occaecati qui omnis totam. Dolorem consequatur ut nisi. Dolor nulla excepturi unde et laudantium.', '84.00', NULL, 'DIGI410', 'instock', 0, 100, 'digital_15.jpg', NULL, 3, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(22, 'molestias accusantium omnis eum', 'molestias-accusantium-omnis-eum', 'Est similique ut quisquam quam. Reprehenderit aliquam commodi qui et quas omnis ut ullam. Et ipsam id vel vero. Hic cumque laudantium molestiae cum totam et aut.', 'Nisi vel iure aut. Est qui beatae aliquam esse. Repellendus dolorem voluptas placeat quod velit sunt. Sint libero animi eligendi qui. Labore eum ut reprehenderit ut aut doloribus autem. Neque odio non debitis ut. Qui autem fuga officiis veritatis molestias ut esse qui. Modi ad eligendi quis ab in voluptatem ratione. Soluta et nostrum doloribus fugit repellendus.', '320.00', NULL, 'DIGI406', 'instock', 0, 135, 'digital_20.jpg', NULL, 2, '2022-08-03 20:05:55', '2022-08-03 20:05:55', NULL),
(39, 'asd', 'asd', 'asd', 'asd', '123.00', '123.00', '123', 'instock', 0, 123, '1660559176.jpg', ',16605589940.jpg,16605589941.jpg,16605589942.jpg,16605589943.jpg', 1, '2022-08-15 10:02:38', '2022-08-15 10:26:16', NULL),
(42, 'Con chim non', 'con-chim-non', 'asdasd', 'asd', '123.00', '123.00', '123', 'instock', 0, 123, '1660809110.jpg', ',16608091100.jpg,16608091101.jpg,16608091102.jpg,16608091103.jpg', 60, '2022-08-18 07:51:50', '2022-08-18 07:51:50', NULL),
(44, 'Camera', 'camera', 'A camera is verry good', 'A camera is an optical instrument that captures a visual image. At a basic level, cameras consist of sealed boxes (the camera body), with a small hole (the aperture) that allows light through to capture an image on a light-sensitive surface (usually a digital sensor or photographic film).', '500.00', '400.00', 'CMR-1', 'instock', 1, 12, '1660818679.jpg', ',16608186790.jpg,16608186791.jpg,16608186792.jpg,16608186793.jpg', 62, '2022-08-18 10:31:19', '2022-08-18 10:35:31', 12),
(45, 'SURFACE PRO 8', 'surface-pro-8', 'SURFACE PRO 8  | CORE I5 / RAM 8GB / SSD 512GB', '- CPU	 Intel® Core™ i5-1135G7\n- Card đồ họa	 Intel® Iris® Xe Graphics\n- Bộ nhớ trong	 512 GB SSD\n- RAM	 8 GB\n- Kích thước màn hình	 13” PixelSense™ Flow Display\n- Độ phân giải	 2880 x 1920 (267 PPI)\n- Trọng lượng	 0.891 kg', '234.00', '234.00', 'LT-1', 'instock', 0, 50, '1660819521.jpg', ',16608195210.jpg', 64, '2022-08-18 10:45:21', '2022-08-18 10:45:21', 13);

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `created_at`, `updated_at`, `name`) VALUES
(3, '2022-08-18 05:00:35', '2022-08-18 09:45:40', 'Colors '),
(4, '2022-08-18 05:00:48', '2022-08-18 05:00:48', 'Sizes'),
(5, '2022-08-18 09:45:55', '2022-08-18 09:45:55', 'Types');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `image`, `mobile`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 7, '1660793880.jpg', '0798807541', 'Nha Trang12', 'Van Gia', 'khánh hòa', '6300', 'Vietnam', 'khanh hòa', '2022-08-08 01:23:11', '2022-08-18 03:38:00'),
(2, 10, '1660705535.jpg', '0798805741', 'Tổ 9 Thị Trấn Vạn Giã', 'Đại học Nha Trang', 'Khánh Hòa', '79-V1-44937', 'Vietnam', '63000', '2022-08-16 09:09:20', '2022-08-17 03:05:35'),
(3, 8, '1660646428.jpg', '0798807541', 'Nha Trang', 'Van Gia', 'khánh hòa', '6300', 'Vietnam', 'khanh hòa', '2022-08-16 10:39:19', '2022-08-16 10:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `order_item_id`, `created_at`, `updated_at`) VALUES
(2, 3, 'Beautiful tivi', 16, '2022-08-11 01:43:26', '2022-08-11 01:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-08-19 04:09:09', 1, NULL, '2022-08-18 02:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('h8JA3x50Xn9vJk7PkGcOC4FrQSh4WgLwSu8faPHn', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiV0J5ZkxiUG4xVG1aakdjd2hjdHFtb0M2OE9qcEw1MjQxb3dYNWR1cyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NDoibGluayI7czoyMjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwLyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NztzOjQ6ImNhcnQiO2E6Mjp7czo4OiJ3aXNobGlzdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6NDp7czozMjoiMDI3YzkxMzQxZmQ1Y2Y0ZDI1NzliNDljNGI2YTkwZGEiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjo5OntzOjU6InJvd0lkIjtzOjMyOiIwMjdjOTEzNDFmZDVjZjRkMjU3OWI0OWM0YjZhOTBkYSI7czoyOiJpZCI7aToxO3M6MzoicXR5IjtpOjE7czo0OiJuYW1lIjtzOjI4OiJzYXBpZW50ZSBudWxsYSB2b2x1cHRhdGVtIGV0IjtzOjU6InByaWNlIjtkOjgzO3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjA6e31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO3M6MTk6IkFwcFxNb2RlbHNcUHJvZHVjdHMiO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjIxO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBpc1NhdmVkIjtiOjA7fXM6MzI6ImE3NzViYWM5Y2ZmN2RlYzJiOTg0ZTAyM2I5NTIwNmFhIjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6OTp7czo1OiJyb3dJZCI7czozMjoiYTc3NWJhYzljZmY3ZGVjMmI5ODRlMDIzYjk1MjA2YWEiO3M6MjoiaWQiO2k6MztzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czozMDoiaW1wZWRpdCBjb25zZXF1dW50dXIgb3B0aW8gYXV0IjtzOjU6InByaWNlIjtkOjQ2MTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtzOjE5OiJBcHBcTW9kZWxzXFByb2R1Y3RzIjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7aToyMTtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AaXNTYXZlZCI7YjowO31zOjMyOiJlZmIyNmUyYzZhYjZiZDRkMTMyMzI4ODkyMzUyMmQ0ZSI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjk6e3M6NToicm93SWQiO3M6MzI6ImVmYjI2ZTJjNmFiNmJkNGQxMzIzMjg4OTIzNTIyZDRlIjtzOjI6ImlkIjtpOjQ7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6Mjk6InV0IHJlcHJlaGVuZGVyaXQgaXBzYSB0ZW1wb3JhIjtzOjU6InByaWNlIjtkOjIzNztzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtzOjE5OiJBcHBcTW9kZWxzXFByb2R1Y3RzIjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7aToyMTtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AaXNTYXZlZCI7YjowO31zOjMyOiIzNzBkMDg1ODUzNjBmNWM1NjhiMThkMWYyZTRjYTFkZiI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjk6e3M6NToicm93SWQiO3M6MzI6IjM3MGQwODU4NTM2MGY1YzU2OGIxOGQxZjJlNGNhMWRmIjtzOjI6ImlkIjtpOjI7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6MjE6ImV0IGNvcnBvcmlzIG5vbiBzYWVwZSI7czo1OiJwcmljZSI7ZDo0MDE7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7czoxOToiQXBwXE1vZGVsc1xQcm9kdWN0cyI7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAHRheFJhdGUiO2k6MjE7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGlzU2F2ZWQiO2I6MDt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OiJjYXJ0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiJhNzc1YmFjOWNmZjdkZWMyYjk4NGUwMjNiOTUyMDZhYSI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjk6e3M6NToicm93SWQiO3M6MzI6ImE3NzViYWM5Y2ZmN2RlYzJiOTg0ZTAyM2I5NTIwNmFhIjtzOjI6ImlkIjtpOjM7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6MzA6ImltcGVkaXQgY29uc2VxdXVudHVyIG9wdGlvIGF1dCI7czo1OiJwcmljZSI7ZDo0NjE7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7czoxOToiQXBwXE1vZGVsc1xQcm9kdWN0cyI7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAHRheFJhdGUiO2k6MjE7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGlzU2F2ZWQiO2I6MDt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fXM6NjoiY291cG9uIjthOjQ6e3M6NDoiY29kZSI7czo2OiJPRkYxMDAiO3M6NDoidHlwZSI7czo1OiJmaXhlZCI7czo1OiJ2YWx1ZSI7czo2OiIxMDAuMDAiO3M6MTA6ImNhcnRfdmFsdWUiO3M6NjoiMTAwLjAwIjt9czo4OiJjaGVja291dCI7YTo0OntzOjg6ImRpc2NvdW50IjtzOjY6IjEwMC4wMCI7czo4OiJzdWJ0b3RhbCI7ZDozNjE7czozOiJ0YXgiO2Q6NzUuODE7czo1OiJ0b3RhbCI7ZDo0MzYuODE7fX0=', 1660879757),
('HuWMxdbShhG64RYEPrVMIWZnDU5NxiKZNF4evMoA', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTGFDMDJWMG0yMGpQTHdIZXJLeXZGTk01cFlyWFpobVliMHNxYWVMQSI7czo0OiJsaW5rIjtzOjIxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vb3JkZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MTp7aTowO3M6MTM6Im9yZGVyX21lc3NhZ2UiO31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czo0OiJjYXJ0IjthOjI6e3M6NDoiY2FydCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo4OiJ3aXNobGlzdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fXM6NToidXR5cGUiO3M6MzoiQURNIjt9', 1660879323),
('ov9pJRrCP8I7mbvbQKmARsEXhNImFgxPFAmcWl01', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSGFtUXR1SW9oYXlnQWJCcU85NGt5ZkxWRHlFcEpwbHg3VEM5T3J6byI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdXRoL2ZhY2Vib29rIjt9czo0OiJsaW5rIjtzOjIyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvIjtzOjU6InN0YXRlIjtzOjQwOiJFSmd2bmJ3Yjk2bXpSbGdKN1NLVXBWdGMwWG5ZZU9JRGRMY09PWE5yIjt9', 1660875883);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `phone2`, `address`, `map`, `twitter`, `facebook`, `pinterest`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'nguyentientai10@gmail.com', '0798805741', '0984913741', 'Vạn Giã,Vạn Ninh Khánh Hòa', 'Nha Trang', 'https://www.linkedin.com/in/tai-nguyen-tien-787545213/', 'https://www.facebook.com/profile.php?id=100006139249437', 'https://profile-forme.surge.sh/', 'https://www.instagram.com/nguyentientai10/', 'https://www.youtube.com/channel/UC0h2JqCkKRce819tSw27Y3w', '2022-08-12 10:12:58', '2022-08-15 03:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(5, 31, 'Tai', 'Nguyen Tien', '0798807541', 'nguyentientai9@gmail.com', 'to 9 thi tran van gia', NULL, 'khánh hòa', 'nha trang', 'Vietnam', '6300', '2022-08-19 03:19:23', '2022-08-19 03:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('admin@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-08-19 02:49:13', NULL),
('admin@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-08-19 02:49:13', NULL),
('nguyentientai10@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"468399581342505c47f4615b81bedaa9\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"468399581342505c47f4615b81bedaa9\";s:2:\"id\";i:5;s:3:\"qty\";i:1;s:4:\"name\";s:18:\"et adipisci aut ea\";s:5:\"price\";d:224;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"App\\Models\\Products\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-08-19 02:28:57', NULL),
('nguyentientai10@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:3:\"qty\";i:1;s:4:\"name\";s:30:\"impedit consequuntur optio aut\";s:5:\"price\";d:461;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"App\\Models\\Products\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-08-19 02:28:57', NULL),
('user@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:3:\"qty\";i:1;s:4:\"name\";s:30:\"impedit consequuntur optio aut\";s:5:\"price\";d:461;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"App\\Models\\Products\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-08-19 03:28:40', NULL),
('user@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:4:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:3:\"qty\";i:1;s:4:\"name\";s:28:\"sapiente nulla voluptatem et\";s:5:\"price\";d:83;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"App\\Models\\Products\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"a775bac9cff7dec2b984e023b95206aa\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:3:\"qty\";i:1;s:4:\"name\";s:30:\"impedit consequuntur optio aut\";s:5:\"price\";d:461;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"App\\Models\\Products\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";s:2:\"id\";i:4;s:3:\"qty\";i:1;s:4:\"name\";s:29:\"ut reprehenderit ipsa tempora\";s:5:\"price\";d:237;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"App\\Models\\Products\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"370d08585360f5c568b18d1f2e4ca1df\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"370d08585360f5c568b18d1f2e4ca1df\";s:2:\"id\";i:2;s:3:\"qty\";i:1;s:4:\"name\";s:21:\"et corporis non saepe\";s:5:\"price\";d:401;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"App\\Models\\Products\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-08-19 03:24:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Electronic', 'electronic', NULL, '2022-08-17 04:44:25', '2022-08-17 04:44:25'),
(4, 'Nike', 'nike', 52, '2022-08-17 08:13:32', '2022-08-17 08:17:44'),
(6, 'Adidas', 'adidas', 52, '2022-08-17 08:24:59', '2022-08-17 08:24:59'),
(7, 'Puma', 'puma', 52, '2022-08-17 08:25:27', '2022-08-17 08:25:27'),
(9, 'Jordan', 'jordan', 52, '2022-08-17 08:44:53', '2022-08-17 08:56:19'),
(12, 'Sony', 'sony', 62, '2022-08-18 10:35:05', '2022-08-18 10:35:05'),
(13, 'Lap-Top', 'lap-top', 64, '2022-08-18 10:39:50', '2022-08-18 10:41:47'),
(14, 'Computers', 'computers', 64, '2022-08-18 10:40:10', '2022-08-18 10:41:31'),
(15, 'Samsumg', 'samsumg', 62, '2022-08-18 10:40:49', '2022-08-18 10:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(5, 7, 14, 'cod', 'pending', '2022-08-10 20:36:14', '2022-08-10 20:36:14'),
(6, 7, 15, 'cod', 'pending', '2022-08-11 01:42:32', '2022-08-11 01:42:32'),
(7, 8, 16, 'cod', 'pending', '2022-08-15 06:53:07', '2022-08-15 06:53:07'),
(8, 7, 17, 'cod', 'pending', '2022-08-16 02:46:55', '2022-08-16 02:46:55'),
(9, 7, 18, 'cod', 'pending', '2022-08-16 02:48:47', '2022-08-16 02:48:47'),
(10, 7, 19, 'cod', 'pending', '2022-08-16 02:51:17', '2022-08-16 02:51:17'),
(11, 7, 20, 'cod', 'pending', '2022-08-16 02:54:21', '2022-08-16 02:54:21'),
(12, 7, 21, 'cod', 'pending', '2022-08-16 03:26:02', '2022-08-16 03:26:02'),
(13, 7, 22, 'cod', 'pending', '2022-08-16 03:28:02', '2022-08-16 03:28:02'),
(14, 7, 23, 'cod', 'pending', '2022-08-16 03:29:55', '2022-08-16 03:29:55'),
(15, 7, 24, 'cod', 'pending', '2022-08-16 03:31:30', '2022-08-16 03:31:30'),
(16, 7, 25, 'cod', 'pending', '2022-08-16 03:32:25', '2022-08-16 03:32:25'),
(17, 7, 26, 'cod', 'pending', '2022-08-16 03:37:06', '2022-08-16 03:37:06'),
(18, 7, 27, 'cod', 'pending', '2022-08-16 04:04:20', '2022-08-16 04:04:20'),
(19, 7, 28, 'cod', 'pending', '2022-08-18 09:33:15', '2022-08-18 09:33:15'),
(20, 7, 30, 'card', 'approved', '2022-08-19 03:16:52', '2022-08-19 03:16:52'),
(21, 7, 31, 'card', 'approved', '2022-08-19 03:19:27', '2022-08-19 03:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for User or Customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `phone`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(6, 'Tai Nguyen Tien', 'admin', 'Tai Nguyen Tien', 'admin@gmail.com', NULL, '$2y$10$jeOXaMDe2P.sS8Unta/W7OluKsmfLTw9yAHuV.CXr6pRs/9ggz83e', NULL, NULL, NULL, NULL, NULL, NULL, 'ADM', '2022-08-05 06:45:11', '2022-08-05 06:45:11'),
(7, 'Tai Nguyen Tien', 'user@gmail.com', '0798805741', 'user@gmail.com', NULL, '$2y$10$qJDQb/1Mg7B9IVkXOXmpaeTCgDtpvtfJlzO0fOtFH7iiPqOutq16y', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2022-08-08 01:21:42', '2022-08-11 03:21:11'),
(8, 'Tai Nguyen Tien', 'nhanhauv1p', '0906252977', 'nguyentientai9@gmail.com', NULL, '$2y$10$1kfSo8GPf3flh7kWSNLukep79Ki1pfAOvcBCl9p8Wzkr3PqiXf.IS', NULL, NULL, NULL, 'mwlakUYNy2zLVEFdByI8kZkj80axSPCa7vPERU49cWmJbAtMC9wKOSVimoT9', NULL, NULL, 'USR', '2022-08-15 04:14:18', '2022-08-16 10:40:28'),
(9, 'asd', 'asdasd', '45646542123', 'asdasd@gmail.com', NULL, '$2y$10$Tq2xhVRF1ER4iUHFsU1tPO7vnfpySQ/i5MU8IpAL15vs7yS3jA.dy', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2022-08-15 09:22:08', '2022-08-15 09:22:08'),
(10, 'Nguyễn Tiến Tài', NULL, NULL, 'nguyentientai10@gmail.com', NULL, 'eyJpdiI6IlRjVktCaVF5MnV4UzMwbHBjamJJUFE9PSIsInZhbHVlIjoiWm9veW1PY0lVVXJDK0RlYU1jM0F2dDdnbmJIZXorRTg0SWlRaUNUTFZZcz0iLCJtYWMiOiJkMmJhY2VkODAxZDk4YTkxY2EyYWM4MjRjOTNjY2ZhYmMxY2Q2YTlkMWFjOGViMDQ0YzU2NjZkZmJlZjEzOTMxIiwidGFnIjoiIn0=', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2022-08-16 09:06:23', '2022-08-17 03:02:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_product_attribute_id_foreign` (`product_attribute_id`),
  ADD KEY `attribute_values_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_order_item_id_foreign` (`order_item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

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
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_product_attribute_id_foreign` FOREIGN KEY (`product_attribute_id`) REFERENCES `product_attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
