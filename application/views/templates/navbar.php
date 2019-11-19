<?php $user = $this->db->get_where('users', ['id' => $this->session->userdata('user_id')])->row_array(); ?>
<nav class="blue">
	<div class="container">
	  <div class="nav-wrapper">
	    <a href="<?php echo base_url(); ?>" class="brand-logo">Logo</a>
	    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
	    <ul class="right hide-on-med-and-down">
	      <li class="waves-effect waves-light"><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i> Beranda</a></li>
	      <?php if ($this->session->has_userdata('user_id')) : ?>
	      	<li class="waves-effect waves-light"><a href="<?php echo base_url('create_list_kegiatan'); ?>"><i class="fa fa-pencil"></i> Create list kegiatan</a></li>
	      	<li class="waves-effect waves-light"><a href="<?php echo base_url('create_detail_kegiatan'); ?>"><i class="fa fa-pencil"></i> Judul kegiatan</a></li>
	      	<li class="waves-effect waves-light"><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
				<?php else : ?>
					<li class="waves-effect waves-light"><a href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in"></i> Login</a></li>	      	
	      <?php endif; ?>
	    </ul>
	  </div>
	</div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li class="waves-effect waves-light"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Beranda</a></li>
  <?php if ($this->session->has_userdata('user_id')) : ?>
  	<li class="waves-effect waves-light"><a href="<?php echo base_url('create_list_kegiatan'); ?>"><i class="fa fa-pencil"></i> Create list kegiatan</a></li>
	  <li class="waves-effect waves-light"><a href="<?php echo base_url('create_detail_kegiatan'); ?>"><i class="fa fa-pencil"></i> Judul kegiatan</a></li>
  	<li class="waves-effect waves-light"><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
  <?php else : ?>
		<li class="waves-effect waves-light"><a href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in"></i> Login</a></li>	 
  <?php endif; ?>
</ul>

<div class="container">
	<div class="row">
		<div class="col-md-12">
