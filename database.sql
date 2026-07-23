-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 01:19 PM
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
CREATE DATABASE IF NOT EXISTS `bloodbank` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bloodbank`;

-- --------------------------------------------------------

--
-- Table structure for table `blood_samples`
--

CREATE TABLE `blood_samples` (
  `No` int(11) NOT NULL,
  `PatientID` int(15) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `PTT` varchar(10) DEFAULT NULL,
  `Hemoglobin` varchar(10) DEFAULT NULL,
  `Hematocrit` varchar(10) DEFAULT NULL,
  `MCV` varchar(15) DEFAULT NULL,
  `BMP` varchar(75) DEFAULT NULL,
  `Glucose` varchar(15) DEFAULT NULL,
  `Calcium` varchar(10) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Notes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_samples`
--

INSERT INTO `blood_samples` (`No`, `PatientID`, `Name`, `Type`, `PTT`, `Hemoglobin`, `Hematocrit`, `MCV`, `BMP`, `Glucose`, `Calcium`, `Date`, `Notes`) VALUES
(1, 2147483647, 'CBC', 'صوردة دم كاملة - Whole Blood', '12', '20000000', '122', '12', '56', '21', '21', '2016-05-26', ''),
(2, 2147483647, 'enzymes', 'صوردة دم كاملة - Whole Blood', '65', '54545555', '54555', '545', '5', '555', '55', '0005-05-18', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `blood_types`
--

CREATE TABLE `blood_types` (
  `No` int(15) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `RH` tinyint(1) NOT NULL,
  `Notes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_types`
--

INSERT INTO `blood_types` (`No`, `Name`, `Type`, `RH`, `Notes`) VALUES
(1, 'A+', 'Anti-B', 1, ''),
(2, 'A-', 'Anti-B', 0, ''),
(3, 'B+', 'Anti-A', 1, ''),
(4, 'B-', 'Anti-A', 0, ''),
(5, 'AB+', 'none', 1, ''),
(6, 'AB-', 'none', 0, ''),
(7, 'O+', 'Anti-A and', 1, ''),
(8, 'O-', 'Anti-A and', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `No` int(15) NOT NULL COMMENT 'هذا حقل مفتاح أساسي غير قابل للتكرار',
  `Name` varchar(60) NOT NULL,
  `Mobile` varchar(14) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='جدول اتصل بنا';

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

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `No` int(15) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Employee` varchar(70) NOT NULL,
  `Building_No` int(5) NOT NULL,
  `Building_Name` varchar(70) NOT NULL,
  `Hospital` varchar(70) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Notes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`No`, `Name`, `Employee`, `Building_No`, `Building_Name`, `Hospital`, `Status`, `Notes`) VALUES
(1, 'معمل التحاليل فرع سلطانة ', 'محمد مصطفى الراجحي', 1250, 'البكاري 1', 'مجموعة البكاري الدولية', 1, 'الدور الثالث');

-- --------------------------------------------------------

--
-- Table structure for table `m_e_results`
--

CREATE TABLE `m_e_results` (
  `No` int(15) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `User_ID` int(15) NOT NULL,
  `User_Name` varchar(70) NOT NULL,
  `Official_Name` varchar(70) NOT NULL,
  `Date` date NOT NULL,
  `Doctor_Name` varchar(70) NOT NULL,
  `Diseases` varchar(250) NOT NULL,
  `Diagnosis` varchar(500) NOT NULL,
  `Vacancies` varchar(100) NOT NULL,
  `Notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(15) NOT NULL,
  `ID_NO` varchar(15) NOT NULL,
  `FName` varchar(75) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Nationality` varchar(35) NOT NULL,
  `MobileNo` varchar(14) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `username` varchar(25) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `Work_For` varchar(70) NOT NULL,
  `Notes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `ID_NO`, `FName`, `Type`, `Nationality`, `MobileNo`, `Email`, `Address`, `username`, `Password`, `Age`, `Work_For`, `Notes`) VALUES
(1, '111111255', 'محمد مصطفى الراجحي', 'فني معمل', 'سعودي', '966555244444', 'm1@m.m', 'الطائف - أمام قصر العليا', 'u1', '123', '12', 'مجموعة البكاري', 'Notes'),
(3, '2147483647', 'هاني عادل خليل', 'فني معمل', 'مصري', '966521144711', 'm2@m.m', 'الطائف الخرمة', 'u2', '123', '25', 'مجموعة البكاري', 'Notes'),
(4, '255844555544771', 'بدر السليم ', 'طبيب', 'سعودي', '966554555224', 'm3@m.m', 'الطائف الخرمة', 'u3', '123', '66', 'مجموعة البكاري', 'Notes'),
(5, '125458885225855', 'مفرح الزاهراني ', 'طبيب', 'سعودي', '966555142454', 'mm@m.m', 'الخرمة', 'u4', '123', '55', 'مجموعة البكاري', 'Notes'),
(6, '125454888521222', 'عبداللطيف العنزي', 'طبيب', 'سعودي', '966552154411', 'asd@ff.ff', 'الخرمة', 'u5', '123', '45', 'مجموعة البكاري', 'Notes'),
(7, '245544888255554', 'خولة رحيم', 'مريض', 'سعودي', '966558441252', 'mms@bn.nn', 'الطائف', 'u6', '123', '42', 'لا تعمل', 'Notes'),
(8, '158855252222444', 'معتز عرابي', 'مريض', 'سعودي', '966511545521', 'nn@GH.NM', 'الطائف', 'U7', '123', '55', 'عسكري', 'Notes'),
(9, '256554787444558', 'محمد يوسف احمد', 'مريض', 'مصري', '966553445522', 'asd@cv.v', 'مكة ', 'u8', '123', '32', 'بن زقر الدولية', 'Notes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_samples`
--
ALTER TABLE `blood_samples`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `blood_types`
--
ALTER TABLE `blood_types`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `m_e_results`
--
ALTER TABLE `m_e_results`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_NO` (`ID_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_samples`
--
ALTER TABLE `blood_samples`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blood_types`
--
ALTER TABLE `blood_types`
  MODIFY `No` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `No` int(15) NOT NULL AUTO_INCREMENT COMMENT 'هذا حقل مفتاح أساسي غير قابل للتكرار';
--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `No` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `No` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_e_results`
--
ALTER TABLE `m_e_results`
  MODIFY `No` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
