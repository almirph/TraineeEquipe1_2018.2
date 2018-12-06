-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2018 às 20:01
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
(3, 'Gabinete'),
(4, 'teste2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `email`
--

CREATE TABLE `email` (
  `e-mail` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `email`
--

INSERT INTO `email` (`e-mail`) VALUES
('i.westma@gmail.com'),
('leonimatheus1@gmail.com');

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
(224, 3, 'Gabinete Coolermaster Mastercase Maker', 1058.71, 'Gabinete Coolermaster Mastercase Maker 5T USB 3.0 Micro ATX MCZ-C5M2T-RW5N', '86365_index_gg.jpg'),
(225, 3, 'Gabinete Gamer Sharkoon Pure Steel', 999, 'O PURE STEEL Ã© um gabinete midi ATX com um amplo espaÃ§o completamente feito em aÃ§o. AtravÃ©s do painel lateral feito em vidro temperado, a vista Ã© ideal para apresentar o hardware de alta qualidade instalado e mostrar o quanto o seu gabinete Ã© bonito por dentro. O design minimalista do gabinete serve como uma tela em branco para idÃ©ias criativas de modificaÃ§Ã£o.', 'gabinete-gamer-sharkoon-pure-steel-sem-fonte-mid-tower-usb-3-0-2-fans-preto-com-lateral-em-vidro-pure-steel-black-atx__1540992860_gg.jpg'),
(226, 3, 'Gabinete ATX Sharkoon', 320.65, 'Gabinete ATX Sharkoon Som Virtual 7.1 Integrado, USB 3.0, Branco - M25-W', '84083_index_gg.jpg'),
(227, 3, 'Gabinete Sharkoon TG5 RGB ATX', 491.65, 'IluminaÃ§Ã£o do gabinete em amarelo? Ou que tal em roxo? Simplesmente decida espontaneamente a qualquer momento! NÃ£o apenas entre duas cores, mas entre 16,8 milhÃµes de cores. GraÃ§as ao gabinete TG5 RGB ATX, isso nÃ£o Ã© um problema. Isso Ã© possÃ­vel atravÃ©s das quatro ventoinhas LED RGB embutidas, bem como do hub RGB forcenido de 6 portas.', '96251_1525463710_gg.jpg'),
(228, 1, 'okpdsf', 2562, 'sadasd', '76488_1526584582_gg.jpg');

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
(18, 'josue', '1feff8d6ec1f82f642fc847b6685d271');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`e-mail`(200));

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
