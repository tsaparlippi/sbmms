-- MySQL dump 10.13  Distrib 5.1.41, for Win32 (ia32)
--
-- Host: .    Database: sbms
-- ------------------------------------------------------
-- Server version	5.1.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `client_id` int(12) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_initial` varchar(5) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `company` varchar(30) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `guards` varchar(200) NOT NULL,
  `trash` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (37,'Vincent Gerard','Puey','G','Male','ROXOL','Montevista Homesite','Bacolod','Negros Occidental','09217848568','','0'),(38,'sadasd','asdasd','C','Male','adsa','asdasd','adsasd','asdasd','234243','','1'),(39,'Juan Miguel','Pornan','M','Male','SRA-LA','Lacson','Bacolod','Negros Occidental','09095338867','','0'),(40,'Paul Andrew','Batulan','B','Male','GRANJA','Rosario','Bacolod','Negros Occidental','09067458968','','0'),(41,'John Allen','Penafiel','M','Male','PAG-IBIG','Golden','Bacolod','Negros Occidental','09215867979','','0'),(42,'Slater','Yang','H','Male','UPLB','Ayala','Bacolod','Negros Occidental','09095776686','','0'),(43,'Francis Eric','Orio','P','Male','DOST','Araneta','Bacolod','Negros Occidental','09098765432','','0'),(44,'Joshua Art','Pastrana','M','Male','BACIWA','Luzuriaga','Bacolod','Negros Occidental','09094567837','','0'),(45,'Rocky','Rebaton','M','Male','GMA','Locsin','Bacolod','Negros Occidental','09096543212','','0'),(46,'Robin Leo','Desusa','B','Male','PHILHEALTH','Sidepark','Bacolod','Negros Occidental','09085689485','','0'),(47,'Aaron Ken','Gabayeron','G','Male','MEDICOTEK','Malinong','Bacolod ','Negros Occidental','09071234566','','0'),(48,'Nance Anthony','Elarcosa','F','Male','CLMMRH','Galo','Bacolod ','Negros Occidental','09095647465','','0'),(49,'Caesar Herman','Hinlo','G','Male','SYNTECH','Rizal','Bacolod','Negros Occidental','09064321345','','0'),(53,'','','Choos','Choose Gende','','','','','','','0');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerdatabase`
--

