-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 10:24 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitytimetable`
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
  `department` varchar(10) NOT NULL,
  `credits` decimal(3,1) NOT NULL,
  `faculty_id` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `department`, `credits`, `faculty_id`) VALUES
('1', 'data structures', 'cse', '3.0', '2'),
('2', 'logic design', 'ec', '3.0', '3'),
('3', 'dynamics', 'mech', '3.0', '1'),
('4', 'genetics', 'bio', '3.0', '4'),
('5', 'compiler design', 'cse', '3.0', '2');

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
('1', '4'),
('2', '3'),
('3', '5'),
('4', '1'),
('5', '1'),
('6', '1'),
('7', '5'),
('8', '2'),
('9', '3');

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
  `name` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`) VALUES
('1', 'kush'),
('2', 'Arch'),
('3', 'Path'),
('5', 'Nish'),
('6', 'Rish'),
('7', 'Jazz'),
('8', 'Monica'),
('9', 'Zora'),
('4', 'Mandeep'),
('10', 'Karav');

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
