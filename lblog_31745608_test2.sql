-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql107.liveblog365.com
-- Generation Time: Jul 14, 2022 at 02:40 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lblog_31745608_test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_id`
--

CREATE TABLE `class_id` (
  `cid` varchar(5) NOT NULL,
  `class` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_id`
--

INSERT INTO `class_id` (`cid`, `class`) VALUES
('R202A', 'IT-A'),
('R202B', 'IT-B');

-- --------------------------------------------------------

--
-- Table structure for table `class_time_Table`
--

CREATE TABLE `class_time_Table` (
  `cid` varchar(5) NOT NULL,
  `day` varchar(10) NOT NULL,
  `one` varchar(20) NOT NULL,
  `two` varchar(20) NOT NULL,
  `three` varchar(20) NOT NULL,
  `four` varchar(20) NOT NULL,
  `five` varchar(20) NOT NULL,
  `six` varchar(20) NOT NULL,
  `seven` varchar(20) NOT NULL,
  `eight` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_time_Table`
--

INSERT INTO `class_time_Table` (`cid`, `day`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`) VALUES
('R202A', 'MONDAY', 'T0001', 'T0001', 'T0001', 'T0001', 'T0003', 'T0003', 'T0003', 'T0003'),
('R202A', 'TUESDAY', 'T0002', 'T0002', 'T0002', 'T0002', 'T0004', 'T0004', 'T0004', 'T0004'),
('R202A', 'WEDNESDAY', 'T0001', 'T0001', 'T0005', 'T0005', 'T0007', 'T0007', 'T0010', 'T0010'),
('R202A', 'THRUSDAY', 'T0001', 'T0001', 'T0006', 'T0006', 'T0002', 'T0002', 'T0008', 'T0008'),
('R202A', 'FRIDAY', 'T0006', 'T0006', 'T0002', 'T0002', 'T0007', 'T0007', 'T0009', '0'),
('R202A', 'SATURDAY', '0', '0', '0', '0', 'T0010', 'T0010', 'T0010', 'T0010'),
('R202B', 'MONDAY', 'T0007', 'T0007', 'T0006', 'T0006', 'T0004', 'T0004', 'T0004', 'T0004'),
('R202B', 'TUESDAY', 'T0001', 'T0001', 'T0001', 'T0001', 'T0003', 'T0003', 'T0003', 'T0003'),
('R202B', 'WEDNESDAY', 'T0002', 'T0002', 'T0002', 'T0002', 'T0006', 'T0006', 'T0010', 'T0010'),
('R202B', 'THRUSDAY', 'T0002', 'T0002', 'T0011', 'T0011', 'T0007', 'T0007', 'T0009', '0'),
('R202B', 'FRIDAY', 'T0001', 'T0001', 'T0011', 'T0011', '0', '0', '0', '0'),
('R202B', 'SATURDAY', 'T0001', 'T0001', 'T0002', 'T0002', 'T0010', 'T0010', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `exam_data`
--

CREATE TABLE `exam_data` (
  `e_name` varchar(50) NOT NULL,
  `etype` int(1) NOT NULL,
  `time` int(1) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_data`
--

INSERT INTO `exam_data` (`e_name`, `etype`, `time`, `from_date`, `to_date`) VALUES
('testloki', 0, 0, '2022-07-12', '2022-07-16'),
('TEST01', 0, 0, '2022-05-28', '2022-06-09'),
('EXAM@TEST', 1, 0, '2022-06-05', '2022-06-27'),
('REGR19', 0, 0, '2022-07-06', '2022-07-20'),
('TestPrem', 0, 0, '2222-10-03', '0001-01-10'),
('IYear-IIMID', 0, 0, '2022-07-18', '2022-07-25'),
('TestPrem1', 0, 0, '2022-09-10', '2022-09-17'),
('TESTNIKHIL', 1, 1, '2022-07-14', '2022-07-28'),
('4/4 IT SEM 2', 1, 0, '2020-07-15', '2020-07-17'),
('TESTMID', 0, 1, '2022-07-20', '2022-07-27'),
('TESTMID1', 1, 0, '2022-07-20', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `exam_staff`
--

CREATE TABLE `exam_staff` (
  `examid` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `tid` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_staff`
--

INSERT INTO `exam_staff` (`examid`, `date`, `tid`) VALUES
('IYear-IIMID', '18-07-22 ', ''),
('IYear-IIMID', '20-07-22 ', 'T0001,T0002,'),
('IYear-IIMID', '18-07-22 ', 'T0002,'),
('TEST01', '28-05-22 ', 'T0001,T0002,'),
('TEST01', '30-05-22 ', 'T0002,'),
('TEST01', '31-05-22 ', ''),
('TEST01', '01-06-22 ', 'T0002,'),
('TEST01', '02-06-22 ', ''),
('TESTNIKHIL', '10-09-22 ', 'T0001,'),
('TESTNIKHIL', '12-09-22 ', 'T0002,'),
('REGR19', '06-07-22 ', 'T0001,T0002,'),
('IYear-IIMID', '18-07-22 ', 'T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,'),
('TESTMID1', '20-07-22 ', 'T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID1', '20-07-22 ', 'T0001,T0002,'),
('TESTMID', '23-07-22 ', 'T0001,T0002,'),
('TESTMID', '23-07-22 ', 'T0001,T0002,'),
('TESTMID', '23-07-22 ', 'T0001,T0002,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('TESTMID', '23-07-22 ', 'RSR,'),
('IYear-IIMID', '19-07-22 ', ''),
('IYear-IIMID', '19-07-22 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `invigilation_staff`
--

CREATE TABLE `invigilation_staff` (
  `tid` varchar(15) NOT NULL,
  `ucount` int(5) NOT NULL,
  `mcount` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invigilation_staff`
--

INSERT INTO `invigilation_staff` (`tid`, `ucount`, `mcount`) VALUES
('T0001', 1, 1),
('T0002', 1, 0),
('RSR', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `tid` varchar(10) NOT NULL,
  `tname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`tid`, `tname`) VALUES
('T0001', 'Naresh'),
('T0002', 'Lokesh'),
('manoj', 'T001'),
('T0004', 'Satwik varma'),
('RSR', 'Raghu '),
('mgm', 'manoj');

-- --------------------------------------------------------

--
-- Table structure for table `staff_class`
--

CREATE TABLE `staff_class` (
  `tid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_class`
--

INSERT INTO `staff_class` (`tid`, `cid`) VALUES
('T0001', 'R202A'),
('T0002', 'R202B');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `tid` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `tid`) VALUES
('S001', 'WEB TECH', ''),
('S002', 'Android', ''),
('S003', 'DATA STRUCTURES', 'T0001'),
('S004', 'PYTHON', 'T0002');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `day` varchar(10) NOT NULL,
  `tid` varchar(5) NOT NULL,
  `one` varchar(50) NOT NULL,
  `two` varchar(50) NOT NULL,
  `three` varchar(50) NOT NULL,
  `four` varchar(50) NOT NULL,
  `five` varchar(50) NOT NULL,
  `six` varchar(50) NOT NULL,
  `seven` varchar(50) NOT NULL,
  `eight` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`day`, `tid`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`) VALUES
('MONDAY', 'T0001', 'JAVA Lab-IT:A(2/4)', 'JAVA Lab-IT:A(2/4)', 'JAVA Lab-IT:A(2/4)', 'JAVA Lab-IT:A(2/4)', '0', '0', '0', '0'),
('TUESDAY', 'T0001', 'JAVA Lab-IT:B(2/4)', 'JAVA Lab-IT:B(2/4)', 'JAVA Lab-IT:B(2/4)', 'JAVA Lab-IT:B(2/4)', '0', '0', '0', '0'),
('WEDNESDAY', 'T0001', '0', '0', '0', '0', '1', '1', '0', '0'),
('THRUSDAY', 'T0001', 'JAVA-IT:A(2/4)', 'JAVA-IT:A(2/4)', '0', '0', '0', '0', '1', '1'),
('FRIDAY', 'T0001', 'JAVA-IT:B(2/4)', 'JAVA-IT:B(2/4)', '0', '0', '1', '1', '0', '0'),
('SATURDAY', 'T0001', '0', '0', '0', '0', '0', '0', '0', '0'),
('MONDAY', 'T0002', '0', '0', '0', '0', '1', '1', '0', '0'),
('TUESDAY', 'T0002', '1', '1', '1', '1', '0', '0', '0', '0'),
('WEDNESDAY', 'T0002', '0', '0', '0', '0', '1', '1', '1', '1'),
('THRUSDAY', 'T0002', '0', '0', '1', '1', '1', '1', '0', '0'),
('FRIDAY', 'T0002', '0', '0', '1', '1', '1', '1', '0', '0'),
('SATURDAY', 'T0002', '0', '0', '0', '0', '0', '0', '0', '0'),
('SATURDAY', '', '', '', '', 'gigu', 'ukhk', 'iku', 'ugk', 'ugu'),
('FRIDAY', '', '', '', '', '', '', '', 'uuhk', ''),
('THRUSDAY', '', 'lh', '', '', '', '', '', 'hgjk', 'gjh'),
('WEDNESDAY', '', '', '', '', 'kglselae ', 'q ', '', '', 'uiou'),
('TUESDAY', '', 'kdfjlsk', 'slfkjdl', '', '', 'jrgirlh', 'jhegklsjs', 'ttkjdl', ''),
('MONDAY', '', 'dbms', 'python', 'java', 'wt', 'ippsc', 'shskj', '', ''),
('SATURDAY', 'RSR', 'CC', 'CC', '0', '0', '0', '0', '0', '0'),
('FRIDAY', 'RSR', 'CC', 'CC', 'MOB', 'MPB', 'DMLAB', 'DMLAB', 'DMLAB', 'DMLAB'),
('THRUSDAY', 'RSR', 'CC', 'CC', '0', '0', '0', '0', '0', '0'),
('WEDNESDAY', 'RSR', 'CC', 'CC', 'MOB', 'MOB', '0', '0', '0', '0'),
('TUESDAY', 'RSR', 'CC', 'CC', 'PRJ', 'PRJ', '0', '0', '0', '0'),
('MONDAY', 'RSR', 'CC', 'CC', '0', '0', '0', '0', '0', '0'),
('SATURDAY', 'T0004', '', '', 'gg', '', '', '', '', ''),
('FRIDAY', 'T0004', 'AAA', 'vfff', 'n', '', '', '', '', ''),
('THRUSDAY', 'T0004', '', '', '', '', '', '', '', ''),
('WEDNESDAY', 'T0004', '', '', 'n', 'ff', '', '', '', ''),
('TUESDAY', 'T0004', '', 'g', '', 'ff', '', '', '', ''),
('MONDAY', 'T0004', 'DSA', '', '', '', '', '', '', ''),
('MONDAY', 'mgm', 'PHP(3/4):IT-A', '', '', '', '', 'dd', 'sd', 'dd'),
('TUESDAY', 'mgm', '', '', '', '', '', '', '', ''),
('WEDNESDAY', 'mgm', 'ss', 'ss', 'ss', 'ss', 's', 'ssss', '', ''),
('THRUSDAY', 'mgm', '', '', '', '', '', 'sss', 'sss', 's'),
('FRIDAY', 'mgm', 'ss', 's', 's', 's', 's', 's', '', 'ss'),
('SATURDAY', 'mgm', 's', 's', '', 's', 's', 'ss', 'ss', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_id`
--
ALTER TABLE `class_id`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `class_time_Table`
--
ALTER TABLE `class_time_Table`
  ADD PRIMARY KEY (`cid`,`day`);

--
-- Indexes for table `exam_data`
--
ALTER TABLE `exam_data`
  ADD PRIMARY KEY (`e_name`);

--
-- Indexes for table `invigilation_staff`
--
ALTER TABLE `invigilation_staff`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`day`,`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
