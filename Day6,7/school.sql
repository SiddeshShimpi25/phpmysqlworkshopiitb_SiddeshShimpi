-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 04:51 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `sheet`
--

CREATE TABLE `sheet` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `html` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `php` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `result` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sheet`
--

INSERT INTO `sheet` (`name`, `username`, `html`, `mysql`, `php`, `percentage`, `result`) VALUES
('Siddesh Shimpi', 'supersid', 98, 96, 92, 95, 'P'),
('Himanshu Marathe', 'blackout', 76, 79, 84, 80, 'P'),
('Sarvesh Makane', 'yolopolosolo', 84, 82, 90, 85, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `username`, `password`) VALUES
('Siddesh Shimpi', 'supersid', '888611c9019ac6bc7107e67fb243af98'),
('Himanshu Marathe', 'blackout', 'eee1edb16ac8987af66023852db6c513'),
('Sarvesh Makane', 'yolopolosolo', 'ee7d34fa87b5813f13f8c18407036b46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
