-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 01:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugc`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `clg_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clg_id`, `name`) VALUES
('cl1', 'SIT'),
('cl2', 'MIT'),
('cl3', 'MSRIT'),
('cl4', 'BIT'),
('cl5', 'ZIT');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `credits` decimal(3,1) NOT NULL,
  `faculty_id` varchar(10) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `credits`, `faculty_id`, `type`) VALUES
('1', 'abc', '4.0', '123', 1),
('2', 'bcd', '4.0', '234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `usn` varchar(15) NOT NULL,
  `course_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`usn`, `course_id`) VALUES
('', '1'),
('', '2'),
('1', '1'),
('1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`) VALUES
('1', 'John'),
('2', 'Adam'),
('3', 'Simran'),
('4', 'Mary');

-- --------------------------------------------------------

--
-- Table structure for table `offer_courses`
--

CREATE TABLE `offer_courses` (
  `clg_id` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_courses`
--

INSERT INTO `offer_courses` (`clg_id`, `course_id`) VALUES
('1', '1'),
('1', '5'),
('2', '2'),
('3', '3'),
('4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(50) DEFAULT '12345'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `password`) VALUES
('1', 'kush', '12345'),
('2', 'Arch', '12345'),
('3', 'Path', '12345'),
('5', 'Nish', '12345'),
('6', 'Rish', '12345'),
('7', 'Jazz', '12345'),
('8', 'Monica', '12345'),
('9', 'Zora', '12345'),
('4', 'Mandeep', '12345'),
('10', 'Karav', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`usn`,`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `offer_courses`
--
ALTER TABLE `offer_courses`
  ADD PRIMARY KEY (`clg_id`,`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
