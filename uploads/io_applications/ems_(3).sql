-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 04:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `sevarth_id` varchar(100) NOT NULL,
  `date` varchar(12) NOT NULL,
  `description` varchar(200) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `application` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `hod_id` varchar(11) NOT NULL,
  `registrar_id` varchar(11) NOT NULL,
  `principal_id` varchar(11) NOT NULL,
  `status_id` varchar(11) NOT NULL,
  `application_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applications_status`
--

CREATE TABLE `applications_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications_status`
--

INSERT INTO `applications_status` (`id`, `status`) VALUES
(1, 'APPLIED'),
(2, 'APPROVED BY HOD'),
(3, 'APPROVED BY REGISTRAR'),
(4, 'APPROVED BY PRINCIPAL'),
(5, 'Declined By Hod'),
(6, 'Declined By Registrar'),
(7, 'Declined By Principle');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES
(1, 'CS'),
(2, 'Computer Engineering\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `sevarth_id` varchar(12) NOT NULL,
  `org_id` int(10) DEFAULT NULL,
  `dept_id` varchar(10) DEFAULT NULL,
  `role_id` varchar(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `hint_question` varchar(200) NOT NULL,
  `hint_answer` varchar(200) NOT NULL,
  `is_verified` varchar(3) NOT NULL DEFAULT '0',
  `hod_id` varchar(12) NOT NULL,
  `principle_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`sevarth_id`, `org_id`, `dept_id`, `role_id`, `email`, `password`, `name`, `hint_question`, `hint_answer`, `is_verified`, `hod_id`, `principle_id`) VALUES
('-1', -1, '-1', '-1', 'admin@gmail.com', 'adminpassword', 'admin', 'admin question', 'admin answer', '0', '-1', '-1'),
('123456789012', 1, '1', '3', 'principle@gmail.com', 'principle', 'Principle', 'what is your name?', 'Principle', '1', '-1', '-1'),
('123456789013', 1, '1', '2', 'hod@gmail.com', 'hodpassword', 'HOD', 'what is your name?', 'hod', '-1', '-1', '123456789012'),
('123456789015', 1, '1', '1', 'employee@gmail.com', 'employee', 'Employee', 'what is your name?', 'employee', '0', '123456789013', '123456789012');

-- --------------------------------------------------------

--
-- Table structure for table `employees_details`
--

CREATE TABLE `employees_details` (
  `sevarth_id` varchar(100) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `department_id` varchar(100) NOT NULL,
  `cast` varchar(15) NOT NULL,
  `subcast` varchar(15) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `retriement_date` date NOT NULL,
  `experience` int(15) NOT NULL,
  `aadhar_no` bigint(20) NOT NULL,
  `pan_no` varchar(15) NOT NULL,
  `blood_grp` varchar(5) NOT NULL,
  `identification_mark` varchar(50) NOT NULL,
  `photo` blob NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `alternative_contact_no` bigint(20) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin_code` int(7) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `org_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `sevarth_id` varchar(50) NOT NULL,
  `org_id` int(50) NOT NULL,
  `joining_date` date DEFAULT NULL,
  `leaving_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `sevarth_id` varchar(50) DEFAULT NULL,
  `leave_id` int(10) DEFAULT NULL,
  `leave_type` varchar(100) DEFAULT NULL,
  `leave_reason` varchar(100) DEFAULT NULL,
  `status_approve` tinyint(1) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `leave_id` int(10) NOT NULL,
  `leave_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `nominee_id` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `aadhar` varchar(200) NOT NULL,
  `pan` varchar(50) NOT NULL,
  `blood_grp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(10) NOT NULL,
  `org_name` varchar(100) DEFAULT NULL,
  `organization_type` int(200) DEFAULT NULL,
  `department_counts` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `org_name`, `organization_type`, `department_counts`) VALUES
(1, 'Government Polytechnic Amravati', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `organization_type`
--

CREATE TABLE `organization_type` (
  `type_id` int(200) NOT NULL,
  `type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization_type`
--

INSERT INTO `organization_type` (`type_id`, `type_name`) VALUES
(1, 'INSTITUTE');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` varchar(20) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
('1', 'Employee'),
('2', 'Head of Department'),
('3', 'Principle'),
('4', 'Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `sevarth_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `org_name` varchar(100) NOT NULL,
  `organized_by` varchar(200) NOT NULL,
  `apply_letter` varchar(200) NOT NULL,
  `comp_certificate` varchar(200) NOT NULL,
  `training_status_id` int(11) NOT NULL,
  `hod_id` int(11) NOT NULL,
  `principal_id` int(11) NOT NULL,
  `training_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `training_status`
--

CREATE TABLE `training_status` (
  `id` int(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_status`
--

INSERT INTO `training_status` (`id`, `status`) VALUES
(1, 'APPLIED TO HOD\r\n'),
(2, 'APPLIED TO PRINCIPLE'),
(3, 'APPROVED BY HOD'),
(4, 'DECLINE BY HOD'),
(5, 'APPROVED BY PRINCIPAL'),
(6, 'DECLINED BY PRINCIPLE'),
(7, 'COMPLETED');

-- --------------------------------------------------------

--
-- Table structure for table `training_type`
--

CREATE TABLE `training_type` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_type`
--

INSERT INTO `training_type` (`id`, `name`) VALUES
(1, 'type_1'),
(2, 'type_2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications_status`
--
ALTER TABLE `applications_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`sevarth_id`),
  ADD KEY `fr_key_org` (`org_id`),
  ADD KEY `fr_key_dept` (`dept_id`),
  ADD KEY `fr_key_role` (`role_id`);

--
-- Indexes for table `employees_details`
--
ALTER TABLE `employees_details`
  ADD KEY `fr_key_empid` (`sevarth_id`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD KEY `fr_key_emp_history` (`sevarth_id`),
  ADD KEY `fr_key_org_his` (`org_id`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD KEY `fr_key_leave` (`leave_id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`nominee_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `organization_type`
--
ALTER TABLE `organization_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_status`
--
ALTER TABLE `training_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_type`
--
ALTER TABLE `training_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `applications_status`
--
ALTER TABLE `applications_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nominee`
--
ALTER TABLE `nominee`
  MODIFY `nominee_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_type`
--
ALTER TABLE `organization_type`
  MODIFY `type_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `training_status`
--
ALTER TABLE `training_status`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `training_type`
--
ALTER TABLE `training_type`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
