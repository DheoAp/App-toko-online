-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2020 pada 04.15
-- Versi server: 8.0.11
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sepatu', 'Sepatu merek All Star', 'Pakaian Pria', 300000, 2, 'sepatu.jpg'),
(2, 'Laptop', 'Laptop Ram 8gb', 'Elektronik', 4500000, 3, 'laptop.jpg'),
(3, 'Hp Samsung', 'Samsung A20', 'Elektronik', 3500000, 4, 'hp.jpg'),
(4, 'Kamera', 'kamera canon', 'Elektronik', 5000000, 3, 'kamera.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id_invoice`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(3, 'Aprinsyah', 'Bandung', '2020-09-05 09:01:42', '2020-09-06 09:01:42'),
(4, 'Boruto Uzumaki', 'Jakarta', '2020-09-05 11:00:12', '2020-09-06 11:00:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(3, 3, 1, 'Sepatu', 1, 300000, ''),
(4, 3, 4, 'Kamera', 1, 5000000, ''),
(5, 3, 3, 'Hp Samsung', 1, 3500000, ''),
(6, 4, 2, 'Laptop', 1, 4500000, '');

--
-- Trigger `tbl_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tbl_pesanan` FOR EACH ROW BEGIN 
	UPDATE tbl_barang SET stok = stok-NEW.jumlah 
	WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
