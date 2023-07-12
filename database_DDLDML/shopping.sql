-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 09:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomraccoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `is_checked` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `name`, `price`, `description`, `is_checked`, `created_at`, `deleted_at`) VALUES
(1, 'iPhone 14', '1100.99', 'The latest iPhone with advanced features and powerful performance.', 0, '2023-07-12 18:11:45', NULL),
(2, 'MacBook Pro', '2999.99', 'A high-performance laptop for professionals with stunning Retina display.', 0, '2023-07-12 18:11:46', NULL),
(3, 'AirPods Pro', '249.99', 'Wireless earbuds with active noise cancellation and immersive sound.', 0, '2023-07-12 18:11:46', NULL),
(4, 'iPad Pro', '799.99', 'A powerful tablet with a Liquid Retina display and support for Apple Pencil.', 0, '2023-07-12 18:11:47', NULL),
(5, 'Apple Watch Series 8', '430.99', 'The latest smartwatch with advanced health and fitness tracking capabilities.', 0, '2023-07-12 18:11:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
