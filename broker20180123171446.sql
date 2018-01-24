-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: broker
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Table structure for table `house_admin`
--

DROP TABLE IF EXISTS `house_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `code` int(11) NOT NULL,
  `last_login_time` varchar(32) COLLATE utf8_bin NOT NULL,
  `last_login_ip` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`username`,`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_admin`
--

LOCK TABLES `house_admin` WRITE;
/*!40000 ALTER TABLE `house_admin` DISABLE KEYS */;
INSERT INTO `house_admin` VALUES (1,'admin','94defa89a55fbc5dc28c0ed9c0835d7d',0,1515807857,1515805678,1,6570,'1516069418','::1');
/*!40000 ALTER TABLE `house_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_band_look`
--

DROP TABLE IF EXISTS `house_band_look`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_band_look` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `city_id` int(11) NOT NULL,
  `city_path` varchar(200) COLLATE utf8_bin NOT NULL,
  `broker_id` int(11) NOT NULL,
  `classify` tinyint(1) NOT NULL,
  `genre` tinyint(1) NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `unique` (`name`,`city_id`,`broker_id`,`classify`,`genre`,`create_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_band_look`
--

LOCK TABLES `house_band_look` WRITE;
/*!40000 ALTER TABLE `house_band_look` DISABLE KEYS */;
/*!40000 ALTER TABLE `house_band_look` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_broker`
--

DROP TABLE IF EXISTS `house_broker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_broker` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `code` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `position` tinyint(4) NOT NULL,
  `entry_time` int(11) NOT NULL,
  `city_id` varchar(200) COLLATE utf8_bin NOT NULL,
  `estate` varchar(200) COLLATE utf8_bin NOT NULL,
  `label_id` varchar(100) COLLATE utf8_bin NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `last_login_ip` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_login_time` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `broker_img` varchar(100) COLLATE utf8_bin NOT NULL,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `undkey` (`email`,`phone`),
  KEY `key` (`label_id`,`create_time`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_broker`
--

LOCK TABLES `house_broker` WRITE;
/*!40000 ALTER TABLE `house_broker` DISABLE KEYS */;
INSERT INTO `house_broker` VALUES (4,'李四','7fec9b4921a16e1f5a0b208895050f80',6582,'820422191@qq.com','13563990501',2,1510848000,'a:2:{i:31;i:31;i:30;i:30;}','a:3:{i:0;s:1:\"7\";i:1;s:1:\"5\";i:2;s:1:\"3\";}','',0,1516091172,1515997024,1,'::1',1516519977,2,'20180116\\a95af024d242e323f40ab738a0969824.jpg','青春美少女组合是中国国内的一个歌舞组合,是旅日华人陈丽卿女士创办的北京青春鸟影视艺术发展中心的学员创办于1996年,曾代表内地出访过日本'),(5,'李超','69ab8c6e6d8864cf01760267192359f6',4063,'8204221911@qq.com','13563990503',1,1503504000,'a:2:{i:31;i:31;i:30;i:30;}','a:3:{i:0;s:1:\"7\";i:1;s:1:\"5\";i:2;s:1:\"3\";}','',0,1516091185,1516084101,1,'::1',1516084557,2,'20180116\\a95af024d242e323f40ab738a0969824.jpg','青春美少女组合是中国国内的一个歌舞组合,是旅日华人陈丽卿女士创办的北京青春鸟影视艺术发展中心的学员创办于1996年,曾代表内地出访过日本');
/*!40000 ALTER TABLE `house_broker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_city`
--

DROP TABLE IF EXISTS `house_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `pid` varchar(50) COLLATE utf8_bin NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`pid`,`create_time`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_city`
--

LOCK TABLES `house_city` WRITE;
/*!40000 ALTER TABLE `house_city` DISABLE KEYS */;
INSERT INTO `house_city` VALUES (1,'山东省','0',5,1515742228,1515490532,1),(2,'临沂市','1',5,1515747559,1515490675,1),(3,'兰山区','2',0,1515490682,1515490682,1),(4,'罗庄区','2',10,1515553874,1515546914,1),(5,'河东区','2',5,1515553859,1515546926,1),(6,'郯城县','2',9,1515553868,1515547341,1),(7,'兰陵县','2',5,1515564417,1515547362,1),(8,'北城新区','2',19,1515555823,1515547376,1),(9,'沂水县','2',0,1515556549,1515556549,1),(30,'沂龙湾','8',0,1515566376,1515566376,1),(31,'银河湾','8',0,1515566381,1515566381,1);
/*!40000 ALTER TABLE `house_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_collect`
--

DROP TABLE IF EXISTS `house_collect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_collect` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `house_type` tinyint(1) NOT NULL,
  `house_id` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_collect`
--

LOCK TABLES `house_collect` WRITE;
/*!40000 ALTER TABLE `house_collect` DISABLE KEYS */;
INSERT INTO `house_collect` VALUES (4,4,2,3,0),(8,4,1,27,0);
/*!40000 ALTER TABLE `house_collect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_estate`
--

DROP TABLE IF EXISTS `house_estate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_estate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `city_id` int(11) NOT NULL,
  `city_path` varchar(200) COLLATE utf8_bin NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`city_id`,`create_time`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_estate`
--

LOCK TABLES `house_estate` WRITE;
/*!40000 ALTER TABLE `house_estate` DISABLE KEYS */;
INSERT INTO `house_estate` VALUES (7,'测试测试测试测试',31,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}',0,1515740231,1515740231,1),(5,'艺龙网御园得我',31,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}',5,1515571440,1515571385,1),(3,'艺龙网御园',30,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}',9,1515574193,1515570068,1),(8,'万成花开',31,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}',0,1516085152,1516085152,1),(9,'的离开撒了',31,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}',0,1516085158,1516085158,1),(10,'惺惺惜惺惺',31,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}',0,1516085162,1516085162,1);
/*!40000 ALTER TABLE `house_estate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_evaluate`
--

DROP TABLE IF EXISTS `house_evaluate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_evaluate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `broker_id` int(11) NOT NULL,
  `classify` tinyint(1) NOT NULL,
  `grade` tinyint(4) NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`broker_id`,`classify`,`create_time`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_evaluate`
--

LOCK TABLES `house_evaluate` WRITE;
/*!40000 ALTER TABLE `house_evaluate` DISABLE KEYS */;
/*!40000 ALTER TABLE `house_evaluate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_img`
--

DROP TABLE IF EXISTS `house_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_img` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_bin NOT NULL,
  `classify` tinyint(4) NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `house_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`classify`,`create_time`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_img`
--

LOCK TABLES `house_img` WRITE;
/*!40000 ALTER TABLE `house_img` DISABLE KEYS */;
INSERT INTO `house_img` VALUES (50,'20180115\\64a41735d5566e51ea96125d7b4a92ab.jpg',2,0,1516002799,1516002799,1,1),(49,'20180115\\59555f77a0a09f95aa4033a3e61c8184.jpg',2,0,1516002799,1516002799,1,1),(48,'20180115\\d3f9d322e6ccf13d8d9af16816d80e58.jpg',1,0,1515996278,1515996278,1,27),(45,'20180115\\19cf24d374e25eb08f3af2a9443a120e.jpg',1,0,1515996278,1515996278,1,27),(46,'20180115\\24d9ff5025ed69b62b47079af215d218.jpg',1,0,1515996278,1515996278,1,27),(47,'20180115\\ca3b2f0367fa502415155a45ebb11c4d.jpg',1,0,1515996278,1515996278,1,27),(65,'20180116\\fba42b87df0fb5f0135f153bc1d68973.jpg',1,0,1516085479,1516085479,1,28),(64,'20180116\\2f2a019e6634180ed26aa7a94bbeeaf6.jpg',1,0,1516085479,1516085479,1,28),(63,'20180116\\a95af024d242e323f40ab738a0969824.jpg',1,0,1516085479,1516085479,1,28),(62,'20180116\\5ed7816a173d072be6966104b70ac5df.jpg',1,0,1516085479,1516085479,1,28),(61,'20180115\\eaf43ed362d12536e38c38f78a03e552.jpg',2,0,1516006538,1516006538,1,2),(60,'20180115\\d89d1a66c2fe81290e3fb0bed1985d75.jpg',2,0,1516006538,1516006538,1,2),(56,'20180115\\3c2150caa0192a3b7f932e46e7d310da.jpg',2,0,1516006356,1516006356,1,3),(55,'20180115\\bfb583ffa6d04ee8a9a9e41aaff9bc4f.jpg',2,0,1516006356,1516006356,1,3),(58,'20180115\\0ec98fd65a16ca76eeaaead06e5ab2fd.jpg',2,0,1516006538,1516006538,1,2),(51,'20180115\\654bc05d2fe5dd049043234ba0c7c9e1.jpg',2,0,1516002799,1516002799,1,1),(52,'20180115\\d9931e9ce551cbb432931730a861c781.jpg',2,0,1516002799,1516002799,1,1),(53,'20180115\\377e865e421d6650550ccf9673494449.jpg',2,0,1516005888,1516005888,1,2),(59,'20180115\\4c5e11c0883ed8ebb23080b88c04054e.jpg',2,0,1516006538,1516006538,1,2);
/*!40000 ALTER TABLE `house_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_location`
--

DROP TABLE IF EXISTS `house_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  `city_id` int(11) NOT NULL,
  `city_path` varchar(200) COLLATE utf8_bin NOT NULL,
  `broker_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `location_tel` varchar(11) COLLATE utf8_bin NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `broker_username` varchar(50) COLLATE utf8_bin NOT NULL,
  `broker_password` varchar(32) COLLATE utf8_bin NOT NULL,
  `broker_tel` varchar(11) COLLATE utf8_bin NOT NULL,
  `code` int(11) NOT NULL,
  `last_login_time` int(11) NOT NULL,
  `last_login_ip` varchar(50) COLLATE utf8_bin NOT NULL,
  `location_img` varchar(100) COLLATE utf8_bin NOT NULL,
  `location_broker_img` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`name`,`address`),
  KEY `key` (`city_id`,`update_time`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_location`
--

LOCK TABLES `house_location` WRITE;
/*!40000 ALTER TABLE `house_location` DISABLE KEYS */;
INSERT INTO `house_location` VALUES (1,'艺龙网御园','山东省临沂市兰山区枣沟头镇陶家庄村',31,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}','张三','21474836471',7,1515744139,1515741946,1,'820asdasdas111','ba280fae0f4e56f31639af48453dd6c6','13563990501',7301,0,'','',''),(2,'测试测试测试测试','&lt;script&gt;window.alert(\'哈哈\')&lt;script&gt;',30,'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"8\";}','张三','13563990501',9,1516090789,1515744212,1,'zhangsan','5937e1506b29240eebe0f4441a98cf72','13563990501',6334,0,'','','');
/*!40000 ALTER TABLE `house_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_look`
--

DROP TABLE IF EXISTS `house_look`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_look` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `broker_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `house_type` tinyint(1) NOT NULL,
  `desc` varchar(200) COLLATE utf8_bin NOT NULL,
  `evaluate` varchar(255) COLLATE utf8_bin NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `listorder` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `house_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_look`
--

LOCK TABLES `house_look` WRITE;
/*!40000 ALTER TABLE `house_look` DISABLE KEYS */;
INSERT INTO `house_look` VALUES (1,'13563990501','刘先生',4,0,0,2,'大声地哭是骄傲科技的撒','',1516439426,1516439426,3,0,1,3),(2,'13563990501','张三',4,4,5,1,'123456789','实打实萨的卡斯计划撒娇和',1516501350,1516677518,1,0,1,28);
/*!40000 ALTER TABLE `house_look` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_new_house`
--

DROP TABLE IF EXISTS `house_new_house`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_new_house` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orientation` tinyint(4) NOT NULL,
  `room` tinyint(4) NOT NULL,
  `hall` tinyint(4) NOT NULL,
  `toilet` tinyint(4) NOT NULL,
  `proportion` decimal(20,2) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `house_type` varchar(255) COLLATE utf8_bin NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `label_id` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`orientation`,`room`,`hall`,`proportion`,`price`,`create_time`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_new_house`
--

LOCK TABLES `house_new_house` WRITE;
/*!40000 ALTER TABLE `house_new_house` DISABLE KEYS */;
/*!40000 ALTER TABLE `house_new_house` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_rent_house`
--

DROP TABLE IF EXISTS `house_rent_house`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_rent_house` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rent_type` tinyint(4) NOT NULL,
  `payment_type` tinyint(4) NOT NULL,
  `actuality` varchar(200) COLLATE utf8_bin NOT NULL,
  `lightspot` varchar(255) COLLATE utf8_bin NOT NULL,
  `house_type` varchar(255) COLLATE utf8_bin NOT NULL,
  `decorate_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `mating` varchar(255) COLLATE utf8_bin NOT NULL,
  `estate_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `proportion` decimal(20,2) NOT NULL,
  `room` tinyint(4) NOT NULL,
  `hall` tinyint(4) NOT NULL,
  `toilet` tinyint(4) NOT NULL,
  `floor` int(11) NOT NULL,
  `all_floor` int(11) NOT NULL,
  `orientation` tinyint(4) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `estate_id` int(11) NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lift` varchar(255) COLLATE utf8_bin NOT NULL,
  `setSax` tinyint(1) NOT NULL,
  `property` tinyint(1) NOT NULL,
  `decorate` tinyint(1) NOT NULL,
  `purpose` tinyint(1) NOT NULL,
  `title` varchar(120) COLLATE utf8_bin NOT NULL,
  `broker_id` int(11) NOT NULL,
  `broker_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `label` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`rent_type`,`actuality`,`room`,`orientation`,`price`,`estate_id`,`create_time`,`status`,`property`,`decorate`,`purpose`,`broker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_rent_house`
--

LOCK TABLES `house_rent_house` WRITE;
/*!40000 ALTER TABLE `house_rent_house` DISABLE KEYS */;
INSERT INTO `house_rent_house` VALUES (3,2,7,'1','2015年12月20日 - Oops Friends Will Be Friends (2011 Remaster) 苏菲亚...等 大风吹 寻 Blood Sugar See You Again (feat....2 Soon Eternity Prepare for Disappoint...','2015年12月20日 - Oops Friends Will Be Friends (2011 Remaster) 苏菲亚...等 大风吹 寻 Blood Sugar See You Again (feat....2 Soon Eternity Prepare for Disappoint...','2015年12月20日 - Oops Friends Will Be Friends (2011 Remaster) 苏菲亚...等 大风吹 寻 Blood Sugar See You Again (feat....2 Soon Eternity Prepare for Disappoint...','2015年12月20日 - Oops Friends Will Be Friends (2011 Remaster) 苏菲亚...等 大风吹 寻 Blood Sugar See You Again (feat....2 Soon Eternity Prepare for Disappoint...','2015年12月20日 - Oops Friends Will Be Friends (2011 Remaster) 苏菲亚...等 大风吹 寻 Blood Sugar See You Again (feat....2 Soon Eternity Prepare for Disappoint...',130.00,5,5,1,150,1120,3,1300.00,3,0,1516006687,1516006356,1,'a:8:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"8\";i:5;s:1:\"9\";i:6;s:2:\"10\";i:7;s:2:\"12\";}',1,1,3,3,'测试测试测试测试',5,'李四','a:1:{i:0;s:1:\"5\";}');
/*!40000 ALTER TABLE `house_rent_house` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_second_house`
--

DROP TABLE IF EXISTS `house_second_house`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_second_house` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `estate_id` int(11) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `proportion` decimal(20,2) NOT NULL,
  `room` tinyint(4) NOT NULL,
  `hall` tinyint(4) NOT NULL,
  `toilet` tinyint(4) NOT NULL,
  `floor` int(11) NOT NULL,
  `all_floor` int(11) NOT NULL,
  `orientation` tinyint(4) NOT NULL,
  `decorate` tinyint(4) NOT NULL,
  `activate_time` int(11) NOT NULL,
  `see_house` varchar(255) COLLATE utf8_bin NOT NULL,
  `number` int(11) NOT NULL,
  `broker_id` int(11) NOT NULL,
  `broker_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `prop_age` tinyint(4) NOT NULL,
  `certificate` tinyint(4) NOT NULL,
  `purpose` tinyint(4) NOT NULL,
  `label` varchar(255) COLLATE utf8_bin NOT NULL,
  `selling_points` text COLLATE utf8_bin NOT NULL,
  `house_type` text COLLATE utf8_bin NOT NULL,
  `estate_desc` text COLLATE utf8_bin NOT NULL,
  `listorder` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `prop_type` tinyint(1) NOT NULL,
  `lift` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`estate_id`,`price`,`proportion`,`room`,`hall`,`floor`,`all_floor`,`orientation`,`decorate`,`activate_time`,`see_house`,`broker_id`,`lift`(4),`create_time`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_second_house`
--

LOCK TABLES `house_second_house` WRITE;
/*!40000 ALTER TABLE `house_second_house` DISABLE KEYS */;
INSERT INTO `house_second_house` VALUES (28,3,170.00,520.00,4,4,1,130,1111,2,2,2017,'大厦测是承认是大厦',0,5,'李超',2,2,3,'a:3:{i:0;s:1:\"1\";i:1;s:1:\"3\";i:2;s:1:\"4\";}','史蒂夫·乔布斯[1]  （Steve Jobs，1955年2月24日—2011年10月5日[2]  ），出生于美国加利福尼亚州旧金山，美国发明家、企业家、美国苹果公司联合创办人。[3]','史蒂夫·乔布斯[1]  （Steve Jobs，1955年2月24日—2011年10月5日[2]  ），出生于美国加利福尼亚州旧金山，美国发明家、企业家、美国苹果公司联合创办人。[3]','史蒂夫·乔布斯[1]  （Steve Jobs，1955年2月24日—2011年10月5日[2]  ），出生于美国加利福尼亚州旧金山，美国发明家、企业家、美国苹果公司联合创办人。[3]',0,1516085479,1516085479,1,'测试测试测试测试测试',4,'a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}'),(27,7,130.00,130.00,4,4,5,150,11111,5,4,2017,'测手册是测试橙色测试测试',0,5,'李超',1,2,4,'a:2:{i:0;s:1:\"1\";i:1;s:1:\"3\";}','萨达十大','按时打算的撒','大师的飒飒大',0,1515996574,1515996278,1,'测试测试测试测试测试',2,'a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}');
/*!40000 ALTER TABLE `house_second_house` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_user`
--

DROP TABLE IF EXISTS `house_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `listorder` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8_bin NOT NULL,
  `code` int(11) NOT NULL,
  `last_login_time` int(11) NOT NULL,
  `last_login_ip` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `key` (`phone`,`create_time`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_user`
--

LOCK TABLES `house_user` WRITE;
/*!40000 ALTER TABLE `house_user` DISABLE KEYS */;
INSERT INTO `house_user` VALUES (4,'张三','73748348c510eee61c270dd7d269d2ce','13563990501',1516413793,1516413793,1,0,'20180116\\5ed7816a173d072be6966104b70ac5df.jpg',9010,1516698316,'::1');
/*!40000 ALTER TABLE `house_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-23 17:14:49
