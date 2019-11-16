<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Edit data kegiatan</a>
		  </li>
		</ul>
  </div>
  <div class="card-body" style="overflow-x: auto;">
    <div class="tab-content" style="text-align: left;" id="myTabContent">
		  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<form action="<?php echo base_url('update_jenis_kegiatan/'.$jenis_kegiatan['id']); ?>" method="POST">
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
				  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
				  <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
				</form>
			</div>
		</div>
  </div>
</div>