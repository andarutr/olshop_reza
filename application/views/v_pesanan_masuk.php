<div class="col-sm-12">
	<?php

	if ($this->session->flashdata('pesan')) {
		echo '<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-check"></i>';
		echo $this->session->flashdata('pesan');
		echo '</h5>
	</div>';
	}
	?>
	<div class="card card-primary card-outline card-outline-tabs">
		<div class="card-header p-0 border-bottom-0">
			<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Pesanan Masuk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Diproses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Dikirim</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Selesai</a>
				</li>
			</ul>
		</div>
		<div class="card-body">
			<div class="tab-content" id="custom-tabs-four-tabContent">
				<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
					<table class="table">
						<tr>
							<th>No Order</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Tanggal</th>
							<th>Expedisi</th>
							<th>Total Bayar</th>
							<th></th>
						</tr>
					
						<?php foreach ($pesanan as $key => $value) { ?>
								<tr>
									<td><?= $value->no_order ?></td>
									<td><?= $value->nama_penerima ?></td>
									<td><?= $value->alamat ?></td>
									<td><?= $value->tgl_order ?></td>
									<td>
										<b><?= $value->expedisi ?></b><br>
										Ongkir : <?= number_format($value->ongkir, 0) ?>
									</td>
									<td>
										<b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>
										<?php if ($value->status_bayar == 0) { ?>
											<span class="badge badge-warning">Belum Bayar</span>
										<?php } else { ?>
											<span class="badge badge-success">Sudah Bayar</span><br>
											<span class="badge badge-primary">Menunggu Verifikasi</span>
										<?php } ?>
									</td>
									<td>
										<?php if ($value->status_bayar == 1) { ?>
											<button class="btn btn-sm  btn-success" data-toggle="modal" data-target="#cek<?= $value->id_transaksi ?>">Cek Pembayaran</button>
											<a href="<?= base_url('admin/proses/'. $value->id_transaksi) ?>" class="btn btn-sm btn-flat btn-primary">proses pesanan</a>
										<?php } ?>
										,</td>
								</tr>
							<?php } ?>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php foreach ($pesanan as $key => $value) { ?>

<!-- modal cek bukti pembayaran -->
<div class="modal fade" id="cek<?= $value->id_transaksi ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?= $value->no_order ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<table class="table">
					<tr>
						<th>Nama Bank</th>
						<th>:</th>
						<td><?= $value->nama_bank ?></td>
					</tr>
					<tr>
						<th>No Rek</th>
						<th>:</th>
						<td><?= $value->no_rek ?></td>
					</tr>
					<tr>
						<th>Atas Nama</th>
						<th>:</th>
						<td><?= $value->atas_nama ?></td>
					</tr>
					<tr>
						<th>Total Bayar</th>
						<th>:</th>
						<td>Rp. <?= number_format($value->total_bayar, 0) ?></td>
					</tr>
				</table>

				<img class="img-fluid pad" src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar) ?>" alt="">

			</div>

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>

