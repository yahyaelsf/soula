-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2024 at 09:09 AM
-- Server version: 8.0.19
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soula`
--

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
(15, '2024_09_07_161444_create_t_vedios_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\TAdmin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL
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
(25, 'vedios-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:39', 'رؤية الفيديو', 24),
(26, 'vedios-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:32', 'اضافة وتعديل الفيديو', 24),
(27, 'vedios-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:21', 'تغيير حالة الفيديو', 24),
(28, 'vedios-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:12', 'حذف الفيديو', 24),
(74, 'settings', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الإعدادات', NULL),
(75, 'settings-edit', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:20:48', 'تعديل إعدادات النظام', 74),
(101, 'roles', 'admin', '2021-12-14 21:00:00', NULL, 'الأدوار', NULL),
(102, 'roles-view', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'رؤية الأدوار', 101),
(103, 'roles-store', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'اضافة وتعديل دور', 101),
(104, 'roles-delete', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'حذف الأدوار', 101);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
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
(75, 1),
(102, 1),
(103, 1),
(104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `pk_i_id` int UNSIGNED NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_enabled` int NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`pk_i_id`, `s_name`, `s_username`, `s_address`, `s_avatar`, `s_password`, `s_email`, `s_mobile`, `remember_token`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'Admin', 'admin', NULL, NULL, '$2y$10$cP.ud1Q/yz7AaimEemH3eewadIIGmapRKueo0lCTl7LizMm/xnEAy', 'admin@admin.com', NULL, NULL, 1, '2024-09-07 07:29:19', '2024-09-07 07:29:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_brands`
--

