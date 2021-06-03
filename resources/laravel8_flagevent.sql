-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 01:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel8_flagevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_texts`
--

CREATE TABLE `about_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_texts`
--

INSERT INTO `about_texts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Background History', 'Flag3 Security Services Ltd (Flag3Force) is one of the most competent security guard service providers in the arena of security service industry in Bangladesh. Our company has started the operation with the endorsement of the government of People’s Republic of Bangladesh from 5th January, 2007. We provide wide range of security and logistic service solutions for the growing security needs of the country. Over the last few years, we have achieved extraordinary growth in the security guards service sector. As of today, we have more than 2,000 security personnel deployed in several towns and cities across the country. The company head office is located at Dhanmondi, Dhaka-1209 and corporate office is at Nikunja-2, Khilkhet, Dhaka-1229 and Training School at Dakkhinkhan with regional offices established in Khulna, Chittagong, Sylhet, & Bogra and regional sub-offices in other areas. Flag3 Force, by now has served many local and international banks and has worked with a number of national, multinational and international organizations. Flag3 Force offers varied security guard solutions and service packages based on real time need assessment to ensure client satisfaction. Flag3 Force has opened a new dimension in the arena of safety and security. Flag3 Force is broadly known and has become a reputed brand name in the security sector of Bangladesh. The field management of this company is well furnished with sufficient staff having outstanding experience on ground. Welcome & Greetings 13 Years', NULL, '2021-05-19 05:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(3, '1', '5bffe64d1303f698a7a8ebabc6181c1f.jpg', 1, 1, '2021-05-17 03:08:45', '2021-05-17 03:08:45'),
(4, '2', 'ea515759b5d16920ab7d9aa32eec8498.png', 1, 1, '2021-05-17 03:08:53', '2021-05-17 03:08:53'),
(5, '3', 'b1c3736f3dba60de0cd0b9c01ca80873.jpg', 1, 1, '2021-05-17 03:09:01', '2021-05-17 03:09:01'),
(6, '4', '8878c096403f0e859b6cdc292408c5e0.jpg', 1, 1, '2021-05-17 03:09:12', '2021-05-17 03:09:12'),
(7, '5', 'a9fc7d925f325eeb5207098b7da07f2d.jpg', 1, 1, '2021-06-01 10:56:35', '2021-06-01 10:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `documentary_so_fars`
--

CREATE TABLE `documentary_so_fars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `list_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentary_so_fars`
--

INSERT INTO `documentary_so_fars` (`id`, `list_no`, `list`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, '1', 'Lorem ipsum dolor sit amet', 1, 1, '2021-05-31 04:22:48', '2021-05-31 04:22:48'),
(3, '2', 'Consectetur adipiscing elit', 1, 1, '2021-05-31 04:23:11', '2021-05-31 04:23:11'),
(4, '3', 'Mauris quis mi sit amet augue posuere efficitur', 1, 1, '2021-06-01 09:09:56', '2021-06-01 09:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `documentary_videos`
--

CREATE TABLE `documentary_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentary_videos`
--

INSERT INTO `documentary_videos` (`id`, `title`, `v_link`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(3, '1', 'https://www.youtube.com/embed/pOgfp0jQ2DM', 'cf21366b9707d448b9c724d158f7b865.jpg', 1, 1, '2021-05-31 00:48:54', '2021-05-31 00:48:54'),
(4, '2', 'https://www.youtube.com/embed/RcZFWIKdRak', 'dddd51567030257a75c6a79be87c16a7.jpg', 1, 1, '2021-05-31 00:50:28', '2021-05-31 00:50:28'),
(5, '3', 'https://player.vimeo.com/video/31806120', 'a20e6801dacc80a8cd0c6ce8f7fa4d3d.jpg', 1, 1, '2021-05-31 00:51:21', '2021-05-31 00:51:21'),
(6, '4', 'https://www.youtube.com/embed/6YLiovLbGfs', '2ced5d2e05cf01e987bca67a39616c1c.PNG', 1, 1, '2021-05-31 00:56:04', '2021-05-31 00:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, '13 YEARS EXPERIENCE', 'aba5f696bcb7453198bda2823c6733c0.png', 1, 1, '2021-05-19 00:39:46', '2021-05-19 01:26:34'),
(2, '2000 + Security Guards', '1f3e95d190f89a0fdec80dd1d042e47b.png', 1, 1, '2021-05-19 01:27:01', '2021-05-19 01:27:01'),
(3, 'Our Services', 'd1df71382f261c63400eca9d20ab8c33.png', 1, 1, '2021-05-19 01:27:26', '2021-05-19 01:27:26'),
(6, 'FLAG3 FORCE', '65e9b9e5b207154af37fd33d546fd297.png', 1, 1, '2021-05-19 01:30:41', '2021-05-19 01:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `event_forces`
--

CREATE TABLE `event_forces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `h_portfolio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_who_we_are` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_loc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_forces`
--

INSERT INTO `event_forces` (`id`, `h_portfolio`, `d_who_we_are`, `doc_desc`, `con_banner`, `google_loc`, `created_at`, `updated_at`) VALUES
(1, '{\"title\":\"Our Portfolio\",\"photo\":\"d92b61edb5153e3bde4dc89c6e25c294.jpg\"}', '{\"title\":\"Who We Are\",\"content\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed egestas felis. Sed non mi vitae justo pellentesque ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque sagittis vel dui vel pellentesque. Proin tortor magna, venenatis placerat lectus laoreet, vulputate rutrum neque. Nullam malesuada ultrices varius. Aliquam ultricies consequat erat, vitae vehicula dui mollis eget. Fusce metus libero, fringilla laoreet elit vel, malesuada semper mi. Suspendisse orci sapien, sollicitudin ut mauris vel, fermentum placerat metus. Phasellus non lacus eget massa interdum dignissim et vitae neque. Fusce eu ligula ac massa tempus iaculis eu sed ipsum. Duis a luctus neque, vel scelerisque lacus.\"}', 'Sofar we have made a most documentary of both Gov\'t and private sector like', 'f36e54bc076df8ee45fffac8058b8530.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.5632913503814!2d90.41542331486238!3d23.83412349148993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c78c6237edbf%3A0xeb9fe771f88c2843!2sFlag3%20Force%20(Flag3%20Security%20Services%20Ltd.)!5e0!3m2!1sen!2sbd!4v1622519894410!5m2!1sen!2sbd', NULL, '2021-05-31 22:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `event_logistics`
--

CREATE TABLE `event_logistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_logistics`
--

INSERT INTO `event_logistics` (`id`, `title`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, '1', '59166d1e1feb2be1994828cf803b2487.jpg', 1, 1, '2021-05-30 07:59:24', '2021-05-30 07:59:24'),
(3, '2', 'df4605a3909c5e403d734dca368ace70.jpg', 1, 1, '2021-05-30 07:59:32', '2021-05-30 07:59:32'),
(4, '3', '50b926e8e063de0dce0d1e16555d1721.PNG', 1, 1, '2021-05-30 07:59:43', '2021-05-30 07:59:43'),
(5, '4', '0608f1320701aaed16f11ea51284278d.jpg', 1, 1, '2021-05-30 07:59:52', '2021-05-30 07:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `event_management`
--

CREATE TABLE `event_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_management`
--

INSERT INTO `event_management` (`id`, `title`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, '1', 'ae280aa0201c9de49df11a137dbf879f.jpg', 1, 1, '2021-05-27 06:23:58', '2021-05-27 06:23:58'),
(3, '2', 'be6d1cac361769bfd0cd3a423343465e.jpg', 1, 1, '2021-05-27 06:31:16', '2021-05-27 06:31:16'),
(4, '3', 'ef802b617939cec174924e469c0337ef.jpg', 1, 1, '2021-05-27 06:31:48', '2021-05-27 06:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `event_provides`
--

CREATE TABLE `event_provides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `list_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_provides`
--

INSERT INTO `event_provides` (`id`, `list_no`, `list`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, '1', 'Lorem ipsum dolor sit amet', 1, 1, '2021-05-30 21:39:46', '2021-05-30 21:39:46'),
(3, '2', 'Consectetur adipiscing elit', 1, 1, '2021-05-30 21:40:14', '2021-05-30 21:40:14'),
(4, '3', 'Aenean sed egestas felis', 1, 1, '2021-05-30 21:40:31', '2021-05-30 21:40:31'),
(5, '4', 'Sed non mi vitae justo pellentesque ornare', 1, 1, '2021-05-30 21:41:13', '2021-05-30 21:41:13'),
(6, '5', 'Vestibulum euismod vehicula dui', 1, 1, '2021-06-01 09:13:10', '2021-06-01 09:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `event_securities`
--

CREATE TABLE `event_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_securities`
--

INSERT INTO `event_securities` (`id`, `title`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, '1', 'a980f45b9c3d56754a1cd7a07edc2e9c.jpg', 1, 1, '2021-05-30 08:43:40', '2021-05-30 08:43:40'),
(3, '2', '9aa9f7a01041366130ab8033f02747c5.jpg', 1, 1, '2021-05-30 08:43:52', '2021-05-30 08:43:52'),
(4, '3', 'a81cc5870325101adb884e9d5d4b97ef.jpg', 1, 1, '2021-05-30 08:44:03', '2021-05-30 08:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `event_services`
--

CREATE TABLE `event_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `we_provide` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `management` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logistics` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production_house` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_services`
--

INSERT INTO `event_services` (`id`, `we_provide`, `management`, `logistics`, `production_house`, `security`, `created_at`, `updated_at`) VALUES
(1, NULL, '{\"title\":\"A. Event Management\",\"photo_01\":\"66bde63179d598ddcdc792c3728a00a5.png\",\"photo_02\":\"dc1f101e8e02daaf85a9a5da3ed39950.jpg\",\"photo_03\":\"3032c35b94636a60d34068e0b4c6984e.jpg\",\"photo_04\":\"0a61243c98f77188248c2e3272f9c594.jpg\",\"photo_05\":\"dcd06fe94118a6ebcec53b25e53c7093.jpg\",\"photo_06\":\"c47bb9023762e463e4259d1e02140595.jpg\"}', '{\"title\":\"Event Logistics\",\"evphoto_01\":\"44e06eaa54c957cb2f2f0db700dd03f1.jpg\",\"evphoto_02\":\"a5ca5085ceeed1e64161afa499e26658.jpg\",\"evphoto_03\":\"5293253bd796d0d5069269ae529c27a5.jpg\",\"evphoto_04\":\"4e6cbd74c032d24af4c0f95a16d5c63c.jpg\",\"evphoto_05\":\"c99ae08813a5911cf3e7633ba83eb43b.jpg\",\"evphoto_06\":\"1c1b81dd3d0d6201b8521d5c6933888c.jpg\"}', '{\"title\":\"C. Documentary Production House\",\"documentary_01\":\"e36b09fb03bd15c553f832fd51e2f8c9.jpg\",\"documentary_02\":\"e09c8e6a55e6449ff6d1a6624df377a9.jpg\",\"documentary_03\":\"4480c5cc7b26cb2cc4c4153090c35802.jpg\"}', '{\"title\":\"Event Security\",\"security_01\":\"fc3c305b3b5375abaf8ed41a15958c9a.jpg\",\"security_02\":\"f7d1a5e1aaff629e883998feae5f5c6f.jpg\",\"security_03\":\"8b7d37db7cd38009a3d8da348ab3e146.jpg\"}', NULL, '2021-05-27 02:31:45');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer1`, `footer2`, `footer3`, `footer4`, `created_at`, `updated_at`) VALUES
(1, '{\"c_name\":\"Corporate Office\",\"c_address\":\"House: 02, Road No: 16 , Nikunja: 2, Khilkhet, Dhaka -1229\",\"c_phone\":\"+88028900677\",\"c_cell1\":\"01318301113\",\"c_cell2\":\"01318301114\",\"c_cell3\":\"01318301115\",\"c_cell4\":\"01318301116\",\"c_email1\":\"flag3force@gmail.com\",\"c_email2\":\"admin@flag3force.com\"}', '{\"d1_name\":\"Dhaka Office-01\",\"d1_address\":\"191/1, Inusbag College Road, Dakshin Khan, Dhaka-1230\",\"d1_cell1\":\"01918606332\",\"d1_cell2\":null,\"d1_email1\":\"admin@flag3force.com\",\"d1_email2\":null}', '{\"d2_name\":\"Dhaka Office-02\",\"d2_address\":\"Suit-06, 4th Floor, Rajuk Trade Center, Nikunja-02, Khilkhet, Dhaka-1229\",\"d2_cell1\":\"+8801983569800\",\"d2_cell2\":\"+8801714304676\",\"d2_email1\":\"flag3force@gmail.com\",\"d2_email2\":\"info@flag3force.com\"}', 'footer4', NULL, '2021-05-16 06:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gall_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `photo`, `gall_cat`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, '1', 'a2ce49805e62375b8e5ce66cde838703.jpg', '[\"National\",\"Weeding\"]', 1, 1, '2021-05-17 00:34:09', '2021-05-17 00:34:09'),
(2, '2', '900f2d5174b1a55c7d101daf2fa46a00.jpg', '[\"General\",\"Logistics\"]', 1, 1, '2021-05-17 00:34:21', '2021-05-17 00:34:21'),
(3, '3', '4555c7067800a356dbdba0ea993008aa.jpg', '[\"National\",\"General\"]', 1, 1, '2021-05-17 00:34:35', '2021-05-17 00:34:35'),
(5, '4', '5c6a892db9d30c23acca9f66d5b70488.jpg', '[\"National\",\"General\",\"Weeding\",\"Logistics\"]', 1, 1, '2021-05-17 02:50:07', '2021-05-17 02:50:07'),
(6, '5', '95cc5b7f91e644c82fcdc8d25a21bc8e.jpg', '[\"National\",\"General\",\"Weeding\",\"Logistics\"]', 1, 1, '2021-05-17 02:50:51', '2021-05-17 02:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `photo`, `content`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, 'from Vice Chairman', 'f8ed4b4a951fac885c8ceb1f66fe354a.jpg', 'I feel proud to announce myself as the Vice Chairman of Flag3 Force Group. Feeling the emerging needs of the security sector in Bangladesh, we wished to participate in this industry and formed FLAG3 FORCE in 2007. “FLAG3 FORCE” is our brand name. Our ultimate goal was to maintain the quality of our services and take the company to a different level. Our motto was simple; “profit is a logical sequence of quality.” And from the last decade, we maintain our quality of services to the top level. And for the grace of Almighty, we are now one of the pioneers of this industry. This is only possible for our dedicated, trained, healthy, smart, and professional security personnel who worked so hard with the passion to take the company to today\'s success. I am also thankful to all our honorable and beloved clients who believe in us and give us the opportunity to serve them. I wish all the success of our alliance and I hope for the best.', 1, 1, '2021-05-19 04:09:59', '2021-05-19 04:49:56'),
(3, 'From Managing Director', 'c51010b40cd6a6c07586926dceb156d3.png', 'As’salamualaikum. Thanks for reading. The goal behind the formation of Flag 3 Force is to serve with the optimal quality and affections. We are in this sector because we love to work with people’s trust and belief. Working with ‘Security & Safety’ is not that much easy in Bangladesh. Setting up a concrete and solid management like law enforcement agencies, implementation, following up, monitoring and supervision quality made us the ultimate choice of clients through the decade. We worked hard, trained our staff, considered the small errors and most importantly we dedicated ourselves for gaining the trust of our beloved clients. And after 13 years we found ourselves one of the leaders in this industry. In this decade of glorious journey, we served hundreds andthousands of Commercial and Industrial clients, Bank-Insurance, Embassy & High Commissions, Construction clients, Housing Society, Individual’s house, Shopping malls and many more clients. We modernized our company from time to time to cope with the current ‘trend and style’ and became a technology friendly security services company. We set our auto feedback system stronger in these years so that we can receive reports in any situation. We have one of the best monitoring and supervision systems in this industry. Rely on us; we will take the necessary steps towards your safety and security.', 1, 1, '2021-05-19 04:53:48', '2021-05-19 04:53:48');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_16_043127_create_settings_table', 2),
(5, '2021_05_16_085058_create_footers_table', 3),
(6, '2021_05_17_060943_create_galleries_table', 4),
(7, '2021_05_17_082840_create_clients_table', 5),
(8, '2021_05_19_052025_create_sliders_table', 6),
(9, '2021_05_19_060951_create_portfolios_table', 7),
(10, '2021_05_19_061359_create_events_table', 8),
(11, '2021_05_19_075432_create_top_management_table', 9),
(12, '2021_05_19_095217_create_messages_table', 10),
(13, '2021_05_19_110649_create_about_texts_table', 11),
(14, '2021_05_26_144002_create_event_services_table', 12),
(15, '2021_05_27_113714_create_event_management_table', 13),
(17, '2021_05_30_115004_create_event_forces_table', 14),
(18, '2021_05_30_133653_create_event_logistics_table', 15),
(19, '2021_05_30_142822_create_event_securities_table', 16),
(20, '2021_05_31_031015_create_event_provides_table', 17),
(22, '2021_05_31_054331_create_documentary_videos_table', 18),
(23, '2021_05_31_084340_create_documentary_so_fars_table', 19);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sister` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corporate_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhaka1_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhaka2_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `logo`, `favicon`, `copyright`, `social`, `sister`, `corporate_office`, `dhaka1_office`, `dhaka2_office`, `hotline`, `created_at`, `updated_at`) VALUES
(1, 'EVENT FORCE BD', '7240daed08b46b34001a15b721fffc08.png', 'c41aa991ae8a1f866d59a73b244d85b5.png', '{\"copy_year\":\"2021\",\"copy_by\":\"Event Force BD\"}', '{\"facebook_link\":\"www.facebook.com\",\"twitter_link\":\"www.twitter.com\",\"youtube_link\":\"www.youtube.com\"}', '{\"sister\":\"Please Knock Our Sister Concern for\",\"web_link\":\"www.eventforcebd.com\",\"event_manage\":\"www.eventforcebd.com\",\"event_logist\":\"www.eventforcebd.com\"}', 'cdsf', 'cdsf4', 'cdswr', '{\"cell_1\":\"01318301113\",\"cell_2\":\"01675392075\"}', NULL, '2021-05-16 01:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `photo`, `button`, `trash`, `status`, `created_at`, `updated_at`) VALUES
(5, '1', NULL, '7e7ad1c4c653123c260df76cdb4d52d3.png', NULL, 1, 1, '2021-05-18 23:47:10', '2021-05-19 01:20:02'),
(6, '2', NULL, 'cc50d7fc9ff62aac258d1e584e0f5bdf.png', NULL, 1, 1, '2021-05-18 23:50:44', '2021-05-18 23:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `top_management`
--

CREATE TABLE `top_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `top_management`
--

INSERT INTO `top_management` (`id`, `name`, `job`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, 'Brig Gen Md ZahurulAlam, ndc, psc (Retd)', 'Chief Adviser', '51f8e350decfc0e02446c53649f0c5e6.jpg', 1, 1, '2021-05-19 03:37:47', '2021-05-19 03:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.jpg',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `phone_number`, `username`, `email_verified_at`, `password`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 2, 'admin@gmail.com', '01886431371', NULL, NULL, '$2y$10$wMhUsxAGzuXk55hFjrxxiuT88Q5hs7R/LTCcSgzjgTAVhrrOCxfZK', 'avatar.jpg', 1, NULL, '2021-05-15 21:56:16', '2021-05-15 21:56:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_texts`
--
ALTER TABLE `about_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_title_unique` (`title`);

--
-- Indexes for table `documentary_so_fars`
--
ALTER TABLE `documentary_so_fars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documentary_so_fars_list_unique` (`list`);

--
-- Indexes for table `documentary_videos`
--
ALTER TABLE `documentary_videos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documentary_videos_title_unique` (`title`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_title_unique` (`title`);

--
-- Indexes for table `event_forces`
--
ALTER TABLE `event_forces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_logistics`
--
ALTER TABLE `event_logistics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_logistics_title_unique` (`title`);

--
-- Indexes for table `event_management`
--
ALTER TABLE `event_management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_management_title_unique` (`title`);

--
-- Indexes for table `event_provides`
--
ALTER TABLE `event_provides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_provides_list_unique` (`list`);

--
-- Indexes for table `event_securities`
--
ALTER TABLE `event_securities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_securities_title_unique` (`title`);

--
-- Indexes for table `event_services`
--
ALTER TABLE `event_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_title_unique` (`title`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolios_title_unique` (`title`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_management`
--
ALTER TABLE `top_management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `top_management_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_texts`
--
ALTER TABLE `about_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documentary_so_fars`
--
ALTER TABLE `documentary_so_fars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documentary_videos`
--
ALTER TABLE `documentary_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_forces`
--
ALTER TABLE `event_forces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_logistics`
--
ALTER TABLE `event_logistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_management`
--
ALTER TABLE `event_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_provides`
--
ALTER TABLE `event_provides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_securities`
--
ALTER TABLE `event_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_services`
--
ALTER TABLE `event_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `top_management`
--
ALTER TABLE `top_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
