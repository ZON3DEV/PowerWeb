/*
 Navicat Premium Data Transfer

 Source Server         : FSC MySQL 5.7
 Source Server Type    : MySQL
 Source Server Version : 50737
 Source Host           : 192.168.178.54:3306
 Source Schema         : al_server_ws

 Target Server Type    : MySQL
 Target Server Version : 50737
 File Encoding         : 65001

 Date: 30/04/2022 18:44:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` char(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `text_short` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text_full` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `description` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `keywords` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comments_enable` tinyint(1) UNSIGNED NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `category_id`(`category_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
