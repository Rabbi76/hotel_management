-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 03:41 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room`
--

CREATE TABLE IF NOT EXISTS `hotel_room` (
  `room_id` int(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_status` varchar(20) NOT NULL,
  `room_rent` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `login_id` int(20) NOT NULL,
  `login_name` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`login_id`, `login_name`, `user_type`, `password`, `user_id`) VALUES
(1, 'head_admin', 'admin', '1234', 1),
(2, 'huda', 'customer', 'ami', 2),
(3, 'timu', 'customer', '1234', 3),
(4, 'emp', 'employee', '123', 4),
(5, 'admin1', 'admin', '1234', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `re_id` int(20) NOT NULL,
  `re_name` varchar(20) NOT NULL,
  `re_address` varchar(50) DEFAULT NULL,
  `re_country` varchar(30) DEFAULT NULL,
  `re_email` varchar(30) NOT NULL,
  `re_phone` varchar(30) DEFAULT NULL,
  `re_std` varchar(30) NOT NULL,
  `re_end` varchar(30) NOT NULL,
  `rec_room` varchar(5) DEFAULT NULL,
  `ref_room` varchar(5) DEFAULT NULL,
  `res_room` varchar(5) DEFAULT NULL,
  `adult` varchar(5) NOT NULL,
  `child` varchar(5) NOT NULL,
  `req_by_log` int(5) DEFAULT NULL,
  `re_status` varchar(20) DEFAULT 'pending',
  `con_by_emp` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`re_id`, `re_name`, `re_address`, `re_country`, `re_email`, `re_phone`, `re_std`, `re_end`, `rec_room`, `ref_room`, `res_room`, `adult`, `child`, `req_by_log`, `re_status`, `con_by_emp`) VALUES
(5, 'Muneef', 'uttara', 'bangladesh', 'huda@hudai', '458sdfg', '19-11-2017', '19-10-2017', '3', '3', '2', '1', '2', 3, 'confirmed', NULL),
(6, 'customer1', 'nai', 'nai', 'qwe2AS', '123', '3-7-2016', '3-3-2018', '2', '2', '2', '2', '2', 0, 'confirmed', NULL),
(7, 'customer2', 'nai', 'nai', 'mnf.timu', '123', '19-11-2016', '17-11-2016', '3', '2', '2', '1', '2', 0, 'confirmed', NULL),
(8, 'customer2', 'nai', 'nai', 'mnf.timu', '123', '19-11-2016', '17-11-2016', '3', '2', '2', '1', '2', 0, 'confirmed', NULL),
(9, 'customer1_by_emp', 'nai', 'nai', 'mnf.timu', '123', '19-1-2016', '20-1-2016', '1', '2', '2', '2', '2', 0, 'pending', 4),
(10, 'customer2_by_emp', 'nai', 'nai', 'mnf.timu', '123', '16-1-2016', '17-1-2016', '2', '2', '3', '1', '0', 0, 'pending', 4),
(11, 'customer45', 'nai45', '45', '4554', '45', '17-4-2016', '18-4-2016', '2', '2', '2', '2', '2', 3, 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `user_id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `DOB` varchar(30) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `first_name`, `last_name`, `DOB`, `phone`, `email`, `address`) VALUES
(1, 'muneef', 'timu', '28-12-1993', '01855', 'nai@hudai.com', NULL),
(2, 'hudai', 'timu', '', '458', 'huda@huda', 'uttara'),
(3, 'muneef timu', NULL, NULL, '01852', 'timu.muneef@gmail.com', NULL),
(4, 'employeer_1', NULL, NULL, '123', 'emp@hudai.com', NULL),
(5, 'asad', NULL, NULL, '1234', 'green@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `login_name` (`login_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `room_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `re_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_table`
--
ALTER TABLE `login_table`
  ADD CONSTRAINT `login_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
