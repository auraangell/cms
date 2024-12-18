
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/Modernize/')?>/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?=base_url('assets/Modernize/')?>/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <h4 class="mb-2">Welcome to CMS</h4>
                <form class="mb-3" action="<?= base_url('auth/login') ?>" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="username">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" id="username" class="form-control">
                    </div>
                    <button href="<?= base_url('auth/login') ?>" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Login</button>
                    <div id="ngilang">
                        <?= $this->session->flashdata('alert') ?>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?=base_url('assets/Modernize/')?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url('assets/Modernize/')?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>