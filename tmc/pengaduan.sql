-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2015 at 01:13 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `kode_berita` int(11) NOT NULL,
  `judul_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_posting` datetime NOT NULL,
  `oleh_petugas` varchar(20) NOT NULL,
  `status` enum('Aktif','Non-Aktif') NOT NULL,
  `kategori_berita` int(11) NOT NULL,
  `foto` varchar(10) DEFAULT NULL,
  `akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`kode_berita`, `judul_berita`, `isi_berita`, `tanggal_posting`, `oleh_petugas`, `status`, `kategori_berita`, `foto`, `akses`) VALUES
(1, 'Tips Keamanan Di Jalan Raya Bro', '<ol>\r\n	<li>Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi :<br />\r\n	-Tes satu<br />\r\n	-Tes Dua<br />\r\n	-Tes tiga</li>\r\n	<li>Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi</li>\r\n	<li>Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi</li>\r\n	<li>Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi</li>\r\n	<li>Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi</li>\r\n	<li>Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi Deskripsi Disini,Isi</li>\r\n	<li>Deskripsi Disini,</li>\r\n</ol>\r\n', '2015-05-04 22:54:37', 'P151401', 'Aktif', 1, '1.jpg', 5),
(2, 'Menjaga Fasilitas Umum', '<p>Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,Isi Deskripsi disini,</p>\r\n', '2015-05-01 21:50:57', 'P151401', 'Aktif', 3, '1.jpg', 0),
(3, 'sadgshajgd', '<p>234567890</p>\r\n', '2015-05-18 23:09:54', 'P151401', 'Aktif', 1, '1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sim`
--

CREATE TABLE IF NOT EXISTS `jadwal_sim` (
`kode_jadwal` int(11) NOT NULL,
  `dari_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `dari_jam` time NOT NULL,
  `sampai_jam` time NOT NULL,
  `lokasi_tempat` text NOT NULL,
  `keterangan` text NOT NULL,
  `oleh_petugas` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jadwal_sim`
--

INSERT INTO `jadwal_sim` (`kode_jadwal`, `dari_tanggal`, `sampai_tanggal`, `dari_jam`, `sampai_jam`, `lokasi_tempat`, `keterangan`, `oleh_petugas`) VALUES
(2, '2015-04-01', '2015-06-01', '08:00:00', '12:00:00', 'Bandung Trade Mall', 'ok', 'P151401'),
(3, '2015-07-01', '2015-08-31', '08:00:00', '12:00:00', 'Polrestabes', 'ok', 'P151401'),
(4, '2015-05-01', '2015-05-31', '08:00:00', '12:00:00', 'Samsat Bandung Barat', 'as', 'P151401');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengaduan`
--

CREATE TABLE IF NOT EXISTS `jenis_pengaduan` (
`kode_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `oleh_petugas` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jenis_pengaduan`
--

INSERT INTO `jenis_pengaduan` (`kode_jenis`, `nama_jenis`, `oleh_petugas`) VALUES
(2, 'Fasilitas Umum ', 'P151401'),
(3, 'Keamanan', 'P151401'),
(4, 'Jalan Raya', 'P151401'),
(5, 'Ketertiban', 'P151401'),
(6, 'Kerusakan Jalan', 'P151401'),
(7, 'Transportasi', 'P151401');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE IF NOT EXISTS `kategori_berita` (
`kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `oleh_petugas` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`kode_kategori`, `nama_kategori`, `oleh_petugas`) VALUES
(1, 'Lalu Lintas Jalan Raya', 'P151401'),
(3, 'Fasilitas Umum', 'P151401'),
(8, 'informasi bandung', 'P151401'),
(9, 'Informasi Sim keliling', 'P151401');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_informasi`
--

CREATE TABLE IF NOT EXISTS `kontak_informasi` (
`kode_kontak` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `email` text NOT NULL,
  `fax` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `oleh_petugas` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kontak_informasi`
--

