-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 10:21 AM
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
-- Table structure for table `department_admin`
--

CREATE TABLE `department_admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_admin`
--

INSERT INTO `department_admin` (`id`, `admin_id`, `email_id`, `password`) VALUES
(1, 'Admin_agri', 'ashanmugasundram@siet.ac.in', 'Admin_agri'),
(2, 'Admin_biotech', 'tchitradevi@siet.ac.in', 'Admin_biotech'),
(3, 'Admin_biomedical', 'pnancy@siet.ac.in', 'Admin_biomedical'),
(4, 'Admin_civil', 'janitha@siet.ac.in', 'Admin_civil'),
(5, 'Admin_cse', 'cse@siet.ac.in', 'Admin_cse'),
(6, 'Admin_ece', 'ranjith@siet.ac.in', 'Admin_ece'),
(7, 'Admin_eee', 'arivoliseee@siet.ac.in', 'Admin_eee'),
(8, 'Admin_mech', 'sudhagar.s@siet.ac.in', 'Admin_mech'),
(9, 'Admin_it', 'sandhiyab@siet.ac.in', 'Admin_it'),
(10, 'Admin_foodtech', 'kvasantharajft@siet.ac.in', 'Admin_foodtech'),
(11, 'Admin', 'admin@admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `events_registration`
--

CREATE TABLE `events_registration` (
  `id` int(11) NOT NULL,
  `Kalam_id` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `college` varchar(100) NOT NULL,
  `mob_no` int(13) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `event_rules` varchar(10000) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `event_start_time` varchar(100) NOT NULL,
  `event_end_time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_registration`
--

INSERT INTO `events_registration` (`id`, `Kalam_id`, `email`, `full_name`, `college`, `mob_no`, `event_name`, `description`, `event_rules`, `event_date`, `event_start_time`, `event_end_time`, `venue`) VALUES
(1, 'Kalam_001', 'Jeevan@gmail.com', 'Jeevan', 'SIET', 987654321, 'coding', 'DESCRIPTION OF EVENTS coding', 'jeevan', '6-02-2020', 'AN 9:00', '10', 'LH 41'),
(2, 'Kalam_001', 'Jeevan@gmail.com', 'Jeevan', 'SIET', 987654321, 'paper', 'DESCRIPTION OF EVENTS', 'eventes rules', '6-02-2020', 'AN 9:00', '10', 'LH 41'),
(3, 'Kalam_002', 'samcladson@gmail.com', 'samcladson', 'SIET', 98754321, 'paper', 'DESCRIPTION OF EVENTS', 'eventes rules', '6-02-2020', 'AN 9:00', '10', 'LH 41');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `event_rules` varchar(20000) NOT NULL,
  `student_coordinator_name` varchar(1000) NOT NULL,
  `student_coordinator_number` int(20) NOT NULL,
  `staff_coordinator_name` varchar(1000) NOT NULL,
  `staff_coordinator_number` int(11) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `event_start_time` varchar(10) NOT NULL,
  `event_end_time` varchar(110) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `admin_id`, `category`, `event_name`, `description`, `event_rules`, `student_coordinator_name`, `student_coordinator_number`, `staff_coordinator_name`, `staff_coordinator_number`, `event_date`, `event_start_time`, `event_end_time`, `venue`, `status`) VALUES
(1, 'AD001', 'NON-TECH', 'coding', 'DESCRIPTION OF EVENTS coding', 'jeevan', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1),
(2, 'AD007', 'NON-TECH', 'paper', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1),
(3, 'AD008', 'NON-TECH', 'dance', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1),
(4, 'AD999', 'NON-TECH', 'mime', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1),
(5, 'AD9099', 'NON-TECH', 'act', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1),
(7, 'ADsam01', 'NON-TECH', 'solo dance', 'DESCRIPTION OF EVENTS', 'eventes rules', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1),
(8, 'AD001', 'NON-TECH', 'fight', 'DESCRIPTION OF EVENTS', 'jeevan', 'coordinator numbers', 98765543, 'staff coordinator numbers', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1),
(9, 'sam maama', 'NON-TECH', 'solo singing', 'DESCRIPTION OF EVENTS', 'eventes rules', 'bharath', 98765543, 'bharath', 987654567, '6-02-2020', 'AN 9:00', '10', 'LH 41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participant_login`
--

CREATE TABLE `participant_login` (
  `login_id` int(11) NOT NULL,
  `kalam_id` varchar(100) NOT NULL,
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

INSERT INTO `participant_login` (`login_id`, `kalam_id`, `email`, `full_name`, `department`, `year`, `college`, `password`, `status`, `mob_no`) VALUES
(1, 'Kalam_001', 'Jeevan@gmail.com', 'Jeevan', 'cse', '3rd', 'SIET', 'pwd', 1, 987654321),
(2, 'Kalam_002', 'samcladson@gmail.com', 'samcladson', 'cse', '3rd', 'SIET', 'pwd', 1, 98754321),
(3, 'Kalam_003', 'raghul@gmail.com', 'raghul', 'cse', '3rd', 'SIET', 'pwd', 1, 987543211),
(4, 'Kalam_004', 'venki@gmail.com', 'venki', 'cse', '3rd', 'SIET', 'pwd', 1, 987543211);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_admin`
--
ALTER TABLE `department_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_registration`
--
ALTER TABLE `events_registration`
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
-- AUTO_INCREMENT for table `department_admin`
--
ALTER TABLE `department_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events_registration`
--
ALTER TABLE `events_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `participant_login`
--
ALTER TABLE `participant_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
