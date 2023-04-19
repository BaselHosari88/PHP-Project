-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 06:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuzu`
--

-- --------------------------------------------------------

--
-- Table structure for table `klantgegevens`
--

CREATE TABLE `klantgegevens` (
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `plates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klantgegevens`
--

INSERT INTO `klantgegevens` (`name`, `last_name`, `email`, `adress`, `zip_code`, `plates`) VALUES
('sssasa', 'asas', 'nnn@gmail.com', 'den haag', '9922', 'den haag');

-- --------------------------------------------------------

--
-- Table structure for table `ordergegevens`
--

CREATE TABLE `ordergegevens` (
  `maki_1` int(11) NOT NULL,
  `maki_2` int(11) NOT NULL,
  `nigiri` int(11) NOT NULL,
  `philadephia` int(11) NOT NULL,
  `spicy` int(11) NOT NULL,
  `california` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordergegevens`
--

INSERT INTO `ordergegevens` (`maki_1`, `maki_2`, `nigiri`, `philadephia`, `spicy`, `california`) VALUES
(1, 2, 1, 2, 3, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
