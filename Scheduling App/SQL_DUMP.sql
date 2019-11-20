-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 01:43 PM
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
(1, 'ACC 221', '2019-11-22T04:00:00.000Z', '', 'TBA'),
(2, 'BUS 401', '2019-11-20T06:00:00.000Z', '', 'TBA'),
(3, 'CIV 101', '2019-11-20T04:00:00.000Z', '', 'TBA'),
(4, 'BIOL 102', '2019-11-22T06:00:00.000Z', '', 'TBA'),
(5, 'CIV 203', '2019-11-23T04:00:00.000Z', '', 'TBA'),
(6, 'CIV 102', '2019-11-21T04:00:00.000Z', '', 'TBA'),
(7, 'CIV 204', '2019-11-21T06:00:00.000Z', '', 'TBA'),
(8, 'BUS 303', '2019-11-20T08:00:00.000Z', '', 'TBA'),
(9, 'CHEML 232', '2019-11-20T08:00:00.000Z', '', 'TBA'),
(10, 'CSC 101', '2019-11-22T08:00:00.000Z', '', 'TBA'),
(11, 'ART 105', '2019-11-24T04:00:00.000Z', '', 'TBA'),
(12, 'BIO 102', '2019-11-24T06:00:00.000Z', '', 'TBA'),
(13, 'ECO 210', '2019-11-20T10:00:00.000Z', '', 'TBA'),
(14, 'ECO 220', '2019-11-25T04:00:00.000Z', '', 'TBA'),
(15, 'ECO 201', '2019-11-21T08:00:00.000Z', '', 'B-F2-22'),
(16, 'ECO 221', '2019-11-25T06:00:00.000Z', '', 'TBA'),
(17, 'BUS 202', '2019-11-24T06:00:00.000Z', '', 'TBA'),
(18, 'ENG 102', '2019-11-26T04:00:00.000Z', '', 'TBA'),
(19, 'CHEM 232', '2019-11-27T04:00:00.000Z', '', 'TBA'),
(20, 'ACC 405', '2019-11-20T10:00:00.000Z', '', 'TBA'),
(21, 'ECO 404', '2019-11-22T08:00:00.000Z', '', 'TBA'),
(22, 'ENG 203', '2019-11-26T06:00:00.000Z', '', 'TBA'),
(23, 'ENG 101', '2019-11-26T06:00:00.000Z', '', 'TBA'),
(24, 'ENGR 231', '2019-11-28T06:00:00.000Z', '', 'TBA'),
(25, 'ENG 220', '2019-11-26T08:00:00.000Z', '', 'TBA'),
(26, 'ENG 213', '2019-11-26T08:00:00.000Z', '', 'TBA'),
(27, 'ENGR 230', '2019-11-25T06:00:00.000Z', '', 'TBA'),
(28, 'ENGR 244', '2019-11-24T08:00:00.000Z', '', 'TBA'),
(29, 'ECO 320', '2019-11-27T06:00:00.000Z', '', 'TBA'),
(30, 'ENGR 348', '2019-11-27T04:00:00.000Z', '', 'TBA'),
(31, 'ENGR 344', '2019-11-22T10:00:00.000Z', '', 'TBA'),
(32, 'ENGR 352', '2019-11-20T06:00:00.000Z', '', 'TBA'),
(33, 'ENGR 373', '2019-11-22T10:00:00.000Z', '', 'TBA'),
(34, 'ENGR 354', '2019-11-20T12:00:00.000Z', '', 'TBA'),
(35, 'ENGR 358', '2019-11-23T06:00:00.000Z', '', 'TBA'),
(36, 'STT 201', '2019-11-28T04:00:00.000Z', '', 'B-B1-20'),
(37, 'SCI 102', '2019-11-29T04:00:00.000Z', '', 'A-B1-11');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(8) NOT NULL,
  `auis_id` varchar(16) NOT NULL,
  `classes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `auis_id`, `classes`) VALUES
(0, '008-00032', '[\"ITE 305   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 201   \",\"MTH 112   \"]'),
(0, '008-00084', '[\"ENGR 354  \",\"ENGR 444  \",\"ENGR 455  \",\"ENGR 471  \",\"ENGR 498  \"]'),
(0, '008-00101', '[\"BUS 303   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"SCI 203   \"]'),
(0, '008-00113', '[\"HST 240   \",\"ITE 301   \",\"ITE 304   \",\"MTH 235   \"]'),
(0, '008-00158', '[\"ACC 221   \",\"BUS 202   \",\"LIT 400   \",\"MGT 360   \"]'),
(0, '008-00181', '[\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MTH 112   \",\"PHI 202   \",\"SCI 102   \"]'),
(0, '008-00221', '[\"ECO 201   \",\"ITE 303   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"SCI 203   \"]'),
(0, '008-00236', '[\"ACC 222   \",\"HUM 202   \",\"LGS 320   \",\"LIT 310   \"]'),
(0, '008-00243', '[\"ECO 201   \",\"GEO 303   \",\"HST 320   \",\"IST 301   \",\"POL 303   \"]'),
(0, '008-00244', '[\"JRL 301   \",\"MTH 112   \",\"POL 420   \",\"SCI 102   \",\"SCI 280   \",\"STT 201   \"]'),
(0, '008-00268', '[\"ENGR 348  \",\"ENGR 373  \",\"ENGR 442  \",\"ENGR 473  \",\"ENGR 491  \"]'),
(0, '008-00270', '[\"ACC 221   \",\"ECO 221   \",\"MTH 121   \",\"SCI 102   \"]'),
(0, '008-00289', '[\"CIV 204   \",\"ECO 220   \",\"MTH 112   \"]'),
(0, '008-00321', '[\"ACC 221   \",\"BUS 303   \",\"CIV 102   \",\"MGT 360   \",\"SCI 203   \"]'),
(0, '008-00338', '[\"ECO 210   \",\"GEO 303   \",\"LGS 225   \",\"MGT 402   \",\"MGT 405   \"]'),
(0, '008-00357', '[\"ACC 222   \",\"ENG 203   \",\"HUM 202   \",\"LGS 225   \",\"LIT 400   \",\"SCI 280   \"]'),
(0, '008-00364', '[\"ENGR 354  \",\"ENGR 358  \",\"MTH 331   \",\"MTH 332   \",\"PHYS 233  \"]'),
(0, '008-00370', '[\"ECO 320   \",\"FIN 301   \",\"PHI 202   \"]'),
(0, '008-00379', '[\"ACC 221   \",\"ECO 210   \",\"LIT 302   \",\"LIT 310   \"]'),
(0, '008-00380', '[\"ENG 203   \",\"GEO 303   \",\"MIS 301   \",\"MTH 101   \"]'),
(0, '009-00015', '[\"CIV 204   \",\"ENGR 231  \",\"ENGR 244  \",\"ENGR 348  \",\"MTH 332   \"]'),
(0, '009-00023', '[\"ITE 306   \",\"POL 420   \",\"STT 201   \"]'),
(0, '009-00025', '[\"ENGR 358  \",\"ENGR 373  \",\"ENGR 390  \"]'),
(0, '009-00027', '[\"CIV 203   \",\"ENGR 354  \",\"ENGR 373  \",\"ENGR 442  \",\"MTH 331   \"]'),
(0, '009-00034', '[\"ENGR 442  \",\"ENGR 444  \",\"ENGR 473  \",\"ENGR 474  \"]'),
(0, '009-00038', '[\"ACC 221   \",\"LGS 225   \",\"STT 201   \"]'),
(0, '009-00040', '[\"CHEML 232 \",\"ENGR 244  \",\"MTH 233   \",\"PHYS 232  \",\"PHYSL 232 \"]'),
(0, '009-00041', '[\"ACC 221   \",\"ECO 210   \",\"ECO 220   \",\"MTH 235   \",\"STT 201   \"]'),
(0, '009-00042', '[\"BUS 202   \",\"BUS 303   \",\"FIN 301   \",\"MGT 301   \"]'),
(0, '009-00060', '[\"ACC 221   \",\"ECO 221   \",\"MGT 301   \",\"MKT 301   \",\"STT 201   \"]'),
(0, '009-00067', '[\"ACC 222   \",\"FIN 301   \",\"LGS 225   \",\"MGT 360   \",\"MGT 405   \"]'),
(0, '009-00070', '[\"GEO 303   \",\"MTH 112   \",\"POL 303   \",\"POL 403   \",\"SCI 102   \"]'),
(0, '009-00086', '[\"CIV 204   \",\"ITE 305   \",\"ITE 308   \",\"MTH 101   \"]'),
(0, '009-00096', '[\"ENGR 354  \",\"ENGR 358  \",\"MTH 332   \",\"SCI 260   \"]'),
(0, '009-00105', '[\"ENGR 444  \",\"ENGR 473  \",\"ENGR 474  \",\"ENGR 477  \",\"ENGR 491  \"]'),
(0, '009-00113', '[\"BUS 303   \",\"ENG 203   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"SCIL 102  \"]'),
(0, '009-00119', '[\"ENGR 354  \",\"ENGR 358  \",\"ENGR 390  \",\"MTH 331   \",\"MTH 332   \"]'),
(0, '009-00120', '[\"ACC 221   \",\"ECO 220   \",\"ITE 202   \",\"MKT 301   \"]'),
(0, '009-00123', '[\"ECO 221   \",\"ITE 202   \",\"SCI 102   \",\"STT 201   \"]'),
(0, '009-00125', '[\"ACC 221   \",\"MGT 360   \",\"MTH 112   \",\"SCI 102   \"]'),
(0, '009-00153', '[\"CIV 204   \",\"ECO 320   \",\"ECO 404   \",\"FIN 301   \",\"LGS 225   \"]'),
(0, '009-00171', '[\"ENGR 231  \",\"ENGR 390  \",\"ENGR 444  \",\"ENGR 473  \"]'),
(0, '009-00174', '[\"ENGR 231  \",\"ENGR 348  \",\"ENGR 373  \",\"ENGR 473  \",\"MTH 332   \"]'),
(0, '009-00176', '[\"BUS 202   \",\"CIV 203   \",\"ITE 401   \",\"MGT 201   \"]'),
(0, '009-00191', '[\"ACC 221   \",\"CIV 204   \",\"ECO 220   \",\"ENG 101   \",\"MGT 201   \",\"STT 201   \"]'),
(0, '009-00199', '[\"ENGR 370  \",\"ENGR 373  \",\"ENGR 390  \",\"ENGR 471  \"]'),
(0, '009-00200', '[\"CIV 204   \",\"ENGR 413  \",\"ENGR 432  \",\"ENGR 444  \"]'),
(0, '009-00201', '[\"ENGR 348  \",\"ENGR 354  \",\"ENGR 358  \",\"MTH 331   \",\"MTH 332   \"]'),
(0, '009-00204', '[\"LGS 210   \",\"MGT 402   \",\"MGT 407   \",\"MIS 301   \",\"SCI 102   \"]'),
(0, '009-00212', '[\"BUS 303   \",\"FIN 301   \",\"LGS 225   \",\"MGT 301   \",\"MGT 360   \"]'),
(0, '009-00216', '[\"CIV 204   \",\"ENGR 231  \",\"ENGR 354  \",\"ENGR 444  \"]'),
(0, '009-00234', '[\"ENGR 348  \",\"ENGR 354  \",\"ENGR 358  \",\"MTH 331   \",\"MTH 332   \",\"PHYS 233  \"]'),
(0, '009-00238', '[\"CIV 204   \",\"ECO 320   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MTH 112   \"]'),
(0, '009-00239', '[\"ENGR 373  \",\"ENGR 444  \",\"ENGR 473  \",\"ENGR 474  \",\"ENGR 491  \"]'),
(0, '009-00241', '[\"CIV 204   \",\"ENGR 231  \",\"ENGR 455  \",\"ENGR 489  \"]'),
(0, '009-00243', '[\"ENGR 352  \",\"ENGR 471  \",\"ENGR 473  \",\"ENGR 474  \",\"ENGR 491  \"]'),
(0, '009-00253', '[\"ENGR 348  \",\"ENGR 354  \",\"ENGR 370  \",\"MTH 233   \",\"PHYS 233  \",\"PHYSL 233 \"]'),
(0, '009-00259', '[\"BUS 202   \",\"CIV 204   \",\"SCI 260   \"]'),
(0, '009-00260', '[\"ITE 303   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MGT 360   \"]'),
(0, '009-00261', '[\"ENGR 231  \",\"ENGR 354  \",\"ENGR 358  \",\"MTH 331   \",\"MTH 332   \"]'),
(0, '009-00265', '[\"ENGR 231  \",\"ENGR 352  \",\"ENGR 358  \",\"MTH 332   \"]'),
(0, '009-00266', '[\"BUS 401   \",\"CIV 204   \",\"LIT 400   \",\"MGT 405   \",\"MIS 301   \"]'),
(0, '009-00279', '[\"ENG 203   \",\"FIN 301   \",\"GEO 303   \",\"LGS 225   \",\"MTH 121   \",\"SCI 102   \"]'),
(0, '009-00289', '[\"CHEML 232 \",\"CIV 204   \",\"MTH 232   \"]'),
(0, '009-00290', '[\"MTH 001   \"]'),
(0, '009-00292', '[\"ENGR 352  \",\"ENGR 358  \",\"ENGR 390  \",\"MTH 332   \"]'),
(0, '009-00296', '[\"BUS 202   \",\"LGS 320   \",\"MTH 101   \",\"POL 403   \",\"POL 420   \"]'),
(0, '009-00309', '[\"ENGR 390  \",\"ENGR 413  \",\"ENGR 432  \"]'),
(0, '009-00311', '[\"ENGR 231  \",\"ENGR 373  \",\"ENGR 471  \",\"ENGR 473  \",\"ENGR 491  \"]'),
(0, '009-00325', '[\"CIV 204   \",\"ENGR 230  \",\"ENGR 231  \"]'),
(0, '009-00328', '[\"ACC 221   \",\"ENG 203   \",\"MTH 121   \",\"SCI 102   \",\"STT 201   \"]'),
(0, '009-00330', '[\"ENGR 354  \",\"ENGR 358  \",\"ENGR 370  \",\"MTH 233   \",\"PHYS 233  \",\"PHYSL 233 \"]'),
(0, '009-00344', '[\"SCI 101   \"]'),
(0, '009-00346', '[\"CIV 203   \",\"ECO 220   \",\"MGT 201   \"]'),
(0, '009-00347', '[\"ENGR 348  \",\"ENGR 354  \",\"ENGR 358  \",\"MTH 331   \",\"MTH 332   \"]'),
(0, '009-00349', '[\"ENGR 348  \",\"ENGR 352  \",\"ENGR 373  \",\"ENGR 471  \",\"ENGR 473  \"]'),
(0, '009-00355', '[\"CIV 203   \",\"LGS 225   \",\"MGT 301   \",\"MGT 402   \",\"MGT 405   \",\"MIS 301   \"]'),
(0, '009-00356', '[\"ECO 404   \",\"FIN 301   \",\"LGS 225   \",\"MGT 301   \",\"MGT 405   \"]'),
(0, '009-00358', '[\"CIV 203   \",\"ITE 301   \",\"ITE 304   \",\"MTH 235   \",\"STT 201   \"]'),
(0, '009-00361', '[\"ECO 210   \",\"ITE 401   \",\"ITE 406   \",\"ITE 408   \",\"MTH 112   \",\"SCI 102   \"]'),
(0, '009-00377', '[\"ENGR 358  \",\"ENGR 373  \",\"ENGR 471  \",\"ENGR 491  \"]'),
(0, '009-00387', '[\"CIV 203   \",\"ECO 320   \",\"FIN 301   \",\"LGS 225   \",\"SCI 280   \"]'),
(0, '009-00397', '[\"ENGR 231  \",\"ENGR 348  \",\"ENGR 413  \",\"ENGR 432  \"]'),
(0, '009-00399', '[\"CHEM 232  \",\"CHEML 232 \",\"ECO 220   \",\"ENGR 231  \",\"MTH 232   \"]'),
(0, '009-00409', '[\"ACC 221   \",\"CIV 204   \",\"ECO 221   \",\"MKT 301   \"]'),
(0, '010-00010', '[\"BUS 303   \",\"ITE 305   \",\"MGT 301   \",\"MGT 360   \",\"MTH 121   \"]'),
(0, '010-00011', '[\"ENGR 373  \",\"ENGR 442  \",\"ENGR 471  \",\"ENGR 473  \",\"ENGR 491  \",\"MGT 407   \"]'),
(0, '010-00017', '[\"CIV 101   \",\"CSC 101   \",\"ENG 101   \",\"MTH 101   \",\"SCI 101   \",\"SCIL 101  \"]'),
(0, '010-00021', '[\"ACC 222   \",\"ECO 404   \",\"ENG 220   \",\"LGS 225   \",\"SCI 280   \"]'),
(0, '010-00023', '[\"BUS 401   \",\"ECO 201   \",\"ITE 301   \",\"ITE 304   \",\"MGT 402   \"]'),
(0, '010-00025', '[\"ENG 203   \",\"MGT 405   \",\"MTH 121   \",\"SCI 102   \",\"SCI 280   \"]'),
(0, '010-00026', '[\"IST 301   \",\"LGS 225   \",\"MTH 112   \",\"POL 403   \",\"POL 420   \",\"SCI 102   \"]'),
(0, '010-00027', '[\"ACC 222   \",\"HST 240   \",\"LGS 210   \",\"LGS 225   \",\"POL 403   \"]'),
(0, '010-00030', '[\"CIV 204   \",\"ENGR 231  \",\"ENGR 354  \",\"ENGR 358  \",\"ENGR 444  \"]'),
(0, '010-00031', '[\"HST 240   \",\"MGT 301   \",\"MGT 360   \",\"MGT 402   \",\"MIS 301   \"]'),
(0, '010-00033', '[\"CIV 204   \",\"ENGR 231  \",\"ENGR 344  \",\"ENGR 370  \",\"MTH 233   \",\"PHYS 233  \",\"PHYSL 233 \"]'),
(0, '010-00036', '[\"ENGR 442  \",\"ENGR 444  \",\"ENGR 471  \",\"ENGR 473  \",\"ENGR 474  \",\"ENGR 491  \"]'),
(0, '010-00042', '[\"ACC 222   \",\"CIV 204   \",\"LGS 225   \",\"MTH 121   \",\"STT 201   \"]'),
(0, '010-00046', '[\"ENGR 432  \",\"ENGR 442  \",\"ENGR 491  \",\"PHI 202   \"]'),
(0, '010-00047', '[\"CIV 101   \",\"CSC 101   \",\"ENG 101   \",\"SCI 101   \",\"SCIL 101  \"]');

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
(1, 'Lehat Yousif', 'lehat.yousif@auis.edu.krd', '9fd080d9acdb7d5723e602dde0d2869e', '2019-11-15 16:11:00'),
(2, 'Lehat Yousif', 'lehat.yousif@auis.edu.krd', '9fd080d9acdb7d5723e602dde0d2869e', '2019-11-15 16:11:21'),
(3, 'Arukh Sediq', 'aroxsediq@gmail.com', 'a7cd256398011426004c035f1c797065', '2019-11-15 16:11:58'),
(4, 'Mohamad Nawzad', 'mohamed.nawzad@auis.edu.krd', 'de043794216b0aa5174eeb1184fa58bc', '2019-11-15 16:12:39'),
(5, 'Ranj Sarraj', 'anj.sarraj@auis.edu.krd', '32931808cbea3ee62e1fc9622eb3d1ec', '2019-11-15 16:13:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
