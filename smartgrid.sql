-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 15. 09 2014 kl. 11:40:24
-- Serverversion: 5.6.16
-- PHP-version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartgrid`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `applications`
--

INSERT INTO `applications` (`id`, `name`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `translation`
--

CREATE TABLE IF NOT EXISTS `translation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `en` text NOT NULL,
  `da` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `translation`
--

INSERT INTO `translation` (`id`, `en`, `da`) VALUES
(1, 'Car', 'Bil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
