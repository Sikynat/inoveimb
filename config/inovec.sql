-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2022 às 11:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inovec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `terrenos`
--

CREATE TABLE `terrenos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `descricao` varchar(5000) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `valor` varchar(30) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `terrenos`
--

INSERT INTO `terrenos` (`id`, `titulo`, `descricao`, `foto`, `valor`, `categoria`) VALUES
(74, 'Sitio em Franca', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, tenetur! Amet assumenda magni nemo porro dolore saepe distinctio iste consequatur dicta enim. Aut, iure qui labore totam quod veniam, repellendus laboriosam libero neque aperiam animi modi alias provident? Recusandae exercitationem laborum itaque repellendus animi minima sit, maiores quam amet. Vitae!', 'Fazenda_.jpg sitio.jpeg ', '40,000,00', 'Sitio'),
(75, 'Apartamento em Franca', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, tenetur! Amet assumenda magni nemo porro dolore saepe distinctio iste consequatur dicta enim. Aut, iure qui labore totam quod veniam, repellendus laboriosam libero neque aperiam animi modi alias provident? Recusandae exercitationem laborum itaque repellendus animi minima sit, maiores quam amet. Vitae!', 'ap1.jpg ap2.jpg ', '456777', 'Apartamento'),
(76, 'Casa Em Franca', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, tenetur! Amet assumenda magni nemo porro dolore saepe distinctio iste consequatur dicta enim. Aut, iure qui labore totam quod veniam, repellendus laboriosam libero neque aperiam animi modi alias provident? Recusandae exercitationem laborum itaque repellendus animi minima sit, maiores quam amet. Vitae!', 'casa.jpg sitio.jpeg ', '566666', 'Casa'),
(77, 'Fazenda em patrocinio', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, tenetur! Amet assumenda magni nemo porro dolore saepe distinctio iste consequatur dicta enim. Aut, iure qui labore totam quod veniam, repellendus laboriosam libero neque aperiam animi modi alias provident? Recusandae exercitationem laborum itaque repellendus animi minima sit, maiores quam amet. Vitae!', 'sitio.jpeg ', '50,000,00', 'Fazenda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
(1, 'adm', '1234'),
(2, 'user', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `terrenos`
--
ALTER TABLE `terrenos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `terrenos`
--
ALTER TABLE `terrenos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
