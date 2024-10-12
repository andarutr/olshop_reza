<section id="menu" class="menu section">
	<div class="container section-title" data-aos="fade-up">
        <p>Kategori : <?= $kategori ?></p>
	</div>
	<form action="<?= base_url('home/search'); ?>" method="post" id="form-pencarian">
		<div class="row justify-content-end mb-3">
			<div class="col-md-2">
				<input type="text" class="form-control" id="search_input" name="search_input">
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-success">Cari</button>
			</div>
		</div>
	</form>
	<div class="container">
		<div class="tab-content" data-aos="fade-up" data-aos-delay="200">
			<div class="tab-pane fade active show" id="menu-starters">
				<div class="row gy-5">
				<?php foreach ($barang as $key => $value){?>
					<div class="col-lg-4 menu-item">
						<div class="card">
							<div class="card-body">
								<a href="<?=base_url('assets/gambar/'.$value->gambar) ?>" class="glightbox"><img
										src="<?=base_url('assets/gambar/'.$value->gambar) ?>" class="menu-img img-fluid" alt=""></a>
								<h4><?=$value->nama_barang ?></h4>
								<p class="ingredients">
									<b>Kategori: </b> <?=$value->nama_kategori ?>
								</p>
								<p class="price">
								Rp. <?= number_format($value->harga ,0)?>
								</p>
								<a href="<?=base_url('home/detail_barang/' .$value->id_barang) ?>" class="btn btn-sm btn-success">
									<i class="fas fa-cart-plus"><i class="bi bi-eye-fill"></i> Lihat</i>
								</a>
								<button type="submit" class="btn btn-sm btn-primary btnAddToCart" data-id="<?= $value->id_barang ?>"
									data-qty="1" data-price="<?= $value->harga ?>" data-name="<?= $value->nama_barang ?>">
									<i class="fas fa-cart-plus"><i class="bi bi-cart-fill"></i> Add To Cart</i>
								</button>
							</div>
						</div>
					</div><!-- Menu Item -->
				<?php }   ?>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).on("click", ".btnAddToCart", function () {
		let id = $(this).data("id");
		let qty = $(this).data("qty");
		let price = $(this).data("price");
		let name = $(this).data("name");
		let url = "<?= site_url('belanja/add') ?>";
		let redirect_page = "<?= site_url('home') ?>"
		$.post(url, {
			id,
			qty,
			price,
			name,
			redirect_page
		}).done(function (data) {
			Swal.fire("success", "Berhasil menambahkan barang ke keranjang!", "success");
			setTimeout(() => {
				Swal.close();
				window.location.reload();
			}, 2000);
		});
	});
</script>