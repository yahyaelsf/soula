-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2024 at 01:03 PM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u380887463_soula`
--

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2020_06_16_114938_create_t_users_table', 1),
(4, '2020_06_16_115007_create_t_admin_table', 1),
(5, '2020_06_24_094456_create_t_system_settings_table', 1),
(6, '2021_11_17_084227_create_permission_tables', 1),
(7, '2021_11_17_085355_add_columns_to_permissions_table', 1),
(8, '2021_11_17_102012_add_columns_to_roles_table', 1),
(9, '2021_11_23_091713_create_t_brands_table', 1),
(10, '2021_11_23_091714_create_t_brand_translations_table', 1),
(11, '2021_12_09_075400_change_s_value_column_in_t_system_settings', 1),
(12, '2022_01_25_120709_remove_unique_from_email_and_username_in_t_admin_table', 1),
(13, '2024_09_07_100034_create_t_cources_table', 1),
(15, '2024_09_07_161444_create_t_vedios_table', 2),
(16, '2021_11_23_091715_create_t_sliders_table', 3),
(17, '2024_09_26_071018_create_payments_table', 4),
(18, '2024_09_29_110602_create_t_musics_table', 4),
(19, '2024_09_30_065933_create_t_subscriptions_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\TAdmin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `gateway` varchar(255) NOT NULL,
  `fk_i_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `reference_id` varchar(255) NOT NULL,
  `status` enum('peending','success','failed') NOT NULL,
  `amount` double(8,2) NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pk_i_id`, `gateway`, `fk_i_user_id`, `reference_id`, `status`, `amount`, `data`, `created_at`, `updated_at`) VALUES
(1, 'cash', NULL, '2', 'peending', 60.00, NULL, '2024-09-29 09:52:20', '2024-09-29 09:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `display_name`, `parent_id`) VALUES
(1, 'admins', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'مدراء النظام', NULL),
(2, 'admins-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:33:23', 'رؤية المدراء', 1),
(4, 'admins-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:33:07', 'اضافة تعديل مدير', 1),
(5, 'admins-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:58', 'تغيير حالة المدراء', 1),
(6, 'admins-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:47', 'حذف المدراء', 1),
(7, 'users', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'المستخدمين', NULL),
(8, 'users-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:40', 'رؤية المستخدمين', 7),
(10, 'users-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:21', 'اضافة وتعديل المستخدمين', 7),
(11, 'users-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:09', 'تغيير حالة المستخدمين', 7),
(12, 'users-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:02', 'حذف المستخدمين', 7),
(13, 'brands', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'العلامات التجارية', NULL),
(14, 'brands-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:31:05', 'رؤية العلامات التجارية', 13),
(15, 'brands-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:53', 'اضافة وتعديل علامة تجارية', 13),
(16, 'brands-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:42', 'تغيير حالة العلامات التجارية', 13),
(18, 'brands-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:24', 'حذف العلامات التجارية', 13),
(19, 'cources', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'الكورسات', NULL),
(20, 'cources-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:16', 'رؤية الكورس', 19),
(21, 'cources-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:08', 'اضافة تعديل كورس', 19),
(22, 'cources-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:54', 'تغيير حالة  الكورس', 19),
(23, 'cources-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:46', 'حذف الكورس', 19),
(24, 'vedios', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'الفيديوهات', NULL),
(25, 'vedios-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:39', 'رؤية الفيديوهات', 24),
(26, 'vedios-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:32', 'اضافة وتعديل فيديو', 24),
(27, 'vedios-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:21', 'تغيير حالة الفيديو', 24),
(28, 'vedios-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:12', 'حذف الفيديو', 24),
(29, 'slider', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'شريط الصور', NULL),
(30, 'slider-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:16', 'رؤية السلايدر', 29),
(31, 'slider-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:08', 'اضافة تعديل سلايدر', 29),
(32, 'slider-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:54', 'تغيير حالة  السلايد', 29),
(33, 'slider-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:46', 'حذف السلايدر', 29),
(34, 'musics', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الموسيقى', NULL),
(35, 'musics-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:28:21', 'رؤية الموسيقى', 34),
(36, 'musics-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:28:10', 'اضافة وتعديل موسيقى', 34),
(37, 'musics-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:52', 'تغيير حالة الموسيقى', 34),
(38, 'musics-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:44', 'حذف الموسيقى', 34),
(39, 'subscriptions', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الاشتراكات', NULL),
(40, 'subscriptions-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:37', 'رؤية الاشتراك', 39),
(41, 'subscriptions-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:31', 'اضافة تعديل الاشتراك', 39),
(42, 'subscriptions-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:19', 'تعديل حالة الاشتراك', 39),
(43, 'subscriptions-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:11', 'حذف الاشتراك', 39),
(44, 'about', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'من نحن', NULL),
(45, 'about-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:04', 'رؤية من نحن', 44),
(46, 'about-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:57', 'اضافة تعديل من نحن', 44),
(47, 'about-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:50', 'تغيير حالة من نحن', 44),
(49, 'products', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'المنتجات', NULL),
(50, 'products-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 10:06:29', 'رؤية المنتجات', 49),
(51, 'products-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:15', 'اضافة وتعديل منتجات', 49),
(52, 'products-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:01', 'حذف المنتجات', 49),
(53, 'jobs', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الوظائف', NULL),
(54, 'jobs-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:52', 'رؤية والوظائف', 53),
(55, 'jobs-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:42', 'تعديل حالة الوظائف', 53),
(56, 'jobs-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:33', 'اضافة وتعديل الوظائف', 53),
(57, 'jobs-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:19', 'حذف الوظائف', 53),
(58, 'news', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الأخبار والفعاليات', NULL),
(59, 'news-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:09', 'رؤية الأخبار والفعاليات', 58),
(60, 'news-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:56', 'اضافة وتعديل الأخبار والفعاليات', 58),
(61, 'campaigns', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الحملات والعروض', NULL),
(62, 'campaigns-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:33', 'رؤية الحملات والعروض', 61),
(63, 'albums', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الألبومات', NULL),
(64, 'albums-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:24', 'رؤية الألبومات', 63),
(65, 'albums-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:16', 'تعديل حالة الألبوم', 63),
(66, 'albums-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:47', 'اضافة وتعديل الألبومات', 63),
(67, 'albums-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:34', 'حذف الألبومات', 63),
(69, 'job-applications-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:23', 'رؤية طلبات التوظيف', 76),
(70, 'job-applications-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:06', 'حذف طلبات التوظيف', 76),
(71, 'contacts', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'رسائل اتصل بنا', NULL),
(72, 'contacts-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:22:02', 'عرض رسائل اتصل', 71),
(73, 'contacts-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:21:52', 'حذف رسائل اتصل بنا', 71),
(74, 'settings', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الإعدادات', NULL),
(75, 'settings-edit', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:20:48', 'تعديل إعدادات النظام', 74),
(76, 'job-applications', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'طلبات التوظيف', NULL),
(92, 'products-status', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:08:25', 'تغيير حالة المنتجات', 49),
(93, 'news-status', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:08:39', 'تغيير حالة الأخبار والفعاليات', 58),
(94, 'news-delete', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:08:49', 'حذف الأخبار والفعاليات', 58),
(95, 'campaigns-status', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:09:00', 'تغيير حالة الحملات', 61),
(96, 'campaigns-store', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:09:18', 'اضافة وتعديل حملات', 61),
(97, 'campaigns-delete', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:09:15', 'حذف الحملات', 61),
(100, 'about-delete', 'admin', '2021-12-15 10:45:39', '2021-12-15 10:45:39', 'حذف من نحن', 44),
(101, 'roles', 'admin', '2021-12-14 21:00:00', NULL, 'الأدوار', NULL),
(102, 'roles-view', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'رؤية الأدوار', 101),
(103, 'roles-store', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'اضافة وتعديل دور', 101),
(104, 'roles-delete', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'حذف الأدوار', 101),
(105, 'mailing-list', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'القوائم البريدية', NULL),
(106, 'view-mailing-list', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'رؤية القائمة البريدية', 105);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `display_name`) VALUES
(1, 'admin', 'admin', '2021-12-14 09:09:17', '2021-12-14 09:09:17', 'مدير');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(4, 1),
(5, 1),
(6, 1),
(8, 1),
(10, 1),
(11, 1),
(12, 1),
(14, 1),
(15, 1),
(16, 1),
(18, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(45, 1),
(46, 1),
(47, 1),
(50, 1),
(51, 1),
(52, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(59, 1),
(60, 1),
(62, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(69, 1),
(70, 1),
(72, 1),
(73, 1),
(75, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(100, 1),
(102, 1),
(103, 1),
(104, 1),
(106, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `pk_i_id` int(10) UNSIGNED NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_username` varchar(255) NOT NULL,
  `s_address` varchar(255) DEFAULT NULL,
  `s_avatar` varchar(255) DEFAULT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_mobile` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `b_enabled` int(11) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`pk_i_id`, `s_name`, `s_username`, `s_address`, `s_avatar`, `s_password`, `s_email`, `s_mobile`, `remember_token`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'soula', 'soula', 'haifa', NULL, '$2y$10$.Yx3KjjJYu.AtqwbOzZQF.kc9dM7.2xUXslt.0PhXKJ2Sw20fAcnm', 'souladance@admin.com', '0509559404', NULL, 1, '2024-09-07 07:29:19', '2024-10-14 10:17:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_brands`
