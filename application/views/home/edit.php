<div class="card">
  <div class="card-content grey lighten-5" style="overflow-x: auto;">
    <div class="tab-content" style="text-align: left;" id="myTabContent">
		  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<form action="<?php echo base_url('kegiatan/'.$jenis_kegiatan['id'].'/update'); ?>" method="POST">
				  <div class="input-field">
				    <input type="text" name="title" class="form-control <?php echo form_error('title') ? 'is-invalid' : ''; ?>" id="jenis-kegiatan"  value="<?php echo $jenis_kegiatan['title']; ?>">
				    <label for="jenis-kegiatan">Jenis kegiatan</label>
				    <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
				  </div>

				  <div class="input-field">
				    <textarea class="materialize-textarea" id="deskripsi" name="description">
				    	<?php echo $jenis_kegiatan['description']; ?>
				    </textarea>
				    <label for="deskripsi">Deskripsi (jika dibutuhkan)</label>
				  </div>

				  <button type="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
				  <a href="<?php echo base_url(); ?>" class="btn red"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
				</form>
			</div>
		</div>
  </div>
</div>