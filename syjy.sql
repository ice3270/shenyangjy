/*
 Navicat Premium Data Transfer

 Source Server         : MySQL-ROOT
 Source Server Type    : MySQL
 Source Server Version : 50639
 Source Host           : localhost
 Source Database       : syjy

 Target Server Type    : MySQL
 Target Server Version : 50639
 File Encoding         : utf-8

 Date: 08/09/2018 17:10:21 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `banner`
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
--  Records of `banner`
-- ----------------------------
BEGIN;
INSERT INTO `banner` VALUES ('1', '展示图一 测试标题1234567890-', '展示图一 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1533642072'), ('2', '展示图二 测试标题', '展示图二 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1533642072'), ('3', '展示图三 测试标题', '展示图三 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1533642072');
COMMIT;

-- ----------------------------
--  Table structure for `business_index`
-- ----------------------------
DROP TABLE IF EXISTS `business_index`;
CREATE TABLE `business_index` (
  `id` tinyint(4) NOT NULL,
  `business_header` varchar(255) NOT NULL,
  `business_text` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `business_index`
-- ----------------------------
BEGIN;
INSERT INTO `business_index` VALUES ('1', '演示标题文字一1111', '演示正文测试文字一'), ('2', '演示正文测试文字2', '演示正文测试文字22222222222'), ('3', '演示正文测试文字三', '演示正文测试文字三3333333333'), ('4', '演示正文测试文字四', '演示正文测试文字四4444444'), ('5', '演示标题文字五', '演示正文测试文字五5555555555'), ('6', '演示正文测试文字六66666', '演示正文测试文字六');
COMMIT;

-- ----------------------------
--  Table structure for `company_index`
-- ----------------------------
DROP TABLE IF EXISTS `company_index`;
CREATE TABLE `company_index` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `company_header` varchar(128) NOT NULL,
  `company_text` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `company_index`
-- ----------------------------
BEGIN;
INSERT INTO `company_index` VALUES ('1', '企业板块测试标题文字', '企业板块正文测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
COMMIT;

-- ----------------------------
--  Table structure for `company_show_index`
-- ----------------------------
DROP TABLE IF EXISTS `company_show_index`;
CREATE TABLE `company_show_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_show_title` varchar(255) NOT NULL,
  `company_show_text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `company_show_index`
-- ----------------------------
BEGIN;
INSERT INTO `company_show_index` VALUES ('1', '测试标题一', '测试描述文字一'), ('2', '测试标题二', '测试描述文字二'), ('3', '测试标题三', '测试描述文字三');
COMMIT;

-- ----------------------------
--  Table structure for `serve_index`
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
--  Records of `serve_index`
-- ----------------------------
BEGIN;
INSERT INTO `serve_index` VALUES ('1', 'balance-scale', '服务于司法', '竭诚服务于司法 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字'), ('2', 'flag', '服务于公安', '竭诚服务于公安 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字'), ('3', 'asl-interpreting', '服务于公司', '竭诚服务于公司 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字'), ('4', 'users', '服务于百姓', '竭诚服务于百姓 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
COMMIT;

-- ----------------------------
--  Table structure for `slogan_index`
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
--  Records of `slogan_index`
-- ----------------------------
BEGIN;
INSERT INTO `slogan_index` VALUES ('1', '（一）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（一）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务一'), ('2', '（二）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（二）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务二'), ('3', '（三）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（三）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务三'), ('4', '（四）服务宗旨标题测试文字：最强最强我最强，最棒最棒我最棒', '（四）服务宗旨详情测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '服务四');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
