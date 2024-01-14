-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 11:05 PM
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
-- Database: `stadium`
--

-- --------------------------------------------------------

--
-- Table structure for table `audience1`
--

CREATE TABLE `audience1` (
  `userID` varchar(20) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audience1`
--

INSERT INTO `audience1` (`userID`, `user_name`, `user_email`, `password`, `type`) VALUES
('u001', 'Emma', 'emma@gmail.com', '123', 1),
('u002', 'Robert', 'robert@gmail.com', '456', 1),
('u003', 'John', 'john@gmail.com', '753', 1),
('u004', 'Michael', 'michael@gmail.com', '365', 1),
('u005', 'Linda', 'linda@gmail.com', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `audience2`
--

CREATE TABLE `audience2` (
  `userID` varchar(20) NOT NULL,
  `user_receipt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audience2`
--

INSERT INTO `audience2` (`userID`, `user_receipt`) VALUES
('u001', 'A1234'),
('u002', 'A1235'),
('u003', 'A1236'),
('u004', 'A1237'),
('u005', 'A1238'),
('u001', 'A1239');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `user_receipt` varchar(20) NOT NULL,
  `ticket_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`user_receipt`, `ticket_number`) VALUES
('A1234', 'T1234'),
('A1235', 'T1235'),
('A1236', 'T1236'),
('A1237', 'T1237'),
('A1238', 'T1238'),
('A1239', 'T1239');

-- --------------------------------------------------------

--
-- Table structure for table `employee_manageby1`
--

