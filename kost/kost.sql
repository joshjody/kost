-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2019 pada 20.43
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `nama`) VALUES
(1, 'udin', 'petot', 'udinpetot@admin.com', 'udin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `kode_bank` int(11) NOT NULL,
  `norek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `nama_bank`, `kode_bank`, `norek`) VALUES
(1, 'BCA', 14, '9743539875934'),
(2, 'Mandiri', 18, '7583748374383');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` varchar(300) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamarinfo`
--

CREATE TABLE `kamarinfo` (
  `id` int(11) NOT NULL,
  `nomorkamar` varchar(100) NOT NULL,
  `luaskamar` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar1` varchar(600) NOT NULL,
  `gambar2` varchar(600) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamarinfo`
--

INSERT INTO `kamarinfo` (`id`, `nomorkamar`, `luaskamar`, `harga`, `gambar1`, `gambar2`, `status`) VALUES
(1, '001', '15', 50000, 'images/kamar1.jpeg', '', 'Belum Terisi'),
(2, '002', '17', 1200000, 'images/kamar2.jpeg', 'images/kamarutama.jpg', 'Belum Terisi'),
(3, '003', '12', 5000000, 'images/kamar3.jpeg', '', 'Belum Terisi'),
(4, '004', '30', 2334242, 'images/kamar4.jpeg', '', 'Belum Terisi'),
(5, '005', '30', 2354234, 'images/kamarutama.jpg', '', 'Belum Terisi'),
(6, '006a', '24423', 25435345, 'images/kamar1.jpeg', '', 'Belum Terisi'),
(7, '007', '23', 23423423, 'images/kamar4.jpeg', '', 'Belum Terisi'),
(8, '008', '123', 2147483647, 'images/kamar2.jpeg', '', 'Belum Terisi'),
(9, '008', '15', 475757, 'images/kamarutama.jpg', '', 'Belum Terisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kamar`
--

CREATE TABLE `kategori_kamar` (
  `id` int(11) NOT NULL,
  `nomorkamar` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `fasilitas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel` varchar(1) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `noktp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelf` varchar(100) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenkel`, `alamat`, `noktp`, `email`, `notelf`, `username`, `password`) VALUES
(1, 'udin', 'L', 'jl.lubang black hole', '827027029702702702027017', 'udin@petot.com', '0837382829289', 'udin', 'petot'),
(2, 'bambang', 'L', 'jl.suka mundur gitu deh', '827027029702702702027017', 'bam@bang.com', '08238982922', 'bambang', 'bambang'),
(3, 'bambang', 'L', 'jl.suka mundur gitu deh', '827027029702702702027017', 'bam@bang.com', '08238982922', 'bambang', 'bambang'),
(4, '123', '1', '123213', '123123', '123213', '4124', '124214', '124214'),
(5, 'bala', 'L', 'jl.taman sari 1b no 33', '383983937', 'bala@admin.com', '9837297397', 'bala', 'bala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(100) NOT NULL,
  `id_kamar` int(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `harga` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_pelanggan` int(100) NOT NULL,
  `nama_pelanggan` varchar(300) NOT NULL,
  `kamar` varchar(10) NOT NULL,
  `fasilitas` varchar(300) NOT NULL,
  `method_pembayaran` varchar(30) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamarinfo`
--
ALTER TABLE `kamarinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_kamar`
--
ALTER TABLE `kategori_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kamarinfo`
--
ALTER TABLE `kamarinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kategori_kamar`
--
ALTER TABLE `kategori_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
