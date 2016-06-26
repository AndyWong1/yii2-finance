/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : finance

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2016-06-26 22:01:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '公司名称',
  `full_name` varchar(100) NOT NULL DEFAULT '' COMMENT '公司全称',
  `category` tinyint(1) NOT NULL DEFAULT '1' COMMENT '公司类型: 1=金融公司 2=保险公司',
  `desc` varchar(2000) NOT NULL COMMENT '公司描述',
  `status` tinyint(4) NOT NULL COMMENT '状态: -1、删除 0、禁用 1、启用',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '产品编号',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '产品名称',
  `full_name` varchar(100) NOT NULL DEFAULT '' COMMENT '产品全称',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '产品一级分类: 1=固定收益产品 2=浮动收益产品 3=保险产品',
  `sub_type` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '产品二级分类: 0=无子类型 1=信托 2=资管 3=私募基金 4=阳光私募',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '产品状态: 0=下架停售(禁用) 1=在售(上架) 2=预热   3=已结束,售罄',
  `reserve_start_time` datetime NOT NULL COMMENT '预约开始时间',
  `reserve_end_time` datetime NOT NULL COMMENT '预约结束时间',
  `sales_approach` tinyint(1) NOT NULL DEFAULT '0' COMMENT '承销方式: 0=分销 1=包销 2=经纪(用于二级市场)',
  `with_invoice` tinyint(1) NOT NULL DEFAULT '0' COMMENT '财务是否开票: 0=财务不开票,1=财务开票',
  `pm` int(10) NOT NULL COMMENT '产品经理(user 表编号)',
  `sort` int(10) NOT NULL DEFAULT '100' COMMENT '排序',
  `is_recommend` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为推荐: 0=否 1=是',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除: 0=未删除 1=已删除',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '夸父1号', '夸父1号', '1', '0', '1', '2016-06-26 17:56:29', '2016-06-26 17:56:32', '0', '0', '1', '100', '1', '0', '2016-06-26 17:56:43', '2016-06-26 17:56:43');

-- ----------------------------
-- Table structure for product_ext
-- ----------------------------
DROP TABLE IF EXISTS `product_ext`;
CREATE TABLE `product_ext` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '产品扩展信息编号',
  `product_id` int(10) NOT NULL COMMENT '产品编号',
  `risk_level` tinyint(1) NOT NULL DEFAULT '3' COMMENT '风险等级 1=高 2=中 3=低',
  `issuers` varchar(50) NOT NULL DEFAULT '' COMMENT '发行机构名称',
  `desc` varchar(150) NOT NULL DEFAULT '' COMMENT '一句话简介',
  `pay_interest_allcation` varchar(50) NOT NULL DEFAULT '' COMMENT '付息分配方式,描述性信息',
  `use_of_funds` varchar(150) NOT NULL DEFAULT '' COMMENT '资金用途',
  `source_of_repayment` varchar(500) NOT NULL DEFAULT '' COMMENT '还款来源',
  `project_location` varchar(50) NOT NULL DEFAULT '' COMMENT '项目所在地',
  `customer_manager_comment` varchar(50) NOT NULL DEFAULT '' COMMENT '客户经理评论',
  `official_comment` varchar(50) NOT NULL DEFAULT '' COMMENT '官方一句话点评',
  `period` int(10) NOT NULL DEFAULT '0' COMMENT '存续周期 单位:月',
  `total_amount` int(10) NOT NULL DEFAULT '0' COMMENT '产品总金额',
  `min_subscribe_amount` int(10) NOT NULL DEFAULT '0' COMMENT '最低认购金额',
  `progress_rate` tinyint(3) NOT NULL DEFAULT '0' COMMENT '募集完成进度',
  `progress_desc` varchar(500) NOT NULL COMMENT '募集完成度描述',
  `earnings_ratio` decimal(5,2) NOT NULL COMMENT '收益率',
  `commission_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '产品佣金比例',
  `bank` varchar(50) NOT NULL DEFAULT '' COMMENT '开户行',
  `pay_desc` varchar(50) NOT NULL DEFAULT '' COMMENT '打款说明',
  `pay_type` tinyint(1) NOT NULL COMMENT '打款类型 1、小额畅打 2、严格配比 3、全大额',
  `invest_category` varchar(50) NOT NULL DEFAULT '' COMMENT '投资方向分类',
  `bank_account` varchar(50) NOT NULL DEFAULT '' COMMENT '开户行户名',
  `recommend_sort` int(11) NOT NULL DEFAULT '1' COMMENT '推荐产品的自定义排序',
  `company_id` int(11) NOT NULL DEFAULT '0' COMMENT '公司名称(主要是总包产品使用)',
  `contact` varchar(50) NOT NULL DEFAULT '' COMMENT '联系方式(总包方的联系方式)',
  `general_contractor_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '总包方核心价格',
  `vip_commission_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT 'vip 佣金比例',
  `collateral_desc` varchar(200) NOT NULL COMMENT '抵押物情况',
  `mortgage_rates` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '抵押率',
  `bank_desc` varchar(200) NOT NULL DEFAULT '' COMMENT '募集账户备注',
  `risk_control` text NOT NULL COMMENT '风险控制',
  `secured_party` varchar(500) NOT NULL DEFAULT '' COMMENT '担保方介绍',
  `financiers_desc` varchar(500) NOT NULL DEFAULT '' COMMENT '融资方介绍',
  `issue_date` datetime NOT NULL COMMENT '发行日期',
  `region` int(11) NOT NULL COMMENT '区域: 0是未指定 1是江浙沪 2是京津冀 3是珠三角 4是其他',
  `region_id` int(11) NOT NULL COMMENT '区域编号',
  `city_id` int(11) NOT NULL COMMENT '城市编号',
  `summary` text NOT NULL COMMENT '产品要点描述',
  `upstream_unit` varchar(50) NOT NULL DEFAULT '' COMMENT '上游单位',
  `upstream_contacts` varchar(20) NOT NULL DEFAULT '' COMMENT '上游联系人',
  `upstream_contact_info` varchar(50) NOT NULL DEFAULT '' COMMENT '联系方式',
  `end_date` datetime NOT NULL COMMENT '结束日期(对应与发行日期)',
  `seo_title` varchar(100) NOT NULL COMMENT 'seo相关: 标题',
  `seo_desc` varchar(500) NOT NULL DEFAULT '' COMMENT 'seo相关: 描述信息',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo相关: 关键词',
  `increased_base` int(11) NOT NULL COMMENT '额外增加的基数',
  `collect_count` int(11) NOT NULL DEFAULT '0' COMMENT '收藏数',
  `download_count` int(11) NOT NULL DEFAULT '0' COMMENT '下载数',
  `ratings` int(11) NOT NULL DEFAULT '0' COMMENT '产品评级',
  `is_preferably` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为优选 0、否 1、是',
  `has_next_period` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否有下期 0、否 1、是',
  `email_share_count` int(11) NOT NULL DEFAULT '0' COMMENT '邮件分享次数',
  PRIMARY KEY (`id`),
  KEY `foreign_key_product` (`product_id`),
  CONSTRAINT `foreign_key_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_ext
