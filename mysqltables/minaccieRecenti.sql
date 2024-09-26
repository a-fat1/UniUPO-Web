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
-- Struttura della tabella `minaccieRecenti`
--

CREATE TABLE IF NOT EXISTS `minaccieRecenti` (
  `Nome` varchar(32) NOT NULL,
  `Pericolo` varchar(32) NOT NULL,
  `Popolare` varchar(32) NOT NULL,
  `Rilevato` varchar(32) NOT NULL,
  `Paese` varchar(32) NOT NULL,
  PRIMARY KEY (`Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `minaccieRecenti`
--

INSERT INTO `minaccieRecenti` (`Nome`, `Pericolo`, `Popolare`, `Rilevato`, `Paese`) VALUES
('Virus', 'Medio', '15%', '456', 'India'),
('Worm', 'Basso', '3%', '112', 'Canada'),
('Malware', 'Alto', '42%', '5690', 'Francia'),
('Trojan', 'Medio', '4%', '320', 'Stati Uniti'),
('Rootkit', 'Bassa', '3%', '90', 'Madacascar'),
('Phishing', 'Alta', '8%', '987', 'Portogallo'),
('Keylogger', 'Bassa', '2%', '83', 'Finlandia'),
('Spyware', 'Alta', '20%', '5432', 'Ucraina'),
('Botnet', 'Media', '2%', '470', 'Cina'),
('Adware', 'Media', '1%', '45', 'Norvegia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
