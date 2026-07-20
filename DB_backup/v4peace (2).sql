-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2025 at 08:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v4peace`
--

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gen_days`
--

CREATE TABLE `gen_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gen_timings`
--

CREATE TABLE `gen_timings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2025_02_08_050156_create_counsellors_table', 1),
(4, '2025_07_05_131901_create_gen_timings_table', 1),
(5, '2025_07_06_044641_create_gen_days_table', 1),
(6, '2025_08_01_132330_create_price_settings_table', 1),
(7, '2025_09_27_093138_create_payments_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `razorpay_payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `email`, `phone`, `amount`, `razorpay_payment_id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rijo', 'rijo.p@caxita.com', '6360880522', '30.00', NULL, 'order_RMibNBbJ9V7BJ8', 0, '2025-09-27 12:34:49', '2025-09-27 12:34:49'),
(2, 'rijo', 'rijo.p@caxita.com', '6360880522', '30.00', 'pay_RMieWlc3DB5VDz', 'order_RMid0Grko6HMZS', 1, '2025-09-27 12:36:20', '2025-09-27 12:38:24'),
(3, 'rijo', 'rijo.p@caxita.com', '6360880522', '30.00', NULL, 'order_RMiuPI0dORrhMb', 0, '2025-09-27 12:52:48', '2025-09-27 12:52:48'),
(4, 'rijo', 'rijo.p@caxita.com', '6360880522', '45.00', 'pay_RMj0ZAvvvZY3f5', 'order_RMiyre6IQAzc0g', 1, '2025-09-27 12:57:02', '2025-09-27 12:58:58'),
(5, 'rijo', 'rijo.p@caxita.com', '6360880522', '30.00', 'pay_RMjBG5eBjLk2T4', 'order_RMjAUmHfHfVZPq', 1, '2025-09-27 13:08:02', '2025-09-27 13:09:05'),
(6, 'john', 'john@cax.com', '9995076282', '60.00', 'pay_RMjSLcc2dVAvBb', 'order_RMjQNicoUBjBHL', 1, '2025-09-27 13:23:05', '2025-09-27 13:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `price_settings`
--

CREATE TABLE `price_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counsellors`
--

CREATE TABLE `tbl_counsellors` (
  `counsellor_id` int(20) NOT NULL,
  `counsellor_name` varchar(20) NOT NULL,
  `counsellor_qualification` varchar(30) NOT NULL,
  `insta_link` varchar(30) NOT NULL,
  `fb_link` varchar(30) NOT NULL,
  `twitter_link` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_counsellors`
--

