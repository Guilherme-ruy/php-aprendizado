-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2023 às 00:57
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_supermercados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `supermercados`
--

CREATE TABLE `supermercados` (
  `id_mercado` int(11) NOT NULL,
  `nome_fantasia` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `supermercados`
--

INSERT INTO `supermercados` (`id_mercado`, `nome_fantasia`, `latitude`, `longitude`, `status`) VALUES
(1, 'Jaú Serve', '-22.00138051516493', '-47.43459097569256', 'ativo'),
(2, 'Covabra centro', '-22.00036255912177', '-47.42572351211017', 'ativo'),
(3, 'Covabra com post', '-22.011775784773622', '-47.42564756447401', 'ativo'),
(4, 'Bilo', '-21.999028650584695', '-47.43714296799894', 'ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `supermercados`
--
ALTER TABLE `supermercados`
  ADD PRIMARY KEY (`id_mercado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `supermercados`
--
ALTER TABLE `supermercados`
  MODIFY `id_mercado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
