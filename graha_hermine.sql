-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 03:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graha_hermine`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikelID` int(11) NOT NULL,
  `judulArtikel` varchar(200) NOT NULL,
  `isiArtikel` longtext NOT NULL,
  `tanggalArtikel` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `namaFoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikelID`, `judulArtikel`, `isiArtikel`, `tanggalArtikel`, `namaFoto`) VALUES
(2, 'asd', 'asd', '2021-02-28 05:17:02', '53Kartas.jpg'),
(3, 'judul', 'isi', '2021-02-27 20:17:17', '32wallpaper.jpg'),
(4, 'dddddd', 'dddddd', '2021-02-27 20:22:39', '48Background.png'),
(5, 'sadasd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2021-02-27 20:24:33', '123.png'),
(6, 'SASDASDA', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2021-02-27 20:33:38', '39soylent.jpg'),
(7, 'sadsadsad', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2021-02-28 05:15:34', '54kirito sword.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_layanan`
--

CREATE TABLE `daftar_layanan` (
  `layananID` int(11) NOT NULL,
  `kategoriLayanan` varchar(250) NOT NULL,
  `namaLayanan` varchar(250) NOT NULL,
  `deskripsiLayanan` text NOT NULL,
  `fotoUtama` varchar(250) NOT NULL,
  `foto2` varchar(250) NOT NULL,
  `foto3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_layanan`
--

INSERT INTO `daftar_layanan` (`layananID`, `kategoriLayanan`, `namaLayanan`, `deskripsiLayanan`, `fotoUtama`, `foto2`, `foto3`) VALUES
(1, 'Rawat Inap', 'Rawat Inap 1', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '123.png', '', ''),
(3, 'Rawat Inap', 'dasda', 'asdasd', '691. LMT.png', '476. ZeroR.png', '585. Multilayer Perceptron.png'),
(5, 'Unit Gawat Darurat', 'ugd', 'sadasd', '91. LMT.png', '892. Random Tree.png', ''),
(11, 'Poliklinik', 'asd', 'asd', '696. ZeroR.png', '', ''),
(12, 'Unit Gawat Darurat', 'hjk', 'jkk', '66. ZeroR.png', '', ''),
(13, 'Ibu dan Anak', 'sadasd', 'asdasd', '371. LMT.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqID` int(11) NOT NULL,
  `judulFaq` varchar(250) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqID`, `judulFaq`, `pertanyaan`, `jawaban`) VALUES
(1, 'u don say', 'Rumah Sakit nya buka 24 jam?', 'cari tau sendiri'),
(2, 'u don say', 'Ada dokternya?', 'u don say'),
(3, 'harga', 'mahal ga?', 'dokter mana yg murah coba, ya MAHAL LAH'),
(5, 'U Don Say', 'yey', 'bisa dong'),
(6, 'U Don Say', 'aaaa', 'bbbbb'),
(7, 'U Don Say', 'muncul', 'uia'),
(9, 'Harga', 'aa', 'kkk'),
(10, 'Harga', 'sad', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `fotopenghargaan`
--

CREATE TABLE `fotopenghargaan` (
  `fotopenghargaanID` int(11) NOT NULL,
  `namaFoto` varchar(250) NOT NULL,
  `judulFoto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fotopenghargaan`
--

INSERT INTO `fotopenghargaan` (`fotopenghargaanID`, `namaFoto`, `judulFoto`) VALUES
(14, 'IMG_6486.JPG', 'sddsd'),
(15, 'IMG_6506.JPG', 'asdadsd'),
(17, '50IMG_6504.JPG', 'sadasdads');

-- --------------------------------------------------------

--
-- Table structure for table `foto_beranda`
--

CREATE TABLE `foto_beranda` (
  `fotoberandaID` int(11) NOT NULL,
  `namaFoto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foto_layanan`
--

CREATE TABLE `foto_layanan` (
  `fotolayananID` int(11) NOT NULL,
  `layananID` int(11) NOT NULL,
  `namaLayanan` varchar(250) NOT NULL,
  `namaFoto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `fotoID` int(11) NOT NULL,
  `namaFoto` varchar(250) NOT NULL,
  `judulFoto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`fotoID`, `namaFoto`, `judulFoto`) VALUES
(1, '7Ragnarok.jpg', 'Ragnarok Sword'),
(5, '7kirito sword.jpg', 'Kirito Sword');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `dokterID` int(11) NOT NULL,
  `spesialis` varchar(250) NOT NULL,
  `namaFoto` varchar(250) NOT NULL,
  `namaDokter` varchar(250) NOT NULL,
  `jadwalSenin` varchar(250) NOT NULL,
  `jadwalSelasa` varchar(250) NOT NULL,
  `jadwalRabu` varchar(250) NOT NULL,
  `jadwalKamis` varchar(250) NOT NULL,
  `jadwalJumat` varchar(250) NOT NULL,
  `jadwalSabtu` varchar(250) NOT NULL,
  `jadwalMinggu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`dokterID`, `spesialis`, `namaFoto`, `namaDokter`, `jadwalSenin`, `jadwalSelasa`, `jadwalRabu`, `jadwalKamis`, `jadwalJumat`, `jadwalSabtu`, `jadwalMinggu`) VALUES
(1, 'THT', 'IMG_6486.JPG', 'Hazel', '17:08-20:00', '18:08-09:00', '19:08-09:00', '20:08-10:00', '22:09-11:00', '23:09-00:00', '-'),
(7, 'Kandungan', 'IMG_6486.JPG', 'Abigail', '21:10-17:12', '-', '17:10-17:13', '20:10-17:14', '-', '17:15-19:10', '-'),
(8, 'Umum', 'IMG_6486.JPG', 'Athanasia', '17:10-05:11', '17:10-05:11', '17:10-05:11', '17:10-05:11', '17:10-05:11', '17:10-05:11', '17:10-05:11'),
(9, 'THT', '68dr miralza diza, sptht.jpg.jpg', 'Dr. Miralza Diza', '08:00-17:00', '08:00-17:00', '08:00-17:00', '-', '08:00-17:00', '08:00-17:00', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_layanan`
--

CREATE TABLE `kategori_layanan` (
  `kategoriID` int(11) NOT NULL,
  `namaKategori` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`kategoriID`, `namaKategori`) VALUES
(1, 'Poliklinik'),
(2, 'Rawat Inap'),
(3, 'Unit Gawat Darurat'),
(4, 'Ibu dan Anak');

-- --------------------------------------------------------

--
-- Table structure for table `list_job`
--

CREATE TABLE `list_job` (
  `jobID` int(11) NOT NULL,
  `namaJob` varchar(250) NOT NULL,
  `deskripsiJob` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_job`
--

INSERT INTO `list_job` (`jobID`, `namaJob`, `deskripsiJob`) VALUES
(1, 'yey bisasadad', 'adasdasdasd\r\nsdasd\r\nasdsadas'),
(6, 'dfsdfsdf', 'lfjdlksjdslkf');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `partnershipID` int(11) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `namaPartnership` varchar(250) NOT NULL,
  `namaFoto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`partnershipID`, `kategori`, `namaPartnership`, `namaFoto`) VALUES
(4, 'Asuransi', 'adsds', '74grey.jpg'),
(5, 'Perusahaan', 'Baju', '96pink.jpg'),
(6, 'Asuransi', 'asuransi', '99white.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `spesialisID` int(11) NOT NULL,
  `namaSpesialis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`spesialisID`, `namaSpesialis`) VALUES
(1, 'Umum'),
(2, 'Anak'),
(3, 'Bedah'),
(4, 'Kandungan'),
(5, 'THT'),
(6, 'Mata'),
(7, 'Kulit'),
(8, 'Saraf');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`userID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelID`);

