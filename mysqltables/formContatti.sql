-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Lug 28, 2019 alle 13:03
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_provaironsecurity2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `formContatti`
--

CREATE TABLE IF NOT EXISTS `formContatti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Descrizione` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dump dei dati per la tabella `formContatti`
--

INSERT INTO `formContatti` (`id`, `Nome`, `Email`, `Descrizione`) VALUES
(1, 'asd', 'asd@tr.it', 'asd'),
(2, 'cicciolino@', 'asd@tr.it', 'asd'),
(3, 'cicciolino', 'ciccio@gmail.cok', 'Questa pÃ¨ un prova di submisisone del database su7 altervista.'),
(4, '123', 'lizzosgabriele@gmail.com', 'asda'),
(5, '123', 'lizzosgabriele@gmail.com', 'asda'),
(11, 'gab', 'lizzosgabriele@gmail.com', 'prova'),
(9, 'prova', 'prova@re.it', 'ciao'),
(52, 'asdasd', 'lizzos@232.it', '12312asdas'),
(50, 'Gabriele Lizzos', 'lizzosgabriele@prova.it', 'Prova'),
(51, 'granbceaco asdasd', '2@ir.ot', '123123'),
(65, 'asdasd', 'lizzos@232.it', '12312asdas'),
(64, 'asdasd', 'lizzos@232.it', '12312asdas'),
(63, 'asdasd', 'lizzos@232.it', '12312asdas'),
(62, 'asdasd', 'lizzos@232.it', '12312asdas'),
(60, 'asdasd', 'lizzos@232.it', '12312asdas'),
(61, 'asdasd', 'lizzos@232.it', '12312asdas'),
(68, 'dante alighieri', 'dantealighieri@commediamerda.com', 'Nel mezzo di cammin di nostra vita mi ritrovai nel culo una matita.  AHI AHI se era appuntita!'),
(67, 'asdasd', 'lizzos@232.it', '12312asdas'),
(66, 'asdasd', 'lizzos@232.it', '12312asdas'),
(49, 'gab', 'lizzosgabriele@gmail.com', '123123'),
(48, 'Carlo Magno', 'carloMagnoilMagnifico@sparta.it', 'Scemo chi legge.'),
(59, 'asdasd', 'lizzos@232.it', '12312asdas'),
(58, 'asdasd', 'lizzos@232.it', '12312asdas'),
(57, 'asdasd', 'lizzos@232.it', '12312asdas'),
(56, 'asdasd', 'lizzos@232.it', '12312asdas'),
(55, 'asdasd', 'lizzos@232.it', '12312asdas'),
(54, 'asdasd', 'lizzos@232.it', '12312asdas'),
(53, 'asdasd', 'lizzos@232.it', '12312asdas'),
(47, 'prova provolina', 'provolone@pollok.it', 'Ciao questo Ã¨ una prova'),
(46, 'prova provolina', 'provolone@pollok.it', 'Ciao questo Ã¨ una prova'),
(45, 'prova provolina', 'provolone@pollok.it', 'Ciao questo Ã¨ una prova'),
(69, 'prova', 'prova@gsadas.it', 'questa Ã¨ una provaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(70, 'ciao', 'lasda@23.it', 'prova'),
(71, 'aaa', 'lizzosgabriele@gmail.com', 'qweqweq'),
(72, 'probv', 'prova@prova.it', 'Prova'),
(73, 'prova', 'prova@gaa.it', '23131231'),
(74, 'prova', 'prova@prova.it', 'asdasdasdasda'),
(75, 'prov', 'prova@gsadas.it', '123123'),
(76, 'prov', 'prova@gaa.it', '213123'),
(77, 'prova', 'prova@prova.it', '1231231'),
(78, 'prova', 'prova@prova.it', '1231231'),
(79, 'aaaa', 'lizzosgabriele@gmail.com', '123123'),
(80, 'ciccio bello', 'cicciobelloo@gmail.com', 'yeee'),
(81, 'ciccio bello', 'cicciobelloo@gmail.com', 'yeee'),
(82, 'Alessandro Fatone', 'fatone_alessandro@outlook.com', 'Messaggio di prova'),
(83, 'prova', '123123@2311.it', 'ASDASD'),
(84, 'FF', 'lizzosgabriele@gmail.com', '12312');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