INSERT INTO `tbl_counsellors` (`counsellor_id`, `counsellor_name`, `counsellor_qualification`, `insta_link`, `fb_link`, `twitter_link`, `photo`) VALUES
(1, 'jinse', 'MBA', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'counsellors/PNzB0Lxsd9J5NezsOuj2ujxIRXXvYcVejCifnN9L.png'),
(2, 'jinse dem', 'MBA', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'counsellors/TPVideCqExkZirKfyo8XqpdRJr8n7M0uQkXPEMEM.png'),
(3, 'jinse demd', 'MBA', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'counsellors/5FGTuMo9mo5B4t0hYxt5SClspJ34KXw65fpWv84I.png'),
(4, 'rijo', 'BSC', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'counsellors/PJMtoqDIHGjq1YANbJUZIi15hvZIyGnfc3wKtjSt.png'),
(5, 'rijog', 'MBA', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'counsellors/Qkv74djtlzNEtGunCfgnkprew2mYjZ9nziSsMF4i.png'),
(6, 'jinse5', 'MBA', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'counsellors/uRgVRfahM4CBlfmWBGJTIuTRUqFcOW0wOwduuTxW.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gen_day`
--

CREATE TABLE `tbl_gen_day` (
  `gen_day_id` int(20) NOT NULL,
  `gen_day_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gen_day`
--

INSERT INTO `tbl_gen_day` (`gen_day_id`, `gen_day_name`) VALUES
(1, 'Sun'),
(2, 'Mon'),
(3, 'Tue'),
(4, 'Wed'),
(5, 'Thu'),
(6, 'Fri'),
(7, 'Sat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gen_timing`
--

CREATE TABLE `tbl_gen_timing` (
  `gen_time_id` int(10) NOT NULL,
  `gen_day_id` int(10) NOT NULL,
  `counsellor_id` int(10) NOT NULL,
  `gen_date` varchar(20) NOT NULL,
  `gen_day_time` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gen_timing`
--

INSERT INTO `tbl_gen_timing` (`gen_time_id`, `gen_day_id`, `counsellor_id`, `gen_date`, `gen_day_time`) VALUES
(1, 1, 1, '0', '09:00 AM - 09:30 AM, 09:30 AM - 10:00 AM, 10:00 AM - 10:30 AM, 10:30 AM - 11:00 AM, 11:00 AM - 11:30 AM, 11:30 AM - 12:00 PM, 02:00 PM - 02:30 PM, 02:30 PM - 03:00 PM, 03:00 PM - 03:30 PM, 03:30 PM - 04:00 PM, 04:00 PM - 04:30 PM, 04:30 PM - 05:00 PM'),
(2, 2, 1, '0', '09:00 AM - 10:00 AM, 10:00 AM - 11:00 AM, 11:00 AM - 12:00 PM'),
(3, 3, 1, '0', '09:00 AM - 09:30 AM, 09:30 AM - 10:00 AM, 10:00 AM - 10:30 AM, 10:30 AM - 11:00 AM, 11:00 AM - 11:30 AM, 11:30 AM - 12:00 PM, 02:00 PM - 02:30 PM, 02:30 PM - 03:00 PM, 03:00 PM - 03:30 PM, 03:30 PM - 04:00 PM, 04:00 PM - 04:30 PM, 04:30 PM - 05:00 PM'),
(4, 4, 1, '0', '09:00 AM - 09:30 AM, 09:30 AM - 10:00 AM, 10:00 AM - 10:30 AM, 10:30 AM - 11:00 AM, 11:00 AM - 11:30 AM, 11:30 AM - 12:00 PM, 02:00 PM - 02:30 PM, 02:30 PM - 03:00 PM, 03:00 PM - 03:30 PM, 03:30 PM - 04:00 PM, 04:00 PM - 04:30 PM, 04:30 PM - 05:00 PM'),
(5, 5, 1, '0', '09:00 AM - 09:30 AM, 09:30 AM - 10:00 AM, 10:00 AM - 10:30 AM, 10:30 AM - 11:00 AM, 11:00 AM - 11:30 AM, 11:30 AM - 12:00 PM, 02:00 PM - 02:30 PM, 02:30 PM - 03:00 PM, 03:00 PM - 03:30 PM, 03:30 PM - 04:00 PM, 04:00 PM - 04:30 PM, 04:30 PM - 05:00 PM'),
(6, 6, 1, '0', '09:00 AM - 09:30 AM, 09:30 AM - 10:00 AM, 10:00 AM - 10:30 AM, 10:30 AM - 11:00 AM, 11:00 AM - 11:30 AM, 11:30 AM - 12:00 PM, 02:00 PM - 02:30 PM, 02:30 PM - 03:00 PM, 03:00 PM - 03:30 PM, 03:30 PM - 04:00 PM, 04:00 PM - 04:30 PM, 04:30 PM - 05:00 PM'),
(7, 7, 1, '0', '09:00 AM - 09:30 AM, 09:30 AM - 10:00 AM, 10:00 AM - 10:30 AM, 10:30 AM - 11:00 AM, 11:00 AM - 11:30 AM, 11:30 AM - 12:00 PM, 02:00 PM - 02:30 PM, 02:30 PM - 03:00 PM, 03:00 PM - 03:30 PM, 03:30 PM - 04:00 PM, 04:00 PM - 04:30 PM, 04:30 PM - 05:00 PM'),
(8, 0, 1, '28-07-2025', '09:00 AM - 10:00 AM, 10:00 AM - 11:00 AM, 11:00 AM - 12:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price_settings`
--

CREATE TABLE `tbl_price_settings` (
  `price_id` int(20) NOT NULL,
  `councellor_id` int(20) NOT NULL,
  `price_per_hour` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_price_settings`
--

INSERT INTO `tbl_price_settings` (`price_id`, `councellor_id`, `price_per_hour`) VALUES
(1, 1, 30),
(2, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`) VALUES
(1, 'amonahan', '$2y$10$Ts69UndeArhmHQPAAde6LedHstlcBNNLJ0yXihz7Yq/REHSbERR0a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gen_days`
--
ALTER TABLE `gen_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gen_timings`
--
ALTER TABLE `gen_timings`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_settings`
--
ALTER TABLE `price_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_counsellors`
--
ALTER TABLE `tbl_counsellors`
  ADD PRIMARY KEY (`counsellor_id`);

--
-- Indexes for table `tbl_gen_day`
--
ALTER TABLE `tbl_gen_day`
  ADD PRIMARY KEY (`gen_day_id`);

--
-- Indexes for table `tbl_gen_timing`
--
ALTER TABLE `tbl_gen_timing`
  ADD PRIMARY KEY (`gen_time_id`);

--
-- Indexes for table `tbl_price_settings`
--
ALTER TABLE `tbl_price_settings`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gen_days`
--
ALTER TABLE `gen_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gen_timings`
--
ALTER TABLE `gen_timings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `price_settings`
--
ALTER TABLE `price_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_counsellors`
--
ALTER TABLE `tbl_counsellors`
  MODIFY `counsellor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gen_day`
--
ALTER TABLE `tbl_gen_day`
  MODIFY `gen_day_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_gen_timing`
--
ALTER TABLE `tbl_gen_timing`
  MODIFY `gen_time_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_price_settings`
--
ALTER TABLE `tbl_price_settings`
  MODIFY `price_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
