-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2016 at 07:57 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhitech`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--


-- --------------------------------------------------------

--
-- Table structure for table `perawatan`
--

CREATE TABLE IF NOT EXISTS `perawatan` (
  `id` varchar(12) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawatan`
--

INSERT INTO `perawatan` (`id`, `judul`, `isi`) VALUES
('101', 'Beberapa tips untuk merawat cat motor kesayangan anda.', '<h1>Beberapa tips untuk merawat warna cat motor <span id="\\"></span>Kesayangan anda :</h1>\r\n<p><strong>1. Hindari parkir di bawah terik matahari</strong> Saat memarkir motor di tempat parkir terbuka, hindari panas matahari langsung dan angin. Debu yang bercampur panas terik matahari dapat membuat rusak cat lapisan pelindung cat motor anda, sehingga warna cat oven menjadi kusam.</p>\r\n<p><strong>2. Hindari Air Hujan (jangan terlalu sering terkena air hujan)</strong> Tingkat keasaman air hujan sangat tinggi, sehingga dapat merusak warna bodi/desain motor anda menjadi kusam. Bahkan bagian bodi motor dari logam dapat termakan korosi. Apabila terlanjur terkena air hujan, segera cuci kendaraan anda dengan air bersih. Anda memang bisa ke paint shop untuk itu, tapi alangkah baiknya menjaga daripada memperbaiki.</p>\r\n<p><strong>3. Hindari Air garam Air laut</strong> berikut uapnya dapat mengakibatkan bagian bodi terkena karat dan memperpendek umur motor anda.</p>\r\n<p><strong>4. Hindari Mencuci motor dengan sabun colek.</strong> Sabun colek mengandung zat yang punya sifat kasar yang dapat menggores cat di permukaan bodi motor. Kalau tetap memakai sabun cream, gunakan sabun dan spons lembut/lap chamois agar warna &amp; desain motor tetap awet.</p>\r\n<p><strong>5. Jangan terlalu sering menggunakan zat kimia atau cairan untuk mengkilapkan warna cat</strong> Zat tersebut akan mengikis lapisan cat bodi motor sehingga warna custom desain akan menjadi kusam dan cat menjadi pudar. Anda mungkin tidak ingin repot-tepot ke jasa custom desain atau airbrush custom motor.</p>\r\n<p>Semoga bermanfaat!!</p>\r\n<p>&nbsp;</p>\r\n<p>04/15/2016 | 4:47:14 PM</p>');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` varchar(5) NOT NULL,
  `profil` text NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `profil`, `contact`) VALUES
('201', '<h1>Hi-Tech Modification,</h1>\r\n<h4>yang beralamat di Jalan Gajah Mada, Gunung Pangilun Padang.</h4>\r\n<h4>Menerima jasa airbrush dan modifikasi.</h4>', '<p><strong>Nomor Telepon</strong> : 082383546171</p>\r\n<p><strong>Pin BBM</strong>: 278fab26 atau 571b1cf7</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE IF NOT EXISTS `tb_info` (
  `id_info` varchar(10) NOT NULL,
  `kode_transaksi` varchar(5) NOT NULL,
  `pelanggan` varchar(30) NOT NULL,
  `motor` varchar(60) NOT NULL,
  `pilihan_modif` varchar(60) NOT NULL,
  `status_modifikasi` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  PRIMARY KEY  (`id_info`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `kode_transaksi`, `pelanggan`, `motor`, `pilihan_modif`, `status_modifikasi`, `gambar`) VALUES
('60003', '50006', 'Doni', 'RX King', 'Full Body', 'Complete', '6.PNG'),
('60004', '50005', 'Syahrozi', 'Yamaha Mio', 'Velg Jari Jari (Bagus)', 'Complete', '10a.png'),
('60002', '50003', 'Suroso', 'Honda Scoopy', 'Varian Harian', 'Complete\r\n', '7.PNG'),
('60005', '50007', 'Rio', 'Honda Beat', 'Velg Jari Jari (Umum)', 'Complete', '10.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik_admin`
--

