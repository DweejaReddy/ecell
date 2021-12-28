-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 08:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_questionaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `t1a` text DEFAULT NULL,
  `t1b` text DEFAULT NULL,
  `t1c` text DEFAULT NULL,
  `t1d` text DEFAULT NULL,
  `t1e` text DEFAULT NULL,
  `t2a` text DEFAULT NULL,
  `t2b` text DEFAULT NULL,
  `t2c` text DEFAULT NULL,
  `t2d` text DEFAULT NULL,
  `t2e` text DEFAULT NULL,
  `t3a` text DEFAULT NULL,
  `t3b` text DEFAULT NULL,
  `t3c` text DEFAULT NULL,
  `t4a` text DEFAULT NULL,
  `t4b` text DEFAULT NULL,
  `t5a` text DEFAULT NULL,
  `t5b` text DEFAULT NULL,
  `t5c` text DEFAULT NULL,
  `t5d` text DEFAULT NULL,
  `t5e` text DEFAULT NULL,
  `t5f` text DEFAULT NULL,
  `t6a` text DEFAULT NULL,
  `t6b` text DEFAULT NULL,
  `t6c` text DEFAULT NULL,
  `t7a` text DEFAULT NULL,
  `t7b` text DEFAULT NULL,
  `t7c` text DEFAULT NULL,
  `t7d` text DEFAULT NULL,
  `t8a` text DEFAULT NULL,
  `t9a` text DEFAULT NULL,
  `t9b` text DEFAULT NULL,
  `t9c` text DEFAULT NULL,
  `t9d` text DEFAULT NULL,
  `t9e` text DEFAULT NULL,
  `t10a` text DEFAULT NULL,
  `t10b` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `name`, `email`, `t1a`, `t1b`, `t1c`, `t1d`, `t1e`, `t2a`, `t2b`, `t2c`, `t2d`, `t2e`, `t3a`, `t3b`, `t3c`, `t4a`, `t4b`, `t5a`, `t5b`, `t5c`, `t5d`, `t5e`, `t5f`, `t6a`, `t6b`, `t6c`, `t7a`, `t7b`, `t7c`, `t7d`, `t8a`, `t9a`, `t9b`, `t9c`, `t9d`, `t9e`, `t10a`, `t10b`) VALUES
(1, 'Donald Trump', 'donald@outlook.com', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
