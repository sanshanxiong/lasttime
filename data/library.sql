/*
Navicat MySQL Data Transfer

Source Server         : lession7
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : library

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-17 20:08:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '健康');
INSERT INTO `category` VALUES ('2', '友谊爱情');
INSERT INTO `category` VALUES ('3', '哀思');
INSERT INTO `category` VALUES ('4', '尊敬爱戴');

-- ----------------------------
-- Table structure for flower
-- ----------------------------
DROP TABLE IF EXISTS `flower`;
CREATE TABLE `flower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `counts` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `descs` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `hints` varchar(100) DEFAULT NULL,
  `tuijian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of flower
-- ----------------------------
INSERT INTO `flower` VALUES ('2', '神雕侠侣', '35.00', '10', '4', 'hello', 'defaultflower.gif', null, null, '0');
INSERT INTO `flower` VALUES ('3', '111', '3.00', null, '4', '111', '1508162574.jpg', '2017-10-16 22:02:54', '祝福,快乐', '0');
INSERT INTO `flower` VALUES ('4', '野菊花', '23.00', '2', '3', '大幅度', '1508162792.jpg', '2017-10-16 22:06:32', '快乐,美丽', '0');
INSERT INTO `flower` VALUES ('5', '满天星', '12.00', '12', '1', '很好的话', '1508199800.jpg', '2017-10-17 08:23:20', '纯洁,祝福', '1');
INSERT INTO `flower` VALUES ('8', '满天星', '56.00', '24', '2', '好花', '1508200281.jpg', '2017-10-17 08:31:21', '纯洁,快乐', '1');

-- ----------------------------
-- Table structure for hint
-- ----------------------------
DROP TABLE IF EXISTS `hint`;
CREATE TABLE `hint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hint
-- ----------------------------
INSERT INTO `hint` VALUES ('1', '祝福');
INSERT INTO `hint` VALUES ('2', '快乐');
INSERT INTO `hint` VALUES ('3', '美丽');
INSERT INTO `hint` VALUES ('4', '纯洁');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` char(10) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `hobbies` varchar(200) DEFAULT NULL,
  `education` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `descs` varchar(500) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('26', '陈程学', '123', '沈阳', '读书,运动,艺术', '初中', '1507777879.jpg', '辽东学生', '1', null);
INSERT INTO `user` VALUES ('30', '周海媚', 'dff', '香港', '读书,美食', '初中', 'default0.jpg', '著名台湾演员\r\n                            ', '0', null);
INSERT INTO `user` VALUES ('31', '刘德华', '11', '香港', '运动', '大学以上', 'default1.jpg', '演员', '1', null);
INSERT INTO `user` VALUES ('37', '高圆圆', '111', '北京', '美食,艺术', '初中', '1507786692.jpg', '中国内地演员                                               ', '0', '2017-10-12 13:26:55');
INSERT INTO `user` VALUES ('40', '小季子', '', '日本', '运动', '其它', '1507811678.jpg', '个性独特的小孩', '0', '2017-10-12 20:34:38');
INSERT INTO `user` VALUES ('41', '海绵宝宝', '', '日本', '读书,运动,美食', '初中', '1507812326.jpg', '一块海绵                                                                 ', '0', '2017-10-12 20:35:01');
