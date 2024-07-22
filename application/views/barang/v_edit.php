<div class="col-md-12">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form <i class="fas fa-edit    "></i> Produk</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
							<?php //notif data tidak diisi tau ada yang kosong
							echo validation_errors('','');	
							if(isset($error_upload)){
								echo '' .$eror_upload. '';
								echo validation_errors('','');
							}
							?>
			<?php echo form_open_multipart('barang/edit/' .$barang->id_barang) ?>
			<div class="form-group">
                        <label>Nama Produk</label>
                        <input name="nama_barang" class="form-control" placeholder="Nama barang"  value="<?= $barang->nama_barang ?>" required>
                      </div>
			<form>
                  <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kategori</label>
                    <select name="id_kategori" class="form-control">
						<option value="<?=$barang->id_kategori  ?>"><?=$barang->nama_kategori?></option>
					<?php foreach ($kategori as $key => $value) { ?>
						<option value="<?=$value->id_kategori  ?>"><?=$value->nama_kategori  ?></option>
					<?php }  ?> 
					</select> 
					</div>
                  </div>
				  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Harga Produk</label>
                        <input name="harga" class="form-control" placeholder="Harga barang"  value="<?=$barang->harga ?>" >
                      </div>
                    </div>	
										<div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Berat (Gram)</label>
                        <input name="berat" type="number" min = "200" class="form-control" placeholder="berat dalam satuan gram  value="<?=set_value('berat') ?>" required>
                      </div>
                    </div>	  	
				  </div>	
          <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ganti Gambar Produk</label>
                        <input type="file" name="gambar" class="form-control"  id="preview_gambar" >
                  
					</div>
          </div>
				  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <img src="<?= base_url('assets/gambar/'.$barang->gambar)  ?>" id="gambar_load" width="200px">
                      </div>
                    </div>	 	
				  </div>	
				  <div class="form-group">
                        <label>Deskripsi Produk </label>
                        <textarea name="deskripsi" class="form-control" rows="3" placeholder="Enter ..." >	<?=$barang->deskripsi ?></textarea>
                      </div>
					<div class="form-group">
                     <button type="submit" class="btn btn-primary">Simpan</button>   
					 <a href="<?=base_url('barang')  ?>" class="btn btn-success">Kembali</a>
					</div>
			<?php echo form_close() ?>
			</div> 
	</div>
</div>               

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
