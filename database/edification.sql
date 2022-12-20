-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 09:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edification`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `First_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`First_name`, `last_name`, `username`, `email`, `password`, `status`, `id`) VALUES
('Sunil', 'Ganguly', 'sontu', 'sganguly@gmail.com', '29e0e564dbeed95385b7c343bff1b9a3', 2, 1),
('Abdur', 'Rahman', 'ar7', 'arahman202260@bscse.uiu.ac.bd', '5fc48f84a6a20f105b884889d1e69cf4', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `all_courses`
--

CREATE TABLE `all_courses` (
  `course_name` varchar(40) NOT NULL,
  `instructor` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `created_by` varchar(40) DEFAULT NULL,
  `admin_mail` varchar(100) DEFAULT NULL,
  `id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_courses`
--

INSERT INTO `all_courses` (`course_name`, `instructor`, `status`, `course_id`, `created_by`, `admin_mail`, `id`) VALUES
('Introduction to Computer Science', 'Abdur Rahman', 1, 'ICS 2022', 'sontu', 'sganguly@gmail.com', 1),
('Data Structure 1', 'Nurul Huda', 1, 'DSA 1', 'sontu', 'sganguly@gmail.com', 2),
('Structured Programming Language', 'Shoeb Ahmed', 1, 'SPL 2022', 'sontu', 'sganguly@gmail.com', 3),
('Database Management Lab', 'Mohaiminul Islam', 0, 'DBMS Lab', 'sontu', 'sganguly@gmail.com', 4),
('Theory of Computation', 'Nabila Swarna', 0, 'TOC 2022', 'sontu', 'sganguly@gmail.com', 5),
('Machine Learning', 'Mofijur Rahman', 1, 'ML 2022', 'sontu', 'sganguly@gmail.com', 6),
('Computer Networking', 'Gourob Saha', 1, 'CN 2022', 'sontu', 'sganguly@gmail.com', 12),
('Artificial Intelligence', 'Mofijur Rahman', 1, 'AI 03', 'sontu', 'sganguly@gmail.com', 13),
('Data Structure 2', 'Akib Zaman', 0, 'DSA 2', 'sontu', 'sganguly@gmail.com', 14),
('Database', 'y', 0, 'DBMS', 'sontu', 'sganguly@gmail.com', 15),
('Bioinformetics', 'Somrat Abdul Jolil', 1, 'BI 2022', 'sontu', 'sganguly@gmail.com', 16);

-- --------------------------------------------------------

--
-- Table structure for table `request_course`
--

CREATE TABLE `request_course` (
  `course_name` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `current_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_course`
--

INSERT INTO `request_course` (`course_name`, `id`, `description`, `current_status`) VALUES
('Mathematics', 1, 'I love mathematics.', 0),
('Algebra', 2, 'ggwgygyhwh', 0),
('SPL LAB', 6, 'eeeeeeeee', 0),
('Mathematics 3', 7, 'fefewggwggwgwg', 0),
('ttntntntn', 8, 'ebnbebnebe', 0),
('ghbbb', 9, 'rfbbbfdbfdb', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `education` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `username`, `password`, `mail`, `age`, `education`) VALUES
('Dhiman Mozumder', 'dm', '1234', 'dm@gmail.com', 23, 'tdtfghh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_courses`
--
ALTER TABLE `all_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_course`
--
ALTER TABLE `request_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_courses`
--
ALTER TABLE `all_courses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `request_course`
--
ALTER TABLE `request_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
