<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://wallpapercave.com/wp/wp3537553.jpg" width="300px" height="400px">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-custom-icon" aria-hidden="true">
			<i class="fas fa-chevron-left"></i>
		</span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-custom-icon" aria-hidden="true">
			<i class="fas fa-chevron-right"></i>
		</span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="card card-solid">
	<div class="card-body pb-0">
		<form action="<?= base_url('home/search'); ?>" method="post" id="form-pencarian">
			<div class="row justify-content-end mb-3">
				<div class="col-md-2">
					<input type="text" class="form-control" id="search_input" name="search_input">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-success">Cari Barang</button>
				</div>
			</div>
		</form>
		<div class="row">
			<?php foreach ($barang as $key =>$value){?>
			<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">

				<?php
			// echo form_open('belanja/add');
			// echo form_hidden('id',$value->id_barang);
			// echo form_hidden('qty',1);
			// echo form_hidden('price',$value->harga);
			// echo form_hidden('name',$value->nama_barang);
			// echo form_hidden('redirect_page',str_replace('index.php/', '',current_url()));
			?>
				<div class="card bg-light d-flex flex-fill">
					<div class="card-header text-muted border-bottom-0">
						<h2 class="lead"><b><?=$value->nama_barang ?></b></h2>
						<p class="text-muted text-sm"><b>Kategori: </b> <?=$value->nama_kategori ?> </p>
					</div>
					<div class="card-body pt-0">
						<div class="row">
							<div class="col-12 text-center">
								<img src="<?=base_url('assets/gambar/'.$value->gambar) ?>" alt="" width="150px" height="200px">
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-sm-6">
								<div class="text-left">
									<h4>
										<span class="badge bg-primary">Rp. <?= number_format($value->harga ,0)?></span>
									</h4>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="text-right">
									<a href="<?=base_url('home/detail_barang/' .$value->id_barang) ?>" class="btn btn-sm btn-success">
										<i class="fas fa-eye"></i>
									</a>
									<button type="submit" class="btn btn-sm btn-primary btnAddToCart" data-id="<?= $value->id_barang ?>"
										data-qty="1" data-price="<?= $value->harga ?>" data-name="<?= $value->nama_barang ?>">
										<i class="fas fa-cart-plus">Add</i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
                // echo form_close()
              ?>
			</div>

			<?php }   ?>
		</div>
	</div>
</div>
<!-- SweetAlert2 -->
<script src="<?=base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
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