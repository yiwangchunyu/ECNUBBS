-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-22 06:52:37
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecnubbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL COMMENT '院系id',
  `name` varchar(50) NOT NULL COMMENT '院系名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
(11, '计算机科学技术系'),
(12, '软件学院'),
(13, '教育学部'),
(14, '经济与管理学部'),
(15, '地球科学学部'),
(16, '人文社会科学学院'),
(17, '信息科学技术学院'),
(18, '设计学院'),
(19, '孟宪承书院'),
(20, '大夏书院'),
(21, '光华书院'),
(22, '传播学院'),
(99, '华东师范大学');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '院系id', AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
