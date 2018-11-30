-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2018 às 14:04
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

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
CREATE DATABASE IF NOT EXISTS `balao_da_informatica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `balao_da_informatica`;

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
(214, 2, 'asd', 22, 'sada', 'balao_da_informatica.sql'),
(218, 2, 'asd', 25.01, 'sad', 'favicon.ico'),
(219, 3, 'Gabinete Gamer Liketec ', 258.71, 'Gabinete Gamer Liketec sem Fonte, com design moderno seguindo as tendÃªncias mundiais.', 'gabinete-gamer-liketec-sem-fonte-mid-tower-usb-3-0-1-fan-led-vermelho-preto-com-lateral-em-vidro-frontal-em-metal-192-b__1541672968_gg.jpg'),
(220, 3, 'Gabinete Gamer Bluecase Branco', 199.88, 'Gabinete Gamer Bluecase Branco sem fonte USB 3.0 BG-015\r\n\r\n\r\n \r\n\r\nEspecificaÃ§Ãµes:\r\n\r\n- CompatÃ­vel com placa mÃ£e ATX e Micro ATX\r\n\r\n- Chapa SPCC com 0,5mm de espessura\r\n\r\n- 1 baia externa de 5,25\"\r\n\r\n- 2 baias de 3,5\"\r\n\r\n- 7 slots de expansÃ£o\r\n\r\n- 1x USB 3.0 \r\n\r\n- 1x USB 1.1 /2.0\r\n\r\n- Ãudio e microfone frontal (P2) \r\n\r\n- Suporte para atÃ© 5 fans (ventoinhas)\r\n\r\n- Com parafusos traseiros recartilhados\r\n\r\n- Tampa lateral transparente\r\n\r\n- Cor: Branca', '94722_1517509750_index_gg.jpg'),
(221, 3, 'Gabinete C3Tech Gamer ATX ', 128.63, 'Gabinete desenvolvido para games e maquinas de alta performance. Lateral em grade metÃ¡lica, portas USB 2.0, saÃ­da e entrada de Ã¡udio no painel.', '71071_index_gg.jpg'),
(222, 3, 'Gabinete C3Tech Full-ATX', 188.12, 'Projetado para quem procura desempenho, estilo e durabilidade o gabinete gamer MT-G300 foi projetado para o jogador exigente. Com um design arrojado ele chama atenÃ§Ã£o por suas linhas fortes e a lateral em acrÃ­lico que dÃ£o toda a personalidade que um produto gamer deve ter. Ele conta com portas USB(2.0 e 3.0), suporte a SSD e saÃ­da de Ã¡udio frontal.', '92417_index_gg.jpg'),
(223, 3, 'Gabinete Deepcool Genome II ROG', 2058.71, 'Gabinete Deepcool Genome II ROG', '95352_1520603884_index_gg.jpg'),
(224, 3, 'Gabinete Coolermaster Mastercase Maker', 1058.71, 'Gabinete Coolermaster Mastercase Maker 5T USB 3.0 Micro ATX MCZ-C5M2T-RW5N', '86365_index_gg.jpg'),
(225, 3, 'Gabinete Gamer Sharkoon Pure Steel', 999, 'O PURE STEEL Ã© um gabinete midi ATX com um amplo espaÃ§o completamente feito em aÃ§o. AtravÃ©s do painel lateral feito em vidro temperado, a vista Ã© ideal para apresentar o hardware de alta qualidade instalado e mostrar o quanto o seu gabinete Ã© bonito por dentro. O design minimalista do gabinete serve como uma tela em branco para idÃ©ias criativas de modificaÃ§Ã£o.', 'gabinete-gamer-sharkoon-pure-steel-sem-fonte-mid-tower-usb-3-0-2-fans-preto-com-lateral-em-vidro-pure-steel-black-atx__1540992860_gg.jpg'),
(226, 3, 'Gabinete ATX Sharkoon', 320.65, 'Gabinete ATX Sharkoon Som Virtual 7.1 Integrado, USB 3.0, Branco - M25-W', '84083_index_gg.jpg'),
(227, 3, 'Gabinete Sharkoon TG5 RGB ATX', 491.65, 'IluminaÃ§Ã£o do gabinete em amarelo? Ou que tal em roxo? Simplesmente decida espontaneamente a qualquer momento! NÃ£o apenas entre duas cores, mas entre 16,8 milhÃµes de cores. GraÃ§as ao gabinete TG5 RGB ATX, isso nÃ£o Ã© um problema. Isso Ã© possÃ­vel atravÃ©s das quatro ventoinhas LED RGB embutidas, bem como do hub RGB forcenido de 6 portas.', '96251_1525463710_gg.jpg'),
(228, 3, 'Gabinete NOX HUMMER LED', 262.24, 'Chassis Nox Hummer ATX / Micro ATX ediÃ§Ã£o especial em branco, com painel lateral janelado em acrÃ­lico transparente, conexÃ£o USB 3.0 e controlador de ventoinhas. IluminaÃ§Ã£o LED configurÃ¡vel em 7 cores diferentes. Suporta instalaÃ§Ã£o de sistemas de refrigeraÃ§Ã£o lÃ­quida.', '93877_1512763589_index_gg.jpg'),
(229, 3, 'Gabinete Gamer Warrior Lateral AcrÃ­lico', 201.07, 'Gabinete Gamer Warrior Lateral AcrÃ­lico com 3 Baias Internas Preto - GA155', '88060_1513797526_index_gg.jpg'),
(230, 3, 'Gabinete NOX HUMMER MC ATX', 249.13, 'Gabinete NOX HUMMER MC ATX, USB 3.0, 2 FANS Inclusos, IluminaÃ§Ã£o de LED NXHUMMERMCB', '89192_index_gg.jpg');

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
(15, 'almir', '547be849b6fe8b8bfb799fe2413e0f8f'),
(16, 'pedro', 'f62cd9fd3c3ec4dd0ecd9cb48fdaf62f'),
(17, 'igor', '3eacd70583843a8268b5bf416727cef5');

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
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Extraindo dados da tabela `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'balao_da_informatica', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"balao_da_informatica\",\"phpmyadmin\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"estructura da tabela @TABLE@\",\"latex_structure_continued_caption\":\"estructura da tabela @TABLE@ (continuaÃ§Ã£o)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"ConteÃºdo da tabela @TABLE@\",\"latex_data_continued_caption\":\"ConteÃºdo da tabela @TABLE@ (continuaÃ§Ã£o)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"balao_da_informatica\",\"table\":\"produto\"},{\"db\":\"balao_da_informatica\",\"table\":\"usuario\"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-11-30 13:04:19', '{\"lang\":\"pt\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
