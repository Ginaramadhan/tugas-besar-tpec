-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 02:07 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `Id_anak` int(10) NOT NULL,
  `Nama_anak` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Berat_badan` varchar(5) NOT NULL,
  `Tinggi_badan` int(5) NOT NULL,
  `Usia` varchar(30) NOT NULL,
  `Nama_ibu` varchar(20) NOT NULL,
  `Nama_ayah` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`Id_anak`, `Nama_anak`, `Tanggal_lahir`, `Jenis_kelamin`, `Berat_badan`, `Tinggi_badan`, `Usia`, `Nama_ibu`, `Nama_ayah`, `Alamat`, `Status`) VALUES
(1, 'Ghina Aghinia', '2020-06-01', 'Perempuan', '2.7', 45, '25 Hari', 'Sari Komariah', 'Wawan Hermawan', 'Kp. Cisalak Rt.03/Rw.22 No. 56', 'Warga Asli'),
(2, 'Giska Sandrina Aulia', '2020-05-26', 'Perempuan', '3.1  ', 50, '1 Bulan', 'Nia Kurnia', 'Ayi Hambali', 'Kp. Cisalak Rt.03/Rw.22 No.02, Kertajaya', 'Warga Asli'),
(3, 'Raihan Fauzan', '2020-05-01', 'Laki-Laki', '4', 55, '2 Bulan', 'Juhariyah', 'Duden Rohmat', 'Kp. Cisalak Rt.03/Rw.22 No.101, Kertajaya', 'Warga Asli'),
(4, 'Dimas Muhammad Dzaky', '2020-06-24', 'Laki-Laki', '3.0', 51, '2 Hari', 'Yuni Wulandari', 'Dede Mulyana', 'Kp. Cisalak Rt.02/Rw.22 No. 14, Kertajaya', 'Warga Asli'),
(5, 'Kheysa Aqila Nurrizky', '2020-06-16', 'Perempuan', '2.9', 47, '10 Hari', 'Nuri Pratiwi ', 'Rizky Hermansyah', 'Kp. Cisalak Rt.01/Rw.22 No.07, Kertajaya', 'Warga Asli'),
(6, 'Muhammad Akbar', '2020-06-24', 'Laki-Laki', '3.0', 49, '2 Hari', 'Cucu Kurnia', 'Egis', 'Kp. Cisalak Rt.03/Rw.22 No.47, Kertajaya', 'Warga Asli'),
(7, 'Nizar Ahmad', '2020-06-19', 'Laki-Laki', '3.0', 50, '1 Minggu (7 Hari)', 'Ida ', 'Ujang', 'Kp. Ciburial No. 50, Padalarang', 'Warga Tamu'),
(8, 'Fabian Putra', '2020-06-21', 'Laki-Laki', '3.2', 50, '5 Hari', 'Siti Nurlaela', 'Rinaldi Putra', 'Kp. Cisalak No.43, Kertajaya', 'Warga Asli'),
(9, 'Meyla Putri Juniasih', '2020-06-05', 'Perempuan', '3.3', 55, '21 Hari', 'Lilis', 'Deden', 'Kp. Cisalak No.49, Kertajaya', 'Warga Asli'),
(10, 'Fizi Firmansyah', '2020-05-19', 'Laki-Laki', '3.7', 57, '2 Bulan 7 Hari', 'Fitria', 'Rusmana', 'Kp. Tagog No. 67, Padalarang', 'Warga Tamu'),
(11, 'Ismail Abdullah', '2020-06-05', 'Laki-Laki', '3.5', 50, '3 Minggu', 'Ai Firmansyah', 'Aang', 'Kp. Kebon Kalapa No.45, Kertajaya', 'Warga Tamu'),
(12, 'Ikhsan Fauzi', '2020-06-19', 'Laki-Laki', '3.2', 54, '1 Minggu', 'Ikrima', 'Sepudin', 'Kp. Cisalak No.15, Kertajaya', 'Warga Asli'),
(13, 'Annisa Susanti', '2020-06-22', 'Perempuan', '3.23', 45, '4 Hari', 'Fauziah', 'Roky Putra', 'Kp. Kebon Kalapa No. 75, Padalarang', 'Warga Tamu');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `Kode_artikel` int(10) NOT NULL,
  `Judul_artikel` varchar(5000) NOT NULL,
  `Isi_artikel` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`Kode_artikel`, `Judul_artikel`, `Isi_artikel`) VALUES
(2, 'APA ITU POSYANDU ?', 'Pelayanan kesehatan terpadu (yandu) yang merupakan suatu bentuk keterpaduan pelayanan kesehatan yang dilaksanakan di suatu wilayah kerja Puskesmas dengan penanggung jawabnya yaitu Kepala Desa. Tempat pelaksanaan pelayanan program terpadu di balai dusun, balai kelurahan, RW, dan sebagainya disebut dengan Pos pelayanan terpadu (Posyandu)'),
(3, 'Penimbangan dan Imunisasi', 'Penimbangan dan Imunisasi merupakan kegiatan rutin yang dilakukan oleh Posyandu yang dilakukan 2 kali dalam 1 bulan atau bahkan 1 kali sebulan'),
(4, 'Data Laporan kegiatan rutin', 'Kegiatan ini merupakan kegiatan akhir setelah melakukan kegiatan - kegiatan rutin untuk diberikan kepada Desa sebagai laporan kegiatan rutin');

-- --------------------------------------------------------

--
-- Table structure for table `gizi`
--

CREATE TABLE `gizi` (
  `Kode_gizi` int(10) NOT NULL,
  `Id_anak` int(10) NOT NULL,
  `Tanggal_cek` date NOT NULL,
  `Berat_gizi` varchar(5) NOT NULL,
  `Tinggi_gizi` int(5) NOT NULL,
  `Hasil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gizi`
--

INSERT INTO `gizi` (`Kode_gizi`, `Id_anak`, `Tanggal_cek`, `Berat_gizi`, `Tinggi_gizi`, `Hasil`) VALUES
(1, 1, '2020-06-26', '2.6', 45, 'Kurus'),
(2, 7, '2020-06-26', '3.1', 51, 'Normal'),
(3, 10, '2020-06-26', '3.0', 47, 'Normal'),
(4, 12, '2020-06-26', '3.2', 50, 'Normal'),
(5, 13, '2020-06-26', '3.1', 45, 'Gemuk');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `Kode_imunisasi` int(10) NOT NULL,
  `Jenis_imunisasi` varchar(30) NOT NULL,
  `Usia_wajib` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`Kode_imunisasi`, `Jenis_imunisasi`, `Usia_wajib`) VALUES
(1, 'BCG', '1  Bulan'),
(2, 'DPT - 1', '1 Bulan'),
(3, 'DPT - 2', '2 Bulan'),
(4, 'DPT - 3', '3 Bulan'),
(5, 'POLIO - 1', '1 Bulan'),
(6, 'POLIO - 2', '2 Bulan'),
(7, 'POLIO  - 3', '3 Bulan'),
(8, 'POLIO - 4', '4 Bulan'),
(9, 'MRI', '9 Bulan'),
(10, 'CAMPAK ', '9 Bulan'),
(11, 'MRI - 2', '5 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Kode_login` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Kode_login`, `Username`, `Password`, `Nama_admin`) VALUES
(1, 'Syahdillahtsn', '123456', 'Syahdillah TA'),
(2, 'Ginascr', '123456', 'Gina Suciani');

-- --------------------------------------------------------

--
-- Table structure for table `timbangan`
--

CREATE TABLE `timbangan` (
  `Kode_timbangan` int(10) NOT NULL,
  `Id_anak` int(10) NOT NULL,
  `Tanggal_penimbangan` date NOT NULL,
  `Berat_timbangan` varchar(5) NOT NULL,
  `Tinggi_timbangan` int(5) NOT NULL,
  `Kode_imunisasi` int(10) NOT NULL,
  `Kode_vitamin` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timbangan`
