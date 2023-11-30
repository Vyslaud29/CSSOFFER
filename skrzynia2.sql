-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 30, 2023 at 10:39 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cssoffer`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynia2`
--

CREATE TABLE `skrzynia2` (
  `id` int(11) NOT NULL,
  `zdjecie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skrzynia2`
--

INSERT INTO `skrzynia2` (`id`, `zdjecie`) VALUES
(1, 'zdjecia/KatoChallengers/ibuypower.png'),
(2, 'zdjecia/KatoChallengers/ibuypowerholo.png'),
(3, 'zdjecia/KatoChallengers/mousesports.png'),
(4, 'zdjecia/KatoChallengers/mousesportsholo.png'),
(5, 'zdjecia/KatoChallengers/navi.png'),
(6, 'zdjecia/KatoChallengers/naviholo.png'),
(7, 'zdjecia/KatoChallengers/reasongaming.png'),
(8, 'zdjecia/KatoChallengers/reasongamingholo.png'),
(9, 'zdjecia/KatoChallengers/virtuspro.png'),
(10, 'zdjecia/KatoChallengers/virtusproholo.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `skrzynia2`
--
ALTER TABLE `skrzynia2`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