--

CREATE TABLE `t_brands` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(255) DEFAULT NULL,
  `s_description` text DEFAULT NULL,
  `s_cover` varchar(255) NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_brands`
--

INSERT INTO `t_brands` (`pk_i_id`, `s_title`, `s_description`, `s_cover`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, NULL, NULL, '', 1, '2024-09-07 07:30:24', '2024-09-07 07:30:24', NULL),
(2, NULL, NULL, 'uploads/brands/O5aNLIVu47YQY9BWBl25t3aaO2ab0TFFwmhkW14F.jpg', 1, '2024-09-07 07:30:51', '2024-09-23 08:59:43', NULL),
(3, NULL, NULL, 'uploads/brands/faW3uxhCHqkTdN8KxpIGcCmHGTtUTm90Rza06sci.jpg', 1, '2024-09-07 07:31:17', '2024-09-07 08:19:23', NULL),
(4, NULL, NULL, 'uploads/brands/xtGtkx6Gn4D6umcpGO0mfNsrvKRrCVBcpHh4yUvb.jpg', 1, '2024-09-23 09:13:42', '2024-09-23 09:13:42', NULL),
(5, NULL, NULL, '', 1, '2024-09-23 09:16:14', '2024-09-23 09:16:14', NULL),
(6, NULL, NULL, '', 1, '2024-09-23 09:34:18', '2024-09-23 09:34:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_brand_translations`
--

