-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2013 at 11:14 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio_development`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `content`) VALUES
(1, 'Akbar', 'Bin', 'muhamadakbarbw@gmail.com', '08996152510', 'Ok gan. Saya akan pesan aplikasi ke agan.\nTerimakasih'),
(2, 'Akbar', 'Bin', 'muhamadakbarbw@yahoo.com', '1', 'akbar'),
(3, 'akaakk', 'akakak', 'muhamadakbarbw@yahoo.com', '11', 'aakka'),
(4, 'akak', 'Bin', 'ade_w77@yahoo.com', '0833', 'akbar'),
(5, 'Akbar', 'Bin', 'ade_w77@yahoo.com', '123', 'aka'),
(6, 'Akbar', 'Bin', 'muhamadakbarbw@yahoo.com', '131', 'akbar'),
(7, 'aka', 'Bin', 'ade_w77@yahoo.com', '231', 'aka'),
(8, 'Ban', 'Bin', 'ade_w77@yahoo.com', '1321', 'afda'),
(9, 'akaka', 'akak', 'ade_w77@yahoo.com', '12', 'aka'),
(10, 'akak', 'Akbar Bin Widayat', 'ade_w77@yahoo.com', '231', 'aka'),
(11, 'akaka', 'akak', 'ade_w77@yahoo.com', '321', 'aa'),
(12, 'akak', 'akak', 'ade_w77@yahoo.com', '231', 'afdas'),
(13, 'akaka', 'fdask', 'ade_w77@yahoo.com', '321', 'fdaskfads'),
(14, 'akaka', 'fdask', 'ade_w77@yahoo.com', '321', 'fdaskfads'),
(15, 'akaka', 'fdask', 'ade_w77@yahoo.com', '321', 'fdaskfads'),
(16, 'akaka', 'fdask', 'ade_w77@yahoo.com', '321', 'fdaskfads'),
(17, 'akaka', 'akak', 'ade_w77@yahoo.com', '99', 'akka'),
(18, 'akaka', 'akakak', 'ade_w77@yahoo.com', '21', 'akfjas'),
(19, 'akafkdas', 'adfsk', 'ade_w77@yahoo.com', '231', 'adfk'),
(20, 'ajaja', 'Akbar Bin Widayat', 'ade_w77@yahoo.com', '231', 'aa'),
(21, 'ajaja', 'Akbar Bin Widayat', 'ade_w77@yahoo.com', '231', 'aa'),
(22, 'akaka', 'akak', 'ade_w77@yahoo.com', '321', 'fsd'),
(23, 'akakak', 'a', 'ade_w77@yahoo.com', '098998', 'Success'),
(24, 'Akbar', 'Bin', 'ade_w77@yahoo.com', '231', 'akbar'),
(25, 'K', 'k', 'muhamadakbarbw@gmail.com', '090', 'kdsa');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(13, 'akbar', 'akbar', 'bin'),
(14, 'akbar', 'akbar', 'bin'),
(12, 'edit ting news', 'edit-ting-news', 'selamat malam');
