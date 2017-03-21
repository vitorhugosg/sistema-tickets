-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 21-Mar-2017 às 20:43
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
(56, '2017-03-21 15:51:27', 92651631, 'VITOR HUGO', 'testando');

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
  `arquivo` varchar(200) DEFAULT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ticket`
--

INSERT INTO `ticket` (`id`, `codigo`, `categoria`, `produto`, `data`, `data_att`, `atendido`, `status`, `texto_ticket`, `usuario`, `arquivo`, `nome_usuario`) VALUES
(36, 92651631, 'AMD', 'Nome do produto', '2017-03-21 15:34:17', '2017-03-21 15:51:27', 'VITOR HUGO', 1, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 4, 'null', 'teste3');

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
(4, 'teste3', 'vhcode@gmail.com', 'e715778c9f759efab451c2eb7bf42332', 0),
(6, 'admin', 'admin@admin.com', '698dc19d489c4e4db73e28a713eab07b', 1);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `relacionamentos`
--
ALTER TABLE `relacionamentos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;