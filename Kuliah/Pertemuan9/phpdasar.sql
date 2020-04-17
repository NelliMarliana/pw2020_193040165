-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 11:28 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `NRP` char(9) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `JURUSAN` varchar(100) NOT NULL,
  `GAMBAR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `NAMA`, `NRP`, `EMAIL`, `JURUSAN`, `GAMBAR`) VALUES
(1, 'Nelli Marliana', '193040165', '193040165@mail.unpas.ac.id', 'Teknik Informatika', 'profile.jpg'),
(2, 'Freety Indriani Safitri', '193040175', '193040175@mail.unpas.ac.id', 'Teknik Infotmatika', 'profile1.jpg'),
(3, 'Fajri Khoirunnisa\r\n', '193040159', '193040159@mail.unpas.ac.id', 'Teknik Infotmatika', 'profile2.jpg'),
(4, 'Elti Rahmawati', '193040154', '193040154@mail.unpas.ac.id', 'Teknik Informatika', 'profile3.jpg'),
(5, 'Nur Safitri', '193040181', '193040181@mail.unpas.ac.id', 'Teknik Informatika', 'profile4.jpg'),
(6, 'Muhammad Fawwazt', '193040176', '193040176@mail.unpas.ac.id', 'Teknik Informatika', 'profile5.jpg'),
(7, 'Rizky Angga Saputra', '193040160', '193040160@mai.unpas.ac.id', 'Teknik Informatika', 'profile6.jpg'),
(8, 'Mohammad Iqbal Ghifari', '193040147', '193040147@mail.unpas.ac.id', 'Teknik Informatika', 'profile7.jpg'),
(9, 'Jeremy Anadhika Elyas', '193040173', '193040173@mail.unpas.ac.id', 'Teknik Informatika', 'profile8.jpg'),
(10, 'Kevin Fredrian Syach', '193040163', '193040163@mail.unpas.ac.id', 'Teknik Informatika', 'profile9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `ID` int(11) NOT NULL,
  `JENIS PAKAIAN` varchar(100) NOT NULL,
  `UKURAN` varchar(5) NOT NULL,
  `STOK` char(100) NOT NULL,
  `HARGA` char(100) NOT NULL,
  `KETERANGAN` varchar(100) NOT NULL,
  `GAMBAR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`ID`, `JENIS PAKAIAN`, `UKURAN`, `STOK`, `HARGA`, `KETERANGAN`, `GAMBAR`) VALUES
(1, 'Gamis', 'L, XL', '95', '250000', 'Bahan katun dan tidak panas, tersedia dengan hijab', '1'),
(2, 'Tunik', 'ALL S', '80', '130000', 'Warna sesuai digambar, bahan licin teransparan', '2'),
(3, 'Blazer Wanita', 'M, L', '50', '98000', 'Motif ada yang lain, bahan katun biasa', '3'),
(4, 'Trench Coat Wanita', 'L', '20', '195000', 'Bahan wol, tebal', '4'),
(5, 'Rok Panjang', 'ALL S', '40', '70000', 'Bahan transparan, warna sesuai gambar', '5'),
(6, 'Kulot', 'ALL S', '80', '70000', 'STOK TIDAK TERSEDIA', '6'),
(7, 'Baju Koko', 'M, L,', '90', '135000', 'Bahan menyerap keringat dan tidak panas', '7'),
(8, 'Kemeja Pria', 'ALL S', '70', '145000', 'Bahan yang dingin tidak akan terasa panas nyaman dipakai', '8'),
(9, 'Blazer Pria', 'L', '10', '70000', 'Sudah satu set dengan celana', '9'),
(10, 'Trench Coat Pria', 'L, XL', '20', '170000', 'Bahan tebal cocok digunakan saat musim dingin', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
