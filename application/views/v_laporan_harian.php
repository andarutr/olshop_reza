<div class="col-12">
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-shopping-cart"></i> <?= $title ?>
					<center><h3>CV.BINTANG MAKMUR SEJAHTERA</h3>
					<LABEL>SUPLIER BAHAN MAKANAN ,SAYURAN DAN BUAH SEGAR</LABEL>
					<h6>Gd.Graha Krama Yudha Lt 4 Unit B</H6>
					<h6>Jalan warung Jati Barat No.04</h6>
					<h6>021-7945301-0821-2730-3931</h6>
					</center>
                    <small class="float-right">Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
                </h4>
            </div>
            <!-- /.col -->
        </div>


        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
							<th>Nama pelanggan</th>
							<th>No Order</th>
							<th>Barang</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $grand_total = 0;
                        foreach ($laporan as $key => $value) {
                            $tot_harga = $value->qty * $value->harga;
                            $grand_total = $grand_total + $tot_harga;
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
								<td><?=$value->nama_pelanggan ?></td>
                                <td><?= $value->no_order ?></td>
                                <td><?= $value->nama_barang ?></td>
                                <td>Rp. <?= number_format($value->harga, 0) ?></td>
                                <td><?= $value->qty ?></td>
                                <td>Rp. <?= number_format($tot_harga, 0) ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
                <h3> Grand Total : Rp. <?= number_format($grand_total, 0) ?></h3>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->



        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>

            </div>
        </div>
    </div>
    <!-- /.invoice -->
</div><!-- /.col -->
</div><!-- /.row -->
