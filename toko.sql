-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2021 pada 05.38
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `tipeA` varchar(255) NOT NULL,
  `tipeB` varchar(255) NOT NULL,
  `tipeC` varchar(255) NOT NULL,
  `tipeD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_user`, `nama`, `telp`, `alamat`, `catatan`, `tipeA`, `tipeB`, `tipeC`, `tipeD`) VALUES
(33, 'Aura Ramadhani', '08120309293', 'Jl. Gaga ', '', '2', '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_satu`
--

CREATE TABLE `tb_satu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_satu`
--

INSERT INTO `tb_satu` (`id`, `nama`, `telepon`, `email`, `password`) VALUES
(6, 'Aura Ramadhani', '08120309293', 'aurarmdhni06@gmail.com', '1234'),
(13, 'Aura', '081240492938', 'aurarmdhni5@gmail.com', '061005'),
(14, 'Aura Ramadhani', '12312423', 'aurarmdhni06@gmail.com3r', '12345'),
(15, 'Aura Ramadhani', '12312423', 'aurarmdhni06@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_satu`
--
ALTER TABLE `tb_satu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_satu`
--
ALTER TABLE `tb_satu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
