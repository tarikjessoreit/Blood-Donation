-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 05:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ablood_b_17`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `added_datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `fullname` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone_no` varchar(18) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_pic_path` varchar(250) NOT NULL,
  `activation_key` varchar(8) NOT NULL,
  `user_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `added_datetime`, `fullname`, `address`, `phone_no`, `bloodgroup`, `email`, `password`, `profile_pic_path`, `activation_key`, `user_status`) VALUES
(1, '2023-02-16 13:31:40', 'Jessore IT Institute', 'Level 10, Sheikh hasina STP, Jashore', '01884414000', 'O+', 'tarikjessoreit@gmail.com', '12345', 'assets/images/member-profile-pic/', '', 'active'),
(4, '2023-02-16 13:33:27', 'Sofik', ' Jashore', '0177777777777', 'A+', 'Sofik@gmail.com', '12345', 'assets/images/member-profile-pic/', '', 'active'),
(5, '2023-02-16 13:43:53', 'Jobbar Kaka', 'Dhaka, Bangladesh', '015555555555', 'AB-', 'jobbarkaka@gmail.com', '12345', 'assets/images/member-profile-pic/', '', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
