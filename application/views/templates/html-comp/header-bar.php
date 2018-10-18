      <!-- top navbar-->
      <header class="header-container">
        <nav>
          <ul class="d-lg-none">
            <li>
              <a class="sidebar-toggler menu-link menu-link-close" href="#"><span><em></em></span></a>
            </li>
          </ul>
          <ul class="d-none d-sm-block">
            <li>
              <a class="covermode-toggler menu-link menu-link-close" href="#"><span><em></em></span></a>
            </li>
          </ul>
          <h2 class="header-title"><span class="nav-icon"><em class="icon-<?php echo !empty($header['icon'])?$header['icon']:''; ?> icon-lg"></em></span> <?php echo !empty($header['title'])?$header['title']:''; ?></h2>
          <ul class="float-right">
            <li class="dropdown">
              <a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown">
                <span class="brand-header-logo-text"><i class="icon-menu icon-lg"></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                <h6 class="dropdown-header">User menu</h6>
                <a class="dropdown-item" href="<?php echo site_url('user_profile'); ?>"><i class="icon-man-people-streamline-user icon-lg text-primary"></i> Profile</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="<?php echo site_url('logout'); ?>"><i class="icon-power icon-lg text-primary"></i> Logout</a>
              </div>
            </li>
          </ul>
        </nav>
      </header>
      <!-- end top navbar-->