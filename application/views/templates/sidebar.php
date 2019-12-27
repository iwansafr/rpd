<?php $user = $this->db->get_where('users', ['id' => $this->session->userdata['user_id']])->row_array(); ?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/'); ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>

      <!-- User profile -->
      <div class="pull-left info">
        <p><?php echo $user['username']; ?></p>
        <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN MENU</li>
      <li>
        <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> <span>Beranda</span></a>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-money"></i> <span>Saldo</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('saldo'); ?>"><i class="fa fa-circle-o"></i> Manage saldo</a></li>
          <li><a href="<?php echo base_url('kegiatan/create'); ?>"><i class="fa fa-circle-o"></i> Log</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-bar-chart"></i> <span>Transaksi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('transaksi'); ?>"><i class="fa fa-circle-o"></i> List transaksi</a></li>
          <li><a href="<?php echo base_url('transaksi/create'); ?>"><i class="fa fa-circle-o"></i> Tambah transaksi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-archive"></i> <span>Kategori</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('kategori'); ?>"><i class="fa fa-circle-o"></i> List kategori</a></li>
          <li><a href="<?php echo base_url('kategori/create'); ?>"><i class="fa fa-circle-o"></i> Tambah kategori</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>Admin users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url('users'); ?>"><i class="fa fa-circle-o"></i> List users</a>
          </li>
        </ul>
      </li>
      
      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-cogs"></i> <span>App settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url('content/logo'); ?>"><i class="fa fa-circle-o"></i> Logo site</a>
          </li>
        </ul>
      </li>
    </ul>
  </section>
</aside>