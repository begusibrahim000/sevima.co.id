-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2020 pada 19.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevima.co.id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `umur` int(4) NOT NULL,
  `no_telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id`, `nim`, `nama`, `alamat`, `jenis_kelamin`, `umur`, `no_telepon`) VALUES
(1, 10001, 'John', 'Medokan', 'L', 20, 987654321),
(2, 10002, 'Agnes', 'Tandes', 'P', 21, 987654322),
(3, 10003, 'Monica', 'Rungkut', 'P', 20, 987654323),
(4, 10004, 'Sherlock', 'Lontar', 'P', 22, 987654324),
(5, 10005, 'Holmes', 'Ngagel', 'L', 23, 987654325),
(6, 10006, 'Watson', 'Nginden', 'L', 21, 987654326),
(7, 10007, 'Irena', 'Benowo', 'P', 23, 987654327),
(8, 10008, 'Adler', 'Jogoloyo', 'P', 22, 987654328),
(9, 10009, 'Jared', 'Margomulyo', 'L', 21, 987654329),
(10, 10010, 'Jefferson', 'Manukan', 'L', 23, 987654320);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `kode_mk` varchar(50) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `nilai_angka` int(11) NOT NULL,
  `nilai_huruf` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nim`, `kode_mk`, `nama_mk`, `nilai_angka`, `nilai_huruf`) VALUES
(1, 10001, 'MKA', 'Matematika', 89, 'A'),
(2, 10001, 'MKB', 'Biologi', 75, 'B'),
(3, 10001, 'MKC', 'Fisika', 82, 'A'),
(4, 10002, 'MKB', 'Biologi', 75, 'B'),
(5, 10002, 'MKA', 'Matematika', 66, 'C');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
