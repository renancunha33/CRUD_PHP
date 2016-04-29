-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30-Abr-2016 às 00:15
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CadastroCRUD`
--
CREATE DATABASE IF NOT EXISTS `CadastroCRUD` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `CadastroCRUD`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroCRUD`
--

CREATE TABLE `cadastroCRUD` (
  `id_cadastro` int(11) NOT NULL,
  `nm_cadastro` varchar(50) NOT NULL,
  `tel_cadastro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastroCRUD`
--

INSERT INTO `cadastroCRUD` (`id_cadastro`, `nm_cadastro`, `tel_cadastro`) VALUES
(1, 'Renan da cunha santos', '123456123'),
(5, 'dsa', '31'),
(6, 'fds', '432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastroCRUD`
--
ALTER TABLE `cadastroCRUD`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastroCRUD`
--
ALTER TABLE `cadastroCRUD`
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
