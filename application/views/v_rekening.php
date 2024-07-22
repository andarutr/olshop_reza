
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data user</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus">Tambah rekening</i></button>
				</div>
                <!-- /.card-tools -->
              </div>
			  </div>
			  <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>
				<table id="example1" class="table table-bordered table-striped">
					<thead class="text-center">
						<tr>	
							<th>No</th>
							<th>Nama Bank</th>
							<th>No_rek</th>
							<th>Atas nama</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $no = 1;
						foreach ($rekening as $key =>$value) {?>

						<tr>
							<td><?= $no++?></td>
							<td><?= $value->nama_bank  ?></td>
							<td><?= $value->no_rek  ?></td>
							<td><?= $value->atas_nama  ?></td>
							<td>
							<button class="btn btn-warning btn-xm" data-toggle="modal" 
							data-target="#edit<?= $value->id_rekening ?>"><i class="fa fa-edit"></i></button>
							<button class="btn btn-danger btn-xm" data-toggle="modal" 
							data-target="#delete<?= $value->id_rekening ?>"><i class="fa fa-trash"></i></button>
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
	  <div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah data User</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<?php	
					echo form_open('rekening/add');
					?>
					<div class="form-group">
                    <label for="exampleInputEmail1">Nama bank</label>
                    <input type="text" name="nama_bank" class="form-control" placeholder="Nama bank" required>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">no Rek</label>
                    <input type="text" name="no_rek" class="form-control" placeholder="no rek" required>
                  </div>
                  <div class="form-group">
					<label for="">atas nama</label>
                    <input type="text" name="atas_nama" class="form-control"  placeholder="atas_nama">
                  </div>
                  <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a class="btn btn-primary" href="<?=base_url('user')  ?>">Cancel</a>
                </div>
				<?php
				echo form_close()
				?>
				</div>

			</div>
		</div>
	</div>
	
		<!-- konten edit modal-->
		<?php foreach ($rekening as $key =>$value) {?>

	<div class="modal fade" role="dialog" id="edit<?= $value->id_rekening?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah rekening</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<?php
					echo form_open('rekening/edit/'.$value->id_rekening);
					?>
					<div class="form-group">
                    <label for="exampleInputEmail1">Nama bank</label>
                    <input type="text" name="nama_bank" value="<?= $value->nama_bank ?>" class="form-control" placeholder="Nama bank" required>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">no rekening</label>
                    <input type="text" name="no_rek" value="<?= $value->no_rek ?>" class="form-control" placeholder="no rekening" required>
                  </div>
                  <div class="form-group">
                    <label>Atas nama</label>
                    <input type="text" name="atas_nama"  value="<?= $value->atas_nama ?>" class="form-control"  placeholder="Atas nama">
                  </div>
                  <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a class="btn btn-primary" href="<?=base_url('user')  ?>">Cancel</a>
                </div>
				<?php
				echo form_close()
				?>
				</div>

			</div>
		</div>
	</div>
<?php }?>

<!-- Mpdal delete -->
<?php foreach ($rekening as $key =>$value) {?>
<div class="modal fade" role="dialog" id="delete<?= $value->id_rekening?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
				<h4 class="modal-title">Delete <?=$value->nama_bank?> ? </h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				<h5>Apakah anda yakin ingin mnghapus data ini</h5>
				</div>
				<div class="card-footer">
                  <a class="btn btn-primary" href="<?=base_url('rekening/delete/' .$value->id_rekening)  ?>">delete</a>
                  <a class="btn btn-primary" href="<?=base_url('rekening')  ?>">Cancel</a>
                </div>
			</div>
		</div>
	</div>
<?php }?>

<script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.alert').alert('close');
            }, 2000); // Waktu dalam milidetik (3000 = 3 detik)
        });
    </script>
