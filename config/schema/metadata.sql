# Host: localhost  (Version 5.5.5-10.1.21-MariaDB)
# Date: 2021-05-06 18:50:15
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "categorias_lojas"
#

CREATE TABLE `categorias_lojas` (
  `id_categorias_lojas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categorias_lojas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "categorias_lojas"
#


#
# Structure for table "categorias_produtos"
#

CREATE TABLE `categorias_produtos` (
  `id_categorias_produtos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categorias_produtos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "categorias_produtos"
#

INSERT INTO `categorias_produtos` VALUES (1,'Eletronicos');

#
# Structure for table "estados"
#

CREATE TABLE `estados` (
  `id_estado` char(2) NOT NULL DEFAULT '',
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "estados"
#

INSERT INTO `estados` VALUES ('1','São Paulo');

#
# Structure for table "enderecos"
#

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `lougradouro` varchar(255) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `loja_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `estado_id` char(2) DEFAULT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `loja_id` (`loja_id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `estado_id` (`estado_id`),
  CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`loja_id`) REFERENCES `lojas` (`id_loja`),
  CONSTRAINT `enderecos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuarios`),
  CONSTRAINT `enderecos_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "enderecos"
#

INSERT INTO `enderecos` VALUES (1,'Rua ','17','1','Marilia','Nova Marilia',1,NULL,'1');

#
# Structure for table "lojas"
#

CREATE TABLE `lojas` (
  `id_loja` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `endereco_id` int(11) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_loja`),
  KEY `endereco_id` (`endereco_id`),
  CONSTRAINT `lojas_ibfk_1` FOREIGN KEY (`endereco_id`) REFERENCES `enderecos` (`id_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "lojas"
#

INSERT INTO `lojas` VALUES (1,'Teste','1234',1,'teste','heronze@gmail.com'),(2,'Teste','1234',NULL,'teste','heronze@gmail.com');

#
# Structure for table "lojascategoria_lojas"
#

CREATE TABLE `lojascategoria_lojas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lojas_id` int(11) DEFAULT NULL,
  `categorias_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lojas_id` (`lojas_id`),
  KEY `categorias_id` (`categorias_id`),
  CONSTRAINT `lojascategoria_lojas_ibfk_1` FOREIGN KEY (`lojas_id`) REFERENCES `lojas` (`id_loja`),
  CONSTRAINT `lojascategoria_lojas_ibfk_2` FOREIGN KEY (`categorias_id`) REFERENCES `categorias_lojas` (`id_categorias_lojas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "lojascategoria_lojas"
#


#
# Structure for table "produtos"
#

CREATE TABLE `produtos` (
  `id_produtos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `sub_categoria_id` int(11) DEFAULT NULL,
  `valor` double(10,2) DEFAULT NULL,
  `descricao` text,
  `loja_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_produtos`),
  KEY `loja_id` (`loja_id`),
  KEY `sub_categoria_id` (`sub_categoria_id`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`loja_id`) REFERENCES `lojas` (`id_loja`),
  CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`sub_categoria_id`) REFERENCES `sub_categoria_produto` (`id_subcategoria_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "produtos"
#

INSERT INTO `produtos` VALUES (2,'Heron José Bueno de Oliveira Almeida',1,10.00,'tese',2);

#
# Structure for table "sub_categoria_produto"
#

CREATE TABLE `sub_categoria_produto` (
  `id_subcategoria_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `categoria_produto_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_subcategoria_produto`),
  KEY `categoria_produto_id` (`categoria_produto_id`),
  CONSTRAINT `sub_categoria_produto_ibfk_1` FOREIGN KEY (`categoria_produto_id`) REFERENCES `categorias_produtos` (`id_categorias_produtos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "sub_categoria_produto"
#

INSERT INTO `sub_categoria_produto` VALUES (1,'TV',1);

#
# Structure for table "telefones"
#

CREATE TABLE `telefones` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(20) DEFAULT NULL,
  `loja_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `loja_id` (`loja_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`loja_id`) REFERENCES `lojas` (`id_loja`),
  CONSTRAINT `telefones_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "telefones"
#

INSERT INTO `telefones` VALUES (1,'14 99 8855995',1,NULL);

#
# Structure for table "usuarios"
#

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'heron','1','1234');
