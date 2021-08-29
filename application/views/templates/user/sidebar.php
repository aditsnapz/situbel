<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-navy elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-navy">
      <img src="<?= base_url() ?>assets/dist/img/Undip_favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>SITUBEL</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
					<a href="#" class="d-block"><?= $this->session->userdata('session_user')['nama'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="active nav-item">
            <a href="<?= base_url('user/Dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('user/livingcost') ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Living Cost
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('user/tuitionfee') ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Tuition Fee
              </p>
            </a>
          </li>
					<?php if(@$this->session->userdata('session_user')['status'] == 2) { ?>
					
					<li class="nav-item">
            <a href="<?= base_url('user/insurance') ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Insurance
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('user/disemination') ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Disemination
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('user/settlement') ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Settlement Allowance
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('user/entrance') ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Entrance Fee
              </p>
            </a>
          </li>
					<?php } ?>

					<li class="nav-item">
            <a href="<?= base_url('user/Profile') ?>" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
					
					
		       
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
