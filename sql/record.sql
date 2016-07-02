/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : gineer

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-07-02 16:25:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for record
-- ----------------------------
DROP TABLE IF EXISTS `record`;
CREATE TABLE `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `record_activity` (`activity_id`),
  CONSTRAINT `record_activity` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
