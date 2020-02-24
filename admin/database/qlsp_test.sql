-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 05:38 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlsp_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `qlsp`
--

CREATE TABLE IF NOT EXISTS `qlsp` (
`id` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qlsp`
--

INSERT INTO `qlsp` (`id`, `tensp`, `loaisp`, `anh`, `gia`) VALUES
(3, 'lubricants', 'horny product', 'c3.PNG', '100$'),
(4, 'dildos', 'maletoys', 'c1.PNG', '240$'),
(9, 'penish ring', 'female toy', 'c2.PNG', '150$'),
(11, 'masturbator', 'toys', 'c5.PNG', '240$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qlsp`
--
ALTER TABLE `qlsp`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qlsp`
--
ALTER TABLE `qlsp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