CREATE TABLE IF NOT EXISTS `tb_mekanik_admin` (
  `id_mekanik_admin` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `status` enum('Admin','Mekanik') NOT NULL,
  PRIMARY KEY  (`id_mekanik_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mekanik_admin`
--

INSERT INTO `tb_mekanik_admin` (`id_mekanik_admin`, `nama`, `alamat`, `telepon`, `status`) VALUES
('502', 'Abenk', 'Jl. Gajah Mada Gunung Pangilun', '0835-2615-2415', 'Admin'),
('503', 'Sapriono Imron', 'Jl. Haji Saleh No. 66', '0835-2615-2419', 'Mekanik'),
('504', 'Didik', 'Jl. Gajah Mada, Gunung Pangilun No. 24 B Padang', '0853-5534-6992', 'Mekanik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_pelanggan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `telepon`) VALUES
('2005', 'Rio Sukro', 'Jl. Buya Hamka No. 18', '0834-9432-4234'),
('2001', 'Suroso', 'Jl. Sudirman No. 47 Padang', '0835-2615-2419'),
('2004', 'Doni Sailendra', 'Jl. Pangestu No. 23', '0844-5675-3234'),
('2006', 'Syahrozi', 'Palembang', '0833-2342-2311');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilihan`
--

CREATE TABLE IF NOT EXISTS `tb_pilihan` (
  `no` varchar(5) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `lama_pengerjaan` varchar(30) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pilihan`
--

INSERT INTO `tb_pilihan` (`no`, `pilihan`, `biaya`, `lama_pengerjaan`, `keterangan`) VALUES
('02', 'Varian Harian', 800000, '5 hari', 'Konsep motif motor untuk pemakaian motor harian.'),
('01', 'Full Body', 1300000, '1 minggu', 'Cat seluruh bagian body motor.'),
('03', 'Kontes', 9000000, '1 bulan', 'Modif full seluruh bagian motor.'),
('04', 'Varian Kontes', 1500000, '1 minggu', 'Konsep motif motor untuk event kontes.'),
('05', 'Velg Jari Jari (Umum)', 1000000, '2 hari', 'Umum/standar, satu set dengan ban.'),
('06', 'Velg Jari Jari (Bagus)', 2000000, '2 hari', 'Motif jari-jari velg yang rumit.'),
('07', 'Lainnya', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `kode_transaksi` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` varchar(30) NOT NULL,
  `motor` varchar(35) NOT NULL,
  `pilihan_modif` varchar(25) NOT NULL,
  `biaya` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `lama_pengerjaan` varchar(30) NOT NULL,
  `tambahan_biaya` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  PRIMARY KEY  (`kode_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kode_transaksi`, `tanggal`, `pelanggan`, `motor`, `pilihan_modif`, `biaya`, `keterangan`, `lama_pengerjaan`, `tambahan_biaya`, `total_biaya`) VALUES
('50003', '2016-02-01', 'Suroso', 'Honda Scoopy', 'Varian Harian', 800000, 'Konsep motif motor untuk pemakaian motor harian.', '5 hari', 0, 800000),
('50006', '2016-03-22', 'Doni', 'RX King', 'Full Body', 1300000, 'Cat seluruh bagian body motor.', '1 minggu', 0, 1300000),
('50005', '2016-04-16', 'Syahrozi', 'Yamaha Mio', 'Velg Jari Jari (Bagus)', 2000000, 'Motif jari-jari velg yang rumit.', '2 hari', 0, 2000000),
('50007', '2016-03-08', 'Rio', 'Honda Beat', 'Velg Jari Jari (Umum)', 1000000, 'Umum/standar, satu set dengan ban.', '2 hari', 0, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_akun` varchar(25) NOT NULL,
  `level` enum('Admin','Mekanik','Pimpinan') NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_akun`, `level`) VALUES
('101', 'abenk', 'abenk', 'Abenk''z', 'Admin'),
('103', 'anto', 'anto', 'Anto Ramdhany', 'Pimpinan'),
('105', 'didik', 'didik', 'Didik', 'Mekanik');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL auto_increment,
  `judul` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `judul`, `path`) VALUES
(28, 'Selfie Dulu', '1.png'),
(29, 'Bebek Pink', '66.PNG');
