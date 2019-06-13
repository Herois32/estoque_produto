-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2019 às 22:49
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `et_id` int(11) NOT NULL,
  `et_codigo` varchar(15) DEFAULT NULL,
  `et_nome` varchar(150) DEFAULT NULL,
  `et_preco` float(10,3) DEFAULT NULL,
  `et_descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`et_id`, `et_codigo`, `et_nome`, `et_preco`, `et_descricao`) VALUES
(22, 'FMK18273', 'Frigideira', 59.900, 'UtensÃ­lio de cozinha de metal ou barro, de forma normalmente redonda, borda baixa, munido de um cabo comprido, e us. ger. para frigir.'),
(23, 'DDL12879', 'Doce de Leite', 18.500, 'O doce de leite Ã© um doce Ã  base de leite e aÃ§Ãºcar.'),
(24, 'CL30001', 'Celular', 998.000, 'Um telefone celular Ã© um dispositivo portÃ¡til sem fio que permite aos usuÃ¡rios fazer e receber chamadas e enviar mensagens de texto, entre outros recursos.'),
(25, 'CWD015290', 'Computador Lenovo', 1500.000, 'Uma Smart TV Nova 39'),
(26, 'CLL52336', 'Monitor', 1250.250, 'Monitor para Computadores da DELL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`et_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `et_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
