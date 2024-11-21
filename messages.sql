
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 04:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesages`
--

-- --------------------------------------------------------

--
-- Table structure for table `mesages`
--

CREATE TABLE `mesages` (
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mesages`
--

INSERT INTO `mesages` (`full_name`, `email`, `msg`) VALUES
('Ann Marie Flores', 'annmariefloes@gmail.com', 'afafa'),
('Ann Marie Flores', 'annmariefloes@gmail.com', 'fafafa'),
('Ann Marie Flores', 'annmariefloes@gmail.com', 'fafafa'),
('Ace Padilla', 'acco.padilla.au@phinmaed.com', 'hello po hehe'),
('jsjs', 'acco.padilla.au@phinmaed.com', 'afafa'),
('jsjs', 'acco.padilla.au@phinmaed.com', 'afafa'),
('Meow', 'yahoo@gmail.com', 'arf'),
('Meow', 'yahoo@gmail.com', 'arf'),
('Ace Padilla', 'acco.padilla.au@phinmaed.com', 'gagaga'),
('Ace Padilla', 'acco.padilla.au@phinmaed.com', 'gagaga'),
('Ace Padilla', 'acco.padilla.au@phinmaed.com', 'gagaga'),
('Ace Padilla', 'acco.padilla.au@phinmaed.com', 'gagaga'),
('jsjs', 'acco.padilla.au@phinmaed.com', 'ace');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
