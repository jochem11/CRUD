-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 jun 2022 om 22:28
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `bericht` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`ID`, `naam`, `email`, `titel`, `bericht`) VALUES
(1, 'babeoei', 'oei', 'lol', '123'),
(2, 'Jan Peter', 'janhenk@gmail.com', 'Reis afrika', 'Ik rook wiet als peter r de vries.'),
(3, 'Test', 'Test', 'Test', 'test'),
(4, 'docent n', 'oei', 'laravel is saai', 'crud test'),
(6, 'Ding dong', 'sus', 'bus', 'kus');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `bericht` varchar(1000) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`ID`, `naam`, `titel`, `bericht`, `rating`) VALUES
(1, 'test review', 'test review', 'test review', 0),
(12, 'test 3', 'review testen oei', 'oei', 4),
(13, 'review test', 'review test', 'revies test', 3),
(15, 'lol', 'kaas', 'baanaa', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vluchten`
--

CREATE TABLE `vluchten` (
  `ID` int(11) NOT NULL,
  `aantal` varchar(255) NOT NULL,
  `van` varchar(255) NOT NULL,
  `naar` varchar(255) NOT NULL,
  `tijd` date NOT NULL,
  `datum` date NOT NULL,
  `klasse` varchar(255) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `vluchten`
--
ALTER TABLE `vluchten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `vluchten`
--
ALTER TABLE `vluchten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
