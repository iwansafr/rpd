<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	<form action="<?php echo base_url('kegiatan/store'); ?>" method="POST">
	  <div class="input-field">
	    <input type="text" name="title" class="validate <?php echo form_error('title') ? 'is-invalid' : ''; ?>" id="jenis-kegiatan" value="<?php echo set_value('title'); ?>" required>
	    <label for="jenis-kegiatan">Jenis kegiatan</label>
	  </div>

	  <div class="input-field">
	    <textarea class="materialize-textarea" id="deskripsi" name="deskripsi">
	    	<?php echo set_value('deskripsi'); ?>
	    </textarea>
	    <label for="deskripsi" style="margin-bottom: 10px;display: inline-block;">Deskripsi (jika dibutuhkan)</label>
	  </div>
	  
	  <button type="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
	  <button type="reset" class="btn red"><i class="fa fa-refresh"></i> Reset</button>
	</form>
</div>
