-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-01 05:30:57
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
-- 表的结构 `article_pics`
--

CREATE TABLE `article_pics` (
  `id` int(20) NOT NULL COMMENT '图片id',
  `publish_id` int(20) NOT NULL COMMENT '发布文章id',
  `url` varchar(100) NOT NULL COMMENT '图片url',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '上传时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article_pics`
--

INSERT INTO `article_pics` (`id`, `publish_id`, `url`, `time`) VALUES
(36, 64, 'pages/editor/images/22/20180618080126333.jpeg', '2018-06-18 16:01:26'),
(37, 65, '/pages/editor/images/29//20180618114358637.jpg', '2018-06-18 19:43:58'),
(45, 77, '/pages/editor/images/31//20180618132110576.jpg', '2018-06-18 21:21:10'),
(49, 82, 'http://bbs.yiwangchunyu.wang/pages/editor/images/22/20180622062430693.png', '2018-06-22 14:24:30'),
(50, 83, 'http://bbs.yiwangchunyu.wang/pages/editor/images/66/20180622081305780.jpg', '2018-06-22 16:13:05'),
(51, 84, 'http://bbs.yiwangchunyu.wang/pages/editor/images/66/20180622081418263.png', '2018-06-22 16:14:18'),
(52, 85, 'http://bbs.yiwangchunyu.wang/pages/editor/images/22/20180622081555337.jpg', '2018-06-22 16:15:55'),
(53, 86, 'http://bbs.yiwangchunyu.wang/pages/editor/images/22/20180622081713668.jpg', '2018-06-22 16:17:13'),
(54, 87, 'http://bbs.yiwangchunyu.wang/pages/editor/images/66/20180622082143296.jpg', '2018-06-22 16:21:43'),
(55, 89, 'http://bbs.yiwangchunyu.wang/pages/editor/images/68/20180622105158553.JPG', '2018-06-22 18:51:58'),
(56, 90, 'http://bbs.yiwangchunyu.wang/pages/editor/images/69/20180622111547947.jpg', '2018-06-22 19:15:47'),
(57, 92, 'http://bbs.yiwangchunyu.wang/pages/editor/images/68/20180622160541685.gif', '2018-06-23 00:05:41'),
(58, 93, 'http://bbs.yiwangchunyu.wang/pages/editor/images/68/20180622160701501.jpg', '2018-06-23 00:07:01'),
(59, 94, 'http://bbs.yiwangchunyu.wang/pages/editor/images/68/20180622160829659.jpg', '2018-06-23 00:08:29'),
(60, 96, 'http://bbs.yiwangchunyu.wang/pages/editor/images/68/20180622161212948.jpg', '2018-06-23 00:12:12'),
(61, 97, 'http://bbs.yiwangchunyu.wang/pages/editor/images/68/20180622161859362.jpg', '2018-06-23 00:18:59'),
(62, 101, 'http://bbs.yiwangchunyu.wang/pages/editor/images/22/20180623010851170.gif', '2018-06-23 09:08:51'),
(65, 103, 'http://bbs.yiwangchunyu.wang/pages/editor/images/65/20180623051811772.PNG', '2018-06-23 13:18:11'),
(66, 104, 'http://bbs.yiwangchunyu.wang/pages/editor/images/72/20180627073539783.jpeg', '2018-06-27 15:35:39');

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(30) NOT NULL DEFAULT '所有' COMMENT '类别'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, '所有'),
(2, '师大心情'),
(3, '失物招领'),
(4, '相关通知'),
(5, '表白墙');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `id` int(20) NOT NULL COMMENT '评论id',
  `publish_id` int(20) NOT NULL COMMENT '发布文章id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `cmt` varchar(140) NOT NULL COMMENT '评论内容',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '评论时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `publish_id`, `user_id`, `cmt`, `time`) VALUES