DROP TABLE IF EXISTS `customerdatabase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerdatabase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contactnumber` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerdatabase`
--

LOCK TABLES `customerdatabase` WRITE;
/*!40000 ALTER TABLE `customerdatabase` DISABLE KEYS */;
/*!40000 ALTER TABLE `customerdatabase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(30) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (0,'Acquaintance Party'),(0,'Anniversary'),(0,'Baptism'),(0,'Birthday'),(0,'Christmas'),(0,'Conference'),(0,'Debut'),(0,'Despidida Party'),(0,'Engagement Party'),(0,'Halloween Party'),(0,'Lodging'),(0,'Planning'),(0,'Pre-nuptial'),(0,'Reunion'),(0,'Seminar'),(0,'Wedding'),(0,'Gathering');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `expense` varchar(30) NOT NULL,
  `cost` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenses`
--

LOCK TABLES `expenses` WRITE;
/*!40000 ALTER TABLE `expenses` DISABLE KEYS */;
INSERT INTO `expenses` VALUES (11,'2013-10-22','Electric Bill','1000'),(10,'2013-10-22','Internet Bill','999');
/*!40000 ALTER TABLE `expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guest` (
  `Guest_id` int(4) NOT NULL AUTO_INCREMENT,
  `TDate` date NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Payment` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Quantity_reserve` int(4) NOT NULL,
  `Nights` int(4) NOT NULL,
  PRIMARY KEY (`Guest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=280 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest`
--

LOCK TABLES `guest` WRITE;
/*!40000 ALTER TABLE `guest` DISABLE KEYS */;
INSERT INTO `guest` VALUES (279,'2013-10-22','Charlie Yap','Overnight','Room #2','Cebu City','09122222222','',1000,'',0,0),(278,'2013-10-22','Charlie Lim','Despedida Party','','Manila','09122222222','Full Payment',2400,'active',2,0),(276,'2013-10-22','Charlie Ho','Overnight','Room #2','Iligan City','09179833333','',1000,'',0,0),(277,'2013-10-22','Charlie Uy','Pre-Nuptial','','CdeO','55555555555','Inquiry',0,'active',1,0),(275,'2013-10-22','Charlie Yee','Halloween Party','','Iligan City','09123333333','Full Payment',2500,'active',1,0);
/*!40000 ALTER TABLE `guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(30) NOT NULL,
  `actions` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=369 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (324,' ','added client','3/1/2012 8:59:30','admin'),(323,'12','deleted expense','3/1/2012 8:43:24','admin'),(322,'11','deleted expense','3/1/2012 8:43:20','admin'),(321,' ','added client','3/1/2012 8:40:3','admin'),(320,' ','added client','3/1/2012 8:40:3','admin'),(319,'','added equipment','3/1/2012 8:10:6','admin'),(242,'Vincent Gerard Puey','added client','2/29/2012 21:21:38','admin'),(243,'sadasd asdasd','added client','2/29/2012 21:29:9','admin'),(244,'Vincent Gerard Puey','modified client','2/29/2012 21:36:42','admin'),(245,'38','deleted client','2/29/2012 21:36:55','admin'),(246,'Juan Miguel Pornan','added client','2/29/2012 21:38:6','admin'),(247,'Paul Andrew Batulan','added client','2/29/2012 21:39:42','admin'),(248,'John Allen Penafiel','added client','2/29/2012 21:43:18','admin'),(249,'Slater Yang','added client','2/29/2012 21:45:21','admin'),(250,'Francis Eric Orio','added client','2/29/2012 21:54:20','admin'),(251,'Joshua Art Pastrana','added client','2/29/2012 21:56:25','admin'),(252,'Rocky Rebaton','added client','2/29/2012 21:58:50','admin'),(253,'Robin Leo Desusa','added client','2/29/2012 22:3:22','admin'),(254,'Aaron Ken Gabayeron','added client','2/29/2012 22:5:16','admin'),(255,'Nance Anthony Elarcosa','added client','2/29/2012 22:7:6','admin'),(256,'Caesar Herman Hinlo','added client','2/29/2012 22:8:53','admin'),(257,'Rodney Blanco','added employee','2/29/2012 22:13:26','admin'),(258,'Samuel  Pano','added employee','2/29/2012 22:33:53','admin'),(259,'Marvin Estocado','added employee','2/29/2012 22:38:5','admin'),(260,'Eric Borromeo','added employee','2/29/2012 22:46:19','admin'),(261,'asdasd sada','added employee','2/29/2012 22:54:20','admin'),(262,'asdyasd asdad','added employee','2/29/2012 22:55:19','admin'),(263,'54','deleted employee','2/29/2012 22:56:0','admin'),(264,'55','deleted employee','2/29/2012 22:56:0','admin'),(265,'Rico Tio','added employee','2/29/2012 22:56:30','admin'),(266,'Jovel Caloyloy','added employee','2/29/2012 23:5:32','admin'),(267,'Allan Langga','added employee','2/29/2012 23:11:56','admin'),(268,'Jonathan Gumapang','added employee','2/29/2012 23:16:36','admin'),(269,'Roberto Sumugat','added employee','2/29/2012 23:21:21','admin'),(270,'Orlando Bustamante','added employee','2/29/2012 23:25:36','admin'),(271,'Jimuel Chavez','added employee','2/29/2012 23:29:41','admin'),(272,'Eddie Erespe','added employee','2/29/2012 23:33:48','admin'),(273,'Donaleigh Doctora','added employee','2/29/2012 23:36:42','admin'),(274,'Shariz  Ligo','added employee','2/29/2012 23:40:55','admin'),(275,'Jeza Bermejo','added employee','2/29/2012 23:44:24','admin'),(276,'Shirley Orcena','added employee','2/29/2012 23:47:23','admin'),(277,'Daylyn Billote','added employee','2/29/2012 23:51:31','admin'),(318,'37','updated equipment','3/1/2012 8:5:36','admin'),(280,'NORINCO','added equipment','3/1/2012 0:3:23','admin'),(281,'ARMSCOR','added equipment','3/1/2012 0:9:23','admin'),(282,'MARVERICK SHTGN','added equipment','3/1/2012 0:11:55','admin'),(283,'33','updated equipment','3/1/2012 0:15:54','admin'),(284,'33','updated equipment','3/1/2012 0:16:42','admin'),(285,'34','updated equipment','3/1/2012 0:16:55','admin'),(286,'COLT RVLVR','added equipment','3/1/2012 0:17:39','admin'),(287,'NORINCO PISTOL','added equipment','3/1/2012 0:20:1','admin'),(288,'COLT RVLVR','added equipment','3/1/2012 0:22:25','admin'),(289,'ARMSCOR RVLVR','added equipment','3/1/2012 0:24:13','admin'),(290,'ARMSCOR SHTGN','added equipment','3/1/2012 0:25:53','admin'),(291,'NORINCO PISTOL','added equipment','3/1/2012 0:27:35','admin'),(292,'ARMSCOR RVLVR','added equipment','3/1/2012 0:29:7','admin'),(317,'sdfsdf','added equipment','3/1/2012 8:3:53','admin'),(294,'SCANNER','added equipment','3/1/2012 0:32:22','admin'),(295,'PRINTER','added equipment','3/1/2012 0:37:26','admin'),(296,'COMPUTER','added equipment','3/1/2012 0:39:41','admin'),(297,'VIDEO CAM','added equipment','3/1/2012 0:41:30','admin'),(298,'TIMECARD MACHINE','added equipment','3/1/2012 0:43:12','admin'),(299,'VERILOOK SDK','added equipment','3/1/2012 0:47:27','admin'),(313,'49','deleted equipment','3/1/2012 2:43:51','admin'),(301,'rtdrt dtrdrt','added employee','3/1/2012 1:25:9','admin'),(316,'50','updated equipment','3/1/2012 8:3:13','admin'),(315,'37','updated equipment','3/1/2012 8:2:56','admin'),(304,'50','opened availability','3/1/2012 1:40:29','admin'),(314,'dasd','added equipment','3/1/2012 7:51:42','admin'),(307,'51','opened availability','3/1/2012 1:41:43','admin'),(308,'50','opened availability','3/1/2012 1:43:44','admin'),(312,'','added equipment','3/1/2012 2:43:42','admin'),(311,'13','deleted expense','3/1/2012 2:23:12','admin'),(325,'1','deleted sched','5/27/2012 10:2:30','Admin'),(326,'7','deleted sched','5/27/2012 10:2:30','Admin'),(327,'19','deleted sched','5/27/2012 10:2:30','Admin'),(328,'2','deleted sched','5/27/2012 10:2:30','Admin'),(329,'10','deleted sched','5/27/2012 11:21:51','Admin'),(330,'14','deleted sched','5/27/2012 11:21:51','Admin'),(331,'11','deleted sched','5/27/2012 11:21:51','Admin'),(332,'12','deleted sched','5/27/2012 11:21:51','Admin'),(333,'16','deleted sched','5/27/2012 11:22:13','Admin'),(334,'17','deleted sched','5/27/2012 11:22:13','Admin'),(335,'13','deleted sched','5/27/2012 11:22:13','Admin'),(336,'18','deleted sched','5/27/2012 11:22:13','Admin'),(337,'15','deleted sched','5/27/2012 11:22:13','Admin'),(338,'22','deleted sched','5/27/2012 15:44:24','Admin'),(339,'29','deleted sched','5/28/2012 11:10:24',''),(340,'30','deleted sched','5/29/2012 1:10:35','Admin'),(341,'32','deleted sched','5/29/2012 1:10:40','Admin'),(342,'20','deleted sched','5/29/2012 1:22:32','Admin'),(343,'53','deleted sched','5/29/2012 1:29:5','Admin'),(344,'21','deleted sched','5/29/2012 1:38:25','Admin'),(345,'55','deleted sched','5/30/2012 6:1:10',''),(346,'56','deleted sched','5/31/2012 0:47:56','Admin'),(347,'54','deleted sched','5/31/2012 0:54:49','Admin'),(348,'58','deleted sched','5/31/2012 2:51:9','Admin'),(349,'55','deleted sched','5/31/2012 2:51:9','Admin'),(350,'57','deleted sched','5/31/2012 3:18:2','Admin'),(351,'59','deleted sched','5/31/2012 3:18:2','Admin'),(352,'61','deleted sched','5/31/2012 4:9:53','Admin'),(353,'60','deleted sched','5/31/2012 4:12:13','Admin'),(354,'64','deleted sched','5/31/2012 4:22:28','Admin'),(355,'','deleted sched','5/31/2012 9:51:3',''),(356,'','deleted sched','5/31/2012 9:54:26',''),(357,'69','deleted sched','5/31/2012 10:12:7','Admin'),(358,'62','deleted sched','5/31/2012 10:51:21','Admin'),(359,'63','deleted sched','5/31/2012 10:51:32','Admin'),(360,'65','deleted sched','5/31/2012 10:51:42','Admin'),(361,'66','deleted sched','5/31/2012 10:51:50','Admin'),(362,'67','deleted sched','6/1/2012 3:44:35',''),(363,'71','deleted sched','6/2/2012 5:9:38',''),(364,'74','deleted sched','6/2/2012 5:13:19',''),(365,'','added sched',' ',''),(366,'','added sched',' ',''),(367,'78','deleted sched','6/2/2012 5:41:38','Admin'),(368,'79','deleted sched','6/2/2012 5:41:38','Admin');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newevent`
--

DROP TABLE IF EXISTS `newevent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newevent` (
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newevent`
--

