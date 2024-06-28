<!-- Main content -->
<div class="invoice p-3 mb-3">
	<!-- title row -->
	<div class="row">
		<div class="col-12">
			<h4>
				<i class="fas fa-shopping-cart"></i> Checkout.
				<small class="float-right">Date: <?=date('d-m-Y') ?></small>
			</h4>
		</div>
		<!-- /.col -->
	</div>
	<!-- info row -->

	<!-- /.row -->

	<!-- Table row -->
	<div class="row">
		<div class="col-12 table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="text-center">Barang</th>
						<th width="150px" class="text-center">harga</th>
						<th class="text-center">Qty</th>
						<th class="text-center">Totral Harga</th>
						<th class="text-center">Berat</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php
$tot_berat = 0;
 foreach ($this->cart->contents() as $items){ 
	$barang = $this->m_home->detail_barang($items['id']);
	$berat = $items['qty'] * $barang->berat;
	$tot_berat = $tot_berat + $berat; 

	?>
					<tr class="text-center">
						<td class="text-center"> <?php echo $items['name']; ?></td>
						<td class="text-center">Rp. <?php echo number_format($items['price'], 0); ?></td>
						<td class="text-center"> <?php echo $items['qty'];?> </td>
						<td class="text-center">Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
						<td class="text-center"> <?=$berat ?> gram</td>

					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
	<div class="row">
		<!-- accepted payments column -->
		<div class="col-sm-8 invoice-col">
			Tujuan
			<div class="col-sm-8">
				<div class="form-group">
					<select class="form-control" id="tujuanPengantaran">
            <option value="">Pilih Tujuan</option>  
						<option value="Jakarta Timur">Jakarta Timur</option>
						<option value="Jakarta Barat">Jakarta Barat</option>
						<option value="Jakarta Selatan">Jakarta Selatan</option>
						<option value="Jakarta Utara">Jakarta Utara</option>
						<option value="Jakarta Pusat">Jakarta Pusat</option>
					</select>
				</div>
			</div>
			Alamat
			<div class="col-sm-8">
				<div class="form-group">
					<div class="mb-3">
						<textarea class="form-control" id="alamat" rows="3"></textarea>
					</div>
				</div>
			</div>Ekspedisi
			<div class="col-sm-8">
				<div class="form-group">
					<select class="form-control" id="pilihEkspedisi">
            <option value="">Pilih Ekspedisi</option>
						<option value="Pengiriman Internal" id="pengirimanInternal">Pengiriman Internal</option>
						<option value="Gojek">gojek</option>
					</select>
				</div>
			</div>Nama Penerima
			<div class="col-sm-8">
				<div class="form-group">
					<input class="form-control" id="namaPenerima">
				</div>
			</div>
			No Hp
			<div class="col-sm-8">
				<div class="form-group">
					<input class="form-control" id="hpPenerima">
				</div>
			</div>
		</div>

		<!-- /.col -->
		<div class="col-4">

			<div class="table-responsive">
				<table class="table">
					<tr>
						<th style="width:50%">Subtotal:</th>
						<td><?php echo number_format($this->cart->total(), 0); ?></td>
						<input id="subTotal" value="<?= $this->cart->total() ?>" type="hidden">
					</tr>
					<tr>
						<th>Berat</th>
						<td><?= $tot_berat  ?> Gram</td>
					</tr>
					<tr>
						<th>Ongkir</th>
						<th id="ongkir"></th>
						<input id="totalOngkir" type="hidden">
					</tr>
					<tr>
						<th>Total Bayar</th>
						<td id="totalBayar"></td>
						<input id="total_bayar" type="hidden">
					</tr>
				</table>
			</div>
		</div>
		<!-- /.col -->
	</div>
	<?php 
		$no_order = date('Ymd').strtoupper(random_string('alnum',8));
	?>
	<input id="noOder" type="hidden" value="<?= $no_order ?>">

	<input id="berat" type="hidden" value="<?= $tot_berat ?>"><br>
	<input id="grandTotal" type="hidden" value="<?= $this->cart->total() ?>">
	<!-- Simpan Rinci Transaksi -->
	<?php
	$i = 1;
	foreach ($this->cart->contents() as $items) {
		echo form_hidden('qty' . $i++, $items['qty']);
		echo form_hidden('name', $items['name']);
	}

	?>
	<!-- end Simpan Rinci Transaksi -->


	<!-- /.row -->

	<!-- this row will not appear when printing -->
	<div class="row no-print">
		<div class="col-12">
			<a href="<?= base_url('belanja') ?>" rel="noopener" target="_blank" class="btn btn-danger"><i class="fas fa-backward"></i>
				Kembali Ke keranjang</a>
			<button type="submit" class="btn btn-success float-right" id="btnSubmitCheckout"><i class="far fa-credit-card"></i> Proses
				Chekout</button>
		</div>
	</div>
</div>

<script>
  function statusPengirimanInternal(){
  	let subTotal = parseFloat($("#subTotal").val());

    if (subTotal < 100000) {
      $("#pengirimanInternal").hide();
    }
  }
  
  statusPengirimanInternal();

  $(document).on("change", "#tujuanPengantaran", function(){
  	let subTotal = parseFloat($("#subTotal").val());

    let tujuanPengantaran = $("#tujuanPengantaran").val();
    if(tujuanPengantaran == 'Jakarta Timur' || tujuanPengantaran == 'Jakarta Barat'){
      let totalBayar = subTotal + 20000;

      $("#ongkir").text("Rp. 20.000");
      $("#totalBayar").text("Rp. "+totalBayar)
      $("#totalOngkir").attr("value", 20000)
      $("#total_bayar").attr("value", totalBayar)
    }else if(tujuanPengantaran == 'Jakarta Utara' || tujuanPengantaran == 'Jakarta Selatan'){
      let totalBayar = subTotal + 22000;

      $("#ongkir").text("Rp 22.000");
      $("#totalBayar").text("Rp. "+totalBayar)
      $("#totalOngkir").attr("value", 22000)
      $("#total_bayar").attr("value", totalBayar)
    }else if(tujuanPengantaran == 'Jakarta Pusat'){
      let totalBayar = subTotal + 10000;

      $("#ongkir").text("Rp 10.000");
      $("#totalBayar").text("Rp. "+totalBayar)
      $("#totalOngkir").attr("value", 10000)
      $("#total_bayar").attr("value", totalBayar)
    }else{
      $("#ongkir").text("0");
      $("#totalOngkir").attr("value", 0)
      $("#total_bayar").attr("value", subTotal)
    }
  });

  $(document).on("change", "#pilihEkspedisi", function(){
    let pilihEkspedisi = $(this).val();
    let subTotal = parseFloat($("#subTotal").val());
    
    if(pilihEkspedisi == 'Pengiriman Internal'){
      $("#ongkir").text("Rp. 0")
      $("#totalBayar").text("Rp. "+subTotal)
      $("#totalOngkir").attr("value", 0)
      $("#total_bayar").attr("value", subTotal)
    }
  });

  $(document).on("click", "#btnSubmitCheckout", function(){
  	let tujuanPengantaran = $("#tujuanPengantaran").val();
  	let alamat = $("#alamat").val();
  	let pilihEkspedisi = $("#pilihEkspedisi").val();
  	let namaPenerima = $("#namaPenerima").val();
  	let hpPenerima = $("#hpPenerima").val();
  	let noOrder = $("#noOrder").val();
  	let berat = $("#berat").val();
  	let grandTotal = $("#grandTotal").val();
  	let totalOngkir = $("#totalOngkir").val();
  	let total_bayar = $("#total_bayar").val();
  	let qtyArray = [];
    $('[name^="qty"]').each(function() {
        qtyArray.push($(this).val());
    });


  	if(tujuanPengantaran == ''){
  		Swal.fire("error", "Tujuan pengantaran Harus diisi!", "error") 
  		return;
		}

		if(alamat == ''){
  		Swal.fire("error", "Alamat Harus diisi!", "error") 
  		return;
		}

		if(pilihEkspedisi == ''){
  		Swal.fire("error", "Ekspedisi Harus diisi!", "error") 
  		return;
		}

		if(namaPenerima == ''){
  		Swal.fire("error", "Nama Harus diisi!", "error") 
  		return;
		}

		if(hpPenerima == ''){
  		Swal.fire("error", "Nomor handphone Harus diisi!", "error") 
  		return;
		}

		let url = "<?= site_url('belanja/checkout_backend') ?>"
		$.post(url, {
			no_order: new Date().toISOString().slice(0, 10).replace(/-/g, '') + Math.random().toString(36).substr(2, 8).toUpperCase(),
			nama_penerima: namaPenerima,
			hp_penerima: hpPenerima,
			kota: pilihEkspedisi,
			alamat: alamat,
			expedisi: pilihEkspedisi,
			ongkir: totalOngkir,
			berat: berat,
			grand_total: grandTotal,
			total_bayar: total_bayar,
			qty: qtyArray
		}).done(function(){
			Swal.fire("success","Berhasil melakukan checkout!", "success");

			setTimeout(() => {
				window.location.href = "<?= site_url('home') ?>"
			}, 2000);
		})
  });
</script>