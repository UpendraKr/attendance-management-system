-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2018 at 06:07 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `project2`
--
CREATE DATABASE `project2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project2`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `lastname`, `email`, `id`, `password`, `gender`) VALUES
('a', 'a', 'a@a.in', 'a', 'a', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE `chemistry` (
  `id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `attend` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry`
--

INSERT INTO `chemistry` (`id`, `firstname`, `attend`, `date`) VALUES
('12', 'sa', 'present', '30.03.2018'),
('aa', 'aa', 'present', '30.03.2018'),
('m', 'm', 'absent', '30.03.2018'),
('s', 's', 'absent', '30.03.2018'),
('v', 'v', 'absent', '30.03.2018'),
('aa', 'aa', 'absent', '30.03.2018'),
('12', 'sa', 'absent', '30.03.2018'),
('m', 'm', 'absent', '30.03.2018'),
('s', 's', 'present', '30.03.2018'),
('v', 'v', 'present', '30.03.2018'),
('s', 's', 'present', '30.03.2018');

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `attend` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`id`, `firstname`, `attend`, `date`) VALUES
('12', 'sa', 'present', '29.03.2018'),
('m', 'm', 'present', '29.03.2018'),
('m', 'm', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('m', 'm', 'present', '29.03.2018'),
('m', 'm', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('aa', 'aa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('m', 'm', 'present', '29.03.2018'),
('12', 'sa', 'absent', '30.03.2018'),
('aa', 'aa', 'absent', '30.03.2018'),
('m', 'm', 'absent', '30.03.2018'),
('s', 's', 'absent', '30.03.2018'),
('v', 'v', 'absent', '30.03.2018'),
('s', 's', 'present', '30.03.2018');

-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE `physics` (
  `id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `attend` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physics`
--

INSERT INTO `physics` (`id`, `firstname`, `attend`, `date`) VALUES
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('12', 'sa', 'present', '29.03.2018'),
('aa', 'aa', 'absent', '29.03.2018'),
('12', 'sa', 'absent', '30.03.2018'),
('aa', 'aa', 'absent', '30.03.2018'),
('m', 'm', 'absent', '30.03.2018'),
('v', 'v', 'absent', '30.03.2018'),
('s', 's', 'present', '30.03.2018'),
('v', 'v', 'present', '30.03.2018'),
('m', 'm', 'present', '30.03.2018'),
('aa', 'aa', 'present', '30.03.2018'),
('15244', 'upendra', 'present', '30.03.2018'),
('12', 'sa', 'present', '30.03.2018');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`firstname`, `lastname`, `email`, `id`, `password`, `gender`) VALUES
('sa', 'hjdj', 'hgs@kd.im', '12', 'kgk', 'male'),
('upendra', 'kr', 'upendra@gamil.com', '15244', '123', 'male'),
('aa', 'bb', 'aa@aa.in', 'aa', 'aa', 'female'),
('m', 'm', 'm@m.in', 'm', 'j', 'female'),
('s', 's', 's@s.in', 's', 's', 'male'),
('v', 'vcczxff', 'v@v.in', 'v', 'v', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`firstname`, `lastname`, `email`, `id`, `password`, `type`, `gender`) VALUES
('w', 'w', 'w@w.in', 'w', 'w', 'student', 'female'),
('kjh', 'sdg', 'z@z.in', 'as', 'aa', 'teacher', 'male'),
('sf', 'fa', 'fds@s.in', 'zx', 'sd', 'teacher', 'male'),
('vd', 'd', 'f@g.in', 'f', 'f', 'teacher', 'female'),
('z', 'zvz', 'z@z.in', '119574', 'w12', 'student', 'female'),
('asd', 'sda', 'a@l.in', 'kk', 'dddd', 'student', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`firstname`, `lastname`, `email`, `id`, `password`, `gender`) VALUES
('2', '2', '2@2.in', '2', '2', 'male'),
('t', 't', 't@t.in', 't', 't', 'male');
