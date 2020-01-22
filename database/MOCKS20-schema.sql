-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: MOCKS20
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `AUT1`
--

DROP TABLE IF EXISTS `AUT1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AUT1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `AUT2`
--

DROP TABLE IF EXISTS `AUT2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AUT2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `AUT3`
--

DROP TABLE IF EXISTS `AUT3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AUT3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `BIO1`
--

DROP TABLE IF EXISTS `BIO1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BIO1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `BIO2`
--

DROP TABLE IF EXISTS `BIO2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BIO2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `BIO3`
--

DROP TABLE IF EXISTS `BIO3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BIO3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CHE1`
--

DROP TABLE IF EXISTS `CHE1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CHE1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CHE2`
--

DROP TABLE IF EXISTS `CHE2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CHE2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CHE3`
--

DROP TABLE IF EXISTS `CHE3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CHE3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CIV1`
--

DROP TABLE IF EXISTS `CIV1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CIV1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CIV2`
--

DROP TABLE IF EXISTS `CIV2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CIV2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CIV3`
--

DROP TABLE IF EXISTS `CIV3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CIV3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `COMMENTS`
--

DROP TABLE IF EXISTS `COMMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `COMMENTS` (
  `COMMENT_NO` int(11) NOT NULL AUTO_INCREMENT,
  `COMMENT_TEXT` varchar(5000) NOT NULL,
  `COMMENT_RATINGS` int(11) NOT NULL,
  PRIMARY KEY (`COMMENT_NO`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CSE1`
--

DROP TABLE IF EXISTS `CSE1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CSE1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CSE2`
--

DROP TABLE IF EXISTS `CSE2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CSE2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CSE3`
--

DROP TABLE IF EXISTS `CSE3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CSE3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ECE1`
--

DROP TABLE IF EXISTS `ECE1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ECE1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ECE2`
--

DROP TABLE IF EXISTS `ECE2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ECE2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ECE3`
--

DROP TABLE IF EXISTS `ECE3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ECE3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `EEE1`
--

DROP TABLE IF EXISTS `EEE1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EEE1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `EEE2`
--

DROP TABLE IF EXISTS `EEE2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EEE2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `EEE3`
--

DROP TABLE IF EXISTS `EEE3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EEE3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `INF1`
--

DROP TABLE IF EXISTS `INF1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INF1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `INF2`
--

DROP TABLE IF EXISTS `INF2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INF2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `INF3`
--

DROP TABLE IF EXISTS `INF3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INF3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `LOGIN`
--

DROP TABLE IF EXISTS `LOGIN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LOGIN` (
  `TERMINAL_NO` varchar(20) NOT NULL,
  `LOGGED_IN` tinyint(4) NOT NULL DEFAULT '0',
  `REG_NO` varchar(50) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `DEPT` enum('AUT','BIO','CSE','CHE','CIV','ECE','EEE','INF','MEC') NOT NULL DEFAULT 'CSE',
  `EMAIL` varchar(200) NOT NULL,
  `SET_NO` tinyint(4) NOT NULL,
  `SEC_1` tinyint(4) NOT NULL DEFAULT '0',
  `SEC_2` tinyint(4) NOT NULL DEFAULT '0',
  `SEC_3` tinyint(4) NOT NULL DEFAULT '0',
  `SEC_4` tinyint(4) NOT NULL DEFAULT '0',
  `SEC_5` tinyint(4) NOT NULL DEFAULT '0',
  `TOTAL_SCORE` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`TERMINAL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MEC1`
--

DROP TABLE IF EXISTS `MEC1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEC1` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MEC2`
--

DROP TABLE IF EXISTS `MEC2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEC2` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MEC3`
--

DROP TABLE IF EXISTS `MEC3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEC3` (
  `QUESTION_NO` int(3) NOT NULL AUTO_INCREMENT,
  `QUESTION_TEXT` varchar(5000) NOT NULL,
  `OPTA` varchar(2000) NOT NULL,
  `OPTB` varchar(2000) NOT NULL,
  `OPTC` varchar(2000) NOT NULL,
  `OPTD` varchar(2000) NOT NULL,
  `CORRECTOPT` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`QUESTION_NO`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `SCORES`
--

DROP TABLE IF EXISTS `SCORES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SCORES` (
  `REG_NO` varchar(50) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `DEPT` enum('AUT','BIO','CSE','CHE','CIV','ECE','EEE','INF','MEC') DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `SET_NO` tinyint(4) NOT NULL,
  `SEC_1` tinyint(4) NOT NULL,
  `SEC_2` tinyint(4) NOT NULL,
  `SEC_3` tinyint(4) NOT NULL,
  `SEC_4` tinyint(4) NOT NULL,
  `SEC_5` tinyint(4) NOT NULL,
  `TOTAL_SCORE` tinyint(4) NOT NULL,
  PRIMARY KEY (`REG_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-22 17:57:18
