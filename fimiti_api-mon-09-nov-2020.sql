-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2020 at 09:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fimiti_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_access`
--

CREATE TABLE `api_access` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `api_token` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_access`
--

INSERT INTO `api_access` (`id`, `name`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'flamez 1', 'IsIwnQR3Fm7qGyGN8D8wDjj4I9ZA5eCr1GnIpZCKqIKetfMofwyUOASv1KM8', '2020-10-16 10:08:07', '2020-10-16 10:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_orders`
--

CREATE TABLE `dispatch_orders` (
  `id` int(11) NOT NULL,
  `ref` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `courier` varchar(200) NOT NULL,
  `pickup_info` longtext DEFAULT NULL,
  `delivery_info` longtext DEFAULT NULL,
  `package_info` text DEFAULT NULL,
  `timeline` longtext DEFAULT NULL,
  `pricing` longtext DEFAULT NULL,
  `rider_info` longtext DEFAULT NULL,
  `payment_info` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispatch_orders`
--

INSERT INTO `dispatch_orders` (`id`, `ref`, `user_id`, `courier`, `pickup_info`, `delivery_info`, `package_info`, `timeline`, `pricing`, `rider_info`, `payment_info`, `created_at`, `updated_at`) VALUES
(3, NULL, 3, 'bike', '{\"zone\":\"zone1\",\"location\":\"apata\"}', '{\"zone\":\"zone 3\",\"location\":\"bodija\"}', NULL, NULL, NULL, NULL, NULL, '2020-11-04 21:28:03', '2020-11-04 21:28:03'),
(4, NULL, 3, 'bike', NULL, '{\"zone\":\"zone 3\",\"location\":\"bodija\"}', NULL, NULL, NULL, NULL, NULL, '2020-11-04 21:32:55', '2020-11-04 21:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `food_vendors`
--

CREATE TABLE `food_vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `zone` varchar(50) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `contact` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `regions` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `regions`, `created_at`, `updated_at`) VALUES
(9, 'zone 1', '[\"bodija\",\"secretariat\",\"agodi\",\"ikolaba\",\"sango\",\"u.i\",\"mokola\",\"samonda\",\"apete\",\"ijokodo\",\"agbaje\",\"yemetu\",\"total garden\",\"gate\",\"orita-bashorun\"]', '2020-11-04 03:28:31', '2020-11-04 03:28:31'),
(10, 'zone 2', '[\"dugbe\",\"ogunpa\",\"aleshinloye\",\"eleyele\",\"jericho\",\"nihort\"]', '2020-11-04 03:29:22', '2020-11-04 03:29:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_access`
--
ALTER TABLE `api_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatch_orders`
--
ALTER TABLE `dispatch_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_vendors`
--
ALTER TABLE `food_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_access`
--
ALTER TABLE `api_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispatch_orders`
--
ALTER TABLE `dispatch_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food_vendors`
--
ALTER TABLE `food_vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
