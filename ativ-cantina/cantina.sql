-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/02/2025 às 02:55
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cantina`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `imagem`) VALUES
(1, 'Rodízio de Pizza', 'Pizzas doces e salgadas por um preço acessível', 50.00, 'https://images.unsplash.com/photo-1593560708920-61dd98c46a4e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
(2, 'Lasanha', 'Lasanha para 4 pessoas', 50.00, 'https://images.unsplash.com/photo-1574894709920-11b28e7367e3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
(3, 'Espaguete', 'Espaguete com molho de tomate caseiro', 30.00, 'https://images.unsplash.com/photo-1598866594230-a7c12756260f?q=80&w=1416&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
(4, 'Vinho Italiano Suave', 'Vinho Italiano Suave Tinto', 60.00, 'https://images.unsplash.com/photo-1474722883778-792e7990302f?q=80&w=1382&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
(5, 'Amaretti', 'Biscoitos italianos, originários da região do Piemonte, feitos com amêndoas, açúcar e claras de ovos', 20.00, 'https://images.unsplash.com/photo-1593629718348-0b98ae35ad3f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
(6, 'Cannoli', 'Cannoli (no singular em italiano, cannolo, e em siciliano, cannolu) é uma sobremesa proveniente da Sicília, que consiste em uma massa doce frita, em formato de tubo, recheada com um creme de ricota.', 20.00, 'https://images.unsplash.com/photo-1600975814842-69bd3df9c798?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`) VALUES
(1, 'Refeições no local', 'A cantina oferece um menu completo de pratos italianos, incluindo massas, pizzas, carnes, aves, peixes e frutos do mar, saladas, sopas e sobremesas. Os pratos são preparados com ingredientes frescos e de alta qualidade, seguindo as receitas tradicionais italianas.'),
(2, 'Eventos especiais', 'A cantina pode organizar eventos especiais como jantares temáticos, degustações de vinho, noites de música italiana e outras atividades para promover a cultura italiana.'),
(3, 'Take-away e delivery', 'A cantina oferece serviços de take-away e delivery para clientes que desejam desfrutar da culinária italiana em casa ou no trabalho. Temos embalagens adequadas para transportar os alimentos com segurança e manter a qualidade dos pratos.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