--
-- Indexes for table `daftar_layanan`
--
ALTER TABLE `daftar_layanan`
  ADD PRIMARY KEY (`layananID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqID`);

--
-- Indexes for table `fotopenghargaan`
--
ALTER TABLE `fotopenghargaan`
  ADD PRIMARY KEY (`fotopenghargaanID`);

--
-- Indexes for table `foto_beranda`
--
ALTER TABLE `foto_beranda`
  ADD PRIMARY KEY (`fotoberandaID`);

--
-- Indexes for table `foto_layanan`
--
ALTER TABLE `foto_layanan`
  ADD PRIMARY KEY (`fotolayananID`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`fotoID`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`dokterID`);

--
-- Indexes for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Indexes for table `list_job`
--
ALTER TABLE `list_job`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`partnershipID`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`spesialisID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daftar_layanan`
--
ALTER TABLE `daftar_layanan`
  MODIFY `layananID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fotopenghargaan`
--
ALTER TABLE `fotopenghargaan`
  MODIFY `fotopenghargaanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `foto_beranda`
--
ALTER TABLE `foto_beranda`
  MODIFY `fotoberandaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_layanan`
--
ALTER TABLE `foto_layanan`
  MODIFY `fotolayananID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `fotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `dokterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  MODIFY `kategoriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_job`
--
ALTER TABLE `list_job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `partnershipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `spesialisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
