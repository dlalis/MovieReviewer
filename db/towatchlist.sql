/*
Navicat MySQL Data Transfer

Source Server         : Homeserver
Source Server Version : 80022
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 80022
File Encoding         : 65001

Date: 2021-01-27 12:26:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `towatchlist`
-- ----------------------------
DROP TABLE IF EXISTS `towatchlist`;
CREATE TABLE `towatchlist` (
  `userId` int NOT NULL,
  `movieId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of towatchlist
-- ----------------------------
