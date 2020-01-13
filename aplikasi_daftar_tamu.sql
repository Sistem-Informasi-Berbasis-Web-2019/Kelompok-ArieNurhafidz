-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 01:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_daftar_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `user_name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama`, `ruangan`) VALUES
(1, 'Ridwan', 'ruangan A lantai 1'),
(2, 'Luqi', 'ruangan A lantai 1'),
(3, 'Dony', 'ruangn B lantai 2');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`) VALUES
(42, 'logo.jpg', 42929, 'image/jpeg'),
(43, 'logo.jpg', 42929, 'image/jpeg'),
(44, 'silang.png', 7555, 'image/png'),
(45, 'silang.png', 7555, 'image/png'),
(46, 'logo.jpg', 42929, 'image/jpeg'),
(47, 'logo.jpg', 42929, 'image/jpeg'),
(48, 'Untitled.png', 254218, 'image/png'),
(49, 'Untitled.png', 254218, 'image/png'),
(50, 'call_of_duty__black_ops_3_twitter_header_wallpaper_by_tmc_omega-d8p545x.png', 465729, 'image/png'),
(51, 'call_of_duty__black_ops_3_twitter_header_wallpaper_by_tmc_omega-d8p545x.png', 465729, 'image/png'),
(52, 'images.jpg', 7063, 'image/jpeg'),
(53, 'images.jpg', 7063, 'image/jpeg'),
(54, 'logo.jpg', 42929, 'image/jpeg'),
(55, 'logo.jpg', 42929, 'image/jpeg'),
(56, 'Untitled.png', 254218, 'image/png'),
(57, 'Untitled.png', 254218, 'image/png'),
(58, 'logo.jpg', 42929, 'image/jpeg'),
(59, 'logo.jpg', 42929, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `no` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `photo` varchar(1000) DEFAULT NULL,
  `asal` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `tujuan` varchar(35) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `kepuasan` varchar(50) NOT NULL,
  `ulasan` varchar(1000) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`no`, `nama`, `photo`, `asal`, `no_hp`, `tujuan`, `perihal`, `kepuasan`, `ulasan`, `waktu_masuk`, `waktu_keluar`) VALUES
(1, 'Sandi Rizaldi', 'foto_tamu/1525756533824.jpg', 'Sumedang', '089657376736', 'Dony', 'Magang', 'puas', 'Mantabs', '2018-05-08 12:15:33', '2018-05-08 12:15:48'),
(2, 'Ikbal', 'foto_tamu/1525757765306.jpg', 'Bogor', '081598763', 'Ridwan', 'Kerja', 'puas', 'Menyenangkan', '2018-05-08 12:36:05', '2018-05-08 12:36:12'),
(3, 'TEST', 'foto_tamu/1525757849694.jpg', 'TEST', '123456789', 'Luqi', 'TEST', 'tidak puas', 'HHHMMM', '2018-05-08 12:37:29', '2018-05-08 16:28:34'),
(4, 'Hamba Allah', 'foto_tamu/1525758071657.jpg', '-', '9999999999', 'Ridwan', 'Secret', 'tidak puas', 'HHMMM', '2018-05-08 12:41:11', '2018-05-08 12:41:22'),
(5, 'Dery Ramdhani', 'foto_tamu/1525763807211.jpg', 'Diskominfo', '085351111430', 'Luqi', 'Konsultasi', 'puas', 'OK', '2018-05-08 14:16:47', '2018-05-08 14:17:26'),
(6, 'Kimbo', 'foto_tamu/1525769428519.jpg', 'Kalimantan', '987654321', 'Dony', 'Konsultasi', 'tidak puas', 'Hmmmmm', '2018-05-08 15:50:28', '2018-05-08 15:50:43'),
(7, 'Sheryll', 'foto_tamu/1525771629957.jpg', 'Sumedang', '654565456', 'Luqi', 'Test', 'tidak puas', 'TEST', '2018-05-08 16:27:09', '2018-05-08 16:27:34'),
(8, 'Daniel', 'foto_tamu/1525771971490.jpg', 'Mataram', '081809764000', 'Dony', 'Magang', '', '', '2018-05-08 16:32:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tambah`
--

CREATE TABLE `tambah` (
  `no` int(100) NOT NULL,
  `runtext` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tambah`
--

INSERT INTO `tambah` (`no`, `runtext`) VALUES
(1, 'SELAMAT DATANG DI DISKOMINFO PROVINSI JAWA BARAT'),
(27, '1'),
(28, '2'),
(29, '3'),
(30, '4'),
(31, 'hhhhho'),
(32, 'hello brooo'),
(33, 'maaannnn'),
(34, 'aaaaaa'),
(35, 'aaaaaa'),
(36, 'aaaaaa'),
(37, 'sasasasa'),
(38, 'dshnfijeifeahjfg'),
(39, 'asasasa'),
(40, 'asasasa'),
(41, ''),
(42, 'ga ada berita'),
(43, 'MAKAN AYAM'),
(44, 'SELAMAT DATANG DI DISKOMINFO PROVINSI JAWA BARAT'),
(45, 'Mantabs'),
(46, 'SELAMAT DATANG DI DISKOMINFO PROVINSI JAWA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_files` int(11) DEFAULT NULL,
  `nama_files` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD UNIQUE KEY `no` (`no`) USING BTREE;

--
-- Indexes for table `tambah`
--
ALTER TABLE `tambah`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tambah`
--
ALTER TABLE `tambah`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
