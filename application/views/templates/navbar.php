<?php $user = $this->User->logged_in(); ?>
<?php $logo = $this->Contents->where('slug', 'logo')->single(); ?>
<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url('home'); ?>" class="logo">
    <span class="logo-mini">
      <img src="<?php echo base_url('assets/site/logo/'.$logo['file']); ?>" alt="site logo" style="width: 40px;">
    </span>
    <span class="logo-lg">
      <img src="<?php echo base_url('assets/site/logo/'.$logo['file']); ?>" alt="site logo" style="width: 60px;">
    </span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"></a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url('assets/'); ?>img/default.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $user['username']; ?></span>
          </a>

          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="<?php echo base_url('assets/'); ?>img/default.jpg" class="img-circle" alt="User Image">
              <p>
                <?php echo $user['username']; ?> - Administrator
                <small>Member since <?php echo date('M. Y', strtotime($user['created_at'])); ?></small>
              </p>
            </li>

            <li class="user-footer">
              <div class="pull-right">
                <a href="<?php echo base_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>