(46, 86, 22, '要肝就肝到早上五点！！！', '2018-06-22 18:02:14'),
(47, 87, 22, '这个猫图片太长了，以后得发4:3的宽图', '2018-06-22 18:22:43'),
(48, 86, 22, 'dalao汪太强了！！！！！', '2018-06-22 18:25:34'),
(49, 83, 22, '这张图上传时发生了中断，请您删了重新发', '2018-06-22 18:33:42'),
(50, 78, 22, '年轻人不要老叹气', '2018-06-22 18:33:59'),
(51, 88, 22, 'ooo is everywhere', '2018-06-22 18:52:15'),
(52, 89, 22, '刚刚外卖我刚好点了粽子', '2018-06-22 18:53:24'),
(53, 86, 66, 'dalao汪太强了！！？？自己夸自己？？', '2018-06-22 18:53:37'),
(54, 86, 22, '回复楼下：那个是大佬家偷偷用我账号评论的', '2018-06-22 18:54:44'),
(55, 87, 66, '回复站长：我知道了，下次会注意的！', '2018-06-22 18:56:50'),
(56, 83, 66, '回复站长：收到！', '2018-06-22 19:01:01'),
(57, 82, 66, '这学校全景图画的不错', '2018-06-22 19:01:33'),
(58, 90, 68, '不用治好也能做贡献', '2018-06-23 00:00:26'),
(59, 93, 68, '鸽王大赛', '2018-06-23 00:13:55'),
(60, 86, 68, '你头像是折原临也。', '2018-06-23 00:15:12'),
(61, 82, 68, '笑死我了学校全景图', '2018-06-23 00:15:44'),
(62, 91, 22, '就直接评论就好了呀', '2018-06-23 08:23:56'),
(63, 93, 22, '心满意足', '2018-06-23 08:24:06'),
(64, 101, 68, '可以了哎', '2018-06-23 09:11:14');

-- --------------------------------------------------------

--
-- 表的结构 `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL COMMENT '院系id',
  `name` varchar(50) NOT NULL COMMENT '院系名称',
  `location` varchar(30) NOT NULL DEFAULT '上海市中山北路3663号',
  `url` varchar(100) NOT NULL DEFAULT 'https://www.ecnu.edu.cn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `location`, `url`) VALUES
(0, '华东师范大学', '上海市中山北路3663号', 'https://www.ecnu.edu.cn'),
(11, '计算机科学技术系', '理科大楼B楼2F', 'http://www.cs.ecnu.edu.cn/'),
(12, '软件学院', '', 'https://www.ecnu.edu.cn'),
(13, '教育学部', '', 'https://www.ecnu.edu.cn'),
(14, '经济与管理学部', '', 'https://www.ecnu.edu.cn'),
(15, '地球科学学部', '', 'https://www.ecnu.edu.cn'),
(16, '人文社会科学学院', '', 'https://www.ecnu.edu.cn'),
(17, '信息科学技术学院', '', 'https://www.ecnu.edu.cn'),
(18, '设计学院', '', 'https://www.ecnu.edu.cn'),
(19, '孟宪承书院', '', 'https://www.ecnu.edu.cn'),
(20, '大夏书院', '', 'https://www.ecnu.edu.cn'),
(21, '光华书院', '', 'https://www.ecnu.edu.cn'),
(22, '传播学院', '上海市闵行区东川路500号传播学院', 'http://www.comm.ecnu.edu.cn/');

-- --------------------------------------------------------

--
-- 表的结构 `follow`
--

CREATE TABLE `follow` (
  `user_id1` int(11) NOT NULL COMMENT 'id1 follow id2',
  `user_id2` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `follow`
--

INSERT INTO `follow` (`user_id1`, `user_id2`, `time`) VALUES
(22, 29, '2018-06-30 21:59:47'),
(22, 31, '2018-06-22 02:32:41'),
(22, 65, '2018-06-23 21:56:10'),
(22, 66, '2018-06-22 13:48:13'),
(22, 68, '2018-06-22 18:51:22'),
(22, 69, '2018-06-22 19:25:20'),
(22, 70, '2018-06-24 22:26:33'),
(22, 72, '2018-06-27 15:36:54'),
(29, 22, '2018-06-22 11:17:38'),
(66, 22, '2018-06-22 13:50:16'),
(68, 22, '2018-06-23 00:14:37'),
(70, 22, '2018-06-23 14:56:46');

-- --------------------------------------------------------

--
-- 表的结构 `publish`
--

CREATE TABLE `publish` (
  `id` int(20) NOT NULL COMMENT '文章id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `category` int(11) UNSIGNED NOT NULL COMMENT '分类',
  `content` varchar(14000) NOT NULL COMMENT '内容',
  `time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `liked` int(11) DEFAULT '0' COMMENT '赞'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `publish`
--

