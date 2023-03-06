-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 مارس 2023 الساعة 00:29
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www`
--

-- --------------------------------------------------------

--
-- بنية الجدول `www`
--

CREATE TABLE `www` (
  `id` int(11) NOT NULL,
  `FirstName` char(10) NOT NULL,
  `LastName` char(10) NOT NULL,
  `Email` char(250) NOT NULL,
  `Phone` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `www`
--

INSERT INTO `www` (`id`, `FirstName`, `LastName`, `Email`, `Phone`) VALUES
(22, 'ahmed', 'saeed', 'ahmedsaeed1038@gmail.com', '01125320465');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `www`
--
ALTER TABLE `www`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `www`
--
ALTER TABLE `www`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
