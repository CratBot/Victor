-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 05:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(50) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `parentname` varchar(20) NOT NULL,
  `parentphone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `studentname`, `phone`, `email`, `regno`, `course`, `parentname`, `parentphone`) VALUES
(1, 'Aaban Ammar', '0728432217', 'Ammar@gmail.com', '105738', 'computer science', 'Ammar', '+966 736523'),
(2, 'Abdullah Muhamed', '+966 345621', 'Abdullah@gmail.com', 'Comp123', 'computer science', 'rodgers junior', '+966 345621'),
(3, 'Adnan Moha', '+966 732464', 'Adnan@gmail.com', 'CM102', 'Computer science', 'Adnan', '+966 732464'),
(4, 'Abdullah', '+966731166', 'Abdullahs@gmail.com', '475563', 'computer science', 'Abdullah', '+966731166'),
(5, 'Rodgers Mohammed', '+96664654', 'mohammed@gmail.com', '5463136', 'computer sceicen', 'Junior', '+96664654'),
(7, 'Rodgers Ndocha', '0728432271', 'ndocharodgers@gmail.com', 'acs102', 'actuarial science', 'rodgers junior', '0728432271'),
(13, 'Abdullah Muhamed', '+966 345621', 'Abdullah@gmail.com', 'Comp123', 'computer science', 'Abudulla', '+966 345621'),
(14, 'Aaban Ammar', '0728432217', 'Ammar@gmail.com', '105738', 'computer science', 'Ammar', '+966 736523'),
(15, 'Aaban Ammar', '0728432217', 'Ammar@gmail.com', '105738', 'computer science', 'Ammar', '+966 736523'),
(16, 'Adnan Moha', '+966 732464', 'Adnan@gmail.com', 'CM102', 'Computer science', 'Adnan', '+966 732464'),
(17, 'Adnan Moha', '+966 732464', 'Adnan@gmail.com', 'CM102', 'Computer science', 'Adnan', '+966 732464');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pass`) VALUES
('admin', 'admin123'),
('admin', 'admin123'),
('admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
