-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 apr 2023 om 13:47
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module8_database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `test_database1`
--

CREATE TABLE `test_database1` (
  `id` int(255) NOT NULL,
  `tekst` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `test_database1`
--

INSERT INTO `test_database1` (`id`, `tekst`, `price`, `desc`) VALUES
(8000, 'dit is een test', '23.76', 'k;jklfd;as'),
(8001, 'hier staat de naam', '80.02', 'dit is tekst'),
(8002, 'test', '2.89', 'test'),
(8003, 'the moost cool thing ever don\'t ask', '20.00', 'red and blue'),
(8004, 'eghwasdhfgjhkjlknl;erydtfygkhjlkn', '35.00', 'fkghh;krtyugihsdfghljrdfyguh'),
(8005, 'cool', '13.89', 'not cool'),
(8006, 'r', '299.99', 'ld;'),
(8007, 'dit is test', '89.99', 'leuk'),
(8008, 'ik heb kritiek', '90.49', 'dit is een mooi product toch'),
(8009, 'k', '79.00', 'dit is een regenboog'),
(8010, 'een tweede tekst vlak', '9.99', 'yes '),
(8011, 'hier komt een descriptie', '129.99', 'hier staat wat tekst');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `test_database1`
--
ALTER TABLE `test_database1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `test` (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `test_database1`
--
ALTER TABLE `test_database1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456790;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
