CREATE TABLE `card7` (
  `username_group` varchar(100) NOT NULL,
  `progress` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `fileName` varchar(45) DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`username_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
