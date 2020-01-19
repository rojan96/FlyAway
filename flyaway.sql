-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 06:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flyaway`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `bookingID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `flightID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`bookingID`, `userID`, `flightID`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 3),
(5, 15, 3),
(7, 1, 4),
(8, 3, 3),
(9, 3, 3),
(10, 3, 1),
(11, 15, 2),
(12, 15, 1),
(13, 15, 4),
(14, 17, 1),
(15, 18, 4),
(17, 20, 3),
(18, 20, 2),
(19, 20, 4),
(20, 20, 7),
(21, 21, 5),
(22, 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `flightinformation`
--

CREATE TABLE `flightinformation` (
  `FlightID` int(11) NOT NULL,
  `Departurecity` varchar(50) NOT NULL,
  `Destinationcity` varchar(50) NOT NULL,
  `Departuredate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightinformation`
--

INSERT INTO `flightinformation` (`FlightID`, `Departurecity`, `Destinationcity`, `Departuredate`) VALUES
(1, 'ATL', 'CHI', '11 April'),
(2, 'ATL', 'BOS', '12 April'),
(3, 'KTM', 'ATL', '14 Dec'),
(4, 'CHI', 'NYC', '2 DEC'),
(5, 'LA', 'SEATTLE', '10 Septemb'),
(6, 'Portland', 'Chicago', '3 may'),
(7, 'BHM', 'Indianapolis', '15 Jan');

-- --------------------------------------------------------

--
-- Table structure for table `userinformation`
--

CREATE TABLE `userinformation` (
  `userID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinformation`
--

INSERT INTO `userinformation` (`userID`, `Username`, `Password`, `Firstname`, `Lastname`, `Email`, `Address`) VALUES
(1, 'rojanm2', 'Apple1996', 'Rojan', 'Maharjan', 'rojanm874@gmail.com', '217 North Franklin Drive\r\nApartment 6'),
(2, '', '', '_', '', '', ''),
(3, 'chiggs', 'Banana1997', '_', 'Awale', 'cawale@troy.edu', 'Nfranklin'),
(4, 'a', 'b', '_', 'khoi', 'khoiasdh', 'as;fjh'),
(5, 'newuser', 'newpassword', 'new', 'user', 'newuser@gmail.com', 'newhome'),
(6, 'muji', '12345', 'mu', 'ji', 'muji@gmail.com', 'khoi muji'),
(7, 'as', 'a', 'a', 'a', 'a', 'a'),
(13, 'b', 'b', 'b', 'b', 'b', 'b'),
(14, 'c', 'c', 'c', 'c', 'c', 'c'),
(15, 'Rimsha', '12345', 'Rimsha', 'Shahi', 'rimsha@gmail.com', 'Botts avenue'),
(16, 'a', 'n', 'c', 'd', 'e', 'f'),
(17, 'Jon', '12345', 'Jon', 'Snow', 'jonsnow@gmail.com', 'Winterfell'),
(18, 'Adam', '12345', 'Adam', 'Smith', 'adam@gmail.com', 'university avenue'),
(20, 'Rashmee', '12345', 'Rashmee', 'Silwal', 'rashmee@gmail.com', 'Nfranklin'),
(21, 'ddsfdsfsdfsd', 'asdasd', 'asdasd', 'asdasd', 'rojanm874@gmail.com', '217 North Franklin Drive, Apartment 6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `bookinginfo_ibfk_1` (`flightID`),
  ADD KEY `bookinginfo_ibfk_2` (`userID`);

--
-- Indexes for table `flightinformation`
--
ALTER TABLE `flightinformation`
  ADD PRIMARY KEY (`FlightID`);

--
-- Indexes for table `userinformation`
--
ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `flightinformation`
--
ALTER TABLE `flightinformation`
  MODIFY `FlightID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userinformation`
--
ALTER TABLE `userinformation`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD CONSTRAINT `bookinginfo_ibfk_1` FOREIGN KEY (`FlightID`) REFERENCES `flightinformation` (`FlightID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bookinginfo_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `userinformation` (`userID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
