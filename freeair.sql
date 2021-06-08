-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Úte 08. čen 2021, 07:56
-- Verze serveru: 5.7.11
-- Verze PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `freeair`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `dotaznik`
--

CREATE TABLE `dotaznik` (
  `id` int(5) NOT NULL,
  `Jmeno` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Zprava` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `nakup`
--

CREATE TABLE `nakup` (
  `id` int(5) NOT NULL,
  `Jmeno` varchar(20) NOT NULL,
  `Prijmeni` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Adresa` varchar(20) NOT NULL,
  `Mnozstvi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `rating`
--

CREATE TABLE `rating` (
  `id` int(5) NOT NULL,
  `rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `rating`
--

INSERT INTO `rating` (`id`, `rating`) VALUES
(1, '4'),
(2, '2'),
(3, '5'),
(4, '4'),
(5, '4');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `dotaznik`
--
ALTER TABLE `dotaznik`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `nakup`
--
ALTER TABLE `nakup`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `dotaznik`
--
ALTER TABLE `dotaznik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `nakup`
--
ALTER TABLE `nakup`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pro tabulku `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
