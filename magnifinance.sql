-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2023 às 12:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u894713607_noticiasapas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(7) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `curso` varchar(250) NOT NULL,
  `visivel` int(11) NOT NULL,
  `motivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `cpf`, `rg`, `endereco`, `cidade`, `estado`, `curso`, `visivel`, `motivo`) VALUES
(1, 'te', '123', '0', '', '', '', 'Selecionar...', 1, 'falta informações nos dados de cadastros'),
(2, 'Toni', '12345678900', '1234567', 'rua tal', 'itaituba', 'pa', 'Mobile celular', 0, ''),
(6, 'Daniel', '45678912300', '4567891', 'rua abc', 'itaituba', 'pa', 'WEB', 0, ''),
(14, 'Toni', '12345678900', '1234567', 'rua tal', 'itaituba', 'pa', 'Desenvolvimento WEB', 0, ''),
(15, 'Daniel', '45678912300', '4567891', 'rua abc', 'itaituba', 'pa', 'Gráfico', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nomecurso` varchar(50) NOT NULL,
  `disciplina1` varchar(50) NOT NULL,
  `nota1` varchar(3) NOT NULL,
  `nota1-1` varchar(3) NOT NULL,
  `nota1-2` varchar(3) NOT NULL,
  `nota1-3` varchar(3) NOT NULL,
  `disciplina2` varchar(50) NOT NULL,
  `nota2` varchar(3) NOT NULL,
  `nota2-1` varchar(3) NOT NULL,
  `nota2-2` varchar(3) NOT NULL,
  `nota2-3` varchar(3) NOT NULL,
  `disciplina3` varchar(50) NOT NULL,
  `nota3` varchar(3) NOT NULL,
  `nota3-1` varchar(3) NOT NULL,
  `nota3-2` varchar(3) NOT NULL,
  `nota3-3` varchar(3) NOT NULL,
  `disciplina4` varchar(50) NOT NULL,
  `nota4` varchar(3) NOT NULL,
  `nota4-1` varchar(3) NOT NULL,
  `nota4-2` varchar(3) NOT NULL,
  `nota4-3` varchar(3) NOT NULL,
  `disciplina5` varchar(50) NOT NULL,
  `nota5` varchar(3) NOT NULL,
  `nota5-1` varchar(3) NOT NULL,
  `nota5-2` varchar(3) NOT NULL,
  `nota5-3` varchar(3) NOT NULL,
  `disciplina6` varchar(50) NOT NULL,
  `nota6` varchar(3) NOT NULL,
  `nota6-1` varchar(3) NOT NULL,
  `nota6-2` varchar(3) NOT NULL,
  `nota6-3` varchar(3) NOT NULL,
  `disciplina7` varchar(50) NOT NULL,
  `nota7` varchar(3) NOT NULL,
  `nota7-1` varchar(3) NOT NULL,
  `nota7-2` varchar(3) NOT NULL,
  `nota7-3` varchar(3) NOT NULL,
  `disciplina8` varchar(50) NOT NULL,
  `nota8` varchar(3) NOT NULL,
  `nota8-1` varchar(3) NOT NULL,
  `nota8-2` varchar(3) NOT NULL,
  `nota8-3` varchar(3) NOT NULL,
  `disciplina9` varchar(50) NOT NULL,
  `nota9` varchar(3) NOT NULL,
  `nota9-1` varchar(3) NOT NULL,
  `nota9-2` varchar(3) NOT NULL,
  `nota9-3` varchar(3) NOT NULL,
  `disciplina10` varchar(50) NOT NULL,
  `nota10` varchar(3) NOT NULL,
  `nota10-1` varchar(3) NOT NULL,
  `nota10-2` varchar(3) NOT NULL,
  `nota10-3` varchar(3) NOT NULL,
  `visivel` int(11) NOT NULL,
  `motivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nomecurso`, `disciplina1`, `nota1`, `nota1-1`, `nota1-2`, `nota1-3`, `disciplina2`, `nota2`, `nota2-1`, `nota2-2`, `nota2-3`, `disciplina3`, `nota3`, `nota3-1`, `nota3-2`, `nota3-3`, `disciplina4`, `nota4`, `nota4-1`, `nota4-2`, `nota4-3`, `disciplina5`, `nota5`, `nota5-1`, `nota5-2`, `nota5-3`, `disciplina6`, `nota6`, `nota6-1`, `nota6-2`, `nota6-3`, `disciplina7`, `nota7`, `nota7-1`, `nota7-2`, `nota7-3`, `disciplina8`, `nota8`, `nota8-1`, `nota8-2`, `nota8-3`, `disciplina9`, `nota9`, `nota9-1`, `nota9-2`, `nota9-3`, `disciplina10`, `nota10`, `nota10-1`, `nota10-2`, `nota10-3`, `visivel`, `motivo`) VALUES
(2, 'Mobile celular', 'Disciplina1', '0', '0', '0', '0', 'Disciplina2', '0', '0', '0', '0', 'Disciplina3', '0', '0', '0', '0', 'Disciplina4', '0', '0', '0', '0', 'Disciplina4', '0', '0', '0', '0', 'Disciplina3', '0', '0', '0', '0', 'Disciplina2', '0', '0', '0', '0', 'Disciplina1', '0', '0', '0', '0', 'Disciplina3', '0', '0', '0', '0', 'Disciplina2', '0', '0', '0', '0', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `horas` varchar(4) NOT NULL,
  `visivel` int(11) NOT NULL,
  `motivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `disciplina`, `horas`, `visivel`, `motivo`) VALUES
(1, 'Disciplina1', '60', 0, ''),
(2, 'Disciplina2', '40', 0, ''),
(6, 'Disciplina3', '30', 0, ''),
(7, 'Disciplina4', '80', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `nota1` varchar(3) NOT NULL,
  `nota1-1` varchar(3) NOT NULL,
  `nota1-2` varchar(3) NOT NULL,
  `nota1-3` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `nota`
--

INSERT INTO `nota` (`nota1`, `nota1-1`, `nota1-2`, `nota1-3`) VALUES
('2', '3', '2', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `disciplina` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(7) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `visivel` int(11) NOT NULL,
  `motivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `disciplina`, `cpf`, `rg`, `endereco`, `cidade`, `estado`, `visivel`, `motivo`) VALUES
(9, 'Roberto', 'Desenvolvimento', '11122233344', '1245789', 'rua a', 'itb', 'pa', 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
