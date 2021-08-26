-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 26 aug 2021 kl 20:27
-- Serverversion: 10.4.20-MariaDB
-- PHP-version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `combined`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `relation`
--

CREATE TABLE `relation` (
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `since` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `relation`
--

INSERT INTO `relation` (`from`, `to`, `status`, `since`) VALUES
(3, 3, 'P', '2021-08-26 20:13:50'),
(3, 2, 'P', '2021-08-26 20:13:54');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`from`,`to`,`status`),
  ADD KEY `since` (`since`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
