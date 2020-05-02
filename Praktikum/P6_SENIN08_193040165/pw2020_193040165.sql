-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 11:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2020_193040165`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `ID` int(11) NOT NULL,
  `JENIS_PAKAIAN` varchar(100) NOT NULL,
  `UKURAN` varchar(100) NOT NULL,
  `STOK` char(100) NOT NULL,
  `HARGA` char(100) NOT NULL,
  `KETERANGAN` varchar(100) NOT NULL,
  `GAMBAR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`ID`, `JENIS_PAKAIAN`, `UKURAN`, `STOK`, `HARGA`, `KETERANGAN`, `GAMBAR`) VALUES
(1, 'Gamis\r\n', 'L, XL, XXL', '95', '250000', 'Bahan katun dan tidak panas, tersedia dengan hijab', '1.jpg'),
(2, 'Tunik', 'ALL SIZE', '80', '130000', 'Warna sesuai digambar, bahan licin transparan', '2.jpg'),
(3, 'Blazer Wanita', 'M, L', '50', '98000', 'Motif ada yang lain, bahan katun biasa', '3.jpg'),
(4, 'Trench Coat Wanita', 'M, L', '20', '195000', 'Bahan wol tebal', '4.jpg'),
(5, 'Rok Panjang', 'ALL SIZE', '80', '70000', 'Bahan transparan, warna sesuai gambar', '5.jpg'),
(6, 'Kulot', 'ALL SIZE', '80', '70000', 'STOK TIDAK TERSEDIA', '6.jpg'),
(7, 'Baju Koko', 'M, L, XL', '90', '135000', 'Bahan menyerap keringat dan tidak panas', '7.jpg'),
(8, 'Kemeja Pria', 'ALL SIZE', '70', '145000', 'Bahan yang dingin tidak akan terasa panas nyaman d...', '8.jpg'),
(9, 'Trench Coat Pria', 'L', '10', '70000', 'Sudah satu set dengan celana', '9.jpg'),
(10, 'Trench Coat Pria', 'L, XL', '20', '170000', '\r\nBahan tebal cocok digunakan saat musim dingin', '0.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
