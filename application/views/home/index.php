<?php $user = $this->User->logged_in(); ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Beranda
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content container-fluid">
    <h1>Welcome <?php echo $user['username']; ?>!</h1>
  </section>
</div>