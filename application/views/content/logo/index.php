<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Logo setting
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url('content/logo'); ?>">Content</a></li>
      <li class="active">Logo</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit data</h3>
          </div>

          <div class="box-body">
            <form action="<?php echo base_url('content/logo_update/'); ?>" method="POST" enctype="multipart/form-data">
              <div class="form-group input-photo">
                <label for="file">
                  <i class="fa fa-image"></i>
                  <img src="" alt="file input">
                </label>
                <input type="file" name="file" id="file">
                <?php echo '<small class="text-danger">'.$error.'</small>'; ?>
              </div>
            </div>

            <div class="box-footer">
              <button class="btn btn-success">
                <i class="fa fa-upload"></i>
                <span>Upload</span>
              </button>
              <a href="<?php echo $this->agent->referrer(); ?>" class="btn btn-default">
                <i class="fa fa-arrow-circle-right"></i>
                <span>Kembali</span>
              </a>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>