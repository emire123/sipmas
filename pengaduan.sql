-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2021 pada 16.06
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(16) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `foto_profile` varchar(200) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `foto_profile`, `alamat`) VALUES
(111, 'masyarakat', 'masyarakat', '$2y$10$or3VkPboTh7es9AownoTkulymmVamvRw3GN54MlDzoQwhwi2Q8mYS', '08111111', 'user.png', ''),
(12456, 'arman', 'arman', '$2y$10$dBVqQZfNYEKfIJD89vF4p.FOyvJCXfBIWNSOgyySimIGaDoemx98e', '123', 'download1.jpg', 'ya'),
(2147483647, 'ade', 'ade', '$2y$10$/ZCy2HuWVBYYF1vLNeoODOL0r4DpKP4EmZ8C.0rxN09NPim1dkt1i', '123', 'user.png', 'jl raden fatah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(16) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai','tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(2, '2021-08-17', 12456, 'tapi boong', '1f45404ff0b1e17879ec331050f65347.png', 'tolak'),
(3, '2021-08-17', 12456, 'asas', 'f97067bee8b48e816471debc701a19c0.png', 'selesai'),
(4, '2021-08-17', 12456, 'asjajasj', '86546413668d726a623b42fe3617ea44.jpg', 'selesai'),
(5, '2021-08-18', 12456, 'opop', 'b1102dc0e3ade123fa1f96d9799bdda2.jpg', 'selesai'),
(6, '2021-08-18', 12456, 'jk', 'bb2e183ace757645b698aab340075859.png', 'selesai'),
(7, '2021-08-18', 2147483647, 'kebakaran', 'fedc95853b72dc07e97972e1791c2f1d.png', 'selesai'),
(8, '2021-08-18', 2147483647, 'gempa', '2f4c76f77d231ce64ddca8ce47e74adf.png', 'selesai'),
(9, '2021-08-18', 2147483647, 'ada orang terlantar', '36817ddb2f828311f99c0f8162938eb3.png', 'selesai'),
(10, '2021-08-18', 2147483647, 'heahe', '8ad21c0afcc5dc81c83f03d4358c31a8.png', 'selesai'),
(11, '2021-08-18', 2147483647, 'aksal', 'be503d95a5ba7d83c611f8c08bac26d8.png', 'selesai'),
(12, '2021-08-18', 2147483647, 'hem', 'dfd9f5abdd6b6db48ce6d8ee470130a9.png', 'proses'),
(13, '2021-08-18', 2147483647, 'chif', '68a819143b55dd73e57c43f490f9cda0.png', 'proses'),
(14, '2021-08-19', 2147483647, 'cdhcbdchfff', '714d7c76cc1b499ee4d3fd226a9f7a43.png', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `foto_profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`, `foto_profile`) VALUES
(2, 'petugas', 'petugas', '$2y$10$mpjzZXTcQDPDMFMn4Y9hI.OxneLbfAfUSoHMOWf38Dr4Y.H11L7Hy', '0812345666', 'petugas', 'user.png'),
(3, 'emir', 'emir', '$2y$10$RBCgI.34wi/aI7cf76Ogx.LGg2yDNDXI4UDCeJg3zmAEcu8W24Z5K', '123', 'petugas', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 2, '2021-08-17', 'kerennn', 2),
(2, 3, '2021-08-17', 'ya', 2),
(3, 4, '2021-08-17', 'ya disrtujui', 3),
(4, 7, '2021-08-18', 'akan kami laporkan', 3),
(5, 8, '2021-08-18', 'oke kami akan laporkan', 3),
(6, 9, '2021-08-18', 'yabnea', 3),
(7, 11, '2021-08-18', 'gggg', 3),
(8, 5, '2021-08-18', 'hem', 3),
(9, 10, '2021-08-18', 'ls', 3),
(10, 6, '2021-08-18', 'ja', 3),
(11, 12, '2021-08-18', 'hk', 3),
(12, 12, '2021-08-19', 'ya silahkan proses', 3),
(13, 13, '2021-08-19', 'yah', 3),
(14, 12, '2021-08-19', 'alas', 3),
(15, 12, '2021-08-19', 'vvvvvvvvvvvvvvvvvvvvvvvvvvv', 3),
(16, 12, '2021-08-19', 'vvb', 3),
(17, 12, '2021-08-19', 'e', 3),
(18, 12, '2021-08-19', 'huhu', 3),
(19, 12, '2021-08-19', 'ff', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`,`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