-- ----------------------------
INSERT INTO `product_ext` VALUES ('1', '1', '3', '', '', '', '', '', '', '', '', '0', '0', '0', '1', '完成', '0.30', '0.00', '', '', '1', '', '', '1', '0', '', '0.00', '0.00', '无', '0.00', '', '无', '', '', '2016-06-26 17:58:48', '1', '1', '1', '无', '', '', '', '2016-06-26 17:58:01', ' ', '', '', '0', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for product_file
-- ----------------------------
DROP TABLE IF EXISTS `product_file`;
CREATE TABLE `product_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '附件编号',
  `product_id` int(11) NOT NULL COMMENT '产品编号',
  `name` varchar(50) NOT NULL COMMENT '产品附件文件名称',
  `md5` varchar(50) NOT NULL COMMENT '产品附件md5',
  `type` varchar(10) NOT NULL COMMENT '产品文件类型(文件扩展后缀名)',
  `category` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文件分类: ''1=产品文件 2=续存文件 3=其他文件 4=产品客户端展示图'',',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '文件状态: 1=启用 0=禁用',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_file
-- ----------------------------

-- ----------------------------
-- Table structure for product_rate
-- ----------------------------
DROP TABLE IF EXISTS `product_rate`;
CREATE TABLE `product_rate` (
  `id` int(11) NOT NULL COMMENT '产品费率编号',
  `product_id` int(11) NOT NULL COMMENT '产品编号',
  `amount_min` decimal(10,2) NOT NULL COMMENT '投资金额区间:投资金额最小值',
  `amount_max` decimal(10,2) NOT NULL COMMENT '投资金额区间:投资金额最大值',
  `status` tinyint(1) NOT NULL COMMENT '状态: 1=启用 0=禁用',
  `expected_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '预期收益率',
  `expected_rate_desc` varchar(50) NOT NULL DEFAULT '' COMMENT '预期收益率描述',
  `rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '一般费率',
  `rate_desc` varchar(50) NOT NULL DEFAULT '' COMMENT '一般费率描述',
  `vip_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT 'vip 费率',
  `vip_rate_desc` varchar(50) NOT NULL DEFAULT '' COMMENT 'vip 费率描述',
  `company_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '公司费率',
  `company_rate_desc` varchar(50) NOT NULL DEFAULT '' COMMENT '公司费率描述',
  `bank_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '银行费率',
  `bank_rate_desc` varchar(50) NOT NULL DEFAULT '' COMMENT '银行费率描述',
  `investor_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '投资人费率',
  `investor_rate_desc` varchar(50) NOT NULL DEFAULT '' COMMENT '投资人费率描述',
  `cfo_up_front_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '财务使用的上游前端费率(总包产品财务会标识)',
  `cfo_up_back_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '财务使用 上游后端费率(总包产品财务会设置该值)',
  `cfo_down_front_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '财务使用 下游前端费率(总包产品财务会设置该值)',
  `cfo_down_back_rate` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '财务使用 下游后端费率(总包产品财务会设置该值)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_rate
-- ----------------------------
INSERT INTO `product_rate` VALUES ('1', '1', '100.00', '-1.00', '1', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '', '$2y$13$6aG0hZvCjggx66JAXCw2l.39UftvH3QupVza8WAXfbvuV5WIhghEe', '', 'huangzhihua2012@gmail.com', '10', '2016-06-18 18:53:34', '2016-06-18 19:17:50');
