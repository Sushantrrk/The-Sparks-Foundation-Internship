-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 16, 2021 at 06:05 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17601338_demobank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Balance` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `Email`, `Balance`) VALUES
(1, 'Kavya Kulkarni', 'kavyam8301@gmail.com', 6846112),
(2, 'Vishal Talukar', 'VTalukar@gmail.com', 22532631),
(3, 'Sagal lv', 'sagarlv23@gmail.com', 100000),
(4, 'Uma Gall', 'uma@gmail.com', 653136),
(5, 'Sushant Kundarnad', 'sushantrrk@gmail.com', 195000),
(6, 'John', 'john@gmail.com', 100000),
(7, 'shyam', 'shyam@gmail.com', 8461110),
(8, 'Dharnendra', 'dharnendra@gmail.com', 5134543),
(9, 'sutej', 'sutej@gmail.com', 7410000),
(10, 'suma', 'suma@gmail.com', 7951313);

-- --------------------------------------------------------

--
-- Table structure for table `demouser`
--

DROP TABLE IF EXISTS `demouser`;
CREATE TABLE IF NOT EXISTS `demouser` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Balance` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demouser`
--

INSERT INTO `demouser` (`ID`, `Name`, `Balance`) VALUES
(1, 'Demo_User', 940616155);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `From_user` varchar(50) NOT NULL,
  `To_customer` varchar(50) NOT NULL,
  `Amount` double NOT NULL,
  `Date_Time` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`ID`, `From_user`, `To_customer`, `Amount`, `Date_Time`) VALUES
(1, 'Demo_User', 'Sushant Kundarnad', 195000, '2021-09-15 07:24:56 pm'),
(2, 'Demo_User', 'Sagal lv', 100000, '2021-09-15 07:25:15 pm'),
(3, 'Demo_User', 'Uma Gall', 653136, '2021-09-15 07:28:15 pm'),
(4, 'Demo_User', 'Kavya Kulkarni', 6846112, '2021-09-15 07:28:32 pm'),
(5, 'Demo_User', 'Vishal Talukar', 22532631, '2021-09-15 07:29:18 pm'),
(6, 'Demo_User', 'Dharnendra', 5134543, '2021-09-15 07:29:31 pm'),
(7, 'Demo_User', 'suma', 7951313, '2021-09-15 07:29:57 pm'),
(8, 'Demo_User', 'sutej', 7410000, '2021-09-15 07:30:13 pm'),
(9, 'Demo_User', 'shyam', 8461110, '2021-09-15 07:30:23 pm'),
(10, 'Demo_User', 'John', 100000, '2021-09-15 07:30:33 pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
