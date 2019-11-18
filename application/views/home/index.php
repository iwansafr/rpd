<div class="card teal">
  <div class="card-tabs">
    <ul class="tabs tabs-fixed-width tabs-transparent">
      <li class="tab"><a href="#view">Test 1</a></li>
      <li class="tab"><a href="#test5">Test 2</a></li>
    </ul>
  </div>
  <div class="card-content grey lighten-5">
    <div id="view">Test 1</div>
    <div id="test5">Test 2</div>
  </div>
</div>

<!-- <div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">List kegiatan</a>
		  </li>
		  <?php if ($this->session->has_userdata('user_id')) : ?>
			  <li class="nav-item">
			    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah anggaran kegiatan</a>
			  </li>
			<?php endif; ?>
		</ul>
  </div>
  <div class="card-body" style="overflow-x: auto;">
    <div class="tab-content" style="text-align: left;" id="myTabContent">
		  <?php $this->load->view('home/tab_table'); ?>
		  <?php $this->load->view('home/tab_create'); ?>
		</div>
  </div>
</div> -->