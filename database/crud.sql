-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mei 2022 om 09:51
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

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
(1, 'Jan Peter', 'janhenk@gmail.com', 'Reis afrika', 'Ik rook wiet als peter r de vries.'),
(2, 'Jan Peter', 'janhenk@gmail.com', 'Reis afrika', 'Ik rook wiet als peter r de vries.'),
(3, 'Test', 'Test', 'Test', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `geboortejaar` date NOT NULL
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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vluchten`
--

CREATE TABLE `vluchten` (
  `ID` int(11) NOT NULL,
  `aantal` varchar(255) NOT NULL,
  `van` varchar(255) NOT NULL,
  `naar` varchar(255) NOT NULL,
  `tijd en datum` date NOT NULL,
  `klasse` varchar(255) NOT NULL
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `vluchten`
--
ALTER TABLE `vluchten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
