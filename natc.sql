-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 07:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natc`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `kelas_id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `tutor_id` int(8) NOT NULL,
  `durasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`kelas_id`, `tanggal`, `lokasi`, `materi`, `tutor_id`, `durasi`) VALUES
(12121212, '2017-04-14', 'kosan', 'perkenalan', 16515374, 100);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_murid_id`
--

CREATE TABLE `absensi_murid_id` (
  `kelas_id` int(8) NOT NULL,
  `murid_id` int(8) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_murid_id`
--

INSERT INTO `absensi_murid_id` (`kelas_id`, `murid_id`, `tanggal`) VALUES
(12121212, 18215004, '2017-04-14'),
(12121212, 18215007, '2017-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(8) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
(18215000, 'antidisaster');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int(8) NOT NULL,
  `kelas_mapel` varchar(10) NOT NULL,
  `kelas_type` varchar(10) NOT NULL,
  `jumlah_murid` int(2) NOT NULL,
  `kelas_hari` varchar(6) NOT NULL,
  `kelas_jam` varchar(5) NOT NULL,
  `tutor_id` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_mapel`, `kelas_type`, `jumlah_murid`, `kelas_hari`, `kelas_jam`, `tutor_id`) VALUES
(12121212, 'matematika', 'private', 1, 'senin', '07.00', 16515374),
(12345678, 'matematika', 'private', 1, 'jumat', '20.00', 16515374),
(87654321, 'fisika', 'private', 1, 'senin', '08.00', 16515374);

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `user_id` int(8) NOT NULL,
  `kelas_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memiliki`
--

INSERT INTO `memiliki` (`user_id`, `kelas_id`) VALUES
(18215004, 12121212),
(18215007, 12121212),
(18215007, 87654321);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(8) NOT NULL,
  `user_pass` varchar(50) NOT NULL DEFAULT 'password',
  `user_name` varchar(25) NOT NULL,
  `user_adr` varchar(50) DEFAULT NULL,
  `user_telp` varchar(15) NOT NULL,
  `user_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_pass`, `user_name`, `user_adr`, `user_telp`, `user_type`) VALUES
(16515374, 'tes', 'Tutor', 'bandung', '0815123123', 'tutor'),
(18215004, 'password', 'teo', 'bandung', '123456789', 'murid'),
(18215007, 'tes', 'Nama', 'bandung', '08123456789', 'murid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`kelas_id`,`tanggal`);

--
-- Indexes for table `absensi_murid_id`
--
ALTER TABLE `absensi_murid_id`
  ADD PRIMARY KEY (`kelas_id`,`murid_id`,`tanggal`),
  ADD KEY `idmurid_iduser_absensi` (`murid_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD PRIMARY KEY (`user_id`,`kelas_id`),
  ADD KEY `FOREIGN_KEY` (`kelas_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18215008;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `idkelas_idkelas_kelas` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`kelas_id`);

--
-- Constraints for table `absensi_murid_id`
--
ALTER TABLE `absensi_murid_id`
  ADD CONSTRAINT `idkelas_idkelas_absensi` FOREIGN KEY (`kelas_id`) REFERENCES `absensi` (`kelas_id`),
  ADD CONSTRAINT `idmurid_iduser_absensi` FOREIGN KEY (`murid_id`) REFERENCES `memiliki` (`user_id`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `FOREIGN_KEY` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`kelas_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
