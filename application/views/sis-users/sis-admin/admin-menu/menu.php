      <!-- sidebar-->
      <aside class="sidebar-container">
        <div class="brand-header">
          <div class="float-left pt-4 text-muted sidebar-close"><em class="ion-arrow-left-c icon-lg"></em></div>
          <a class="brand-header-logo" href="#"><span class="brand-header-logo-text"><em class="ion-person"></em> SIS</span></a>
        </div>
        <div class="sidebar-content">
          <div class="sidebar-toolbar">
            <div class="sidebar-toolbar-background"></div>
            <div class="sidebar-toolbar-content text-center">
              <a href="#">
                <img class="rounded-circle thumb64" src="<?php echo base_url('application/assets/img/user/01.jpg'); ?>" alt="Profile">
              </a>
              <div class="mt-3">
                <div class="lead"><?php echo !empty($this->session->userdata('u_fullname'))?$this->session->userdata('u_fullname'):''; ?></div>
                <div class="text-thin"><?php echo !empty($this->session->userdata('u_designation'))?$this->session->userdata('u_designation'):''; ?></div>
              </div>
            </div>
          </div>
          <nav class="sidebar-nav">
            <ul>
              <li>
                <div class="sidebar-nav-heading">MENU</div>
              </li>
              <li>
                <a href="<?php echo site_url('admin_dashboard'); ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-speedometer-outline"></em></span><span>Dashboard</span></a>
              </li>
              <li>
                <a href="<?php echo site_url('users'); ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-person-outline"></em></span><span>User</span></a>
              </li>
              <li>
                <a href="<?php echo site_url('admin_security'); ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-gear-outline"></em></span><span>Security Config</span></a>
              </li>
              <li>
                <a href="<?php echo site_url('admin_history'); ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-loop"></em></span><span>History</span></a>
              </li>
              <li>
                <div class="sidebar-nav-heading"></div>
              </li>
              <li>
                <a href="#"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-people-outline"></em></span><span>Student</span></a>
              </li>
              <li>
                <div class="sidebar-nav-heading"></div>
              </li>
              <li>
                <div class="sidebar-nav-heading">CONFIG ITEMS</div>
              </li>
              <li>
                <a href="<?php echo site_url('diploma_courses') ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-paper-outline"></em></span><span>Diploma</span></a>
              </li>
              <li>
                <a href="<?php echo site_url('vocational_programs'); ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-list-outline"></em></span><span>Vocational</span></a>
              </li>
              <li>
                <a href="<?php echo site_url('subjects'); ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-book-outline"></em></span><span>Subject</span></a>
              </li>
              <li>
                <a href="<?php echo site_url('rooms'); ?>"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-home-outline"></em></span><span>Room</span></a>
              </li>

            </ul>
          </nav>
        </div>
      </aside>
      <!-- end sidebar-->


      <div class="sidebar-layout-obfuscator"></div>
      <!-- Main section-->
      <main class="main-container">
      <!-- Page content-->