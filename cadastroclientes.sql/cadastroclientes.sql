-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21/06/2018 às 13:13
-- Versão do servidor: 10.1.30-MariaDB
-- Versão do PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastroclientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dadosCliente`
--

CREATE TABLE `dadosCliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `servico` varchar(100) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `funcionario` varchar(30) NOT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `dadosCliente`
--

INSERT INTO `dadosCliente` (`id`, `nome`, `telefone`, `endereco`, `servico`, `preco`, `funcionario`, `data_cadastro`) VALUES
(1, 'Darc', '(62)99503-0875', 'Rua 46 lt 29 Qd 31 triunfo 1', 'ReconstruÃ§Ã£o', '150.00', 'Aldinei', '2018-05-19 15:38:21'),
(6, 'Jhenyfer', '(62)99821-0162', '', 'Escova ', '30.00', 'Aldinei', '2018-05-19 20:24:28'),
(7, 'Jhenyfer', '(62)99821-0162', '', 'Sombrancelha', '15.00', 'Aldinei', '2018-05-19 20:24:54'),
(9, 'Jhenyfer', '(62)99821-0162', '', 'ColoraÃ§Ã£o', '20.00', 'Aldinei', '2018-05-19 20:26:41'),
(11, 'Gleice', '992672064', 'Rua 55 qd 85 Ltda 20', 'Relaxamento Anethum  / corte', '80', 'Aldinei', '2018-05-20 12:29:30'),
(12, 'Dora luiza', '995340851', 'Rua 29 Ã¡ qd 131 E Ltda 02 triunfo ', 'Escova', '25', 'Aldinei', '2018-05-21 21:34:29'),
(13, 'Fernando dos santos', '992244247', 'Rua 24 qd 50 Ltda 11', 'Corte', '15', 'Aldinei', '2018-05-22 12:10:19'),
(14, 'Luiz Antonio ', '994077711', 'Rua 56 qd113 lt35', 'Corte', '10', 'Aldinei', '2018-05-22 17:07:35'),
(15, 'Edson coelho', '6282906302', 'Rua 18 Qd 46 l', 'Corte de cabelo', '15', 'Fabiana', '2018-05-23 16:13:09'),
(16, 'Buby', '993105738', 'Rua 61 qd 103 lt30 triunfo 1 ', 'Corte de cabelo', '15', 'Aldinei', '2018-05-23 18:30:03'),
(17, 'JOANA Darc', '993653063', 'Rua 3 qd 17 lt17', 'Selagem ', '80', 'Fabiana', '2018-05-23 18:33:29'),
(18, 'Arnaldo ', '991298234', 'Rua GuarujÃ¡ qd 36lt15 j Ipanema  ', 'Corte', '15', 'Aldinei', '2018-05-23 20:36:54'),
(19, 'Devid', '62995489936', 'Rua 49 Dr 106 Lt 09', 'Corte de cabelo', '15.00', 'Fabiana', '2018-05-23 21:01:40'),
(20, 'J Victor ', '984238575', 'Rua 32 Ltda 15 qd 23 triunfo ', 'Corte ', '15', 'Aldinei', '2018-05-23 21:13:31'),
(21, 'Alcilene', '994797093', 'Rua t1 qd26 lt26', 'Sombrancelha', '15', 'Aldinei', '2018-05-24 14:35:50'),
(22, 'Ãlefe de Souza ribeiro', '63991085392', 'Rua 55qd 111 lt06', 'Barba ', '20', 'Aldinei', '2018-05-24 17:48:07'),
(23, 'Luis Antonio ', '986007885', 'Rua 56qd79 lt25', 'Corte', '15', 'Aldinei', '2018-05-24 18:38:04'),
(24, 'Luismar', '986007885', 'Rua 46 qd79 25', 'Corte ', '15', 'Aldinei', '2018-05-24 18:39:22'),
(25, 'Vania', '993499024', 'Rua 20qd47lt9 triunfo 1 ', 'Escova / escova / 2 pÃ© Ã© mÃ£o ', '15', 'Aldinei', '2018-05-24 19:32:12'),
(26, 'Danyelly', '995097460', 'Rua20qd47lt9', '', 'Escova ', 'Aldinei', '2018-05-24 19:34:50'),
(27, 'MaÃ­sa silva', '998554816', 'R', 'Escova / escova', '25', 'Fabiana', '2018-05-24 20:50:12'),
(28, 'Daniel triunfo ', '996592047', 'Rua 46 qd79lt25', 'Corte ', '15', 'Aldinei', '2018-05-24 22:43:54'),
(29, 'Daniel triunfo ', '996592047', 'Rua 46 qd79lt25', 'Corte ', '15', 'Aldinei', '2018-05-24 22:43:57'),
(30, 'Gildeon', '993454999', 'Rua Dilma mortegal', 'Corte de cabelo', '15', 'Aldinei', '2018-05-25 21:11:14'),
(31, 'Jhonatas', '994676111', 'Rua 47qd88tl19', 'Corte', '15', 'Aldinei', '2018-05-25 21:40:06'),
(32, 'Cristiane', '62992705499', 'Avenida FlÃ¡vio Alberto Cascao Qd 91 Lt 06', 'Relaxamento Aneethun', '120', 'Fabiana', '2018-05-25 21:48:49'),
(33, 'Karina', '991382731', 'Rua02qd 25 t 23A SÃ£o Domingo', 'Corte ', '25', 'Aldinei', '2018-05-26 14:29:48'),
(34, 'Roniel', '994054487', 'Ru', 'Corte/luzes/sombrancelha ', '70', 'Fabiana', '2018-05-26 14:38:10'),
(35, 'Maria adriana', '62991143587', 'Rua 02 Qd 62 Lt 20 triunfo 1', 'Corte de cabelo', '25', 'Fabiana', '2018-05-26 18:29:01'),
(36, 'Andressa', '992935893', 'Rua t16qf23lt43 arco do triunfo ', 'Corte/sombrancelha ', '40', 'Aldinei', '2018-05-26 18:39:22'),
(37, 'Crislaine', '995030875', 'Rua 46 qd29 31 triunfo  ', 'Sombrancelha ', '15', 'Aldinei', '2018-05-26 19:14:25'),
(38, 'Alisson ', '993665950', 'Rua t16 qd 23 lt43', 'Corte ', '15', 'Aldinei cardoso dos santos', '2018-05-26 19:53:33'),
(39, 'Arthur ', '99644446', 'Rua leda de Ferreira  gois', 'Corte ', '15', 'Aldinei', '2018-05-26 21:43:48'),
(40, 'Karolinny', '992946375', 'Pe', '', '15ana', '', '2018-05-27 13:38:09'),
(41, 'Karolinny', '992946375', 'Pe', '', '15ana', 'Ana', '2018-05-27 13:38:16'),
(42, 'Mariana', '993437142', 'Rua 46 qd119 lt36 triunfo 1', 'Escova', '20', 'Aldinei', '2018-05-27 14:01:08'),
(43, 'Jean carlos', '994564265', 'Rua 40 qd 67 lt11 triunfo 1', 'Corte/sombrancelha/selagem ', '70', 'Aldinei', '2018-05-27 14:03:57'),
(44, 'JÃºlio souza', '984635037', 'Rua pl 47 qd 32lt22 Planalto ', 'Corte ', '15', 'Aldinei', '2018-05-28 14:19:02'),
(45, 'Davi lucas', '992331119', 'Rua 75qd166lt2 triunfo  3', 'Cort', '15Al', 'Aldinei', '2018-05-28 19:47:36'),
(46, '', '', '', '', '', '', '2018-05-29 15:54:47'),
(47, 'Elismar Ferreira da Silva', '991642206', 'Rua Fm8 Qd 19 Lt 32 GoiÃ¢nia ', 'Relaxamento annetun', '40', 'Fabiana', '2018-05-29 20:52:11'),
(48, 'Iris Rejane da silva alencar', '995318903', 'Rua 24 Qd 51 Lt 09 triunfo 1 ', 'PÃ© ', '15', 'Ana', '2018-05-29 20:53:52'),
(49, 'Jaime', '981091312', ' Rua 24 qd 51 Ltda 2', 'Corte/barba/sombrancelha ', '45:00', 'Aldinei', '2018-05-29 22:39:00'),
(50, 'Ygor ferreira', '986470519', 'Rua', 'Corte', '15', 'Fabiana', '2018-05-30 19:03:30'),
(51, 'Cleomar chaves', '92928256', '', 'Corte de cabelo', '15', 'Fabiana', '2018-05-31 12:06:01'),
(52, 'Nilson  f Santos ', '993674832', 'R', 'Corte', '15', 'Aldinei', '2018-05-31 14:37:13'),
(53, 'FlÃ¡vio  Bento ', '992087815', 'Rua 4 qd 5 lt2', 'Corte', '15', 'Aldinei', '2018-05-31 15:35:26'),
(54, 'FlÃ¡vio  Henrique ', '992087815', 'Rua 4 qd5lt2', 'Corte', '15', 'Aldinei', '2018-05-31 15:37:03'),
(55, 'Italu', '991059179', 'Rua rn8 qd 2k lt 06 residencial morumbi', 'Corte de cabelo ', '15', 'Fabiana', '2018-05-31 20:04:54'),
(56, 'Soraia', '991006288', '', 'Escova  ', '25', 'Fabiana', '2018-05-31 21:04:22'),
(59, 'Mara de paula', '991488778', 'Rua', 'Pe /ma', '30', 'Ana', '2018-06-01 16:19:25'),
(60, 'Carmem Batista ', '991768613', 'Rua 13 qd67 lt8 triunfo ', 'Somb/somb/somb/corte', '85', 'Aldinei', '2018-06-01 22:31:58'),
(61, 'Rafael ', '991768613', 'Rua 13 qd 67 lt8', 'Corte/corte/corte', '15', 'Aldinei', '2018-06-01 22:33:51'),
(62, 'Luciano Nascimento ', '991230696', 'Rua56 qd97lt6', 'Barba', '16', 'Aldinei', '2018-06-02 13:17:44'),
(63, 'Renato Augusto ', '991927673', 'Rua56qd97 lt6', 'Corte', '15', 'Aldinei', '2018-06-02 13:19:09'),
(64, 'Tamires ', '62993043392', 'Rua T5 ', 'Cachos no cabelo', '10', 'Fabiana', '2018-06-02 13:27:19'),
(65, 'Tamires ', '62993043392', 'Rua T5 ', 'Cachos no cabelo', '10', 'Fabiana', '2018-06-02 13:27:43'),
(66, 'Ruthi', '6294377897', 'Avenida do sol Qd 10 Lt 05', 'Rescostrucao/ sobrancelha ', '60   15', 'Fabiana', '2018-06-02 16:26:16'),
(68, 'Antonio  Marcos lipo Ferreira ', '992166232', 'Rua 38 qd 65 lt16 triunfo  1', 'Corte /corte/corte/corte/Corte ', '15', 'Aldinei', '2018-06-02 17:56:18'),
(69, 'Vania', '', '', 'Escova', '20', 'Fabiana', '2018-06-02 18:51:36'),
(70, 'Paulo', '', 'Rua 24 Qd 51 Lt 03', 'Progressiva e corte', '55', 'Fabiana', '2018-06-02 19:37:24'),
(71, 'Wagner Marques moura', '991207530', 'Rua 6qd 35 Ltda 8', 'Corte', '15', 'Aldinei', '2018-06-02 20:03:39'),
(72, 'Jhonatas', '994676111', 'Rua 47 Qd 88 lt 19', 'Barba', '15', 'Fabiana', '2018-06-02 20:50:34'),
(74, 'Iranete', '991177268', 'Rua4qd5lt2progresso', 'Sombrancelha ', '15', 'Aldinei', '2018-06-02 22:22:08'),
(75, 'Pedro antoniel', '994220185', 'Rua sb13 qd21lt 37 SÃ£o Bernardo ', 'Sombrancelha ', '15', 'Aldinei', '2018-06-02 23:25:29'),
(76, 'Maicon Correia ', '991518144', 'Rua 46 qd71 lt28', 'Cort/', '15', 'Aldinei', '2018-06-03 12:04:14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `niveis_acesso_id`, `data_criacao`) VALUES
(1, 'Tallys Henrike', 'TallysHenrike', 'Tallys2801', 1, '2018-06-01 02:07:24');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `dadosCliente`
--
ALTER TABLE `dadosCliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `dadosCliente`
--
ALTER TABLE `dadosCliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
