<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Kegiatan
      <small>List data kegiatan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="box">
      <div class="box-header">
        <a class="btn btn-primary" href="<?php echo base_url('kegiatan/create'); ?>">
          <i class="fa fa-plus"></i>
        </a>

      <div class="box-body">
        <table id="kegiatan" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>NO</th>
            <th>EDIT</th>
            <th>HAPUS</th>
            <th>DETAIL</th>
            <th>JUDUL</th>
            <th>JUMLAH</th>
          </tr>
          </thead>
          <tbody>
          <?php $i = 1; ?>
          <?php foreach($data as $key) : ?>
            <?php $detail_kegiatan = $this->db->get_where('detail_kegiatan', ['jenis_kegiatan_id' => $key['id']])->row_array(); ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td>
                <a href="<?php echo base_url('kegiatan/'.$key['id'].'/edit'); ?>" class="btn btn-primary">
                  <i class="fa fa-edit"></i>
                </a>
              </td>

              <td>
                <a onclick="return window.confirm('Mau dihapus?')" href="<?php echo base_url('kegiatan/'.$key['id'].'/destroy'); ?>" class="btn btn-danger">
                  <i class="fa fa-trash"></i>
                </a>
              </td>

              <td>
                <a href="<?php echo base_url('kegiatan/'.$key['id'].'/detail'); ?>">Detail</a>
              </td>

              <td>
                <?php echo $key['title']; ?>
              </td>

              <td>
                <?php echo 'jumlah'; ?>
              </td>

            </tr>
          <?php endforeach; ?>
          </tbody>
          <tfoot>
          <tr>
            <th>NO</th>
            <th>EDIT</th>
            <th>HAPUS</th>
            <th>DETAIL</th>
            <th>JUDUL</th>
            <th>JUMLAH</th>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </section>
</div>