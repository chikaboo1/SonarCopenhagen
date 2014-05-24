-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2014 at 06:00 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

DROP TABLE IF EXISTS `contestants`;
CREATE TABLE `contestants` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `artistname` varchar(45) NOT NULL,
  `tracktitle` varchar(45) NOT NULL,
  `soundcloud` varchar(100) NOT NULL,
  `sitelink` varchar(45) DEFAULT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `soundcloud_UNIQUE` (`soundcloud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`ID`, `firstname`, `lastname`, `email`, `artistname`, `tracktitle`, `soundcloud`, `sitelink`, `votes`) VALUES
(1, 'Han', 'Solo', 'Han@starwars.com', 'DJ Solo', 'I Shot First', 'Han Solo on Soundcloud', 'blank site link for now', 51),
(2, 'Luke', 'Skywalker', 'luke@skywalker.com', 'DJ Luke', 'Use the Force', 'DJ Luke on Soundcloud', 'www.lukepommersheim.com', 49),
(3, 'Natasha', 'tashtasha', 'natasha@natasha.com', 'DJ natasha', 'Natasha bringing down the house', 'DJ Natasha on Soundcloud', 'some other link', 37),
(4, 'Eythor', 'Iceland', 'Edog@eythor.com', 'DJ Eythy', 'Welcome to the land of Ice and Fire', 'Eythor on soundcloud', 'se;orgher', 27),
(5, 'Renee', 'Renneeee', 'reee@reenee.com', 'DJ RR', 'Renee on the DJ', 'Renee', 'arlkghaelkrg', 32);

-- --------------------------------------------------------

--
-- Table structure for table `vote_upload`
--

DROP TABLE IF EXISTS `vote_upload`;
CREATE TABLE `vote_upload` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_ID` bigint(50) NOT NULL,
  `voted` int(11) DEFAULT NULL,
  `contestant_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `fk_vote_upload_competition_enter_idx` (`contestant_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `vote_upload`
--

INSERT INTO `vote_upload` (`ID`, `facebook_ID`, `voted`, `contestant_ID`) VALUES
(119, 10152063862450474, 1, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vote_upload`
--
ALTER TABLE `vote_upload`
  ADD CONSTRAINT `fk_vote_upload_competition_enter` FOREIGN KEY (`contestant_ID`) REFERENCES `contestants` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
