<div class="card">
  <div class="card-content grey lighten-5" style="overflow-x: auto;">
    <div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="home-tab">
		  	<?php echo $this->session->flashdata('message'); ?>
				<form action="<?php echo base_url('add_detail_kegiatan'); ?>" method="POST">
					<div class="form-group">
				    <label for="jenis_kegiatan_id">Jenis kegiatan</label>
				    <select class="form-control" name="jenis_kegiatan_id" id="jenis_kegiatan_id">
				    	<?php foreach($jenis_kegiatan as $item) : ?>
				    		<option value="<?php echo $item['id']; ?>"><?php echo $item['title']; ?></option>
				    	<?php endforeach; ?>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="title">Judul detail list</label>
				    <input type="text" name="title" class="form-control <?php echo form_error('title') ? 'is-invalid' : ''; ?>" id="title" value="<?php echo set_value('title'); ?>">
				    <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
				  </div>

				  <br />
				  <button type="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
				  <button type="reset" class="btn red"><i class="fa fa-refresh"></i> Reset</button>
				</form>
			</div>
		</div>
  </div>
</div>