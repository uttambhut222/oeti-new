-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 01:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oeti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcareer`
--

CREATE TABLE `tblcareer` (
  `CareerId` int(11) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `CurrentLocation` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `EmploymentType` varchar(100) NOT NULL,
  `Resume` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Table structure for table `tblinquire`
--

CREATE TABLE `tblinquire` (
  `InquireId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Topic` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `ProjectBrief` text NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcareer`
--
ALTER TABLE `tblcareer`
  ADD PRIMARY KEY (`CareerId`);

--
-- Indexes for table `tblinquire`
--
ALTER TABLE `tblinquire`
  ADD PRIMARY KEY (`InquireId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcareer`
--
ALTER TABLE `tblcareer`
  MODIFY `CareerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblinquire`
--
ALTER TABLE `tblinquire`
  MODIFY `InquireId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
