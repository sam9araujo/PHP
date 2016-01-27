-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 04:44 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conteudo`
--

CREATE TABLE IF NOT EXISTS `tbl_conteudo` (
  `id_conteudo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_conteudo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `texto_conteudo` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_conteudo`),
  KEY `id_conteudo` (`id_conteudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_conteudo`
--

INSERT INTO `tbl_conteudo` (`id_conteudo`, `titulo_conteudo`, `texto_conteudo`) VALUES
(4, 'titulo', 'blÃ¡blÃ¡');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
