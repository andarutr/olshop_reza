<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

			  <form method="post" action="<?=base_url()?>user/update">
                <div class="card-body">
				<?php 
						foreach ($user as $key =>$value) {?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama user</label>
                    <input type="text" name="nama_user" value="<?=$value->nama_user?>" class="form-control">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">username</label>
                    <input type="text" name="username" value="<?=$value->username?> "class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text	" name="password" value="<?=$value->password?>"class="form-control" >
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
				<?php } ?>
                </div>
              </form>
            </div>
</div>            <!-- /.card -->
