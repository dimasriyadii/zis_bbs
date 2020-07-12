-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 12 Jul 2020 pada 17.34
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbs_zis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `infaq`
--

DROP TABLE IF EXISTS `infaq`;
CREATE TABLE IF NOT EXISTS `infaq` (
  `id_infaq` int(4) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jumlah` int(20) NOT NULL,
  PRIMARY KEY (`id_infaq`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `infaq`
--

INSERT INTO `infaq` (`id_infaq`, `tanggal`, `nama`, `alamat`, `jumlah`) VALUES
(3, '2020-03-09', 'iday', 'kikil', 1000),
(4, '2020-03-09', 'iyo', 'loma', 999),
(5, '2020-03-08', 'lamongi', 'kakali', 0),
(6, '2020-03-09', 'keramas', 'oio', 0),
(7, '2020-05-11', 'dodit m', 'garuda', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `infaq_pengeluaran`
--

DROP TABLE IF EXISTS `infaq_pengeluaran`;
CREATE TABLE IF NOT EXISTS `infaq_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keperluan` varchar(50) NOT NULL DEFAULT '0',
  `jumlah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengeluaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `infaq_pengeluaran`
--

INSERT INTO `infaq_pengeluaran` (`id_pengeluaran`, `tanggal`, `keperluan`, `jumlah`) VALUES
(1, '2020-07-12', 'Membeli kain pell', '20000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima`
--

DROP TABLE IF EXISTS `penerima`;
CREATE TABLE IF NOT EXISTS `penerima` (
  `id_penerima` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `rt` int(4) NOT NULL,
  `uang` int(30) NOT NULL,
  `beras` decimal(4,1) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_penerima`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `nama`, `kelurahan`, `rt`, `uang`, `beras`, `status`) VALUES
(20, 'aid', 'penengahan', 2, 2000, '2.0', 'sudah'),
(21, 'aid', 'penengahan', 2, 2000, '2.0', 'sudah'),
(22, 'diyah', 'penengahan', 1, 10000, '2.0', 'sudah'),
(23, 'dodi', 'koki', 2, 123, '1.0', 'sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sedekah`
--

DROP TABLE IF EXISTS `sedekah`;
CREATE TABLE IF NOT EXISTS `sedekah` (
  `id_sedekah` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jumlah` int(20) NOT NULL,
  PRIMARY KEY (`id_sedekah`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sedekah`
--

INSERT INTO `sedekah` (`id_sedekah`, `tanggal`, `nama`, `alamat`, `jumlah`) VALUES
(4, '2020-03-29', 'Jeje', 'Kota Hari', 10000),
(5, '2020-05-11', 'siwon', 'liwa', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=2003 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_users`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Dimas Riyadi', 'dimasriyadi', 'dimasriyadi', 'admin'),
(2000, 'admin', 'admin', 'admin', 'admin'),
(2002, 'sule', 'sule', 'sule', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `zakat`
--

DROP TABLE IF EXISTS `zakat`;
CREATE TABLE IF NOT EXISTS `zakat` (
  `id_zakatf` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `uang` int(100) NOT NULL,
  `beras` int(11) NOT NULL,
  PRIMARY KEY (`id_zakatf`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `zakat`
--

INSERT INTO `zakat` (`id_zakatf`, `tanggal`, `nama`, `alamat`, `uang`, `beras`) VALUES
(12, '2020-03-09', 'didik', 'Rajabasa', 100000, 0),
(13, '2020-03-08', 'dimaya', 'Kedaton', 1000000, 0),
(14, '2020-03-09', 'Dikabu', 'kedamaian', 100000, 0),
(15, '2020-03-09', 'Lumbann', 'kedaton', 0, 10),
(16, '2020-03-29', 'Khairu', 'Penengahan', 100000, 0),
(23, '2020-06-15', 'dikama', 'kedaton', 50000, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
