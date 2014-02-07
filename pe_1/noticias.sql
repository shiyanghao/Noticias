-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2014 at 07:30 AM
-- Server version: 5.5.29-MariaDB-log
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `noticias`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identificar del articulo',
  `titulo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'titulo del articulo',
  `cuerpo` text COLLATE utf8_unicode_ci COMMENT 'descripcion del articulo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='tabla que guarda todas las noticias' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `cuerpo`) VALUES
(1, 't1', 'cuerpo2'),
(3, 'ej376534', 'jshdfdf '),
(6, '12323', 'efefef'),
(7, '123', ' 12313'),
(9, '123', ' 12qwcv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
