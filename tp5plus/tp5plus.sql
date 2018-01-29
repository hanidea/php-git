-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 29, 2018 at 02:05 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tp5`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) unsigned NOT NULL COMMENT '班级主键',
  `name` varchar(100) DEFAULT NULL COMMENT '班级名称',
  `length` varchar(20) DEFAULT NULL COMMENT '学制',
  `price` int(11) DEFAULT NULL COMMENT '学费',
  `status` int(11) DEFAULT NULL COMMENT '是否启用',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `is_delete` int(11) DEFAULT NULL COMMENT '允许删除',
  `student_id` int(11) DEFAULT NULL COMMENT '关联外键'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `name`, `length`, `price`, `status`, `create_time`, `update_time`, `delete_time`, `is_delete`, `student_id`) VALUES
(1, 'PHP高级开发工程师就业班', '6个月', 19800, 1, 1502242191, 1517225925, NULL, 1, NULL),
(2, '前端开发工程师提高班', '3个月', 6767, 1, 1502242191, 1517225925, NULL, 1, NULL),
(3, 'WEB开发全栈工程师班', '6个月', 28800, 1, 1502242191, 1517225925, NULL, 1, NULL),
(4, 'Java开发工程师提升班', '一年半', 3500, 1, 1502257693, 1517225925, NULL, 1, NULL),
(5, '平面设计高薪就业班', '6个月', 9800, 1, 1502334559, 1517225925, NULL, 1, NULL),
(6, '平面设计就业班', '', 0, 1, 1517225648, 1517227015, 1517227015, 1, NULL),
(7, '全栈工程师', '6个月', 9800, 1, 1517225864, 1517227013, 1517227013, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(4) DEFAULT NULL COMMENT '性别',
  `age` tinyint(4) unsigned DEFAULT NULL COMMENT '年龄',
  `mobile` varchar(20) DEFAULT NULL COMMENT '手机号',
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱',
  `status` int(11) DEFAULT NULL COMMENT '当前状态',
  `start_time` int(11) DEFAULT NULL COMMENT '入学时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `is_delete` int(11) DEFAULT NULL COMMENT '允许删除',
  `grade_id` int(11) DEFAULT NULL COMMENT '关联外键'
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `sex`, `age`, `mobile`, `email`, `status`, `start_time`, `create_time`, `update_time`, `delete_time`, `is_delete`, `grade_id`) VALUES
(1, '杨过', 0, 67, '18966557788', 'yangguo@test.cn', 1, 1494345600, 1502326725, 1517227591, NULL, 1, 5),
(2, '小龙女', 0, 33, '13509897765', 'xiaolongnv@test.cn', 1, 1502326725, 1502326725, 1517227591, NULL, 1, 1),
(3, '尹志平', 1, 38, '17765336278', 'yizhiping@test.cn', 1, 1502326725, 1502326725, 1517227591, NULL, 1, 3),
(4, '老顽童', 0, 89, '15677281923', 'laowantong@test.cn', 1, 1502294400, 1502326725, 1517230815, NULL, 1, 3),
(5, '洪七公', 0, 78, '13389776234', 'hongqigong@test.cn', 1, 1502294400, 1502326725, 1517230849, NULL, 1, 2),
(6, '郭靖', 0, 26, '15766338726', 'guojin@test.cn', 1, 1502294400, 1502326725, 1517227591, NULL, 1, 1),
(7, '黄蓉', 0, 46, '18976227182', 'huangrong@test.cn', 1, 1502326725, 1502326725, 1517227742, NULL, 1, 1),
(8, '杨康', 1, 45, '13287009834', 'yangkang@test.cn', 1, 1502326725, 1502326725, 1517227738, NULL, 1, 3),
(9, '欧阳克', 1, 37, '13908772343', 'ouyangke@test.cn', 1, 1502326725, 1502326725, 1517227736, NULL, 1, 2),
(10, '张无忌', 1, 28, '15387298273', 'zhangwuji@test.cn', 1, 1502326725, 1502326725, 1517227591, NULL, 1, 2),
(11, '赵敏', 0, 26, '13987372937', 'zhaoming@test.cn', 1, 1502326725, 1502326725, 1517227591, NULL, 1, 3),
(12, '宋青书', 0, 22, '15806554328', 'songqinshu@test.cn', 1, 1494864000, 1502327784, 1517227591, NULL, 1, 2),
(13, '周芷若', 1, 20, '18977665544', 'zhouzhiruo@test.cn', 1, 1501948800, 1502343910, 1502343931, NULL, NULL, 5),
(14, '俊杰', 0, 28, '13876253849', 'junjie@test.com', 1, 1517068800, 1517227637, 1517227701, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `degree` varchar(30) DEFAULT NULL COMMENT '学历',
  `mobile` varchar(20) DEFAULT NULL COMMENT '手机号',
  `school` varchar(50) DEFAULT NULL COMMENT '毕业学校',
  `hiredate` int(11) DEFAULT NULL COMMENT '入职时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除标志',
  `is_delete` int(11) DEFAULT '1' COMMENT '允许删除',
  `status` int(11) DEFAULT NULL COMMENT '1启用0禁用',
  `grade_id` int(11) DEFAULT NULL COMMENT '外键'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `degree`, `mobile`, `school`, `hiredate`, `create_time`, `update_time`, `delete_time`, `is_delete`, `status`, `grade_id`) VALUES
(1, '朱老师', '2', '15705517878', '中国科技大学', 1420041600, 1970, 1517227234, NULL, 1, 1, 5),
(2, '李老师', '1', '13988995566', '合肥工业大学', 1466006400, 2017, 1517227234, NULL, 1, 1, 2),
(3, '洪老师', '1', '18955139988', '安徽大学', 1486310400, 2017, 1517227234, NULL, 1, 1, 1),
(5, '张老师', '1', '15805512377', '安徽师范大学', 1461254400, 2017, 1517227234, NULL, 1, 1, 5),
(6, '范老师', '1', '18976765533', '安徽理工大学', 1501948800, 1502272302, 1517227237, NULL, 1, 1, 4),
(7, 'James wang', '1', '13816727098', '交通大学', 1517068800, 1517227083, 1517227234, NULL, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL COMMENT '用户ID',
  `name` varchar(50) DEFAULT NULL COMMENT '用户名',
  `password` varchar(32) DEFAULT NULL COMMENT '用户密码',
  `email` varchar(255) DEFAULT NULL COMMENT '用户邮箱',
  `role` tinyint(2) unsigned DEFAULT '1' COMMENT '角色',
  `status` int(2) unsigned DEFAULT '1' COMMENT '状态:1启用0禁用',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `login_time` int(11) unsigned DEFAULT NULL COMMENT '登录时间',
  `login_count` int(11) unsigned DEFAULT '0' COMMENT '登录次数',
  `is_delete` int(2) unsigned DEFAULT '0' COMMENT '是否删除1是0否'
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `role`, `status`, `create_time`, `update_time`, `delete_time`, `login_time`, `login_count`, `is_delete`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin123@test.cn', 1, 1, 1501493848, 1517231070, NULL, 1517231070, 33, 1),
(3, 'peter', 'e10adc3949ba59abbe56e057f20f883e', 'peter@test.cn', 0, 1, 1501582576, 1517230688, NULL, 1517192575, 16, 1),
(6, 'jack', '14e1b600b1fd579f47433b88e8d85291', 'jack123@test.cn', 0, 1, 1502064844, 1517229504, NULL, 1502082773, 1, 1),
(7, 'zhu', '14e1b600b1fd579f47433b88e8d85291', 'zhu@test.cn', 0, 1, NULL, 1517229516, NULL, NULL, 0, 1),
(8, 'php', '14e1b600b1fd579f47433b88e8d85291', 'php@test.cn', 0, 1, 1502091384, 1517229530, NULL, NULL, 0, 1),
(9, 'html', '14e1b600b1fd579f47433b88e8d85291', 'html@test.cn', 0, 1, 1502091961, 1517229541, NULL, NULL, 0, 1),
(10, 'css', '14e1b600b1fd579f47433b88e8d85291', 'css@test.cn', 0, 1, 1502092407, 1517229563, NULL, NULL, 0, 1),
(11, 'yangtao', '14e1b600b1fd579f47433b88e8d85291', 'yangtao@test.cn', 0, 1, 1502171809, 1517229592, NULL, NULL, 0, 1),
(12, 'junjie', 'c56d0e9a7ccec67b4ea131655038d604', 'junjie@test.com', 0, 1, 1517212495, 1517229632, 1517229632, NULL, 0, 1),
(13, 'junjie123', 'c56d0e9a7ccec67b4ea131655038d604', 'junjie@test.com', 1, 1, 1517214769, 1517229634, 1517229634, NULL, 0, 1),
(14, 'junjie', 'e10adc3949ba59abbe56e057f20f883e', '56@562.com', 1, 1, 1517230623, 1517230708, NULL, NULL, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '班级主键',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',AUTO_INCREMENT=15;