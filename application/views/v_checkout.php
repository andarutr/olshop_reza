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
                <td class="text-center">Rp.  <?php echo number_format($items['price'], 0); ?></td>
								<td class="text-center"> <?php echo $items['qty'];?> </td>
                <td class="text-center">Rp.  <?php echo number_format($items['subtotal'], 0); ?></td>
                <td class="text-center" > <?=$berat ?> gram</td>
				
                    </tr>
										<?php }?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
	<?php 
	echo form_open('belanja/checkout');
	$no_order = date('Ymd').strtoupper(random_string('alnum',8));
	
	?>
              <div class="row">
                <!-- accepted payments column -->
							<div class="col-sm-8 invoice-col">
                  Tujuan
                  <div class="col-sm-8">
                    <div class="form-group">
                    <select name="kota" class="form-control">
						<option value="Jaktim">Jakarta Timur</option>
						<option value="jakbar">Jakarta Barat</option>
						<option value="2">Jakarta Selatan</option>
						<option value="2">Jakarta Utara</option>
						<option value="2">Jakarta Pusat</option>
									</select> 
								</div>
            			</div>
									Alamat
									<div class="col-sm-8">
                    <div class="form-group"><div class="mb-3">
  <textarea class="form-control" name ="alamat "rows="3"></textarea>
</div>
										</div>
									</div>Ekspedisi
									<div class="col-sm-8">
                    <div class="form-group">
                    <select name="expedisi" class="form-control">
						<option value="Pengiriman Internal">Pengiriman Internal</option>
						<option value="Gojek">gojek</option>
									</select> 
								</div>
            			</div>Nama Penerima
									<div class="col-sm-8">
                    <div class="form-group">
										<input name="nama_penerima" class="form-control" > 
								</div>
            			</div>
									No Hp
									<div class="col-sm-8">
                    <div class="form-group">
										<input name="hp_penerima" class="form-control"   > 
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
                      </tr>
                      <tr>
                        <th>Berat</th>
                        <td><?= $tot_berat  ?> Gram</td>
                      </tr>
                      <tr>
                        <th>Ongkir</th>
                        <th>0</th>
                      </tr>
                      <tr>
                        <th>Total Bayar</th>
                        <td>0</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
	<input name="no_order" value="<?= $no_order ?>" >
	
	<input name="berat" value="<?= $tot_berat ?>" ><br>
	<input name="grand_total" value="<?= $this->cart->total() ?>" >
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
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-danger"><i class="fas fa-backward"></i> Kembali Ke keranjang</a>
                  <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Proses Chekout</button>
                </div>
              </div>
							<?php echo form_close() ?>
            </div>
  