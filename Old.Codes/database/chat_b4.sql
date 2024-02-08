-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2023 at 04:47 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_b4`
--

-- --------------------------------------------------------

--
-- Table structure for table `hackers`
--

DROP TABLE IF EXISTS `hackers`;
CREATE TABLE IF NOT EXISTS `hackers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hackers`
--

INSERT INTO `hackers` (`id`, `full_name`, `nick_name`, `gender`, `email`, `password`, `time`, `date`) VALUES
(9, 'Testing', 'Test', 'Male', 'test@gg.v', '8cb2237d0679ca88db6464eac60da96345513964', '11:26 am', '15-11-2023'),
(7, 'Ayushi Wankhade', 'ayushi', 'Female', 'ayushi@example.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '11:24 am', '14-11-2023'),
(6, 'Vipin Kadu', 'Vipin', 'Male', 'techveganofficial@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '10:10 am', '14-11-2023');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_email` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_email`, `nick_name`, `msg`, `time`, `date`) VALUES
(1, 'ayushi@example.com', 'Ayushi', 'Hello Team! Hope you\'re doing well.', '10:18 AM', '15-11-2023'),
(2, 'ayushi@example.com', 'Ayushi', 'Okay', '10:18 AM', '15-11-2023'),
(3, 'abcd@gmail.com', 'Radha', 'Hi', '10:59 AM', '15-11-2023'),
(4, 'abcd@gmail.com', 'Radha', 'Hi', '10:59 AM', '15-11-2023'),
(5, 'techveganofficial@gmail.com', 'Vipin', 'Hi', '11:12 am', '15-11-2023'),
(6, 'techveganofficial@gmail.com', 'Vipin', 'Hello', '11:13 am', '15-11-2023'),
(7, 'techveganofficial@gmail.com', 'Vipin', 'Hi there', '11:13 am', '15-11-2023'),
(8, 'techveganofficial@gmail.com', 'Vipin', 'Hi My name is VipinHi My name is VipinHi My name is VipinHi My name is VipinHi My name is VipinHi My name is VipinHi My name is Vipin', '11:13 am', '15-11-2023');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
