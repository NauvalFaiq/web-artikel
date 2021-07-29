-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2021 pada 08.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun ml`
--

CREATE TABLE `akun ml` (
  `User ID` int(15) NOT NULL,
  `Zone ID` int(6) NOT NULL,
  `Username` int(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `No.HP` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun pubg`
--

CREATE TABLE `akun pubg` (
  `ID pemain` int(15) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `No.HP` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun valo`
--

CREATE TABLE `akun valo` (
  `Riot ID` int(15) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `No.HP` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun ml`
--
ALTER TABLE `akun ml`
  ADD PRIMARY KEY (`User ID`);

--
-- Indeks untuk tabel `akun pubg`
--
ALTER TABLE `akun pubg`
  ADD PRIMARY KEY (`ID pemain`);

--
-- Indeks untuk tabel `akun valo`
--
ALTER TABLE `akun valo`
  ADD PRIMARY KEY (`Riot ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
