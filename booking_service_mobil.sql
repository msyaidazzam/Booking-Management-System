-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2023 pada 18.34
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking service mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(16) NOT NULL,
  `Password` int(11) NOT NULL,
  `Nama` varchar(16) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Nama`, `Pekerjaan`) VALUES
('raffi', 123, 'Raffi Syaid Azza', 'CS'),
('syaid', 123, 'Mhd Syaid', 'MS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `listservis`
--

CREATE TABLE `listservis` (
  `Nama` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Telp` varchar(50) NOT NULL,
  `TanggalService` date NOT NULL,
  `TipeMobil` varchar(50) NOT NULL,
  `TahunMobil` int(11) NOT NULL,
  `PlatMobil` varchar(50) NOT NULL,
  `Keluhan` text NOT NULL,
  `Teknisi` varchar(50) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `listservis`
--

INSERT INTO `listservis` (`Nama`, `Alamat`, `Telp`, `TanggalService`, `TipeMobil`, `TahunMobil`, `PlatMobil`, `Keluhan`, `Teknisi`, `ID`, `Status`) VALUES
(' Reza Yudha', ' jl.Karya bersama', ' 085778687', '2023-02-04', ' alpahrt', 2006, ' BK231lm', ' rusak semua', 'saffudin', 1, 'Pengerjaan'),
('MHD. RAFFI SYAIDAZZAM', 'JL. Karya Sejati GG. Pemandian -226', '082166210575', '2023-05-18', 'Avanza', 2022, 'BK0020LM', 'ganti oli, servis , lampu rusak', 'nando', 2, 'Pengerjaan'),
('  Sarah Nur Jannah', '  JL. Karya Sejati GG. Pemandian -226', '  08542975', '2023-05-20', '  Avanza', 2022, '  BK20002LM', '  Rusak Smeua', 'Saffudn', 4, 'Pengerjaan'),
('MHD. RAFFI SYAIDAZZAM', 'JL. Karya Sejati GG. Pemandian -226', '082166210575', '2023-05-18', 'Avanza', 2022, 'BK5505LM', 'ganti oli, servis , lampu rusak', 'faiz', 6, 'Pengerjaan'),
('MHD REZA Y', 'JL. Karya Sejati GG. Pemandian -226', '08542975', '2023-05-22', 'Avanza', 2021, 'BK0020Lp', 'ganti oli, servis , lampu rusak', 'nando', 8, 'Pengerjaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `Nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`Nama`) VALUES
('Saffudn'),
('rizal'),
('nando'),
('faiz');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `listservis`
--
ALTER TABLE `listservis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `listservis`
--
ALTER TABLE `listservis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
