-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 11:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_service`
--

CREATE TABLE `apply_service` (
  `Apply_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Service_ID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `amount` varchar(25) NOT NULL,
  `Upload_Doc1` varchar(250) NOT NULL,
  `Upload_Doc2` varchar(250) NOT NULL,
  `Upload_Doc3` varchar(250) NOT NULL,
  `Upload_Doc4` varchar(250) NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_service`
--

INSERT INTO `apply_service` (`Apply_ID`, `User_ID`, `Service_ID`, `Description`, `amount`, `Upload_Doc1`, `Upload_Doc2`, `Upload_Doc3`, `Upload_Doc4`, `IsActive`) VALUES
(24, 3, 6, '', '2500', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `Area_ID` int(11) NOT NULL,
  `City_ID` int(11) NOT NULL,
  `State_ID` int(11) NOT NULL,
  `Area_Name` varchar(50) NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`Area_ID`, `City_ID`, `State_ID`, `Area_Name`, `DOI`, `IsActive`) VALUES
(2, 0, 0, 'test', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` int(11) NOT NULL,
  `State_ID` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_ID`, `State_ID`, `city_name`, `DOI`, `IsActive`) VALUES
(3, 11, 'Ahmedadbad', '0000-00-00', 1),
(4, 0, 'sdfghjkl', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Contact_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Topic` varchar(50) NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_registration`
--

CREATE TABLE `employee_registration` (
  `Emp_ID` int(11) NOT NULL,
  `Emp_FName` varchar(50) NOT NULL,
  `Emp_LName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_No` varchar(10) NOT NULL,
  `Gender` enum('M','F') NOT NULL DEFAULT 'M',
  `DOB` date NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `address_proof` varchar(250) NOT NULL,
  `Area_ID` varchar(11) NOT NULL,
  `City_ID` varchar(11) NOT NULL,
  `State_ID` varchar(11) NOT NULL,
  `Photo` varchar(250) NOT NULL,
  `Experience` varchar(250) NOT NULL,
  `Joining_Date` date NOT NULL,
  `Resign_Date` date NOT NULL,
  `emp_type` enum('C','I') NOT NULL DEFAULT 'C',
  `DOI` date NOT NULL,
  `IsActive` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_registration`
--

