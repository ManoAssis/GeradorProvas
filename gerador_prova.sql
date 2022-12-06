-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 15:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerador_prova`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL,
  `alternativa` text NOT NULL,
  `pergunta_id` int(11) NOT NULL,
  `correto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `alternativa`, `pergunta_id`, `correto`) VALUES
(36, 'Branco', 5, 0),
(37, 'Cinza-Claro', 5, 1),
(38, 'Preto', 5, 0),
(39, 'Marrom', 5, 0),
(40, 'Dourado', 5, 0),
(41, '32', 6, 0),
(42, '12', 6, 0),
(43, '2', 6, 0),
(44, '27', 6, 1),
(45, '29', 6, 0),
(46, 'Espírito Santo. Minas Gerais. Rio de Janeiro. São Paulo.', 7, 1),
(47, 'Paraná. Santa Catarina. Rio Grande do Sul. ', 7, 0),
(48, 'Acre. Amapá. Amazonas. Pará.', 7, 0),
(49, 'Goiás. Mato Grosso.  Grosso do Sul. Distrito Federal.', 7, 0),
(50, 'Goiás. Santa Catarina. Minas Gerais. Amazonas.', 7, 0),
(51, '59', 8, 0),
(52, '120', 8, 0),
(53, '129', 8, 0),
(54, '5', 8, 0),
(55, '193', 8, 1),
(76, '5', 9, 0),
(77, '1', 9, 0),
(78, '3', 9, 0),
(79, '2', 9, 0),
(80, '4', 9, 1),
(81, '1000', 10, 0),
(82, '15.000', 10, 0),
(83, '23', 10, 0),
(84, '10', 10, 0),
(85, 'Depende o tamanha da canoa', 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `pergunta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`) VALUES
(5, 'Qual a cor do cavalo branco de Napoleão'),
(6, 'Qantas estrelas tem na bandeira do brasil ?'),
(7, 'Quais estados da região sudeste ?'),
(8, 'Quantos países tem no mundo ?'),
(9, 'Quantos estados da região sudeste ?'),
(10, 'Com quantos paus se faz uma canoa ?');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
