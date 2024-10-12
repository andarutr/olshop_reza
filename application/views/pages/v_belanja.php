<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="card">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-sm-12">
						<?php echo form_open('belanja/update'); ?>

						<table class="table" cellpadding="6" cellspacing="1" style="width:100%">

							<tr>
								<th width="90px">QTY</th>
								<th>Nama barang</th>
								<th style="text-align:right">Harga</th>
								<th style="text-align:right">Sub-Total</th>
								<th style="text-align:right">Berat</th>
								<th class="text-center">Aksi</th>
							</tr>

							<?php $i = 1; ?>
							<?php
$tot_berat = 0;
 foreach ($this->cart->contents() as $items){ 
	$barang = $this->m_home->detail_barang($items['id']);
	$berat = $items['qty'] * $barang->berat;
	$tot_berat = $tot_berat + $berat; 

	?>

							<tr>
								<td><?php 
				echo form_input( array(
					'name' => $i . '[qty]',
					 'value' => $items['qty'], 
					 'maxlength' => '3',
					 'min' => '0',
					 'size' => '5',
					 'type' =>'number',
					 'class' => 'form-control')); ?></td>
								<td> <?php echo $items['name']; ?></td>
								<td style="text-align:right">Rp. <?php echo number_format($items['price'], 0); ?></td>
								<td style="text-align:right">Rp. <?php echo number_format($items['subtotal'], 0); ?>
								</td>
								<td class="text-center"> <?=$berat ?> gram</td>
								<td class="text-center">
									<a href="<?=base_url('belanja/delete/'.$items['rowid']); ?>"
										class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
								</td>
							</tr>

							<?php $i++; ?>

							<?php } ?>

							<tr>
								<td colspan="2"> </td>
								<td class="right"><strong>Total</strong></td>
								<td class="right"><strong>Rp.
										<?php echo number_format($this->cart->total(), 0); ?></strong>
								</td>
							</tr>
							<tr>
								<td colspan="2"> </td>
								<td class="right"><strong>Total Berat</strong></td>
								<td class="right"><strong> <?= $tot_berat  ?> Gram</strong></td>
							</tr>

						</table>
						<button type="submit" class="btn btn-primary">Update</button>
						<a href="<?=base_url('belanja/checkout') ?>" class="btn btn-success">Checkout</a>
						<a href="<?=base_url('belanja/clear') ?>" class="btn btn-danger"><i class="bi bi-recycle"></i>
							Clear
							Cart</a>
						<?php echo form_close(); ?>
						<br>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>