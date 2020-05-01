-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 07:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i_schools`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('riswan', 'okegan'),
('Aisah', '137');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa_ipa`
--

CREATE TABLE `data_siswa_ipa` (
  `id_user` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `agama_orangtua` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `no_orangtua` varchar(20) NOT NULL,
  `alamat_orangtua` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `username_orangtua` varchar(20) NOT NULL,
  `password_orangtua` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa_ipa`
--

INSERT INTO `data_siswa_ipa` (`id_user`, `nis`, `nama`, `password`, `email`, `tanggal_lahir`, `agama`, `asal_sekolah`, `alamat`, `no_telepon`, `nama_lengkap`, `kelas`, `foto`, `jenis_kelamin`, `semester`, `nama_ayah`, `nama_ibu`, `agama_orangtua`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_orangtua`, `alamat_orangtua`, `nik`, `username_orangtua`, `password_orangtua`) VALUES
('123456', '123456', '', '', '', '', '', '', '', '', '', 'X-A', '', '', 'Semester-1', '', '', '', '', '', '', '', '', '', ''),
('137', '6706164006', 'Nur Aisah ', '137', 'aii@gmail.com', '05/02/2017', 'Islam', '', 'Medan', '08766', 'Nur Aisah ', '', '', 'Perempuaan', '', 'Ayah', 'Ibu', 'Islam', 'PNS', 'PNS', '0766', 'Medan', '12345', '', '137');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa_ips`
--

CREATE TABLE `data_siswa_ips` (
  `id_user` varchar(10) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `agama_orangtua` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(23) NOT NULL,
  `no_orangtua` varchar(20) NOT NULL,
  `alamat_orangtua` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `username_orangtua` varchar(20) NOT NULL,
  `password_orangtua` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `kode_kehadiran` varchar(20) NOT NULL,
  `kehadiran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`kode_kehadiran`, `kehadiran`) VALUES
('H', 'Hadir'),
('I', 'Izin'),
('S', 'Sakit'),
('Z', 'Alfa');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran_ipa`
--

CREATE TABLE `kehadiran_ipa` (
  `id` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kehadiran` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran_ips`
--

CREATE TABLE `kehadiran_ips` (
  `id` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kehadiran` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_ipa`
--

CREATE TABLE `kelas_ipa` (
  `id_kelas` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_semester` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_ipa`
--

INSERT INTO `kelas_ipa` (`id_kelas`, `kelas`, `id_semester`, `semester`) VALUES
('A-1', 'X-A', 'sm-1', 'Semester-1');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_ips`
--

CREATE TABLE `kelas_ips` (
  `id_kelas` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `id_semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`) VALUES
('1', 'Agama'),
('2', 'Matematika'),
('3', 'Bahasa Inggris'),
('4', 'Bahasa Indonesia'),
('5', 'PKN');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_ips`
--

CREATE TABLE `mapel_ips` (
  `kode` varchar(20) NOT NULL,
  `mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel_ips`
--

INSERT INTO `mapel_ips` (`kode`, `mapel`) VALUES
('1', 'Matematika'),
('2', 'Bahasa Indonesia'),
('3', 'PKN'),
('4', 'B.Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ipa`
--

CREATE TABLE `nilai_ipa` (
  `id` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `harian` varchar(10) DEFAULT NULL,
  `uts` varchar(10) DEFAULT NULL,
  `nilai_semester` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ips`
--

CREATE TABLE `nilai_ips` (
  `id` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `kode_mapel` varchar(20) NOT NULL,
  `harian` varchar(20) NOT NULL,
  `uts` varchar(23) NOT NULL,
  `nilai_semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_ipa`
--

CREATE TABLE `pembayaran_ipa` (
  `nis` varchar(30) NOT NULL,
  `pembayaran` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_ips`
--

CREATE TABLE `pembayaran_ips` (
  `nis` varchar(20) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(23) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perwalian`
--

CREATE TABLE `perwalian` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `keterangan` text NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perwalian_ips`
--

CREATE TABLE `perwalian_ips` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `keterangan` text NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nis` varchar(23) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `walikelas_ipa`
--

CREATE TABLE `walikelas_ipa` (
  `kode_guru` varchar(15) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `wali_kelas_dari` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walikelas_ipa`
--

INSERT INTO `walikelas_ipa` (`kode_guru`, `nip`, `nama`, `jenis_kelamin`, `alamat`, `jabatan`, `kontak`, `wali_kelas_dari`, `foto`, `username`, `password`, `agama`, `tanggal_lahir`, `email`) VALUES
('', '4006', '', '', '', '', '', '', '', '', '137', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas_ips`
--

CREATE TABLE `walikelas_ips` (
  `alamat` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `kode_guru` varchar(15) NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `wali_kelas_dari` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walikelas_ips`
--

INSERT INTO `walikelas_ips` (`alamat`, `foto`, `jabatan`, `jenis_kelamin`, `kode_guru`, `kontak`, `nama`, `nip`, `password`, `username`, `wali_kelas_dari`, `agama`, `tanggal_lahir`, `email`) VALUES
('', 'XII-A', 'saa', 'Laki-Laki', '54321', '3', 'riswan setiawan', '123', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa_ipa`
--
ALTER TABLE `data_siswa_ipa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `data_siswa_ips`
--
ALTER TABLE `data_siswa_ips`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`kode_kehadiran`);

--
-- Indexes for table `kehadiran_ipa`
--
ALTER TABLE `kehadiran_ipa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `kehadiran_ips`
--
ALTER TABLE `kehadiran_ips`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `kelas_ipa`
--
ALTER TABLE `kelas_ipa`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_ips`
--
ALTER TABLE `kelas_ips`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `mapel_ips`
--
ALTER TABLE `mapel_ips`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `nilai_ipa`
--
ALTER TABLE `nilai_ipa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `nilai_ips`
--
ALTER TABLE `nilai_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_ipa`
--
ALTER TABLE `pembayaran_ipa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `perwalian`
--
ALTER TABLE `perwalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perwalian_ips`
--
ALTER TABLE `perwalian_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walikelas_ipa`
--
ALTER TABLE `walikelas_ipa`
  ADD PRIMARY KEY (`nip`,`wali_kelas_dari`);

--
-- Indexes for table `walikelas_ips`
--
ALTER TABLE `walikelas_ips`
  ADD PRIMARY KEY (`nip`,`wali_kelas_dari`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_ipa`
--
ALTER TABLE `nilai_ipa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai_ips`
--
ALTER TABLE `nilai_ips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perwalian_ips`
--
ALTER TABLE `perwalian_ips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_ipa`
--
ALTER TABLE `nilai_ipa`
  ADD CONSTRAINT `nilai_ipa_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ipa_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `data_siswa_ipa` (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
