/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : syjy

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-08-06 15:36:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_header` varchar(255) NOT NULL,
  `banner_text` varchar(255) NOT NULL,
  `banner_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '展示图一 测试标题', '展示图一 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1533109949');
INSERT INTO `banner` VALUES ('2', '展示图二 测试标题', '展示图二 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1533109949');
INSERT INTO `banner` VALUES ('3', '展示图三 测试标题', '展示图三 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1533109949');

-- ----------------------------
-- Table structure for company_index
-- ----------------------------
DROP TABLE IF EXISTS `company_index`;
CREATE TABLE `company_index` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `company_header` varchar(128) NOT NULL,
  `company_text` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company_index
-- ----------------------------
INSERT INTO `company_index` VALUES ('1', '企业板块测试标题文字', '企业板块正文测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');

-- ----------------------------
-- Table structure for serve_index
-- ----------------------------
DROP TABLE IF EXISTS `serve_index`;
CREATE TABLE `serve_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serve_icon` varchar(32) NOT NULL,
  `serve_header` varchar(128) NOT NULL,
  `serve_text` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of serve_index
-- ----------------------------
INSERT INTO `serve_index` VALUES ('1', 'balance-scale', '服务于司法', '竭诚服务于司法 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
INSERT INTO `serve_index` VALUES ('2', 'flag', '服务于公安', '竭诚服务于公安 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
INSERT INTO `serve_index` VALUES ('3', 'asl-interpreting', '服务于公司', '竭诚服务于公司 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
INSERT INTO `serve_index` VALUES ('4', 'users', '服务于百姓', '竭诚服务于百姓 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');

-- ----------------------------
-- Table structure for slogan_index
-- ----------------------------
DROP TABLE IF EXISTS `slogan_index`;
CREATE TABLE `slogan_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slogan_header` varchar(256) NOT NULL,
  `slogan_text` varchar(4096) NOT NULL,
  `slogan_btn` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slogan_index
-- ----------------------------
INSERT INTO `slogan_index` VALUES ('1', '（一）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（一）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务一');
INSERT INTO `slogan_index` VALUES ('2', '（二）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（二）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务二');
INSERT INTO `slogan_index` VALUES ('3', '（三）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（三）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务三');
INSERT INTO `slogan_index` VALUES ('4', '（四）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（四）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务四');
