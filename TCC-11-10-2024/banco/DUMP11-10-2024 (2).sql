-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: rsp_banco
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` enum('Administrador') NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo_documento` enum('CPF','CNPJ') NOT NULL,
  `documento` varchar(14) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `data_contratacao` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (1,'Administrador','marcelo','CPF','124.446.719-89','4321','marcelo@gmail.com','(45) 99813-5467','88021-32','PR','Cascavel','2024-10-11 11:57:45');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido` (
  `codigo_id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) DEFAULT NULL,
  `dataProduto` date DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `nomeCliente` varchar(250) NOT NULL,
  `compra` int(11) NOT NULL,
  PRIMARY KEY (`codigo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,654,'2014-03-03',100,2,'',0),(2,6957,'2005-06-03',250,1,'',0),(3,3547,'2014-08-20',357,8,'',0);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_codigo` int(11) DEFAULT NULL,
  `nome_produto` enum('CARRO','TRATOR','CAMINHÃO','MOTO','MOTONETA') DEFAULT NULL,
  `img_produto` varchar(250) DEFAULT NULL,
  `descricao` varchar(220) DEFAULT NULL,
  `tipo_fabricante` varchar(200) DEFAULT NULL,
  `peca` varchar(250) DEFAULT NULL,
  `qtd_volts` int(11) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_produto`),
  KEY `id_codigo` (`id_codigo`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_codigo`) REFERENCES `pedido` (`codigo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,2,'CARRO','https://images.tcdn.com.br/img/img_prod/593002/induzido_motor_partida_fiat_ducato_vw_eurovan_nissan_frontier_12v_9_dentes_645_1_20190101113955.png','1300/1500/1600 Até 03/72, Fusca, Brasilia, Komb',' BOSCH','Induzido',6,'2024-10-06 15:21:43'),(3,1,'TRATOR','https://www.tratorvelparts.com.br/image/cache/catalog/clickvel/pistaoeaneisaplicaveltratornewholland-1930742/pistaocomaneis8630-8830-1930742imp-2-1200x1200.jpg','Pistão de um Trator da Jonh','ford','Pistão',9,'2024-10-11 13:50:54');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` enum('FISICA','JURIDICA') NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo_documento` varchar(14) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL DEFAULT '+55',
  `cep` varchar(8) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'FISICA','Mario','CPF','123.456.789-01','mario@gmail.com','123','(45) 99023-5461','88451-22','PR','Cascavel','2024-10-11 11:51:22'),(2,'JURIDICA','Americanas','CNPJ','12.345.678/9012-34','americanas@gmail.com','32143','(45) 99012-7437','88154-22','BA','Xique-Xique','2024-10-11 11:55:06');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-11 11:29:57
