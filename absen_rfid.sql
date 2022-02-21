-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 01:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen_rfid`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nokartu` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `suhu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nokartu`, `tanggal`, `jam_masuk`, `jam_pulang`, `suhu`) VALUES
(1, '20225013725', '2021-12-14', '16:34:06', '17:18:10', '0'),
(2, '103315225', '2021-12-14', '16:34:08', '00:00:00', '0'),
(3, '6033130100', '2021-12-14', '16:40:07', '17:16:33', '0'),
(4, '103315225', '2021-12-15', '14:24:11', '14:29:53', '0'),
(5, '6033130100', '2021-12-15', '14:25:10', '14:29:59', '0'),
(6, '6033130100', '2021-12-21', '15:47:39', '00:00:00', '0'),
(7, '20225013725', '2021-12-21', '15:47:57', '00:00:00', '0'),
(8, '1543513925', '2021-12-21', '16:19:55', '00:00:00', '0'),
(9, '20225013725', '2021-12-22', '09:48:57', '00:00:00', '0'),
(10, '1543513925', '2021-12-22', '10:01:42', '00:00:00', '0'),
(11, '1543513925', '2021-12-23', '11:49:17', '00:00:00', '0'),
(12, '20225013725', '2021-12-23', '11:49:25', '14:43:59', '0'),
(13, '20225013725', '2021-12-24', '16:20:39', '00:00:00', '0'),
(14, '1543513925', '2021-12-24', '16:20:55', '00:00:00', '0'),
(15, '1543513925', '2021-12-27', '10:53:57', '00:00:00', '0'),
(16, '20225013725', '2021-12-27', '15:21:04', '00:00:00', '0'),
(17, '67811672', '2021-12-28', '11:07:25', '00:00:00', '0'),
(18, '20225013725', '2021-12-30', '12:42:30', '13:07:34', '0'),
(20, '1543513925', '2021-12-30', '13:05:59', '13:43:07', '0'),
(21, '67811672', '2021-12-30', '13:14:33', '13:41:41', '0'),
(22, '20225013725', '2022-01-03', '11:12:00', '00:00:00', '0'),
(23, '1543513925', '2022-01-03', '11:12:05', '00:00:00', '0'),
(24, '1794423717', '2022-01-03', '14:38:30', '00:00:00', '0'),
(25, '211181519', '2022-01-03', '14:38:35', '00:00:00', '0'),
(26, '243432819', '2022-01-04', '08:57:29', '00:00:00', '0'),
(27, '831123617', '2022-01-04', '08:57:48', '00:00:00', '0'),
(28, '1313013519', '2022-01-04', '08:58:05', '00:00:00', '0'),
(29, '147213119', '2022-01-04', '08:58:44', '00:00:00', '0'),
(30, '2271343719', '2022-01-04', '08:59:22', '00:00:00', '0'),
(31, '1318712117', '2022-01-04', '09:00:59', '00:00:00', '0'),
(32, '1152813617', '2022-01-04', '09:01:01', '00:00:00', '0'),
(33, '21119011017', '2022-01-04', '09:01:03', '00:00:00', '0'),
(34, '11512419', '2022-01-04', '09:01:05', '00:00:00', '0'),
(35, '5124311817', '2022-01-04', '09:01:18', '00:00:00', '0'),
(36, '3514812917', '2022-01-04', '09:01:25', '00:00:00', '0'),
(37, '198114517', '2022-01-04', '09:01:30', '00:00:00', '0'),
(38, '67563319', '2022-01-04', '09:01:39', '00:00:00', '0'),
(39, '1311451919', '2022-01-04', '09:01:43', '00:00:00', '0'),
(40, '39010817', '2022-01-04', '09:01:45', '00:00:00', '0'),
(41, '16317324717', '2022-01-04', '10:21:22', '13:32:42', '0'),
(42, '16317324717', '2022-01-05', '07:42:29', '11:40:10', '0'),
(43, '243842619', '2022-01-07', '13:07:33', '00:00:00', '0'),
(44, '16317324717', '2022-01-07', '13:07:45', '00:00:00', '0'),
(45, '351709217', '2022-01-07', '13:07:51', '00:00:00', '0'),
(46, '21119011017', '2022-01-07', '13:07:56', '00:00:00', '0'),
(47, '11512419', '2022-01-07', '13:08:00', '00:00:00', '0'),
(48, '5124311817', '2022-01-07', '13:08:11', '00:00:00', '0'),
(49, '22715611719', '2022-01-07', '13:08:20', '00:00:00', '0'),
(50, '1951220317', '2022-01-07', '13:08:24', '00:00:00', '0'),
(51, '6720413919', '2022-01-07', '13:08:29', '00:00:00', '0'),
(52, '1792443919', '2022-01-07', '13:08:37', '00:00:00', '0'),
(53, '38112219', '2022-01-07', '13:08:44', '00:00:00', '0'),
(54, '39010817', '2022-01-07', '13:08:50', '00:00:00', '0'),
(55, '67211619', '2022-01-07', '13:08:58', '00:00:00', '0'),
(56, '13115112617', '2022-01-07', '13:09:05', '00:00:00', '0'),
(57, '8310911817', '2022-01-07', '13:09:19', '00:00:00', '0'),
(58, '99538617', '2022-01-07', '13:09:24', '00:00:00', '0'),
(59, '1638414817', '2022-01-07', '13:09:28', '00:00:00', '0'),
(60, '115398517', '2022-01-07', '13:09:32', '00:00:00', '0'),
(61, '3647819', '2022-01-07', '13:09:41', '00:00:00', '0'),
(62, '16312112217', '2022-01-07', '13:09:48', '00:00:00', '0'),
(63, '67563319', '2022-01-07', '13:09:50', '00:00:00', '0'),
(64, '2431013519', '2022-01-07', '13:09:55', '00:00:00', '0'),
(65, '671122319', '2022-01-07', '13:10:00', '00:00:00', '0'),
(66, '9920111217', '2022-01-07', '13:10:03', '00:00:00', '0'),
(67, '671533519', '2022-01-07', '13:10:07', '00:00:00', '0'),
(68, '11511724817', '2022-01-07', '13:10:10', '00:00:00', '0'),
(69, '325422917', '2022-01-07', '13:10:15', '00:00:00', '0'),
(70, '1311312219', '2022-01-07', '13:10:21', '00:00:00', '0'),
(71, '2115321017', '2022-01-07', '13:10:25', '00:00:00', '0'),
(72, '17925011419', '2022-01-07', '13:10:31', '00:00:00', '0'),
(73, '9925024817', '2022-01-07', '13:10:36', '00:00:00', '0'),
(74, '1154911619', '2022-01-07', '13:10:41', '00:00:00', '0'),
(75, '2117411819', '2022-01-07', '13:10:46', '00:00:00', '0'),
(76, '211181519', '2022-01-07', '13:10:51', '00:00:00', '0'),
(77, '38812419', '2022-01-07', '13:10:56', '00:00:00', '0'),
(78, '115611117', '2022-01-07', '13:11:04', '00:00:00', '0'),
(79, '19516423117', '2022-01-07', '13:11:09', '00:00:00', '0'),
(80, '16319614619', '2022-01-07', '13:11:18', '00:00:00', '0'),
(81, '13119110917', '2022-01-07', '13:11:26', '00:00:00', '0'),
(82, '11512712217', '2022-01-07', '13:11:30', '00:00:00', '0'),
(83, '1631941519', '2022-01-07', '13:11:34', '00:00:00', '0'),
(84, '24325513717', '2022-01-07', '13:11:37', '00:00:00', '0'),
(85, '1151648417', '2022-01-07', '13:11:41', '00:00:00', '0'),
(86, '193120017', '2022-01-07', '13:11:44', '00:00:00', '0'),
(87, '22724624917', '2022-01-07', '13:11:47', '00:00:00', '0'),
(88, '163548517', '2022-01-07', '13:11:52', '00:00:00', '0'),
(89, '2433922917', '2022-01-07', '13:11:55', '00:00:00', '0'),
(90, '34612619', '2022-01-07', '13:11:59', '00:00:00', '0'),
(91, '243432819', '2022-01-07', '13:12:02', '00:00:00', '0'),
(92, '8311325018', '2022-01-07', '13:12:10', '00:00:00', '0'),
(93, '21123411419', '2022-01-07', '13:12:13', '00:00:00', '0'),
(94, '314312117', '2022-01-07', '13:12:22', '00:00:00', '0'),
(95, '14721110117', '2022-01-07', '13:12:27', '00:00:00', '0'),
(96, '1917711817', '2022-01-07', '13:12:32', '00:00:00', '0'),
(97, '17915611719', '2022-01-07', '13:12:36', '00:00:00', '0'),
(98, '1951229317', '2022-01-07', '13:12:39', '00:00:00', '0'),
(99, '1311451919', '2022-01-07', '13:12:43', '00:00:00', '0'),
(100, '1634324918', '2022-01-07', '13:12:47', '00:00:00', '0'),
(101, '1631309317', '2022-01-07', '13:12:54', '00:00:00', '0'),
(102, '1953013917', '2022-01-07', '13:12:58', '00:00:00', '0'),
(103, '31265319', '2022-01-07', '13:13:02', '00:00:00', '0'),
(104, '1795210717', '2022-01-07', '13:13:23', '00:00:00', '0'),
(105, '16349819', '2022-01-07', '13:13:28', '00:00:00', '0'),
(106, '322013919', '2022-01-07', '13:13:31', '00:00:00', '0'),
(107, '1313013519', '2022-01-07', '13:13:35', '00:00:00', '0'),
(108, '179692619', '2022-01-07', '13:13:38', '00:00:00', '0'),
(109, '24316924417', '2022-01-07', '13:13:41', '00:00:00', '0'),
(110, '513723917', '2022-01-07', '13:13:43', '00:00:00', '0'),
(111, '35823117', '2022-01-07', '13:13:48', '00:00:00', '0'),
(112, '192624818', '2022-01-07', '13:13:52', '00:00:00', '0'),
(113, '2271343719', '2022-01-07', '13:13:57', '00:00:00', '0'),
(114, '19510023418', '2022-01-07', '13:14:03', '00:00:00', '0'),
(115, '351316917', '2022-01-07', '13:14:09', '00:00:00', '0'),
(116, '211443119', '2022-01-07', '13:14:24', '00:00:00', '0'),
(117, '14712813919', '2022-01-07', '13:14:27', '00:00:00', '0'),
(118, '191967619', '2022-01-07', '13:14:32', '00:00:00', '0'),
(119, '19519611417', '2022-01-07', '13:14:37', '00:00:00', '0'),
(120, '1318712117', '2022-01-07', '13:14:41', '00:00:00', '0'),
(121, '671142128', '2022-01-07', '13:14:44', '00:00:00', '0'),
(122, '198114517', '2022-01-07', '13:14:48', '00:00:00', '0'),
(123, '11516221817', '2022-01-07', '13:14:51', '00:00:00', '0'),
(124, '147657819', '2022-01-07', '13:14:56', '00:00:00', '0'),
(125, '6710712517', '2022-01-07', '13:14:59', '00:00:00', '0'),
(126, '3514312917', '2022-01-07', '13:15:04', '00:00:00', '0'),
(127, '191413719', '2022-01-07', '13:15:06', '00:00:00', '0'),
(128, '6716212017', '2022-01-07', '13:15:11', '00:00:00', '0'),
(129, '1794423717', '2022-01-07', '13:15:13', '00:00:00', '0'),
(130, '17923711919', '2022-01-07', '13:15:17', '00:00:00', '0'),
(131, '16310110417', '2022-01-17', '13:16:18', '00:00:00', '0'),
(132, '831123617', '2022-01-17', '13:16:42', '00:00:00', '0'),
(133, '17923711919', '2022-01-17', '08:38:51', '08:44:14', '0'),
(134, '322013919', '2022-01-17', '08:41:43', '08:42:57', '0'),
(135, '351316917', '2022-01-17', '08:41:54', '08:42:19', '0'),
(148, '16317324717', '2022-01-21', '08:06:11', '14:32:25', '35.1'),
(149, '1318712117', '2022-01-21', '11:10:24', '00:00:00', '37.75'),
(150, '831123617', '2022-01-21', '11:19:06', '00:00:00', '35.69');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nokartu` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nokartu`, `nama`, `alamat`) VALUES
(1, '211181519', 'Didik Suryabuana. S.Kh. M.Kom', 'Ketua Kompetensi Keahlian Teknik Komputer dan Jaringan'),
(2, '147657819', 'Lia Mutiara', 'Pelaksana Urusan Administrasi Keuangan '),
(3, '1794423717', 'Lukas Agus Listianto', 'Manajer Perawatan Sarana dan Prasarana'),
(4, '11511724817', 'Hapid. S.Ag.', 'Pembina Akhlak Mulia dan Koordinator Zakat. Infaq dan Shadaqah'),
(5, '13112914717', 'Catur Budi Cahyono. S.Pd. Mat.', 'Wakasek Bidang Sarana dan Prasarana'),
(6, '3514312917', 'Drs. Rudy Benyamin ', 'Kepala Tenaga Administrasi'),
(7, '671533519', 'Muslih. M.Kom', 'Wakasek Bidang Hubungan Masyarakat'),
(8, '9920111217', 'Nurdin', 'Manajer Bantuan Operasional Sekolah (BOS)'),
(9, '6710712517', 'Tri Wahyuni', 'Manajer Kantin Sehat'),
(10, '1631941519', 'Budiyono. S.Pd.', 'Wakasek Kesiswaan'),
(11, '8310911817', 'Komalasari. S.Pd.', 'Manajer Sistem Penjaminan Mutu'),
(12, '671122319', 'Irma Rohima. S.Si', 'Ketua Lembaga Sertifikasi Profesi'),
(13, '6716212017', 'Muhamad Ridwan', 'Pelaksana Urusan Administrasi Kesiswaan '),
(14, '1951571719', 'Iin Mulyani. S.Si.', 'Kepala Sekolah'),
(15, '351709217', 'Nunuk Mujiana. S.Pd.', 'Wakasek. Bid. Kurikulum'),
(16, '179533919', 'Hendri Prawira. S.Kom', 'Guru'),
(17, '16312112217', 'Juliana Mansur. M.Kom', 'Ketua Kompetensi Keahlian RPL'),
(18, '1638414817', 'Rina Finanti. SAB.', 'Ketua Kompetensi Keahlian Bisnis Daring dan Pemasaran. Koordinator Beasiswa'),
(19, '1952413119', 'Deni Mulyana', 'Petugas Layanan Khusus Kerumahtanggaan'),
(20, '13115112617', 'Dewi Ramayanti. S.Pd.', 'Ketua Tim Satgas Literasi'),
(21, '99538617', 'Dede Mulyana. ST.', 'Kepala Laboratorium Kompetensi Keahlian TKJ'),
(22, '115398517', 'Dede Hermansyah. S.Si.', 'Guru'),
(23, '3647819', 'Cecep Erik Kurniawan. S.Ag.', 'Pembina Pramuka Putra '),
(24, '191967619', 'Siti Syarifah. A.Md.', 'Kepala Laboratorium Kompetensi Keahlian OTKP'),
(25, '31265319', 'Rachmi Nurulwahyuni. S.S.', 'Guru'),
(26, '2431256819', 'Yusup', 'Petugas Layanan Khusus Pengemudi '),
(27, '1953013917', 'Feri Firmansyah. S.Pd.', 'Pembina Kantin Sehat'),
(28, '1631309317', 'Ardi Ariansyah. S.Kom.', 'Guru'),
(29, '1634324918', 'Saepul Amri. S.Pd.', 'Guru'),
(30, '1951229317', 'Acep Rahmat. S.Kom', 'Manajer Pengelolaan Data dan Informasi'),
(31, '211443119', 'Sumeiji Darusman', 'Pelaksana Urusan Administrasi Kesiswaan '),
(32, '2431013519', 'Mohamad Rizal. S.Pd.', 'Pembina OSIS'),
(33, '19519611417', 'Jakaria. S.E.', 'Kepala Perpustakaan'),
(34, '24315222417', 'Miptahudin', 'Tenaga Teknis Perawatan Peralatan '),
(35, '17923711919', 'M. Sani Fardiansyah', 'Petugas Layanan Khusus Penjaga Sekolah'),
(36, '193120017', 'Eko Wigiantoro. S.Ds.', 'Ketua Kompetensi Keahlian Multimedia'),
(37, '671142128', 'Sehabudin', 'Petugas Layanan Khusus Kerumahtanggaan'),
(38, '11516221817', 'M. Nawawi', 'Pelaksana Urusan Administrasi Kurikulum'),
(39, '2115321017', 'Noer Sandy Mochamad. S.Pd.', 'Manajer Unit Kesehatan Sekolah (UKS)'),
(40, '22715611719', 'Elvia Roza. S.Pd.', 'Koordinator Ekstrakurikuler'),
(41, '1311312219', 'Kiki Rizki Romadhoniyah. S.Si.', 'Koordinator Education for Sustainable Development (ESD)'),
(42, '38812419', 'Ria Rosia Cahyawati. S.Pd.', 'Guru'),
(43, '67211619', 'Shinta Oktavia. S.Ak.', 'Guru'),
(44, '34612619', 'Didin Saepudin. S.Kom.', 'Guru'),
(45, '322013919', 'Agung Gunawan', 'Pelaksana Urusan Administrasi Perawatan Peralatan & Sarana Belajar'),
(46, '9925024817', 'Endang Setiawan. S.Pd.', 'Guru'),
(47, '1154911619', 'Amanda Putri Sukamto. S.Pd.', 'Pembina Pramuka Putri'),
(48, '38112219', 'Tri Novitasari. S.Pd.', 'Guru'),
(49, '24322312919', 'Sugeng Suryanto', 'Pelaksana Urusan Perawatan Perlengkapan dan Gedung'),
(50, '1151612219', 'Akhmad Rosyidi', 'Tenaga Teknis Perawatan Peralatan '),
(51, '992424217', 'Nio She Mi. S.Pd. B.S.E', 'Guru'),
(52, '2117411819', 'Nurafia Kuraini. S.Pd. ', 'Ketua Kompetensi Keahlian OTKP'),
(53, '17925011419', 'Idalia. S.Si. ', 'Koordinator Program Unggulan Terpadu'),
(54, '1952119817', 'Mihartoyo', 'Petugas Layanan Khusus Penjaga Sekolah'),
(55, '2433922917', 'Boris Maranatha Doble. S.Pd.K.', 'Guru'),
(56, '1634713119', 'Gusti Ayu Kade Sutini. SP.M.Fil.H.', 'Guru'),
(57, '17915611719', 'Mirzah Muntana. S.Sos', 'Ketua Kompetensi Keahlian HTL'),
(58, '6720413919', 'Nurulia Apriliani. S.Si. ', 'Guru'),
(59, '1951220317', 'Siti Haryanti. S.Pd. ', 'Guru'),
(60, '9916621117', 'Muhamad Abdul Rosid', ' Petugas Layanan Khusus Tukang Kebun'),
(61, '35823117', 'Imas ', 'Laboran Otomatisasi dan Tata Kelola Perkantoran'),
(62, '14712813919', 'Muhamad Saefulah', 'Laboran TKJ'),
(63, '22711011919', 'Miftah Fauzi', 'Tenaga Teknis Perawatan Peralatan '),
(64, '831249717', 'Nuramin', 'Petugas Layanan Khusus Penjaga Sekolah'),
(65, '351316917', 'Didi Mulyadi', 'Pelaksana Urusan Administrasi Perawatan Peralatan & Sarana Belajar'),
(66, '1152062319', 'Mulyana Sidik', 'Petugas Layanan Khusus Penjaga Sekolah'),
(67, '191413719', 'Mohamad Valdy Ratama. S.T.', 'Guru'),
(68, '16349819', 'Arya Adhi Prasetya Purnomo', 'Laboran Kompetensi Keahlian RPL'),
(69, '1792443919', 'Liza Apriani', 'Laboran Kompetensi Keahlian TKJ'),
(70, '1795210717', 'Rima Meriawati', 'Laboran Kompetensi Keahlian MMD'),
(71, '19510023418', 'Nur Saripah', 'Pelaksana Urusan Administrasi Kepegawaian'),
(72, '8311325018', 'M. Ali Sutan. S.Kom.', 'Guru'),
(73, '243842619', 'Asry Erma Yunita. S.Pd.', 'Guru'),
(74, '1638825117', 'Marsudi', 'Petugas Layanan Khusus Penjaga Sekolah'),
(75, '1314722317', 'Ari Setiawan', ' Petugas Layanan Khusus Tenaga Kebersihan '),
(76, '2115525317', 'Ramdani', 'Petugas Layanan Khusus Penjaga Sekolah'),
(77, '22724624917', 'Annisa Ulfi Alfiah. S.Pd.', 'Guru'),
(78, '24316924417', 'Noer Muhamad Reksy Agus Saputra', 'Laboran Kompetensi Keahlian BDP'),
(79, '513723917', 'Novica Ardina', 'Laboran Kompetensi Keahlian RPL'),
(80, '325422917', 'Yayu Sri Rahayu. S.Pd.', 'Guru'),
(81, '19516423117', 'Sidik Arif Irawan. S.P.', 'Manajer Penataan Lingkungan Sekolah'),
(82, '16319614619', 'Anggi Nurdianti. S.Pd.', 'Guru'),
(83, '21123411419', 'Siti Jahidah Fina. S.Hum.', 'Guru'),
(84, '163548517', 'Wijiastuti. S.Pd.', 'Guru'),
(85, '14721110117', 'Yessy Novita Dewi. S.Pd.', 'Guru'),
(86, '1920311117', 'Fachrunisa Ardiani', 'Laboran MMD'),
(87, '1917711817', 'Alan Jaelani. S.Kom.', 'Guru'),
(88, '11512712217', 'Fatimah Nur Salam. S.E.', 'Guru'),
(89, '1151648417', 'Asri Lestari. S.Pd.', 'Guru'),
(90, '24325513717', 'Lia Siti Sholehah. S.Pd.', 'Guru'),
(91, '179692619', 'Siti Mariam', 'Pelaksana Urusan Adm. Sarana dan Prasarana'),
(92, '13119110917', 'Ria Aryalita. S.Pd.', 'Guru'),
(93, '314312117', 'Nurasiah. S.Pd.', 'Guru'),
(94, '39010817', 'Ajeng Fatimah Noor Islami. S.Pd.', 'Kepala Kompetensi keahlian tata boga'),
(95, '1311451919', 'Rafli Ilham Alamsyah', 'Pelaksana Urusan Perpustakaan'),
(96, '67563319', 'Rizal Taufan. S.S.', 'Guru Piket'),
(97, '198114517', 'Miftahuddin. S.Kom.I', 'Pelaksana Urusan Bursa Kerja Khusus (BKK) dan Admin Web'),
(98, '3514812917', 'Rizki Kurniawan. S.Ag.', 'Guru'),
(99, '5124311817', 'Muhammad Rizky Rhamadan. S.I.Kom.', 'Guru'),
(100, '11512419', 'Dian Mistianti Sugiharti. S.Pd.', 'Guru'),
(101, '21119011017', 'Zulfa Tri Astuti. S.Pd.', 'Guru'),
(102, '16317324717', 'Febrian Praditama Yusuf. S.Pd.', 'Guru'),
(103, '1318712117', 'Agisti Setia Putri', 'Laboran Kompetensi Keahlian Rekayasa Perangkat Lunak'),
(104, '1313013519', 'Adiska Aulia Erwin', 'Pelaksana Adm. Kesiswaan'),
(105, '831123617', 'Riska Mawardi', 'Laboran Kompetensi Keahlian Rekayasa Perangkat Lunak'),
(106, '16310110417', 'Nurul Rizkiani Zahra', 'Pelaksana Adm. Sarpras'),
(107, '192624818', 'Abdullah Al Farizi', 'Laboran Kompetensi Keahlian Teknik Komputer dan Jaringan'),
(108, '115611117', 'Rosita. M.Si.', 'Guru'),
(109, '2271343719', 'Lisa Putri Simanungkalit. S.Pd.', 'Guru'),
(110, '243432819', 'Rima Rachmawati. S.M.', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `mode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`mode`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `tmprfid`
--

CREATE TABLE `tmprfid` (
  `nokartu` varchar(20) NOT NULL,
  `suhu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`mode`);

--
-- Indexes for table `tmprfid`
--
ALTER TABLE `tmprfid`
  ADD PRIMARY KEY (`nokartu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
