<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah data pemasukan
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('pemasukan'); ?>">Pemasukan</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
          </div>

          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?php echo base_url('pemasukan'); ?>" class="btn btn-danger">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>