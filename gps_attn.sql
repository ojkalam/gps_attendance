-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 08:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gps_attn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adminnistrator', 'admin@gmail.com', '$2y$10$GWb7X/DGta.0i65d4.sH/ekYkS2hojinWoYHCqd/EvKVEog21vR1a', '82wvR9I62e01zd9h5EKpWd8gLx5UnwoZjVdtUbVosXk3OxSyZMqaDUgAKAJm', '2018-03-29 15:53:21', '2018-03-29 15:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assigned_tasks`
--

CREATE TABLE `assigned_tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `active` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assigned_tasks`
--

INSERT INTO `assigned_tasks` (`id`, `user_id`, `batch_id`, `schedule_date`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-03-30', 1, NULL, '2018-03-31 03:33:58'),
(2, 1, 2, '2018-03-21', 1, NULL, '2018-03-31 00:49:23'),
(8, 1, 1, '2018-03-31', 0, '2018-03-30 19:26:40', '2018-07-24 11:33:20'),
(9, 1, 3, '2018-03-31', 0, '2018-03-31 00:13:44', '2018-07-24 11:29:43'),
(10, 1, 3, '2018-03-31', 0, '2018-03-31 03:36:58', '2018-03-31 03:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `attendee` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latlong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_id`, `batch_id`, `attendee`, `location`, `latlong`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50, 'Iubat Rd, Dhaka', '90.5488878,24.56487987', NULL, NULL),
(2, 2, 2, 40, 'Bamnettek Rd, Dhaka', '92.5488878,25.56487987', NULL, NULL),
(3, 1, 1, 10, 'Dhaka', '78989,878', '2018-03-29 03:21:17', '2018-03-29 03:21:17'),
(4, 1, 1, 10, 'Dhaka', '78989,878', '2018-03-29 09:27:23', '2018-03-29 09:27:23'),
(5, 1, 2, 12, 'Dhaka', '78989,878', '2018-03-29 12:17:56', '2018-03-29 12:17:56'),
(6, 1, 1, 12, 'Dhaka', '78989,878', '2018-03-29 12:18:44', '2018-03-29 12:18:44'),
(7, 1, 2, 13, 'Dhaka', '78989,878', '2018-03-29 12:19:19', '2018-03-29 12:19:19'),
(8, 1, 2, 30, 'Dhaka', '78989,878', '2018-03-29 13:27:52', '2018-03-29 13:27:52'),
(9, 1, 1, 78, 'Bamnartek Rd, Dhaka 1230, Bangladesh', '23.8863894,90.3806309', '2018-03-29 13:46:05', '2018-03-29 13:46:05'),
(10, 1, 1, 20, 'Bamnartek Rd, Dhaka 1230, Bangladesh', '23.8863898,90.38067129999999', '2018-03-29 13:49:50', '2018-03-29 13:49:50'),
(11, 1, 2, 20, 'Bamnartek Rd, Dhaka 1230, Bangladesh', '23.886397799999997,90.3806616', '2018-03-29 14:24:56', '2018-03-29 14:24:56'),
(12, 1, 2, 10, 'Bamnartek Rd, Dhaka 1230, Bangladesh', '23.8863798,90.3806781', '2018-03-29 14:27:51', '2018-03-29 14:27:51'),
(13, 1, 1, 50, 'Bamnartek Rd, Dhaka 1230, Bangladesh', '23.8863594,90.3806774', '2018-03-30 18:12:18', '2018-03-30 18:12:18'),
(14, 1, 1, 30, 'Iubat Road, Dhaka 1230, Bangladesh', '23.8877167,90.3889714', '2018-03-30 22:35:05', '2018-03-30 22:35:05'),
(15, 1, 1, 20, 'Iubat Road, Dhaka 1230, Bangladesh', '23.8877167,90.3889714', '2018-03-30 22:38:34', '2018-03-30 22:38:34'),
(16, 1, 1, 20, 'IUBAT, Dhaka 1230, Bangladesh', '23.888264,90.39058170000001', '2018-03-30 23:21:44', '2018-03-30 23:21:44'),
(17, 1, 1, 20, 'IUBAT, Dhaka 1230, Bangladesh', '23.888340499999998,90.39066439999999', '2018-03-31 00:18:13', '2018-03-31 00:18:13'),
(18, 1, 3, 30, 'IUBAT, Dhaka 1230, Bangladesh', '23.888291,90.39065169999999', '2018-03-31 00:41:43', '2018-03-31 00:41:43'),
(19, 1, 2, 55, 'IUBAT, Dhaka 1230, Bangladesh', '23.8883041,90.3906757', '2018-03-31 00:49:23', '2018-03-31 00:49:23'),
(20, 1, 1, 20, 'IUBAT, Dhaka 1230, Bangladesh', '23.8883701,90.39068809999999', '2018-03-31 03:33:58', '2018-03-31 03:33:58'),
(21, 1, 3, 55, 'Bamnartek Rd, Dhaka 1230, Bangladesh', '23.8863622,90.3807528', '2018-07-24 11:29:45', '2018-07-24 11:29:45'),
(22, 1, 1, 30, 'Bamnartek Rd, Dhaka 1230, Bangladesh', '23.886353999999997,90.38074830000001', '2018-07-24 11:33:20', '2018-07-24 11:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `subject_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'top-up-spring-2018', NULL, NULL),
(2, 2, 'top-up-java-2018', NULL, NULL),
(3, 4, 'top-up-dot-net-2018', '2018-03-29 19:16:16', '2018-03-29 19:16:16'),
(4, 4, 'top-up-dot-net-2017', '2018-03-29 19:17:48', '2018-03-29 19:17:48'),
(5, 4, 'Md Niamul Haque', '2018-03-30 19:27:39', '2018-03-30 19:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2018_03_01_045529_create_attendances_table', 1),
(28, '2018_03_01_050416_create_batches_table', 1),
(29, '2018_03_01_051705_create_subjects_table', 1),
(30, '2018_03_20_050127_create_assigned_tasks_table', 1),
(33, '2018_03_29_213736_create_admins_table', 2),
(34, '2018_03_29_213737_create_admin_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'php', NULL, NULL),
(2, 'java', NULL, NULL),
(3, 'Tipu', '2018-03-29 18:50:39', '2018-03-29 18:50:39'),
(4, 'Dot net', '2018-03-29 18:54:00', '2018-03-29 18:54:00'),
(5, 'Big data', '2018-03-29 18:56:07', '2018-03-29 18:56:07'),
(6, 'BIg Data', '2018-03-30 18:33:42', '2018-03-30 18:33:42'),
(7, 'php programming', '2018-03-30 19:43:18', '2018-03-30 19:43:18'),
(8, 'Android', '2018-03-30 19:43:38', '2018-03-30 19:43:38'),
(9, 'java + php', '2018-03-30 19:43:55', '2018-03-30 19:43:55'),
(10, 'saad', '2018-03-30 22:36:32', '2018-03-30 22:36:32'),
(11, 'adsf', '2018-03-31 00:43:11', '2018-03-31 00:43:11'),
(12, 'PHP + Java+ dot net', '2018-03-31 03:37:34', '2018-03-31 03:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `dob`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tipu Sultan', 'tipu@gmail.com', '$2y$10$NFvhl8t7hXwPr3yv8fXP3OunxgrdoTCIHjusTkbolTpnYVwsGuuYu', '1995-10-28', '768', 'Uttara, Dhaka-1230', 'akj8RZOzrr9tE4njfms0Qlf1SOOxq0XJqfVlpIu4O5PwMKmeY5QJp3yf1WOX', NULL, '2018-03-31 00:18:53'),
(2, 'Abul Kalam', 'kalam@gmail.com', '$2y$10$FLXDiKaPJIsFlW27yQD3sOv/2OduL5K.nwWM84Dyv04OASBJxe6PC', NULL, NULL, NULL, '9lbeVDy0wxRQoLpmpJrXthVdUF0yZEWM3D1f4p73252JXBOQWuqlTrPNG6Ea', NULL, NULL);

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
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indexes for table `assigned_tasks`
--
ALTER TABLE `assigned_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
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
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assigned_tasks`
--
ALTER TABLE `assigned_tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
