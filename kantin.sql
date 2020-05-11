-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 12:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantin`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` enum('pria','wanita') NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idAkun`, `nama`, `jeniskelamin`, `username`, `password`) VALUES
(4, 'Faisol', 'pria', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `jenisbarang` enum('makanan','minuman') NOT NULL,
  `hargamodal` int(11) NOT NULL,
  `hargajual` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `namabarang`, `jenisbarang`, `hargamodal`, `hargajual`, `stock`) VALUES
(7, 'ayam', 'makanan', 10000, 20000, 112),
(8, 'bebek', 'makanan', 20000, 30000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `jualsatuan`
--

CREATE TABLE `jualsatuan` (
  `idjual` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `hargajual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `totaljual` int(11) NOT NULL,
  `nominalbayar` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jualsatuan`
--

INSERT INTO `jualsatuan` (`idjual`, `idBarang`, `hargajual`, `jumlah`, `totaljual`, `nominalbayar`, `tanggal`) VALUES
(5, 7, 20000, 1, 20000, 20000, '2019-01-09 22:35:36'),
(6, 8, 30000, 5, 150000, 150000, '2019-01-11 17:44:12'),
(7, 7, 20000, 1, 20000, 20000, '2019-01-16 18:41:00'),
(8, 7, 20000, 2, 20000, 20000, '2019-01-16 19:47:56'),
(9, 7, 20000, 2, 20000, 20000, '2019-01-16 19:48:14'),
(10, 7, 20000, 2, 40000, 40000, '2019-01-16 20:34:13'),
(11, 7, 20000, 2, 40000, 40000, '2019-01-16 20:43:31');

--
-- Triggers `jualsatuan`
--
DELIMITER $$
CREATE TRIGGER `delete_penjualan` AFTER DELETE ON `jualsatuan` FOR EACH ROW update barang
set stock = stock + old.jumlah
where idBarang = old.idBarang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `idStock` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`idStock`, `idBarang`, `jumlah`, `tanggal`) VALUES
(1, 7, 10, '2019-01-09 23:08:36'),
(2, 8, 10, '2019-01-11 17:43:30'),
(3, 7, 100, '2019-01-20 10:15:34');

--
-- Triggers `stock`
--
DELIMITER $$
CREATE TRIGGER `delete_stock` AFTER DELETE ON `stock` FOR EACH ROW update barang
set stock = stock-old.jumlah
where idBarang = old.idBarang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER UPDATE ON `stock` FOR EACH ROW UPDATE barang
set stock = stock - old.jumlah+new.jumlah
where idBarang = new.idBarang
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `jualsatuan`
--
ALTER TABLE `jualsatuan`
  ADD PRIMARY KEY (`idjual`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idStock`),
  ADD KEY `index` (`idBarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jualsatuan`
--
ALTER TABLE `jualsatuan`
  MODIFY `idjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `idStock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
