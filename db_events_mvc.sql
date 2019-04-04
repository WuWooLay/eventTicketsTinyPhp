-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 09:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_events_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'user', '2019-04-04 17:16:06', '0000-00-00 00:00:00', NULL),
(2, 'creator', '2019-04-04 17:16:15', '0000-00-00 00:00:00', NULL),
(3, 'admin', '2019-04-04 17:24:30', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testing_table`
--

CREATE TABLE `testing_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testing_table`
--

INSERT INTO `testing_table` (`id`, `name`, `title`, `created_at`, `deleted_at`) VALUES
(1, 'book title', 'book title', '2019-04-04 10:15:41', NULL),
(2, 'book title', 'book title', '2019-04-04 10:16:57', NULL),
(3, 'book xxx', 'book xxx', '2019-04-04 10:17:14', NULL),
(4, 'book xxx', 'book xxx', '2019-04-04 10:17:48', NULL),
(5, 'TITLE', 'TITLE', '2019-04-04 10:18:04', NULL),
(6, 'TITLE', 'TITLE', '2019-04-04 10:24:58', NULL),
(7, 'ranger', 'ranger', '2019-04-04 10:27:30', NULL),
(8, 'power', 'ranger', '2019-04-04 10:34:08', NULL),
(9, 'Fuck', 'You', '2019-04-04 10:34:21', NULL),
(10, 'a', 'b', '2019-04-04 19:47:43', NULL),
(11, 'a', 'b', '2019-04-04 19:47:44', NULL),
(12, 'a', 'b', '2019-04-04 19:47:44', NULL),
(13, 'a', 'b', '2019-04-04 19:47:44', NULL),
(14, 'a', 'b', '2019-04-04 19:47:45', NULL),
(15, 'a', 'b', '2019-04-04 19:47:45', NULL),
(16, 'a', 'b', '2019-04-04 19:47:45', NULL),
(17, 'a', 'b', '2019-04-04 19:47:45', NULL),
(18, 'a', 'b', '2019-04-04 19:47:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text,
  `image` varchar(120) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `image`, `phone`, `role_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'Fuck', 'iehfai@gmail.com', 'z', NULL, '', 'z', 1, '2019-04-04 09:51:00', '0000-00-00 00:00:00', '2019-03-31 17:30:00'),
(2, 'Fuck', 'iehfai@gmail.com', '12345', NULL, '', 'z', 1, '2019-04-04 10:37:22', '0000-00-00 00:00:00', NULL),
(3, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:01', '0000-00-00 00:00:00', NULL),
(4, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:02', '0000-00-00 00:00:00', NULL),
(5, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:03', '0000-00-00 00:00:00', NULL),
(6, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:03', '0000-00-00 00:00:00', NULL),
(7, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:03', '0000-00-00 00:00:00', NULL),
(8, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:04', '0000-00-00 00:00:00', NULL),
(9, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:04', '0000-00-00 00:00:00', NULL),
(10, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:04', '0000-00-00 00:00:00', NULL),
(11, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:05', '0000-00-00 00:00:00', NULL),
(12, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 18:38:05', '0000-00-00 00:00:00', NULL),
(13, 'Fuck', 'sample@gmail.com', '123456', NULL, '', '1', 1, '2019-04-04 19:31:35', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing_table`
--
ALTER TABLE `testing_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testing_table`
--
ALTER TABLE `testing_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
