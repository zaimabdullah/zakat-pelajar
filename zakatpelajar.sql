-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 08:18 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatpelajar`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_04_113119_create_posts_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `pelajar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_matrik` int(20) NOT NULL,
  `fakulti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kod_program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgpa` double(8,2) NOT NULL,
  `penjaga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` double(8,2) NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `pelajar`, `no_telefon`, `no_matrik`, `fakulti`, `kod_program`, `cgpa`, `penjaga`, `gaji`, `tanggungan`, `created_at`, `updated_at`) VALUES
(3, 'husni zaim', '0142960368', 2015835876, 'FSKM', 'cs110', 3.43, 'abdullah', 2000.00, 5, '2018-08-04 06:12:03', '2018-08-04 06:12:03'),
(4, 'husni zaim', '0142960368', 2015835876, 'FSKM', 'cs110', 3.43, 'abdullah', 2000.00, 5, '2018-08-04 06:12:03', '2018-08-04 06:12:03'),
(5, 'arif fikri', '0199788051', 2015886430, 'FSKM', 'cs143', 4.00, 'husni', 3500.00, 6, '2018-08-04 07:26:30', '2018-08-04 07:26:30'),
(6, 'husni zaim', '0142960368', 2015835876, 'FSKM', 'cs110', 3.43, 'abdullah', 2000.00, 5, '2018-08-04 06:12:03', '2018-08-04 06:12:03'),
(7, 'husni zaim', '0142960368', 2015835876, 'FSKM', 'cs110', 3.43, 'abdullah', 2000.00, 5, '2018-08-04 06:12:03', '2018-08-04 06:12:03'),
(8, 'arif fikri', '0199788051', 2015886430, 'FSKM', 'cs143', 4.00, 'husni', 3500.00, 6, '2018-08-04 07:26:30', '2018-08-04 07:26:30'),
(9, 'husni zaim', '0142960368', 2015835876, 'FSKM', 'cs110', 3.43, 'abdullah', 2000.00, 5, '2018-08-04 06:12:03', '2018-08-04 06:12:03'),
(10, 'husni zaim', '0142960368', 2015835876, 'FSKM', 'cs110', 3.43, 'abdullah', 2000.00, 5, '2018-08-04 06:12:03', '2018-08-04 06:12:03'),
(11, 'arif fikri', '0199788051', 2015886430, 'FSKM', 'cs143', 4.00, 'husni', 3500.00, 6, '2018-08-04 07:26:30', '2018-08-04 07:26:30'),
(12, 'husni zaim', '0142960368', 2015835876, 'FSKM', 'cs110', 3.43, 'abdullah', 2000.00, 5, '2018-08-04 06:12:03', '2018-08-04 06:12:03'),
(13, 'taqiyuddin', '011199999', 2015258734, 'FSS', 'ad112', 3.25, 'zaim', 30000.00, 3, '2018-08-06 19:39:27', '2018-08-06 19:39:27'),
(14, 'shahril', '0122293939', 2015673829, 'FSKM', 'cs110', 3.67, 'arif', 42000.00, 3, '2018-08-06 19:40:20', '2018-08-06 19:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
