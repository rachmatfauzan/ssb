-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2021 pada 10.25
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_pemain`
--

CREATE TABLE `dt_pemain` (
  `id_pemain` int(11) NOT NULL,
  `nama_pemain` varchar(100) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ssb_now` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `telphone` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `bb` varchar(15) NOT NULL,
  `tb` varchar(15) NOT NULL,
  `adm` varchar(100) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `sd` varchar(30) NOT NULL,
  `smp` varchar(30) NOT NULL,
  `rw_akademi` text NOT NULL,
  `rw_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_pemain`
--

INSERT INTO `dt_pemain` (`id_pemain`, `nama_pemain`, `kota`, `tgl_lahir`, `alamat`, `ssb_now`, `ayah`, `ibu`, `telphone`, `gambar`, `bb`, `tb`, `adm`, `gol_darah`, `jk`, `sd`, `smp`, `rw_akademi`, `rw_prestasi`) VALUES
(1, 'premise', 'batam', '2021-04-21', 'aplikasi premise', '0821-7013-2187', 'Amril ', 'Yurnis', '0821-7013-2187', 'user6-128x128.jpg', '80', '159', 'AKTE, NISN', 'B', 'Perempuan', 'SDN 005 BATAM', 'SMP 16 BATAM', '<p>sadsasada</p>', '<p>sadsadsa</p>'),
(2, 'rachmat fauzan', 'Batam', '2021-04-23', 'Bida Ayu blok T no 32\r\nBida Ayu Pintu 1  Blok T no 32', '082284028241', 'Amril ', 'Yurnis', '082284028241', 'top-skor.png', '80', '159', 'AKTE, NISN, KK, PASSPOR', 'O', 'Laki-Laki', 'SDN 005 BATAM', 'SMP 16 BATAM', '<p>asdsadfsd</p>', '<p>bcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcv<i>cvbcvbcvbcv</i>cvbcvbcbcbcvbvcbvcbvcbcvbcvc<u></u></p><p><b><u></u></b></p>'),
(3, 'Arifan', 'batam', '2021-04-23', 'aplikasi premise', 'Kemuning Lion', 'Amril ', 'Yurnis', '082284028241', 'avatar04.png', '80', '159', 'AKTE, NISN, KK, PASSPOR', 'AB', 'Perempuan', 'SDN 005 BATAM', 'SMP 16 BATAM', '', ''),
(4, 'Rifky Nanda Nurif', 'Batam', '2010-02-26', 'Bida Ayu blok T no 32\r\nBida Ayu Pintu 1  Blok T no 32', '082284028241', 'Amril ', 'Yurnis', '082284028241', 'user1-128x128.jpg', '80', '190', 'NISN, KK', 'B', 'Perempuan', 'SDN 005 BATAM', 'SMP 16 BATAM', '<h2>asdsadsasad</h2>', ''),
(5, 'Rangga Ramadhan', 'Padang', '1996-02-10', 'Bida Ayu blok T no 32', 'SSB Pancur Biru Lestari', 'Udin Selamanya', 'Diah Putri', '876545678976', 'avatar3.png', '60', '170', 'KK, PASSPOR', 'AB', 'Perempuan', 'SDN 005 LUBUK BAJA', 'SMP 16 KETAPANG', '<p>1. Rangga, SSB Citramas, 2020, Kiper</p>', '<p>1. Rangga, Juara 2 , FOSSBAT u-19, Kiper</p>'),
(6, 'Garda Daffa', 'Jawa Tengah', '2021-04-07', 'Bida Ayu blok T no 32\r\nBida Ayu Pintu 1  Blok T no 32', 'SSB Citra Mas', 'Ardit', 'Siti Aminah', '987678654', 'avatar.png', '40', '160', 'AKTE, NISN, KK', 'O', 'Laki-Laki', 'SDN 005 BATAM', 'SMP 16 BATAM', '<p>\r\n\r\n</p><div><div>\r\n\r\n1. Garda, SSB Citramas, 2020, Striker\r\n\r\n<br></div></div><p></p>', '<p>\r\n\r\n1. Garda, Juara 2 , FOSSBAT u-19, Sitriker \r\n\r\n<br></p>'),
(7, 'Riyan Eka Putra', 'Lampung', '1997-06-28', 'Batu Aji Center Park Jln Aji ayu Blok I no 45', 'SSB Genta Aji', 'Putra Adi', 'Maimunah Jali', '98767890986', 'user7-128x128.jpg', '80', '180', 'AKTE, NISN, KK, PASSPOR', 'A', 'Laki-Laki', 'SDN 005 LUBUK BAJA', 'SMP 16 KETAPANG', '<p></p><ol><li>\r\n\r\n&nbsp;SSB Citramas, 2020, Striker\r\n\r\n</li></ol><p></p>', '<p></p><ol><li>\r\n\r\nGarda, Juara 2 , FOSSBAT u-19, Sitriker\r\n\r\n</li></ol><p></p>'),
(8, 'Putri Anjelia Edit', 'Batam', '2021-04-17', 'Bida Ayu blok T no 32', 'SSB Kenduri', 'Tole', 'Ajeng', '9876363732828', 'user5-128x128.jpg', '40', '170', 'NISN, KK', 'B', 'Perempuan', 'SDN 005 BATAM', 'SMP 16 BATAM', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_masuk` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_masuk`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Rachmat Fauzan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dt_pemain`
--
ALTER TABLE `dt_pemain`
  ADD PRIMARY KEY (`id_pemain`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dt_pemain`
--
ALTER TABLE `dt_pemain`
  MODIFY `id_pemain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