CREATE TABLE `t_brand_translations` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_locale` varchar(2) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_description` text DEFAULT NULL,
  `fk_i_brand_id` bigint(20) UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_brand_translations`
--

INSERT INTO `t_brand_translations` (`pk_i_id`, `s_locale`, `s_title`, `s_description`, `fk_i_brand_id`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'ar', 'القسم الأول', '<p><span style=\"font-family: arabbook; font-size: 24px;\">هل تحبون ما تعملون ؟ هل انتم مدربين جيدين ؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">مهنيين تقودون الناس لكن تشعرون انكم بحاجه لابداع وابتكار؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">هناك شي صعب وصفه مفقود لديكم ؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">تدفعون المال في دورات مختلفة ومتنوعة للتعلم والتطور؟؟ و لكن في النهاية، هل تشعرون انه يوجد لديكم أدوات كافيه ودعم كي تنطلقون لعالم التدريب ؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">هل تريدون ان تتعلموا كيفيه التنويع في التدريب مع التطور والتكرار المناسب؟؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">هل تريدون دمج ابداعكم بسهولة في التدريب؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">والأهم من كل ذلك هل تريدون ان تتعلموا كيفيه تسويق التدريب الخاص فيكم والإعلان عنه بطريقة دقيقة واقتصادية وتخلقوا جمهوراً واسعاً من المتدربين؟</span><br></p>', 1, '2024-09-07 07:30:24', '2024-09-23 08:55:34', NULL),
(2, 'ar', 'القسم الثاني', '<p><span style=\"font-family: arabbook; font-size: 25px; background-color: rgb(255, 251, 0);\">كيف تكونوا مدربين وقياديين الأكثر مهنيه في عالم الفتنس والحركه ؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 25px; background-color: rgb(255, 251, 0);\"><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 25px; background-color: rgb(255, 251, 0);\"><span style=\"font-family: arabbook; font-size: 25px; background-color: rgb(255, 251, 0);\">كيف تعرفوا تدمجوا بين حبكم للرياضه كدخل إضافي؟</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 25px; background-color: rgb(255, 251, 0);\"><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 25px; background-color: rgb(255, 251, 0);\"><span style=\"font-family: arabbook; font-size: 25px; background-color: rgb(255, 251, 0);\">اكيد سالتم انفسكم ماذا يجب ان&nbsp;اعمل&nbsp;كي&nbsp;ابدأ&nbsp;؟</span><br></p>', 2, '2024-09-07 07:30:51', '2024-09-23 09:04:13', NULL),
(3, 'ar', 'سجود زومبا', '<p><span style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px; text-align: center;\">فتاة مفعمة بالنشاط والحيوية، استطاعت بجرأتها وطموحها أن تجتاز كل الصعاب وتصبح أول مدربة فلسطينية لرياضة الزومبا ، وأن تتفرد وتتميز بتدريب هذا النوع من الرياضة باحترافية. سجود زومبا حب الحياة \" إنسانة من طاقة ونور، ولا حدود لطموحي وجاذبيتي، فتاة عربية فخورة بقوتي العليا، أملك أداءً ساحرًا، مقتنعة باختياري وبقدراتي الهائلة، ثقتي العالية بنفسي هي التي أوصلتني للنجاح الذي أنا فيه اليوم. شعاري رغم كل الظروف الصعبه</span></p><p><span style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px; text-align: center;\">&nbsp;</span><span style=\"margin: 0px; padding: 0px; font-family: arabbook; text-align: center; font-size: 30px;\">حب&nbsp;الحياة</span><br></p>', 3, '2024-09-07 07:31:17', '2024-09-23 09:10:41', NULL),
(4, 'ar', 'القسم الرابع', '<p><span style=\"font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\">الصُدفة جمعتني بالسولا ولا حدود لطموحي.</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\"><span style=\"font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\">أول فلسطينية مدربة رياضه السولا</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\"><span style=\"font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\">من أين بدأت الفكره ؟ من خلال خبرتي الطويله في مجال التدريب محليا وعالميا .</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\"><span style=\"font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\">من عام ال 2006 إلى اليوم قررت اكرّس طاقاتي في تعليم دوره رياضه التي فيها دمج لايقاع عربي شرقي غربي مختلف صاخب ترندي وجذاب للمدربين اسميتها سولا دانس إيقاع الحياه</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\"><span style=\"font-family: arabbook; font-size: 24px; background-color: rgb(255, 251, 0);\">في دوره السولا المدربه سوف تحصل على جميع الأدوات التي بحاجتها كي تصبح مدربه مهنيه محترفه . وايضا سوف اقوم بتعليم الطلاب كيفيه الاندماج مع الموسيقى في الحصه . والكثير الكثير من المفاجأت والاسرار التدريبيه المحنّكه .</span><br></p>', 4, '2024-09-23 09:13:42', '2024-09-23 09:13:42', NULL),
(5, 'ar', 'ما هي السولا ؟', '<p><span style=\"font-family: arabbook; font-size: 24px;\">رياضة راقصة حيوية يحرك فيها الرياضي كل أعضاء جسمه حسب إيقاعات موسيقية عربيه شرقيه وغربية مختلفة، تبعث في داخله روح النشاط والتجدد، كما وهي نوع رقص حركي مميز يمزج نفسه مع حركات من عالم الإيروبيك التي من السهل تطبيقه.</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">السولا مصطلح لا زال غريباً نوعاً ما على مسامع وسطنا العربي إلا انه يلقى إقبالا جيداً وواسعاً نسبة لرياضة حديثة.</span><br style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px;\"><span style=\"font-family: arabbook; font-size: 24px;\">سولا من كلمه سول في اللغه الانجليزيه ومعناها روح وانا بفضل الله روحي مفعمه بالطاقه والحيوية واحبها جدا لذلك اخترت هذا الاسم لانه يعبر ويعرف عني بشكل شخصي</span><br></p>', 5, '2024-09-23 09:16:14', '2024-09-23 09:16:14', NULL),
(6, 'ar', 'ما فوائد السولا الصحية والنفسية؟', '<p><span style=\"font-family: arabbook; font-size: 24px; text-align: center; background-color: rgb(255, 251, 0);\">* إن من يخوض التدريبات في هذه الرياضة يعشقها لحسّها المميز، وخاصيتها، حيث أننا في قاعة التدريب وبمشاركة مجموعة كبيرة من النساء والفتيات، نتشارك سوية الموسيقى العربيه الشرقيه والغربية المليئة بالحيوية والنشاط، ونتشارك الإيقاعات المختلفة، ونتشارك الحركات الراقصة الصحية والمسلية. * رياضة السولا ليست مجرد رياضة. أننا نخوض معركة مع التجدد والعيش بين طوايا الموسيقى والرقص مما ينعش الجسم. * السولا حياة، تدخل الطاقة الايجابية إلى النفوس، وتُساعد في إخراج التوتر والضغط من داخلنا، بالإضافة إلى أنها تمنح الشعور بالثقة والقوة للشخص الذي يُمارسها والنفسية\". * السولا ملائمة بمتعتها، وحركاتها الخفيفة والصحية، والموسيقى الخاصة بها كل الأجيال.. السولا للجميع، من جيل 4 أعوام حتى 80 عاماً * تكرارها 2-3 مرات في الأسبوع ممتاز لشد الجسم وللعضلات والشعور بنفسيه \"غير\". * درس السولا هو عبارة عن ساعة كاملة دون توقف، تحرق المشارِكة من 500 حتى 800 سعرة حرارية وهذا يتعلق بجهدها في التدريب وكيفية تعاملها مع جسدها ووتيرة السرعة التي تتدرب بها، وهذه هي المهارات التي تكتسبها خلال التدريب، فهو أيضاَ متعة ورياضة لكن صحة جسمانية وذهنية أولا\". * ان المجموعة المشاركة تبدأ في حركات الاحماء ، ومن ثم نبدأ سوية بالتأقلم مع الموسيقى العربيه الشرقيه المسموعة، فنتراقص مع النغمات حسب&nbsp;وتيرة&nbsp;سرعتها.</span><br></p>', 6, '2024-09-23 09:34:18', '2024-09-23 09:34:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_cources`
--

