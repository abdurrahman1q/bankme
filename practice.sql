-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2022 at 11:59 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `account` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account`, `email`, `name`) VALUES
(1, 'hjsdhjsh', 'asta.ainz@gmail.com', 'Asta'),
(2, 'hjsdhjshh', 'asta.ainz@gmail.com', 'aDas'),
(3, 'hjsdhjsh', 'sifatullah1q1@gmail.com', 'bivivap4'),
(4, 'hjsdhjshh2', 'alvaromorte1q1@gmail.com', 'aDas'),
(5, 'hjsdhjsh', 'asta.ainz@gmail.com', 'bivivap4'),
(6, 'hjsdhjsh', 'asta.ainz@gmail.com', 'aDas'),
(7, 'hjsdhjsh', 'asta.ainz@gmail.com', 'da'),
(8, 'hjsdhjsh', 'asta.ainz@gmail.com', 'bivivap4'),
(9, 'hjsdhjsh', 'rahmanabdur64870@gmail.com', 'aDas'),
(10, 'hjsdhjsh', 'rahmanabdur64870@gmail.com', 'Asta'),
(11, 'hjsdhjsh', 'sifatullah1q1@gmail.com', 'bivivap4'),
(12, 'hjsdhjsh', 'sifatullah1q1@gmail.com', 'da'),
(13, 'hjsdhjsh', 'alvaromorte1q1@gmail.com', 'da'),
(14, 'hjsdhjsh', 'luffy.gown@gmail.com', 'da'),
(15, 'hjsdhjsh', 'sifatullah1q1@gmail.com', 'aDas');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) DEFAULT NULL,
  `replies` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hi', 'Hello there!'),
(2, 'What is your name?|Who are you?', 'My name is chatbot.'),
(3, 'where are you from?', 'I\'m from Bangladesh.'),
(4, 'bye|by|good bye', 'Ok bye. See you soon.'),
(6, 'how are you?\r\n\r\n', 'I\'m Fine'),
(7, 'Why do you exist?', 'My programmer created me.\r\n'),
(8, 'nice to meet you\r\n', 'It\'s a pleasure to meet you too.\r\n'),
(9, 'you are so dumb\r\n', 'Stupid but warmhearted , I\'m your best friend.\r\n'),
(10, 'You are so boring', 'You\'ll find a lot of fun with me!\r\n'),
(11, 'who is avijit?', 'Next Question please.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `takade`
--

CREATE TABLE `takade` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `number` bigint(20) DEFAULT NULL,
  `edate` varchar(30) DEFAULT NULL,
  `cw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takade`
--

INSERT INTO `takade` (`id`, `name`, `number`, `edate`, `cw`) VALUES
(1, 'bivivap472@gamezalo.com', 4224212, '12-33-44', 123),
(3, 'bivivap4', 565435, '02-23', 432),
(5, 'bivivap472@gamezalo.com', 4224219, '12-33-44', 432),
(6, 'bivivap472@gamezalo.com', 42242126, '12-33-44', 432),
(7, 'bivivap472@gamezalo.com', 42242125, '12-33-44', 555),
(8, 'bivivap472@gamezalo.com', 422421265, '12-33-44', 432),
(9, 'Asta', 42242122, '12-33-44', 432),
(10, 'bivivap472@gamezalo.com', 422421264, '02-23', 432),
(11, 'bivivap472@gamezalo.com', 4224212657, '12-33-44', 432),
(12, 'bivivap472@gamezalo.com', 42242124, '12-33-44', 432),
(13, 'bivivap472@gamezalo.com', 4224212435, '12-33-44', 432),
(14, 'bivivap472@gamezalo.com', 4224212111, '12-33-44', 321);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(120) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date`) VALUES
(6, 'luffy.gown@gmail.com', 'aaaa', '2022-07-25 13:51:58'),
(9, 'sifatullahq1', 'aaa', '2022-07-25 13:52:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takade`
--
ALTER TABLE `takade`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `takade`
--
ALTER TABLE `takade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
