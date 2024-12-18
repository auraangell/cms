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
    <style>
        #detail{
            display:flex;
            gap:200px;
        }

        #keterangan{
            display:flex;
            flex-direction: column;
            justify-content:center;
            gap:10px;
            align-items:flex-start;
            min-width:500px;
        }

        #judul{
            position:relative;
            bottom:20px;
            font-size:40px;
        }
    </style>

    <body>

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?= base_url() ?>" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i><?= isset($konfig->judul_website) ? $konfig->judul_website : 'Website'; ?></h1>
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
            <a href="#" class="nav-item nav-link disabled" style="color: purple;">No Categories</a>
        <?php endif; ?>
    </div>
</div>

            </nav>
        </div>
        <!-- Navbar & Hero End -->
</div>

</div>

        <!-- Header End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">aura land</h5>
                    <h2 class="mb-0">Deskripsi</h2>
                </div>
                <div class="testimonial-item text-center rounded pb-4" id="detail">
                    <div class="testimonial-img p-1">
                        <img src="<?= base_url('assets/Modernize/upload/konten/' . $konten->foto) ?>" class="img-fluid" width="2900" alt="Image">
                    </div>
                    <div id="keterangan">

                        <div style="margin-top: 20px; text-align: center;">
                            <h2 class="mb-0 text-center" id="judul" style="margin-top: 15px;"><?= $konten->judul; ?>
                            </h2>
                            <div class="testimonial-comment rounded p-4">
                            <p class="mb-5" align="left">
                                <?= $konten->keterangan; ?>
                            </p>
                        </div>
                            <div class="d-flex justify-content-center" style="margin-top: 10px;align-items:start;position:relative;bottom:20px;gap:20px;">
                                <h5 class="mr-3 text-center"><i class="fa fa-user text-primary"></i><?= $konten->nama; ?></h5>
                                <h5 class="mr-3 text-center">
                                    <i class="fa fa-folder text-primary"></i><?= $konten->nama_kategori; ?>
                                </h5>
                              
    <a href="<?=$konten->link?>" class="btn btn-primary" >
        Download <?= $konten->judul ?>
    </a>

                            </div>
                            <!-- <div class="d-flex justify-content-center" style="margin-top: 10px;">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div> -->
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>

        <!-- category list -->
        <div class="mb-5" style="padding-left: 15px;">
            <h2 class="mb-4">Categories</h2>
            <ul class="list-group list-group-flush">
                <?php foreach ($kategori as $kate): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Testimonial End -->

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