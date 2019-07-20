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

 Date: 20/07/2019 22:52:10
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
  `age` int(20) NULL DEFAULT NULL,
  `sex` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone` int(20) NULL DEFAULT NULL,
  `qq` int(20) NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (5244, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5245, '小红', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (1110, '小花', 10, '男', 2147483647, 45546);
INSERT INTO `information` VALUES (1112, '小花', 20, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (6665, '大幅度发', 15, '男', 2147483647, 7987987);
INSERT INTO `information` VALUES (5244, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5555, '你的', 66, '女', 2147483647, 7987987);
INSERT INTO `information` VALUES (5241, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5242, '小红', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (1113, '小花', 10, '男', 2147483647, 45546);
INSERT INTO `information` VALUES (1114, '小花', 20, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (6665, '大幅度发', 15, '男', 2147483647, 7987987);
INSERT INTO `information` VALUES (5246, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5557, '你的', 66, '女', 2147483647, 5244);
INSERT INTO `information` VALUES (5248, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5249, '小红', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (1006, '小花', 15, '男', 2147483647, 45546);
INSERT INTO `information` VALUES (1111, '小花', 20, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (6662, '大幅度发', 15, '男', 2147483647, 7987987);
INSERT INTO `information` VALUES (5243, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5554, '你的', 66, '女', 2147483647, 7987987);
INSERT INTO `information` VALUES (5245, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5246, '小红', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (1117, '小花', 10, '男', 2147483647, 45546);
INSERT INTO `information` VALUES (1118, '小花', 20, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (6669, '大幅度发', 15, '男', 2147483647, 7987987);
INSERT INTO `information` VALUES (5240, '小绿', 15, '女', 2147483647, 45546);
INSERT INTO `information` VALUES (5551, '你的', 66, '女', 2147483647, 7987987);

SET FOREIGN_KEY_CHECKS = 1;
