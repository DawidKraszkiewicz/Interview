-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Czas generowania: 20 Maj 2022, 13:30
-- Wersja serwera: 5.7.34
-- Wersja PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `logic`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sent_forms`
--

CREATE TABLE `sent_forms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `term_id` int(11) DEFAULT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `sent_forms`
--

INSERT INTO `sent_forms` (`id`, `name`, `surname`, `phone_number`, `email_address`, `term_id`, `accepted`) VALUES
(50, 'sadsad', 'sad', 'asd', 'asd', 3, 1),
(51, 'asdasdasddas', 'saddsadasdsa', '13213123213', 'kraszka1234@gmail.com', 2, 1),
(52, 'asdasdasddas', 'saddsadasdsa', '13213123213', 'kraszka1234@gmail.com', 2, 1),
(53, 'asdasddas', 'dsadasda', 'saddsaasd', 'kraszka1234@gmail.com', 1, 1),
(54, 'asdasddas', 'dsadasda', 'saddsaasd', 'kraszka1234@gmail.com', 1, 1),
(55, 'asdasd', 'asdasd', 'sadasd', 'kraszka1234@gmail.com', 3, 1),
(56, 'qwerty', 'qwerty', '123123123', 'test@test.com', 2, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `term` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `terms`
--

INSERT INTO `terms` (`id`, `term`) VALUES
(1, '2015-11-11'),
(2, '2015-11-12'),
(3, '2015-11-14'),
(4, '2015-11-15'),
(5, '2015-11-16'),
(6, '2015-11-17'),
(7, '2015-11-18');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `sent_forms`
--
ALTER TABLE `sent_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sent_forms_ibfk_1` (`term_id`);

--
-- Indeksy dla tabeli `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `sent_forms`
--
ALTER TABLE `sent_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT dla tabeli `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `sent_forms`
--
ALTER TABLE `sent_forms`
  ADD CONSTRAINT `sent_forms_ibfk_1` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
