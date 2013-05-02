-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 26 Kwi 2013, 09:37
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
-- Struktura tabeli dla tabeli `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('019886c66548adcd27b3aeeaa91f8776', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1366224433, 'a:3:{s:7:"user_id";s:2:"22";s:11:"user_rights";s:1:"0";s:17:"flash:new:success";s:33:"Logowanie przebieg?o pomy?lnie!";}'),
('0d04d9f3fb3c27ec205fe297e487ecf0', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1366219055, 'a:2:{s:9:"user_data";s:0:"";s:13:"cart_contents";a:4:{s:32:"96600076147f7cc896e963c14a6dc758";a:7:{s:5:"rowid";s:32:"96600076147f7cc896e963c14a6dc758";s:2:"id";s:2:"60";s:3:"qty";s:1:"1";s:5:"price";s:5:"12.99";s:4:"name";s:12:"Rubber Ducky";s:7:"options";a:1:{s:4:"Size";s:5:"green";}s:8:"subtotal";d:12.9900000000000002131628207280300557613372802734375;}s:32:"2f61799c650aed0e65977013e7e62bbc";a:7:{s:5:"rowid";s:32:"2f61799c650aed0e65977013e7e62bbc";s:2:"id";s:2:"61";s:3:"qty";s:1:"1";s:5:"price";s:4:"4.12";s:4:"name";s:6:"Ciasto";s:7:"options";a:1:{s:5:"jakie";s:5:"dobre";}s:8:"subtotal";d:4.12000000000000010658141036401502788066864013671875;}s:11:"total_items";i:2;s:10:"cart_total";d:17.1099999999999994315658113919198513031005859375;}}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `qty_ordered` int(11) DEFAULT NULL,
  `imie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_details2`
--

CREATE TABLE IF NOT EXISTS `order_details2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `qty_ordered` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Zrzut danych tabeli `order_details2`
--

INSERT INTO `order_details2` (`id`, `product_id`, `description`, `price`, `qty_ordered`) VALUES
(1, 1, 'Majtki', '4', 1),
(2, 2, 'Kabaczki', '41', 1),
(3, 1, 'Majtki', '4', 1),
(4, 2, 'Kabaczki', '41', 1),
(5, 2, 'Kabaczki', '41', 1),
(6, 1, 'Majtki', '4', 223),
(21, 2, 'Kabaczki', '41', 1),
(22, 1, 'Majtki', '4', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `description`, `qty`, `price`, `status`) VALUES
(1, 'Majtki', -459, '4', 'dost'),
(2, 'Kabaczki', -259, '41', 'niedost'),
(3, 'Pizza', 9, '22', 'dost'),
(4, 'Laptop', 179, '1599', 'dost');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `rights`) VALUES
(20, 'admin', 'admin@pkkd.pl', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(22, 'krzychu500', 'kljkljkl@op.pl', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 0),
(23, 'Karol90', 'karol.sliwinski@yahoo.pl', '09600e16413800514f01d62e34775113ddd7e50a', 0),
(24, 'Karol898', 'idiosauioduas@op.pl', 'a3bb3552f9b9dc6aed9f90a8245a7691a038c8e6', 0),
(25, 'Karol898', 'idiosauioduas@op.pl', 'a3bb3552f9b9dc6aed9f90a8245a7691a038c8e6', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE IF NOT EXISTS `zamowienia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) NOT NULL,
  `cena` decimal(13,2) NOT NULL,
  `Array` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `nazwa`, `cena`, `Array`) VALUES
(14, '0', '0.00', NULL),
(15, '0', '0.00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
