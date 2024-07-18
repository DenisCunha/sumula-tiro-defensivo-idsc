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
  `user_id` int(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `competicao`
--

CREATE TABLE IF NOT EXISTS `competicao` (
  `evento_id` int(11) NOT NULL,
  `nomeevento` varchar(255) NOT NULL,
  `dataevento` varchar(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `dso_id` int(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `competicao`
--

INSERT INTO `competicao` (`evento_id`, `nomeevento`, `dataevento`, `image`, `dso_id`) VALUES
(1, 'Treino IDSC - Teste', '28/04/2024', 'asset/img/logoclube.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `divisao`
--

CREATE TABLE IF NOT EXISTS `divisao` (
  `divisao_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `divisao`
--

INSERT INTO `divisao` (`divisao_id`, `nome`) VALUES
(1, 'HP - Hard Pistol'),
(2, 'SP - Soft Pistol'),
(3, 'CP - Custom Pistol'),
(4, 'OP - Optic Pistol'),
(5, 'HR - Hard Revolver');

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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
  `zero` int(11) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados2`
--

CREATE TABLE IF NOT EXISTS `resultados2` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` varchar(55) NOT NULL,
  `competicao_id` int(2) NOT NULL,
  `zero` int(11) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados3`
--

CREATE TABLE IF NOT EXISTS `resultados3` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` varchar(55) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados4`
--

CREATE TABLE IF NOT EXISTS `resultados4` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` varchar(55) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados5`
--

CREATE TABLE IF NOT EXISTS `resultados5` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados6`
--

CREATE TABLE IF NOT EXISTS `resultados6` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados7`
--

CREATE TABLE IF NOT EXISTS `resultados7` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados8`
--

CREATE TABLE IF NOT EXISTS `resultados8` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados9`
--

CREATE TABLE IF NOT EXISTS `resultados9` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados10`
--

CREATE TABLE IF NOT EXISTS `resultados10` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `divisao` int(2) NOT NULL,
  `competicao_id` int(2) NOT NULL,
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
  `total` float(5,2) NOT NULL
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
  `soma` float(5,2) NOT NULL DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `user_id` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `nivel` int(2) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atletas`
--
ALTER TABLE `atletas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `competicao`
--
ALTER TABLE `competicao`
  ADD PRIMARY KEY (`evento_id`);

--
-- Índices para tabela `divisao`
--
ALTER TABLE `divisao`
  ADD PRIMARY KEY (`divisao_id`);

--
-- Índices para tabela `pistas`
--
ALTER TABLE `pistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados2`
--
ALTER TABLE `resultados2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados3`
--
ALTER TABLE `resultados3`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados4`
--
ALTER TABLE `resultados4`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados5`
--
ALTER TABLE `resultados5`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados6`
--
ALTER TABLE `resultados6`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados7`
--
ALTER TABLE `resultados7`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados8`
--
ALTER TABLE `resultados8`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados9`
--
ALTER TABLE `resultados9`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados10`
--
ALTER TABLE `resultados10`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `total_prova`
--
ALTER TABLE `total_prova`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atletas`
--
ALTER TABLE `atletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `competicao`
--
ALTER TABLE `competicao`
  MODIFY `evento_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `divisao`
--
ALTER TABLE `divisao`
  MODIFY `divisao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pistas`
--
ALTER TABLE `pistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados2`
--
ALTER TABLE `resultados2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados3`
--
ALTER TABLE `resultados3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados4`
--
ALTER TABLE `resultados4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados5`
--
ALTER TABLE `resultados5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados6`
--
ALTER TABLE `resultados6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados7`
--
ALTER TABLE `resultados7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados8`
--
ALTER TABLE `resultados8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados9`
--
ALTER TABLE `resultados9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultados10`
--
ALTER TABLE `resultados10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `total_prova`
--
ALTER TABLE `total_prova`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

