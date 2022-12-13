-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 08:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `COURSE_NAME` varchar(20) DEFAULT NULL,
  `SECTION` int(5) DEFAULT NULL,
  `QUIZ1` float DEFAULT NULL,
  `QUIZ2` float DEFAULT NULL,
  `AVERAGE_QUIZ_MARK` float DEFAULT NULL,
  `MID` float DEFAULT NULL,
  `FINAL` float DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `GRADE` varchar(5) DEFAULT NULL,
  `CREDIT_PASSED` int(5) DEFAULT NULL,
  `CURRENT_CGPA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assign_mark`
--

CREATE TABLE `teacher_assign_mark` (
  `COURSE_NAME` varchar(20) DEFAULT NULL,
  `SECTION` int(5) DEFAULT NULL,
  `QUIZ1` float DEFAULT NULL,
  `QUIZ2` float DEFAULT NULL,
  `AVERAGE_QUIZ_MARK` float DEFAULT NULL,
  `MID` float DEFAULT NULL,
  `FINAL` float DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `GRADE` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
