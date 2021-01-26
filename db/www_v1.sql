/*
Navicat MySQL Data Transfer

Source Server         : Homeserver
Source Server Version : 80022
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 80022
File Encoding         : 65001

Date: 2021-01-26 12:59:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'ecb50c1666239ad05c824db6c6f46a26', 'lalismitsos@yahoo.com', '1');
INSERT INTO `users` VALUES ('2', 'test1', '5a105e8b9d40e1329780d62ea2265d8a', 'test1@test1.com', '0');
INSERT INTO `users` VALUES ('3', 'test2', 'ad0234829205b9033196ba818f7a872b', 'test2@test2.com', '0');
INSERT INTO `users` VALUES ('4', 'test3', '8ad8757baa8564dc136c1e07507f4a98', 'test3@test3.com', '0');
