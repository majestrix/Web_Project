-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2019 at 08:05 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c59_Noodles`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `activity id` int(11) NOT NULL,
  `activity` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activity id`, `activity`) VALUES
(1, 'swimming'),
(2, 'racing'),
(4, 'climbing'),
(5, 'frisbe golf'),
(6, 'scavenger hunt'),
(7, 'sand art');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `ref num` int(11) NOT NULL,
  `customer id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `special` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ref num`, `customer id`, `payment`, `special`) VALUES
(1000000000, 1000000000, 1, ''),
(1000000000, 1000000006, 7, ''),
(1000000001, 1000000001, 3, 'Birthday Cake'),
(1000000002, 1000000002, 2, ''),
(1000000003, 1000000003, 4, 'Wheel chair'),
(1000000004, 1000000004, 5, ''),
(1000000005, 1000000005, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `condition`
--

CREATE TABLE IF NOT EXISTS `condition` (
  `ref num` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `children` enum('0','1') NOT NULL DEFAULT '1',
  `disability` enum('0','1') NOT NULL DEFAULT '1',
  `baby` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `condition`
--

INSERT INTO `condition` (`ref num`, `capacity`, `children`, `disability`, `baby`) VALUES
(1000000000, 250, '1', '1', '1'),
(1000000001, 400, '1', '1', '1'),
(1000000002, 300, '0', '1', '0'),
(1000000003, 70, '1', '0', '1'),
(1000000004, 50, '0', '1', '0'),
(1000000005, 350, '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer id` int(11) NOT NULL,
  `name` varchar(112) NOT NULL,
  `username` varchar(13) NOT NULL,
  `pass` varchar(112) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(112) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=1000000007 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer id`, `name`, `username`, `pass`, `email`, `birth`, `address`, `phone`, `active`) VALUES
(1000000000, 'Laith Marzouka', 'laith', 'f2e11c444e7fdeeac08c068711c595d0', 'laith.marzouka@gmail.com', '1998-08-25', 'Bireit, Palestine', '+970592607887', '1'),
(1000000001, 'Amjad Shomali', 'amjad', 'e3d9230eebad4e383d818e5365931170', 'amjad@gmail.com', '1998-02-12', 'Birzeit, Palestine', '+970592624578', '1'),
(1000000002, 'Ameer Paraskiva', 'ameer', '4fd871a3338408a1fa1641c518c9d909', 'ameer@gmail.com', '1998-09-15', 'Bethlehem, Palestine', '+9702635899', '1'),
(1000000003, 'Jiries Nasrawi', 'jiries', '5a43cf9abf105d6a292cb11a3d409672', 'jiries@gmail.com', '1967-08-18', 'Kufr Aqab, Palestine', '+9702614559', '1'),
(1000000004, 'Aria Grande', 'aria', 'aafa7ed7cc46d6b04fc6e2b20baab657', 'aria@gmail.com', '1994-07-17', 'New York, USA', '+957452135', '1'),
(1000000005, 'Lana Del Ray', 'lana', 'e5fcdb7d6efb39b66c72d52c5fc8cfa1', 'lana@gmail.com', '1988-09-12', 'New Mexico, Mexico', '+9632547485', '1'),
(1000000006, 'Yousef Hassouneh', 'yousef', '75b42d69fc527e6a37fc7bf10ae15d5e', 'yousef@gmail.com', '1975-03-12', 'Ramallah, Palestine', '+97052548157', '1');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `food id` int(11) NOT NULL,
  `food` varchar(112) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food id`, `food`) VALUES
(1, 'chicken and rice'),
(2, 'Burritos'),
(3, 'tacos'),
(4, 'meat balls'),
(5, 'KFC'),
(6, 'pizza'),
(7, 'fajitas'),
(8, 'egg rolls '),
(9, 'french fries'),
(10, 'beacon'),
(11, 'ham'),
(12, 'beef '),
(13, 'broccoli'),
(14, 'salmon'),
(15, 'crab'),
(16, 'lasagna'),
(17, 'spaghetti'),
(18, 'pesto'),
(19, 'risoto'),
(20, 'french toast');

-- --------------------------------------------------------

--
-- Table structure for table `got`
--

CREATE TABLE IF NOT EXISTS `got` (
  `rev id` int(11) NOT NULL,
  `pic id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `got`
--

INSERT INTO `got` (`rev id`, `pic id`) VALUES
(1, 1000000000),
(2, 1000000000),
(3, 1000000000),
(4, 1000000000),
(6, 1000000003),
(7, 1000000001),
(8, 1000000005),
(9, 1000000005),
(10, 1000000004),
(11, 1000000001),
(12, 1000000003),
(13, 1000000002),
(14, 1000000001),
(14, 1000000003),
(14, 1000000004);

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE IF NOT EXISTS `has` (
  `pic id` int(11) NOT NULL,
  `act id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has`
--

INSERT INTO `has` (`pic id`, `act id`) VALUES
(1000000000, 2),
(1000000000, 5),
(1000000001, 6),
(1000000002, 1),
(1000000002, 7),
(1000000003, 5),
(1000000003, 6),
(1000000004, 4),
(1000000005, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment id` int(20) NOT NULL,
  `customer id` int(11) NOT NULL,
  `number` varchar(20) NOT NULL,
  `name` varchar(112) NOT NULL,
  `credit` varchar(112) NOT NULL,
  `expire` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment id`, `customer id`, `number`, `name`, `credit`, `expire`, `date`) VALUES
(1, 1000000000, '4444587458', 'LAITH MARZOUKA', 'VISA', '2020-09-00', '2019-03-31 21:00:00'),
(2, 1000000002, '6666512478', 'AMEER PARASKIVA', 'American Express ', '2022-05-00', '2019-04-04 21:00:00'),
(3, 1000000001, '5555874236', 'Amjad SHOMALI', 'MasterCard', '2021-06-00', '2019-04-05 21:00:00'),
(4, 1000000003, '4444157874', 'JIRIES NASRAWI', 'VISA', '2020-08-00', '2019-04-06 21:00:00'),
(5, 1000000004, '5555778452', 'ARIA GRANDE', 'MasterCard', '2023-02-00', '2019-04-17 21:00:00'),
(6, 1000000005, '4444326352', 'LANA DEL RAY', 'VISA', '2023-06-00', '2019-04-11 21:00:00'),
(7, 1000000006, '6666213485', 'YOUSEF HASSOUNEH', 'American Express', '2021-07-00', '2019-04-16 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `picnic`
--

CREATE TABLE IF NOT EXISTS `picnic` (
  `ref` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` double NOT NULL,
  `departure` time NOT NULL,
  `meet` varchar(112) NOT NULL,
  `arrival` time NOT NULL,
  `back` time NOT NULL,
  `transportation` varchar(50) NOT NULL DEFAULT 'No Transportation Available',
  `description` varchar(256) CHARACTER SET utf8 DEFAULT 'Description Here',
  `src` varchar(56) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1000000006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picnic`
--

INSERT INTO `picnic` (`ref`, `title`, `place`, `date`, `price`, `departure`, `meet`, `arrival`, `back`, `transportation`, `description`, `src`) VALUES
(1000000000, 'Central Park', 'New York, USA', '2019-05-09', 50, '14:00:00', 'none', '15:00:00', '20:00:00', 'No Transportation Available', 'Desc here', 'images/picnics/central.jpg'),
(1000000001, 'Villa Borghese Gardens', 'Roma, Italy', '2019-07-03', 40, '08:30:00', 'none', '10:00:00', '16:00:00', 'Bus', 'Desc here', 'images/picnics/villa.jpg'),
(1000000002, 'Le Saut De Loup', 'Paris, France', '2019-08-08', 40, '10:00:00', 'none', '10:30:00', '15:00:00', 'Mini Van', 'Desc here', 'images/picnics/saut.jpg'),
(1000000003, 'Arderne Gardens', 'Claremont, South Africa', '2019-05-09', 70, '05:00:00', 'none', '06:30:00', '13:00:00', 'No Transportation Available', 'Desc here', 'images/picnics/ard.jpg'),
(1000000004, 'Marwick Head', 'Orkney, UK', '2019-06-13', 35, '17:00:00', 'none', '17:45:00', '22:00:00', 'Bus', 'Desc here', 'images/picnics/head.jpg'),
(1000000005, 'Isla de Guilligan', 'Guánica, Puerto Rico', '2019-10-02', 45, '09:00:00', 'none', '09:50:00', '17:00:00', 'Limo', 'Desc here', 'images/picnics/isle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `revew id` int(11) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`revew id`, `review`) VALUES
(1, 'It was Amazing'),
(2, 'Best picnic ever, keep up the good work :D'),
(3, 'Wish it was better'),
(4, 'It was supposed to be a quiet place though'),
(6, 'Are you going to make this picnic again sometime guys?'),
(7, 'Thank you, it was wholesome'),
(8, 'Great :P'),
(9, 'Too Bad don''t recommend'),
(10, 'Wish i could bring my children'),
(11, 'Not bad '),
(12, 'Great Job guys'),
(13, 'Keep up the good work'),
(14, 'It was expensive for nothing'),
(15, 'Wow, cheap and quality');

-- --------------------------------------------------------

--
-- Table structure for table `serve`
--

CREATE TABLE IF NOT EXISTS `serve` (
  `pic id` int(11) NOT NULL,
  `food id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serve`
--

INSERT INTO `serve` (`pic id`, `food id`) VALUES
(1000000000, 3),
(1000000000, 9),
(1000000001, 16),
(1000000001, 18),
(1000000002, 7),
(1000000002, 11),
(1000000003, 5),
(1000000004, 14),
(1000000005, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ref num`,`customer id`,`payment`),
  ADD KEY `customer id` (`customer id`),
  ADD KEY `pay` (`payment`);

--
-- Indexes for table `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`ref num`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food id`);

--
-- Indexes for table `got`
--
ALTER TABLE `got`
  ADD PRIMARY KEY (`rev id`,`pic id`),
  ADD KEY `picnicid` (`pic id`);

--
-- Indexes for table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`pic id`,`act id`),
  ADD KEY `act` (`act id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment id`);

