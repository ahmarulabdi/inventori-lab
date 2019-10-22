-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2018 at 02:12 PM
-- Server version: 10.0.33-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_invlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `keterangan_barang` text,
  `harga_per_barang` varchar(25) DEFAULT NULL,
  `harga_per_stok` varchar(25) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `id_labor` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `minimum_stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan_barang`, `harga_per_barang`, `harga_per_stok`, `merk`, `id_labor`, `stok`, `minimum_stok`) VALUES
(6, 'hdd', '500gb', '19600000', '700000', 'Transcene', 1, 0, 10),
(7, 'mouse', '2.5 GHz ', '600000', '50000', 'Ioto', 1, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_detail` int(11) NOT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_stok_terbeli` int(11) DEFAULT NULL,
  `jumlah_harga` varchar(25) DEFAULT NULL,
  `tanggal_detail_pembelian` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `sumber_dana` varchar(255) DEFAULT NULL,
  `dana_masuk` varchar(25) DEFAULT NULL,
  `dana_keluar` varchar(25) DEFAULT NULL,
  `sisa_dana` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `sumber_dana`, `dana_masuk`, `dana_keluar`, `sisa_dana`) VALUES
(6, 'PT Perseroan Terbatas 1', '20000000', '0', '20000000');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `id_labor` int(11) NOT NULL,
  `nama_labor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id_labor`, `nama_labor`) VALUES
(1, 'Labor Teknik Komputer Jaringan'),
(2, 'Labor Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `unit_pembelian`
--

CREATE TABLE `unit_pembelian` (
  `id_unit` int(11) NOT NULL,
  `jumlah` int(6) DEFAULT NULL,
  `tanggal_beli` varchar(20) DEFAULT NULL,
  `total_harga_beli` int(50) DEFAULT NULL,
  `id_keuangan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `hak_akses` enum('administrator','kepalaTIF','kepalasekolah') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `username`, `nama`, `hak_akses`) VALUES
(1, 'de2b643ce7e1d85739b5c3f552bcc4ef', 'adminlab', 'Arif Purnomo aji, A.Md', 'administrator'),
(2, '84d081d73230f20b3e9fe43422b1419a', 'kepalatif', 'Muanam Suroto, S.ST', 'kepalaTIF'),
(18, '8561863b55faf85b9ad67c52b3b851ac', 'kepsek', 'Tohir, S.Pd', 'kepalasekolah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id_labor`);

--
-- Indexes for table `unit_pembelian`
--
ALTER TABLE `unit_pembelian`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `id_labor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
