<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Kategori
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kategori</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <?php echo $this->session->flashdata('message'); ?>

    <div class="row">
      
      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            <a href="<?php echo base_url('kategori/create'); ?>" class="btn btn-success">
              <i class="fa fa-plus"></i>
              <span>Tambah kategori</span>
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th style="width: 10px">No</th>
                <th>Aksi</th>
                <th>Nama</th>
              </tr>
              <?php $i = 1; ?>
              <?php foreach($data as $key) : ?>
              <tr>
                <td><?php echo $i++; ?>.</td>
                <td>
                  <div class="btn-group">
                    <a href="<?php echo base_url('kategori/'.$key['id'].'/edit'); ?>" class="btn btn-primary">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a onclick="return window.confirm('Yakin mau dihapus?');" href="<?php echo base_url('kategori/'.$key['id'].'/delete'); ?>" class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
                </td>
                <td><?php echo $key['title']; ?></td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>

    </div>

  </section>
</div>