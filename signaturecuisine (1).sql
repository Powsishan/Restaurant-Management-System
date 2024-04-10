-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 09:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `signaturecuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `No` int(100) NOT NULL,
  `Firstname` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Lastname` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Username` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Email` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Password` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`No`, `Firstname`, `Lastname`, `Username`, `Email`, `Password`) VALUES
(1, 'Shanmuganathan', 'powsikan', 'admin', 'powsi.shan@gmail.com', 'adminj');

-- --------------------------------------------------------

--
-- Table structure for table `displayq`
--

CREATE TABLE `displayq` (
  `No` int(100) NOT NULL,
  `Name` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Email` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Note` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `displayq`
--

INSERT INTO `displayq` (`No`, `Name`, `Email`, `Note`) VALUES
(1, 'Shanmuganathan powsikan', 'powsi.shan@gmail.com', 'test'),
(2, 'test', 'test@gmail.com', 'testing'),
(3, 'test', 'test@gmail.com', 'testing'),
(4, 'test', 'test@gmail.com', 'testing'),
(5, 'test1', 'tese@gmail.com', 'testing after'),
(6, 'Shanmuganathan powsikan', 'powsi.shan@gmail.com', 'tresr'),
(7, 'Shanmuganathan powsikan', 'powsi.shan@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `No` int(100) NOT NULL,
  `Orderid` int(100) NOT NULL,
  `Food` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`No`, `Orderid`, `Food`, `quantity`) VALUES
(1, 1, 'kottu', 2),
(2, 2, 'pittu', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rtable`
--

CREATE TABLE `rtable` (
  `No` int(100) NOT NULL,
  `Name` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Email` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Phonenumber` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(10) NOT NULL,
  `Numberofguest` int(100) NOT NULL,
  `specialRequest` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


--
-- Dumping data for table `rtable`
--

INSERT INTO `rtable` (`No`, `Name`, `Email`, `Phonenumber`, `Date`, `Time`, `Numberofguest`, `specialRequest`) VALUES
(1, 'Shanmuganathan powsikan', 'powsi.shan@gmail.com', 715559990, '2023-07-13', '13:13:00.000000', 2, 'test'),
(2, 'zoro', 'zoro@gmail.com', 715551110, '2023-07-07', '14:42:00.000000', 1, 'boose'),
(3, 'test', 'test@gmail.com', 715559990, '2023-12-21', '00:00:00.000000', 2, 'none'),
(4, 'Shanmuganathan powsikan', 'powsi.shan@gmail.com', 715559990, '2023-07-11', '14:00:00.000000', 2, 'test'),
(5, 'Shanmuganathan powsikan', 'powsi.shan@gmail.com', 715559990, '2023-07-22', '14:01:00.000000', 2, 't'),
(6, 'Shanmuganathan powsikan', 'powsi.shan@gmail.com', 715559990, '2023-07-26', '19:00:00.000000', 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `slog`
--

CREATE TABLE `slog` (
  `id` int(100) NOT NULL,
  `firshname` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `lastname` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `username` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `password` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slog`
--

INSERT INTO `slog` (`id`, `firshname`, `lastname`, `username`, `email`, `password`) VALUES
(9, ' Shanmuganathan', 'powsikan', 'sam', 'powsi.shan@gmail.com', ' sam'),
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `stafID` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `firstName` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `lastName` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `userName` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `password` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `eMail` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`stafID`, `firstName`, `lastName`, `userName`, `password`, `eMail`) VALUES
('ST09', 'Shanmuganathan', 'powsikan', 'powsi', 'test', 'powsi.shan@gmail.com'),
('st001', 'Shanmuganathan', 'powsikan', 'admin1', 'admin', 'powsi.shan@gmail.com'),
('stt01', 'Shanmuganathan', 'powsikan', 'pow', 'pow', 'powsi.shan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `displayq`
--
ALTER TABLE `displayq`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `rtable`
--
ALTER TABLE `rtable`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `slog`
--
ALTER TABLE `slog`
  ADD PRIMARY KEY (`firshname`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`stafID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `displayq`
--
ALTER TABLE `displayq`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rtable`
--
ALTER TABLE `rtable`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
