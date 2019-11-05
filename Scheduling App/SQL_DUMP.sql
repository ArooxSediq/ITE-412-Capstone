-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 10:55 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examschedulingassistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `location` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `location`) VALUES
(1, 'ITE 305', '2019-11-07T04:00:00.000Z', '', 'TBA'),
(2, 'ITE 401', '2019-11-08T04:00:00.000Z', '', 'TBA');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(8) NOT NULL,
  `auis_id` varchar(16) NOT NULL,
  `classes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `auis_id`, `classes`) VALUES
(2, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(3, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(4, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(5, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(6, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(7, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(8, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(9, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(10, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(11, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(12, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(13, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(14, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(15, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(16, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(17, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(18, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(19, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(20, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(21, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(22, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(23, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(24, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(25, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(26, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(27, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(28, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(29, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(30, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(31, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(32, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(33, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(34, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(35, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(36, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'aroxsediq@gmail.com', '6756ff1282eeb793e0abb591428c522d', '2019-10-12 05:52:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
