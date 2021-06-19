-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 04:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intensity`
--

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `id` int(20) NOT NULL,
  `heart_rate` int(30) NOT NULL,
  `time` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `email` varchar(40) NOT NULL,
  `moderate_min` varchar(30) NOT NULL,
  `moderate_max` varchar(30) NOT NULL,
  `vigorous_min` varchar(30) NOT NULL,
  `vigorous_max` varchar(30) NOT NULL,
  `interval_max` varchar(30) NOT NULL,
  `mhr` varchar(30) NOT NULL,
  `rhr` varchar(30) NOT NULL,
  `hrr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`id`, `heart_rate`, `time`, `email`, `moderate_min`, `moderate_max`, `vigorous_min`, `vigorous_max`, `interval_max`, `mhr`, `rhr`, `hrr`) VALUES
(5, 63, '2021-04-12 23:18:48.432207', 'yani@gmail.com', '', '', '', '', '', '', '', ''),
(6, 69, '2021-04-12 23:20:41.013138', 'yani@gmail.com', '', '', '', '', '', '', '', ''),
(7, 76, '2021-04-13 14:03:58.011744', 'yani@gmail.com', '', '', '', '', '', '', '', ''),
(28, 65, '2021-05-06 13:28:22.240336', 'yani@gmail.com', '130', '175.5', '156', '175.5', '176.8', '195', '65', '130'),
(31, 65, '2021-05-06 15:11:42.913766', 'yani@gmail.com', '130', '175.5', '156', '175.5', '176.8', '195', '65', '130'),
(129, 65, '2021-05-27 23:02:47.973554', 'sofia@gmail.com', '136.5', '186.55', '165.1', '186.55', '187.98', '208', '65', '143'),
(130, 65, '2021-05-27 23:05:00.046618', 'sofia@gmail.com', '136.5', '186.55', '165.1', '186.55', '187.98', '208', '65', '143'),
(132, 79, '2021-05-27 23:09:02.493658', 'sofia@gmail.com', '143.5', '188.65', '169.3', '188.65', '189.94', '208', '79', '129'),
(133, 65, '2021-06-19 09:48:54.787052', 'sofia@gmail.com', '136.5', '186.55', '165.1', '186.55', '187.98', '208', '65', '143');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` int(30) NOT NULL,
  `time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `age`, `gender`, `phone`, `time`) VALUES
('gg', 'gg@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 34, 'Male', 456753462, '2021-05-25 22:58:30.887967'),
('sofia', 'sofia@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 12, 'Female', 1234567, '2021-04-12 16:36:52.274124'),
('yani', 'yani@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 25, 'Female', 11111111, '2021-04-12 15:10:06.687094');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `name` (`name`),
  ADD KEY `age` (`age`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
