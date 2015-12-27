-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 05:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `Img_loc` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Venue` varchar(20) NOT NULL,
  `Desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Img_loc`, `Date`, `Venue`, `Desc`) VALUES
('./img/venue/v1.jpg', '2012-12-31', 'Goa', 'Musical Festival of the Year - 2012'),
('./img/venue/v2.jpg', '2013-12-31', 'Goa', 'Musical Festival of the Year - 2013'),
('./img/venue/v3.jpg', '2014-12-31', 'Goa', 'Musical Festival of the Year - 2014');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TicketsBooked` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`Username`, `Password`, `TicketsBooked`) VALUES
('user1', 'user1', 12),
('user2', 'user2', 20),
('user3', 'user3', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
