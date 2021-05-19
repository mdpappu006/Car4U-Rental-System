-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2021 at 05:46 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carfyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '$2y$10$gfLavrqIanM8Z7ADv4Gkc.CxG76x4vjtLKkO6FHuPSvmzkWe/Nofm', '2021-05-19 15:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(11) DEFAULT NULL,
  `dob` varchar(120) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `EmailId` (`EmailId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Nazmul Hossain', 'mdpappu006@gmail.com', '$2y$10$rT6VxHWSwxmIIyrEpxvWxOTsd/FoEY7KaXQo0lpj0MheHIFzp1nBS', '01775151041', NULL, NULL, NULL, NULL, '2021-05-12 12:12:02', '2021-05-12 12:12:02'),
(2, 'Test', 'test@gmail.com', '$2y$10$Ggq22lXoZQMBifgCL2/Lz.jGQMlUgHxFmzPW74AgHzbDoQQugDZV2', '01775115041', '10/10/1995', 'West Akur Takur Para, Tangail.', 'Tangail', 'Bangladesh', '2021-05-15 04:02:56', '2021-05-15 04:02:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
