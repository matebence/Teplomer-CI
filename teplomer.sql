-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Pi 08.Nov 2019, 10:11
-- Verzia serveru: 10.1.37-MariaDB
-- Verzia PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `teplomer`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `control`
--

CREATE TABLE `control` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` varchar(64) NOT NULL,
  `value` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `control`
--

INSERT INTO `control` (`id`, `description`, `value`) VALUES
(1, 'increment', 0),
(2, 'decrement', 0);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `temperature`
--

CREATE TABLE `temperature` (
  `id` int(10) UNSIGNED NOT NULL,
  `temperature` double NOT NULL,
  `humidity` double NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `control`
--
ALTER TABLE `control`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
