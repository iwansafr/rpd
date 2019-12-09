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
      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-wrench"></i> <span>Kegiatan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('kegiatan'); ?>"><i class="fa fa-circle-o"></i> List kegiatan</a></li>
          <li><a href="<?php echo base_url('kegiatan/create'); ?>"><i class="fa fa-circle-o"></i> Tambah kegiatan</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-bar-chart"></i> <span>Pemasukan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('pemasukan'); ?>"><i class="fa fa-circle-o"></i> List pemasukan</a></li>
          <li><a href="<?php echo base_url('pemasukan/create'); ?>"><i class="fa fa-circle-o"></i> Tambah pemasukan</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-bar-chart"></i> <span>Pengeluaran</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('pengeluaran'); ?>"><i class="fa fa-circle-o"></i> List pengeluaran</a></li>
          <li><a href="<?php echo base_url('pengeluaran/create'); ?>"><i class="fa fa-circle-o"></i> Tambah pemasukan</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-archive"></i> <span>Material</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('material'); ?>"><i class="fa fa-circle-o"></i> List material</a></li>
          <li><a href="<?php echo base_url('material/create'); ?>"><i class="fa fa-circle-o"></i> Tambah material</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>