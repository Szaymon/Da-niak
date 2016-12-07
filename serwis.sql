-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2016, 23:24
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `archiwum`
--

CREATE TABLE `archiwum` (
  `id_oglo` int(11) NOT NULL,
  `id_uzyt` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `nazwa_prod` text NOT NULL,
  `opis_prod` text NOT NULL,
  `telefon` varchar(9) NOT NULL,
  `data_dod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `archiwum`
--

INSERT INTO `archiwum` (`id_oglo`, `id_uzyt`, `id_kat`, `nazwa_prod`, `opis_prod`, `telefon`, `data_dod`) VALUES
(21, 1, 1, 'Rower', 'Nowy Rower', '123123123', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `id_kat` int(11) NOT NULL,
  `nazwa_kat` tinytext NOT NULL,
  `opis_kat` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`id_kat`, `nazwa_kat`, `opis_kat`) VALUES
(1, 'Motoryzacja', 'pdnasod');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE `ogloszenie` (
  `id_oglo` int(11) NOT NULL,
  `id_uzyt` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `nazwa_prod` tinytext NOT NULL,
  `opis_prod` tinytext NOT NULL,
  `telefon` varchar(9) NOT NULL,
  `data_dod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzyt` int(11) NOT NULL,
  `login` tinytext NOT NULL,
  `haslo` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `imie` tinytext NOT NULL,
  `nazwisko` tinytext NOT NULL,
  `telefon` varchar(9) NOT NULL,
  `data_ur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzyt`, `login`, `haslo`, `email`, `imie`, `nazwisko`, `telefon`, `data_ur`) VALUES
(1, 'Szaymon ', 'sakred123', 'szajmon7@wp.pl', 'Szymon', 'Bulik', '123123123', '2010-08-30');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `archiwum`
--
ALTER TABLE `archiwum`
  ADD PRIMARY KEY (`id_oglo`);

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD PRIMARY KEY (`id_oglo`),
  ADD KEY `id_uzyt` (`id_uzyt`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzyt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  MODIFY `id_oglo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzyt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD CONSTRAINT `ogloszenie_ibfk_1` FOREIGN KEY (`id_uzyt`) REFERENCES `uzytkownicy` (`id_uzyt`),
  ADD CONSTRAINT `ogloszenie_ibfk_2` FOREIGN KEY (`id_kat`) REFERENCES `kategoria` (`id_kat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
