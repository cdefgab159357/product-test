-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-12 11:19:15
-- 伺服器版本： 8.4.0
-- PHP 版本： 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `product_data`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product_name`
--

CREATE TABLE `product_name` (
  `product_id` varchar(13) DEFAULT NULL,
  `product_name` varchar(5) DEFAULT NULL,
  `product_type` int DEFAULT NULL,
  `product_price` int DEFAULT NULL,
  `product_num` int DEFAULT NULL,
  `product_pic` varchar(9) DEFAULT NULL,
  `product_desc` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 傾印資料表的資料 `product_name`
--

INSERT INTO `product_name` (`product_id`, `product_name`, `product_type`, `product_price`, `product_num`, `product_pic`, `product_desc`) VALUES
('product_12345', '超好用剪刀', 1, 100, 50, 'img\\1.jpg', '超好用'),
('product_12346', '烤雞', 2, 300, 51, 'img\\2.jpg', '超好吃'),
('product_12347', '雙人式帳篷', 3, 1000, 52, 'img\\3.jpg', '超好住'),
('product_12348', '高級手電筒', 4, 200, 53, 'img\\4.jpg', '超好拿'),
('product_12349', '單人睡袋', 5, 800, 54, 'img\\5.jpg', '超好睡');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
