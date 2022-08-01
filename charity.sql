-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 04:27 PM
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
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clothes` varchar(2552) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`ID`, `name`, `email`, `clothes`, `quantity`, `city`, `area`, `mobile`) VALUES
(1, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', '', '2pcs', 'Dhaka', 'askona', '1720676101'),
(2, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'lungi', '2pcs', 'Dhaka', 'airport', '1720676101'),
(4, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'lungi', '12kg', 'Dhaka', 'airport', '1720676101'),
(5, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'lungi', '2', 'Dhaka', 'airport', '1720676101'),
(6, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'lungi', '3', 'Dhaka', '', '1720676101');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID`, `name`, `email`, `food`, `quantity`, `city`, `area`, `mobile`) VALUES
(16, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'rice', '2', 'Dhaka', 'airport', '1720676101'),
(17, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'rice', '3', 'Dhaka', 'airport', '1720676101'),
(18, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'rice', '1', 'Dhaka', 'airport', '1720676101'),
(19, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'rice', '', 'Dhaka', 'airport', '1720676101'),
(20, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'rice', '2', 'Dhaka', 'airport', '1720676101');

-- --------------------------------------------------------

--
-- Table structure for table `sponsore`
--

CREATE TABLE `sponsore` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `input` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsore`
--

INSERT INTO `sponsore` (`ID`, `name`, `email`, `address`, `input`, `city`, `area`, `mobile`) VALUES
(1, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'Airport, Ashkona, Dhaka', '2', 'Dhaka', 'airport', '1720676101'),
(2, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'Airport, Ashkona, Dhaka', '2', 'Dhaka', 'airport', '1720676101'),
(3, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'Airport, Ashkona, Dhaka', '3', 'Dhaka', 'airport', '1720676101'),
(4, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'Airport, Ashkona, Dhaka', '1', 'Dhaka', 'askona', '1720676101');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Asifur Rahaman', 'arifmannan7219@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Asifur Rahaman', 'asifurrahamannub66@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Asifur Rahaman', 'asifurrahamannub66@gmail.com', '2fc4a68635c26db1019047965180ce1b'),
(4, 'Asif66', 'asif@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Asifur Rahaman', 'ddh@gmail.com', '81b073de9370ea873f548e31b8adc081'),
(6, 'Asifur Rahaman', 'asif66@gmail.com', '81b073de9370ea873f548e31b8adc081');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`ID`, `name`, `email`, `address`, `city`, `area`, `mobile`) VALUES
(1, 'Asifur Rahaman', 'asifrahamannub66@gmail.com', 'Airport, Ashkona, Dhaka', 'Dhaka', 'askona', '1720676101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sponsore`
--
ALTER TABLE `sponsore`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sponsore`
--
ALTER TABLE `sponsore`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
