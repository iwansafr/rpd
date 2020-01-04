<?php $user = $this->db->get_where('users', ['id' => $this->session->userdata['user_id']])->row_array(); ?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/'); ?>img/default.jpg" class="img-circle" alt="User Image">
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

      <!-- Admin links -->
      <?php if ($user['role_id'] == 1) : ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('neraca'); ?>">
                <i class="fa fa-circle-o"></i> <span>Neraca</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('laba_rugi'); ?>">
                <i class="fa fa-circle-o"></i> <span>Laba rugi</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('buku_besar'); ?>">
                <i class="fa fa-circle-o"></i> <span>Buku besar</span>
              </a>
            </li>
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
      <?php endif; ?>
      <!-- End admin links -->

      <!-- Editor links -->
      <?php if ($user['role_id'] == 2) : ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>Akun</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Saldo awal
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Jurnal umum
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Kas masuk
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Kas keluar
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Bagi hasil
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Bayar hutang bagi hasil
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Set diskon member
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-database"></i> <span>Master data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url('customers'); ?>">
              <i class="fa fa-circle-o"></i> Data pelanggan
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Data pemasok
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-archive"></i> <span>Inventory</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Daftar stok
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Penyesuaian stok
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-exchange"></i> <span>Pembelian</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Pembelian
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Pembayaran hutang
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Lihat jurnal
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Buku bantu
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-exchange"></i> <span>Penjualan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Penjualan
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Pembayaran hutang
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Lihat jurnal
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-circle-o"></i> Buku bantu
            </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>
      <!-- End editor links -->

      <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-cogs"></i> <span>App settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url('content/logo'); ?>">
              <i class="fa fa-circle-o"></i> Logo site
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </section>
</aside>