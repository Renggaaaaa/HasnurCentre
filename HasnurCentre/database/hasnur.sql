-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2022 pada 13.07
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasnur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `project` varchar(200) NOT NULL,
  `client` varchar(40) NOT NULL,
  `lead` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `progres` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `project`, `client`, `lead`, `start`, `end`, `progres`) VALUES
(12, 'Pembuatan Si Keuangan', 'Bakeuda Prov.Kalsel', 'Indra Setiawan', '2022-01-14', '2022-08-14', '30%'),
(13, 'Learning Management System', 'Ruang Guru', 'Hilman Saputra', '2022-01-30', '2022-03-10', '80%'),
(14, 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri Gunawan', '2022-02-02', '2022-05-30', '40%'),
(15, 'Employee Monitoring', 'PT. Sarana Sukses', 'Handoko Aji', '2021-09-02', '2022-01-15', '100%');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
