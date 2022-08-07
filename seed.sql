-- MySQL dump 10.13  Distrib 8.0.29, for macos12 (arm64)
--
-- Host: localhost    Database: db_miranda
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `special_request` varchar(255) DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  `status` enum('checkIn','checkOut','inProgress') DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'Leora Spencer','2021-09-25','2023-05-13','2023-07-27','I\'ll calculate the open-source IP bus, that should monitor the UDP bus!',6,'checkOut'),(2,'Lilly Homenick','2022-01-12','2022-10-17','2023-03-11','The CLI system is down, input the mobile hard drive so we can parse the UTF8 hard drive!',5,'inProgress'),(3,'Rex Jacobson','2022-07-09','2022-12-01','2022-10-27','I\'ll quantify the primary TCP port, that should array the AGP circuit!',5,'checkOut'),(4,'Ignatius Cummings','2021-11-14','2023-06-17','2023-05-24','We need to connect the auxiliary JBOD array!',3,'checkIn'),(5,'Callie Shields','2022-04-04','2022-08-30','2023-04-16','We need to generate the open-source HDD interface!',3,'checkIn'),(6,'Vivienne Hayes','2022-04-27','2023-03-23','2023-03-17','I\'ll transmit the multi-byte SCSI capacitor, that should firewall the THX interface!',3,'checkOut'),(7,'Cory Ryan','2021-08-20','2022-08-25','2022-12-28','If we quantify the bus, we can get to the API microchip through the open-source RSS circuit!',6,'inProgress'),(8,'Roel Pollich','2022-04-18','2022-10-07','2023-04-04','navigating the feed won\'t do anything, we need to compress the virtual TLS hard drive!',7,'inProgress'),(9,'Kaya Bayer','2021-11-18','2022-08-17','2023-05-12','We need to back up the digital SSD hard drive!',3,'checkOut'),(10,'Bret Heidenreich','2022-04-20','2023-03-22','2023-04-08','Use the mobile SMS card, then you can navigate the multi-byte transmitter!',4,'inProgress');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_date` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Estella Fay','Annie74@hotmail.com','815-262-685','2022-05-16','If we back up the capacitor, we can get to the PNG port through the cross-platform THX application!','Neque dolor exercitationem minus officiis aspernatur non ad accusamus.',0,1),(2,'Ola Koch','Kristian16@gmail.com','799-975-389','2022-04-01','I\'ll program the optical DNS transmitter, that should program the DRAM sensor!','Eum sint soluta rerum et suscipit voluptas.',0,1),(3,'Jason Kovacek','Lisa34@hotmail.com','053-397-086','2021-09-03','quantifying the driver won\'t do anything, we need to input the neural SSD card!','Neque soluta quis fuga est.',1,0),(4,'Katelyn Schulist','Alana30@hotmail.com','506-143-702','2022-01-13','You can\'t navigate the circuit without indexing the online SCSI alarm!','Molestiae et sed amet ducimus ut rerum.',0,1),(5,'Afton Howell','Skye.Block0@gmail.com','830-807-312','2022-02-26','If we input the bandwidth, we can get to the JSON system through the digital JBOD panel!','Est possimus voluptas qui accusantium voluptatem dolore.',1,0),(6,'Jeramie Mayert','Hollis.Weber81@hotmail.com','653-054-914','2022-07-08','If we quantify the program, we can get to the TCP system through the optical EXE capacitor!','Voluptatem nam aliquid.',1,0),(7,'Adell Kuhic','Alysa33@yahoo.com','740-792-450','2022-04-07','connecting the monitor won\'t do anything, we need to generate the mobile ASCII card!','Et incidunt at.',1,1),(8,'Eunice Ritchie','Sarai.Bednar39@gmail.com','514-212-927','2022-01-08','Try to synthesize the RSS interface, maybe it will compress the online application!','Dicta aut dolorum laudantium odit quo.',0,1),(9,'Rahsaan Veum','Rosanna.Oberbrunner2@gmail.com','968-158-677','2022-02-27','If we generate the driver, we can get to the PNG hard drive through the multi-byte HTTP hard drive!','Rerum et aut eum minima aut voluptatum placeat.',1,0),(10,'Isai Jacobson','Derrick79@hotmail.com','603-026-966','2021-10-10','We need to quantify the neural DNS circuit!','Aut qui vel dicta officiis veritatis sit.',1,1),(11,'Hilda Ortiz','Keshaun_Dibbert@hotmail.com','196-855-993','2021-09-06','Try to calculate the XML transmitter, maybe it will generate the virtual firewall!','Nobis quaerat velit maiores et.',0,1),(12,'Everette Treutel','Caleigh_Schaefer54@gmail.com','955-532-362','2022-05-11','backing up the feed won\'t do anything, we need to calculate the virtual HTTP monitor!','Voluptatum dolor sed quia magni ad ducimus ut eius sint.',1,0),(13,'Madalyn Bashirian','Jena.McCullough@gmail.com','456-329-908','2021-09-14','We need to input the 1080p SSL application!','Illo fugit sint rem iusto earum voluptatem aut quis.',0,1),(14,'Axel Trantow','Lucius_Wintheiser@yahoo.com','121-601-712','2022-06-16','Try to reboot the SCSI monitor, maybe it will synthesize the open-source transmitter!','Veniam excepturi sequi omnis eos delectus aspernatur quo.',0,1),(15,'Richard Moen','Annamarie_Cronin@hotmail.com','118-606-434','2021-11-19','Use the virtual SMS sensor, then you can override the multi-byte microchip!','Ex fugit fugiat id.',0,0),(16,'Carey McKenzie','Orlando_Rath19@hotmail.com','233-332-424','2022-01-12','Use the online UTF8 card, then you can quantify the primary alarm!','Qui nemo dolorem et inventore quasi vitae.',1,0),(17,'Elvera Shields','Linnie24@yahoo.com','648-317-244','2022-07-02','Try to quantify the TLS bandwidth, maybe it will calculate the mobile card!','Dignissimos sed fuga eligendi suscipit vel earum veniam.',1,1),(18,'Agnes Lemke','Salvador62@gmail.com','634-502-264','2022-05-13','Use the haptic ASCII circuit, then you can transmit the mobile card!','Aut voluptas sequi dolorem perspiciatis exercitationem quasi id deserunt ut.',0,1),(19,'Alfreda Dibbert','Newell56@hotmail.com','499-556-766','2021-09-21','If we input the panel, we can get to the API application through the neural HEX capacitor!','Maiores debitis aut consectetur eaque.',1,1),(20,'Alexys Flatley','Vincent_Bins31@gmail.com','321-131-979','2021-10-09','You can\'t reboot the array without backing up the bluetooth ASCII system!','Atque consequatur rerum aut natus et.',0,0);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_images`
--

