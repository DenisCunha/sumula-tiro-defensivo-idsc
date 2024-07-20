--
-- Banco de dados: `idsc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atletas`
--

CREATE TABLE IF NOT EXISTS `atletas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `divisao_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `competicao`
--

CREATE TABLE IF NOT EXISTS `competicao` (
  `evento_id` int(11) NOT NULL,
  `nomeevento` varchar(255) NOT NULL,
  `dataevento` varchar(10) NOT NULL,
  `stage` int(2) NOT NULL DEFAULT 1,
  `target` int(2) NOT NULL DEFAULT 1,
  `target1` int(2) NOT NULL DEFAULT 1,
  `shots` int(4) NOT NULL DEFAULT 1,
  `image` varchar(250) NOT NULL,
  `dso_id` int(2) NOT NULL DEFAULT 0,
   PRIMARY KEY (`evento_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `competicao`
--

INSERT INTO `competicao` (`evento_id`, `nomeevento`, `dataevento`, `stage`, `target`, `target1`, `shots`, `image`, `dso_id`) VALUES
(1, 'Treino IDSC - Teste', '28/04/2024', 2, 10, 1, 21, 'asset/img/logoclube.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `divisao`
--

CREATE TABLE IF NOT EXISTS `divisao` (
  `divisao_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`divisao_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `divisao`
--

INSERT INTO `divisao` (`divisao_id`, `nome`) VALUES
(1, 'HP - Hard Pistol'),
(2, 'SP - Soft Pistol'),
(3, 'CP - Custom Pistol'),
(4, 'CL - Classic Pistol'),
(5, 'OP - Optic Pistol'),
(6, 'MP - Mini Pistol'),
(7, 'RP - Rimfire Pistol'),
(8, 'LR - Large Revolver'),
(9, 'HR - Hard Revolver'),
(10, 'CR - Custom Revolver'),
(11, 'MR - Mini Revolver'),
(12, 'RR - Rimfire Revolver'),
(13, 'PS - Pump Shotgun'),
(14, 'SS - Semiauto Shotgun'),
(15, 'CA - Carbine'),
(16, 'OC - Optic Carbine'),
(17, 'PC - Pistol Caliber Carbine'),
(18, 'PCO - Pistol Caliber Optical Carbine'),
(19, 'SC - Shotgun Caliber Carbine'),
(20, 'RC - Rimfire Carbine'),
(21, 'HE - Heavy Multigun'),
(22, 'OM - optic Multigun'),
(23, 'HM - Hard Multigun'),
(24, 'HOM - Hard Optic Multigun'),
(25, 'RM - Rimfire Multigun'),
(26, 'AIR PISTOL (AP)'),
(27, 'AIR CARBINE (AC)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pistas`
--

CREATE TABLE IF NOT EXISTS `pistas` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
  `zero` int(11) NOT NULL,
  `stage` int(2) NOT NULL,
  `dois` int(2) NOT NULL DEFAULT 0,
  `cinco` int(2) NOT NULL DEFAULT 0,
  `miss` int(2) NOT NULL DEFAULT 0,
  `shots` int(4) NOT NULL DEFAULT 0,
  `t1` int(2) NOT NULL,
  `t2` int(2) NOT NULL,
  `t3` int(2) NOT NULL,
  `t4` int(2) NOT NULL,
  `t5` int(2) NOT NULL,
  `t6` int(2) NOT NULL,
  `t7` int(2) NOT NULL,
  `t8` int(2) NOT NULL,
  `t9` int(2) NOT NULL,
  `t10` int(2) NOT NULL,
  `t11` int(2) NOT NULL,
  `m1` int(11) NOT NULL,
  `m2` int(11) NOT NULL,
  `m3` int(11) NOT NULL,
  `m4` int(11) NOT NULL,
  `m5` int(11) NOT NULL,
  `m6` int(11) NOT NULL,
  `ep` int(11) NOT NULL,
  `ae` int(11) NOT NULL,
  `uc` int(11) NOT NULL,
  `ns` int(2) NOT NULL,
  `fs` float(5,2) NOT NULL,
  `timer` float(5,2) NOT NULL,
  `dq` int(1) NOT NULL,
  `total` float(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `total_prova`
--

CREATE TABLE IF NOT EXISTS `total_prova` (
  `id` int(11) NOT NULL,
  `divisao_id` int(2) NOT NULL,
  `nome_id` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
  `p1` float(5,2) NOT NULL DEFAULT 0.00,
  `p2` float(5,2) NOT NULL DEFAULT 0.00,
  `p3` float(5,2) NOT NULL DEFAULT 0.00,
  `p4` float(5,2) NOT NULL DEFAULT 0.00,
  `p5` float(5,2) NOT NULL DEFAULT 0.00,
  `p6` float(5,2) NOT NULL DEFAULT 0.00,
  `p7` float(5,2) NOT NULL DEFAULT 0.00,
  `p8` float(5,2) NOT NULL DEFAULT 0.00,
  `p9` float(5,2) NOT NULL DEFAULT 0.00,
  `p10` float(5,2) NOT NULL DEFAULT 0.00,
  `soma` float(5,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `user_id` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `nivel` int(2) DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