INSERT INTO `publish` (`id`, `user_id`, `title`, `category`, `content`, `time`, `liked`) VALUES
(64, 22, '师大记忆', 0, '你无法在地图上找到这条河，我是说，丽娃河……\r\n岁月被人带来，又带走。千万个学生进来，就有千万条丽娃河被记忆。', '2018-06-18 16:01:26', 0),
(65, 29, '学习使我快乐', 0, '操作系统为什么这么难，有没有哪个小哥哥小姐姐来教教我啊。真的要抓狂了。。。江主席叫我喝水，我充耳不闻，汪特首叫我吃饭，我无动于衷。什么也别说了，我爱学习！', '2018-06-18 19:43:58', 0),
(77, 31, 'test', 0, '夺命六月。', '2018-06-18 21:21:10', 0),
(78, 66, '想问天问大地', 0, '哎', '2018-06-22 13:44:38', 0),
(82, 22, '发张图片试试', 0, '华东师范大学成立于1951年10月16日，主要基础是创建于1924年的大夏大学和创建于1925年的光华大学。2006年，学校被确定为国家“985工程”重点建设的高水平研究型大学。', '2018-06-22 14:24:30', 0),
(83, 66, '让我平安度过期末吧', 0, '晚上九点', '2018-06-22 16:13:05', 0),
(84, 66, '我不相信', 0, '！', '2018-06-22 16:14:18', 0),
(85, 22, '更新了头像', 0, '更新了头像啊', '2018-06-22 16:15:55', 0),
(86, 22, '晚上九点', 0, '晚上九点，上海见!!!', '2018-06-22 16:17:13', 0),
(87, 66, '喵', 0, 'test', '2018-06-22 16:21:43', 0),
(88, 68, '.ooo', 0, 'ooo is here.', '2018-06-22 18:49:47', 0),
(89, 68, '今天', 0, '戊戌年 五月初九', '2018-06-22 18:51:58', 0),
(90, 69, '祝站长身体健康', 0, '愿dalao wang早日治好腰间盘突出并为国家做出贡献', '2018-06-22 19:15:47', 0),
(91, 68, '怎么回复评论哇', 0, '(:з」∠)_', '2018-06-23 00:03:06', 0),
(92, 68, '深夜了！', 0, '月亮婆婆出来了。', '2018-06-23 00:05:41', 0),
(93, 68, '请欣赏我的实力bbs灌水', 0, '突然发现内容不能为空。', '2018-06-23 00:07:01', 0),
(94, 68, '教授给大家一些计算机知识', 0, '数组从1开始吗', '2018-06-23 00:08:29', 0),
(96, 68, '世界纪录', 0, 'ECNU也可以举办一场。', '2018-06-23 00:12:12', 0),
(97, 68, '晚安噜', 0, '(:3[____]', '2018-06-23 00:18:59', 0),
(98, 22, '腰酸背痛+n', 0, '今天也是没元气的一天呢', '2018-06-23 08:55:30', 0),
(101, 22, '陈同学的gif', 0, '怎么能发不了呢，不能啊', '2018-06-23 09:08:51', 0),
(103, 65, '模式识别要凉了', 0, '唉', '2018-06-23 13:18:11', 0),
(104, 72, '期末加油各位老铁', 0, '稳住 ', '2018-06-27 15:35:39', 0);

-- --------------------------------------------------------

--
-- 表的结构 `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  `photo` varchar(100) NOT NULL DEFAULT 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg' COMMENT '用户头像url',
  `gender` varchar(5) DEFAULT '男' COMMENT '性别',
  `faculty` int(11) DEFAULT '0' COMMENT '院系',
  `intro` text COMMENT '自我介绍',
  `token` varchar(50) NOT NULL COMMENT '帐号激活码',
  `token_exptime` int(10) NOT NULL COMMENT '激活码有效期',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态,0-未激活,1-已激活',
  `regtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `email`, `photo`, `gender`, `faculty`, `intro`, `token`, `token_exptime`, `status`, `regtime`) VALUES