--

INSERT INTO `timbangan` (`Kode_timbangan`, `Id_anak`, `Tanggal_penimbangan`, `Berat_timbangan`, `Tinggi_timbangan`, `Kode_imunisasi`, `Kode_vitamin`) VALUES
(1, 1, '2020-06-26', '2.6', 46, 4, 1),
(2, 2, '2020-06-26', '3.3', 50, 3, 1),
(3, 7, '2020-06-26', '3.0', 51, 3, 1),
(4, 10, '2020-06-26', '4.0', 59, 5, 1),
(5, 12, '2020-06-26', '3.3', 54, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vitamin`
--

CREATE TABLE `vitamin` (
  `Kode_vitamin` int(10) NOT NULL,
  `Jenis_vitamin` varchar(20) NOT NULL,
  `Usia_wajib_vitamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitamin`
--

INSERT INTO `vitamin` (`Kode_vitamin`, `Jenis_vitamin`, `Usia_wajib_vitamin`) VALUES
(1, 'VITAMIN A MERAH', '0 HARI - 5 TAHUN'),
(2, 'VITAMIN A BIRU', '5 TAHUN - 11 TAHUN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`Id_anak`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`Kode_artikel`);

--
-- Indexes for table `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`Kode_gizi`),
  ADD KEY `Id_anak` (`Id_anak`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`Kode_imunisasi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Kode_login`);

--
-- Indexes for table `timbangan`
--
ALTER TABLE `timbangan`
  ADD PRIMARY KEY (`Kode_timbangan`),
  ADD KEY `Id_anak` (`Id_anak`),
  ADD KEY `Kode_imunisasi` (`Kode_imunisasi`),
  ADD KEY `Kode_vitamin` (`Kode_vitamin`);

--
-- Indexes for table `vitamin`
--
ALTER TABLE `vitamin`
  ADD PRIMARY KEY (`Kode_vitamin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `Id_anak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `Kode_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gizi`
--
ALTER TABLE `gizi`
  MODIFY `Kode_gizi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `Kode_imunisasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Kode_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timbangan`
--
ALTER TABLE `timbangan`
  MODIFY `Kode_timbangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vitamin`
--
ALTER TABLE `vitamin`
  MODIFY `Kode_vitamin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gizi`
--
ALTER TABLE `gizi`
  ADD CONSTRAINT `gizi_ibfk_1` FOREIGN KEY (`Id_anak`) REFERENCES `anak` (`Id_anak`);

--
-- Constraints for table `timbangan`
--
ALTER TABLE `timbangan`
  ADD CONSTRAINT `timbangan_ibfk_1` FOREIGN KEY (`Id_anak`) REFERENCES `anak` (`Id_anak`),
  ADD CONSTRAINT `timbangan_ibfk_2` FOREIGN KEY (`Kode_imunisasi`) REFERENCES `imunisasi` (`Kode_imunisasi`),
  ADD CONSTRAINT `timbangan_ibfk_3` FOREIGN KEY (`Kode_vitamin`) REFERENCES `vitamin` (`Kode_vitamin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
