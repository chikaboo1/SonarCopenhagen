-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2014 at 06:17 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`ID`, `firstname`, `lastname`, `email`, `artistname`, `tracktitle`, `soundcloud`, `sitelink`, `votes`) VALUES
(1, 'Han', 'Solo', 'Han@starwars.com', 'DJ Solo', 'I Shot First', 'Han Solo on Soundcloud', 'blank site link for now', 57),
(2, 'Luke', 'Skywalker', 'luke@skywalker.com', 'DJ Luke', 'Use the Force', 'DJ Luke on Soundcloud', 'www.lukepommersheim.com', 57),
(3, 'Natasha', 'tashtasha', 'natasha@natasha.com', 'DJ natasha', 'Natasha bringing down the house', 'DJ Natasha on Soundcloud', 'some other link', 47),
(4, 'Eythor', 'Iceland', 'Edog@eythor.com', 'DJ Eythy', 'Welcome to the land of Ice and Fire', 'Eythor on soundcloud', 'se;orgher', 33),
(5, 'Renee', 'Renneeee', 'reee@reenee.com', 'DJ RR', 'Renee on the DJ', 'Renee', 'arlkghaelkrg', 32);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;