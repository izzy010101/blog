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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `authorId` int NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishedAt` datetime DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_post_user` (`authorId`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,11,'2020: A Year of Resilience and Reflection','2024-05-02 04:42:00','In the annals of history, 2020 will be remembered as a year unlike any other. Defined by unforeseen challenges and profound change, it tested the resilience of individuals and societies worldwide. From the relentless grip of a global pandemic to social upheaval and economic uncertainty, the year demanded adaptability and perseverance on an unprecedented scale. Yet, amidst the chaos, moments of unity and compassion emerged, reminding us of the indomitable human spirit. As we look back, let us reflect on the lessons learned, the bonds forged, and the seeds of hope planted in the face of adversity. In the crucible of 2020, we discovered our capacity for resilience and the power of solidarity to carry us forward into an uncertain future.','662b75e559d06_2020.jpg'),(2,11,'The Heartbeat of Home','2024-05-09 04:39:00','Family is the cornerstone of our existence, the compass that guides us through life&#039;s journey. In the embrace of loved ones, we find solace, strength, and belonging. From the shared laughter around the dinner table to the quiet moments of understanding, familial bonds weave a tapestry of memories that shape our identity and nourish our souls. Through thick and thin, family stands as a sanctuary of unconditional love, a beacon of hope in times of darkness. Join us as we delve into the rich tapestry of family life, exploring the myriad joys and challenges that unite us in the warm embrace of kinship.','662b759e26af1_family.jpg'),(6,11,'Exploring the Artistry of Fashion','2024-05-02 04:34:00','Fashion is more than just fabric and stitches; it&#039;s a canvas for self-expression, a language spoken through style. From the runway to the streets, it weaves together culture, history, and innovation into a tapestry of creativity. With each garment, designers paint a picture of identity and aspiration, inviting us to step into new personas with every outfit. Fashion transcends trends, embracing individuality and challenging norms. Join us on a journey through the ever-evolving world of fashion, where every stitch tells a story and every ensemble is a work of art.','662b74327d011_fashion.jpg'),(10,11,'Unbreakable Bond: Pets and Kids','2024-04-29 04:33:00','In the heart of every child lies a realm of imagination, where adventures unfold and dreams take flight. And in this enchanted world, loyal companionship knows no bounds. Enter pets, faithful guardians of childhood wonder. From frolicking in the backyard to snuggling under the covers, they weave themselves into the fabric of family life, teaching lessons of responsibility, empathy, and unconditional love. Together, they navigate the joys and trials of growing up, forging a bond that withstands the test of time. Join us as we explore the magical connection between pets and kids, where every wag of a tail and gentle nuzzle speaks volumes of a friendship beyond compare.','662b73f62bacf_pets.jpg'),(12,13,'Unlocking Creativity','2024-05-01 04:41:00','In a world driven by innovation and progress, creativity stands as a beacon of possibility. It&#039;s not just about artistic expression; it&#039;s about problem-solving, communication, and pushing the boundaries of what&#039;s possible. By embracing the power of imagination, we unlock doors to new ideas, perspectives, and solutions. Whether you&#039;re an artist, a scientist, or an entrepreneur, cultivating creativity is essential for success in any field. It&#039;s about seeing the world through fresh eyes, challenging the status quo, and daring to dream big. So let&#039;s embrace our creativity, nurture it, and unleash its full potential to shape a brighter future for ourselves and the world around us.','662b76304c474_furniture.jpg'),(13,13,'Navigating the Path to Health','2024-05-01 04:42:00','Health is the cornerstone of a fulfilling life, yet its pursuit is often a journey filled with challenges and choices. In a world brimming with information and distractions, finding balance can seem daunting. From nourishing our bodies with wholesome foods to nurturing our minds with moments of tranquility, the path to wellness is as diverse as it is personal. In this exploration of health, we delve into the intricacies of self-care, from physical fitness to mental resilience, seeking to empower and inspire. Join us as we embark on a journey towards holistic well-being, one step, one choice at a time.','662b766936cd1_health.jpg'),(14,13,'Peace in the Present Moment','2024-04-30 04:44:00','In the hustle and bustle of modern life, it&#039;s easy to get caught up in the chaos and lose sight of the present moment. But amidst the noise, there lies a profound practice that can bring serenity and clarity: mindfulness. Join us as we explore the art of mindfulness, a journey inward to cultivate awareness and presence. Through simple yet powerful techniques, we&#039;ll learn to quiet the mind, deepen our connection with ourselves, and find peace in the midst of life&#039;s storms. From mindful breathing to body scans, we&#039;ll discover how to anchor ourselves in the here and now, embracing each moment with openness and acceptance. So let&#039;s embark on this transformative journey together, and uncover the boundless treasures that await within the sanctuary of our own minds.','662b76825682c_life.jpg'),(15,13,'Savoring Culinary Delights','2024-04-23 10:45:00','Indulge your senses as we embark on a tantalizing voyage through the rich tapestry of culinary history. From ancient recipes passed down through generations to modern gastronomic marvels, food has always been a central pillar of human culture. Join us as we delve into the vibrant world of gastronomy, exploring the diverse flavors, techniques, and traditions that define our global palate. From street food stalls to Michelin-starred restaurants, we&#039;ll celebrate the artistry of chefs and the communal joy of sharing meals with loved ones. Along the way, we&#039;ll uncover the stories behind iconic dishes, discover the transformative power of food as medicine, and savor the simple pleasures of home cooking. So let&#039;s raise our forks and toast to the timeless magic of food, a universal language that nourishes both body and soul.','662b76d84f58b_groceries.jpg'),(17,11,'A Journey into Fitness','2024-04-30 04:21:00','Step into the bustling gym, where iron clangs and sweat mingles with determination. Amidst the cacophony, find solace in the rhythm of your breath, the steady beat of your heart. Each lift, each rep, a testament to resilience, pushing boundaries both physical and mental. In this sanctuary of self-improvement, every drop of sweat tells a story of perseverance, of striving towards a stronger, healthier self. Welcome to the world of gym life, where challenges are embraced, and victories celebrated one workout at a time.','662b73bec463d_gym.jpg'),(18,13,'Decoding Black Friday','2024-05-10 04:46:00','Black Friday, a day synonymous with frenzied shopping and unbeatable bargains, has become a cultural phenomenon that marks the unofficial start of the holiday season. But beyond the clamor of crowded stores and online flash sales lies a fascinating narrative of consumer behavior, retail strategy, and economic impact. From its humble origins to its global significance, we delve into the evolution of Black Friday, unpacking its allure and dissecting the strategies employed by retailers to lure in shoppers. Join us as we unravel the complexities behind this annual spectacle, exploring its implications on commerce, society, and the ever-shifting landscape of retail.','662b770fee70a_sale.jpg');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_category`
--

DROP TABLE IF EXISTS `post_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_category` (
  `postId` int NOT NULL,
  `categoryId` int NOT NULL,
  PRIMARY KEY (`postId`,`categoryId`),
  KEY `idx_pc_category` (`categoryId`),
  KEY `idx_pc_post` (`postId`),
  CONSTRAINT `fk_pc_category` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  CONSTRAINT `fk_pc_post` FOREIGN KEY (`postId`) REFERENCES `post` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_category`
--

LOCK TABLES `post_category` WRITE;
/*!40000 ALTER TABLE `post_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tag` (
  `postId` int NOT NULL,
  `tagId` int NOT NULL,
  PRIMARY KEY (`postId`,`tagId`),
  KEY `idx_pt_post` (`postId`),
  KEY `idx_pt_tag` (`tagId`),
  CONSTRAINT `fk_pt_post` FOREIGN KEY (`postId`) REFERENCES `post` (`id`),
  CONSTRAINT `fk_pt_tag` FOREIGN KEY (`tagId`) REFERENCES `tag` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2024-04-26 10:45:06
