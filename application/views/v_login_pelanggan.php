<div class="row">
	<div class="col-sm-4 mx-auto mt-5">
		<div class="register-box">
			<div class="register-logo">
			</div>
			<div class="card shadow">
				<div class="card-body register-card-body">
					<p class="login-box-msg">Login pelangan </p>
					<?= form_open('pelanggan/login') ?>
					<label class="text-align-center">Email</label>
					<div class="input-group mb-3">
						<input type="email" name="email" class="form-control" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<?= form_error('email','<p class="text-danger">','</p>'); ?>
					<label class="text-center">Password</label>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('password','<p class="text-danger">','</p>'); ?>
					<br>
					<br>
					<div class="row">
						<div class="col-8">
							<p style="margin-top: -50px;">Gratis Ongkir ?</p>
							<p class="text-primary" id="showNotif" style="margin-top: -20px; cursor: pointer;">Baca ketentuannya...
							</p>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</div>
						<!-- /.col -->
					</div>
					<?php echo form_close() ?>



					<a href="<?= base_url('pelanggan/register') ?>" class="text-center">Belum Punya Akun ?</a>
				</div>
				<!-- /.form-box -->
			</div><!-- /.card -->
		</div>
	</div>
</div>

<script>
$(document).on("click", "#showNotif", function(){
  Swal.fire({
    title: "Notifikasi",
    html: `
      <h5>Halo Pelanggan :)</h5>
      <p>Dengan senang hati kami ingin memberitahu anda bahwa bila anda berbelanja diatas <b>Rp100.000,-</b> maka anda akan mendapatkan <b>GRATIS ONGKIR</b>. </p>
      
      <p>Cara nya anda hanya pilih pengiriman melalui kurir perusahaan kami. Terimakasih...</p>
      
    `
  })
});
</script>