CREATE TABLE `t_cources` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(255) DEFAULT NULL,
  `s_description` text DEFAULT NULL,
  `s_cover` varchar(255) NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_cources`
--

INSERT INTO `t_cources` (`pk_i_id`, `s_title`, `s_description`, `s_cover`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, NULL, NULL, 'uploads/cources/qo8p6UBaRPUnEZUrxJ2Vn69P2LdXwMulhkUXCXwg.jpg', 1, '2024-09-07 07:32:06', '2024-09-24 04:50:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_cource_translations`
--

CREATE TABLE `t_cource_translations` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_locale` varchar(2) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_description` text DEFAULT NULL,
  `fk_i_cource_id` bigint(20) UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_cource_translations`
--

INSERT INTO `t_cource_translations` (`pk_i_id`, `s_locale`, `s_title`, `s_description`, `fk_i_cource_id`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'ar', 'الكورس الاول', '<span style=\"color: rgb(31, 31, 31); font-family: monospace; font-size: 12px; text-align: left; white-space-collapse: preserve;\">ستتعلم خطوات الزومبا الأساسية عبر إيقاعات أغنية \'Danza Kuduro\' الشهيرة. يتضمن\r\nالكورس تدريبات مكثفة تجمع بين حركات السالسا والميرينغي والريغيتون </span>', 1, '2024-09-07 07:32:06', '2024-10-09 09:30:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_musics`
--

