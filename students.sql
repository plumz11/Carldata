-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2025 at 03:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `carl2b_act`
--

CREATE TABLE `carl2b_act` (
  `id` int(11) NOT NULL,
  `student_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carl2b_act`
--

INSERT INTO `carl2b_act` (`id`, `student_no`, `fullname`, `course`, `year_level`) VALUES
(1, '05-9021', 'Soriano Carl John P', 'ACT', 2),
(2, '05-8384', 'Reyes Rico L', 'ACT', 2),
(3, '05-9066', 'Ramos John Paul', 'ACT', 2),
(4, '05-9292', 'Hernandez Rendell N.', 'ACT', 2),
(5, '05-8918', 'De Villa Chloe Lee M.', 'ACT', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carl2b_act`
--
ALTER TABLE `carl2b_act`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`year_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carl2b_act`
--
ALTER TABLE `carl2b_act`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
