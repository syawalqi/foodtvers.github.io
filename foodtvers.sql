-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 07:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodtvers`
--

-- --------------------------------------------------------

--
-- Table structure for table `niagahoster`
--

CREATE TABLE `niagahoster` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `name4` varchar(225) NOT NULL,
  `name5` varchar(255) NOT NULL,
  `name6` varchar(225) NOT NULL,
  `name7` varchar(255) NOT NULL,
  `name8` varchar(225) NOT NULL,
  `name9` varchar(255) NOT NULL,
  `name10` varchar(225) NOT NULL,
  `name11` varchar(255) NOT NULL,
  `name12` varchar(225) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `niagahoster`
--

INSERT INTO `niagahoster` (`id`, `name`, `name1`, `address`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `name8`, `name9`, `name10`, `name11`, `name12`, `salary`) VALUES
(82, 'Resep makanan Indonesia', 'Kumpulan resep yang di turunkan dari beberapa generasi', 'Makanan Indonesia yang terkenal ke seluruh dunia', 'Kenapa makanan indonesia itu', 'Indonesia merupakan negara kepulauan yang memiliki keragaman rasa dan selera dalam makanannya. Makanan tradisional Indonesia biasanya memiliki rasa khas seperti cabai, parutan kelapa, rasa jeruk, dan pedas.', 'Di setiap daerah, mulai dari Jakarta, Jawa, Bali, Lombok, Kalimantan, hingga Papua, Anda akan menemukan beragam makanan tradisional super enak dan nikmat.', 'Menggunakan banyak rempah-rempah', 'Sudah diturunkan dari beberapa generasi', 'Cara masak yang mudah', 'Melihat fakta tersebut, tidak heran kuliner Indonesia bisa terkenal ke seluruh dunia. Hal ini juga tidak terlepas dari bumbu rempah-rempah yang digunakan dalam berbagai makanan tersebut.', 'Selain keindahan alamnya Indonesia juga terkenal akan makanannya. Hal ini tidak mengejutkan dengan dikaruniai tanah yang subur dan dikenal penghasil rempah-rempah di dunia menjadikan makanan Indonesia mempunyai ciri khas dari tiap daerah.', 'Setiap daerah memiliki makanan khas tersendiri dengan berbagai macam cita rasa. Dengan bahan dan rempah-rempah hasil alam sendiri, tidak heran makanan Indonesia terkenal di seluruh dunia.', 'Makanan khas daerah di Indonesia terkenal dengan cita rasa yang lezat dan menggugah selera. Setiap daerah memiliki Makanan Khas masing-masing dengan cita rasa yang unik. Daerah-daerah di Indonesia memiliki lebih dari satu makanan khas yang enak dan wajib', 'Masakan di Indonesia memang sudah terkenal sejak dahulu kala, kelezatan masakan di Indonesia terletak dari berlimpahnya rempah-rempah di Indonesia, sehingga penggunaan rempah dimasakan-masakan di Indonesia juga sangat banyak', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `siswa_nama` varchar(70) NOT NULL,
  `siswa_kelas` varchar(70) NOT NULL,
  `siswa_alamat` text NOT NULL,
  `siswa_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `siswa_nama`, `siswa_kelas`, `siswa_alamat`, `siswa_foto`) VALUES
(20, '', '', '', '1587fa06a7a2bc6b1cd81f81443e8ac5-slide-1.jpg'),
(21, '', '', '', 'e51a9d388bbc6ad827ce21abac7ddd94-slide-2.jpg'),
(22, '', '', '', '4185cbff4fd6be180481013d0b5b0504-slide-3.jpg'),
(23, '', '', '', 'f0fc5f89d369ec38a4242a04488ce111-about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `niagahoster`
--
ALTER TABLE `niagahoster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `niagahoster`
--
ALTER TABLE `niagahoster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