INSERT INTO `employee_registration` (`Emp_ID`, `Emp_FName`, `Emp_LName`, `Email`, `Contact_No`, `Gender`, `DOB`, `Password`, `Address`, `address_proof`, `Area_ID`, `City_ID`, `State_ID`, `Photo`, `Experience`, `Joining_Date`, `Resign_Date`, `emp_type`, `DOI`, `IsActive`) VALUES
(10, 'vipul', 'das', 'vipuldas@gmail.com', '6932548658', 'M', '0000-00-00', 'vipuldas', 'usmanpura , ahmedabad', 'WIN_20190711_11_11_25_Pro.jpg', '0', '0', '0', 'WIN_20190711_11_11_25_Pro.jpg', '5 year', '0000-00-00', '0000-00-00', 'C', '0000-00-00', '1'),
(11, 'mahi', 'patel', 'mahipatel@gmail.com', '9768546967', 'F', '0000-00-00', 'mahipatel', 'jivraj nagar , una', 'WIN_20190711_11_11_25_Pro.jpg', '0', '0', '0', 'WIN_20190711_11_11_40_Pro.jpg', '3 month', '0000-00-00', '0000-00-00', 'I', '0000-00-00', '1'),
(12, 'disha ', 'mehta', 'dishaallofu@gmail.com', '856945896', 'F', '0000-00-00', 'premnju', 'aksh appartment , ahmedabad', 'WIN_20190711_11_11_25_Pro.jpg', '0', '0', '0', 'WIN_20190711_11_11_40_Pro.jpg', '3 year', '0000-00-00', '0000-00-00', 'I', '0000-00-00', '0'),
(13, 'mical', 'rock', 'micaldogy@gmail.com', '896954985', 'M', '0000-00-00', 'ouejkdkoe', 'jivdaya kendraaa , chiloda', 'WIN_20190711_11_11_25_Pro.jpg', '0', '0', '0', 'WIN_20190711_11_11_40_Pro.jpg', '1 day', '0000-00-00', '0000-00-00', 'I', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intern_detail`
--

CREATE TABLE `intern_detail` (
  `Student_ID` int(11) NOT NULL,
  `Student_FName` varchar(50) NOT NULL,
  `Student_LName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Area_ID` int(11) NOT NULL,
  `City_ID` int(11) NOT NULL,
  `State_ID` int(11) NOT NULL,
  `Emp_ID` int(11) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Upload_Marksheet` varchar(250) NOT NULL,
  `Joining_Date` date NOT NULL,
  `Resign_Date` date NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `Service_Name` varchar(50) NOT NULL,
  `Chargs` varchar(150) NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Service_Name`, `Chargs`, `DOI`, `IsActive`) VALUES
(6, 'Private Limited Company', '2500', '0000-00-00', 1),
(7, 'Public Limited Company', '2000', '0000-00-00', 1),
(8, 'limited liability partnership', '2000', '0000-00-00', 1),
(9, 'One Person Company', '3000', '0000-00-00', 1),
(10, 'Sole Proprietorship', '2500', '0000-00-00', 1),
(11, 'partnership', '4000', '0000-00-00', 1),
(12, 'Hindu Undivided Family (HUF)', '2000', '0000-00-00', 1),
(13, 'E-Commerce Business', '1500', '0000-00-00', 1),
(14, 'GST Registration', '2500', '0000-00-00', 1),
(15, 'GST modification', '1500', '0000-00-00', 1),
(16, 'PAN Application', '1200', '0000-00-00', 1),
(17, 'TAN Appliocation', '1800', '0000-00-00', 1),
(18, 'Digital Signature', '1000', '0000-00-00', 1),
(19, 'GST Return', '1500', '0000-00-00', 1),
(20, 'Income Tax Return', '3000', '0000-00-00', 1),
(21, 'PF Return', '2000', '0000-00-00', 1),
(22, 'ESI Return', '3500', '0000-00-00', 1),
(23, 'company anual filing', '2000', '0000-00-00', 1),
(24, 'LLP Annual filing', '3500', '0000-00-00', 1),
(25, 'TDS Return ', '3000', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_ID` int(11) NOT NULL,
  `State_Name` varchar(50) NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_ID`, `State_Name`, `DOI`, `IsActive`) VALUES
(11, 'Gujarat', '0000-00-00', '1'),
(12, 'Goa', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subservices`
--

CREATE TABLE `subservices` (
  `Sub_Service_ID` int(11) NOT NULL,
  `Service_ID` int(11) NOT NULL,
  `Sub_Service_Name` varchar(50) NOT NULL,
  `DOI` date NOT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task_detail`
--

CREATE TABLE `task_detail` (
  `Task_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Apply_ID` int(11) NOT NULL,
  `Sub_Service_Name` int(11) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Payment_Status` varchar(7) NOT NULL,
  `Date of Application` date NOT NULL,
  `Date of Completion` date NOT NULL,
  `Actual Date of Completion` date NOT NULL,
  `Emp_ID` int(11) NOT NULL,
  `Student_ID` int(11) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_detail`
--

INSERT INTO `task_detail` (`Task_ID`, `User_ID`, `Apply_ID`, `Sub_Service_Name`, `Amount`, `Payment_Status`, `Date of Application`, `Date of Completion`, `Actual Date of Completion`, `Emp_ID`, `Student_ID`, `DOI`, `IsActive`) VALUES
(1, 3, 10, 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '2021-03-24', 0),
(2, 3, 10, 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '2021-03-25', 0),
(3, 3, 10, 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '2021-03-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `User_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Date of Birth` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone_numner` varchar(12) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Area_ID` int(11) NOT NULL,
  `City_ID` int(11) NOT NULL,
  `State_ID` int(11) NOT NULL,
  `Photo` varchar(250) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`User_id`, `first_name`, `Last_name`, `Gender`, `Date of Birth`, `email`, `password`, `phone_numner`, `Address`, `Area_ID`, `City_ID`, `State_ID`, `Photo`, `DOI`, `IsActive`) VALUES
(3, 'viral', 'test', '', '0000-00-00', 'viral@gmail.com', 'VIral@123', '8758637022', '', 0, 0, 0, '', '2021-03-19', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_service`
--
ALTER TABLE `apply_service`
  ADD PRIMARY KEY (`Apply_ID`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Area_ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_ID`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `employee_registration`
--
ALTER TABLE `employee_registration`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_ID`);

--
-- Indexes for table `task_detail`
--
ALTER TABLE `task_detail`
  ADD PRIMARY KEY (`Task_ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_service`
--
ALTER TABLE `apply_service`
  MODIFY `Apply_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `Area_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_registration`
--
ALTER TABLE `employee_registration`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `State_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `task_detail`
--
ALTER TABLE `task_detail`
  MODIFY `Task_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
