<div class="card">
  <div class="card-content grey lighten-5" style="overflow-x: auto;">
    <div class="tab-content" style="text-align: left;" id="myTabContent">
		  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<form action="<?php echo base_url('kegiatan/'.$jenis_kegiatan['id'].'/update'); ?>" method="POST">
				  <div class="form-group">
				    <label for="jenis-kegiatan">Jenis kegiatan</label>
				    <input type="text" name="title" class="form-control <?php echo form_error('title') ? 'is-invalid' : ''; ?>" id="jenis-kegiatan"  value="<?php echo $jenis_kegiatan['title']; ?>">
				    <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
				  </div>

				  <div class="form-group">
				    <label for="deskripsi">Deskripsi (jika dibutuhkan)</label>
				    <textarea class="form-control" id="deskripsi" name="deskripsi">
				    	<?php echo $jenis_kegiatan['description']; ?>
				    </textarea>
				  </div>

				  <br />
				  <button type="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
				  <button type="reset" class="btn red"><i class="fa fa-refresh"></i> Reset</button>
				</form>
			</div>
		</div>
  </div>
</div>