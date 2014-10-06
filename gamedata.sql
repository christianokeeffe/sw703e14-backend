CREATE DATABASE  IF NOT EXISTS `okeeffed_smartgrid` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `okeeffed_smartgrid`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: smartgrid
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `appliance_type`
--

DROP TABLE IF EXISTS `appliance_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appliance_type` (
  `typeID` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appliance_type`
--

LOCK TABLES `appliance_type` WRITE;
/*!40000 ALTER TABLE `appliance_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `appliance_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appliances`
--

DROP TABLE IF EXISTS `appliances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appliances` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` int(255) NOT NULL,
  `price` int(11) NOT NULL,
  `energyLabel` varchar(3) NOT NULL,
  `energyConsumption` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appliances`
--

LOCK TABLES `appliances` WRITE;
/*!40000 ALTER TABLE `appliances` DISABLE KEYS */;
INSERT INTO `appliances` VALUES (1,1,0,'',0,0),(2,2,0,'',0,0);
/*!40000 ALTER TABLE `appliances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gamedata`
--

DROP TABLE IF EXISTS `gamedata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gamedata` (
  `saveID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `savings` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`userID`,`saveID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gamedata`
--

LOCK TABLES `gamedata` WRITE;
/*!40000 ALTER TABLE `gamedata` DISABLE KEYS */;
/*!40000 ALTER TABLE `gamedata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_appliances`
--

DROP TABLE IF EXISTS `user_appliances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_appliances` (
  `userID` int(11) NOT NULL,
  `applianceID` varchar(45) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_appliances`
--

LOCK TABLES `user_appliances` WRITE;
/*!40000 ALTER TABLE `user_appliances` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_appliances` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-06  9:32:18
