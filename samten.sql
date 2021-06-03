-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 10:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samten`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Drawing Classes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum', 'blog01_1589098085.jpg', '2020-05-08 01:31:16', '2020-05-10 02:23:05'),
(2, 'Drawing Classes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum', 'blog02_1589098452.jpg', '2020-05-10 02:29:12', '2020-05-10 02:29:12'),
(3, 'Drawing Classes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum', 'blog04_1589098473.jpg', '2020-05-10 02:29:33', '2020-05-10 02:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `bods`
--

CREATE TABLE `bods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bods`
--

INSERT INTO `bods` (`id`, `name`, `position`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Stella Roffin', 'Board Member', 'bod_1589097746.jpg', '2020-05-08 02:28:52', '2020-05-10 02:17:26'),
(2, 'Stella Roffin', 'Board Member', 'bod1_1589097814.jpg', '2020-05-10 02:18:34', '2020-05-10 02:18:34'),
(3, 'Stella Roffin', 'Board Member', 'bod2_1589097861.jpg', '2020-05-10 02:19:21', '2020-05-10 02:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `calenders`
--

CREATE TABLE `calenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calenders`
--

INSERT INTO `calenders` (`id`, `title`, `created_at`, `updated_at`) VALUES
(6, 'LIST OF HOLIDAYS:', '2020-05-10 02:31:43', '2020-05-10 02:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_message` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `new_message`, `created_at`, `updated_at`) VALUES
(2, 'Sandip SIlwal`T', 'sandip.silwal.ss@gmail.com', 'Second Contact', 'This is second contact from me', 0, '2020-05-09 09:49:00', '2020-05-09 10:49:45'),
(3, 'hgkjgjkhbkjn', 'sudip.gm@gmail.com', 'gckvhlbkj;l;m', 'klkhjgkjhbk ig ig hjg kgjhgukyjgkuitg iugoiugh kjghiugkjghk gig oiuyoi oijh lkj ih olgh kgh i igioghkjgh ighjhgig ighbighk ghoihg oihgklkhjgkjhbk ig ig hjg kgjhgukyjgkuitg iugoiugh kjghiugkjghk gig oiuyoi oijh lkj ih olgh kgh i igioghkjgh ighjhgig ighbighk ghoihg oihgklkhjgkjhbk ig ig hjg kgjhgukyjgkuitg iugoiugh kjghiugkjghk gig oiuyoi oijh lkj ih olgh kgh i igioghkjgh ighjhgig ighbighk ghoihg oihgklkhjgkjhbk ig ig hjg kgjhgukyjgkuitg iugoiugh kjghiugkjghk gig oiuyoi oijh lkj ih olgh kgh i igioghkjgh ighjhgig ighbighk ghoihg oihg', 0, '2020-05-09 10:51:32', '2020-05-09 10:51:40'),
(4, 'sfsddsfsdf', 'sdfrg@fgrds.com', 'Math', 'sdfsdfsdfsdf', 0, '2020-05-09 10:54:53', '2020-05-09 10:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'blog04_1588909474.jpg', 'Science Class', '2020-05-07 21:59:34', '2020-05-10 02:30:16'),
(3, 'blog01_1588909572.jpg', 'Science Class', '2020-05-07 22:01:12', '2020-05-10 02:30:29'),
(4, 'blog02_1588910230.jpg', 'Science Class', '2020-05-07 22:12:10', '2020-05-10 02:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calender_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `description`, `calender_id`, `created_at`, `updated_at`) VALUES
(4, '1. NEPALI NEW YEAR: 14 April, 2018 (1 Baisakh, 2075) Saturday', 6, '2020-05-10 02:32:02', '2020-05-10 02:32:02'),
(5, '2. GHATTASTHAPANA*: 21 September, 2017 (5 Ashoj, 2074) Thursday', 6, '2020-05-10 02:32:19', '2020-05-10 02:32:19'),
(6, '3. PHULPATI (DASHAIN)*: 27 September, 2017 (11 Ashoj, 2074) Wednesday', 6, '2020-05-10 02:32:34', '2020-05-10 02:32:34'),
(7, '4. MAHA ASHTAMI (DASHAIN):28 September, 2017 (12 Ashoj, 2074) Thursday', 6, '2020-05-10 02:32:48', '2020-05-10 02:32:48'),
(8, '5. MAHANAWAMI (DASHAIN): 29 September, 2017 (13 Ashoj, 2074) Friday', 6, '2020-05-10 02:33:05', '2020-05-10 02:33:05'),
(9, '6. VIJAYA DASHAMI (DASHAIN): 30 September, 2017 (14 Ashoj, 2074) Saturday', 6, '2020-05-10 02:33:18', '2020-05-10 02:33:18'),
(10, '7. EKADASHI (DASHAIN): 1 October, 2017 (15 Ashoj, 2074) Sunday', 6, '2020-05-10 02:33:33', '2020-05-10 02:33:33'),
(11, '8. LAXMI PUJA (TIHAR): 19 October, 2017 (2 Kartik, 2074) Thursday', 6, '2020-05-10 02:33:48', '2020-05-10 02:33:48'),
(12, '9. GAI TIHAR (TIHAR): 20 October, 2017 (3 Kartik, 2074) Friday', 6, '2020-05-10 02:34:01', '2020-05-10 02:34:01'),
(13, '10. BHAI TIKA (TIHAR): 21 October, 2017 (4 Kartik, 2074) Saturday', 6, '2020-05-10 02:34:15', '2020-05-10 02:34:15'),
(14, '11. HOLI PURNIMA (Kathmandu Valley): 1 March, 2018 (17 Falgun, 2074) Thursday', 6, '2020-05-10 02:34:29', '2020-05-10 02:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `image`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'logo_1589027218.png', NULL, 'logo', NULL, NULL),
(2, 'home', 'Active Learning', 'icon', NULL, NULL),
(3, 'university', 'Books & Library', 'icon', NULL, '2020-05-10 01:37:52'),
(4, 'building', 'Learning & Fun', 'icon', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `name`, `address`, `contact`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Samten Memorial Educational Academy', 'Budhanilkantha-11, kapantar, Kathmandu', '+977-01-4820214/9851228277', 'info@samtenschool.edu.np', NULL, '2020-05-08 05:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `subtitle`, `description`, `type`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Message from Principal.', '-Shakti Raj Nepal  ', 'I welcome all valued parents and students, who are eager to know the values of global standard of education. We don\'t make schedule for students to read the books and make the note rather we give them equal environment for developing their hidden talents and shaping good and multiple personalities. We have child friendly and smart education system with high motivation of creativity. Everyone has the chance to flourish his/her capacity. We are committed to shape the aim of students obtaining the information of life on the challenges as an information system.Visit us study annd feel the real taste of learning which is surely dedicated to produce the global learners.', 'principal', 'pp_1589003890.jpg', '2020-05-09 00:13:10', '2020-05-09 00:13:10'),
(6, 'Our Mission:', NULL, 'We aim at empowering and fostering its entire building star to be global resources and citizens, critical thinkers, humble problem solvers, users of modern technologies, effective communicators and lifelong learners of this rapidly changing global community.', 'mission', NULL, '2020-05-09 01:33:50', '2020-05-09 01:38:19'),
(7, 'Our Goal', NULL, 'We ensure to foster holistic development of our student. We focus on multidimensional activities to bring the positive vibe in the life of the students. Welcome to Samten Academy Established Since 1898.', 'mission', NULL, '2020-05-09 01:35:19', '2020-05-09 01:35:19'),
(8, 'Our Vision:', NULL, 'The vision of the school is to \"build a responsible, innovative and global manpower with highest degree of excellency.\"', 'mission', NULL, '2020-05-09 01:35:51', '2020-05-09 01:35:51'),
(9, 'Our Motto:', NULL, '\"Relaxed mind, innovative, creative and multidimensional personality.\"', 'mission', NULL, '2020-05-09 01:36:26', '2020-05-09 01:36:26'),
(12, 'Message from the chairman & BOD.', '-Nimto Sherpa, Nima Sherpa & Rinjen Tsomo Sherpa, Chairman & BOD.', 'Our life is changing along with the time. Adjusting with the time is real challenge at present. Our kids are our future and our concern is to provide them with the moral, cultural, and spiritual development along with quality education. This place is the excellent academic hub for bringing best of the best with the belief in MI(Multiple Intelligences). We prioritize to boost up the hidden talents of the students. We appeal to join the best team for excellency.', 'bod', NULL, '2020-05-09 02:12:07', '2020-05-09 02:12:07'),
(13, 'Experience Teachers', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'features', 'teacher_1589019411.png', NULL, '2020-05-09 04:31:51'),
(14, 'Smart Courses', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'features', 'book.png', NULL, NULL),
(15, 'Scholarship', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'features', 'graduation-icon.png', NULL, NULL),
(16, 'Welcome To Our School', 'Samten Memorial Education Academy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac erat a diam rutrum laoreet. Cras vitae fringilla turpis. In laoreet nunc vel lacinia luctus. Nullam suscipit volutpat magna, vel tempus mauris auctor non. Duis nec orci egestas, hendrerit purus non, egestas diam. Donec viverra arcu quam, vel aliquam libero sagittis ut. Aenean non mauris vel nisl pulvinar malesuada ut non dui.', 'welcome', 'samten.png', NULL, '2020-05-10 01:59:32');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_05_05_044921_create_sliders_table', 2),
(9, '2020_05_05_072424_create_messages_table', 2),
(10, '2020_05_05_102251_create_we_haves_table', 2),
(11, '2020_05_05_102624_create_videos_table', 2),
(12, '2020_05_05_112000_create_totals_table', 2),
(13, '2020_05_05_114248_create_infos_table', 2),
(14, '2020_05_05_114838_create_bods_table', 2),
(15, '2020_05_05_121414_create_programs_table', 2),
(16, '2020_05_05_121629_create_program_descriptions_table', 2),
(17, '2020_05_05_124447_create_achievements_table', 2),
(18, '2020_05_05_124944_create_galleries_table', 2),
(19, '2020_05_05_125334_create_calenders_table', 2),
(20, '2020_05_05_125449_create_holidays_table', 2),
(24, '2020_05_09_103811_create_icons_table', 3),
(25, '2020_05_09_125427_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, 'Our focused Programmes', '2020-05-07 10:28:35', '2020-05-10 01:43:21'),
(7, 'Our Smart Programs', '2020-05-08 03:05:38', '2020-05-10 01:46:43'),
(8, 'Our other Programs', '2020-05-08 03:05:51', '2020-05-10 01:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `program_descriptions`
--

CREATE TABLE `program_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_descriptions`
--

INSERT INTO `program_descriptions` (`id`, `description`, `program_id`, `created_at`, `updated_at`) VALUES
(17, 'Varities of sports.', 3, '2020-05-07 10:44:35', '2020-05-10 01:43:39'),
(23, 'Regular workshop on motivation, counselling & smart goal setting.', 7, '2020-05-08 03:06:12', '2020-05-10 01:47:00'),
(24, 'Varities of sports.', 8, '2020-05-08 03:06:21', '2020-05-10 01:49:45'),
(26, 'Resourceful library supports(e-library intact).', 3, '2020-05-10 01:43:52', '2020-05-10 01:43:52'),
(27, 'Computer lab with internet access.', 3, '2020-05-10 01:44:05', '2020-05-10 01:44:05'),
(28, 'Well equipped physical, Biology, Chemistry and Mathematics lab.', 3, '2020-05-10 01:44:20', '2020-05-10 01:44:20'),
(29, 'Scholarship for needy and extraordinary student.', 3, '2020-05-10 01:44:32', '2020-05-10 01:44:32'),
(30, 'Separate hostel boys and girls.', 3, '2020-05-10 01:44:48', '2020-05-10 01:44:48'),
(31, 'Day boarders.', 3, '2020-05-10 01:45:00', '2020-05-10 01:45:30'),
(32, 'Door to door (intravalley) reliable transportations (Bus, Micro, Van).', 3, '2020-05-10 01:45:47', '2020-05-10 01:45:47'),
(33, 'CC camera & IT classes with Internet access.', 3, '2020-05-10 01:46:08', '2020-05-10 01:46:08'),
(34, 'Well managed play station & thematic teaching activities.', 3, '2020-05-10 01:46:29', '2020-05-10 01:46:29'),
(35, 'Smart classrooms with CC camera and documentation & smart vehicles.', 7, '2020-05-10 01:47:13', '2020-05-10 01:47:13'),
(36, 'Smart attendance & examinations.', 7, '2020-05-10 01:47:29', '2020-05-10 01:47:29'),
(37, 'Regular workshop on Drama, Movie, Radio, TV and Documentry.', 7, '2020-05-10 01:47:43', '2020-05-10 01:47:43'),
(38, 'Regular award system.', 7, '2020-05-10 01:47:59', '2020-05-10 01:47:59'),
(39, 'Learning achievement based activities.', 7, '2020-05-10 01:48:14', '2020-05-10 01:48:14'),
(40, 'Events of dance , music, comedy & exhibition.', 7, '2020-05-10 01:48:30', '2020-05-10 01:48:30'),
(41, 'Regular workshop in cultural education.', 7, '2020-05-10 01:48:47', '2020-05-10 01:48:47'),
(42, 'Project works & presentation based teaching activities.', 7, '2020-05-10 01:49:03', '2020-05-10 01:49:03'),
(43, 'Resourceful library supports(e-library intact).', 8, '2020-05-10 01:50:04', '2020-05-10 01:50:04'),
(44, 'Computer lab with internet access.', 8, '2020-05-10 01:50:19', '2020-05-10 01:50:19'),
(45, 'Well equipped physical, Biology, Chemistry and Mathematics lab.', 8, '2020-05-10 01:50:35', '2020-05-10 01:50:35'),
(46, 'Scholarship for needy and extraordinary student.', 8, '2020-05-10 01:50:57', '2020-05-10 01:50:57'),
(47, 'Separate hostel boys and girls.', 8, '2020-05-10 01:51:09', '2020-05-10 01:51:09'),
(48, 'Day boarders.', 8, '2020-05-10 01:51:22', '2020-05-10 01:51:22'),
(49, 'Door to door (intravalley) reliable transportations (Bus, Micro, Van).', 8, '2020-05-10 01:51:38', '2020-05-10 01:51:38'),
(50, 'CC camera & IT classes with Internet access.', 8, '2020-05-10 01:51:53', '2020-05-10 01:51:53'),
(51, 'Well managed play station & thematic teaching activities.', 8, '2020-05-10 01:52:07', '2020-05-10 01:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'banner1_1589095183.jpg', '2020-05-06 01:43:48', '2020-05-10 01:34:43'),
(2, 'banner3_1589095227.jpg', '2020-05-06 01:52:38', '2020-05-10 01:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `totals`
--

CREATE TABLE `totals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `totals`
--

INSERT INTO `totals` (`id`, `type`, `title`, `total`, `created_at`, `updated_at`) VALUES
(1, 'users', 'Total Students', '500', NULL, '2020-05-10 01:42:42'),
(2, 'calendar', 'Year Of Experience', '9', NULL, '2020-05-08 04:34:00'),
(3, 'laptop', 'Our Program', '20', NULL, NULL),
(4, 'trophy', 'Awards', '206', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `pp` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `type` tinyint(4) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `email_verified_at`, `pp`, `status`, `type`, `password`, `deleted_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Super', 'Admin', 'super@admin.com', NULL, 'nopp.jpg', 1, 0, '$2y$10$NdF0iSFPrEvVcE/SbVDtEOAAAPNNphZvVd9sbPHKWBGs1dMdxGGq.', NULL, 'U5jOusPRBbxEIueY4kqa7Nu0T2i0X60oghhYpvsJt5FP2iOMlqZfc5IX9MHe', '2020-05-10 04:59:26', '2020-05-10 05:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(5, 'KMLuuFl6quA', 'link', '2020-05-10 01:00:58', '2020-05-10 01:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `we_haves`
--

CREATE TABLE `we_haves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `we_haves`
--

INSERT INTO `we_haves` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Learning Classes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.', 'class_03_1589095461.jpg', '2020-05-08 01:29:14', '2020-05-10 01:39:21'),
(8, 'Drawing Classes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur massa nibh, consequat eget gravida quis.', 'blog01_1589095567.jpg', '2020-05-10 01:41:07', '2020-05-10 01:41:07'),
(9, 'Imagination Classes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.', 'class_02_1589095642.jpg', '2020-05-10 01:42:22', '2020-05-10 01:42:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bods`
--
ALTER TABLE `bods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calenders`
--
ALTER TABLE `calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `holidays_calender_id_foreign` (`calender_id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_descriptions`
--
ALTER TABLE `program_descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_descriptions_program_id_foreign` (`program_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totals`
--
ALTER TABLE `totals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `we_haves`
--
ALTER TABLE `we_haves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bods`
--
ALTER TABLE `bods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `calenders`
--
ALTER TABLE `calenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `program_descriptions`
--
ALTER TABLE `program_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `totals`
--
ALTER TABLE `totals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `we_haves`
--
ALTER TABLE `we_haves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `holidays`
--
ALTER TABLE `holidays`
  ADD CONSTRAINT `holidays_calender_id_foreign` FOREIGN KEY (`calender_id`) REFERENCES `calenders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `program_descriptions`
--
ALTER TABLE `program_descriptions`
  ADD CONSTRAINT `program_descriptions_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
