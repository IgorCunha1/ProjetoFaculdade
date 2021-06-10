-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10/06/2021 às 02:41
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acionape`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `cnpj_cliente` varchar(20) DEFAULT NULL,
  `divida_cliente` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `cnpj_cliente`, `divida_cliente`) VALUES
(29, 'José', '11112321312311231', 1.50),
(34, 'José', '11111122266', 1000.00),
(35, 'Igor', '11111122266', 300.00),
(36, 'Pedro', '00.000.000/0000.00', 1000.00),
(37, 'José', '000', 1500.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contratante`
--

CREATE TABLE `contratante` (
  `id_contratante` int(11) NOT NULL,
  `nome_contratante` varchar(255) DEFAULT NULL,
  `cnpj_contratante` varchar(255) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `contratante`
--

INSERT INTO `contratante` (`id_contratante`, `nome_contratante`, `cnpj_contratante`, `id_cliente`) VALUES
(3, 'Software', '1111123', 34),
(5, 'Faelo', '0000000000000', 36);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `senha_usuario` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `senha_usuario`) VALUES
(4, 'igor', '123'),
(5, 'Pedro', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `contratante`
--
ALTER TABLE `contratante`
  ADD PRIMARY KEY (`id_contratante`),
  ADD KEY `id_cliente_fk` (`id_cliente`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `contratante`
--
ALTER TABLE `contratante`
  MODIFY `id_contratante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `contratante`
--
ALTER TABLE `contratante`
  ADD CONSTRAINT `id_cliente_fk` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
