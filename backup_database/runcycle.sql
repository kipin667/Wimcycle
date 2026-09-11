-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2026 pada 04.20
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
-- Database: `runcycle`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dealer`
--

CREATE TABLE `tb_dealer` (
  `id_dealer` int(11) NOT NULL,
  `nama_dealer` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(60) NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dealer`
--

INSERT INTO `tb_dealer` (`id_dealer`, `nama_dealer`, `alamat`, `no_hp`, `email`, `instagram`) VALUES
(1, 'Gowes Mandiri Bike', 'Jl. Jendral Sudirman No. 45, Jakarta', '081234567890', 'gowesmandiri@email.com', '@gowes.mandiri'),
(2, 'Pedal Indah Bike', 'Jl. Malioboro No. 12, Yogyakarta', '082345678901', 'pedalindah@email.com', '@pedal_indah_bike'),
(3, 'Cakrawala Sepeda', 'Jl. Asia Afrika No. 88, Bandung', '083456789012', 'cakrawalabike@email.com', '@cakrawala.sepeda'),
(4, 'Semeru Mountain Bike', 'Jl. Basuki Rahmat No. 10, Malang', '084567890123', 'semerubike@email.com', '@semerumtb.id'),
(5, 'Borneo Cycle Center', 'Jl. Ahmad Yani No. 5, Banjarmasin', '085678901234', 'borneocycle@email.com', '@borneo_cycle'),
(6, 'Celebes Bike Station', 'Jl. Sultan Alauddin No. 23, Makassar', '086789012355', 'celebesbike@email.com', '@celebes.bikestation');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `deskripsi_kategori` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`, `gambar`) VALUES
(1, 'sepeda gunung', 'sepeda untuk di medan pegunungan yang mampu menerjang bebatuan di pegunungan', 'kategori.jpg'),
(2, 'sepeda listrik', 'kendaraan roda dua ber-pedal yang digerakkan oleh motor listrik dan baterai isi ulang. Kendaraan ini ramah lingkungan, hemat biaya, dan membantu pengendara melaju tanpa lelah.', 'kategori.jpg'),
(3, 'sepeda anak', 'kendaraan roda dua atau tiga berukuran kecil yang dirancang khusus untuk mendukung pertumbuhan, keamanan, dan keterampilan motorik anak.', 'kategori.jpg'),
(4, 'sepeda lipat', 'jenis sepeda yang dilengkapi engsel pada rangka dan setang sehingga bisa dilipat menjadi bentuk yang ringkas untuk memudahkan penyimpanan serta mobilitas.', 'kategori.jpg'),
(5, 'sepeda fixie', 'sepeda dengan sistem gigi tetap (fixed gear) di mana roda belakang terhubung langsung ke pedal, sehingga pedal akan terus berputar selama roda berputar.', 'kategori.jpg');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id_stok` int(11) NOT NULL,
  `id_sepeda` int(11) NOT NULL,
  `id_dealer` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_stok`
--

INSERT INTO `tb_stok` (`id_stok`, `id_sepeda`, `id_dealer`, `stok`) VALUES
(1, 2, 5, 123),
(2, 2, 2, 430),
(3, 5, 6, 163),
(4, 6, 1, 553);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dealer`
--
ALTER TABLE `tb_dealer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD PRIMARY KEY (`id_sepeda`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_sepeda` (`id_sepeda`),
  ADD KEY `id_dealer` (`id_dealer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dealer`
--
ALTER TABLE `tb_dealer`
  MODIFY `id_dealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD CONSTRAINT `tb_sepeda_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD CONSTRAINT `tb_stok_ibfk_1` FOREIGN KEY (`id_sepeda`) REFERENCES `tb_sepeda` (`id_sepeda`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_stok_ibfk_2` FOREIGN KEY (`id_dealer`) REFERENCES `tb_dealer` (`id_dealer`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
