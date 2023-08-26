-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 10:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club-sportif`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `period` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `name`, `period`, `amount`) VALUES
('69649587', 'Fatima', '19/8/2023', '5 $'),
('1', 'fatima', '', '20'),
('2', 'marianne pharoan', '', '60'),
('2', 'marianne pharoan', '', '60'),
('2', 'marianne pharoan', '', '60'),
('2', 'marianne pharoan', '', '60'),
('2', 'marianne pharoan', '', '60'),
('2', 'marianne pharoan', '', '60'),
('2', 'marianne pharoan', '', '60');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `name`, `date`, `experience`) VALUES
('1', 'Rasha taher', '1/1/2000', '1'),
('2', 'Alaa zaiter', '10/3/1999', '5');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `coach` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `date`, `dob`, `phone`, `coach`) VALUES
('1', 'Farah el kak', '12/12/2022', '23/5/2001', '+961 70093976', 'Rasha taher'),
('2', 'Fadi allam', '30/1/2023', '3/6/1998', '+961 81430922', 'Alaa zaiter'),
('2', 'Fadi allam', '30/1/2023', '3/6/1998', '+961 81430922', 'Alaa zaiter'),
('2', 'Fadi allam', '30/1/2023', '3/6/1998', '+961 81430922', 'Alaa zaiter'),
('2', 'Fadi allam', '30/1/2023', '3/6/1998', '+961 81430922', 'Alaa zaiter'),
('2', 'Fadi allam', '30/1/2023', '3/6/1998', '+961 81430922', 'Alaa zaiter'),
('2', 'Fadi allam', '30/1/2023', '3/6/1998', '+961 81430922', 'Alaa zaiter'),
('2', 'Fadi allam', '30/1/2023', '3/6/1998', '+961 81430922', 'Alaa zaiter');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `name`, `date`, `adress`, `phone`) VALUES
('1', 'mohammad awde', '3/5/2019', 'baalback', '71489017'),
('1', 'mohammad awde', '1/10/2019', 'baalback', '71489017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD KEY `id` (`id`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
