-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 07:00 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `No` int(15) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Endemic_country` varchar(350) NOT NULL,
  `Information` varchar(100) NOT NULL,
  `effect` varchar(150) NOT NULL,
  `Treatment` varchar(300) NOT NULL,
  `Inquire` varchar(100) NOT NULL,
  `Part_Body` varchar(100) NOT NULL,
  `notes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`No`, `Name`, `Endemic_country`, `Information`, `effect`, `Treatment`, `Inquire`, `Part_Body`, `notes`) VALUES
(1, 'بلهارسيا', 'ليبيا', 'مسبب لفيروس سي ', 'حقن وحبوب ', 'كل البلدان القريبة من النيل', 'الاطفال', 'الكبد', 'اكتشفه بلهارس');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `No` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
