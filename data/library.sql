/*
Navicat MySQL Data Transfer

Source Server         : lession7
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : library

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-13 10:49:47
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `user` VALUES ('26', '陈程学2', '123', '鞍山', '读书,运动,艺术', '初中', '1507777879.jpg', '', '1', null);
INSERT INTO `user` VALUES ('29', '周星驰', 'dfd', '对对对', '读书', '大学以上', '1507775992.jpg', '大幅度                            ', '1', null);
INSERT INTO `user` VALUES ('30', '周海媚', 'dff', '香港', '读书,美食', '初中', 'default0.jpg', '著名台湾演员\r\n                            ', '0', null);
INSERT INTO `user` VALUES ('31', '刘德华', '11', '香港', '运动', '大学以上', 'default1.jpg', '演员', '1', null);
INSERT INTO `user` VALUES ('37', '高圆圆', '111', '北京', '美食,艺术', '初中', '1507786692.jpg', '中国内地演员                                               ', '0', '2017-10-12 13:26:55');
INSERT INTO `user` VALUES ('40', '小季子', '', '日本', '运动', '其它', '1507811678.jpg', '个性独特的小孩', '0', '2017-10-12 20:34:38');
INSERT INTO `user` VALUES ('41', '海绵宝宝', '', '日本', '运动,美食', '初中', '1507812326.jpg', '一块海绵                                             ', '0', '2017-10-12 20:35:01');
