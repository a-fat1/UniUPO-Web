-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Lug 28, 2019 alle 13:01
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
-- Struttura della tabella `attacchiHacker`
--

CREATE TABLE IF NOT EXISTS `attacchiHacker` (
  `Codice` varchar(32) NOT NULL,
  `Nome` varchar(32) NOT NULL,
  `Sorgente` varchar(32) NOT NULL,
  `Destinazione` varchar(32) NOT NULL,
  `Pericolo` varchar(32) NOT NULL,
  PRIMARY KEY (`Codice`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `attacchiHacker`
--

INSERT INTO `attacchiHacker` (`Codice`, `Nome`, `Sorgente`, `Destinazione`, `Pericolo`) VALUES
('9xrte1', 'tps:infectZip', 'Pakistan', 'Giappone', 'Grave'),
('9xghy6', 'trojan_rtts:upload', 'India', 'Italia', 'Grave'),
('9xhya3', 'portrait:hackSRC', 'Brasile', 'Indonesia', 'Grave'),
('9xpol8', 'trojan_ffs:this', 'Argentina', 'Portogallo', 'Grave'),
('9x3rt5', 'trojan::bypass_4k4', 'Italia', 'Canada', 'Grave');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
