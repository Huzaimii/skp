-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 06:37 PM
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
-- Database: `revisi_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dana_blt`
--

CREATE TABLE `dana_blt` (
  `id_blt` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `pertanyaan4` enum('YA','TIDAK') NOT NULL,
  `penghasilan` varchar(200) NOT NULL,
  `kondisi_rumah` varchar(200) NOT NULL,
  `pertanyaan3` enum('YA','TIDAK') NOT NULL,
  `lsdomisili` varchar(200) NOT NULL,
  `sk_tidakmampu` varchar(200) NOT NULL,
  `fkondisi1` varchar(200) NOT NULL,
  `fkondisi2` varchar(200) NOT NULL,
  `fkondisi3` varchar(200) NOT NULL,
  `lampiran1` varchar(200) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `ket` enum('proses','Diterima','Ditolak') NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dana_blt`
--

INSERT INTO `dana_blt` (`id_blt`, `id_penduduk`, `pertanyaan4`, `penghasilan`, `kondisi_rumah`, `pertanyaan3`, `lsdomisili`, `sk_tidakmampu`, `fkondisi1`, `fkondisi2`, `fkondisi3`, `lampiran1`, `n1`, `n2`, `n3`, `n4`, `ket`, `catatan`) VALUES
(18, 26, 'YA', '1.000.000 - 3.000.000', 'Tinggi', 'YA', 'SURAT PKL.pdf', 'SURAT PKL.pdf', 'SURAT PKL.pdf', 'SURAT PKL.pdf', 'SURAT PKL.pdf', 'SURAT PKL.pdf', 100, 80, 60, 100, 'proses', ''),
(19, 25, 'YA', '<= 1.000.000', 'Rendah', 'YA', 'doc (1).pdf', 'doc.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'doc (1).pdf', 100, 100, 100, 100, 'proses', ''),
(20, 27, 'TIDAK', '1.000.000 - 3.000.000', 'Sedang', 'TIDAK', 'doc.pdf', 'doc (1).pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'doc (1).pdf', 10, 80, 80, 0, 'proses', ''),
(21, 28, 'TIDAK', '3.000.000 - 5.000.000', 'Tinggi', 'YA', 'doc (1).pdf', 'doc.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'doc (1).pdf', 10, 60, 60, 100, 'proses', ''),
(22, 29, 'YA', '3.000.000 - 5.000.000', 'Tinggi', 'YA', 'doc.pdf', 'doc (1).pdf', 'kon1.jpg', 'kon2.jpg', 'kon2.jpg', 'doc.pdf', 100, 60, 60, 100, 'Diterima', 'a'),
(23, 34, 'YA', '1.000.000 - 3.000.000', 'Sedang', 'YA', 'doc (1).pdf', 'doc (2).pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'doc (1).pdf', 100, 80, 80, 100, 'Diterima', 'berhasil diterima');

-- --------------------------------------------------------

--
-- Table structure for table `dana_bnpt`
--

CREATE TABLE `dana_bnpt` (
  `kode_bnpt` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `kondisirumah` enum('Rendah','Sedang','Tinggi','Sangat Tinggi') NOT NULL,
  `penghasilantetap` enum('YA','TIDAK') NOT NULL,
  `tidakmampuberobat` enum('YA','TIDAK') NOT NULL,
  `pertanyaan3` enum('YA','TIDAK') NOT NULL,
  `lsktdkmampu` varchar(200) NOT NULL,
  `sk_domisili` varchar(200) NOT NULL,
  `kondisi1` varchar(200) NOT NULL,
  `kondisi2` varchar(200) NOT NULL,
  `kondisi3` varchar(200) NOT NULL,
  `lampiran1` varchar(200) NOT NULL,
  `ket` enum('proses','Diterima','Ditolak') NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dana_bnpt`
--

INSERT INTO `dana_bnpt` (`kode_bnpt`, `id_penduduk`, `kondisirumah`, `penghasilantetap`, `tidakmampuberobat`, `pertanyaan3`, `lsktdkmampu`, `sk_domisili`, `kondisi1`, `kondisi2`, `kondisi3`, `lampiran1`, `ket`, `n1`, `n2`, `n3`, `n4`, `catatan`) VALUES
(15, 28, 'Rendah', 'YA', 'YA', 'YA', 'MUHAMMAD FAUZAN_17630488.pdf', 'SUPRIYADI_17630612.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'SUPRIYADI_17630612.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'Diterima', 100, 100, 100, 100, ''),
(16, 29, 'Sedang', 'YA', 'TIDAK', 'TIDAK', 'SURAT PKL.pdf', 'SURAT PKL.pdf', 'SURAT PKL.pdf', '', 'SURAT PKL.pdf', 'SURAT PKL.pdf', 'Ditolak', 80, 100, 10, 10, 'ACDC'),
(17, 25, 'Rendah', 'YA', 'YA', 'YA', 'Surat Keterangan tidak Bekerja.pdf', 'Surat keterangan Domisili.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'bukti mutlak.pdf', 'proses', 100, 100, 100, 100, ''),
(18, 26, 'Sedang', 'TIDAK', 'YA', 'TIDAK', 'kon1.jpg', 'Surat keterangan Lampiran.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'bukti mutlak.pdf', 'proses', 80, 10, 100, 10, ''),
(19, 32, 'Tinggi', 'YA', 'YA', 'TIDAK', 'Surat Keterangan tidak Bekerja.pdf', 'Surat keterangan Domisili.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'bukti mutlak.pdf', 'proses', 60, 100, 100, 10, ''),
(20, 27, 'Tinggi', 'TIDAK', 'YA', 'YA', 'Surat keterangan Lampiran.pdf', 'Surat keterangan Domisili.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'bukti mutlak.pdf', 'proses', 60, 10, 100, 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `dana_bst`
--

CREATE TABLE `dana_bst` (
  `kode_bst` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `pertanyaan1` enum('YA','TIDAK') NOT NULL,
  `pertanyaan2` enum('YA','TIDAK') NOT NULL,
  `pertanyaan3` enum('YA','TIDAK') NOT NULL,
  `pertanyaan4` enum('YA','TIDAK') NOT NULL,
  `lsktidakberja` varchar(200) NOT NULL,
  `sk_domisili` varchar(200) NOT NULL,
  `konidisi1` varchar(200) NOT NULL,
  `konidisi2` varchar(200) NOT NULL,
  `konidisi3` varchar(200) NOT NULL,
  `lampiran1` varchar(50) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `ket` enum('proses','Ditolak','Diterima') NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dana_bst`
--

INSERT INTO `dana_bst` (`kode_bst`, `id_penduduk`, `pertanyaan1`, `pertanyaan2`, `pertanyaan3`, `pertanyaan4`, `lsktidakberja`, `sk_domisili`, `konidisi1`, `konidisi2`, `konidisi3`, `lampiran1`, `n1`, `n2`, `n3`, `n4`, `ket`, `catatan`) VALUES
(18, 32, 'YA', 'YA', 'YA', 'YA', 'MUHAMMAD FAUZAN_17630488.pdf', 'SUPRIYADI_17630612.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'SUPRIYADI_17630612.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 100, 100, 100, 100, 'proses', 'berhasil diterima'),
(19, 25, 'YA', 'YA', 'YA', 'YA', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 100, 100, 100, 100, 'Diterima', 'berhasil diterima'),
(20, 31, 'YA', 'YA', 'YA', 'YA', 'Surat Keterangan tidak Bekerja.pdf', 'Surat keterangan Domisili.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'bukti mutlak.pdf', 100, 100, 100, 100, 'proses', ''),
(21, 28, 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'Surat Keterangan tidak Bekerja.pdf', 'Surat keterangan Domisili.pdf', 'kon1.jpg', 'kon2.jpg', 'kondisi3.jpg', 'bukti mutlak.pdf', 10, 10, 10, 10, 'proses', ''),
(22, 30, 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'Surat Keterangan tidak Bekerja.pdf', 'Surat keterangan Domisili.pdf', 'kon1.jpg', 'kondisi3.jpg', 'kon2.jpg', 'bukti mutlak.pdf', 100, 10, 10, 10, 'proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `dana_rtlh`
--

CREATE TABLE `dana_rtlh` (
  `kode_rtlh` varchar(200) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `bekeluarga` enum('YA','TIDAK') NOT NULL,
  `pertanyaan3` enum('YA','TIDAK') NOT NULL,
  `penghasilan` varchar(200) NOT NULL,
  `lsk_domisili` varchar(200) NOT NULL,
  `lsk_kepemilikantanah` varchar(200) NOT NULL,
  `lsk_tdkmmpu` varchar(200) NOT NULL,
  `lskbantuanlain` varchar(200) NOT NULL,
  `lampiran1` varchar(200) NOT NULL,
  `kondisi1` varchar(200) NOT NULL,
  `kondisi2` varchar(200) NOT NULL,
  `kondisi3` varchar(200) NOT NULL,
  `ket` enum('DITERIMA','DITOLAK') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dana_umkm`
--

CREATE TABLE `dana_umkm` (
  `kode_umkm` int(20) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `pertanyaan5` enum('YA','TIDAK') NOT NULL,
  `pertanyaan2` enum('YA','TIDAK') NOT NULL,
  `pertanyaan7` enum('YA','TIDAK') NOT NULL,
  `pertanyaan3` enum('YA','TIDAK') NOT NULL,
  `sk_domisili` varchar(200) NOT NULL,
  `sk_usaha` varchar(200) NOT NULL,
  `lampiran1` varchar(200) NOT NULL,
  `lampiran2` varchar(200) NOT NULL,
  `foto_lokasi` varchar(200) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `ket` enum('proses','Diterima','Ditolak') NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dana_umkm`
--

INSERT INTO `dana_umkm` (`kode_umkm`, `id_penduduk`, `pertanyaan5`, `pertanyaan2`, `pertanyaan7`, `pertanyaan3`, `sk_domisili`, `sk_usaha`, `lampiran1`, `lampiran2`, `foto_lokasi`, `n1`, `n2`, `n3`, `n4`, `ket`, `catatan`) VALUES
(9, 25, 'TIDAK', 'TIDAK', 'TIDAK', 'TIDAK', 'MUHAMMAD FAUZAN_17630488.pdf', 'SUPRIYADI_17630612.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'MUHAMMAD FAUZAN_17630488.pdf', 'SUPRIYADI_17630612.pdf', 10, 10, 10, 10, 'Diterima', ''),
(10, 26, 'YA', 'YA', 'YA', 'YA', 'Surat keterangan Domisili.pdf', 'doc.pdf', 'bukti mutlak.pdf', 'Bukti Mutlak Tidak Menerima KUR.pdf', 'war9.jpg', 100, 100, 100, 100, 'proses', ''),
(11, 28, 'YA', 'YA', 'YA', 'YA', 'doc (2).pdf', 'doc.pdf', 'bukti mutlak.pdf', 'Bukti Mutlak Tidak Menerima KUR.pdf', 'war1.jpg', 100, 100, 100, 100, 'proses', ''),
(12, 29, 'YA', 'YA', 'TIDAK', 'TIDAK', 'doc (2).pdf', 'doc (1).pdf', 'doc (2).pdf', 'doc.pdf', 'war2.jpg', 100, 100, 10, 10, 'proses', ''),
(13, 30, 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'doc (1).pdf', 'doc (2).pdf', 'doc.pdf', 'doc.pdf', 'war4.jpeg', 10, 10, 10, 100, 'proses', ''),
(14, 29, 'YA', 'TIDAK', 'YA', 'TIDAK', 'doc (2).pdf', 'doc.pdf', 'doc (1).pdf', 'doc.pdf', 'war8.jpg', 100, 10, 100, 10, 'proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `sk_domisili_i`
--

CREATE TABLE `sk_domisili_i` (
  `kode_skdi` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_setuju` date NOT NULL,
  `ket` enum('diproses','diterima','ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk_domisili_i`
--

INSERT INTO `sk_domisili_i` (`kode_skdi`, `id_penduduk`, `tgl_permohonan`, `tgl_setuju`, `ket`) VALUES
(27, 25, '2021-08-20', '2021-08-05', 'diterima'),
(28, 26, '2021-08-05', '2021-09-03', 'ditolak'),
(29, 28, '2021-08-07', '2021-09-05', 'diterima'),
(30, 29, '2021-07-10', '2021-09-15', 'diterima'),
(31, 31, '2021-08-06', '2021-09-01', 'diproses'),
(32, 32, '2021-08-20', '2021-09-07', 'diproses'),
(33, 26, '2021-09-08', '2021-09-15', 'ditolak'),
(34, 28, '2021-09-15', '2021-09-15', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `sk_tidakmampu`
--

CREATE TABLE `sk_tidakmampu` (
  `kode_tidakmampu` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `persetujuan` enum('Menunggu','Diterima','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk_tidakmampu`
--

INSERT INTO `sk_tidakmampu` (`kode_tidakmampu`, `id_penduduk`, `keperluan`, `tgl_permohonan`, `persetujuan`) VALUES
(12, 29, 'Membuat SKCK', '2021-08-15', 'Diterima'),
(13, 28, 'Berobat', '2021-08-15', 'Diterima'),
(14, 25, 'Membuat SKCK', '2021-08-15', 'Ditolak'),
(16, 27, 'Membuat Surat Keterangan sakit', '2021-08-28', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `sk_usaha`
--

CREATE TABLE `sk_usaha` (
  `kode_usaha` int(50) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `bidang_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `tgl_berdiri` date NOT NULL,
  `persetujuan` enum('Menunggu','Disetujui','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk_usaha`
--

INSERT INTO `sk_usaha` (`kode_usaha`, `id_penduduk`, `nama_usaha`, `bidang_usaha`, `alamat_usaha`, `tgl_berdiri`, `persetujuan`) VALUES
(14, 26, 'Warkubar', 'Warung', '', '2021-08-15', 'Disetujui'),
(15, 27, 'Warkubar', 'Warung', '', '2021-08-15', 'Ditolak'),
(16, 25, 'WARUNG BU Mirna', 'Sembako', '', '2021-08-15', 'Disetujui'),
(17, 31, 'Kelontong', 'Sembako', '', '2021-08-20', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `t_bobot`
--

CREATE TABLE `t_bobot` (
  `kode_bobot` varchar(200) NOT NULL,
  `nama_` varchar(200) NOT NULL,
  `bobot` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_bobot`
--

INSERT INTO `t_bobot` (`kode_bobot`, `nama_`, `bobot`) VALUES
('KD-01', 'Warga Kurang Mampu', '18'),
('KD-02', 'Bukan PNS,TNI,Pegawai BUMN Atau BUMD', '28'),
('KD-03', 'Tidak Sedang Menerima Bantuan Lain', '33'),
('KD-04', 'Derdampak Covid', '21');

-- --------------------------------------------------------

--
-- Table structure for table `t_bobotblt`
--

CREATE TABLE `t_bobotblt` (
  `kode_bobot` varchar(200) NOT NULL,
  `nama_` varchar(200) NOT NULL,
  `bobot` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_bobotblt`
--

INSERT INTO `t_bobotblt` (`kode_bobot`, `nama_`, `bobot`) VALUES
('KD-BLT-01', 'Derdampa Covid', '25'),
('KD-BLT-02', 'Penghasilan', '25'),
('KD-BLT-03', 'kondisi rumah', '25'),
('KD-BLT-04', 'Tidak Sedang Menerima Bantuan Lain', '25');

-- --------------------------------------------------------

--
-- Table structure for table `t_bobotbnpt`
--

CREATE TABLE `t_bobotbnpt` (
  `kode_bobot` varchar(200) NOT NULL,
  `nama_` varchar(200) NOT NULL,
  `bobot` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_bobotbnpt`
--

INSERT INTO `t_bobotbnpt` (`kode_bobot`, `nama_`, `bobot`) VALUES
('KODE-BNPT-01', 'Kondisi Rumah', '25'),
('KODE-BNPT-02', 'Penghasilan', '25'),
('KODE-BNPT-03', 'Tidak Sedang Menerima Bantuan Lain', '25'),
('KODE-BNPT-04', 'Kemampuan Berobat', '25');

-- --------------------------------------------------------

--
-- Table structure for table `t_bobotumkm`
--

CREATE TABLE `t_bobotumkm` (
  `kode_bobot` varchar(200) NOT NULL,
  `nama_` varchar(200) NOT NULL,
  `bobot` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_bobotumkm`
--

INSERT INTO `t_bobotumkm` (`kode_bobot`, `nama_`, `bobot`) VALUES
('KODE-UMKM-01', 'memiliki usaha mikro / memiliki usaha', '25'),
('KODE-UMKM-02', 'Bukan PNS,TNI,Pegawai BUMN Atau BUMD', '25'),
('KODE-UMKM-03', 'tidak sedang menerima kredit atau pembiyayaan dari bank KUR', '25'),
('KODE-UMKM-04', 'Tidak Sedang Menerima Bantuan Lain', '25');

-- --------------------------------------------------------

--
-- Table structure for table `t_jeniskekayaan`
--

CREATE TABLE `t_jeniskekayaan` (
  `id_kekayaan` int(11) NOT NULL,
  `jenis_kekayaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_jeniskekayaan`
--

INSERT INTO `t_jeniskekayaan` (`id_kekayaan`, `jenis_kekayaan`) VALUES
(2, 'Ternak Lele'),
(4, 'Pasar Budaya Balida'),
(5, 'Pameran Desa'),
(7, 'Pasar Dadakan Desa Balida');

-- --------------------------------------------------------

--
-- Table structure for table `t_kekayaan`
--

CREATE TABLE `t_kekayaan` (
  `id_kekayaandesa` int(11) NOT NULL,
  `id_kekayaan` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jenis` enum('pemasukan','pengeluaran') NOT NULL,
  `biaya` varchar(200) NOT NULL,
  `keterangan_kekayaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kekayaan`
--

INSERT INTO `t_kekayaan` (`id_kekayaandesa`, `id_kekayaan`, `id_penduduk`, `tgl`, `jenis`, `biaya`, `keterangan_kekayaan`) VALUES
(9, 2, 28, '2021-08-15', 'pemasukan', '90000', 'Penjualan Lele'),
(10, 7, 28, '2021-08-01', 'pengeluaran', '900000', 'Membeli alat dan bahan'),
(11, 5, 29, '2021-09-02', 'pemasukan', '900000', 'Hasil Penjualan Tiket');

-- --------------------------------------------------------

--
-- Table structure for table `t_penduduk`
--

CREATE TABLE `t_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `no_kk` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` varchar(200) NOT NULL,
  `jenkel` enum('L','W') NOT NULL,
  `agama` enum('islam','hindu','budha','kristin') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `fotodiri` varchar(200) NOT NULL,
  `fktp` varchar(200) NOT NULL,
  `fkk` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','penduduk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_penduduk`
--

INSERT INTO `t_penduduk` (`id_penduduk`, `nik`, `no_kk`, `nama_lengkap`, `email`, `tempat`, `tanggal_lahir`, `umur`, `jenkel`, `agama`, `alamat`, `rt`, `pendidikan`, `fotodiri`, `fktp`, `fkk`, `password`, `level`) VALUES
(25, '6311066007030002', '6311060104080124', 'DIWANA', 'diwana.balida@gmail.com', 'Balida', '1983-01-20', '', 'W', 'islam', 'Balida', '01/01', 'TAMAT SD / SEDERAJAT', '19.jpg', '5.jpg', '1.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(26, '6311061602800001', '6311061002090081', 'PATLAM', 'patlam.balida@gmail.com', 'Balida', '1980-02-16', '', 'L', 'islam', 'Balida', '02/01', 'TAMAT SD / SEDERAJAT', 'foto1.jpg', '2.jpg', 'kk1.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(27, '6311064107990013', '6311062201090050', 'LUKINA', 'lukmat.balida@gmail.com', 'Balida', '1999-07-01', '', 'L', 'islam', 'Balida', '02/01', 'TAMAT SD / SEDERAJAT', '4.jpg', '5.jpg', '3.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(28, '6311061503910002', '6311063012100006', 'SAMSUDIN NOOR', 'samsudin.balida@gmail.com', 'Balida', '1988-03-15', '', 'L', 'islam', 'Balida', '01/01', 'TAMAT SD / SEDERAJAT', 'foto2.jpg', '8.jpg', 'kk2.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(29, '6311066304990002', '6311060104080076', 'SITI JUMIATI', 'siti.balida@gmail.com', 'Balida', '1999-04-23', '', 'W', 'islam', 'Balida', '01/01', 'SLTA / SEDERAJAT', 'foto5.jpg', '5.jpg', 'kk1.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(30, '6311065002700001', '6311060104080092', 'SAINAH', 'sainah.balida@gmail.com', 'Balida', '1970-02-10', '', 'L', 'islam', 'Balida', '01/01', 'BELUM TAMAT SD/SEDERAJAT', '7.jpg', '6.jpg', '1.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(31, '6311060107570026', '6311060104080086', 'ILHAM', 'ilham@gmail.com', 'Balida', '1957-07-01', '', 'L', 'islam', 'Balida', '03/01', 'TAMAT SD / SEDERAJAT', 'foto3.jpg', '6.jpg', 'e-ktp-guohui-chen.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(32, '6311065310910002', '6311060702110010', 'IRLIANI', 'irliani@gmail.com', 'Balida', '1991-10-13', '', 'L', 'islam', 'Balida', '03/01', 'TAMAT SD / SEDERAJAT', 'foto7.jpg', '8.jpg', 'kk3.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin'),
(34, '6311062701992099', '6311072535363', 'Diana', 'diana@gmail.com', 'Banjarbaru', '1999-01-27', '', 'W', 'islam', 'Banjarbaru', '01/01', 'SLTP/SEDERAJAT', 'foto5.jpg', '5.jpg', 'kk1.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pengguna`
--

INSERT INTO `t_pengguna` (`id`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'aa', 'a', 'a', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `t_pkh`
--

CREATE TABLE `t_pkh` (
  `id_pkh` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `jenis_kategori` varchar(200) NOT NULL,
  `karakteria` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `status` enum('proses','terima','tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pkh`
--

INSERT INTO `t_pkh` (`id_pkh`, `id_penduduk`, `jenis_kategori`, `karakteria`, `total`, `status`) VALUES
(1, 31, 'Ibu hamil', 'kehamilan pertama', '3.000.000', 'terima'),
(2, 28, 'Anak usia dini', 'satu anak dalam satu keluarga', '3.000.000', 'terima'),
(3, 26, 'Penyandang disabilitas', 'satu orang dalam keluarga', '2.400.000', 'terima'),
(4, 27, 'Anak usia sekolah SMP', 'satu anak dalam satu keluarga', '900.000', 'terima');

-- --------------------------------------------------------

--
-- Table structure for table `t_tdkttp`
--

CREATE TABLE `t_tdkttp` (
  `kode_tdkttp` varchar(200) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `gaji` varchar(200) NOT NULL,
  `keperluan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dana_blt`
--
ALTER TABLE `dana_blt`
  ADD PRIMARY KEY (`id_blt`),
  ADD KEY `nik` (`id_penduduk`);

--
-- Indexes for table `dana_bnpt`
--
ALTER TABLE `dana_bnpt`
  ADD PRIMARY KEY (`kode_bnpt`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `dana_bst`
--
ALTER TABLE `dana_bst`
  ADD PRIMARY KEY (`kode_bst`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `dana_rtlh`
--
ALTER TABLE `dana_rtlh`
  ADD PRIMARY KEY (`kode_rtlh`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `dana_umkm`
--
ALTER TABLE `dana_umkm`
  ADD PRIMARY KEY (`kode_umkm`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `sk_domisili_i`
--
ALTER TABLE `sk_domisili_i`
  ADD PRIMARY KEY (`kode_skdi`),
  ADD KEY `nik` (`id_penduduk`);

--
-- Indexes for table `sk_tidakmampu`
--
ALTER TABLE `sk_tidakmampu`
  ADD PRIMARY KEY (`kode_tidakmampu`),
  ADD KEY `nik` (`id_penduduk`);

--
-- Indexes for table `sk_usaha`
--
ALTER TABLE `sk_usaha`
  ADD PRIMARY KEY (`kode_usaha`),
  ADD KEY `nik` (`id_penduduk`);

--
-- Indexes for table `t_bobot`
--
ALTER TABLE `t_bobot`
  ADD PRIMARY KEY (`kode_bobot`);

--
-- Indexes for table `t_bobotblt`
--
ALTER TABLE `t_bobotblt`
  ADD PRIMARY KEY (`kode_bobot`);

--
-- Indexes for table `t_bobotbnpt`
--
ALTER TABLE `t_bobotbnpt`
  ADD PRIMARY KEY (`kode_bobot`);

--
-- Indexes for table `t_bobotumkm`
--
ALTER TABLE `t_bobotumkm`
  ADD PRIMARY KEY (`kode_bobot`);

--
-- Indexes for table `t_jeniskekayaan`
--
ALTER TABLE `t_jeniskekayaan`
  ADD PRIMARY KEY (`id_kekayaan`);

--
-- Indexes for table `t_kekayaan`
--
ALTER TABLE `t_kekayaan`
  ADD PRIMARY KEY (`id_kekayaandesa`),
  ADD KEY `id_kekayaan` (`id_kekayaan`,`id_penduduk`),
  ADD KEY `nik` (`id_penduduk`);

--
-- Indexes for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pkh`
--
ALTER TABLE `t_pkh`
  ADD PRIMARY KEY (`id_pkh`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `t_tdkttp`
--
ALTER TABLE `t_tdkttp`
  ADD PRIMARY KEY (`kode_tdkttp`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dana_blt`
--
ALTER TABLE `dana_blt`
  MODIFY `id_blt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `dana_bnpt`
--
ALTER TABLE `dana_bnpt`
  MODIFY `kode_bnpt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dana_bst`
--
ALTER TABLE `dana_bst`
  MODIFY `kode_bst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dana_umkm`
--
ALTER TABLE `dana_umkm`
  MODIFY `kode_umkm` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sk_domisili_i`
--
ALTER TABLE `sk_domisili_i`
  MODIFY `kode_skdi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sk_tidakmampu`
--
ALTER TABLE `sk_tidakmampu`
  MODIFY `kode_tidakmampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sk_usaha`
--
ALTER TABLE `sk_usaha`
  MODIFY `kode_usaha` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_jeniskekayaan`
--
ALTER TABLE `t_jeniskekayaan`
  MODIFY `id_kekayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_kekayaan`
--
ALTER TABLE `t_kekayaan`
  MODIFY `id_kekayaandesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_pkh`
--
ALTER TABLE `t_pkh`
  MODIFY `id_pkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dana_blt`
--
ALTER TABLE `dana_blt`
  ADD CONSTRAINT `dana_blt_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dana_bnpt`
--
ALTER TABLE `dana_bnpt`
  ADD CONSTRAINT `dana_bnpt_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dana_bst`
--
ALTER TABLE `dana_bst`
  ADD CONSTRAINT `dana_bst_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dana_rtlh`
--
ALTER TABLE `dana_rtlh`
  ADD CONSTRAINT `dana_rtlh_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dana_umkm`
--
ALTER TABLE `dana_umkm`
  ADD CONSTRAINT `dana_umkm_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sk_domisili_i`
--
ALTER TABLE `sk_domisili_i`
  ADD CONSTRAINT `sk_domisili_i_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sk_tidakmampu`
--
ALTER TABLE `sk_tidakmampu`
  ADD CONSTRAINT `sk_tidakmampu_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sk_usaha`
--
ALTER TABLE `sk_usaha`
  ADD CONSTRAINT `sk_usaha_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_kekayaan`
--
ALTER TABLE `t_kekayaan`
  ADD CONSTRAINT `t_kekayaan_ibfk_1` FOREIGN KEY (`id_kekayaan`) REFERENCES `t_jeniskekayaan` (`id_kekayaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kekayaan_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pkh`
--
ALTER TABLE `t_pkh`
  ADD CONSTRAINT `t_pkh_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_tdkttp`
--
ALTER TABLE `t_tdkttp`
  ADD CONSTRAINT `t_tdkttp_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
