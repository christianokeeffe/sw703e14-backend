-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 30. 09 2014 kl. 09:50:22
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

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
-- Struktur-dump for tabellen `api_keys`
--

CREATE TABLE IF NOT EXISTS `api_keys` (
`id` int(11) NOT NULL,
  `public` varchar(65) NOT NULL,
  `private` varchar(65) NOT NULL
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
`id` int(255) NOT NULL,
  `name` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Data dump for tabellen `appliances`
--

INSERT INTO `appliances` (`id`, `name`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
`id` int(11) NOT NULL,
  `key` varchar(70) DEFAULT NULL,
  `sessionkey` varchar(100) DEFAULT NULL,
  `expire` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=266 ;

--
-- Data dump for tabellen `auth`
--

INSERT INTO `auth` (`id`, `key`, `sessionkey`, `expire`) VALUES
(265, 'a2105103cd48b1a8601486fc52d8bb43a1156a49b2f36f1d28ed177d0203ba99', '49b6016d3d56dd169524329752121e4f4f00839611ea62d103394fc3b2f19834', '2014-09-30 07:34:45');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `executionTime` int(11) NOT NULL,
  `refAppliance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `executionTime`, `refAppliance`) VALUES
(1, 4, 3600, 2),
(2, 5, 5400, 2),
(3, 3, 1800, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `translation`
--

CREATE TABLE IF NOT EXISTS `translation` (
`id` int(255) NOT NULL,
  `en` text CHARACTER SET latin1 NOT NULL,
  `da` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Data dump for tabellen `translation`
--

INSERT INTO `translation` (`id`, `en`, `da`) VALUES
(1, 'Car', 'Bil'),
(2, 'Dryer', 'Tørretumbler'),
(3, 'Charge', 'Oplade'),
(4, 'Dry', 'Tør'),
(5, 'Extra dry', 'Ekstra tør');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(255) NOT NULL,
  `username` int(99) NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `api_keys`
--
ALTER TABLE `api_keys`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `appliances`
--
ALTER TABLE `appliances`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `auth`
--
ALTER TABLE `auth`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `tasks`
--
ALTER TABLE `tasks`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `translation`
--
ALTER TABLE `translation`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `api_keys`
--
ALTER TABLE `api_keys`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tilføj AUTO_INCREMENT i tabel `appliances`
--
ALTER TABLE `appliances`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tilføj AUTO_INCREMENT i tabel `auth`
--
ALTER TABLE `auth`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=266;
--
-- Tilføj AUTO_INCREMENT i tabel `translation`
--
ALTER TABLE `translation`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
