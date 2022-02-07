-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2022 pada 09.16
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Regina Syafira', 'PULAU UNTUNG JAWA', 'perempuan', 'Islam', 'SMA N 12 KAB TANGERA', 'User.jpg'),
(2, 'Ade rana direksa', 'PULAU KELAPA', 'laki-laki', 'Islam', 'SMK AL GINA', 'User.jpg'),
(3, 'Mustofa', 'PULAU HARAPAN', 'laki-laki', 'Islam', 'SMA N 12 KAB TANGERA', 'User.jpg'),
(4, 'Diana Mila Sari', 'PULAU TIDUNG', 'perempuan', 'Islam', 'SMA N 12 KAB TANGERA', 'User.jpg'),
(5, 'Ahya ulumudin', 'PULAU PAYUNG', 'laki-laki', 'Islam', 'SMA N 12 KAB TANGERA', 'user.jpg'),
(6, 'ahmad fauzi', 'PULAU PARI', 'laki-laki', 'Islam', 'SMA PGRI', 'User.jpg'),
(7, 'Mufidah', 'PULAU SABIRA', 'perempuan', 'Islam', 'SMA N 12 KAB TANGERA', 'User.jpg'),
(8, 'Tio Danarestu', 'PULAU PRAMUKA', 'laki-laki', 'Islam', 'SMA N 12 KAB TANGERA', 'User.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
