-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 08:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_result`
--

CREATE TABLE `add_result` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `roll` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mcq` int(11) NOT NULL,
  `descriptive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_result`
--

INSERT INTO `add_result` (`id`, `class`, `section`, `cat_name`, `subject`, `roll`, `name`, `mcq`, `descriptive`) VALUES
(80, 'THREE', 'A', 'Half Yearly', 'English 2nd', 3, 'Sarmin Akter', 20, 89),
(81, 'THREE', 'A', 'Half Yearly', 'English 2nd', 4, 'Dina Akter', 11, 85),
(82, 'FOUR', 'A', 'Monthly', 'English 2nd', 1, 'Hapsha Hapsha', 40, 50),
(83, 'THREE', 'A', 'Half Yearly', 'English 1st', 1, 'Adnann Adnann', 45, 50),
(84, 'THREE', 'A', 'Half Yearly', 'Bangla 1st', 1, 'Adnann Adnann', 45, 50),
(85, 'THREE', 'A', 'Half Yearly', 'Bangla 1st', 3, 'Sarmin Akter', 45, 50),
(86, 'THREE', 'A', 'Half Yearly', 'Bangla 1st', 4, 'Dina Akter', 45, 50),
(87, 'THREE', 'A', 'Half Yearly', 'Bangla 1st', 1, 'Hapsha hossain', 45, 50);

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father` varchar(22) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `file1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `father`, `mother`, `class`, `file`, `file1`) VALUES
(1, 'sabuj', 'Ruhul', 'moslema', 'six', '', ''),
(2, 'hafiz', 'amin', 'salma', 'seven', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `class`, `student_name`, `roll_number`, `section`) VALUES
(10, 'Two', 'Hapsha', '34', 'A'),
(11, 'Two', 'Tanvir', '35', 'B'),
(12, 'Two', 'Surovi', '37', 'C'),
(13, 'Two', 'Suchona', '38', 'D'),
(16, 'Three', 'Hapsha', '1', 'A'),
(17, 'Four', 'Prattoy', '20', 'A'),
(18, 'Two', 'hapshaa', '34', 'A'),
(19, 'Two', 'hapshaa', '34', 'A'),
(20, 'One', 'hapshaa', '2', 'A'),
(21, 'One', 'hapshaa', '2', 'A'),
(22, 'One', 'hapshaa', '1', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `class`, `student_name`, `roll_number`, `section`, `attendance_status`, `date`) VALUES
(33, 'Two', 'Hapsha', '34', 'A', 'Absent', '2018-04-18'),
(34, 'Two', 'Tanvir', '35', 'B', 'Present', '2018-04-18'),
(35, 'Two', 'Surovi', '37', 'B', 'Present', '2018-04-18'),
(36, 'Two', 'Suchona', '38', 'D', 'Present', '2018-04-18'),
(37, 'Three', 'Hapsha', '1', 'A', 'Present', '2018-04-18'),
(38, 'Four', 'Prattoy', '20', 'A', 'Present', '2018-04-19'),
(45, 'Two', 'Suchona', '38', 'D', 'Present', '2018-04-20'),
(46, 'Two', 'Hapsha', '34', 'A', 'Present', '2018-06-05'),
(47, 'Two', 'Tanvir', '35', 'B', 'Absent', '2018-06-05'),
(48, 'Two', 'Surovi', '37', 'C', 'Present', '2018-06-05'),
(49, 'Two', 'Suchona', '38', 'D', 'Present', '2018-06-05'),
(50, 'Three', 'Hapsha', '1', 'A', 'Present', '2018-06-05'),
(51, 'Four', 'Prattoy', '20', 'A', 'Present', '2018-06-05'),
(52, 'Two', 'hapshaa', '34', 'A', 'Absent', '2018-06-05'),
(53, 'Two', 'hapshaa', '34', 'A', 'Present', '2018-06-05'),
(54, 'One', 'hapshaa', '2', 'A', 'Present', '2018-06-05'),
(55, '', '', '', '', 'Present', '2018-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'ONE'),
(2, 'TWO'),
(3, 'THREE'),
(4, 'FOUR');

-- --------------------------------------------------------

--
-- Table structure for table `class_name`
--

CREATE TABLE `class_name` (
  `id` int(11) NOT NULL,
  `name_class` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_name`
--

INSERT INTO `class_name` (`id`, `name_class`) VALUES
(1, 'One'),
(2, 'Two'),
(3, 'Three'),
(4, 'Four'),
(5, 'Five');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `body`, `category`, `file`) VALUES
(1, '', '', '', 'uploads/'),
(2, 'title', 'body', 'category', 'target_file'),
(3, 'title', 'body', 'category', 'target_file'),
(4, 'hjhgj', 'hghgk', 'notice', 'uploads/Penguins.jpg'),
(5, 'my data', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, alique', 'Home', 'uploads/Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `c_routine`
--

CREATE TABLE `c_routine` (
  `id` int(11) NOT NULL,
  `1st` varchar(150) NOT NULL,
  `2nd` varchar(150) NOT NULL,
  `3nd` varchar(150) NOT NULL,
  `4th` varchar(150) NOT NULL,
  `day` varchar(50) NOT NULL,
  `Class_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_routine`
--

INSERT INTO `c_routine` (`id`, `1st`, `2nd`, `3nd`, `4th`, `day`, `Class_name`) VALUES
(10, 'Mr.Sujaul Huqe-English', 'Tamanna Yesmin-Bangla', 'Masuma Akhter-Mathematics', 'Mr.Faruqe Islam-Islam', 'Saturday', 'Four'),
(11, 'Mr.Sujaul Huqe-English', 'Tamanna Yesmin-Bangla', 'Masuma Akhter-Mathematics', 'Jerin Khatun-Social Science', 'Sunday', 'Four'),
(12, 'Mr.Sujaul Huqe-English', 'Masuma Akhter-Mathematics', 'Tamanna Yesmin-Bangla', 'Mr.Faruqe Islam-Islam', 'Monday', 'Four'),
(14, 'Mr.Sujaul Huqe-English', 'Masuma Akhter-Mathematics', 'Tamanna Yesmin-Bangla', '', 'Sunday', 'One'),
(15, 'Masuma Akhter-Mathematics', 'Mr.Sujaul Huqe-English', 'Tamanna Yesmin-Bangla', '', 'Monday', 'One'),
(16, 'Masuma Akhter-Mathematics', 'Tamanna Yesmin-Bangla', 'Mr.Sujaul Huqe-English', 'Mr.Faruqe Islam-Islam', 'Saturday', 'Two'),
(17, 'Masuma Akhter-Mathematics', 'Mr.Sujaul Huqe-English', 'Tamanna Yesmin-Bangla', 'Jerin Khatun-Social Science', 'Sunday', 'Two'),
(18, 'Masuma Akhter-Mathematics', 'Mr.Sujaul Huqe-English', 'Tamanna Yesmin-Bangla', 'Jerin Khatun-Social Science', 'Monday', 'Two'),
(19, 'Masuma Akhter-Mathematics', 'Tamanna Yesmin-Bangla', 'Tamanna Yesmin-Bangla', 'Mr.Faruqe Islam-Islam', 'Saturday', 'Five'),
(20, 'Masuma Akhter-Mathematics', 'Mr.Sujaul Huqe-English', 'Tamanna Yesmin-Bangla', 'Mr.Faruqe Islam-Islam', 'Saturday', 'Three');

-- --------------------------------------------------------

--
-- Table structure for table `exam_cat`
--

CREATE TABLE `exam_cat` (
  `exam_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_cat`
--

INSERT INTO `exam_cat` (`exam_id`, `cat_name`) VALUES
(1, 'Test'),
(2, 'Monthly'),
(3, 'Half Yearly'),
(4, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `hoildays`
--

CREATE TABLE `hoildays` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dates` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoildays`
--

INSERT INTO `hoildays` (`id`, `title`, `dates`) VALUES
(1, 'February half term 2018', '19- 23 Feb'),
(2, 'Easter holidays 2018', '30 March-13 Apr'),
(3, 'May/Summer half term 2018', '28 May - 1 Jun'),
(5, 'Autumn half term 2018', 'Autumn half term 2018'),
(6, 'Christmas holiday 2018-2019', 'Christmas holiday 2018-2019'),
(7, '27june', 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `jahangir`
--

CREATE TABLE `jahangir` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` char(22) DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `round` date NOT NULL,
  `subject` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jahangir`
--

INSERT INTO `jahangir` (`id`, `name`, `email`, `phone`, `round`, `subject`) VALUES
(111, 'frist exam1', 'seven', 'Bangla ', '0000-00-00', '12:58:00'),
(112, 'frist exam ', 'Eight', 'Bangla ', '0000-00-00', '12:59:00'),
(113, 'fee', 'seven', 'rfedrfe', '2018-03-06', '12:59:00'),
(114, 'uyiyiyuy', 'Eight', 'fdfd', '2018-03-14', '14:58:00'),
(115, 'bgh', 'Eight', 'hghgh', '2018-03-06', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `passcode`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'sumi', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`id`, `email`, `password`) VALUES
(1, 'surovi@gmail.com', '123456'),
(2, 'jibonalamwpsi1992@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `m_subject`
--

CREATE TABLE `m_subject` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `teacher_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_subject`
--

INSERT INTO `m_subject` (`id`, `class`, `section`, `subject_name`, `teacher_name`) VALUES
(1, '1', '1', 'sub', '59'),
(2, '1', '1', 'sub', '1'),
(3, '1', '1', 'sub', '59'),
(4, '1', '1', 'Bangla 2nd', '59'),
(5, '2', 'A', 'Bangla 2nd', '1'),
(6, 'TWO', 'A', 'English 1st', '1'),
(7, 'TWO', 'C', 'Mathmetics', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `date`, `title`) VALUES
(1, 'Half yearly exam will be Start,next 20/10/18', '2018-06-07', 'sdfghfn'),
(2, 'Dummy text', '2018-06-07', ''),
(5, 'Class test started.', '2018-06-22', ''),
(6, 'df fgf fvgh', '2018-06-13', ''),
(8, 'sdfdf sgb', '2018-06-29', ''),
(9, 'sdfdf sgb', '2018-06-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `total_amount` double NOT NULL,
  `pay_amount` double NOT NULL,
  `month` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `class`, `name`, `roll`, `section`, `cat_name`, `date`, `total_amount`, `pay_amount`, `month`, `status`, `method`) VALUES
(13, 'Three', 'Rashedul   Karim', 3, 'B', 'Fee', '2018-04-20', 500, 500, 'January', 'Paid', 'Cash'),
(14, 'Four', 'hapsha  hossainn', 1, 'A', 'Exam Fee', '2018-04-20', 500, 500, 'January', 'Paid', 'Cash'),
(15, 'Three', 'hapsha  hossain', 2, 'B', 'Fee', '2018-04-20', 500, 500, 'January', 'Paid', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `payment_cat`
--

CREATE TABLE `payment_cat` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_cat`
--

INSERT INTO `payment_cat` (`id`, `cat_name`, `cat_type`) VALUES
(1, 'Fee', 'Credit'),
(5, 'Exam Fee', 'Credit'),
(6, 'Exam Fee', 'Credit'),
(8, 'ghhh', 'Debit'),
(9, 'Monthly fee', 'Credit'),
(10, 'Monthly fee', 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Serial` int(11) NOT NULL,
  `Exam` varchar(30) NOT NULL,
  `Class` varchar(25) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `fail` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Serial`, `Exam`, `Class`, `pass`, `fail`, `total`) VALUES
(1, 'ist exam', 'six', '20', '30', '50'),
(2, '2nd exam', 'six', '30', '30', '60'),
(3, '', 'Eight', '20', '30', '50'),
(4, 'frist teminal  ', 'Nine', '20  ', '40', '60');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `Serial` int(11) NOT NULL,
  `Exam` varchar(30) NOT NULL,
  `Class` varchar(25) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`Serial`, `Exam`, `Class`, `Time`, `Date`) VALUES
(1, 'Ist exam', 'six', '05:20:00', '2018-01-16'),
(2, '2nd exam', 'seven', '08:13:00', '2018-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `salarysheet`
--

CREATE TABLE `salarysheet` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `salary` varchar(25) NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salarysheet`
--

INSERT INTO `salarysheet` (`id`, `firstname`, `lastname`, `position`, `salary`, `action`) VALUES
(1, 'md akmal', 'hossien', 'accountcer', '50000', 'yes'),
(2, 'md Asraf', 'alam', 'Teacer', '10000', 'no'),
(3, 'Md.jahangir', 'Alam', 'Assitance Teacher', '20,000', ''),
(4, 'Md.jahangir', 'Alam', 'Teacher', '20000', ''),
(5, 'Md.jahangir', 'Alam', 'Teacher', '20000', ''),
(6, 'Md.jahangir', 'Alam', 'Teacher', '20000', 'no'),
(7, 'Md.jahangir', 'Alam', 'Teacher', '20000', 'yes'),
(8, 'Md ysuf', 'ali', 'Teacher', '15,000', 'yes'),
(9, 'Md saiful', 'islam', 'Teacher', '15,000', 'yes'),
(10, 'Md.jahangir', 'Alam', 'Teacher', '20,000', 'yes'),
(11, 'sumi', 'hossain', 'Teacher', '20000', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(25) NOT NULL,
  `Bangla` varchar(25) NOT NULL,
  `english` varchar(30) NOT NULL,
  `math` varchar(25) NOT NULL,
  `islam` varchar(25) NOT NULL,
  `science` varchar(25) NOT NULL,
  `Agriculture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `roll`, `Bangla`, `english`, `math`, `islam`, `science`, `Agriculture`) VALUES
(1, 'Md sabuj Ali', '1', '50', '60', '46', '52', '60', '70'),
(2, 'md selim shak', '2', '50', '70', '75', '80', '70', '56'),
(3, 'Md sha Alam', '3', '50', '56', '70', '75', '60', '42'),
(4, 'jamal', '4', '50', '60', '70', '50', '65', '75'),
(5, 'hapshaa', '1', '70', '80', '90', '90', '90', '90');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `available` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `available`, `file`) VALUES
(13, 'Alam', '8', 'eight', 'upload/imahges.jpg'),
(14, 'Alam fahim', '3', 'Ten', 'upload/cept-32644658.jpg'),
(15, 'Hasina', '7', 'Ten', 'upload/i5mages.jpg'),
(16, 'Habiba', '9', 'Nine', 'upload/index.jpg'),
(17, 'lipi', '6', 'Nine', 'upload/hqdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `class` varchar(25) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`id`, `name`, `roll`, `class`, `file`) VALUES
(3, 'sabina', '5', 'seven', 'upload/ihmages.jpg'),
(4, 'Alif', '2', 'Eight', 'upload/cept-32644658.jpg'),
(5, 'Kobir', '3', 'seven', 'upload/imajes.jpg'),
(6, 'sultana', '4', 'nine', 'upload/index.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `roll` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `class`, `roll`, `section`, `birth_date`, `age`, `contact`, `email`, `address`, `city`, `country`, `reg_date`, `photo`) VALUES
(1, 'Hapsha', 'Hapsha', 'FOUR', 1, 'A', '0000-00-00', 8, '37567889', 'hapsha@gmail.com', 'Dhaka', 'Mirpur', 'Bangladesh', '2018-06-01', 'uploads/folio07.jpg'),
(3, 'Adnann', 'Adnann', 'THREE', 1, 'A', '2007-11-04', 12, '37567889', 'taya@gmail.com', 'Dhaka', 'Mirpur', 'Bangladesh', '2018-06-15', 'uploads/folio07.jpg'),
(4, 'Sarmin', 'Akter', 'THREE', 3, 'A', '2010-02-02', 8, '37567889', 'admin@admin.com', 'Mirpur', 'Dhaka', 'Bangladesh', '2018-06-01', 'uploads/folio08.jpg'),
(5, 'Dina', 'Akter', 'THREE', 4, 'A', '2010-03-03', 8, '3756788', 'admin@admin.com', 'Mirpur', 'Dhaka', 'Bangladesh', '2018-06-02', 'uploads/folio07.jpg'),
(6, 'Hapsha', 'hossain', 'THREE', 1, 'A', '2018-06-02', 8, '37567889', 'hapsha@gmail.com', 'Mirpur', 'Dhaka', 'Bangladesh', '2018-06-14', 'uploads/folio12.jpg'),
(7, 'sultana', 'rajia', 'THREE', 6, '', '0000-00-00', 11, '01431700002', 'xfds@dfdfd.vbv', 'hgf ', 'dhaka', 'Bangladesh', '2018-10-16', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`) VALUES
(1, 'Bangla 1st'),
(2, 'Bangla 2nd'),
(3, 'English 1st'),
(4, 'English 2nd'),
(5, 'Mathmetics'),
(6, 'Science'),
(7, 'Religion'),
(8, 'Social Science');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`) VALUES
(1, 'about'),
(2, 'home'),
(4, 'Home'),
(5, 'notice'),
(8, 'Home'),
(9, 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `teacher1`
--

CREATE TABLE `teacher1` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher1`
--

INSERT INTO `teacher1` (`id`, `name`, `subject`, `position`, `file`) VALUES
(1, 'Akahs', 'Math', 'Teacher', 'uploads/images (3).jpg'),
(2, 'selem', 'English', 'Teacher', 'uploads/images (2).jpg'),
(6, 'salma', 'English', 'Teacher', 'uploads/download.jpg'),
(7, 'silina', 'Bangla', 'Assitance Teacher', 'uploads/teacher.png'),
(9, 'saiful Islam', 'Political sience', 'Teacher', 'uploads/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher2`
--

CREATE TABLE `teacher2` (
  `id` int(11) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_sub` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher2`
--

INSERT INTO `teacher2` (`id`, `t_name`, `t_sub`) VALUES
(1, 'Mr.Sujaul Huqe', 'English'),
(2, 'Tamanna Yesmin', 'Bangla'),
(3, 'Masuma Akhter', 'Mathematics'),
(4, 'Jerin Khatun', 'Social Science'),
(5, 'Mr.Faruqe Islam', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `designation`, `birth_date`, `sex`, `contact`, `email`, `address`, `city`, `country`, `reg_date`, `photo`) VALUES
(1, 'Hapsha', 'hossain', 'Lecturer', '1993-01-27', '24', 37567889, 'hapsha@gmail.com', 'Dhaka', 'Mirpur', 'Bangladesh', '2018-05-30', 'uploads/folio15.jpg'),
(59, 'Sarmin', 'Akter', 'Assistant Teacher', '1980-01-29', ' Female', 37567889, 'admin@admin.com', 'Dhaka', 'Mirpur', 'Bangladesh', '2018-05-31', 'uploads/folio07.jpg'),
(60, 'Ferdowsi ', 'Sultana', 'Professor', '1980-01-07', ' Female', 37567889, 'sultana@gmail.com', 'Dhaka', 'Mirpur', 'Bangladesh', '2018-06-07', 'uploads/folio19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_payment`
--

CREATE TABLE `teacher_payment` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `salary` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_payment`
--

INSERT INTO `teacher_payment` (`id`, `month`, `date`, `name`, `designation`, `salary`, `status`) VALUES
(4, 'January', '2018-06-27', 'Hapsha hossain', 'Lecturer', 30000, ''),
(5, 'January', '2018-06-27', 'Sarmin Akter', 'Assistant Teacher', 30000, ''),
(6, 'January', '2018-06-27', 'Ferdowsi  Sultana', 'Professor', 60000, ''),
(7, 'February', '2018-06-27', 'Hapsha hossain', 'Lecturer', 30000, 'Paid'),
(8, 'February', '2018-06-27', 'Sarmin Akter', 'Assistant Teacher', 30000, 'Paid'),
(9, 'February', '2018-06-27', 'Ferdowsi  Sultana', 'Professor', 80000, 'Paid'),
(10, 'April', '2018-10-17', 'Hapsha hossain', 'Lecturer', 15000, 'Paid'),
(11, 'April', '2018-10-17', 'Sarmin Akter', 'Assistant Teacher', 12000, 'Unpaid'),
(12, 'April', '2018-10-17', 'Ferdowsi  Sultana', 'Professor', 20000, 'Paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_result`
--
ALTER TABLE `add_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_name`
--
ALTER TABLE `class_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_routine`
--
ALTER TABLE `c_routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_cat`
--
ALTER TABLE `exam_cat`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `hoildays`
--
ALTER TABLE `hoildays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jahangir`
--
ALTER TABLE `jahangir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_subject`
--
ALTER TABLE `m_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_cat`
--
ALTER TABLE `payment_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `salarysheet`
--
ALTER TABLE `salarysheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher1`
--
ALTER TABLE `teacher1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher2`
--
ALTER TABLE `teacher2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_payment`
--
ALTER TABLE `teacher_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_result`
--
ALTER TABLE `add_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_name`
--
ALTER TABLE `class_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c_routine`
--
ALTER TABLE `c_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `exam_cat`
--
ALTER TABLE `exam_cat`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hoildays`
--
ALTER TABLE `hoildays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jahangir`
--
ALTER TABLE `jahangir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login1`
--
ALTER TABLE `login1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_subject`
--
ALTER TABLE `m_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment_cat`
--
ALTER TABLE `payment_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salarysheet`
--
ALTER TABLE `salarysheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student1`
--
ALTER TABLE `student1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher1`
--
ALTER TABLE `teacher1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher2`
--
ALTER TABLE `teacher2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `teacher_payment`
--
ALTER TABLE `teacher_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
