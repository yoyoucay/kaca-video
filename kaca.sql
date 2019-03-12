-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 08:19 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `send_to` int(5) NOT NULL,
  `send_by` int(3) NOT NULL,
  `message` tinytext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `send_to`, `send_by`, `message`, `time`) VALUES
(73, 2, 1, '11', '2019-01-09 09:33:45'),
(151, 137, 11, 'Jelek', '2019-01-11 03:15:03'),
(150, 137, 138, 'Oi', '2019-01-11 03:14:11'),
(149, 137, 138, 'Hai', '2019-01-11 03:10:16'),
(148, 135, 134, 'Hcjfxhdzjdxydcyd kgsjrxudrj', '2019-01-11 02:47:24'),
(147, 134, 135, 'P', '2019-01-11 02:47:13'),
(146, 134, 135, 'Bts', '2019-01-11 02:46:05'),
(145, 134, 135, 'P', '2019-01-11 02:45:35'),
(144, 134, 135, 'P', '2019-01-11 02:45:34'),
(168, 10, 12, 'Test', '2019-01-14 10:48:55'),
(142, 1, 10, 'Pecat dulu si rahman', '2019-01-10 10:32:53'),
(141, 1, 10, 'Oii fer', '2019-01-10 10:32:25'),
(189, 1, 2, 'Fer izin telat', '2019-01-18 00:32:16'),
(192, 1, 10, 'oiiiiii', '2019-01-24 08:32:37'),
(193, 10, 2, 'hiii', '2019-02-13 07:24:54'),
(190, 1, 2, 'Disini hujan deres', '2019-01-18 00:32:35'),
(191, 2, 1, 'Iya', '2019-01-18 00:44:34'),
(135, 2, 1, 'mmk', '2019-01-10 07:55:51'),
(152, 137, 11, 'Jelek', '2019-01-11 03:15:06'),
(153, 11, 137, 'Iya', '2019-01-11 03:15:32'),
(154, 11, 137, 'Iya', '2019-01-11 03:15:40'),
(155, 138, 137, 'Apa kau', '2019-01-11 03:16:25'),
(156, 137, 138, 'Fuck', '2019-01-11 03:20:08'),
(157, 1, 1, 'yo', '2019-01-11 07:42:24'),
(158, 95, 23, 'Test masuk', '2019-01-11 16:15:23'),
(169, 10, 12, 'Test', '2019-01-14 10:49:00'),
(173, 1, 1, 'Woiii', '2019-01-15 09:26:21'),
(175, 1, 10, 'Pecat dulu si rahman', '2019-01-15 09:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `comment_confide`
--

CREATE TABLE `comment_confide` (
  `id` int(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `confide_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_confide`
--

INSERT INTO `comment_confide` (`id`, `deskripsi`, `user_id`, `confide_id`, `created_at`) VALUES
(1, 'Pertamax gan', 1, 72, '2018-12-12 16:34:49'),
(2, 'Hey yo whats upp', 1, 72, '2018-12-13 03:15:23'),
(3, 'YYYYYYYYYYY', 10, 102, '2018-12-13 04:57:24'),
(4, 'RCTI ?????', 10, 7, '2018-12-14 02:30:06'),
(5, 'Ayuuuuuu', 1, 65, '2018-12-16 03:05:07'),
(6, 'Aguuunnggg', 1, 65, '2018-12-17 16:24:20'),
(7, 'Galiiihh', 1, 65, '2018-12-17 16:24:29'),
(8, 'Aqlikaaa', 1, 65, '2018-12-17 16:24:39'),
(9, 'Test komentar terakhirrr', 1, 65, '2018-12-17 16:24:57'),
(10, '123', 2, 111, '2018-12-26 14:56:06'),
(11, 'dimana tu ', 2, 111, '2018-12-26 15:01:12'),
(12, 'Beh', 7, 54, '2019-01-11 00:11:09'),
(13, 'Beh', 7, 54, '2019-01-11 00:11:22'),
(14, 'Keluarga besar', 12, 125, '2019-01-14 10:46:35'),
(15, 'Patung bung karno', 12, 126, '2019-01-18 01:55:09'),
(16, 'mau apa tu , jadi kepo', 2, 134, '2019-02-13 07:29:05'),
(17, 'gak ah b aja pun', 2, 135, '2019-02-13 07:30:04'),
(18, 'hmm', 152, 139, '2019-02-13 16:55:43'),
(19, 'azzzz', 2, 3, '2019-02-24 17:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `comment_video`
--

CREATE TABLE `comment_video` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `video_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_video`
--

INSERT INTO `comment_video` (`id`, `deskripsi`, `user_id`, `video_id`, `created_at`) VALUES
(1, 'hallo', 2, 6, '2019-02-25 03:33:23'),
(2, 'keren ya video saya', 2, 6, '2019-02-25 05:40:45'),
(3, 'hallo semuanya', 2, 6, '2019-02-25 05:58:54'),
(4, 'hello', 1, 14, '2019-02-26 03:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `confide`
--

CREATE TABLE `confide` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confide`
--

INSERT INTO `confide` (`id`, `judul`, `deskripsi`, `nama_file`, `ukuran_file`, `tipe_file`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '', 'Hello World 3333', 'Desert.jpg', 826.11, 'image/jpeg', 1, '0000-00-00 00:00:00', '2018-12-18 14:13:46'),
(4, 'Sample Video Mp4', 'Hmmmmm', 'VID-20181122-WA0006.mp4', 710.39, 'video/mp4', 1, '0000-00-00 00:00:00', '2018-11-30 17:46:36'),
(7, '', 'Ini oom kuuuu', 'VID-20181122-WA00061.mp4', 710.39, 'video/mp4', 1, '2018-11-25 02:38:39', '2018-12-18 14:13:22'),
(8, '', 'Gud murgenz', '', 0, '', 2, '2018-11-25 08:50:25', '2018-11-25 01:57:13'),
(11, 'Pagi Baik hmm', 'Di Pagi Hari, Pagi Baik sekali hmm', 'IF208__video2.mp4', 770.01, 'video/mp4', 2, '2018-11-25 09:06:30', '2018-11-25 02:14:39'),
(13, 'Ttttt', 'Zzz', 'VID_20181125_091856.mp4', 2123.3, 'video/mp4', 2, '2018-11-25 09:48:21', '2018-11-25 02:48:21'),
(14, '', 'besok ujian wak ', '', 0, '', 7, '2018-11-25 13:11:21', '2018-11-25 06:11:21'),
(15, '', '', 'IMG20181125000254.jpg', 174.14, 'image/jpeg', 7, '2018-11-25 13:12:37', '2018-11-25 06:12:37'),
(17, '', 'Omae wa mo shindeiru', '', 0, '', 10, '2018-11-25 19:49:34', '2018-11-25 12:50:44'),
(18, '', 'Hai tayo\r\nDia tuh bus\r\nRamah', '', 0, '', 15, '2018-11-27 17:41:15', '2018-11-27 10:41:15'),
(19, '', 'nothing', '', 0, '', 19, '2018-11-27 22:31:58', '2018-11-27 15:31:58'),
(20, '', 'test', '', 0, '', 20, '2018-11-27 22:38:42', '2018-11-27 15:38:42'),
(21, '', '', '', 0, '', 21, '2018-11-27 22:40:21', '2018-11-27 15:40:21'),
(22, '', 'Terima kasih', '', 0, '', 24, '2018-11-27 22:56:36', '2018-11-27 15:56:36'),
(23, '', 'Modulator', '', 0, '', 12, '2018-11-28 07:49:48', '2018-11-28 00:49:48'),
(24, '', '', 'Wahyu_Motor_copy.png', 587.69, 'image/png', 28, '2018-11-28 09:46:06', '2018-11-28 02:46:06'),
(25, '', 'Bagaimana cara agar roda busa tetap berputar?', '', 0, '', 31, '2018-11-28 17:57:26', '2018-11-28 10:57:26'),
(26, '', '', 'IMG-20181124-WA0002.jpg', 23.96, 'image/jpeg', 12, '2018-11-28 18:02:10', '2018-11-28 11:02:10'),
(27, '', '', 'FB_IMG_1543030649187.jpg', 47.92, 'image/jpeg', 12, '2018-11-28 18:02:58', '2018-11-28 11:02:58'),
(28, 'Lagu', '', 'ANJI_-_MENUNGGU_KAMU_(OST__Jelita_Sejuba_)_(Official_Music_Video___Lyrics)1.mp4', 13061.18, 'video/mp4', 12, '2018-11-28 18:25:22', '2018-11-28 11:25:22'),
(29, '', 'Semen Padang lolos juga ke liga 1', 'Screenshot_20181128-182642.png', 881.73, 'image/png', 12, '2018-11-28 18:28:46', '2018-11-28 11:28:46'),
(32, '', 'Ak punya pengalaman .. dari masalah kelurgaan .. but ak heran kenapa .. masalah ini sampai besar2nya', '', 0, '', 43, '2018-11-28 19:54:31', '2018-11-28 12:54:31'),
(33, '', 'Hmm saya terlalu ganteng ', '', 0, '', 49, '2018-11-28 20:21:44', '2018-11-28 13:21:44'),
(34, '', 'yareee yareeee', '', 0, '', 53, '2018-11-28 20:30:55', '2018-11-28 13:32:13'),
(36, '', 'jahhhh', '', 0, '', 53, '2018-11-28 20:31:52', '2018-11-28 13:31:52'),
(37, '', 'h mmmmmmmmmmm', '', 0, '', 53, '2018-11-28 20:32:00', '2018-11-28 13:32:00'),
(40, '', 'Too simple ????', '', 0, '', 54, '2018-11-28 20:35:42', '2018-11-28 13:35:42'),
(41, '', 'halo, ini web apa ya?', '', 0, '', 56, '2018-11-28 20:41:13', '2018-11-28 13:41:13'),
(42, '', 'Malu-malu kucing ????????', 'IMG20181124104309.jpg', 1767.04, 'image/jpeg', 54, '2018-11-28 20:41:52', '2018-11-28 13:41:52'),
(43, '', 'Rumah masa depan...', 'VID20181118105650.mp4', 29459.59, 'video/mp4', 54, '2018-11-28 20:46:03', '2018-11-28 13:46:03'),
(44, '', 'Yes', '', 0, '', 61, '2018-11-28 21:20:23', '2018-11-28 14:21:38'),
(53, '', '', '15434167251641139591861.jpg', 857.87, 'image/jpeg', 7, '2018-11-28 21:52:37', '2018-11-28 14:52:37'),
(54, '', 'Taman kolam', '15434167701711121845212.jpg', 1132.89, 'image/jpeg', 7, '2018-11-28 21:54:04', '2018-11-28 14:54:04'),
(55, '', 'Saya ganteng', '', 0, '', 65, '2018-11-28 21:59:15', '2018-11-28 14:59:15'),
(56, '', '', '', 0, '', 67, '2018-11-28 23:19:15', '2018-11-28 16:19:15'),
(57, '', '', '', 0, '', 69, '2018-11-29 01:43:57', '2018-11-28 18:43:57'),
(58, '', 'Skip', '', 0, '', 70, '2018-11-29 02:17:41', '2018-11-28 19:17:41'),
(62, '', '', 'span_class_5mfr.mp4', 1909.21, 'video/mp4', 12, '2018-11-29 13:53:43', '2018-11-29 06:53:43'),
(63, '', 'test', '', 0, '', 82, '2018-11-29 14:17:08', '2018-11-29 07:17:08'),
(64, '', 'HOREEEE.. namaku hakim', '', 0, '', 14, '2018-11-29 14:29:10', '2018-11-29 07:29:10'),
(65, '', 'bisa dilike gak status aq kawan', '', 0, '', 14, '2018-11-29 14:29:42', '2018-11-29 07:29:42'),
(66, '', 'Hempppp......\r\nJombloe adalah pilihan yg terbaik ', '', 0, '', 85, '2018-11-29 16:21:43', '2018-11-29 09:21:43'),
(67, '', 'Wik wik wik\r\n', '', 0, '', 79, '2018-11-29 17:22:51', '2018-11-29 10:22:51'),
(68, '', '', '', 0, '', 92, '2018-11-30 09:00:52', '2018-11-30 02:00:52'),
(69, '', 'Semoga  semakin banyak peminatnya', '', 0, '', 92, '2018-11-30 09:01:47', '2018-11-30 02:01:47'),
(70, '', '', 'FB_IMG_1543544364396.jpg', 86.35, 'image/jpeg', 12, '2018-11-30 14:23:00', '2018-11-30 07:23:00'),
(71, '', '', 'FB_IMG_1542859771913.jpg', 20.92, 'image/jpeg', 12, '2018-11-30 18:24:32', '2018-11-30 11:24:32'),
(72, '', 'Some random shit', '', 0, '', 10, '2018-11-30 19:48:43', '2018-11-30 12:48:43'),
(73, '', 'Belajar... ujian... ujian...????????????????????', '', 0, '', 94, '2018-11-30 20:16:30', '2018-11-30 13:16:30'),
(74, '', 'Hey, Tayo', '', 0, '', 95, '2018-11-30 20:40:12', '2018-11-30 13:40:12'),
(75, '', 'Test', '', 0, '', 97, '2018-11-30 22:10:16', '2018-11-30 15:10:16'),
(76, '', 'Gaje -_-', '', 0, '', 97, '2018-11-30 22:10:30', '2018-11-30 15:10:30'),
(77, '', 'testt', '', 0, '', 99, '2018-11-30 23:16:56', '2018-11-30 16:16:56'),
(79, '', '', 'psikologid___Bqwk4TNHjQW___.jpg', 171.27, 'image/jpeg', 18, '2018-12-01 18:28:18', '2018-12-01 11:28:18'),
(80, '', 'Ya saya cantik dan saya paham ????', '', 0, '', 102, '2018-12-01 21:59:26', '2018-12-01 14:59:26'),
(81, '', '????????', 'PhotoGrid_1543672931190.jpg', 1627.74, 'image/jpeg', 18, '2018-12-01 22:03:12', '2018-12-01 15:03:12'),
(82, '', 'When she wants your time not your money, she love you', '', 0, '', 105, '2018-12-01 22:08:13', '2018-12-01 15:08:13'),
(83, '', 'Pengen ngemil ????', '', 0, '', 18, '2018-12-01 22:13:32', '2018-12-01 15:13:32'),
(84, '', 'Just 1 I need in this world... Food', '', 0, '', 103, '2018-12-01 22:15:06', '2018-12-01 15:15:06'),
(85, '', 'Halo, saya bersedia menjadi Beta tester', '', 0, '', 106, '2018-12-01 22:39:02', '2018-12-01 15:39:02'),
(86, '', '?? ? ??', '', 0, '', 107, '2018-12-01 23:16:50', '2018-12-01 16:16:50'),
(87, '', 'Saya sangat mengharapkan hidup saya jadi jauh lebih baik kedepannya', '', 0, '', 87, '2018-12-02 01:11:44', '2018-12-01 18:11:44'),
(88, '', 'Ggwp tournament NEOX Report\r\n@Massa kok tong Batam', 'IMG-20181202-WA0010.jpeg', 881.39, 'image/jpeg', 2, '2018-12-02 16:39:20', '2018-12-02 09:39:20'),
(89, '', 'what the heck is dis..   ', '', 0, '', 111, '2018-12-02 20:31:26', '2018-12-02 13:31:26'),
(90, '', 'Bismillah UAS hari pertama,semoga lancar .Amin.\r\n', '', 0, '', 94, '2018-12-03 06:24:58', '2018-12-02 23:24:58'),
(91, '', '#teammarkering', '', 0, '', 114, '2018-12-03 21:13:58', '2018-12-03 14:13:58'),
(92, '', 'malam ini bintang nya banyak cuyyyy??', '', 0, '', 116, '2018-12-03 21:43:25', '2018-12-03 14:43:25'),
(93, '', 'Aku knyang', '', 0, '', 115, '2018-12-03 21:50:50', '2018-12-03 14:50:50'),
(94, '', 'Aku knyang', '', 0, '', 115, '2018-12-03 21:50:51', '2018-12-03 14:50:51'),
(95, '', '', 'IMG20181204142159.jpg', 1949.18, 'image/jpeg', 117, '2018-12-04 15:38:19', '2018-12-04 08:38:19'),
(96, '', '', 'IMG20181204142115.jpg', 1730.76, 'image/jpeg', 117, '2018-12-04 15:39:57', '2018-12-04 08:39:57'),
(97, '', '', '', 0, '', 117, '2018-12-04 15:40:00', '2018-12-04 08:40:00'),
(99, '', '', '', 0, '', 2, '2018-12-05 14:19:37', '2018-12-05 07:19:37'),
(100, '', '', 'IMG-20181108-WA0001.jpg', 138.99, 'image/jpeg', 12, '2018-12-06 13:01:33', '2018-12-06 06:01:33'),
(101, '', 'yattahh!', 'alice.PNG', 142.46, 'image/png', 53, '2018-12-06 19:10:20', '2018-12-06 12:10:20'),
(102, '', '???????????? ikhlas, sabar dan pantang menyerah..... semoga Allah selalu memberikan yang terbaik.Ami', '', 0, '', 94, '2018-12-10 08:58:41', '2018-12-10 01:58:41'),
(105, '', '', '', 0, '', 12, '2018-12-18 20:19:49', '2018-12-18 13:19:49'),
(106, '', '', 'IMG_20181212_053923.jpg', 58.83, 'image/jpeg', 12, '2018-12-18 20:20:43', '2018-12-18 13:20:43'),
(107, '', '', 'IMG_20181212_053933.jpg', 104.21, 'image/jpeg', 12, '2018-12-19 21:43:20', '2018-12-19 14:43:20'),
(108, '', 'Hi gaes', '', 0, '', 2, '2018-12-26 20:12:20', '2018-12-26 13:12:20'),
(109, '', 'zazaza', 'mini.jpg', 54.3, 'image/jpeg', 2, '2018-12-26 20:23:28', '2018-12-26 13:23:28'),
(110, '', 'Warung Terserah', 'mini1.jpg', 54.3, 'image/jpeg', 2, '2018-12-26 20:35:59', '2018-12-26 13:35:59'),
(111, '', 'zzzz', 'IMG_20181201_211440_HDR.jpg', 3570.03, 'image/jpeg', 2, '2018-12-26 20:43:48', '2018-12-26 13:43:48'),
(112, 'Hmmm', '', 'IF208__video3.mp4', 770.01, 'video/mp4', 2, '2018-12-26 23:27:09', '2018-12-26 16:27:09'),
(113, 'video mp4', '1232131', 'IF208__video4.mp4', 770.01, 'video/mp4', 2, '2018-12-27 00:26:28', '2018-12-26 17:26:28'),
(114, '', '', 'DSC_0197.JPG', 7276.03, 'image/jpeg', 10, '2018-12-27 14:11:58', '2018-12-27 07:11:58'),
(115, '', '', 'IMG_20181225_153622.jpg', 1818.02, 'image/jpeg', 125, '2018-12-27 14:15:12', '2018-12-27 07:15:12'),
(116, '', 'Holla', '', 0, '', 1, '2018-12-28 13:37:27', '2018-12-28 06:37:27'),
(117, '', 'Dimalang', 'IMG-20181226-WA0000.jpeg', 521.38, 'image/jpeg', 1, '2018-12-28 13:38:33', '2018-12-28 06:38:33'),
(118, 'Yooo', 'Kevin fajar', 'VID_20181228_133900.mp4', 3192.7, 'video/mp4', 1, '2018-12-28 13:39:25', '2018-12-28 06:39:25'),
(120, '', '', 'FB_IMG_1546040408245.jpg', 81.23, 'image/jpeg', 12, '2018-12-29 19:35:34', '2018-12-29 12:35:34'),
(121, '', '', 'FB_IMG_1546040318945.jpg', 90.6, 'image/jpeg', 12, '2018-12-29 19:36:08', '2018-12-29 12:36:08'),
(122, '', '', 'FB_IMG_1545811734323.jpg', 138.81, 'image/jpeg', 12, '2019-01-01 19:28:21', '2019-01-01 12:28:21'),
(123, '', '', '20181027_174926-1-1.jpg', 320.04, 'image/jpeg', 132, '2019-01-08 16:51:00', '2019-01-08 09:51:00'),
(124, '', '', 'FB_IMG_1547423143756.jpg', 81.98, 'image/jpeg', 12, '2019-01-14 06:46:32', '2019-01-13 23:46:32'),
(125, '', '', 'IMG-20181231-WA0020.jpg', 145.82, 'image/jpeg', 12, '2019-01-14 17:43:52', '2019-01-14 10:43:52'),
(126, '', '', 'IMG-20181225-WA0002.jpeg', 795.91, 'image/jpeg', 12, '2019-01-14 17:45:32', '2019-01-14 10:45:32'),
(127, '', '#Semaqueeen#Yaqueen', '', 0, '', 23, '2019-01-15 16:29:42', '2019-01-15 09:29:42'),
(128, '', 'Nothing is bad ', '', 0, '', 2, '2019-01-19 17:54:54', '2019-01-19 10:54:54'),
(129, '', 'Pubg ku bermasalah', 'line_1547789167789.jpg', 451.57, 'image/jpeg', 2, '2019-01-19 17:55:54', '2019-01-19 10:55:54'),
(130, '', 'Ini kipas, bukan tv', '1547895392538_.jpg', 2831.97, 'image/jpeg', 2, '2019-01-19 17:59:46', '2019-01-19 10:59:46'),
(131, '', 'GG Windows', 'Downtown.png', 1584.65, 'image/png', 6, '2019-01-29 13:17:27', '2019-01-29 06:17:27'),
(132, '', '12/01/2015', '51378762_402051110602450_2682225581392056631_n.mp4', 1280.33, 'video/mp4', 23, '2019-01-30 16:39:20', '2019-01-30 09:39:20'),
(133, '', 'Danau Kembar', 'FB_IMG_1547429575159.jpg', 279, 'image/jpeg', 12, '2019-02-08 15:27:16', '2019-02-08 08:27:16'),
(134, '', 'Hmm aku mau anuu,,,', '', 0, '', 2, '2019-02-13 14:28:48', '2019-02-13 07:28:48'),
(135, '', 'Keren njir', 'ZAZA.jpg', 710.15, 'image/jpeg', 2, '2019-02-13 14:29:53', '2019-02-13 07:29:53'),
(136, '', 'bebek', 'bebek.jpg', 43.16, 'image/jpeg', 2, '2019-02-13 14:30:41', '2019-02-13 07:30:41'),
(137, 'Aku mau aplo video apa aja', '', 'sample_video_3gp.3GP', 456.24, 'video/3gpp', 2, '2019-02-13 14:31:20', '2019-02-13 07:31:20'),
(138, 'Hmmm', 'axaxaxa', 'IF208__video5.mp4', 770.01, 'video/mp4', 2, '2019-02-13 14:35:50', '2019-02-13 07:35:50'),
(139, '', 'Hallo Semuanya..', '', 0, '', 152, '2019-02-15 01:50:57', '2019-02-14 18:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul_feedback` varchar(255) NOT NULL,
  `isi_feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `user_id` int(11) NOT NULL,
  `follow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`user_id`, `follow`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(10, 5),
(11, 11),
(12, 12),
(10, 1),
(10, 6),
(10, 11),
(10, 8),
(13, 13),
(15, 15),
(15, 1),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(23, 23),
(22, 22),
(24, 24),
(18, 5),
(25, 25),
(26, 26),
(28, 28),
(30, 30),
(31, 31),
(7, 9),
(34, 34),
(32, 32),
(37, 37),
(36, 36),
(40, 40),
(33, 33),
(41, 41),
(35, 35),
(35, 10),
(35, 10),
(35, 23),
(43, 43),
(45, 45),
(38, 38),
(47, 47),
(49, 49),
(50, 50),
(48, 48),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(60, 60),
(59, 59),
(57, 39),
(61, 61),
(23, 35),
(62, 62),
(9, 7),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(54, 6),
(69, 69),
(69, 5),
(70, 70),
(71, 71),
(10, 12),
(10, 12),
(44, 44),
(73, 73),
(74, 74),
(81, 81),
(82, 82),
(14, 14),
(14, 1),
(80, 80),
(54, 1),
(54, 15),
(54, 64),
(84, 84),
(85, 85),
(86, 86),
(79, 79),
(79, 5),
(88, 88),
(89, 89),
(91, 91),
(92, 92),
(1, 14),
(93, 93),
(1, 54),
(94, 94),
(94, 10),
(10, 94),
(95, 95),
(10, 23),
(95, 23),
(23, 95),
(23, 94),
(23, 12),
(23, 38),
(23, 1),
(23, 2),
(97, 97),
(99, 99),
(23, 99),
(99, 23),
(12, 10),
(12, 2),
(12, 7),
(12, 77),
(12, 8),
(12, 18),
(12, 53),
(100, 100),
(76, 76),
(102, 102),
(103, 103),
(105, 105),
(18, 10),
(18, 10),
(106, 106),
(107, 107),
(87, 87),
(12, 108),
(109, 109),
(111, 111),
(94, 12),
(94, 77),
(94, 83),
(113, 113),
(114, 114),
(116, 116),
(115, 115),
(54, 117),
(94, 23),
(53, 11),
(119, 119),
(7, 119),
(119, 7),
(121, 121),
(11, 1),
(122, 122),
(6, 10),
(6, 54),
(123, 123),
(5, 10),
(124, 124),
(124, 10),
(125, 125),
(126, 126),
(127, 127),
(127, 12),
(125, 12),
(10, 127),
(10, 125),
(10, 124),
(128, 128),
(129, 129),
(129, 125),
(130, 130),
(12, 131),
(132, 132),
(132, 12),
(132, 10),
(132, 1),
(1, 10),
(135, 135),
(134, 134),
(135, 134),
(134, 135),
(136, 136),
(137, 137),
(137, 11),
(138, 138),
(138, 137),
(137, 138),
(11, 137),
(139, 139),
(140, 140),
(142, 142),
(143, 143),
(143, 6),
(144, 144),
(145, 145),
(12, 147),
(152, 152),
(153, 153),
(152, 1),
(152, 10),
(2, 1),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(255) NOT NULL,
  `confide_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `liked_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `confide_id`, `user_id`, `liked_at`) VALUES
(9, 72, 1, '2018-12-11 16:26:49'),
(10, 72, 2, '2018-12-11 16:29:27'),
(17, 65, 10, '2018-12-12 09:50:33'),
(16, 72, 10, '2018-12-12 09:50:22'),
(13, 90, 10, '2018-12-12 04:36:11'),
(14, 102, 10, '2018-12-12 09:49:38'),
(15, 100, 10, '2018-12-12 09:49:49'),
(18, 42, 1, '2018-12-12 15:01:50'),
(19, 104, 10, '2018-12-18 03:24:57'),
(20, 17, 10, '2018-12-18 03:25:13'),
(21, 106, 10, '2018-12-19 01:04:14'),
(22, 72, 124, '2018-12-24 14:45:23'),
(23, 110, 2, '2018-12-26 14:07:10'),
(24, 110, 2, '2018-12-26 14:07:11'),
(25, 107, 10, '2018-12-26 14:50:31'),
(26, 115, 10, '2018-12-28 03:39:12'),
(27, 113, 1, '2018-12-28 06:36:51'),
(28, 108, 2, '2018-12-31 13:42:24'),
(29, 118, 1, '2019-01-14 01:34:59'),
(30, 126, 12, '2019-01-19 04:54:10'),
(31, 127, 10, '2019-01-24 08:30:54'),
(32, 130, 2, '2019-02-13 07:25:41'),
(33, 135, 2, '2019-02-13 07:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `full_name` varchar(36) NOT NULL,
  `email` varchar(255) NOT NULL,
  `biodata` varchar(255) NOT NULL,
  `lokasi_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `hak` int(11) NOT NULL DEFAULT '0',
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama_avatar` varchar(255) NOT NULL,
  `tipe_avatar` varchar(20) NOT NULL,
  `ukuran_avatar` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `biodata`, `lokasi_user`, `password`, `role`, `hak`, `token`, `created_at`, `updated_at`, `nama_avatar`, `tipe_avatar`, `ukuran_avatar`) VALUES
(1, 'ferry', 'ferry dermawan', 'aiferrydermawan@gmail.com', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an.', 'Batam, Kepulauan Riau', '$2y$10$v9oxEhbTtlIXlO6VNwPYAeUCXZiTqHdoVDSqfKusOGol7AEeppUpu', 1, 0, 'r7oaFiCDVq5B0JQ4', '2018-11-24 17:35:49', '0000-00-00 00:00:00', '11.png', 'image/png', 890.52),
(148, 'alphamale', 'test', 'admin@admin.com', '', '', '$2y$10$G08rkJMSKTQmh8udNQQYSuy/v0tMmYFZMz.eTzXGofwC9zMKOwNcS', 0, 0, 'L6IRwZAYXKBeWG4p', '2019-01-25 03:42:02', '0000-00-00 00:00:00', '', '', 0),
(2, 'beemonswtf', 'Beemons Ganteng', 'beemonsnongsa@gmail.com', 'Aku kesurupan, gada yang nolongin huhu zzzz', 'Batam, Indonesia', '$2y$10$jj7s9Zm7LkCAf36XXXFXTOsEiNU/65sDBBfhYX4FJbN3NE4SbeGBi', 1, 1, '8uPCorm3hJi7O9UF', '2018-11-24 20:03:53', '0000-00-00 00:00:00', 'IMG-20181127-WA0004.jpg', 'image/jpeg', 52.46),
(4, 'Aiferrderrrr', 'owllcoffeeccc', 'owllcoffee@gmail.com', '', '', '$2y$10$P/abXvLPyWMtoc6Vw0UaDeQ13d8dzEgUM4Hc.CI2rKEls.QMbr62C', 1, 0, 'WNOdP43FwMc0faAB', '2018-11-25 03:32:24', '0000-00-00 00:00:00', '', '', 0),
(5, 'rahmanhakim31', 'Aulia Rahman Hakim', 'rahmanhakim147@gmail.com', '', '', '$2y$10$QATRvuigyanDFS7d6kW0d.cjztGDujcHIUsd4OmRgKnEyPeU489mq', 1, 0, 'j5aGnQ4rs2yPNqKI', '2018-11-25 04:45:30', '0000-00-00 00:00:00', 'IMG_20190106_163231.jpg', 'image/jpeg', 1695.35),
(6, 'Svala', 'Kevin Riady', 'kevinriady35@gmail.com', '', '', '$2y$10$81smkl3rjOpARuFPV6AUmOZE.yUoPjkAqIYmakC94vhk4LcNxAsFy', 1, 0, 'qyjelpG1Pv4B8YId', '2018-11-25 04:48:44', '0000-00-00 00:00:00', 'IMG_20181124_205918.jpg', 'image/jpeg', 16.25),
(7, 'David', 'David Hermawan', 'm.davidhermawann@gmail.com', 'Entrepreneur\r\nSmkn1batam\r\n', 'Perum griya sagulung permai', '$2y$10$pmLNxAIrHbPzpkyUNMUZPecva6GRw.UsB9ZPFG10AQyaP.IXLhJ9q', 1, 0, 'V5AhX7Gnc96KBHO1', '2018-11-25 05:56:46', '0000-00-00 00:00:00', 'IMG20181125000329.jpg', 'image/jpeg', 178.52),
(8, 'kharmila', 'Kharmila Febiyanti', 'kharmila25@gmail.com', '', '', '$2y$10$NsIAZxoLSnHHxvxrZMTX..zQP9JJIcXaZ5sL0XMqQvsfTuowRZP2a', 1, 0, 'pOEZ8PW6l953Bjid', '2018-11-25 06:10:57', '0000-00-00 00:00:00', '708A4CB4-7DA6-4D2E-91B1-1461B3C2F0F6.jpeg', 'image/jpeg', 244.88),
(9, 'ganes', 'Ganesa ', 'blackdemonworld19@gmail.com', 'STM BATAM\r\nNO LIMIT! ', '', '$2y$10$kbY5XhRx173GwDoE24BT8un8r1BaXjCO2pDZAwlERTYJWsOGYHqpu', 1, 0, 'dY0P6wt2eDScBIJb', '2018-11-25 06:22:26', '0000-00-00 00:00:00', 'IMG_20180709_083430_031.jpg', 'image/jpeg', 49.32),
(10, 'FajarPM', 'Fajar Pawa Mahendra ', 'fajarpawamahendra@gmail.com', '', '', '$2y$10$Mcc1RUJU3F15iJJ.GeISl.9dCzrPuE1e.1hRWUBlVW5sqYlTwl6Se', 1, 0, 'prsBPNoYFIlkQUDf', '2018-11-25 11:43:11', '0000-00-00 00:00:00', '', '', 0),
(11, 'ryuzai', 'Ryuji Kanzaki', 'ryuki_budouka@rocketmail.com', '', '', '$2y$10$8mpQoM9j3ibHTYPrfJ1cjOTOuApfy4XQhVM4IJzTE4fwM0p5mAfQa', 1, 0, 'cM1tmqfuJXpYiS3N', '2018-11-26 08:20:47', '0000-00-00 00:00:00', '', '', 0),
(12, 'Yunispar', 'Yunispar Oca', 'yunispar@ymail.com', '', '', '$2y$10$uBVLnN29cnJoMjFXPWxMhuOhb3e9F/g9Kc/J766TVYkAzLSbII7bW', 1, 0, 'MQlFpctb6fHJwX1E', '2018-11-26 14:12:47', '0000-00-00 00:00:00', 'IMG-20180311-WA0007.jpg', 'image/jpeg', 192.53),
(13, 'Cilla', 'Priskila Erlikasna Tarigan', 'chilatarigan69@gmail.com', 'Coz God make its beautiful in HIS time', '', '$2y$10$IDXazArzlz4kMZUBDM8bkOSOeneoLsKvE9rdcsqiUnA8zAITcz5w6', 1, 0, '6Pq7vIFBReQKGSYZ', '2018-11-27 10:24:33', '0000-00-00 00:00:00', 'IMG-20181117-WA0008.jpg', 'image/jpeg', 60.32),
(14, 'hakimajaman', 'Rifqi Taufiqul Hakim', 'robotorwhat@gmail.com', '', '', '$2y$10$el66pt.cfiJLdx1LZgapAuA8dTzDBXy50ta5uGkwLtp1Lk7Os/qEe', 1, 0, 'h9VWJB4oHdybSIcf', '2018-11-27 10:33:51', '0000-00-00 00:00:00', '', '', 0),
(15, 'Aqlika05', 'Aqlika Manna Nulkarem', 'aqlika05@gmail.com', '', '', '$2y$10$JSN3AFJAaUPYg23nzBPPueWPrtC0/Jm.SkJcewivD.YkeWOzMV2Hq', 1, 0, '7Qwr3Ot5xjmSpqkg', '2018-11-27 10:34:03', '0000-00-00 00:00:00', '', '', 0),
(16, 'Xxxyouth', 'hmm', 'yutisiogamings@gmail.com', '', '', '$2y$10$kYv5Ivrlb8IRtwwo84CnTuoVuqlVgU.m2fPCxmv/.E15ma7C8xUeO', 0, 0, 'NyC2VtoQKE6SMTZq', '2018-11-27 10:35:55', '0000-00-00 00:00:00', '', '', 0),
(17, 'teguh', 'Teguh Saputra', 'naxokee@gmail.com', '', '', '$2y$10$MnuUAn9EqAb4WXBz64ZDtOzMrNdAVYesfiaCdIQYUYWreoMBwh3ie', 1, 0, 'SypGRIXQFo8KlDna', '2018-11-27 14:02:04', '0000-00-00 00:00:00', '', '', 0),
(18, 'acnnirwana', 'Anggy Cahya Nirwana', 'anggyhemmings@gmail.com', '', '', '$2y$10$OqkaRwRhpjQM5kWJLPT7E.ypbdoaUGZyNl96Kt8eS/XaoWnW0o2/K', 1, 0, 'J3wkrPuMTdaLlXot', '2018-11-27 15:06:46', '0000-00-00 00:00:00', 'PhotoGrid_1535785746209.jpg', 'image/jpeg', 1501.7),
(19, 'Nathan131', 'Nathan Sitompul', 'patrickshow131@gmail.com', '', '', '$2y$10$l9ebh9RssTDKCP7xnoUAdOye5BHI726o9WKFu3AtqPQ/lCZq3H71i', 1, 0, 'KEiwRDk8JQFNrnpo', '2018-11-27 15:30:41', '0000-00-00 00:00:00', '', '', 0),
(20, 'Patrick131', 'Patrick Nathanael Sitompul', 'satelhack12@gmail.com', '', '', '$2y$10$OG4pIWCpkxuwE99nshe0pejk.iCTpjlTuPY5eEFXWrSJRFnsO/QEC', 1, 0, '4HtwcY3xUpDoi8A5', '2018-11-27 15:33:42', '0000-00-00 00:00:00', '', '', 0),
(21, 'crusaders12', 'Bagas', 'anonyhack21@gmail.com', '', '', '$2y$10$ihdWl0Fe82xaVks5uZcDMugTQFCnAYHnLLyhCPad1WAFaIJMx4uF.', 1, 0, 'TGjJhkaQUtVCPmpl', '2018-11-27 15:38:22', '0000-00-00 00:00:00', '', '', 0),
(22, 'rana', 'rana nadia ', 'rananadia0@gmail.com', '', '', '$2y$10$Sdiih1ZSLFDP4mnIJ.DAOe0Jkj6VN34v8S2RCSlE/aanZBpxsdpjq', 1, 0, 'e0zcFpCBIOMyYqix', '2018-11-27 15:45:26', '0000-00-00 00:00:00', '', '', 0),
(23, 'ryanaja', 'Ryan PJ', 'ryanpj2001@gmail.com', 'Tronjal Tronjol Maha Asyik', 'Akhibahara, Tokyo, Japan.', '$2y$10$FELTWKucGHuMpxDD8EU8vunSFLAvilOeHOUu/i4Ei3gRYRiUd4nXe', 1, 0, 'YH95U8VtQpGm41Ro', '2018-11-27 15:46:33', '0000-00-00 00:00:00', 'pBrk1alzAx0.jpg', 'image/jpeg', 189.51),
(24, 'sablyash', 'Sably', 'sablyashari@gmail.com', '', '', '$2y$10$2S4GXBKmuwmh.PDtXcQsE.vMXlXoe71bGQ1yN8liZrRZs/8jHB7U2', 1, 0, 'ujkrw7HRvhKpBcVl', '2018-11-27 15:52:08', '0000-00-00 00:00:00', '9771E347-2A4E-421A-9A0F-649EA7BEE162.jpeg', 'image/jpeg', 351.07),
(25, 'icepe', 'Il ma', 'yuukyuu495@gmail.com', '', '', '$2y$10$L/JNiQxLDNN3ZcAGcHBl1OtrBWNJX4BSdmcudbqWQf4XDGV0cS/YO', 1, 0, 'f9A8DtQ2nVdeciT0', '2018-11-27 15:55:57', '0000-00-00 00:00:00', '', '', 0),
(26, 'Rukki', 'Rukki', 'kopgop12@gmail.com', '', '', '$2y$10$S9jvWmFdQ9.WQOcp1t2q5uTRJuHWJfHSRiLKkEtluXsBxMsmJPPaq', 1, 0, 'IBeh4ovwiHE1VjDx', '2018-11-27 15:57:17', '0000-00-00 00:00:00', '', '', 0),
(27, 'sakurafhan', 'VIBUPlayer', 'sakurafhana@gmail.com', '', '', '$2y$10$srt.uJMD5M6H2t3F3Ub2E.x4nGUimVZuejC8PHvn72xNBDsYUB7U2', 0, 0, 'Q4ju0qdw5MET8KBv', '2018-11-28 01:01:18', '0000-00-00 00:00:00', '', '', 0),
(28, 'bayu', 'wahyu suseno', 'wahyukajurit@yahoo.com', '', '', '$2y$10$OeUJA0Z1RMb3Qs3Nh0sp.eFukwzQBAmzB9y0aPio5PoiS1TG.vRJy', 1, 0, '2La8q47dCMyclZDP', '2018-11-28 02:44:40', '0000-00-00 00:00:00', '', '', 0),
(29, 'andika', 'Andika pratama', 'andikapratam20@gmail.com', '', '', '$2y$10$vkR18DjfviT.SV9OtpJHK.S3CNkVKf5z9X4xZMzGlXgJL0ZK8G.Fi', 0, 0, 'BFenTG5RorUvaJCx', '2018-11-28 06:11:43', '0000-00-00 00:00:00', '', '', 0),
(30, 'annisamaulidinaa', 'Annisa anugrah maulidina', 'annsngrhmldn@gmail.com', '', '', '$2y$10$CtnqHEIAU5UQVQUu.X98/OJ9X.95ymtJ9tVxxxYsxiCcvnPdCQypC', 1, 0, 'hgmTWVely70rD9Kz', '2018-11-28 10:01:00', '0000-00-00 00:00:00', '', '', 0),
(31, 'Riioandika15', 'Rio Andika', 'andikadroid.tech@gmail.com', '', '', '$2y$10$LXCmeGaLQ5uJsbnN4Tgp.uN1FTIoWkyuhMmYSJ6IVw.hIGqKm2U06', 1, 0, 'U7lHNqgoV3RdG6kt', '2018-11-28 10:51:16', '0000-00-00 00:00:00', '', '', 0),
(32, 'coruptedfile31', 'Rahman Hakim', 'rahmanhakim159@gmail.com', '', '', '$2y$10$HkEh3PyqefOKND83VsLNIOyunjcQpNodfdr6a8N5AUOpzWMARYrsK', 1, 0, 'DBkbJh58sRGVljFn', '2018-11-28 10:57:20', '0000-00-00 00:00:00', '', '', 0),
(33, 'diliana', 'Dhiah Meyliana', 'meyliana.dhiah@gmail.com', '', '', '$2y$10$ydmHqvYEeJBm1DaNOXgqXOXMhioeNZokYSESfdZw3rgZ.UpwqFoC.', 1, 0, 'YlB2v08eVCkqujED', '2018-11-28 11:02:53', '0000-00-00 00:00:00', '', '', 0),
(34, 'genipitaloka', 'Geni Pitaloka', 'genipitaloka@gmail.com', '', '', '$2y$10$iavwYiltTX6k70nZQxu9iuFr6nNwYVn3R0jbu6Sa0XxHSXVEdDOdy', 1, 0, 'NWsfTMbQXF2yvh0J', '2018-11-28 11:31:39', '0000-00-00 00:00:00', '', '', 0),
(35, 'Yoga', 'Yoga Amanda Putra', 'yogaamandaputr@yahoo.com', '', '', '$2y$10$t35e0BxdPreV/2G6nN9Lw.TKB7hMT8BQ9P58yaaF9wB.vpDGiI/N6', 1, 0, 'zbiC1JvuadHcQNEZ', '2018-11-28 12:10:25', '0000-00-00 00:00:00', '', '', 0),
(36, 'Haka', 'Haka', 'kurokido82@gmail.com', '', '', '$2y$10$GK11NRQy01felw0hmB95G.Qjoc4mhQfOB1CDd5nzlnoNheHadQ3O.', 1, 0, 't2C3D6hfeyWLJ4oT', '2018-11-28 12:18:00', '0000-00-00 00:00:00', '', '', 0),
(37, 'shavitriie31', 'Annysha Vitri Rahayu', 'annyshavitri98@gmail.com', '', '', '$2y$10$n69Cq99SxBkWQ3/zBn6bLO7o/oIbKs4.HwZWTfRSiJtTftQoQ6zf2', 1, 0, 'dOlc91ng6AFaBH53', '2018-11-28 12:19:24', '0000-00-00 00:00:00', '', '', 0),
(38, 'Elmi', 'Elmigusti', 'elmigusti@gmail.com', '', '', '$2y$10$wujb3Z4so3YaY4t88VBmK.tQNVKlO4PeITo92AYmrQLIvsYEHxeMq', 1, 0, 'LuQKyrDgoYEp3kOA', '2018-11-28 12:19:35', '0000-00-00 00:00:00', '', '', 0),
(39, 'ngarocosdeui', 'Naufal Rizki', 'ngarocosdeui@gmail.com', '', '', '$2y$10$dCkWOZm9AnqxwFV60aDX1uT1dILeV261OeRC9DHAdZYAjIeItFkkK', 0, 0, '7TuK4S0aA5XtxjCr', '2018-11-28 12:20:21', '0000-00-00 00:00:00', '', '', 0),
(40, 'xxgenplay', 'Genplay junior', 'xxgenplayjr.22@gmail.com', '', '', '$2y$10$1pIOUvwQadAdkoACfFTCq.YV17F0feAcRvI1N5PBG6ajRydlRvcES', 1, 0, 'yLWmpvu1JlIieCUg', '2018-11-28 12:24:58', '0000-00-00 00:00:00', '', '', 0),
(41, 'dropouthhn', 'Rafael Ghifari', 'rafaelghifari03@gmail.com', '', '', '$2y$10$0y33zB/onQqonFAKor86Xu5SJm1sG64n8QDjE67HWEggcnXFFMW/u', 1, 0, 'zgNhjJe8HybmBD1A', '2018-11-28 12:25:13', '0000-00-00 00:00:00', '', '', 0),
(42, 'dsx110699', 'Dsx110699', 'dsx110699@gmail.com', '', '', '$2y$10$9XzetspFwtDRYANwvSkOVeTE0JPdozLvRSUq3xoOIirQutveUFD3e', 0, 0, 'SWxhwZYKfFPVQUi1', '2018-11-28 12:43:42', '0000-00-00 00:00:00', '', '', 0),
(43, 'kotori47', 'tomydelfiero', 'kenji.zenpakuto@yahoo.com', '', '', '$2y$10$w.WPBgSdSiN1FCie1p2uZuh4Sm5u/Lf4eKX56Qa0JIkGUZzUn4aBy', 1, 0, 'bMKymkuZx2QLnjRE', '2018-11-28 12:51:56', '0000-00-00 00:00:00', '', '', 0),
(44, 'Testingaja', 'Dicky', 'dickykhusnaedy98@gmail.com', 'Test', 'BATAM', '$2y$10$zuO.zysW4ta71gaLgPM3C.tEvwyEoWKQWGfx8XlX93mMYrUTH5Ws2', 1, 0, '4a8edPT5nqmHbzpu', '2018-11-28 12:56:31', '0000-00-00 00:00:00', '', '', 0),
(45, 'SecondLife', 'SecondLife', 'm4327036@nwytg.net', '', '', '$2y$10$lanAD8XJ5e5PPQdWEbcAM.laOK.MoN0NzWgFntKh0bABWUH53Q7Dq', 1, 0, 'yhAVOzZgeoIY6wQ3', '2018-11-28 12:59:42', '0000-00-00 00:00:00', '', '', 0),
(46, 'satuduatiga', 'satuduatiga', 'satuduatiga@gmail.com', '', '', '$2y$10$LsTKKwy.ufWybfI6U2p5S.RTkhNr/lLStUXjACq2rxNI2Vr3so6PC', 0, 0, 'S5KomukGwyQU6V7v', '2018-11-28 13:07:42', '0000-00-00 00:00:00', '', '', 0),
(47, 'dowunyb', 'satuduatiga', 'dowunyb@banit.me', '', '', '$2y$10$m8dITwlT0uzp.fD4g7OCw.bUxeerFw4I8Sjkzjj2Ym9XB8fc8lSLq', 1, 0, 'y8EBAJfPeviYcT5D', '2018-11-28 13:08:16', '0000-00-00 00:00:00', '', '', 0),
(48, 'iqbal44884', 'iqbal', 'iqbal44884@gmail.com', '', '', '$2y$10$jvu/lnUvz0NzEbLIshKDc.BGKU.4gwydaB3HvckaM.wHk5NVvycHq', 1, 0, 'jl9BhsHnND6VEUAf', '2018-11-28 13:14:13', '0000-00-00 00:00:00', '', '', 0),
(49, 'Daffa', 'Daffa salman jasmi', 'rezanego12@gmail.com', '', '', '$2y$10$XVuKjM.B97RSMQlOhA6JZeDb3dXFvwdq0ASFM4dIzuxDmLSb24Yqq', 1, 0, 'IpVEc3Cu5HYw04MX', '2018-11-28 13:14:33', '0000-00-00 00:00:00', '', '', 0),
(50, 'fikar2001', 'Dzulfikar', 'kardzulfi@gmail.com', '', '', '$2y$10$bd2V3IeXUepr3GBMSSopiOyVVRMHMRhqxS5Ke70kkoWS5C7ZRCMe2', 1, 0, 'jxznJITWtCGV8PQE', '2018-11-28 13:16:48', '0000-00-00 00:00:00', '', '', 0),
(51, 'citraswari', 'Citra swari henora', 'citraswari@yahoo.com', '', '', '$2y$10$5q4LjdeYvsQV0CLnKa.OLeH.yW3JSWHK.2WRmnX5sSXBWOYhrFx5q', 0, 0, 'zSL8u5NXtqW7gCyE', '2018-11-28 13:19:08', '0000-00-00 00:00:00', '', '', 0),
(52, 'saya', 'saya ini', 'sayaini@gmail.com', '', '', '$2y$10$TSpsfTLvHraNfZE3FyBGKOJiADfEbhTn4TwjSkWTUZJApzIE3i7om', 0, 0, 'YLaJ9F6x7Kv51VW0', '2018-11-28 13:22:04', '0000-00-00 00:00:00', '', '', 0),
(53, 'Kanayaklarast', 'Kanaya K L', 'kanayakaizzan@gmail.com', 'Hallo, sobat!', 'Batam', '$2y$10$0uqr5imq7Efavgl36jeZM.yKcW1PJN2EGki6MOiBhWq9MwX5xszju', 1, 0, 'nGXHq9oQAPJyEj3z', '2018-11-28 13:23:02', '0000-00-00 00:00:00', 'nNVGVx48rXqgw.jpg', 'image/jpeg', 563.71),
(54, 'Ella', 'Bangun', 'ellabangun321@gmail.com', '', '', '$2y$10$365vi0HyCNBgc56DK1jnu.IxDO4FMaP1BESGB16tgEchd9YYvU8hu', 1, 0, 'IbiqgVD6xKvd3TyC', '2018-11-28 13:26:26', '0000-00-00 00:00:00', '1543243760213.jpg', 'image/jpeg', 684.83),
(55, 'kefinyolanda', 'kefinyolandalarita', 'laritakefinyolanda@gmail.com', '', '', '$2y$10$lt1wiQyS4pvN0te8L7bKb.EghlWrj5zCbK74vOCXAbXGuMI5jLo5W', 1, 0, 'L6bl2mhNAq4xk3pI', '2018-11-28 13:28:02', '0000-00-00 00:00:00', '', '', 0),
(56, 'kaitokun', 'Kaito Kuroba', 'kuroba04@gmail.com', '', '', '$2y$10$4NUyhOnfxoYz.GxdLAurGOzJsXvWK1LX2pDp2Q1YReFnUyWoZwxP.', 1, 0, 'uyU35riaec0GPblL', '2018-11-28 13:35:41', '0000-00-00 00:00:00', '', '', 0),
(57, 'Kaito', 'Golden Knight', 'nathana3l@gmail.com', '', '', '$2y$10$UZEMPEBxiDMmwlrNgw8.eurPnMTFgQP.kk8P9FgEvdxO4rvBD1G.q', 1, 0, 'oGC2Q7eU4BzhZvJl', '2018-11-28 13:42:19', '0000-00-00 00:00:00', 'DYZ0q2VVAAAx2a0_(2).jpg', 'image/jpeg', 205.81),
(58, 'scramble00egg', 'Kiss kiss', 'lordsama@gmail.com', '', '', '$2y$10$AYHmOTpglnyY4EcmM6qNU.wHrSpI7wOTYqsJRVTAIC6tMFU.EfTHe', 0, 0, '0fk6Op4aUTCrJFQ1', '2018-11-28 13:48:23', '0000-00-00 00:00:00', '', '', 0),
(59, 'scramblegg', 'Kiss kiss', 'lordsamadesu@gmail.com', '', '', '$2y$10$0UgHsb0J.heLk8SX71DOVOftD18eesTa.nftS1gbe7AlMhqw06RO.', 1, 0, 'tCFWyXbeh8uvSwzI', '2018-11-28 13:49:20', '0000-00-00 00:00:00', '', '', 0),
(60, 'chenmey', 'Melytania', 'melytania13@gmail.com', '', '', '$2y$10$yNVc0qiKb9wI3m8UHuUwNOgc6ylgsmTWtpBihH2JboID8fv486nYK', 1, 0, 'bAJX7TeSH5sq6l8a', '2018-11-28 14:01:36', '0000-00-00 00:00:00', '', '', 0),
(61, 'Muhaiminyusuf', 'Muhaimin Yusuf Anwar', 'nimiahum834@gmail.com', '', '', '$2y$10$XwU8Rse9F6LKSEkVDQmyO.nyxws0Haqc/TG5jv0cz5ZoTod8bRwiC', 1, 0, 'avIhNHDqniWQu5rT', '2018-11-28 14:14:18', '0000-00-00 00:00:00', '', '', 0),
(62, 'rhangbujhang', 'Ridho', 'riofebrianto22@gmail.com', '', '', '$2y$10$TkX6t7A1d6ehAIeGTgPEdenkdn0.I8SLed401QwMtp9DR4scvXwjW', 1, 0, '1XoMlfE4Dq8BkdjU', '2018-11-28 14:32:12', '0000-00-00 00:00:00', '', '', 0),
(63, 'meli', 'Melinawati silitonga', 'melinawati00@gmail.com', '', '', '$2y$10$7PZ.Nr7lVfzWNucMUhGtQ.JnAEOwZ0G79SCKsvAujxuXVaUqwV65a', 0, 0, 'xA2vF0rUTJwX4DGe', '2018-11-28 14:41:47', '0000-00-00 00:00:00', '', '', 0),
(64, 'raehal', 'Raehal ramdany', 'raehalwota@gmail.com', '', '', '$2y$10$t9VGgB.7aIr0GwnnZizPdei.6ansARFKPgnZvwhWBdYCrpzTTEdeW', 0, 0, 'aTmZXhNeBK6kxFU0', '2018-11-28 14:49:39', '0000-00-00 00:00:00', '', '', 0),
(65, 'artapoetta', 'Arta Tama Putra', 'artatamaputra@gmail.com', '', '', '$2y$10$x7w.rnz6X1AKAFLgRUVPCu8KLof0uekNjfXCkDlEo0z1KP6HIX7tm', 1, 0, 'ox6lt7IvEgBfVwFZ', '2018-11-28 14:54:20', '0000-00-00 00:00:00', '', '', 0),
(66, 'adhe', 'Adhe Tertiasusman', 'atertiasusman@gmail.com', '', '', '$2y$10$KHAZvW2bmXeDua5ogzkYFukfokriMAlvXjee.OLy5sn.PlaV1BjO.', 1, 0, 'kWF6Xucf5vtJRQbI', '2018-11-28 15:19:56', '0000-00-00 00:00:00', '', '', 0),
(67, 'zakiasalsa', 'Zakia salsabila a', 'Zakiasalsabila03@gmail.com', '', '', '$2y$10$wTRK9lQm.M6Vrna3F9AGZOtl/VfptU4snEM/q7X25WvrkyjuZQwFW', 1, 0, '9sQZ6dxPNn1yGhBU', '2018-11-28 16:08:07', '0000-00-00 00:00:00', '', '', 0),
(68, 'nicoalexcandra', 'Nico Alexcandra', 'nicoalexcandra@gmail.com', '', '', '$2y$10$2RYIXGLCPOwFbal.JSr8EOVNAMZ8jljA/oMqwDYYK9srp9RC3q9aK', 1, 0, 'AB9cPWFSC2hXrkZ6', '2018-11-28 16:26:56', '0000-00-00 00:00:00', '', '', 0),
(69, 'edo', 'sapraja', 'edosapraja1998@gmail.com', '', '', '$2y$10$zGPOlHZDh.UqWntXOT1wQ.Ui5v1o7/ZapsP619ZVpTH1F2Bajz0lO', 1, 0, 'c9E4CvhHxNPJ2gG3', '2018-11-28 18:28:25', '0000-00-00 00:00:00', '', '', 0),
(70, 'man', 'Tole', 'abim748@gmail.com', '', '', '$2y$10$93fLEPiY78bfDUBrEl1dj.ObqYiWATX7sYSqiQ2c8K59RwXl5I/iG', 1, 0, 'GrnOjKuvhmCoZJ4p', '2018-11-28 19:11:45', '0000-00-00 00:00:00', '', '', 0),
(71, 'ressyrefita', 'Ressy Refita Sari', 'ressyrefita95@gmail.com', '', '', '$2y$10$bFF6LwCiNVoxoZzRESxvqOvycAnpgwTv1vaM.ZT8eFgnO5DvT0sn.', 1, 0, '0MNBuf4JI1xGWp5q', '2018-11-28 20:29:24', '0000-00-00 00:00:00', '', '', 0),
(72, 'velya', 'velya tri desi', 'velyatridesi27@gmail.com', '', '', '$2y$10$gCdxQDO4TWbMouhFubuQgu64Q.Wyu4FuuD.eebGZy2KdGogbiHIrG', 0, 0, '7nMSBRiZrylvobhd', '2018-11-29 02:13:51', '0000-00-00 00:00:00', '', '', 0),
(73, 'Ellaarinn', 'Ella Ariani Saputra', 'ellaarin12@gmail.com', '', '', '$2y$10$zegxtDBmRWIhLvuAzx4QruTYN01ECfVW4uZqpWpzI99ABBIddI3DG', 1, 0, '3gXxjACZDJURTL1b', '2018-11-29 04:42:57', '0000-00-00 00:00:00', '', '', 0),
(74, 'ian', 'Ian amsyi rahmadana', 'ianamsyi19@gmail.com', '', '', '$2y$10$NMuw8bOS1ZlJfhocXcKU0eJWM9Y8/RaX01hDFuwExLXzTyVm8gG82', 1, 0, 'jHZgOTAU9MVJlviX', '2018-11-29 05:12:34', '0000-00-00 00:00:00', '', '', 0),
(75, 'rama', 'Ramaprima', 'ramaprima61@gmail.com', '', '', '$2y$10$RoXYyD8I2/1j5764Ssx3lOOiOGgGDRdjjNBJK64G3H0CR9pWepio.', 0, 0, 'vHaJ1dbfUL7izElk', '2018-11-29 05:19:00', '0000-00-00 00:00:00', '', '', 0),
(76, 'dewi', 'Wa Ode Nur Kumala Dewi', 'waodenurkumaladewi31@gmail.com', '', '', '$2y$10$HRly02her/TyIwfX9GNULuw/QM5Chh947kMnDaDLkAFZdyZxlb2Xi', 1, 0, '7BgIiDL2VtXqZ3Gk', '2018-11-29 06:08:31', '0000-00-00 00:00:00', '', '', 0),
(77, 'deaajri', 'Dea permata sari', 'dhea_rockie@yahoo.com', '', '', '$2y$10$XI/B6r57CS5iWczplDMYNO1025Oi2QT2UsZVUZSr2FIMleJrSUVGy', 0, 0, 'kHF9rQin4ygpfcvx', '2018-11-29 06:22:09', '0000-00-00 00:00:00', '', '', 0),
(78, 'Herjunda', 'Jun', 'fikatama234@gmail.com', '', '', '$2y$10$QN7JpN5QuYVLS2WzYidsoeVwq2hKMEYnLAdAyI5HlBJRcyQi8Lhkq', 0, 0, '1HxkJ0eZv3qfwCrm', '2018-11-29 06:30:00', '0000-00-00 00:00:00', '', '', 0),
(79, 'Syaifulrahmandaa', 'Syaiful Rahmanda', 'syaifulrahmandaa@gmail.com', '', '', '$2y$10$zoJPeMRzvA.uhV6fd0H5yuLm.XrRTolhwprE29oRvOlaoX2NxdT7O', 1, 0, 'ypcxBXCnWzKI7YS1', '2018-11-29 06:44:11', '0000-00-00 00:00:00', '', '', 0),
(80, 'prayu', 'Prayuuntari', 'prayuuntarisaputrii@gmail.com', '', '', '$2y$10$7nccX1weyssXc/Yt2TAufuk9v2ehcX4GlCxvcIedlfT5qOBLm5FuC', 1, 0, 'wIkeb6FNTOCZhVGy', '2018-11-29 06:59:02', '0000-00-00 00:00:00', '', '', 0),
(81, 'Akun', 'Abdis Salmi', 'abdis.salmi@gmail.com', '', '', '$2y$10$xvn8fa0PBodVtHemAkUItey9rcXLojHGkI4jMEMP5ovdXUc805vLq', 1, 0, 'LnXB4uMGdJi8qTNt', '2018-11-29 07:00:29', '0000-00-00 00:00:00', '', '', 0),
(82, 'sarjayadiawe', 'Sarjayadi Awe', 'sarjayadiawe@gmail.com', '', '', '$2y$10$U59.ziGGJpRKc9gFgp3AhegwbsXgxCfxHvxzn/JSkgYpQYEKNgQo.', 1, 0, 'Nudt4W0b1G67jhaU', '2018-11-29 07:10:36', '0000-00-00 00:00:00', '', '', 0),
(83, 'winds', 'winda oktavia', 'o.winda@yahoo.com', '', '', '$2y$10$v8GJIkAimQhY1F1YOKg9Uub7ys5WP0WuVS/sMnMqYFzpyREZkAiSy', 0, 0, 'wQ2g8HlokmcnhyYW', '2018-11-29 08:27:56', '0000-00-00 00:00:00', '', '', 0),
(84, 'Deni', 'Deni Ardanta', 'DeniArdanta10@gmail.com', '', '', '$2y$10$vDXnygCCscPMQ12OYAZ9t.vn5y4rLomVGzw6bIYUCXzS3FcCpnmPi', 1, 0, 'nSWFfLhe3A21pOd0', '2018-11-29 08:49:26', '0000-00-00 00:00:00', '', '', 0),
(85, 'Chand', 'ChandHidayat', 'azichandra98@gmail.com', '', '', '$2y$10$n6nh31esRbbug2SYILhh6ukGTQGXensrh03ZVSGkYXnCvCwuogFoK', 1, 0, 'fbRrz3cuati9j8lA', '2018-11-29 09:14:13', '0000-00-00 00:00:00', '', '', 0),
(86, 'melderus', 'Melina Dewi R', 'melina.dewi.r@gmail.com', '', '', '$2y$10$oShUt2hYbZ0y/weHFi83TOyZ6kRzuSK2bFAjM9NimqB1a4KW3/5Vq', 1, 0, 'I6qwPvSmJ1KDGM50', '2018-11-29 09:56:02', '0000-00-00 00:00:00', '', '', 0),
(87, 'anggiacn', 'Anggi ', 'olviajulinda4@gmail.com', '', '', '$2y$10$qo1mqX1zI00DZGp9Ugzq..oFxm1YrPSR0ciI05ufCicN9WCqeaL8C', 1, 0, 'IB5rydUitEphmjS1', '2018-11-29 10:44:32', '0000-00-00 00:00:00', '', '', 0),
(88, 'cykapidar', 'Dimaz', 'rizaldidimas0@gmail.com', '', '', '$2y$10$iYx8iYFI1hAtfreMCOI2HOw7WH/c36Y/fv309M3/.PxKkbodE.rcK', 1, 0, 'oS7Ht0sN4aXIAnU5', '2018-11-29 11:40:10', '0000-00-00 00:00:00', '', '', 0),
(89, 'ramachand', 'Rama Putra', 'chanrama801@gmail.com', '', '', '$2y$10$jv5sZN2n701E6fSPj9b2juqkSA5G92dRZMlQtXJ2nXpjjPiIXf.t6', 1, 0, 'aC2VpBXu0KH78IMZ', '2018-11-29 11:50:31', '0000-00-00 00:00:00', '', '', 0),
(90, 'asdasdwd', 'asdqwedwfesdf', 'asdadqwedqwdasd@yahoo.com', '', '', '$2y$10$AzIRYMw3OCEm4vbOXsVzwOKFa5kg0izE5AhNZ1Dc6RDChLxee95Ou', 0, 0, '4vRlj7gqHQPpmDZ1', '2018-11-29 11:57:49', '0000-00-00 00:00:00', '', '', 0),
(91, 'Wenny20', 'Wenny Diana Simatupang', 'wenny.diana23@gmail.com', '', '', '$2y$10$DmoGBNv0fkI5Y.BFaH00kOQ1L0iK1KWmwlRc7E7Fo05MBmBiPTJGK', 1, 0, 'JkPKIilCWFZGsgMw', '2018-11-30 00:32:29', '0000-00-00 00:00:00', '', '', 0),
(92, 'yankuro', 'Hery sudaryanto', 'yananyku88@gmail.com', '', '', '$2y$10$N6ntJHMNCGjW0sNejhlGDeHe.U2xQFrZr3Y/s4sBi1Lngmu55Fn5O', 1, 0, 'CXMijpkFxVezGNLO', '2018-11-30 01:59:23', '0000-00-00 00:00:00', '', '', 0),
(93, 'jopnxx', 'Jovanka', 'ekajopanka@gmail.com', '', '', '$2y$10$yiz5vWYYjwcoydG/Wk9QL.EPpTrC6XVfD06O91xDUCKnTWVy3CuT.', 1, 0, 'bj0PE3wWet1kyF8A', '2018-11-30 10:23:22', '0000-00-00 00:00:00', '', '', 0),
(94, 'mahesa', 'Fiarya pawa mahesa', 'yunisparoca@gmail.com', '', '', '$2y$10$hcVhsVGhCufIh36tWTSnJucR0yG9e2zYM0M3mJSlbeGqovJZ0PMba', 1, 0, 't8O9UF7SQVeus4hK', '2018-11-30 12:13:12', '0000-00-00 00:00:00', '_20181110_113808.jpg', 'image/jpeg', 464.97),
(95, 'satrioirfan', 'Satrio Irfan Pratama', 'trickyipgt@gmail.com', 'ig: @satrioirfanp', 'Batam', '$2y$10$xdIw/g/WE3T0Ak2br4LpUO6gR28adqrRkiZMLRvjIHgZTrU1Xq8Lm', 1, 0, '0FGEnzHK2Q4d7Pkp', '2018-11-30 13:29:50', '0000-00-00 00:00:00', '8399c72fa472ce22a49f28b3ad62ca57.jpg', 'image/jpeg', 101.91),
(96, 'satrioirfanp', 'Satrio Irfan Pratama', 'satrioirfanp@gmail.com', '', '', '$2y$10$tJ2tFT.7GD2s8HelHWhES.QuRsjoUbl7KIeKkmSnqS6xOMnW.XU6W', 0, 0, 'g1i40ZYAvXJURQkr', '2018-11-30 13:33:57', '0000-00-00 00:00:00', '', '', 0),
(97, 'test', 'tested', 'mailtested10@gmail.com', 'gaje emang', '', '$2y$10$yXkVrk0hzLDmDzwZk25uQufMQWd52nvitLG96U/emOhWB4zhA8FJe', 1, 0, '6jvlViPLSheN3Awb', '2018-11-30 15:05:49', '0000-00-00 00:00:00', '', '', 0),
(98, 'elvayoona', 'Elva Yoona', 'elvxxl217@gmail.com', '', '', '$2y$10$o.0G7elDqcoZhL1nw9cxm.WyZS18SlRCIvZO8WW9DNBvxGUJQxBdO', 0, 0, 'SAXWIajVO8KH6q1Y', '2018-11-30 15:39:23', '0000-00-00 00:00:00', '', '', 0),
(99, 'elvayoona217', 'Elva Yoona', 'elvxxo217@gmail.com', '', '', '$2y$10$GkoUMnCufF8m2bpf55DWMudUtE7j7.gUPeqZsjtOtHX/nG.zEveA6', 1, 0, 'gyDzwaurZA3xQc6b', '2018-11-30 15:43:39', '0000-00-00 00:00:00', '', '', 0),
(100, 'debby11', 'Deby novidayani', 'deby.novidayani@gmail.com', '', '', '$2y$10$.BXNlOFY1.xfxsQ4Q1UjVuXrF5KWDruQiaTzZcrYM2lPyD4trPz3G', 1, 0, 'gkL82Fhi130JUYTn', '2018-11-30 23:04:23', '0000-00-00 00:00:00', '', '', 0),
(101, 'Yuda', 'Muhammad Yuda', 'yudasamaheda@gmail.com', '', '', '$2y$10$xQO7V9y5VE29Gfsqan26hOQSZvdQOGtyHiO1Rrd5ozZl9drlrHskS', 0, 0, 'rn5Djv10SPkuicV3', '2018-12-01 07:42:55', '0000-00-00 00:00:00', '', '', 0),
(102, 'alyaaak', 'Aldiyati Cucu Tionar', 'alyacucutionar@gmail.com', '', '', '$2y$10$DruNcMPmjdoF8uoCL6MgkuxmVH65hVp4bOE9MN5RIIhQyQG5TtslS', 1, 0, 'eq64RnfuTyFKLakC', '2018-12-01 12:51:02', '0000-00-00 00:00:00', '', '', 0),
(103, 'Tachi', 'Kagawita Hitachine', 'Hitachinekagawita@gmail.com', '', '', '$2y$10$YpKCfgqpvD39yAmyuaTLROikq7AJ1V1l7asxglqbjXjNZruNrYNEi', 1, 0, 'cTv7qp3LWrh2ZtQX', '2018-12-01 14:13:07', '0000-00-00 00:00:00', '', '', 0),
(104, 'iromatondang', 'Irohalasonmatondang', 'irohaloshonmatondang@gmail.com', '', '', '$2y$10$Zgb593unGl9j8T/uHkoz/uAoGhvIy4ehhAX0eb5Oglxg.NeouV/e2', 0, 0, 'RTgxzKbpIe9rCJFt', '2018-12-01 14:40:36', '0000-00-00 00:00:00', '', '', 0),
(105, 'dianawahyuniati24', 'Diana wahyuniati', 'dianawahyuniati.dw@gmail.com', '', '', '$2y$10$QIh5KBS9qUeUL2kDOM5AXufP.28lCqQ2PMRHA7ej8zrDSfoRcyPUy', 1, 0, 'UGrSK3laWpsiDxAe', '2018-12-01 14:45:08', '0000-00-00 00:00:00', '', '', 0),
(106, 'Septakp', 'Septa Kurnia Putra', 'septa924@gmail.com', '', '', '$2y$10$ViR9ZJjY06MEpH0Wjm7plu3R0tYRw0yLnA9ZUoQjQ6171mF8oFKMG', 1, 0, 'LdgI8DQMeoWUyARa', '2018-12-01 15:29:41', '0000-00-00 00:00:00', '', '', 0),
(107, 'bellaaeffendii', 'Bella Effendi', 'effendibella@gmail.com', '', '', '$2y$10$QqGozxiTncgGIX44Eo4ZzuJJyMPmbJQzm1iAGHgUklFMZDk4vgJyG', 1, 0, 'tr17AaXk4BEqZ6cf', '2018-12-01 16:08:23', '0000-00-00 00:00:00', 'IMG_20181118_215143_727.jpg', 'image/jpeg', 164.23),
(108, 'cintya24', 'Cintya Edlinovputri', 'cedlinovputri@gmail.com', '', '', '$2y$10$lvdsMbdnm2Crcrh0iicJVOQFPDYxZsbc.N9M95HILUVqsk4rI/kw2', 0, 0, 'obrV95vH4u12XSyl', '2018-12-02 02:18:18', '0000-00-00 00:00:00', '', '', 0),
(109, 'hnkezia', 'Hana kezia', 'hanakezia90@gmail.com', '', '', '$2y$10$YWEqp2vqmtCzJBE/LKmxve5LoDwwjk74zKjzIMYv786Bd2iX5apOC', 1, 0, 'yNJf1iGvMwIpgHjB', '2018-12-02 06:25:32', '0000-00-00 00:00:00', '', '', 0),
(110, 'destyy5', 'Desty melinda', 'destymelinda24@gmail.com', '', '', '$2y$10$jW35Tx.nGRKquptZanvOZejBOCILh/KW0x7Yz9DvxUJfHrcs8we9a', 0, 0, 'xYozV7O6HRBn0FEd', '2018-12-02 09:24:56', '0000-00-00 00:00:00', '', '', 0),
(111, 'Kha', 'Dhavii ', 'khadhavii@gmail.com', '', '', '$2y$10$39U0PbKcXZ4tjXBUQyoZW.VYwwul82wAlkQl6pFtudcIKXVh5Bl3G', 1, 0, '5PyW0I6GERHcazs1', '2018-12-02 13:24:18', '0000-00-00 00:00:00', '', '', 0),
(112, 'Arya', 'Tirta', 'arya.03.04.16@gmail.com', '', '', '$2y$10$BlO9jcqEm8Xiz.88jS8/ZuAN77fYeF0IHAXTjhYo.6yN9OtOlPSAm', 0, 0, 'u4CB7NgZ9eRpTJAP', '2018-12-03 03:49:34', '0000-00-00 00:00:00', '', '', 0),
(113, 'thrnrini', 'rini tarihoran', 'rini.tarihoran21@gmail.com', '', '', '$2y$10$b1iLMbfeT..6Kdvb/UIPJ.aI/vqxcmRnajhKnkK3o/5BYNtlMeoQG', 1, 0, 'MqGkHfjv0sFZ7bSp', '2018-12-03 03:59:35', '0000-00-00 00:00:00', '', '', 0),
(114, 'embuk', 'Randika Alpeno', 'randikaembul123@gmail.com', '', '', '$2y$10$5T/zfiysAOoc/3qwmw8hwu62LrKCO9R1XGye83ZJgq5Fh1OkT0lpu', 1, 0, '7MaTECpyF0UxnlXd', '2018-12-03 14:03:44', '0000-00-00 00:00:00', '', '', 0),
(115, 'harianti', 'Harianti', 'hariantimanic21@gmail.com', '', '', '$2y$10$FCc308PzlYUToI4l1FwT7.3FWpmd1d4jGvssjyQAcVt2jMC7UCDQ.', 1, 0, 'qmSkpFUgRCyx63vY', '2018-12-03 14:33:16', '0000-00-00 00:00:00', '', '', 0),
(116, 'sintagust', 'sinta agustia', 'sintgstia10@gmail.com', '', '', '$2y$10$mjb90sGpp.oPbtZTG8TZ5.JVaIwa4vohJUAbVJr6MIEsu2SKBqCYG', 1, 0, 'vbVk1WnTe5LQlsiC', '2018-12-03 14:37:25', '0000-00-00 00:00:00', '', '', 0),
(117, '061298', 'Asni dianti', 'asnidianti98@gmail.com', '', '', '$2y$10$WJDP8lDXu/KymtJp/ms/UeL6a2MaBAZt0teY1b0kxIumgWzT3JGJO', 0, 0, 'prXm0goZMlEqH4Qz', '2018-12-04 08:10:08', '0000-00-00 00:00:00', '', '', 0),
(118, 'isvahilma', 'Ilma isvah', 'ilmaisvah@gmail.com', '', '', '$2y$10$uBPI03.l/4kxX0O.SEyWLuhBSNXOOh2SCBiPA1rxILEqOULq43lMq', 0, 0, 'MvYANDgLErTq2FiQ', '2018-12-08 14:38:31', '0000-00-00 00:00:00', '', '', 0),
(119, 'Inayaaulia', 'Inayah Aulia', 'Inayaas.07@gmail.com', '', '', '$2y$10$vh/ifvyG1K4NN4aS14ijT.r1wZe7.PemaX3QCYcigXDKLStZPlixi', 1, 0, '3VndtD7mo6swCST9', '2018-12-11 07:01:31', '0000-00-00 00:00:00', '', '', 0),
(120, 'Dyka', 'Dyka Augustiany', 'dykaagustiany2908@gmail.com', '', '', '$2y$10$PBKP3JDMICVy.EhHtr6VS.je.6cdlMsl9uJIMK4bdNViJmKcIRAAq', 0, 0, 'eKiwE9vVPATuF3WI', '2018-12-11 07:05:18', '0000-00-00 00:00:00', '', '', 0),
(121, 'Mamang', 'Pabji', 'lelebatam0@gmail.com', '', '', '$2y$10$.vlq1MWXcYr4NtPSnJYu.uSfII3FAjSrTVJOBA7Hga69CVCMH.hQW', 1, 0, 'ZwzCPi2bNADuUkIV', '2018-12-11 07:49:57', '0000-00-00 00:00:00', '', '', 0),
(122, 'yo2', 'maidas yoyo ', 'hasbihmunaf@gmail.com', '', '', '$2y$10$QphwdVC2dc7SEkXgHfJfC.0nxZtGthG2HcAX.62ai7H5UhBFlZ6bG', 1, 0, 'bKiDVB50df8INLUx', '2018-12-15 03:16:46', '0000-00-00 00:00:00', '', '', 0),
(123, 'fitriasni', 'Fitri asni', 'fitriasni93@gmail.com', '', '', '$2y$10$32nRRqEv/ooPppZGNdjY2OmeB8MB9j.R5/csYgDmFvxnJh4x4rAdK', 1, 0, 'KvQJlSLIet24pCca', '2018-12-16 12:40:07', '0000-00-00 00:00:00', '', '', 0),
(124, 'siskaining', 'F. Ining widopeni', 'siskaining76@gmail.com', '', '', '$2y$10$bkI6tYq4zwUZIxnKtQClGev0Uxo2KMoam/r5N5iFeTBjmOoLJvKKq', 1, 0, 'FhbWPXxcMdDt5G1g', '2018-12-24 14:20:16', '0000-00-00 00:00:00', '', '', 0),
(125, 'ClaraMika', 'Clara Mika Trisnayani', 'filomenaines2779@gmail.com', '', '', '$2y$10$JbuD8aTIkodAUj6RrY1VTu9J87lbGTISZtWEJN607EqJQz/jVRK0m', 1, 0, '68YMnO9dkHjNblrq', '2018-12-25 08:20:57', '0000-00-00 00:00:00', '', '', 0),
(126, 'fiitamayo', 'Fita Mayo', 'mayovita2315@gmail.com', '', '', '$2y$10$cZcUZ/LZx0BSDNbxwgf6B.hsyb4zAzJzTaKGFRsE2HuLCpg2t0ihW', 1, 0, 'bWLiZg3PwalK1ump', '2018-12-25 08:24:17', '0000-00-00 00:00:00', '', '', 0),
(127, 'Hanna', 'Hanna Aurellia Putri Affandi', 'putriafandi29@gmail.com', '', '', '$2y$10$HRDEKc.2M7yYaOs.VDdaeO0Imj7hsnOAojKkd4S7RZ0AEjuL6JJ/K', 1, 0, 'mx3T0bJFUG5nLD2Q', '2018-12-26 11:25:03', '0000-00-00 00:00:00', '', '', 0),
(128, 'sandrina', 'Sandrina putri', 'santijatmiko@gmail.com', '', '', '$2y$10$ukvogqWdS/JZec5pyXhWzeaavoXj27nyOX4XvkXxMvkS/96Np/gQ.', 1, 0, 'WOV9QC8DBw5TvyuY', '2018-12-27 11:03:42', '0000-00-00 00:00:00', '', '', 0),
(129, 'omkukuhok', 'kukuh ngudi trisno markus', 'markus05kukuh@gmail.com', '', '', '$2y$10$HkZ70MnVu8FoTVHroYTfzedUt07fCWkimTSkB9UOKEhytYjuXbuAO', 1, 0, 'B3VMLj692QlUNxp7', '2018-12-28 14:15:46', '0000-00-00 00:00:00', '', '', 0),
(130, 'Ipung', 'Ipung Sumbar', 'fitamayo23@gmail.com', '', '', '$2y$10$ak4HcKHzk2OH2P9x1QMfUeUfX25.rZb4E7eZW9Nw8DlKj7VqKEGXK', 1, 0, 'rAC4o9TSRlwGuM2Z', '2018-12-29 12:13:12', '0000-00-00 00:00:00', '', '', 0),
(131, 'Dina21', 'Dina ramadhani ', 'ramadhanidina05@gmail.com', '', '', '$2y$10$wdvn2cdUXebYuh4lIiCXOuA7/OYhE.GgZx.6mVYnAGvGR.huXofc6', 0, 0, 'dXnGbtTj4gcBax76', '2019-01-05 07:40:43', '0000-00-00 00:00:00', '', '', 0),
(132, 'elvissuhandi', 'Elvis suhandi', 'elvissuhandi@gmail.com', '', '', '$2y$10$03jLzHUMK83CEnAoRjLCG.fe9mccq93xmIyouOWK.gWp3h8KpgWUO', 1, 0, 'y1w7zPSxr4XVWmpk', '2019-01-05 08:11:55', '0000-00-00 00:00:00', '', '', 0),
(133, 'Rizko', 'Rizko Ahmad Mubarok', 'rizkohmd@gmail.com', '', '', '$2y$10$cJsGjJ2b.yqhT3b6bRIOiO7tPHVYezy2itlQ9l4X8Qx3cjnPeTxIe', 0, 0, 'tfHnSENpUBsa8doz', '2019-01-11 02:14:55', '0000-00-00 00:00:00', '', '', 0),
(134, 'SHANIA', 'Shanianurastina', 'Nurastina_shania@yahoo.com', '', '', '$2y$10$RSvzKsm2FaG4QrbORRn0L.o0htpiNWOkWOwCKsOczjY1BPnJ7n2T.', 1, 0, 'q8drsib3RCDzNpZO', '2019-01-11 02:40:02', '0000-00-00 00:00:00', '', '', 0),
(135, 'janiesaaa', 'Janisa Fazura', 'janisafazura@gmail.com', '', '', '$2y$10$Ai5TobHeVlXdXnLKHJ4hzOG0R5qs/mktlKaOHbq.re9HhYBhCZQW6', 1, 0, 'bYvWL2Cxf06isSVe', '2019-01-11 02:41:59', '0000-00-00 00:00:00', '', '', 0),
(136, 'Farras', 'Farrasdzakwan', 'farrasdz16@gmail.com', '', '', '$2y$10$08yY3YMNMHySn.uR97CTFuq66JNlheo8nFTOEkRNmm4Vz.KtutyxO', 1, 0, '7XYbTKaqIO2WRBCr', '2019-01-11 02:50:21', '0000-00-00 00:00:00', '', '', 0),
(137, 'nenah', 'Nena haniyah', 'nenaahaniyah23@gmail.com', '', '', '$2y$10$D54300KY6F0aXr.yR33nb.SlAA30n7BgWekVOB/LT5mfsUHovTMra', 1, 0, 'dyjvZnHI8bASJpF0', '2019-01-11 02:56:43', '0000-00-00 00:00:00', '', '', 0),
(138, 'sitinurulhidayah', 'sitinurulhidayah', 'sitinurulhidayah376@gmail.com', '', '', '$2y$10$Vr4E8oS2nyMR3LoDuncosOtBy8DV7vN59Bg6VnyDZqXXgQV5xXADS', 1, 0, '2JbHL0BV8w6v9lpx', '2019-01-11 03:07:33', '0000-00-00 00:00:00', '', '', 0),
(139, 'Demik', 'Emeliya ', 'abirahsayyidah@gmail.com', '', '', '$2y$10$0UOYCVwdJ8uLlsXiPsiKPOs/Kw4qKfv7thM4eSdYbIe.o0lp/WTX.', 1, 0, 'mQA7IgzMhTE9KVki', '2019-01-11 03:14:17', '0000-00-00 00:00:00', '', '', 0),
(140, 'cindymeilinaa', 'Cindy meilina', 'cindymeilina944@icloud.com', '', '', '$2y$10$n4dcQ0P0xHgi1sSyrZCQFujtWaTziJIWzKDcd7jiLcZQPg4//wbk2', 1, 0, 'tyR5NpjTALMHVq3S', '2019-01-11 03:21:42', '0000-00-00 00:00:00', '', '', 0),
(141, 'dhafaa', 'Dafa firgana', 'dfirgana@yahoo.co.id', '', '', '$2y$10$ZSxlt2W.CPGjPQb8OAInwO2XYorqNEKZ.VoVAj4dC7HFOnwhBE0Ai', 0, 0, '32sM8yKjSQ1TLxYo', '2019-01-11 03:25:29', '0000-00-00 00:00:00', '', '', 0),
(142, 'dafaa', 'Dhafa firgana', 'dfirgana@gmail.com', '', '', '$2y$10$uq8nnIPL7mhapAaYug2Kw..wV7UHLSsz2Cnos6jgh08VhdlHeOQ56', 1, 0, 'guTov6xCbVXnL4KJ', '2019-01-11 03:28:08', '0000-00-00 00:00:00', '', '', 0),
(143, 'dzikri2013', 'ken master', 'dzikri2013@gmail.com', '', '', '$2y$10$vidoqacjRyg4LCWy1Ig3QunDHQmuesPWX76ifsUf1wIZ1JTg.Zzi6', 1, 0, 'rSiE6WoGsycMkBuV', '2019-01-11 11:59:57', '0000-00-00 00:00:00', '', '', 0),
(144, 'Luky', 'Luky Ramadhan', 'nitousocid@gmail.com', '', '', '$2y$10$YvBzYovgfGo8DRH8TIbKYO.UsAAepr82XcwSpqPmQ0CKqdeiKiR7y', 1, 0, 'M8QkC0bKgfypVtLZ', '2019-01-12 05:41:24', '0000-00-00 00:00:00', '', '', 0),
(145, 'tridyana', 'Tri DianaWulandari', 'tridyana91@gmail.com', '', '', '$2y$10$frKo4a0fKhBTVpel08BSIOq9v801vyZVvUOaqZlWmSFJLywOhiSMS', 1, 0, 'Jir8p71MLeuATsoZ', '2019-01-13 03:21:08', '0000-00-00 00:00:00', '', '', 0),
(146, 'sawadika', 'Bhirgita', 'nurfa.alsyie@gmail.com', '', '', '$2y$10$imwxx0zhUZ0j0m7idHGZiuEfmvLRvPRYYT3NcmJ7z/38u1IZG0JgK', 0, 0, 'TJEqCi2AOYbhzMoe', '2019-01-14 05:16:56', '0000-00-00 00:00:00', '', '', 0),
(147, 'andi', 'Andi alp', 'irunmadau@gmail.com', '', '', '$2y$10$bzM9pBQ8D3RKcV4wpYhAdetHDWQpDyfiugbAxFYdu0NZNgSEpUN0u', 0, 0, 'o5JDRBNarzThycs3', '2019-01-15 12:11:01', '0000-00-00 00:00:00', '', '', 0),
(149, 'fefefefe', 'fefefe,', 'fefefe@gmail.com', '', '', '$2y$10$26GG2B4FauugK.sZ/lrqqeX/JdHOzqo.X3SqmDUgfCCvVczLoI6GK', 0, 0, 'yEV6ZsuvKJr1jhRS', '2019-01-25 09:41:52', '0000-00-00 00:00:00', '', '', 0),
(150, 'fefefefefe', 'fefefe,,,,', 'efefefefefe@gmail.com', '', '', '$2y$10$f/vNP3YFwjkc1lu1xvOayeua60BYWhnMdAN5QzhfiYvQLlzyagZhe', 0, 0, '6JOCbh42qnWpszTK', '2019-01-25 09:42:30', '0000-00-00 00:00:00', '', '', 0),
(151, 'lalakemana', 'Beemons', 'beemons123@gmail.com', '', '', '$2y$10$n0KpzkJnF3f0ueXWuNFNgusqDwAbyYX/CclKpqHz3x3Ij2578yHL.', 0, 0, 'TH7REuk4vn83N59V', '2019-01-28 01:49:05', '0000-00-00 00:00:00', '', '', 0),
(152, 'dev', 'developer', 'dev@developer.com', '', '', '$2y$10$V2aB2tv1HbJ5iZv7H8n5Yu0GRrbqQL.rgS6QZVI9G1bCnxIiSrzYG', 1, 0, '3Viro2qCAJRIOBGb', '2019-02-13 07:52:48', '0000-00-00 00:00:00', '', '', 0),
(153, 'dev2', 'developers', 'dev2@developer.com', '', '', '$2y$10$hq5obvnw6eP3CvBqrhUzyetqt9gEiyclvFeKXit2yAeL6OeAHti6S', 1, 0, 'nuS8UHZcKO5o0QTN', '2019-02-13 08:12:02', '0000-00-00 00:00:00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `thumbnail_file` varchar(255) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `description`, `user_id`, `nama_file`, `thumbnail_file`, `ukuran_file`, `tipe_file`, `created_at`, `updated_at`) VALUES
(13, 'Video Confide Pertama', 'ZAZA', 2, 'IF208__video.mp4', 'IMG-20181007-WA0012.jpg', 770.01, 'video/mp4', '2019-02-20 19:45:09', '2019-02-20 12:45:09'),
(14, 'ashiapp', 'Ashiaaaaaaaap', 1, 'ikon.mp4', 'Logo_v3.png', 25893.33, 'video/mp4', '2019-02-26 10:54:14', '2019-02-26 03:54:14'),
(15, 'hvjhbjbjbjb', 'xcxasd', 1, 'ikon2.mp4', '_temp_15471260417341.jpg', 25893.33, 'video/mp4', '2019-02-26 13:19:06', '2019-02-26 06:19:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `sent_to` (`send_to`),
  ADD KEY `send_by` (`send_by`);

--
-- Indexes for table `comment_confide`
--
ALTER TABLE `comment_confide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_video`
--
ALTER TABLE `comment_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confide`
--
ALTER TABLE `confide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `comment_confide`
--
ALTER TABLE `comment_confide`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment_video`
--
ALTER TABLE `comment_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `confide`
--
ALTER TABLE `confide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
