-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 01:10 PM
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
(17, 'N', '0992', 'padang', '2019-07-13', 'perempuan', '2', 'elsa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'guru'),
(20, 'Isti Marlisa Fitriani', '081267352642', 'Blitar', '1997-08-05', 'perempuan', 'Jln. Bendungan Sutami Gg 2', 'istimarlisa@gmail.com', 'cb987bcfb734d7ada0c113ac32eab3c0', 'guru'),
(21, 'Wahyu Indah Windarti', '085678672463', 'Jombang', '1996-02-14', 'perempuan', 'Jln. Kartanegara No.130, Singosari', 'wahyuiw@gmail.com', 'ada35d2872dd8baa1923f736ae0582eb', 'guru'),
(22, 'Lutfiana D', '081236567533', 'Kediri', '1997-08-13', 'perempuan', 'Jln. Candi Panggung No.10', 'lutfiana@gmail.com', 'e4232a9f3399c2c8b49e838c71860829', 'guru'),
(23, 'Amira Wahyu Anditasari', '087467854567', 'Surabaya', '1996-11-11', 'perempuan', 'Jln. Terusan Cikampek No. 14', 'amirawa@gmail.com', '9f4b7a8a7e2eb3ce26412d717adf95e3', 'guru'),
(24, 'Restiana Erma Riastanti', '081230331534', 'Tulungagung', '1997-01-10', 'perempuan', 'Jln. Tanjung Putra Yudha Gg. 5', 'restianaer@gmail.com', 'e222611a84c878b565dd1e0d2cb1188d', 'guru'),
(25, 'Muhammad Fahreza', '085730376879', 'Tulungagung', '1996-12-09', 'Laki-Laki', 'Jln. Papa Biru No.11', 'mfahreza@gmail.com', '47f94f4a9a8a38fbed78fe23fbd7acfb', 'guru'),
(26, 'Diana', '085736173682', 'Malang', '1993-05-31', 'perempuan', 'Jln. Bogor No. 12 Malang', 'diana@gmail.com', '3a23bb515e06d0e944ff916e79a7775c', 'guru'),
(27, 'Ezza Zaping Aniayya', '085786276178', 'Jombang', '1998-02-10', 'perempuan', 'Jln. Mayjend Panjaitan Gg 19', 'ezzaza@gmail.com', 'fcd6ecb721039b21c09485050cf10250', 'guru'),
(28, 'Vivi Dwi R', '089567343988', 'Malang', '1992-04-20', 'perempuan', 'Jln. Sumbersari Gg 3 Malang', 'vividr@gmail.com', 'c826470e9df2febd953df410cf7d8dc6', 'guru'),
(29, 'Anggita Putri', '089356457254', 'Surabaya', '1994-06-16', 'perempuan', 'Jln. Bunga Cengkeh, Lowokwaru Malang', 'anggitap@gmail.com', '68df5a519c2849848380aef556d28e5e', 'guru'),
(30, 'Ari Setiawan', '081567525922', 'Malang', '1991-08-27', 'laki', 'Jln. Cimanggis No 8 Malang', 'aris@gmail.com', '288077f055be4fadc3804a69422dd4f8', 'guru'),
(31, 'Zakky Amalia', '081345267872', 'Malang', '1989-05-02', 'perempuan', 'Villa Puncak Tidak Blok AC No.46 ', 'zakkya@gmail.com', 'c6c28e97c393370b24be87dc928d3456', 'guru'),
(32, 'Diah Daniarti', '085678435497', 'Malang', '1991-06-18', 'perempuan', 'Jln. Cipanas No.10 Klojen Malang', 'diahd@gmail.com', 'a2e7207941e5d99a67799ab738800b91', 'guru'),
(33, 'Puput Indah Puspitasari', '081674578624', 'Malang', '1995-02-06', 'perempuan', 'Jln. Terusan Cikampek No.18', 'puputia@gmail.com', '2f9c0518effa82684bba1fe2da020908', 'guru'),
(34, 'Putra Wijaya', '082345547688', 'Malang', '1993-07-20', 'laki', 'Jln. Dieng Atas No. 75 Malang', 'putraw@gmail.com', 'fd21b7eca2b6df79b170a3fbe5d23d3f', 'guru'),
(35, 'Putri Septiana', '081466786356', 'Jakarta', '1989-04-21', 'perempuan', 'Jln. Jombang No.107', 'putriseptiana@gmail.com', 'aec4ef76fcda3c3518da4bb10367a82b', 'guru'),
(36, 'Bunga Ayu Pratiwi', '085730897322', 'Malang', '1988-09-11', 'perempuan', 'Jln. Sulfat Agung I No.22 Malang', 'bungaayup@gmail.com', '176498ec33c490c98782796b4b649940', 'guru'),
(37, 'Shinta Febrianti', '085655278926', 'Malang', '1990-02-15', 'perempuan', 'Jln. Bunga Kristan No. 31 Malang', 'Shintafeb@yahoo.com', 'c392fd68b6e3e23b64910ab86a70b8f8', 'guru'),
(38, 'Ajeng Sukma Wardani', '085322453618', 'Malang', '1982-08-02', 'perempuan', 'Jln. Pinang Merah No. 2 Lowokwaru Malang', 'ajengsukmaw@gmail.com', 'f1b08c9df37e739ab87993e09cea3b10', 'guru'),
(39, 'Sulistiani', '081855465794', 'Tangerang', '1983-03-13', 'perempuan', 'Jln. Puncak Trikora 2 Sukun,, Malang', 'sulistiani@gmail.com', '41689687caa8b1733abcdefc4a0a3601', 'guru'),
(40, 'Nurmala Sari', '085783617835', 'Batu', '1985-07-25', 'perempuan', 'Jln. Puncak Borobudur', 'nurmalasari@gmail.com', '9302d9799bb83d5bfbdfc1635e179756', 'guru'),
(41, 'Bintang Permatasari', '089563456333', 'Malang', '1990-05-29', 'perempuan', 'Jln. Permata Jingga II, Lowokwaru Malang', 'bintangpsari@gmail.com', '9c9df76bc6172446a8b12ce36f40690a', 'guru'),
(42, 'Basuki Hartanto', '085736521367', 'Pasuruan', '1980-11-18', 'laki', 'Jln. Papa Kuning, Lowokwaru Malang', 'basukihartanto@gmail.com', '26ca7c38852765159c91e5f487cb2f56', 'guru'),
(43, 'Rini Handayani', '085674256279', 'Malang', '1981-08-09', 'perempuan', 'Perum Griya Shanta Eksekutif Blok AD No. 147 Malan', 'rinihandayani@gmail.com', '507cca9ff995c24e9eb611c134064aa0', 'guru'),
(44, 'Susi Dwi Astuti', '081233568736', 'Surabaya', '1990-06-06', 'perempuan', 'Jln. Bantaran Barat III, Lowokwaru Malang', 'susidwia@gmail.com', '7961776c7a649f18bcf170e5b9645cbe', 'guru'),
(45, 'Agung Prianto', '085677561342', 'Yogyakarta', '1993-01-20', 'laki', 'Jln. Wilis No. 10, Klojen Malang', 'agungprianto@gmail.com', 'a75fe5605213a2a3b97962703c38658d', 'guru'),
(46, 'Lucky Indah Wismara', '085766576354', 'Kediri', '1995-05-08', 'perempuan', 'Jln Bantaran Barat II', 'luckyindahw@gmail.com', 'd8fbaf38d161de8d8d73ecbf18b7c8c2', 'guru'),
(47, 'Reza Febrianto', '085235765422', 'Malang', '1989-02-10', 'laki', 'Perumahan Dinoyo Permata Land Gg 8, Malang', 'rezafebri@gmail.com', '0658b06ee56f511cf8d623f6901addee', 'guru'),
(48, 'Anna Y Siregar', '081566745385', 'Malang', '1977-04-05', 'perempuan', 'Jln. Anggrek VI Lowokwaru, Malang', 'annays@gmail.com', '9cf9a063dd4fafc1a9b8c5db9aa84db1', 'guru'),
(49, 'Nisaul Fadillah ', '081455785674', 'Malang', '1991-12-24', 'perempuan', 'Jln. Bukit Dieng Permai, Sukun Malang', 'nisaulfadillah@gmail.com', 'd1b468de4e9ef7b5bbf761b0181f0bc1', 'guru');

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
  `status` varchar(15) NOT NULL,
  `lama_bekerja` int(11) NOT NULL,
  `lulusan` varchar(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `sertifikat` int(11) NOT NULL,
  `jam mengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`ID`, `id_autorisasi`, `jenjang_pendidikan`, `bidang_keahlian`, `tentang`, `foto`, `status`, `lama_bekerja`, `lulusan`, `rating`, `sertifikat`, `jam mengajar`) VALUES
(4, 16, '', '', '', '', '', 0, '', 0, 0, 0),
(5, 17, '', '', '', '', '', 0, '', 0, 0, 0),
(6, 20, 'SMP', 'Matematika, Fisika, Kimia', 'Saya sabar dan memperhatikan muridnya', '', '', 12, 'S1', 4, 3, 14),
(7, 21, 'SD', 'Bahasa Indonesia, IPA, Matematika', '', '', '', 12, 'S1', 4, 4, 14),
(8, 22, 'SD', 'Bahasa Inggris', '', '', '', 12, 'S1', 4, 2, 8),
(9, 23, 'SD', 'Bahasa Inggris', '', '', '', 24, 'S1', 5, 6, 2),
(10, 24, 'SD', 'Bahasa Inggris', '', '', '', 36, 'S1', 5, 8, 12),
(11, 25, 'SMP', 'Matematika', '', '', '', 8, 'S1', 3, 4, 5),
(12, 26, 'SMA', 'Kimia', '', '', '', 12, 'S1', 4, 2, 4),
(13, 27, 'SD', 'Matematika', '', '', '', 6, 'SMA', 4, 2, 5),
(14, 28, 'SMP', 'Fisika', '', '', '', 18, 'S1', 4, 3, 12),
(15, 29, 'SD', 'Matematika', '', '', '', 30, 'S1', 3, 6, 5),
(16, 30, 'SMA', 'Matematika', '', '', '', 13, 'D3', 4, 4, 7),
(17, 31, 'SD', 'Matematika, IPA, Bahasa Inggris', '', '', '', 48, 'D3', 5, 3, 21),
(18, 32, 'SD', 'Bahasa Indonesia', '', '', '', 40, 'D3', 4, 3, 21),
(19, 33, 'SMP', 'Matematika, Fisika', '', '', '', 15, 'D3', 3, 3, 14),
(20, 34, 'SMA', 'Biologi', '', '', '', 21, 'D3', 4, 6, 7),
(21, 35, 'SMA', 'Akuntansi', 'Saya akan mengajar anda dengan baik dan dengan semua kemamuan saya.', '', '', 2, 'S1', 4, 4, 8),
(22, 36, 'SMA', 'Ekonomi', '', '', '', 10, 'D3', 4, 3, 19),
(23, 37, 'SMA', 'Sosiologi', '', '', '', 8, 'D3', 3, 3, 10),
(24, 38, 'SMA', 'Sejarah', '', '', '', 5, 'S1', 5, 2, 7),
(25, 39, 'SMP', 'Bahasa Inggris', '', '', '', 5, 'S1', 5, 2, 7),
(26, 40, 'SMP', 'Ekonomi', '', '', '', 11, 'S2', 5, 7, 9),
(27, 41, 'SMA', 'Antropologi', '', '', '', 13, 'D3', 5, 4, 5),
(28, 42, 'SMA', 'Kimia, Fisika', '', '', '', 13, 'S1', 4, 4, 3),
(29, 43, 'SMA', 'Sosiologi', '', '', '', 16, 'S1', 4, 3, 11),
(30, 44, 'SMP', 'Sejarah', '', '', '', 20, 'S1', 3, 4, 11),
(31, 45, 'SMA', 'Bahasa Inggris', '', '', '', 22, 'D3', 4, 3, 15),
(32, 46, 'SMP', 'Ilmu Pengetahuan Alam', '', '', '', 9, 'SMA', 4, 2, 15),
(33, 47, 'SMP', 'Ilmu Pengetahuan Sosial', '', '', '', 11, 'D3', 4, 4, 12),
(34, 48, 'SMA', 'Bahasa Jepang', '', '', '', 13, 'S1', 5, 5, 10),
(35, 49, 'SD', 'Bahasa Indonesia', '', '', '', 4, 'SMA', 4, 3, 10);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  MODIFY `id_berkas_lamaran_kerja` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
