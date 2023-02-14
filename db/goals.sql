-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 04:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infits`
--

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `goal_id` int(11) NOT NULL,
  `dietition_id` varchar(30) NOT NULL,
  `client_id` int(11) NOT NULL,
  `steps` int(11) NOT NULL,
  `heart` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `sleep` int(11) NOT NULL,
  `calorie` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`goal_id`, `dietition_id`, `client_id`, `steps`, `heart`, `water`, `weight`, `sleep`, `calorie`, `time`) VALUES
(9, 'John_wayne', 2, 2001, 0, 0, 0, 0, 200, '2023-02-12 09:35:54'),
(10, 'John_wayne', 12, 0, 0, 0, 0, 0, 5000, '2023-02-12 09:37:13'),
(11, 'John_wayne', 3, 2000, 2000, 20, 80, 200, 120, '2023-02-12 12:16:34'),
(19, 'John_wayne', 1, 0, 0, 0, 0, 0, 5000, '2023-02-12 15:40:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goal_id`),
  ADD UNIQUE KEY `client_id` (`client_id`),
  ADD KEY `dietition_id` (`dietition_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `goal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
