-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2024 pada 02.58
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
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(25) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `atas_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '4286-01-011-0998', 'Aceng Saepudin'),
(2, 'bca', '009009887', 'Aceng Saepudin');

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
(47, 14, 4, 8, 'pepata', '20240712OJBVR53A'),
(48, 15, 4, 2, 'anggur', '20240712DEZEN2P0'),
(49, 14, 4, 2, 'pepata', '20240712DEZEN2P0'),
(50, 15, 4, 1, 'anggur', '20240713Y2X0A6Y1'),
(51, 14, 4, 1, 'pepata', '20240715WQ1LJXJ1'),
(52, 11, 4, 1, 'semangka', '20240715WQ1LJXJ1');

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
(154, 4, '20240713Y2X0A6Y1', '2024-07-13', '00877', '00988', 'Gojek', 'kax;lk', 'Gojek', 20000, 500, 40000, 60000, 1, 'lele.jpg', 'andi cora', 'ma', '009u', 3, '0098'),
(155, 4, '20240715WQ1LJXJ1', '2024-07-15', 'abdul', '00908', 'Gojek', 'jakarta tuimur', 'Gojek', 20000, 2000, 50000, 70000, 1, 'logo_A1.png', 'budiansyah', '1212', '0988', 3, '09899898');

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
(8, 'Daging Ayam', '8', 45000, 'AYAM KARKAS / AYAM BROILER UTUH / WHOLE CHICKEN PER EKOR 1 kg\r\n1 ekor ayam karkas broiler utuh dengan berat sesuai varian yang dipilih\r\n\r\n- Ayam segar\r\n- Tidak bisa request potong, karena kami menjual UTUH.\r\n- Kualitas & Standar Restoran dan Supermarket.\r\n- Dijamin Bersih & Higienis\r\n- 100% Daging Ayam\r\n- 100% Halal (Tersertifikasi Halal MUI)\r\n- Cocok untuk masakan resep-resep ayam, seperti fried chicken, ayam panggang/bakar, dan banyak resep ayam lainnya.\r\n- Mudah diolah karena sudah bersih tanpa bulu dan lainnya.\r\n\r\nDalam melakukan pemesanan sayuran dan buah buahan lebih baik melakukan checkout dan pemabayarn di siang hari 13.00 - 09.00 agar pesanan\r\ndapat dikirim pagi hari agar barang lebih fresh \r\n\r\nFree ongkir min belanjan 150 Rb melalui pengiriman internal\r\n', 'bebek1.jpg', 1),
(11, '1 buah semangka', '9', 60000, 'Buah semangka 1 butir ukuran 5kg\r\nsize random bisa 4.9/5/5.1/5.2 kg', 'semangka1.jpg', 50000),
(12, 'daging sapi', '8', 65000, 'daging sapi berkualitas', 'daging.jpg', 15000),
(14, 'Pepaya ', '9', 9900, 'Pepaya manis\r\n\r\n- Tidak bisa request potong, karena kami menjual UTUH.\r\n- Kualitas & Standar Restoran dan Supermarket.\r\n- Dijamin Bersih & Higienis\r\n- 100% Halal (Tersertifikasi Halal MUI)', 'pepaya.jpg', 600),
(17, 'Apel merah fuji 1 dus isi 100', '9', 465000, '		Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\nbr\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\nbr\r\nmanfaat\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n\r\nCatatan penjual:\r\n*Barang yang dikomplain akan dilakukan retur barang atau Penge', 'apel_merah_fuji.jpg', 17000),
(18, 'Apel merah fuji 1 dus isi 80', '9', 465000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n\r\nCatatan penjual:\r\n*Barang yang dikomplain akan dilakukan retur barang atau Penge', 'apel_merah_fuji1.jpg', 17000),
(19, 'Pir Putih  1 dus 17 kg isi 100', '9', 440000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\nmanfaat pir putih\r\nKaya akan serat, buah pir membantu meningkatkan fungsi pencernaan, mencegah sembelit, dan menjaga kesehatan usus. Selain itu, mengandung antioksidan seperti vitamin C dan flavonoid, buah pir juga dapat membantu menurunkan risiko penyakit jantung dengan mengurangi peradangan dan meningkatkan kesehatan jantung.', 'pir_putih-removebg-preview.png', 17000),
(20, 'Pisang Ambon Sisiran isi 13/14/15', '9', 31000, '	Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\nUntuk isi kami akan mengisi random\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n\r\nCatatan penjual:\r\n*Barang yang dikomplain akan dilakukan retur barang atau Penge', 'ambon-removebg-preview.png', 1400),
(21, 'Pisang Sunpride 1 dus isi 70', '9', 152000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\nManfaat\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n', 'sunpred-removebg-preview.png', 13000),
(22, 'Pisang Sunpride 1 dus isi 100', '9', 152000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh', 'snp-removebg-preview.png', 13000),
(23, 'Melon 1 kg', '9', 28000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\nBerat Bisa 1kg-1-2kg', 'melon.jpg', 1000),
(24, 'Jeruk Sunkiest 1 box ', '9', 485000, '	Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n', 'ss-removebg-preview.png', 15000);

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
(8, 11, 'buah', 'pepaya.jpg'),
(10, 17, 'Buah Apel', 'apel_merah_fuji.jpg'),
(11, 17, 'apel fuji', 'apel_fuji.jpg'),
(12, 24, 'sunkist', 'jss-removebg-preview.png');

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
(5, 'Groseri'),
(8, 'daging'),
(9, 'Buah buahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`) VALUES
(1, 'Reza', 'admin@gmail.com', '1234'),
(2, 'Reza', 'admin@gmail.c', 'reza'),
(3, 'adi', 'adi@gmail.com', '12345'),
(4, 'budi', 'budi@gmail.com', '$2y$10$63vnbwXSvHymDuR5V1.zPuNzmOJFu9OsCg2XvPsOt3.OW1eCj7UCS'),
(5, 'andi', 'andi@gmail.com', '$2y$10$PZhnLV4avnRw1EPsaQeJ4u/jK/s/UWQepseThQHHnR1FE1Pi6gQhC');

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
  ADD PRIMARY KEY (`id_rekening`);

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
-- AUTO_INCREMENT untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_rinci_transaksi`
--
ALTER TABLE `tbl_rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
