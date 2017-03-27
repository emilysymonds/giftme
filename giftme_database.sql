-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 27, 2017 at 08:46 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftme`
--
CREATE DATABASE IF NOT EXISTS `giftme` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `giftme`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_imagen` int(20) NOT NULL,
  `categoria` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `nombre`, `id_imagen`, `categoria`) VALUES
(2, 'Banner2', 141, 8),
(15, 'todos', 163, 0),
(8, 'Banner BebÃ©s', 146, 3),
(13, 'BDAY', 162, 4);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(3, 'Nacimientos'),
(4, 'Cumpleaños'),
(5, 'Aniversario'),
(7, 'Spa'),
(8, 'Novias'),
(9, 'Getwell'),
(13, 'Saludables'),
(14, 'Empresariales'),
(15, 'Gourmet'),
(17, 'Thank you'),
(20, 'Niños'),
(21, 'DÃ­a de la Madre');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Administrator', '{\r\n\"admin\":1,\r\n\"moderator\":1\r\n}'),
(2, 'Standard', '');

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `nombre_archivo` varchar(240) NOT NULL,
  `nombre_real` varchar(240) NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`id`, `nombre_archivo`, `nombre_real`, `producto`) VALUES
(41, '7e53201611ba99009f07b6ce5f89865e.gif', '7e53201611ba99009f07b6ce5f89865e.gif', 96),
(42, '436077610d24e8141621fa2aa47e4b7e.gif', '436077610d24e8141621fa2aa47e4b7e.gif', 97),
(43, 'c9817178b3e8988b8058692b386018fb.gif', 'c9817178b3e8988b8058692b386018fb.gif', 98),
(44, '650cdb05631f31de5deda5e74de810bb.gif', '650cdb05631f31de5deda5e74de810bb.gif', 95),
(45, 'ebc518a3014d248f74262f2ecf5b1653.gif', 'ebc518a3014d248f74262f2ecf5b1653.gif', 100),
(46, '3d65cbacd0067bd6836d0a2db8148bfa.gif', '3d65cbacd0067bd6836d0a2db8148bfa.gif', 101),
(47, '622f456f4623451cb7684eb777bed4ef.gif', '622f456f4623451cb7684eb777bed4ef.gif', 103),
(49, 'e92731ecafa996d9306f450b2a2c7c6e.gif', 'e92731ecafa996d9306f450b2a2c7c6e.gif', 105),
(50, '0b0327419e605808ae8da77b5f30e0e7.gif', '0b0327419e605808ae8da77b5f30e0e7.gif', 106),
(51, '5b008c40bb3d9969fde70097010b10d9.gif', '5b008c40bb3d9969fde70097010b10d9.gif', 107),
(52, '9cf6e25665733aafb202dcbf372b829c.gif', '9cf6e25665733aafb202dcbf372b829c.gif', 108),
(53, 'cdc5b196e012d78dfa283c327295ea0b.gif', 'cdc5b196e012d78dfa283c327295ea0b.gif', 109),
(54, 'aab8226067df82bc65d1630339a2de65.gif', 'aab8226067df82bc65d1630339a2de65.gif', 110),
(55, 'e3154bb7dff93ca99ceecb62bc690a35.gif', 'e3154bb7dff93ca99ceecb62bc690a35.gif', 111),
(56, 'db40087ccc26b89bddcbc8176f745a8d.gif', 'db40087ccc26b89bddcbc8176f745a8d.gif', 102),
(57, '3188be2e3c2a55c35f61c7e3df12093c.gif', '3188be2e3c2a55c35f61c7e3df12093c.gif', 112),
(58, 'e18bd04e4d8569876520c539f6c9f99a.gif', 'e18bd04e4d8569876520c539f6c9f99a.gif', 113),
(60, 'e29a7942fb1a244153b65049ef9a8ff8.gif', 'e29a7942fb1a244153b65049ef9a8ff8.gif', 115),
(61, 'f79eabea7d0bb9d6c6a9ce5a9d1dae1c.gif', 'f79eabea7d0bb9d6c6a9ce5a9d1dae1c.gif', 116),
(62, '6fb39a44602bd4261ebfe66679cba3da.gif', '6fb39a44602bd4261ebfe66679cba3da.gif', 117),
(63, 'aede9abaeb1cdc9ab6730f5764639caf.gif', 'aede9abaeb1cdc9ab6730f5764639caf.gif', 118),
(64, '3806cf531a15587fd79ad5224d5017d9.gif', '3806cf531a15587fd79ad5224d5017d9.gif', 119),
(65, '312c0a783af24269739f0f59bcb4bf04.gif', '312c0a783af24269739f0f59bcb4bf04.gif', 120),
(66, 'f924d8435057317959d799025176a764.gif', 'f924d8435057317959d799025176a764.gif', 121),
(67, '32a946b152dd3eb01bee30eb8ef41794.gif', '32a946b152dd3eb01bee30eb8ef41794.gif', 122),
(68, '55b9a5390a828b51889095019e6e922c.gif', '55b9a5390a828b51889095019e6e922c.gif', 123),
(69, 'c18250e28f06be1855c93588f27a460c.jpg', 'c18250e28f06be1855c93588f27a460c.jpg', 99),
(83, '53c7cf04277709935b0cea221f4ba5c1.gif', '53c7cf04277709935b0cea221f4ba5c1.gif', 124),
(84, 'fba10d6821088468256708703c9f6ef8.gif', 'fba10d6821088468256708703c9f6ef8.gif', 128),
(85, '1e40bfef9afa1c7c955e5516dbf29115.gif', '1e40bfef9afa1c7c955e5516dbf29115.gif', 126),
(86, 'b36c2dce07efe407aee346efb1092406.gif', 'b36c2dce07efe407aee346efb1092406.gif', 129),
(87, 'f56921f95dbc75adfa0d12a1888f9240.gif', 'f56921f95dbc75adfa0d12a1888f9240.gif', 130),
(88, '28e6352c8b42f777b7e5c9a658770cea.gif', '28e6352c8b42f777b7e5c9a658770cea.gif', 131),
(89, '217cbee521e8f1d9586f08985e2cdb99.gif', '217cbee521e8f1d9586f08985e2cdb99.gif', 132),
(90, 'd576654321bb109e2775232dfad40aad.gif', 'd576654321bb109e2775232dfad40aad.gif', 133),
(91, 'd5ed30ffe29df2d1efc9335325e1d64b.jpg', 'd5ed30ffe29df2d1efc9335325e1d64b.jpg', 134),
(96, '32d095bbef04dcd9eb22de280097bae9.jpg', '32d095bbef04dcd9eb22de280097bae9.jpg', 136),
(97, '63c1b9b49080d7f13e8782c36f625e66.gif', '63c1b9b49080d7f13e8782c36f625e66.gif', 137),
(98, '6dc9eb178efea0c0e94f9b27cd9b9383.gif', '6dc9eb178efea0c0e94f9b27cd9b9383.gif', 138),
(99, '1b64d626ff5c2da4b12ca1ba2265fc60.gif', '1b64d626ff5c2da4b12ca1ba2265fc60.gif', 139),
(100, '94e61475bc38efa16243ba0efbd19f78.gif', '94e61475bc38efa16243ba0efbd19f78.gif', 140),
(101, 'f157c41ee32b9ff7710bab544c2c830d.gif', 'f157c41ee32b9ff7710bab544c2c830d.gif', 141),
(102, '9250a4eae2723e0cf47905fd7d8874b8.gif', '9250a4eae2723e0cf47905fd7d8874b8.gif', 142),
(103, '37abc6407ca72fba9c87565ae88d02c9.gif', '37abc6407ca72fba9c87565ae88d02c9.gif', 143),
(104, 'b5b22e65c5fa3cf11b2be9dcedbf24e4.gif', 'b5b22e65c5fa3cf11b2be9dcedbf24e4.gif', 143),
(105, '09f6f396f0aefe6a67162b0e96fe1f4c.gif', '09f6f396f0aefe6a67162b0e96fe1f4c.gif', 143),
(106, '1b4c10c64e8ec50c5d3d697d64be0e1c.gif', '1b4c10c64e8ec50c5d3d697d64be0e1c.gif', 144),
(107, 'fd923d3cf6f60e703748143349533118.gif', 'fd923d3cf6f60e703748143349533118.gif', 144),
(108, '52cb411f5c74eee85bb3008bfaa912fb.gif', '52cb411f5c74eee85bb3008bfaa912fb.gif', 144),
(109, 'a431dba5f07b3e6d8cd23fdf54909e04.gif', 'a431dba5f07b3e6d8cd23fdf54909e04.gif', 145),
(110, '8cf61c98a120600cea7749137d169244.gif', '8cf61c98a120600cea7749137d169244.gif', 146),
(111, '013ebf413931e5ba7b71d0327eb8bd78.gif', '013ebf413931e5ba7b71d0327eb8bd78.gif', 114),
(112, 'd50ac139216ba1c80cf3393521ca104b.gif', 'd50ac139216ba1c80cf3393521ca104b.gif', 147),
(113, 'd507ae67f8700243ee5f0345eb3a3758.gif', 'd507ae67f8700243ee5f0345eb3a3758.gif', 148),
(116, '4436eae567c7405c445ae759e640ca7f.gif', '4436eae567c7405c445ae759e640ca7f.gif', 149),
(117, '8be700f159cfb99dde94803defdd717e.gif', '8be700f159cfb99dde94803defdd717e.gif', 150),
(123, 'f3fdfa789c87ce503b437c510dd3040d.gif', 'f3fdfa789c87ce503b437c510dd3040d.gif', 151),
(124, 'f808940bc575653b49e6952748c768d7.gif', 'f808940bc575653b49e6952748c768d7.gif', 152),
(125, '26fa33698b762bfa6e199bad9cad6fa4.gif', '26fa33698b762bfa6e199bad9cad6fa4.gif', 155),
(127, 'ddb78fe194af3b38083c68197dfe6132.gif', 'ddb78fe194af3b38083c68197dfe6132.gif', 157),
(128, '4d021d9ee0bc0f235eaa04439bc1907f.gif', '4d021d9ee0bc0f235eaa04439bc1907f.gif', 158),
(129, '03c1ffcf89c0bef21f1b72f48f80cbbc.gif', '03c1ffcf89c0bef21f1b72f48f80cbbc.gif', 159),
(130, '6079ea729105402e0d52ca14b5a109a1.gif', '6079ea729105402e0d52ca14b5a109a1.gif', 160),
(131, '8eb5b6ee0cc841c4b5904534d62ea3ae.gif', '8eb5b6ee0cc841c4b5904534d62ea3ae.gif', 161),
(132, '13b383f1b0e6f808e59f91afb6620fe3.gif', '13b383f1b0e6f808e59f91afb6620fe3.gif', 157),
(133, 'b9c98d4fd0f9a9ec594d40e2daafe60f.gif', 'b9c98d4fd0f9a9ec594d40e2daafe60f.gif', 162),
(134, 'b585a744887b381d630c7ce08fa7f3fe.gif', 'b585a744887b381d630c7ce08fa7f3fe.gif', 156),
(135, 'f75bbb957259d9a80fecc86d1aa32d59.gif', 'f75bbb957259d9a80fecc86d1aa32d59.gif', 135),
(136, '06d035706d5aaa9450e601ff0a0ee7b2.jpg', '06d035706d5aaa9450e601ff0a0ee7b2.jpg', 153),
(137, '60406f3a5bd81ad0aa1ed751e5463275.gif', '60406f3a5bd81ad0aa1ed751e5463275.gif', 154),
(138, '227cc7ab156e71ac98e4bb5414924a2d.jpg', '227cc7ab156e71ac98e4bb5414924a2d.jpg', 163),
(139, '603e61dbfb015ea724f8204b02cd9078.jpg', '603e61dbfb015ea724f8204b02cd9078.jpg', 164),
(140, 'f2ec8abcce8476f9a5571cc10156aeb8.png', 'f2ec8abcce8476f9a5571cc10156aeb8.png', 0),
(141, '26c33d530416ef1e9262b1e76a640eb1.png', '26c33d530416ef1e9262b1e76a640eb1.png', 0),
(146, '3b60820258cc513cf849641323b886c2.png', '3b60820258cc513cf849641323b886c2.png', 0),
(149, '8803a80d58594f30c44c2963fd48c108.gif', '8803a80d58594f30c44c2963fd48c108.gif', 166),
(150, '239a6f242e5f3c6a4ed08aad1f146f1d.gif', '239a6f242e5f3c6a4ed08aad1f146f1d.gif', 167),
(151, '66e98d2804cf6024bd3f09354bcfa2f8.gif', '66e98d2804cf6024bd3f09354bcfa2f8.gif', 169),
(152, 'ace46c1ab2b9a624097ad9bdae98759c.gif', 'ace46c1ab2b9a624097ad9bdae98759c.gif', 165),
(153, 'd75a179ac2861b9fa0cd8fe16928200c.gif', 'd75a179ac2861b9fa0cd8fe16928200c.gif', 168),
(154, '835b8a1e48b306cf1b7cdf2f22ac4b01.gif', '835b8a1e48b306cf1b7cdf2f22ac4b01.gif', 170),
(155, '1f5f790ba355434167a5cd43cd2f41d0.gif', '1f5f790ba355434167a5cd43cd2f41d0.gif', 171),
(156, '506b3eccd57529078170faa2cccdabdf.gif', '506b3eccd57529078170faa2cccdabdf.gif', 172),
(157, 'bd2ff3b8a11062708176ec38bd2a0eeb.gif', 'bd2ff3b8a11062708176ec38bd2a0eeb.gif', 173),
(158, 'e1ccf2519f49e733b66832bdf06ddb98.jpg', 'e1ccf2519f49e733b66832bdf06ddb98.jpg', 174),
(159, '307dd5f65b5206d152080e85a1a34fc1.gif', '307dd5f65b5206d152080e85a1a34fc1.gif', 175),
(162, '956871cd84fbde9517317908f76faf28.jpg', '956871cd84fbde9517317908f76faf28.jpg', 0),
(163, '5794c5f90d52cd83704a7602e0ac350f.png', '5794c5f90d52cd83704a7602e0ac350f.png', 0),
(164, 'ecca59af8c358f8b241b18cd3c5bc20f.jpg', 'ecca59af8c358f8b241b18cd3c5bc20f.jpg', 176),
(165, 'e2daf13c4110d75865ca7713e202aa64.jpg', 'e2daf13c4110d75865ca7713e202aa64.jpg', 177),
(166, '727141f08fd9542589deb0ed4f7607e3.jpg', '727141f08fd9542589deb0ed4f7607e3.jpg', 179);

