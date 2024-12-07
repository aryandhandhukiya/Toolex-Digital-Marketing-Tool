-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 05:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email_id`, `birthday`, `location`, `points`) VALUES
(1, 'Aditya', 'adityahakani11@gmail.com', '2022-10-15', 'Mumbai', 1000),
(2, 'Aryan', 'dhandhukiyaaryan05@gmail.com', '2004-10-15', 'Mumbai', 200);

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

CREATE TABLE `festival` (
  `id` int(11) DEFAULT NULL,
  `fest_name` varchar(50) NOT NULL,
  `fest_date` date NOT NULL,
  `location` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`id`, `fest_name`, `fest_date`, `location`) VALUES
(2, 'Pongal', '2023-01-14', 'India'),
(3, 'Vasant Panchami', '2023-01-26', 'India'),
(4, 'Republic Day', '2023-01-26', 'India'),
(5, 'Maha Shivaratri', '2023-02-18', 'India'),
(6, 'Holi', '2023-03-08', 'India'),
(7, 'Ram Navmi', '2023-03-30', 'India'),
(8, 'Eid Al Fitr', '2023-04-22', 'India'),
(9, 'Janmashtmi', '2023-08-06', 'India'),
(10, 'Independance Day', '2023-08-15', 'India'),
(11, 'Raksha Bandhan', '2023-08-30', 'India'),
(12, 'Ganesh Chaturthi', '2023-09-19', 'India'),
(13, 'Navratri', '2023-10-15', 'India'),
(14, 'Dussehra', '2023-10-24', 'India'),
(15, 'Diwali', '2023-11-12', 'India'),
(16, 'Christmas', '2023-12-25', 'India'),
(17, 'New Year', '2024-01-01', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `user_authentication`
--

CREATE TABLE `user_authentication` (
  `id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_authentication`
--

INSERT INTO `user_authentication` (`id`, `email_id`, `user_name`, `user_pass`) VALUES
(5, 'adityahakani29@gmail.com', 'Aditya', 'Adi@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_authentication`
--
ALTER TABLE `user_authentication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_authentication`
--
ALTER TABLE `user_authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
