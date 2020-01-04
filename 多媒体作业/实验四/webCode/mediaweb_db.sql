-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2020-01-01 14:23:50
-- 服务器版本： 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mediaweb_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `media` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2106 ;

--
-- 转存表中的数据 `media`
--

INSERT INTO `media` (`id`, `type`, `title`, `name`, `image`, `media`, `content`) VALUES
(2105, 'mp4', '麻雀MV.mp4', '麻雀MV.mp4', '', '麻雀MV.mp4', '麻雀MV'),
(101, 'jpg', '埃菲尔铁塔.jpg', '', '', '埃菲尔铁塔.jpg', ''),
(201, 'png', '', '', '', '2-1.png', ''),
(202, 'png', '', '', '', '2-2.png', ''),
(203, 'png', '', '', '', '2-3.png', ''),
(204, 'png', '', '', '', '2-4.png', ''),
(205, 'png', '', '', '', '2-5.png', ''),
(26, 'png', '', '', '', '2-6.png', ''),
(207, 'png', '', '', '', '2-7.png', ''),
(208, 'png', '', '', '', '2-8.png', ''),
(29, 'png', '', '', '', '2-9.png', ''),
(102, 'jpg', '背景墙.jpg', '', '', '背景墙.jpg', ''),
(103, 'jpg', '窗户.jpg', '', '', '窗户.jpg', ''),
(104, 'jpg', '大本钟.jpg', '', '', '大本钟.jpg', ''),
(105, 'jpg', '大地.jpg', '', '', '大地.jpg', ''),
(106, 'jpg', '耳机.jpg', '', '', '耳机.jpg', ''),
(107, 'jpg', '凡赛尔宫.jpg', '', '', '凡赛尔宫.jpg', ''),
(108, 'jpg', '风车-地.jpg', '', '', '风车-地.jpg', ''),
(109, 'jpg', '风车-红.jpg', '', '', '风车-红.jpg', ''),
(110, 'jpg', '风车-蓝.jpg', '', '', '风车-蓝.jpg', ''),
(111, 'jpg', '风车扇叶.jpg', '', '', '风车扇叶.jpg', ''),
(112, 'jpg', '风车主体-红.jpg', '', '', '风车主体-红.jpg', ''),
(113, 'jpg', '风车主体-蓝.jpg', '', '', '风车主体-蓝.jpg', ''),
(114, 'jpg', '风筝.jpg', '', '', '风筝.jpg', ''),
(115, 'jpg', '金字塔.jpg', '', '', '金字塔.jpg', ''),
(116, 'jpg', '凯旋门.jpg', '', '', '凯旋门.jpg', ''),
(117, 'jpg', '凯旋门-地.jpg', '', '', '凯旋门-地.jpg', ''),
(118, 'jpg', '蓝天.jpg', '', '', '蓝天.jpg', ''),
(119, 'jpg', '麻雀.jpg', '', '', '麻雀.jpg', ''),
(120, 'jpg', '麻雀翅膀.jpg', '', '', '麻雀翅膀.jpg', ''),
(121, 'jpg', '麻雀封面.jpg', '', '', '麻雀封面.jpg', ''),
(122, 'jpg', '麻雀脚.jpg', '', '', '麻雀脚.jpg', ''),
(123, 'jpg', '麻雀身体.jpg', '', '', '麻雀身体.jpg', ''),
(124, 'jpg', '女孩.jpg', '', '', '女孩.jpg', ''),
(125, 'jpg', '女孩胳膊1.jpg', '', '', '女孩胳膊1.jpg', ''),
(126, 'jpg', '女孩胳膊2.jpg', '', '', '女孩胳膊2.jpg', ''),
(127, 'jpg', '女孩脸1.jpg', '', '', '女孩脸1.jpg', ''),
(128, 'jpg', '女孩身体.jpg', '', '', '女孩身体.jpg', ''),
(129, 'jpg', '女孩图2.jpg', '', '', '女孩图2.jpg', ''),
(130, 'jpg', '女孩腿1.jpg', '', '', '女孩腿1.jpg', ''),
(131, 'jpg', '手机.jpg', '', '', '手机.jpg', ''),
(132, 'jpg', '书.jpg', '', '', '书.jpg', ''),
(133, 'jpg', '太阳.jpg', '', '', '太阳.jpg', ''),
(134, 'jpg', '星星.jpg', '', '', '星星.jpg', ''),
(135, 'jpg', '云朵1.jpg', '', '', '云朵1.jpg', ''),
(136, 'jpg', '云朵2.jpg', '', '', '云朵2.jpg', ''),
(137, 'jpg', '自由女神像.jpg', '', '', '自由女神像.jpg', ''),
(2101, 'mp3', '麻雀-李荣浩(原唱）.mp3', '李荣浩', '', '麻雀-李荣浩(原唱）.mp3', '麻雀-李荣浩(原唱）.mp3'),
(2102, 'mp3', '麻雀-背景音.mp3', '纯音乐', '', '麻雀-背景音.mp3', '麻雀-背景音.mp3'),
(2103, 'mp3', '麻雀-人声演唱.mp3', '黄若鹏2016212901', '', '麻雀-人声演唱.mp3', '麻雀-人声演唱.mp3'),
(2104, 'mp3', '麻雀-混缩.mp3', '黄若鹏2016212901', '', '麻雀-混缩.mp3', '麻雀-混缩.mp3');

-- --------------------------------------------------------

--
-- 表的结构 `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `url` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sort` int(2) NOT NULL DEFAULT '99',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `nav`
--

INSERT INTO `nav` (`id`, `title`, `url`, `sort`) VALUES
(1, '首页', 'index.php', 1),
(2, '实验一', 'exmp1.php', 2),
(3, '实验二', 'exmp2.php', 3),
(4, '实验三', 'exmp3.php', 4),
(5, '实验四', 'exmp4.php', 5);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 1),
(6, '001', '001', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
