-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 07:29 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_setup`
--

CREATE TABLE `aboutus_setup` (
  `id` int(11) NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `longdesc` text NOT NULL,
  `website` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus_setup`
--

INSERT INTO `aboutus_setup` (`id`, `shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`, `faculty_id`) VALUES
(1, 'Hello! I am Dhananjay Kr. Singh Assistance Professor at United Group Of Institutions . I have the 12+ year experience in teaching profession and 2.5+ year working experience in corporate section.', 'Assistant Professor (U.I.M.) Allhabad', 'I have the 12+ year experience in teaching profession and 2.5+ year working experience in corporate section.', 'I did Qualified UGC-NET in Computer Science and Application for Assistant Professor. To work in academic environment, so that it provide me ample of opportunities to enhance my skills and to make significant contribution to the Institute. ', 'https://www.devninja.com', '## - ## - ####', 2),
(2, 'fgddgdrdrg mishra', 'Assistant Professor (U.I.M.) Allhabad', 'I have the 12+ year experience in teaching profession and 2.5+ year working experience in corporate section.', '    ddddddddddddddddddddddddddddddddbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb    ', 'nbnbnbnbn', '## - ## - ####', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_access` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `user_id`, `user_pass`, `user_access`) VALUES
(1, 'dhananjay kumar singh', 'dhananjay.djsoft@gmail.com', '123456', 1),
(2, 'dhananjay kumar singh', 'dhananjay.djsoft@gmail.com', '123456', 1),
(4, 'dhananjay kumar singh', 'dhananjay.djsoft@gmail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `basic_setup`
--

CREATE TABLE `basic_setup` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `keyword` text NOT NULL,
  `icon` varchar(250) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_setup`
--

INSERT INTO `basic_setup` (`id`, `title`, `description`, `keyword`, `icon`, `faculty_id`) VALUES
(1, 'Dhananjay Kumar ', 'I''m Assistant Professor in  United Institute of Management (Allahabad)', 'Assistant Professor ji', 'icons8-computer-support-64.png', 2),
(3, 'Manish Mishra', 'Manish Mishra', 'Web Devloper', 'IMG20210505171510.jpg', 4),
(4, 'dh', 'web devloper.app', 'mmmmmm', 'IMG20210505171510.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `csubject` text NOT NULL,
  `cmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `cname`, `cemail`, `csubject`, `cmessage`) VALUES
(16, 'Shubham Seth', 'ristar@gmail.com', 'Partnership', 'i want to work with you , please contact me on my personal mobile no\r\nat <strong>7838403916</strong>'),
(17, 'Sukriti Seth', 'sukriti46737@gmail.com', 'Complaint', 'i used your service but i dont like it you are worst servoces provider ever i am gonna sue you on fedral court and you have to pay a very big ammount to me becayuse of you i loss 20000 million dollars and you provide the worst service u have ever.'),
(18, 'Narayan mishra', 'narayanmanish333@gmail.com', 'my issue', 'good morning'),
(19, 'Narayan mishra', 'narayanmanish333@gmail.com', 'fdfzcczccz', 'mkmkm'),
(20, 'Narayan mishra', 'narayanmanish333@gmail.com', 'my issue', 'mmnmm'),
(21, 'Narayan mishra', 'narayanmanish333@gmail.com', 'my issue', 'xvxvxc'),
(22, 'Narayan mishra', 'narayanmanish333@gmail.com', 'fdfzcczccz', 'jijji'),
(23, 'Narayan mishra', 'narayanmanish333@gmail.com', 'fdfzcczccz', 'jijji'),
(24, 'Narayan mishra', 'narayanmanish333@gmail.com', 'fdfzcczccz', 'jijji'),
(25, 'Narayan mishra', 'narayanmanish333@gmail.com', 'my issue', 'Good eving sir'),
(26, 'narayan Mishra', 'narayanmanish333@gmail.com', 'my message', 'good evening\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `even_sem`
--

CREATE TABLE `even_sem` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `sub_code` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `unit_ppt` varchar(200) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `even_sem`
--

INSERT INTO `even_sem` (`id`, `course`, `semester`, `subject_name`, `sub_code`, `unit`, `unit_ppt`, `faculty_id`) VALUES
(1, 'MCA', 'II', 'Narayan', '121211', 'II', 'ShagunNigam_Aptitude (1).pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_setup`
--

CREATE TABLE `personal_setup` (
  `id` int(11) NOT NULL,
  `profilepic` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `skype` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `homewallpaper` varchar(200) NOT NULL,
  `professions` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_setup`
--

INSERT INTO `personal_setup` (`id`, `profilepic`, `name`, `twitter`, `facebook`, `instagram`, `skype`, `linkedin`, `github`, `homewallpaper`, `professions`, `location`, `mobile`, `emailid`, `faculty_id`) VALUES
(1, 'n2.jpg', 'Dhananjay Kumar Singh ', '', 'https://www.facebook.com/oyeitsmg', 'https://www.instagram.com/oyeitsmg', '@oyeitsmg', 'https://in.linkedin.com/in/whomonugiri', 'https://github.com/whomonugiri/', 'uim-ald.jpg', 'Assistant Professor', 'C-537 Mahavir Enclave Part 3, Street No 45 New Delhi 110059', '+917548935467', 'dhananjay.djsoft@gmail.com', 2),
(2, 'backblue.gif', 'Narayan mishra', 'vbb', 'bnbnbnbn', 'nbnbnbn', 'ghghgh', 'hfhh', 'hhgh', 'IMG20201126132115.jpg', '', 'Sarai akil', '08299608270', 'narayanmanish333@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `projectpic` varchar(250) NOT NULL,
  `projectlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `projectname`, `projectpic`, `projectlink`) VALUES
(8, '', 'portfolio-1.jpg', '#'),
(9, '', 'portfolio-2.jpg', '#'),
(10, '', 'portfolio-3.jpg', '#'),
(11, '', 'portfolio-6.jpg', ''),
(12, '', 'portfolio-6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `ogname` varchar(250) NOT NULL,
  `workdesc` text NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `category`, `title`, `year`, `ogname`, `workdesc`, `faculty_id`) VALUES
(10, 'pe', 'ACADEMIC-12+ YEARS & INDUSTRY- 2.5 YEARS', '01-08-2009.', 'Qualified UGC-NET in Computer Science and Application for Assistant Professor.', 'Academic :\r\nWorking as an Assistant Professor, in United Institute of Management, Prayagraj since 01-08-2009.\r\nIndustry\r\n1.5 years worked as an Officer-Technology in Times Business Solution Limited, Noida.\r\n1 year worked as a Programmer for client, National Informatics Centre, New Delhi by IAP Company Limited, Gurgaon.', 2),
(11, 'e', 'PURSUING PHD', '2019 - ongoging', 'GLA University ,Mathura', 'I am Pursuing Doctor of Philosophy from GLA University since 2019 in Computer Science', 2),
(12, 'e', 'MASTER IN TECHNOLOGY(IT)', '2012 - 2014', 'karnatka State open University ,Mysore', 'I did completed my post Graduation in IT in 2012 from karnatka State open University ,Mysore .', 2),
(13, 'pe', 'ACADEMIC ACHEIVEMENTS', 'June 07-11, 2013', 'Case Study Methods & Techniquesâ€ organized by School of Management Studies, MNNIT Allahabad', 'Attempt the short-term training program on â€œCase Study Methods & Techniquesâ€ organized by School of Management Studies, MNNIT Allahabad on June 07-11, 2013.\r\nPresented a paper titled â€œImplementing strategies through restructuring and re-engineering the company structureâ€ in the National Seminar on â€œBusiness Restructuring: Creating Values in Global Eraâ€ on 13th April 2012 in United Institute of Management, Allahabad.\r\nParticipated in faculty development program on the topic â€œMethodology and Approach for Delivery of Case Studiesâ€ at United Institute of Management, Allahabad on 20th September 2010', 2),
(17, 'e', 'yutut fgfgfg', '2023', 'uty dffdfdff', 'tutuu mhjhhj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(250) NOT NULL,
  `score` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `score`) VALUES
(12, 'HTML', '100'),
(13, 'CSS', '90'),
(14, 'PHP', '75'),
(15, 'MYSQL', '75'),
(16, 'Javascript', '60'),
(17, 'Photoshop', '70'),
(18, 'Bootstrap', '50');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `userq` varchar(250) NOT NULL,
  `userv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `userq`, `userv`) VALUES
(1, 'Birthday', '14 July,1999'),
(2, 'Age', '21'),
(3, 'Website', 'www.monugiri.com'),
(4, 'Degree', 'Bachelors Degree'),
(5, 'Mobile', '+917838403916'),
(6, 'Email', 'whomonugiri@gmail.com'),
(7, 'City', 'New Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_setup`
--
ALTER TABLE `aboutus_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_setup`
--
ALTER TABLE `basic_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `even_sem`
--
ALTER TABLE `even_sem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_setup`
--
ALTER TABLE `personal_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus_setup`
--
ALTER TABLE `aboutus_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `basic_setup`
--
ALTER TABLE `basic_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `even_sem`
--
ALTER TABLE `even_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `personal_setup`
--
ALTER TABLE `personal_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
