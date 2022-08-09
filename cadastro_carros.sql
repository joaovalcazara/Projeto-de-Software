-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2022 às 00:02
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
-- Banco de dados: `cadastro_carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `idCarro` int(11) NOT NULL,
  `nomeCarro` varchar(50) NOT NULL,
  `marcaCarro` varchar(30) NOT NULL,
  `valorCarro` text NOT NULL,
  `anoCarro` int(11) NOT NULL,
  `descricaoCarro` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`idCarro`, `nomeCarro`, `marcaCarro`, `valorCarro`, `anoCarro`, `descricaoCarro`) VALUES
(14, 'Volvo XC90', 'Volvo', ' 509.950', 2022, 'Motor: 2,0 l 4 cilindros em linha Volume de carga: Básica: 262 l / Bancos rebatidos: 1.868 l Dimensões: 4.953 mm C x 1.958 mm L x 1.776 mm A Potência: 462 HP Aceleração de 0 a 100 km/h: 5,4 segundos'),
(15, 'Polo', 'Volkswagen', '109.370', 2022, 'Estilos de carroceria: Hatchback Portas: 5 Aceleração de 0 a 100 km/h: 8,4 - 13 segundos Volume de carga: Básica: 300 l / Bancos rebatidos: 1.071 l Configuração dos cilindros: Motor em linha Dimensões: 4.057 mm C x 1.751 mm L x 1.468-1.477 mm A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`idCarro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `idCarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
