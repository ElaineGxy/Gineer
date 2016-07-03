
-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` int(255) DEFAULT NULL,
  `startTime` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `sponsor` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;