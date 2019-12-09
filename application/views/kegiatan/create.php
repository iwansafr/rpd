<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah list kegiatan
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('kegiatan'); ?>">Kegiatan</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-6">
        <?php echo $this->session->flashdata('message'); ?>
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Input data</h3>
          </div>

          <form role="form" action="<?php echo base_url('kegiatan/store'); ?>" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label for="title">Judul kegiatan</label>
                <input type="text" name="title" class="form-control" id="title" required>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i>
                <span>Simpan</span>
              </button>
              <a href="<?php echo base_url('kegiatan'); ?>" class="btn btn-danger">
                <i class="fa fa-arrow-circle-right"></i>
                <span>Kembali</span>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>