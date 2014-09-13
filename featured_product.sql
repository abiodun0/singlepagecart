-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2014 at 06:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `featured`
--

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE IF NOT EXISTS `featured_products` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `img` (`img`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `img`, `name`, `description`, `price`) VALUES
(4, 'd7000.jpg', 'Nikon Camera', 'Nikon Camera', 2000),
(1, 'iMac.png', 'iMac', 'The iMac computer.', 1200),
(3, 'computer_intro_img.jpg', 'Laptop Computer', 'a good laptop computer', 1200),
(2, 'camera.jpg', 'Long Camera', 'Long camera for long range features', 535),
(5, 'desktop.jpg', 'Desktop Computer', 'the Desktop Computer', 500),
(6, 'hplaptop.jpg', 'HP Laptop', 'Hp laptop', 2000),
(7, 'tripod.jpg', 'Tripod Stands', 'Tripod stand', 5000),
(8, 'processor.jpg', 'Processor', 'computer processor', 400),
(9, 'studio.jpg', 'Studio camera', 'studio camera equipment', 5000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
