-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 06:52 AM
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
-- Database: `result_processing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(20) DEFAULT NULL,
  `PASS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `PASS`) VALUES
('admin1', 'qwerty14');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Student_ID` int(30) DEFAULT NULL,
  `Course_Name` varchar(30) DEFAULT NULL,
  `QUIZ` int(10) DEFAULT NULL,
  `MID` int(10) DEFAULT NULL,
  `FINAL` int(10) DEFAULT NULL,
  `Serial` int(11) NOT NULL,
  `GRADE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Student_ID`, `Course_Name`, `QUIZ`, `MID`, `FINAL`, `Serial`, `GRADE`) VALUES
(2021099642, 'EEE111', NULL, NULL, NULL, 1, NULL),
(2021099642, 'CSE311', NULL, NULL, NULL, 2, NULL),
(2021099642, 'MAT120', NULL, NULL, NULL, 3, NULL),
(2021099642, 'CSE231', NULL, NULL, NULL, 4, NULL),
(2021099642, 'ENV203', NULL, NULL, NULL, 5, NULL),
(2021627642, 'EEE111', NULL, NULL, NULL, 6, NULL),
(2021627642, 'CSE311', 30, 25, 25, 7, 'A'),
(2021627642, 'MAT120', NULL, NULL, NULL, 8, NULL),
(2021627642, 'CSE225', NULL, NULL, NULL, 9, NULL),
(2021627642, 'CSE331', NULL, NULL, NULL, 10, NULL),
(2021098642, 'EEE111', NULL, NULL, NULL, 19, NULL),
(2021098642, 'CSE331', NULL, NULL, NULL, 20, NULL),
(2021098642, 'ENV203', 25, 25, 38, 21, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `StudentName` varchar(100) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `Student_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`StudentName`, `StudentEmail`, `Gender`, `password`, `Student_ID`) VALUES
('Rakin Hassan', 'rakinx96@gmail.com', 'Male', 'rkn123', 2021098642),
('Rafin Hassan', 'rafin@gmail.com', 'Male', 'rafin123', 2021099642),
('Zarin Tasnim', 'zarin@gmail.com', 'Female', 'zarin123', 2021627642);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course`
--

CREATE TABLE `teacher_course` (
  `Course_Name` varchar(10) DEFAULT NULL,
  `Teacher_Initial` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_course`
--

INSERT INTO `teacher_course` (`Course_Name`, `Teacher_Initial`) VALUES
('EEE111', 'SMMI'),
('EEE154', 'SMMI'),
('CSE311', 'MDAR'),
('CSE425', 'MDAR'),
('CSE225', 'MDAR'),
('CSE231', 'TNF'),
('CSE331', 'TNF'),
('ENV203', 'JWR'),
('MAT120', 'PNG');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `Teacher_Name` varchar(30) DEFAULT NULL,
  `Teacher_Initial` varchar(10) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `PW` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`Teacher_Name`, `Teacher_Initial`, `Email`, `Gender`, `PW`) VALUES
('Jowaher Raza', 'JWR', 'raza@gmail.com', 'Male', '741'),
('Md Abdur Rouf', 'MDAR', 'rouf@duet.edu', 'Male', '456'),
('Preetom Nag', 'PNG', 'png@gmail.com', 'Male', '852'),
('Sheikh Mahmudul ', 'SMMI', 'Mahmudul@gmail.com', 'Male', '123'),
('Tanzila Farah', 'TNF', 'tanzila@gmail.com', 'Female', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`PASS`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`Teacher_Initial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
