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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (3,'Administrador','jaão','','123.456.789-01','123','marcelo@gmail.com','(54) 14531-413434314','85880-32','RJ','cascavel','2024-09-22 14:53:53');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCidade` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEstado` int(11) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
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
  PRIMARY KEY (`codigo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,654,'2014-03-03',100,2),(2,6957,'2005-06-03',250,1),(3,3547,'2014-08-20',357,8);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,1,'CARRO','https://th.bing.com/th/id/OIP.TyxeSfRaDv7GPxxd8U7qbAHaEn?rs=1&pid=ImgDetMain','Procurando um carro econômico e confiável? O Fiat uno é a escolha certa! Baixo consumo de combustível e manutenção barata.','DELCO_REMY','Induzido',12),(2,2,'TRATOR','https://th.bing.com/th/id/R.400f9706d7f87e001720c2cd22cac216?rik=LKQqaa80ulTG%2bw&pid=ImgRaw&r=0','John Deere é sinônimo de qualidade, durabilidade e tecnologia no mundo agrícola. Seus tratores são amplamente reconhecidos por sua performance excepcional e capacidade de operar em diversas condições.','BOSCH','Automático',220),(6,3,'CAMINHÃO','https://trovaomotor.com/wp-content/uploads/2022/10/Volvo-FH-540-caminhao-2048x1365.jpg','O Volvo Euro 6 é a escolha ideal para empresas que buscam um caminhão potente, eficiente e sustentável. Com sua tecnologia de ponta e design inovador, o Volvo Euro 6 oferece o melhor em transporte rodoviário.','Volvo','Pistões e bielas',55);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`




-- APAGAR DATA DE NASCIMENTO
DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` enum('FISICA','JURIDICA') NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo_documento` enum('CPF','CNPJ') NOT NULL,
  `documento` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL DEFAULT '+55',
  `cep` varchar(8) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'FISICA','Marcelo Serconi Junior','','CPF','123.456.789-01','celos@gmail.com','456','2006-10-02','(54) 76536-2987','85805-43','RO','pelourinho','2024-09-22 15:36:21'),(2,'JURIDICA','','casas bahia ','CNPJ','18.949.848/948','celos@gmail','741','0000-00-00','(45) 99818-1548','85805-43','TO','santo amaro','2024-09-22 15:36:53'),(3,'FISICA','João','','','123.456.789-01','marceloseconijuniorjunior@gmail.com','4','0000-00-00','(12) 39836-8678','85805-43','PI','Pelotas','2024-09-22 16:05:58'),(4,'FISICA','João','','','123.456.789-01','marceloseconijuniorjunior@gmail.com','4','2024-09-04','(54) 76536-2985','85805-43','PI','SA','2024-09-22 16:14:58');
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

-- Dump completed on 2024-09-22 13:20:37
