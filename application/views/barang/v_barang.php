
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data user</h3>
                <div class="card-tools">
                  	<a href="<?= base_url('barang/add')  ?>" class="btn btn-info btn-lg"><i class="fas fa-plus">Add</i></a>
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
							<th>Nama Barang</th>
							<th>Kategori</th>
							<th>Harga</th>
							<th>gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $no = 1;
						foreach ($barang as $key =>$value) {?>

						<tr>
							<td><?= $no++?></td>
							<td><?= $value->nama_barang  ?><br>	
							Berat : <?=$value->berat ?> Gram
							</td>
							<td><?= $value->nama_kategori ?></td>
							<td>Rp. <?=number_format($value->harga, 0)   ?></td>
							<td> <img src="<?=base_url('assets/gambar/'.$value->gambar)  ?>" width="120px"> </td>
							<td>
							<a href="<?= base_url('barang/edit/' .$value->id_barang) ?>" class="btn btn-warning btn-xm"><i class="fa fa-edit"></i></a>
							<button class="btn btn-danger btn-xm" data-toggle="modal" 
							data-target="#delete<?= $value->id_barang ?>"><i class="fa fa-trash"></i></button>
							
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

		  <?php foreach ($barang as $key =>$value) {?>
<div class="modal fade" role="dialog" id="delete<?= $value->id_barang?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
				<h4 class="modal-title">Delete <?=$value->nama_barang?> ? </h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				<h5>Apakah anda yakin ingin mnghapus data ini</h5>
				</div>
				<div class="card-footer">
                  <a class="btn btn-primary" href="<?=base_url('barang/delete/' .$value->id_barang)  ?>">delete</a>
                  <a class="btn btn-primary" href="<?=base_url('barang')  ?>">Cancel</a>
                </div>
			</div>
		</div>
	</div>
<?php }?>


