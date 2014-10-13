  -- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 06. 10 2014 kl. 12:02:48
-- Serverversion: 5.6.16
-- PHP-version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `okeeffed_smartgrid`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `api_keys`
--

CREATE TABLE IF NOT EXISTS `api_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `public` varchar(65) NOT NULL,
  `private` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `api_keys`
--

INSERT INTO `api_keys` (`id`, `public`, `private`) VALUES
(1, 'a2105103cd48b1a8601486fc52d8bb43a1156a49b2f36f1d28ed177d0203ba99', 'c90adb0a3a6f0865062a639f5ad54f113f559031a658d503903ec48ced13078f');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `appliances`
--

CREATE TABLE IF NOT EXISTS `appliances` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` int(255) NOT NULL,
  `price` int(11) NOT NULL,
  `energyLabel` varchar(3) NOT NULL,
  `energyConsumption` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Data dump for tabellen `appliances`
--

INSERT INTO `appliances` (`id`, `name`, `price`, `energyLabel`, `energyConsumption`, `type`) VALUES
(1, 8, 0, 'g', 100, 1),
(2, 9, 0, 'g', 100, 2),
(3, 10, 0, 'g', 100, 3),
(4, 11, 0, 'g', 400, 4),
(5, 12, 0, 'g', 100, 5),
(6, 13, 0, 'g', 100, 6),
(7, 14, 0, 'g', 100, 7);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `appliance_type`
--

CREATE TABLE IF NOT EXISTS `appliance_type` (
  `typeID` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Data dump for tabellen `appliance_type`
--

INSERT INTO `appliance_type` (`typeID`, `type`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(70) DEFAULT NULL,
  `sessionkey` varchar(100) DEFAULT NULL,
  `expire` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `gamedata`
--

CREATE TABLE IF NOT EXISTS `gamedata` (
  `saveID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `savings` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`saveID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `translation`
--

CREATE TABLE IF NOT EXISTS `translation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `en` text CHARACTER SET latin1 NOT NULL,
  `da` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Data dump for tabellen `translation`
--

INSERT INTO `translation` (`id`, `en`, `da`) VALUES
(1, 'Refrigerator', 'Køleskab'),
(2, 'Car', 'Bil'),
(3, 'Washer', 'Vaskemaskine'),
(4, 'Dryer', 'Tørretumbler'),
(5, 'Stove', 'Komfur'),
(6, 'Dishwasher', 'Opvaskemaskine'),
(7, 'Vacuum cleaner', 'Støvsuger'),
(8, 'Cool&freeze1000', 'Køl&Frys1000'),
(9, 'ScrapCar', 'SkrotBil'),
(10, 'CrapWash', 'SkrotVasker'),
(11, 'Slapemdry', 'KlapTørre'),
(12, 'BarelyBaker3000', 'NæstenBager3000'),
(13, 'DirtyDisher', 'SnavsTilOpvasker'),
(14, 'DustBlower', 'Støvpuster'),
(15, 'Charge', 'Oplade'),
(16, 'Wash clothes', 'Vask tøj'),
(17, 'Dry', 'Tør'),
(18, 'Extra dry', 'Ekstra tør'),
(19, 'Make breakfast', 'Lav morgenmad'),
(20, 'Make lunch', 'Lav frokost'),
(21, 'Make supper', 'Lav aftensmad'),
(22, 'Bake cake', 'Bag kage'),
(23, 'Wash dishes', 'Start opvaskmaskinen'),
(24, 'Clean house', 'Gør rent');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `email`) VALUES
('chro', '1234', 'Christian', 'OKeeffe', 'christianokeeffe@gmail.com'),
('dude', '1234', 'Christian', 'OKeeffe', 'christianokeeffe@gmail.com'),
('handsome', '1234', 'Christian', 'OKeeffe', 'christianokeeffe@gmail.com'),
('mettemuzen', 'mette', 'Christian', 'OKeeffe', 'christianokeeffe@gmail.com'),
('kapper', '1234', 'Christian', 'OKeeffe', 'christianokeeffe@gmail.com'),
('gerda', '1234', 'Christian', 'OKeeffe', 'christianokeeffe@gmail.com');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user_appliances`
--

CREATE TABLE IF NOT EXISTS `user_appliances` (
  `userID` int(11) NOT NULL,
  `applianceID` varchar(45) NOT NULL,
  PRIMARY KEY (`userID`,`applianceID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `user_appliances` (`userID`, `applianceID`) VALUES
(1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),
(2,1),(2,2),(2,3),(2,4),(2,5),(2,6),(2,7),
(3,1),(3,2),(3,3),(3,4),(3,5),(3,6),(3,7),
(4,1),(4,2),(4,3),(4,4),(4,5),(4,6),(4,7),
(5,1),(5,2),(5,3),(5,4),(5,5),(5,6),(5,7),
(6,1),(6,2),(6,3),(6,4),(6,5),(6,6),(6,7);
-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `executionTime` int(11) NOT NULL,
  `refAppliance` int(11) NOT NULL,
  `updateValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `executionTime`, `refAppliance`, `updateValue`) VALUES
(1, 15, 7200, 2, 20),
(2, 16, 10800, 3, 20),
(3, 17, 14400, 4, 20),
(4, 18, 18000, 4, 20),
(5, 19, 21600, 5, 20),
(6, 20, 25200, 5, 20),
(7, 21, 28800, 5, 20),
(8, 22, 32400, 5, 20),
(9, 23, 36000, 6, 20),
(10, 24, 39600, 7, 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
