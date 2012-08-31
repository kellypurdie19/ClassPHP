-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2012 at 08:08 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guid` varchar(50) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `datetime` datetime NOT NULL,
  `NextAction` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `guid`, `title`, `link`, `datetime`, `NextAction`) VALUES
(1, 'C9BAD293-B029-4B4A-AE2C-77DCD854B2A9', 'Application Developer II - WATERLOO, ON', 'http://www.wowjobs.ca/Url/url.aspx?g=C9BAD293-B029', '0000-00-00 00:00:00', ''),
(2, 'C9BAD293-B029-4B4A-AE2C-77DCD854B2A9', 'Application Developer II - WATERLOO, ON', 'http://www.wowjobs.ca/Url/url.aspx?g=C9BAD293-B029-4B4A-AE2C-77DCD854B2A9', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
