-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2022 at 07:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
  `course_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_cat`
--

INSERT INTO `course_cat` (`id`, `course_name`, `department`) VALUES
(1, 'BS Nursing', '0'),
(2, 'BS Information Technology', '0'),
(3, 'BS Engineering', '0'),
(10, 'BS Information Technology', 'CCIS'),
(11, 'BS Nursing', 'CON'),
(12, 'BS Civil Engineering', 'College of Engineering'),
(13, 'BS Civil Engineering', 'College of Engineering'),
(14, 'Bs Psychology', 'College of Arts and Social Sciences and Education');

-- --------------------------------------------------------

--
-- Table structure for table `dept_cat`
--

CREATE TABLE `dept_cat` (
  `department_id` int(10) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_cat`
--

INSERT INTO `dept_cat` (`department_id`, `department_name`) VALUES
(5, 'College of Arts and Social Sciences and Education'),
(6, 'College of Business'),
(7, 'College of Computing and Information Sciences'),
(8, 'College of Criminology'),
(9, 'College of Education'),
(10, 'College of Engineering'),
(11, 'College of Hospitality Management'),
(12, 'College of Nursing');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaires`
--

CREATE TABLE `questionnaires` (
  `id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `timer_type` varchar(255) NOT NULL,
  `questions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `question_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `answer_tally` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `category`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `course_name`, `answer_tally`) VALUES
(1, 0, '', '', 'asff', 'adsdf', 'asfe', 'rgth', 'asff', '', ''),
(2, 0, '', '', 'asa', '', '', '', 'adda', '', ''),
(3, 0, '', 'What is Computer?', 'ggfjgh', 'ftujfng', 'gfjgf', 'fxg', 'fxg', '', ''),
(4, 0, '', 'What is Computer?', 'ggfjgh', 'ftujfng', 'gfjgf', 'fxg', 'fxg', '', ''),
(5, 0, '', 'quotes.png', 'quotes.png', 'quotes.png', 'quotes.png', 'quotes.png', 'quotes.png', '', ''),
(26, 0, '', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', '', ''),
(27, 0, '', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', '', ''),
(28, 0, '', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', '', ''),
(29, 0, '', 'What is Computer?', 'asa', '', '', '', 'tyi7', '', ''),
(30, 0, '', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', '', ''),
(31, 0, '', 'What is PHP?', 'asa', 'ftujfng', 'asfe', 'rgth', 'adda', '', ''),
(32, 0, '', 'What is PHP?', 'asa', 'ftujfng', 'asfe', 'rgth', 'adda', '', ''),
(33, 0, '', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', 'uploads/quotes.png', '', ''),
(34, 0, '', 'What is Computer?', 'asff', 'ftujfng', 'asfe', 'tyu', 'dfs', '', ''),
(35, 0, '', 'QWERTY', 'asdfg', 'qwery', 'khgg', 'fdhgt', 'ryetru', '', ''),
(95, 0, '', 'uploads/Screenshot (2).png', 'uploads/Screenshot (2).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', '', ''),
(96, 0, '', 'uploads/Screenshot (2).png', 'uploads/Screenshot (2).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', '', ''),
(97, 0, '', 'uploads/Screenshot (3).png', 'uploads/Screenshot (3).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (2).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', '', ''),
(98, 0, '', '', 'uploads/Screenshot (3).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (2).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', '', ''),
(99, 0, '', 'What is the correct abstract?', 'uploads/Screenshot (3).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (2).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', '', ''),
(100, 0, '', 'What is the correct abstract?', 'uploads/Screenshot (3).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (2).png', 'uploads/Screenshot (1).png', 'uploads/Screenshot (3).png', '', ''),
(101, 0, '', 'What is power?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(102, 0, '', 'What is power?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(103, 0, '', 'What is power?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(104, 0, '', 'What is power?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(105, 0, '', 'What is power?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(106, 0, '', 'What is power?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(107, 0, '', 'What is emerut?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(108, 0, 'Abstract', 'What is eme?', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', ''),
(109, 0, 'Multiple Choice', 'This is multiple choice.', 'ggfjgh', 'adsdf', 'gfjgf', 'tyu', 'dfs', '', ''),
(110, 0, 'Identification', 'This is Identification', '', '', '', '', '', '', ''),
(111, 0, 'True or False', 'This is True or False', '', '', '', '', '', '', ''),
(112, 0, 'Fill in the blank', 'This is Fill in the blank.', '', '', '', '', '', '', ''),
(113, 0, 'Essay', 'This is Essay', '', '', '', '', '', '', ''),
(114, 0, 'Abstract', 'Ako si ABstract', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', '', '');

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
  `middle_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `first_choice` varchar(255) NOT NULL,
  `second_choice` varchar(255) NOT NULL,
  `info` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user_roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `first_name`, `last_name`, `middle_name`, `gender`, `address`, `email`, `password`, `contact_number`, `first_choice`, `second_choice`, `info`, `status`, `id_user_roles`) VALUES
(1, 'minerva', 'v', 'vadel', '', '', '', '', '', '', '', 'student', 2, 101),
(2, 'taguro', 'brothers', '', '', '', '', '', '', '', '', 'student', 1, 107),
(3, 'asdf', 'asdf', '', '', '', 'asdf', '', 'asdf', '', '', 'asdf', 11, 1),
(10, 'Carizza Colean', 'Escoto', 'Zamora', '', 'San Simon', 'cols@gmail.com', '', '09752724011', '', '', '', 0, 0),
(11, 'Carizza Colean', 'Escoto', 'Zamora', '', 'San Simon', 'cols@gmail.com', '', '09752724011', '', '', '', 0, 0),
(12, 'Carizza Colean', 'Escoto', 'Zamora', '', 'San Simon', 'cols@gmail.com', '', '09752724011', '', '', '', 0, 0),
(37, 'Jeffrey', 'Mamangun', 'Zamora', '', 'Mabalacat City', 'miccapots11@gmal.com', '', '09752724011', '', '', 'student', 0, 0),
(41, 'Micca Ellah', 'Mamangun', 'Escoto', '', 'Mabalacat City Pampanga', 'miccapots11@gmail.com', '', '09123456789', 'BS Accountancy', 'BS Education', 'student', 0, 0),
(43, 'Kenneth', 'Estacio', 'Lazatin', '', 'Telebastagan, Sanfernandon, Pampanga', 'kenneth@gmail.com', '123456', '09987654321', 'BS Engineering', 'BS Psychology', 'student', 0, 0),
(44, 'Carizza Colean', 'Escoto', '', '', 'San Simon, Pampanga', 'cols@gmail.com', 'qwerty', '09752724011', 'BS Accountancy', 'BS Psychology', 'student', 0, 0),
(45, '', '', '', '', '', '', '', '', '', '', 'student', 0, 0),
(46, '', '', '', '', '', '', '', '', '', '', 'student', 0, 0),
(47, 'Khatlean Nicole', 'Bucu', 'Escoto', '', 'San Simon, Pampanga', 'khatleannicole@gmail.com', 'asdfgh', '0987654321', 'BS Education', 'BS Accountancy', 'student', 0, 0),
(48, 'Khatlean Nicole', 'Bucu', 'Escoto', '', 'San Simon, Pampanga', 'khatleannicole@gmail.com', 'asdfgh', '0987654321', 'BS Education', 'BS Accountancy', 'student', 0, 0),
(49, 'Khatlean Nicole', 'Bucu', 'Escoto', 'Female', 'San Simon, Pampanga', 'khatleannicole@gmail.com', 'asdfgh', '0987654321', 'BS Education', 'BS Accountancy', 'student', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_record`
--
ALTER TABLE `cat_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_cat`
--
ALTER TABLE `course_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_cat`
--
ALTER TABLE `dept_cat`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_remarks`
--
ALTER TABLE `student_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_record`
--
ALTER TABLE `cat_record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_cat`
--
ALTER TABLE `course_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dept_cat`
--
ALTER TABLE `dept_cat`
  MODIFY `department_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `student_remarks`
--
ALTER TABLE `student_remarks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
