<div class="content-wrapper">
	<section class="content-header">
		<h1>Stok barang</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-dashboard"></i>
					<span>Home</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('goods'); ?>">Goods</a>
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
        	<form action="<?php echo base_url('goods/search'); ?>" method="GET">
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
							<th style="width: 10px;">No</th>
							<th>Aksi</th>
							<th>Kode</th>
							<th>Nama barang</th>
							<th>Tanggal</th>
							<th>Status</th>
							<th>Harga pokok</th>
							<th>Jumlah</th>
							<th>Harga jual</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach($data as $key) : ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td>
								<div class="btn-group">
									<a href="<?php echo base_url('goods/'.$key['id'].'/edit'); ?>" class="btn btn-primary">
										<i class="fa fa-pencil"></i>
									</a>
									<a onclick="return confirm('Hapus?');" href="<?php echo base_url('goods/'.$key['id'].'/destroy'); ?>" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</td>
							<td><?php echo $key['kode']; ?></td>
							<td><?php echo $key['name']; ?></td>
							<td><?php echo date('M, d Y', strtotime($key['date'])); ?></td>
							<td>
								<?php echo $key['status'] == 1 ? '<span class="badge bg-green">Masuk</span>' : '<span class="badge bg-red">Keluar</span>' ?>
							</td>
							<td><?php echo number_format($key['price'], 2, ',', '.'); ?></td>
							<td><?php echo number_format($jumlah, 2, ',', '.'); ?></td>
							<td><?php echo number_format($key['selling_price'], 2, ',', '.'); ?></td>
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
	        <h4 class="modal-title">Tambah barang</h4>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo base_url('goods/store'); ?>" method="POST">
	        	<div class="form-group">
	        		<label for="kode">Kode</label>
	        		<input type="text" name="kode" class="form-control" id="kode" value="<?php echo $kode; ?>" disabled="true">
	        	</div>
	        	<div class="form-group">
	        		<label for="name">Nama barang</label>
	        		<input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pemasok" required>
	        	</div>
	        	<div class="form-group">
	        		<label for="date">Tanggal</label>
	        		<input type="text" name="date" id="date" class="form-control datepicker" placeholder="Masukkan nama kontak">
	        	</div>
	        	<div class="form-group">
	        		<label for="status">Status</label>
	        		<select id="status" name="status" class="form-control">
	        			<option>-pilih-</option>
	        			<option value="1">Masuk</option>
	        			<option value="2">Keluar</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label for="price">Harga pokok</label>
	        		<input type="number" name="price" id="price" class="form-control" placeholder="Masukkan harga pokok" required>
	        	</div>
	        	<div class="form-group">
	        		<label for="selling_price">Harga jual</label>
	        		<input type="number" name="selling_price" id="selling_price" class="form-control" placeholder="Masukkan harga jual" required>
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