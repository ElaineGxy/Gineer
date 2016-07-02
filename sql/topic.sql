/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : gineer

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-07-02 16:25:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for topic
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `signupnum` int(11) NOT NULL,
  `sponsorID` int(11) NOT NULL,
  `location` text,
  `receiverID` int(11) NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `validate` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET FOREIGN_KEY_CHECKS=1;
