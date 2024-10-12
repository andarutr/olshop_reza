
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data user</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus">User</i></button>
				</div>
                <!-- /.card-tools -->
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
							<th>Nama Pelanggan</th>
							
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $no = 1;
						foreach ($pelanggan as $key =>$value) {?>

						<tr>
							<td><?= $no++?></td>
							<td><?= $value->nama_pelanggan  ?></td>
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
	 
