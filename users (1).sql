-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 12:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `karan_lumen_insertdata`
--

CREATE TABLE `karan_lumen_insertdata` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karan_lumen_insertdata`
--

INSERT INTO `karan_lumen_insertdata` (`id`, `username`, `email`, `password`, `image`) VALUES
(17, 'karan', 'karansharma4109@gmail.com', '123', '1617275125.jpeg'),
(18, 'karan1', 'karansharma4109@gmail.com', '123', '1617277802.jpg'),
(19, 'harman', 'harman@2g.com', '123', '1617359832.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karan_lumen_login`
--

CREATE TABLE `karan_lumen_login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karan_lumen_login`
--

INSERT INTO `karan_lumen_login` (`id`, `username`, `password`) VALUES
(2, 'karan', '123'),
(3, 'karan1', '123'),
(4, 'harman', '123');

-- --------------------------------------------------------

--
-- Table structure for table `karan_lumen_todo`
--

CREATE TABLE `karan_lumen_todo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karan_lumen_todo`
--

INSERT INTO `karan_lumen_todo` (`id`, `name`, `user_id`) VALUES
(35, 'new', '17'),
(36, 'harman', '17'),
(37, 'harman', '19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karan_lumen_insertdata`
--
ALTER TABLE `karan_lumen_insertdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karan_lumen_login`
--
ALTER TABLE `karan_lumen_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karan_lumen_todo`
--
ALTER TABLE `karan_lumen_todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karan_lumen_insertdata`
--
ALTER TABLE `karan_lumen_insertdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `karan_lumen_login`
--
ALTER TABLE `karan_lumen_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karan_lumen_todo`
--
ALTER TABLE `karan_lumen_todo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
