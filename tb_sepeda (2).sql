-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2026 pada 04.12
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
(35, 'Wimcycle BMX Junior', 8.5, 16, 1200000, 0, 1, 'wimcycle-bmx-junior.jpg', 1),
(36, 'Polygon Alice 18', 9, 18, 1450000, 0, 1, 'polygon-alice-18.jpg', 1),
(37, 'Wimcycle Clara 16', 8.2, 16, 1150000, 0, 1, 'wimcycle-clara-16.jpg', 1),
(38, 'Pacific Magic 12', 7.5, 12, 950000, 0, 1, 'pacific-magic-12.jpg', 1),
(39, 'United Serpent 20', 9.8, 20, 1600000, 0, 1, 'united-serpent-20.jpg', 1),
(40, 'Element Sanrio 16', 8.7, 16, 1350000, 0, 1, 'element-sanrio-16.jpg', 1),
(41, 'Genio Little 18', 8.9, 18, 1100000, 0, 1, 'genio-little-18.jpg', 1),
(42, 'Polygon Cascade 4', 14.2, 27.5, 3800000, 3, 8, 'polygon-cascade-4.jpg', 2),
(43, 'United Detroit 2.1', 13.8, 29, 4200000, 2, 9, 'united-detroit-2.1.jpg', 2),
(44, 'Polygon Monarch 5', 14.5, 26, 2500000, 3, 7, 'polygon-monarch-5.jpg', 2),
(45, 'United Clovis 3.10', 13.2, 29, 6500000, 1, 10, 'united-clovis-3.10.jpg', 2),
(46, 'Pacific Skeleton 5.0', 13.9, 27.5, 5200000, 2, 9, 'pacific-skeleton-5.0.jpg', 2),
(47, 'Thrill Ferrous 3.0', 14, 27.5, 4800000, 2, 9, 'thrill-ferrous-3.0.jpg', 2),
(48, 'Exotic ET-2612', 15, 26, 1950000, 3, 7, 'exotic-et-2612.jpg', 2),
(49, 'Pacific Rotor 20', 11.5, 20, 2100000, 0, 1, 'pacific-rotor-20.jpg', 3),
(50, 'Pacific Spinix 2.0', 11.8, 20, 1850000, 0, 1, 'pacific-spinix-2.0.jpg', 3),
(51, 'United Roost 20', 11.2, 20, 2300000, 0, 1, 'united-roost-20.jpg', 3),
(52, 'Wimcycle Shotgun', 12, 20, 1750000, 0, 1, 'wimcycle-shotgun.jpg', 3),
(53, 'Genio Salt 20', 11, 20, 1450000, 0, 1, 'genio-salt-20.jpg', 3),
(54, 'Element OS 20', 11.4, 20, 1900000, 0, 1, 'element-os-20.jpg', 3),
(55, 'Polygon Rudge 3', 11, 20, 2600000, 0, 1, 'polygon-rudge-3.jpg', 3),
(56, 'Polygon Urano', 12.5, 20, 4800000, 1, 9, 'polygon-urano.jpg', 4),
(57, 'United Quest CI7', 13, 20, 2700000, 1, 7, 'united-quest-ci7.jpg', 4),
(58, 'Dahon Ion Madison', 11.8, 20, 3200000, 1, 7, 'dahon-ion-madison.jpg', 4),
(59, 'Exotic ET-2026', 12.8, 20, 1800000, 1, 7, 'exotic-et-2026.jpg', 4),
(60, 'Tern Link D8', 12.1, 20, 8500000, 1, 8, 'tern-link-d8.jpg', 4),
(61, 'Pacific Noris 2.0', 12, 20, 3500000, 1, 8, 'pacific-noris-2.0.jpg', 4),
(62, 'Element Troy X 10S', 11.2, 16, 4100000, 1, 10, 'element-troy-x-10s.jpg', 4);

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
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
