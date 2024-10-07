-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2024 às 01:06
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
-- Banco de dados: `siquegesso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `controledeentregas`
--

CREATE TABLE `controledeentregas` (
  `id` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `filial` varchar(100) NOT NULL,
  `pdv` int(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `municipio` varchar(200) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `frete` varchar(200) NOT NULL,
  `responsavel` varchar(200) NOT NULL,
  `data_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `controledeentregas`
--

INSERT INTO `controledeentregas` (`id`, `data_cadastro`, `filial`, `pdv`, `endereco`, `bairro`, `municipio`, `cliente`, `frete`, `responsavel`, `data_entrega`) VALUES
(21, '2024-10-07', 'atibaia', 0, 'rua 1', 'atibaia', 'atibaia', 'fulano', 'R$:10', ' alessandro rocha ', '2024-10-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `token` varchar(200) NOT NULL,
  `type` varchar(2) NOT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `birthdate`, `token`, `type`, `avatar`) VALUES
(1, 'aledsrocha@gmail.com', '$2y$10$1ClDqOA5W6lsVSicxt0G.eHWV8YOFMod.pq5ap4.r01CGNMnyLdTq', '          alessandro santos          ', '1995-01-19', 'e7c6b0e1066b6178ac148c76ac3b41ce', '1', 'bbd6312cf53359a485045aae23b96b0d.jpg'),
(2, 'admteste@gmail.com', '$2y$10$ks/fnssIn6h3wS5Sbwqh9eg937jQqihp04ZlvOGVeU0nFSyF5.wdu', ' alessandro rocha ', '1995-01-19', '9dd73d9ba5bfeed700e8f4c86f6bf668', '1', 'a9691456ae7fd3eb43340cb3f885f573.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `controledeentregas`
--
ALTER TABLE `controledeentregas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `controledeentregas`
--
ALTER TABLE `controledeentregas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
