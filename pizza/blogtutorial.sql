-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 12 Kwi 2013, 09:57
-- Wersja serwera: 5.5.24-log
-- Wersja PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `blogtutorial`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_user_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_values` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `option_name`, `option_values`) VALUES
(1, 'Rubber Ducky', '2.99', 'ducky.jpg', 'Eyes', 'green,blue'),
(2, 'Horse', '4500.00', 'horse.jpg', 'Color', 'white,black,brown'),
(3, 'T-Shirt', '12.99', 'tshirt.jpg', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE IF NOT EXISTS `produkty` (
  `nazwa` varchar(30) DEFAULT NULL,
  `typ` varchar(30) DEFAULT NULL,
  `cena` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`nazwa`, `typ`, `cena`) VALUES
('dsasadsadsadsa', 'dsadsa', 0),
('PizzaWloska', 'ciasto', 234),
('PizzaPolska', 'ciasto', 45),
('PizzaPolska', 'ciasto', 45),
('ciastoniemeckie', 'dsaddsa', 41),
('ciasto polska', 'dupa', 44),
('ciasto wloskie', 'dobre', 321),
('ciasto wloskie', 'dobre', 321),
('ciasto roma2', 'guda', 1),
('Ciasto Francuskie', 'ciasto', 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `test`
--

INSERT INTO `test` (`username`) VALUES
('fdfdsfdsf'),
('fdfdsfdsf'),
('432432fdsfdsczx'),
('432432fdsfdsczx'),
('DSADSADSA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `rights` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `login_idx` (`email`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `rights`) VALUES
(13, 'Antoni', 'dsadsada@op.pl', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', NULL),
(14, 'karol12', 'karol.fds@yahoo.pl', '3dfeb982dbfcfe28e2527bf0c9ff2da2c05012b4', NULL),
(15, 'justyna', 'sqwewqewqe@op.pl', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', NULL),
(16, 'justynka', 'dsadd@op.pl', '03de6c570bfe24bfc328ccd7ca46b76eadaf4334', NULL),
(17, 'karoll', 'jutata@op.pl', '7467c217e0c80819305262824563a3d10e7b1bd3', NULL),
(18, 'karolsliwinski', 'dsapdsapoifopasi@op.pl', 'cc16142e539a40215f5226c07adf4091f816bb23', 0),
(19, 'karolsliwinski', 'dsapdsapoifopasi@op.pl', 'cc16142e539a40215f5226c07adf4091f816bb23', 0),
(20, 'admin', 'admin@pkkd.pl', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(21, 'dupajasiu', 'dsadsaddsad@op.pl', '1bf4dfe742a2054677e2eb0c9944327604458366', 0),
(22, 'krzychu500', 'kljkljkl@op.pl', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 0),
(23, 'admin2', 'jjuij@op.pl', '3dfeb982dbfcfe28e2527bf0c9ff2da2c05012b4', 0);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
