-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 02:13 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_project`
--
DROP DATABASE IF EXISTS dbms_project;
CREATE DATABASE IF NOT EXISTS dbms_project;
USE dbms_project;
-- --------------------------------------------------------

--
-- Table structure for table `blocked_words`
--

CREATE TABLE `blocked_words` (
  `word` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocked_words`
--

INSERT INTO `blocked_words` (`word`) VALUES
('damn'),
('yo'),
('bloody'),
('ass'),
('crap'),
('goddamn'),
('lmao'),
('nigga'),
('wtf');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_posts`
--

CREATE TABLE `hotel_posts` (
  `id` int(11) NOT NULL,
  `managername` varchar(10) DEFAULT NULL,
  `hname` varchar(100) DEFAULT NULL,
  `haddr` varchar(50) DEFAULT NULL,
  `hdesc` varchar(500) DEFAULT NULL,
  `hrent` int(11) DEFAULT NULL,
  `hmeals` varchar(150) DEFAULT NULL,
  `hfeatures` varchar(150) DEFAULT NULL,
  `hnum` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_posts`
--

INSERT INTO `hotel_posts` (`id`, `managername`, `hname`, `haddr`, `hdesc`, `hrent`, `hmeals`, `hfeatures`, `hnum`) VALUES
(7, 'Alam', 'aaa', 'Dhanmondi', 'asmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hnajimasmanagername, hn', 4500, 'beef rice chicken veg milk', 'wifi', '11155555555'),
(8, 'Alam', 'yo yo host', 'Chittagong', 'aaa', 4500, 'beef rice chicken', 'wifi clean-air calm-environment', '121212121212'),
(9, 'Alam', 'Bismillah ', 'aaaa', 'a', 6544, 'beef rice chicken', 'wifi clean-air calm-environment', '4'),
(10, 'Alam', 'paradise', '131313asas', 'n', 7000, 'beef rice chicken', 'wifi clean-air calm-environment', '44444'),
(11, 'Alam', 'Bismillah ', 'aaaa', 'a', 6544, 'beef rice chicken', 'wifi clean-air calm-environment', '4'),
(12, 'Alam', 'new modern', 'Dhanmondi', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 6000, 'beef rice chicken', 'wifi', '10000'),
(13, 'Alam', 'aaa', 'Dhanmondi', 'as', 4500, 'beef rice chicken veg milk', 'wifi', '11178787878787878787'),
(14, 'Alam', 'aaa', 'Dhanmondi', 'asjkjk', 4500, 'beef rice chicken veg milk', 'wifi', '111'),
(15, 'Alam', 'aaa', '13', '', 4500, 'beef rice chicken', 'wifi clean-air calm-environment', '67676767'),
(16, 'Jim', 'new science', 'Dhanmondi', 'khuub valo hostel\r\nkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostel\r\nkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostel\r\nkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelkhuub valo hostelk', 7800, 'beef rice chicken veg milk', 'wifi clean-air calm-environment', '156455645'),
(18, 'Jim', 'paradise science hostel', '13/c, dhanmodi, Dhaka', 'khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub sundor hotel khuub ', 6500, 'beef rice chicken veg milk', 'wifi clean-air calm-environment', '123456789'),
(19, 'kim', 'Hostel 5 star', '45/d, Uttora, Dhaka', 'khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor khuub sundor ', 12000, 'beef rice chicken veg milk', 'wifi clean-air calm-environment', '456789123'),
(20, 'Jim', 'new hostel', 'badda, dhaka', 'khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub sundor vkhub sundor khub sundor khub sundor khub sundor khub sundor khub sundor khub su', 4500, 'beef rice chicken', 'wifi clean-air calm-environment', '45454545');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `pass`) VALUES
(1, 'Jim', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(2, 'Alam', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(3, 'Ashiq', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(4, 'Ashiqur', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(5, 'Aqib', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(6, 'Arif', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(7, 'Rahat', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(8, 'kim', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(9, 'jong', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(10, 'unn', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(11, 'Donald', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_posts`
--
ALTER TABLE `hotel_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_posts`
--
ALTER TABLE `hotel_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
