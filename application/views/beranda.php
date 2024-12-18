<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?= $judul; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?= base_url('assets/front/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/front/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?= base_url('assets/front/') ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url('assets/front/') ?>css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="<?= base_url('auth') ?>"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="<?= base_url() ?>" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?= base_url() ?>" class="navbar-brand p-0">
                    <h1 class="m-0"><?= isset($konfig->judul_website) ? $konfig->judul_website : 'Website'; ?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <a href="<?= base_url() ?>" class="nav-item nav-link" style="color: purple;">Home</a>
        
        <!-- Validasi variabel $kategori -->
        <?php if (!empty($kategori) && is_array($kategori)): ?>
            <?php foreach ($kategori as $kate): ?>
                <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="nav-item nav-link" style="color: purple;">
                    <?= $kate['nama_kategori'] ?>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Tambahkan opsi jika kategori kosong -->
            <a href="#" class="nav-item nav-link disabled" style="color: purple;">No Categories</a>
        <?php endif; ?>
    </div>
</div>


            </nav>
        </div>
        <!-- Navbar & Hero End -->
 

        <!-- Header Start -->
        <div class="container-fluid">
        <div class="container-fluid p-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-inner" style=" width: 100%;   ">
            <?php $no=1; foreach ($caraousel as $aa): ?>
                <div class="carousel-item <?php if($no==1){echo 'active';} ?>">
                    <img src="<?= base_url('assets/Modernize/upload/caraousel/' . $aa['foto']) ?>" class="d-block w-100" alt="carousel image">
                </div>
            <?php $no++; endforeach; ?>
        </div>
        
        <!-- Controls for carousel (next and previous buttons) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
 
</div>

</div>

        <!-- Header End -->


        <!-- Blog Start -->
        <div class="container-fluid blog py-4"> <!-- Ubah padding agar lebih kecil -->
    <div class="container py-4"> <!-- Ubah padding agar lebih kecil -->
        <div class="mx-auto text-center mb-4" style="max-width: 800px;"> <!-- Lebar maksimum lebih kecil -->
            <h5 class="section-title px-3">Welcome to aura land</h5>
        </div>
        <div class="row g-3 justify-content-center"> <!-- Spasi antar kolom lebih kecil -->
            <?php foreach ($konten as $uu): ?>
                <div class="col-lg-2 col-md-3"> <!-- Kolom lebih kecil -->
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="<?= base_url('assets/Modernize/upload/konten/' . $uu['foto']) ?>" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-3"> <!-- Padding lebih kecil -->
                            <a href="#" class="h5" style="font-size: 16px;"><?= $uu['judul'] ?></a> <!-- Ukuran teks judul lebih kecil -->
                            <div class="blog-meta mt-2" style="font-size: 14px;"> <!-- Ukuran teks metadata lebih kecil -->
                                <small class="me-3"><i class="fa fa-user text-primary"></i><?= $uu['nama'] ?></small>
                                <small><i class="fa fa-folder text-primary"></i><?= $uu['nama_kategori'] ?></small>
                            </div>
                            <a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="btn btn-primary rounded-pill py-1 px-3 mt-3" style="font-size: 14px;">Read More</a> <!-- Tombol lebih kecil -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

        <!-- Blog End -->

        <!-- Subscribe Start -->
        <!-- <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Subscribe End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h3 class="mb-4 text-white"><?= isset($konfig->judul_website) ? $konfig->judul_website : 'Website'; ?></h3>
                            <p>
                                <?= $konfig->profil_website; ?>
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h3 class="mb-4 text-white">Contac Us</h3>
                            <div class="d-flex">
                                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                                <div class="pl-3">
                                    <h5 class="text-white">Alamat</h5>
                                    <p><?= $konfig->alamat; ?></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <h4 class="fa fa-envelope text-primary"></h4>
                                <div class="pl-3">
                                    <h5 class="text-white">Email</h5>
                                    <p><?= $konfig->email; ?></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <h4 class="fa fa-phone-alt text-primary"></h4>
                                <div class="pl-3">
                                    <h5 class="text-white">Phone</h5>
                                    <p><?= $konfig->no_wa; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h3 class="mb-4 text-white">Support</h3>
                            <a href="<?= base_url() ?>"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <?php foreach ($kategori as $kate): ?>
                                <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                                    <i class="fas fa-angle-right me-2"></i>
                                    <?= $kate['nama_kategori'] ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Auraangell</a>, All right reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/front/') ?>lib/easing/easing.min.js"></script>
        <script src="<?= base_url('assets/front/') ?>lib/waypoints/waypoints.min.js"></script>
        <script src="<?= base_url('assets/front/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/front/') ?>lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="<?= base_url('assets/front/') ?>js/main.js"></script>
    </body>

</html>