<div class="card">
  <div class="card-content grey lighten-5" style="overflow-x: auto;">
	  <div class="view">
	  	<?php echo $this->session->flashdata('message'); ?>
			<form action="<?php echo base_url('add_list_kegiatan'); ?>" method="POST">
				<div class="form-group">
			    <label for="jenis_kegiatan_id">Jenis kegiatan</label>
			    <select class="form-control" name="jenis_kegiatan_id" id="jenis_kegiatan_id">
			    	<?php foreach($jenis_kegiatan as $item) : ?>
			    		<option value="<?php echo $item['id']; ?>"><?php echo $item['title']; ?></option>
			    	<?php endforeach; ?>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="detail_kegiatan_id">Judul anggaran</label>
			    <select class="form-control" name="detail_kegiatan_id" id="detail_kegiatan_id">
			    	<?php foreach($detail_kegiatan as $item) : ?>
			    		<option value="<?php echo $item['id']; ?>"><?php echo $item['title']; ?></option>
			    	<?php endforeach; ?>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="title">Judul</label>
			    <input type="text" name="title" class="form-control <?php echo form_error('title') ? 'is-invalid' : ''; ?>" id="title" value="<?php echo set_value('title'); ?>">
			    <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
			  </div>

			  <div class="form-group">
			    <label for="volume">Volume</label>
			    <input type="text" name="volume" class="form-control <?php echo form_error('volume') ? 'is-invalid' : ''; ?>" id="volume" value="<?php echo set_value('volume'); ?>">
			    <?php echo form_error('volume', '<small class="text-danger">', '</small>'); ?>
			  </div>

			  <div class="form-group">
			    <label for="satuan">Satuan</label>
			    <input type="text" name="satuan" class="form-control <?php echo form_error('satuan') ? 'is-invalid' : ''; ?>" id="satuan" value="<?php echo set_value('satuan'); ?>">
			    <?php echo form_error('volume', '<small class="text-danger">', '</small>'); ?>
			  </div>

			  <div class="form-group">
			    <label for="harga_satuan">Harga satuan</label>
			    <input type="number" id="rupiah-format" name="harga_satuan" class="form-control <?php echo form_error('harga_satuan') ? 'is-invalid' : ''; ?>" id="harga_satuan" value="<?php echo set_value('harga_satuan'); ?>">
			    <?php echo form_error('harga_satuan', '<small class="text-danger">', '</small>'); ?>
			  </div>
			  
			  <br />
			  <button type="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
			  <button type="reset" class="btn red"><i class="fa fa-refresh"></i> Reset</button>
			</form>
		</div>
	</div>
</div>