-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Jun-2023 às 15:33
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designacaosocial` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `nif` varchar(10) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `codigopostal` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `capitalsocial` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `designacaosocial`, `email`, `telefone`, `nif`, `morada`, `codigopostal`, `localidade`, `capitalsocial`) VALUES
(1, 'Empresa', 'empresa@gmail.com', '123456789', '123456789', 'rua bla bla', '24411111', 'leiria', 1000000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `folha_obra`
--

DROP TABLE IF EXISTS `folha_obra`;
CREATE TABLE IF NOT EXISTS `folha_obra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL,
  `iva_total` decimal(10,2) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cliente_id` int DEFAULT NULL,
  `funcionario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `funcionario_id` (`funcionario_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ivas`
--

DROP TABLE IF EXISTS `ivas`;
CREATE TABLE IF NOT EXISTS `ivas` (
  `iva_id` int NOT NULL AUTO_INCREMENT,
  `percentagem` decimal(4,2) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `em_vigor` tinyint(1) NOT NULL,
  PRIMARY KEY (`iva_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `ivas`
--

INSERT INTO `ivas` (`iva_id`, `percentagem`, `descricao`, `em_vigor`) VALUES
(2, '10.00', '10%', 0),
(3, '5.00', '5%', 1),
(4, '14.00', '14', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `linha_obra`
--

DROP TABLE IF EXISTS `linha_obra`;
CREATE TABLE IF NOT EXISTS `linha_obra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantidade` int DEFAULT NULL,
  `valor_unitario` decimal(10,2) DEFAULT NULL,
  `valor_iva` decimal(10,2) DEFAULT NULL,
  `folha_obra_id` int DEFAULT NULL,
  `servico_referencia` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `folha_obra_id` (`folha_obra_id`),
  KEY `servico_referencia` (`servico_referencia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `referencia` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `preco_hora` decimal(10,2) DEFAULT NULL,
  `iva_id` int DEFAULT NULL,
  PRIMARY KEY (`referencia`),
  KEY `iva_id` (`iva_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`referencia`, `descricao`, `preco_hora`, `iva_id`) VALUES
(2, 'teste1', '12.00', 2),
(3, 'teste1', '12.00', 2),
(4, 'teste1', '12.00', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefone` char(9) DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL,
  `codPostal` char(8) DEFAULT NULL,
  `localidade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `nif` char(9) NOT NULL,
  `role` set('Administrador','Funcionario','Cliente') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nif` (`nif`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `telefone`, `morada`, `codPostal`, `localidade`, `email`, `nif`, `role`) VALUES
(1, 'admin', 'PWS2023', NULL, NULL, NULL, NULL, 'admin', '', 'Administrador'),
(2, 'Margarida', 'hello', '963934731', NULL, NULL, NULL, 'maggie@gmail.com', '249640180', 'Cliente'),
(6, 'lucas', '123', NULL, NULL, NULL, NULL, 'luca', '33333', 'Funcionario'),
(10, 'blabla', '123', NULL, NULL, NULL, NULL, 'blabla@gmail.com', '321654', 'Cliente'),
(11, 'juca', '321', NULL, NULL, NULL, NULL, 'juca@gmail.com', '321', 'Cliente'),
(12, 'teste1', '123', '5646465', 'rua x', '132154', 'leiria', 'teste1@gmail.com', '332132', 'Cliente'),
(13, 'teste2', '123', '3232321', 'rua x', '132154', 'leiria', 'teste2@gmail.com', '3211321', 'Funcionario');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
