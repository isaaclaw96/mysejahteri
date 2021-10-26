-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 02:58 AM
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
-- Database: `mysejahteri`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `check_in_id` int(11) NOT NULL,
  `check_in_location` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`check_in_id`, `check_in_location`, `date_created`, `customer_id`) VALUES
(1, '', '2021-10-25 14:58:58', 18),
(2, '', '2021-10-25 15:09:38', 19),
(3, '', '2021-10-25 15:27:34', 19),
(4, '', '2021-10-25 15:49:57', 19),
(5, '', '2021-10-25 15:51:20', 19),
(6, '', '2021-10-26 00:32:12', 19),
(7, '', '2021-10-26 00:33:17', 19),
(8, '', '2021-10-26 00:49:24', 19);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_branch` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_branch`, `date_created`) VALUES
(1, 'Company 1 Sdn Bhd', '', '2021-10-25 14:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_status` tinyint(5) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_email`, `customer_phone`, `customer_password`, `customer_name`, `customer_status`, `date_created`) VALUES
(1, 'isl1@mail.com', '0', '', 'Isaac', 0, '2021-10-24 05:53:09'),
(2, 'isaaclaw@mail.com', '0', '', 'Isaac', 0, '2021-10-24 05:56:50'),
(3, 'isaac@email.com', '0', '', 'Isaac2', 0, '2021-10-24 05:58:15'),
(4, 'isaac@isaac.com', '0123456789', '', 'Isaac3', 0, '2021-10-24 06:12:46'),
(5, 'isaac@emailmail.com', '01234567890', '', 'Isaac4', 0, '2021-10-24 07:06:12'),
(6, 'arwin@arwin.com', '0123456789', '', 'Arwin', 0, '2021-10-24 07:33:07'),
(7, 'ch@ch.com', '0112345678', '', 'Calvin', 0, '2021-10-24 10:39:02'),
(8, 'hello@hello.com', '0123456789', '', 'hello', 0, '2021-10-24 10:39:36'),
(9, 'hello@hello.com', '0123456799', '', 'hello', 0, '2021-10-24 14:46:08'),
(10, 'you@you.com', '0123456789', '', 'you', 0, '2021-10-24 14:48:36'),
(11, 'hello@hello.com', '12345687', '', 'hello', 0, '2021-10-24 15:21:52'),
(12, 'hello@hello.com', '1234567', '', 'hello', 0, '2021-10-24 15:22:23'),
(13, 'hi@hi.com', '0123456789', '', 'hi', 0, '2021-10-24 15:32:09'),
(14, 'yoyo@yoyo.com', '0123456789', '', 'yoyoyo', 0, '2021-10-24 15:32:36'),
(15, 'kevin@kevin.com', '0123456789', '', 'kevin', 0, '2021-10-24 15:34:29'),
(16, 'qwer@qwer.com', '0123456789', '', 'qwer', 0, '2021-10-24 15:35:31'),
(17, 'ewq@wqe.com', '0123456789', '', 'okokoko', 0, '2021-10-24 15:36:09'),
(18, 'kk@kk.com', '01234566698', '', 'kk', 0, '2021-10-25 00:46:14'),
(19, 'arjun@arjun.com', '00112233', '', 'Arjun', 0, '2021-10-25 00:51:33'),
(20, 'iz@iz.com', '11223344', '', 'iz', 0, '2021-10-25 00:52:30'),
(21, 'ishak@ishak.com', '00224466', '', 'pdiasoasidhoiasd', 0, '2021-10-25 00:53:58'),
(22, 'ash@ash.com', '22446688', '', 'Ash', 0, '2021-10-25 09:11:56'),
(23, 'dk@dk.com', '9988776655', '', 'dk', 0, '2021-10-25 13:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `tac`
--

CREATE TABLE `tac` (
  `tac_id` int(11) NOT NULL,
  `tac_phone` varchar(20) NOT NULL,
  `tac_tac` mediumint(10) NOT NULL,
  `tac_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tac`
--

INSERT INTO `tac` (`tac_id`, `tac_phone`, `tac_tac`, `tac_created_at`) VALUES
(1, '', 335214, '2021-10-24 15:47:27'),
(2, '', 203384, '2021-10-24 15:59:06'),
(3, '', 187240, '2021-10-24 15:59:31'),
(4, '', 159042, '2021-10-24 16:02:02'),
(5, '', 242190, '2021-10-24 16:03:41'),
(6, '', 497607, '2021-10-24 16:04:17'),
(7, '', 888914, '2021-10-24 16:05:30'),
(8, '', 430946, '2021-10-24 16:05:35'),
(9, '', 405675, '2021-10-24 16:05:58'),
(10, '', 645432, '2021-10-24 16:06:05'),
(11, '', 340592, '2021-10-25 00:53:58'),
(12, '', 401889, '2021-10-25 09:11:56'),
(13, '', 212424, '2021-10-25 09:45:20'),
(14, '', 634981, '2021-10-25 14:02:27'),
(15, '', 477543, '2021-10-25 14:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_contact` varchar(20) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`check_in_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tac`
--
ALTER TABLE `tac`
  ADD PRIMARY KEY (`tac_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `check_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tac`
--
ALTER TABLE `tac`
  MODIFY `tac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_in`
--
ALTER TABLE `check_in`
  ADD CONSTRAINT `check_in_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
