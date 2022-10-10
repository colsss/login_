-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2022 at 11:01 AM
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_record`
--

CREATE TABLE `cat_record` (
  `id` int(10) NOT NULL,
  `course_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_cat`
--

CREATE TABLE `course_cat` (
  `id` int(10) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaires`
--

CREATE TABLE `questionnaires` (
  `id` int(10) NOT NULL,
  `timer_type` varchar(255) NOT NULL,
  `questions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_remarks`
--

CREATE TABLE `student_remarks` (
  `id` int(10) NOT NULL,
  `scores` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, '', '', 'cols', 'cols@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(100, '', '', 'disco', 'disco@gmail.com', '1234'),
(101, '', '', 'this', 'this@gmail.com', '1234'),
(102, '', '', 'jasper', 'ulit@gmail.cm', '1234'),
(103, '', '', 'jasper1', 'jasper@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(104, '', '', 'ponce', 'ponce@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(105, '', '', 'power', 'qwer@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(107, '', '', 'kenneth', 'kenneth@gmail.com', '76d80224611fc919a5d54f0ff9fba446');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `info` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user_roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `first_name`, `last_name`, `address`, `email`, `info`, `status`, `id_user_roles`) VALUES
(1, '', '', '', '', 'student', 2, 101),
(2, '', '', '', '', 'student', 1, 107);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
