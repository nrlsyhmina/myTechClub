-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 04:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytechclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STUD_ID` int(11) NOT NULL,
  `STUD_NAME` varchar(255) NOT NULL,
  `STUD_IC` varchar(255) NOT NULL,
  `STUD_USERNAME` varchar(255) NOT NULL,
  `STUD_PASSWORD` varchar(255) NOT NULL,
  `STUD_ADDRESS` varchar(255) NOT NULL,
  `STUD_GENDER` varchar(255) NOT NULL,
  `STUD_EMAIL` varchar(255) NOT NULL,
  `STUD_CLASS` varchar(255) NOT NULL,
  `STUD_AGE` int(11) DEFAULT NULL,
  `STUD_PHONE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STUD_ID`, `STUD_NAME`, `STUD_IC`, `STUD_USERNAME`, `STUD_PASSWORD`, `STUD_ADDRESS`, `STUD_GENDER`, `STUD_EMAIL`, `STUD_CLASS`, `STUD_AGE`, `STUD_PHONE`) VALUES
(1, 'NURUL SYAHMINA BINTI MOHD KHAIRUDDIN', '99', 'NURUL', '1811', 'T452, Jalan Inderapura 15,', 'female', 'nrlsyhmina@gmail.com', 'classA', 21, 129388385);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STUD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STUD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table student
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
