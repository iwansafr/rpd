<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit user</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-dashboard"></i> <span>Home</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('users'); ?>">
					<span>Users</span>
				</a>
			</li>
			<li class="active">
				<span>Edit</span>
			</li>
		</ol>
	</section>
	<section class="content container-fluid">
		<div class="box">
			<div class="box-header">
				<h2 class="box-title">Edit data</h2>
			</div>
			<div class="box-body">
				<form action="<?php echo base_url('users/'.$data['id'].'/update'); ?>" method="POST">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control" value="<?php echo $data['username']; ?>" required placeholder="Masukkan username">
					</div>
					<div class="form-group">
						<label for="role_id">Akses</label>
						<select name="role_id" id="role_id" class="form-control" required>
							<option>-pilih-</option>
							<option <?php echo $data['role_id'] == 1 ? 'selected' : ''; ?> value="1">Admin</option>
							<option <?php echo $data['role_id'] == 2 ? 'selected' : ''; ?> value="2">Editor</option>
							<option <?php echo $data['role_id'] == 3 ? 'selected' : ''; ?> value="3">Visitor</option>
						</select>
					</div>
					<div class="form-group">
						<label for="password">New password?</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password baru">
					</div>
					<div class="form-group">
        		<label for="fullname">Nama lengkap</label>
        		<input type="text" name="fullname" id="fullname" class="form-control" required placeholder="Nama lengkap" value="<?php echo $data['fullname']; ?>">
        	</div>
        	<div class="form-group">
        		<label for="kecamatan">Kecamatan</label>
        		<input type="text" name="kecamatan" id="kecamatan" class="form-control" required placeholder="Kecamatan" value="<?php echo $data['kecamatan']; ?>">
        	</div>
        	<div class="form-group">
        		<label for="desa">Desa</label>
        		<input type="text" name="desa" id="desa" class="form-control" required placeholder="Desa" value="<?php echo $data['desa']; ?>">
        	</div>
					<a href="<?php echo base_url('users'); ?>" class="btn btn-default">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</section>
</div>