CREATE DATABASE my_db;

USE my_db;

CREATE TABLE `category2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf16_bin NOT NULL,
  `description` varchar(150) COLLATE utf16_bin,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
);