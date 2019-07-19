/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : manage

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 20/07/2019 00:24:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for information
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information`  (
  `ID` int(20) NULL DEFAULT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sex` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `age` int(20) NULL DEFAULT NULL,
  `phone` int(20) NULL DEFAULT NULL,
  `qq` int(20) NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (1127, '小花', '15', 0, 2147483647, 45546);
INSERT INTO `information` VALUES (1128, '', '15', 0, 2147483647, 45546);
INSERT INTO `information` VALUES (1129, '', '15', 0, 2147483647, 45546);
INSERT INTO `information` VALUES (1110, '小花', '15', 0, 2147483647, 45546);
INSERT INTO `information` VALUES (1112, '小花', '15', 0, 2147483647, 45546);

SET FOREIGN_KEY_CHECKS = 1;
