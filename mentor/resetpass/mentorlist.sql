-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 02:55 PM
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
-- Database: `oms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentorlist`
--

CREATE TABLE `mentorlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `mentor_id` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentorlist`
--

INSERT INTO `mentorlist` (`id`, `fullname`, `department`, `usertype`, `mentor_id`, `email`, `password`, `otp`) VALUES
(12, 'Krishna Maurya', 'BCA', 'mentor', 'Kris6531', 'maurya.krishna2002@gmail.com', 'b33e7d', 0),
(15, 'Sagar Menon', 'MCA', 'mentor', 'Saga5851', 'sagarmenon708@gmail.com', 'hello', 0),
(16, 'Nishil Nayak', 'MCA', 'mentor', 'Nish3910', 'nishil200@gmail.com', 'e94926', 0),
(17, 'Yash', 'BCA', 'mentor', 'Yash4999', 'yash123@gmail.com', '674978', 0),
(18, 'Isha Patel', 'BCA', 'mentor', 'Isha2291', 'isha20@gmail.com', '161e4f', 0),
(19, 'Aman Gupta', 'MCA', 'mentor', 'Aman1094', 'aman1@gmail.com', '57cc14', 0),
(20, 'Raju Yadav', 'MCA', 'mentor', 'Raju4216', 'raju23@gmail.com', 'e0b9bd', 0),
(21, 'Divya Patel', 'MCA', 'mentor', 'Divy2487', 'divya45@gmail.com', 'af54a5', 0),
(22, 'Nishil Nayak', 'BCA', 'mentor', 'Nish9143', 'nishilnayak2222@gmail.com', '6c32ca', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentorlist`
--
ALTER TABLE `mentorlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mentor_id` (`mentor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentorlist`
--
ALTER TABLE `mentorlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
