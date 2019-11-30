<div class="card teal">
  <div class="card-tabs">
    <ul class="tabs tabs-fixed-width tabs-transparent">
      <li class="tab"><a href="#view">List anggaran kegiatan</a></li>
      <li class="tab"><a href="#create">Tambah anggaran kegiatan</a></li>
    </ul>
  </div>

  <div class="card-content grey lighten-5">
    <div id="view">
    	<?php $this->load->view('home/tab_table'); ?>
    </div>
    <div id="create">
    	<?php $this->load->view('home/tab_create'); ?>
    </div>
  </div>
</div>