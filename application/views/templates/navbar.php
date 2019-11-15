<?php $user = $this->db->get_where('users', ['id' => $this->session->userdata('user_id')])->row_array(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <a class="navbar-brand" href="<?php echo base_url(); ?>">SIPAPAT</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url('home'); ?>">Beranda</a>
	      </li>
	      <?php if ($this->session->has_userdata('user_id')) : ?>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('create_detail_kegiatan'); ?>">Tambah judul list</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('create_list_kegiatan'); ?>">Tambah list bahan</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('logout'); ?>">Logout</a>
		      </li>
		    <?php else : ?>
		    	<li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
		      </li>
	    	<?php endif; ?>
	    </ul>
	    <form>
	    	<div class="input-group">
		      <input class="form-control" type="search" placeholder="Cari..." aria-label="Search">
		      <div class="input-group-append">
			      <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
		      </div>
	    	</div>
	    </form>
	  </div>
	</div>
</nav>

<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-12">
