-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2018 at 09:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MOCKS`
--

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `TERMINAL_NO` varchar(20) NOT NULL,
  `LOGGED_IN` int(11) NOT NULL,
  `REG_NO` int(15) NOT NULL DEFAULT '1',
  `NAME` varchar(200) NOT NULL,
  `DEPT` varchar(100) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `SET_NO` int(2) NOT NULL,
  `SEC_1` int(2) NOT NULL,
  `SEC_2` int(2) NOT NULL,
  `SEC_3` int(2) NOT NULL,
  `SEC_4` int(2) NOT NULL,
  `SEC_5` int(2) NOT NULL,
  `TOTAL_SCORE` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QUESTION_NO` int(5) NOT NULL,
  `QUESTION_TEXT` varchar(200) DEFAULT NULL,
  `OPTA` varchar(100) NOT NULL,
  `OPTB` varchar(100) NOT NULL,
  `OPTC` varchar(100) NOT NULL,
  `OPTD` varchar(100) NOT NULL,
  `SET_NO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `SET1`
--

CREATE TABLE `SET1` (
  `QUESTION_NO` int(3) NOT NULL,
  `QUESTION_TEXT` varchar(200) NOT NULL,
  `OPTA` varchar(200) NOT NULL,
  `OPTB` varchar(200) NOT NULL,
  `OPTC` varchar(200) NOT NULL,
  `OPTD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SET2`
--

CREATE TABLE `SET2` (
  `QUESTION_NO` int(3) NOT NULL,
  `QUESTION_TEXT` varchar(200) NOT NULL,
  `OPTA` varchar(200) NOT NULL,
  `OPTB` varchar(200) NOT NULL,
  `OPTC` varchar(200) NOT NULL,
  `OPTD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SET3`
--

CREATE TABLE `SET3` (
  `QUESTION_NO` int(3) NOT NULL,
  `QUESTION_TEXT` varchar(200) NOT NULL,
  `OPTA` varchar(200) NOT NULL,
  `OPTB` varchar(200) NOT NULL,
  `OPTC` varchar(200) NOT NULL,
  `OPTD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LOGIN`
--
ALTER TABLE `LOGIN`
  ADD PRIMARY KEY (`TERMINAL_NO`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QUESTION_NO`);

--
-- Indexes for table `SET1`
--
ALTER TABLE `SET1`
  ADD PRIMARY KEY (`QUESTION_NO`);

--
-- Indexes for table `SET2`
--
ALTER TABLE `SET2`
  ADD PRIMARY KEY (`QUESTION_NO`);

--
-- Indexes for table `SET3`
--
ALTER TABLE `SET3`
  ADD PRIMARY KEY (`QUESTION_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QUESTION_NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `SET1`
--
ALTER TABLE `SET1`
  MODIFY `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `SET2`
--
ALTER TABLE `SET2`
  MODIFY `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `SET3`
--
ALTER TABLE `SET3`
  MODIFY `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
