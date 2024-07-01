<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title ?> - Toko CV. BMS</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  <link href="<?= base_url() ?>assets/toko_online/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/toko_online/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/toko_online/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/toko_online/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/toko_online/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/toko_online/css/main.css" rel="stylesheet">
</head>
<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="<?= base_url('home') ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Toko CV.BMS</h1>
        <span>.</span>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('home') ?>" class="active">Home<br></a></li>
          <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <?php $kategori =  $this->m_home->get_all_data_kategori(); ?>
              <?php foreach ($kategori as $key => $value) { ?>
                <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>"> <?= $value->nama_kategori ?></a></li>
              <?php } ?>
            </ul>
          </li>
          <?php
			$keranjang = $this->cart->contents();
			$jml_item = 0;
			foreach ($keranjang as $key => $value) {
				$jml_item = $jml_item + $value['qty'];
			}
            ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="dropdown">
            <a href=""><i class="bi bi-cart-fill"></i> Keranjang(<?= $jml_item ?>)</a>
            <ul>
            <?php if (empty($keranjang)) { ?>
                <a href="#" class="dropdown-item">
                    <p>Keranjang Belanja Kosong</p>
                </a>
                <?php } else {
                foreach ($keranjang as $key => $value) {
                    $barang = $this->m_home->detail_barang($value['id']);
                ?>
                    <!-- barang start -->
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <!-- <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="User Avatar" class="img-size-50 mr-3" width="50"> -->
                            <div class="media-body">
                                <p class="dropdown-item-title">
                                    <?= $value['name'] ?> (Rp.<?= $this->cart->format_number($value['subtotal']); ?>)<br>
                                    <?= $value['qty'] ?> x Rp.<?= number_format($value['price'], 0) ?><br>
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                <?php } ?>
                <!-- barang End -->
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <div class="media-body">
                            <p>
                                Total : Rp.<?= $this->cart->format_number($this->cart->total()); ?>
                            </p>
                        </div>
                    </div>
                </a>
                <center>
                    <a href="<?= base_url('belanja') ?>" >View Cart</a>
                    <a href="<?= base_url('belanja/checkout') ?>" >Check Out</a>
                </center>

            <?php } ?>
            </ul>
          </li>
          <li class="dropdown">
          <?php if ($this->session->userdata('email') == "") { ?>
            <a class="btn-getstarted" href="<?= base_url('pelanggan/login') ?>">login / Register</a>
            <?php } else { ?>
                <a href="">
                    <img src="<?= base_url() ?>/assets/foto/profil.png" class="brand-image img-circle elevation-3" style="opacity: .8" width="25"> <?= $this->session->userdata('nama_pelanggan')  ?>
                </a>

                <ul>
                    <a href="<?= base_url('pesanan_saya') ?>" class="dropdown-item">
                        Pesanan Saya
                    </a>
                    <a href="<?= base_url('pelanggan/logout') ?>">
                        Logout
                    </a>
                </ul>
            <?php } ?>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">