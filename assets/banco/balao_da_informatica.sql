-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2018 às 03:44
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
(3, 'Gabinete'),
(4, 'Headset'),
(5, 'Processadores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `email`
--

CREATE TABLE `email` (
  `e-mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `email`
--

INSERT INTO `email` (`e-mail`) VALUES
('barbosa1@ice.ufjf.br'),
('gustavo.morais@engenharia.ufjf.br'),
('i.westma@gmail.com'),
('josuedelgadoheringer928@gmail.com'),
('josuedelgadoheringer98@gmail.com'),
('lara14.alvim@gmail.com'),
('phelipear@gmail.com');

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
(219, 3, 'Gabinete Gamer Liketec', 258.71, 'Gabinete Gamer Liketec sem Fonte, com design moderno seguindo as tendÃªncias mundiais.', 'gabinete-gamer-liketec-sem-fonte-mid-tower-usb-3-0-1-fan-led-vermelho-preto-com-lateral-em-vidro-frontal-em-metal-192-b__1541672968_gg.jpg'),
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
(230, 3, 'Gabinete NOX HUMMER MC ATX', 249.13, 'Gabinete NOX HUMMER MC ATX, USB 3.0, 2 FANS Inclusos, IluminaÃ§Ã£o de LED NXHUMMERMCB', '89192_index_gg.jpg'),
(256, 4, 'Headset Gamer HyperX', 315.68, 'O HyperX Cloud Stinger HX-HSCS-BK/LA Ã© o headset ideal para jogadores que procuram leveza e conforto, qualidade de som superior e maior praticidade. Com apenas 275 gramas, ele Ã© confortÃ¡vel no seu pescoÃ§o e seus fones de ouvido giram em um Ã¢ngulo de 90 graus para um melhor encaixe.', '81132_index_gg.jpg'),
(258, 4, 'Headphone JBL Bluetooth V750', 1529.29, 'A sua vida, a sua mÃºsica, o seu conforto â€“ o novo JBL Everest Elite 750NC foi totalmente desenhado para vocÃª. Projetado de modo inteligente, ele permite que vocÃª desfrute da liberdade sem fio com atÃ© 20 horas de prazer sonoro em uma Ãºnica carga. Em modo de Cancelamento de ruÃ­do adaptÃ¡vel (Adaptive Noise Cancelling, ANC), controle o que vocÃª quer ouvir por atÃ© 15 horas. O lendÃ¡rio som JBL Pro Audio com recarga rÃ¡pida de 3 horas, microfone com cancelamento de eco para chamadas de viva-voz, estojo rÃ­gido e compacto, e design plano e dobrÃ¡vel, fazem desses fones de ouvido um companheiro de viagens por excelÃªncia. Meticulosamente trabalhado com materiais premium e concebido para um encaixe perfeito e conforto duradouro, esses elegantes fones de ouvido vÃªm em acabamentos metÃ¡licos e coloridos. Os recursos do aplicativo My JBL Headphones incluem atualizaÃ§Ãµes remotas que preparam os fones de ouvido para o futuro. A calibragem de som automÃ¡tica TruNote personaliza o desempenho do Ã¡udio com base no encaixe do aparelho ao ouvido, fornecendo a versÃ£o de mÃºsica mais autÃªntica possÃ­vel.', '97584_4_1532701520_gg.jpg'),
(269, 4, 'Headset Gamer Logitech G231', 299.88, 'Jogos nÃ£o se limitam a grÃ¡ficos. O som completa a imagem. Usando drivers de neodÃ­mio de 40 mm, o G231 produz som estÃ©reo de alta qualidade para manter vocÃª envolvido no jogo do comeÃ§o ao fim.', '87565_index_gg.jpg'),
(271, 4, 'Headset Gamer Logitech G933', 999.88, 'Qualidade de Ã¡udio incomparÃ¡vel!', '76983_index_gg.jpg'),
(272, 4, 'Headset Gamer Razer Kraken Essential', 352.82, 'Mergulhe na plenitude sonora dos jogos com o Razer Kraken Essential. OuÃ§a tudo em um som surround virtual imersivo que pode ser personalizado por meio do software de calibraÃ§Ã£o Razer Surround. Um microfone anti ruÃ­do garante que o jogo em equipe a as chamadas VOIP sejam realizados com absoluta clareza.', '76488_1526584582_gg.jpg'),
(273, 4, 'Headset Gamer Razer Kraken 7.1', 735.18, 'Headset Gamer Razer Kraken 7.1 V2 Chroma Oval - USB', '84458_index_gg.jpg'),
(274, 4, 'Headset Gamer Corsair P2', 326.94, 'O CORSAIR HS50 Stereo Gaming Headset oferece o conforto, a qualidade de Ã¡udio e a durabilidade necessÃ¡rios para muitas horas de uso.', '95021_1519387638_index_gg.jpg'),
(275, 4, 'Headset Gamer Warrior 2.0', 174, 'Headset Gamer Warrior 2.0 com LED USB Preto e Azul - PH244', '94481_1516714240_index_gg.jpg'),
(276, 4, 'Headset Gamer Corsair Dolby 7.1', 572.82, 'O headset VOID RGB USB oferece conforto excepcional, desempenho de Ã¡udio Ã©pico e a lendÃ¡ria durabilidade da CORSAIR para possibilitar a melhor experiÃªncia com jogos.', '93759_1511281525_index_gg.jpg'),
(277, 5, 'Processador Intel Core i7-8700', 1822.11, 'Processador Intel i7-8700 Coffee Lake 8a GeraÃ§Ã£o, Cache 12MB, 3.2GHz (4.6GHz Max Turbo), LGA 1151 Intel UHD Graphics 630 - BX80684I78700', '93112_index_gg.jpg'),
(278, 5, 'Processador AMD Ryzen 5 2600', 1117.53, 'Processador AMD Ryzen 5 2600 c/ Wraith Stealth Cooler, Six Core, Cache 19MB, 3.4GHz (Max Turbo 3.9GHz) AM4 - YD2600BBAFBOX', '95557_1522844873_index_gg.jpg'),
(279, 5, 'Processador Intel Core i5-9600k', 1882.23, 'CompatÃ­vel apenas com as placas-mÃ£e baseadas no chipset da sÃ©rie 300, o processador Core i5-9600K de 3.7 GHz e seis nÃºcleos LGA 1151 da Intel Ã© projetado para jogos, criaÃ§Ã£o e produtividade.', '98765_1539958742_index_gg.jpg'),
(287, 5, 'Processador Intel Core i3-8100', 749.89, 'Processador Intel i3-8100 Coffee Lake 8a GeraÃ§Ã£o, Cache 6MB, 3.6GHz, LGA 1151 Intel UHD Graphics 630', '93110_index_gg.jpg'),
(288, 5, 'Processador AMD A8 9600 Bristol Ridge', 352.82, 'Processador AMD A8 9600 Bristol Ridge, Quad-Core, Cache 2MB, 3.1GHz (3.4GHz Max Turbo), AM4', '92998_index_gg.jpg'),
(289, 5, 'Processador AMD Athlon 200GE', 324.59, 'FrequÃªncia de clock de 3.2 GHz, Cache de prÃ©-busca inteligente de 5 MB soquete AM4, atualizÃ¡vel para Ryzen, suporte DDR4, eficiente TDP de 35W refrigerador de CPU silencioso incluÃ­do.', '92998_index_gg.jpg'),
(290, 5, 'Processador Intel Core i9-9900k', 3294, 'Processador Intel Core i9-9900k Coffee Lake Refresh 9a GeraÃ§Ã£o, Cache 16MB, 3.6GHz (5.0GHz Max Turbo), LGA 1151', 'processador-intel-core-i9-9900k-coffee-lake-refresh-9a-geracao-cache-16mb-3-6ghz-5-0ghz-max-turbo-lga-1151-bx80684i99900k_1541618745_gg.jpg'),
(291, 5, 'Processador Intel Core i9-7900x', 5999.88, 'Processador Intel Core i9-7900x Kaby Lake-X 7a GeraÃ§Ã£o, Cache 13.75MB, 3.3GHz (4.3GHz Max Turbo), LGA 2066', '90447_index_gg.jpg'),
(292, 5, 'Processador Intel Pentium Gold G5500', 511, 'Processador Intel Pentium Gold G5500 Coffee Lake 8a GeraÃ§Ã£o, Cache 4MB, 3.8Ghz, LGA 1151, Intel HD Graphics 630', '96637_1526067798_index_gg.jpg'),
(293, 5, 'Processador AMD Ryzen Threadripper 1950X', 4322.11, 'Processador AMD Ryzen Threadripper 1950X, Hexadeca-Core, Cache 40MB, 3.4GHz (4GHz Max Turbo)', '91502_index_gg.jpg'),
(294, 5, 'Processador AMD Ryzen Threadripper 2990WX', 10722.1, 'O primeiro processador de 32 nÃºcleos do mundo e o processador para desktop mais poderoso do mundo Ã© um sÃ³.', '98073_1534861064_index_gg.jpg'),
(295, 4, 'Headset Asus Cerberus', 315.18, 'Headset Asus Cerberus Preto e Vermelho', '94593_1516879291_index_gg.jpg'),
(296, 4, 'Headset Gamer C3 Tech Flycatcher', 79.88, 'Desenvolvido com belo design, lhe da conforto e uma Ã³tima experiÃªncia de Ã¡udio, tem isolamento acÃºstico e microfone, ideal para uma boa partida do seu game favorito.', '98508_1537819511_index_gg.jpg'),
(297, 4, 'Headset Gamer Steelseries Arctis 3', 612.82, 'Headset Gamer Steelseries Arctis 3 Blue 7.1', '95889_1523034763_index_gg.jpg'),
(298, 5, 'Processador Intel Celeron G3930', 221.06, 'Processador Intel Celeron G3930 Kaby Lake, Cache 2MB, 2.9GHz, LGA 1151, Intel HD Graphics 610 ', '86327_index_gg.jpg');

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
(14, 'josue', '93a68f83b1f798de2d623a5b1a06d6ec'),
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
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`e-mail`);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
