
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#kategori"><i class="fas fa-plus">Kategori</i></button>
				</div>
                <!-- /.card-tools -->
              </div>

			   <?php
if ($this->session->set_flashdata('pesan')) {
	echo '<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5><i class="icon fas fa-check"></i> Alert!</h5>';
	$this->session->set_flashdata('pesan');
	echo '</div>';
}

?> 
				<table id="example1" class="table table-bordered table-striped">
					<thead class="text-center">
						<tr>	
							<th>No</th>
							<th>Nama kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $no = 1;
						foreach ($kategori as $key =>$value) {?>
						<tr>
							<td><?= $no++?></td>
							<td><?= $value->nama_kategori  ?></td>
							<td>
							<button class="btn btn-warning btn-xm" data-toggle="modal" 
							data-target="#edit<?= $value->id_kategori ?>"><i class="fa fa-edit"></i></button>
							<button class="btn btn-danger btn-xm" data-toggle="modal" 
							data-target="#delete<?= $value->id_kategori ?>"><i class="fa fa-trash"></i></button>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

 <!-- /.modal -->
 <div id="kategori" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
				<h4 class="modal-title">Tambah data kategori</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<!-- body modal -->
				<div class="modal-body">
					

					<div class="form-group">
                    <label for="exampleInputEmail1">Nama kategori</label>
                    <input type="text" id="namaKategori" class="form-control" placeholder="Nama kategori" required>
                  </div>
				<!-- /.card-body -->

                <div class="card-footer">
		<button type="submit" class="btn btn-success float-right" id="btnSubmitCheckout"><i class="far fa-credit-card"></i> submit</button>
			
                  <a class="btn btn-primary" href="<?=base_url('kategori')  ?>">Cancel</a>
                </div>
				
				<div>

			</div>
		</div>
	</div>
		</div>
 </div>
 
<script>
	$(document).on("click", "#btnSubmitCheckout", function(){
  	let namaKategori = $("#namaKategori").val();
	let url = "<?= site_url('keranjang/add') ?>"
		$.post(url, {
			namaKategori: namaKategori
		}).done(function(){
			Swal.fire("success","Berhasil melakukan checkout!", "success");

			setTimeout(() => {
				window.location.href = "<?= site_url('home') ?>"
			}, 2000);
		});
	});
</script>

	<!--Edit Kategori -->
<?php foreach ($kategori as $key =>$value) {?>

	<div class="modal fade" role="dialog" id="edit<?= $value->id_kategori?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit data Kategori</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<?php
					echo form_open('kategori/edit/'.$value->id_kategori);
					?>
					<div class="form-group">
                    <label>Nama user</label>
                    <input type="text" name="nama_kategori" value="<?= $value->nama_kategori ?>" class="form-control" placeholder="Nama Kategori" required>
                  </div>
                  <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a class="btn btn-primary" href="<?=base_url('kategori')  ?>">Cancel</a>
                </div>
				<?php
				echo form_close()
				?>
				</div>

			</div>
		</div>
	</div>
<?php }?>

<!-- delte model -->
<?php foreach ($kategori as $key =>$value) {?>
<div class="modal fade" role="dialog" id="delete<?= $value->id_kategori?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
				<h4 class="modal-title">Delete <?=$value->nama_kategori?> ? </h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				<h5>Apakah anda yakin ingin mnghapus data ini</h5>
				</div>
				<div class="card-footer">
                  <a class="btn btn-primary" href="<?=base_url('kategori/delete/' .$value->id_kategori)  ?>">delete</a>
                  <a class="btn btn-primary" href="<?=base_url('kategori')  ?>">Cancel</a>
                </div>
			</div>
		</div>
	</div>
<?php }?>
