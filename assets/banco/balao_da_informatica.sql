-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2018 às 15:10
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balao_da_informatica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'categoria'),
(2, 'testando'),
(3, 'Gabinete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `descricao` mediumtext NOT NULL,
  `url_imagem` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `nome_produto`, `preco`, `descricao`, `url_imagem`) VALUES
(117, 1, 'as', 2565, 'ç.', 'sad'),
(118, 1, 'as', 2565, 'ç.', 'sad'),
(119, 1, 'as', 2565, 'ç.', 'sad'),
(120, 1, 'as', 2565, 'ç.', 'sad'),
(121, 1, 'as', 2565, 'ç.', 'sad'),
(122, 1, 'as', 2565, 'ç.', 'sad'),
(123, 1, 'as', 2565, 'ç.', 'sad'),
(124, 1, 'as', 2565, 'ç.', 'sad'),
(125, 1, 'as', 2565, 'ç.', 'sad'),
(126, 1, 'as', 2565, 'ç.', 'sad'),
(127, 1, 'as', 2565, 'ç.', 'sad'),
(128, 1, 'as', 2565, 'ç.', 'sad'),
(129, 1, 'as', 2565, 'ç.', 'sad'),
(130, 1, 'as', 2565, 'ç.', 'sad'),
(131, 1, 'as', 2565, 'ç.', 'sad'),
(132, 1, 'as', 2565, 'ç.', 'sad'),
(133, 1, 'as', 2565, 'ç.', 'sad'),
(134, 1, 'as', 2565, 'ç.', 'sad'),
(135, 1, 'as', 2565, 'ç.', 'sad'),
(136, 1, 'as', 2565, 'ç.', 'sad'),
(137, 1, 'as', 2565, 'ç.', 'sad'),
(138, 1, 'as', 2565, 'ç.', 'sad'),
(139, 1, 'as', 2565, 'ç.', 'sad'),
(140, 1, 'as', 2565, 'ç.', 'sad'),
(141, 1, 'as', 2565, 'ç.', 'sad'),
(142, 1, 'as', 2565, 'ç.', 'sad'),
(143, 1, 'as', 2565, 'ç.', 'sad'),
(144, 1, 'as', 2565, 'ç.', 'sad'),
(145, 1, 'as', 2565, 'ç.', 'sad'),
(146, 1, 'as', 2565, 'ç.', 'sad'),
(147, 1, 'as', 2565, 'ç.', 'sad'),
(148, 1, 'as', 2565, 'ç.', 'sad'),
(149, 1, 'as', 2565, 'ç.', 'sad'),
(150, 1, 'as', 2565, 'ç.', 'sad'),
(151, 1, 'as', 2565, 'ç.', 'sad'),
(152, 1, 'as', 2565, 'ç.', 'sad'),
(153, 1, 'as', 2565, 'ç.', 'sad'),
(154, 1, 'as', 2565, 'ç.', 'sad'),
(155, 1, 'as', 2565, 'ç.', 'sad'),
(156, 1, 'as', 2565, 'ç.', 'sad'),
(157, 1, 'as', 2565, 'ç.', 'sad'),
(158, 1, 'as', 2565, 'ç.', 'sad'),
(159, 1, 'as', 2565, 'ç.', 'sad'),
(160, 1, 'as', 2565, 'ç.', 'sad'),
(161, 1, 'as', 2565, 'ç.', 'sad'),
(162, 1, 'as', 2565, 'ç.', 'sad'),
(163, 1, 'as', 2565, 'ç.', 'sad'),
(164, 1, 'as', 2565, 'ç.', 'sad'),
(165, 1, 'as', 2565, 'ç.', 'sad'),
(166, 1, 'as', 2565, 'ç.', 'sad'),
(167, 1, 'as', 2565, 'ç.', 'sad'),
(168, 1, 'as', 2565, 'ç.', 'sad'),
(169, 1, 'as', 2565, 'ç.', 'sad'),
(170, 1, 'as', 2565, 'ç.', 'sad'),
(171, 1, 'as', 2565, 'ç.', 'sad'),
(172, 1, 'as', 2565, 'ç.', 'sad'),
(173, 1, 'as', 2565, 'ç.', 'sad'),
(174, 1, 'as', 2565, 'ç.', 'sad'),
(175, 1, 'as', 2565, 'ç.', 'sad'),
(176, 1, 'as', 2565, 'ç.', 'sad'),
(177, 1, 'as', 2565, 'ç.', 'sad'),
(178, 1, 'as', 2565, 'ç.', 'sad'),
(179, 1, 'as', 2565, 'ç.', 'sad'),
(180, 1, 'as', 2565, 'ç.', 'sad'),
(181, 1, 'as', 2565, 'ç.', 'sad'),
(182, 1, 'as', 2565, 'ç.', 'sad'),
(183, 1, 'as', 2565, 'ç.', 'sad'),
(184, 1, 'as', 2565, 'ç.', 'sad'),
(185, 1, 'as', 2565, 'ç.', 'sad'),
(186, 1, 'as', 2565, 'ç.', 'sad'),
(187, 1, 'as', 2565, 'ç.', 'sad'),
(188, 1, 'as', 2565, 'ç.', 'sad'),
(189, 1, 'as', 2565, 'ç.', 'sad'),
(190, 1, 'as', 2565, 'ç.', 'sad'),
(191, 1, 'as', 2565, 'ç.', 'sad'),
(192, 1, 'as', 2565, 'ç.', 'sad'),
(193, 1, 'as', 2565, 'ç.', 'sad'),
(194, 1, 'as', 2565, 'ç.', 'sad'),
(195, 1, 'as', 2565, 'ç.', 'sad'),
(196, 1, 'as', 2565, 'ç.', 'sad'),
(197, 1, 'as', 2565, 'ç.', 'sad'),
(198, 1, 'as', 2565, 'ç.', 'sad'),
(199, 1, 'as', 2565, 'ç.', 'sad'),
(200, 1, 'as', 2565, 'ç.', 'sad'),
(201, 1, 'as', 2565, 'ç.', 'sad'),
(202, 1, 'as', 2565, 'ç.', 'sad'),
(203, 1, 'as', 2565, 'ç.', 'sad'),
(204, 1, 'as', 2565, 'ç.', 'sad'),
(205, 1, 'as', 2565, 'ç.', 'sad'),
(206, 1, 'as', 2565, 'ç.', 'sad'),
(207, 1, 'as', 2565, 'ç.', 'sad'),
(208, 1, 'as', 2565, 'ç.', 'sad'),
(209, 1, 'as', 2565, 'ç.', 'sad'),
(210, 1, 'as', 2565, 'ç.', 'sad'),
(211, 2, 'JosuÃ©', 1, 'NÃ£o suporto mais, vendo por qualquer preÃ§o', 'IMG_20170116_231759272.jpg'),
(212, 1, 'Josue', 25, 'asdasd', 'ExercÃ­cio 1 - Lista.cbp'),
(213, 1, 'ola', 25, 'asdasd', 'ArvBin.h'),
(214, 2, 'asd', 22, 'sada', 'ExercÃ­cio 1 - Lista.cbp'),
(215, 2, 'sad', 55, 'asd', 'NoArv.h'),
(216, 2, 'asdasd', 22, 'asdsd', 'NoArv.h'),
(217, 1, 'asd', 22, 'asd', 'bitnami.css'),
(218, 2, 'asd', 25.01, 'sad', 'favicon.ico'),
(225, 2, 'asd', 55, 'asd', 'favicon.ico'),
(226, 2, 'josue', 25.01, 'sadasd', 'favicon.ico'),
(227, 2, 'asd', 0.19, 'asd', 'favicon.ico'),
(236, 1, 'asd', 52, 'asd', 'favicon.ico'),
(237, 1, 'asd', 52, 'asd', 'favicon.ico'),
(238, 3, 'lab', 25, 'asd', 'note3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`) VALUES
(14, 'josue', '1feff8d6ec1f82f642fc847b6685d271'),
(15, 'almir', '547be849b6fe8b8bfb799fe2413e0f8f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_categoria` (`id_categoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
