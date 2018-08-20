-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 01:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(2, 'admin', 'admin', 'Federex', 'Potolin'),
(3, 'admin1', 'admin1', 'Jerik', 'Aguilar'),
(5, 'admin2', 'admin2', 'Maria Jose', 'Fermin'),
(12, 'qwerty', 'qwerty', 'qwerty', 'qweryt');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `category_id` int(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_copies` int(11) NOT NULL,
  `book_pub` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `date_receive` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category_id`, `author`, `book_copies`, `book_pub`, `publisher_name`, `isbn`, `copyright_year`, `date_receive`, `date_added`, `status`) VALUES
(15, 'High Performance MySQL', 1, 'Robin Kerrod', 15, 'Marshall Cavendish Corporation', 'Marshall', '1-85435-628-3', 1997, '', '2016-10-10 21:44:27', 'Archive'),
(16, 'Database Connection', 1, 'Grolier', 20, 'Connecticut', 'Grolier Incorporation', '0-7172-0119-8', 1988, '', '2016-10-10 21:36:23', 'Archive'),
(17, 'Computer Programming Language ', 2, 'Carolyn Bradshaw, Michael Seals', 35, 'Pearson Education, Inc', 'Prentice Hall, New Jersey', '0-13-125087-6', 2004, '', '2016-10-10 21:39:17', 'Archive'),
(18, 'Computer Principle and Theory', 5, '..', 3, 'Pasay City', '..', '..', 2016, '', '2016-10-10 21:41:53', 'Archive'),
(19, 'Professional PHP Programming', 1, 'Brian Knapp', 3, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 1996, '', '2016-10-10 21:44:44', 'Subject for Replacement'),
(20, 'Intro to System Programming', 2, 'Greg Glowka', 5, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 2001, '', '2016-12-11 21:55:44', 'Old'),
(21, 'Software Development', 2, 'Lexicon', 3, 'Lexicon Publication', 'Pulication Inc., Lexicon', '0-7172-2043-5', 1993, '', '2016-10-10 21:49:53', 'Old'),
(22, 'Memory Card Assembly', 5, 'Clarke Donald, Dartford Mark', 16, 'H.S. Stuttman inc. Publishing', 'Publisher , Westport Connecticut', '0-87475-450', 1992, '', '2016-10-10 21:52:58', 'New'),
(23, 'Microprocessor', 5, 'Merde C. Tan', 2, 'Vibal Publishing House Inc.', '12536. Araneta Avenue Corner Ma. Clara St., Quezon', '971-570-124-8', 2009, '', '2016-10-10 21:58:27', 'Lost'),
(24, 'Fundamental to RDBMS', 1, 'Glencoe McGraw Hill', 15, 'The McGrawHill Companies Inc.', 'McGrawhill', '978-007-8733', 2008, '', '2016-10-10 21:57:35', 'New'),
(25, 'Design Pattern in Java', 2, 'Lorenza P. Avera', 2, 'JGM & S Corporation', 'JGM & S Corporation', '971-07-1574-7', 2000, '', '2016-10-10 21:59:24', 'Damage'),
(26, 'Basic MObile Application', 2, 'Virginia Bermudez Ed. O. et al', 1, 'SD Publications, Inc.', 'Gregorio Araneta Avenue, Quezon City', '978-971-0315-3', 2007, '', '2016-10-10 21:01:25', 'Lost'),
(27, 'Art of Java Web Devvelopment', 4, 'Ricardo T. Jose, Ph . D.', 21, 'Vibal Publishing House Inc.', 'Araneta Avenue . Cor. Maria Clara St., Quezon City', '971-07-2324-3', 2008, '', '2016-10-10 21:02:56', 'New'),
(28, 'Build your own Website', 4, 'Glencoe McGraw Hill', 2, '..', 'the McGrawHill Companies Inc', '0-02-817934', 2001, '', '2016-10-10 20:05:25', 'Damage'),
(29, 'MySQL Database and Web Development', 4, 'Toni Morrison', 3, '..', 'Alfred A. Knoff, Inc', '0-394-53597-9', 1987, '', '2016-10-10 21:07:02', 'Old'),
(30, 'Java Best Practices', 2, 'Judy Brim', 1, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, '', '2016-10-10 21:22:50', 'Lost'),
(31, 'Java Keyword Reference', 2, 'Douglas K. Ramsey', 1, 'Houghton Miffin Company', '..', '0-395-35487-0', 1987, '', '2016-10-10 09:25:32', 'Old'),
(32, 'Introduction to Information System', 1, 'Cristine Redoblo', 10, 'CHMSC', 'Brian INC', '123-15252-22', 2013, '', '2016-10-10 19:00:10', 'New'),
(36, 'Java Programming', 2, 'Deitel P.J.', 15, 'Deitel Publishing', 'Deitel Corp', '312312-5252', 2014, '', '2016-10-09 22:13:31', 'New'),
(37, 'Modern Database Management', 1, 'JeffreyA. Hoffer', 20, 'Prentice Hall', 'Prentice Corp', '452-52979', 2016, '', '2016-10-09 22:16:22', 'New'),
(38, 'Fundamentals of Logic Design', 3, 'Mano Arturo', 20, 'Marshall Cavendish Corporation', 'Marshall', '3131-313126', 2010, '', '2016-10-09 22:29:56', 'New'),
(39, 'Engineering Digital Design', 3, 'caroly Bradsaw', 20, 'Pearson Education Inc.', 'Prentice Corp', '3131-55255', 2011, '', '2016-10-09 22:31:32', 'New'),
(40, 'Understanding Digital Computers', 3, 'Connecticu', 20, 'Groiler Inc.', 'Groiler', '2313-56576', 2010, '', '2016-10-09 22:32:57', 'New'),
(41, 'Logical Database Design', 1, 'Regency Knapp', 20, 'Groiler Inc.', 'Lexicon', '3131-5636565', 2011, '', '2016-10-09 22:34:47', 'New'),
(42, 'Object Oriented Database', 1, 'Lexi', 20, 'Lexicon Corp.', 'Publication Inc. Lexicon', '55-67477-55', 2013, '', '2016-10-09 22:36:40', 'New'),
(43, 'Data and Database Administration', 1, 'Clarke Donald', 20, 'HS Stuffman Publishing', 'Publisher Westcoast', '31315-65-656', 2015, '', '2016-10-09 22:38:43', 'New'),
(44, 'Client Server Database Environment', 1, 'Greg Glowka', 4, 'Vibal Publishing', 'Araneta Aveneu', '653-998-44', 2011, '', '2016-10-09 22:41:06', 'Old'),
(45, 'Java 60 Minutes a Day', 2, 'Reggie Alonzo', 20, 'Head First Publication', 'Head First', '24-626264-33', 2011, '', '2016-10-09 22:43:38', 'New'),
(46, 'Java the Complete References', 2, 'Merder C Tan', 20, 'Vibal Publishing', 'Araneta Aveneu', '342-654654', 2010, '', '2016-10-09 22:45:15', 'New'),
(47, 'Advance Java Programming', 2, 'Glencoe McGraww Hill', 20, 'Silver Burdett Company', 'Silver', '55-74575-4', 2010, '', '2016-10-09 22:47:06', 'New'),
(48, 'Object Oriented Pogramming', 2, 'Sam', 20, 'Sam Teach Yourself ', 'Sams Publisher', '343-63637-5', 2015, '', '2016-10-09 22:50:46', 'New'),
(49, 'Java Fundamental', 2, 'Jedi', 20, 'Oracle Corp', 'Oracle', '3131-25453', 2013, '', '2016-10-09 22:52:08', 'New'),
(50, 'Master Book for Adobe Master Collection', 6, 'Douglas K. Ramzzy', 20, 'Hougthon Mifffin Company', 'Houghthon', '525-474646', 2013, '', '2016-10-09 22:54:29', 'New'),
(51, 'Multimedia Manipulation', 6, 'Cristine Redolbo', 20, 'CHSMC Inc.', 'CHSMC', '354-353-33-5', 2011, '', '2016-10-09 22:55:51', 'New'),
(52, 'Operating Sysytem Concepts', 7, 'Deitel Hogwarrt', 20, 'Deitel P.J.Inc.', 'Deitel P.J. Publisher', '36-5556485', 2010, '', '2016-10-09 22:57:41', 'New'),
(53, 'Let know Operating System', 7, 'Maria Leonora Teresa', 20, 'Canlas Inc', 'Canlas Book Publisher', '6-424326-45', 2009, '', '2016-10-09 22:59:24', 'New'),
(54, 'Troubleshooting and Maintenance Guide', 5, 'Abraham Davidson', 20, 'Prentice Hall', 'Prentice Corp', '4242-645744', 2015, '', '2016-10-09 23:00:31', 'New'),
(55, 'Hardware and Software Upgrading and Maintenance', 5, 'Ricardo T. Jose Ph.D', 20, 'McGrawHill Company', 'McGrawHill', '635-7677-333', 2016, '', '2016-10-09 23:02:22', 'New'),
(56, 'Dreamweaver 8 Advance', 4, 'Maria Jose Fermin Ph.D', 20, 'MatalinoPublisher', 'Matalino Inc.', '43-65654643', 2011, '', '2016-10-09 23:05:02', 'New'),
(57, 'Dynamic Website', 4, 'Judy Brim Ph.d', 20, 'Silver Burdett Company', 'Silver', '252-6773-45', 2014, '', '2016-10-09 23:06:22', 'New'),
(58, 'HTML, CSS, JavaScript, PHP', 4, 'Sam Group', 20, 'Sam Teach Yourself ', 'Sams Publisher', '52542-2565', 2014, '', '2016-10-09 23:08:21', 'New'),
(59, 'Web Master', 4, 'Mark Pilgrim', 20, 'Hogan Pragmatic Inc', 'Hogan', '636-76765', 2013, '', '2016-10-09 23:09:45', 'New'),
(60, 'Microprocessor', 5, 'Merde C. Tan', 18, 'Vibal Publishing House Inc.', '12536. Araneta Avenue Corner, Ma. Clara St., Quezo', '971-570-124-8', 2009, '', '2016-10-12 16:55:10', 'New'),
(61, 'Basic Mobile Application', 2, 'Virginia Bermudez Ed. O. et al', 18, 'SD Publications, Inc.', 'Gregorio Araneta Aveneu, Quezon City', '978-971-0315-3', 2007, '', '2016-10-12 17:47:07', 'New'),
(62, 'Intro to System Programming', 2, 'Greg Glowka', 5, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 2001, '', '2016-12-11 21:55:44', 'New'),
(63, 'Software Development', 2, 'Lexicon', 17, 'Lexicon Publication', 'Pulication Inc., Lexicon', '0-7172-2043-5', 1993, '', '2016-10-10 21:49:53', 'New'),
(64, 'MySQL Database and Web Development', 4, 'Toni Morrison', 10, '..', 'Alfred A. Knoff, Inc', '0-394-53597-9', 1987, '', '2016-10-10 21:07:02', 'New'),
(65, 'Java Keyword Reference', 2, 'Douglas K. Ramsey', 6, 'Houghton Miffin Company', '..', '0-395-35487-0', 1987, '', '2016-10-10 09:25:32', 'New'),
(66, 'Client Server Database Environment', 1, 'Greg Glowka', 16, 'Vibal Publishing', 'Araneta Aveneu', '653-998-44', 2011, '', '2016-10-09 22:41:06', 'New'),
(67, 'Java Best Practices', 2, 'Judy Brim', 5, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, '', '2016-10-10 21:22:50', 'Old'),
(68, 'Java Best Practices', 2, 'Judy Brim', 6, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, '', '2016-10-10 21:22:50', 'New'),
(69, 'Java Best Practices', 2, 'Judy Brim', 1, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, '', '2016-10-10 21:22:50', 'Damage'),
(70, 'Java Best Practices', 2, 'Judy Brim', 1, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, '', '2016-10-10 21:22:50', 'Subject for Replacement'),
(73, 'Professional PHP Programming', 1, 'Brian Knapp', 17, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 1996, '', '2016-10-10 21:44:44', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` varchar(50) NOT NULL,
  `due_date` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrow`, `due_date`) VALUES
