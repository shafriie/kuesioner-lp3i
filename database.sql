-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 27, 2018 at 06:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alaq`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('ABO', 'Automotive Business Administrasi'),
('asdsa', 'dsadassa'),
('BA', 'Bisnis Administrasi 113'),
('OA', 'Office Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `lvl` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`, `lvl`) VALUES
(1, 'admin', 'admin', 'admin'),
(7, '113', 'shafriie113', 'user'),
(8, 'kurakura', '113', 'user'),
(9, 'asdsa', 'dsadas', 'user'),
(10, 'testingSafri', '113', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `presenter`
--

CREATE TABLE `presenter` (
  `kd_presenter` int(11) NOT NULL,
  `nama_presenter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presenter`
--

INSERT INTO `presenter` (`kd_presenter`, `nama_presenter`) VALUES
(4, 'Markus'),
(5, 'Yuni'),
(6, 'Yudi'),
(7, 'Banner'),
(8, 'Sarah'),
(9, 'Bakrie'),
(10, 'Nina'),
(11, 'Bagas'),
(12, 'Daniel');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`) VALUES
(3, 'smpn113'),
(4, 'smkn 1 boedot');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email_facebook` varchar(100) NOT NULL,
  `pin_bb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `line` varchar(100) NOT NULL,
  `telepon_rumah` varchar(100) NOT NULL,
  `telepon_wa` varchar(100) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jurusan_sekolah` varchar(100) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `telp_ortu` varchar(100) NOT NULL,
  `setelah_lulus` varchar(100) NOT NULL,
  `presenter` varchar(100) NOT NULL,
  `minat_kuliah` varchar(100) NOT NULL,
  `konsentrasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `agama`, `jenis_kelamin`, `alamat`, `email_facebook`, `pin_bb`, `twitter`, `instagram`, `line`, `telepon_rumah`, `telepon_wa`, `nama_sekolah`, `jurusan_sekolah`, `nama_ortu`, `pekerjaan_ortu`, `telp_ortu`, `setelah_lulus`, `presenter`, `minat_kuliah`, `konsentrasi`) VALUES
(1, 'LALALA', 'jakarta', '2018-06-01', 'Islam', 'Laki-laki', 'jl sunter no 9', 'lala@gmail', '0929', '0202', '0202', '0202', '021', '0858', 'smpn113', 'ipa', '0202', '0202', '02020', 'Kuliah', '5', 'Ya', 'ABO'),
(2, 'Wahyu', 'Jakarta Utara', '2018-06-13', 'Islam', 'Perempuan', 'Jln Kampung Muka Blok C no.13 RT004/RW009 Kec.Pademangan Kel.Ancol\r\nJln Kampung Muka Blok C no.13 RT004/RW009 Kec.Pademangan Kel.Ancol', 'safrisyamsudin123@gmail.com', '0000000', '33333333', '1111111', '22222222', '085811460453', '089029292929', 'smkn 1 boedot', 'ips', 'Lina', 'Karyawan', '5555555', 'Kuliah', '5', 'Ragu-ragu', 'BA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presenter`
--
ALTER TABLE `presenter`
  ADD PRIMARY KEY (`kd_presenter`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `presenter`
--
ALTER TABLE `presenter`
  MODIFY `kd_presenter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
