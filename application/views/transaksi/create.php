<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah data transaksi
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('pemasukan'); ?>">Transaksi</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

  <section class="content container-fluid">
  <?php echo $this->session->flashdata('message'); ?>

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Input data</h3>
        </div>

        <form role="form" action="<?php echo base_url('transaksi/store'); ?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="description">Keterangan</label>
              <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <select name="kategori" id="kategori" class="form-control">
                <option>-pilih-</option>
                <?php foreach($kategori as $key) : ?>
                  <option value="<?php echo $key['id']; ?>"><?php echo $key['title']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="type">Tipe</label> <br />
              <input type="radio" name="type" id="pemasukan" value="pemasukan"> <label for="pemasukan">Pemasukan</label> <br>
              <input type="radio" name="type" id="pengeluaran" value="pengeluaran"> <label for="pengeluaran">Pengeluaran</label>
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="text" name="jumlah" id="jumlah" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="text" name="tanggal" class="form-control datepicker" id="tanggal" required autocomplete="off">
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-save"></i>
              <span>Simpan</span>
            </button>
            <a href="<?php echo base_url('transaksi'); ?>" class="btn btn-default">
              <i class="fa fa-arrow-circle-right"></i>
              <span>Kembali</span>
            </a>
          </div>
        </form>
      </div>

  </section>
</div>