CREATE TABLE `t_musics` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(255) DEFAULT NULL,
  `fk_i_cource_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fk_i_vedio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `s_music` varchar(255) NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_music_translations`
--

CREATE TABLE `t_music_translations` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_locale` varchar(2) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `fk_i_vedio_id` bigint(20) UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_sliders`
--

CREATE TABLE `t_sliders` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(255) DEFAULT NULL,
  `s_description` text DEFAULT NULL,
  `s_cover` varchar(255) NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_sliders`
--

INSERT INTO `t_sliders` (`pk_i_id`, `s_title`, `s_description`, `s_cover`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, NULL, NULL, 'uploads/slider/JI9EY9sDFX85sUZFcSKoBJk2ZsPjb6oeidcS9sjk.jpg', 1, '2024-09-24 04:02:40', '2024-09-24 04:02:40', NULL),
(2, NULL, NULL, 'uploads/slider/uUySZf3rFdCY7ksp1ujydZDz7VYozjT91it1akQV.jpg', 1, '2024-09-24 04:03:16', '2024-09-24 04:03:16', NULL),
(3, NULL, NULL, 'uploads/slider/u2bmNavEfQvsb4mg6WasjN23pNxOjOwAGn3pPTKV.jpg', 1, '2024-09-24 04:03:42', '2024-09-24 04:03:42', NULL),
(4, NULL, NULL, 'uploads/slider/iODmfKjmEmx2xFForObZqqPVHBEo8ezV6pTGKvOQ.jpg', 1, '2024-09-24 04:04:07', '2024-09-24 04:04:07', NULL),
(5, NULL, NULL, 'uploads/slider/V1I6QW5nVnrePGXlgEvN2yBjtwNz81z6hQMxq81y.jpg', 1, '2024-09-24 04:05:16', '2024-09-24 04:05:16', NULL),
(6, NULL, NULL, 'uploads/slider/ZNwPsr20P9GH09Le4CgvGvzLygg0aqxSvSr98Hn0.jpg', 1, '2024-09-24 04:05:53', '2024-09-24 04:05:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_slider_translations`
--

