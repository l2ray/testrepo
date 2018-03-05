-- MySQL dump 10.13  Distrib 5.6.27, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: St.Peters
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu0.15.04.1

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
-- Table structure for table `Biology`
--

DROP TABLE IF EXISTS `Biology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Biology` (
  `stdNum` varchar(10) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Biology`
--

LOCK TABLES `Biology` WRITE;
/*!40000 ALTER TABLE `Biology` DISABLE KEYS */;
INSERT INTO `Biology` VALUES ('sn2130298',20,24,46,90),('sn803001',24,23,49,96),('sn6130289',20,4,31,55),('sn3503478',18,24,44,86);
/*!40000 ALTER TABLE `Biology` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Chemistry`
--

DROP TABLE IF EXISTS `Chemistry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Chemistry` (
  `stdNum` varchar(10) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Chemistry`
--

LOCK TABLES `Chemistry` WRITE;
/*!40000 ALTER TABLE `Chemistry` DISABLE KEYS */;
INSERT INTO `Chemistry` VALUES ('sn2130298',24,24,48,96),('sn803001',25,25,12,62),('sn6130289',3,9,47,59),('sn3503478',15,24,50,89);
/*!40000 ALTER TABLE `Chemistry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `English`
--

DROP TABLE IF EXISTS `English`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `English` (
  `stdNum` varchar(10) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `English`
--

LOCK TABLES `English` WRITE;
/*!40000 ALTER TABLE `English` DISABLE KEYS */;
INSERT INTO `English` VALUES ('SN2130298',25,23,33,81),('sn111',1,10,10,21),('sn803001',18,24,44,86),('sn6130289',17,14,13,44),('sn3503478',25,20,45,90);
/*!40000 ALTER TABLE `English` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Futher_Mathematics`
--

DROP TABLE IF EXISTS `Futher_Mathematics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Futher_Mathematics` (
  `stdNum` varchar(10) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Futher_Mathematics`
--

LOCK TABLES `Futher_Mathematics` WRITE;
/*!40000 ALTER TABLE `Futher_Mathematics` DISABLE KEYS */;
INSERT INTO `Futher_Mathematics` VALUES ('sn2130298',17,25,36,78),('sn803001',22,16,47,85),('sn6130289',17,22,36,75),('sn3503478',23,18,43,84);
/*!40000 ALTER TABLE `Futher_Mathematics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `General_Science`
--

DROP TABLE IF EXISTS `General_Science`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `General_Science` (
  `stdNum` varchar(10) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `General_Science`
--

LOCK TABLES `General_Science` WRITE;
/*!40000 ALTER TABLE `General_Science` DISABLE KEYS */;
INSERT INTO `General_Science` VALUES ('sn2130298',23,19,44,86),('sn803001',25,25,41,91),('sn6130289',22,17,44,83),('sn3503478',22,21,43,86);
/*!40000 ALTER TABLE `General_Science` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Geography`
--

DROP TABLE IF EXISTS `Geography`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Geography` (
  `stdNum` varchar(25) DEFAULT NULL,
  `Test1` int(2) NOT NULL,
  `Test2` int(2) NOT NULL,
  `Exam` int(2) NOT NULL,
  `Total_Score` int(3) NOT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Geography`
--

LOCK TABLES `Geography` WRITE;
/*!40000 ALTER TABLE `Geography` DISABLE KEYS */;
INSERT INTO `Geography` VALUES ('sn2130298',25,23,47,95),('sn803001',24,25,48,97),('sn6130289',22,18,28,68),('sn3503478',24,25,48,97);
/*!40000 ALTER TABLE `Geography` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Mathematics`
--

DROP TABLE IF EXISTS `Mathematics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Mathematics` (
  `stdNum` varchar(10) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mathematics`
--

LOCK TABLES `Mathematics` WRITE;
/*!40000 ALTER TABLE `Mathematics` DISABLE KEYS */;
INSERT INTO `Mathematics` VALUES ('sn2130298',21,18,37,76),('sn803001',18,23,49,90),('sn6130289',16,11,12,39),('sn3503478',20,21,48,89);
/*!40000 ALTER TABLE `Mathematics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Parent_Coment`
--

DROP TABLE IF EXISTS `Parent_Coment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Parent_Coment` (
  `ParentId` int(5) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Parent_Coment`
--

LOCK TABLES `Parent_Coment` WRITE;
/*!40000 ALTER TABLE `Parent_Coment` DISABLE KEYS */;
/*!40000 ALTER TABLE `Parent_Coment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Parents`
--

DROP TABLE IF EXISTS `Parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Parents` (
  `pId` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `stdNum` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`pId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Parents`
--

LOCK TABLES `Parents` WRITE;
/*!40000 ALTER TABLE `Parents` DISABLE KEYS */;
INSERT INTO `Parents` VALUES (9,'Baboucarr Nyang','M','Abuko',9805667,'sn2130298'),(10,'jallow','M','Yumdum',33898983,'sn111'),(11,'Elizabeth Correa','F','Serrekunda',9875682,'sn803001'),(12,'Ebrima Touray','M','Tabokoto',9830021,'sn6130289'),(13,'Faburama Fofana','M','Abuko',3503478,'sn3503478');
/*!40000 ALTER TABLE `Parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Physics`
--

DROP TABLE IF EXISTS `Physics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Physics` (
  `stdNum` varchar(10) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL,
  UNIQUE KEY `stdNum` (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Physics`
--

LOCK TABLES `Physics` WRITE;
/*!40000 ALTER TABLE `Physics` DISABLE KEYS */;
INSERT INTO `Physics` VALUES ('sn2130298',24,24,50,98),('sn803001',24,22,49,95),('sn6130289',1,0,10,11),('sn3503478',24,23,49,96);
/*!40000 ALTER TABLE `Physics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RBiology`
--

DROP TABLE IF EXISTS `RBiology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RBiology` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RBiology`
--

LOCK TABLES `RBiology` WRITE;
/*!40000 ALTER TABLE `RBiology` DISABLE KEYS */;
INSERT INTO `RBiology` VALUES ('jun2015001',25,20,50,90),('',0,0,0,0),('jun2015001',25,20,50,90),('sn2130298',15,9,49,73);
/*!40000 ALTER TABLE `RBiology` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RChemistry`
--

DROP TABLE IF EXISTS `RChemistry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RChemistry` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RChemistry`
--

LOCK TABLES `RChemistry` WRITE;
/*!40000 ALTER TABLE `RChemistry` DISABLE KEYS */;
INSERT INTO `RChemistry` VALUES ('jun2015001',25,20,45,50),('',0,0,0,0),('jun2015001',25,20,45,50),('sn2130298',21,23,28,72);
/*!40000 ALTER TABLE `RChemistry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `REnglish`
--

DROP TABLE IF EXISTS `REnglish`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `REnglish` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `REnglish`
--

LOCK TABLES `REnglish` WRITE;
/*!40000 ALTER TABLE `REnglish` DISABLE KEYS */;
INSERT INTO `REnglish` VALUES ('jun2015001',25,20,45,39),('',0,0,0,0),('jun2015001',25,20,45,39),('sn2130298',18,14,15,47);
/*!40000 ALTER TABLE `REnglish` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RFurtherMathematics`
--

DROP TABLE IF EXISTS `RFurtherMathematics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RFurtherMathematics` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RFurtherMathematics`
--

LOCK TABLES `RFurtherMathematics` WRITE;
/*!40000 ALTER TABLE `RFurtherMathematics` DISABLE KEYS */;
INSERT INTO `RFurtherMathematics` VALUES ('jun2015001',25,20,35,90),('',0,0,0,0),('jun2015001',25,20,35,90),('sn2130298',10,11,7,28);
/*!40000 ALTER TABLE `RFurtherMathematics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RGeneral_Science`
--

DROP TABLE IF EXISTS `RGeneral_Science`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RGeneral_Science` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RGeneral_Science`
--

LOCK TABLES `RGeneral_Science` WRITE;
/*!40000 ALTER TABLE `RGeneral_Science` DISABLE KEYS */;
INSERT INTO `RGeneral_Science` VALUES ('jun2015001',25,20,45,90),('',0,0,0,0),('jun2015001',25,20,45,90),('sn2130298',23,22,29,74);
/*!40000 ALTER TABLE `RGeneral_Science` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RGeography`
--

DROP TABLE IF EXISTS `RGeography`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RGeography` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RGeography`
--

LOCK TABLES `RGeography` WRITE;
/*!40000 ALTER TABLE `RGeography` DISABLE KEYS */;
/*!40000 ALTER TABLE `RGeography` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RMathematics`
--

DROP TABLE IF EXISTS `RMathematics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RMathematics` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RMathematics`
--

LOCK TABLES `RMathematics` WRITE;
/*!40000 ALTER TABLE `RMathematics` DISABLE KEYS */;
/*!40000 ALTER TABLE `RMathematics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RPhysics`
--

DROP TABLE IF EXISTS `RPhysics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RPhysics` (
  `stdNum` varchar(23) DEFAULT NULL,
  `Test1` int(2) DEFAULT NULL,
  `Test2` int(2) DEFAULT NULL,
  `Exam` int(2) DEFAULT NULL,
  `Total_Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RPhysics`
--

LOCK TABLES `RPhysics` WRITE;
/*!40000 ALTER TABLE `RPhysics` DISABLE KEYS */;
/*!40000 ALTER TABLE `RPhysics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RStudents`
--

DROP TABLE IF EXISTS `RStudents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RStudents` (
  `stdNum` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Address` varchar(23) DEFAULT NULL,
  `Religion` varchar(23) DEFAULT NULL,
  `Grade` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RStudents`
--

LOCK TABLES `RStudents` WRITE;
/*!40000 ALTER TABLE `RStudents` DISABLE KEYS */;
INSERT INTO `RStudents` VALUES ('jun2140235','Ousman Touray','M','Brikama','Islam',0),('jun2130389','Allen Manga','M','Yumdum','Christian',7),('jun2015001','Fatou Nyang','F','Abuko','Muslim',0),('jun2140235','Ousman Touray','M','Brikama','Islam',7),('jun2015001','Fatou Nyang','F','Abuko','Muslim',0),('sn2130298','Francis Gibba','F','Tabokoto','Christian',10);
/*!40000 ALTER TABLE `RStudents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Students`
--

DROP TABLE IF EXISTS `Students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Students` (
  `stdNum` varchar(10) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Religion` varchar(10) DEFAULT NULL,
  `Grade` varchar(25) NOT NULL,
  PRIMARY KEY (`stdNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Students`
--

LOCK TABLES `Students` WRITE;
/*!40000 ALTER TABLE `Students` DISABLE KEYS */;
INSERT INTO `Students` VALUES ('sn111','lama rana','M','Yumdum','Islam','9'),('sn2130298','Fatou Nyang','F','Abuko','Islam','12'),('sn3503478','Abubacarr Sidi Fofana','M','Lamin','Islam','12'),('sn6130289','Lamin O. Touray','M','Kanifing','Islam','12'),('sn803001','George Correa','M','Lamin','Christian','10');
/*!40000 ALTER TABLE `Students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `grade` int(3) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `address` varchar(25) NOT NULL,
  `gender` char(1) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dateEmployed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'Malang Sanyang',10,'Islam','Gambian','Busumbala','M','ms@stp','njai','2015-12-22 18:03:58'),(2,'Fatou Nyang',10,'Islam','Nigeria','Busumbala','M','nyangFatou','fatouj123','2015-12-28 18:40:22'),(7,'Omar Touray',7,'Islam','Gamba','Busumbala','M','omar7','omar7','2015-12-28 20:33:36'),(8,'Omar Touray',7,'Islam','Gamba','Busumbala','M','omar7','omar7','2015-12-28 20:33:49'),(9,'Omar Touray',7,'Islam','Gamba','Busumbala','M','omar7','omar7','2015-12-28 20:34:04'),(10,'Omar Touray',7,'Islam','Gamba','Busumbala','M','omar7','omar7','2015-12-28 20:35:08'),(11,'Omar Touray',7,'Islam','Gamba','Busumbala','M','omar7','omar7','2015-12-28 20:36:13'),(12,'Gribrl touray',10,'Islam','Gamba','Busumbala','M','gbs2ray','g2ray','2016-01-01 12:32:44');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-11 16:46:57
