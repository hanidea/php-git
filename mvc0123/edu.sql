-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 23, 2018 at 07:45 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `edu`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;