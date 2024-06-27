<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form method="post" action="<?=base_url()?>user/simpan">
                <div class="card-body">
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
              </form>
            </div>
</div>            <!-- /.card -->
