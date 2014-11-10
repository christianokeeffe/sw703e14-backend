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
-- Struktur-dump for tabellen `user_products`
--
CREATE TABLE IF NOT EXISTS `user_products` (
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  PRIMARY KEY (`userID`,`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------

--
-- Struktur-dump for tabellen`products`
--
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` int(11) DEFAULT NULL,
  `watt` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- ---------------------------------------------------------
--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`id`,`name`, `price`, `description`, `watt`, `type`) VALUES
(1,57,50000,58,2000,9);
--
-- Struktur-dump for tabellen `api_keys`
--

CREATE TABLE IF NOT EXISTS `api_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `public` varchar(65) NOT NULL,
  `private` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `energyLabel` varchar(4) NOT NULL,
  `energyConsumption` float(11) NOT NULL,
  `type` int(11) NOT NULL,
  `passive` BOOLEAN NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Data dump for tabellen `appliances`
--

INSERT INTO `appliances` (`id`, `name`, `price`, `energyLabel`, `energyConsumption`, `type`, `passive`) VALUES
(1, 8, 0, 'E', 300/8765, 1, 1),
(2, 9, 0, '', 15, 2, 0),
(3, 10, 0, 'E', 20, 3, 0),
(4, 11, 0, 'E', 5, 4, 0),
(5, 12, 0, 'E', 15, 5, 0),
(6, 13, 0, 'E', 3, 6, 0),
(7, 14, 0, 'E', 4, 7, 0),
(8, 37, 0, 'A+++',0,8, 0),
(9, 38, 10045, 'A', 362/8765, 1, 1),
(10, 39, 2487, 'A+', 293/8765, 1, 1),
(11, 40, 3799, 'A++', 227/8765, 1, 1),
(12, 41, 6799, 'A+++', 303/8765, 1, 1),
(13, 42, 161400, '', 8, 2, 0),
(14, 43, 209690, '', 10, 2, 0),
(15, 44, 1699, 'A+', 12.2, 3, 0),
(16, 45, 2299, 'A++', 2.1, 3, 0),
(17, 46, 3499, 'A+++', 0.84, 3, 0),
(18, 47, 1999, 'C', 4, 4, 0),
(19, 48, 2992, 'A+', 2.9, 4, 0),
(20, 49, 4999, 'A++', 1.8, 4, 0),
(21, 50, 2280, 'A', 1.05, 6, 0),
(22, 51, 3309, 'A++', 1.04, 6, 0),
(23, 52, 8052, 'A+++', 0.81, 6, 0),
(24, 53, 949, 'C', 2, 7, 0),
(25, 54, 1248, 'B', 1, 7, 0),
(26, 55, 1999, 'A', 0.65, 7, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `appliance_type`
--

CREATE TABLE IF NOT EXISTS `types` (
  `typeID` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data dump for tabellen `appliance_type`
--

INSERT INTO `types` (`typeID`, `type`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 36),
(9, 56);


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
-- Struktur-dump for tabellen `graphdata`
--

CREATE TABLE IF NOT EXISTS `graphdata` (
  `saveID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`saveID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
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
  `dishes` float NOT NULL,
  `cleanClothes` float NOT NULL,
  `hygiene` float NOT NULL,
  `wetClothes` float NOT NULL,
  `carBattery` float NOT NULL,
  PRIMARY KEY (`saveID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
-- --------------------------------------------------------

--
-- Data dump for tabellen `gamedata`
--
INSERT INTO `gamedata` (`userID`,`date`, `savings`, `score`, `dishes`, `cleanClothes`, `hygiene`, `wetClothes`, `carBattery`) VALUES
(1, 1409565600, 0, 0, 100, 100, 100, 0.1, 100),
(2, 1409565600, 0, 0, 100, 100, 100, 0.1, 100),
(3, 1409565600, 0, 0, 100, 100, 100, 0.1, 100),
(4, 1409565600, 0, 0, 100, 100, 100, 0.1, 100),
(5, 1409565600, 0, 0, 100, 100, 100, 0.1, 100),
(6, 1409565600, 0, 0, 100, 100, 100, 0.1, 100);
-- -------------------------------------------------------

--
-- Struktur-dump for tabellen `translation`
--

CREATE TABLE IF NOT EXISTS `translation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `en` text CHARACTER SET latin1 NOT NULL,
  `da` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Data dump for tabellen `translation`
--

INSERT INTO `translation` (`id`, `en`, `da`) VALUES
(1, 'Fridge Freezer', 'Kølefryseskab'),
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
(18, 'Dry by hand', 'Hæng vasketøj op'),
(19, 'Make breakfast', 'Lav morgenmad'),
(20, 'Make lunch', 'Lav frokost'),
(21, 'Make dinner', 'Lav aftensmad'),
(22, 'Bake cake', 'Bag kage'),
(23, 'Wash dishes', 'Start opvaskmaskinen'),
(24, 'Clean house', 'Gør rent'),
(25, 'Make breakfast', 'Lav morgenmad'),
(26, 'Make lunch', 'Lav frokost'),
(27, 'Make dinner', 'Lav aftensmad'),
(28, 'Charge car', 'Oplad bilen'),
(29, 'Bake cake', 'Bag kage'),
(30, 'Clean the house', 'Gør rent i huset'),
(31, 'Wash clothes', 'Vask tøj'),
(32, 'Wash dishes', 'Start opvaskmaskinen'),
(33, 'Once daily', 'En gang om dagen'),
(34, 'Once weekly', 'En gang om ugen'),
(35, 'Twice weekly', 'To gange om ugen'),
(36, 'Do manual', 'Udfør manuelt'),
(37, 'Do manual', 'Udfør manuelt'),
(38, 'Miele KFN 12823 SD edt/cs-1', 'Miele KFN 12823 SD edt/cs-1'),
(39, 'Whirlpool WBE3414 W', 'Whirlpool WBE3414 W'),
(40, 'Siemens KG36VVW32', 'Siemens KG36VVW32'),
(41, 'LG GBB539NSCFE', 'LG GBB539NSCFE'),
(42, 'Renault Zoe', 'Renault Zoe'),
(43, 'Nissan Leaf', 'Nissan Leaf'),
(44, 'Matsui M510WM13E', 'Matsui M510WM13E'),
(45, 'Electrolux Inspiration EWP1672TDW', 'Electrolux Inspiration EWP1672TDW'),
(46, 'Gorenje vaskemaskine W87443', 'Gorenje vaskemaskine W87443'),
(47, 'Hotpoint tørretumbler TVM 70C P/Z', 'Hotpoint tørretumbler TVM 70C P/Z'),
(48, 'Beko tørretumbler DPU7340X', 'Beko tørretumbler DPU7340X'),
(49, 'Gorenje tørretumbler D88565N', 'Gorenje tørretumbler D88565N'),
(50, 'Scandomestic SFO 3500', 'Scandomestic SFO 3500'),
(51, 'Candy CDPM 65720', 'Candy CDPM 65720'),
(52, 'SMEG BLV2P-2', 'SMEG BLV2P-2'),
(53, 'Hoover støvsuger TFV2016', 'Hoover støvsuger TFV2016'),
(54, 'Electrolux UltraSilencer Green støvsuger', 'Electrolux UltraSilencer Green støvsuger'),
(55, 'Philips PerformerExpert støvsuger FC8721', 'Philips PerformerExpert støvsuger FC8721'),
(56, 'Solar Panel', 'Solcelle'),
(57, 'Solar Sucker 3000','Sol Suger'),
(58, 'Small solarpanel','Lille solcelle');

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
('mettemuzen', 'mette', 'Mette', 'Pedersen', 'vistimette@gmail.com'),
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
(1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),
(2,1),(2,2),(2,3),(2,4),(2,5),(2,6),(2,7),(2,8),
(3,1),(3,2),(3,3),(3,4),(3,5),(3,6),(3,7),(3,8),
(4,1),(4,2),(4,3),(4,4),(4,5),(4,6),(4,7),(4,8),
(5,1),(5,2),(5,3),(5,4),(5,5),(5,6),(5,7),(5,8),
(6,1),(6,2),(6,3),(6,4),(6,5),(6,6),(6,7),(6,8);
-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `executionTime` int(11) NOT NULL,
  `refAppliance` int(11) NOT NULL,
  `updateValue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Data dump for tabellen `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `executionTime`, `refAppliance`, `updateValue`) VALUES
(1, 15, 10800, 2, 100),
(2, 16, 3600, 3, 35),
(3, 17, 7200, 4, 35),
(4, 18, 3600*24*3, 8, 50),
(5, 19, 1800, 5, 100),
(6, 20, 3600, 5, 100),
(7, 21, 3600, 5, 100),
(8, 22, 5400, 5, 100),
(9, 23, 3600, 6, 30),
(10, 24, 5400, 7, 70);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `daily_task`
--

CREATE TABLE IF NOT EXISTS `daily_task` (
  `id` int(11) NOT NULL  AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `taskID` int(11) NOT NULL,
  `deadline` text NOT NULL,
  `startTime` int(11) NOT NULL,
  `endTime` int(11) NOT NULL,
  `reward` int(11) NOT NULL,
  `penalty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Data dump for tabellen `daily_task`
--

INSERT INTO `daily_task` (`name`, `taskID`, `deadline`, `startTime`, `endTime`, `reward`, `penalty`) VALUES
(25, 5, '5:00 - 10:00', 300, 600, 1000, -2000),
(26, 6, '11:00 - 14:00', 660, 840, 1000, -2000),
(27, 7, '17:00 - 21:00', 1020 , 1260, 1000, -2000),
(28, 1, 'Min. 50% - 7:00', 0 , 420, 1000, -2000);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `optional_task`
--

CREATE TABLE IF NOT EXISTS `optional_task` (
  `id` int(11) NOT NULL  AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `taskID` int(11) NOT NULL,
  `deadline` int(11) NOT NULL,
  `type` text NOT NULL,
  `times` int(11) NOT NULL,
  `reward` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Data dump for tabellen `optional_task`
--

INSERT INTO `optional_task` (`name`, `taskID`, `deadline`, `type`, `times`, `reward`) VALUES
(29, 8, 33, 'd', 1, 500),
(30, 10, 34, 'w', 1, 500),
(31, 2, 35, 'w', 2, 500),
(32, 9, 35, 'w', 2, 500);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `market_price`
--

CREATE TABLE IF NOT EXISTS `market_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `solar_price_per_unit` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(20) NOT NULL,
  `prefname` text NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


