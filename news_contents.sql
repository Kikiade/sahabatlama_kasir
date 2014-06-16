-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2014 at 11:17 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_contents`
--

CREATE TABLE IF NOT EXISTS `news_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `posted` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `id_category` int(3) NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news_contents`
--

