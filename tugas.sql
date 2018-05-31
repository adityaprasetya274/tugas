-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2018 pada 05.58
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--
CREATE DATABASE IF NOT EXISTS `tugas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tugas`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`uname`, `pass`, `nama`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Agung Aditya Gumilar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_rm` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `jp` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `password`, `no_rm`, `nama`, `ttl`, `jk`, `alamat`, `no_telp`, `jp`, `status`) VALUES
('agung', 'e59cd3ce33a68f536c19fedb82a7936f', 1000001, 'Agung Aditya Gumilar', '1998-04-17', 'L', 'Kp. Parigi', '12345678', '1', 1),
('aditya', '057829fa5a65fc1ace408f490be486ac', 1000002, 'Aditya Prasetya', '1997-03-17', 'L', 'KP parigi', '012313', '2', 0),
('123', '202cb962ac59075b964b07152d234b70', 1000005, '123', '1997-03-17', 'P', '123', '123', '2', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_rm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
