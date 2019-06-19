-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 04:38 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(7) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Status` enum('Aktif','NonAktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `Status`) VALUES
('AD0001', 'Admin', 'df70d98996977a7b6f8dcf37c3265a38', 'Tegar Ferdyla', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` varchar(7) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `deskripsi` text NOT NULL,
  `p_terakhir` varchar(20) NOT NULL,
  `nm_instansi` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `Status` enum('Aktif','NonAktif') NOT NULL,
  `cv` varchar(50) NOT NULL,
  `tambahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama`, `alamat`, `username`, `password`, `telp`, `email`, `foto`, `tgl_lahir`, `jk`, `deskripsi`, `p_terakhir`, `nm_instansi`, `jurusan`, `tahun_masuk`, `tahun_lulus`, `Status`, `cv`, `tambahan`) VALUES
('KN0001', 'Abdul Ghani', 'Jl.Blora Cepu Km 5', 'an', '1c079586e87b16e492af80e7679e7e9d', '089632309715', 'antoema342@gmail.com', '', '2018-06-22', 'Pria', '1. QWRTYRGSGUAGSHHGQU\r\n2. AGAGSGASHAHSASASAS\r\n3. DSHGSDHGHDHSDHSDHS', 'S1', 'Universitas Mercu Buana', 'Teknik', 2015, 2018, 'Aktif', 'JURNAL3.pdf', '1. Kursus Sopir'),
('KN0002', 'Adul Adul', 'Jl.Daan Mogot', 'Rangga03', '1c079586e87b16e492af80e7679e7e9d', '0797987', 'antoema324@gmail.com', '', '2018-06-22', '', '1. ABANAJGAUSGUGAS\r\n2. KHAKSHASJAJKSJA\r\n3. ASAGSGAUGUGA', 'SD', '', '', 0, 0, 'Aktif', '', ''),
('KN0003', 'Adul Adul', 'Jl.Daan Mogot', 'tk', '1c079586e87b16e492af80e7679e7e9d', '0797987', 'antoema324@gmail.com', '', '2018-06-22', '', '1. ABANAJGAUSGUGAS\r\n2. KHAKSHASJAJKSJA\r\n3. ASAGSGAUGUGA', 'SD', '', '', 0, 0, 'Aktif', '', ''),
('KN0004', 'Adul Adul', 'Jl.Daan Mogot', 'tisaf', 'df70d98996977a7b6f8dcf37c3265a38', '0797987', 'antoema324@gmail.com', '', '2018-06-22', '', '1. ABANAJGAUSGUGAS\r\n2. KHAKSHASJAJKSJA\r\n3. ASAGSGAUGUGA', 'SD', '', '', 0, 0, 'Aktif', '', ''),
('KN0005', 'Dian Noviyanti', 'Jl. Praja Dalam F', 'diannovia', 'ea8cfc69b2007f338af5c24dca05be8e', '089637417255', 'diannovvia19@gmail.c', '1432394246728.jpg', '1997-11-19', '', 'Saya Rajin Membantu', 'SMA/SMK', 'SMA Muhammadiyah 18', 'Lainnya', 2012, 2015, 'Aktif', '', ''),
('KN0006', 'Tegar Ferdyla', 'Komplek DKI Joglo', 'tegarferdyla', 'df70d98996977a7b6f8dcf37c3265a38', '089637632173', 'tegarferdyla@gmail.com', 'IMG_20180323_062504_8621.jpg', '1997-07-23', 'Pria', 'Saya Baik', 'S1', 'Mercu Buana University', 'Ilmu Komputer/Teknologi Inform', 2015, 2019, 'Aktif', 'jusibi.docx', ''),
('KN0007', 'rikky aja', 'Jl. Kebon Sirih Raya N0 8 A', 'rikkyaja', '25d55ad283aa400af464c76d713c07ad', '081808007738', 'rikaja@gmail.com', '', '2018-06-30', 'Pria', 'kepo anjing', 'SMA/SMK', 'SMK YADIKA 4', 'Lainnya', 2013, 2015, 'NonAktif', '', 'juara 3 lomba balap karung');

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id_lamaran` varchar(7) NOT NULL,
  `id_perusahaan` varchar(7) NOT NULL,
  `id_kandidat` varchar(7) NOT NULL,
  `id_lowongan` varchar(7) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id_lamaran`, `id_perusahaan`, `id_kandidat`, `id_lowongan`, `tgl_daftar`, `status`) VALUES
