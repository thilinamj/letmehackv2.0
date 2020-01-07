-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 10:30 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `letmehack_letmehackweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_teams`
--

CREATE TABLE IF NOT EXISTS `registered_teams` (
`ID` int(11) NOT NULL,
  `teamName` varchar(64) DEFAULT NULL,
  `university` varchar(128) DEFAULT NULL,
  `masterHackerName` varchar(128) DEFAULT NULL,
  `masterHackerEmail` varchar(128) DEFAULT NULL,
  `masterHackerUniversityID` varchar(128) DEFAULT NULL,
  `masterHackerContactNumber` varchar(16) DEFAULT NULL,
  `masterHackerGit` varchar(256) DEFAULT NULL,
  `masterHackerStack` varchar(256) DEFAULT NULL,
  `hacker01Name` varchar(128) DEFAULT NULL,
  `hacker01UniversityID` varchar(128) DEFAULT NULL,
  `hacker01contactNumber` varchar(16) DEFAULT NULL,
  `hacker01Git` varchar(256) DEFAULT NULL,
  `hacker01Stack` varchar(256) DEFAULT NULL,
  `hacker02Name` varchar(128) DEFAULT NULL,
  `hacker02UniversityID` varchar(128) DEFAULT NULL,
  `hacker02contactNumber` varchar(16) DEFAULT NULL,
  `hacker02Git` varchar(256) DEFAULT NULL,
  `hacker02Stack` varchar(256) DEFAULT NULL,
  `hacker03Name` varchar(128) DEFAULT NULL,
  `hacker03UniversityID` varchar(128) DEFAULT NULL,
  `hacker03contactNumber` varchar(16) DEFAULT NULL,
  `hacker03Git` varchar(256) DEFAULT NULL,
  `hacker03Stack` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_teams`
--
ALTER TABLE `registered_teams`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_teams`
--
ALTER TABLE `registered_teams`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
