<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	<form action="<?php echo base_url('add_jenis_kegiatan'); ?>" method="POST">
	  <div class="form-group">
	    <label for="jenis-kegiatan">Jenis kegiatan</label>
	    <input type="text" name="title" class="form-control <?php echo form_error('title') ? 'is-invalid' : ''; ?>" id="jenis-kegiatan" value="<?php echo set_value('title'); ?>" required>
	  </div>

	  <div class="form-group">
	    <label for="deskripsi">Deskripsi (jika dibutuhkan)</label>
	    <textarea class="form-control" id="deskripsi" name="deskripsi">
	    	<?php echo set_value('deskripsi'); ?>
	    </textarea>
	  </div>
	  
	  <br />
	  <button type="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
	  <button type="reset" class="btn red"><i class="fa fa-refresh"></i> Reset</button>
	</form>
</div>
