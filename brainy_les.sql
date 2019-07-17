-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 07:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainy_les`
--

-- --------------------------------------------------------

--
-- Table structure for table `autorisasi`
--

CREATE TABLE `autorisasi` (
  `ID` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autorisasi`
--

INSERT INTO `autorisasi` (`ID`, `nama`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `password`, `level`) VALUES
(1, 'Elsa', '26763817', 'tulungagung', '0000-00-00', 'laki', '', '', 'd41d8cd98f00b204e980', 'guru'),
(2, 'Elsa', '23462546', '', '0000-00-00', 'perempuan', '', 'elsa@gmail.com', 'cbd5e01e19615e435d63', 'murid'),
(9, 'Cika', '12345678', '', '2019-07-13', 'laki', '', 'elsa_akhmal@yahoo.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'murid'),
(11, 'Elsa', '123456', '', '1997-10-09', 'Perempuan', 'jln Surabaya', 'elsaelsa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'murid'),
(14, '', '', '', '0000-00-00', '', '', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(16, 'Ayu Hastari', '185879287972', 'jakarta', '2019-07-27', 'perempuan', 'jakarta', 'ayu@gmail.com', '01cfcd4f6b8770febfb40cb906715822', 'guru'),
(17, 'N', '0992', 'padang', '2019-07-13', 'perempuan', '2', 'elsa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `berkas_lamaran_kerja`
--

CREATE TABLE `berkas_lamaran_kerja` (
  `id_berkas_lamaran_kerja` bigint(20) NOT NULL,
  `id_autorisasi` int(11) NOT NULL,
  `bidang_keahlian` varchar(30) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `tarif` varchar(11) NOT NULL,
  `foto_resmi` varchar(100) NOT NULL,
  `sertifikat1` varchar(100) NOT NULL,
  `sertifikat2` varchar(100) NOT NULL,
  `sertifikat3` varchar(100) NOT NULL,
  `sertifikat4` varchar(100) NOT NULL,
  `sertifikat5` varchar(100) NOT NULL,
  `sertifikat6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `ID` int(11) NOT NULL,
  `id_autorisasi` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(12) NOT NULL,
  `bidang_keahlian` varchar(100) NOT NULL,
  `tentang` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`ID`, `id_autorisasi`, `jenjang_pendidikan`, `bidang_keahlian`, `tentang`, `foto`, `status`) VALUES
(4, 16, '', '', '', '', ''),
(5, 17, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_murid`
--

CREATE TABLE `data_murid` (
  `ID` int(11) NOT NULL,
  `id_autorisasi` int(11) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `tentang` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_murid`
--

INSERT INTO `data_murid` (`ID`, `id_autorisasi`, `pendidikan`, `tentang`, `foto`) VALUES
(1, 9, '', '', ''),
(3, 11, 'SMA', 'life is simple okay', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autorisasi`
--
ALTER TABLE `autorisasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  ADD PRIMARY KEY (`id_berkas_lamaran_kerja`),
  ADD KEY `berkas_lamaran_kerja` (`id_autorisasi`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `data_guru` (`id_autorisasi`);

--
-- Indexes for table `data_murid`
--
ALTER TABLE `data_murid`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_autorisasi` (`id_autorisasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autorisasi`
--
ALTER TABLE `autorisasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  MODIFY `id_berkas_lamaran_kerja` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_murid`
--
ALTER TABLE `data_murid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  ADD CONSTRAINT `berkas_lamaran_kerja` FOREIGN KEY (`id_autorisasi`) REFERENCES `autorisasi` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD CONSTRAINT `data_guru` FOREIGN KEY (`id_autorisasi`) REFERENCES `autorisasi` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_murid`
--
ALTER TABLE `data_murid`
  ADD CONSTRAINT `data_murid_ibfk_1` FOREIGN KEY (`id_autorisasi`) REFERENCES `autorisasi` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
