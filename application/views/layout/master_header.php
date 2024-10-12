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
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url()?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>template/dist/css/adminlte.min.css">

	<!-- jQuery -->
<!-- jQuery -->
<script src="<?= base_url()?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url()?>template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>template/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url()?>template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url()?>template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url()?>template/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	
</head>
<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="<?= base_url('home') ?>" class=		"logo d-flex align-items-center me-auto me-xl-0">
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
				  <li><button type="button" class="btn btn-link " data-toggle="modal" data-target="#kategori">Cara Order</button>
				</li>
					<?php
			$keranjang = $this->cart->contents();
			$jml_item = 0;
			foreach ($keranjang as $key => $value)	 {
				$jml_item = $jml_item + $value['qty'];
			}
            ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="dropdown">
            <a href="#"><i class="bi bi-cart-fill toggle-dropdown"></i> Keranjang(<?= $jml_item ?>)</a>
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
                    <img src="<?= base_url() ?>/assets/foto/profil.png" class="brand-image img-circle elevation-3 toggle-dropdown" style="opacity: .8" width="25"> <?= $this->session->userdata('nama_pelanggan')  ?>
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
<!-- /.modal -->
<div id="kategori" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<h4> Baca cara order</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<!-- body modal -->
				<div class="modal-body"><div class="modal-body">
				<h6> 1. Lakukan login terlebih dahulu,jika belum punya akun maka pilih belum punya akun untuk melakukan register</h6>
				<h6> 2. Pilih Produk seperti pada slide pertama klik add cart maka produk masuk ke keranjang belanja seperti pada gambar slide pertama</h6	 >
				<h6> 3. Pilih viewchat pada bagian keranjang untuk melihat dan mengubah daftar belanjaan</h6>
				<h6> 4. pilih checkout  lalu isi form checkout untuk melakukan pemesanan dan isi form checkout seperti pada gambar no 3 </h6>
				<h6> 5. Setelah checkout maka pesanan masuk ke bagian menu checkout seperti pada gambar isi form check	out dan lakukan prose checkout maka pesanan masuk ke bagian pesanan saya </h6>
				</div>
				<div class="modal-body">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=base_url('assets/slider/view keranjang.jpeg') ?>"  height="250px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url('assets/slider/view cart.jpeg') ?>"  height="300px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url('assets/slider/slide checkout-3.jpg') ?>"  height="300px" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url('assets/slider/pesanan saya.jpg') ?>"  height="300px" alt="four slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				
				<!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-primary" href="<?=base_url('Home') ?>">back</a>
                </div>
							</div>

			</div>
		</div>
	</div>
</div>

<!-- /.modal -->
<div id="komen" class="modal fade" role="dialog">
		<div class="modal-dialog modal-mg">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<h4> Baca cara order</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<div class="modal-body">
					<?php
					echo form_open('pelanggan/add');
					?>
					
					<div class="form-group">
                    <label for="exampleInputEmail1">Komentar</label>
						</div>
                
					<div class="form-group">
										<textarea name="komentar" cols="45" rows="8" placeholder="INPUT KOMENTAR"></textarea> 
            </div>
                <div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
				<!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-primary" href="<?=base_url('Home') ?>">back</a>
                </div>
							</div>
							<?php
						echo form_close();
							?>
			</div>
		</div>
	</div>
</div>

		</div>
	</div>
  <main class="main">
