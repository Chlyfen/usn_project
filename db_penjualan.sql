-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 04:43 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(50) DEFAULT NULL,
  `admin_moto` varchar(100) DEFAULT NULL,
  `admin_jenkel` varchar(2) DEFAULT NULL,
  `admin_username` varchar(30) DEFAULT NULL,
  `admin_password` varchar(35) DEFAULT NULL,
  `admin_tentang` text,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_nohp` varchar(20) DEFAULT NULL,
  `admin_facebook` varchar(35) DEFAULT NULL,
  `admin_twitter` varchar(35) DEFAULT NULL,
  `admin_linkdin` varchar(35) DEFAULT NULL,
  `admin_google_plus` varchar(35) DEFAULT NULL,
  `admin_status` int(2) DEFAULT '1',
  `admin_level` varchar(3) DEFAULT NULL,
  `admin_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_moto`, `admin_jenkel`, `admin_username`, `admin_password`, `admin_tentang`, `admin_email`, `admin_nohp`, `admin_facebook`, `admin_twitter`, `admin_linkdin`, `admin_google_plus`, `admin_status`, `admin_level`, `admin_register`, `admin_photo`) VALUES
(1, 'Administrator', '', 'L', 'cliff1', '9e94e929e22a6c121307febc79ea549c', '-', 'chlyfenrichard@gmail.com', '085241818227', '', '', '', '', 1, '1', '2016-09-03 06:07:55', '3ac1f8309a0ed293fd75d9dc623bc7f9.jpg'),
(2, 'Temons', NULL, 'L', 'temons', '9d356b15224210e703cf8848cf8d2338', NULL, 'temons@gmail.com', '0876654521', NULL, NULL, NULL, NULL, 1, '2', '2020-08-15 01:51:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(2, 'Teknologi', '2016-09-06 05:50:01'),
(3, 'WebJS', '2020-08-15 03:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Administrator', '', 'L', 'cliff1', '9e94e929e22a6c121307febc79ea549c', '-', 'chlyfenrichard@gmail.com', '085241818227', '', '', '', '', 1, '1', '2016-09-03 06:07:55', '3ac1f8309a0ed293fd75d9dc623bc7f9.jpg'),
(5, 'sadli', NULL, 'L', 'sadli', 'e690c2caddfe7b40e3afd594bf4d5ea4', NULL, 'sadli@gmail.com', '1234567', NULL, NULL, NULL, NULL, 1, '', '2020-08-15 04:44:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(200) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(250) DEFAULT NULL,
  `tulisan_rating` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`, `tulisan_rating`) VALUES
(26, 'hhh', '<p>hhhhhh</p>\r\n', '2020-06-06 03:59:14', 2, 'Teknologi', 0, '68c46c316bc4b15d0a3ac4365e79e908.JPG', 0, '', 0, 'hhh.html', 0),
(27, 'Hari terakhir Workshop', '<p>Hari , ini terakhir worksshop&nbsp; jadi kami ngepost</p>\r\n', '2020-06-14 06:45:48', 2, 'Teknologi', 0, '44ff6dd811c30166c1067746aae5d0d5.JPG', 0, '', 0, 'hari-terakhir-workshop.html', 0),
(28, 'tes upload pdf', '<p>Buku ini ada pdf pertama yang akan di upload</p>\r\n', '2020-08-12 12:38:38', 2, 'Teknologi', 0, '902bf27e6cb3a5092f69691cc10c9c87.JPG', 0, '', 0, 'https://drive.google.com/file/d/1_Wm28IaeIDQMwxHAelgG9kx7hGl9jARX/view?usp=sharing', 0),
(29, 'Arduiono ini bagus', '<p>Arduino</p>\r\n', '2020-08-17 04:54:37', 2, 'Teknologi', 0, '691a195fb179eea2b2cfb6d43dab3c65.JPG', 0, '', 0, 'arduiono-ini-bagus.html', 0),
(30, 'Intellegent Investor', '<p>Itellegent Investor buku terbaik</p>\r\n', '2020-08-19 06:32:08', 3, 'WebJS', 0, '44a7e048ebf004b4b8b4ca94e280435c.JPG', 0, '', 0, 'intellegent-investor.html', 0),
(31, 'Upload 6', '<p>Tes Upload 6</p>\r\n', '2020-08-20 00:19:37', 3, 'WebJS', 0, '3f4788b47d5a30dd9db812cc2781e54b.JPG', 1, 'Administrator', 0, 'upload-6.html', 0),
(32, 'Upload 7', '<p>Upload ke 7</p>\r\n', '2020-08-20 00:20:14', 3, 'WebJS', 0, '4c5caea8936480b068c4ec15013bc0a9.JPG', 1, 'Administrator', 0, 'upload-7.html', 0),
(33, 'Upload 8', '<p>Upload 8</p>\r\n', '2020-08-20 01:44:44', 3, 'WebJS', 0, '000905c47a2b91dab5faf14e36778f18.JPG', 1, 'Administrator', 0, 'upload-8.html', 0),
(34, 'Upload 9', '<p>Upload 9</p>\r\n', '2020-08-20 01:45:31', 3, 'WebJS', 0, '847631cfc0d6508b0cc096424921ef85.JPG', 1, 'Administrator', 0, 'upload-9.html', 0),
(35, 'upload 10', '<p>Upload 10</p>\r\n', '2020-08-20 01:45:56', 2, 'Teknologi', 0, '669f37541e1d209d351706a0d513b30a.JPG', 1, 'Administrator', 0, 'upload-10.html', 0),
(36, 'Upload 11', '<p>Upload 11</p>\r\n', '2020-08-20 01:46:18', 3, 'WebJS', 0, 'd36e737327f6fa5f0fbb20fa046cb41d.JPG', 1, 'Administrator', 0, 'upload-11.html', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
