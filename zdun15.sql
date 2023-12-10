-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 06:16 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zdun15`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `Imie` varchar(30) NOT NULL,
  `Nazwisko` varchar(30) NOT NULL,
  `Wiek` date NOT NULL,
  `NrTelefonu` varchar(9) NOT NULL,
  `Wojewodztwo` varchar(30) NOT NULL,
  `Plec` int(11) NOT NULL COMMENT '1=Mężczyzna,2=Kobieta',
  `News` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `Imie`, `Nazwisko`, `Wiek`, `NrTelefonu`, `Wojewodztwo`, `Plec`, `News`) VALUES
(1, 'Kamil', 'Zdun', '2023-12-12', '865823317', 'Kujawsko-Pomorskie', 2, 1),
(2, 'Kamil', 'Zdun', '2023-12-13', '865823317', 'Lubuskie', 1, 1),
(3, 'Kamil', 'Zdun', '2023-12-20', '865823317', 'Wielkopolskie', 2, 1),
(4, 'Kamil', 'Zdun; DROP TABLE uzytkownicy;', '2023-12-20', '865823317', 'Wielkopolskie', 2, 1),
(5, 'a', 'a', '2023-12-13', '123456789', 'Mazowieckie', 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
