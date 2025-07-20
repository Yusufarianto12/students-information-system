-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2025 at 03:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `pekerjaan` varchar(112) NOT NULL,
  `hobi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `pekerjaan`, `hobi`) VALUES
(1, 'Anisa Widiastuti', 'Sleman', 'Perempuan', 'Pelajar', 'Jalan-Jalan'),
(2, 'Syifa', 'Pekalongan', 'Perempuan', 'Pelajar', 'Olahraga'),
(3, 'Syifa', 'Pekalongan', 'Perempuan', 'Pelajar', 'Olahraga'),
(4, 'Aulia', 'Depok', 'Perempuan', 'Pelajar', 'Jalan-Jalan'),
(5, 'Yusuf', 'Klaten', 'Laki-Laki', 'Pelajar', 'Olahraga'),
(6, 'Yusuf', 'Klaten', 'Laki-Laki', 'Pelajar', 'Olahraga'),
(7, 'Gilang', 'Brebes', 'Laki-Laki', 'Pelajar', 'Musik'),
(8, 'Amara', 'Tangerang', 'Perempuan', 'Pelajar', 'Jalan-Jalan'),
(9, 'Fajar', 'Prambanan', 'Laki-Laki', 'Karyawan', 'Musik'),
(10, 'Meliza', 'Tangerang', 'Perempuan', 'Lain-lain', 'Jalan-Jalan'),
(11, 'dea salsabila', 'Bekasi', 'Perempuan', 'Pelajar', 'Jalan-Jalan'),
(12, 'Rahma', 'Klaten', 'Perempuan', 'Pelajar', 'Musik'),
(13, 'siska', 'Depok', 'Laki-Laki', 'Pelajar', 'Musik'),
(14, 'siska', 'Depok', 'Laki-Laki', 'Pelajar', 'Musik'),
(15, 'siska', 'Depok', 'Laki-Laki', 'Pelajar', 'Musik'),
(16, 'siska', 'Depok', 'Laki-Laki', 'Pelajar', 'Musik'),
(17, 'Avida', 'Yogyakarta', 'Perempuan', 'Lain-lain', 'Musik, Jalan-Jalan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
