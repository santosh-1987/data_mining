-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 08:32 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_alinko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `data_fcc`
--

CREATE TABLE `data_fcc` (
  `id_fcc` int(11) NOT NULL,
  `pincode_fcc` int(11) NOT NULL,
  `name_fcc` varchar(100) NOT NULL,
  `kelas_fcc` varchar(100) NOT NULL,
  `unit_fcc` enum('A','B','C','D','E','F','G','H','I','J') NOT NULL,
  `command_fcc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas_siswa` varchar(100) NOT NULL,
  `jk_siswa` enum('A','B','C','D','','') NOT NULL,
  `jurusan_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nis_siswa`, `nama_siswa`, `kelas_siswa`, `jk_siswa`, `jurusan_siswa`) VALUES
(65, 12366, 'PK', 'I', '', 'Southern'),
(68, 34243, 'TTT', 'V', '', 'Southern'),
(69, 1021, 'CHARLIYEy', 'I', '', 'Central'),
(72, 2222, 'PANG', 'I', '', 'Western'),
(73, 3020, 'TANGO', 'II', '', 'Southern'),
(74, 73020, 'TANG', 'I', '', 'Central'),
(77, 8687, 'Titiy', 'I', '', 'Western'),
(79, 243126, 'HEMANT', 'I', '', 'Eastern'),
(81, -4, 'lkjk', 'I', '', 'Western'),
(83, 7, 'nkj', 'I', '', 'Western');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `data_fcc`
--
ALTER TABLE `data_fcc`
  ADD PRIMARY KEY (`id_fcc`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
