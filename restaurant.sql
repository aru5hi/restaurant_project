-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 05:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `user_pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fname`, `lname`, `email`, `ph_no`, `address`, `user_pass`) VALUES
(1, 'Arushi', 'Mishra', 'mishraarushi97@hotmail.com', 9811684457, 'E-108, Sector 52, NOIDA, UP', 'Hello'),
(4, 'Aviral', 'Mishra', 'aviral1128@yahoo.com', 8723441075, 'B-16,Kanchenjunga Appt.,Sector-53, NOIDA, UP', 'Avi2005'),
(5, 'Jai', 'Gandhi', 'jaigandhi989@outlook.com', 9854023847, 'D-61, Arravali Appt, Vaishali, Ghaziabad', '09jaig');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `cid` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ph_no` bigint(20) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `pay_meth` char(30) DEFAULT NULL,
  `del_type` varchar(20) DEFAULT NULL,
  `ord` blob,
  `ord_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`cid`, `name`, `email`, `ph_no`, `address`, `pay_meth`, `del_type`, `ord`, `ord_id`) VALUES
(1, 'ArushiMishra', 'mishraarushi97@hotmail.com', 9811684457, 'E-108, Sector 52, NOIDA, UP', 'Debit/Credit card', 'PICK UP', NULL, 1),
(1, 'Arushi Mishra', 'mishraarushi97@hotmail.com', 9811684457, 'E-108, Sector 52, NOIDA, UP', 'cash on delivery', 'HOME DELIVERY', NULL, 2),
(1, 'Arushi Mishra', 'mishraarushi97@hotmail.com', 9811684457, 'E-108, Sector 52, NOIDA, UP', 'net banking', 'PICK UP', NULL, 3),
(1, 'Arushi Mishra', 'mishraarushi97@hotmail.com', 9811684457, 'E-108, Sector 52, NOIDA, UP', 'cash on delivery', '', NULL, 4),
(1, 'Arushi Mishra', 'mishraarushi97@hotmail.com', 9811684457, 'E-108, Sector 52, NOIDA, UP', 'cash on delivery', '', NULL, 5),
(4, 'Aviral Mishra', 'aviral1128@yahoo.com', 8723441075, 'B-16,Kanchenjunga Appt.,Sector-53, NOIDA, UP', 'cash on delivery', 'PICK UP', NULL, 6),
(4, 'Aviral Mishra', 'aviral1128@yahoo.com', 8723441075, 'B-16,Kanchenjunga Appt.,Sector-53, NOIDA, UP', 'net banking', 'HOME DELIVERY', NULL, 7),
(4, 'Aviral Mishra', 'aviral1128@yahoo.com', 8723441075, 'B-16,Kanchenjunga Appt.,Sector-53, NOIDA, UP', 'cash on delivery', 'HOME DELIVERY', NULL, 8),
(4, 'Aviral Mishra', 'aviral1128@yahoo.com', 8723441075, 'B-16,Kanchenjunga Appt.,Sector-53, NOIDA, UP', '', '', NULL, 9),
(5, 'Jai Gandhi', 'jaigandhi989@outlook.com', 9854023847, 'D-61, Arravali Appt, Vaishali, Ghaziabad', 'cash on delivery', 'PICK UP', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `guest_order`
--

CREATE TABLE `guest_order` (
  `ordid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `pay_meth` varchar(50) NOT NULL,
  `del_type` varchar(50) NOT NULL,
  `ord` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_order`
--

INSERT INTO `guest_order` (`ordid`, `name`, `email`, `ph_no`, `address`, `pay_meth`, `del_type`, `ord`) VALUES
(0, 'Farhan', 'khan.farhan98@gmail.com', 7281937285, 'D-52, Arravali appt, Niti khand, Indirapuram', 'cash on delivery', '', NULL),
(1, 'Srishti Mishra', 'Srishti1995@gmail.com', 7839447382, 'B-16,SECTOR 52, NOIDA UP', 'Debit/Credit card', 'HOME DELIVERY', NULL),
(2, 'Himanshu', 'trivedihimanshu1987@gmail.com', 8291846371, 'A-9, Triveni appt, Gurgaon, Haryana', 'cash on delivery', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guest_res`
--

CREATE TABLE `guest_res` (
  `gcid` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `date_of_entry` varchar(10) NOT NULL,
  `res_date` date NOT NULL,
  `res_time` varchar(10) NOT NULL,
  `type` char(1) NOT NULL,
  `party_type` char(50) NOT NULL,
  `no_of_guest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_res`
--

INSERT INTO `guest_res` (`gcid`, `name`, `ph_no`, `date_of_entry`, `res_date`, `res_time`, `type`, `party_type`, `no_of_guest`) VALUES
(35, 'Arushi', 9811684456, '16-12-2018', '2019-01-31', '12:30 PM', 'g', 'Family get-together', 10),
(36, 'kjdvw', 8734921749, '16-12-2018', '2018-12-28', '3:30 PM', 'p', 'NA', 6),
(37, 'Aviral Mishra', 8723441075, '02-03-2019', '2019-03-09', '12:45 PM', 'g', 'Birthday', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `guest_order`
--
ALTER TABLE `guest_order`
  ADD PRIMARY KEY (`ordid`);

--
-- Indexes for table `guest_res`
--
ALTER TABLE `guest_res`
  ADD PRIMARY KEY (`gcid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cust_order`
--
ALTER TABLE `cust_order`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `guest_res`
--
ALTER TABLE `guest_res`
  MODIFY `gcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
