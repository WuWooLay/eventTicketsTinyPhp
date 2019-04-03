-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 11:35 AM
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
(1, 'title', 'title', '2019-04-01 20:58:26', NULL),
(2, 'Sports', NULL, '2019-04-01 20:58:32', NULL),
(3, 'LifeStyle', NULL, '2019-04-02 07:09:46', NULL),
(4, 'News', NULL, '2019-04-02 07:09:46', NULL),
(5, 'SomeTitle', 'SomeTitle', '2019-04-02 12:19:32', NULL),
(6, 'SomeTitle', 'SomeTitle', '2019-04-02 12:25:59', NULL),
(7, 'SomeTitle', 'SomeTitle', '2019-04-02 12:30:29', NULL),
(8, 'SomeTitle', 'SomeTitle', '2019-04-02 12:31:05', NULL),
(9, 'SomeTitle', 'SomeTitle', '2019-04-02 12:32:06', NULL),
(10, 'SomeTitle', 'SomeTitle', '2019-04-02 12:41:16', NULL),
(11, 'SomeTitle', 'SomeTitle', '2019-04-02 15:48:08', NULL),
(12, 'SomeTitle', 'SomeTitle', '2019-04-02 15:53:21', NULL),
(13, 'zzzz', 'zzzz', '2019-04-02 16:01:08', NULL),
(14, 'Title Lay', 'Title Lay', '2019-04-02 16:01:18', NULL),
(15, 'Title Lay', 'Title Lay', '2019-04-02 17:08:42', NULL),
(16, '', '', '2019-04-02 17:08:52', '0000-00-00 00:00:00'),
(17, '11', '11', '2019-04-02 17:22:16', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testing_table`
--
ALTER TABLE `testing_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testing_table`
--
ALTER TABLE `testing_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
