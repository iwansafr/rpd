<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit barang</h1>
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
			<li class="active">Edit</li>
		</ol>
	</section>
	<section class="content container-fluid">
		<div class="box">
			<div class="box-header with-border">
				<h2 class="box-title">Edit data</h2>
			</div>
			<div class="box-body">
				<form action="<?php echo base_url('goods/'.$data['id'].'/update'); ?>" method="POST">
        	<div class="form-group">
        		<label for="kode">Kode</label>
        		<input type="text" name="kode" class="form-control" id="kode" value="<?php echo $kode; ?>" disabled="true">
        	</div>
        	<div class="form-group">
        		<label for="name">Nama barang</label>
        		<input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pemasok" required value="<?php echo $data['name']; ?>">
        	</div>
        	<div class="form-group">
        		<label for="date">Tanggal</label>
        		<input type="text" name="date" id="date" class="form-control datepicker" placeholder="Masukkan nama kontak" value="<?php echo date('d/m/Y', strtotime($data['date'])); ?>">
        	</div>
        	<div class="form-group">
        		<label for="status">Status</label>
        		<select id="status" name="status" class="form-control">
        			<option>-pilih-</option>
        			<option value="1" <?php echo $data['status'] == 1 ? 'selected' : ''; ?>>Masuk</option>
        			<option value="2" <?php echo $data['status'] == 2 ? 'selected' : ''; ?>>Keluar</option>
        		</select>
        	</div>
        	<div class="form-group">
        		<label for="price">Harga pokok</label>
        		<input type="number" name="price" id="price" class="form-control" placeholder="Masukkan harga pokok" required value="<?php echo $data['price']; ?>">
        	</div>
        	<div class="form-group">
        		<label for="selling_price">Harga jual</label>
        		<input type="number" name="selling_price" id="selling_price" class="form-control" placeholder="Masukkan harga jual" required value="<?php echo $data['selling_price']; ?>">
        	</div>
        	<a href="<?php echo base_url('goods'); ?>" class="btn btn-default">Kembali</a>
        	<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</section>
</div>