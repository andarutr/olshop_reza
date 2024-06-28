-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2024 pada 04.27
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rekeining` int(11) NOT NULL,
  `nama_bank` varchar(25) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `atas_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekeining`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '4286-01-011-0998', 'Aceng Saepudin'),
(2, 'BCA', '93242019', 'CV BMS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rinci_transaksi`
--

CREATE TABLE `tbl_rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `no_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rinci_transaksi`
--

INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
(22, 12, 2, 1, 'daging sapi', '20240627BC1TANDV'),
(23, 12, 2, 1, 'daging sapi', '20240627CEYANRJC'),
(24, 12, 3, 1, 'daging sapi', '20240627CPG8RYDA'),
(25, 15, 3, 1, 'anggur', '20240627G68JK5IO'),
(26, 14, 3, 3, 'pepata', '20240628MNIO52PK'),
(27, 12, 4, 1, 'daging sapi', '202406283KYE6CG5'),
(28, 15, 4, 1, 'anggur', '202406283KYE6CG5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_order` varchar(25) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(25) DEFAULT NULL,
  `hp_penerima` varchar(20) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `expedisi` varchar(255) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(1) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `status_order` int(1) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `hp_penerima`, `kota`, `alamat`, `expedisi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_hp`) VALUES
(77, 4, '20240628RVP1IRI1', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(76, 4, '20240628PCQVHQNM', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(75, 4, '20240628IVWVDPME', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(74, 4, '20240628PF54S97J', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(73, 4, '20240628LTNT3C3W', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(72, 4, '20240628C59X0XY2', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(71, 4, '20240628L258VV5P', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(70, 4, '20240628ZQ8VFBEL', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(69, 4, '202406280FUUMG82', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(68, 3, '20240628MNIO52PK', '2024-06-28', 'tre', '0987', 'jakbar', 'hvi', 'Gojek', NULL, 1500, 105000, NULL, 0, 'semangka110.jpg', '08y', 'io', ';kn', 1, NULL),
(67, 3, '20240627G68JK5IO', '2024-06-27', 'tre', '0987', '2', 'tty', 'Gojek', NULL, 500, 40000, NULL, 0, 'semangka19.jpg', 'andi cora', 'nn', 'ww', 1, NULL),
(65, 2, '20240627CEYANRJC', '2024-06-27', 'ace', '8866', 'jakbar', 'warung buncit', 'Gojek', NULL, 15000, 65000, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL),
(66, 3, '20240627CPG8RYDA', '2024-06-27', '77876', '0987', 'jakbar', 'jalan margahayu', 'Gojek', NULL, 15000, 65000, NULL, 0, 'semangka18.jpg', 'w', 'ww', 'ww', 1, NULL),
(64, 2, '20240627BC1TANDV', '2024-06-27', 'andi saputra', '0987665', 'jakbar', 'jalan otista v no 78', 'Gojek', NULL, 15000, 65000, NULL, 0, 'semangka17.jpg', 'andi saputra', 'bri', '09899897', 1, NULL),
(78, 4, '20240628AH27068I', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(79, 4, '20240628Z0C65VJB', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(80, 4, '20240628C69N7G37', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(81, 4, '20240628G0O1I8AA', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(82, 4, '20240628VHLN0EDL', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(83, 4, '20240628X8L5XS5E', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(84, 4, '202406288S5PQYOR', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(85, 4, '20240628IAWYF1NI', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(86, 4, '20240628L0W7ENHX', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(87, 4, '20240628VHS3MVYJ', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(88, 4, '20240628KX6MQ382', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(89, 4, '20240628C5IOYGM6', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(90, 4, '20240628SBDDUQTY', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(91, 4, '20240628KYHIGN52', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(92, 4, '20240628UGNLX005', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(93, 4, '20240628NWKUPM7I', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(94, 4, '20240628FZ3I8J49', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(95, 4, '20240628FXY2VWQ2', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(96, 4, '202406281YQY0WXE', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(97, 4, '20240628K93LQBMO', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(98, 4, '202406288OCAOM70', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(99, 4, '202406287SM0WDE6', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(100, 4, '20240628RP0LJ110', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(101, 4, '20240628WY0YO394', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(102, 4, '20240628AUN4OVMP', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(103, 4, '2024062883RF77T6', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(104, 4, '20240628YD7JYR9P', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(105, 4, '20240628DUIS1GIL', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(106, 4, '20240628R369I9G0', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(107, 4, '20240628183VT1Q4', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(108, 4, '2024062874NTKCWH', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(109, 4, '20240628IA1D7WOX', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(110, 4, '2024062809R5ZXN4', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(111, 4, '20240628PRNJF5R9', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(112, 4, '20240628FLLFO2WZ', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(113, 4, '202406287U50LI67', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(114, 4, '20240628TY19I6Q8', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(115, 4, '20240628PLOAI685', '2024-06-28', 'budi', '0987', 'Pengiriman Internal', 'Jalan Gatot Subroto', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(116, 4, '20240628QSX3QTZ9', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(117, 4, '20240628Y08F6CIZ', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(118, 4, '202406280TQRC24W', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(119, 4, '20240628I3T5NRXC', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(120, 4, '202406288S69PGE7', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(121, 4, '202406287N4C9B1L', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(122, 4, '20240628SKS3CLGP', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(123, 4, '20240628K5MD5EYT', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(124, 4, '202406284WGI0IP2', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'jln mekar sari', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(125, 4, '20240628N5XKE199', '2024-06-28', 'budi', '009887', 'Pengiriman Internal', 'tqnjung duren', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(126, 4, '202406281VWV21BR', '2024-06-28', 'budi utomo', '098778778', 'Pengiriman Internal', 'jalan tanjung barat 5', 'Pengiriman Internal', 0, 3500, 283500, 283500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(127, 4, '20240628UJ6RCFOP', '2024-06-28', 'andri', '085778778778', 'Gojek', 'Jalan Tanjung duren 56', 'Gojek', 20000, 3500, 283500, 303500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(128, 4, '20240628UG3OBVVU', '2024-06-28', 'andri', '085778778778', 'Gojek', 'Jalan Tanjung duren 56', 'Gojek', 20000, 3500, 283500, 303500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(129, 4, '20240628MLOMPLP0', '2024-06-28', 'andri', '085778778778', 'Gojek', 'Jalan Tanjung duren 56', 'Gojek', 20000, 3500, 283500, 303500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(130, 4, '20240628APAGQK9W', '2024-06-28', 'budu otomo', '09877878', 'Pengiriman Internal', 'jalan medan merdek', 'Pengiriman Internal', 0, 3500, 290500, 290500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(131, 4, '20240628DPV05PNW', '2024-06-28', 'budu otomo', '09877878', 'Pengiriman Internal', 'jalan medan merdek', 'Pengiriman Internal', 0, 3500, 290500, 290500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(132, 4, '20240628TMRH32O8', '2024-06-28', 'budu otomo', '09877878', 'Gojek', 'sunter', 'Gojek', 22000, 3500, 290500, 312500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(133, 4, '20240628R7IK1EBZ', '2024-06-28', 'budu otomo', '09877878', 'Gojek', 'sunter', 'Gojek', 22000, 3500, 290500, 312500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(134, 4, '20240628NFQRGR68', '2024-06-28', 'budu otomo', '09877878', 'Gojek', 'sunter', 'Gojek', 22000, 3500, 290500, 312500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(135, 4, '20240628XJAG8KJV', '2024-06-28', 'budu otomo', '09877878', 'Gojek', 'sunter', 'Gojek', 22000, 3500, 290500, 312500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(136, 4, '20240628HN3TLEMW', '2024-06-28', 'budu otomo', '09877878', 'Gojek', 'sunter', 'Gojek', 22000, 3500, 290500, 312500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(137, 4, '20240628X93546FQ', '2024-06-28', 'budu otomo', '09877878', 'Gojek', 'sunter', 'Gojek', 22000, 3500, 290500, 312500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(138, 4, '202406285XE39LD2', '2024-06-28', 'budu otomo', '09877878', 'Gojek', 'sunter', 'Gojek', 22000, 3500, 290500, 312500, 0, NULL, NULL, NULL, NULL, 0, NULL),
(139, 4, '20240628PP1KYU8B', '2024-06-28', 'RAZ', '123923', 'Pengiriman Internal', 'abc', 'Pengiriman Internal', 0, 15500, 105000, 105000, 0, NULL, NULL, NULL, NULL, 0, NULL),
(140, 4, '2024062858NP3GBB', '2024-06-28', 'RAZ', '123923', 'Pengiriman Internal', 'abc', 'Pengiriman Internal', 0, 15500, 105000, 105000, 0, NULL, NULL, NULL, NULL, 0, NULL),
(141, 4, '202406283KYE6CG5', '2024-06-28', 'asdf', '123', 'Pengiriman Internal', 'asd', 'Pengiriman Internal', 0, 15500, 105000, 105000, 0, NULL, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_kategori` varchar(25) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
(1, 'Bayam', '1', 2500, 'Deskripsi bla ', 'bayam.jpg', 0),
(2, 'Cabai', '1', 3500, 'Deskripsi cabai', 'cabai.jpg', 0),
(8, 'Bebek', '8', 9880, '	qwerfdgk', 'bebek1.jpg', 0),
(10, 'buah nangka', '2', 23000, '	apa aja', 'kelompok7.jpg', 0),
(11, 'semangka', '9', 15000, '		q4rwjm;mDtc', 'semangka1.jpg', 1500),
(12, 'daging sapi', '8', 65000, 'daging sapi berkualitas', 'daging.jpg', 15000),
(14, 'pepata', '9', 35000, 'pepaya', 'pepaya.jpg', 500),
(15, 'anggur', '9', 40000, 'weu;v', 'daging1.jpg', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gambar`
--

INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
(1, 1, 'Gambar 1', 'bayam2.jpg'),
(2, 1, 'Gambar 3', 'bayam3.jpg'),
(3, 1, 'Gambar 4', 'bayam4.jpg'),
(4, 2, 'gambar cabai', 'cabai2.jpg\r\n'),
(5, 2, 'Cabai 3', 'cabai3.jpg'),
(6, 10, 'Buah nangka', 'nangka.jpg'),
(8, 11, 'buah', 'pepaya.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sayuran'),
(2, 'Buah'),
(5, 'Bumbu Dapur'),
(8, 'daging'),
(9, 'Buah buahan'),
(10, 'minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`, `foto`) VALUES
(1, 'Reza', 'admin@gmail.com', '1234', 'foto.jpg\r\n\r\n'),
(2, 'Reza', 'admin@gmail.c', 'reza', 'foto.jpg'),
(3, 'adi', 'adi@gmail.com', '12345', 'foto.jpg\r\n'),
(4, 'budi', 'budi@gmail.com', '$2y$10$63vnbwXSvHymDuR5V1.zPuNzmOJFu9OsCg2XvPsOt3.OW1eCj7UCS', 'foto.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', 'admin', 'admin', 1),
(11, 'reza', 'reza1234', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekeining`);

--
-- Indeks untuk tabel `tbl_rinci_transaksi`
--
ALTER TABLE `tbl_rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`) USING BTREE;

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_rinci_transaksi`
--
ALTER TABLE `tbl_rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
