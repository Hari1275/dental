-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 02:53 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentalclinic`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pop` (IN `emailid` VARCHAR(12))  NO SQL
SELECT COUNT(fbill_no) from foodbill where email=emailid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('viggi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(10) NOT NULL,
  `doctor` varchar(250) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `card` varchar(250) NOT NULL,
  `cardn` int(250) NOT NULL,
  `cvc` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ddate` varchar(20) NOT NULL,
  `ttime` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `ndoctor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `phone`, `email`, `ddate`, `ttime`, `message`, `ndoctor`) VALUES
(3, 'vv', 12356, 'v@gmail.com', '04/07/2018', '23:30 PM', 'aaaaa', 'hari kulal'),
(4, 'vishal', 1234, 'v@gmail.com', '11/07/2018', '15:00 PM', 'aaa', 'hari kulal'),
(28, 'viggi', 4321, 'v@gmail.com', '11/07/2018', '15:00 PM', 'aaaa', 'vishal');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(250) NOT NULL,
  `problem_name` varchar(250) NOT NULL,
  `problem_type` varchar(250) NOT NULL,
  `problem_descrip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `problem_name`, `problem_type`, `problem_descrip`) VALUES
(9, 'vv1', 'ff', 'kkk'),
(13, 'vv1', 'ff', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `name`, `email`, `message`) VALUES
(1, 'jjkk', 'jjkk@jjj', 'ddjdkllkfssg fgi ho sgiuh ;lshg wroigy fgihrwg hrggf sifgh ihrghrwgpohb '),
(2, 'chaitra', 'jjkk@jjj', 'sjdkk'),
(3, 'kdkd', 'jsduj@ksld', 'mdkkdk'),
(4, 'bjnj', 'jsduj@ksld', 'odoedooe'),
(5, 'asd', 'jjkk@jjj', 'hello'),
(6, 'chaitra', 'sssssa@hdjjd', 'hello'),
(7, 'abc', 'mgyty@gmail.com', 'hkhuuyuyu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `address`, `contact`, `password`) VALUES
(1, 'vignesh', 'vignesh12@gmail.com', 'sullia', '9874566121', '1234'),
(2, 'hhhh', 'aaaas@email.com', 'dfgdf', '1234567890', '12345'),
(3, 'hhhh', 'aaaas@email.com', 'dfgdf', '1234567890', '12345'),
(4, 'hhhh', 'aaaas@email.com', 'dfgdf', '1234567890', '12345'),
(6, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(7, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(8, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(9, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(11, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(12, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(13, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(14, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '123'),
(15, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '11'),
(16, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '11'),
(17, 'hari', 'aaaas@email.com', 'dfgdf', '1234567890', '11'),
(18, 's', 'aaaas@email.com', 'dfgdf', '1234567890', '11'),
(19, 's', 'aaaas@email.com', 'dfgdf', '1234567890', '11'),
(20, 'ok', 'aaaas@email.com', 'dfgdf', '1234567890', '55'),
(21, '', '', '', '', ''),
(22, 'vgnsh', 'k@gmail.com', 'dfgdf', '1234567890', '12'),
(23, 'hh', 'vishal12@gmail.com', 'dfgdf', '1234567890', '123'),
(24, 'vugnesh', 'vigg@gmail.com', 'sullia', '876555555', '12'),
(25, 'vignesh', 'vigg@gmail.com', 'sullia', '987657584', '21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
