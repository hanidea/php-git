-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 27, 2018 at 12:02 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(32) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `login_count` int(4) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT '1',
  `update_time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `login_count`, `last_time`, `is_update`, `update_time`) VALUES
(1, 'admin', '049fe3fcce60413d6f24345b16060d13', 'junjie@test.com', 95, 1517044323, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `desct` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `link`, `desct`) VALUES
(3, '20180127/20935a085d5268c958783dc4ec3e7b74.jpg', 'junjie.com', 'test'),
(2, '20180127/ebc6b3a696ec03666cc24856e41a6f53.jpg', 'www.51hanhan.com', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(200) NOT NULL,
  `cate_order` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cate_name`, `cate_order`, `pid`) VALUES
(1, '新闻', 1, 0),
(2, '产品', 2, 0),
(3, '公司新闻', 1, 1),
(4, '行业新闻', 2, 1),
(5, '家用系列', 1, 2),
(6, '商业系列', 2, 2),
(8, '儿童系列', 0, 2),
(9, '资讯新闻', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `create_time` int(12) NOT NULL,
  `update_time` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `course`, `grade`, `create_time`, `update_time`) VALUES
(1, '郭靖', 'guojing@test.com', 'php', '80', 1516636012, 1516636012),
(2, '黄蓉', 'huangrong@test.com', 'mysql', '88', 1516636012, 1516636012),
(3, '杨康', 'yangkang@test.com', 'mysql', '67', 1516636012, 1516636012),
(4, '洪七', 'hongqi@test.com', 'php', '35', 1516636012, 1516636012),
(5, '老顽童', 'laowantong@test.com', 'html', '78', 1516636012, 1516636012),
(6, '欧阳锋', 'ouyangfeng@test.com', 'mysql', '56', 1516636012, 1516636012),
(7, '杨过', 'yangguo@test.com', 'php', '99', 1516636012, 1516636012),
(8, '小龙女', 'xiaolongnv@test.com', 'html', '90', 1516636012, 1516636012),
(9, '张无忌', 'zhangwuji@test.com', 'mysql', '63', 1516636012, 1516636012),
(10, '赵敏', 'zhaomin@test.com', 'php', '80', 1516636012, 1516636012);

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descs` varchar(255) NOT NULL,
  `is_close` tinyint(2) NOT NULL,
  `is_update` tinyint(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id`, `title`, `keywords`, `descs`, `is_close`, `is_update`) VALUES
(1, '俄方的负担', 'keyword,php', 'git 开发', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;