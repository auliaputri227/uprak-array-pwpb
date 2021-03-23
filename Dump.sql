-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 10.48
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprak1_pwpb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `umur` int(5) NOT NULL,
  `foto` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jk`, `umur`, `foto`) VALUES
(1, 'Adinda May Melati Arya', 'Cilacap', '2005-03-01', 'Perempuan', 16, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(2, 'Alek Sanusi', 'Palembang', '2001-09-08', 'Laki-Laki', 19, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(3, 'Andhika Gusti Putra', 'Depok', '2003-03-02', 'Laki-Laki', 16, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(4, 'Andhika Riski ', 'Depok', '2005-03-02', 'Laki-Laki', 16, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(5, 'Andri Hendrawan', 'Jakarta', '2021-03-03', 'Laki-Laki', 16, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(6, 'Angkasa Raya', 'Jakarta', '2021-03-11', 'Laki-Laki', 18, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(7, 'Aulia Putri Rivai', 'Jakarta', '2003-07-22', 'Perempuan', 17, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(8, 'Candya Putra', 'Depok', '2021-03-05', 'Laki-Laki', 16, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(9, 'Dalilah Khairunnisa', 'Depok', '2021-03-12', 'Perempuan', 16, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(10, 'Dana Satria', 'Aceh', '2005-12-22', 'Laki-Laki', 17, 'https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzh8fHN0dWRlbnR8ZW58MHwwfDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
