-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 10:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipp_kaitkaitbaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama_pejabat` varchar(256) DEFAULT NULL,
  `jabatan` varchar(256) DEFAULT NULL,
  `nip` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`id_pejabat`, `nama_pejabat`, `jabatan`, `nip`) VALUES
(1, 'Arif Badrus Sholeh', 'Kepala Desa', ''),
(2, 'Kadirin', 'Sekretaris Desa', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `nik` char(16) NOT NULL,
  `nokk` char(16) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `rt` varchar(50) DEFAULT NULL,
  `rw` varchar(50) DEFAULT NULL,
  `desa` varchar(200) DEFAULT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `kec_kab_prov` varchar(200) DEFAULT NULL,
  `agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Budha','Konghucu','Lainnya') DEFAULT NULL,
  `status_nikah` enum('Belum Kawin','Kawin','Cerai Hidup','Cerai Mati') DEFAULT NULL,
  `pekerjaan` varchar(200) DEFAULT NULL,
  `kewarganegaraan` varchar(200) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `nama_ayah` varchar(200) DEFAULT NULL,
  `nama_ibu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`nik`, `nokk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `desa`, `dusun`, `kec_kab_prov`, `agama`, `status_nikah`, `pekerjaan`, `kewarganegaraan`, `gol_darah`, `nama_ayah`, `nama_ibu`) VALUES