('LM0001', 'PT0002', 'KN0004', 'LW0002', '2019-01-06', 'Direview'),
('LM0002', 'PT0002', 'KN0006', 'LW0002', '2019-05-09', 'Direview'),
('LM0003', 'PT0005', 'KN0006', 'LW0003', '2019-06-12', 'Direview');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` varchar(7) NOT NULL,
  `nama_lowongan` varchar(30) NOT NULL,
  `kategori` enum('Keuangan','Otomotif','Retail','Design','Event','Food','Developer','Administrasi') NOT NULL,
  `tgl_post` date NOT NULL,
  `bataspendaftaran` date NOT NULL,
  `gaji` int(12) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `syarat` text NOT NULL,
  `status_low` enum('Aktif','NonAktif') NOT NULL,
  `id_perusahaan` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nama_lowongan`, `kategori`, `tgl_post`, `bataspendaftaran`, `gaji`, `lokasi`, `posisi`, `deskripsi`, `syarat`, `status_low`, `id_perusahaan`) VALUES
('LW0002', 'Koki', 'Food', '2018-05-01', '2018-05-09', 250000, '', '', '', '', 'Aktif', 'PT0002'),
('LW0003', 'Sales', '', '2019-06-06', '2019-06-07', 0, '', 'sales', 'sales', 'sales', 'Aktif', 'PT0005');

-- --------------------------------------------------------

--
-- Table structure for table `lupa_password`
--

CREATE TABLE `lupa_password` (
  `id_lupapasword` int(11) NOT NULL,
  `id_kandidat` varchar(7) NOT NULL,
  `id_perusahaan` varchar(7) NOT NULL,
  `token` varchar(100) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `tanggal_berakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` varchar(7) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `nm_perusahaan` varchar(30) NOT NULL,
  `lamakerja` int(3) NOT NULL,
  `desc` text NOT NULL,
  `id_kandidat` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `jabatan`, `posisi`, `nm_perusahaan`, `lamakerja`, `desc`, `id_kandidat`) VALUES
('PN0001', 'Keuangan', 'Direktur', 'PT.ABC', 5, 'adsa', 'KN0001'),
('PN0002', 'Yayasan', 'Ketua Umum', 'PT.Tedja Buana', 2, '1. MFYSFAFSAS\r\n2. GSAGSSHASHAHS									', 'KN0001'),
('PN0003', 'Sales', 'Marketing', 'PT. Filma ', 1, 'Menawarkan Product														\r\n													', 'KN0005'),
('PN0004', 'Staff', 'IT', 'PT. Sinar Baru Wijaya', 6, 'Oracle Report														\r\n													', 'KN0006'),
('PN0005', 'Head Office Boy', 'Office Boy', 'PT.Maju Sejahtera', 4, 'alah kepo bgt														\r\n													', 'KN0007');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` varchar(7) NOT NULL,
  `nm_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` varchar(30) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `Status` enum('Aktif','NonAktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nm_perusahaan`, `alamat_perusahaan`, `logo`, `deskripsi_perusahaan`, `username`, `password`, `telp`, `email`, `website`, `Status`) VALUES
('PT0002', 'PT.Minning', 'Jl.Gajah Mada', '', '', 'Anto123', '1c079586e87b16e492af80e7679e7e9d', '089632309715', 'antoema32@gmail.com', '', 'Aktif'),
('PT0004', 'PT.Antam', 'Jl.Ketapang', '', '', 'Antam', '115f1808d2152bb1c749497c81cbc454', '08513123112312', 'help@ketapang.org', '', 'NonAktif'),
('PT0005', 'PT.PGN', 'Jl.Ketapang No 1', 'default.png', '', 'pgn', 'df70d98996977a7b6f8dcf37c3265a38', '089098098098', 'info@pgn.com', '', 'NonAktif');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id_syarat` varchar(7) NOT NULL,
  `nm_syarat` varchar(50) NOT NULL,
  `id_lowongan` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id_syarat`, `nm_syarat`, `id_lowongan`) VALUES
('1', 'SS', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_kandidat` (`id_kandidat`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `lupa_password`
--
ALTER TABLE `lupa_password`
  ADD PRIMARY KEY (`id_lupapasword`),
  ADD UNIQUE KEY `id_kandidat` (`id_kandidat`),
  ADD UNIQUE KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id_syarat`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_3` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
