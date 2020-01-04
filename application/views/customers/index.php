<div class="content-wrapper">
	<section class="content-header">
		<h1>Data pelanggan</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-dashboard"></i>
					<span>Home</span>
				</a>
			</li>
			<li class="active">
				Pelanggan
			</li>
		</ol>
	</section>
	<section class="content container-fluid">
		<?php echo $this->session->flashdata('message'); ?>
		<div class="box">
			<div class="box-header with-border">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
         	<i class="fa fa-plus"></i> Tambah
        </button>
        <div class="box-tools">
        	<form action="<?php echo base_url('customers/search'); ?>" method="GET">
          <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <input type="text" name="q" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        	</form>
        </div>
			</div>
			<div class="box-body responsive-table no-padding">
				<table class="table table-hover">
          <tr>
            <th style="width: 10px;">No</th>
            <th>Action</th>
            <th>Kode</th>
            <th>Nama pelanggan</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>No HP</th>
          </tr>
          <?php $i = 1; ?>
          <?php foreach($data as $key) : ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td>
            	<div class="btn-group">
	            	<a href="<?php echo base_url('customers/'.$key['id'].'/edit'); ?>" class="btn btn-primary">
	            		<i class="fa fa-pencil"></i>
	            	</a>
	            	<a onclick="return window.confirm('Yakin?');" href="<?php echo base_url('customers/'.$key['id'].'/destroy'); ?>" class="btn btn-danger">
	            		<i class="fa fa-trash"></i>
	            	</a>
            	</div>
            </td>
            <td><?php echo $key['kode']; ?></td>
            <td><?php echo $key['name']; ?></td>
            <td><?php echo $key['nik'] == '' || $key['nik'] == 0 ? '-' : $key['nik']; ?></td>
            <td><?php echo $key['address']; ?></td>
            <td><?php echo $key['number_phone'] == 0 ? '-' : $key['number_phone']; ?></td>
          </tr>
        	<?php endforeach; ?>
        </table>
			</div>
		</div>
	</section>
	<div class="modal fade" id="tambah">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Tambah pelanggan</h4>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo base_url('customers/store'); ?>" method="POST">
	        	<div class="form-group">
	        		<label for="kode">Kode</label>
	        		<input type="text" name="kode" class="form-control" id="kode" value="<?php echo $kode; ?>" disabled="true">
	        	</div>
	        	<div class="form-group">
	        		<label for="name">Nama pelanggan</label>
	        		<input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pelanggan" required>
	        	</div>
	        	<div class="form-group">
	        		<label for="nik">NIK</label>
	        		<input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK">
	        	</div>
	        	<div class="form-group">
	        		<label for="address">Alamat</label>
	        		<input type="text" name="address" id="address" class="form-control" placeholder="Masukkan alamat" required>
	        	</div>
	        	<div class="form-group">
	        		<label for="number_phone">No HP</label>
	        		<input type="number" name="number_phone" id="number_phone" class="form-control" placeholder="Masukkan no HP">
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	        </form>
	      </div>
	    </div>
	    <!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
	</div>
</div>