<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tambah list bahan</a>
		  </li>
		</ul>
  </div>
  <div class="card-body" style="overflow-x: auto;">
    <div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="home-tab">
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
				  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
				  <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
				</form>
			</div>
		</div>
  </div>
</div>