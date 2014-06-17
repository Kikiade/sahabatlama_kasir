-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 10:59 
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
  `news_category_id` int(3) NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news_contents`
--

INSERT INTO `news_contents` (`id`, `title`, `description`, `posted`, `news_category_id`, `status`, `created`, `modified`) VALUES
(1, '', '', '', 0, 0, '2014-06-17 08:02:53', '2014-06-17 08:02:53'),
(2, 'Vapinc', 'Jualan Vapor', '', 2, 1, '2014-06-17 08:03:37', '2014-06-17 09:47:54'),
(3, '', '', '', 0, 0, '2014-06-17 08:13:19', '2014-06-17 08:13:19'),
(4, 'Jakarta pagi ini', 'Cuaca pagi ini tampak cerah', 'Kiki', 0, 1, '2014-06-17 08:38:32', '2014-06-17 08:38:32'),
(5, 'Salam jakarta', 'Sore ini hujan', 'Kiki', 1, 1, '2014-06-17 09:39:37', '2014-06-17 09:39:37');
