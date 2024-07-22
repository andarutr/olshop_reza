<!-- Default box -->
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="<?=base_url('assets/gambar/' .$barang->gambar) ?>" class="product-image" alt="Product Image" width="540">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="<?=base_url('assets/gambar/' .$barang->gambar) ?>" alt="Product Image" width="300px" height="100"></div>
                <?php foreach ($gambar as $key => $value) {?>
                  <div class="product-image-thumb mt-3" ><img src="<?=base_url('assets/gambarbarang/' .$value->gambar) ?>" alt="Product Image" width="300px" height="100"></div>
                <?php } ?>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?=$barang ->nama_barang ?></h3>
			  <hr>
			  <h4><?=$barang->nama_kategori ?></h4>
			  <hr>
             <p>
				<?=$barang->deskripsi ?>
			 </p>
              <hr>

              <div class="bg-secondary py-2 px-3 mt-4">
                <h2 class="mb-0" style="font-weight: bold;">
                  Rp. <?= number_format($barang->harga ,0)  ?>
                </h2>
              </div>
<hr>
<?php
// echo form_open('belanja/add');
// echo form_hidden('id',$barang->id_barang);
// echo form_hidden('price',$barang->harga);
// echo form_hidden('name',$barang->nama_barang);
// echo form_hidden('redirect_page',str_replace('index.php/', '',current_url()));

?>
              <div class="mt-4"> 
                <div class="row">
									<div class="col-sm-2">
									<input type="number" name="qty" class="form-control" value="1" min="1" id="qtyForm">
									</div>
									<div class="col-sm-8">
									<button type="submit" class="btn btn-primary btn-flat" id="btnAddToCart" data-id="<?= $barang->id_barang ?>" data-price="<?= $barang->harga ?>" data-name="<?= $barang->nama_barang ?>">
                  <i class="bi bi-cart-fill mr-2"></i>
                  Add to Cart
								</button>
									</div>
								</div>
              </div>
<?php 
// echo form_close();
?>
	 <!--
              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div> -->

            </div>
          </div>
		</div>
        </div>
        <!-- /.card-body -->
      
      <!-- /.card -->


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- AdminLTE App -->
<script src="template/dist/js/adminlte.min.js"></script> 
<!-- AdminLTE for demo purposes -->
<script src="template/dist/js/demo.js"></script>

<script src="<?=base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>


<script src="<?=base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>


<script>
  $(document).on("click", "#btnAddToCart", function(){
    let id = $(this).data("id");
    let qty = $("#qtyForm").val();
    let price = $(this).data("price");
    let name = $(this).data("name");
    let url = "<?= site_url('belanja/add'); ?>";
    let redirect_page = "<?= site_url('home'); ?>";

    $.post(url, {
      id,
      qty,
      price,
      name,
      redirect_page
    }).done(function(){
      Swal.fire("success","Berhasil memasukan ke keranjang", "success");
      setTimeout(() => {
        window.location.reload();
      }, 1500);
    });
  });
</script>
