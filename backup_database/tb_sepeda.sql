-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2026 pada 06.32
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gocycle`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sepeda`
--

CREATE TABLE `tb_sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `tipe_sepeda` varchar(20) NOT NULL,
  `berat` float NOT NULL,
  `ukuran` float NOT NULL,
  `harga` int(11) NOT NULL,
  `fd` int(11) NOT NULL,
  `rd` int(11) NOT NULL,
  `foto` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sepeda`
--

INSERT INTO `tb_sepeda` (`id_sepeda`, `tipe_sepeda`, `berat`, `ukuran`, `harga`, `fd`, `rd`, `foto`, `id_kategori`) VALUES
(1, 'Polygon Xtrada 5 (Se', 14, 23, 6500000, 1, 10, 'xtrada5.jpg', 1),
(2, 'Exotic Groza X6 (Sep', 45, 14, 4200000, 0, 0, 'groza_x6.jpg', 2),
(3, 'United Tank (Sepeda ', 9, 16, 1200000, 1, 1, 'united_tank.jpg', 3),
(4, 'Pacific Noris 2.0 (S', 12, 20, 3800000, 1, 8, 'noris2.jpg', 4),
(5, 'Polygon Zenis (Seped', 10, 27, 2500000, 1, 3, 'zenis_fixie.jpg', 5),
(6, 'Thrill Ravage 4.0 (S', 13.5, 20, 8200000, 2, 11, 'ravage4.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD PRIMARY KEY (`id_sepeda`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD CONSTRAINT `tb_sepeda_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
