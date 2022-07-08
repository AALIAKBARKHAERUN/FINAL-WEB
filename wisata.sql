-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 03:37 AM
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
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `objek_wisata`
--

CREATE TABLE `objek_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objek_wisata`
--

INSERT INTO `objek_wisata` (`id`, `nama`, `content`, `foto`, `category`) VALUES
(53, 'Pantai Kuta', 'Pantai Kuta Bali tak lain adalah pemandangannya yang sangat indah. Di sini, para pengunjung bisa menemukan keberadaan pantai dengan pasir putih yang menghampar luas. Banyak turis yang suka menghabiskan waktunya bersantai di tepi pantai sembari berjemur di bawah terik matahari.', '62c59fb8a4d1c.jpg', 'Beach'),
(54, 'Gunung Bromo', 'Gunung yang terletak di Jawa Timur ini terletak di empat wilayah kabupaten, yaitu Kabupaten Probolinggo, Kabupaten Malang, Kabupaten Pasuruan, dan Kabupaten Lumajang.\r\n\r\nGunung yang memiliki ketinggian 2.329 mdpl ini menjadi salah satu tujuan wisata populer di Jawa Timur.\r\n\r\nPenanjakan 1 merupakan salah satu puncak tertinggi di Bromo untuk melihat sunrise di Gunung Bromo. Tempat ini menjadi tujuan utama para wisatawan. Bahkan, tempat ini dikenal dengan nama “The Famous of Sunrise” oleh wisatawan mancanegara.', '62c68373835e9.jpg', 'Mount'),
(55, ' Sungai Kali Biru Warsambin', '             Sesuai dengan namanya, sungai ini berwarna biru yang sangat cantik. Birunya air sungai ini bukan karena ganggang atau tercemar, melainkan proses alamiah yang tidak berbahaya. Airnya begitu jernih hingga dasar sungai pun terlihat jelas secara kasatmata.\r\n\r\nDikelilingi pepohonan rimbun, udara pun terasa sejuk kala mengunjungi tempat ini. Kali Biru Warsambin ini terletak di pedalaman hutan Raja Ampat, tepatnya dekat dengan Kampung Warsambin, Teluk Mayalibit.                   ', '62c684604a0e2.jpg', 'River'),
(56, ' Pulau Bali', '                 Pulau Bali adalah tujuan wisata paling populer di Indonesia. Bali memiliki banyak pantai yang indah dengan segala aktivitas wisata dan kehidupan malam yang gemerlap serta pesona alam yang tiada tara. Bali juga memiliki keindahan alam yang luar biasa dan lengkap, seperti gunung berapi, persawahan yang hijau, keindahan alam bawah laut yang mengagumkan serta seni budaya yang unik.               ', '62c684fa5496e.jpeg', 'Island'),
(57, 'Bukit Cinta', '                        bukit ini berlokasi tidak jauh dari pusat kota Labuan Bajo. Hanya dengan berkendara 15 menit kamu akan sampai di kaki Bukit Cinta. Dilanjutkan dengan mendaki sekitar 10 menit sampai kamu mencapai puncak tertinggi untuk melihat pemandangan 360 derajat kearah laut berikut dermaga – dermaga, kapal – kapal, dan pulau – pulau yang khas Labuan Bajo beserta rangkaian bukit di bawahnya. Tak heran bila Bukit Cinta adalah salah satu bukit terindah di Indonesia.         ', '62c689295b4e6.png', 'Hill'),
(58, 'Air Terjun Madakaripura', '                                Air terjun Madakaripura adalah sebuah air terjun yang terletak di Kabupaten Probolinggo, Provinsi Jawa Timur. Air terjun setinggi 200 meter ini merupakan air terjun tertinggi di Pulau Jawa dan tertinggi kedua di Indonesia', '62c6899cec27a.jpg', 'Waterfall');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(7, 'ananda', 'admin', '$2y$10$Ry0qGFAl6lmBvnPdmx7vJOGhMlidmkTg8GSWMw3o/jUZIDhy8D.Sq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objek_wisata`
--
ALTER TABLE `objek_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objek_wisata`
--
ALTER TABLE `objek_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
