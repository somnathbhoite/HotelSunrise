-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 09:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `bu_id` int(11) NOT NULL,
  `br_id` int(11) NOT NULL,
  `bu_name` varchar(255) NOT NULL,
  `bu_address` text NOT NULL,
  `bu_phno` varchar(255) NOT NULL,
  `bu_age` int(10) NOT NULL,
  `bu_gender` varchar(6) NOT NULL,
  `check_in_date` date NOT NULL,
  `isPaid` tinyint(1) NOT NULL DEFAULT 0,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `bu_id`, `br_id`, `bu_name`, `bu_address`, `bu_phno`, `bu_age`, `bu_gender`, `check_in_date`, `isPaid`, `time_stamp`) VALUES
(83, 22, 9, 'PRASAD DIPAK BHALERAO', 'test', '7875701298', 21, 'Male', '2021-05-09', 1, '2021-05-10 07:29:03'),
(84, 22, 1, 'PRASAD DIPAK BHALERAO', 'test', '7875701298', 21, 'Male', '2021-05-10', 1, '2021-05-10 07:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `pu_id` int(11) NOT NULL,
  `pb_id` int(11) NOT NULL,
  `p_amt` int(11) NOT NULL,
  `p_mode` varchar(255) NOT NULL,
  `check_out_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `pu_id`, `pb_id`, `p_amt`, `p_mode`, `check_out_date`) VALUES
(37, 22, 83, 12000, 'cash', '2021-05-10'),
(38, 22, 84, 1500, 'cash', '2021-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `r_id` int(11) NOT NULL,
  `r_type` varchar(255) NOT NULL,
  `isAvailable` tinyint(1) NOT NULL,
  `r_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `r_type`, `isAvailable`, `r_price`) VALUES
(1, 'Single', 1, 1500),
(2, 'Double', 1, 3000),
(3, 'Deluxe', 1, 6000),
(4, 'Single', 1, 1500),
(5, 'Double', 1, 3000),
(6, 'Deluxe', 1, 6000),
(7, 'Single', 1, 1500),
(8, 'Double', 1, 3000),
(9, 'Deluxe', 1, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_email`, `u_pass`, `time_stamp`) VALUES
(22, 'prasad@email.com', '$2y$10$43ZQp.D015/MtN97qTzAIeD3waDQ1zYAqjYtkXKA71k.oVIOA/5ZG', '2021-05-10 11:04:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `bu_id` (`bu_id`) USING BTREE,
  ADD KEY `br_id` (`br_id`) USING BTREE;

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `pb_id` (`pb_id`) USING BTREE,
  ADD KEY `pu_id` (`pu_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `br_id` FOREIGN KEY (`br_id`) REFERENCES `room` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bu_id` FOREIGN KEY (`bu_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `pb_id` FOREIGN KEY (`pb_id`) REFERENCES `booking` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pu_id` FOREIGN KEY (`pu_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
