-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2021 às 01:09
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aoba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_lojas`
--

CREATE TABLE `categorias_lojas` (
  `id_categorias_lojas` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_produtos`
--

CREATE TABLE `categorias_produtos` (
  `id_categorias_produtos` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `lougradouro` varchar(255) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `loja_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `estado_id` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` char(2) NOT NULL DEFAULT '',
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lojas`
--

CREATE TABLE `lojas` (
  `id_loja` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `endereco_id` int(11) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lojascategoria_lojas`
--

CREATE TABLE `lojascategoria_lojas` (
  `id` int(11) NOT NULL,
  `lojas_id` int(11) DEFAULT NULL,
  `categorias_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sub_categoria_id` int(11) DEFAULT NULL,
  `valor` double(10,2) DEFAULT NULL,
  `descricao` text,
  `loja_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categoria_produto`
--

CREATE TABLE `sub_categoria_produto` (
  `id_subcategoria_produto` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `categoria_produto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `id_telefone` int(11) NOT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `loja_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `aro_id` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_lojas`
--

CREATE TABLE `usuarios_lojas` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(255) DEFAULT NULL,
  `produtos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias_lojas`
--
ALTER TABLE `categorias_lojas`
  ADD PRIMARY KEY (`id_categorias_lojas`);

--
-- Indexes for table `categorias_produtos`
--
ALTER TABLE `categorias_produtos`
  ADD PRIMARY KEY (`id_categorias_produtos`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `loja_id` (`loja_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `estado_id` (`estado_id`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `lojas`
--
ALTER TABLE `lojas`
  ADD PRIMARY KEY (`id_loja`),
  ADD KEY `endereco_id` (`endereco_id`);

--
-- Indexes for table `lojascategoria_lojas`
--
ALTER TABLE `lojascategoria_lojas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lojas_id` (`lojas_id`),
  ADD KEY `categorias_id` (`categorias_id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`),
  ADD KEY `loja_id` (`loja_id`),
  ADD KEY `sub_categoria_id` (`sub_categoria_id`);

--
-- Indexes for table `sub_categoria_produto`
--
ALTER TABLE `sub_categoria_produto`
  ADD PRIMARY KEY (`id_subcategoria_produto`),
  ADD KEY `categoria_produto_id` (`categoria_produto_id`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id_telefone`),
  ADD KEY `loja_id` (`loja_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Indexes for table `usuarios_lojas`
--
ALTER TABLE `usuarios_lojas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_id` (`usuarios_id`),
  ADD KEY `produtos_id` (`produtos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias_lojas`
--
ALTER TABLE `categorias_lojas`
  MODIFY `id_categorias_lojas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias_produtos`
--
ALTER TABLE `categorias_produtos`
  MODIFY `id_categorias_produtos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lojas`
--
ALTER TABLE `lojas`
  MODIFY `id_loja` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lojascategoria_lojas`
--
ALTER TABLE `lojascategoria_lojas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_categoria_produto`
--
ALTER TABLE `sub_categoria_produto`
  MODIFY `id_subcategoria_produto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `id_telefone` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios_lojas`
--
ALTER TABLE `usuarios_lojas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`loja_id`) REFERENCES `lojas` (`id_loja`),
  ADD CONSTRAINT `endereco_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `endereco_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id_estado`);

--
-- Limitadores para a tabela `lojas`
--
ALTER TABLE `lojas`
  ADD CONSTRAINT `lojas_ibfk_1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`id_endereco`);

--
-- Limitadores para a tabela `lojascategoria_lojas`
--
ALTER TABLE `lojascategoria_lojas`
  ADD CONSTRAINT `lojascategoria_lojas_ibfk_1` FOREIGN KEY (`lojas_id`) REFERENCES `lojas` (`id_loja`),
  ADD CONSTRAINT `lojascategoria_lojas_ibfk_2` FOREIGN KEY (`categorias_id`) REFERENCES `categorias_lojas` (`id_categorias_lojas`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`loja_id`) REFERENCES `lojas` (`id_loja`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`sub_categoria_id`) REFERENCES `sub_categoria_produto` (`id_subcategoria_produto`);

--
-- Limitadores para a tabela `sub_categoria_produto`
--
ALTER TABLE `sub_categoria_produto`
  ADD CONSTRAINT `sub_categoria_produto_ibfk_1` FOREIGN KEY (`categoria_produto_id`) REFERENCES `categorias_produtos` (`id_categorias_produtos`);

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`loja_id`) REFERENCES `lojas` (`id_loja`),
  ADD CONSTRAINT `telefone_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Limitadores para a tabela `usuarios_lojas`
--
ALTER TABLE `usuarios_lojas`
  ADD CONSTRAINT `usuarios_lojas_ibfk_1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `usuarios_lojas_ibfk_2` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id_produtos`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
