/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : gineer

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-07-02 16:25:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activitylist
-- ----------------------------
DROP TABLE IF EXISTS `activitylist`;
CREATE TABLE `activitylist` (
  `activity_id` int(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
