
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>dashboard-admin</title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/Modernize/')?>assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?=base_url('assets/Modernize/')?>assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="<?= base_url(); ?>" class="text-nowrap logo-img">
            <img src="<?=base_url('assets/Modernize/')?>assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <?php $menu = $this->uri->segment(2) ?>
            <li class="sidebar-item <?php if($menu=='home'){ echo "active"; } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/home') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item <?php if($menu=='caraousel'){ echo "active"; } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/caraousel') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-cards"></i>
                </span>
                <span class="hide-menu">Caraousel</span>
              </a>
            </li>
            <li class="sidebar-item <?php if($menu=='kategori'){ echo "active"; } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/kategori') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-folders"></i>
                </span>
                <span class="hide-menu">Kategori</span>
              </a>
            </li>
            <li class="sidebar-item <?php if($menu=='konfigurasi'){ echo "active"; } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/konfigurasi') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-file-settings"></i>
                </span>
                <span class="hide-menu">Konfigurasi</span>
              </a>
            </li>
            <li class="sidebar-item <?php if($menu=='konten'){ echo "active"; } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/konten') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-message-plus"></i>
                </span>
                <span class="hide-menu">Konten</span>
              </a>
            </li>
            <li class="sidebar-item <?php if($menu=='user'){ echo "active"; } ?>">
              <a class="sidebar-link" href="<?= base_url('admin/user') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Admin</span>
              </a>
            </li>
          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?=base_url('assets/Modernize/')?>assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block"><?= $this->session->userdata('nama') ?></span>
                    <small class="text-muted"><?= $this->session->userdata('level') ?></small>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3"><?= $this->session->userdata('nama') ?></p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3"><?= $this->session->userdata('level') ?></p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="<?= base_url('auth/login') ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
   <div class="container-fluid">
    <div class="row">
      <?= $contents; ?>
    </div>
   </div>
  <script src="<?=base_url('assets/Modernize/')?>assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url('assets/Modernize/')?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets/Modernize/')?>assets/js/sidebarmenu.js"></script>
  <script src="<?=base_url('assets/Modernize/')?>assets/js/app.min.js"></script>
  <script src="<?=base_url('assets/Modernize/')?>assets/libs/simplebar/dist/simplebar.js"></script>
  <script>
    $('ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);
  </script>
</body>

</html>