
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Gambar Produk untuk <?= $barang->nama_barang ?></h3>
                <div class="card-tools">
				</div>
                <!-- /.card-tools -->
              </div>

			   <?php
if ($this->session->set_flashdata('pesan')) {
	echo '<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5><i class="icon fas fa-check"></i> Alert!</h5>';
	$this->session->set_flashdata('pesan');
	echo '</div>';
}
?>
<?php //notif data tidak diisi tau ada yang kosong
							echo validation_errors('','');	
							if(isset($error_upload)){
								echo '' .$eror_upload. '';
								echo validation_errors('','');
							}
							?>
			<?php echo form_open_multipart('gambarbarang/add/'.$barang->id_barang)  ?>


<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label>Keterangan Produk</label>
<input name="ket" class="form-control" placeholder="Keterangan"  value="<?=set_value('nama_barang') ?>" required>
</div>	
</div>
        <div class="col-sm-4">
        <div class="form-group">
        <label>Gambar Produk</label>
        <input type="file" name="gambar" class="form-control"  id="preview_gambar" required>
        </div>
        </div>
				  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <img src="<?= base_url('assets/gambar/noimg.png')  ?>" id="gambar_load" width="200px">
                      </div>
                    </div>	 	
				  </div>	
					<div class="form-group">
                     <button type="submit" class="btn btn-primary">Simpan</button>   
					 <a href="<?=base_url('gambarbarang')  ?>" class="btn btn-success">Kembali</a>
					</div>
				  
<?php echo form_close()?>
<hr>
<div class="row">
<?php
foreach($gambar as $key =>$value){?>
<div class="col-md-3">
	<div class="form-group">
    <img src="<?= base_url('assets/gambarbarang/'.$value->gambar)  ?>" id="gambar_load" width="250px" height="200px">
	</div> <br>
	<label >Keterangan :<?=$value->ket ?></label>
	<div class="form-group">
	<button  data-toggle="modal" data-target="#delete<?= $value->id_gambar ?>"class="btn btn-danger btn-xs btn-block">
	<i class="fa fa-trash"></i>delete</button>
	
	</div>
	</div>
<?php }
?>

</div>

</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

					<?php foreach ($gambar as $key =>$value) {?>
<div class="modal fade" role="dialog" id="delete<?= $value->id_gambar?>">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
				<h4 class="modal-title">Delete <?=$value->ket?> ? </h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
				<div class="modal-body text-center">
				<div class="form-group">
					<img src="<?= base_url('assets/gambarbarang/'.$value->gambar)  ?>" id="gambar_load" width="250px" height="200px">
					</div>
				<h5>Apakah anda yakin ingin mnghapus Gambar ini</h5>
				</div>
				
				<div class="card-footer">
                  <a class="btn btn-primary" href="<?=base_url('gambarbarang/delete/'.$value->id_barang.'/' .$value->id_gambar)  ?>">delete</a>
                  <a class="btn btn-primary" href="<?=base_url('barang')  ?>">Cancel</a>
                </div>
			</div>
		</div>
	</div>
<?php }?>


					<script>
  function bacaGambar(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#gambar_load').attr('src',e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $('#preview_gambar').change(function(){
    bacaGambar(this);
  })
</script>
