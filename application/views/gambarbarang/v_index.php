
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Gambar Produk</h3>
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
							<th>Cover</th>
							<th>Jumlah Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $no = 1;
						foreach($gambarbarang as $key =>$value)  {?>
						<tr>
							<td><?= $no++;  ?></td>
							<td><?=$value->nama_barang ?></td>
							<td class="text-center"> <img src="<?=base_url('assets/gambar/'.$value->gambar);  ?>" width="100px"> </td>
							<td class="text-center"> <span class="btn btn-primary"><?=$value->total_gambar  ?></span></td>
							<td>
							<a href="<?=base_url('gambarbarang/add/' .$value->id_barang)  ?>" class="btn btn-success"><i class="fas fa-plus-xs">Add Gambar</i></a>

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

