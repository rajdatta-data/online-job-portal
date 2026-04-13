-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 02:07 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comany`
--

CREATE TABLE `comany` (
  `Reg_no` int(11) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Company_name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `chk_qus` varchar(300) NOT NULL,
  `chk_ans` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Company_address` varchar(400) NOT NULL,
  `Company_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comany`
--

INSERT INTO `comany` (`Reg_no`, `Type`, `Company_name`, `Email_id`, `chk_qus`, `chk_ans`, `Password`, `Mobile_no`, `Company_address`, `Company_logo`) VALUES
(3, '', 'nehashalni', 'nehagnkcw@gmail.com', '', '', 'nehaprab', 2147483647, 'mohali', 'img/nehacv1.doc'),
(4, 'Consultancy', 'grower', 'grower@gmail.com', '', '', 'grower', 254468793, 'mohali,phase-11', 'img/marchProgressReport.docx'),
(5, 'Company', 'neha123', 'neha@gmail.com', '', '', 'neha', 1234568975, 'mohali', 'img/davlogo1.jpg'),
(7, 'Company', 'abc', 'abc@gmail.com', 'What is your favourite color ?', 'black', 'abc', 1224597896, 'mohali', 'img/davlogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `companyjob`
--

CREATE TABLE `companyjob` (
  `Company_name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `job_salary` varchar(100) NOT NULL,
  `candidate_qualification` varchar(100) NOT NULL,
  `candidate_experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyjob`
--

INSERT INTO `companyjob` (`Company_name`, `Email_id`, `job_title`, `job_location`, `job_salary`, `candidate_qualification`, `candidate_experience`) VALUES
('abc', 'abcd@gmail.com', 'php', 'ludhiana', '15000', 'mca', '1 year'),
('Eme Technoloy', 'nehagnkcw@gmail.com', 'web designer', 'punjab', '15000', 'bca', '2 years'),
('nehashalni', 'nehagnkcw@gmail.com', 'wed developer', 'mohali', '25000 per month', 'mca', '2 years'),
('nnfur', 'abcd@gmail.com', 'css', 'mohali', '10000', 'bca', '2 years'),
('shalini1', 'nehagnkcw@gmail.com', 'php', 'ludhiana', '25000 per month', 'mca', '2 years');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `know_from` varchar(100) NOT NULL,
  `Comment` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Sno`, `Name`, `Email`, `know_from`, `Comment`) VALUES
(1, 'rajvir', 'r@gmail.com', 'jjjj', 'nbcbvjhf'),
(2, 'neha', 'nehagnkcw@gmail.com', 'advertisment', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `continue1`
--

CREATE TABLE `continue1` (
  `std_type` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `hight_qualification` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `collage` varchar(100) NOT NULL,
  `course_type` varchar(100) NOT NULL,
  `passing_year` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continue1`
--

INSERT INTO `continue1` (`std_type`, `Email_id`, `hight_qualification`, `course`, `specialization`, `collage`, `course_type`, `passing_year`, `skills`) VALUES
('fresher', 'nehagnkcw@gmail.com', 'master/post-graduation', 'bca', 'php', 'Lovely professional University', 'Full Time', 2010, 'php,css,html,javascript'),
('professional', 'neha@gmail.com', 'master/post-graduation', 'bca', 'php', 'Lovely professional University', 'Full Time', 2010, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Sno` int(11) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Sno`, `Email_id`, `Comment`) VALUES
(1, 'nehagnkcw@gmail.com', 'try your best'),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, 'nehagnkcw123@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `fresher`
--

CREATE TABLE `fresher` (
  `Reg_no` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `chk_qus` varchar(300) NOT NULL,
  `chk_ans` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Current_location` varchar(100) NOT NULL,
  `Upload_resume` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fresher`
--

INSERT INTO `fresher` (`Reg_no`, `Name`, `Email_id`, `chk_qus`, `chk_ans`, `Password`, `Mobile_no`, `Current_location`, `Upload_resume`) VALUES
(8, 'neha', 'nehagnkcw@gmail.com', 'What is your favourite color ?', 'black', 'nehaprab', 45678952, 'punjab', 'img/nehacv1.doc'),
(9, 'MEENA', 'MEENA@gmail.com', 'What is your favourite color ?', 'YELLOW', 'MEENA', 2147483647, 'Delhi', 'img/marchProgressReport.docx'),
(10, 'SHEELA', 'Sheela@gmail.com', 'What is your favourite color ?', 'pink', 'sheela', 2147483647, 'jalandhar', 'img/nehacv1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `myadmin`
--

CREATE TABLE `myadmin` (
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myadmin`
--

INSERT INTO `myadmin` (`Name`, `Username`, `Password`) VALUES
('neha1', 'neha123@gmail.com', 'nehaprab'),
('neha123', 'neha@gmail.com', 'neha123'),
('nehaneha', 'nehagnkcw123@gmail.com', 'neha'),
('neha', 'nehagnkcw@gmail.com', 'neha1703'),
('shalni', 'shalinipatyal16@gmail.com', 'shalinipatyal');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `Reg_no` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `chk_qus` varchar(300) NOT NULL,
  `chk_ans` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Current_location` varchar(100) NOT NULL,
  `Work_years` int(11) NOT NULL,
  `Work_montha` int(11) NOT NULL,
  `Upload_resume` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`Reg_no`, `Name`, `Email_id`, `chk_qus`, `chk_ans`, `Password`, `Mobile_no`, `Current_location`, `Work_years`, `Work_montha`, `Upload_resume`) VALUES
(1, 'neha', 'nehagnkcw@gmail.com', '', '', 'nehaashiash', 2147483647, 'Mumbai', 3, 2, 'img/neha cv.doc'),
(2, 'neha', 'neha@gmail.com', '', '', '123456', 1254639874, 'Delhi', 3, 2, 'img/nehasnopsis.docx'),
(4, 'bcyygu8y8', 'nehagn45@gmail.com', '', '', 'nehaashiash', 2147483647, 'Delhi', 7, 2, 'img/nehasnopsis.docx'),
(6, 'bkhoj', 'nehagnw@gmail.com', '', '', 'nehaashiash', 1358994545, 'Delhi', 4, 2, 'img/nehasnopsis.docx'),
(8, 'bkuu8o', 'negnkcw@gmail.com', '', '', 'nehaashiash', 2147483647, 'Delhi', 2, 3, 'img/nehasnopsis.docx'),
(9, 'bfdyt76', 'nehagw@gmail.com', '', '', 'cfsewtiuuuo', 2147483647, 'mohali', 8, 5, 'img/nehacv1.doc'),
(10, 'vciou', 'nehmnmjjkcw@gmail.com', '', '', '', 2147483647, 'punjab', 5, 4, 'img/marchProgressReport.docx'),
(11, 'vgkiuil', 'nebvvh@gmail.com', '', '', '', 2147483647, 'Delhi', 9, 10, 'img/marchProgressReport.docx'),
(12, 'abc', 'abc@gmail.com', 'What is your nick name?', 'polo', 'neha123', 1463257946, 'Delhi', 0, 0, 'img/nehacv1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `qus_fresher`
--

CREATE TABLE `qus_fresher` (
  `Reg_no` int(11) NOT NULL,
  `about_yourself` varchar(500) NOT NULL,
  `job_title` varchar(500) NOT NULL,
  `work_in_team` varchar(500) NOT NULL,
  `other_cant` varchar(500) NOT NULL,
  `yourself_in_5years` varchar(500) NOT NULL,
  `why_hire_you` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qus_fresher`
--

INSERT INTO `qus_fresher` (`Reg_no`, `about_yourself`, `job_title`, `work_in_team`, `other_cant`, `yourself_in_5years`, `why_hire_you`) VALUES
(1, 'i am neha a software developer', 'developer', 'YES', 'better work', 'hight profile', ' because i love my  work'),
(2, 'neha from ludhiana', 'php', 'YES', 'i will done my work perfectly or within time', 'professional web developer', 'because i love my work and i always try to done my work with perfection'),
(3, 'GHFYUT7', 'MBIKY8OUP98', 'YES', 'BHOU0', 'JHOU9PU988NX', 'JHUY98707'),
(4, 'bjhguhoiuy87', 'nnkup9u89p', 'YES', 'jkhiu9u988i', 'khhouihiuhjk', 'nbuoii0990');

-- --------------------------------------------------------

--
-- Table structure for table `qus_professional`
--

CREATE TABLE `qus_professional` (
  `Reg_no` int(11) NOT NULL,
  `about_yourself` varchar(500) NOT NULL,
  `why_work_here` varchar(500) NOT NULL,
  `why_leave_lastjob` varchar(500) NOT NULL,
  `work_enviroment` varchar(500) NOT NULL,
  `possitive_things` varchar(500) NOT NULL,
  `why_hire_you` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qus_professional`
--

INSERT INTO `qus_professional` (`Reg_no`, `about_yourself`, `why_work_here`, `why_leave_lastjob`, `work_enviroment`, `possitive_things`, `why_hire_you`) VALUES
(0, 'hvytf', 'nffit', 'y7iy76', 'giuy97', 'moh', 'k8u89');

-- --------------------------------------------------------

--
-- Table structure for table `std_register`
--

CREATE TABLE `std_register` (
  `Reg_no` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewregister`
--

CREATE TABLE `viewregister` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewregister`
--

INSERT INTO `viewregister` (`id`, `Name`, `Email_id`) VALUES
(5, 'neha', 'nehagnkcw@gmail.com'),
(7, 'neha', 'abc@gmail.com'),
(8, '', ''),
(12, 'neha123', 'neha123@gmail.com'),
(14, 'neha123', 'neha@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comany`
--
ALTER TABLE `comany`
  ADD PRIMARY KEY (`Reg_no`),
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- Indexes for table `companyjob`
--
ALTER TABLE `companyjob`
  ADD PRIMARY KEY (`Company_name`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Sno`),
  ADD KEY `Sno` (`Sno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `fresher`
--
ALTER TABLE `fresher`
  ADD PRIMARY KEY (`Reg_no`),
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- Indexes for table `myadmin`
--
ALTER TABLE `myadmin`
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Username_2` (`Username`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`Reg_no`),
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- Indexes for table `qus_fresher`
--
ALTER TABLE `qus_fresher`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `viewregister`
--
ALTER TABLE `viewregister`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comany`
--
ALTER TABLE `comany`
  MODIFY `Reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fresher`
--
ALTER TABLE `fresher`
  MODIFY `Reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `Reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `qus_fresher`
--
ALTER TABLE `qus_fresher`
  MODIFY `Reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `viewregister`
--
ALTER TABLE `viewregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
