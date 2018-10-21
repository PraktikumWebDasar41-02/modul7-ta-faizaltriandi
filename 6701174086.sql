-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6701174086`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `moto_hidup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nama`, `nim`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('aaaaaaaaaa', '22222222222', '', 'perempuan', 'TT', 'FIK', 'dfewfewf', 'efef ffw ewf'),
('fsdsdf', '234233', '', 'laki-laki', 'TT', 'FIK', 'dfsfsd', ' sdfsfsddsfsdf sdfsd '),
('FAIZAL TRIANDI', '6701174086', '', 'laki-laki', 'SI', 'FIT', 'BANDUNG', ' SEMANGAT\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
