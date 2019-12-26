-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Dez-2019 às 02:07
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculos`
--

CREATE TABLE `curriculos` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `idade` int(3) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  `experiencia` varchar(200) NOT NULL,
  `data_nascimento` date NOT NULL,
  `observacoes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curriculos`
--

INSERT INTO `curriculos` (`id`, `nome_completo`, `email`, `cpf`, `idade`, `formacao`, `experiencia`, `data_nascimento`, `observacoes`) VALUES
(15, 'Francisco Leandro Araujo Felix', 'lehinfo.felix@gmail.com', '088.767.122-67', 35, 'Curso técnico em informática', 'Estágio remunerado 300 horas', '2002-10-11', 'Altamente flexível, alegre e companheiro'),
(16, 'Thalyson de Oliveira Lima', 'thalysonolliver39@gmail.com', '088.767.122-67', 16, 'Curso técnico em informática', 'Estágio remunerado 300 horas', '2003-04-27', 'Altamente flexível, alegre e companheiro'),
(17, 'Priscila Vieira da Costa', 'Privc14@gmail.com', '641.619.430-91', 16, 'Curso técnico em informática', 'Estágio remunerado 300 horas', '2003-02-14', 'Altamente flexível, alegre e companheira'),
(18, 'Hilara Giselly Macedo Bitu', 'hilaramacedoo@gmail.com', '827.372.891.76', 16, 'Curso técnico em informática', 'Estágio remunerado 300 horas', '2003-02-28', 'Altamente flexível, alegre e companheira'),
(33, 'Hugo Oliveira Firme', 'hugooliveirafirme080802@gmail.com', '093.099.133-88', 17, 'Curso técnico em informática', 'Estágio remunerado 300 horas', '2002-08-08', 'Altamente flexível, alegre e companheiro'),
(34, 'Emanoel Olival Pereira Martins', 'Olivaltutoriais77@gmail.com', '017.987.654-52', 15, 'Curso técnico em informática', 'Estágio remunerado 300 horas', '2003-12-25', 'Altamente flexível, alegre e companheiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `name`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Leandro', 'Felix', 'lehinfo.felix@gmail.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10'),
(2, 'Jezmael', 'Basílio', 'jezmaelbasilio@gmail.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10'),
(3, 'Thalyson', 'Oliveira', 'thalysonolliver39@gmail.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10'),
(4, 'Priscila', 'Costa', 'Privc14@gmail.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10'),
(5, 'Hilara', 'Macedo', 'hilaramacedoo@gmail.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10'),
(6, 'Olival', 'Martins', 'Olivaltutoriais77@gmail.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10'),
(7, 'Hugo', 'Oliveira', 'hugooliveirafirme080802@gmail.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curriculos`
--
ALTER TABLE `curriculos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curriculos`
--
ALTER TABLE `curriculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