INSERT INTO `kontak_informasi` (`kode_kontak`, `alamat`, `no_telepon`, `email`, `fax`, `facebook`, `twitter`, `oleh_petugas`) VALUES
(1, 'Jl.Soekarno Hatta No.456', 2147483647, 'tmcbandung@gmail.com', 22756234, 'facebook.com/tmc', 'twitter.com/tmc', 'P151401');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
`no` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user_agent` text NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`no`, `ip`, `hostname`, `tanggal`, `user_agent`, `bulan`, `tahun`) VALUES
(1, '::1', 'hydro-VAIO', '2014-09-07 11:13:29', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(2, '::1', 'hydro-VAIO', '2014-09-08 14:19:55', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(3, '::1', 'hydro-VAIO', '2014-09-08 14:22:23', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(4, '::1', 'hydro-VAIO', '2014-09-07 14:54:59', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(5, '::1', 'hydro-VAIO', '2014-10-01 15:37:30', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'October', '2014'),
(6, '::1', 'hydro-VAIO', '2014-11-01 15:39:19', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'November', '2014'),
(7, '::1', 'hydro-VAIO', '2014-12-01 15:39:35', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'December', '2014'),
(8, '::1', 'hydro-VAIO', '2014-09-08 07:16:18', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(9, '::1', 'hydro-VAIO', '2014-09-08 07:18:21', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(10, '::1', 'hydro-VAIO', '2014-09-08 14:37:28', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(11, '::1', 'hydro-VAIO', '2014-09-08 14:59:02', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(12, '::1', 'hydro-VAIO', '2014-09-08 15:23:15', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36', 'September', '2014'),
(13, '::1', 'hydro-VAIO', '2014-09-17 04:35:37', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 'September', '2014'),
(14, '::1', 'hydro-VAIO', '2014-09-19 06:36:37', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 'September', '2014'),
(15, '192.168.240.101', '192.168.240.101', '2014-09-19 06:45:06', 'Mozilla/5.0 (Linux; Android 4.3; Smartfren Andromax AD689G Build/JLS36C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.135 Mobile Safari/537.36', 'September', '2014'),
(16, '::1', 'user-PC', '2015-05-16 12:37:52', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36 OPR/17.0.1241.53', 'May', '2015'),
(17, '::1', 'user-PC', '2015-05-16 14:14:58', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(18, '::1', 'user-PC', '2015-05-16 14:34:14', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(19, '::1', 'user-PC', '2015-05-16 14:34:39', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(20, '::1', 'user-PC', '2015-05-16 15:37:15', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(21, '::1', 'user-PC', '2015-05-16 15:37:47', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(22, '::1', 'user-PC', '2015-05-16 15:38:53', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(23, '::1', 'user-PC', '2015-05-16 15:41:39', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(24, '::1', 'user-PC', '2015-05-16 15:42:23', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(25, '::1', 'user-PC', '2015-05-16 15:43:07', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015'),
(26, '::1', 'user-PC', '2015-05-16 15:43:37', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 'May', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `kode_pengaduan` varchar(20) NOT NULL,
  `nama_pengadu` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `isi_pengaduan` text NOT NULL,
  `tanggal_pengaduan` datetime NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jenis_pengaduan` int(11) NOT NULL,
  `verifikasi` enum('Diterima','Ditolak','Menunggu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`kode_pengaduan`, `nama_pengadu`, `email`, `no_telp`, `isi_pengaduan`, `tanggal_pengaduan`, `lokasi`, `jenis_pengaduan`, `verifikasi`) VALUES
('PN-15/05/0001', 'indra', 'asdas', '3456789', 'sadjsahdjsak', '2015-05-19 00:00:00', 'fiksi ganesa', 2, 'Diterima'),
('PN-15/05/0002', 'indra', 'asdas', '3456789', 'sadjsahdjsak', '2015-05-18 20:00:06', 'BEC', 3, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `kode_petugas` varchar(20) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `username`, `password`, `email`, `last_login`) VALUES
('P151401', 'Fajar', 'fajar', '24bc50d85ad8fa9cda686145cf1f8aca', 'fajar@gmail.com', '2015-05-04'),
('P151402', 'Indra', 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'indra@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `profil_instansi`
--

CREATE TABLE IF NOT EXISTS `profil_instansi` (
`kode_profil` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `profil_lainnya` text NOT NULL,
  `oleh_petugas` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profil_instansi`
--

INSERT INTO `profil_instansi` (`kode_profil`, `visi`, `misi`, `profil_lainnya`, `oleh_petugas`) VALUES
(1, '<p><span style="color:rgb(146, 146, 146); font-family:merriweather sans,arial,helvetica,sans-serif; font-size:12px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc in nulla pretium pellentesque. Aliquam erat volutpat. In nec enim dui, in hendrerit enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus at tortor at est mattis aliquam non id est. Quisque pretium suscipit faucibus. Fusce vestibulum mollis interdum. Duis a nibh at odio aliquet varius. Pellen tesque feugiat nulla nec ipsum suscipit ut varius elit posuere. Nunc tellus urna, viverra ac porta ac, com modo et libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Pellentesque ullam corper nisl id justo ultrices hendrerit. Vivamus dignissim ultrices erat, vitae placerat ligula lacinia non. In arcu nunc, aliquet a condimentum et, tempor eget nisl</span></p>\r\n', '<p><span style="color:rgb(146, 146, 146); font-family:merriweather sans,arial,helvetica,sans-serif; font-size:12px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc in nulla pretium pellentesque. Aliquam erat volutpat. In nec enim dui, in hendrerit enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus at tortor at est mattis aliquam non id est. Quisque pretium suscipit faucibus. Fusce vestibulum mollis interdum. Duis a nibh at odio aliquet varius. Pellen tesque feugiat nulla nec ipsum suscipit ut varius elit posuere. Nunc tellus urna, viverra ac porta ac, com modo et libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Pellentesque ullam corper nisl id justo ultrices hendrerit. Vivamus dignissim ultrices erat, vitae placerat ligula lacinia non. In arcu nunc, aliquet a condimentum et, tempor eget nisl</span></p>\r\n', '<p><span style="color:rgb(146, 146, 146); font-family:merriweather sans,arial,helvetica,sans-serif; font-size:12px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc in nulla pretium pellentesque. Aliquam erat volutpat. In nec enim dui, in hendrerit enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus at tortor at est mattis aliquam non id est. Quisque pretium suscipit faucibus. Fusce vestibulum mollis interdum. Duis a nibh at odio aliquet varius. Pellen tesque feugiat nulla nec ipsum suscipit ut varius elit posuere. Nunc tellus urna, viverra ac porta ac, com modo et libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Pellentesque ullam corper nisl id justo ultrices hendrerit. Vivamus dignissim ultrices erat, vitae placerat ligula lacinia non. In arcu nunc, aliquet a condimentum et, tempor eget nisl</span></p>\r\n', 'P151401');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`kode_berita`), ADD KEY `kategori_berita` (`kategori_berita`), ADD KEY `oleh_petugas` (`oleh_petugas`);

--
-- Indexes for table `jadwal_sim`
--
ALTER TABLE `jadwal_sim`
 ADD PRIMARY KEY (`kode_jadwal`), ADD KEY `oleh_petugas` (`oleh_petugas`);

--
-- Indexes for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
 ADD PRIMARY KEY (`kode_jenis`), ADD KEY `oleh_petugas` (`oleh_petugas`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
 ADD PRIMARY KEY (`kode_kategori`), ADD KEY `oleh_petugas` (`oleh_petugas`);

--
-- Indexes for table `kontak_informasi`
--
ALTER TABLE `kontak_informasi`
 ADD PRIMARY KEY (`kode_kontak`), ADD KEY `oleh_petugas` (`oleh_petugas`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`kode_pengaduan`), ADD KEY `jenis_pengaduan` (`jenis_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`kode_petugas`);

--
-- Indexes for table `profil_instansi`
--
ALTER TABLE `profil_instansi`
 ADD PRIMARY KEY (`kode_profil`), ADD KEY `oleh_petugas` (`oleh_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_sim`
--
ALTER TABLE `jadwal_sim`
MODIFY `kode_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
MODIFY `kode_jenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kontak_informasi`
--
ALTER TABLE `kontak_informasi`
MODIFY `kode_kontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `profil_instansi`
--
ALTER TABLE `profil_instansi`
MODIFY `kode_profil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori_berita`) REFERENCES `kategori_berita` (`kode_kategori`),
ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`oleh_petugas`) REFERENCES `petugas` (`kode_petugas`);

--
-- Constraints for table `jadwal_sim`
--
ALTER TABLE `jadwal_sim`
ADD CONSTRAINT `jadwal_sim_ibfk_1` FOREIGN KEY (`oleh_petugas`) REFERENCES `petugas` (`kode_petugas`);

--
-- Constraints for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
ADD CONSTRAINT `jenis_pengaduan_ibfk_1` FOREIGN KEY (`oleh_petugas`) REFERENCES `petugas` (`kode_petugas`);

--
-- Constraints for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
ADD CONSTRAINT `kategori_berita_ibfk_1` FOREIGN KEY (`oleh_petugas`) REFERENCES `petugas` (`kode_petugas`);

--
-- Constraints for table `kontak_informasi`
--
ALTER TABLE `kontak_informasi`
ADD CONSTRAINT `kontak_informasi_ibfk_1` FOREIGN KEY (`oleh_petugas`) REFERENCES `petugas` (`kode_petugas`);

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`jenis_pengaduan`) REFERENCES `jenis_pengaduan` (`kode_jenis`);

--
-- Constraints for table `profil_instansi`
--
ALTER TABLE `profil_instansi`
ADD CONSTRAINT `profil_instansi_ibfk_1` FOREIGN KEY (`oleh_petugas`) REFERENCES `petugas` (`kode_petugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
