-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 10:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaces`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `room_id` int(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `workspacename` varchar(255) NOT NULL,
  `Book_approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `room_id`, `room_name`, `user_name`, `workspacename`, `Book_approve`) VALUES
(5, 19, 'ROOF', 'omar_mohamed.29', 'Roof Workspace', 0),
(6, 21, 'Roof-Room3', 'omar_mohamed.29', 'Roof Workspace', 0),
(7, 16, 'big room 3', 'omar_mohamed.29', 'Areka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `times_fk` int(11) DEFAULT NULL,
  `room_name` varchar(255) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `from_time` time(6) DEFAULT NULL,
  `to_time` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `times_fk`, `room_name`, `status`, `date`, `from_time`, `to_time`) VALUES
(1, 2, 'hall', 1, '2019-04-25', '06:00:00.000000', '08:00:00.000000'),
(12, 2, 'room4', 1, '2020-12-31', '00:59:00.000000', '00:00:00.000000'),
(16, 2, 'big room 3', 0, '2020-12-31', '12:59:00.000000', '12:59:00.000000'),
(19, 6, 'ROOF', 0, '2020-01-01', '01:00:00.000000', '13:00:00.000000'),
(20, 6, 'Room - Room 2 ', 1, '2021-01-01', '13:00:00.000000', '14:00:00.000000'),
(21, 6, 'Roof-Room3', 0, '2021-02-03', '14:01:00.000000', '14:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE `workspaces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `groupid` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `regstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workspaces`
--

INSERT INTO `workspaces` (`id`, `name`, `email`, `password`, `Username`, `groupid`, `description`, `location`, `price`, `regstatus`) VALUES
(2, 'Areka', 'areka@hotmail.com', 'areka', 'areka_workspace', 1, 'An Amazing area full of joy and happiness', 'Cairo - El Maddi - 9 Street', '30', 1),
(3, 'Ahmed..khaled', 'badawy@admin.com', 'bb', 'Ahmed.khaled', 0, NULL, NULL, NULL, 1),
(4, 'Ahmed khaled', 'badawy@gmail.com', 'badawy', 'Ahmed.khaled01', 2, NULL, NULL, NULL, 1),
(6, 'Roof Workspace', 'Roof@hotmail.com', 'roof', 'Roof_WorkSpace', 1, 'A beautiful workspace with a great price that fits everyone - speed wifi - free hot drinks', 'Giza - ElBohos - Iran Street', '20', 1),
(7, 'club', 'clib@gmail.com', '123', 'club', 1, 'club is your hous ', 'giza after birdge ', '30', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_idFK` (`room_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `times_fk` (`times_fk`);

--
-- Indexes for table `workspaces`
--
ALTER TABLE `workspaces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `workspaces`
--
ALTER TABLE `workspaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `room_idFK` FOREIGN KEY (`room_id`) REFERENCES `times` (`id`);

--
-- Constraints for table `times`
--
ALTER TABLE `times`
  ADD CONSTRAINT `times_ibfk_1` FOREIGN KEY (`times_fk`) REFERENCES `workspaces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
