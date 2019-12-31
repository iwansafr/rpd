<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit saldo</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-home"></i> <span>Home</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('saldo'); ?>">Saldo</a>
			</li>
			<li class="active">
				Edit
			</li>
		</ol>
	</section>
	<section class="content container-fluid">
		<div class="box">
			<div class="box-header with-border">
				<h2 class="box-title">Edit data</h2>
			</div>
			<div class="box-body">
				<form action="<?php echo base_url('saldo/'.$data['id'].'/update'); ?>" method="POST">
					<div class="form-group">
						<div class="form-group">
	        		<label for="description">Keterangan</label>
	        		<textarea id="description" name="description" class="form-control" placeholder="Keterangan saldo" required>
	        			<?php echo $data['description']; ?>
	        		</textarea>
	        	</div>
	        	<div class="form-group">
	        		<label for="tanggal">Tanggal</label>
	        		<input type="text" name="tanggal" id="tanggal" class="form-control datepicker" autocomplete="off" required value="<?php echo date('d/m/Y', strtotime($data['tanggal'])); ?>">
	        	</div>
	        	<div class="form-group">
	        		<label for="jumlah">Jumlah</label>
	        		<input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan jumlah saldo" required value="<?php echo $data['jumlah']; ?>">
	        	</div>
	        	<a href="<?php echo base_url('saldo'); ?>" class="btn btn-default">Kembali</a>
	        	<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</section>
</div>