
--
-- Table structure for table `tblpersonas`
--

DROP TABLE IF EXISTS `tblpersonas`;
CREATE TABLE `tblpersonas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpersonas`
--

LOCK TABLES `tblpersonas` WRITE;
/*!40000 ALTER TABLE `tblpersonas` DISABLE KEYS */;
INSERT INTO `tblpersonas` VALUES (1,'El piojo'),(2,'La liendra');
/*!40000 ALTER TABLE `tblpersonas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

