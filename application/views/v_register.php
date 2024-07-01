<div class="row">
	<div class="col-sm-4 mx-auto mt-5">
		<div class="register-box">
			<div class="register-logo">
			</div>
			<div class="card shadow">
				<div class="card-body register-card-body">
					<p class="login-box-msg">Register pelangan </p>

					<label class="text-center">Nama Pelanggan</label>
					<div class="input-group mb-3">
						<input type="text" id="namaForm" class="form-control" placeholder="Nama Pelanggan">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>

					<label class="text-align-center">Email</label>
					<div class="input-group mb-3">
						<input type="email" id="emailForm" class="form-control" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>

					<label class="text-center">Password</label>
					<div class="input-group mb-3">
						<input type="password" id="passwordForm" class="form-control" placeholder="Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-8">

						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block"
								id="btnSubmitRegister">Register</button>
						</div>
						<!-- /.col -->
					</div>

					<a href="<?=base_url('pelanggan/login') ?>" class="text-center">Sudah Punya Akun ?</a>
				</div>
				<!-- /.form-box -->
			</div><!-- /.card -->
		</div>
	</div>
</div><br>

<script>
	$(document).on("click", "#btnSubmitRegister", function () {
		let namaForm = $("#namaForm").val();
		let emailForm = $("#emailForm").val();
		let passwordForm = $("#passwordForm").val();

		if (namaForm == '') {
			Swal.fire("Form Validation", "Nama Harus diisi!", "error");
			return;
		}

		if (emailForm == '') {
			Swal.fire("Form Validation", "Email Harus diisi!", "error");
			return;
		}

		if (passwordForm == '') {
			Swal.fire("Form Validation", "Password Harus diisi!", "error");
			return;
		}

		var url = "<?= site_url('pelanggan/register_backend'); ?>";

		$.post(url, {
			nama_pelanggan: namaForm,
			email: emailForm,
			password: passwordForm
		}).done(function (data) {
			Swal.fire("Berhasil", "Berhasil membuat akun!", "success")
			$("input").val('');
		});

	});
</script>