-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2021 pada 12.56
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbookstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `author_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `author_name`, `price`, `isbn`, `category`) VALUES
(1, 'Kata', 'Nadhifa Allya Tsana', '89.000', '9789797809324', 'Fiksi, Romantis'),
(2, 'Di Tanah Lada', 'Ziggy Zezsya', ' 50.000', '978-602-03-1896-7', 'Slice of Life'),
(3, 'Dear Heart, Why Him?', 'Haula S.', '100.000', '9786024301880', 'Fiksi, Komik'),
(4, 'Dear Nathan', 'Erisca Febriani', '99.000', '9786026940148', 'Fiksi'),
(5, 'Once Upon a Time', 'Dheyamela', '99.500', '978-623-7524-05-2', 'Misteri, Thiller'),
(6, 'Friendzone', 'Vanesa Marcella', '64.000', '978-602-430-000-5', 'Fiksi, Romantis'),
(7, 'Forever Monday', 'Ruth Priscilia', '62.000', '978-602-03-4621-2', 'Drama, Romantis'),
(8, 'Are You? Really?', 'Innayah Putri', '78.000', '9786022202080', 'Romantis'),
(9, 'Madielief', 'Kiranada Genre', '82.000', '978-623-91330-9-2', 'Misteri, Thiller'),
(10, 'EL', 'Luluk HF', '99.000', '978-602-694-098-8', 'Fiksi, Romantis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
