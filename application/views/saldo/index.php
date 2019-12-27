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
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h2 class="box-title">Tambah saldo</h2>
					</div>
					<div class="box-body">
						<form role="form" action="<?php echo base_url('saldo/store'); ?>" method="POST">
							<div class="form-group">
								<label for="title">Judul</label>
								<input type="text" name="title" class="form-control" id="title" required>
							</div>
							<div class="form-group">
								<label for="description">Keterangan</label>
								<textarea name="description" class="form-control" id="description" required></textarea>
							</div>
							<div class="form-group">
								<label style="display: block;">Type</label>
								<input type="radio" name="type" id="data-pemasukan" checked="true" required> <label for="data-pemasukan">Data pemasukan</label>
								<br>
								<input type="radio" name="type" id="input-manual" required> <label for="input-manual">Input manual</label>
							</div>
							<div class="type">
								<div class="type-data data-pemasukan" data-target="data-pemasukan">
									<div class="form-group">
										<label for="pemasukan">Pemasukan</label>
										<select name="pemasukan" id="pemasukan" class="form-control nilai">
											<?php foreach($pemasukan as $key) : ?>
												<option value="<?php echo $key['id']; ?>"><?php echo number_format($key['jumlah'], 2, ',', '.'); ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="type-data input-manual" data-target="input-manual">
									<div class="form-group">
										<label for="jumlah">Jumlah</label>
										<input type="text" name="jumlah" class="form-control nilai" required>
									</div>
									<div class="form-group">
										<label for="keterangan-lanjut">Keterangan lanjut</label>
										<textarea name="keterangan_lanjut" id="keterangan-lanjut" class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Nilai</label>
								<input type="text" name="nilai" id="nilai" class="form-control" disabled="true" value="3.000.000">
							</div>
							<div class="form-group">
								<label for="tanggal">Tanggal</label>
								<input type="text" name="tanggal" class="form-control datepicker" id="tanggal" required autocomplete="off">
							</div>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>