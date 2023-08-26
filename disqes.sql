-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2023 at 02:48 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disqes`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `user_id`) VALUES
(6, 'Coffee Shop Project', '', 1),
(7, 'Food Pedia Project', '', 1),
(8, 'Digital Agency Project', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `test_case`
--

CREATE TABLE `test_case` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `key_case` varchar(11) NOT NULL,
  `priority` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `behavior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `precondition` text NOT NULL,
  `instruction` text NOT NULL,
  `expected_result` varchar(255) NOT NULL,
  `test_suite_id` int NOT NULL,
  `test_section_id` int NOT NULL,
  `project_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test_case`
--

INSERT INTO `test_case` (`id`, `name`, `key_case`, `priority`, `behavior`, `precondition`, `instruction`, `expected_result`, `test_suite_id`, `test_section_id`, `project_id`) VALUES
(23, '123', 'HN-1', 'High', 'Positive', '123', '', '', 7, 12, 6),
(24, '345', 'HN-2', 'Medium', 'Negative', '123425', '', '', 7, 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `test_section`
--

CREATE TABLE `test_section` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `test_suite_id` int NOT NULL,
  `project_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test_section`
--

INSERT INTO `test_section` (`id`, `name`, `test_suite_id`, `project_id`) VALUES
(12, 'Navigation Bar', 7, 6),
(13, 'Header Section', 7, 6),
(14, 'About Section', 8, 6),
(15, 'Product Section', 8, 6),
(16, 'Footer Section', 9, 6),
(17, 'Copyright', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `test_suite`
--

CREATE TABLE `test_suite` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `project_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test_suite`
--

INSERT INTO `test_suite` (`id`, `name`, `description`, `project_id`) VALUES
(7, 'Header', '', 6),
(8, 'Body', '', 6),
(9, 'Footer', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Winda Pratama', 'windapratama2306@gmail.com', 'windapratama2306'),
(2, 'Admin', 'admin123@gmail.com', 'admin123'),
(3, 'ivan', 'ivan123@gmail.com', 'ivan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `test_case`
--
ALTER TABLE `test_case`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `test_section_id` (`test_section_id`),
  ADD KEY `test_suite_id` (`test_suite_id`);

--
-- Indexes for table `test_section`
--
ALTER TABLE `test_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_suite_id` (`test_suite_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `test_suite`
--
ALTER TABLE `test_suite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_case`
--
ALTER TABLE `test_case`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `test_section`
--
ALTER TABLE `test_section`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test_suite`
--
ALTER TABLE `test_suite`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