-- --------------------------------------------------------

--
-- Table structure for table `prod_cat`
--

CREATE TABLE `prod_cat` (
  `categoria` int(11) NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_cat`
--

INSERT INTO `prod_cat` (`categoria`, `producto`) VALUES
(3, 102),
(3, 108),
(3, 109),
(3, 110),
(3, 111),
(3, 112),
(3, 113),
(3, 114),
(3, 115),
(3, 116),
(3, 143),
(3, 144),
(3, 145),
(3, 146),
(3, 147),
(3, 148),
(3, 149),
(3, 150),
(4, 96),
(4, 98),
(4, 101),
(4, 103),
(4, 105),
(4, 106),
(4, 107),
(4, 117),
(4, 119),
(4, 123),
(4, 132),
(4, 133),
(4, 134),
(4, 135),
(4, 136),
(4, 153),
(4, 154),
(4, 163),
(4, 164),
(4, 168),
(4, 169),
(4, 171),
(4, 173),
(4, 174),
(4, 176),
(5, 98),
(5, 101),
(5, 117),
(5, 118),
(5, 119),
(5, 120),
(5, 121),
(5, 122),
(5, 123),
(5, 133),
(5, 135),
(5, 136),
(5, 163),
(5, 164),
(7, 101),
(7, 152),
(7, 155),
(7, 171),
(8, 124),
(8, 126),
(8, 128),
(9, 131),
(13, 129),
(13, 130),
(14, 135),
(14, 136),
(14, 156),
(14, 160),
(14, 163),
(14, 164),
(14, 171),
(14, 173),
(14, 174),
(15, 135),
(15, 136),
(15, 156),
(15, 160),
(15, 163),
(15, 164),
(17, 151),
(20, 132),
(20, 165),
(20, 166),
(20, 167),
(20, 168),
(20, 169),
(21, 96),
(21, 100),
(21, 176),
(21, 177),
(21, 178),
(21, 179);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `descripcion` text NOT NULL,
  `iva` decimal(20,2) NOT NULL,
  `subtotal` decimal(20,2) NOT NULL,
  `total` int(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(3) NOT NULL DEFAULT 'off' COMMENT 'on/off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `iva`, `subtotal`, `total`, `cantidad`, `estado`) VALUES
(95, 'Buen DÃ­a MamÃ¡', 'Canasta de mimbre\r\nTaza \" Mi mamÃ¡ es la mejor\"\r\nSobre NescafÃ© Cappuccino\r\nSobre TÃ© Twinings \r\nBarquillos Caprice\r\nLata Galletas Danesas\r\nCartel \" Happy MotherÂ´s Day\"\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 790, 10, 'off'),
(96, 'I Love my Mom', 'Lata rosada con cartel \" I love my mom\"\r\nChocolate Milka Almendras\r\nTwix\r\nM&m 40grs\r\nSnickers\r\nChocolate \"Feliz dÃ­a\"\r\nBon o Bon\r\nTarjeta con mensaje personal\r\nEnvÃ­o\r\n', '0.00', '0.00', 590, 10, 'on'),
(97, 'Sweetheart Mom', 'Lata rosada con corazÃ³n \"Mom\"\r\nFlor blanca\r\nCaramelera Cavendish Mixed Fruits\r\nToblerone blanco\r\nFerrero Rocher x 3\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 690, 6, 'off'),
(98, 'Feliz dÃ­a!', 'Set de bandeja con 3 latas blancas\r\n- 5 bon o bon\r\n- Caramelos Butter toffee Dulce de Leche\r\n- Oblea Bis\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 550, 15, 'on'),
(99, 'Home is wherever mum is', 'Balde ovalado de hojalata amarillo con cartel \"Home is Wherever Mom is\"\r\nCrema Dove Go Fresh\r\nBarquillos Caprice\r\nSobre TÃ© Twinings\r\nNecessaire a lunares\r\nChocolate Milka Almendras\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 850, 20, 'on'),
(100, 'Best Mom', 'Caja madera blanca con cartel \"Best Mom in the World\"\r\nTwix\r\nCaramelera Cavendish Mixed Fruits\r\nMIlka Leger\r\nFerrero Rocher x 3\r\nSnikcer\r\nBarquillos Caprice\r\nTarjeta con mensaje personal\r\nEnvÃ­o\r\n', '0.00', '0.00', 980, 10, 'on'),
(101, 'She\'s the queen', 'Caja de madera rosada con cartel \"Mom you are the queen\"\r\nNecessaire a lunares\r\nCrema Hinds Intrahidratante\r\nCepillo de pelo\r\nEsponja \r\nJabÃ³n Dove\r\nTarjeta con mensaje personal\r\nEnvio', '0.00', '0.00', 840, 10, 'off'),
(102, 'Hello Little Boy!', 'Balde ovalado de hojalata violeta\r\nSet de 3: Body, remera, babero\r\nMordillo\r\nColonia JohnsonÂ´s Baby\r\nGorro bebe\r\nCartel \" Hello Little Baby\"\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 1150, 20, 'off'),
(103, 'Green Birthday', 'Balde de hojalata verde con cartel \"Happy Birthday\"\r\nTwix\r\nBis\r\nOblea Bon o Bon\r\nm&m \r\nBombÃ³n Bon o Bon\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 600, 15, 'on'),
(105, 'Enjoy Today', 'Balde ovalado de hojalata amarillo con cartel \"Enjoy Today\"\r\nBis\r\nMilka de almendras\r\nTableta BatÃ³n\r\nToblerone\r\nTwix\r\nm&m\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 780, 15, 'on'),
(106, 'Pink Birthday', 'Balde rosado con cartel \"Happy Birthday\"\r\nBis\r\nMilka Almendras\r\nm&m\r\nTwix\r\nSnickers\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 630, 15, 'on'),
(107, 'Happy Birthday', 'Balde de hojalata violeta con cartel \"Happy Birthday\"\r\nMilka Leger de Almendras\r\nOblea bon o bon\r\nm&m\r\nTwix\r\nBombÃ³n bon o bon\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 630, 15, 'on'),
(108, 'Blue Baby', 'Caja madera blanca con cartel \"ItÂ´s a boy!\"\r\nSet x3 CarterÂ´s\r\nToallitas JohnsonÂ´s\r\nTalco JohnsonÂ´s\r\nJabÃ³n JohnsonÂ´s Baby\r\nMordillo\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 1150, 15, 'on'),
(109, 'Pink Baby', 'Caja madera blanca con cartel \"ItÂ´s a girl!\"\r\nSet x3 CarterÂ´s\r\nToallitas JohnsonÂ´s\r\nTalco JohnsonÂ´s\r\nJabÃ³n JohnsonÂ´s Baby\r\nMordillo\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 1150, 15, 'on'),
(110, 'Bath Time Girl', 'Balde con flores blanco\r\nToallitas JohnsonÂ´s Baby\r\nShampoo JohnsonÂ´s Baby\r\nColonia JohnsonÂ´s Baby\r\nTalco JohnsonÂ´s Baby\r\nJabÃ³n JohnsonÂ´s Baby\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido\r\n\r\n', '0.00', '0.00', 940, 5, 'on'),
(111, 'Bath Time Boy', 'Balde con flores verde\r\nToallitas JohnsonÂ´s Baby\r\nShampoo JohnsonÂ´s Baby\r\nColonia JohnsonÂ´s Baby\r\nTalco JohnsonÂ´s Baby\r\nJabÃ³n JohnsonÂ´s Baby\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 940, 5, 'on'),
(112, 'Hello Little Girl!', 'Balde ovalado de hojalata amarillo\r\nSet de 3: Body, remera, babero\r\nMordillo\r\nColonia JohnsonÂ´s Baby\r\nGorro bebe\r\nCartel \" Hello Little Baby\"\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 1150, 15, 'off'),
(113, 'ItÂ´s a Boy!', 'Lata celeste con elefante\r\nBody CarterÂ´s\r\nGorrito \r\nOsito de peluche\r\nCartel \"ItÂ´s a Boy!\"\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 640, 20, 'off'),
(114, 'ItÂ´s a Girl!', 'Lata rosada con elefante\r\nBody CarterÂ´s\r\nGorrito \r\nPerrito de peluche\r\nCartel \"ItÂ´s a Girl!\"\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 640, 30, 'off'),
(115, 'Primeros DÃ­as Nena', 'Caja de madera blanca con banderas \"Baby Girl\"\r\nBody CarterÂ´s\r\nPack 6 paÃ±ales reciÃ©n nacido\r\nMordillo\r\nToallitas JohnsonÂ´s Baby\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 870, 10, 'on'),
(116, 'Primeros DÃ­as VarÃ³n', 'Caja de madera blanca con banderas \"Baby Boy\"\r\nBody CarterÂ´s\r\nPack 6 paÃ±ales reciÃ©n nacido\r\nMordillo\r\nToallitas Babysec\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 810, 10, 'on'),
(117, 'All You Need is Love', 'Canasta Roja \r\nPapas LayÂ´s\r\nTwistos\r\n2 cervezas Pilsen\r\nStickletti Chio\r\nPringles Chicas\r\nSaladix\r\nPizarra Personalizable\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 690, 20, 'on'),
(118, 'Flower Power', 'Lata de hojalata fucsia\r\n5 flores blancas \r\n7 bombones bon o bon\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 640, 5, 'off'),
(119, 'I HEART You', 'Lata roja con lunares y corazÃ³n grande\r\nBis\r\nSnickers\r\nTwix\r\nm&m\r\nBombÃ³n bon o bon\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 660, 2, 'on'),
(120, 'I Love You', 'Frasco de vidrio con cartel \"I Love you!\"\r\nBombones bon o bon\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 420, 2, 'on'),
(121, 'Love Story', 'Lata roja con cartel \"Love Story\"\r\nMilka Leger Almendras\r\nm&m\r\nToblerone\r\nTwix\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 640, 5, 'on'),
(122, 'Muffins', 'Caja decorada \r\n20 muffins de chocolate\r\nCorazones o \"Happy Birthday\"\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido\r\nLos muffins se deben pedir con 48 horas de anticipaciÃ³n.', '0.00', '0.00', 590, 10, 'off'),
(123, 'XOXO', 'Caja blanca de madera con cartel \"XOXO\"\r\nFerrero Rocher x 8\r\nChampagne ChandÃ³n chico\r\nRana de peluche con corazÃ³n\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 1090, 2, 'on'),
(124, 'Bride to be', 'Caja de madera blanca\r\n\r\nTaza \"I Do\"\r\nTaza \" Me Too\"\r\nFlor Blanca\r\nToblerone chocolate blanco\r\nChocolate personalizado \"Bride to Be\"\r\nChocolate personalizado con los nombres de los novios\r\nBon o bon chocolate blanco\r\nCartel \"Bride to be\"\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 950, 10, 'on'),
(126, 'Save the date', 'Caja de madera blanca\r\n\r\n2 copas de champagne\r\nChampagne Chandon Rose\r\nChocolate personalizado con fecha de casamiento\r\nFerrero rocher x 3\r\nCartel con foto novios\r\n\r\nTarjeta personal\r\nEnvÃ­o incluido', '0.00', '0.00', 690, 10, 'on'),
(128, 'Relax and say I Do', 'Caja blanca de madera\r\n\r\nCrema corporal Victoria Secret\r\nNecessaire a lunares\r\nEsponja blanca\r\nFlor Blanca\r\nCartel \" Keep calm and say I Do\"\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido\r\n', '0.00', '0.00', 1100, 10, 'on'),
(129, 'Gluten Free', 'Â¡Todos los productos son aptos para celÃ­acos!\r\n\r\nCanasta verde\r\nGalletas GullÃ³n chocolate \r\nCadbury Almendras\r\nCadbury Intense\r\nBarra cereales Mixed Nuts - original\r\nBarra cereales Mixed Nuts - nueces y castaÃ±as\r\nDeli chips Manzana 22g\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 790, 10, 'on'),
(130, 'No es pecado', 'Productos 100% Light para regalar a quienes estÃ¡n a dieta o les gusta cuidarse!!\r\n\r\nCanasta rosada\r\nChocolate Haas LIght con almendras 100g\r\nChocolate Haas LIght 30g\r\nDulce de Leche los Nietitos DietÃ©tico 320g\r\nCoca Cola Light Mini\r\nBarra de cereales cereal mix light\r\nChocolate Georgalos sin azÃºcar agregada\r\nAlfajor Portezuelo Nutrilate\r\nCaramelos BC sin azÃºcar\r\n\r\nTarjeta con mensaje personal\r\nEnvio incluido', '0.00', '0.00', 950, 10, 'on'),
(131, 'Get Well', 'No hay nada que los chocolates no puedan mejor!\r\n\r\nBalde rosado con banderÃ³n GET WELL ( hay mÃ¡s colores)\r\nBis Lacta 200 g\r\nChocolate Milka 70g\r\nMym \r\nTwix\r\n\r\nMensaje con tarjeta personal y envÃ­o incluido\r\n', '0.00', '0.00', 650, 10, 'on'),
(132, 'Piece of cake', '2 pedazos de torta de cartÃ³n\r\n\r\nAdentro: caramelos, bombones, chupetines, chocolates, etc.\r\n\r\nArmamos el mix que vos quieras!\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 550, 20, 'on'),
(133, 'Relax and Enjoy', '1 champagnera con cinta de tela\r\n- 2 cervezas Pilsen 300cc\r\n- Mym 40g\r\n- Toblerone 100g\r\n- Snicker 52g\r\n\r\nIncluye tarjeta con mensaje personal y el envio', '0.00', '0.00', 670, 20, 'on'),
(134, 'Make a wish', 'Lata celeste con cartel \"Happy Birthday\" \r\n\r\nMilka Ledger Almendras 70g\r\nSnicker \r\nTwix\r\n2 bon o bon chocolate\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 550, 10, 'on'),
(135, 'Sweet Taste', 'Balde blanco con flores\r\n\r\nCaramelos Cavendish & Harvey Fruit Candies 300g\r\nPastillas de chocolate Droste Holland 100g\r\nFerrero Rocher x 3\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluÃ­do', '0.00', '0.00', 870, 10, 'on'),
(136, 'Gourmet Box', 'Caja de madera blanca\r\n\r\nCaramelera Cavendish\r\nBarquillos Capricce\r\nMilka Alemndras 70g\r\nTwix  45g\r\nSnicker 52g\r\nFerrero Rocher x 3\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 1100, 10, 'on'),
(137, 'Abuela Golosa', 'Lata rosada con cartel \"Feliz DÃ­a Abuela\"\r\nTaza \"I Love my Grandma\"\r\nTÃ© Twinings English Breakfast\r\nMilka Leger 40g\r\nTwix\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal\r\n', '0.00', '0.00', 460, 20, 'on'),
(138, 'Best Grandpa', 'Taza \"I Love my Grandpa\"\r\nFerrero Rocher x3\r\n2 cafÃ© Capuccino NestlÃ©\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 350, 10, 'on'),
(139, 'Desayuno Abuelos', 'Canasta roja con cartel \"Feliz dÃ­a Abuelitos\"\r\nTaza \"I Love my Grandma\"\r\nTaza \"I Love my Grandpa\"\r\n2 cafÃ©s Capuccino NestlÃ©\r\n2 tÃ©s Twinings English Breakfast\r\nAmandita Lacta 200gr.\r\nLata de galletas Danesas\r\nBarquillos Bolero chocolate\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 950, 15, 'on'),
(140, 'Happy Day!', 'Canasta verde\r\nTaza \"I Love my Grandpa\"\r\nBarquillos Bolero chocolate\r\nFerrero Rocher x3\r\nNescafÃ© Capuccino NestlÃ©\r\nCaramelera Cavendish&Harvey\r\nCartel \"Feliz DÃ­a Abuelo\"\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 770, 15, 'on'),
(141, 'Nice Day!', 'Canasta rosada\r\nTaza \"I Love my Grandma\"\r\nBarquillos Bolero limÃ³n\r\nFerrero Rocher x3\r\nTÃ© Twinings English Breakfast\r\nCaramelera Cavendish&Harvey\r\nCartel \"Feliz DÃ­a Abuela\"\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 770, 15, 'on'),
(142, 'Best Grandma', 'Taza \"I Love my Grandma\"\r\nFerrero Rocher x3\r\n2 tÃ©s Twinings English Breakfast\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 350, 10, 'on'),
(143, 'Blue Bear', 'Canasta blanca y celeste con osito\r\nToallitas hÃºmedas Johnson\'s Baby\r\nColonia Johnson\'s Baby\r\nJabÃ³n Johnson\'s Baby\r\n4 paÃ±ales Huggies para reciÃ©n nacidos\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 1500, 10, 'on'),
(144, 'Pink Bear', 'Canasta blanca y rosada con osito\r\nToallitas hÃºmedas Johnson\'s Baby\r\nColonia Johnson\'s Baby\r\nJabÃ³n Johnson\'s Baby\r\n4 paÃ±ales Huggies para reciÃ©n nacidos\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 1500, 10, 'on'),
(145, 'Little Elephant Boy', 'Maceta de metal blanca\r\nBody CarterÂ´s\r\nColonia JohnsonÂ´s Baby\r\nElefantito decorativo \r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal\r\n', '0.00', '0.00', 850, 10, 'on'),
(146, 'Little Elephant Girl', 'Maceta de metal rosada\r\nBody CarterÂ´s\r\nColonia JohnsonÂ´s Baby\r\nElefantito decorativo \r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 850, 10, 'on'),
(147, 'Safari Girl', 'Maceta de metal blanca rectangular\r\nSet x 3- Pijama, body y babero\r\nToallitas HÃºmedas Johnson\'s Baby\r\nMordillo rosado\r\nColonia Johnson\'s Baby\r\nPizarra personalizable con nombre del bebÃ©\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 1300, 10, 'on'),
(148, 'DaddyÂ´s Boy', 'Maceta de metal celeste rectangular\r\nSet x 3- Pijama, body y babero\r\nToallitas HÃºmedas Johnson\'s Baby\r\nMordillo celeste\r\nColonia Johnson\'s Baby\r\nPizarra personalizable con nombre del bebÃ©\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 1300, 10, 'on'),
(149, 'Welcome Baby Boy', 'Canasta de fibra natural sea grass\r\nPizarra personalizada con el nombre del bebe\r\nPeluche oso grande\r\nMordedor \r\nGorrito celeste\r\nToallitas hÃºmedas JohnsonÂ´s Baby  \r\nPaÃ±ales Huggies reciÃ©n nacido 20 unidades\r\nShampoo JohnsonÂ´s Baby  Fragancia Prolongada 200 ml\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluÃ­do', '0.00', '0.00', 1700, 10, 'on'),
(150, 'Welcome Baby Girl', 'Canasta de fibra natural sea grass\r\nPizarra personalizada con el nombre del bebe\r\nMordedor \r\nToallitas hÃºmedas JohnsonÂ´s Baby  \r\nPaÃ±ales Huggies reciÃ©n nacido 20 unidades\r\nShampoo Johnson  Fragancia Prolongada 200 ml\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluÃ­do', '0.00', '0.00', 1700, 10, 'on'),
(151, 'Thank you', 'Lata con banderÃ­n \"Thankyou\"\r\nBis\r\nMym\r\nTwix\r\nSnicker\r\nMilka Ledger\r\nBocadito La Pataia\r\nBombon\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o', '0.00', '0.00', 660, 20, 'on'),
(152, 'Relax time', '- Maceta de hojalata ovalada (opciÃ³n violeta o amarilla)\r\n- Necessaire lunares\r\n- Crema Dove Sensitive 200m\r\n- JabÃ³n Dove\r\n- Gel de ducha Rain Gel \r\n- Piedra anatÃ³mica\r\n- Esponja de baÃ±o\r\n- Cepillo de pelo\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o', '0.00', '0.00', 950, 20, 'on'),
(153, 'Sister', 'Taza Sister\r\nMym\r\nMilka ledger almendras\r\nStock bon o bon\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o', '0.00', '0.00', 380, 2, 'off'),
(154, 'Enjoy your day', 'Balde de hojalata violeta\r\nTaza Happy Birthday (varios diseÃ±os)\r\nMym\r\nChocolate Milka \r\nToblerone\r\nSnicker\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o\r\n', '0.00', '0.00', 650, 10, 'on'),
(155, 'Pink Spa', 'Balde blanco de flores\r\nNeccessaire rosado de lunares\r\nCrema Victoria Secret\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o incluido', '0.00', '0.00', 790, 20, 'on'),
(156, 'Noche de picada', 'Canasta de mimbre con tapa\r\nChio Maxi Mix 125grs\r\nAceitunas en frasco rellenas de queso azul - Serpis\r\nPringles Originales 74grs\r\nSnyder\'s of Hanover\r\nGarrapiÃ±ada Pralinetos\r\nMani Ultje 50gr\r\nTwistos de queso\r\nChio Crackings\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o\r\n', '0.00', '0.00', 1350, 10, 'on'),
(157, 'Wake me up!', 'Canasta de mimbre con moÃ±a\r\nTaza Mr. Beard.\r\n6 alfajores Portezuelo Black\r\nJugo de naranja Dairyco 500ml\r\nChocolate Milka \"Te quiero mucho\"\r\nGalletitas MILANO de Pepperidge Farm 170g\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 740, 10, 'on'),
(158, 'My Old Man', 'Caja de madera rectangular con cinta y cartel \"I Love Dad!\"\r\nChio Maxi Mix 125gr\r\nAceitunas rellenas Serpies\r\nQueso Camembert\r\nSnyderÂ´s of Hanover\r\nGarrapiÃ±ada Pralineto Santa Helena 120gr\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 1000, 10, 'on'),
(159, 'Oh My Pappa!', 'Canasta de mimbre rectangular\r\n2 cervezas Corona 355 cmÂ³\r\nManÃ­ 355 cmÂ³\r\nCobata decorativa\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal\r\n', '0.00', '0.00', 590, 10, 'on'),
(160, 'Papa DonÂ´t Preach', 'Tabla de madera para picar\r\nVino Don Pascual 750ml\r\nQueso Azul Rosenborg 100gr\r\nCrackers Twistos 100gr\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 890, 6, 'on'),
(161, 'Super Daddy', 'Jarra cervecera con cartel decorativo \"Best Dad\"\r\nChocolate Milka \"Te quiero mucho\"\r\nm&m 40gr\r\nSnicker 52gr\r\nTwix bar 45gr\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 460, 6, 'on'),
(162, 'Papa was a Rolling Stone', 'Canasta roja\r\nPapas LayÂ´s\r\nTwistos\r\nPringles Originals\r\nMani Ultje 50gr\r\nChio Cracking 100gr\r\nSaladix\r\nCartel \"To the Best Dad in the World\"\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 700, 15, 'on'),
(163, 'Gran picada', 'Canasta de mimbre con tapa\r\nVino Don Pascual\r\nAceitunas en frasco rellenas de queso azul - Serpis\r\nPringles Originales 74grs\r\nSnyder\'s of Hanover\r\nGarrapiÃ±ada Pralinetos\r\nMani Ultje 50gr\r\nGalletas twisto\r\nQueso Camembert Talar 100g\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o', '0.00', '0.00', 1500, 20, 'on'),
(164, 'Canasta para dos', 'Canasta de mimbre con tapa\r\n2 cervezas Corona\r\nChio Maxi Mix 125grs\r\nSaladix de jamÃ³n\r\nToblerone chocolate blanco\r\nPringles Originales 74grs\r\nSnyder\'s of Hanover\r\nChio Crackings\r\nMani Ultje 50gr\r\n\r\n\r\nTarjeta con mensaje personal\r\nEnvÃ­o', '0.00', '0.00', 1360, 10, 'on'),
(165, 'Pink Girl', 'Lata Rosada\r\nBis Lacta\r\nChocolate Milka\r\nTwix\r\nm&m\r\nSnicker\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 550, 5, 'on'),
(166, 'Blue Boy', 'Lata celeste\r\nTableta batÃ³n de chocolate\r\nCaramelos yummy Mogul\r\nM&m\r\nTwix\r\nManÃ­ de chocolate Bibs\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 550, 10, 'on'),
(167, 'Para todos', 'Balde violeta ovalado\r\nm&m 200g\r\nBis Lacta\r\nNerds \r\nKit Kat Pop Choc\r\nMilka Ledger 100g\r\nBarra Bon o Bon\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 860, 10, 'on'),
(168, 'Flower Fruit', 'Balde floreado\r\nTableta batÃ³n\r\nMani con chocolate Bibs\r\nYummis Mogul\r\nNerds\r\nChocolate chokito\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 490, 5, 'off'),
(169, 'Happy day', 'Lata roja con cartel \"Feliz DÃ­a\"\r\nMilka Leger\r\nManÃ­ con chocolate Bibs\r\nTwix\r\nYummies Mogul\r\nm&m 52g\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal\r\n', '0.00', '0.00', 480, 10, 'on'),
(170, 'Coffee Moment', 'Bandeja de mimbre rectangular\r\nAmanditas\r\nToblerone\r\nTaza \"No sÃ© cÃ³mo lo hacÃ©s. Gracias. Para la mejor Secretaria\"\r\nCafÃ©\r\nLata con diseÃ±o\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 790, 10, 'on'),
(171, 'Sweet Spa', 'Maceta de metal con asas\r\nNecessaire rosado\r\nFerrero Rocher x3\r\nCrema Dove\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 690, 5, 'on'),
(172, 'Good Morning', 'Bandeja floreada\r\nTaza \"No sÃ© cÃ³mo lo hacÃ©s. Gracias. Para la mejor Secretaria\"\r\nGreen Tea with Gingseng and Honey\r\nCafÃ© NescafÃ©\r\nTÃ© Twinings\r\nAmandita 2006\r\n\r\nEnvÃ­o incluido\r\nTarjeta con mensaje personal', '0.00', '0.00', 680, 3, 'on'),
(173, 'Little Pause', 'Maceta de metal con asas\r\nFerrero Rocher x3\r\nCaramelera 300g Cavendish&Harvey', '0.00', '0.00', 740, 5, 'on'),
(174, 'Tea Time', 'Maceta de metal con asas\r\nGreen Tea with Ginseng and Honey\r\nBrownie Choco Nuez\r\nFerrero Rocher x3', '0.00', '0.00', 790, 4, 'on'),
(175, 'Feliz DÃ­a', 'Lata rosada con cartel \"Feliz DÃ­a\"\r\nBis Lacta\r\nm&m\r\nTwix\r\nChocolate Milka\r\nBombÃ³n bon o bon\r\n', '0.00', '0.00', 630, 10, 'on'),
(176, 'Top Mom', 'Canasta de mimbre\r\nCaramelera Cavendish\r\nAmanditas Lacta\r\nChampagne Chandon Brut\r\nBarquillo de chocolate Caprice\r\nFerrero Rocher x 3\r\n\r\n', '0.00', '0.00', 1200, 10, 'on'),
(177, 'Flower Mom', 'Balde rosado\r\nRosa blaca\r\nCaramelera Cavendish\r\nFerrero Rocher x 3\r\nChocolate Cadbury Almendras', '0.00', '0.00', 740, 7, 'on'),
(178, 'Desde bien temprano', 'Bandeja de mimbre\r\nTaza Mama\r\nCapuccino\r\nTe Twinnings\r\nAmanditas Lacta\r\nBarquillos bolero de limÃ³n\r\nAlfajorcitos Portezuelo x 6', '0.00', '0.00', 790, 6, 'on'),
(179, 'Cuidate MamÃ¡', 'Lata metalica Rosada', '0.00', '0.00', 950, 6, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `joined`, `group`) VALUES
(16, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '', 'Emily Symonds', '2015-04-21 16:23:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_session`
--

INSERT INTO `users_session` (`id`, `user_id`, `hash`) VALUES
(4, 14, '16d9f9f82eb8cbf8fe19adf46f81b235f8cbe3ba53abb32016d37ce47dbb4c40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_cat`
--
ALTER TABLE `prod_cat`
  ADD PRIMARY KEY (`categoria`,`producto`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
