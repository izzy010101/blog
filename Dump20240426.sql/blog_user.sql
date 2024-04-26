-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: blog
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passwordHash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint DEFAULT NULL,
  `logged_in` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'sadsfdghf','nikolic.zlatko.isidora2222@gmail.com','$2y$10$NteaG4GQDLXkPnaOiLaG5uxw0aj77hBvBKSOlylbvCxvYbm0kkw12',0,0),(2,'isidora','defwrg@dfg','$2y$10$if.cc2cKUrFmNNBSqS8GN.MdNLgRU8t4sp/eXMNpoKZrroIS3vngi',0,0),(3,'dfg','sdfg@gmail.com','$2y$10$F9KEGdzmlT6JB.ymdoqOjuT7IO.O0hbGGRZJG0rtjGjW9PlOX70MK',0,0),(6,'isidoraaaaa','mancyyyy@gmail.com','$2y$10$XwB9ixPlH.7XZdqtAdpmpO0zwN5.SKGUgQTchFzFO7N4LucbttsNS',0,0),(8,'Isidora','nikolic.zlatko.isidora@gmail.com','xyz321@$2y$10$Gb3jsfxSkbGVsSS79rNm5etMn42XPIhvjRSWp8ppnxq.8Gq37hS32',NULL,NULL),(9,'isidora','isidora@cargoxinc.com','xyz321@$2y$10$JO8fYTgzj00B52Zvb4EmouMqTh2gtPAmgGsqGQ5xVTWO/iEjCFhV6',NULL,NULL),(10,'isidora','defwrg@dfg.commmm','xyz321@$2y$10$0dtZ.elRTre.Qz1tqB6R3eOHf0RpkkJReCvrIt.9rGkG9rhItV06O',NULL,NULL),(11,'Milana','vipovka@vip.com','xyz321@$2y$10$Xh9u9Na8Gd64WG0ZZ.k3sOjQxLkyhOh85.7m.6oUY5IuskoIMltW2',NULL,0),(12,'isidora','isidota@yahoo.com','xyz321@$2y$10$o5FLOV6bBRqLSGtZw0PTTeqDKC9vEstQUUtFuktYeD23xARPqooLy',NULL,NULL),(13,'isidora','isidota@protonmail.com','xyz321@$2y$10$vBQZYrybrfK4mXsswwyhU.7YUQPj1G.CB3sZsjyd/MEqwARHCMcXG',NULL,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-26  5:02:35