('6301051122330001', '630105', 'Muhammad Mauladi', 'Tanah Laut', '2003-05-14', 'Laki-Laki', 'Jl. Penghijauan', '003', '002', 'Desa Kait-Kait Baru', 'II', 'Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa', 'WNI', 'B', 'Ayah', 'Ibu'),
('6301051122330002', '630105', 'Rizqi Amalia Fatmaningrum', 'Tanah Laut', '2003-04-07', 'Perempuan', 'Jl. Jalan', '004', '002', 'Desa Kait-Kait Baru', 'II', 'Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa', 'WNI', 'A', 'Ayah', 'Ibu'),
('6301051122330003', '6301051122330011', 'Wardati Ulfah', 'Tanah Laut', '2003-03-14', 'Perempuan', 'Jl. Penghijauan', '002', '003', 'Desa Kait-Kait Baru', 'III', 'Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan', 'Islam', 'Belum Kawin', 'Pelajar /Mahasiswa', 'WNI', 'B', 'Abdul', 'Siti'),
('6301051122330004', '6301051122330010', 'Bagus Prasetyo', 'Amuntai', '2004-04-23', 'Laki-Laki', 'Kait-Kait Baru', '001', '001', 'Desa Kait-Kait Baru', 'I', 'Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan', 'Islam', 'Belum Kawin', 'Pelajar / Mahasiswa', 'WNI', 'A', 'Fulan', 'Fulani'),
('6301051122330005', '6301051122330044', 'Sherly Fitriani', 'Tanah Laut', '2007-07-26', 'Perempuan', 'Kait-Kait Baru', '002', '001', 'Desa Kait-Kait Baru', 'I', 'Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan', 'Islam', 'Belum Kawin', 'Pelajar / Mahasiswa', 'WNI', 'B', 'Nama Ayah', 'Nama Ibu'),
('Admin1', NULL, 'Admin SIPP Kait-Kait Baru', NULL, '2022-11-04', 'Laki-Laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Admin2', NULL, 'Admin2 SIPP Kait-Kait Baru', NULL, '2022-11-04', 'Perempuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Kades', NULL, 'Kepala Desa Kait-Kait Baru', NULL, '2022-11-04', 'Laki-Laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT001', NULL, 'Ketua RT 001', NULL, '2022-11-04', 'Laki-Laki', NULL, '001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT002', NULL, 'Ketua RT 002', NULL, '2022-11-04', 'Laki-Laki', NULL, '002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT003', NULL, 'Ketua RT 003', NULL, '2022-11-04', 'Laki-Laki', NULL, '003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT004', NULL, 'Ketua RT 004', NULL, '2022-11-04', 'Laki-Laki', NULL, '004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT005', NULL, 'Ketua RT 005', NULL, '2022-11-04', 'Laki-Laki', NULL, '005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT006', NULL, 'Ketua RT 006', NULL, '2022-11-04', 'Laki-Laki', NULL, '006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT007', NULL, 'Ketua RT 007', NULL, '2022-11-04', 'Laki-Laki', NULL, '007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT008', NULL, 'Ketua RT 008', NULL, '2022-11-04', 'Laki-Laki', NULL, '008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT009', NULL, 'Ketua RT 009', NULL, '2022-11-04', 'Laki-Laki', NULL, '009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT010', NULL, 'Ketua RT 010', NULL, '2022-11-04', 'Laki-Laki', NULL, '010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT011', NULL, 'Ketua RT 011', NULL, '2022-11-04', 'Laki-Laki', NULL, '011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT012', NULL, 'Ketua RT 012', NULL, '2022-11-04', 'Laki-Laki', NULL, '012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT013', NULL, 'Ketua RT 013', NULL, '2022-11-04', 'Laki-Laki', NULL, '013', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('RT014', NULL, 'Ketua RT 014', NULL, '2022-11-04', 'Laki-Laki', NULL, '014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` char(14) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role` enum('Admin','Kepala Desa','Pengguna','RT') NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nik` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `email`, `no_hp`, `password`, `image`, `role`, `tanggal_daftar`, `nik`) VALUES
(1, 'kaitkaitbaru@gmail.com', '0812', '$2y$10$o7QcvzwJAcsgCrn5oixhcOZJfGmS8jHgiEPqaMjvGvZsm5qNI8h9O', 'default.jpg', 'Admin', '2022-11-08', 'Admin1'),
(2, 'kaitkaitbaru@gmail.com', '08', '$2y$10$FX/0cHtlJOOv35.ZnWXN5.218sfTmBEz/xsbxsagzUq/Ms5Q734oi', 'default.jpg', 'Admin', '2022-11-08', 'Admin2'),
(3, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$La.gjM.CInBO9eYV6vuMUu359W1pLY01N2puQYqx0bQLfpgICwPoG', 'default.jpg', 'Kepala Desa', '2022-11-08', 'Kades'),
(4, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$.6nxrMljt7JaL5aGCk3KZ.KUIxp5lTTRDTvK5Y4pQD/oI.rtyjP8S', 'default.jpg', 'RT', '2022-11-08', 'RT001'),
(5, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$ocoleixidIdBDRTFIYZh7u4CwDkKr6hkFRx.jXHFn90mYUJIPUeFu', 'default.jpg', 'RT', '2022-11-08', 'RT002'),
(6, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$1.CCmXrSsW25uJZ/zDFAbun5jr53kVoDZ5dY4oJ0xqcA9fOp72BE2', 'default.jpg', 'RT', '2022-11-08', 'RT003'),
(7, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$rJS5EZVQ4mXzu/YfTsnq9OhpxDAXC54exfL0M4SDRIkxpfYSe6FfC', 'default.jpg', 'RT', '2022-11-08', 'RT004'),
(8, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$hq/K34nPKbCytR9obFgFcem68Gfq40cAEQ8KfyfosytPPGFs.5MsC', 'default.jpg', 'RT', '2022-11-08', 'RT005'),
(9, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$o9cSYj6lCbNT9NR//CBixu2xBagIAzDHlIGiS6o3YKRHOuVths3Ty', 'default.jpg', 'RT', '2022-11-08', 'RT006'),
(10, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$5aenbswQD/KCm/mFICAAfe.UgIJOgYwPtZSuvm/tXYMHT1GaIfLQ2', 'default.jpg', 'RT', '2022-11-08', 'RT007'),
(11, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$6alIAy6FO.eBbUswU1aG5eE.jWH14aVzLW41b8TKEjNHwILqm4kpa', 'default.jpg', 'RT', '2022-11-08', 'RT008'),
(12, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$gK.zQkyB20mXF/eSbpOmm.OF1nhWyu4HfWcp9Ec8Il7Wgcel.8Wum', 'default.jpg', 'RT', '2022-11-08', 'RT009'),
(13, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$T3HzlmcVOhG0/q5xu1ONNebfptrrAChldV7w9oGWku4uAD9DFAJiK', 'default.jpg', 'RT', '2022-11-08', 'RT010'),
(14, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$YnQYgorIMxB4hRbr2Vam7u6ex2va3jS6PdlmWVMYmgEJTu/aQwzZq', 'default.jpg', 'RT', '2022-11-08', 'RT011'),
(15, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$j5dxGGru6nIUauwVk.kW2OcJbiM7lAsLAr.kedzWXPJy93GtC2yDG', 'default.jpg', 'RT', '2022-11-08', 'RT012'),
(16, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$SshfHZT41WPGwbdgnvCkIOFI6D5aErA3UkWMWvI6DMSa4bGYEufue', 'default.jpg', 'RT', '2022-11-08', 'RT013'),
(17, 'kaitkaitbaru@gmail.com', '0821xxxxxxxx', '$2y$10$8FOqoWCm8aqgmvqVBvrb3.X.xRA7IPK.8bXnI8anQlMrWuqjw.VNG', 'default.jpg', 'RT', '2022-11-08', 'RT014'),
(18, 'mauladi@gmail.com', '0814xxxxxxxx', '$2y$10$0mXC/2EBCkM030kNfXZefuYXpg7DeADWqAngQinXA5ISgyXlza4x2', 'default.jpg', 'Pengguna', '2022-11-08', '6301051122330001'),
(19, 'rizqi@gmail.com', '081122334455', '$2y$10$fFgmChUJjTZYZaxE9FsyFe2gEHODhWKNZylmnhY8yCwdcWFaHyVG.', 'default.jpg', 'Pengguna', '2022-11-08', '6301051122330002'),
(20, 'ulfah@gmail.com', '082133112211', '$2y$10$Kr4MW4GKnPMm6MG0TEb0r.DDkzHZefaA5abM1iPyF0ofgBombO55u', 'default.jpg', 'Pengguna', '2022-12-01', '6301051122330003'),
(21, 'bagus123@gmail.com', '081223344556', '$2y$10$EyTGcdKDZEoHdpF/EUPKFeYQbopUwy18.i64lh/nMsPOdKz0DC2xu', 'default.jpg', 'Pengguna', '2022-12-29', '6301051122330004');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `jenis_surat` varchar(200) NOT NULL,
  `isi_surat` text DEFAULT NULL,
  `tanggal_surat` datetime NOT NULL,
  `valid_rt` int(11) NOT NULL DEFAULT 0,
  `valid_kades` int(11) NOT NULL DEFAULT 0,
  `nik` char(16) NOT NULL,
  `id_pejabat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `jenis_surat`, `isi_surat`, `tanggal_surat`, `valid_rt`, `valid_kades`, `nik`, `id_pejabat`) VALUES
(1, 'SK Domisili', '{\"nik\":\"6301051122330001\",\"nama\":\"Muhammad Mauladi\",\"tempat_lahir\":\"Tanah Laut\",\"tanggal_lahir\":\"14-05-2003\",\"jenis_kelamin\":\"Laki-Laki\",\"agama\":\"Islam\",\"status_nikah\":\"Belum Kawin\",\"pekerjaan\":\"Pelajar\\/Mahasiswa\",\"alamat\":\"Jl. Penghijauan RT 003\\/ RW 002 Dusun II Desa Kait-Kait Baru\",\"waktumenetap\":\"1 bulan\",\"tanggal_surat\":\"2022-11-09\"}', '2022-11-09 01:53:41', 1, 1, '6301051122330001', 1),
(2, 'SK Usaha', '{\"nik\":\"6301051122330002\",\"nama\":\"Rizqi Amalia Fatmaningrum\",\"tempat_lahir\":\"Tanah Laut\",\"tanggal_lahir\":\"07-04-2003\",\"jenis_kelamin\":\"Perempuan\",\"agama\":\"Islam\",\"status_nikah\":\"Belum Kawin\",\"pekerjaan\":\"Pelajar\\/Mahasiswa\",\"alamat\":\"Jl. Jalan RT 003\\/ RW 002 Dusun II Desa Kait-Kait Baru\",\"namausaha\":\"Rumah Makan Kiki\",\"waktuusaha\":\"tahun 2021\",\"tanggal_surat\":\"2022-11-09\"}', '2022-11-09 01:58:12', 1, 1, '6301051122330002', 1),
(3, 'SK Belum Menikah', '{\"nama\":\"Muhammad Mauladi\",\"nik\":\"6301051122330001\",\"tempat_lahir\":\"Tanah Laut\",\"tanggal_lahir\":\"14-05-2003\",\"jenis_kelamin\":\"Laki-Laki\",\"agama\":\"Islam\",\"status_nikah\":\"Belum Kawin\",\"pendidikan\":\"SMA\\/SLTA\",\"pekerjaan\":\"Pelajar\\/Mahasiswa\",\"alamat\":\"Jl. Penghijauan RT 003\\/ RW 002 Dusun II Desa Kait-Kait Baru\",\"keperluan\":\"Melamar Pekerjaan\",\"tanggal_surat\":\"2022-11-10\"}', '2022-11-10 20:38:42', 1, 1, '6301051122330001', 2),
(4, 'SK Usaha', '{\"nik\":\"6301051122330001\",\"nama\":\"Muhammad Mauladi\",\"tempat_lahir\":\"Tanah Laut\",\"tanggal_lahir\":\"14-05-2003\",\"jenis_kelamin\":\"Laki-Laki\",\"agama\":\"Islam\",\"status_nikah\":\"Belum Kawin\",\"pekerjaan\":\"Pelajar\\/Mahasiswa\",\"alamat\":\"Jl. Penghijauan RT 003\\/ RW 002 Dusun II Desa Kait-Kait Baru\",\"namausaha\":\"Perkebunan Kelapa\",\"waktuusaha\":\"tahun 2019\",\"tanggal_surat\":\"2022-11-10\"}', '2022-11-10 23:32:01', 2, 2, '6301051122330001', 1),
(5, 'SP SKCK', '{\"nama\":\"Wardati Ulfah\",\"nik\":\"6301051122330003\",\"tempat_lahir\":\"Tanah Laut\",\"tanggal_lahir\":\"14-03-2003\",\"agama\":\"Islam\",\"status_nikah\":\"Belum Kawin\",\"pekerjaan\":\"Pelajar \\/Mahasiswa\",\"alamat\":\"Jl. Penghijauan RT 002\\/ RW 003 Dusun III Desa Kait-Kait Baru\",\"keperluan\":\"Melamar Pekerjaan\",\"tanggal_surat\":\"2022-12-01\"}', '2022-12-01 17:58:40', 1, 1, '6301051122330003', 1),
(6, 'SK Kepemilikan Tanah', '{\"nama\":\"Wardati Ulfah\",\"nik\":\"6301051122330003\",\"tempat_lahir\":\"Tanah Laut\",\"tanggal_lahir\":\"14-03-2003\",\"jenis_kelamin\":\"Perempuan\",\"alamat\":\"Jl. Penghijauan RT 002\\/ RW 003 Dusun III Desa Kait-Kait Baru\",\"utara\":\"Jalan Desa\",\"timur\":\"Batas Timur\",\"selatan\":\"Batas Selatan\",\"barat\":\"Batas Barat\",\"atas_nama\":\"Fulan\",\"nosurat\":\"123\",\"tglsurat\":\"1 Januari 2001\",\"pernyataan\":\"Tanah tersebut adalah benar-benar milik yang bersangkutan \",\"tanggal_surat\":\"2022-12-01\"}', '2022-12-01 18:01:15', 0, 0, '6301051122330003', 1),
(7, 'SK Kematian', '{\"nama_mati\":\"Fulan\",\"nik_mati\":\"63212345\",\"jenis_kelamin\":\"Laki-Laki\",\"tempat_lahir\":\"Tanah Laut\",\"tanggallahir\":\"1991-07-10\",\"agama\":\"Islam\",\"alamat_mati\":\"Kait-Kait Baru\",\"hari\":\"Jum\'at\",\"tanggal_mati\":\"2022-07-13\",\"jam\":\"06:00\",\"tempat\":\"Kait-Kait Baru\",\"penyebab\":\"Habis Umur\",\"nama\":\"Muhammad Mauladi\",\"nik\":\"6301051122330001\",\"tanggal_lahir\":\"14-05-2003\",\"pekerjaan\":\"Pelajar\\/Mahasiswa\",\"alamat\":\"Jl. Penghijauan RT 003\\/ RW 002 Dusun II Desa Kait-Kait Baru\",\"hubungan\":\"Kerabat\",\"tanggal_surat\":\"2022-12-05\"}', '2022-12-05 19:38:11', 1, 1, '6301051122330001', 1),
(8, 'SK Belum Menikah', '{\"nama\":\"Bagus Prasetyo\",\"nik\":\"6301051122330004\",\"tempat_lahir\":\"Amuntai\",\"tanggal_lahir\":\"23-04-2004\",\"jenis_kelamin\":\"Laki-Laki\",\"agama\":\"Islam\",\"status_nikah\":\"Belum Kawin\",\"pendidikan\":\"SMA\",\"pekerjaan\":\"Pelajar \\/ Mahasiswa\",\"alamat\":\"Kait-Kait Baru RT 001\\/ RW 001 Dusun I Desa Kait-Kait Baru\",\"keperluan\":\"Melamar Pekerjaan\",\"tanggal_surat\":\"2022-12-29\"}', '2022-12-29 15:45:23', 0, 0, '6301051122330004', 1),
(9, 'SK Domisili', '{\"nik\":\"6301051122330004\",\"nama\":\"Bagus Prasetyo\",\"tempat_lahir\":\"Amuntai\",\"tanggal_lahir\":\"23-04-2004\",\"jenis_kelamin\":\"Laki-Laki\",\"agama\":\"Islam\",\"status_nikah\":\"Belum Kawin\",\"pekerjaan\":\"Pelajar \\/ Mahasiswa\",\"alamat\":\"Kait-Kait Baru RT 001\\/ RW 001 Dusun I Desa Kait-Kait Baru\",\"waktumenetap\":\"1 tahun\",\"tanggal_surat\":\"2022-12-29\"}', '2022-12-29 16:01:06', 1, 0, '6301051122330004', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `fk_nik` (`nik`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `fk_nik2` (`nik`),
  ADD KEY `fk_id_pejabat` (`id_pejabat`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD CONSTRAINT `tb_pengguna_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD CONSTRAINT `tb_surat_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_surat_ibfk_2` FOREIGN KEY (`id_pejabat`) REFERENCES `tb_pejabat` (`id_pejabat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
