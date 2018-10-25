-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 08:16 PM
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
-- Database: `jibon`
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
(107, 'frist exam', 'six', 'Maths', '2019-12-27', '23:58:00'),
(108, '2nd exam', 'seven', 'Bangla', '2018-01-18', '12:59:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jahangir`
--
ALTER TABLE `jahangir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jahangir`
--
ALTER TABLE `jahangir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