(492, 58, '2016-10-10 17:51:33', '13/10/2016'),
(491, 54, '2016-10-10 17:51:06', '12/10/2016'),
(490, 53, '2016-10-10 17:50:54', '11/10/2016'),
(489, 52, '2016-10-10 17:50:42', '12/10/2016'),
(493, 60, '2016-10-10 17:52:19', '14/10/2016'),
(494, 60, '2016-10-10 17:52:41', '11/10/2016'),
(495, 59, '2016-10-10 17:53:10', '11/10/2016'),
(496, 62, '2016-10-10 17:53:30', '11/10/2016'),
(497, 63, '2016-10-10 17:53:51', '11/10/2016'),
(498, 53, '2016-10-10 18:03:05', '11/10/2016'),
(499, 58, '2016-10-10 19:39:58', '12/10/2016'),
(500, 58, '2016-10-11 15:13:19', '12/10/2016'),
(501, 52, '2016-10-12 14:21:50', '13/10/2016'),
(502, 62, '2016-10-12 19:09:40', '13/10/2016');

-- --------------------------------------------------------

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE `borrowdetails` (
  `borrow_details_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowdetails`
--

INSERT INTO `borrowdetails` (`borrow_details_id`, `book_id`, `borrow_id`, `borrow_status`, `date_return`) VALUES
(175, 26, 494, 'returned', '2016-10-12 17:48:13'),
(174, 24, 493, 'returned', '2016-10-10 17:54:11'),
(173, 23, 492, 'returned', '2016-10-12 17:49:12'),
(172, 20, 491, 'returned', '2016-10-12 17:49:41'),
(171, 19, 490, 'returned', '2016-10-12 17:49:33'),
(170, 18, 489, 'returned', '2016-10-12 17:49:26'),
(176, 27, 495, 'returned', '2016-10-12 17:49:04'),
(177, 29, 496, 'returned', '2016-10-10 17:54:06'),
(178, 42, 497, 'returned', '2016-10-10 17:54:02'),
(179, 18, 498, 'returned', '2016-10-10 18:04:47'),
(180, 19, 498, 'returned', '2016-10-12 17:48:58'),
(181, 20, 498, 'returned', '2016-10-12 17:48:51'),
(182, 19, 499, 'returned', '2016-10-12 17:48:41'),
(183, 20, 499, 'returned', '2016-10-12 17:48:24'),
(184, 37, 499, 'returned', '2016-10-12 17:48:34'),
(185, 25, 500, 'returned', '2016-10-11 15:14:27'),
(186, 27, 500, 'returned', '2016-10-12 01:41:36'),
(187, 30, 500, 'returned', '2016-10-12 17:48:20'),
(188, 18, 501, 'returned', '2016-10-12 14:22:24'),
(189, 19, 501, 'returned', '2016-10-12 14:22:29'),
(190, 32, 502, 'returned', '2016-10-12 19:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'Database Management System'),
(2, 'Procedural Programming'),
(3, 'Digital Design'),
(4, 'Web Development'),
(5, 'PC Troubleshooting'),
(6, 'Multimedia System'),
(7, 'Operating System');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `YearLevel` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `type`, `YearLevel`, `Department`, `status`) VALUES
(52, 'Mark', 'Nunag', 'Male', 'Quezon Ave', '09238388607', 'Teacher', '', 'BSIT', 'Active'),
(53, 'Jereckson', 'Aguilar', 'Male', 'Batasan, QC', '09448388607', 'Student', 'Second', '', 'Banned'),
(54, 'Aljon', 'Alluso', 'Male', 'San Francisco', '09225254252', 'Student', 'First', '', 'Active'),
(55, 'Michael John', 'Sabado', 'Male', 'Holy Cross, Novaliches, QC', '09224532423', 'Teacher', '', 'BSEcE', 'Active'),
(56, 'Mark Edison', 'San Pedro', 'Male', 'Payatas, QC', '09094423303', 'Student', 'Third', '', 'Active'),
(57, 'Aldrin', 'Ferrer', 'Male', 'Fairview', '09090777642', 'Student', 'Second', '', 'Active'),
(58, 'Veronica', 'Pacot', 'Female', 'Commonwealth', '09090424242', 'Student', 'Third Year', '', 'Active'),
(59, 'Danise', 'Balasta', 'Female', 'RP, Nova, QC', '09008776554', 'Student', 'Third Year', '', 'Active'),
(60, 'Carla', 'Bautista', 'Female', 'Commonwealth, QC', '09765656565', 'Student', 'Third Year', '', 'Active'),
(62, 'Analita', 'Boligor', 'Female', 'San Bartolome', '09091242355', 'Teacher', '', 'BSEcE', 'Active'),
(63, 'Mary Ann', 'Dela Rosa', 'Female', 'Sangandaan, QC', '90909090909', 'Student', 'Third Year', '', 'Active'),
(64, 'Anne', 'Macam', 'Female', 'Commonwealth,  QC', '09090766565', 'Teacher', '', 'BSIT', 'Active'),
(65, 'Joyce', 'Vallesta', 'Female', 'Payatas, QC', '09150909870', 'Teacher', '', 'BSIE', 'Active'),
(71, 'Jayson', 'Martinez', 'Male', 'Litex, Commonwealth', '09096667755', 'Student', 'Third Year', '', 'Banned'),
(72, 'Jay Jay', 'Sanipa', 'Male', 'Don Antonio, QC', '09043433443', 'Student', 'Third Year', '', 'Banned'),
(73, 'Jonalyn', 'Tababa', 'Female', 'Fairview', '09533367799', 'Student', 'First Year', '', 'Active'),
(74, 'Kristine', 'Capacia', 'Female', 'Maharlika Fairview', '09555677777', 'Student', 'First Year', '', 'Banned'),
(75, 'John Joseph', 'Shiina', 'Male', 'Litex, Commonwealth', '09090966900', 'Student', 'Fourth Year', '', 'Active'),
(76, 'Vincent', 'Yamson', 'Male', 'San Bartolome', '09875433678', 'Teacher', '', 'BSIT', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `borrowertype` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `borrowertype`) VALUES
(2, 'Teacher'),
(20, 'Employee'),
(21, 'Non-Teaching'),
(22, 'Student'),
(32, 'Contruction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `borrowerid` (`member_id`),
  ADD KEY `borrowid` (`borrow_id`);

--
-- Indexes for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  ADD PRIMARY KEY (`borrow_details_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `classid` (`category_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowertype` (`borrowertype`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;
--
-- AUTO_INCREMENT for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  MODIFY `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
