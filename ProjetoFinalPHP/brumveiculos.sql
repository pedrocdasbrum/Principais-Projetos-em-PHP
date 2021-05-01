-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2020 às 20:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `brumveiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brumveiculos`
--

CREATE TABLE `brumveiculos` (
  `idcompra` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `idade` int(3) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `carro` varchar(60) NOT NULL,
  `cpf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `brumveiculos`
--

INSERT INTO `brumveiculos` (`idcompra`, `nome`, `idade`, `telefone`, `endereco`, `carro`, `cpf`) VALUES
(38, 'João', 22, '(51) 97432-8129', 'Avenida Bento Gonçalves', 'Ford Ka', '982.123.632-54'),
(39, 'Pedro', 19, '(51) 97218-5321', 'Porto Alegre', 'Ford Ka', '874.432.477-82'),
(40, 'Ritinhaaaaaaaaa', 10, '(51) 97846-3252', 'Canoas, Rua Desconhecida', 'Renault Sandero', '987.245.321-98'),
(41, 'Pedro Caetano ', 19, '(51) 97836-2235', 'Avenida Bento Gonçalves', 'Fiat Argo', '874.321.224.-98');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `brumveiculos`
--
ALTER TABLE `brumveiculos`
  ADD PRIMARY KEY (`idcompra`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `brumveiculos`
--
ALTER TABLE `brumveiculos`
  MODIFY `idcompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
