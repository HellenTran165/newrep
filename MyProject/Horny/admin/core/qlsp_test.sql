-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 04:37 PM
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
    `id` INT(11) NOT NULL,
    `tensp` VARCHAR(255) COLLATE UTF8MB4_UNICODE_CI NOT NULL,
    `loaisp` VARCHAR(255) COLLATE UTF8MB4_UNICODE_CI NOT NULL,
    `anh` VARCHAR(100) COLLATE UTF8MB4_UNICODE_CI NOT NULL,
    `gia` VARCHAR(100) COLLATE UTF8MB4_UNICODE_CI NOT NULL
)  ENGINE=INNODB AUTO_INCREMENT=16 DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

--
-- Dumping data for table `qlsp`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `qlsp`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qlsp`
--
ALTER TABLE `qlsp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
