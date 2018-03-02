-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2015 at 01:53 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocm`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `cid` int(10) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `device` varchar(52) NOT NULL,
  `manufacturer` varchar(55) NOT NULL,
  `model` varchar(55) NOT NULL,
  `warranty` varchar(10) NOT NULL,
  `complaint` varchar(555) NOT NULL,
  `technician` varchar(55) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `fname`, `lname`, `email`, `device`, `manufacturer`, `model`, `warranty`, `complaint`, `technician`, `status`) VALUES
(1, 'sdvsdv', 'asdvs', 'gdsfgds@afbhsd.com', 'mobile', 'sdvDV', 'sdfsdgf', 'yes', 'sdgsgfdhgsdg', NULL, NULL),
(2, 'esagdehg', 'as', 'afsdh', 'mobile', 'sgag', 'sgafd', 'no', 'asdhgdah', NULL, NULL),
(3, 'ajinkya', 'gutti', 'ajinkya@mymail.com', 'tv', 'lg', 'lg lf540a', 'no', 'display flicker', 'C', NULL),
(4, 'ajinkya', 'gutti', 'ajinkya@mymail.com', 'tv', 'lg', 'lg lf540a', 'no', 'display flicker', 'B', NULL),
(8, 'harish', 'kandan', 'harish@mymail.com', 'home', 'whirpool', 'washing machine222', 'yes', 'not working', 'A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `password`, `sex`, `dob`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'm', '01-01-01'),
(2, 'AjinkyaGutti', 'ajinkya@mymail.com', '12345', 'Male', '2015-10-16'),
(3, 'DevendraKamalapurkar', 'devendra@mymail.com', '12345', 'Male', '2015-10-16'),
(4, 'Harishkandan', 'harish@mymail.com', '12345', 'Male', '2015-10-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
