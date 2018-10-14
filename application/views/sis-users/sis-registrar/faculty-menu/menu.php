        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url('application/assets/img/avatar_1.jpg'); ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $this->session->userdata('u_full_name'); ?></h1>
              <p><?php echo $this->session->userdata('designation'); ?></p>
            </div>
          </div>

          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="<?php echo site_url('faculty_dashboard'); ?>"> <i class="icon-home"></i>Home </a></li>
          </ul>
        </nav>