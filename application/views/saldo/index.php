<div class="content-wrapper">
	<section class="content-header">
		<h1>Saldo manage</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Saldo</li>
		</ol>
	</section>

	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				
				<div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">saldo total</span>
            <span class="info-box-number">Rp. <?php echo number_format($saldo_total, 0, '', '.'); ?></span>
          </div>
        </div>

			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				
				<div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pemasukan</span>
            <span class="info-box-number">Rp. <?php echo number_format($saldo_total, 0, '', '.'); ?></span>
            <select class="btn btn-default time-saldo">
            	<option>Tahun ini</option>
            	<option>Bulan ini</option>
            	<option>Minggu ini</option>
            	<option>Hari ini</option>
            </select>
          </div>
        </div>

			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				
				<div class="info-box">
          <span class="info-box-icon bg-orange"><i class="fa fa-line-chart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pengeluaran</span>
            <span class="info-box-number">Rp. <?php echo number_format($saldo_total, 0, '', '.'); ?></span>
            <select class="btn btn-default time-saldo">
            	<option>Tahun ini</option>
            	<option>Bulan ini</option>
            	<option>Minggu ini</option>
            	<option>Hari ini</option>
            </select>
          </div>
        </div>

			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				
				<div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-child"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Aktivitas</span>
            <span class="info-box-number">20</span>
            <select class="btn btn-default time-saldo">
            	<option>Tahun ini</option>
            	<option>Bulan ini</option>
            	<option>Minggu ini</option>
            	<option>Hari ini</option>
            </select>
          </div>
        </div>

			</div>
		</div>

		<?php echo $this->session->flashdata('message'); ?>

		<div class="box">
			<div class="box-header with-border">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-user">
             	<i class="fa fa-plus"></i> Tambah saldo
            </button>
			</div>
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width: 10px">No</th>
							<th>Aksi</th>
							<th>Keterangan</th>
							<th>Tanggal</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach($data as $key) : ?>
						<tr>
							<td><?php echo $i++; ?>.</td>
							<td>
								<div class="btn-group">
									<a href="<?php echo base_url('saldo/'.$key['id'].'/edit'); ?>" class="btn btn-primary">
										<i class="fa fa-edit"></i>
									</a>
									<a onclick="return window.confirm('Yakin mau dihapus?');" href="<?php echo base_url('saldo/'.$key['id'].'/delete'); ?>" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</td>
							<td><?php echo $key['description']; ?></td>
							<td><?php echo date('d M Y', strtotime($key['tanggal'])); ?></td>
							<td><?php echo number_format($key['jumlah'], 2, ',', '.'); ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<div class="modal fade" id="tambah-user">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Tambah saldo</h4>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo base_url('saldo/store'); ?>" method="POST">
	        	<div class="form-group">
	        		<label for="description">Keterangan</label>
	        		<textarea id="description" name="description" class="form-control" placeholder="Keterangan saldo" required></textarea>
	        	</div>
	        	<div class="form-group">
	        		<label for="tanggal">Tanggal</label>
	        		<input type="text" name="tanggal" id="tanggal" class="form-control datepicker" autocomplete="off" required>
	        	</div>
	        	<div class="form-group">
	        		<label for="jumlah">Jumlah</label>
	        		<input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan jumlah saldo" required>
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