-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2020 at 11:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalam_2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant_login`
--

CREATE TABLE `participant_login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `college` varchar(40) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `mob_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant_login`
--

INSERT INTO `participant_login` (`login_id`, `email`, `full_name`, `department`, `year`, `college`, `password`, `status`, `mob_no`) VALUES
(1, 'Jeevan@gmail.com', 'Jeevan', 'cse', '3rd', 'SIET', 'pwd', 1, 987654321),
(2, 'samcladson@gmail.com', 'samcladson', 'cse', '3rd', 'SIET', 'pwd', 1, 98754321),
(3, 'raghul@gmail.com', 'raghul', 'cse', '3rd', 'SIET', 'pwd', 1, 987543211),
(4, 'venki@gmail.com', 'venki', 'cse', '3rd', 'SIET', 'pwd', 1, 987543211);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant_login`
--
ALTER TABLE `participant_login`
  ADD PRIMARY KEY (`login_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participant_login`
--
ALTER TABLE `participant_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
