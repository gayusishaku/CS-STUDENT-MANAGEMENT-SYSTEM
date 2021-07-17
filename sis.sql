-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 09:45 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `chattb`
--

CREATE TABLE IF NOT EXISTS `chattb` (
  `chatid` int(20) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `chatbody` text NOT NULL,
  `chatdate` varchar(10) NOT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `chattb`
--

INSERT INTO `chattb` (`chatid`, `userid`, `chatbody`, `chatdate`) VALUES
(1, 3, 'bot', '8:15 pm'),
(2, 1, 'Guys How far about the assignment submission?', '8:26 pm'),
(3, 3, 'we will submit today bro', '8:27 pm'),
(4, 3, 'yes o', '8:36 pm'),
(5, 3, 'Test Chat', '8:45 pm'),
(6, 2, 'Afternoon guys', '8:46 pm'),
(7, 2, 'Are we submitting today?', '8:47 pm'),
(8, 9, 'hello house', '8:49 pm'),
(9, 3, 'hello', '9:37 pm'),
(10, 11, 'hello house', '9:39 pm');

-- --------------------------------------------------------

--
-- Table structure for table `colortb`
--

CREATE TABLE IF NOT EXISTS `colortb` (
  `colorid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `colorbg` varchar(20) NOT NULL,
  `colortxt` varchar(20) NOT NULL,
  PRIMARY KEY (`colorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `colortb`
--

INSERT INTO `colortb` (`colorid`, `username`, `colorbg`, `colortxt`) VALUES
(1, 'aa', 'gray', 'yellow'),
(2, 'bb', 'brown', 'peach'),
(3, 'kel', 'brown', 'peach'),
(4, 'yokai', 'skyblue', 'white'),
(5, 'jsmith', 'red', 'peach'),
(6, 'jsmith', 'red', 'peach');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studentno` int(10) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_joined` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `studentno`, `firstname`, `lastname`, `email`, `address`, `date_joined`) VALUES
(17, 'user1', 'user1', 2147483647, 'Yakubu', 'Betison', 'yask@gmail.com', 'Sangere Fu', '2021-07-16'),
(18, 'user11', 'user11', 2147483647, 'Yakubu', 'Betison', 'yakububetison2gmail.com', 'Sabon Gari', '2021-07-16'),
(19, 'user44', 'user44', 2147483647, 'First Name', 'Second Name', 'email@gmail.com', 'Address', '2021-07-17'),
(20, 'Yascoby', 'password', 0, 'Yakubu', 'Betison', 'yakububetison@gmail.com', 'Sabon GARI', '2021-07-17'),
(21, 'sixtus', 'password', 2147483647, 'Sixtus', 'Innocent', 'six@gmail.com', 'Sangere', '2021-07-17'),
(22, 'ishaku', 'password', 2147483647, 'Ishaku', 'Gayus', 'ishak@gmail.com', 'Sangerefut', '2021-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `userstb`
--

CREATE TABLE IF NOT EXISTS `userstb` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userstb`
--

INSERT INTO `userstb` (`userid`, `username`, `password`, `lname`, `fname`) VALUES
(1, 'Ishaku ', 'ishaku', 'Ishaku', 'Gayus'),
(2, 'saul', 'saul', 'saul', 'Saul Frank'),
(3, 'Yascoby', 'yascoby', 'Yakubu', 'Betison'),
(9, 'solome', 'solome', 'solome', 'solome'),
(11, 'sixtus', 'sixtus', 'sixtus', 'sixtus sixtus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