--
-- Indexes for table `picnic`
--
ALTER TABLE `picnic`
  ADD PRIMARY KEY (`ref`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`revew id`);

--
-- Indexes for table `serve`
--
ALTER TABLE `serve`
  ADD PRIMARY KEY (`pic id`,`food id`),
  ADD KEY `food` (`food id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000000007;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `picnic`
--
ALTER TABLE `picnic`
  MODIFY `ref` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000000006;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `revew id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `customer id` FOREIGN KEY (`customer id`) REFERENCES `customer` (`customer id`),
  ADD CONSTRAINT `pay` FOREIGN KEY (`payment`) REFERENCES `payment` (`payment id`),
  ADD CONSTRAINT `refnum` FOREIGN KEY (`ref num`) REFERENCES `picnic` (`ref`);

--
-- Constraints for table `condition`
--
ALTER TABLE `condition`
  ADD CONSTRAINT `refn` FOREIGN KEY (`ref num`) REFERENCES `picnic` (`ref`);

--
-- Constraints for table `got`
--
ALTER TABLE `got`
  ADD CONSTRAINT `picnicid` FOREIGN KEY (`pic id`) REFERENCES `picnic` (`ref`),
  ADD CONSTRAINT `review` FOREIGN KEY (`rev id`) REFERENCES `review` (`revew id`);

--
-- Constraints for table `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `act` FOREIGN KEY (`act id`) REFERENCES `activities` (`activity id`),
  ADD CONSTRAINT `pic ` FOREIGN KEY (`pic id`) REFERENCES `picnic` (`ref`);

--
-- Constraints for table `serve`
--
ALTER TABLE `serve`
  ADD CONSTRAINT `food` FOREIGN KEY (`food id`) REFERENCES `food` (`food id`),
  ADD CONSTRAINT `picnic ref` FOREIGN KEY (`pic id`) REFERENCES `picnic` (`ref`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
