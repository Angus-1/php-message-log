table mysql code below

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1

CREATE TABLE `messages`(
`id` int NOT NULL AUTO_INCREMENT,
`message` varchar(255) DEFAULT NULL,
`userid` int,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
FOREIGN KEY(`userid`) REFERENCES users(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
