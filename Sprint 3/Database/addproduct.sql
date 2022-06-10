-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 05:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

--
-- Database: `addproduct`
--

DROP DATABASE IF EXISTS `addproduct`;

CREATE DATABASE `addproduct`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `image`, `product_name`, `price`) VALUES
(68, '1654309367-7.png', 'Pocky Matcha', 90),
(69, '1654309487-11.png', 'Miso Ramen', 120),
(71, '1654312920-6.png', 'Banana Treats', 1000),
(72, '1654312978-8.png', 'Glico Crackers', 80),
(73, '1654312997-1.png', 'Meiji Matcha', 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;
