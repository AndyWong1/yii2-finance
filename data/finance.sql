/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50530
Source Host           : localhost:3306
Source Database       : finance

Target Server Type    : MYSQL
Target Server Version : 50530
File Encoding         : 65001

Date: 2016-06-20 18:05:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '产品编号',
  `name` varchar(30) NOT NULL COMMENT '产品名称',
  `full_name` varchar(100) NOT NULL COMMENT '产品全称',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '产品一级分类: 1=固定收益产品 2=浮动收益产品 3=保险产品',
  `sub_type` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '产品二级分类: 0=无子类型 1=信托 2=资管 3=私募基金 4=私募基金 ',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '产品状态: 0=下架停售(禁用) 1=在售(上架) 2=预热   3=已结束,售罄 4=内部查询',
  `reserve_start_time` datetime NOT NULL COMMENT '预约开始时间',
  `reserve_end_time` datetime NOT NULL COMMENT '预约结束时间',
  `sales_approach` tinyint(1) NOT NULL DEFAULT '0' COMMENT '承销方式: 0=分销 1=包销 2=经纪(用于二级市场)',
  `with_invoice` tinyint(1) NOT NULL DEFAULT '0' COMMENT '财务是否开票: 0=财务不开票,1=财务开票',
  `pm` int(10) NOT NULL COMMENT '产品经理(user 表编号)',
  `sort` int(10) NOT NULL DEFAULT '1' COMMENT '排序',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除: 0=未删除 1=已删除',
  `created_at` datetime NOT NULL COMMENT '创建时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'eYanpUAJT_bhZ9o0sO-AdmJ4z01UiHsw', '$2y$13$DSrFRS928.TiAzAGfvU94OSlZq/Y9Wq25fA58RPrAzQUyaDh9bmSy', null, 'huangzhihua1988@gmail.com', '10', '2016-06-20 11:19:35', '2016-06-20 11:19:38');
