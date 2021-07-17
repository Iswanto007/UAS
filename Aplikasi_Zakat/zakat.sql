-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 04:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iduser`, `username`, `password`) VALUES
(1, 'admin', '@dmin');

-- --------------------------------------------------------

--
-- Table structure for table `jeniszakat`
--

CREATE TABLE `jeniszakat` (
  `idzakat` int(11) NOT NULL,
  `namazakat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeniszakat`
--

INSERT INTO `jeniszakat` (`idzakat`, `namazakat`) VALUES
(1, 'Zakat Penghasilan'),
(2, 'Zakat Maal'),
(3, 'Zakat Fitrah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mustahiq`
--

CREATE TABLE `tb_mustahiq` (
  `id` int(11) NOT NULL,
  `jeniszakat` varchar(30) NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `norek` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mustahiq`
--

INSERT INTO `tb_mustahiq` (`id`, `jeniszakat`, `nominal`, `nama`, `notelp`, `email`, `bank`, `norek`) VALUES
(15, 'Zakat Maal', 2000000, 'adit ramdhan', '+62213456712', 'order@sticker.co.id', 'BJB', 134567125645),
(17, 'Zakat Maal', 2000000, 'Iswanto', '+62213456712', 'order@sticker.co.id', 'BNI', 134567125645);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `jeniszakat`
--
ALTER TABLE `jeniszakat`
  ADD PRIMARY KEY (`idzakat`);

--
-- Indexes for table `tb_mustahiq`
--
ALTER TABLE `tb_mustahiq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jeniszakat`
--
ALTER TABLE `jeniszakat`
  MODIFY `idzakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mustahiq`
--
ALTER TABLE `tb_mustahiq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
