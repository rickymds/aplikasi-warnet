/*
 Navicat Premium Data Transfer

 Source Server         : roy
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost:3306
 Source Schema         : db_warnet

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 02/07/2020 14:44:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin`  (
  `nama_admin` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jk` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umur` int(3) NOT NULL,
  `username` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('Ricky Muhammad', 'L', 20, 'rickymds', 'ricky1');

-- ----------------------------
-- Table structure for tb_pesan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pesan`;
CREATE TABLE `tb_pesan`  (
  `id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu_tambahan` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pc` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga` int(10) NOT NULL,
  `tanggal` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jam_main` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jam_habis` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_pesan
-- ----------------------------
INSERT INTO `tb_pesan` VALUES ('PL001', 'yoi', '2 jam', '1 jam', 'PC1', 15000, '2020-07-02', '13:36:56', '15:36:56');
INSERT INTO `tb_pesan` VALUES ('PL002', 'woy', '3 jam', 'null', 'PC3', 15000, '2020-07-02', '14:02:27', '17:2:27');

SET FOREIGN_KEY_CHECKS = 1;
