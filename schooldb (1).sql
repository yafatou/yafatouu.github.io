-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2020 at 04:43 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `phone`, `email`, `subject`, `message`, `date`) VALUES
('', 2203187416, '', '', '', '2020-09-23 02:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `areacode` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` bigint(10) NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verified` int(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `verified`, `date`) VALUES
(1, 'yafatou', 'yafatoumng96', 'yafatoumng@gmail.com', 1, '2020-09-21 20:09:55'),
(2, 'emily', 'abcd', 'emily@gmail.com', 1, '2020-09-21 20:10:58'),
(3, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 04:48:36'),
(4, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 04:58:03'),
(5, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 04:59:44'),
(6, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 05:00:30'),
(7, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 13:26:13'),
(8, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 13:34:07'),
(9, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 13:36:31'),
(10, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 13:36:36'),
(11, 'yafatou', 'yafatoumng96', '', 1, '2020-09-22 13:41:40'),
(12, '', 'yafatoumng96', '', 1, '2020-09-26 03:53:51'),
(13, '', 'yafatoumng96', '', 1, '2020-09-26 03:57:10'),
(14, '', 'yafatoumng96', '', 1, '2020-09-26 04:05:01'),
(15, '', 'yafatoumng96', '', 1, '2020-09-26 04:17:43'),
(16, '', 'yafatoumng96', '', 1, '2020-09-26 04:18:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
