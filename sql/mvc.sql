-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Mar 2015, 18:41
-- Wersja serwera: 5.6.21
-- Wersja PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `mvc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `data`
--

INSERT INTO `data` (`id`, `text`) VALUES
(105, '10-ty'),
(117, '12-ty'),
(122, 'kkk'),
(123, 'kurka wodna'),
(126, '1-sze'),
(129, '15-tka'),
(130, '89');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `alias` varchar(32) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  `joindatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timezone` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `alias`, `login`, `password`, `role`, `joindatetime`, `timezone`) VALUES
(1, 'jes', 'jessie', '056f2914fd9a607d48f5491a53b4deb5', 'owner', '2015-03-04 15:09:29', ''),
(2, 'joe', 'joe', '056f2914fd9a607d48f5491a53b4deb5', 'default', '0000-00-00 00:00:00', ''),
(19, 'kich', 'kicha', '136dd79ac3f3fe9ab9e7c06c61bddedf', 'default', '0000-00-00 00:00:00', ''),
(20, 'lllo', 'aa@aa.pl', 'jessie', 'default', '0000-00-00 00:00:00', ''),
(30, 'alipasza', 'alipasza1@gazeta.pl', 'b46969044a2f1869950fe3deeacf9e81', 'default', '2015-03-04 15:09:29', 'Africa/Douala'),
(31, 'alipasza2', 'alipasza2@gazeta.pl', 'b46969044a2f1869950fe3deeacf9e81', 'default', '0000-00-00 00:00:00', ''),
(32, 'alipasza3', 'alipasza3@gazeta.pl', 'b46969044a2f1869950fe3deeacf9e81', 'default', '0000-00-00 00:00:00', ''),
(33, 'xxx', 'xxx', 'xxx', 'default', '2015-03-04 15:09:29', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `alias` (`alias`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
