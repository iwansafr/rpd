<div class="card">
  <div class="card-content grey lighten-5" style="overflow-x: auto;">
    <div class="tab-content" style="text-align: left;" id="myTabContent">
	  	<?php echo $this->session->flashdata('message'); ?>
		  <div style="padding-top: 10px;">
				<form action="<?php echo base_url('list/'.$list['id'].'/update'); ?>" method="POST">
				  <div class="input-field">
				    <input type="text" name="title" class="validate <?php echo form_error('title') ? 'is-invalid' : ''; ?>" id="jenis-kegiatan"  value="<?php echo $list['title']; ?>">
				    <label for="jenis-kegiatan">Jenis kegiatan</label>
				    <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
				  </div>

				  <div class="input-field">
				    <input type="number" name="volume" class="validate <?php echo form_error('volume') ? 'is-invalid' : ''; ?>" id="volume"  value="<?php echo $list['volume']; ?>">
				    <label for="volume">Volume</label>
				    <?php echo form_error('volume', '<small class="text-danger">', '</small>'); ?>
				  </div>

				  <div class="input-field">
				    <input type="text" name="satuan" class="validate <?php echo form_error('satuan') ? 'is-invalid' : ''; ?>" id="satuan"  value="<?php echo $list['satuan']; ?>">
				    <label for="satuan">Satuan</label>
				    <?php echo form_error('satuan', '<small class="text-danger">', '</small>'); ?>
				  </div>

				  <div class="input-field">
				    <input type="number" name="harga_satuan" class="validate <?php echo form_error('harga_satuan') ? 'is-invalid' : ''; ?>" id="harga_satuan"  value="<?php echo $list['harga_satuan']; ?>">
				    <label for="harga_satuan">Harga satuan</label>
				    <?php echo form_error('harga_satuan', '<small class="text-danger">', '</small>'); ?>
				  </div>

				  <button type="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
				  <button type="reset" class="btn red"><i class="fa fa-refresh"></i> Reset</button>
				</form>
			</div>
		</div>
  </div>
</div>