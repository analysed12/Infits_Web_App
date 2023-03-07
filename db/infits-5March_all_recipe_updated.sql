-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2023 at 02:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `dietition_tasks`
--

CREATE TABLE `dietition_tasks` (
  `task_id` int(11) NOT NULL,
  `dietitianuserID` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(30) NOT NULL,
  `end_time` varchar(30) NOT NULL,
  `add_to_calander` int(1) NOT NULL DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietition_tasks`
--

INSERT INTO `dietition_tasks` (`task_id`, `dietitianuserID`, `title`, `description`, `date`, `start_time`, `end_time`, `add_to_calander`, `time`) VALUES
(5, 'John_wayne', 'VC Meeting Update', 'Explain About Plans', '2023-02-03', '22:37', '23:37', 1, '2023-02-07 17:07:51'),
(6, 'John_wayne', 'VC Meeting', 'Explain About Plans', '2023-02-03', '22:37', '23:37', 1, '2023-02-07 17:07:51'),
(15, 'John_wayne', 'VC Meeting', 'Explain About Plans', '2023-02-03', '22:37', '23:37', 0, '2023-02-07 17:07:51'),
(16, 'John_wayne', 'VC Meeting', 'Explain About Plans', '2023-02-03', '22:37', '23:37', 0, '2023-02-07 17:07:51'),
(29, 'John_wayne', 'VC Meeting', 'Explain About Plans', '2023-02-05', '18:37', '23:37', 0, '2023-02-07 17:07:51'),
(33, 'John_wayne', 'New', 'Just to check', '2023-02-08', '21:28', '12:28', 0, '2023-02-07 17:58:32'),
(35, 'John_wayne', 'Something to Test', 'Test the product', '2023-02-08', '11:31', '12:31', 0, '2023-02-07 18:01:59'),
(36, 'John_wayne', 'VC Meeting With Client', 'Tell Him about his performance', '2023-02-04', '13:09', '16:09', 0, '2023-02-07 18:39:23'),
(38, 'John_wayne', 'Live Stream', 'New Plan Launch', '2023-02-10', '10:00', '11:00', 0, '2023-02-08 12:03:17'),
(39, 'John_wayne', 'Chat with Client ', 'Chat with Client', '2023-02-08', '22:40', '', 0, '2023-02-08 12:04:53'),
(40, 'John_wayne', 'VC Meeting With Client', 'new goals are setted', '2023-02-10', '07:40', '', 0, '2023-02-08 12:05:50'),
(41, 'John_wayne', 'New Plan Design', 'TO create new plan design', '2023-02-08', '', '', 1, '2023-02-08 12:32:07'),
(42, 'John_wayne', 'VC Meeting', 'fd fgfg', '2023-02-12', '23:30', '12:32', 0, '2023-02-12 15:58:24'),
(43, 'John_wayne', 'VC Meeting', 'c s vsv', '2023-02-07', '22:02', '00:07', 0, '2023-02-15 13:33:13'),
(44, 'John_wayne', 'VC Meeting', 'jknkjnk  n kj', '2023-02-15', '20:00', '21:00', 0, '2023-02-15 13:34:22'),
(45, 'John_wayne', 'Title', 'description', '2023-02-08', '20:49', '', 0, '2023-02-18 14:19:53'),
(46, 'John_wayne', 'VC Meeting', 'NDKJNXKSAJN ', '2023-02-28', '20:58', '21:58', 0, '2023-02-28 14:28:57'),
(47, 'John_wayne', 'VC Meeting', 'CSAC M', '2023-03-11', '20:59', '21:59', 0, '2023-02-28 14:29:31'),
(50, 'Sabari Nathan', 'meeting with chetram', 'very imp', '2023-03-05', '2:30', '4:40', 0, '2023-03-05 09:42:24'),
(51, 'Sabari Nathan', 'future meet', 'not so imp', '2023-03-08', '2:30', '4:40', 0, '2023-03-05 09:50:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dietition_tasks`
--
ALTER TABLE `dietition_tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `dietitianuserID` (`dietitianuserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dietition_tasks`
--
ALTER TABLE `dietition_tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