CREATE TABLE `employee_manageby1` (
  `DOB` date DEFAULT NULL,
  `employee_name` varchar(15) DEFAULT NULL,
  `employeeID` varchar(20) NOT NULL,
  `job_title` varchar(15) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_manageby1`
--

INSERT INTO `employee_manageby1` (`DOB`, `employee_name`, `employeeID`, `job_title`, `password`, `type`) VALUES
('1994-04-08', 'Jelly', 'E032', 'manager', '356', 2),
('1993-06-01', 'Jake', 'E054', 'manager', '954', 2),
('1995-03-04', 'Smith', 'E073', 'manager', '986', 2),
('1994-03-07', 'Sweden', 'E089', 'manager', '237', 2),
('1984-07-02', 'John', 'E093', 'manager', '687', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee_manageby2`
--

CREATE TABLE `employee_manageby2` (
  `eventID` varchar(20) DEFAULT NULL,
  `employeeID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_manageby2`
--

INSERT INTO `employee_manageby2` (`eventID`, `employeeID`) VALUES
('EV124', 'E073'),
('EV125', 'E089'),
('EV126', 'E054'),
('EV127', 'E032');

-- --------------------------------------------------------

--
-- Table structure for table `employee_runby2`
--

CREATE TABLE `employee_runby2` (
  `employeeID` varchar(20) NOT NULL,
  `R_time` datetime DEFAULT NULL,
  `location` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_runby2`
--

INSERT INTO `employee_runby2` (`employeeID`, `R_time`, `location`) VALUES
('E032', '2022-07-06 10:30:00', 4),
('E054', '2022-08-02 10:20:00', 2),
('E073', '2022-05-03 13:30:00', 2),
('E089', '2022-06-01 14:20:00', 3),
('E093', '2022-04-06 12:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_hold_in`
--

CREATE TABLE `event_hold_in` (
  `eventID` varchar(20) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_name` varchar(15) DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `gym_number` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_hold_in`
--

INSERT INTO `event_hold_in` (`eventID`, `event_date`, `event_name`, `event_time`, `gym_number`) VALUES
('EV123', '2022-01-22', 'basketball', '19:00:00', 4),
('EV124', '2022-01-25', 'volleyball', '13:00:00', 1),
('EV125', '2022-01-27', 'tennis', '09:30:00', 5),
('EV126', '2022-01-28', 'badminton', '15:00:00', 4),
('EV127', '2022-01-30', 'basketball', '12:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `gym_number` int(11) NOT NULL,
  `gym_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`gym_number`, `gym_size`) VALUES
(1, 100),
(2, 80),
(3, 80),
(4, 100),
(5, 50);

-- --------------------------------------------------------

--
-- Table structure for table `perform_in`
--

CREATE TABLE `perform_in` (
  `playerID` varchar(15) DEFAULT NULL,
  `perform_number` int(4) DEFAULT NULL,
  `eventID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perform_in`
--

INSERT INTO `perform_in` (`playerID`, `perform_number`, `eventID`) VALUES
('P30', 1, 'EV124'),
('P24', 3, 'EV125'),
('P12', 6, 'EV127'),
('P89', 4, 'EV126'),
('P01', 12, 'EV123'),
('P01', 8, 'EV124'),
('P01', 16, 'EV125'),
('P01', 19, 'EV126'),
('P01', 20, 'EV127');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerID` varchar(15) NOT NULL,
  `player_name` varchar(15) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerID`, `player_name`, `password`) VALUES
('P01', 'John', '147'),
('P12', 'Lucas', '563'),
('P24', 'Kevin', '896'),
('P30', 'Tom', '423'),
('P89', 'Mimi', '156');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_from`
--

CREATE TABLE `purchase_from` (
  `user_receipt` varchar(20) NOT NULL,
  `location` int(4) DEFAULT NULL,
  `purchase_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_from`
--

INSERT INTO `purchase_from` (`user_receipt`, `location`, `purchase_time`) VALUES
('A1234', 1, '2021-04-02 12:00:00'),
('A1235', 2, '2021-12-30 11:00:00'),
('A1236', 2, '2020-01-31 10:00:00'),
('A1237', 3, '2021-10-03 11:00:00'),
('A1238', 1, '2020-10-30 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seats_has`
--

CREATE TABLE `seats_has` (
  `gym_number` int(4) NOT NULL,
  `seats_number` int(4) NOT NULL,
  `zone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats_has`
--

INSERT INTO `seats_has` (`gym_number`, `seats_number`, `zone_number`) VALUES
(1, 1, 'A'),
(1, 2, 'A'),
(1, 3, 'B'),
(2, 1, 'A'),
(3, 1, 'A'),
(3, 2, 'A'),
(4, 1, 'A'),
(5, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `location` int(4) NOT NULL,
  `store_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`location`, `store_type`) VALUES
(1, 'food'),
(2, 'gift'),
(3, 'food'),
(4, 'rental'),
(5, 'gift');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_belong_to`
--

CREATE TABLE `ticket_belong_to` (
  `ticket_number` varchar(20) NOT NULL,
  `ticket_type` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `eventID` varchar(20) NOT NULL,
  `seats_number` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_belong_to`
--

INSERT INTO `ticket_belong_to` (`ticket_number`, `ticket_type`, `price`, `eventID`, `seats_number`) VALUES
('T1234', 'regular', 40, 'EV123', 1),
('T1235', 'sale', 30, 'EV124', 1),
('T1236', 'free', 0, 'EV125', 1),
('T1237', 'regular', 40, 'EV126', 1),
('T1238', 'regular', 40, 'EV127', 1),
('T1239', 'regular', 40, 'EV123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audience1`
--
ALTER TABLE `audience1`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `audience2`
--
ALTER TABLE `audience2`
  ADD PRIMARY KEY (`user_receipt`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`user_receipt`),
  ADD KEY `ticket_number` (`ticket_number`);

--
-- Indexes for table `employee_manageby1`
--
ALTER TABLE `employee_manageby1`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employee_manageby2`
--
ALTER TABLE `employee_manageby2`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `eventID` (`eventID`);

--
-- Indexes for table `employee_runby2`
--
ALTER TABLE `employee_runby2`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `event_hold_in`
--
ALTER TABLE `event_hold_in`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `event_hold_in_ibfk_1` (`gym_number`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`gym_number`);

--
-- Indexes for table `perform_in`
--
ALTER TABLE `perform_in`
  ADD KEY `playerID` (`playerID`),
  ADD KEY `eventID` (`eventID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerID`);

--
-- Indexes for table `purchase_from`
--
ALTER TABLE `purchase_from`
  ADD PRIMARY KEY (`user_receipt`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `seats_has`
--
ALTER TABLE `seats_has`
  ADD PRIMARY KEY (`gym_number`,`seats_number`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `ticket_belong_to`
--
ALTER TABLE `ticket_belong_to`
  ADD PRIMARY KEY (`ticket_number`,`eventID`),
  ADD UNIQUE KEY `seats_number` (`seats_number`,`eventID`),
  ADD KEY `ticket_belong_to_ibfk_1` (`eventID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audience2`
--
ALTER TABLE `audience2`
  ADD CONSTRAINT `audience2_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `audience1` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`user_receipt`) REFERENCES `audience2` (`user_receipt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buy_ibfk_2` FOREIGN KEY (`ticket_number`) REFERENCES `ticket_belong_to` (`ticket_number`);

--
-- Constraints for table `employee_manageby2`
--
ALTER TABLE `employee_manageby2`
  ADD CONSTRAINT `employee_manageby2_ibfk_1` FOREIGN KEY (`eventID`) REFERENCES `event_hold_in` (`eventID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_manageby2_ibfk_2` FOREIGN KEY (`employeeID`) REFERENCES `employee_manageby1` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_runby2`
--
ALTER TABLE `employee_runby2`
  ADD CONSTRAINT `employee_runby2_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employee_runby1` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_runby2_ibfk_2` FOREIGN KEY (`location`) REFERENCES `store` (`location`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_runby2_ibfk_3` FOREIGN KEY (`employeeID`) REFERENCES `employee_manageby1` (`employeeID`);

--
-- Constraints for table `event_hold_in`
--
ALTER TABLE `event_hold_in`
  ADD CONSTRAINT `event_hold_in_ibfk_1` FOREIGN KEY (`gym_number`) REFERENCES `gym` (`gym_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perform_in`
--
ALTER TABLE `perform_in`
  ADD CONSTRAINT `perform_in_ibfk_1` FOREIGN KEY (`playerID`) REFERENCES `players` (`playerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perform_in_ibfk_2` FOREIGN KEY (`eventID`) REFERENCES `event_hold_in` (`eventID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_from`
--
ALTER TABLE `purchase_from`
  ADD CONSTRAINT `purchase_from_ibfk_1` FOREIGN KEY (`location`) REFERENCES `store` (`location`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `seats_has`
--
ALTER TABLE `seats_has`
  ADD CONSTRAINT `seats_has_ibfk_1` FOREIGN KEY (`gym_number`) REFERENCES `gym` (`gym_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_belong_to`
--
ALTER TABLE `ticket_belong_to`
  ADD CONSTRAINT `ticket_belong_to_ibfk_1` FOREIGN KEY (`eventID`) REFERENCES `event_hold_in` (`eventID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
