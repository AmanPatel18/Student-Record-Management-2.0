-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 22, 2021 at 11:12 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srm`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Roll_number` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Batch` varchar(5) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `Age` int(3) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Total_Fees` int(5) DEFAULT NULL,
  `Amount_Paid` int(5) DEFAULT NULL,
  `Pending_Amount` int(5) DEFAULT NULL,
  `Fee_Status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Roll_number`)
) ENGINE=MyISAM AUTO_INCREMENT=1112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll_number`, `Name`, `Batch`, `Subject`, `Age`, `Gender`, `Total_Fees`, `Amount_Paid`, `Pending_Amount`, `Fee_Status`) VALUES
(113, 'Aarti Chouhan ', '2nd', 'C++', 20, 'Female', 1500, 1000, 500, 'Due'),
(112, 'Aditya Raj Verma', '2nd', 'C++', 18, 'Male', 1500, 1500, 0, 'Paid'),
(111, 'Ankita Patel', '3rd', 'Python', 26, 'Female', 3000, 3000, 0, 'Paid'),
(110, 'Disha Jain', '5th', 'PHP', 21, 'Female', 2500, 2500, 0, 'Paid'),
(109, 'Tanya Gautam', '5th', 'PHP', 20, 'Female', 2500, 2000, 500, 'Due'),
(108, 'Nancy Singh Baghel', '2nd', 'C++', 18, 'Female', 1500, 1500, 0, 'Paid'),
(107, 'Disha Singh Baghel', '1st', 'C', 17, 'Female', 1000, 1000, 0, 'Paid'),
(101, 'Aman Patel', '1st', 'Python', 21, 'Male', 3000, 3000, 0, 'Paid'),
(102, 'Kuldeep Pandey', '1st', 'Python', 21, 'Male', 3000, 2000, 1000, 'Due'),
(117, 'Alia Pandey', '3rd', 'Python', 22, 'Female', 3000, 3000, 0, 'Paid'),
(105, 'Anurag Nema', '2nd', 'Java', 21, 'Male', 1500, 2000, 0, 'Paid'),
(115, 'Kushagra Kushwaha', '4th', 'Java', 19, 'Male', 2000, 1000, 1000, 'Due'),
(104, 'Iram Khan', '4th', 'Java', 21, 'Female', 2000, 1200, 800, 'Due'),
(106, 'Saumya Jain', '5th', 'PHP', 20, 'Female', 2500, 2500, 0, 'Paid'),
(114, 'Jatin Parasar', '3rd', 'Python', 21, 'Male', 3000, 3000, 0, 'Paid'),
(116, 'Himanshu Kushwaha', '3rd', 'Python', 22, 'Male', 3000, 2500, 500, 'Due');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`) VALUES
('Anurag Nema', '$2y$10$O4/ZzhPUmqhcCTyvT2kzG.ZUiDxsNg8oq9xtZ8SpoqYZZsgyxbP3O'),
('Aman Patel', '$2y$10$hsGim5AuUzqEbv3EwNDy7OPVAwaBa6jOF48VOI/l7t0WG5ypE7Qzi'),
('Iram Khan', '$2y$10$sWvBGmdF5tKhjGBRgyTGPOsRtqdva9.IyM213IPb7.nybElewwiUO'),
('Anurag', '$2y$10$M7WhfiX7TX0/AEtz.Jf1eODfJoY2yzWrArP133BQsxga9jSYymgje'),
('Shraddha Kapoor', '$2y$10$6l8MzYKeqe.nwqzslC6L6ecvXmy7itnA5p97wvXEjbhEu1XKp8oRC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
