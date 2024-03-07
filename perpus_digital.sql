-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2024 pada 05.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_digital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `perpus_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`buku_id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `perpus_id`, `kategori_id`, `created_at`, `jumlah`, `stok`) VALUES
(2, 'Solo Leveling', 'Chugong', 'Clover', '2016', 0, 0, '2024-02-16 07:20:28', '', ''),
(3, 'Dilan 1990', 'Pidi Baiq', 'Mizan Group', '2014', 0, 0, '2024-02-19 04:11:38', '', ''),
(4, 'Naruto', 'Masashi Khisimoto', 'Toei', '1999', 0, 0, '2024-02-19 07:05:35', '', ''),
(5, 'PKN', 'Baim', 'KBBI', '2013', 0, 0, '2024-02-19 07:06:38', '', ''),
(6, 'Dr. Stone', 'Riichiro Inagaki', 'Shueisha', '2017', 0, 0, '2024-02-20 02:19:19', '', ''),
(7, 'Matematika', 'Bung Haji', 'Mentari', '2013', 0, 0, '2024-03-07 03:29:23', '', '15'),
(9, 'b.indo', 'bb', 'bb', '2005', 0, 0, '2024-03-07 03:26:47', '12', '20'),
(12, 'Siksa Kubur', 'Agung', 'Jaya Agung', '2006', 0, 0, '2024-03-07 04:31:04', '', '25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_kategori`
--

CREATE TABLE `buku_kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku_kategori`
--

INSERT INTO `buku_kategori` (`kategori_id`, `nama_kategori`, `created_at`) VALUES
(1, 'Manga', '2024-02-16 04:28:16'),
(2, 'Novel', '2024-02-19 04:10:51'),
(3, 'Pendidikan', '2024-03-01 08:14:32'),
(4, 'komik', '2024-03-06 08:34:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_ulasan`
--

CREATE TABLE `buku_ulasan` (
  `ulasan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `ulasan` varchar(100) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku_ulasan`
--

INSERT INTO `buku_ulasan` (`ulasan_id`, `user_id`, `buku_id`, `ulasan`, `rating`, `created_at`) VALUES
(2, 9, 3, 'nice nice nice', 5, '2024-02-19 05:17:48'),
(3, 9, 5, 'All in', 5, '2024-02-19 07:07:33'),
(5, 8, 6, 'Berotak Senku', 5, '2024-02-20 04:22:40'),
(6, 8, 7, 'wow', 5, '2024-03-06 06:59:57'),
(7, 8, 9, 'wow', 5, '2024-03-06 08:41:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `KategoriBukuID` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategoribuku_relasi`
--

INSERT INTO `kategoribuku_relasi` (`KategoriBukuID`, `buku_id`, `kategori_id`) VALUES
(2, 2, 1),
(3, 3, 2),
(4, 4, 1),
(5, 5, 3),
(6, 6, 1),
(7, 7, 3),
(8, 9, 3),
(11, 12, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi_pribadi`
--

CREATE TABLE `koleksi_pribadi` (
  `koleksi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `koleksi_pribadi`
--

INSERT INTO `koleksi_pribadi` (`koleksi_id`, `user_id`, `buku_id`, `created_at`) VALUES
(4, 9, 2, '2024-02-19 04:12:54'),
(5, 9, 3, '2024-02-19 05:17:07'),
(7, 8, 3, '2024-03-01 05:59:14'),
(8, 8, 4, '2024-03-06 05:42:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status_pinjam` varchar(50) DEFAULT NULL,
  `perpus_id` int(11) NOT NULL,
  `jumlah_pinjam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `user_id`, `buku_id`, `tanggal_pinjam`, `tanggal_kembali`, `status_pinjam`, `perpus_id`, `jumlah_pinjam`) VALUES
(2, 8, 2, '2024-02-16', '2024-02-19', 'Sudah di Kembalikan', 0, ''),
(3, 9, 3, '2024-02-19', '2024-02-19', 'Sudah di Kembalikan', 0, ''),
(4, 9, 2, '2024-02-19', '2024-02-19', 'Sudah di Kembalikan', 0, ''),
(10, 9, 7, '2024-03-01', '2024-03-07', 'Sudah di Kembalikan', 0, ''),
(12, 8, 6, '2024-03-01', '2024-03-01', 'Sudah di Kembalikan', 0, ''),
(13, 8, 5, '2024-03-01', '2024-03-01', 'Sudah di Kembalikan', 0, ''),
(14, 8, 3, '2024-03-01', '2024-03-04', 'Sudah di Kembalikan', 0, ''),
(15, 8, 5, '2024-03-04', '2024-03-04', 'Sudah di Kembalikan', 0, ''),
(16, 8, 7, '2024-03-04', '2024-03-04', 'Sudah di Kembalikan', 0, ''),
(17, 8, 4, '2024-03-04', '2024-03-06', 'Sudah di Kembalikan', 0, ''),
(19, 8, 7, '2024-03-07', NULL, 'Belum di Kembalikan', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_detail`
--

CREATE TABLE `peminjaman_detail` (
  `pinjam_detail_id` int(11) NOT NULL,
  `peminjaman_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpus`
--

CREATE TABLE `perpus` (
  `perpus_id` int(11) NOT NULL,
  `nama_perpus` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp_hp` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `level` enum('Administrator','Petugas','Peminjam') DEFAULT NULL,
  `perpus_id` int(11) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `level`, `perpus_id`, `no_hp`, `created_at`) VALUES
(1, 'admin', '$2y$10$XhvR.mvoCIPNUzTN/P/.q.HhiR46n1AI5bISdEiH6.hAXHwp1stVW', 'admin@gmail.com', 'Muhamad Ervin Nurfalah', 'Banjar', 'Administrator', 0, '089662715314', '2024-02-19 06:44:27'),
(7, 'petugas', '$2y$10$aly7.8FNBILiXJNXNklgZewOC121GRSZyZ9b51VyecQiuqaXMCPKi', 'petugas@gmail.com', 'Yanuar Irsan', 'Ciopat', 'Petugas', 0, '0835754345', '2024-02-20 02:13:28'),
(8, 'Dian', '$2y$10$J0OLCprXX45hMJu2ZAdTieefsK4558RIpfpUmQ.mUeQnf6Pyu42xW', 'dian@gmail.com', 'Dian', 'Banjar', 'Peminjam', 0, '08963497126', '2024-02-16 07:01:14'),
(9, 'Rian', '$2y$10$1QFMrit0cvQ91rdOHIrcUOrQDqLqd3L3c9U9sSyDg/fz7ydlr6Mq2', 'rian@gmail.com', 'Rian', 'Banjar', 'Peminjam', 0, '08963497126', '2024-02-19 04:12:18'),
(12, 'bode', '$2y$10$VyPZVOO8G6QoDrjWnNPWZuVOtroSUNkkqlKYJ1BF9koyPlUDPNWoG', 'bode@gmail.com', 'Rendi Ramdhani', 'Banjar', 'Petugas', 0, '08663637635', '2024-03-06 06:06:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`);

--
-- Indeks untuk tabel `buku_kategori`
--
ALTER TABLE `buku_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `buku_ulasan`
--
ALTER TABLE `buku_ulasan`
  ADD PRIMARY KEY (`ulasan_id`),
  ADD KEY `UserID` (`user_id`),
  ADD KEY `BukuID` (`buku_id`);

--
-- Indeks untuk tabel `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`KategoriBukuID`),
  ADD KEY `BukuID` (`buku_id`),
  ADD KEY `KategoriID` (`kategori_id`);

--
-- Indeks untuk tabel `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD PRIMARY KEY (`koleksi_id`),
  ADD KEY `UserID` (`user_id`),
  ADD KEY `BukuID` (`buku_id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`),
  ADD KEY `UserID` (`user_id`),
  ADD KEY `BukuID` (`buku_id`);

--
-- Indeks untuk tabel `peminjaman_detail`
--
ALTER TABLE `peminjaman_detail`
  ADD PRIMARY KEY (`pinjam_detail_id`);

--
-- Indeks untuk tabel `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`perpus_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `buku_kategori`
--
ALTER TABLE `buku_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `buku_ulasan`
--
ALTER TABLE `buku_ulasan`
  MODIFY `ulasan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `KategoriBukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  MODIFY `koleksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_detail`
--
ALTER TABLE `peminjaman_detail`
  MODIFY `pinjam_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perpus`
--
ALTER TABLE `perpus`
  MODIFY `perpus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku_ulasan`
--
ALTER TABLE `buku_ulasan`
  ADD CONSTRAINT `buku_ulasan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `buku_ulasan_ibfk_2` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_1` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `buku_kategori` (`kategori_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD CONSTRAINT `koleksi_pribadi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `koleksi_pribadi_ibfk_2` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