(22, '壹汪春雨', '54235fd307ad8367cd4139f3a1c25215', 'yiwangchunyu@163.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/20180622081933756.jpg', '男', 11, 'Some of us get dipped in flat, some in satin, some in gloss. But every once in a while you find someone who is iridescent, and when you do, nothing will ever compare.', 'dd3d0ac658068e71342bafb2cf5082f4', 1529133921, 1, '2018-06-15 15:25:21'),
(29, '风追司马', '202cb962ac59075b964b07152d234b70', '17307971337@163.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 11, '', 'fd23de958f702881c9f8242eef48fb4d', 1529151301, 1, '2018-06-15 20:15:01'),
(30, '汪春雨', '069059b7ef840f0c74a814ec9237b6ec', 'yiwangchunyu@126.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 11, '', 'f6b30e55e84c3517e77b6264329654df', 1529157840, 1, '2018-06-15 22:04:00'),
(31, 'Qjchen', 'e10adc3949ba59abbe56e057f20f883e', 'cqj8660@163.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 11, '', '9886744d941ede8fe6137d52d66460ae', 1529414322, 1, '2018-06-18 21:18:42'),
(32, 'janggggg', 'c72b8d5585de8ae1e3c639e854f8989b', 'xyjiang1031@163.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 0, '', '7593445521bcdf0ac3f925a202e9be87', 1529416373, 1, '2018-06-18 21:52:53'),
(65, '今天也要加油啊', '54235fd307ad8367cd4139f3a1c25215', '466408056@qq.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/20180623051658296.PNG', '男', 0, '', 'f889e800dee962ee155bf6dcc0a321e8', 1529731564, 1, '2018-06-22 13:26:04'),
(66, 'lily', 'bcbbbe28fdd46a0fc6a51655c0a3fcf7', '610937859@qq.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/20180622110015574.jpg', '女', 11, '', 'abbc2ab3a230eb06820f8e88a9c3beed', 1529731826, 1, '2018-06-22 13:30:26'),
(68, 'ooo', '96e79218965eb72c92a549dd5a330112', '982819120@qq.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/20180622105023130.jpg', '女', 11, '', '677fe371155371b12c3f4e0086623ac1', 1529750853, 1, '2018-06-22 18:47:33'),
(69, 'himsenlee', '53b2f096e310cc16fb1fe28622913e4a', 'daowitheunhae@163.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 11, NULL, 'b258befe906d4dc36d9ed0efb27f95ae', 1529752060, 1, '2018-06-22 19:07:40'),
(70, 'shang', '34016a5afda51c17e0e4b1a2b521cd4e', 'ritas1223@163.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 11, NULL, '4cc02f6f2eac5f57a0b70ac263fb5c3f', 1529823225, 1, '2018-06-23 14:53:45'),
(71, '10152150101', 'c4eda1283d77aa02b72df87e1db1d888', '534307709@qq.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 22, NULL, '0db9465b704ebaed34aba38b9af9a745', 1530171057, 1, '2018-06-27 15:30:57'),
(72, 'keaihanhan', 'c4eda1283d77aa02b72df87e1db1d888', '13894722879@sohu.com', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '女', 22, NULL, 'e92ee7632543ba37374580f56a198eb3', 1530171238, 1, '2018-06-27 15:33:58'),
(73, 'CyWang', '54235fd307ad8367cd4139f3a1c25215', '10152150127@stu.ecnu.edu.cn', 'http://bbs.yiwangchunyu.wang/img/profilephoto/boy.jpg', '男', 11, NULL, '088f4dffea086b55047f167a3f6abfb7', 1530463091, 1, '2018-07-01 00:38:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_pics`
--
ALTER TABLE `article_pics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pic_pub` (`publish_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pic_pub` (`publish_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`user_id1`,`user_id2`),
  ADD KEY `user_id1` (`user_id1`),
  ADD KEY `user_id2` (`user_id2`);

--
-- Indexes for table `publish`
--
ALTER TABLE `publish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pub_user` (`user_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article_pics`
--
ALTER TABLE `article_pics`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '图片id', AUTO_INCREMENT=67;
--
-- 使用表AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '评论id', AUTO_INCREMENT=65;
--
-- 使用表AUTO_INCREMENT `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '院系id', AUTO_INCREMENT=100;
--
-- 使用表AUTO_INCREMENT `publish`
--
ALTER TABLE `publish`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '文章id', AUTO_INCREMENT=105;
--
-- 使用表AUTO_INCREMENT `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- 限制导出的表
--

--
-- 限制表 `article_pics`
--
ALTER TABLE `article_pics`
  ADD CONSTRAINT `pic_pub` FOREIGN KEY (`publish_id`) REFERENCES `publish` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `pid` FOREIGN KEY (`publish_id`) REFERENCES `publish` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `user_id1` FOREIGN KEY (`user_id1`) REFERENCES `t_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id2` FOREIGN KEY (`user_id2`) REFERENCES `t_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `publish`
--
ALTER TABLE `publish`
  ADD CONSTRAINT `puser` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
