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
    <?php echo $this->session->flashdata('message'); ?>
    <div class="box box-primary">
        <div class="box-header with-border">
          <a href="<?php echo base_url('kegiatan'); ?>" class="btn btn-danger">Kembali</a>
        </div>

        <form role="form" action="<?php echo base_url('kegiatan/store'); ?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="title">Judul kegiatan</label>
              <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi kegiatan</label>
              <textarea name="description" class="form-control" id="description"></textarea>
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
  </section>
</div>