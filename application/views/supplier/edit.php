<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit pemasok</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-dashboard"></i>
					<span>Home</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('supplier'); ?>">Supplier</a>
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
				<form action="<?php echo base_url('supplier/'.$data['id'].'/update'); ?>" method="POST">
        	<div class="form-group">
        		<label for="kode">Kode</label>
        		<input type="text" name="kode" class="form-control" id="kode" value="<?php echo $data['kode']; ?>" disabled="true">
        	</div>
        	<div class="form-group">
        		<label for="name">Nama pemasok</label>
        		<input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pemasok" required value="<?php echo $data['name']; ?>">
        	</div>
        	<div class="form-group">
        		<label for="contact_name">Nama kontak</label>
        		<input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="Masukkan nama kontak" value="<?php echo $data['contact_name']; ?>">
        	</div>
        	<div class="form-group">
        		<label for="address">Alamat</label>
        		<input type="text" name="address" id="address" class="form-control" placeholder="Masukkan alamat" value="<?php echo $data['address']; ?>">
        	</div>
        	<div class="form-group">
        		<label for="number_phone">No HP</label>
        		<input type="number" name="number_phone" id="number_phone" class="form-control" placeholder="Masukkan no HP" value="<?php echo $data['number_phone']; ?>">
        	</div>
        	<a href="<?php echo base_url('supplier'); ?>" class="btn btn-default">Kembali</a>
        	<button type="submit" class="btn btn-primary">Simpan</button>
        </form>
			</div>
		</div>
	</section>
</div>