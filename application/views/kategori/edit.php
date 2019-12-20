<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit kategori
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('kategori'); ?>">Kategori</a></li>
      <li class="active">Edit</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <?php echo $this->session->flashdata('message'); ?>

    <div class="row">
      
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit data</h3>
          </div>

          <form role="form" action="<?php echo base_url('kategori/'.$data['id'].'/update'); ?>" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label for="nama">Nama kategori</label>
                <input type="text" class="form-control" id="nama" name="title" value="<?php echo $data['title']; ?>" required>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis</label>
                <select id="jenis" name="type" class="form-control" required>
                  <option value="1" <?php echo $data['type'] == 1 ? 'selected' : ''; ?>>Pemasukan</option>
                  <option value="2" <?php echo $data['type'] == 2 ? 'selected' : ''; ?>>Pengeluaran</option>
                </select>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?php echo base_url('kategori'); ?>" class="btn btn-default">Kembali</a>
            </div>
          </form>
        </div>
      </div>

    </div>

  </section>
</div>