LOCK TABLES `newevent` WRITE;
/*!40000 ALTER TABLE `newevent` DISABLE KEYS */;
INSERT INTO `newevent` VALUES ('0000-00-00',4,'Acquaintance Party','Sazie Morii','9:00 am - 3:00 pm','Fully Paid',2312312),('0000-00-00',5,'Birthday','Charlie Yee','6:00 - 8:00 pm','Made Initial Deposit',87654),('0000-00-00',6,'Wedding','Carla Here','9:00 - 12:00 nn','Fully Paid',4753852),('0000-00-00',8,'Christmas Party','Carla Here','2:00 - 4:00 pm','Made Initial Deposit',2100),('0000-00-00',17,'Acquaintance Party','sdsds3','9:00 - 12:00 nn','Fully Paid',2147483647),('0000-00-00',29,'Christmas Party','Charlie Yeema','9:00 am - 3:00 pm','Fully Paid',2147483647),('0000-00-00',42,'Acquaintance Party','Rachel Beryy','9:00 am - 3:00 pm','Inquiry',875432);
/*!40000 ALTER TABLE `newevent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `official_reciept`
--

DROP TABLE IF EXISTS `official_reciept`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `official_reciept` (
  `Or_no` int(4) NOT NULL AUTO_INCREMENT,
  `Guest_id` int(4) NOT NULL,
  `Total_charges` varchar(20) NOT NULL,
  `Amount_pay` int(10) NOT NULL,
  `num_to_words` varchar(250) NOT NULL,
  `change_pesos` varchar(10) NOT NULL,
  `Date_of_Payment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Or_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `official_reciept`
--

LOCK TABLES `official_reciept` WRITE;
/*!40000 ALTER TABLE `official_reciept` DISABLE KEYS */;
/*!40000 ALTER TABLE `official_reciept` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `Bill_id` int(4) NOT NULL AUTO_INCREMENT,
  `Guest_id` int(4) NOT NULL,
  `Total_charges` varchar(20) NOT NULL,
  `Billing_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`Bill_id`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,19,'9000',0),(2,20,'144000',0),(3,21,'8000',0),(4,0,'4000',0),(5,22,'1200',0),(6,23,'45000',0),(7,24,'16800',0),(8,25,'2500',0),(9,26,'26000',0),(10,27,'26000',0),(11,28,'2500',0),(12,29,'20000',0),(13,30,'41300',0),(14,0,'56000',0),(15,0,'5900',0),(16,0,'5900',0),(17,31,'8000',0),(18,32,'0',0),(19,33,'22500',0),(20,34,'0',0),(21,35,'0',0),(22,36,'0',0),(23,37,'3000',0),(24,38,'0',0),(25,39,'0',0),(26,40,'0',0),(27,41,'5000',0),(28,42,'19200',0),(29,43,'3000',0),(30,0,'52500',0),(31,0,'9000',0),(32,44,'22000',0),(33,45,'3500',0),(34,46,'5000',0),(35,47,'1200',0),(36,0,'11100',0),(37,48,'2500',0),(38,49,'9400',0),(39,50,'2000',0),(40,51,'1000',0),(41,52,'2000',0),(42,53,'20400',0),(43,0,'5000',0),(44,54,'5000',0),(45,55,'2000',0),(46,56,'20000',0),(47,57,'35000',0),(48,58,'6000',0),(49,59,'8000',0),(50,60,'8000',0),(51,61,'3000',0),(52,62,'7500',0),(53,63,'12000',0),(54,64,'7000',0),(55,65,'2500',0),(56,66,'8000',0),(57,67,'10000',0),(58,68,'1000',0),(59,69,'1000',0),(60,70,'1200',0),(61,71,'20000',0),(62,72,'8000',0),(63,73,'10800',0),(64,74,'1000',0),(65,75,'10800',0),(66,76,'7200',0),(67,77,'7200',0),(68,78,'20000',0),(69,81,'20400',0),(70,0,'14000',0),(71,82,'8000',0),(72,83,'2500',0),(73,84,'1000',0),(74,85,'2500',0),(75,86,'1000',0),(76,87,'2500',0),(77,88,'1200',0),(78,89,'1000',0),(79,90,'20000',0),(80,91,'2500',0),(81,92,'2000',0),(82,93,'2500',0),(83,94,'2000',0),(84,95,'2000',0),(85,96,'20000',0),(86,0,'38400',0),(87,97,'1200',0),(88,98,'7200',0),(89,99,'9600',0),(90,100,'20000',0),(91,0,'0',0),(92,101,'2000',0),(93,102,'1200',0),(94,103,'1200',0),(95,104,'22500',0),(96,105,'2500',0),(97,106,'1000',0),(98,107,'0',0),(99,108,'16000',0),(100,109,'1000',0),(101,110,'10800',0),(102,111,'2500',0),(103,112,'9600',0),(104,113,'1000',0),(105,114,'2500',0),(106,115,'1200',0),(107,116,'1000',0),(108,117,'2500',0),(109,118,'8000',0),(110,119,'',0),(111,120,'10800',0),(112,121,'6000',0),(113,122,'8000',0),(114,143,'9600',0),(115,144,'1200',0),(116,206,'0',0),(117,207,'0',0),(118,208,'0',0),(119,209,'0',0),(120,210,'1000',0),(121,211,'1000',0),(122,212,'0',0),(123,213,'0',0),(124,214,'0',0),(125,215,'0',0),(126,216,'0',0),(127,217,'0',0),(128,218,'0',0),(129,219,'0',0),(130,220,'0',0),(131,221,'0',0),(132,222,'0',0),(133,223,'0',0),(134,224,'0',0),(135,225,'0',0),(136,226,'0',0),(137,227,'0',0),(138,228,'0',0),(139,229,'2000',0),(140,230,'8000',0),(141,231,'0',0),(142,232,'0',0),(143,233,'0',0),(144,234,'0',0),(145,235,'0',0),(146,236,'0',0),(147,237,'0',0),(148,238,'0',0),(149,239,'0',0),(150,240,'0',0),(151,241,'0',0),(152,242,'0',0),(153,243,'0',0),(154,244,'0',0),(155,245,'0',0),(156,246,'0',0),(157,247,'0',0),(158,248,'0',0),(159,249,'0',0),(160,250,'0',0),(161,251,'0',0),(162,252,'0',0),(163,253,'0',0),(164,254,'0',0),(165,255,'0',0),(166,256,'0',0),(167,257,'0',0),(168,258,'1200',0),(169,259,'1200',0),(170,260,'0',0),(171,261,'0',0),(172,0,'0',0),(173,262,'0',0),(174,263,'0',0),(175,264,'0',0),(176,265,'0',0),(177,270,'0',0),(178,275,'0',0),(179,277,'0',0),(180,278,'0',0);
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `Guest_id` int(4) NOT NULL,
  `Date_start` date NOT NULL,
  `Date_end` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (278,'2013-10-25','2013-10-25'),(277,'2013-10-25','2013-10-25'),(275,'2013-10-24','2013-10-24');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_info`
--

DROP TABLE IF EXISTS `reservation_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_info` (
  `Info_id` int(4) NOT NULL AUTO_INCREMENT,
  `Guest_id` int(4) NOT NULL,
  `Room_no` int(4) NOT NULL,
  PRIMARY KEY (`Info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=267 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_info`
--

LOCK TABLES `reservation_info` WRITE;
/*!40000 ALTER TABLE `reservation_info` DISABLE KEYS */;
INSERT INTO `reservation_info` VALUES (266,278,11),(265,278,12),(264,277,14),(263,275,13);
/*!40000 ALTER TABLE `reservation_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revenues`
--

DROP TABLE IF EXISTS `revenues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `revenues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `event` text NOT NULL,
  `customer` text NOT NULL,
  `cost` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revenues`
--

LOCK TABLES `revenues` WRITE;
/*!40000 ALTER TABLE `revenues` DISABLE KEYS */;
INSERT INTO `revenues` VALUES (2,'2012-03-29','Conference','Grazielle Leotero','15000.00');
/*!40000 ALTER TABLE `revenues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room` (
  `Room_no` int(4) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) NOT NULL,
  `Type_id` varchar(100) NOT NULL,
  `Rate` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`Room_no`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (14,'Veranda','21','1000','Photos/balcony.jpg'),(13,'Function Hall','21','2500','Photos/function.jpg'),(12,'Room 2','13','1200','Photos/room2.jpg'),(11,'Room 1','13','1200','Photos/room1.jpg');
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_trigger`
--

DROP TABLE IF EXISTS `room_trigger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_trigger` (
  `Room_no` int(4) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) NOT NULL,
  `Type_id` varchar(100) NOT NULL,
  `Rate` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_add` varchar(50) NOT NULL,
  `Date_time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Room_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_trigger`
--

LOCK TABLES `room_trigger` WRITE;
/*!40000 ALTER TABLE `room_trigger` DISABLE KEYS */;
INSERT INTO `room_trigger` VALUES (1,'dwdwd','15','3333','Photos/10.jpg','admin','2012-11-23 23:28:03'),(2,'bdhdg','14','3333','Photos/22641_104244386269952_100000531739760_115799_4787291_n.jpg','admin','2012-12-04 18:38:52'),(3,'hjtyjty','19','3333','Photos/35398_105494662836357_100001274710239_36563_3149022_n.jpg','admin','2012-12-04 18:40:44'),(4,'myujkm','19','3333','Photos/35398_105494662836357_100001274710239_36563_3149022_n.jpg','admin','2012-12-04 19:42:00'),(5,',hj,hj','15','3333','Photos/22341_103145379713186_100000531739760_87505_1475781_n.jpg','admin','2012-12-04 20:02:03'),(6,' vhjm, ','13','3333','Photos/22641_104244386269952_100000531739760_115799_4787291_n.jpg','admin','2012-12-04 20:02:47'),(7,'mi amor solo','13','1000','Photos/page4_img1.jpg','admin','2012-12-10 21:19:39'),(8,'Honey Moon ','13','2000','Photos/page4_img1.jpg','admin','2012-12-10 21:20:59'),(9,'family size','16','2000','Photos/page4_img1.jpg','admin','2012-12-10 21:21:35');
/*!40000 ALTER TABLE `room_trigger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_trigger_delete`
--

DROP TABLE IF EXISTS `room_trigger_delete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_trigger_delete` (
  `Room_no` int(4) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) NOT NULL,
  `Type_id` varchar(100) NOT NULL,
  `Rate` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_delete` varchar(50) NOT NULL,
  `Date_time_deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Room_no`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_trigger_delete`
--

LOCK TABLES `room_trigger_delete` WRITE;
/*!40000 ALTER TABLE `room_trigger_delete` DISABLE KEYS */;
INSERT INTO `room_trigger_delete` VALUES (197,'bdhdg','14','3333','Photos/22641_104244386269952_100000531739760_115799_4787291_n.jpg','admin','2012-12-04 18:39:14'),(198,'hjtyjty','19','3333','Photos/35398_105494662836357_100001274710239_36563_3149022_n.jpg','admin','2012-12-04 18:40:54'),(199,'myujkm','18','87878','Photos/35398_105494662836357_100001274710239_36563_3149022_n.jpg','admin','2012-12-04 19:42:22');
/*!40000 ALTER TABLE `room_trigger_delete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_trigger_update`
--

DROP TABLE IF EXISTS `room_trigger_update`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_trigger_update` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `Room_no` int(10) NOT NULL,
  `Description_b4` varchar(100) NOT NULL,
  `Type_id_b4` varchar(100) NOT NULL,
  `Rate_b4` varchar(20) NOT NULL,
  `Description_aftr` varchar(200) NOT NULL,
  `Type_id_aftr` int(4) NOT NULL,
  `Rate_aftr` int(10) NOT NULL,
  `user_update` varchar(100) NOT NULL,
  `Date_time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_trigger_update`
--

LOCK TABLES `room_trigger_update` WRITE;
/*!40000 ALTER TABLE `room_trigger_update` DISABLE KEYS */;
INSERT INTO `room_trigger_update` VALUES (1,0,'OLD.Description','OLD.Type_id','OLD.Rate','NEW.Description',0,0,'admin','2012-12-04 18:33:52'),(2,144,'fully aircondion room','14','2000','asa',20,3232,'admin','2012-12-04 18:35:10'),(3,159,'asdfrgh','15','34567','eaeaea',13,222,'admin','2012-12-04 18:36:35'),(4,144,'asa','20','3232','rer',15,43,'admin','2012-12-04 19:19:57'),(5,145,'fully aircondion room','15','3000','fully a54455545rcondion room',18,3000454,'admin','2012-12-04 19:20:31'),(6,199,'myujkm','19','3333','myujkm',18,87878,'admin','2012-12-04 19:42:15'),(7,201,' vhjm, ','13','3333','6677',13,3333,'admin','2012-12-04 20:03:13');
/*!40000 ALTER TABLE `room_trigger_update` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_type`
--

DROP TABLE IF EXISTS `room_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_type` (
  `Type_id` int(4) NOT NULL AUTO_INCREMENT,
  `Room_type` varchar(100) NOT NULL,
  `Maximum_person` int(2) NOT NULL,
  `Bed` int(2) NOT NULL,
  PRIMARY KEY (`Type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_type`
--

LOCK TABLES `room_type` WRITE;
/*!40000 ALTER TABLE `room_type` DISABLE KEYS */;
INSERT INTO `room_type` VALUES (13,'Single',8,1),(21,'None',0,0);
/*!40000 ALTER TABLE `room_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedules` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `event` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `timeS` varchar(20) NOT NULL,
  `timeF` varchar(20) NOT NULL,
  `customer` varchar(300) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedules`
--

LOCK TABLES `schedules` WRITE;
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
INSERT INTO `schedules` VALUES (48,'Acquaintance Party','2013-03-29','12:30 am','1:00 am','Grazielle Leotero','Room #1','Fully Paid'),(49,'Acquaintance Party','2013-03-29','12:30 am','1:00 am','Charlie Yee','Room #1','Fully Paid'),(50,'Conference','2013-03-26','4:00 am','2:30 am','Charlie Yee','Room #1','Fully Paid'),(51,'Pre-Nuptial','2013-03-28','2:30 am','6:00 am','Benedict Cumberbatch','Function Hall','Fully Paid'),(52,'Seminar','2013-03-30','2:00 pm','10:00 pm','Charlie Avelino','Function Hall','Fully Paid'),(53,'Birthday','2013-03-31','9:30 am','3:00 pm','Regina Moso','Function Hall','Initial Deposit'),(54,'Pre-Nuptial','0000-00-00','5:00 am','5:00 pm','Regina Moso','Room #4','Inquiry'),(57,'Acquaintance Party','2013-03-28','2:30 pm','4:30 pm','Benedict Cumberbatch','Function Hall','Initial Deposit'),(58,'Debut','2013-03-31','9:30 am','3:00 pm','','Function Hall','Initial Deposit'),(59,'Christmas Party','2013-08-06','12:00 am','12:00 am','Xian Lim','Room #3','Fully Paid'),(60,'','0000-00-00','','','','',''),(61,'','0000-00-00','','','','',''),(62,'','0000-00-00','','','','',''),(63,'','0000-00-00','','','','',''),(64,'','0000-00-00','','','','',''),(65,'','0000-00-00','','','','',''),(66,'','0000-00-00','','','','',''),(67,'','0000-00-00','','','','','');
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `summary`
--

DROP TABLE IF EXISTS `summary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `totalrevenues` int(30) NOT NULL,
  `totalexpenses` int(30) NOT NULL,
  `income` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summary`
--

LOCK TABLES `summary` WRITE;
/*!40000 ALTER TABLE `summary` DISABLE KEYS */;
/*!40000 ALTER TABLE `summary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `test_id` int(12) NOT NULL AUTO_INCREMENT,
  `attendance` text NOT NULL,
  `custom` varchar(12) NOT NULL,
  `date` varchar(12) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'p1, test2, test3','',''),(2,'wertwet, wet2, wer3, wer4','',''),(3,'lim, serion, edwardo, drix, neil, eric, michael, roldan, fritz, lehi','wahateever','12-05-2011');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (8,'nalz','398a55b35a2cb9302a4a42af4464b020','cashier'),(2,'admin','21232f297a57a5a743894a0e4a801fc3','admin'),(3,'reggie@0430','21232f297a57a5a743894a0e4a801fc3','admin'),(4,'marymoon','6ac2470ed8ccf204fd5ff89b32a355cf','cashier'),(10,'charina','bde14998713f22bc069ba415fe9fc6cc','admin'),(9,'angcla','f408c6c4435e2483a8230ab9b447d6a2','admin'),(11,'maquiran','0a1b8416f0b5dce075ad7d75a62add3c','cashier'),(12,'tala','e5df9cc32c68723dc03674d6c191bc9e','cashier'),(13,'tao','60926ff45ce4212e97a67ae1ad4ae463','cashier'),(14,'cindy','21232f297a57a5a743894a0e4a801fc3','cashier'),(15,'haide','21232f297a57a5a743894a0e4a801fc3','cashier');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(12) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(12) NOT NULL,
  `middle_initial` varchar(12) NOT NULL,
  `last_name` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (30,'test','A','test','test','098f6bcd4621d373cade4e832627b4f6','User','132903398631369ngeas.jpg'),(36,'admin','a','admin','admin','admin','Administrator','default.jpg'),(37,'admin','A','admin','admin','21232f297a57a5a743894a0e4a801fc3','Administrator','default.jpg'),(38,'dfghyj','Choose Middl','','','','Administrator','1329220162ins.jpg'),(39,'Rose','D','Puey','rose','fcdc7b4207660a1372d0cd5491ad856e','Administrator','1329276304.jpg'),(40,'Sunny','A','Lopez','sunny','533c5ba8368075db8f6ef201546bd71a','User','default.jpg'),(41,'','Choose Middl','','','d41d8cd98f00b204e9800998ecf8427e','Administrator','default.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-22 21:06:20