CREATE TABLE `t_brands` (
  `pk_i_id` bigint UNSIGNED NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_description` text COLLATE utf8mb4_unicode_ci,
  `s_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_brands`
--

INSERT INTO `t_brands` (`pk_i_id`, `s_title`, `s_description`, `s_cover`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, NULL, NULL, '', 1, '2024-09-07 07:30:24', '2024-09-07 07:30:24', NULL),
(2, NULL, NULL, 'uploads/brands/3DsiLXw4Y7pMLEKyEdtkfAH1qxIot0JTifMTfz77.jpg', 1, '2024-09-07 07:30:51', '2024-09-07 07:30:51', NULL),
(3, NULL, NULL, 'uploads/brands/faW3uxhCHqkTdN8KxpIGcCmHGTtUTm90Rza06sci.jpg', 1, '2024-09-07 07:31:17', '2024-09-07 08:19:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_brand_translations`
--

CREATE TABLE `t_brand_translations` (
  `pk_i_id` bigint UNSIGNED NOT NULL,
  `s_locale` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_description` text COLLATE utf8mb4_unicode_ci,
  `fk_i_brand_id` bigint UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_brand_translations`
--

INSERT INTO `t_brand_translations` (`pk_i_id`, `s_locale`, `s_title`, `s_description`, `fk_i_brand_id`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'ar', 'القسم الأول', '<p><span style=\"color: rgb(44, 22, 52); font-family: arabbook; font-size: 24px;\">اكتشف حيوية ورشاقة الزومبا مع كل خطوة، وانطلق في رحلة من الإيقاع واللياقة لتحقق توازنًا مثاليًا بين الجسد والروح مع المدربة&nbsp;</span><span style=\"margin: 0px; padding: 0px; font-family: arabbook; font-size: 24px; color: rgb(249, 86, 147);\">سجود</span><br></p>', 1, '2024-09-07 07:30:24', '2024-09-07 07:30:24', NULL),
(2, 'ar', 'القسم الثاني', '<p><span style=\"color: rgb(44, 22, 52); font-family: arabbook; font-size: 24px;\">إنسانة من طاقة ونور أحب هللا وأحب نفسي وطموحة صريحة ، مستقل أدافع عن حقي في العيش بكرامة قّوتي العليا التي تمثل شخصيتي قدراتي وطاقاتي ، عشقي الستقالليّتي وثقتي العالية بنفسي . أتمتع بجاذبية وذكاء اجتماع ّي أدعى سجود محاجنة ، ُمدّربة لرياضة الزومبا ، عربيّة ، مسلمة ومبتكرة ، كبيرين .</span><br></p>', 2, '2024-09-07 07:30:51', '2024-09-07 08:18:49', NULL),
(3, 'ar', 'القسم الثالث', '<p><span style=\"color: rgb(44, 22, 52); font-family: arabbook; font-size: 24px;\">قمت بالمشاركة بالعديد من هذه المهرجانات في البالد وخارجها ، وتركة بصمتي الخا ّصة بـ \"سجود زومبا\" فلد ّي كاريزما خارقة ، تسحر الناس الذين أتعامل معهم ، أمنح الناس الشعور بالفرح خالل ال ّرقص ، الزومبا حياة تدخل الطاقة اإليجابية إلى النفوس وتُساعد في إخراج التوتر والضغط من داخلنا باإلضافة إلى أنها تمنح الشعور بالثقة والقوة للشخص الذي يُمارسها .</span><br></p>', 3, '2024-09-07 07:31:17', '2024-09-07 08:19:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_cources`
--

CREATE TABLE `t_cources` (
  `pk_i_id` bigint UNSIGNED NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_description` text COLLATE utf8mb4_unicode_ci,
  `s_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_cources`
--

INSERT INTO `t_cources` (`pk_i_id`, `s_title`, `s_description`, `s_cover`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, NULL, NULL, 'uploads/cources/wtXgqfRBDAJCtN6ZOmKpWwAPir4VjQFLpvHZj0ul.jpg', 1, '2024-09-07 07:32:06', '2024-09-07 07:32:06', NULL),
(2, NULL, NULL, 'uploads/cources/xCWNFFC5f9QvhuPS6Mg4Km6LO9QwntX2imCpkL7a.jpg', 1, '2024-09-07 07:33:04', '2024-09-07 07:33:04', NULL),
(3, NULL, NULL, 'uploads/cources/6fWCKLtl872rBRTeTdw4SBUALwAubcuqZH9NTe5k.jpg', 1, '2024-09-07 07:33:45', '2024-09-07 07:33:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_cource_translations`
--

CREATE TABLE `t_cource_translations` (
  `pk_i_id` bigint UNSIGNED NOT NULL,
  `s_locale` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_description` text COLLATE utf8mb4_unicode_ci,
  `fk_i_cource_id` bigint UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_cource_translations`
--

INSERT INTO `t_cource_translations` (`pk_i_id`, `s_locale`, `s_title`, `s_description`, `fk_i_cource_id`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'ar', 'الكورس الاول', '<p><span style=\"color: rgb(115, 115, 115); font-family: arabbook; font-size: 16px;\">انضم إلى الكورس الأول مع المدربة سجود، حيث نقدم لك تجربة زومبا ممتعة ومليئة بالطاقة عبر إيقاعات أغنية \'Danza Kuduro\'. هذا الكورس مصمم خصيصًا للمبتدئين الذين يرغبون في بدء رحلتهم في عالم الزومبا بطريقة سلسة وممتعة. خلال الجلسات، ستتعلم أساسيات حركات الزومبا البسيطة التي تجمع بين الإيقاعات اللاتينية وحركات الكارديو الفعالة. سوف تكتشف كيفية تحسين لياقتك البدنية وزيادة مرونتك من خلال تمارين مبنية على الموسيقى، مما يجعل كل حصة تدريبية تجربة مليئة بالمرح والحيوية. نحن نهتم بأن يكون لديك تجربة إيجابية ومشجعة، حيث توفر لك المدربة سجود التوجيه والدعم اللازم لتحقيق أقصى استفادة من كل تمرين. لا تفوت الفرصة لتبدأ مغامرتك في الزومبا وتحقق أهدافك الصحية بمتعة وسهولة.</span><br></p>', 1, '2024-09-07 07:32:06', '2024-09-07 07:32:06', NULL),
(2, 'ar', 'الكورس الثاني', '<p><span style=\"color: rgb(115, 115, 115); font-family: arabbook; font-size: 16px;\">انضم إلى الكورس الثاني مع المدربة سجود، حيث نقدم لك تجربة زومبا ممتعة ومليئة بالطاقة عبر إيقاعات أغنية \'Danza Kuduro\'. هذا الكورس مصمم خصيصًا للمبتدئين الذين يرغبون في بدء رحلتهم في عالم الزومبا بطريقة سلسة وممتعة. خلال الجلسات، ستتعلم أساسيات حركات الزومبا البسيطة التي تجمع بين الإيقاعات اللاتينية وحركات الكارديو الفعالة. سوف تكتشف كيفية تحسين لياقتك البدنية وزيادة مرونتك من خلال تمارين مبنية على الموسيقى، مما يجعل كل حصة تدريبية تجربة مليئة بالمرح والحيوية. نحن نهتم بأن يكون لديك تجربة إيجابية ومشجعة، حيث توفر لك المدربة سجود التوجيه والدعم اللازم لتحقيق أقصى استفادة من كل تمرين. لا تفوت الفرصة لتبدأ مغامرتك في الزومبا وتحقق أهدافك الصحية بمتعة وسهولة.</span><br></p>', 2, '2024-09-07 07:33:04', '2024-09-07 07:33:04', NULL),
(3, 'ar', 'الكورس الثالث', '<p><span style=\"color: rgb(115, 115, 115); font-family: arabbook; font-size: 16px;\">انضم إلى الكورس الثالث مع المدربة سجود، حيث نقدم لك تجربة زومبا ممتعة ومليئة بالطاقة عبر إيقاعات أغنية \'Danza Kuduro\'. هذا الكورس مصمم خصيصًا للمبتدئين الذين يرغبون في بدء رحلتهم في عالم الزومبا بطريقة سلسة وممتعة. خلال الجلسات، ستتعلم أساسيات حركات الزومبا البسيطة التي تجمع بين الإيقاعات اللاتينية وحركات الكارديو الفعالة. سوف تكتشف كيفية تحسين لياقتك البدنية وزيادة مرونتك من خلال تمارين مبنية على الموسيقى، مما يجعل كل حصة تدريبية تجربة مليئة بالمرح والحيوية. نحن نهتم بأن يكون لديك تجربة إيجابية ومشجعة، حيث توفر لك المدربة سجود التوجيه والدعم اللازم لتحقيق أقصى استفادة من كل تمرين. لا تفوت الفرصة لتبدأ مغامرتك في الزومبا وتحقق أهدافك الصحية بمتعة وسهولة.</span><br></p>', 3, '2024-09-07 07:33:45', '2024-09-07 07:33:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_system_settings`
--

CREATE TABLE `t_system_settings` (
  `pk_i_id` int UNSIGNED NOT NULL,
  `s_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_enabled` int NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` datetime DEFAULT NULL,
  `dt_deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_system_settings`
--

INSERT INTO `t_system_settings` (`pk_i_id`, `s_key`, `s_value`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, '_token', 'wr29Z5ek20ZwPLD9uspyajyKBOhs2ISy1ysNbtNz', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL),
(2, 'title', 'Sojoud', 1, '2024-09-08 05:36:33', '2024-09-08 08:36:33', NULL),
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
  `pk_i_id` int UNSIGNED NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_mobile` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_enabled` int NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_vedios`
--

CREATE TABLE `t_vedios` (
  `pk_i_id` bigint UNSIGNED NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_i_cource_id` bigint UNSIGNED DEFAULT NULL,
  `s_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_vedio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_vedios`
--

INSERT INTO `t_vedios` (`pk_i_id`, `s_title`, `fk_i_cource_id`, `s_cover`, `s_vedio`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, NULL, 1, 'uploads/vedios/jOnDT3INiqPaeYiBfKTaaDaKwPtBR6OVPGwV2og4.jpg', 'uploads/vedios/zfQSVUhYEMc9gKLdXTgY7HtnWqo9kqFcliEKWNR4.jpg', 1, '2024-09-08 05:03:54', '2024-09-08 05:20:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_vedio_translations`
--

CREATE TABLE `t_vedio_translations` (
  `pk_i_id` bigint UNSIGNED NOT NULL,
  `s_locale` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_i_vedio_id` bigint UNSIGNED NOT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_vedio_translations`
--

INSERT INTO `t_vedio_translations` (`pk_i_id`, `s_locale`, `s_title`, `fk_i_vedio_id`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'ar', 'تست', 1, '2024-09-08 05:03:54', '2024-09-08 05:03:54', NULL);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `pk_i_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_brands`
--
ALTER TABLE `t_brands`
  MODIFY `pk_i_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_brand_translations`
--
ALTER TABLE `t_brand_translations`
  MODIFY `pk_i_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_cources`
--
ALTER TABLE `t_cources`
  MODIFY `pk_i_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_cource_translations`
--
ALTER TABLE `t_cource_translations`
  MODIFY `pk_i_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_system_settings`
--
ALTER TABLE `t_system_settings`
  MODIFY `pk_i_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `pk_i_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `t_vedios`
--
ALTER TABLE `t_vedios`
  MODIFY `pk_i_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_vedio_translations`
--
ALTER TABLE `t_vedio_translations`
  MODIFY `pk_i_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
