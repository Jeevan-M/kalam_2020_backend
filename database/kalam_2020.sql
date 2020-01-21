-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 10:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `events_id`
--

CREATE TABLE `events_id` (
  `id` int(11) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `event_name_id_main` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_id`
--

INSERT INTO `events_id` (`id`, `event_date`, `category`, `event_name_id_main`, `status`) VALUES
(1, '3-02-2020', 'TECH', 'TECH', 1),
(2, '3-02-2020', 'TECH', 'TECH', 1),
(3, '6-02-2020', 'NON-TECH', 'NON-TECH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `event_name_id` varchar(20) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `event_rules` varchar(20000) NOT NULL,
  `student_coordinator_name` varchar(1000) NOT NULL,
  `student_coordinator_number` int(20) NOT NULL,
  `staff_coordinator_name` varchar(1000) NOT NULL,
  `staff_coordinator_number` int(11) NOT NULL,
  `event_time` varchar(10) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `event_name_id`, `event_name`, `description`, `event_rules`, `student_coordinator_name`, `student_coordinator_number`, `staff_coordinator_name`, `staff_coordinator_number`, `event_time`, `venue`, `status`) VALUES
(1, 'TECH', 'TECH', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, 'AN 9:00', 'LH 41', 1),
(2, 'TECH', 'TECH', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, 'AN 9:00', 'LH 41', 1),
(3, 'NON-TECH', 'TECH', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, 'AN 9:00', 'LH 41', 1);

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
-- Indexes for table `events_id`
--
ALTER TABLE `events_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant_login`
--
ALTER TABLE `participant_login`
  ADD PRIMARY KEY (`login_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events_id`
--
ALTER TABLE `events_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participant_login`
--
ALTER TABLE `participant_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
