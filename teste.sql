-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 21-Mar-2017 às 13:47
-- Versão do servidor: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_ticket`
--

CREATE TABLE `historico_ticket` (
  `id` int(11) UNSIGNED NOT NULL,
  `data_att` datetime DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `nome_usuario` varchar(150) DEFAULT NULL,
  `texto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico_ticket`
--

INSERT INTO `historico_ticket` (`id`, `data_att`, `codigo`, `nome_usuario`, `texto`) VALUES
(21, '2017-03-20 20:44:04', 293760740, 'VITOR HUGO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(22, '2017-03-21 09:44:35', 293760740, 'VITOR HUGO', 'teste mais um!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacionamentos`
--

CREATE TABLE `relacionamentos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_seguidor` int(11) DEFAULT NULL,
  `id_seguido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `relacionamentos`
--

INSERT INTO `relacionamentos` (`id`, `id_seguidor`, `id_seguido`) VALUES
(2, 2, 2),
(3, 4, 4),
(4, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `produto` varchar(100) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `data_att` datetime DEFAULT NULL,
  `atendido` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `texto_ticket` text,
  `usuario` int(11) DEFAULT NULL,
  `arquivo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ticket`
--

INSERT INTO `ticket` (`id`, `codigo`, `categoria`, `produto`, `data`, `data_att`, `atendido`, `status`, `texto_ticket`, `usuario`, `arquivo`) VALUES
(28, 741978620, 'INTEL', 'teste', '2017-03-20 16:56:45', '2017-03-20 16:56:45', '--', 0, 'testeeee', 2, 'null'),
(29, 633471559, 'INTEL', 'eaea', '2017-03-20 16:56:57', '2017-03-20 16:56:57', '--', 0, 'teste', 2, 'null'),
(30, 266923438, 'AMD', 'PRODUTO', '2017-03-20 17:23:13', '2017-03-20 17:23:13', '--', 0, 'testando!', 5, 'null'),
(31, 1424432364, 'INTEL', 'teste', '2017-03-20 17:37:38', '2017-03-20 17:37:38', '--', 0, 'teste', 2, 'null'),
(32, 293760740, 'INTEL', 'teste', '2017-03-20 17:58:22', '2017-03-20 17:58:22', '--', 0, 'teste', 4, 'null');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `admin`) VALUES
(2, 'VITOR HUGO', 'vitorhugosg@gmail.com', 'e715778c9f759efab451c2eb7bf42332', 1),
(4, 'teste3', 'vhcode@gmail.com', 'e715778c9f759efab451c2eb7bf42332', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historico_ticket`
--
ALTER TABLE `historico_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relacionamentos`
--
ALTER TABLE `relacionamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historico_ticket`
--
ALTER TABLE `historico_ticket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `relacionamentos`
--
ALTER TABLE `relacionamentos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;