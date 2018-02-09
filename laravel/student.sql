-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 09, 2018 at 09:44 AM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` tinyint(3) DEFAULT NULL,
  `sex` tinyint(3) DEFAULT NULL,
  `created_at` int(30) DEFAULT NULL,
  `updated_at` int(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `sex`, `created_at`, `updated_at`) VALUES
(1, 'icool4', 22, NULL, NULL, NULL),
(2, 'icool3', 23, NULL, NULL, NULL),
(3, 'icool4', 22, NULL, NULL, NULL),
(6, 'icool3', 23, NULL, NULL, NULL),
(7, 'icool4', 22, NULL, NULL, NULL),
(8, 'icool3', 23, NULL, NULL, NULL),
(9, 'james', 18, NULL, 20180209, 20180209),
(10, 'david', 19, NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
