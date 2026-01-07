-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2025 pada 11.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `email_verified_at`, `role`) VALUES
(1, 'Andrian Limnardy', 'rionaldho1774@gmail.com', '$2y$12$2e6SwS6L0xgLBhQrIR.AxedL6eLkhdR4o2IsApdvTLa9ve6pCCuFK', '2025-04-22 01:04:52', '2025-05-12 21:43:10', NULL, 'user'),
(2, 'abdul123', 'abdul@admin.com', '$2y$12$bI0jF9h/3MMTT6HrfonQP.G7IvXMH7ULiv8TlDC2uqgV7mychOxp2', '2025-05-12 21:54:48', '2025-05-12 21:55:08', NULL, 'admin'),
(3, 'Rionaldho Limnardy', 'rionaldho1773@gmail.com', '$2y$12$8/KaLXFYyXkhNW9BmL782etV6NnIz2oKP2HBezac9Uam2KYSgmDie', '2025-05-18 01:05:12', '2025-05-19 00:41:00', NULL, 'user'),
(4, 'Andrian Limnardy', 'andrian123@gmail.com', '$2y$12$RdFR.OqweQ6ZUZ7B4Il1mOI46JkFt4n6hyhfs1NWbQAQEf9BNCNNu', '2025-05-18 01:07:42', '2025-05-18 01:09:12', NULL, 'user'),
(5, 'ahmadkasim', 'ahmadkasim@gmail.com', '$2y$12$IxtIj9GhwlYD8bsciRtQR.ObCYAMmdi1yDNjvfnFtPtFNC8eSgaE6', '2025-05-18 01:11:41', '2025-05-18 01:11:41', NULL, 'user'),
(6, 'Adi wiatma Putra', 'adi.wiatma@binus.ac.id', '$2y$12$qoE76EBTS5ZRwFMPKHgdz.DweyN2F4wRTJ3w0isdTEpi.lU0XVZSW', '2025-05-18 21:40:46', '2025-05-18 21:43:52', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
