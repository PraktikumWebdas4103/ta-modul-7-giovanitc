-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 05:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `input`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `jenis` varchar(13) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `asal` varchar(40) NOT NULL,
  `moto` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`nama`, `nim`, `jenis`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('', '', '', 'mi', 'FIT', '', ''),
('nmnmnm', '08865', 'Perempuan', 'mi', 'FIT', 'ghtghgtj', 'fgdgf'),
('abcde', '12345678', 'Laki-Laki', 'mi', 'FIT', 'qweretr', 'rt57iyjhghb'),
('giovani', '435426367231435', 'Perempuan', 'mi', 'FIT', 'dsewws', 'dsadesf'),
('nnnnnnnnn', '8888888888', 'Laki-Laki', 'mi', 'FIT', 'nnnnnnnn', 'nnnnnnnnn'),
('aaaaaaaaaaaaaaa', 'aaaaaaaaaa', 'Laki-Laki', 'mi', 'FIT', 'aaaaaaa', 'aaaaaaaaaaaa'),
('DFSF', 'bbbbbbbbbbbb', 'Laki-Laki', 'mi', 'FIT', 'fffffffffffff', 'rrrrrrrrrrrr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
