-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 01:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padel ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ballpack`
--

CREATE TABLE `ballpack` (
  `supID` int(11) NOT NULL,
  `sup-date` date NOT NULL,
  `brand` varchar(20) NOT NULL,
  `packsize` int(11) NOT NULL,
  `courtnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ballpack`
--

INSERT INTO `ballpack` (`supID`, `sup-date`, `brand`, `packsize`, `courtnum`) VALUES
(1, '2023-01-01', 'nike', 3, 1),
(2, '2022-12-01', 'head', 6, 1),
(3, '2022-12-08', 'Wilson', 3, 2),
(4, '2023-01-02', 'Wilson', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `phnum` varchar(11) NOT NULL,
  `courtnum` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `bookingdate` date NOT NULL,
  `Bookingtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`phnum`, `courtnum`, `slot`, `bookingdate`, `Bookingtime`) VALUES
('12', 3, 1, '2023-01-01', '01:49'),
('47', 1, 3, '2023-01-02', '12:00'),
('47', 6, 1, '2023-01-02', '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phnum` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `salaryperhours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`fname`, `lname`, `phnum`, `DOB`, `gender`, `salaryperhours`) VALUES
('Abdo', 'Usama', '01145594832', '2023-01-01', 'Male', 800),
('Omar', 'Wael', '1111', '2000-01-02', 'Male', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `courtnum` int(11) NOT NULL,
  `court_fees_per_hour` int(11) NOT NULL,
  `courtspecs` varchar(20) NOT NULL,
  `courttype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`courtnum`, `court_fees_per_hour`, `courtspecs`, `courttype`) VALUES
(1, 250, 'Regular', 'Double'),
(2, 250, 'Regular', 'Double'),
(3, 350, 'Super Court', 'Double'),
(4, 350, 'Super Court', 'Double'),
(5, 125, 'Regular', 'Single'),
(6, 250, 'Super Court', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `courtman`
--

CREATE TABLE `courtman` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phnum` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `salary/month` int(11) NOT NULL,
  `supervisorphnum` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phnum` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `type` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`fname`, `lname`, `phnum`, `DOB`, `gender`, `type`) VALUES
('Walid', 'Atef', '01023339461', '2001-04-18', 'male', 'player'),
('Abdelrahman', 'Usama', '01145594832', '2001-09-11', 'male', 'player'),
('a', 'a', '0145594832', '2023-01-07', 'female', 'player'),
('walid', 'atef', '0777', '2002-01-05', 'Male', 'coach'),
('omar', 'wael', '1111', '2023-01-25', 'male', 'player'),
('kk', 'kk', '12', '2023-01-19', 'male', 'player'),
('f', 'd', '47', '2023-01-24', 'female', 'player'),
('lebron', 'mohamed', '9544281', '1990-05-09', 'male', 'player'),
('a', 'a', 'a', '2023-01-07', 'female', 'player'),
('r', 't', 'g', '2023-01-19', 'male', 'player');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phnum` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`fname`, `lname`, `phnum`, `DOB`, `gender`, `email`, `pass`, `level`) VALUES
('Walid', 'Atef', '01023339461', '2001-04-18', 'male', 'Walid.atef10@gmail.com', 'Walid Atef', 'B4'),
('Abdelrahman', 'Usama', '01145594832', '2001-09-11', 'male', 'abdelr.osama13@gmail.com', 'admin', 'B5'),
('kk', 'kk', '12', '2023-01-19', 'male', '57357@57357', '1', 'C2'),
('f', 'd', '47', '2023-01-24', 'female', 'wada@ghs', '1234', 'C1'),
('lebron', 'mohamed', '9544281', '1990-05-09', 'male', 'spain', 'lebro', 'B5');

-- --------------------------------------------------------

--
-- Table structure for table `private session`
--

CREATE TABLE `private session` (
  `sessiontime` time NOT NULL,
  `sessiondate` date NOT NULL,
  `playerphnum` varchar(11) NOT NULL,
  `coachphnum` varchar(11) NOT NULL,
  `courtnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raquette`
--

CREATE TABLE `raquette` (
  `supID` int(11) NOT NULL,
  `supdate` date NOT NULL,
  `brand` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `courtnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raquette`
--

INSERT INTO `raquette` (`supID`, `supdate`, `brand`, `weight`, `courtnum`) VALUES
(5, '2023-01-02', 'Head', 120, 6),
(6, '2023-01-02', 'Adiddas', 150, 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `supID` int(11) NOT NULL,
  `supdate` date NOT NULL,
  `brand` varchar(20) NOT NULL,
  `suptype` varchar(20) NOT NULL,
  `courtnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`supID`, `supdate`, `brand`, `suptype`, `courtnum`) VALUES
(1, '2023-01-01', 'nike', 'Ballpack', 1),
(2, '2022-12-01', 'head', 'Ballpack', 1),
(3, '2022-12-08', 'Wilson', 'Ballpack', 2),
(4, '2023-01-02', 'Wilson', 'Ballpack', 3),
(5, '2023-01-02', 'Head', 'raquette', 6),
(6, '2022-12-08', 'Adiddas', 'raquette', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ballpack`
--
ALTER TABLE `ballpack`
  ADD PRIMARY KEY (`supID`),
  ADD KEY `courtnum` (`courtnum`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingdate`,`Bookingtime`),
  ADD KEY `phnum` (`phnum`),
  ADD KEY `court-num` (`courtnum`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`phnum`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`courtnum`);

--
-- Indexes for table `courtman`
--
ALTER TABLE `courtman`
  ADD PRIMARY KEY (`phnum`),
  ADD KEY `courtman_ibfk_1` (`supervisorphnum`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`phnum`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`phnum`);

--
-- Indexes for table `private session`
--
ALTER TABLE `private session`
  ADD PRIMARY KEY (`sessiontime`,`sessiondate`),
  ADD KEY `court-num` (`courtnum`),
  ADD KEY `player-phnum` (`playerphnum`),
  ADD KEY `coach-phnum` (`coachphnum`);

--
-- Indexes for table `raquette`
--
ALTER TABLE `raquette`
  ADD PRIMARY KEY (`supID`),
  ADD KEY `courtnum` (`courtnum`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`supID`),
  ADD KEY `courtnum` (`courtnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ballpack`
--
ALTER TABLE `ballpack`
  MODIFY `supID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `courtnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `raquette`
--
ALTER TABLE `raquette`
  MODIFY `supID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `supID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ballpack`
--
ALTER TABLE `ballpack`
  ADD CONSTRAINT `ballpack_ibfk_1` FOREIGN KEY (`supID`) REFERENCES `supplies` (`supID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ballpack_ibfk_2` FOREIGN KEY (`courtnum`) REFERENCES `court` (`courtnum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`phnum`) REFERENCES `player` (`phnum`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`courtnum`) REFERENCES `court` (`courtnum`);

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`phnum`) REFERENCES `person` (`phnum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courtman`
--
ALTER TABLE `courtman`
  ADD CONSTRAINT `courtman_ibfk_1` FOREIGN KEY (`supervisorphnum`) REFERENCES `courtman` (`phnum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courtman_ibfk_2` FOREIGN KEY (`phnum`) REFERENCES `person` (`phnum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`phnum`) REFERENCES `person` (`phnum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `private session`
--
ALTER TABLE `private session`
  ADD CONSTRAINT `private session_ibfk_1` FOREIGN KEY (`courtnum`) REFERENCES `court` (`courtnum`),
  ADD CONSTRAINT `private session_ibfk_2` FOREIGN KEY (`playerphnum`) REFERENCES `player` (`phnum`),
  ADD CONSTRAINT `private session_ibfk_3` FOREIGN KEY (`coachphnum`) REFERENCES `coach` (`phnum`);

--
-- Constraints for table `raquette`
--
ALTER TABLE `raquette`
  ADD CONSTRAINT `raquette_ibfk_1` FOREIGN KEY (`supID`) REFERENCES `supplies` (`supID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `raquette_ibfk_2` FOREIGN KEY (`courtnum`) REFERENCES `court` (`courtnum`);

--
-- Constraints for table `supplies`
--
ALTER TABLE `supplies`
  ADD CONSTRAINT `supplies_ibfk_1` FOREIGN KEY (`courtnum`) REFERENCES `court` (`courtnum`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
