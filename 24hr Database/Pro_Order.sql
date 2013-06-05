-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 04:21 PM
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
-- Table structure for table `Pro_Order`
--

CREATE TABLE `Pro_Order` (
  `Order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Cust_ID` int(11) NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  PRIMARY KEY (`Order_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `Pro_Order`
--

INSERT INTO `Pro_Order` VALUES(75, 5, 6, 2, 3800);
INSERT INTO `Pro_Order` VALUES(76, 6, 8, 3, 12000);
INSERT INTO `Pro_Order` VALUES(79, 6, 5, 2, 240);
INSERT INTO `Pro_Order` VALUES(80, 7, 7, 2, 15000);
INSERT INTO `Pro_Order` VALUES(81, 9, 8, 2, 12000);
