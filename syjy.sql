/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : syjy

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-08-30 19:18:35
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
INSERT INTO `banner` VALUES ('1', '展示图一 测试标题00000', '展示图一 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1535535406');
INSERT INTO `banner` VALUES ('2', '展示图二 测试标题', '展示图二 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1535535406');
INSERT INTO `banner` VALUES ('3', '展示图三 测试标题', '展示图三 测试描述 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1535535406');

-- ----------------------------
-- Table structure for business_index
-- ----------------------------
DROP TABLE IF EXISTS `business_index`;
CREATE TABLE `business_index` (
  `id` tinyint(4) NOT NULL,
  `business_header` varchar(255) NOT NULL,
  `business_text` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of business_index
-- ----------------------------
INSERT INTO `business_index` VALUES ('1', '演示标题文字一1111', '演示正文测试文字一');
INSERT INTO `business_index` VALUES ('2', '演示正文测试文字2', '演示正文测试文字22222222222');
INSERT INTO `business_index` VALUES ('3', '演示正文测试文字三', '演示正文测试文字三3333333333');
INSERT INTO `business_index` VALUES ('4', '演示正文测试文字四', '演示正文测试文字四4444444');
INSERT INTO `business_index` VALUES ('5', '演示标题文字五', '演示正文测试文字五5555555555');
INSERT INTO `business_index` VALUES ('6', '演示正文测试文字六66666', '演示正文测试文字六');

-- ----------------------------
-- Table structure for caita_index
-- ----------------------------
DROP TABLE IF EXISTS `caita_index`;
CREATE TABLE `caita_index` (
  `id` int(11) NOT NULL,
  `caita_header` varchar(64) NOT NULL,
  `caita_text` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of caita_index
-- ----------------------------
INSERT INTO `caita_index` VALUES ('1', '彩电塔标题111', '彩电塔测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');

-- ----------------------------
-- Table structure for collaborate
-- ----------------------------
DROP TABLE IF EXISTS `collaborate`;
CREATE TABLE `collaborate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgPathName` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collaborate
-- ----------------------------
INSERT INTO `collaborate` VALUES ('1', 'logo1.png');
INSERT INTO `collaborate` VALUES ('2', 'logo2.png');
INSERT INTO `collaborate` VALUES ('3', 'logo3.png');
INSERT INTO `collaborate` VALUES ('4', 'logo4.png');
INSERT INTO `collaborate` VALUES ('5', 'logo5.png');
INSERT INTO `collaborate` VALUES ('6', 'logo6.png');
INSERT INTO `collaborate` VALUES ('7', 'logo7.png');
INSERT INTO `collaborate` VALUES ('8', 'logo8.png');
INSERT INTO `collaborate` VALUES ('9', 'logo9.png');
INSERT INTO `collaborate` VALUES ('10', 'logo10.png');
INSERT INTO `collaborate` VALUES ('11', 'logo11.png');
INSERT INTO `collaborate` VALUES ('12', 'logo12.png');
INSERT INTO `collaborate` VALUES ('13', 'logo13.png');
INSERT INTO `collaborate` VALUES ('14', 'logo14.png');
INSERT INTO `collaborate` VALUES ('15', 'logo15.png');
INSERT INTO `collaborate` VALUES ('16', 'logo16.png');
INSERT INTO `collaborate` VALUES ('17', 'logo17.png');
INSERT INTO `collaborate` VALUES ('18', 'logo18.png');
INSERT INTO `collaborate` VALUES ('24', '5b865461e90ff.png');
INSERT INTO `collaborate` VALUES ('23', '5b86542e08a89.png');

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
INSERT INTO `company_index` VALUES ('1', '企业板块测试标题文字111', '企业板块正文测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');

-- ----------------------------
-- Table structure for company_info_footer
-- ----------------------------
DROP TABLE IF EXISTS `company_info_footer`;
CREATE TABLE `company_info_footer` (
  `id` int(11) NOT NULL,
  `com_text` varchar(1024) NOT NULL,
  `com_address` varchar(512) NOT NULL,
  `com_postal` varchar(32) NOT NULL,
  `com_tel` varchar(32) NOT NULL,
  `com_email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company_info_footer
-- ----------------------------
INSERT INTO `company_info_footer` VALUES ('1', '沈阳市价业价格鉴证服务中心，成立于2009年，是沈阳市第一家价格鉴定评估机构，同时具备价格鉴证评估资质及沈阳市中级人民法院司法技术专业机构。', '辽宁省沈阳市沈河区小北关街178号', '110000', '024 - 88556897', 'syjy@spasc.cn');

-- ----------------------------
-- Table structure for company_show_index
-- ----------------------------
DROP TABLE IF EXISTS `company_show_index`;
CREATE TABLE `company_show_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_show_title` varchar(255) NOT NULL,
  `company_show_text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company_show_index
-- ----------------------------
INSERT INTO `company_show_index` VALUES ('1', '测试标题一', '测试描述文字一');
INSERT INTO `company_show_index` VALUES ('2', '测试标题二', '测试描述文字二');
INSERT INTO `company_show_index` VALUES ('3', '测试标题三', '测试描述文字三');

-- ----------------------------
-- Table structure for ex_page
-- ----------------------------
DROP TABLE IF EXISTS `ex_page`;
CREATE TABLE `ex_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(64) NOT NULL,
  `title` varchar(64) NOT NULL,
  `imgpath` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ex_page
-- ----------------------------
INSERT INTO `ex_page` VALUES ('4', '1111111111111', '11111111111111111111111', '5b879e36e21bf.png');
INSERT INTO `ex_page` VALUES ('5', '2222222', '22222222222222222', '5b879e4387fa9.png');
INSERT INTO `ex_page` VALUES ('6', '333333333', '3333333333333', '5b879e5198dc2.png');
INSERT INTO `ex_page` VALUES ('7', '44444444', '444444444444444444', '5b879e744e5f1.png');
INSERT INTO `ex_page` VALUES ('8', '555555555', '5555555555555555555555555', '5b879e87d7335.png');

-- ----------------------------
-- Table structure for introduce_aboutus
-- ----------------------------
DROP TABLE IF EXISTS `introduce_aboutus`;
CREATE TABLE `introduce_aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(255) NOT NULL,
  `contents` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of introduce_aboutus
-- ----------------------------
INSERT INTO `introduce_aboutus` VALUES ('1', '公司介绍（可变）1', '测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
INSERT INTO `introduce_aboutus` VALUES ('2', '我们的XX（可变）11111', '测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试试文字测试文字测试文字测试文字测试文字11111');
INSERT INTO `introduce_aboutus` VALUES ('3', '我们的XX（可变）22222', '测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试试文字测试文字测试文字测试文字测试文字22222');

-- ----------------------------
-- Table structure for link_in_index
-- ----------------------------
DROP TABLE IF EXISTS `link_in_index`;
CREATE TABLE `link_in_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link_in_index
-- ----------------------------
INSERT INTO `link_in_index` VALUES ('1', '关于我们', 'Home/Pages/about_us');
INSERT INTO `link_in_index` VALUES ('2', '服务内容', 'Home/Pages/server');
INSERT INTO `link_in_index` VALUES ('3', '合作案例', 'Home/Pages/ex');
INSERT INTO `link_in_index` VALUES ('4', '公司动态', 'Home/Pages/com_new');
INSERT INTO `link_in_index` VALUES ('5', '法律法规', 'Home/Pages/law');

-- ----------------------------
-- Table structure for link_out_index
-- ----------------------------
DROP TABLE IF EXISTS `link_out_index`;
CREATE TABLE `link_out_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link_out_index
-- ----------------------------
INSERT INTO `link_out_index` VALUES ('1', '百度一下', 'www.baidu.com');
INSERT INTO `link_out_index` VALUES ('2', '网易163', 'www.163.com');
INSERT INTO `link_out_index` VALUES ('3', '新浪网', 'www.sina.com');
INSERT INTO `link_out_index` VALUES ('4', '搜狐网', 'www.sohu.com');
INSERT INTO `link_out_index` VALUES ('5', '中央电视台', 'www.cctv.com');

-- ----------------------------
-- Table structure for new_page
-- ----------------------------
DROP TABLE IF EXISTS `new_page`;
CREATE TABLE `new_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(64) NOT NULL,
  `year` varchar(16) NOT NULL,
  `month` varchar(16) NOT NULL,
  `day` varchar(16) NOT NULL,
  `contents` varchar(4096) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of new_page
-- ----------------------------
INSERT INTO `new_page` VALUES ('4', '动态测试标题', '2001', '12', '21', '动态测试文字，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '5b87cab5c9320.png');
INSERT INTO `new_page` VALUES ('5', '动态测试标题', '2012', '12', '12', '2012世界末日，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '5b87cb277f8e9.png');
INSERT INTO `new_page` VALUES ('3', '动态测试标题三', '2011', '1', '21', '动态测试描述三，测试文字测试文字试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '5b87c6b8584ce.png');

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
INSERT INTO `serve_index` VALUES ('1', 'balance-scale', '服务于司法', '111竭诚服务于司法 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
INSERT INTO `serve_index` VALUES ('2', 'flag', '服务于公安', '222竭诚服务于公安 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
INSERT INTO `serve_index` VALUES ('3', 'asl-interpreting', '服务于公司', '333竭诚服务于公司 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');
INSERT INTO `serve_index` VALUES ('4', 'users', '服务于百姓', '444竭诚服务于百姓 测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字');

-- ----------------------------
-- Table structure for serve_page
-- ----------------------------
DROP TABLE IF EXISTS `serve_page`;
CREATE TABLE `serve_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(64) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` varchar(4096) NOT NULL,
  `imgpath` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of serve_page
-- ----------------------------
INSERT INTO `serve_page` VALUES ('5', '服务项目标题一', '简要描述内容一测试文字', '详细描述测试文字，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '5b87692043f6f.png');
INSERT INTO `serve_page` VALUES ('7', '服务项目标题二', '简要描述内容二测试文字', '详细描述测试文字，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字</p><p>测试文字测试文字测试文字测测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '5b876963116bb.png');

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

-- ----------------------------
-- Table structure for team_aboutus
-- ----------------------------
DROP TABLE IF EXISTS `team_aboutus`;
CREATE TABLE `team_aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `post` varchar(32) NOT NULL,
  `about` varchar(2048) NOT NULL,
  `imgpath` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of team_aboutus
-- ----------------------------
INSERT INTO `team_aboutus` VALUES ('1', '张三', '张三职位', '张三的个人介绍测试文字，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', 'person1.png');
INSERT INTO `team_aboutus` VALUES ('2', '李四', '李四职位', '李四的个人介绍，张三的个人介绍测试文字，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', 'person2.png');
INSERT INTO `team_aboutus` VALUES ('3', '王五', '王五的职位', '王五的个人介绍测试文字，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', 'person3.png');
INSERT INTO `team_aboutus` VALUES ('4', '赵六子', '赵六职位', '赵六的个人介绍测试文字，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', 'person4.png');

-- ----------------------------
-- Table structure for year_index
-- ----------------------------
DROP TABLE IF EXISTS `year_index`;
CREATE TABLE `year_index` (
  `id` int(11) NOT NULL,
  `year_num` varchar(64) NOT NULL,
  `year_text` varchar(4096) NOT NULL,
  `year_title` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of year_index
-- ----------------------------
INSERT INTO `year_index` VALUES ('1', '2001年', '1111年发生了啥事儿就写啥事儿，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '1111标题');
INSERT INTO `year_index` VALUES ('2', '2010年', '2222年发生了啥事儿就写啥事儿，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '2222标题');
INSERT INTO `year_index` VALUES ('3', '2013年', '3333年发生了啥事儿就写啥事儿，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '3333标题');
INSERT INTO `year_index` VALUES ('4', '2017年', '4444年发生了啥事儿就写啥事儿，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '4444标题');
INSERT INTO `year_index` VALUES ('5', '至今……', '至今年发生了啥事儿就写啥事儿，测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字', '至今标题');
