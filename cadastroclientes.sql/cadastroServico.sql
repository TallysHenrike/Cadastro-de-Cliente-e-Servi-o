-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Jun-2018 às 17:43
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tallyscadastroclientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroServico`
--

CREATE TABLE `cadastroServico` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `servico` varchar(100) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `funcionario` varchar(30) NOT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastroServico`
--

INSERT INTO `cadastroServico` (`id`, `nome`, `servico`, `preco`, `funcionario`, `data_cadastro`) VALUES
(4, 'Gleice', 'Progressiva', '60,00', 'Fabiana', '2018-06-22 20:00:30'),
(6, 'Gleice', 'Progressiva', '60,00', 'Fabiana', '2018-06-22 20:04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastroServico`
--
ALTER TABLE `cadastroServico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastroServico`
--
ALTER TABLE `cadastroServico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
