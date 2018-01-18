-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2018 at 10:35 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `MOCKS18`
--

-- --------------------------------------------------------

--
-- Table structure for table `SCORES`
--

CREATE TABLE IF NOT EXISTS `SCORES` (
  `STUD_NO` int(10) NOT NULL AUTO_INCREMENT,
  `REG_NO` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DEPT` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SEC1` int(11) NOT NULL,
  `SEC2` int(11) NOT NULL,
  `SEC3` int(11) NOT NULL,
  `SEC4` int(11) NOT NULL,
  `SEC5` int(11) NOT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  PRIMARY KEY (`STUD_NO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `SCORES`
--

INSERT INTO `SCORES` (`STUD_NO`, `REG_NO`, `NAME`, `DEPT`, `EMAIL`, `SEC1`, `SEC2`, `SEC3`, `SEC4`, `SEC5`, `TOTAL`) VALUES
(142, '212715106123', 'RAHUL R', 'ECE', 'rahulmanivasagan1@gmail.com', 2, 1, 1, 0, 0, 4),
(143, '212715106129', 'RISHEEIK BHARADWAJ JR', 'ECE', 'batman.robin98@gmail.com', 3, 3, 4, 3, 1, 14),
(144, '212715106160', 'SUBATHRA K', 'ECE', 'subathrakalaiyarasi@gmail.com', 4, 2, 2, 1, 1, 10),
(145, '212715106142', 'SELVA SUDHA S', 'ECE', 'selva_sudha97@yahoo.in', 2, 2, 3, 2, 2, 11),
(146, '212715106177', 'VIKRANTH H', 'ECE', 'vikranth98h@gmail.com', 1, 3, 1, 3, 2, 10),
(147, '212715106140', 'R SANDEEP KUMAR', 'ECE', 'sandeepkumaramni@gmail.com', 3, 1, 3, 2, 2, 11),
(148, '212715106137', 'SAMUEL P', 'ECE', 'samtinesp@gmail.com', 2, 3, 5, 4, 1, 15),
(149, '212715106158', 'G SRIVATSAN', 'ECE', 'srivatsanvj@gmail.com', 1, 2, 4, 1, 1, 9),
(150, '212715106128', 'R TILAK', 'ECE', 'tilak29081998@gmail.com', 0, 0, 0, 0, 0, 0),
(151, '212715106132', 'C ROOPALAKSHMI', 'ECE', 'roopac.vigi@gmail.com', 0, 2, 1, 3, 1, 7),
(152, '212715106146', 'M SHANMUGA PRIYA', 'ECE', 'mee.spriya@gmail.com', 1, 1, 1, 1, 0, 4),
(153, '212715106138', 'R J SANDEEP', 'ECE', 'sandeepr1097@gmail.com', 3, 1, 5, 2, 1, 12),
(154, '212715106175', 'VIJAY M', 'ECE', 'maranvijay001@gmail.com', 2, 2, 2, 2, 0, 8),
(155, '212715106166', 'UMESH R', 'ECE', 'umeshravichandirans@gmail.com', 1, 2, 4, 3, 1, 11),
(156, '212715106169', 'VEMASANI SAIKUMAR', 'ECE', 'vemasanisaikumar@gmail.com', 4, 2, 1, 0, 0, 7),
(157, '212715106180', 'R VISHVESH', 'ECE', 'vishvesh004@gmail.com', 4, 1, 4, 3, 2, 14),
(158, '212715106156', 'T A P SRINIVAASAN', 'ECE', 'tapsrini@gmail.com', 3, 3, 3, 2, 1, 12),
(159, '212715106330', 'YUVARAJ V V', 'ECE', 'yuvarajfalcon6464@gmail.com', 3, 2, 2, 1, 0, 8),
(160, '212715106329', 'A VIJAY', 'ECE', 'vijay490650@gmail.com', 0, 0, 0, 0, 0, 0),
(161, '212715103053', 'THANIGAI MURUGAN', 'CIVIL', 'thanigaimurugan624@gmail.com', 1, 3, 3, 1, 0, 8),
(162, '212715103011', 'ELANGO', 'CIVIL', 'elangog19@gmail.com', 3, 5, 5, 0, 3, 16),
(163, '212715103021', 'KR KARTHICK CHARAN', 'CIVIL', 'krcharan.karthick@gmail.com', 2, 2, 5, 4, 2, 15),
(164, '212715103022', 'E KISHORE', 'CIVIL', 'elakismee@gmail.com', 2, 2, 3, 3, 2, 12),
(165, '212715103015', 'HARIPRIYAA ARUL', 'CIVIL', 'haripriyaa1998@gmail.com', 5, 1, 1, 3, 2, 12),
(166, '212715106128', 'R TILAK', 'ECE', 'tilak29081998@gmail.com', 3, 3, 3, 0, 2, 11),
(167, '212715106329', 'A VIJAY', 'ECE', 'vijay490650@gmail.com', 3, 5, 1, 1, 3, 13),
(168, '212715103008', 'K BHUVANESHWARI', 'CIVIL', 'bhuvanakk.2015@gmail.com', 0, 4, 5, 1, 0, 10),
(169, '212715103045', 'K SIVANESH', 'CIVIL', 'siva127rocket@gmail.com', 1, 3, 3, 3, 3, 13),
(170, '212715103004', 'A AKSHYA', 'CIVIL', 'akshuchweety98@gmail.com', 1, 2, 3, 0, 3, 9),
(171, '212715106153', 'S SOWNTHIKA', 'ECE', 'sownthikas@gmail.com', 2, 5, 2, 3, 0, 12),
(172, '212715106123', 'RAHUL R', 'ECE', 'rahulmanivasagan1@gmail.com', 3, 1, 5, 4, 1, 14),
(173, '212715106178', 'VINODINI  N.P.', 'ECE', 'vinodini2597@gmail.com', 2, 2, 5, 4, 2, 15),
(174, '212715106176', 'K VIJAYALAKSHMI', 'ECE', 'vijikannan2206@gmail.com', 4, 3, 2, 0, 2, 11),
(175, '212715106165', 'THARINI L', 'ECE', 'tharafab28@gmail.com', 2, 3, 3, 2, 2, 12),
(176, '212715106159', 'E SUBASHINI', 'ECE', 'suba21101998@gmail.com', 3, 3, 3, 4, 3, 16),
(177, '212715106164', 'T SWETHA', 'ECE', 't.swetha293@gmail.com', 1, 2, 1, 3, 3, 10),
(178, '212715106145', 'SHALINI S', 'ECE', 'shalinis1487@gmail.com', 2, 3, 3, 3, 0, 11),
(179, '212715106154', 'SRESHTA KANNAN', 'ECE', 'sreshta.gk@gmail.com', 3, 4, 3, 3, 2, 15),
(180, '212715106326', 'SUGANTHI E', 'ECE', 'suganthi0398@gmail.com', 2, 3, 1, 3, 1, 10),
(181, '212715106172', 'VIDHYA SHREE K.R.', 'ECE', 'vidhyashreeravi98@gmail.com', 1, 2, 2, 3, 3, 11),
(182, '212715106171', 'VIDHYA', 'ECE', 'vidhyaanbu29@gmail.com', 3, 3, 2, 2, 3, 13),
(183, '212715103312', 'SATHISH K M', 'CIVIL', 'sathishkoneru16@gmail.com', 1, 3, 2, 1, 3, 10),
(184, '212715103054', 'R UDAYA KUMAR', 'CIVIL', 'udaya4398@gmail.com', 1, 2, 4, 2, 1, 10),
(185, '212715106152', 'SOLAI V', 'ECE', 'solaiabi98@gmail.com', 1, 2, 2, 0, 2, 7),
(186, '212715106125', 'R R RAMIKSHA', 'ECE', 'rrramiksha@gmail.com', 1, 2, 2, 1, 1, 7),
(187, '160501027', 'ARAVIND', 'CS', 'aravind1998@gmail.com', 0, 0, 0, 0, 0, 0),
(188, '2222222222', 'ARJUN ARAVIND', 'CS', 'arjun.aravind1998@gmail.com', 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
