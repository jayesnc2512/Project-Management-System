-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: miniproject
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `card1`
--

DROP TABLE IF EXISTS `card1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card1` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card1`
--

LOCK TABLES `card1` WRITE;
/*!40000 ALTER TABLE `card1` DISABLE KEYS */;
INSERT INTO `card1` VALUES ('comp_14a',0,2,'comp_14a.pdf','2023-03-06','asbhcjvsvasc\r\nsfncsk\r\nscanck','2023-11-23');
/*!40000 ALTER TABLE `card1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card2`
--

DROP TABLE IF EXISTS `card2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card2` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card2`
--

LOCK TABLES `card2` WRITE;
/*!40000 ALTER TABLE `card2` DISABLE KEYS */;
INSERT INTO `card2` VALUES ('comp_14a',0,1,'comp_14a.pdf','2023-03-02',NULL,'2023-11-23');
/*!40000 ALTER TABLE `card2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card3`
--

DROP TABLE IF EXISTS `card3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card3` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card3`
--

LOCK TABLES `card3` WRITE;
/*!40000 ALTER TABLE `card3` DISABLE KEYS */;
INSERT INTO `card3` VALUES ('comp_14a',0,3,'comp_14a.docx','2023-02-28',NULL,'2023-10-25');
/*!40000 ALTER TABLE `card3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card4`
--

DROP TABLE IF EXISTS `card4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card4` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card4`
--

LOCK TABLES `card4` WRITE;
/*!40000 ALTER TABLE `card4` DISABLE KEYS */;
INSERT INTO `card4` VALUES ('comp_14a',0,2,'comp_14a.pdf','2023-03-06',NULL,NULL);
/*!40000 ALTER TABLE `card4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card5`
--

DROP TABLE IF EXISTS `card5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card5` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card5`
--

LOCK TABLES `card5` WRITE;
/*!40000 ALTER TABLE `card5` DISABLE KEYS */;
INSERT INTO `card5` VALUES ('comp_14a',0,2,'comp_14a.pdf','2023-02-28',NULL,NULL);
/*!40000 ALTER TABLE `card5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card6`
--

DROP TABLE IF EXISTS `card6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card6` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card6`
--

LOCK TABLES `card6` WRITE;
/*!40000 ALTER TABLE `card6` DISABLE KEYS */;
INSERT INTO `card6` VALUES ('comp_14a',0,3,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `card6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card7`
--

DROP TABLE IF EXISTS `card7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card7` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card7`
--

LOCK TABLES `card7` WRITE;
/*!40000 ALTER TABLE `card7` DISABLE KEYS */;
INSERT INTO `card7` VALUES ('comp_14a',0,0,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `card7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card8`
--

DROP TABLE IF EXISTS `card8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card8` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card8`
--

LOCK TABLES `card8` WRITE;
/*!40000 ALTER TABLE `card8` DISABLE KEYS */;
INSERT INTO `card8` VALUES ('comp_14a',0,0,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `card8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card9`
--

DROP TABLE IF EXISTS `card9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card9` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card9`
--

LOCK TABLES `card9` WRITE;
/*!40000 ALTER TABLE `card9` DISABLE KEYS */;
INSERT INTO `card9` VALUES ('comp_14a',0,2,'comp_14a.pdf','2023-02-28',NULL,NULL);
/*!40000 ALTER TABLE `card9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grouplog`
--

DROP TABLE IF EXISTS `grouplog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grouplog` (
  `group_id` int NOT NULL AUTO_INCREMENT,
  `username_g` varchar(100) DEFAULT NULL,
  `password_g` varchar(100) DEFAULT NULL,
  `name_1` varchar(100) DEFAULT NULL,
  `rollno_1` int DEFAULT NULL,
  `name_2` varchar(100) DEFAULT NULL,
  `rollno_2` int DEFAULT NULL,
  `name_3` varchar(100) DEFAULT NULL,
  `rollno_3` int DEFAULT NULL,
  `name_4` varchar(100) DEFAULT NULL,
  `rollno_4` int DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `project_domain` varchar(100) DEFAULT NULL,
  `guide_username` varchar(45) DEFAULT NULL,
  `count` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grouplog`
--

LOCK TABLES `grouplog` WRITE;
/*!40000 ALTER TABLE `grouplog` DISABLE KEYS */;
INSERT INTO `grouplog` VALUES (1,'comp_14a','14a_comp','Jayesh Chaudhari',1021119,'Om Kolhe',1021159,'Devashish Jawale',1021150,'NULL',0,'PMS','web development','guide01',2),(2,'','','test01',1234567,'test02',1234568,'test03',1234569,'test04',0,'','','',0),(3,'','','a',1,'b',2,'c',3,'d',4,'','','',0);
/*!40000 ALTER TABLE `grouplog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guidelogin`
--

DROP TABLE IF EXISTS `guidelogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guidelogin` (
  `guide_name` varchar(50) DEFAULT NULL,
  `guide_username` varchar(100) NOT NULL,
  `guide_password` varchar(100) DEFAULT NULL,
  `guide_role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`guide_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guidelogin`
--

LOCK TABLES `guidelogin` WRITE;
/*!40000 ALTER TABLE `guidelogin` DISABLE KEYS */;
INSERT INTO `guidelogin` VALUES ('The Admin','admin','admin','coordinator'),('Mrs. Kavita S','guide01','guide01','guide'),('Mrs. Harshita B','guide02','guide02','Guide');
/*!40000 ALTER TABLE `guidelogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `student_roll` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `phone_no` bigint DEFAULT NULL,
  `division` varchar(3) DEFAULT NULL,
  `sem1_sgpi` double DEFAULT NULL,
  `sem2_sgpi` double DEFAULT NULL,
  `emailId` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`student_roll`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1021119,'Jayesh Nilesh Chaudhari','computer',91983464338,'a',9,9,'nilimajnc@gmail.com'),(1021150,'Devashish Jawale','computer',919067374010,'a',10,9,'devashishjawale4123@gmail.com');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-21 21:36:21
