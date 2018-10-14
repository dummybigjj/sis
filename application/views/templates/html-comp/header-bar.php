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
          <h2 class="header-title"><span class="nav-icon"><em class="<?php echo !empty($header['icon'])?$header['icon']:''; ?> icon-lg"></em></span> <?php echo !empty($header['title'])?$header['title']:''; ?></h2>
          <ul class="float-right">
            <li class="dropdown">
              <a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown">
                <span class="brand-header-logo-text"><?php echo !empty($this->session->userdata('u_designation'))?$this->session->userdata('u_designation'):''; ?> <em class="ion-ios-settings icon-lg"></em></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                <h6 class="dropdown-header">User menu</h6>
                <a class="dropdown-item" href="<?php echo site_url('user_profile'); ?>"><em class="ion-ios-person icon-lg text-primary"></em>Profile</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="<?php echo site_url('logout'); ?>"><em class="ion-log-out icon-lg text-primary"></em>Logoff</a>
              </div>
            </li>
          </ul>
        </nav>
      </header>
      <!-- end top navbar-->