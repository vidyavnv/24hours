-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 04:20 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Cust_ID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(30) DEFAULT NULL,
  `Last_Name` varchar(30) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `State` varchar(30) DEFAULT NULL,
  `Zip` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Payment_Mode` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Cust_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` VALUES(5, 'Vidya', 'V', 'I P Extension', 'Delhi', '110092', 'India', '9899761567', 'vidya.vnv@gmail.com', 'cash');
INSERT INTO `Customer` VALUES(6, 'Shivangi', 'Saxena', 'Vaishali', 'UP', '123445', 'India', '9891234567', 'shivangi.saxena@gmail.com', 'cheque');
INSERT INTO `Customer` VALUES(7, 'Korth', 'K', 'wall street', 'New York', '987654', 'US', '+917684567', 'korth@gmail.com', 'cheque');
INSERT INTO `Customer` VALUES(8, 'Khushal', 'Sagar', 'Gurgaon', 'Haryana', '565786', 'India', '987561366', 'khushal.sagar@gmail.com', 'cash');
INSERT INTO `Customer` VALUES(9, 'Sushma', 'Nagpal', 'NSIT', 'Delhi', '110078', 'India', '9899761567', 'sushma.nagpal@gmail.com', 'cash');
