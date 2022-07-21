-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 10:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kimheng`
--

-- --------------------------------------------------------

--
-- Table structure for table `meyy`
--

CREATE TABLE `meyy` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meyy`
--

INSERT INTO `meyy` (`id`, `Name`, `email`, `mobile`, `password`) VALUES
(5, 'Nita', 'Nita@gamil.com', '0963510153', 'Ni@168'),
(6, 'mey@12', 'tou_kimheng@gmail.com', '0975257222@12', 'mey@12'),
(20, 'tou kimheng', 'kimhengtouitc38@gmail.com', '0712813656', '22222222222222222'),
(22, 'Menghouy', 'menghouyhor@gamil.com', '098252624', 'Houy123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meyy`
--
ALTER TABLE `meyy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meyy`
--
ALTER TABLE `meyy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
