-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 04:19 PM
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
-- Table structure for table `Affiliation`
--

CREATE TABLE `Affiliation` (
  `A_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Company_Name` varchar(30) DEFAULT NULL,
  `Tenure` varchar(30) NOT NULL DEFAULT '',
  `Remuneration` double NOT NULL DEFAULT '0',
  `Email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`A_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `Affiliation`
--

INSERT INTO `Affiliation` VALUES(19, 'Facebook', '6', 15000, 'facebook@fb.com');
INSERT INTO `Affiliation` VALUES(20, 'Amazon', '8', 100000, 'amazon@az.com');
INSERT INTO `Affiliation` VALUES(21, 'Bloomberg', '12', 1200000, 'bloomberg@bg.com');
INSERT INTO `Affiliation` VALUES(22, 'Facebook', '7', 1500000, 'facebook@fb.com');
