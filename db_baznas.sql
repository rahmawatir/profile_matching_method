-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 03:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_baznas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_beasiswa`
--

CREATE TABLE `tb_beasiswa` (
  `username` varchar(50) NOT NULL,
  `namabeasiswa` text NOT NULL,
  `penyelenggara` text NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `username` varchar(50) NOT NULL,
  `diri` text NOT NULL,
  `kk` text NOT NULL,
  `ktp` text NOT NULL,
  `pernyataan` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `aktifkuliah` text NOT NULL,
  `transkirp` text NOT NULL,
  `ktm` text NOT NULL,
  `cv` text NOT NULL,
  `portofolio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kampus`
--

CREATE TABLE `tb_kampus` (
  `username` varchar(50) NOT NULL,
  `namakampus` text NOT NULL,
  `akreditasikampus` enum('Sangat Baik','Baik','Unggul','Tidak Terakreditasi') NOT NULL,
  `fakultas` text NOT NULL,
  `namaprodi` text NOT NULL,
  `akreditasiprodi` enum('Sangat Baik','Baik','Unggul','Tidak Terakreditasi') NOT NULL,
  `ipk` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `idkategori` int(11) NOT NULL,
  `namakategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`idkategori`, `namakategori`) VALUES
(1, 'Kajian implementasi IZN (Indeks Zakat Nasional)'),
(2, 'Kajian implementasi IDZ (Indeks Desa Zakat)'),
(3, 'Kajian dampak penyaluran zakat terhadap mustahik model Cibest'),
(4, 'Kajian dampak zakat terhadap kesejahteraan masyarakat dan SDGs'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lowongan`
--

CREATE TABLE `tb_lowongan` (
  `idlowongan` int(11) NOT NULL,
  `tema` text NOT NULL,
  `tanggalmulaidaftar` date NOT NULL,
  `tanggalakhirdaftar` date NOT NULL,
  `tanggalpemeriksaan` date NOT NULL,
  `tanggalpengumuman` date NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_orangtua`
--

CREATE TABLE `tb_orangtua` (
  `username` varchar(50) NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `pekerjaanayah` varchar(50) NOT NULL,
  `penghasilanayah` int(11) NOT NULL,
  `namaibu` varchar(50) NOT NULL,
  `pekerjaanibu` varchar(50) NOT NULL,
  `penghasilanibu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `username` varchar(50) NOT NULL,
  `id_organisasi` int(11) NOT NULL,
  `nama` text NOT NULL,
  `bidang` text NOT NULL,
  `jabatan` text NOT NULL,
  `tahunmasuk` int(11) NOT NULL,
  `tahunkeluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `username` varchar(50) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `jenjang` enum('SD Sederajat','SMP Sederajat','SMA Sederajat') NOT NULL,
  `namainstitusi` text NOT NULL,
  `jurusan` text NOT NULL,
  `nilai` int(11) NOT NULL,
  `tahunmasuk` int(11) NOT NULL,
  `tahunlulus` int(11) NOT NULL,
  `nomorijazah` varchar(100) NOT NULL,
  `fotoijazah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penelitian`
--

CREATE TABLE `tb_penelitian` (
  `username` varchar(50) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `proposal` text NOT NULL,
  `ppt` text NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `username` varchar(50) NOT NULL,
  `nomorpeserta` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Khonghucu') NOT NULL,
  `statuskawin` enum('Belum Kawin','Kawin','Cerai Hidup','Cerai Mati') NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `tgldaftar` date NOT NULL,
  `status` enum('0','1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `username` varchar(50) NOT NULL,
  `id_prestasi` int(11) NOT NULL,
  `namakegiatan` text NOT NULL,
  `bidang` text NOT NULL,
  `peringkat` int(11) NOT NULL,
  `tingkat` varchar(100) NOT NULL,
  `penyelenggara` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `sertifikat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('User','Admin','Reviewer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `level`) VALUES
('admin', 'admin', 'Administrator', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_beasiswa`
--
ALTER TABLE `tb_beasiswa`
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_kampus`
--
ALTER TABLE `tb_kampus`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`idlowongan`);

--
-- Indexes for table `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD PRIMARY KEY (`id_organisasi`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `username` (`username`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `idlowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_beasiswa`
--
ALTER TABLE `tb_beasiswa`
  ADD CONSTRAINT `tb_beasiswa_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD CONSTRAINT `tb_berkas_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kampus`
--
ALTER TABLE `tb_kampus`
  ADD CONSTRAINT `tb_kampus_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  ADD CONSTRAINT `tb_orangtua_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD CONSTRAINT `tb_organisasi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD CONSTRAINT `tb_pendidikan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD CONSTRAINT `tb_penelitian_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penelitian_ibfk_2` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD CONSTRAINT `tb_peserta_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD CONSTRAINT `tb_prestasi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
