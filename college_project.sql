-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 10:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'sandeep', 'sandeep');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `college_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `registration_num` varchar(150) NOT NULL,
  `symbol_num` int(11) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `student_name`, `college_name`, `email`, `registration_num`, `symbol_num`, `batch`) VALUES
(1, 'sandeep karki', 'sagarmatha college of science and technology', 'karkisandeep12@gmail.com', '5-2-1180-21-2014', 5303, 2071),
(2, 'saroj khadka', 'sagarmatha college of science and technology', 'karkisandeep12@gmail.com', '5-2-1180-20-2014', 5304, 2071);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `college_name` varchar(150) NOT NULL,
  `symbol_number` float NOT NULL,
  `reg_number` varchar(150) DEFAULT NULL,
  `computer_network` varchar(150) DEFAULT NULL,
  `simulation_and_modeling` varchar(150) DEFAULT NULL,
  `DAA` varchar(150) DEFAULT NULL,
  `AI` varchar(150) DEFAULT NULL,
  `egov` varchar(150) DEFAULT NULL,
  `wireless_networking` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_name`, `college_name`, `symbol_number`, `reg_number`, `computer_network`, `simulation_and_modeling`, `DAA`, `AI`, `egov`, `wireless_networking`) VALUES
(1, 'sandeep karki', 'sagarmatha college of science and technology', 5303, '5-2-1180-21-2014', '34,12,23', '34,24,18', '12,32,18', '12,24,18', '12,32,18', '12,24,18'),
(2, 'saroj khadka', 'sagarmatha college of science and technology', 5304, '5-2-1180-20-2014', '34,25,23', '34,27,18', '12,32,18', '12,33,18', '12,32,18', '12,24,18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
