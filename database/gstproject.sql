-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 12:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `companyid` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `services` varchar(100) NOT NULL,
  `hsn` varchar(255) NOT NULL,
  `invoice` int(55) NOT NULL,
  `price` varchar(50) NOT NULL,
  `modeofpayment` varchar(50) NOT NULL,
  `orderdate` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `serial` int(55) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `tax-p` int(55) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `userid`, `companyid`, `name`, `customerid`, `phone`, `companyname`, `gst`, `email`, `address`, `services`, `hsn`, `invoice`, `price`, `modeofpayment`, `orderdate`, `quantity`, `serial`, `timestamp`, `tax-p`, `state`) VALUES
(1, 'USER-0012', 'Company-001', 'Ambuj Yadav', 'CUSTOMER-008 ', '09793297402', '', 'qwerty', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', 'facebook', 'AM123', 0, '500', 'online', '2024-06-18', 1, 1, '2024-06-21 07:41:59.256923', 18, 'Up'),
(2, 'USER-0010', 'Company-001', 'komal', 'CUSTOMER-006 ', '8777554334', '', '123123qwerty', 'komal@gmail.com', 'nadeshar', 'fab', 'AM123', 0, '200', 'cash', '2024-06-21', 1, 2, '2024-06-21 09:12:23.592766', 12, 'Up'),
(3, 'USER-0010', 'Company-001', 'komal', 'CUSTOMER-006 ', '8777554334', '', '123123qwerty', 'komal@gmail.com', 'nadeshar', 'fab', 'AM123', 0, '200', 'cash', '2024-06-21', 1, 2, '2024-06-21 09:12:23.595126', 12, 'Up'),
(4, 'USER-0010', 'Company-001', 'komal', 'CUSTOMER-006 ', '8777554334', '', '123123qwerty', 'komal@gmail.com', 'nadeshar', 'fab', 'AM123', 0, '200', 'cash', '2024-06-21', 1, 2, '2024-06-21 09:12:23.596723', 12, 'Up'),
(5, 'USER-0011', 'Company-001', 'jack', 'CUSTOMER-007 ', '9793297402', '', 'poiuyr4567', 'jack@gmail.com', 'B10/12 krim kund shivala', 'q1', 'AMB1', 0, '500', 'online', '1970-01-21', 2, 3, '2024-06-21 06:49:06.331812', 18, 'other'),
(6, 'USER-0011', 'Company-001', 'jack', 'CUSTOMER-007 ', '9793297402', '', 'poiuyr4567', 'jack@gmail.com', 'B10/12 krim kund shivala', 'q2', 'AMB', 0, '500', 'online', '1970-01-21', 2, 3, '2024-06-21 06:49:06.336263', 18, 'other'),
(7, 'USER-0011', 'Company-001', 'jack', 'CUSTOMER-007 ', '9793297402', '', 'poiuyr4567', 'jack@gmail.com', 'B10/12 krim kund shivala', 'q3', 'AMB1', 0, '500', 'online', '1970-01-21', 2, 3, '2024-06-21 06:49:06.338573', 18, 'other'),
(8, 'USER-0011', 'Company-001', 'jack', 'CUSTOMER-007 ', '9793297402', '', 'poiuyr4567', 'jack@gmail.com', 'B10/12 krim kund shivala', 'rawmaterial', 'risk', 0, '7000', 'cash', '2024-06-21', 1, 4, '2024-06-21 05:32:47.678879', 32, 'other'),
(9, 'USER-0012', 'Company-001', 'Ambuj Yadav', 'CUSTOMER-008 ', '09793297402', '', 'qwerty', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', 'face', 'AM123', 0, '500', 'online', '2024-06-21', 1, 5, '2024-06-21 06:46:30.165347', 32, 'Up'),
(10, 'USER-0012', 'Company-001', 'Ambuj Yadav', 'CUSTOMER-008 ', '09793297402', '', 'qwerty', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', 'nonvegg', 'AM123', 0, '200', 'online', '2024-06-21', 1, 5, '2024-06-21 06:46:30.171121', 32, 'Up'),
(11, 'USER-0011', 'Company-001', 'jack', 'CUSTOMER-007 ', '9793297402', 'youtube ', 'poiuyr4567', 'jack@gmail.com', 'B10/12 krim kund shivala', 'watchhhhhh', 'AM12333', 0, '5000', 'online', '2024-06-11', 3, 6, '2024-06-21 07:11:10.431340', 18, 'other'),
(12, 'USER-0011', 'Company-001', 'jack', 'CUSTOMER-007 ', '9793297402', 'youtube ', 'poiuyr4567', 'jack@gmail.com', 'B10/12 krim kund shivala', 'laptoppppp', 'AMB123333', 0, '5000', 'online', '2024-06-11', 3, 6, '2024-06-21 07:11:10.434528', 18, 'other'),
(13, 'USER-0011', 'Company-001', 'jack', 'CUSTOMER-007 ', '9793297402', 'youtube ', 'poiuyr4567', 'jack@gmail.com', 'B10/12 krim kund shivala', 'Pccccc', 'AMB1123', 0, '5000', 'online', '2024-06-11', 3, 6, '2024-06-21 07:11:10.437100', 18, 'other'),
(14, 'USER-008', 'Company-001', 'ankur', 'CUSTOMER-004 ', '09793297402', 'youtube ', '123123qwerty', 'ankur@gmail.com', 'B10/12 krim kund shivala', 'bi', '1', 0, '100', 'online', '2024-06-29', 1, 7, '2024-06-21 09:15:20.663914', 20, 'Up'),
(15, 'USER-008', 'Company-001', 'ankur', 'CUSTOMER-004 ', '09793297402', 'youtube ', '123123qwerty', 'ankur@gmail.com', 'B10/12 krim kund shivala', 'bike23', '2', 0, '100', 'online', '2024-06-29', 1, 7, '2024-06-21 07:21:51.166873', 20, 'Up'),
(16, 'USER-008', 'Company-001', 'ankur', 'CUSTOMER-004 ', '09793297402', 'youtube ', '123123qwerty', 'ankur@gmail.com', 'B10/12 krim kund shivala', 'bike34', '3', 0, '100', 'online', '2024-06-29', 1, 7, '2024-06-21 07:21:51.168467', 20, 'Up'),
(17, 'USER-0014', 'Company-008', 'kashiboy1', 'CUSTOMER-001 ', '09793297402', 'Kashi Code ', 'zax123', 'kashiboy@gmail.com', 'B10/12 krim kund shivala', 'webservice', 'AMB1', 0, '200', 'online', '2024-06-18', 1, 1, '2024-06-21 07:41:59.260737', 18, 'Up'),
(18, 'USER-0014', 'Company-008', 'kashiboy1', 'CUSTOMER-001 ', '09793297402', 'Kashi Code ', 'zax123', 'kashiboy@gmail.com', 'B10/12 krim kund shivala', 'advocate', 'AM12333', 0, '200', 'online', '2024-06-18', 1, 1, '2024-06-21 07:41:59.263401', 18, 'Up'),
(19, 'USER-0014', 'Company-008', 'kashiboy1', 'CUSTOMER-001 ', '09793297402', 'Kashi Code ', 'zax123', 'kashiboy@gmail.com', 'B10/12 krim kund shivala', 'veg', 'AMB1', 0, '200', 'cash', '2024-06-21', 1, 2, '2024-06-21 09:12:23.598678', 12, 'Up'),
(20, 'USER-0013', 'Company-001', 'Ambuj Yadav', 'CUSTOMER-009 ', '09793297402', 'KASHI CODE ', 'qwerty', 'kashi@gmail.com', 'B10/12 krim kund shivala', 's', 'AM123', 0, '100', 'online', '2024-06-22', 1, 8, '2024-06-21 09:40:10.057473', 12, 'Up'),
(21, 'USER-0013', 'Company-001', 'Ambuj Yadav', 'CUSTOMER-009 ', '09793297402', 'KASHI CODE ', 'qwerty', 'kashi@gmail.com', 'B10/12 krim kund shivala', 'h', 'AM123', 0, '100', 'online', '2024-06-22', 1, 8, '2024-06-21 09:40:10.058808', 12, 'Up');

-- --------------------------------------------------------

--
-- Table structure for table `profarmacustomer`
--

CREATE TABLE `profarmacustomer` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `serial` int(255) NOT NULL,
  `customername` varchar(55) NOT NULL,
  `businessname` varchar(55) NOT NULL,
  `mobile` int(12) NOT NULL,
  `email` varchar(55) NOT NULL,
  `services` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `orderdate` int(6) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profarmacustomer`
--

INSERT INTO `profarmacustomer` (`id`, `userid`, `serial`, `customername`, `businessname`, `mobile`, `email`, `services`, `quantity`, `price`, `orderdate`, `date`) VALUES
(1, 'temp-001', 1, 'Ambuj Yadav', 'darvin', 2147483647, 'Ambuj152@gmail.com', 'website', 1, 500, 2024, '2024-05-24 06:09:58.584975'),
(2, 'temp-001', 1, 'Ambuj Yadav', 'darvin', 2147483647, 'Ambuj152@gmail.com', 'facebook', 1, 100, 2024, '2024-05-24 06:09:58.588611'),
(3, 'temp-003', 2, 'Ambuj Yadav', 'youtube', 2147483647, 'Ambuj152@gmail.com', 'facewash', 1, 500, 2024, '2024-05-24 10:14:47.144504'),
(4, 'temp-004', 3, 'bhavesh', 'siddu', 2147483647, 'Ambuj152@gmail.com', 'bike', 1, 100, 2024, '2024-05-26 13:56:07.014452'),
(5, 'temp-004', 3, 'bhavesh', 'siddu', 2147483647, 'Ambuj152@gmail.com', 'facewash', 1, 100, 2024, '2024-05-26 13:56:07.017406'),
(6, 'temp-004', 3, 'bhavesh', 'siddu', 2147483647, 'Ambuj152@gmail.com', 'website', 2, 500, 2024, '2024-05-26 13:56:07.020514');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `companyid` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `gst` varchar(20) NOT NULL,
  `companypan` varchar(20) NOT NULL,
  `companybank` varchar(55) NOT NULL,
  `bankifsc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `companyid`, `userid`, `customerid`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `companyname`, `industry`, `gst`, `companypan`, `companybank`, `bankifsc`) VALUES
(1, 'Company-001', 'USER-001', 'CUSTOMER-001', 'Ambuj Yadav', 'Ambuj152@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Uttar pradesh', '221001', 'youtube', 'IT', 'qwerty', '', '', ''),
(2, 'Company-001', 'USER-002', 'CUSTOMER-002', 'rishu', 'rishu@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Uttar pradesh', '221001', 'youtube', 'IT', 'qwertyuiop', '', '', ''),
(3, 'Company-002', 'USER-003', 'CUSTOMER-001', 'Ambuj Yadav', 'Ambuj152@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Uttar pradesh', '221001', 'youtube', 'video', 'qwerty', '', '', ''),
(4, 'Company-002', 'USER-004', 'CUSTOMER-002', 'aaa', 'rishu@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Uttar pradesh', '221001', 'youtube', 'IT', 'qwerty', '', '', ''),
(5, 'Company-002', 'USER-005', 'CUSTOMER-003', 'bbbb', 'bbb@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Uttar pradesh', '221001', 'youtube', 'IT', 'qwerty', '', '', ''),
(6, 'Company-001', 'USER-006', 'CUSTOMER-003', 'rrrr', 'rishu@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Uttar pradesh', '221001', 'youtube', 'IT', 'qwerty', '', '', ''),
(7, 'Company-006', 'USER-007', 'CUSTOMER-001', 'rizo', 'rishu@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Uttar pradesh', '221001', 'youtube', 'it', '56564drdre', '', '', ''),
(8, 'Company-001', 'USER-008', 'CUSTOMER-004', 'ankur', 'ankur@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Up', '221001', 'youtube', 'product', '123123qwerty', '', '', ''),
(9, 'Company-001', 'USER-009', 'CUSTOMER-005', 'genv', 'ganv123@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'other', '221001', 'youtube', 'product', 'qwerty', '', '', ''),
(10, 'Company-001', 'USER-0010', 'CUSTOMER-006', 'komal', 'komal@gmail.com', '8777554334', 'nadeshar', 'Varanasi', 'Up', '221001', 'youtube', 'clothes', '123123qwerty', '', '', ''),
(11, 'Company-001', 'USER-0011', 'CUSTOMER-007', 'jack', 'jack@gmail.com', '9793297402', 'B10/12 krim kund shivala', 'Varanasi', 'other', '221001', 'youtube', 'it', 'poiuyr4567', '', '', ''),
(12, 'Company-001', 'USER-0012', 'CUSTOMER-008', 'Ambuj Yadav', 'Ambuj152@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Up', '221001', 'youtube', 'vide', 'qwerty', '', '', ''),
(13, 'Company-001', 'USER-0013', 'CUSTOMER-009', 'Ambuj Yadav', 'kashi@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Up', '221001', 'KASHI CODE', 'product', 'qwerty', '', '', ''),
(14, 'Company-008', 'USER-0014', 'CUSTOMER-001', 'kashiboy1', 'kashiboy@gmail.com', '09793297402', 'B10/12 krim kund shivala', 'Varanasi', 'Up', '221001', 'Kashi Code', 'product', 'zax123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `serial`
--

CREATE TABLE `serial` (
  `taxcount` varchar(255) NOT NULL,
  `serialcount` int(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serial`
--

INSERT INTO `serial` (`taxcount`, `serialcount`, `id`) VALUES
('18', 1, 1),
('18', 1, 2),
('18', 1, 3),
('18', 1, 4),
('18', 2, 5),
('18', 2, 6),
('18', 2, 7),
('18', 2, 8),
('18', 2, 9),
('18', 2, 10),
('18', 2, 11),
('18', 2, 12),
('18', 2, 13),
('18', 2, 14),
('18', 2, 15),
('18', 2, 16),
('18', 2, 17),
('18', 2, 18),
('18', 2, 19),
('18', 2, 20),
('18', 2, 21),
('30', 2, 22),
('18', 3, 23),
('18', 3, 24),
('12', 1, 25),
('21', 1, 26),
('21', 1, 27),
('21', 1, 28),
('30', 2, 29),
('30', 2, 30),
('30', 2, 31),
('19', 3, 32),
('19', 3, 33),
('19', 3, 34),
('30', 4, 35),
('30', 4, 36),
('30', 4, 37),
('19', 5, 38),
('32', 4, 39),
('32', 4, 40),
('18', 5, 41),
('19', 6, 42),
('32', 7, 43),
('12', 8, 44),
('12', 8, 45),
('19', 9, 46),
('19', 9, 47),
('18', 1, 48),
('18', 1, 49),
('18', 1, 50),
('19', 2, 51),
('19', 2, 52),
('32', 3, 53),
('32', 3, 54),
('18', 4, 55),
('18', 4, 56),
('32', 1, 57),
('32', 1, 58),
('19', 2, 59),
('19', 2, 60),
('30', 3, 61),
('30', 3, 62),
('30', 3, 63),
('18', 1, 64),
('18', 1, 65),
('12', 2, 66),
('24', 3, 67),
('24', 3, 68),
('24', 3, 69),
('30', 4, 70),
('32', 5, 71),
('32', 5, 72),
('19', 6, 73),
('19', 6, 74),
('32', 1, 75),
('32', 1, 76),
('32', 1, 77),
('24', 2, 78),
('12', 7, 79),
('12', 7, 80),
('30', 1, 81),
('30', 1, 82),
('40', 2, 83),
('32', 3, 84),
('32', 3, 85),
('19', 1, 86),
('19', 1, 87),
('12', 1, 88),
('12', 1, 89),
('12', 2, 90),
('12', 2, 91),
('32', 3, 92),
('12', 2, 93),
('19', 3, 94),
('18', 4, 95),
('18', 4, 96),
('18', 4, 97),
('18', 4, 98),
('32', 5, 99),
('12', 6, 100),
('12', 7, 101),
('12', 7, 102),
('12', 7, 103),
('19', 4, 104),
('12', 5, 105),
('19', 6, 106),
('12', 7, 107),
('18', 8, 108),
('18', 8, 109),
('30', 8, 110),
('19', 9, 111),
('32', 1, 112),
('30', 9, 113),
('18', 10, 114),
('18', 11, 115),
('18', 12, 116),
('18', 13, 117),
('18', 14, 118),
('18', 15, 119),
('18', 16, 120),
('18', 17, 121),
('18', 18, 122),
('18', 19, 123),
('18', 19, 124),
('18', 19, 125),
('18', 19, 126),
('18', 19, 127),
('18', 20, 128),
('18', 20, 129),
('18', 20, 130),
('18', 21, 131),
('18', 21, 132),
('18', 21, 133),
('18', 22, 134),
('18', 22, 135),
('18', 22, 136),
('18', 22, 137),
('18', 22, 138),
('18', 22, 139),
('18', 22, 140),
('12', 23, 141),
('16', 24, 142),
('50', 25, 143),
('30', 26, 144),
('32', 27, 145),
('32', 27, 146),
('32', 27, 147),
('32', 27, 148),
('32', 27, 149),
('32', 27, 150),
('24', 1, 151),
('32', 2, 152),
('32', 2, 153),
('32', 2, 154),
('18', 3, 155),
('18', 3, 156),
('18', 3, 157),
('32', 4, 158),
('30', 5, 159),
('30', 5, 160),
('18', 6, 161),
('18', 6, 162),
('18', 6, 163),
('18', 7, 164),
('18', 7, 165),
('18', 7, 166),
('18', 1, 167),
('18', 1, 168),
('12', 2, 169),
('12', 8, 170),
('12', 8, 171);

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `username` varchar(55) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`username`, `password`, `id`) VALUES
('super', 'password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempbill`
--

CREATE TABLE `tempbill` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `companyid` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `services` varchar(100) NOT NULL,
  `invoice` varchar(55) NOT NULL,
  `price` int(50) NOT NULL,
  `modeofpayment` varchar(50) NOT NULL,
  `orderdate` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `serial` varchar(55) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temppreview`
--

CREATE TABLE `temppreview` (
  `customerid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customergst` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `hsn` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `modeofpayment` varchar(55) NOT NULL,
  `orderdate` date NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `tax` int(55) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temppreview`
--

INSERT INTO `temppreview` (`customerid`, `name`, `phone`, `email`, `address`, `customergst`, `companyname`, `userid`, `services`, `hsn`, `quantity`, `price`, `modeofpayment`, `orderdate`, `timestamp`, `tax`, `state`) VALUES
('CUSTOMER-002 ', '', '09793297402', 'rishu@gmail.com', 'B10/12 krim kund shivala', '', '', 'USER-002', 'genv', 'AM123', 1, 100, 'online', '2024-06-20', '2024-06-20 11:36:17.002573', 30, ''),
('CUSTOMER-006 ', 'komal', '8777554334', 'komal@gmail.com', 'nadeshar', '123123qwerty', '', 'USER-0010', 'website', 'AM123', 1, 100, 'online', '2024-06-20', '2024-06-20 12:08:08.293032', 32, 'Up'),
('CUSTOMER-006 ', 'komal', '8777554334', 'komal@gmail.com', 'nadeshar', '123123qwerty', '', 'USER-0010', 'facebook', 'AM123', 1, 500, 'online', '2024-06-20', '2024-06-20 12:08:08.295224', 32, 'Up'),
('CUSTOMER-006 ', 'komal', '8777554334', 'komal@gmail.com', 'nadeshar', '123123qwerty', '', 'USER-0010', 'instagram', 'AM123', 1, 200, 'online', '2024-06-20', '2024-06-20 12:08:08.296605', 32, 'Up'),
('CUSTOMER-008 ', 'Ambuj Yadav', '09793297402', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', 'qwerty', '', 'USER-0012', 'facewash', 'AM123', 1, 500, 'online', '2024-06-21', '2024-06-21 06:11:37.660673', 30, 'Up'),
('CUSTOMER-008 ', 'Ambuj Yadav', '09793297402', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', 'qwerty', '', 'USER-0012', 'nonveg', 'AM123', 1, 200, 'online', '2024-06-21', '2024-06-21 06:11:37.662393', 30, 'Up'),
('CUSTOMER-007 ', 'jack', '9793297402', 'jack@gmail.com', 'B10/12 krim kund shivala', 'poiuyr4567', 'youtube ', 'USER-0011', 'watch', 'AM123', 1, 500, 'online', '2024-06-21', '2024-06-21 07:05:20.586146', 18, 'other'),
('CUSTOMER-007 ', 'jack', '9793297402', 'jack@gmail.com', 'B10/12 krim kund shivala', 'poiuyr4567', 'youtube ', 'USER-0011', 'laptop', 'AMB123', 1, 500, 'online', '2024-06-21', '2024-06-21 07:05:20.589822', 18, 'other'),
('CUSTOMER-007 ', 'jack', '9793297402', 'jack@gmail.com', 'B10/12 krim kund shivala', 'poiuyr4567', 'youtube ', 'USER-0011', 'Pc', 'AMB1', 1, 500, 'online', '2024-06-21', '2024-06-21 07:05:20.596846', 18, 'other'),
('CUSTOMER-004 ', 'ankur', '09793297402', 'ankur@gmail.com', 'B10/12 krim kund shivala', '123123qwerty', 'youtube ', 'USER-008', 'bike1', '1', 1, 100, 'online', '2024-06-21', '2024-06-21 07:20:41.216962', 18, 'Up'),
('CUSTOMER-004 ', 'ankur', '09793297402', 'ankur@gmail.com', 'B10/12 krim kund shivala', '123123qwerty', 'youtube ', 'USER-008', 'bike2', '2', 1, 100, 'online', '2024-06-21', '2024-06-21 07:20:41.219206', 18, 'Up'),
('CUSTOMER-004 ', 'ankur', '09793297402', 'ankur@gmail.com', 'B10/12 krim kund shivala', '123123qwerty', 'youtube ', 'USER-008', 'bike3', '3', 1, 100, 'online', '2024-06-21', '2024-06-21 07:20:41.221257', 18, 'Up'),
('CUSTOMER-001 ', 'kashiboy1', '09793297402', 'kashiboy@gmail.com', 'B10/12 krim kund shivala', 'zax123', 'Kashi Code ', 'USER-0014', 'veg', 'AMB1', 1, 200, 'online', '2024-06-21', '2024-06-21 09:07:08.465308', 12, 'Up'),
('CUSTOMER-009 ', 'Ambuj Yadav', '09793297402', 'kashi@gmail.com', 'B10/12 krim kund shivala', 'qwerty', 'KASHI CODE ', 'USER-0013', 'ssss', 'AM123', 1, 100, 'online', '2024-06-21', '2024-06-21 09:39:08.934847', 12, 'Up'),
('CUSTOMER-009 ', 'Ambuj Yadav', '09793297402', 'kashi@gmail.com', 'B10/12 krim kund shivala', 'qwerty', 'KASHI CODE ', 'USER-0013', 'hhhh', 'AM123', 1, 100, 'online', '2024-06-21', '2024-06-21 09:39:08.936077', 12, 'Up');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `companyid` varchar(255) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `companyname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `dataeofregistration` date NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `gstnumber` varchar(250) NOT NULL,
  `account` varchar(50) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `bank` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `taxpercentage` int(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `companypan` varchar(255) NOT NULL,
  `in-prefix` varchar(55) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `companyid`, `fullname`, `companyname`, `email`, `address`, `dataeofregistration`, `mobile`, `gstnumber`, `account`, `ifsc`, `bank`, `username`, `password`, `taxpercentage`, `status`, `companypan`, `in-prefix`, `filepath`, `qr`) VALUES
(1, 'Company-001', 'Ambuj Yadav', 'DARVIN', 'Ambuj152@gmail.com', ' B10/12 krim kund shivala', '2024-05-23', '09793297402', 'AUYPY4153G', '919793297402', 'KKBK12345678', ' KOTAK MAHINDRA', 'admin', 'admin', 0, 'enabled', 'AQW56767', 'AMB', 'signature/MjAyNC8wNi8yMTE3MTg5NDgwMzY=.png', 'QRIMG/MjAyNC8wNi8yMTE3MTg5NjE5NjI=.png'),
(2, 'Company-002', 'ranjay chaubey', 'royal5', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', '2024-05-09', '09793297402', 'AUYPY4153G', '9793279402', 'KKBK1234567', 'KOTAK MAHINDRA', 'demo', 'demo', 0, 'enabled', 'youtube', 'royal', '', ''),
(3, 'Company-003', 'Ayush', 'rajiendra', 'rishu@gmail.com', ' B10/12 krim kund shivala', '1970-01-01', '09793297402', 'AUYPY4153G', '9793279402', 'HDFC000hc23', ' HDFC Bank', 'ayush', 'ayush', 0, 'enabled', 'youtube', 'toto', 'signature/MjAyNC8wNi8xODE3MTg2ODUwODY=.png', ''),
(4, 'Company-004', 'resso', 'youtube', 'rishu@gmail.com', 'B10/12 krim kund shivala', '2024-05-01', '09793297402', 'AUYPY4153G', '9793279402', 'BARB0INTV', 'KOTAK', 'demo', '12345', 0, 'enabled', 'youtube', 'royal', '', ''),
(5, 'Company-005', 'bmbuj Yadav', 'siddu', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', '1970-01-01', '09793297402', 'AUYPY4153G', '9793279402', 'KKBK1234567', 'HDFC Bank', 'demo', 'demo', 0, 'enabled', 'siddu', 'DARVIN', 'QRIMG/MjAyNC8wNi8yMTE3MTg5NTgxNTc=.png', ''),
(6, 'Company-006', 'Ambuj Yadav', 'youtube', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', '2024-05-12', '09793297402', 'AUYPY4153G', '9793279402', 'KKBK123', 'qwert54321', 'rishu', '12345', 0, 'enabled', 'siddu', 'royal', 'signature/MjAyNC8wNi8yMTE3MTg5NTUzNjY=.png', ''),
(7, 'Company-007', 'Ambuj Yadav', 'youtube', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', '2024-06-09', '09793297402', 'AUYPY4153G', '9793279402', 'HDFC000hc23', 'qwert54321', 'ambuj', '12345', 0, 'enabled', 'youtube', 'toto', 'signature/MjAyNC8wNi8xODE3MTg2ODg2MTY=.png', ''),
(8, 'Company-008', 'kashi', 'kashicode', 'Ambuj152@gmail.com', 'B10/12 krim kund shivala', '2024-06-13', '09793297402', '09AAHCG9RT657HH', '123456', 'UBINFARS', 'KOTAK', '12345678', '12345678', 0, 'enabled', 'youtube', 'KC', 'signature/MjAyNC8wNi8yMTE3MTg5NTgzNTI=.png', 'QRIMG/MjAyNC8wNi8yMTE3MTg5NjIxOTA=.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profarmacustomer`
--
ALTER TABLE `profarmacustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serial`
--
ALTER TABLE `serial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempbill`
--
ALTER TABLE `tempbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `profarmacustomer`
--
ALTER TABLE `profarmacustomer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `serial`
--
ALTER TABLE `serial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `superuser`
--
ALTER TABLE `superuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tempbill`
--
ALTER TABLE `tempbill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
