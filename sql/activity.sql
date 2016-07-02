/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : gineer

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-07-02 16:24:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` int(255) DEFAULT NULL,
  `startTime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `sponsor` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_activity` (`topic`),
  KEY `user_activity` (`sponsor`),
  CONSTRAINT `topic_activity` FOREIGN KEY (`topic`) REFERENCES `topic` (`id`),
  CONSTRAINT `user_activity` FOREIGN KEY (`sponsor`) REFERENCES `engineer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