CREATE TABLE `t_slider_translations` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_locale` varchar(2) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_description` text DEFAULT NULL,
  `fk_i_slider_id` bigint(20) UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_slider_translations`
--

INSERT INTO `t_slider_translations` (`pk_i_id`, `s_locale`, `s_title`, `s_description`, `fk_i_slider_id`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'ar', 'سلايدر 1', NULL, 1, '2024-09-24 04:02:40', '2024-09-24 04:02:40', NULL),
(2, 'ar', 'سلايدر 2', NULL, 2, '2024-09-24 04:03:16', '2024-09-24 04:03:16', NULL),
(3, 'ar', 'سلايدر 3', NULL, 3, '2024-09-24 04:03:42', '2024-09-24 04:03:42', NULL),
(4, 'ar', 'سلايدر 4', NULL, 4, '2024-09-24 04:04:07', '2024-09-24 04:04:07', NULL),
(5, 'ar', 'سلايدر 5', NULL, 5, '2024-09-24 04:05:16', '2024-09-24 04:05:16', NULL),
(6, 'ar', 'سلادير 6', NULL, 6, '2024-09-24 04:05:53', '2024-09-24 04:05:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_subscriptions`
--

CREATE TABLE `t_subscriptions` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `gateway` varchar(255) NOT NULL,
  `fk_i_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fk_i_cource_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fk_i_vedio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('peending','success','failed') NOT NULL,
  `amount` double(8,2) NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_subscriptions`
--

