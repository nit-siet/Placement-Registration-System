-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2013 at 12:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticetable`
--

CREATE TABLE IF NOT EXISTS `noticetable` (
  `notice_number` int(100) NOT NULL AUTO_INCREMENT,
  `notice_subject` text NOT NULL,
  `notices` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`notice_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `noticetable`
--

INSERT INTO `noticetable` (`notice_number`, `notice_subject`, `notices`, `date`, `time`) VALUES
(56, 'next campus is on 30 th this month ', 'Interested students are requested to register there name for the next campus coming next week.\r\n ', '2013-05-14', '10:14:08'),
(57, 'PPT class commencement.', 'PPT classes will commence in the next month interested students should deposit fee in the account section. ', '2013-05-14', '10:34:07'),
(58, 'seminar on entreprenureship ', 'hello !! students some renowned entrepreneurs giving seminar over "entrepreneurial planning"  ', '2013-05-14', '10:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `prsadmindb`
--

CREATE TABLE IF NOT EXISTS `prsadmindb` (
  `admin_id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prsadmindb`
--

INSERT INTO `prsadmindb` (`admin_id`, `username`, `password`, `email`) VALUES
(1234567890, 'nitesh', 'niteshkumar', 'nit.siet@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prsrecruiter`
--

CREATE TABLE IF NOT EXISTS `prsrecruiter` (
  `recruiter_id` int(11) NOT NULL AUTO_INCREMENT,
  `organisation_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `org_detail` text NOT NULL,
  `approve_status` int(5) NOT NULL DEFAULT '0',
  `request_time` time NOT NULL,
  `request_date` date NOT NULL,
  PRIMARY KEY (`recruiter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `prsrecruiter`
--

INSERT INTO `prsrecruiter` (`recruiter_id`, `organisation_name`, `email`, `username`, `password`, `org_detail`, `approve_status`, `request_time`, `request_date`) VALUES
(11, 'wipro limited ', 'wiprotechnologies@wipro.com', 'aniket', 'aniketkumar', 'Hello !! sir I am Aniket kumar HR WIPRO TECHNOLOGIES  \r\ncontact no 8976548345\r\nfor more details www.wipro.com', 1, '00:00:00', '0000-00-00'),
(13, 'abc technologies ', 'abc.xyz@gmail.com', 'satyajit', 'satyajit', 'Hello i m from abc technologies.\r\ncontact 8093XXXXXX\r\n \r\n', 1, '00:00:00', '0000-00-00'),
(14, 'pqrs', 'nit.kumar123@gmail.com', '9OSJR', 'oxkwf1va', 'contact number -**********\r\n\r\n', 1, '00:00:00', '0000-00-00'),
(15, 'ab tech ', 'abtech ', 'ND0DC', 'kJBweGLb', 'organisation Head Office,Branch Name', 0, '00:00:00', '0000-00-00'),
(33, '', '', 'KAX80', 'IjOxeFZT', 'organisation Head Office,Branch Name', 0, '00:00:00', '0000-00-00'),
(34, 'artec technoligies', 'artech@gmail.com', 'HJJRC', '7dzf7lLn', 'organisation Head Office,Branch Name', 0, '00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `prsstudentdb`
--

CREATE TABLE IF NOT EXISTS `prsstudentdb` (
  `name` char(25) DEFAULT NULL,
  `regnumber` int(15) NOT NULL,
  `roll` varchar(8) DEFAULT NULL,
  `branch` varchar(5) DEFAULT NULL,
  `semester` int(4) DEFAULT NULL,
  `reg_status` int(2) DEFAULT '0',
  `username` varchar(11) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `presentaddress` varchar(50) DEFAULT NULL,
  `permanentaddress` varchar(50) DEFAULT NULL,
  `pptstud` char(5) DEFAULT NULL,
  `yrgap` int(5) DEFAULT NULL,
  `marks10` float DEFAULT NULL,
  `marks12` float DEFAULT NULL,
  `join_date` int(11) DEFAULT NULL,
  `marks_1_sem` varchar(5) DEFAULT '',
  `marks_2_sem` varchar(5) DEFAULT '',
  `marks_3_sem` varchar(5) DEFAULT '',
  `marks_4_sem` varchar(5) DEFAULT '',
  `marks_5_sem` varchar(5) DEFAULT '',
  `marks_6_sem` varchar(5) DEFAULT '',
  `marks_7_sem` varchar(5) DEFAULT '',
  `marks_8_sem` varchar(5) DEFAULT '',
  `cgpa` varchar(5) DEFAULT NULL,
  `mob_no` varchar(30) NOT NULL,
  `hom_no` varchar(25) NOT NULL,
  `alt_no` varchar(30) NOT NULL,
  PRIMARY KEY (`regnumber`),
  UNIQUE KEY `regnumber` (`regnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prsstudentdb`
--

INSERT INTO `prsstudentdb` (`name`, `regnumber`, `roll`, `branch`, `semester`, `reg_status`, `username`, `password`, `email`, `presentaddress`, `permanentaddress`, `pptstud`, `yrgap`, `marks10`, `marks12`, `join_date`, `marks_1_sem`, `marks_2_sem`, `marks_3_sem`, `marks_4_sem`, `marks_5_sem`, `marks_6_sem`, `marks_7_sem`, `marks_8_sem`, `cgpa`, `mob_no`, `hom_no`, `alt_no`) VALUES
('NITESH KUMAR', 901230054, 'CS0910', 'cse', 8, 1, 'nitesh', 'niteshkumar', 'nit.siet@gmail.com', 'GDSHAIOQNS', 'NJNAJKENDAK', 'yes', 5, 100, 100, 2009, '8.9', '8', '8.9', '6.7', '9', '9', '6', '5', '7.687', '8093799117', '8999987898', '8976545433'),
('aniket kumar', 901230055, 'CS0914', 'CSE', 8, 1, 'V9NLQ', '9MAy0xVx', 'nit.siet@gmail.com', 'GGGHHGGHGHJH', 'JGHGJGFJJHGJJGGJFJG JHBHJB', 'YES', 1, 78, 67, 2009, '8', '8', '7', '6', '6', '6', '7', '0', '6.857', '77898877665', '77898876', '1234567890'),
('vineet kumar', 901230056, 'cs-09-67', 'CSE', 1, 1, 'T2YET', 'Ovhca6F0', 'nit.siet@gmail.com', 'ghgfhgh', 'jghjghjk', 'yes', 3, 78, 89, 2009, '7', '8', '7', '6', '8', '0', '0', '0', '7.2', '45345354', '778787878787', ''),
('aniket kumar', 901230057, 'CS-09-23', 'CSE', 4, 1, 'I07RF', 'xeFZTjIu', 'viv@gmail.com', 'HHG77HNJNFNRJ', 'JNFRIE85JF85', 'NO', 1, 76, 87, NULL, '9', '8', '0', '0', '0', '0', '0', '0', '8.5', '8093799117', '9090989876', ''),
('ANIL KUMAR', 901230058, 'CS-09-70', 'CSE', 4, 1, 'RXYFO', 'jDBTSsbK', 'nili@gmail.com', 'SDGHASGDVJFH', 'NJCJSDNACIWUBN', 'YES', 2, 78.09, 89.09, NULL, '9', '6', '0', '0', '0', '0', '0', '0', '7.5', '8093799117', '0987777777', '9087654321'),
('BANDANA KUMARI', 901230059, 'CS-09-23', 'IT', 5, 1, '0ADET', 'vhqnFlfn', 'masd@gmail.com', 'GABSH', 'BAI BXCAI ', 'NO', 2, 56, 87, NULL, '7', '8', '8.9', '9', '8', '8', '8', '0', '8.128', '8093799117', '8765432109', '6784563445'),
('vivek kumar', 901230060, 'cs0912  ', 'CSE', 5, 1, 'Q003L', 'Vsr3JbP8', 'nit.siet@gmail.com', 'jhjdkak5453', 'hjkahdu', 'yes', 1, 78, 78, NULL, '8', '8', '8', '8', '8', '0', '0', '0', '8', '8093788655', '8976543218', '6787654327'),
(NULL, 901230061, NULL, NULL, NULL, 0, 'khushboo', 'chirasmita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230062, NULL, NULL, NULL, 0, '9BOD2', 'MMJGrrPw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230063, NULL, NULL, NULL, 0, '4JBZZ', '94qChjUM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230064, NULL, NULL, NULL, 0, 'SPK5I', 'DUBs8fd5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230065, NULL, NULL, NULL, 0, '3CQN4', 'CEnFNPQo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230066, NULL, NULL, NULL, 0, 'JGHKD', 'mICRlMSq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230067, NULL, NULL, NULL, 0, 'Z8UY1', 'D9FgIy7B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230068, NULL, NULL, NULL, 0, '02AZ2', 'CYNhs8Fp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230069, NULL, NULL, NULL, 0, 'T4W5A', 'GFmuTFZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230070, NULL, NULL, NULL, 0, '555VL', 'Vb9SmjEl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230071, NULL, NULL, NULL, 0, 'RJXE9', 'mZrXSt9U', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230072, NULL, NULL, NULL, 0, 'P7P73', '9x4kP7qL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230073, NULL, NULL, NULL, 0, '8RAQO', 'MSdmxvgs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230074, NULL, NULL, NULL, 0, 'R633D', 'j7DYaLlD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230075, NULL, NULL, NULL, 0, 'Z205S', 'zRshzCkn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230076, NULL, NULL, NULL, 0, 'HUL7E', 'q55LpyMG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230077, NULL, NULL, NULL, 0, 'M1AM6', '1vatIKdD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230078, NULL, NULL, NULL, 0, '5CWO4', 'nJoXu5KQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230079, NULL, NULL, NULL, 0, 'ZBJTA', 'PLCQjuPY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', ''),
(NULL, 901230080, NULL, NULL, NULL, 0, 'E6VDC', 'THHJ3ywn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, '', '', '');
