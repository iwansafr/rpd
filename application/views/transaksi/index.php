<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Total Pemasukan
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pemasukan</li>
    </ol>
  </section>

  <section class="content container-fluid">
  <?php echo $this->session->flashdata('message'); ?>

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="<?php echo base_url('pemasukan/create'); ?>" class="btn btn-primary">
            <i class="fa fa-plus"></i> <span>Tambah</span>
          </a>
          <a href="<?php echo base_url('pemasukan/excel'); ?>" class="btn btn-default">
            <i class="fa fa-file-excel-o"></i> <span>Ekspor</span>
          </a>
          <a href="<?php echo base_url('pemasukan/add_saldo'); ?>" class="btn btn-success" id="add_saldo">
            <i class="fa fa-money"></i> <span>Tambahkan ke saldo</span>
          </a>

          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th style="width: 10px;">No</th>
              <th>#</th>
              <th>Aksi</th>
              <th>Saldo</th>
              <th>Judul</th>
              <th>Keterangan</th>
              <th>Kategori</th>
              <th>Tanggal</th>
              <th>Jumlah</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($data as $key) : ?>
            <?php $kategori = $this->Kategori_model->find($key['kategori']); ?>
            <tr>
              <td><?php echo $i++; ?>.</td>
              <td>
                <input type="checkbox" name="checklist" <?php echo $key['saldo'] == 1 ? 'checked="true"' : ''; ?> class="checklist" data-id="<?php echo $key['id']; ?>">
              </td>
              <td>
                <div class="btn-group">
                  <a href="<?php echo base_url('pemasukan/'.$key['id'].'/edit'); ?>" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a onclick="return window.confirm('Yakin mau dihapus?');" href="<?php echo base_url('pemasukan/'.$key['id'].'/delete'); ?>" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>
              </td>
              <td>
                <?php if ($key['saldo'] == 1) : ?>
                  <span class="badge bg-green">
                    Aktif
                  </span>
                <?php else : ?>
                  <span class="badge bg-yellow">
                    Belum dipakai
                  </span>
                <?php endif; ?>
              </td>
              <td><?php echo $key['title']; ?></td>
              <td><?php echo $key['description'] != '' ? $key['description'] : 'Tidak ada Keterangan'; ?></td>
              <td><?php echo $kategori['title']; ?></td>
              <td><?php echo date('d M Y', strtotime($key['tanggal'])); ?></td>
              <td><?php echo number_format($key['jumlah'], 2, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </section>
</div>
