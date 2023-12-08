-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 03:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabahadoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `Admin_ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pnumber` varchar(255) NOT NULL,
  `User_type` varchar(255) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archive_app`
--

CREATE TABLE `archive_app` (
  `Archive_appID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pnumber` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `TOD` varchar(255) NOT NULL,
  `PIDNO` varchar(255) NOT NULL,
  `Resume` varchar(255) NOT NULL,
  `User_type` varchar(255) NOT NULL DEFAULT 'Job seeker'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archive_emp`
--

CREATE TABLE `archive_emp` (
  `Archive_empID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `Pnumber` varchar(255) NOT NULL,
  `Caddress` varchar(255) NOT NULL,
  `Jobp1` varchar(255) NOT NULL,
  `Work_schedule1` varchar(255) NOT NULL,
  `Jobp2` varchar(255) NOT NULL,
  `Work_schedule2` varchar(255) NOT NULL,
  `Jobp3` varchar(255) NOT NULL,
  `Work_schedule3` varchar(255) NOT NULL,
  `User_type` varchar(255) NOT NULL DEFAULT 'Employer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employer_info`
--

CREATE TABLE `employer_info` (
  `Employer_ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `Pnumber` varchar(255) NOT NULL,
  `Caddress` varchar(255) NOT NULL,
  `Jobp1` varchar(255) NOT NULL,
  `Work_schedule1` varchar(255) NOT NULL,
  `Jobp2` varchar(255) NOT NULL,
  `Work_schedule2` varchar(255) NOT NULL,
  `Jobp3` varchar(255) NOT NULL,
  `Work_schedule3` varchar(255) NOT NULL,
  `User_type` varchar(255) NOT NULL,
  `Industry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_info`
--

CREATE TABLE `jobseeker_info` (
  `Jobseeker_ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pnumber` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `TOD` varchar(255) NOT NULL,
  `PIDNO` varchar(255) NOT NULL,
  `Resume` varchar(255) NOT NULL,
  `User_type` varchar(255) NOT NULL DEFAULT 'Jobseeker'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `archive_app`
--
ALTER TABLE `archive_app`
  ADD PRIMARY KEY (`Archive_appID`);

--
-- Indexes for table `archive_emp`
--
ALTER TABLE `archive_emp`
  ADD PRIMARY KEY (`Archive_empID`);

--
-- Indexes for table `employer_info`
--
ALTER TABLE `employer_info`
  ADD PRIMARY KEY (`Employer_ID`);

--
-- Indexes for table `jobseeker_info`
--
ALTER TABLE `jobseeker_info`
  ADD PRIMARY KEY (`Jobseeker_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archive_app`
--
ALTER TABLE `archive_app`
  MODIFY `Archive_appID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `archive_emp`
--
ALTER TABLE `archive_emp`
  MODIFY `Archive_empID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employer_info`
--
ALTER TABLE `employer_info`
  MODIFY `Employer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker_info`
--
ALTER TABLE `jobseeker_info`
  MODIFY `Jobseeker_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
