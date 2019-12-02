<?php $user = $this->db->get_where('users', ['id' => $this->session->userdata['user_id']])->row_array(); ?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/'); ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['username']; ?></p>
        <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN MENU</li>
      <li>
        <a href="<?php echo base_url('home'); ?>"><i class="fa fa-home"></i> <span>Beranda</span></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-link"></i> <span>Kegiatan</span></a>
      </li>
    </ul>
  </section>
</aside>