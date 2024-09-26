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
-- Struttura della tabella `fontisito`
--

CREATE TABLE IF NOT EXISTS `fontisito` (
  `Nome` varchar(32) NOT NULL,
  `Tipo` varchar(32) NOT NULL,
  `Link` text NOT NULL,
  PRIMARY KEY (`Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `fontisito`
--

INSERT INTO `fontisito` (`Nome`, `Tipo`, `Link`) VALUES
('W3School', 'Stile CSS', 'https://www.w3schools.com/'),
('Codepen', 'Stile CSS', 'https://codepen.io/'),
('Stackoverflow', 'Stile CSS / Script / Altro', 'https://stackoverflow.com/'),
('Wikipedia', 'Contenuto', 'https://it.wikipedia.org/'),
('Cyber Sec Italia', 'Contenuto', 'https://www.cybersecitalia.it/'),
('Digital4Trade', 'Contenuto', 'https://www.digital4trade.it/'),
('Cybersecurity360', 'Contenuto', 'https://www.cybersecurity360.it/'),
('Kaspersky', 'Contenuto', 'https://www.kaspersky.it/'),
('Zerounoweb', 'Contenuto', 'https://www.zerounoweb.it/'),
('StartupItalia', 'Contenuto', 'https://cybersecurity.startupitalia.eu/'),
('Regus', 'Contenuto', 'https://www.regus.it/work-italy/'),
('FontAwesome', 'Icone', 'https://fontawesome.com/start'),
('Consulthink', 'Contenuto', 'https://www.consulthink.it/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