DROP TABLE IF EXISTS `room_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_images` (
  `room_id` int NOT NULL,
  `url_image` varchar(255) NOT NULL,
  KEY `room_id` (`room_id`),
  CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_images`
--

LOCK TABLES `room_images` WRITE;
/*!40000 ALTER TABLE `room_images` DISABLE KEYS */;
INSERT INTO `room_images` VALUES (1,'https://loremflickr.com/640/480/?65366'),(1,'https://loremflickr.com/640/480/?71530'),(1,'https://loremflickr.com/640/480/?65360'),(1,'https://loremflickr.com/640/480/?63116'),(1,'https://loremflickr.com/640/480/?51012'),(2,'https://loremflickr.com/640/480/?51057'),(2,'https://loremflickr.com/640/480/?58589'),(2,'https://loremflickr.com/640/480/?38442'),(2,'https://loremflickr.com/640/480/?94760'),(2,'https://loremflickr.com/640/480/?20636'),(3,'https://loremflickr.com/640/480/?19700'),(3,'https://loremflickr.com/640/480/?55086'),(3,'https://loremflickr.com/640/480/?27884'),(3,'https://loremflickr.com/640/480/?62998'),(3,'https://loremflickr.com/640/480/?53613'),(4,'https://loremflickr.com/640/480/?91450'),(4,'https://loremflickr.com/640/480/?50812'),(4,'https://loremflickr.com/640/480/?96328'),(4,'https://loremflickr.com/640/480/?91826'),(4,'https://loremflickr.com/640/480/?53078'),(5,'https://loremflickr.com/640/480/?83422'),(5,'https://loremflickr.com/640/480/?86669'),(5,'https://loremflickr.com/640/480/?20093'),(5,'https://loremflickr.com/640/480/?84871'),(5,'https://loremflickr.com/640/480/?41080'),(6,'https://loremflickr.com/640/480/?73086'),(6,'https://loremflickr.com/640/480/?15738'),(6,'https://loremflickr.com/640/480/?15946'),(6,'https://loremflickr.com/640/480/?54504'),(6,'https://loremflickr.com/640/480/?70121'),(7,'https://loremflickr.com/640/480/?45450'),(7,'https://loremflickr.com/640/480/?74946'),(7,'https://loremflickr.com/640/480/?52841'),(7,'https://loremflickr.com/640/480/?86856'),(7,'https://loremflickr.com/640/480/?40254'),(8,'https://loremflickr.com/640/480/?55661'),(8,'https://loremflickr.com/640/480/?11377'),(8,'https://loremflickr.com/640/480/?79694'),(8,'https://loremflickr.com/640/480/?1591'),(8,'https://loremflickr.com/640/480/?19907'),(9,'https://loremflickr.com/640/480/?62401'),(9,'https://loremflickr.com/640/480/?11962'),(9,'https://loremflickr.com/640/480/?31479'),(9,'https://loremflickr.com/640/480/?33162'),(9,'https://loremflickr.com/640/480/?4604'),(10,'https://loremflickr.com/640/480/?92938'),(10,'https://loremflickr.com/640/480/?20639'),(10,'https://loremflickr.com/640/480/?89181'),(10,'https://loremflickr.com/640/480/?11650'),(10,'https://loremflickr.com/640/480/?5661');
/*!40000 ALTER TABLE `room_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_number` smallint NOT NULL,
  `bed_type` enum('single_bed','double_bed','double_superior','suite') NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `offer` tinyint(1) DEFAULT NULL,
  `price` smallint NOT NULL,
  `discount` smallint DEFAULT NULL,
  `cancellation` varchar(255) DEFAULT NULL,
  `amenities` varchar(255) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,1,'double_bed','Corrupti ut enim atque officiis itaque hic repudiandae iure voluptate.',0,92,13,'Non dolorem consequatur maiores in ad eum iusto nemo excepturi.','TV WIFI BATHROOM-KIT JACUZZI HAIR-DRYER'),(2,1,'suite','Laudantium quia qui qui et sed perspiciatis aut repellendus molestias.',1,65,7,'Beatae eos sit optio dolores rerum eos sit voluptas hic.','TV WIFI BATHROOM-KIT MINIBAR JACUZZI'),(3,2,'single_bed','Voluptates nobis molestias magnam dolores cupiditate ut occaecati aspernatur mollitia.',0,91,10,'Sit ut provident omnis eveniet rerum eveniet atque laborum porro.','TV WIFI BATHROOM-KIT MINIBAR HAIR-DRYER'),(4,3,'suite','Voluptas alias ut velit voluptatem eius eaque laboriosam repellendus est.',0,52,1,'Nostrum harum rerum laborum at totam deserunt sit numquam facilis.','TV WIFI BATHROOM-KIT JACUZZI HAIR-DRYER'),(5,4,'double_bed','Eius accusantium quis officiis vero dolor nesciunt nemo ut recusandae.',1,50,11,'Unde reiciendis iusto ratione sunt sit et omnis accusamus blanditiis.','TV WIFI BATHROOM-KIT HAIR-DRYER JACUZZI'),(6,5,'single_bed','Perferendis eaque delectus quia possimus ducimus ipsa velit voluptatem eius.',0,53,0,'Reprehenderit vero officiis cupiditate quis est repellendus est earum eum.','TV WIFI BATHROOM-KIT HAIR-DRYER JACUZZI'),(7,6,'suite','Cumque laborum voluptatum rerum aperiam ratione consectetur hic veniam molestiae.',0,91,0,'Suscipit sed aspernatur iure placeat qui eveniet voluptatem occaecati rerum.','TV WIFI BATHROOM-KIT MINIBAR HAIR-DRYER'),(8,7,'suite','Animi non omnis porro dolore necessitatibus placeat rem quis est.',0,68,14,'Et tempore et quia et neque temporibus consequatur ut accusantium.','TV WIFI BATHROOM-KIT JACUZZI HAIR-DRYER'),(9,8,'single_bed','Fugiat quia eligendi a qui quidem eos dolores ut sint.',1,83,15,'Necessitatibus alias qui nostrum tempore veritatis expedita sit id deserunt.','TV WIFI BATHROOM-KIT HAIR-DRYER MINIBAR'),(10,9,'single_bed','Animi culpa ab tempore laborum consequuntur quis molestiae sunt dolorem.',0,72,14,'Ut natus aut et laborum aut amet repudiandae rerum saepe.','TV WIFI BATHROOM-KIT HAIR-DRYER MINIBAR'),(11,10,'double_bed','Aut sit vel rerum iure nostrum atque nihil eveniet earum.',0,53,5,'Similique delectus aliquam voluptas est fugit qui dolores vel atque.','TV WIFI BATHROOM-KIT HAIR-DRYER MINIBAR');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `occupation` enum('manager','reception','room_service') DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'EmileWintheiser','Christine24@gmail.com','906-104-000','2021-11-07','reception','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/916.jpg',0,'$2b$05$3G.OS9k0opet1dKZJFnO/eGr6p058qVXpiVD4vqdxwN.Xbx6veGci'),(2,'OscarBahringer','Stanton93@hotmail.com','683-895-180','2021-09-28','manager','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/605.jpg',1,'$2b$05$bqPyrawoWiNww1YvjFiWO.9991CQEFbENlixPhw8VaiMCNSPZ8o32'),(3,'ElseHeaney','Salma.Donnelly@yahoo.com','371-244-721','2022-01-07','room_service','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/159.jpg',1,'$2b$05$lQPe8P/b1f/Fg0PJyiFRhuAdW0ip7EV0.iXVXEyr.ERvo7Rs/vF3W'),(4,'FayD\'Amore','Dayna_Oberbrunner@yahoo.com','732-475-539','2022-04-22','reception','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/104.jpg',0,'$2b$05$1mNZ7rhoknKs9DBLaVxrmeKbAC4lcOrVVbP3KroGZ/hlcrgzpiQoS'),(5,'HillaryKulas','Maxine.Buckridge55@yahoo.com','262-599-257','2021-09-17','manager','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1139.jpg',0,'$2b$05$OOwSW/6TR7CSDeElswDr/ObAs7Jl2GAz8uTGeQCjPj1m.ZS0MLDv6'),(6,'MargaretErnser','Lavinia_Flatley@yahoo.com','747-170-776','2021-08-16','room_service','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/467.jpg',1,'$2b$05$puQFvf3IAtvLoG47cTMAk.5YSzBOZRdJ3fRtaczybgJeaMW3/1eWK'),(7,'CaroleHerman','Payton.Herzog81@yahoo.com','924-313-955','2022-02-21','manager','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1172.jpg',1,'$2b$05$lUznhGxsgHWzqccFXXGlF.8ebtGbPrR6B8jH0Af6mOkA/1QNL53BW'),(8,'VernaMaggio','Osbaldo_Gusikowski33@hotmail.com','962-160-800','2022-01-08','reception','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/818.jpg',0,'$2b$05$UO6taeNLXm5Hvd2t4076y.sGcLpJ.G2ffZSUGeWvvJnU2wdSxJAbW'),(9,'MarjoryWyman','Noelia97@yahoo.com','646-137-574','2021-08-14','manager','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1047.jpg',0,'$2b$05$ARYe3VR09/IFpDtgaU.dXu8lBMU.eIfAn1Fvs6CGLiTW05SlUtjf.'),(10,'JulienReilly','Daryl_Thompson@hotmail.com','120-237-515','2022-04-05','manager','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/108.jpg',1,'$2b$05$J2nuor5QvY6mC8clW1l3JeMZjrFtYwe1z350CYihueJiQfodQw4NO'),(11,'LorenzSchamberger','Zena.Glover@yahoo.com','354-629-047','2022-07-11','manager','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/862.jpg',0,'$2b$05$cFlyOK5ImkalzATPhoBOEuFIPUF5zdZPsMfOsCkolfduWFtlENkV6'),(12,'TalonRoob','Bennie_Boyer36@gmail.com','369-954-537','2021-12-31','reception','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/777.jpg',0,'$2b$05$xnQb4wqbNDToee/89JxTiumVNwYzYvUfh4xdd8dnultB6HmM7/l06'),(13,'CorineMcLaughlin','Mittie63@yahoo.com','726-538-361','2021-10-28','manager','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/417.jpg',1,'$2b$05$lDnQbSAikfkjVFLxnJsh4.9vrgp2jGaZETDlgd1dGUpOKtxQ6ph26'),(14,'CollinCartwright','Clifton57@hotmail.com','161-166-279','2022-02-09','reception','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1102.jpg',1,'$2b$05$qEbQ6jq0oly1hTT.yDk1P.YP8BsSt317EyZoj3O1kdRLknrVwDjti'),(15,'CelineRoob','Dewitt58@hotmail.com','607-809-627','2022-07-27','room_service','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1055.jpg',0,'$2b$05$.McXyjXqHhE2snoQCSew8ewWnr4TYy5kLlEpuzOv/vP827wbfh2Qa'),(16,'LewWhite','Hazel23@hotmail.com','239-067-573','2021-12-24','room_service','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/666.jpg',1,'$2b$05$JIc/IfrCNjBzUY6v2QjPEO6UvVHx4cSI14epUgDFahJGV7LmfODY.'),(17,'OnaWindler','Magdalen.OConner97@yahoo.com','378-911-144','2021-11-09','reception','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/393.jpg',0,'$2b$05$EYKyr5qKubqcxaM5XKjET.sNyZA2nSMvelvSYUTIvicur60mf1uQi'),(18,'CaleMayer','Garrick.Wiza76@yahoo.com','866-239-992','2021-08-13','room_service','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/527.jpg',1,'$2b$05$8rAsaslJgLhZOyqI9wpVpOobT5Dx/FEgUXM7YT9vKjE.i4q8kbrdG'),(19,'JovanMorar','London.Moore7@yahoo.com','497-425-574','2022-06-08','room_service','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1246.jpg',0,'$2b$05$KCkmWMVRf5Ueug135sQ4wObJUFIOm1IvnnCdtM2Ioh6Cxiw7QpZ22'),(20,'EwaldLarkin','Preston_Daniel@hotmail.com','129-516-019','2021-12-25','room_service','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/135.jpg',0,'$2b$05$rd8VdtxvJBwjIG9gk15c0OK2v5IKoj0xQ.U0haERnLw50hD2gpQyC');
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

-- Dump completed on 2022-08-07 14:20:08