INSERT INTO `t_subscriptions` (`pk_i_id`, `gateway`, `fk_i_user_id`, `fk_i_cource_id`, `fk_i_vedio_id`, `status`, `amount`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(13, 'cash', 47, 1, 2, 'success', 60.00, 1, '2024-09-30 10:20:12', '2024-10-09 09:27:57', NULL),
(14, 'cash', NULL, 1, 2, 'peending', 60.00, 1, '2024-10-14 09:35:26', '2024-10-14 09:35:26', NULL),
(15, 'cash', NULL, 1, 2, 'peending', 60.00, 1, '2024-10-14 09:35:35', '2024-10-14 09:35:35', NULL),
(16, 'visa', NULL, 1, 2, 'peending', 50.00, 1, '2024-10-14 09:35:45', '2024-10-14 09:35:45', NULL),
(17, 'visa', NULL, 1, 3, 'peending', 50.00, 1, '2024-10-14 09:35:45', '2024-10-14 09:35:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_system_settings`
--

CREATE TABLE `t_system_settings` (
  `pk_i_id` int(10) UNSIGNED NOT NULL,
  `s_key` varchar(255) NOT NULL,
  `s_value` varchar(255) DEFAULT NULL,
  `b_enabled` int(11) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` datetime DEFAULT NULL,
  `dt_deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_system_settings`
--

INSERT INTO `t_system_settings` (`pk_i_id`, `s_key`, `s_value`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, '_token', 'l1HbBRw7Z5flZRKdzBld1pVtr4OW1nY6NhIw08Sc', 1, '2024-09-08 05:36:33', '2024-10-10 13:54:03', NULL),
(2, 'title', 'sujood', 1, '2024-09-08 05:36:33', '2024-10-10 13:54:03', NULL),
(3, 'email', 'Sujood911@gmail.com', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL),
(4, 'mobile', '+972 50-955-9404⁩', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL),
(5, 'facebook', 'https://www.facebook.com/profile.php?id=100084273505360', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL),
(6, 'instagram', 'https://www.instagram.com/simah.apps', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL),
(7, 'youtube', 'https://www.youtube.com/@sujood_zumba', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL),
(8, 'tiktok', 'https://www.tiktok.com/@sujoodzumba?_t=8pTRreJjrFA&_r=1', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `pk_i_id` int(10) UNSIGNED NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_mobile` varchar(14) DEFAULT NULL,
  `b_enabled` int(11) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`pk_i_id`, `s_name`, `s_email`, `s_password`, `s_mobile`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(47, 'yahya', 'yahya@gmail.com', '$2y$10$4bIrKOyPfSIRgNQCtNUEu.WAeewl2Nv9AJgt/vRPRImavHYOPIaki', '0599141212', 1, '2024-09-24 04:35:36', '2024-09-24 04:35:36', NULL),
(48, 'test', 'yesy@gmail.com', '$2y$10$b.l1Tu/Hyevj5yioWjHFzeLJSie./058xfWihwrlEqHKI2VeyCcaG', '0599998876', 1, '2024-09-24 04:39:59', '2024-09-24 04:39:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_vedios`
--

CREATE TABLE `t_vedios` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(255) DEFAULT NULL,
  `fk_i_cource_id` bigint(20) UNSIGNED DEFAULT NULL,
  `s_cover` varchar(255) NOT NULL,
  `s_vedio` varchar(255) NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_vedios`
--

INSERT INTO `t_vedios` (`pk_i_id`, `s_title`, `fk_i_cource_id`, `s_cover`, `s_vedio`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, NULL, 1, 'uploads/vedios/jOnDT3INiqPaeYiBfKTaaDaKwPtBR6OVPGwV2og4.jpg', 'uploads/vedios/zfQSVUhYEMc9gKLdXTgY7HtnWqo9kqFcliEKWNR4.jpg', 1, '2024-09-08 05:03:54', '2024-09-25 05:33:14', '2024-09-25 05:33:14'),
(2, NULL, 1, 'uploads/vedios/7INGzz0mx2EaVhW0mZBNlHJYfA3RDkVs3v1eyAHd.jpg', 'uploads/vedios/94O1Upmbk3uuRfi0g8syLOi7w85KmqWD7sfMLOMq.mp4', 1, '2024-09-25 05:26:07', '2024-09-25 05:26:07', NULL),
(3, NULL, 1, 'uploads/vedios/Xs1rF3Ji33dCOuFrC8AOCSxhXaXs36AM9pXvG16J.jpg', 'uploads/vedios/eZWd8Ax5wl3Dh4ldFE6MLuHyWv8oZfADRoPb8dWN.mp4', 1, '2024-09-25 07:06:51', '2024-09-25 07:06:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_vedio_translations`
--

CREATE TABLE `t_vedio_translations` (
  `pk_i_id` bigint(20) UNSIGNED NOT NULL,
  `s_locale` varchar(2) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `fk_i_vedio_id` bigint(20) UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_vedio_translations`
--

INSERT INTO `t_vedio_translations` (`pk_i_id`, `s_locale`, `s_title`, `fk_i_vedio_id`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'ar', 'تست', 1, '2024-09-08 05:03:54', '2024-09-08 05:03:54', NULL),
(2, 'ar', 'الفيديو الاول', 2, '2024-09-25 05:26:07', '2024-09-25 05:37:23', NULL),
(3, 'ar', 'الفيديو الثاني', 3, '2024-09-25 07:06:51', '2024-09-25 07:06:51', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pk_i_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`pk_i_id`);

--
-- Indexes for table `t_brands`
--
ALTER TABLE `t_brands`
  ADD PRIMARY KEY (`pk_i_id`);

--
-- Indexes for table `t_brand_translations`
--
ALTER TABLE `t_brand_translations`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_brand_translations_fk_i_brand_id_foreign` (`fk_i_brand_id`);

--
-- Indexes for table `t_cources`
--
ALTER TABLE `t_cources`
  ADD PRIMARY KEY (`pk_i_id`);

--
-- Indexes for table `t_cource_translations`
--
ALTER TABLE `t_cource_translations`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_cource_translations_fk_i_cource_id_foreign` (`fk_i_cource_id`);

--
-- Indexes for table `t_musics`
--
ALTER TABLE `t_musics`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_musics_fk_i_cource_id_foreign` (`fk_i_cource_id`),
  ADD KEY `t_musics_fk_i_vedio_id_foreign` (`fk_i_vedio_id`);

--
-- Indexes for table `t_music_translations`
--
ALTER TABLE `t_music_translations`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_music_translations_fk_i_vedio_id_foreign` (`fk_i_vedio_id`);

--
-- Indexes for table `t_sliders`
--
ALTER TABLE `t_sliders`
  ADD PRIMARY KEY (`pk_i_id`);

--
-- Indexes for table `t_slider_translations`
--
ALTER TABLE `t_slider_translations`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_slider_translations_fk_i_slider_id_foreign` (`fk_i_slider_id`);

--
-- Indexes for table `t_subscriptions`
--
ALTER TABLE `t_subscriptions`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_subscriptions_fk_i_cource_id_foreign` (`fk_i_cource_id`),
  ADD KEY `t_subscriptions_fk_i_vedio_id_foreign` (`fk_i_vedio_id`);

--
-- Indexes for table `t_system_settings`
--
ALTER TABLE `t_system_settings`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD UNIQUE KEY `t_system_settings_s_key_unique` (`s_key`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD UNIQUE KEY `t_users_s_email_unique` (`s_email`);

--
-- Indexes for table `t_vedios`
--
ALTER TABLE `t_vedios`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_vedios_fk_i_cource_id_foreign` (`fk_i_cource_id`);

--
-- Indexes for table `t_vedio_translations`
--
ALTER TABLE `t_vedio_translations`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD KEY `t_vedio_translations_fk_i_vedio_id_foreign` (`fk_i_vedio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `pk_i_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_brands`
--
ALTER TABLE `t_brands`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_brand_translations`
--
ALTER TABLE `t_brand_translations`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_cources`
--
ALTER TABLE `t_cources`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_cource_translations`
--
ALTER TABLE `t_cource_translations`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_musics`
--
ALTER TABLE `t_musics`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_music_translations`
--
ALTER TABLE `t_music_translations`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sliders`
--
ALTER TABLE `t_sliders`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_slider_translations`
--
ALTER TABLE `t_slider_translations`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_subscriptions`
--
ALTER TABLE `t_subscriptions`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_system_settings`
--
ALTER TABLE `t_system_settings`
  MODIFY `pk_i_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `pk_i_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `t_vedios`
--
ALTER TABLE `t_vedios`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_vedio_translations`
--
ALTER TABLE `t_vedio_translations`
  MODIFY `pk_i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_brand_translations`
--
ALTER TABLE `t_brand_translations`
  ADD CONSTRAINT `t_brand_translations_fk_i_brand_id_foreign` FOREIGN KEY (`fk_i_brand_id`) REFERENCES `t_brands` (`pk_i_id`);

--
-- Constraints for table `t_cource_translations`
--
ALTER TABLE `t_cource_translations`
  ADD CONSTRAINT `t_cource_translations_fk_i_cource_id_foreign` FOREIGN KEY (`fk_i_cource_id`) REFERENCES `t_cources` (`pk_i_id`);

--
-- Constraints for table `t_musics`
--
ALTER TABLE `t_musics`
  ADD CONSTRAINT `t_musics_fk_i_cource_id_foreign` FOREIGN KEY (`fk_i_cource_id`) REFERENCES `t_cources` (`pk_i_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_musics_fk_i_vedio_id_foreign` FOREIGN KEY (`fk_i_vedio_id`) REFERENCES `t_vedios` (`pk_i_id`) ON DELETE CASCADE;

--
-- Constraints for table `t_music_translations`
--
ALTER TABLE `t_music_translations`
  ADD CONSTRAINT `t_music_translations_fk_i_vedio_id_foreign` FOREIGN KEY (`fk_i_vedio_id`) REFERENCES `t_vedios` (`pk_i_id`);

--
-- Constraints for table `t_slider_translations`
--
ALTER TABLE `t_slider_translations`
  ADD CONSTRAINT `t_slider_translations_fk_i_slider_id_foreign` FOREIGN KEY (`fk_i_slider_id`) REFERENCES `t_sliders` (`pk_i_id`);

--
-- Constraints for table `t_subscriptions`
--
ALTER TABLE `t_subscriptions`
  ADD CONSTRAINT `t_subscriptions_fk_i_cource_id_foreign` FOREIGN KEY (`fk_i_cource_id`) REFERENCES `t_cources` (`pk_i_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_subscriptions_fk_i_vedio_id_foreign` FOREIGN KEY (`fk_i_vedio_id`) REFERENCES `t_vedios` (`pk_i_id`) ON DELETE CASCADE;

--
-- Constraints for table `t_vedios`
--
ALTER TABLE `t_vedios`
  ADD CONSTRAINT `t_vedios_fk_i_cource_id_foreign` FOREIGN KEY (`fk_i_cource_id`) REFERENCES `t_cources` (`pk_i_id`) ON DELETE CASCADE;

--
-- Constraints for table `t_vedio_translations`
--
ALTER TABLE `t_vedio_translations`
  ADD CONSTRAINT `t_vedio_translations_fk_i_vedio_id_foreign` FOREIGN KEY (`fk_i_vedio_id`) REFERENCES `t_vedios` (`pk_i_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
