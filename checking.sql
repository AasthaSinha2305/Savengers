-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 16, 2021 at 05:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE `checking` (
  `SRNO` int(11) NOT NULL,
  `DATECASE` varchar(11) NOT NULL,
  `COURTNO` int(11) NOT NULL,
  `CASENO` int(11) NOT NULL,
  `JUDGENAME` varchar(11) NOT NULL,
  `PARTYNAME` varchar(11) NOT NULL,
  `RESADV` varchar(11) NOT NULL,
  `RESAOR` int(11) NOT NULL,
  `PETADV` varchar(11) NOT NULL,
  `PETAOR` int(11) NOT NULL,
  `CASETYPE` varchar(11) NOT NULL,
  `YEARREG` int(11) NOT NULL,
  `TIME` time(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checking`
--

INSERT INTO `checking` (`SRNO`, `DATECASE`, `COURTNO`, `CASENO`, `JUDGENAME`, `PARTYNAME`, `RESADV`, `RESAOR`, `PETADV`, `PETAOR`, `CASETYPE`, `YEARREG`, `TIME`) VALUES
(1, '2021-01-01', 1, 1, 'sima', 'london', 'b', 1, 'c', 2, 'CR MISC', 2020, '10:29:00.000'),
(2, '2021-01-01', 1, 3, 'rima', 'bihar', 'e', 3, 'f', 4, 'CWJC', 2021, '10:40:00.000'),
(3, '2021-01-01', 1, 2, 'shivang', 'london', 'qqii', 666, 'ui', 977, 'CR MISC', 2020, '00:00:00.000'),
(4, '2021-01-01', 1, 29, 'arika', 'britain', 'qoy', 688, 'you', 999, 'CR REV', 2020, '00:00:00.000'),
(5, '2021-01-01', 1, 57, 'smitha', 'patna', 'sinha', 678, 'agarwal', 675, 'CR APPEAL', 2021, '00:00:00.000'),
(6, '2021-01-01', 1, 5, 'aisha', 'patna', 'sinha', 678, 'agarwal', 675, 'CWJC', 2020, '00:00:00.000'),
(7, '2021-01-02', 2, 100, 'sanjay', 'agra', 'qqui', 660, 'rina', 980, 'CR MISC', 2020, '00:00:00.000'),
(8, '2021-01-02', 2, 101, 'anamika', 'hussle', 'arnav', 30, 'urmila', 555, 'CWJC', 2021, '00:00:00.000'),
(9, '2021-01-02', 2, 102, 'anamika', 'deski', 'queen', 202, 'yuni', 997, 'CWJC', 2020, '00:00:00.000'),
(10, '2021-01-02', 2, 103, 'aastha', 'bihar', 'beena', 90, 'tora', 78, 'CWJC', 2020, '00:00:00.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checking`
--
ALTER TABLE `checking`
  ADD PRIMARY KEY (`SRNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checking`
--
ALTER TABLE `checking`
  MODIFY `SRNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
