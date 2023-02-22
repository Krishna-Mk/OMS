-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 08:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `uname` varchar(30) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `dt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`uname`, `msg`, `dt`) VALUES
('nishil', 'yo\r\n			', '23-01-27 01:46pm'),
('nishil2', 'hi			', '23-01-27 01:47pm'),
('nishil', '	hello		', '23-01-27 01:47pm'),
('', 'yo			', '23-01-27 02:05pm'),
('', 'yo			', '23-01-27 02:08pm'),
('', 'yo			', '23-01-27 02:08pm'),
('', 'yo			', '23-01-27 02:10pm'),
('', '		hello\r\n	', '23-01-27 02:10pm'),
('', '		hello\r\n	', '23-01-27 02:13pm'),
('keyur', '	yoyoyo		', '23-01-27 02:17pm'),
('sagar ', 'how are you			', '23-01-27 02:19pm'),
('sagar ', 'how are you			', '23-01-27 02:21pm'),
('sagar ', 'how are you			', '23-01-27 02:21pm'),
('nishil', 'test messg\r\n			', '23-01-27 02:39pm'),
('keyur', '	test messg		', '23-01-27 02:39pm'),
('keyur', '	test messg		', '23-01-27 02:41pm'),
('keyur', '	test messg		', '23-01-27 02:41pm'),
('keyur', '	test messg		', '23-01-27 02:41pm'),
('keyur', '	test messg		', '23-01-27 02:41pm'),
('keyur', '	test messg		', '23-01-27 02:42pm'),
('keyur', '	test messg		', '23-01-27 02:42pm'),
('keyur', '	test messg		', '23-01-27 02:42pm'),
('keyur', '	test messg		', '23-01-27 02:43pm'),
('keyur', '	test messg		', '23-01-27 02:43pm'),
('sagar', 'hi			', '23-01-27 02:44pm'),
('nishil', 'hello			', '23-01-27 02:44pm'),
('nishil', 'hello			', '23-01-27 02:46pm'),
('nishil', 'hello			', '23-01-27 02:46pm'),
('nishil', 'hello			', '23-01-27 02:46pm'),
('nishil', 'hello			', '23-01-27 02:47pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
