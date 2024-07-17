-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 07:35 AM
-- Server version: 8.4.1
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `user_address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `user_name`, `password`, `email`, `user_address`, `phone`, `birthday`, `gender`, `avatar`) VALUES
('M001', '王小明', 'Password123', 'john.doe@example.com', '台北市大安區忠孝東路一段100號', '0987654321', '2020-10-10', 'male', 'img/avatar_1.jpg'),
('M002', '張美玲', 'SecurePass!23', 'alice.smith@example.com', '新北市板橋區文化路二段50號', '0987654322', '2020-10-11', 'female', 'img/avatar_2.jpg'),
('M003', '陳大偉', '987654321', 'david.wong@example.com', '高雄市苓雅區中正一路80號', '0987654323', '2020-10-12', 'female', 'img/avatar_3.jpg'),
('M004', '李小青', 'P@ssw0rd!', 'emily.jones@example.com', '桃園市中壢區中正路300號', '0987654324', '2020-10-13', 'female', 'img/avatar_4.jpg'),
('M005', '林志偉', 'qwertyuiop', 'michael.chen@example.com', '新竹市東區光復路二段150號', '0987654325', '2020-10-14', 'female', 'img/avatar_1.jpg'),
('M006', '黃雅婷', 'MySecretP@ss', 'sarah.ng@example.com', '台中市西屯區文心路三段250號', '0987654326', '2020-10-15', 'female', 'img/avatar_2.jpg'),
('M007', '吳宗翰', '1234567890', 'peter.li@example.com', '彰化縣彰化市民生路100號', '0987654327', '2020-10-16', 'female', 'img/avatar_3.jpg'),
('M008', '許佳慧', 'Chang3M3N0w', 'lisa.wang@example.com', '宜蘭縣宜蘭市中山路50號', '0987654328', '2020-10-17', 'male', 'img/avatar_4.jpg'),
('M009', '王小明', 'Password124', 'john.doe@example.com', '台北市大安區忠孝東路一段100號', '0987654329', '2020-10-18', 'male', 'img/avatar_1.jpg'),
('M010', '張美玲', 'SecurePass!24', 'alice.smith@example.com', '新北市板橋區文化路二段50號', '0987654330', '2020-10-19', 'female', 'img/avatar_2.jpg'),
('M011', '陳大偉', '987654322', 'david.wong@example.com', '高雄市苓雅區中正一路80號', '0987654331', '2020-10-20', 'female', 'img/avatar_3.jpg'),
('M012', '李小青', 'P@ssw0rd!', 'emily.jones@example.com', '桃園市中壢區中正路300號', '0987654332', '2020-10-21', 'female', 'img/avatar_4.jpg'),
('M013', '林志偉', 'qwertyuiop', 'michael.chen@example.com', '新竹市東區光復路二段150號', '0987654333', '2020-10-22', 'female', 'img/avatar_1.jpg'),
('M014', '黃雅婷', 'MySecretP@ss', 'sarah.ng@example.com', '台中市西屯區文心路三段250號', '0987654334', '2020-10-23', 'female', 'img/avatar_2.jpg'),
('M015', '吳宗翰', '1234567891', 'peter.li@example.com', '彰化縣彰化市民生路100號', '0987654335', '2020-10-24', 'female', 'img/avatar_3.jpg'),
('M016', '許佳慧', 'Chang3M3N0w', 'lisa.wang@example.com', '宜蘭縣宜蘭市中山路50號', '0987654336', '2020-10-25', 'male', 'img/avatar_4.jpg'),
('M017', '王小明', 'Password125', 'john.doe@example.com', '台北市大安區忠孝東路一段100號', '0987654337', '2020-10-26', 'male', 'img/avatar_1.jpg'),
('M018', '張美玲', 'SecurePass!25', 'alice.smith@example.com', '新北市板橋區文化路二段50號', '0987654338', '2020-10-27', 'female', 'img/avatar_2.jpg'),
('M019', '陳大偉', '987654323', 'david.wong@example.com', '高雄市苓雅區中正一路80號', '0987654339', '2020-10-28', 'female', 'img/avatar_3.jpg'),
('M020', '李小青', 'P@ssw0rd!', 'emily.jones@example.com', '桃園市中壢區中正路300號', '0987654340', '2020-10-29', 'female', 'img/avatar_4.jpg'),
('M021', '林志偉', 'qwertyuiop', 'michael.chen@example.com', '新竹市東區光復路二段150號', '0987654341', '2020-10-30', 'female', 'img/avatar_1.jpg'),
('M022', '黃雅婷', 'MySecretP@ss', 'sarah.ng@example.com', '台中市西屯區文心路三段250號', '0987654342', '2020-10-31', 'female', 'img/avatar_1.jpg'),
('M023', '王小明', 'Password124', 'john.doe@example.com', '台北市大安區忠孝東路一段100號', '0987654343', '2020-10-32', 'male', 'img/avatar_2.jpg'),
('M024', '張美玲', 'SecurePass!24', 'alice.smith@example.com', '新北市板橋區文化路二段50號', '0987654344', '2020-10-33', 'female', 'img/avatar_3.jpg'),
('M025', '陳大偉', '987654322', 'david.wong@example.com', '高雄市苓雅區中正一路80號', '0987654345', '2020-10-34', 'female', 'img/avatar_4.jpg'),
('M026', '李小青', 'P@ssw0rd!', 'emily.jones@example.com', '桃園市中壢區中正路300號', '0987654346', '2020-10-35', 'female', 'img/avatar_1.jpg'),
('M027', '林志偉', 'qwertyuiop', 'michael.chen@example.com', '新竹市東區光復路二段150號', '0987654347', '2020-10-36', 'female', 'img/avatar_2.jpg'),
('M028', '黃雅婷', 'MySecretP@ss', 'sarah.ng@example.com', '台中市西屯區文心路三段250號', '0987654348', '2020-10-37', 'female', 'img/avatar_3.jpg'),
('M029', '吳宗翰', '1234567891', 'peter.li@example.com', '彰化縣彰化市民生路100號', '0987654349', '2020-10-38', 'female', 'img/avatar_4.jpg'),
('M030', '許佳慧', 'Chang3M3N0w', 'lisa.wang@example.com', '宜蘭縣宜蘭市中山路50號', '0987654350', '2020-10-39', 'male', 'img/avatar_1.jpg'),
('M031', '王小明', 'Password125', 'john.doe@example.com', '台北市大安區忠孝東路一段100號', '0987654351', '2020-10-40', 'male', 'img/avatar_2.jpg'),
('M032', '張美玲', 'SecurePass!25', 'alice.smith@example.com', '新北市板橋區文化路二段50號', '0987654352', '2020-10-41', 'female', 'img/avatar_3.jpg'),
('M033', '陳大偉', '987654323', 'david.wong@example.com', '高雄市苓雅區中正一路80號', '0987654353', '2020-10-42', 'female', 'img/avatar_4.jpg'),
('M034', '李小青', 'P@ssw0rd!', 'emily.jones@example.com', '桃園市中壢區中正路300號', '0987654354', '2020-10-43', 'female', 'img/avatar_1.jpg'),
('M035', '林志偉', 'qwertyuiop', 'michael.chen@example.com', '新竹市東區光復路二段150號', '0987654355', '2020-10-44', 'female', 'img/avatar_2.jpg'),
('M036', '黃雅婷', 'MySecretP@ss', 'sarah.ng@example.com', '台中市西屯區文心路三段250號', '0987654356', '2020-10-45', 'female', 'img/avatar_3.jpg'),
('M037', '吳宗翰', '1234567892', 'peter.li@example.com', '彰化縣彰化市民生路100號', '0987654357', '2020-10-46', 'female', 'img/avatar_4.jpg'),
('M038', '許佳慧', 'Chang3M3N0w', 'lisa.wang@example.com', '宜蘭縣宜蘭市中山路50號', '0987654358', '2020-10-47', 'male', 'img/avatar_1.jpg'),
('M039', '王小明', 'Password126', 'john.doe@example.com', '台北市大安區忠孝東路一段100號', '0987654359', '2020-10-48', 'male', 'img/avatar_2.jpg'),
('M040', '張美玲', 'SecurePass!26', 'alice.smith@example.com', '新北市板橋區文化路二段50號', '0987654360', '2020-10-49', 'female', 'img/avatar_3.jpg'),
('M041', '陳大偉', '987654324', 'david.wong@example.com', '高雄市苓雅區中正一路80號', '0987654361', '2020-10-50', 'female', 'img/avatar_4.jpg'),
('M042', '李小青', 'P@ssw0rd!', 'emily.jones@example.com', '桃園市中壢區中正路300號', '0987654362', '2020-10-51', 'female', 'img/avatar_1.jpg'),
('M043', '林志偉', 'qwertyuiop', 'michael.chen@example.com', '新竹市東區光復路二段150號', '0987654363', '2020-10-52', 'female', 'img/avatar_2.jpg'),
('M044', '黃雅婷', 'MySecretP@ss', 'sarah.ng@example.com', '台中市西屯區文心路三段250號', '0987654364', '2020-10-53', 'female', 'img/avatar_3.jpg'),
('M045', '王小明', 'Password125', 'john.doe@example.com', '台北市大安區忠孝東路一段100號', '0987654365', '2020-10-54', 'male', 'img/avatar_4.jpg'),
('M046', '張美玲', 'SecurePass!25', 'alice.smith@example.com', '新北市板橋區文化路二段50號', '0987654366', '2020-10-55', 'female', 'img/avatar_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
