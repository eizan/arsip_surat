-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 12:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `kode`, `bagian`, `keterangan`) VALUES
(1, 'TU.01', 'Subbag TU', ''),
(2, 'KU.01.01', 'Keuangan', ''),
(3, 'UP.01.02', 'Kepegawaian', ''),
(4, 'UM.01.03', 'Umum', ''),
(5, 'PN.01.04', 'Perencanaan', ''),
(6, 'KH.01.05', 'Kehumasan', ''),
(7, 'PM.03', 'Pendidikan Madrasah', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `klasifikasi` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `ringkasan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kode_box` varchar(255) NOT NULL,
  `kode_rak` varchar(255) NOT NULL,
  `kode_almari` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `nomor`, `tanggal`, `klasifikasi`, `pengirim`, `sifat`, `perihal`, `ringkasan`, `keterangan`, `kode_box`, `kode_rak`, `kode_almari`, `file`) VALUES
(1, 'asd', '2018-04-18', 'Subbag TU', 'das', 'B', 'dsa', 'dsa', 'dsa', '1B', 'A', '1', 'eoxi395qm0owowg.jpeg'),
(2, '23441', '2018-04-18', 'Subbag TU', 'Joko', 'R', 'Menundang untuk acara tahunan', 'mengaajak seluruh masyarakat dari eleemnt', 'tembusan dikti', '1B', 'A', '1', 'vinioao3mhc880.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `klasifikasi` varchar(255) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `ringkasan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kode_box` varchar(255) NOT NULL,
  `kode_rak` varchar(255) NOT NULL,
  `kode_almari` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `nomor`, `tanggal`, `klasifikasi`, `penerima`, `sifat`, `perihal`, `ringkasan`, `keterangan`, `kode_box`, `kode_rak`, `kode_almari`, `file`) VALUES
(21, '123123', '2018-04-12', 'Subbag TU', 'dsad', 'R', 'dasd', 'da', 'das', '1B', 'A', '1', '3rlk7rp299icw04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_nama`, `admin_foto`) VALUES
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Yanti Aryani', '1kqeusvxq2e8o88.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
