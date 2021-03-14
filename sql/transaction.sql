-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 06:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno.` int(11) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno.`, `sender`, `receiver`, `Amount`, `date`, `time`) VALUES
(1, 'Anurag', 'Mehul ', 5000, '2021-03-01', '18:01:44'),
(2, 'Shreyash', 'Tanmay ', 2000, '2021-02-15', '07:00:12'),
(3, 'Rohit', 'Shreya', 10000, '2021-01-14', '08:01:54'),
(4, 'Astha ', 'Lina ', 3000, '2021-02-24', '01:34:33'),
(5, 'Sharukh ', 'Ankush ', 40000, '2021-03-22', '15:09:00'),
(6, 'Kanchan ', 'Rucika ', 12000, '2021-03-19', '11:01:20'),
(7, 'Niket', 'Chiku', 500, '2021-03-13', '18:01:44'),
(8, 'Ruchika', 'Chetan', 1230041, '2021-02-16', '07:00:11'),
(9, 'Rushabh', 'Rohit', 1200, '2021-01-14', '08:01:54'),
(10, 'Amey', 'Shradhey', 6000, '2021-01-05', '06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `E-mail`, `Balance`) VALUES
(1, 'Rushabh ', 'Rushabh@gmail.com', 120000),
(2, 'Rohit', 'Rohit@gmail.com', 139000),
(3, 'Kanchan', 'Kanchan@gmai.com', 149000),
(4, 'Mehul', 'Mehul@gmail.com', 1100000),
(5, 'Anurag', 'Anurag@gmail.com', 5000),
(6, 'Shreya', 'Shreya@gmail.com', 71000),
(7, 'Niket', 'Niket@gmail.com', 120000),
(8, 'Chiku', 'loverboy@gmail.com', 139000),
(9, 'Bittu', 'Bittu@gmail.com', 160000),
(10, 'Aamba', 'Aamba@gmail.com', 1100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno.`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
