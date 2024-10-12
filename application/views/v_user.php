
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
							<th>Nama User</th>
							<th>Username</th>
							<th>Password</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $no = 1;
						foreach ($user as $key =>$value) {?>

						<tr>
							<td><?= $no++?></td>
							<td><?= $value->nama_user  ?></td>
							<td><?= $value->username  ?></td>
							<td><?= $value->password  ?></td>
							<td><?php 
							if ($value->level_user  == 1) {	
								echo '<span class="badge bg-primary">Admin</span>';
							}else{
								echo '<span class="badge bg-success" >User</span>';
							}
							?></td>
							<td>
							<button class="btn btn-warning btn-xm" data-toggle="modal" 
							data-target="#edit<?= $value->id_user ?>"><i class="fa fa-edit"></i></button>
							<button class="btn btn-danger btn-xm" data-toggle="modal" 
							data-target="#delete<?= $value->id_user ?>"><i class="fa fa-trash"></i></button>
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
					echo form_open('user/add');
					?>
					<div class="form-group">
                    <label for="exampleInputEmail1">Nama user</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Nama user" required>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">username</label>
                    <input type="text" name="username" class="form-control" placeholder="username" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Password">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Level User</label>
					<select name="level_user" class="form-control" id="">
						<option value="1" selected>Admin</option>
						<option value="2">User</option>
					</select>
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
		<?php foreach ($user as $key =>$value) {?>

	<div class="modal fade" role="dialog" id="edit<?= $value->id_user?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit data User</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<?php
					echo form_open('user/edit/'.$value->id_user);
					?>
					<div class="form-group">
                    <label for="exampleInputEmail1">Nama user</label>
                    <input type="text" name="nama_user" value="<?= $value->nama_user ?>" class="form-control" placeholder="Nama user" required>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">username</label>
                    <input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="username" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password"  value="<?= $value->password ?>" class="form-control"  placeholder="Password">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Level User</label>
					<select name="level_user" class="form-control" id="">
						<option value="1" <?php if($value->level_user ==1) 
										{echo 'selected';} ?>>Admin</option>
						<option value="2"<?php if($value->level_user ==2) 
										{echo 'selected';} ?>>User</option>
					</select>
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
<?php foreach ($user as $key =>$value) {?>
<div class="modal fade" role="dialog" id="delete<?= $value->id_user?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
				<h4 class="modal-title">Delete <?=$value->nama_user?> ? </h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				<h5>Apakah anda yakin ingin mnghapus data ini</h5>
				</div>
				<div class="card-footer">
                  <a class="btn btn-primary" href="<?=base_url('user/delete/' .$value->id_user)  ?>">delete</a>
                  <a class="btn btn-primary" href="<?=base_url('user')  ?>">Cancel</a>
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

