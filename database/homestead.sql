/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : homestead

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 11/01/2020 20:16:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id_barang` int(30) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_penjual` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` int(30) NULL DEFAULT NULL,
  `lokasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gambar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES (1, 'Tenda', 'Tenda Bekualita', 'Dono Kasino', 12000, 'Dinoyo, Malang', 'Tenda', '/tenda/tenda8.jpg', NULL);
INSERT INTO `barang` VALUES (3, 'Hammock', 'Hammock Nyaman dan praktis', 'Dana', 35000, 'Singosari, Malang', 'Hammock', '/hammock/hammock1.jpg', NULL);
INSERT INTO `barang` VALUES (4, 'Tas Eiger', 'Tas Eiger', 'Tono', 90000, NULL, 'Tas', '/tas/tas1.png', NULL);
INSERT INTO `barang` VALUES (5, 'Herley', 'Tenda Bekualitas tinggi', 'Dinda', 90000, 'Arjosari, Malang', 'Tas', '/tas/tas1.png', NULL);
INSERT INTO `barang` VALUES (6, 'Harley', 'Deskripsi', 'Dandi', 35000, 'Blimbing', 'Motor Trail', '/tas/tas5.png', NULL);
INSERT INTO `barang` VALUES (7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2017_11_27_090317_add_activation_columns_to_users_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('taufiq.hidayah@binus.ac.id', '$2y$10$.mWWBVVNw8iRr7aUel4RO.HnADRR0H/VQrPJwDCQETKXFuC7YybcO', '2020-01-08 01:36:26');
INSERT INTO `password_resets` VALUES ('didin@binus.com', '$2y$10$ooEhYm8Jksc00MhoL6Yz3uSbH00uUu/kqfpFLglNxz/5xl4IaNXxK', '2020-01-08 03:22:03');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `activation_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Zaky', 'taufiq.hidayah@binus.ac.id', '$2y$10$L4.mlhGulMb5WoZzkuNHLepBadGOCEb2yJ4zo.vydRPyJpVE2SLdK', '0yXFgQNFp0eYu1ppaXo0x7d8RYS8d0rimcvRaXxyLcgvsWKZhrhw9piwSBCl', '2019-12-26 00:50:39', '2020-01-07 03:28:31', 1, NULL);
INSERT INTO `users` VALUES (2, 'Zaky', '1taufiq.hidayah@binus.ac.id', '$2y$10$RmfAk.YyZCjumUwygMdPuu.Z81jIcdSkxsTUhzsS5c9SZC8xzRG/C', NULL, '2019-12-26 00:53:06', '2019-12-26 00:53:06', 0, 'et3yRLHTJmkP2n2MzeoXMkZRYvf3062nnpQ6QQZESpY8DHDleHPgtk14hy6B5VotTAMGX2Sy7OQPSDCnq9T0SJI0Y5bhUe1gVmfmBoBqyoZUOMUoXo0FwgtM5GjlE2Va3jeCfhJzeTSLCOtAoH1DJsBIkXqgiot6VvFGMs9rHZ0jEuIlqBdFhnS8jSuxIGDygq5glpdUjiFaZf9f9ztHbDLOawIpHScztYqHiaKf4fAUfW8CjROal8H6pd8Snb4');
INSERT INTO `users` VALUES (3, 'Zaky', 'zaky@zaky.com', '$2y$10$E4s1A0XGKsswy1oMruuDsOFvFfDBDYBmnHBatd31jGlgVVnX/Fuui', '90T5iXyXpjwnWFLYuZbkaWF3WWoDFMauvHefrsZJTW9STBfEIW5sJ0pVLHeb', '2020-01-07 17:48:46', '2020-01-07 17:49:17', 1, NULL);
INSERT INTO `users` VALUES (4, 'Zeze', 'zeze@edu.edu', '$2y$10$7D0Un9yffUGsBBKgTNrfBuOG/.n.661Vvui2dEYqrM6wExUwpVGGK', 'DXsmHqmDQmjPldfrhgODalfppc0snogIDjtetKdLUbWSVS3BbPDAmIgF4nkO', '2020-01-08 02:05:05', '2020-01-08 02:05:44', 1, NULL);
INSERT INTO `users` VALUES (5, 'didin', 'didin@binus.com', '$2y$10$1cVKq3EF1rONgVnKvsVH5uKBFKDY1jiaWmPbMC25zlfFChQUMg4we', '1GTIeSFZkrU0LCmGNfoebWzSrzeEIVk3mnZbg7eExnudJZv7OYoui6mtGtHv', '2020-01-08 03:16:08', '2020-01-08 03:16:47', 1, NULL);
INSERT INTO `users` VALUES (6, '/', 'sahid@binus.com', '$2y$10$b5/xGdJg8K8G2HCArOJBC.5sIsX9QcQ.GBuOAW7uRsZdY0/EJNl7K', 'd9Hl2MlNyur17EWxD18QPjddfYHEocdIAGSZKk9gcAulEoeogPImPLvbWwoJ', '2020-01-08 03:25:30', '2020-01-08 03:26:53', 1, NULL);

SET FOREIGN_KEY_CHECKS = 1;
