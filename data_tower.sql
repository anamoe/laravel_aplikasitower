-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 03:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_tower`
--

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_desa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kec` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `id_desa`, `desa`, `id_kec`, `created_at`, `updated_at`) VALUES
(2, '35.09.01.2001', 'Padomasan', '35.09.01', NULL, NULL),
(3, '35.09.01.2002', 'Keting', '35.09.01', NULL, NULL),
(4, '35.09.01.2003', 'Jombang', '35.09.01', NULL, NULL),
(5, '35.09.01.2004', 'Ngampelrejo', '35.09.01', NULL, NULL),
(6, '35.09.01.2005', 'Wringinagung', '35.09.01', NULL, NULL),
(7, '35.09.02.2001', 'Cakru', '35.09.02', NULL, NULL),
(8, '35.09.02.2002', 'Paseban', '35.09.02', NULL, NULL),
(9, '35.09.02.2003', 'Kraton', '35.09.02', NULL, NULL),
(10, '35.09.02.2004', 'Kencong', '35.09.02', NULL, NULL),
(11, '35.09.02.2005', ' Wonorejo', '35.09.02', NULL, NULL),
(12, '35.09.03.2001', 'Jamintoro', '35.09.03', NULL, NULL),
(13, '35.09.03.2002', 'Jatiroto', '35.09.03', NULL, NULL),
(14, '35.09.03.2003', 'Kaliglagah', '35.09.03', NULL, NULL),
(15, '35.09.03.2004', 'Jambesari', '35.09.03', NULL, NULL),
(16, '35.09.03.2005', 'Yosorati', '35.09.03', NULL, NULL),
(17, '35.09.03.2006', ' Sumberagung', '35.09.03', NULL, NULL),
(18, '35.09.03.2007', 'Gelang', '35.09.03', NULL, NULL),
(19, '35.09.03.2008', 'Rowotengah', '35.09.03', NULL, NULL),
(20, '35.09.03.2009', 'Pringgowirawan', '35.09.03', NULL, NULL),
(21, '35.09.03.2010', 'Karangbayat', '35.09.03', NULL, NULL),
(22, '35.09.04.2001', 'Kepanjen', '35.09.04', NULL, NULL),
(23, '35.09.04.2002', 'Mayangan', '35.09.04', NULL, NULL),
(24, '35.09.04.2003', 'Gumukmas', '35.09.04', NULL, NULL),
(25, '35.09.04.2004', ' Menambu', '35.09.04', NULL, NULL),
(26, '35.09.04.2005', 'Tembokrejo', '35.09.04', NULL, NULL),
(27, '35.09.04.2006', 'Purwoasri', '35.09.04', NULL, NULL),
(28, '35.09.04.2007', 'Bagorejo', '35.09.04', NULL, NULL),
(29, '35.09.05.2001', 'Sukoreno', '35.09.05', NULL, NULL),
(30, '35.09.05.2002', 'Sidorejo', '35.09.05', NULL, NULL),
(31, '35.09.05.2003', 'Gunungsari', '35.09.05', NULL, NULL),
(32, '35.09.05.2004', 'Gadingrejo', '35.09.05', NULL, NULL),
(33, '35.09.05.2005', 'Umbulrejo', '35.09.05', NULL, NULL),
(34, '35.09.05.2006', 'Umbulsari', '35.09.05', NULL, NULL),
(35, '35.09.05.2007', 'Tanjungsari', '35.09.05', NULL, NULL),
(36, '35.09.05.2008', 'Tegalwangi', '35.09.05', NULL, NULL),
(37, '35.09.05.2009', 'Paleran', '35.09.05', NULL, NULL),
(38, '35.09.06.2001', 'Tanggulkulon', '35.09.06', NULL, NULL),
(39, '35.09.06.2002', 'Tanggulwetan', '35.09.06', NULL, NULL),
(40, '35.09.06.2003', 'Patemon', '35.09.06', NULL, NULL),
(41, '35.09.06.2004', 'Darungan', '35.09.06', NULL, NULL),
(42, '35.09.06.2005', ' Manggisan', '35.09.06', NULL, NULL),
(43, '35.09.06.2006', 'Selodakon', '35.09.06', NULL, NULL),
(44, '35.09.06.2007', 'Kramat Sukoharjo', '35.09.06', NULL, NULL),
(45, '35.09.06.2008', ' Klatakan', '35.09.06', NULL, NULL),
(46, '35.09.07.2001', 'Pondokjoyo', '35.09.07', NULL, NULL),
(47, '35.09.07.2002', 'Pondokdalem', '35.09.07', NULL, NULL),
(48, '35.09.07.2003', 'Rejoagung', '35.09.07', NULL, NULL),
(49, '35.09.07.2004', 'Semboro', '35.09.07', NULL, NULL),
(50, '35.09.07.2005', 'Sidomekar', '35.09.07', NULL, NULL),
(51, '35.09.07.2006', 'Sidomulyo', '35.09.07', NULL, NULL),
(52, '35.09.08.2001', 'Mlokorejo', '35.09.08', NULL, NULL),
(53, '35.09.08.2002', 'Mojomulyo', '35.09.08', NULL, NULL),
(54, '35.09.08.2003', 'Mojosari', '35.09.08', NULL, NULL),
(55, '35.09.08.2004', 'Pugerkulon', '35.09.08', NULL, NULL),
(56, '35.09.08.2005', 'Wringintelu', '35.09.08', NULL, NULL),
(57, '35.09.08.2006', 'Kasiyan', '35.09.08', NULL, NULL),
(58, '35.09.08.2007', ' Bagon', '35.09.08', NULL, NULL),
(59, '35.09.08.2008', ' Kasiyan Timur', '35.09.08', NULL, NULL),
(60, '35.09.08.2009', 'Wonosari', '35.09.08', NULL, NULL),
(61, '35.09.08.2010', 'Jambearum', '35.09.08', NULL, NULL),
(62, '35.09.08.2011', 'Grenden', '35.09.08', NULL, NULL),
(63, '35.09.08.2012', 'Pugerwetan', '35.09.08', NULL, NULL),
(64, '35.09.08.2013', 'Lampeji', '35.09.08', NULL, NULL),
(65, '35.09.08.2014', 'Kawangrejo', '35.09.08', NULL, NULL),
(66, '35.09.08.2015', 'Karang Kedawung', '35.09.08', NULL, NULL),
(67, '35.09.09.2001', 'Curahkalong', '35.09.09', NULL, NULL),
(68, '35.09.09.2002', 'Gambirono', '35.09.09', NULL, NULL),
(69, '35.09.09.2003', ' Bangsalsari', '35.09.09', NULL, NULL),
(70, '35.09.09.2004', 'Tugusari', '35.09.09', NULL, NULL),
(71, '35.09.09.2005', 'Karangsono', '35.09.09', NULL, NULL),
(72, '35.09.09.2006', 'Sukorejo', '35.09.09', NULL, NULL),
(73, '35.09.09.2007', ' Langkap', '35.09.09', NULL, NULL),
(74, '35.09.09.2008', 'Tisnogambar', '35.09.09', NULL, NULL),
(75, '35.09.09.2009', ' Petung', '35.09.09', NULL, NULL),
(76, '35.09.09.2010', ' Banjarsari', '35.09.09', NULL, NULL),
(77, '35.09.09.2011', 'Badean', '35.09.09', NULL, NULL),
(78, '35.09.09.2012', 'Bedadung', '35.09.09', NULL, NULL),
(79, '35.09.09.2013', 'Patemon', '35.09.09', NULL, NULL),
(80, '35.09.10.2001', 'Karangduren', '35.09.10', NULL, NULL),
(81, '35.09.10.2002', ' Karang Semanding', '35.09.10', NULL, NULL),
(82, '35.09.10.2003', ' Tutul', '35.09.10', NULL, NULL),
(83, '35.09.10.2004', ' Balungkulon', '35.09.10', NULL, NULL),
(84, '35.09.10.2005', 'Balunglor', '35.09.10', NULL, NULL),
(85, '35.09.10.2006', 'Balungkidul', '35.09.10', NULL, NULL),
(86, '35.09.10.2007', 'Curahlele', '35.09.10', NULL, NULL),
(87, '35.09.10.2008', 'Gumelar', '35.09.10', NULL, NULL),
(88, '35.09.11.2001', 'Lojejer', '35.09.11', NULL, NULL),
(89, '35.09.11.2002', 'Ampel', '35.09.11', NULL, NULL),
(90, '35.09.11.2003', 'Tamansari', '35.09.11', NULL, NULL),
(91, '35.09.11.2004', 'Dukuhdempok', '35.09.11', NULL, NULL),
(92, '35.09.11.2005', ' Glundengan', '35.09.11', NULL, NULL),
(93, '35.09.11.2006', 'Tanjungrejo', '35.09.11', NULL, NULL),
(94, '35.09.11.2007', 'Kesilir', '35.09.11', NULL, NULL),
(95, '35.09.12.2001', 'Tegalsari', '35.09.12', NULL, NULL),
(96, '35.09.12.2002', 'Sabrang', '35.09.12', NULL, NULL),
(97, '35.09.12.2003', 'Sumberejo', '35.09.12', NULL, NULL),
(98, '35.09.12.2004', 'Ambulu', '35.09.12', NULL, NULL),
(99, '35.09.12.2005', 'Karanganyar', '35.09.12', NULL, NULL),
(100, '35.09.12.2006', 'Andongsari', '35.09.12', NULL, NULL),
(101, '35.09.12.2007', ' Pontang', '35.09.12', NULL, NULL),
(102, '35.09.13.2001', 'Nogosari', '35.09.13', NULL, NULL),
(103, '35.09.13.2002', 'Curahmalang', '35.09.13', NULL, NULL),
(104, '35.09.13.2003', 'Rowotamtu', '35.09.13', NULL, NULL),
(105, '35.09.13.2004', 'Kaliwining', '35.09.13', NULL, NULL),
(106, '35.09.13.2005', 'Pecoro', '35.09.13', NULL, NULL),
(107, '35.09.13.2006', 'Rambipuji', '35.09.13', NULL, NULL),
(108, '35.09.13.2007', 'Gugut', '35.09.13', NULL, NULL),
(109, '35.09.13.2008', 'Rambigundam', '35.09.13', NULL, NULL),
(110, '35.09.14.2001', 'Pakis', '35.09.14', NULL, NULL),
(111, '35.09.14.2002', 'Kemuning Sari Lor', '35.09.14', NULL, NULL),
(112, '35.09.14.2003', 'Panti', '35.09.14', NULL, NULL),
(113, '35.09.14.2004', 'Glagahwero', '35.09.14', NULL, NULL),
(114, '35.09.14.2005', 'Suci', '35.09.14', NULL, NULL),
(115, '35.09.14.2006', ' Kemiri', '35.09.14', NULL, NULL),
(116, '35.09.14.2007', 'Serut', '35.09.14', NULL, NULL),
(117, '35.09.14.2008', 'Glagahwetan', '35.09.14', NULL, NULL),
(118, '35.09.15.2001', 'Jubung', '35.09.15', NULL, NULL),
(119, '35.09.15.2002', 'Dukuhmencek', '35.09.15', NULL, NULL),
(120, '35.09.15.2003', 'Sukorambi', '35.09.15', NULL, NULL),
(121, '35.09.15.2004', 'Karangpring', '35.09.15', NULL, NULL),
(122, '35.09.15.2005', 'Klungkung', '35.09.15', NULL, NULL),
(123, '35.09.16.2001', 'Kemuningsarikidul', '35.09.16', NULL, NULL),
(124, '35.09.16.2002', 'Wonojati', '35.09.16', NULL, NULL),
(125, '35.09.16.2003', 'Jenggawah', '35.09.16', NULL, NULL),
(126, '35.09.16.2004', 'Kertonegoro', '35.09.16', NULL, NULL),
(127, '35.09.16.2005', 'Sruni', '35.09.16', NULL, NULL),
(128, '35.09.16.2006', 'Jatisari', '35.09.16', NULL, NULL),
(129, '35.09.16.2007', 'Jatimulyo', '35.09.16', NULL, NULL),
(130, '35.09.16.2008', 'Cangkring', '35.09.16', NULL, NULL),
(131, '35.09.17.2001', 'Sukamakmur', '35.09.17', NULL, NULL),
(132, '35.09.17.2002', 'Mangaran', '35.09.17', NULL, NULL),
(133, '35.09.17.2003', 'Pancakarya', '35.09.17', NULL, NULL),
(134, '35.09.17.2004', 'Ajung', '35.09.17', NULL, NULL),
(135, '35.09.17.2005', 'Klompangan', '35.09.17', NULL, NULL),
(136, '35.09.17.2006', 'Wirowongso', '35.09.17', NULL, NULL),
(137, '35.09.17.2007', ' Rowoindah', '35.09.17', NULL, NULL),
(138, '35.09.18.2001', 'Sidodadi', '35.09.18', NULL, NULL),
(139, '35.09.18.2002', 'Tempurejo', '35.09.18', NULL, NULL),
(140, '35.09.18.2003', 'Andongrejo', '35.09.18', NULL, NULL),
(141, '35.09.18.2004', 'Pondokrejo', '35.09.18', NULL, NULL),
(142, '35.09.18.2005', 'Wonoasri', '35.09.18', NULL, NULL),
(143, '35.09.18.2006', 'Curahnongko\n', '35.09.18', NULL, NULL),
(144, '35.09.18.2007', 'Curahtakir', '35.09.18', NULL, NULL),
(145, '35.09.18.2008', 'Sanenrejo\n', '35.09.18', NULL, NULL),
(146, '35.09.19.1001', 'Mangli', '35.09.19', NULL, NULL),
(147, '35.09.19.1002', 'Sempusari', '35.09.19', NULL, NULL),
(148, '35.09.19.1003', 'Kebonagung', '35.09.19', NULL, NULL),
(149, '35.09.19.1004', 'Kaliwates', '35.09.19', NULL, NULL),
(150, '35.09.19.1005', 'Jemberkidul', '35.09.19', NULL, NULL),
(151, '35.09.19.1006', 'Kepatihan', '35.09.19', NULL, NULL),
(152, '35.09.19.1007', 'Tegalbesar', '35.09.19', NULL, NULL),
(153, '35.09.20.1001', 'Banjarsengon', '35.09.20', NULL, NULL),
(154, '35.09.20.1002', 'Jumerto', '35.09.20', NULL, NULL),
(155, '35.09.20.1003', 'Gebang', '35.09.20', NULL, NULL),
(156, '35.09.20.1004', 'Slawu', '35.09.20', NULL, NULL),
(157, '35.09.20.1005', 'Bintoro', '35.09.20', NULL, NULL),
(158, '35.09.20.1006', 'Jemberlor', '35.09.20', NULL, NULL),
(159, '35.09.20.1007', 'Patrang', '35.09.20', NULL, NULL),
(160, '35.09.20.1008', 'Baratan', '35.09.20', NULL, NULL),
(161, '35.09.21.1001', 'Kebonsari', '35.09.21', NULL, NULL),
(162, '35.09.21.1002', 'Sumbersari', '35.09.21', NULL, NULL),
(163, '35.09.21.1003', ' Kranjingan', '35.09.21', NULL, NULL),
(164, '35.09.21.1004', 'Karangrejo', '35.09.21', NULL, NULL),
(165, '35.09.21.1005', 'Tegalgede', '35.09.21', NULL, NULL),
(166, '35.09.21.1006', 'Wirolegi', '35.09.21', NULL, NULL),
(167, '35.09.21.1007', 'Antirogo', '35.09.21', NULL, NULL),
(168, '35.09.22.2001', 'Kemuninglor', '35.09.22', NULL, NULL),
(169, '35.09.22.2002', 'Darsono', '35.09.22', NULL, NULL),
(170, '35.09.22.2003', 'Arjasa', '35.09.22', NULL, NULL),
(171, '35.09.22.2004', 'Candijati', '35.09.22', NULL, NULL),
(172, '35.09.22.2005', 'Biting', '35.09.22', NULL, NULL),
(173, '35.09.22.2006', 'Kamal', '35.09.22', NULL, NULL),
(174, '35.09.23.2001', 'Lengkong', '35.09.23', NULL, NULL),
(175, '35.09.23.2002', 'Kawangrejo', '35.09.23', NULL, NULL),
(176, '35.09.23.2003', 'Tamansari', '35.09.23', NULL, NULL),
(177, '35.09.23.2004', 'Mumbulsari', '35.09.23', NULL, NULL),
(178, '35.09.23.2005', 'Suco', '35.09.23', NULL, NULL),
(179, '35.09.23.2006', 'Lampeji', '35.09.23', NULL, NULL),
(180, '35.09.23.2007', 'Karang Kedawung', '35.09.23', NULL, NULL),
(181, '35.09.23.2008', 'Bagon', '35.09.23', NULL, NULL),
(182, '35.09.23.2009', 'Jambearum', '35.09.23', NULL, NULL),
(183, '35.09.23.2010', 'Kasiyan', '35.09.23', NULL, NULL),
(184, '35.09.23.2011', 'Kkasiyan Timur', '35.09.23', NULL, NULL),
(185, '35.09.23.2012', 'Mojokerto', '35.09.23', NULL, NULL),
(186, '35.09.23.2013', 'Wonosari', '35.09.23', NULL, NULL),
(187, '35.09.23.2014', 'Wringin Telu', '35.09.23', NULL, NULL),
(188, '35.09.24.2001', 'Patemon', '35.09.24', NULL, NULL),
(189, '35.09.24.2002', 'Bedadung', '35.09.24', NULL, NULL),
(190, '35.09.24.2003', 'Sumberpinang', '35.09.24', NULL, NULL),
(191, '35.09.24.2004', 'Subo', '35.09.24', NULL, NULL),
(192, '35.09.24.2005', 'Kertosari', '35.09.24', NULL, NULL),
(193, '35.09.24.2006', 'Jatian', '35.09.24', NULL, NULL),
(194, '35.09.24.2007', 'Pakusari', '35.09.24', NULL, NULL),
(195, '35.09.25.2001', 'Sucopangepok', '35.09.25', NULL, NULL),
(196, '35.09.25.2002', 'Panduman', '35.09.25', NULL, NULL),
(197, '35.09.25.2003', 'Sukojember', '35.09.25', NULL, NULL),
(198, '35.09.25.2004', 'Jelbuk', '35.09.25', NULL, NULL),
(199, '35.09.25.2005', 'Sukowiryo', '35.09.25', NULL, NULL),
(200, '35.09.25.2006', 'Sugerkidul', '35.09.25', NULL, NULL),
(201, '35.09.26.2001', ' Mrawan', '35.09.26', NULL, NULL),
(202, '35.09.26.2002', 'Mayang', '35.09.26', NULL, NULL),
(203, '35.09.26.2003', 'Seputih', '35.09.26', NULL, NULL),
(204, '35.09.26.2004', 'Tegalwaru', '35.09.26', NULL, NULL),
(205, '35.09.26.2005', 'Tegalrejo', '35.09.26', NULL, NULL),
(206, '35.09.26.2006', 'Sumberkejayan', '35.09.26', NULL, NULL),
(207, '35.09.26.2007', ' Sidomukti', '35.09.26', NULL, NULL),
(208, '35.09.27.2001', 'Gumuksari', '35.09.27', NULL, NULL),
(209, '35.09.27.2002', 'Sukoreno', '35.09.27', NULL, NULL),
(210, '35.09.27.2003', 'Patempuran', '35.09.27', NULL, NULL),
(211, '35.09.27.2004', 'Sumberkalong', '35.09.27', NULL, NULL),
(212, '35.09.27.2005', 'Sumberjeruk', '35.09.27', NULL, NULL),
(213, '35.09.27.2006', 'Glagahwero', '35.09.27', NULL, NULL),
(214, '35.09.27.2007', 'Kalisat', '35.09.27', NULL, NULL),
(215, '35.09.27.2008', 'Ajung', '35.09.27', NULL, NULL),
(216, '35.09.27.2009', 'Plalangan', '35.09.27', NULL, NULL),
(217, '35.09.27.2010', 'Gambiran', '35.09.27', NULL, NULL),
(218, '35.09.27.2011', 'Sumberketempa', '35.09.27', NULL, NULL),
(219, '35.09.27.2012', 'Sebanen', '35.09.27', NULL, NULL),
(220, '35.09.28.2001', 'Lembengan', '35.09.28', NULL, NULL),
(221, '35.09.28.2002', 'Suren', '35.09.28', NULL, NULL),
(222, '35.09.28.2003', 'Karangpaiton', '35.09.28', NULL, NULL),
(223, '35.09.28.2004', 'Sumberanget', '35.09.28', NULL, NULL),
(224, '35.09.28.2005', 'Sukogidri', '35.09.28', NULL, NULL),
(225, '35.09.28.2006', 'Ledokombo', '35.09.28', NULL, NULL),
(226, '35.09.28.2007', 'Sumberlesung', '35.09.28', NULL, NULL),
(227, '35.09.28.2008', 'Sumbersalak', '35.09.28', NULL, NULL),
(228, '35.09.28.2009', 'Slateng', '35.09.28', NULL, NULL),
(229, '35.09.28.2010', 'Sumberbulus', '35.09.28', NULL, NULL),
(230, '35.09.29.2001', 'Sumberwringin', '35.09.29', NULL, NULL),
(231, '35.09.29.2002', 'Sukokerto', '35.09.29', NULL, NULL),
(232, '35.09.29.2003', 'Sumberwaru', '35.09.29', NULL, NULL),
(233, '35.09.29.2004', 'Sukowono', '35.09.29', NULL, NULL),
(234, '35.09.29.2005', 'Baletbaru', '35.09.29', NULL, NULL),
(235, '35.09.29.2006', 'Sukorejo', '35.09.29', NULL, NULL),
(236, '35.09.29.2007', 'Sukosari', '35.09.29', NULL, NULL),
(237, '35.09.29.2008', 'Arjasa', '35.09.29', NULL, NULL),
(238, '35.09.29.2009', 'Sumberdanti', '35.09.29', NULL, NULL),
(239, '35.09.29.2010', 'Pocangan', '35.09.29', NULL, NULL),
(240, '35.09.29.2011', ' Dawuhanmangli', '35.09.29', NULL, NULL),
(241, '35.09.29.2012', 'Mojogemi', '35.09.29', NULL, NULL),
(242, '35.09.30.2001', 'Sempolan', '35.09.30', NULL, NULL),
(243, '35.09.30.2002', 'Harjomulyo', '35.09.30', NULL, NULL),
(244, '35.09.30.2003', 'Karangharjo', '35.09.30', NULL, NULL),
(245, '35.09.30.2004', 'Silo', '35.09.30', NULL, NULL),
(246, '35.09.30.2005', 'Pace', '35.09.30', NULL, NULL),
(247, '35.09.30.2006', 'Mulyorejo', '35.09.30', NULL, NULL),
(248, '35.09.30.2007', 'Sumberjati', '35.09.30', NULL, NULL),
(249, '35.09.30.2008', 'Garahan', '35.09.30', NULL, NULL),
(250, '35.09.30.2009', 'Sidomulyo', '35.09.30', NULL, NULL),
(251, '35.09.31.2001', 'Plerean', '35.09.31', NULL, NULL),
(252, '35.09.31.2002', 'Sumberpakem', '35.09.31', NULL, NULL),
(253, '35.09.31.2003', 'Pringgondani', '35.09.31', NULL, NULL),
(254, '35.09.31.2004', 'Randuagung', '35.09.31', NULL, NULL),
(255, '35.09.31.2005', 'Cumedak', '35.09.31', NULL, NULL),
(256, '35.09.31.2006', 'Sumberjambe', '35.09.31', NULL, NULL),
(257, '35.09.31.2007', 'Gunungmalang', '35.09.31', NULL, NULL),
(258, '35.09.31.2008', 'Jambearum', '35.09.31', NULL, NULL),
(259, '35.09.31.2009', 'Rowosari', '35.09.31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, '1563508684409074-PDETI8-256.jpg', '2019-07-18 20:58:04', '2019-07-18 20:58:04'),
(2, '1563508722409074-PDETI8-256.jpg', '2019-07-18 20:58:42', '2019-07-18 20:58:42'),
(3, '1563711857library.png', '2019-07-21 05:24:17', '2019-07-21 05:24:17'),
(4, '156371196557088144_1027933214068866_3570791210953998336_n.jpg', '2019-07-21 05:26:05', '2019-07-21 05:26:05'),
(5, '1563715949Screenshot_2019-07-21-19-45-55-132_com.instagram.android.png', '2019-07-21 06:32:29', '2019-07-21 06:32:29'),
(6, '1563935763kelebihan dan kelemahan honda beat.png', '2019-07-23 19:36:03', '2019-07-23 19:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `jenis__towers`
--

CREATE TABLE `jenis__towers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tower` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis__towers`
--

INSERT INTO `jenis__towers` (`id`, `nama_tower`, `created_at`, `updated_at`) VALUES
(1, 'BTS', NULL, NULL),
(2, 'Radio', NULL, NULL),
(3, 'CCTV', NULL, NULL),
(4, 'Lain-Lain', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `id_kecamatan`, `kecamatan`, `created_at`, `updated_at`) VALUES
(2, '35.09.01', 'Jombang', NULL, NULL),
(3, '35.09.02', 'Kencong', NULL, NULL),
(4, '35.09.03', 'Sumberbaru', NULL, NULL),
(5, '35.09.04', 'Gumukmas', NULL, NULL),
(6, '35.09.05', 'Umbulsari', NULL, NULL),
(7, '35.09.06', 'Tanggul', NULL, NULL),
(8, '35.09.07', 'Semboro', NULL, NULL),
(9, '35.09.08', 'Puger', NULL, NULL),
(10, '35.09.09', 'Bangsalsari', NULL, NULL),
(11, '35.09.10', 'Balung', NULL, NULL),
(12, '35.09.11', 'Wuluhan', NULL, NULL),
(13, '35.09.12', 'Ambulu', NULL, NULL),
(14, '35.09.13', 'Rambipuji', NULL, NULL),
(15, '35.09.14', 'Panti', NULL, NULL),
(16, '35.09.15', 'Sukorambi', NULL, NULL),
(17, '35.09.16', 'Jenggawah', NULL, NULL),
(18, '35.09.17', 'Ajung', NULL, NULL),
(19, '35.09.18', 'Tempurejo', NULL, NULL),
(20, '35.09.19', 'Kaliwates', NULL, NULL),
(21, '35.09.20', 'Patrang', NULL, NULL),
(22, '35.09.21', 'Sumbersari', NULL, NULL),
(23, '35.09.22', 'Arjasa', NULL, NULL),
(24, '35.09.23', 'Mumbulsari', NULL, NULL),
(25, '35.09.24', 'Pakusari', NULL, NULL),
(26, '35.09.25', 'Jelbuk', NULL, NULL),
(27, '35.09.26', 'Mayang', NULL, NULL),
(28, '35.09.27', 'Kalisat', NULL, NULL),
(29, '35.09.28', 'Ledokombo', NULL, NULL),
(30, '35.09.29', 'Sukowono', NULL, NULL),
(31, '35.09.30', 'Silo', NULL, NULL),
(32, '35.09.31', 'Sumberjambe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_03_014937_create_towers_table', 1),
(4, '2019_07_03_020551_create_fotos_table', 1),
(5, '2019_07_03_020652_create_roles_table', 1),
(6, '2019_07_03_020739_create_desas_table', 1),
(7, '2019_07_03_020819_create_kecamatans_table', 1),
(8, '2019_07_03_020929_create_jenis__towers_table', 1),
(9, '2019_07_03_021026_create_providers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `nama_provider`, `created_at`, `updated_at`) VALUES
(1, 'Telkomsel', NULL, NULL),
(2, 'Indosat', NULL, NULL),
(3, 'XL', NULL, NULL),
(4, 'Axis', NULL, NULL),
(5, 'Smartfren', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `towers`
--

CREATE TABLE `towers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tower` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kec` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_desa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koor_lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koor_leng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi` int(11) NOT NULL,
  `nama_pemilik_tower` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_imb` date NOT NULL,
  `id_provider1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provider2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_provider3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_pemilik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akhir_sewa` date NOT NULL,
  `nama_pemilik_lahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_tower` int(11) NOT NULL,
  `id_foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towers`
--

INSERT INTO `towers` (`id`, `nama_tower`, `alamat`, `rt`, `rw`, `id_kec`, `id_desa`, `koor_lat`, `koor_leng`, `tinggi`, `nama_pemilik_tower`, `tanggal_imb`, `id_provider1`, `id_provider2`, `id_provider3`, `ket_pemilik`, `akhir_sewa`, `nama_pemilik_lahan`, `id_jenis_tower`, `id_foto`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Kominfo Jember', 'Jember', '1', '1', '35.09.19', '35.09.19.1006', '-8.1723181', '113.70211429999999', 25, '', '2019-07-19', '1', '', '', 'Kominfo', '2019-07-19', 'Kominfo', 1, '2', NULL, '2019-07-18 20:58:42', '2019-07-18 20:58:42'),
(2, 'Kos', 'Jember', '1', '1', '35.09.21', '35.09.21.1001', '-8.1924373', '113.70376809999999', 25, '', '2019-07-21', '1', '', '', 'sewa', '2019-07-21', 'admin', 1, '4', NULL, '2019-07-21 05:26:05', '2019-07-21 05:26:05'),
(4, 'Alun Alun', 'Jember', '1', '1', '35.09.04', '35.09.04.2002', '-8.1722932', '113.7021115', 20, 'admin', '2019-07-24', '2', '3', '4', 'Sewa Telkom', '2019-07-24', 'Admin', 2, '2', NULL, '2019-07-23 19:30:49', '2019-07-23 19:30:49'),
(5, 'angga', 'aaaa', '1', '1', '35.09.23', '35.09.23.2010', '-8.287816549424495', '113.75051120830085', 1, '1', '2019-07-24', '1', '1', '1', '1', '2019-07-24', '1', 1, '6', NULL, '2019-07-23 19:36:03', '2019-07-23 19:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `nama`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, 'angga dwi', 'angga', '$2y$10$bu/rEJXLdvtsratXezZyDuk2oExSVLtZJTOpvXCRkDbwc/iRSczxC', NULL, '2019-07-18 20:41:54', '2019-07-18 20:41:54'),
(3, 2, 'khoirul anam', 'anam', '$2y$10$nwJ6jQioUUG4d2C2Cstm6.jXV5I5ma2e4FCtNXBXVpN4ekl8ljA1m', NULL, '2019-07-22 19:00:28', '2019-07-22 19:00:28'),
(5, 2, 'Angga Dwi Saputra', 'angga1', '$2y$10$uCyWS4ka69Hw5fNUtVvIh.pVqNB478c9vhz8BsQcqlh6hnuPuOssG', NULL, '2019-07-25 20:04:12', '2019-07-25 20:04:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `desas_id_desa_unique` (`id_desa`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis__towers`
--
ALTER TABLE `jenis__towers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kecamatans_id_unique` (`id`),
  ADD UNIQUE KEY `kecamatans_id_kecamatan_unique` (`id_kecamatan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `towers`
--
ALTER TABLE `towers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `koor_lat` (`koor_lat`,`koor_leng`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis__towers`
--
ALTER TABLE `jenis__towers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `towers`
--
ALTER TABLE `towers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
