<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah kategori
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('kategori'); ?>">Kategori</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <?php echo $this->session->flashdata('message'); ?>

    <div class="row">
      
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Input data</h3>
          </div>

          <form role="form" action="<?php echo base_url('kategori/store'); ?>" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label for="nama">Nama kategori</label>
                <input type="text" class="form-control" id="nama" name="title" required>
              </div>
            </div>

            <div class="box-footer">
              <a href="<?php echo base_url('kategori'); ?>" class="btn btn-default">Kembali</a>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>

    </div>

  </section>
</div>