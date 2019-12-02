<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit kegiatan
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> Beranda</a>
      </li>
      <li>
        <a href="<?php echo base_url('kegiatan'); ?>">Kegiatan</a>
      </li>
      <li class="active">
        Edit
      </li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
          <a href="<?php echo base_url('kegiatan'); ?>" class="btn btn-danger">Kembali</a>
        </div>

        <form role="form" action="<?php echo base_url('kegiatan/'.$data['id'].'/update'); ?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="title">Judul kegiatan</label>
              <input type="text" name="title" class="form-control" id="title" value="<?php echo $data['title']; ?>" required>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi kegiatan</label>
              <textarea name="description" class="form-control" id="description" value="<?php echo $data['description']; ?>"></textarea>
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
  </section>
</div>