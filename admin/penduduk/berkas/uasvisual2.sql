-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 08:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasvisual2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_poin`
--

CREATE TABLE `tabel_poin` (
  `id_poin` varchar(3) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `poin` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_poin`
--

INSERT INTO `tabel_poin` (`id_poin`, `deskripsi`, `kategori`, `poin`) VALUES
('P-1', 'Tidak menggunakan seragam', 'Atribut', 5),
('P-2', 'Kumpul Kebo', 'Prilaku', 150),
('P-3', 'Terlambat datang ke sekolah', 'Terlambat', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_siswa` varchar(5) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` enum('IPA','IPS','AGAMA','') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_siswa`, `nis`, `nama_lengkap`, `tanggal`, `kelas`, `jurusan`, `alamat`) VALUES
('11111', '19630', 'dayat', '0000-00-00', 'X IPA', 'IPA', 'balitan'),
('123', '18273', 'andre', '0000-00-00', 'XI IPA', 'IPA', 'bcb'),
('456', '2425', 'husein', '0000-00-00', 'X IPA', 'IPA', 'bjb'),
('S-045', '12345', 'Muhammad Fauzan', '0000-00-00', 'XII IPS', 'IPS', 'Banjarbaru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_poin`
--
ALTER TABLE `tabel_poin`
  ADD PRIMARY KEY (`id_poin`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
