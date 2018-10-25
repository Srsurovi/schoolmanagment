-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 07:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
(110, 'frist exam', 'six', 'Isam', '2018-01-10', '14:57:00'),
(111, 'frist exam', 'seven', 'Bangla', '2018-01-17', '12:58:00'),
(112, 'frist exam ', 'Eight', 'Bangla ', '0000-00-00', '12:59:00');

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
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `available` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `available`, `file`) VALUES
(9, 'ali ahmed', 'nazrul89@gmail.com', 'teacher', 'uploads/images (3).jpg'),
(10, 'hamid', 'jibonalam123@gmail.com', 'teacher', 'uploads/teacher.png'),
(11, 'Md.jahangir alam', 'nazrul89@gmail.com', 'teacheer', 'uploads/jahangir alam.jpg'),
(12, 'Md.jahangir alam', 'English', 'Assitant', 'uploads/images.jpg'),
(13, 'jaahangir', 'Bangla', 'Teacher', 'uploads/images (2).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jahangir`
--
ALTER TABLE `jahangir`
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
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jahangir`
--
ALTER TABLE `jahangir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
