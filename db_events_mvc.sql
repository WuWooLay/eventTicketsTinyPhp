-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 09:43 PM
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
-- Table structure for table `event_category`
--

CREATE TABLE `event_category` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_category`
--

INSERT INTO `event_category` (`id`, `name`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'Art', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(2, 'Busniess', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(3, 'Concerts', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(4, 'Exhibition', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(5, 'Festivals', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(6, 'Meetups', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(7, 'Parties', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(8, 'Performance', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL),
(9, 'Sports', '2019-04-08 19:33:46', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` int(11) DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `created_at`, `deleted_at`, `modified_at`) VALUES
(1, 'Yangon', '2019-04-08 19:02:13', NULL, '0000-00-00 00:00:00'),
(2, 'Mandalay', '2019-04-08 19:02:13', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'pending', '2019-04-07 13:46:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'success', '2019-04-07 14:50:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'reject', '2019-04-07 14:50:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'going', '2019-04-07 15:33:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'Not Lwin', 'email@gmail.com', '$2y$10$x/IjNrSBrOi4k5VREhG65uZpiBA4Sce.88F9Aio9crmp9tARnVmy.', NULL, 'http://localhost/eventticket/assets/images/logo/default.svg', '09420059241', 3, '2019-04-08 16:22:05', '0000-00-00 00:00:00', NULL),
(2, 'Dawi', 'creator@gmail.com', '$2y$10$1BsdiGuFxiiUdd8WZJusLeamU/qWNJHdx4X8kbXLN88sPHl82DL62', '', 'http://localhost/eventticket/assets/images/profile/profile_00_26_43_5cab8b5bc4cff.jpg', '09420059241', 2, '2019-04-08 16:37:04', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_category`
--
ALTER TABLE `event_category`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
