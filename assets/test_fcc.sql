-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2017 at 08:05 AM
-- Server version: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Test_fcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_fcc`
--

CREATE TABLE `data_fcc` (
  `id_fcc` int(11) NOT NULL,
  `pincode_fcc` int(11) NOT NULL,
  `name_fcc` varchar(100) NOT NULL,
  `kelas_fcc` varchar(100) NOT NULL,
  `unit_fcc` enum('A','B','C','D','','') NOT NULL,
  `command_fcc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_fcc`
--

INSERT INTO `data_fcc` (`id_fcc`, `pincode_fcc`, `name_fcc`, `kelas_fcc`, `unit_fcc`, `command_fcc`) VALUES
(1, 577550, 'ALH', 'XI', 'A', 'WESTERN'),
(2, 577550, 'CHARLI', 'XI', 'B', 'EASTERN'),
(3, 577550, 'Alin ', 'XI', 'C', 'SOUTHERN'),
(4, 577550, 'BRAVO', 'XI', 'D', 'CENTRAL'),
(5, 577550, 'ALPHA', 'XI', 'E', 'SOUTHERN'),
(6, 577550, 'DELTA', 'XI', 'F', 'CENTRAL'),
(7, 577550, 'ECHO', 'XI', 'G', 'WESTERN'),
(8, 577550, 'NOVA', 'XI', 'H', 'EASTERN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_fcc`
--
ALTER TABLE `data_fcc`
  ADD PRIMARY KEY (`id_fcc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_fcc`
--
ALTER TABLE `data_fcc`
  MODIFY `id_fcc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
