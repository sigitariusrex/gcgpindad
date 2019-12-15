-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 02:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gcg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` enum('operator','administrator') NOT NULL DEFAULT 'operator',
  `is_blokir` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`, `level`, `is_blokir`, `created_at`, `updated_at`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'administrator', '0', '0000-00-00 00:00:00', '2014-12-10 23:49:22'),
(17, 'anda', 'd878c179fbeef70c7ff44efb1b7c6582', 'anda', 'operator', '0', '2018-01-01 13:32:44', '2018-01-01 13:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id` tinyint(5) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` char(10) NOT NULL,
  `password` char(20) NOT NULL,
  `kode_divisi` char(10) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL,
  `tmp_telepon` varchar(10) DEFAULT NULL,
  `status_pendaftaran` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0=mengundurkan diri; 1=aktif',
  `status_biodata` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=belum lengkap; 1=sudah lengkap',
  `status_verifikasi` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=belum; 1=sudah',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id`, `email`, `username`, `password`, `kode_divisi`, `nama_divisi`, `tmp_telepon`, `status_pendaftaran`, `status_biodata`, `status_verifikasi`, `created_at`, `updated_at`) VALUES
(1, 'pkp@localhost.com', 'pkp', '1234567890', '95720', 'Perencanaan Kinerja Perusahaan', '0857213779', '1', '1', '0', '2017-12-30 08:11:14', '2018-01-01 10:23:26'),
(2, 'ak@localhost.com', 'ak', '1234567890', '69730', 'Akuntansi Keuangan', '0857213779', '1', '1', '0', '2017-12-30 08:12:23', '2018-01-01 17:28:27'),
(3, 'hcpo@localhost.com', 'hcpo', '1234567890', '09060', 'Human Capital Pengembangan Organisasi', NULL, '1', '0', '0', '2017-12-30 08:17:11', '2017-12-30 08:17:11'),
(4, 'sim@localhost.com', 'sim', '1234567890', '03779', 'Sistem Informasi Manajemen', '0857213779', '1', '1', '0', '2017-12-30 08:17:58', '2017-12-31 15:02:24'),
(5, 'bh@localhost.com', 'bh', '1234567890', '16280', 'Bisnis Hankam', NULL, '1', '0', '0', '2017-12-30 08:18:54', '2017-12-30 08:18:54'),
(6, 'gun@localhost.com', 'gun', '1234567890', '31588', 'Senjata', NULL, '1', '0', '0', '2017-12-30 08:21:04', '2017-12-30 08:21:04'),
(7, 'ammo@localhost.com', 'ammo', '1234567890', '81803', 'Amunisi', NULL, '1', '0', '0', '2017-12-30 08:22:06', '2017-12-30 08:22:06'),
(8, 'kk@localhost.com', 'kk', '1234567890', '47250', 'Kendaraan Khusus', NULL, '1', '0', '0', '2017-12-30 08:22:43', '2017-12-30 08:22:43'),
(9, 'bi@localhost.com', 'bi', '1234567890', '71885', 'Bisnis Industrial', NULL, '1', '0', '0', '2017-12-30 08:23:24', '2017-12-30 08:23:24'),
(10, 'ab@localhost.com', 'ab', '1234567890', '00887', 'Alat Berat', NULL, '1', '0', '0', '2017-12-30 08:23:54', '2017-12-30 08:23:54'),
(11, 'tcap@localhost.com', 'tcap', '1234567890', '62047', 'Tempa Cor Alat Perkretaapian', NULL, '1', '0', '0', '2017-12-30 08:25:12', '2017-12-30 08:25:12'),
(12, 'bpk@localhost.com', 'bpk', '1234567890', '93014', 'Bahan Peledak Komersial', NULL, '1', '0', '0', '2017-12-30 08:26:03', '2017-12-30 08:26:03'),
(13, 'tp@localhost.com', 'tp', '1234567890', '38512', 'Teknologi Pengembangan', NULL, '1', '0', '0', '2017-12-30 08:26:59', '2017-12-30 08:26:59'),
(14, 'k3lh@localhost.com', 'k3lh', '1234567890', '43737', 'Quality Assurance K3LH', NULL, '1', '0', '0', '2017-12-30 08:28:01', '2017-12-30 08:28:01'),
(15, 'sc@localhost.com', 'sc', '1234567890', '59280', 'Supply Chain', NULL, '1', '0', '0', '2017-12-30 08:28:36', '2017-12-30 08:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `is_dibalas` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=belum dibalas; 1=sudah dibalas',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `nama`, `email`, `judul`, `isi`, `is_dibalas`, `created_at`, `updated_at`) VALUES
(5, 'Sigit Aditya Kurniawan', 'sigitarius71@localhost.com', 'Tidak Bisa Lupa Password', 'Saya tidak bisa login', '0', '2017-10-08 16:33:06', '2017-10-08 16:33:06'),
(6, 'Leadership', 'llc@localhost.com', 'Lupa Password', 'Maneh mah', '0', '2017-10-18 11:50:18', '2017-10-18 11:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_parameter`
--

CREATE TABLE `tb_parameter` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `kode_scorecard_fk` tinyint(5) NOT NULL,
  `faktor_uji` varchar(500) NOT NULL,
  `unsur_pemenuhan` varchar(500) NOT NULL,
  `jawaban` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_parameter`
--

INSERT INTO `tb_parameter` (`id`, `kode_scorecard_fk`, `faktor_uji`, `unsur_pemenuhan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 1, 'Terdapat Pedoman Tata Kelola Perusahaan yang Baik (GCG Code)', 'Ada Pedoman GCG.', '', '2017-12-31 20:03:21', '2018-01-01 17:44:52'),
(2, 1, 'Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) ditandatangani oleh Organ BUMN atau dikukuhkan RUPS.', 'Disahkan oleh Direksi dan Dewan Komisaris atau dikukuhkan RUPS.', '', '2017-12-31 20:05:22', '2018-01-01 17:48:34'),
(3, 1, 'Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) paling sedikit mengacu kepada Pedoman Penerapan Tata Kelola Perusahaan yang Baik (Good Corporate Governance) bagi Badan Usaha Milik Negara, Pedoman Sektoral (jika ada) dan/atau peraturan sektoral.', 'Muatan Pedoman GCG mencakup ketentuan penerapan GCG sesuai PER-01/MBU/2011 (pasal 2 ayat 2) dan hal-hal lain mengikuti peraturan sektoral yang sekurangnya mengatur tentang organ utama perusahaan dan governance policy perusahaan.', '', '2017-12-31 20:13:19', '2018-01-01 11:33:09'),
(4, 1, 'Pedoman Tata Kelola Perusahaan yang Baik (GCG Code) ditinjau dan dimutakhirkan secara berkala.', 'Adanya  pembahasan/kajian atas kebutuhan pemutakhiran Pedoman GCG (yang dilakukan minimal 3 (tiga) tahun sekali atau sesuai kebutuhan  perubahan peraturan/kondisi yang signifikan).', '', '2017-12-31 20:25:55', '2018-01-01 11:33:20'),
(5, 2, 'Terdapat Pedoman Perilaku (Code of Conduct).', 'Ada Pedoman Perilaku (Code of Conduct). ', '', '2017-12-31 20:28:47', '2018-01-01 18:48:45'),
(6, 2, 'Pedoman Perilaku (Code of Conduct) ditandatangani oleh Direksi dan Dewan Komisaris/Dewan Pengawas.', 'Disahkan oleh Direksi dan Dewan Komisaris.', '', '2017-12-31 20:29:38', '2018-01-01 18:49:14'),
(7, 2, 'Muatan Pedoman Perilaku.', 'Terpenuhinya muatan minimal Pedoman Perilaku.', '', '2017-12-31 20:31:06', '2018-01-01 18:49:28'),
(8, 2, 'Pedoman Perilaku  ditinjau dan dimutakhirkan secara berkala.', 'Adanya  pembahasan/kajian atas kebutuhan pemutakhiran Pedoman Perilaku (yang dilakukan minimal 3 (tiga) tahun sekali atau sesuai kebutuhan  perubahan peraturan/kondisi yang signifikan).', '', '2018-01-01 08:32:20', '2018-01-01 18:49:41'),
(9, 3, 'Terdapat seorang anggota Direksi yang ditunjuk oleh Rapat Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.', 'Adanya SK Direktur Utama/Direksi atau notulen rapat yang menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.', '', '2018-01-01 08:35:21', '2018-01-01 18:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` smallint(4) UNSIGNED NOT NULL,
  `judul` varchar(64) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul`, `slug`, `isi`, `created_at`, `updated_at`) VALUES
(13, 'Daftarkan divisi dan lengkapi biodata divisi', 'daftarkan-divisi-dan-lengkapi-biodata-divisi', '<p>Cara mendaftarkan divisi adalah sebagai berikut :</p>', '2017-10-16 06:01:28', '2017-10-16 06:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_scorecard`
--

CREATE TABLE `tb_scorecard` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `kode_divisi_fk` char(10) NOT NULL,
  `kode_ket_divisi_fk` char(10) NOT NULL,
  `ket_scorecard` varchar(500) NOT NULL,
  `bobot` float(5,3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_scorecard`
--

INSERT INTO `tb_scorecard` (`id`, `kode_divisi_fk`, `kode_ket_divisi_fk`, `ket_scorecard`, `bobot`, `created_at`, `updated_at`) VALUES
(1, '03779', '', 'Perusahaan memiliki Pedoman Telola Perusahaan yang Baik (GCG Code) yang ditinjau dan dimutakhirkan secara berkala.', 0.609, '0000-00-00 00:00:00', '2018-01-02 09:22:58'),
(2, '0', '', 'Perusahaan memiliki Pedoman Perilaku yang ditinjau dan dimutakhirkan secara berkala.', 0.609, '2014-12-20 14:39:41', '2018-01-01 18:42:26'),
(3, '0', '', 'Direksi menunjuk seorang anggota Direksi sebagai penanggung jawab dalam penerapan dan pemantauan Tata Kelola Perusahaan yang Baik.', 0.456, '2017-12-26 18:16:27', '2018-01-01 18:47:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode_divisi`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_parameter`
--
ALTER TABLE `tb_parameter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bobot` (`kode_scorecard_fk`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_scorecard`
--
ALTER TABLE `tb_scorecard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_divisi_fk` (`kode_divisi_fk`),
  ADD KEY `kode_ket_divisi_fk` (`kode_ket_divisi_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id` tinyint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_parameter`
--
ALTER TABLE `tb_parameter`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_scorecard`
--
ALTER TABLE `tb_scorecard`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
