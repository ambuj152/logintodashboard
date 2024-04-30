-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 01:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('ambujy3', 'gwpl123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `services` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `modeofpayment` varchar(50) NOT NULL,
  `orderdate` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Ambuj Yadav', 'Ambuj152@gmail.com', '09793297402', 'hi how are you?'),
(2, 'trail1', 'trail1@gmail.com', '9999999999', 'hi'),
(7, 'rishu', 'prince@gmail.com', '09793297402', 'hi how are you?'),
(8, 'rishu', 'prince@gmail.com', '09793297402', 'hi how are you?'),
(28, 'Ambuj Yadav', 'Ambuj152@gmail.com', '9793297402', 'Pollution is a pervasive and pressing global issue that threatens the health of our planet and its inhabitants. From the air we breathe to the water we drink and the land we inhabit, '),
(29, 'Ambuj Yadav', 'Ambuj152@gmail.com', '9793297402', 'Pollution is a pervasive and pressing global issue that threatens the health of our planet and its inhabitants. From the air we breathe to the water we drink and the land we inhabit, pollution infiltrates every aspect of our environment, '),
(30, 'Ambuj Yadav', 'Ambuj152@gmail.com', '9793297402', 'Pollution is a pervasive and pressing global issue that threatens the health of our planet and its inhabitants. From the air we breathe to the water we drink and the land we inhabit, pollution infiltrates every aspect of our environment, '),
(31, 'Ambuj Yadav', 'Ambuj152@gmail.com', '9793297402', 'Pollution is a pervasive and pressing global issue that threatens the health of our planet and its inhabitants. From the air we breathe to the water we drink and the land we inhabit, pollution infiltrates every aspect of our environment, '),
(32, 'Ambuj Yadav', 'Ambuj152@gmail.com', '9793297402', 'Pollution is a pervasive and pressing global issue that threatens the health of our planet and its inhabitants. From the air we breathe to the water we drink and the land we inhabit, pollution infiltrates every aspect of our environment, ');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`filename`, `filepath`, `id`) VALUES
('1.jpeg', 'uploads/1.jpeg', 1),
('4.jpeg', 'uploads/DP ambuj.jpg', 2),
('5.jpeg', 'uploads/10.jpeg', 3),
('8.jpeg', 'uploads/8.jpeg', 4),
('10.jpeg', 'uploads/13.jpeg', 5),
('14.jpeg', 'uploads/14.jpeg', 6),
('15.jpeg', 'uploads/9.jpeg', 7),
('bg.jpg', 'uploads/bg.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `companyid` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
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
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `companyid` varchar(255) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `companyname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `dataeofregistration` varchar(55) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `gstnumber` varchar(250) NOT NULL,
  `account` varchar(50) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `bank` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `taxpercentage` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superuser`
--
ALTER TABLE `superuser`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `superuser`
--
ALTER TABLE `superuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
