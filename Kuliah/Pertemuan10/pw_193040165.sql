-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 05:02 AM
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
-- Database: `pw_193040165`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiwa`
--

CREATE TABLE `mahasiwa` (
  `ID` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `NRP` char(9) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiwa`
--

INSERT INTO `mahasiwa` (`ID`, `Gambar`, `NRP`, `Nama`, `Email`, `Jurusan`) VALUES
(1, '1.jpg', '193040101', 'Kim Namjoon', '193040101@mail.unpas.ac.id', 'Teknik Informatika'),
(2, '2.png', '193040102', 'Kim Seokjin', '193040102@mail.unpas.ac.id', 'Teknik Informatika'),
(3, '3.jpg', '193040103', 'Min Yoongi', '193040103@mail.unpas.ac.id', 'Teknik Informatika'),
(4, '4.png', '193040104', 'Jung Haseok', '193040104@mail.unpas.ac.id', 'Teknik Informatika'),
(5, '5.jpg', '193040105', 'Park Jimin', '193040105@mail.unpas.ac.id', 'Teknik Informatika'),
(6, '6.jpg', '193040106', 'Kim Taehyung', '193040106@mail.unpas.ac.id', 'Teknik Informatika'),
(7, '7.jpg', '193040107', 'Jeon Jungkook', '193040107@mail.unpas.ac.id', 'Teknik Informatika'),
(8, '8.jpg', '193040108', 'Cha Enwoo', '193040108@mail.unpas.ac.id', 'Teknik Informatika'),
(9, '9.png', '193040109', 'Lee Jung Sook', '193040109@mail.unpas.ac.id', 'Teknik Informatika'),
(10, '0.jpg', '193040110', 'Ji Cha Wook', '193040110@mail.unpas.ac.id', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiwa`
--
ALTER TABLE `mahasiwa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiwa`
--
ALTER TABLE `mahasiwa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
