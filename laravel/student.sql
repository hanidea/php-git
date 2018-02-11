-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 11, 2018 at 10:17 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

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
(1, 'icool4', 21, 30, 1518331691, 1518331691),
(18, 'james', 20, 20, 1518334550, 1518334550),
(17, 'icool3', 40, 20, 1518331691, 1518331691),
(16, 'icool2', 40, 30, 1518331691, 1518331691),
(15, 'icool7', 20, 20, 1518331691, 1518331691),
(19, 'joe', 40, 30, 1518335080, 1518335080),
(20, 'jenny', 40, 20, 1518335321, 1518335321),
(30, 'hanidea', 40, 30, 1518354256, 1518354256),
(23, 'jey', 40, 20, 1518337012, 1518337012),
(24, 'jun', 40, 20, 1518337036, 1518337036),
(25, 'david', 40, 30, 1518338356, 1518338356),
(28, 'jessie', 40, 30, 1518353872, 1518353872);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
