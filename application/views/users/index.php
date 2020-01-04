<?php $user = $this->User->logged_in(); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>List users</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li class="active">Users</li>
		</ol>
	</section>
	<section class="content container-fluid">
		<?php echo $this->session->flashdata('message'); ?>
		<div class="row">
			<div class="col-md-8">
				<div class="box">
					<div class="box-header">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-user">
             	<i class="fa fa-plus"></i> Tambah user
            </button>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
		          <tr>
		            <th style="width: 10px">#</th>
		            <?php if ($user['role_id'] == 1): ?>
		            	<th>Aksi</th>
		            <?php endif; ?>
		            <th>Username</th>
		            <th>Akses</th>
		            <th>Nama lengkap</th>
		            <th>Kecamatan</th>
		            <th>Desa</th>
		          </tr>
		          <?php $i = 1; ?>
		          <?php foreach($data as $key) : ?>
		          <tr>
		            <td><?php echo $i++; ?>.</td>
		            <?php if ($user['role_id'] == 1): ?>
		            	<td>
		            		<div class="btn-group">
		            			<a class="btn btn-primary user_edit" href="<?php echo base_url('users/'.$key['id'].'/edit/'); ?>" data-toggle="modal">
					             	<i class="fa fa-edit"></i>
					            </a>
		            			<a onclick="return window.confirm('Yakin mau dihapus?');" href="<?php echo base_url('users/'.$key['id'].'/delete'); ?>" class="btn btn-danger">
		            				<i class="fa fa-trash"></i>
		            			</a>
		            		</div>
		            	</td>
		            <?php endif; ?>
		            <td><?php echo $key['username']; ?></td>
		            <td>
		            	<?php
		            		switch ($key['role_id']) {
		            			case 1:
		            				echo '<span class="badge bg-green">Admin</span>';
		            				break;

		            			case 2:
		            				echo '<span class="badge bg-blue">Editor</span>';
		            				break;
		            			
		            			default:
		            				echo '<span class="badge bd-default">Visitor</span>';
		            				break;
		            		}
		            	?>	
		            </td>
		            <td><?php echo $key['fullname']; ?></td>
		            <td><?php echo $key['kecamatan']; ?></td>
		            <td><?php echo $key['desa']; ?></td>
		          </tr>
		        	<?php endforeach; ?>
		        </table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="tambah-user">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Tambah user</h4>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo base_url('users/store'); ?>" method="POST">
	        	<div class="form-group">
	        		<label for="username">Username</label>
	        		<input type="text" name="username" class="form-control" id="username" required placeholder="Masukkan username">
	        	</div>
	        	<div class="form-group">
	        		<label for="password">Password</label>
	        		<input type="password" name="password" class="form-control" id="password" required placeholder="Masukkan password">
	        	</div>
	        	<div class="form-group">
	        		<label for="role_id">Akses</label>
	        		<select name="role_id" class="form-control" id="role_id" required>
	        			<option>-pilih-</option>
	        			<?php if ($user['role_id'] == 1) : ?>
	        				<option value="1">Admin</option>
	        			<?php endif; ?>
	        			<option value="2">Editor</option>
	        			<option value="3">Visitor</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label for="fullname">Nama lengkap</label>
	        		<input type="text" name="fullname" id="fullname" class="form-control" required placeholder="Nama lengkap">
	        	</div>
	        	<div class="form-group">
	        		<label for="kecamatan">Kecamatan</label>
	        		<input type="text" name="kecamatan" id="kecamatan" class="form-control" required placeholder="Kecamatan">
	        	</div>
	        	<div class="form-group">
	        		<label for="desa">Desa</label>
	        		<input type="text" name="desa" id="desa" class="form-control" required placeholder="Desa">
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
<script type="text/javascript" src="<?php echo base_url('assets/js/req_api.js'); ?>"></script>