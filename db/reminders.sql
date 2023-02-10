-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 12:18 PM
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
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `reminder_id` int(11) NOT NULL,
  `dietitianuserID` varchar(30) NOT NULL,
  `client_id` int(11) NOT NULL,
  `forWhat` varchar(30) NOT NULL,
  `water_interval` varchar(30) DEFAULT NULL,
  `water_amount` varchar(30) DEFAULT NULL,
  `sleep_time` varchar(30) DEFAULT NULL,
  `wake_time` varchar(30) DEFAULT NULL,
  `breakfast_time` varchar(30) NOT NULL,
  `lunch_time` varchar(30) NOT NULL,
  `snacks_time` varchar(30) NOT NULL,
  `dinner_time` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`reminder_id`, `dietitianuserID`, `client_id`, `forWhat`, `water_interval`, `water_amount`, `sleep_time`, `wake_time`, `breakfast_time`, `lunch_time`, `snacks_time`, `dinner_time`, `time`) VALUES
(5, 'John_wayne', 7, 'water', '1 hour', '2 Glasses', '12:00 AM', '06:00 AM', '08:00 AM', '02:00 PM', '04:00 PM', '07:30 PM', '2023-02-02 08:24:20'),
(15, 'John_wayne', 11, 'sleep', '', '', '', '', '', '', '', '', '2023-02-02 12:25:33'),
(18, 'John_wayne', 9, 'sleep', '1 hour', '2 Glasses', '12:00 AM', '06:00 AM', '', '', '', '', '2023-02-02 12:25:33'),
(20, 'John_wayne', 10, '', '', '', '12:00 AM', '06:00 AM', '08:00 AM', '02:00 PM', '04:00 PM', '07:30 PM', '2023-02-03 13:15:21'),
(21, 'John_wayne', 2, '', '', '', '12:00 AM', '06:00 AM', '08:00 AM', '02:00 PM', '04:00 PM', '07:30 PM', '2023-02-03 13:16:24'),
(24, 'John_wayne', 1, '', '', '', NULL, NULL, '', '', '', '', '2023-02-05 09:58:22'),
(25, 'John_wayne', 3, '', '30 Min', '1 Glass', '09:30 PM', '05:00 AM', '', '', '', '', '2023-02-05 09:58:24'),
(26, 'John_wayne', 4, '', '30 Min', '1 Glass', '09:30 PM', '05:00 AM', '', '', '', '', '2023-02-05 09:58:25'),
(27, 'John_wayne', 12, '', '1 hour', '2 Glasses', '12:00 AM', '06:00 AM', '', '', '', '', '2023-02-05 09:58:29'),
(28, 'John_wayne', 8, '', '1 hour', '2 Glasses', NULL, NULL, '', '', '', '', '2023-02-05 09:58:35'),
(29, 'John_wayne', 6, '', '1 hour', '2 Glasses', NULL, NULL, '', '', '', '', '2023-02-05 09:58:36'),
(30, 'John_wayne', 5, '', '30 Min', '1 Glass', '09:30 PM', '05:00 AM', '', '', '', '', '2023-02-05 09:58:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`reminder_id`),
  ADD UNIQUE KEY `client_id` (`client_id`),
  ADD KEY `dietitianuserID` (`dietitianuserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_ibfk_1` FOREIGN KEY (`dietitianuserID`) REFERENCES `dietitian` (`dietitianuserID`),
  ADD CONSTRAINT `reminders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `addclient` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
