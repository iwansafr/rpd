<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit data pemasukan
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('pemasukan'); ?>">Pemasukan</a></li>
      <li class="active">Edit</li>
    </ol>
  </section>

  <section class="content container-fluid">
  <?php echo $this->session->flashdata('message'); ?>

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit data</h3>
          </div>

          <form role="form" action="<?php echo base_url('transaksi/'.$data['id'].'/update'); ?>" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $data['title']; ?>" required>
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
                    <option value="<?php echo $key['id']; ?>" <?php echo $data['kategori'] == $key['id'] ? 'selected' : ''; ?>><?php echo $key['title']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="type">Tipe</label> <br />
                <input type="radio" name="type" id="pemasukan" <?php echo $data['type'] == 'pemasukan' ? 'checked="true"' : ''; ?> value="pemasukan"> <label for="pemasukan">Pemasukan</label> <br>
                <input type="radio" name="type" id="pengeluaran" <?php echo $data['type'] == 'pengeluaran' ? 'checked="true"' : ''; ?> value="pengeluaran"> <label for="pengeluaran">Pengeluaran</label>
              </div>
              <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?php echo $data['jumlah']; ?>" required>
              </div>
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" name="tanggal" class="form-control datepicker" value="<?php echo date('d/m/Y', strtotime($data['tanggal'])) ?>" id="tanggal" required>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i>
                <span>Simpan</span>
              </button>
              <a href="<?php echo base_url('pemasukan'); ?>" class="btn btn-default">
                <i class="fa fa-arrow-circle-right"></i>
                <span>Kembali</span>
              </a>
            </div>
          </form>
        </div>
  </section>
</div>