
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
