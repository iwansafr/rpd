<?php $user = $this->db->get_where('users', ['id' => $this->session->userdata('user_id')])->row_array(); ?>
<nav class="blue">
	<div class="container">
	  <div class="nav-wrapper">
	    <a href="<?php echo base_url(); ?>" class="brand-logo">Logo</a>
	    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
	    <ul class="right hide-on-med-and-down">
	      <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i> Beranda</a></li>
	      <li><a href="badges.html">Components</a></li>
	      <li><a href="collapsible.html">Javascript</a></li>
	      <?php if ($this->session->has_userdata('user_id')) : ?>
	      	<li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
				<?php else : ?>
					<li><a href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in"></i> Login</a></li>	      	
	      <?php endif; ?>
	    </ul>
	  </div>
	</div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Beranda</a></li>
  <li><a href="badges.html">Components</a></li>
  <li><a href="collapsible.html">Javascript</a></li>
  <?php if ($this->session->has_userdata('user_id')) : ?>
  	<li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
  <?php else : ?>
		<li><a href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in"></i> Login</a></li>	 
  <?php endif; ?>
</ul>

<div class="container">
	<div class="row">
		<div class="col-md-12">
