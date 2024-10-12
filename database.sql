-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_olshop.tbl_rekening
CREATE TABLE IF NOT EXISTS `tbl_rekening` (
  `id_rekening` int NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(25) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `atas_nama` varchar(25) NOT NULL,
  PRIMARY KEY (`id_rekening`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_olshop.tbl_rekening: ~2 rows (approximately)
INSERT INTO `tbl_rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
	(1, 'BRI', '4286-01-011-0998', 'Aceng Saepudin');
INSERT INTO `tbl_rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
	(2, 'bca', '009009887', 'Aceng Saepudin');

-- Dumping structure for table db_olshop.tbl_rinci_transaksi
CREATE TABLE IF NOT EXISTS `tbl_rinci_transaksi` (
  `id_rinci` int NOT NULL AUTO_INCREMENT,
  `id_barang` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `qty` int NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `no_order` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rinci`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_olshop.tbl_rinci_transaksi: ~6 rows (approximately)
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(47, 14, 4, 8, 'pepata', '20240712OJBVR53A');
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(48, 15, 4, 2, 'anggur', '20240712DEZEN2P0');
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(49, 14, 4, 2, 'pepata', '20240712DEZEN2P0');
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(50, 15, 4, 1, 'anggur', '20240713Y2X0A6Y1');
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(51, 14, 4, 1, 'pepata', '20240715WQ1LJXJ1');
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(52, 11, 4, 1, 'semangka', '20240715WQ1LJXJ1');
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(53, 14, 6, 1, 'Pepaya ', '20240722EZDT2UDI');
INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `id_barang`, `id_pelanggan`, `qty`, `nama_barang`, `no_order`) VALUES
	(54, 8, 6, 2, 'Daging Ayam', '20240722EZDT2UDI');

-- Dumping structure for table db_olshop.tbl_transaksi
CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int DEFAULT NULL,
  `no_order` varchar(25) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(25) DEFAULT NULL,
  `hp_penerima` varchar(20) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `alamat` text,
  `expedisi` varchar(255) DEFAULT NULL,
  `ongkir` int DEFAULT NULL,
  `berat` int DEFAULT NULL,
  `grand_total` int DEFAULT NULL,
  `total_bayar` int DEFAULT NULL,
  `status_bayar` int DEFAULT NULL,
  `bukti_bayar` text,
  `atas_nama` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `status_order` int DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_olshop.tbl_transaksi: 2 rows
/*!40000 ALTER TABLE `tbl_transaksi` DISABLE KEYS */;
INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `hp_penerima`, `kota`, `alamat`, `expedisi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_hp`) VALUES
	(154, 4, '20240713Y2X0A6Y1', '2024-07-13', '00877', '00988', 'Gojek', 'kax;lk', 'Gojek', 20000, 500, 40000, 60000, 1, 'lele.jpg', 'andi cora', 'ma', '009u', 3, '0098');
INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `hp_penerima`, `kota`, `alamat`, `expedisi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_hp`) VALUES
	(155, 4, '20240715WQ1LJXJ1', '2024-07-15', 'abdul', '00908', 'Gojek', 'jakarta tuimur', 'Gojek', 20000, 2000, 50000, 70000, 1, 'logo_A1.png', 'budiansyah', '1212', '0988', 3, '09899898');
INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `hp_penerima`, `kota`, `alamat`, `expedisi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_hp`) VALUES
	(156, 6, '20240722EZDT2UDI', '2024-07-22', 'asd', '082928', 'Gojek', '123', 'Gojek', 20000, 602, 99900, 119900, 0, NULL, NULL, NULL, NULL, 0, NULL);
/*!40000 ALTER TABLE `tbl_transaksi` ENABLE KEYS */;

-- Dumping structure for table db_olshop.tb_barang
CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id_barang` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_kategori` varchar(25) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `deskripsi` mediumtext,
  `gambar` text,
  `berat` int NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_olshop.tb_barang: ~14 rows (approximately)
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(1, 'Bayam', '1', 2500, 'Deskripsi bla ', 'bayam.jpg', 0);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(2, 'Cabai', '1', 3500, 'Deskripsi cabai', 'cabai.jpg', 0);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(8, 'Daging Ayam', '8', 45000, 'AYAM KARKAS / AYAM BROILER UTUH / WHOLE CHICKEN PER EKOR 1 kg\r\n1 ekor ayam karkas broiler utuh dengan berat sesuai varian yang dipilih\r\n\r\n- Ayam segar\r\n- Tidak bisa request potong, karena kami menjual UTUH.\r\n- Kualitas & Standar Restoran dan Supermarket.\r\n- Dijamin Bersih & Higienis\r\n- 100% Daging Ayam\r\n- 100% Halal (Tersertifikasi Halal MUI)\r\n- Cocok untuk masakan resep-resep ayam, seperti fried chicken, ayam panggang/bakar, dan banyak resep ayam lainnya.\r\n- Mudah diolah karena sudah bersih tanpa bulu dan lainnya.\r\n\r\nDalam melakukan pemesanan sayuran dan buah buahan lebih baik melakukan checkout dan pemabayarn di siang hari 13.00 - 09.00 agar pesanan\r\ndapat dikirim pagi hari agar barang lebih fresh \r\n\r\nFree ongkir min belanjan 150 Rb melalui pengiriman internal\r\n', 'bebek1.jpg', 1);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(11, '1 buah semangka', '9', 60000, 'Buah semangka 1 butir ukuran 5kg\r\nsize random bisa 4.9/5/5.1/5.2 kg', 'semangka1.jpg', 50000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(12, 'daging sapi', '8', 65000, 'daging sapi berkualitas', 'daging.jpg', 15000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(14, 'Pepaya ', '9', 9900, 'Pepaya manis\r\n\r\n- Tidak bisa request potong, karena kami menjual UTUH.\r\n- Kualitas & Standar Restoran dan Supermarket.\r\n- Dijamin Bersih & Higienis\r\n- 100% Halal (Tersertifikasi Halal MUI)', 'pepaya.jpg', 600);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(17, 'Apel merah fuji 1 dus isi 100', '9', 465000, '		Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\nbr\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\nbr\r\nmanfaat\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n\r\nCatatan penjual:\r\n*Barang yang dikomplain akan dilakukan retur barang atau Penge', 'apel_merah_fuji.jpg', 17000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(18, 'Apel merah fuji 1 dus isi 80', '9', 465000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n\r\nCatatan penjual:\r\n*Barang yang dikomplain akan dilakukan retur barang atau Penge', 'apel_merah_fuji1.jpg', 17000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(19, 'Pir Putih  1 dus 17 kg isi 100', '9', 440000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\nmanfaat pir putih\r\nKaya akan serat, buah pir membantu meningkatkan fungsi pencernaan, mencegah sembelit, dan menjaga kesehatan usus. Selain itu, mengandung antioksidan seperti vitamin C dan flavonoid, buah pir juga dapat membantu menurunkan risiko penyakit jantung dengan mengurangi peradangan dan meningkatkan kesehatan jantung.', 'pir_putih-removebg-preview.png', 17000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(20, 'Pisang Ambon Sisiran isi 13/14/15', '9', 31000, '	Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\nUntuk isi kami akan mengisi random\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n\r\nCatatan penjual:\r\n*Barang yang dikomplain akan dilakukan retur barang atau Penge', 'ambon-removebg-preview.png', 1400);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(21, 'Pisang Sunpride 1 dus isi 70', '9', 152000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\nManfaat\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\n', 'sunpred-removebg-preview.png', 13000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(22, 'Pisang Sunpride 1 dus isi 100', '9', 152000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh', 'snp-removebg-preview.png', 13000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(23, 'Melon 1 kg', '9', 28000, 'Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n    mencegah penyakit jantung\r\n    meningkatkan system kekebalan tubuh\r\n    menurunkan kolesterol jahat dalam tubuh\r\nBerat Bisa 1kg-1-2kg', 'melon.jpg', 1000);
INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
	(24, 'Jeruk Sunkiest 1 box ', '9', 485000, '	Selamat datang di CV.Bintang Makmur Sejahtera\r\nKami adalah pusat belanja online yang menyajikan pilihan sayur, ikan, dan daging segar dari jakarta\r\n\r\nInfo pengiriman produk:\r\n- Untuk belanjaan diatas 100rb maka akan mendapatkan gratis ongkir dengan mengunakan jasa pengiriman internal\r\n- Area belanjaan dibawah 100rb maka akan dikenakan ongkir dan bisa memakai Ojek Online dengan ongkos yang sudah ditentukan\r\n\r\nNote pemesanan di toko kami:\r\n1.diutamakan Barang dikirimkan H+1 pagi hari setelah checkout/pembayaran agar barang baru dalam keadaan fresh\r\n2.Pengiriman setiap hari mulai jam 6 pagi\r\n\r\n\r\n', 'ss-removebg-preview.png', 15000);

-- Dumping structure for table db_olshop.tb_gambar
CREATE TABLE IF NOT EXISTS `tb_gambar` (
  `id_gambar` int NOT NULL AUTO_INCREMENT,
  `id_barang` int NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_olshop.tb_gambar: ~0 rows (approximately)
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(1, 1, 'Gambar 1', 'bayam2.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(2, 1, 'Gambar 3', 'bayam3.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(3, 1, 'Gambar 4', 'bayam4.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(4, 2, 'gambar cabai', 'cabai2.jpg\r\n');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(5, 2, 'Cabai 3', 'cabai3.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(6, 10, 'Buah nangka', 'nangka.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(8, 11, 'buah', 'pepaya.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(10, 17, 'Buah Apel', 'apel_merah_fuji.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(11, 17, 'apel fuji', 'apel_fuji.jpg');
INSERT INTO `tb_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
	(12, 24, 'sunkist', 'jss-removebg-preview.png');

-- Dumping structure for table db_olshop.tb_kategori
CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_olshop.tb_kategori: ~0 rows (approximately)
INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
	(1, 'Sayuran');
INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
	(5, 'Groseri');
INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
	(8, 'daging');
INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
	(9, 'Buah buahan');

-- Dumping structure for table db_olshop.tb_pelanggan
CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id_pelanggan` int NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_olshop.tb_pelanggan: ~1 rows (approximately)
INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`, `foto`) VALUES
	(1, 'Reza', 'admin@gmail.com', '$2a$12$Pk.DLHcloif8PiSLDjOii.XXCoURRbrXBa5Y69/4K0oA.QSF0EjvO', 'foto.jpg');

-- Dumping structure for table db_olshop.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level_user` int NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_olshop.tb_user: ~2 rows (approximately)
INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
	(1, 'Admin', 'admin', '$2a$12$Pk.DLHcloif8PiSLDj', 1);
INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
	(11, 'reza', 'reza', '$2a$12$Pk.DLHcloif8PiSLDj', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
