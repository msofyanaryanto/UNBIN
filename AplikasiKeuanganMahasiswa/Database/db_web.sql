-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2021 pada 16.28
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_barang`
--

CREATE TABLE `ref_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `stok` int(50) NOT NULL,
  `stok_minimal` int(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_group`
--

CREATE TABLE `ref_group` (
  `id_group` int(11) NOT NULL,
  `name_group` varchar(225) NOT NULL,
  `create_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_group`
--

INSERT INTO `ref_group` (`id_group`, `name_group`, `create_at`, `modified_at`) VALUES
(1, 'Administrator', '2016-08-21 04:10:11', '2017-03-05 22:46:52'),
(3, 'Kasir', '2021-08-14 20:32:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_icon`
--

CREATE TABLE `ref_icon` (
  `id_icon` int(11) NOT NULL,
  `name_icon` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_icon`
--

INSERT INTO `ref_icon` (`id_icon`, `name_icon`) VALUES
(1, 'adjust'),
(2, 'anchor'),
(3, 'archive'),
(4, 'area-chart'),
(5, 'arrows'),
(6, 'arrows-h'),
(7, 'arrows-v\r\n'),
(8, 'asterisk'),
(9, 'at'),
(10, 'automobile'),
(11, 'ban'),
(12, 'bank'),
(13, 'bar-chart'),
(14, 'bar-chart-o'),
(15, 'barcode'),
(16, 'bars'),
(17, 'bed'),
(18, 'beer'),
(19, 'bell'),
(20, 'bell-o'),
(21, 'bell-slash'),
(22, 'bell-slash-o'),
(23, 'bicycle'),
(24, 'binoculars'),
(25, 'birthday-cake'),
(26, 'bolt'),
(27, 'bomb'),
(28, 'book'),
(29, 'bookmark'),
(30, 'bookmark-o'),
(31, 'briefcase'),
(32, 'bug'),
(33, 'building'),
(34, 'building-o'),
(35, 'bullhorn'),
(36, 'bullseye'),
(37, 'bus'),
(38, 'cab'),
(39, 'calculator'),
(40, 'calendar'),
(41, 'calendar-o'),
(42, 'camera'),
(43, 'camera-retro'),
(44, 'car'),
(45, 'caret-square-o-down'),
(46, 'caret-square-o-left'),
(47, 'caret-square-o-right'),
(48, 'caret-square-o-up'),
(49, 'cart-arrow-down'),
(50, 'cart-plus'),
(51, 'cc'),
(52, 'certificate'),
(53, 'check'),
(54, 'check-circle'),
(55, 'check-circle-o'),
(56, 'check-square'),
(57, 'check-square-o'),
(58, 'child'),
(59, 'circle'),
(60, 'circle-o'),
(61, 'circle-o-notch'),
(62, 'circle-thin'),
(63, 'clock-o'),
(64, 'close'),
(65, 'cloud'),
(66, 'cloud-download'),
(67, 'cloud-upload'),
(68, 'code'),
(69, 'code-fork'),
(70, 'coffee'),
(71, 'cog'),
(72, 'cogs'),
(73, 'comment'),
(74, 'comment-o'),
(75, 'comments'),
(76, 'comments-o'),
(77, 'compass'),
(78, 'copyright'),
(79, 'credit-card'),
(80, 'crop'),
(81, 'crosshairs'),
(82, 'cube'),
(83, 'cubes'),
(84, 'cutlery'),
(85, 'dashboard'),
(86, 'database'),
(87, 'desktop'),
(88, 'diamond'),
(89, 'dot-circle-o'),
(90, 'download'),
(91, 'edit'),
(92, 'ellipsis-h'),
(93, 'ellipsis-v'),
(94, 'envelope'),
(95, 'envelope-o'),
(96, 'envelope-square'),
(97, 'eraser'),
(98, 'exchange'),
(99, 'exclamation'),
(100, 'exclamation-circle'),
(101, 'exclamation-triangle'),
(102, 'external-link'),
(103, 'external-link-square'),
(104, 'eye'),
(105, 'eye-slash'),
(106, 'eyedropper'),
(107, 'fax'),
(108, 'female'),
(109, 'fighter-jet'),
(110, 'file-archive-o'),
(111, 'file-audio-o'),
(112, 'file-code-o'),
(113, 'file-excel-o'),
(114, 'file-image-o'),
(115, 'file-movie-o'),
(116, 'file-pdf-o'),
(117, 'file-photo-o'),
(118, 'file-picture-o'),
(119, 'file-powerpoint-o'),
(120, 'file-sound-o'),
(121, 'file-video-o'),
(122, 'file-word-o'),
(123, 'file-zip-o'),
(124, 'film'),
(125, 'filter'),
(126, 'fire'),
(127, 'fire-extinguisher'),
(128, 'flag'),
(129, 'flag-checkered'),
(130, 'flag-o'),
(131, 'flash'),
(132, 'flask'),
(133, 'folder'),
(134, 'folder-o'),
(135, 'folder-open'),
(136, 'folder-open-o'),
(137, 'frown-o'),
(138, 'futbol-o'),
(139, 'gamepad'),
(140, 'gavel'),
(141, 'gear'),
(142, 'gears'),
(143, 'genderless'),
(144, 'gift'),
(145, 'glass'),
(146, 'globe'),
(147, 'graduation-cap'),
(148, 'group'),
(149, 'hdd-o'),
(150, 'headphones'),
(151, 'heart'),
(152, 'heart-o'),
(153, 'heartbeat'),
(154, 'history'),
(155, 'home'),
(156, 'hotel'),
(157, 'image'),
(158, 'inbox'),
(159, 'info'),
(160, 'info-circle'),
(161, 'institution'),
(162, 'key'),
(163, 'keyboard-o'),
(164, 'language'),
(165, 'laptop'),
(166, 'leaf'),
(167, 'legal'),
(168, 'lemon-o'),
(169, 'level-down'),
(170, 'level-up'),
(171, 'life-bouy'),
(172, 'life-buoy'),
(173, 'life-ring'),
(174, 'life-saver'),
(175, 'lightbulb-o'),
(176, 'line-chart'),
(177, 'location-arrow'),
(178, 'lock'),
(179, 'magic'),
(180, 'magnet'),
(181, 'mail-forward'),
(182, 'mail-reply'),
(183, 'mail-reply-all'),
(184, 'male'),
(185, 'map-marker'),
(186, 'meh-o'),
(187, 'microphone'),
(188, 'microphone-slash'),
(189, 'minus'),
(190, 'minus-circle'),
(191, 'minus-square'),
(192, 'minus-square-o'),
(193, 'mobile'),
(194, 'mobile-phone'),
(195, 'money'),
(196, 'moon-o'),
(197, 'mortar-board'),
(198, 'motorcycle'),
(199, 'music'),
(200, 'navicon'),
(202, 'newspaper-o'),
(203, 'paint-brush'),
(204, 'paper-plane'),
(205, 'paper-plane-o'),
(206, 'paw'),
(207, 'pencil'),
(208, 'pencil-square'),
(209, 'pencil-square-o'),
(210, 'phone'),
(211, 'phone-square'),
(212, 'photo'),
(213, 'picture-o'),
(214, 'pie-chart'),
(215, 'plane'),
(216, 'plug'),
(217, 'plus'),
(218, 'plus-circle'),
(219, 'plus-square'),
(220, 'plus-square-o'),
(221, 'power-off'),
(222, 'print'),
(223, 'puzzle-piece'),
(224, 'qrcode'),
(225, 'question'),
(226, 'question-circle'),
(227, 'quote-left'),
(228, 'quote-right'),
(229, 'random'),
(230, 'recycle'),
(231, 'refresh'),
(232, 'remove'),
(233, 'reorder'),
(234, 'reply'),
(235, 'reply-all'),
(236, 'retweet'),
(237, 'road'),
(238, 'rocket'),
(239, 'rss'),
(240, 'rss-square'),
(241, 'search'),
(242, 'search-minus'),
(243, 'search-plus'),
(244, 'send'),
(245, 'send-o'),
(246, 'server'),
(247, 'share'),
(248, 'share-alt'),
(249, 'share-alt-square'),
(250, 'share-square'),
(251, 'share-square-o'),
(252, 'shield'),
(253, 'ship'),
(254, 'shopping-cart'),
(255, 'sign-in'),
(256, 'sign-out'),
(257, 'signal'),
(258, 'sitemap'),
(259, 'sliders'),
(260, 'smile-o'),
(261, 'soccer-ball-o'),
(262, 'sort'),
(263, 'sort-alpha-asc'),
(264, 'sort-alpha-desc'),
(265, 'sort-amount-asc'),
(266, 'sort-amount-desc'),
(267, 'sort-asc'),
(268, 'sort-desc'),
(269, 'sort-down'),
(270, 'sort-numeric-asc'),
(271, 'sort-numeric-desc'),
(272, 'sort-up'),
(273, 'space-shuttle'),
(274, 'spinner'),
(275, 'spoon'),
(276, 'square'),
(277, 'square-o'),
(278, 'star'),
(279, 'star-half'),
(280, 'star-half-empty'),
(281, 'star-half-full'),
(282, 'star-half-o'),
(283, 'star-o'),
(284, 'street-view'),
(285, 'suitcase'),
(286, 'sun-o'),
(287, 'support'),
(288, 'tablet'),
(289, 'tachometer'),
(290, 'tag'),
(291, 'tags'),
(292, 'tasks'),
(293, 'taxi'),
(294, 'terminal'),
(295, 'thumb-tack'),
(296, 'thumbs-down'),
(297, 'thumbs-o-down'),
(298, 'thumbs-o-up'),
(299, 'thumbs-up'),
(300, 'ticket'),
(301, 'times'),
(302, 'times-circle'),
(303, 'times-circle-o'),
(304, 'tint'),
(305, 'toggle-down'),
(306, 'toggle-left'),
(307, 'toggle-off'),
(308, 'toggle-on'),
(309, 'toggle-right'),
(310, 'toggle-up'),
(311, 'trash'),
(312, 'trash-o'),
(313, 'tree'),
(314, 'trophy'),
(315, 'truck'),
(316, 'tty'),
(317, 'umbrella'),
(318, 'university'),
(319, 'unlock'),
(320, 'unlock-alt'),
(321, 'unsorted'),
(322, 'upload'),
(323, 'user'),
(324, 'user-plus'),
(325, 'user-secret'),
(326, 'user-times'),
(327, 'users'),
(328, 'video-camera'),
(329, 'volume-down'),
(330, 'volume-off'),
(331, 'volume-up'),
(332, 'warning'),
(333, 'wheelchair'),
(334, 'wifi'),
(335, 'cc-amex'),
(336, 'cc-discover'),
(337, 'cc-mastercard'),
(338, 'cc-paypal'),
(339, 'cc-stripe'),
(340, 'cc-visa'),
(341, 'credit-card'),
(342, 'google-wallet'),
(343, 'paypal'),
(344, 'bitcoin'),
(345, 'btc'),
(346, 'cny'),
(347, 'dollar'),
(348, 'eur'),
(349, 'euro'),
(350, 'gbp'),
(351, 'ils'),
(352, 'inr'),
(353, 'jpy'),
(354, 'krw'),
(355, 'money'),
(356, 'th'),
(357, 'th-list'),
(358, 'th-large'),
(359, 'chain-broken'),
(360, 'angle-double-down'),
(361, 'angle-double-left'),
(362, 'angle-double-right'),
(363, 'angle-double-up'),
(364, 'angle-down'),
(365, 'angle-left'),
(366, 'angle-right'),
(367, 'angle-up');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_kategori`
--

CREATE TABLE `ref_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_kategori`
--

INSERT INTO `ref_kategori` (`id_kategori`, `kategori`, `created_at`) VALUES
(1, 'Makanan Berat', '2021-10-28 13:09:49'),
(2, 'Makanan Ringan', '2021-10-28 13:09:59'),
(3, 'Minuman', '2021-10-28 13:10:08'),
(4, 'other', '2021-10-28 13:10:17'),
(5, 'test', '2021-10-30 01:35:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_module`
--

CREATE TABLE `ref_module` (
  `id_module` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL DEFAULT 0,
  `name_module` varchar(225) NOT NULL,
  `name_controller` varchar(225) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `sort` int(3) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_module`
--

INSERT INTO `ref_module` (`id_module`, `id_parent`, `name_module`, `name_controller`, `icon`, `sort`, `created_at`, `modified_at`) VALUES
(1, 0, 'Configuration Users', '#', 'cogs', 100, '2016-08-24 00:00:00', '2016-09-05 14:12:47'),
(2, 1, 'Group management', 'group', 'sitemap', 2, '2016-08-24 00:00:00', '2018-08-02 17:35:13'),
(3, 1, 'User management', 'user', 'users', 3, '2016-08-24 00:00:00', '2018-08-02 17:35:47'),
(112, 0, 'Laporan', 'laporan', 'file-code-o', 5, '2021-07-05 21:05:13', '2021-07-05 21:05:22'),
(111, 0, 'Transaksi', 'transaksi', 'cart-plus', 4, '2021-07-05 21:04:29', '2021-07-05 21:04:38'),
(110, 0, 'Stok Barang', 'stokBarang', 'archive', 3, '2021-07-05 21:02:44', '2021-07-05 21:06:46'),
(109, 104, 'Pembelian Barang', 'pembelianBarang', 'circle', 4, '2021-07-05 21:02:24', '0000-00-00 00:00:00'),
(108, 104, 'Supplier', 'supplier', 'circle', 2, '2021-07-05 21:01:54', '2021-07-05 21:03:50'),
(106, 104, 'Barang', 'barang', 'circle', 3, '2021-07-05 20:58:48', '2021-07-05 21:01:16'),
(105, 104, 'Kategori', 'kategori', 'circle', 1, '2021-07-05 20:58:17', '0000-00-00 00:00:00'),
(104, 0, 'Master Data', '#', 'gear', 1, '2021-07-05 20:57:36', '0000-00-00 00:00:00'),
(103, 0, 'Dashboard', 'dashboard', 'dashboard', 0, '2021-07-05 20:56:52', '2021-07-05 20:57:02'),
(113, 0, 'Dashboard', 'User/Dashboard', 'dashboard', 1, '2021-08-14 20:30:34', '2021-08-14 20:37:59'),
(114, 0, 'Transaksi', 'User/Transaksi', 'cart-plus', 2, '2021-08-14 20:31:20', '2021-08-14 20:31:30'),
(115, 0, 'Laporan', 'User/Laporan', 'file-powerpoint-o', 3, '2021-08-14 20:31:59', '2021-08-14 21:18:08'),
(116, 112, 'Laporan Transaksi', 'LaporanTransaksi', 'circle', 1, '2021-08-14 21:15:51', '0000-00-00 00:00:00'),
(117, 112, 'Laporan Pembelian Barang', 'LaporanPembelian', 'circle', 2, '2021-08-14 21:16:31', '0000-00-00 00:00:00'),
(118, 112, 'Laporan Stok', 'LaporanStok', 'circle', 3, '2021-08-14 21:16:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_pembelian_barang`
--

CREATE TABLE `ref_pembelian_barang` (
  `id_pembelian` int(11) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_supplier` varchar(50) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah_expired` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_supplier`
--

CREATE TABLE `ref_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `nomor_handphone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_supplier`
--

INSERT INTO `ref_supplier` (`id_supplier`, `nama_supplier`, `nomor_handphone`, `email`, `alamat`, `createdAt`) VALUES
(2, 'PT. Sinar Pahala Utama', '082325446800', 'sinarpahalautama@gmail.com', 'Jl. Lingkar Demak No.Km.5, Area Sawah, Mranak, Kec. Wonosalam, Kabupaten Demak, Jawa Tengah 59571', '2021-10-28 13:14:34'),
(3, 'Supplier Potong Ayam Kedung Halang', '081255567890', 'ayamkedunghalang@gmail.com', 'Jalan Kedung Halang-Talang No.60, Pasir Jambu, Bogor Utara, RT.01/RW.13, Pasir Jambu, Kec. Sukaraja, Kota Bogor, Jawa Barat 16158                    ', '2021-10-28 13:16:25'),
(4, 'Sosro Bogor', '(0251) 8220871', 'contactus@sosro.com', 'Jl. Sholeh Iskandar, RT.03/RW.08, Cibadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16164   ', '2021-10-28 13:20:29'),
(5, 'Mama Adit frozen food', '081355448520', 'mamaadit.frozenfood@gmail.com', 'Perum lido permai, Jl. Gn. Salak V No.25, Ciburuy, Cigombong, Bogor, Jawa Barat 16110', '2021-10-28 13:21:25'),
(6, 'BEEXPRESS', '0000000000', '0000@000.00', '00000000000                    ', '2021-10-28 14:29:13'),
(7, 'PT Test', '081383397234', 'test@gmail.com', 'Kebayoran Office Center Blok. B No. 6, Jalan Kebayoran Baru, Kb. Lama Utara, Kebayoran Baru, RT.8/RW.1, Kby. Lama Utara, Kec. Kby. Lama, Jakarta, Daerah Khusus Ibukota Jakarta 12120\r\nKantor', '2021-10-30 01:35:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_user`
--

CREATE TABLE `ref_user` (
  `id_user` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `name_user` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_user`
--

INSERT INTO `ref_user` (`id_user`, `id_group`, `name_user`, `username`, `password`, `created_at`, `modified_at`) VALUES
(1, 1, 'Administrator', 'admin', 'c3284d0f94606de1fd2af172aba15bf3', '2016-08-21 00:00:00', '0000-00-00 00:00:00'),
(13, 3, 'Muhamad Sopian Aryanto', 'kasir', '59b8f19e2e140a1f7829b116219b6497', '2021-08-14 20:34:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_user_access`
--

CREATE TABLE `ref_user_access` (
  `id_user_access` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_module` int(11) NOT NULL,
  `akses` int(1) NOT NULL DEFAULT 0,
  `tambah` int(1) NOT NULL DEFAULT 0,
  `lihat` int(1) NOT NULL DEFAULT 0,
  `edit` int(1) NOT NULL DEFAULT 0,
  `hapus` int(1) NOT NULL DEFAULT 0,
  `ex_excel` int(1) NOT NULL DEFAULT 0,
  `ex_pdf` int(1) NOT NULL DEFAULT 0,
  `id_parent` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_user_access`
--

INSERT INTO `ref_user_access` (`id_user_access`, `id_group`, `id_module`, `akses`, `tambah`, `lihat`, `edit`, `hapus`, `ex_excel`, `ex_pdf`, `id_parent`, `create_at`, `modified_at`) VALUES
(1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, '2016-08-24 00:00:00', '2021-12-04 22:07:29'),
(2, 1, 2, 1, 1, 1, 1, 1, 0, 0, 1, '2016-08-24 00:00:00', '2021-12-04 22:07:29'),
(3, 1, 3, 1, 1, 1, 1, 1, 0, 0, 1, '2016-08-24 00:00:00', '2021-12-04 22:07:29'),
(384, 1, 112, 1, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(383, 1, 111, 1, 1, 1, 1, 1, 1, 1, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(382, 1, 110, 1, 1, 1, 1, 1, 1, 1, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(381, 1, 109, 1, 1, 1, 1, 1, 1, 1, 104, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(380, 1, 108, 1, 1, 1, 1, 1, 1, 1, 104, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(378, 1, 106, 1, 1, 1, 1, 1, 1, 1, 104, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(377, 1, 105, 1, 1, 1, 1, 1, 1, 1, 104, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(376, 1, 104, 1, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(375, 1, 103, 1, 1, 1, 1, 1, 1, 1, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(385, 1, 113, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(386, 1, 114, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(387, 1, 115, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(388, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(389, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(390, 3, 3, 0, 0, 0, 0, 0, 0, 0, 1, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(391, 3, 112, 1, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(392, 3, 111, 1, 1, 1, 1, 1, 1, 1, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(393, 3, 110, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(394, 3, 109, 0, 0, 0, 0, 0, 0, 0, 104, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(395, 3, 108, 0, 0, 0, 0, 0, 0, 0, 104, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(396, 3, 106, 0, 0, 0, 0, 0, 0, 0, 104, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(397, 3, 105, 0, 0, 0, 0, 0, 0, 0, 104, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(398, 3, 104, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(399, 3, 103, 1, 1, 1, 1, 1, 1, 1, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(400, 3, 113, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(401, 3, 114, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(402, 3, 115, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(403, 1, 116, 1, 1, 1, 1, 1, 1, 1, 112, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(404, 3, 116, 1, 1, 1, 1, 1, 1, 1, 112, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(405, 1, 117, 1, 1, 1, 1, 1, 1, 1, 112, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(406, 3, 117, 0, 0, 0, 0, 0, 0, 0, 112, '0000-00-00 00:00:00', '2021-10-28 21:54:41'),
(407, 1, 118, 1, 1, 1, 1, 1, 1, 1, 112, '0000-00-00 00:00:00', '2021-12-04 22:07:29'),
(408, 3, 118, 0, 0, 0, 0, 0, 0, 0, 112, '0000-00-00 00:00:00', '2021-10-28 21:54:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_detail_transaksi`
--

CREATE TABLE `tr_detail_transaksi` (
  `detail_transaksi_id` int(11) NOT NULL,
  `noStruk` varchar(50) NOT NULL,
  `barangId` varchar(12) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_harga_beli` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `tr_detail_transaksi`
--
DELIMITER $$
CREATE TRIGGER `DeleteBarang` AFTER DELETE ON `tr_detail_transaksi` FOR EACH ROW BEGIN

   UPDATE ref_barang SET stok = stok + OLD.jumlah

   WHERE kode_barang = OLD.barangId;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateBarang` AFTER UPDATE ON `tr_detail_transaksi` FOR EACH ROW BEGIN

   UPDATE ref_barang SET stok = stok + OLD.jumlah -  NEW.jumlah

   WHERE kode_barang = NEW.barangId;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertBarang` AFTER INSERT ON `tr_detail_transaksi` FOR EACH ROW BEGIN

   UPDATE ref_barang SET stok = stok - NEW.jumlah

   WHERE kode_barang = NEW.barangId;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_transaksi`
--

CREATE TABLE `tr_transaksi` (
  `no_struk` varchar(100) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `status` varchar(14) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `totalBeli` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ref_barang`
--
ALTER TABLE `ref_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `ref_group`
--
ALTER TABLE `ref_group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indeks untuk tabel `ref_kategori`
--
ALTER TABLE `ref_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `ref_module`
--
ALTER TABLE `ref_module`
  ADD PRIMARY KEY (`id_module`),
  ADD UNIQUE KEY `id_module` (`id_module`);

--
-- Indeks untuk tabel `ref_pembelian_barang`
--
ALTER TABLE `ref_pembelian_barang`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `ref_supplier`
--
ALTER TABLE `ref_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `ref_user`
--
ALTER TABLE `ref_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `ref_user_access`
--
ALTER TABLE `ref_user_access`
  ADD PRIMARY KEY (`id_user_access`);

--
-- Indeks untuk tabel `tr_detail_transaksi`
--
ALTER TABLE `tr_detail_transaksi`
  ADD PRIMARY KEY (`detail_transaksi_id`);

--
-- Indeks untuk tabel `tr_transaksi`
--
ALTER TABLE `tr_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ref_barang`
--
ALTER TABLE `ref_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ref_group`
--
ALTER TABLE `ref_group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ref_kategori`
--
ALTER TABLE `ref_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ref_module`
--
ALTER TABLE `ref_module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `ref_pembelian_barang`
--
ALTER TABLE `ref_pembelian_barang`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ref_supplier`
--
ALTER TABLE `ref_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ref_user`
--
ALTER TABLE `ref_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `ref_user_access`
--
ALTER TABLE `ref_user_access`
  MODIFY `id_user_access` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT untuk tabel `tr_detail_transaksi`
--
ALTER TABLE `tr_detail_transaksi`
  MODIFY `detail_transaksi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tr_transaksi`
--
ALTER TABLE `tr_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
