-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 24, 2021 at 10:31 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ots`
--

CREATE TABLE `ots` (
  `id` int(10) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `reference` varchar(20) NOT NULL,
  `invoice` varchar(20) NOT NULL,
  `department` int(10) NOT NULL,
  `costcenter` int(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `contractor` varchar(20) NOT NULL,
  `labor_price` decimal(20,2) NOT NULL,
  `material_price` decimal(20,2) NOT NULL,
  `state_project` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `comment` varchar(1500) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idteam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ots`
--

INSERT INTO `ots` (`id`, `startdate`, `enddate`, `reference`, `invoice`, `department`, `costcenter`, `account`, `project_code`, `description`, `contractor`, `labor_price`, `material_price`, `state_project`, `userid`, `comment`, `state`, `created_at`, `updated_at`, `idteam`) VALUES
(1, '2021-01-24 00:38:49', '2021-01-25 00:38:49', 'test', 'G394', 2, 2, 'other', 'hgh345', 'test test test', 'John', '39.45', '45.68', 'test', 'u3456', 'test test test', 1, '2021-01-24 05:38:49', '2021-01-24 05:42:18', 103),
(2, '2021-01-06 00:00:00', '2021-01-22 00:00:00', 'fasf', 'dasf', 3, 5, 'ava', 'va', 'vav', 'vasdv', '4.00', '5.00', 'va', 'sdfv', 'va', 5, '2021-01-24 10:47:09', '2021-01-24 10:47:09', 7),
(4, '2021-01-25 00:00:00', '2021-01-28 00:00:00', 'ref', 'jfio340', 34, 2, 'misc', 'kjf5', 'descrip', 'Jerry', '454.00', '234.00', 'lkj', '832fj', 'comm', 3, '2021-01-24 20:49:36', '2021-01-24 20:49:36', 1335);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ots`
--
ALTER TABLE `ots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ots`
--
ALTER TABLE `ots`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
