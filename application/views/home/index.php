<div class="card teal">
  <div class="card-tabs">
    <ul class="tabs tabs-fixed-width tabs-transparent">
      <li class="tab"><a href="#view">List anggaran kegiatan</a></li>
      <?php if ($this->session->has_userdata('user_id')) : ?>
      	<li class="tab"><a href="#create">Tambah anggaran kegiatan</a></li>
      <?php endif; ?>
    </ul>
  </div>

  <div class="card-content grey lighten-5">
    <div id="view">
    	<?php $this->load->view('home/tab_table'); ?>
    </div>
    <?php if ($this->session->has_userdata('user_id')) : ?>
	    <div id="create">
	    	<?php $this->load->view('home/tab_create'); ?>
	    </div>
	  <?php endif; ?>
  </div>
</div>