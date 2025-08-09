-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2025 at 09:20 AM
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
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`) VALUES
(1, 'jinse', '123');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
