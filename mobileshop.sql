-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2023 at 10:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int NOT NULL,
  `u_id` int DEFAULT NULL,
  `customer_info` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile_info` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recommendator_info` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` int DEFAULT '1',
  `other` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `u_id`, `customer_info`, `mobile_info`, `recommendator_info`, `type`, `other`, `date`) VALUES
(114, 1, '{\"name\":\"Raihan Miraj\",\"phone\":\"01797482479\",\"nid\":\"12345678987\",\"bdris\":\"12345676789\",\"address\":\"402, cumilla\",\"birthdate\":\"\",\"email\":\"rsnmiraj@gmail.com\",\"attached\":[\"CN0415_01_1024.png\"]}', '[{\"m_id\": 0, \"m_ram\": \"4\", \"m_rom\": \"64\", \"m_sold\": 1, \"m_imei1\": \"2345645\", \"m_imei2\": \"5465\", \"m_price\": \"15000\", \"m_mobile\": \"Poco x2\"}]', '{\"name\":\"\",\"phone\":\"\",\"address\":\"\"}', 1, NULL, '2023-04-07 10:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `moneyspent`
--

CREATE TABLE `moneyspent` (
  `id` int NOT NULL,
  `u_id` int NOT NULL,
  `u_name` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reason` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `taka` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int NOT NULL,
  `u_id` int DEFAULT NULL,
  `customer_info` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile_info` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recommendator_info` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` int DEFAULT '2',
  `other` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `u_id`, `customer_info`, `mobile_info`, `recommendator_info`, `type`, `other`, `date`) VALUES
(94, 1, '{\"name\":\"Mahim\",\"phone\":\"01797482479\",\"address\":\"402, cumilla\"}', '[{\"m_id\":0,\"m_mobile\":\"Poco x2\",\"m_imei1\":\"2345645\",\"m_imei2\":\"5465\",\"m_ram\":\"4\",\"m_rom\":\"64\",\"m_price\":\"15000\",\"m_sold\":1}]', '{\"name\":\"\",\"phone\":\"\",\"address\":\"\"}', 2, '{\"m_condition\":{\"condition\":\"1\",\"warrenty\":\"1\",\"warrentydays\":365},\"p_details\":{\"pay\":\"2\",\"p_money\":\"15000\"}}', '2023-04-07 10:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'logo', '1625942040.png'),
(2, 'url', 'http://localhost/mblshop/'),
(3, 'title', 'MobileShop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int NOT NULL,
  `u_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `u_email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `u_pass` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `is_admin` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_pass`, `is_admin`) VALUES
(1, 'Raihan Miraj', 'user@gmail.com', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moneyspent`
--
ALTER TABLE `moneyspent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `moneyspent`
--
ALTER TABLE `moneyspent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
