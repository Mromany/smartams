/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50717
 Source Host           : localhost:3306
 Source Schema         : store

 Target Server Type    : MySQL
 Target Server Version : 50717
 File Encoding         : 65001

 Date: 20/01/2019 09:27:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for editors
-- ----------------------------
DROP TABLE IF EXISTS `editors`;
CREATE TABLE `editors`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Video_ID` int(11) NULL DEFAULT NULL,
  `Question_ID` int(11) NULL DEFAULT NULL,
  `Time` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `Video_ID`(`Video_ID`) USING BTREE,
  INDEX `Question_ID`(`Question_ID`) USING BTREE,
  CONSTRAINT `Question_ID` FOREIGN KEY (`Question_ID`) REFERENCES `questions` (`ID`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `Video_ID` FOREIGN KEY (`Video_ID`) REFERENCES `videos` (`ID`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VP` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `VT` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Table_Size` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cordy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Act` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `VP`(`VP`) USING BTREE,
  INDEX `VT`(`VT`) USING BTREE,
  CONSTRAINT `VP` FOREIGN KEY (`VP`) REFERENCES `videos` (`Path`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `VT` FOREIGN KEY (`VT`) REFERENCES `spottimes` (`Sp_Time`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES (1, 'C.mp4', '20.454', '120', '46,47,48,56,57,58', '40', '2019-01-17 12:02:33', '2019-01-17 12:02:35');
INSERT INTO `events` VALUES (2, 'C.mp4', '20.454', '120', '27,28,29,37,38,39', '1', '2019-01-17 12:02:33', '2019-01-17 12:02:33');

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `D_type` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Answer1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `T1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Answer2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `T2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Answer3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `T3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Answer4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `T4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES (1, 'where is u now?', '1', 'home', '4.331208', 'work', '24.471742', 'nothing', '53.0925', 'i don`t know', '81.183245', '2019-01-14 15:10:31', '2019-01-14 15:10:31');

-- ----------------------------
-- Table structure for spottimes
-- ----------------------------
DROP TABLE IF EXISTS `spottimes`;
CREATE TABLE `spottimes`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VID` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Sp_Time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `VID`(`VID`) USING BTREE,
  INDEX `Sp_Time`(`Sp_Time`) USING BTREE,
  CONSTRAINT `VID` FOREIGN KEY (`VID`) REFERENCES `videos` (`Path`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of spottimes
-- ----------------------------
INSERT INTO `spottimes` VALUES (10, 'C.mp4', '20.454', NULL, NULL);

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Path` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `Path`(`Path`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES (1, 'Sound', 'C.mp4', '2019-01-14 11:43:19', '2019-01-14 11:43:21');

SET FOREIGN_KEY_CHECKS = 1;
