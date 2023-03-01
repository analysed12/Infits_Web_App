-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2023 at 03:07 PM
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
-- Table structure for table `addclient`
--

CREATE TABLE `addclient` (
  `dietitianuserID` varchar(30) NOT NULL,
  `client_id` int(11) NOT NULL,
  `clientuserID` varchar(30) NOT NULL,
  `profile` text NOT NULL,
  `p_p` varchar(255) NOT NULL DEFAULT 'user-default.png',
  `name` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `age` varchar(3) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `about` varchar(100) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `client_code` varchar(150) DEFAULT NULL,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addclient`
--

INSERT INTO `addclient` (`dietitianuserID`, `client_id`, `clientuserID`, `profile`, `p_p`, `name`, `gender`, `email`, `phone`, `age`, `height`, `weight`, `about`, `plan_id`, `status`, `client_code`, `last_seen`) VALUES
('John_wayne', 1, 'Client0', 'dfdgf', 'user-default.png', 'Test User1', 'm', 'ef@yh.in', '4567889', '12', '34', '45', 'fgf', 1, 1, NULL, '2023-02-27 00:00:00'),
('John_wayne', 2, 'Client1', 'vbvbv', 'user-default.png', 'Test User2', 'm', 'rt@hn.in', '454554', '34', '56', '67', 'ghg', 1, 1, NULL, '2023-02-27 00:00:00'),
('John_wayne', 3, 'Client2', 'Na', 'user-default.png', 'Test User3', 'M', 'test_user@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '001', '2023-02-27 00:00:00'),
('John_wayne', 4, 'Client3', 'Na', 'user-default.png', 'Test User4', 'M', 'test_user2@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '002', '2023-02-27 00:00:00'),
('John_wayne', 5, 'Client4', 'Na', 'user-default.png', 'Test User5', 'M', 'test_user3@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '003', '2023-02-27 00:00:00'),
('John_wayne', 6, 'Client5', 'Na', 'user-default.png', 'Test User6', 'M', 'test_user5@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '004', '2023-02-27 00:00:00'),
('John_wayne', 7, 'Client6', 'Na', 'user-default.png', 'Test User7', 'M', 'test_user5@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '004', '2023-02-27 00:00:00'),
('John_wayne', 8, 'Client7', 'Na', 'user-default.png', 'Test User8', 'M', 'test_user4@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '004', '2023-02-27 00:00:00'),
('John_wayne', 9, 'Client8', 'Na', 'user-default.png', 'Test User9', 'M', 'test_user6@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '004', '2023-02-27 00:00:00'),
('John_wayne', 10, 'Client9', 'Na', 'user-default.png', 'Test User10', 'M', 'test_user6@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '004', '2023-02-27 00:00:00'),
('John_wayne', 11, 'Client10', 'Na', 'user-default.png', 'Test User11', 'M', 'test_user6@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '004', '2023-02-27 00:00:00'),
('John_wayne', 12, 'Client11', 'Na', 'user-default.png', 'Test User12', 'M', 'test_user6@test.com', '9988774455', '25', '180', '50', 'njbkxz kcx  jcxzjknk cbxk', 1, 1, '004', '2023-02-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `add_direction`
--

CREATE TABLE `add_direction` (
  `dir_id` int(11) NOT NULL,
  `direction` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_direction`
--

INSERT INTO `add_direction` (`dir_id`, `direction`) VALUES
(501, 'hjhj'),
(501, 'wash vegetable and fruits , cut  into smaill pices'),
(501, 'take some oil, and add salt'),
(501, 'hello how r u'),
(501, 'good morning'),
(762, 'hjhj'),
(784, 'hjhj'),
(907, 'hjhj'),
(533, 'add some water'),
(493, 'hjhj'),
(869, 'hjhj'),
(869, 'boil water and salt'),
(869, 'boil noodles'),
(869, 'cut vegetables'),
(437, 'hjhj'),
(793, 'hjhj'),
(683, 'hjhj'),
(683, 'wash vegetables'),
(683, 'add some salt'),
(683, 'boil for 1 hour'),
(793, 'add some salt'),
(204, 'cook good');

-- --------------------------------------------------------

--
-- Table structure for table `add_ingredient`
--

CREATE TABLE `add_ingredient` (
  `ingrd_id` int(11) NOT NULL,
  `ingrd_image` blob DEFAULT NULL,
  `ingrd_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_ingredient`
--

INSERT INTO `add_ingredient` (`ingrd_id`, `ingrd_image`, `ingrd_name`, `quantity`) VALUES
(592, NULL, 'hhh', '4'),
(620, NULL, 'hhh', '4'),
(987, NULL, 'hhh', '4'),
(841, NULL, 'orange', '3'),
(244, NULL, 'hhh', '4'),
(912, NULL, 'hhh', '4'),
(615, NULL, 'hhh', '4'),
(448, NULL, 'hhh', '4'),
(448, NULL, 'noodles', '1 packet'),
(448, NULL, 'capsium', '2'),
(448, NULL, 'carrot', '2'),
(182, NULL, 'hhh', '4'),
(960, NULL, 'hhh', '4'),
(976, NULL, 'hhh', '4'),
(182, 0x494d472d36336337623434306631316561372e39363436373034392e6a70677c2e2f696d616765732f494d472d36336337623434306631316561372e39363436373034392e6a7067, 'banana', '3'),
(182, 0x494d472d36336337623435653236343963362e32363632343633362e6a70677c2e2f696d616765732f494d472d36336337623435653236343963362e32363632343633362e6a7067, 'dfdff', '1'),
(182, 0x494d472d36336337623631633439333438392e37323737393938382e6a70677c2e2f696d616765732f494d472d36336337623631633439333438392e37323737393938382e6a7067, 'salt', '1spoon'),
(182, 0x494d472d36336337623731356436323866392e36353034373631392e6a70677c2e2f696d616765732f494d472d36336337623731356436323866392e36353034373631392e6a7067, 'sugar', '1spoon'),
(924, 0x494d472d36336565366135633135636534362e31363134323837382e706e677c2e2f696d616765732f494d472d36336565366135633135636534362e31363134323837382e706e67, 'Salt', '2 '),
(924, 0x494d472d36336565366137646239663562382e35363034323338312e706e677c2e2f696d616765732f494d472d36336565366137646239663562382e35363034323338312e706e67, 'sugar', '2');

-- --------------------------------------------------------

--
-- Table structure for table `calorietracker`
--

CREATE TABLE `calorietracker` (
  `caloriesconsumed` int(11) NOT NULL,
  `meal` varchar(50) NOT NULL,
  `goal` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `carbs` int(11) DEFAULT NULL,
  `fiber` int(11) DEFAULT NULL,
  `protein` int(11) DEFAULT NULL,
  `fat` int(11) DEFAULT NULL,
  `clientID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `num` int(11) NOT NULL,
  `category` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`num`, `category`) VALUES
(1, 'Pancake'),
(2, 'Croissants'),
(3, 'Butter Bread'),
(4, 'Poha'),
(5, 'Omelete'),
(6, 'Sandwich'),
(7, 'Waffles'),
(8, 'Crepes'),
(9, 'Juice'),
(10, 'Paratha');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 3, 1, 'Hiii', 1, '2023-01-23 19:59:22'),
(2, 3, 2, 'Heloo', 0, '2023-01-23 19:59:32'),
(3, 4, 1, 'Hi', 1, '2023-01-23 23:57:56'),
(4, 4, 2, 'heloooo\n', 0, '2023-01-24 19:21:29'),
(5, 4, 3, 'Hiii', 1, '2023-01-24 19:21:43'),
(6, 4, 1, 'hi\n', 1, '2023-01-25 20:21:13'),
(7, 1, 2, 'hii\n', 0, '2023-01-27 19:19:04'),
(8, 1, 2, 'helloo\n', 0, '2023-01-27 19:20:28'),
(9, 1, 3, 'HIiiii\n', 1, '2023-01-27 19:22:36'),
(10, 1, 3, 'hiii', 1, '2023-01-27 19:26:01'),
(11, 1, 4, 'hiii', 1, '2023-01-27 19:26:11'),
(12, 1, 2, 'hiii\n', 0, '2023-01-27 19:59:48'),
(13, 1, 4, 'hi\n', 1, '2023-01-27 20:00:35'),
(14, 1, 4, 'Helloo', 1, '2023-01-27 20:00:40'),
(15, 4, 1, 'hii', 1, '2023-01-28 00:07:43'),
(16, 1, 2, 'hiii', 0, '2023-01-28 00:21:14'),
(17, 4, 1, 'hiii\n', 1, '2023-01-28 00:21:25'),
(18, 1, 2, 'hii', 0, '2023-01-28 00:21:32'),
(19, 1, 4, 'hiii\n', 1, '2023-01-28 00:21:43'),
(20, 4, 1, 'hiii', 1, '2023-01-28 00:21:49'),
(21, 1, 4, 'hiasdasda', 1, '2023-01-28 00:21:59'),
(22, 1, 4, 'asdasdasd', 1, '2023-01-28 00:22:03'),
(23, 1, 4, 'asdas', 1, '2023-01-28 00:22:05'),
(24, 1, 2, 'HIiii Rammm how r u?\n', 0, '2023-01-28 12:27:55'),
(25, 1, 4, 'Hii Akashhhh!', 1, '2023-01-28 12:28:07'),
(26, 1, 3, 'Hiii Rajii', 0, '2023-01-28 12:28:15'),
(32, 1, 2, 'hiiii', 0, '2023-01-28 14:21:13'),
(33, 1, 2, 'hello', 0, '2023-01-28 14:21:17'),
(34, 1, 2, 'Hiiii', 0, '2023-01-28 14:32:30'),
(35, 1, 2, 'asdasdasd', 0, '2023-01-28 14:32:34'),
(36, 1, 2, 'asdasd', 0, '2023-01-28 14:32:36'),
(37, 1, 2, 'asdasd', 0, '2023-01-28 14:32:37'),
(38, 4, 1, 'Hiii Sabari', 1, '2023-01-31 19:18:54'),
(39, 1, 3, 'Hi Robin', 0, '2023-01-31 19:25:35'),
(40, 1, 3, 'Heloo \nvanakkam', 0, '2023-01-31 19:25:42'),
(41, 1, 3, 'Heii', 0, '2023-01-31 19:25:47'),
(42, 1, 3, 'hii', 0, '2023-01-31 19:25:50'),
(43, 1, 3, 'hello', 0, '2023-01-31 19:25:54'),
(44, 1, 2, 'Hi Ram Kumar', 0, '2023-01-31 19:26:12'),
(45, 1, 4, 'Hi John', 1, '2023-01-31 19:28:33'),
(46, 4, 1, 'Hiiii sabari', 1, '2023-02-09 20:41:20'),
(47, 1, 2, 'HI', 0, '2023-02-10 18:43:45'),
(48, 1, 4, 'Helllo', 1, '2023-02-10 18:44:09'),
(49, 4, 1, 'Hiii chetram\n', 1, '2023-02-10 18:44:19'),
(50, 1, 2, 'hii', 0, '2023-02-13 14:21:26'),
(51, 4, 1, 'hiii', 1, '2023-02-13 14:22:05'),
(52, 1, 4, 'Hello! Have you seen my backpack anywhere in office?', 1, '2023-02-13 15:56:56'),
(53, 4, 1, 'Hi, yes, David have found it, ask our concierge 👀 ', 1, '2023-02-13 15:58:24'),
(54, 1, 4, 'See you at office tomorrow!', 1, '2023-02-13 15:58:56'),
(55, 1, 4, 'Thank you for work, see you!', 1, '2023-02-13 15:59:14'),
(56, 4, 1, 'Thank you for work, see you!', 1, '2023-02-13 15:59:23'),
(57, 1, 4, 'Hiii John', 1, '2023-02-13 20:08:34'),
(58, 1, 2, 'see', 0, '2023-02-16 19:19:46'),
(59, 1, 3, 'ssss', 0, '2023-02-16 19:20:00'),
(60, 1, 2, 'testing', 0, '2023-02-16 22:43:36'),
(61, 1, 2, 'testing', 0, '2023-02-16 22:44:27'),
(64, 1, 2, 'IMG-63ee66486cdeb9.81573635.png', 0, '2023-02-16 22:52:16'),
(65, 1, 2, 'IMG-63ee700ed05603.09358328.jpg', 0, '2023-02-16 23:33:58'),
(66, 1, 4, 'IMG-63ee745a67b809.51528075.png', 1, '2023-02-16 23:52:18'),
(67, 1, 4, 'IMG-63ee7491e7aad0.71101733.jpg', 1, '2023-02-16 23:53:13'),
(68, 4, 1, 'IMG-63ee74b34a79b2.11900534.png', 1, '2023-02-16 23:53:47'),
(69, 1, 4, 'helo', 1, '2023-02-18 16:22:49'),
(70, 1, 4, 'hiii', 1, '2023-02-18 16:47:30'),
(71, 1, 4, 'IMG-63f0c38a4ef6c1.99543051.png', 1, '2023-02-18 17:54:42'),
(72, 1, 4, 'IMG-63f0d614e75ff3.93358298.png', 1, '2023-02-18 19:13:48'),
(73, 1, 4, 'IMG-63f0d630904f69.70174990.png', 1, '2023-02-18 19:14:16'),
(74, 1, 4, 'hiii', 1, '2023-02-18 19:18:44'),
(75, 4, 1, 'sadasdsa', 1, '2023-02-20 21:03:21'),
(76, 1, 3, 'Heloo vanakkam helooooo', 0, '2023-02-20 23:26:36'),
(77, 1, 4, 'heloooooooo o o oo o o o o oo o o', 1, '2023-02-20 23:27:08'),
(83, 4, 3, 'Hello', 0, '2023-02-21 21:13:12'),
(84, 4, 3, 'Hiii', 0, '2023-02-21 21:13:18'),
(85, 4, 1, 'Sammm', 1, '2023-02-21 21:47:06'),
(86, 1, 3, 'sam', 0, '2023-02-21 21:47:32'),
(100, 6, 1, 'Hiiiii', 1, '2023-02-22 19:43:06'),
(101, 6, 1, 'Helllo', 1, '2023-02-22 19:43:12'),
(103, 1, 2, 'asdasdasdasd', 0, '2023-02-25 17:35:48'),
(104, 1, 2, 'hiii', 0, '2023-02-25 17:35:57'),
(105, 1, 2, 'hiiii', 0, '2023-02-25 17:36:39'),
(106, 1, 2, 'hellooo', 0, '2023-02-25 17:36:50'),
(107, 1, 2, 'hello', 0, '2023-02-25 21:41:21'),
(108, 1, 3, 'Hii', 0, '2023-02-27 00:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `clientuserID` varchar(25) NOT NULL,
  `password` varchar(12) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `plan` varchar(30) DEFAULT NULL,
  `profilePhoto` blob DEFAULT NULL,
  `p_p` varchar(255) NOT NULL DEFAULT 'user-default.png',
  `dietitianuserID` varchar(25) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `age` int(11) NOT NULL,
  `verification` tinyint(1) NOT NULL DEFAULT 0,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `clientuserID`, `password`, `name`, `location`, `email`, `mobile`, `plan`, `profilePhoto`, `p_p`, `dietitianuserID`, `gender`, `age`, `verification`, `height`, `weight`, `last_seen`) VALUES
(2, 'Azarudeen', 'password', 'Azarudeen A', 'Trichy', 'azarudeendhinesh@gmail.com', '8667288997', NULL, 0x417a6172756465656e, 'user-default.png', 'Rahul', 'M', 30, 1, 85, 67, '2023-02-22 23:10:16'),
(3, 'c001', 'c001', 'John', 'pune', 'xy@vb.com', '9090090', 'muscle Gain', NULL, 'user-default.png', 'd001', 'f', 45, 1, 454, 34, '2023-02-22 23:10:16'),
(4, 'c002', 'c002', 'Amit', 'pune', 'er@gh.in', '8989789', NULL, NULL, 'user-default.png', 'd001', 'f', 34, 1, 556, 66, '2023-02-22 23:10:16'),
(7, 'client1', '123456', 'sam', 'chennai', 'sam@gmail.com', '1234567890', 'planb', NULL, 'user-default.png', '1', '1', 1, 20, 1, 1, '2023-02-24 19:48:52'),
(1, 'samr', '123456', 'sam', 'chennai', 'sam@gmail.com', '1234567890', 'planb', NULL, 'user-default.png', '1', '1', 1, 20, 1, 1, '2023-02-24 19:48:17'),
(6, 'samr123', '123456', 'sam', 'chennai', 'sam@gmail.com', '1234567890', 'planb', NULL, 'user-default.png', '1', '1', 1, 20, 1, 1, '2023-02-24 19:48:37'),
(5, 'vishal', '123456', 'Vishal', 'delhi', 'vishal@gmail.com', '12312312', 'planc', NULL, 'user-default.png', '1', 'm', 23, 0, 50, 100, '2023-02-25 13:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `clientcon`
--

CREATE TABLE `clientcon` (
  `ClientName` text NOT NULL,
  `question` text NOT NULL,
  `answers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client_health_files`
--

CREATE TABLE `client_health_files` (
  `clientID` varchar(30) NOT NULL,
  `dietitianuserID` varchar(30) NOT NULL,
  `files` text NOT NULL,
  `upload_date` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `dateAndTime` datetime NOT NULL,
  `dietitianID` varchar(25) NOT NULL,
  `clientID` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL,
  `convo_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`, `convo_time`) VALUES
(1, 3, 1, '2023-02-17 11:06:31'),
(2, 3, 2, '2023-02-17 11:06:31'),
(3, 4, 1, '2023-02-17 11:06:31'),
(4, 4, 2, '2023-02-17 11:06:31'),
(5, 4, 3, '2023-02-17 11:06:31'),
(6, 1, 2, '2023-02-17 11:06:31'),
(10, 6, 1, '2023-02-22 19:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `create_client`
--

CREATE TABLE `create_client` (
  `dietitianuserID` varchar(30) NOT NULL,
  `clientName` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `about` text NOT NULL,
  `description` text NOT NULL,
  `title` text NOT NULL,
  `plantitle` text NOT NULL,
  `plandescription` text NOT NULL,
  `referalcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_client`
--

INSERT INTO `create_client` (`dietitianuserID`, `clientName`, `gender`, `age`, `height`, `weight`, `about`, `description`, `title`, `plantitle`, `plandescription`, `referalcode`) VALUES
('doo1', 'John', 'M', 45, 78, 89, 'loose weight', 'healty food', 'hhjk', 'healthy', 'vegetables', '13E2DCBE'),
('doo1', 'Amit', 'M', 45, 78, 89, 'loose weight', 'healty food', 'hhjk', 'healthy', 'vegetables', 'DGH56'),
('doo1', 'Jack', 'M', 45, 78, 89, 'loose weight', 'healty food', 'hhjk', 'healthy', 'vegetables', '13E2DCBE');

-- --------------------------------------------------------

--
-- Table structure for table `create_event`
--

CREATE TABLE `create_event` (
  `eventID` int(11) NOT NULL,
  `dietitianuserID` varchar(255) DEFAULT NULL,
  `eventname` varchar(150) DEFAULT NULL,
  `clientuserid` varchar(100) DEFAULT NULL,
  `meeting_type` varchar(100) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `place_of_meeting` varchar(150) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_event`
--

INSERT INTO `create_event` (`eventID`, `dietitianuserID`, `eventname`, `clientuserid`, `meeting_type`, `start_date`, `end_date`, `place_of_meeting`, `description`, `attachment`) VALUES
(1, 'John_wayne', 'call with test1', '3', 'Video Chat', '2023-02-02 15:04:34', '2023-02-17 13:04:34', 'ONLINE', 'nsabd jddk', 'NA'),
(2, 'John_wayne', 'call with test1', '3', 'Video Chat', '2023-02-03 05:04:34', '2023-02-17 13:04:34', 'ONLINE', 'nsabd jddk', 'NA'),
(3, 'John_wayne', 'call with test2', '4', 'Video Chat', '2023-02-01 08:04:34', '2023-02-17 13:04:34', 'ONLINE', 'nsabd jddk', 'NA'),
(4, 'John_wayne', 'call with test2', '4', 'Video Chat', '2023-01-30 08:04:34', '2023-02-17 13:04:34', 'ONLINE', 'nsabd jddk', 'NA'),
(5, 'John_wayne', 'call with test2', '4', 'Video Chat', '2023-02-16 08:04:34', '2023-02-17 13:04:34', 'ONLINE', 'nsabd jddk', 'NA'),
(6, 'John_wayne', 'call with test2', '4', 'Video Chat', '2023-02-08 08:04:34', '2023-02-17 13:04:34', 'ONLINE', 'nsabd jddk', 'NA'),
(7, 'John_wayne', 'Consultation', '1', 'Call', '2023-02-20 23:18:00', '2023-02-16 13:21:00', 'onlien', 'x<ZC', 'hello'),
(8, 'John_wayne', 'Dietplan', '2', 'Call', '2023-02-14 22:00:00', '2023-05-19 22:00:00', 'onlien', 'nothing but just a try', 'hello'),
(9, 'John_wayne', 'Dietplan', '1', 'Videocall', '2023-02-16 23:30:00', '2023-02-25 23:30:00', 'onlien', 'x<ZC', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `create_plan`
--

CREATE TABLE `create_plan` (
  `plan_id` int(11) NOT NULL,
  `profile` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `duration` varchar(25) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `features` varchar(255) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_plan`
--

INSERT INTO `create_plan` (`plan_id`, `profile`, `image`, `name`, `tags`, `duration`, `start_date`, `end_date`, `features`, `description`, `price`) VALUES
(1, 'Plan test', 'No Image', 'TEST PLAN', 'Fit', '2', '2022-03-01', '2023-03-31', 'Fit', 'NAjkd dkjsdn sdk', 500);

-- --------------------------------------------------------

--
-- Table structure for table `dietian_recipies`
--

CREATE TABLE `dietian_recipies` (
  `name` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `serving` int(11) NOT NULL,
  `link` text NOT NULL,
  `calories` int(11) NOT NULL,
  `proteins` int(11) NOT NULL,
  `fats` int(11) NOT NULL,
  `fibres` int(11) NOT NULL,
  `carbs` int(11) NOT NULL,
  `ingredient` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `dietitianuserID` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `file` text DEFAULT NULL,
  `course` varchar(200) NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietian_recipies`
--

INSERT INTO `dietian_recipies` (`name`, `time`, `serving`, `link`, `calories`, `proteins`, `fats`, `fibres`, `carbs`, `ingredient`, `instruction`, `category`, `dietitianuserID`, `image`, `file`, `course`, `recipe_id`) VALUES
('mn', '2|2', 3, 'HELLO HOW R U?', 3, 33, 33, 90, 33, 1, 1, 'bachelors', 'Sam', 'IMG-63b00e85c01e51.48203280.png|./images/IMG-63b00e85c01e51.48203280.png', 'file', 'bachelors', 10),
('upma', '3|10', 6, 'ffg', 12, 12, 12, 12, 12, 121, 123, 'Breakfast', 'Sam', 'IMG-63bc01a8e3d1b9.25195249.png|./images/IMG-63bc01a8e3d1b9.25195249.png', 'file', 'Poha', 11),
('test', '25|25', 1, 'HELLO HOW R U?', 74, 55, 222, 90, 22, 924, 204, 'Croissants', 'John_wayne', 'IMG-63ee6a31989196.46226359.png|./images/IMG-63ee6a31989196.46226359.png', 'file', 'Breakfast', 754),
('dal', '1 hour|1hour', 5, 'HELLO HOW R U?', 23, 10, 56, 90, 67, 182, 437, 'dinner', 'Sam', 'IMG-63bc18376da0d0.29734975.jpg|./images/IMG-63bc18376da0d0.29734975.jpg', 'file', 'Paratha', 12),
('pancake', '30min|30min', 4, 'HELLO HOW R U?', 11, 11, 11, 90, 11, 615, 493, 'eleven', 'Sam', 'IMG-63bc03c203d924.41992189.jpg|./images/IMG-63bc03c203d924.41992189.jpg', 'file', 'Pancake', 13),
('paneer tikka', '2hour|2hour', 5, 'HELLO HOW R U?', 22, 22, 22, 90, 22, 620, 501, 'masters', 'Sam', 'IMG-63b04431a6f277.95427466.jpg|./images/IMG-63b04431a6f277.95427466.jpg', 'file', 'masters', 14),
('banana shake', '1min|2min', 2, 'HELLO HOW R U?', 22, 1, 11, 90, 10, 912, 533, 'Breakfast', 'Sam', 'IMG-63bc02a93baa51.27799861.jpg|./images/IMG-63bc02a93baa51.27799861.jpg', 'file', 'Juice', 15),
('fgfg', '1hour|1hour', 3, 'HELLO HOW R U?', 23, 333, 34, 90, 21, 976, 683, 'dinner', 'Sam', 'IMG-63bc19dc524df9.21169176.jpg|./images/IMG-63bc19dc524df9.21169176.jpg', 'file', 'Paratha', 16),
('alooparatha', '3|2', 5, 'HELLO HOW R U?', 12, 34, 12, 90, 23, 987, 762, 'Breakfast', 'Sam', 'IMG-63baa0d65cdb83.27896423.jpg|./images/IMG-63baa0d65cdb83.27896423.jpg', 'file', 'Paratha', 17),
('orange juice', '10min|10min', 2, 'HELLO HOW R U?', 23, 11, 45, 90, 10, 841, 784, 'Breakfast', 'Sam', 'IMG-63baa40a29af79.37766680.jpg|./images/IMG-63baa40a29af79.37766680.jpg', 'file', 'Juice', 18),
('potato poha', '15min|15min', 4, 'HELLO HOW R U?', 4, 34, 23, 90, 11, 960, 793, 'snack', 'Sam', 'IMG-63bc1974405699.21855670.png|./images/IMG-63bc1974405699.21855670.png', 'file', 'Poha', 19),
('poha', '3|4', 4, 'gfgfh', 23, 23, 23, 90, 23, 592, 852, 'masters', 'Sam', 'IMG-63b0439063fc05.77151390.png|./images/IMG-63b0439063fc05.77151390.png', 'IMG-63c7e1389fdb88.92260912.jpg|./images/IMG-63c7e1389fdb88.92260912.jpg', 'highschool', 20),
('noodles', '20min|20min', 2, 'HELLO HOW R U?', 34, 11, 12, 90, 11, 448, 869, 'Lunch', 'Sam', 'IMG-63bc1325e6cd73.08169323.jpg|./images/IMG-63bc1325e6cd73.08169323.jpg', 'file', 'Sandwich', 21),
('onion poha', '2min|2min', 4, 'HELLO HOW R U?', 11, 22, 11, 90, 22, 244, 907, 'Breakfast', 'Sam', 'IMG-63bc01a8e3d1b9.25195249.png|./images/IMG-63bc01a8e3d1b9.25195249.png', 'file', 'Poha', 22);

-- --------------------------------------------------------

--
-- Table structure for table `dietitian`
--

CREATE TABLE `dietitian` (
  `dietitian_id` int(11) NOT NULL,
  `dietitianuserID` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `profilePhoto` blob DEFAULT NULL,
  `p_p` varchar(255) NOT NULL DEFAULT 'user-default.png',
  `location` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `experience` float NOT NULL,
  `about_me` varchar(250) NOT NULL,
  `no_of_clients` int(11) NOT NULL,
  `referral_code` varchar(15) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietitian`
--

INSERT INTO `dietitian` (`dietitian_id`, `dietitianuserID`, `password`, `name`, `qualification`, `email`, `mobile`, `profilePhoto`, `p_p`, `location`, `age`, `gender`, `experience`, `about_me`, `no_of_clients`, `referral_code`, `facebook`, `whatsapp`, `twitter`, `linkedin`, `instagram`, `last_seen`) VALUES
(4, 'ash', '123456', 'John Doe', '45', 'bnn@hm.in', '898098', 0x494d472d36336263303161386533643162392e32353139353234392e706e677c2e2f696d616765732f494d472d36336263303161386533643162392e32353139353234392e706e67, 'user-default.png', 'bvb', 89, 'M', 45, 'vbvnfg', 67, 'yuigcv', NULL, NULL, NULL, NULL, NULL, '2023-02-24 21:13:03'),
(2, 'doo1', 'nbsnmbm', 'John', '56', 'dv@n.in', '8888888', 0x494d472d36336263303161386533643162392e32353139353234392e706e677c2e2f696d616765732f494d472d36336263303161386533643162392e32353139353234392e706e67, 'user-default.png', 'pune', 45, 'M', 10, 'bhjg', 12, 'E7AC6E43', NULL, NULL, NULL, NULL, NULL, '2023-02-20 18:22:48'),
(3, 'doo2', 'bvb', 'Sam', '32', 'gh@.in', '9999900', 0x494d472d36336263303161386533643162392e32353139353234392e706e677c2e2f696d616765732f494d472d36336263303161386533643162392e32353139353234392e706e67, 'user-default.png', 'hjk', 21, 'M', 12, 'df', 12, 'rytutyf', NULL, NULL, NULL, NULL, NULL, '2023-02-20 18:22:48'),
(5, 'doo4', 'nbnbm', 'Tom', '23', 'hj@ju.in', '67687898', 0x494d472d36336263303161386533643162392e32353139353234392e706e677c2e2f696d616765732f494d472d36336263303161386533643162392e32353139353234392e706e67, 'user-default.png', 'dfd', 34, 'M', 23, 'ffgf', 23, 'E7AC6E43', NULL, NULL, NULL, NULL, NULL, '2023-02-20 18:22:48'),
(6, 'John_wayne', '123', 'John_wayne', 'na', 'na', 'na', NULL, 'user-default.png', 'na', 25, 'm', 5, 'shj jhb', 12, '', NULL, NULL, NULL, NULL, NULL, '2023-02-22 19:43:13'),
(1, 'sabari', '123456', 'Sabari Nathan', '34', 'bn@ju.in', '87896767', 0x494d472d36336263303161386533643162392e32353139353234392e706e677c2e2f696d616765732f494d472d36336263303161386533643162392e32353139353234392e706e67, 'user-default.png', 'ddd', 33, 'F', 23, 'xcdf', 12, 'rytutyf', NULL, NULL, NULL, NULL, NULL, '2023-02-27 19:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `dietitian_client`
--

CREATE TABLE `dietitian_client` (
  `dietitianID` varchar(25) NOT NULL,
  `clientID` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(45, 'John_wayne', 'Title', 'description', '2023-02-08', '20:49', '', 0, '2023-02-18 14:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `diet_chart`
--

CREATE TABLE `diet_chart` (
  `dietitianuserID` varchar(30) NOT NULL,
  `clientID` varchar(30) NOT NULL,
  `sunday` longtext NOT NULL,
  `monday` text NOT NULL,
  `tuesday` text NOT NULL,
  `wednesday` text NOT NULL,
  `thursday` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `friday` text NOT NULL,
  `saturday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diet_chart`
--

INSERT INTO `diet_chart` (`dietitianuserID`, `clientID`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
('d001', '1', 'Breakfast|alooparatha}Lunch|dal', 'Breakfast|alooparatha}Lunch|dal', 'Breakfast|alooparatha}Lunch|dal', 'Breakfast|alooparatha}Lunch|dal', 'Breakfast|alooparatha}Lunch|dal', 'Breakfast|alooparatha}Lunch|dal', 'Breakfast|alooparatha}Lunch|dal'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat'),
('sam', 'dfgg', 'sun', 'mon', 'tue', 'wed', 'thu', ' fri', ' sat');

-- --------------------------------------------------------

--
-- Table structure for table `food_data_base_for_diet_chart`
--

CREATE TABLE `food_data_base_for_diet_chart` (
  `name` varchar(50) NOT NULL,
  `calorie` int(11) NOT NULL,
  `description` text NOT NULL,
  `nutrients` text NOT NULL,
  `ingredients` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `preparation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`goal_id`, `dietition_id`, `client_id`, `steps`, `heart`, `water`, `weight`, `sleep`, `calorie`, `time`) VALUES
(9, 'John_wayne', 2, 3000, 0, 26, 0, 8, 209, '2023-02-12 09:35:54'),
(10, 'John_wayne', 12, 0, 0, 0, 0, 0, 5000, '2023-02-12 09:37:13'),
(11, 'John_wayne', 3, 3000, 300, 26, 67, 8, 5000, '2023-02-12 12:16:34'),
(19, 'John_wayne', 1, 3000, 0, 0, 0, 8, 5000, '2023-02-12 15:40:27'),
(20, 'John_wayne', 4, 3000, 300, 0, 67, 8, 5000, '2023-02-12 16:00:44'),
(21, 'John_wayne', 5, 3000, 300, 0, 67, 8, 5000, '2023-02-14 14:51:40'),
(29, 'John_wayne', 6, 3000, 0, 0, 0, 8, 0, '2023-02-16 17:01:34'),
(30, 'John_wayne', 7, 3000, 0, 0, 0, 0, 0, '2023-02-16 17:01:35'),
(31, 'John_wayne', 8, 3000, 0, 0, 0, 0, 0, '2023-02-16 17:53:04'),
(32, 'John_wayne', 9, 3000, 0, 0, 0, 0, 0, '2023-02-17 15:36:09'),
(33, 'John_wayne', 10, 3000, 0, 0, 0, 0, 0, '2023-02-17 18:22:44'),
(34, 'John_wayne', 11, 0, 0, 0, 0, 0, 0, '2023-02-17 18:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `heartrate`
--

CREATE TABLE `heartrate` (
  `clientID` varchar(30) NOT NULL,
  `average` varchar(4) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `maximum` text NOT NULL,
  `minimum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heartrate`
--

INSERT INTO `heartrate` (`clientID`, `average`, `dateandtime`, `maximum`, `minimum`) VALUES
('3', '77', '2022-01-01 09:01:00', '79', '71'),
('3', '80', '2022-01-02 11:39:00', '81', '71'),
('3', '78', '2022-01-03 12:44:00', '82', '70'),
('3', '80', '2022-01-04 10:42:00', '82', '71'),
('3', '75', '2022-01-05 12:24:00', '80', '71'),
('3', '79', '2022-01-06 12:56:00', '82', '69'),
('3', '80', '2022-01-07 11:57:00', '83', '69'),
('3', '80', '2022-01-08 08:14:00', '84', '70'),
('3', '78', '2022-01-09 15:22:00', '83', '69'),
('3', '80', '2022-01-10 08:51:00', '83', '69'),
('3', '75', '2022-01-11 09:15:00', '83', '69'),
('3', '77', '2022-01-12 12:24:00', '82', '69'),
('3', '77', '2022-01-13 10:21:00', '84', '70'),
('3', '76', '2022-01-14 12:50:00', '80', '69'),
('3', '78', '2022-01-15 09:13:00', '85', '71'),
('3', '80', '2022-01-16 05:29:00', '85', '70'),
('3', '79', '2022-01-17 06:10:00', '79', '70'),
('3', '78', '2022-01-18 10:22:00', '81', '69'),
('3', '79', '2022-01-19 13:27:00', '84', '69'),
('3', '77', '2022-01-20 11:22:00', '84', '70'),
('3', '76', '2022-01-21 13:23:00', '79', '69'),
('3', '75', '2022-01-22 14:58:00', '82', '69'),
('3', '80', '2022-01-23 14:02:00', '84', '71'),
('3', '77', '2022-01-24 10:27:00', '80', '71'),
('3', '78', '2022-01-25 09:10:00', '79', '71'),
('3', '79', '2022-01-26 11:20:00', '83', '70'),
('3', '79', '2022-01-27 12:54:00', '80', '69'),
('3', '79', '2022-01-28 06:54:00', '85', '71'),
('3', '75', '2022-01-29 09:49:00', '79', '71'),
('3', '77', '2022-01-30 11:05:00', '79', '71'),
('3', '78', '2022-01-31 09:19:00', '80', '70'),
('3', '77', '2022-02-01 10:45:00', '85', '71'),
('3', '78', '2022-02-02 08:24:00', '81', '69'),
('3', '79', '2022-02-03 09:34:00', '80', '71'),
('3', '79', '2022-02-04 09:28:00', '82', '70'),
('3', '78', '2022-02-05 14:48:00', '79', '69'),
('3', '80', '2022-02-06 15:08:00', '84', '71'),
('3', '80', '2022-02-07 04:41:00', '83', '69'),
('3', '76', '2022-02-08 14:58:00', '80', '69'),
('3', '75', '2022-02-09 05:47:00', '82', '70'),
('3', '76', '2022-02-10 12:43:00', '83', '69'),
('3', '80', '2022-02-11 09:11:00', '83', '69'),
('3', '76', '2022-02-12 09:16:00', '82', '71'),
('3', '76', '2022-02-13 04:31:00', '85', '70'),
('3', '77', '2022-02-14 12:47:00', '84', '69'),
('3', '76', '2022-02-15 04:39:00', '83', '69'),
('3', '75', '2022-02-16 14:28:00', '81', '70'),
('3', '78', '2022-02-17 13:20:00', '79', '70'),
('3', '80', '2022-02-18 13:51:00', '84', '69'),
('3', '78', '2022-02-19 05:05:00', '80', '71'),
('3', '76', '2022-02-20 09:22:00', '82', '70'),
('3', '80', '2022-02-21 11:00:00', '83', '71'),
('3', '77', '2022-02-22 09:48:00', '82', '69'),
('3', '78', '2022-02-23 09:19:00', '85', '70'),
('3', '77', '2022-02-24 06:59:00', '82', '71'),
('3', '75', '2022-02-25 06:54:00', '84', '70'),
('3', '76', '2022-02-26 11:46:00', '84', '71'),
('3', '76', '2022-02-27 13:42:00', '85', '70'),
('3', '76', '2022-02-28 11:17:00', '85', '70'),
('3', '79', '2022-03-01 14:44:00', '84', '70'),
('3', '75', '2022-03-02 11:17:00', '82', '69'),
('3', '77', '2022-03-03 14:26:00', '83', '71'),
('3', '79', '2022-03-04 14:49:00', '84', '70'),
('3', '78', '2022-03-05 07:41:00', '84', '69'),
('3', '75', '2022-03-06 07:20:00', '83', '69'),
('3', '76', '2022-03-07 13:41:00', '85', '69'),
('3', '79', '2022-03-08 04:35:00', '84', '69'),
('3', '79', '2022-03-09 13:44:00', '85', '71'),
('3', '79', '2022-03-10 09:35:00', '84', '70'),
('3', '80', '2022-03-11 11:38:00', '81', '69'),
('3', '75', '2022-03-12 07:55:00', '80', '71'),
('3', '77', '2022-03-13 11:18:00', '79', '71'),
('3', '79', '2022-03-14 07:44:00', '79', '69'),
('3', '79', '2022-03-15 08:59:00', '79', '71'),
('3', '76', '2022-03-16 15:22:00', '82', '71'),
('3', '80', '2022-03-17 06:48:00', '85', '69'),
('3', '79', '2022-03-18 04:56:00', '83', '71'),
('3', '76', '2022-03-19 12:39:00', '81', '71'),
('3', '80', '2022-03-20 05:21:00', '80', '69'),
('3', '77', '2022-03-21 14:51:00', '83', '69'),
('3', '77', '2022-03-22 07:57:00', '81', '71'),
('3', '75', '2022-03-23 05:18:00', '85', '69'),
('3', '76', '2022-03-24 12:36:00', '79', '69'),
('3', '79', '2022-03-25 07:41:00', '84', '70'),
('3', '80', '2022-03-26 06:24:00', '85', '71'),
('3', '80', '2022-03-27 14:06:00', '85', '70'),
('3', '75', '2022-03-28 06:46:00', '81', '71'),
('3', '79', '2022-03-29 09:44:00', '79', '69'),
('3', '80', '2022-03-30 09:55:00', '80', '71'),
('3', '80', '2022-03-31 12:03:00', '84', '71'),
('3', '79', '2022-04-01 14:45:00', '83', '71'),
('3', '77', '2022-04-02 11:38:00', '85', '70'),
('3', '75', '2022-04-03 04:53:00', '83', '71'),
('3', '78', '2022-04-04 10:44:00', '80', '71'),
('3', '77', '2022-04-05 13:05:00', '80', '69'),
('3', '77', '2022-04-06 07:26:00', '84', '71'),
('3', '79', '2022-04-07 12:01:00', '82', '71'),
('3', '77', '2022-04-08 09:09:00', '83', '70'),
('3', '78', '2022-04-09 05:36:00', '82', '69'),
('3', '78', '2022-04-10 05:10:00', '82', '71'),
('3', '78', '2022-04-11 14:55:00', '83', '70'),
('3', '79', '2022-04-12 13:43:00', '80', '69'),
('3', '78', '2022-04-13 15:04:00', '82', '70'),
('3', '77', '2022-04-14 08:26:00', '81', '70'),
('3', '77', '2022-04-15 08:00:00', '80', '70'),
('3', '80', '2022-04-16 11:36:00', '84', '70'),
('3', '75', '2022-04-17 07:04:00', '82', '70'),
('3', '77', '2022-04-18 07:29:00', '81', '69'),
('3', '80', '2022-04-19 05:34:00', '84', '69'),
('3', '76', '2022-04-20 14:17:00', '84', '69'),
('3', '78', '2022-04-21 12:36:00', '85', '71'),
('3', '75', '2022-04-22 05:04:00', '82', '71'),
('3', '76', '2022-04-23 12:46:00', '83', '70'),
('3', '77', '2022-04-24 09:07:00', '85', '71'),
('3', '78', '2022-04-25 08:11:00', '80', '71'),
('3', '78', '2022-04-26 09:24:00', '82', '71'),
('3', '79', '2022-04-27 10:39:00', '79', '69'),
('3', '77', '2022-04-28 08:02:00', '81', '70'),
('3', '78', '2022-04-29 08:07:00', '83', '71'),
('3', '79', '2022-04-30 13:16:00', '81', '70'),
('3', '76', '2022-05-01 06:38:00', '80', '69'),
('3', '78', '2022-05-02 08:35:00', '79', '69'),
('3', '76', '2022-05-03 14:48:00', '84', '69'),
('3', '76', '2022-05-04 07:30:00', '79', '71'),
('3', '78', '2022-05-05 09:54:00', '83', '71'),
('3', '77', '2022-05-06 08:44:00', '79', '69'),
('3', '79', '2022-05-07 13:19:00', '85', '71'),
('3', '78', '2022-05-08 04:40:00', '80', '71'),
('3', '79', '2022-05-09 15:25:00', '83', '71'),
('3', '78', '2022-05-10 13:25:00', '82', '69'),
('3', '80', '2022-05-11 06:57:00', '82', '69'),
('3', '79', '2022-05-12 04:36:00', '85', '71'),
('3', '77', '2022-05-13 04:47:00', '85', '69'),
('3', '78', '2022-05-14 12:44:00', '84', '71'),
('3', '78', '2022-05-15 14:49:00', '84', '70'),
('3', '76', '2022-05-16 09:33:00', '82', '69'),
('3', '78', '2022-05-17 07:38:00', '82', '71'),
('3', '78', '2022-05-18 15:26:00', '80', '71'),
('3', '78', '2022-05-19 06:03:00', '80', '70'),
('3', '80', '2022-05-20 10:19:00', '82', '70'),
('3', '76', '2022-05-21 13:26:00', '82', '70'),
('3', '76', '2022-05-22 13:43:00', '84', '70'),
('3', '75', '2022-05-23 06:37:00', '81', '71'),
('3', '78', '2022-05-24 10:01:00', '83', '69'),
('3', '76', '2022-05-25 13:01:00', '83', '71'),
('3', '78', '2022-05-26 07:44:00', '80', '71'),
('3', '78', '2022-05-27 06:14:00', '85', '69'),
('3', '77', '2022-05-28 09:48:00', '80', '69'),
('3', '78', '2022-05-29 07:19:00', '85', '71'),
('3', '76', '2022-05-30 09:01:00', '80', '69'),
('3', '77', '2022-05-31 13:20:00', '84', '69'),
('3', '79', '2022-06-01 04:36:00', '80', '71'),
('3', '76', '2022-06-02 11:43:00', '80', '71'),
('3', '76', '2022-06-03 07:29:00', '82', '70'),
('3', '76', '2022-06-04 12:24:00', '85', '69'),
('3', '75', '2022-06-05 12:04:00', '81', '71'),
('3', '80', '2022-06-06 08:36:00', '79', '70'),
('3', '80', '2022-06-07 08:57:00', '84', '69'),
('3', '80', '2022-06-08 06:46:00', '79', '69'),
('3', '80', '2022-06-09 14:40:00', '81', '71'),
('3', '76', '2022-06-10 05:40:00', '79', '69'),
('3', '80', '2022-06-11 07:48:00', '84', '71'),
('3', '79', '2022-06-12 12:13:00', '80', '71'),
('3', '76', '2022-06-13 11:04:00', '82', '70'),
('3', '78', '2022-06-14 12:18:00', '81', '71'),
('3', '77', '2022-06-15 09:35:00', '81', '71'),
('3', '76', '2022-06-16 08:48:00', '84', '70'),
('3', '76', '2022-06-17 14:01:00', '85', '71'),
('3', '80', '2022-06-18 07:56:00', '81', '70'),
('3', '76', '2022-06-19 08:58:00', '79', '71'),
('3', '78', '2022-06-20 08:36:00', '80', '71'),
('3', '75', '2022-06-21 09:11:00', '81', '71'),
('3', '79', '2022-06-22 10:17:00', '80', '70'),
('3', '79', '2022-06-23 12:21:00', '84', '70'),
('3', '80', '2022-06-24 09:21:00', '79', '69'),
('3', '77', '2022-06-25 08:50:00', '83', '71'),
('3', '79', '2022-06-26 05:52:00', '84', '69'),
('3', '77', '2022-06-27 04:49:00', '80', '71'),
('3', '75', '2022-06-28 11:26:00', '83', '69'),
('3', '76', '2022-06-29 11:20:00', '82', '70'),
('3', '77', '2022-06-30 09:57:00', '83', '69'),
('3', '77', '2022-07-01 08:22:00', '82', '71'),
('3', '75', '2022-07-02 12:45:00', '84', '69'),
('3', '76', '2022-07-03 12:39:00', '84', '71'),
('3', '80', '2022-07-04 13:56:00', '84', '69'),
('3', '79', '2022-07-05 06:23:00', '81', '70'),
('3', '77', '2022-07-06 13:45:00', '83', '69'),
('3', '77', '2022-07-07 09:51:00', '84', '71'),
('3', '79', '2022-07-08 12:56:00', '82', '70'),
('3', '80', '2022-07-09 09:05:00', '79', '71'),
('3', '78', '2022-07-10 08:15:00', '81', '69'),
('3', '77', '2022-07-11 07:39:00', '81', '71'),
('3', '80', '2022-07-12 12:04:00', '81', '69'),
('3', '76', '2022-07-13 09:14:00', '82', '70'),
('3', '78', '2022-07-14 10:03:00', '85', '69'),
('3', '75', '2022-07-15 11:30:00', '79', '71'),
('3', '76', '2022-07-16 06:30:00', '82', '71'),
('3', '78', '2022-07-17 14:00:00', '83', '69'),
('3', '80', '2022-07-18 09:46:00', '79', '71'),
('3', '80', '2022-07-19 06:56:00', '85', '69'),
('3', '77', '2022-07-20 09:29:00', '85', '70'),
('3', '78', '2022-07-21 11:37:00', '80', '69'),
('3', '80', '2022-07-22 14:17:00', '80', '71'),
('3', '76', '2022-07-23 05:24:00', '83', '70'),
('3', '79', '2022-07-24 09:48:00', '84', '71'),
('3', '77', '2022-07-25 06:19:00', '80', '71'),
('3', '79', '2022-07-26 08:00:00', '82', '71'),
('3', '76', '2022-07-27 11:05:00', '79', '70'),
('3', '75', '2022-07-28 10:19:00', '83', '69'),
('3', '76', '2022-07-29 14:32:00', '83', '69'),
('3', '80', '2022-07-30 08:24:00', '84', '70'),
('3', '79', '2022-07-31 07:05:00', '80', '69'),
('3', '76', '2022-08-01 15:21:00', '84', '69'),
('3', '77', '2022-08-02 08:32:00', '80', '71'),
('3', '77', '2022-08-03 13:50:00', '84', '69'),
('3', '75', '2022-08-04 05:39:00', '85', '70'),
('3', '79', '2022-08-05 11:30:00', '79', '70'),
('3', '77', '2022-08-06 09:12:00', '84', '71'),
('3', '78', '2022-08-07 04:56:00', '83', '70'),
('3', '79', '2022-08-08 11:04:00', '81', '70'),
('3', '75', '2022-08-09 10:28:00', '85', '70'),
('3', '76', '2022-08-10 11:43:00', '82', '71'),
('3', '79', '2022-08-11 09:40:00', '83', '69'),
('3', '80', '2022-08-12 11:23:00', '81', '70'),
('3', '79', '2022-08-13 13:13:00', '82', '70'),
('3', '75', '2022-08-14 11:20:00', '85', '69'),
('3', '78', '2022-08-15 09:32:00', '82', '70'),
('3', '78', '2022-08-16 10:46:00', '81', '71'),
('3', '80', '2022-08-17 07:29:00', '82', '71'),
('3', '76', '2022-08-18 13:50:00', '85', '69'),
('3', '80', '2022-08-19 12:16:00', '85', '71'),
('3', '75', '2022-08-20 10:47:00', '82', '71'),
('3', '78', '2022-08-21 12:11:00', '82', '70'),
('3', '77', '2022-08-22 07:44:00', '79', '70'),
('3', '76', '2022-08-23 14:03:00', '82', '71'),
('3', '77', '2022-08-24 08:19:00', '79', '71'),
('3', '80', '2022-08-25 05:22:00', '83', '69'),
('3', '75', '2022-08-26 06:18:00', '84', '69'),
('3', '78', '2022-08-27 05:50:00', '80', '69'),
('3', '80', '2022-08-28 14:54:00', '81', '69'),
('3', '77', '2022-08-29 08:15:00', '82', '71'),
('3', '76', '2022-08-30 09:23:00', '82', '70'),
('3', '77', '2022-08-31 07:24:00', '82', '69'),
('3', '80', '2022-09-01 12:42:00', '82', '69'),
('3', '75', '2022-09-02 04:56:00', '79', '71'),
('3', '78', '2022-09-03 12:21:00', '82', '69'),
('3', '80', '2022-09-04 06:59:00', '79', '69'),
('3', '75', '2022-09-05 12:50:00', '83', '71'),
('3', '76', '2022-09-06 07:03:00', '83', '70'),
('3', '80', '2022-09-07 07:18:00', '80', '70'),
('3', '77', '2022-09-08 08:36:00', '80', '71'),
('3', '76', '2022-09-09 05:47:00', '80', '69'),
('3', '79', '2022-09-10 13:40:00', '80', '71'),
('3', '80', '2022-09-11 07:43:00', '80', '70'),
('3', '75', '2022-09-12 05:52:00', '80', '69'),
('3', '79', '2022-09-13 13:57:00', '82', '70'),
('3', '78', '2022-09-14 15:28:00', '80', '69'),
('3', '80', '2022-09-15 10:56:00', '80', '70'),
('3', '77', '2022-09-16 09:58:00', '80', '69'),
('3', '75', '2022-09-17 11:25:00', '83', '69'),
('3', '77', '2022-09-18 07:58:00', '84', '71'),
('3', '78', '2022-09-19 15:24:00', '82', '69'),
('3', '75', '2022-09-20 11:14:00', '80', '70'),
('3', '79', '2022-09-21 09:38:00', '79', '69'),
('3', '79', '2022-09-22 10:40:00', '82', '69'),
('3', '77', '2022-09-23 13:44:00', '81', '71'),
('3', '80', '2022-09-24 13:52:00', '79', '71'),
('3', '79', '2022-09-25 05:00:00', '84', '70'),
('3', '77', '2022-09-26 04:41:00', '85', '70'),
('3', '78', '2022-09-27 07:06:00', '85', '71'),
('3', '75', '2022-09-28 10:26:00', '80', '71'),
('3', '79', '2022-09-29 09:22:00', '82', '69'),
('3', '79', '2022-09-30 04:30:00', '81', '70'),
('3', '77', '2022-10-01 11:15:00', '79', '69'),
('3', '77', '2022-10-02 06:02:00', '80', '69'),
('3', '76', '2022-10-03 08:01:00', '79', '71'),
('3', '75', '2022-10-04 11:17:00', '80', '70'),
('3', '79', '2022-10-05 12:13:00', '81', '69'),
('3', '75', '2022-10-06 08:45:00', '83', '70'),
('3', '78', '2022-10-07 04:53:00', '84', '69'),
('3', '77', '2022-10-08 08:10:00', '85', '69'),
('3', '77', '2022-10-09 07:04:00', '79', '69'),
('3', '76', '2022-10-10 10:05:00', '80', '71'),
('3', '76', '2022-10-11 09:16:00', '83', '69'),
('3', '77', '2022-10-12 14:55:00', '85', '69'),
('3', '77', '2022-10-13 09:16:00', '83', '71'),
('3', '77', '2022-10-14 06:36:00', '81', '70'),
('3', '78', '2022-10-15 06:33:00', '85', '71'),
('3', '80', '2022-10-16 12:05:00', '83', '71'),
('3', '78', '2022-10-17 05:52:00', '84', '71'),
('3', '75', '2022-10-18 10:40:00', '84', '70'),
('3', '80', '2022-10-19 14:20:00', '85', '70'),
('3', '78', '2022-10-20 13:57:00', '83', '69'),
('3', '78', '2022-10-21 06:45:00', '82', '71'),
('3', '78', '2022-10-22 08:33:00', '79', '70'),
('3', '75', '2022-10-23 09:25:00', '80', '69'),
('3', '79', '2022-10-24 12:32:00', '82', '69'),
('3', '78', '2022-10-25 09:27:00', '81', '71'),
('3', '77', '2022-10-26 13:38:00', '83', '69'),
('3', '75', '2022-10-27 12:23:00', '84', '70'),
('3', '80', '2022-10-28 06:55:00', '80', '70'),
('3', '76', '2022-10-29 13:13:00', '81', '69'),
('3', '76', '2022-10-30 13:04:00', '85', '71'),
('3', '80', '2022-10-31 09:24:00', '82', '69'),
('3', '79', '2022-11-01 09:14:00', '84', '70'),
('3', '75', '2022-11-02 14:32:00', '84', '70'),
('3', '78', '2022-11-03 05:06:00', '79', '69'),
('3', '80', '2022-11-04 12:19:00', '85', '71'),
('3', '79', '2022-11-05 13:16:00', '83', '71'),
('3', '76', '2022-11-06 11:13:00', '82', '69'),
('3', '77', '2022-11-07 09:06:00', '79', '71'),
('3', '77', '2022-11-08 07:12:00', '85', '71'),
('3', '77', '2022-11-09 05:48:00', '82', '71'),
('3', '75', '2022-11-10 06:36:00', '83', '69'),
('3', '76', '2022-11-11 08:46:00', '85', '69'),
('3', '77', '2022-11-12 11:11:00', '83', '71'),
('3', '79', '2022-11-13 06:19:00', '81', '69'),
('3', '76', '2022-11-14 09:15:00', '80', '71'),
('3', '78', '2022-11-15 09:18:00', '82', '69'),
('3', '80', '2022-11-16 06:31:00', '84', '71'),
('3', '77', '2022-11-17 06:43:00', '83', '70'),
('3', '80', '2022-11-18 14:35:00', '83', '70'),
('3', '76', '2022-11-19 06:39:00', '83', '69'),
('3', '77', '2022-11-20 12:20:00', '82', '70'),
('3', '76', '2022-11-21 13:43:00', '81', '71'),
('3', '80', '2022-11-22 12:35:00', '80', '69'),
('3', '78', '2022-11-23 08:44:00', '82', '71'),
('3', '77', '2022-11-24 11:11:00', '85', '71'),
('3', '76', '2022-11-25 12:56:00', '83', '70'),
('3', '76', '2022-11-26 07:22:00', '79', '69'),
('3', '78', '2022-11-27 13:08:00', '84', '71'),
('3', '76', '2022-11-28 06:46:00', '79', '70'),
('3', '79', '2022-11-29 14:36:00', '82', '70'),
('3', '77', '2022-11-30 06:31:00', '85', '69'),
('3', '80', '2022-12-01 04:49:00', '81', '70'),
('3', '76', '2022-12-02 08:05:00', '81', '70'),
('3', '77', '2022-12-03 06:15:00', '83', '69'),
('3', '77', '2022-12-04 07:15:00', '80', '71'),
('3', '75', '2022-12-05 09:52:00', '80', '71'),
('3', '75', '2022-12-06 06:28:00', '82', '69'),
('3', '77', '2022-12-07 11:01:00', '81', '70'),
('3', '79', '2022-12-08 13:18:00', '83', '70'),
('3', '76', '2022-12-09 10:04:00', '80', '69'),
('3', '79', '2022-12-10 09:35:00', '85', '71'),
('3', '80', '2022-12-11 14:45:00', '84', '71'),
('3', '78', '2022-12-12 09:21:00', '79', '70'),
('3', '77', '2022-12-13 05:39:00', '85', '71'),
('3', '75', '2022-12-14 06:00:00', '81', '69'),
('3', '80', '2022-12-15 07:35:00', '84', '71'),
('3', '75', '2022-12-16 07:37:00', '79', '69'),
('3', '79', '2022-12-17 13:02:00', '82', '71'),
('3', '75', '2022-12-18 08:48:00', '84', '70'),
('3', '80', '2022-12-19 15:09:00', '85', '71'),
('3', '76', '2022-12-20 09:53:00', '84', '70'),
('3', '78', '2022-12-21 06:49:00', '85', '70'),
('3', '76', '2022-12-22 09:55:00', '80', '71'),
('3', '75', '2022-12-23 13:21:00', '80', '71'),
('3', '76', '2022-12-24 08:05:00', '79', '71'),
('3', '79', '2022-12-25 14:52:00', '80', '70'),
('3', '80', '2022-12-26 05:39:00', '82', '69'),
('3', '78', '2022-12-27 10:44:00', '81', '70'),
('3', '75', '2022-12-28 13:11:00', '85', '71'),
('3', '80', '2022-12-29 10:17:00', '83', '69'),
('3', '77', '2022-12-30 14:39:00', '82', '69'),
('3', '77', '2022-12-31 14:37:00', '83', '71');

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `dietitianuserID` varchar(30) NOT NULL,
  `dateandtime` datetime NOT NULL,
  `title` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `status` varchar(40) NOT NULL,
  `viewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mealtracker`
--

CREATE TABLE `mealtracker` (
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `meal` varchar(30) NOT NULL,
  `clientID` varchar(30) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `dietitianID` varchar(25) NOT NULL,
  `clientID` varchar(25) NOT NULL,
  `message` varchar(300) NOT NULL,
  `messageBy` varchar(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`reminder_id`, `dietitianuserID`, `client_id`, `forWhat`, `water_interval`, `water_amount`, `sleep_time`, `wake_time`, `breakfast_time`, `lunch_time`, `snacks_time`, `dinner_time`, `time`) VALUES
(5, 'John_wayne', 7, 'water', '1 Hour', '2 Glasses', '12:00 AM', '06:00 AM', '08:00 AM', '02:00 PM', '04:00 PM', '07:30 PM', '2023-02-02 08:24:20'),
(15, 'John_wayne', 11, 'sleep', '', '', '', '', '', '', '', '', '2023-02-02 12:25:33'),
(18, 'John_wayne', 9, 'sleep', '1 Hour', '3 Glasses', '12:00 AM', '06:00 AM', '', '', '', '', '2023-02-02 12:25:33'),
(20, 'John_wayne', 10, '', '1 Hour', '3 Glasses', '12:00 AM', '06:00 AM', '08:00 AM', '02:00 PM', '04:00 PM', '07:30 PM', '2023-02-03 13:15:21'),
(21, 'John_wayne', 2, '', '1 Hour', '2 Glasses', '12:00 AM', '06:00 AM', '08:00 AM', '02:00 PM', '04:00 PM', '07:30 PM', '2023-02-03 13:16:24'),
(24, 'John_wayne', 1, '', '1 Hour', '2 Glasses', NULL, NULL, '', '', '', '', '2023-02-05 09:58:22'),
(25, 'John_wayne', 3, '', '1 Hour', '2 Glasses', '09:30 PM', '05:00 AM', '', '', '', '', '2023-02-05 09:58:24'),
(26, 'John_wayne', 4, '', '1 Hour', '2 Glasses', '09:30 PM', '05:00 AM', '', '', '', '', '2023-02-05 09:58:25'),
(27, 'John_wayne', 12, '', '1 Hour', '2 Glasses', '12:00 AM', '06:00 AM', '', '', '', '', '2023-02-05 09:58:29'),
(28, 'John_wayne', 8, '', '1 hour', '2 Glasses', NULL, NULL, '', '', '', '', '2023-02-05 09:58:35'),
(29, 'John_wayne', 6, '', '1 hour', '2 Glasses', NULL, NULL, '', '', '', '', '2023-02-05 09:58:36'),
(30, 'John_wayne', 5, '', '', '', '09:30 PM', '05:00 AM', '', '', '', '', '2023-02-05 09:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `name` varchar(30) NOT NULL,
  `time` text NOT NULL,
  `date` text NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sleeptracker`
--

CREATE TABLE `sleeptracker` (
  `sleeptime` timestamp NOT NULL DEFAULT current_timestamp(),
  `waketime` timestamp NULL DEFAULT NULL,
  `clientID` varchar(25) NOT NULL,
  `hrsSlept` int(11) DEFAULT NULL,
  `goal` int(11) NOT NULL,
  `minsSlept` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `steptracker`
--

CREATE TABLE `steptracker` (
  `steps` int(11) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `avgspeed` float NOT NULL,
  `distance` float NOT NULL,
  `calories` int(11) NOT NULL,
  `goal` int(11) NOT NULL,
  `clientid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribedclient`
--

CREATE TABLE `subscribedclient` (
  `clientID` varchar(25) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `startdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `enddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `dietChart` varchar(30) DEFAULT NULL,
  `dietitianID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `template_name`
--

CREATE TABLE `template_name` (
  `template_name` varchar(30) NOT NULL,
  `diet_chart` text NOT NULL,
  `dietitianuserID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `p_p` varchar(255) DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `p_p`, `last_seen`) VALUES
(1, 'Sabari Nathan', 'sabari', '123456', 'user-default.png', '2023-02-20 17:45:52'),
(2, 'Ram Kumar', 'ram', '123456', 'user-default.png', '2023-01-23 19:57:35'),
(3, 'Robin Dravid', 'raju', '123456', 'user-default.png', '2023-01-27 19:48:30'),
(4, 'John Doe', 'ash', '123456', 'user-default.png', '2023-02-17 00:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `watertracker`
--

CREATE TABLE `watertracker` (
  `drinkConsumed` int(11) NOT NULL DEFAULT 0,
  `goal` int(11) NOT NULL DEFAULT 1800,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `clientID` varchar(25) NOT NULL,
  `time` text NOT NULL,
  `type` text DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `weighttracker`
--

CREATE TABLE `weighttracker` (
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `bmi` float NOT NULL,
  `goal` float NOT NULL,
  `clientID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_goals`
--

CREATE TABLE `_goals` (
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `forWhat` varchar(25) NOT NULL,
  `goal` int(11) NOT NULL,
  `clientID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_goals`
--

INSERT INTO `_goals` (`time`, `forWhat`, `goal`, `clientID`) VALUES
('2022-11-29 13:27:37', 'calorie', 3000, '3'),
('2022-11-30 08:10:55', 'steps', 7000, '3'),
('2022-12-28 13:03:31', 'steps', 7000, '3'),
('2022-11-28 07:20:49', 'water', 6000, '3'),
('2022-12-30 05:54:39', 'sleep', 8, '3'),
('2022-12-30 12:13:17', 'calorie', 3000, '3'),
('2022-12-29 09:50:29', 'calorie', 3000, '3'),
('2022-12-29 09:36:01', 'weight', 70, '3'),
('2022-12-29 10:51:00', 'sleep', 8, '3'),
('2022-01-11 16:24:46', 'weight', 80, '3'),
('2023-01-27 16:41:25', 'calorie', 2000, '3'),
('2023-01-27 16:45:02', 'calorie', 5000, '3'),
('2023-01-28 09:13:49', 'water', 2000, '3'),
('2023-01-28 09:15:52', 'water', 5000, '3'),
('2023-01-30 10:06:51', 'water', 10, ''),
('2023-01-30 14:24:58', 'calorie', 6000, '3'),
('2022-05-10 06:49:51', 'weight', 65, '3'),
('2022-05-10 06:50:08', 'calorie', 6000, '3'),
('2022-05-10 06:50:16', 'calorie', 10000, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addclient`
--
ALTER TABLE `addclient`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `clientuserID` (`clientuserID`);

--
-- Indexes for table `add_direction`
--
ALTER TABLE `add_direction`
  ADD KEY `FK_dir_id` (`dir_id`);

--
-- Indexes for table `calorietracker`
--
ALTER TABLE `calorietracker`
  ADD UNIQUE KEY `time` (`time`),
  ADD KEY `calorietracker_fk` (`clientID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientuserID`),
  ADD UNIQUE KEY `UNIQUE` (`client_id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD UNIQUE KEY `dateAndTime` (`dateAndTime`),
  ADD KEY `consultation_fk1` (`dietitianID`),
  ADD KEY `consultation_fk2` (`clientID`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `create_event`
--
ALTER TABLE `create_event`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `create_plan`
--
ALTER TABLE `create_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `dietian_recipies`
--
ALTER TABLE `dietian_recipies`
  ADD PRIMARY KEY (`instruction`,`ingredient`);

--
-- Indexes for table `dietitian`
--
ALTER TABLE `dietitian`
  ADD PRIMARY KEY (`dietitianuserID`),
  ADD UNIQUE KEY `dietitian_id` (`dietitian_id`);

--
-- Indexes for table `dietitian_client`
--
ALTER TABLE `dietitian_client`
  ADD KEY `client_dietician_relation1` (`dietitianID`),
  ADD KEY `client_dietician_relation2` (`clientID`);

--
-- Indexes for table `dietition_tasks`
--
ALTER TABLE `dietition_tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `dietitianuserID` (`dietitianuserID`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goal_id`),
  ADD UNIQUE KEY `client_id` (`client_id`),
  ADD KEY `dietition_id` (`dietition_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`dietitianID`,`clientID`,`message`,`time`),
  ADD KEY `messages_fk2` (`clientID`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`reminder_id`),
  ADD UNIQUE KEY `client_id` (`client_id`),
  ADD KEY `dietitianuserID` (`dietitianuserID`);

--
-- Indexes for table `sleeptracker`
--
ALTER TABLE `sleeptracker`
  ADD KEY `Forgin key` (`clientID`);

--
-- Indexes for table `steptracker`
--
ALTER TABLE `steptracker`
  ADD KEY `steptracker_fk` (`clientid`);

--
-- Indexes for table `subscribedclient`
--
ALTER TABLE `subscribedclient`
  ADD UNIQUE KEY `clientID` (`clientID`),
  ADD KEY `subscribed_client_fl1` (`clientID`),
  ADD KEY `subscribed_client_fk2` (`dietitianID`);

--
-- Indexes for table `template_name`
--
ALTER TABLE `template_name`
  ADD PRIMARY KEY (`template_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `watertracker`
--
ALTER TABLE `watertracker`
  ADD KEY `watertracker_fk` (`clientID`);

--
-- Indexes for table `weighttracker`
--
ALTER TABLE `weighttracker`
  ADD KEY `weighttracker_fk` (`clientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addclient`
--
ALTER TABLE `addclient`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `create_event`
--
ALTER TABLE `create_event`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dietitian`
--
ALTER TABLE `dietitian`
  MODIFY `dietitian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dietition_tasks`
--
ALTER TABLE `dietition_tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `goal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_direction`
--
ALTER TABLE `add_direction`
  ADD CONSTRAINT `FK_dir_id` FOREIGN KEY (`dir_id`) REFERENCES `dietian_recipies` (`instruction`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calorietracker`
--
ALTER TABLE `calorietracker`
  ADD CONSTRAINT `calorietracker_fk` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consultations`
--
ALTER TABLE `consultations`
  ADD CONSTRAINT `consultation_fk1` FOREIGN KEY (`dietitianID`) REFERENCES `dietitian` (`dietitianuserID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `consultation_fk2` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`);

--
-- Constraints for table `dietitian_client`
--
ALTER TABLE `dietitian_client`
  ADD CONSTRAINT `client_dietician_relation1` FOREIGN KEY (`dietitianID`) REFERENCES `dietitian` (`dietitianuserID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `client_dietician_relation2` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `dietition_tasks`
--
ALTER TABLE `dietition_tasks`
  ADD CONSTRAINT `dietition_tasks_ibfk_1` FOREIGN KEY (`dietitianuserID`) REFERENCES `dietitian` (`dietitianuserID`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_fk1` FOREIGN KEY (`dietitianID`) REFERENCES `dietitian` (`dietitianuserID`),
  ADD CONSTRAINT `messages_fk2` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`) ON UPDATE CASCADE;

--
-- Constraints for table `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_ibfk_1` FOREIGN KEY (`dietitianuserID`) REFERENCES `dietitian` (`dietitianuserID`),
  ADD CONSTRAINT `reminders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `addclient` (`client_id`);

--
-- Constraints for table `sleeptracker`
--
ALTER TABLE `sleeptracker`
  ADD CONSTRAINT `Forgin key` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `steptracker`
--
ALTER TABLE `steptracker`
  ADD CONSTRAINT `steptracker_fk` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientuserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscribedclient`
--
ALTER TABLE `subscribedclient`
  ADD CONSTRAINT `subscribed_client_fk2` FOREIGN KEY (`dietitianID`) REFERENCES `dietitian` (`dietitianuserID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subscribed_client_fl1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`) ON UPDATE CASCADE;

--
-- Constraints for table `watertracker`
--
ALTER TABLE `watertracker`
  ADD CONSTRAINT `watertracker_fk` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `weighttracker`
--
ALTER TABLE `weighttracker`
  ADD CONSTRAINT `weighttracker_fk` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientuserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
