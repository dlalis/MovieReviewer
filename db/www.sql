/*
Navicat MySQL Data Transfer

Source Server         : Homeserver
Source Server Version : 80022
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 80022
File Encoding         : 65001

Date: 2020-12-13 14:10:59
*/

SET FOREIGN_KEY_CHECKS=0;


-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'test', 'test', 'test');
INSERT INTO `users` VALUES ('2', 'test1', 'test1', 'test@fas.com');
INSERT INTO `users` VALUES ('3', 'test12', 'test1', 'test@g.c');
