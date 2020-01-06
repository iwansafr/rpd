<div class="content-wrapper">
	<section class="content-header">
		<h1>Data pemasok</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-dashboard"></i>
					<span>Home</span>
				</a>
			</li>
			<li class="active">
				Supplier
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
        	<form action="<?php echo base_url('supplier/search'); ?>" method="GET">
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
					<thead>
						<tr>
							<th style="width: 10px">No</th>
							<th>Aksi</th>
							<th>Kode</th>
							<th>Nama pemasok</th>
							<th>Nama kontak</th>
							<th>Alamat</th>
							<th>No HP</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach($data as $key) : ?>
						<tr>
							<td><?php echo $i++; ?>.</td>
							<td>
								<div class="btn-group">
									<a href="<?php echo base_url('supplier/'.$key['id'].'/edit'); ?>" class="btn btn-primary">
										<i class="fa fa-pencil"></i>
									</a>
									<a onclick="return window.confirm('Yakin');" href="<?php echo base_url('supplier/'.$key['id'].'/destroy'); ?>" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</td>
							<td><?php echo $key['kode']; ?></td>
							<td><?php echo $key['name']; ?></td>
							<td><?php echo $key['contact_name'] == '' ? '-' : $key['contact_name']; ?></td>
							<td><?php echo $key['address'] == '' ? '-' : $key['address']; ?></td>
							<td><?php echo $key['number_phone'] == '' || $key['number_phone'] == 0 ? '-' : $key['number_phone']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
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
	        <h4 class="modal-title">Tambah pemasok</h4>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo base_url('supplier/store'); ?>" method="POST">
	        	<div class="form-group">
	        		<label for="kode">Kode</label>
	        		<input type="text" name="kode" class="form-control" id="kode" value="<?php echo $kode; ?>" disabled="true">
	        	</div>
	        	<div class="form-group">
	        		<label for="name">Nama pemasok</label>
	        		<input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pemasok" required>
	        	</div>
	        	<div class="form-group">
	        		<label for="contact_name">Nama kontak</label>
	        		<input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="Masukkan nama kontak">
	        	</div>
	        	<div class="form-group">
	        		<label for="address">Alamat</label>
	        		<input type="text" name="address" id="address" class="form-control" placeholder="Masukkan alamat">
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