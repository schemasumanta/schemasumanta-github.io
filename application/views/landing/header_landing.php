<!doctype html>
<?php foreach ($landing['profil'] as $key): ?>
<?php endforeach ?>
<style type="text/css">
    .bungkusmenu{
       background: #38a4ff;
   }
</style>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $key->nama_aplikasi; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().$key->logo_aplikasi ?>">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/price_rangs.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url().$key->logo_aplikasi?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
         <div class="headder-top header-sticky">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url().$key->logo_aplikasi ?>" alt=""></a>
                    </div>  
                </div>
                <div class="col-lg-9 col-md-9 mt-3">
                 <div class="d-none f-right d-lg-block">
                    <?php if ($this->session->login==TRUE) { ?>
                        <?php if ($this->session->level_user=="admin"): ?>

                        <a href="<?php echo base_url('kandidat/login') ?>" class="genric-btn info e-large">Admin Area</a>
                            
                        <?php endif ?>

                        <?php if ($this->session->level_user=="kandidat"): ?>
                            
                        <a href="<?php echo base_url('kandidat/dashboard') ?>" class="genric-btn info e-large">Dashboard Kandidat</a>
                            
                        <?php endif ?>

                        <?php if ($this->session->level_user=="job_provider"): ?>
                            
                        <a href="<?php echo base_url('kandidat/login') ?>" class="genric-btn info e-large">Member Area</a>
                            
                        <?php endif ?>



                    <?php }else{ ?>
                        <a href="<?php echo base_url('kandidat/login') ?>" class="genric-btn info e-large">Masuk</a>
                    <a href="#" class="genric-btn default circle arrow">Untuk Perusahaan<span class="lnr lnr-arrow-right"></span></a>

                    <?php } ?>

                </div>
            </div>

        </div>

    </div>

    <div class="container mt-4 col-md-12 text-center bungkusmenu">
        <!-- Main-menu -->
        <div class="main-menu " >
            <nav class="d-none d-lg-block">
                <ul id="navigation">
                    <li ><a class="text-light" href="index.html">Home</a></li>
                    <li><a class="text-light" href="job_listing.html">Find a Jobs </a></li>
                    <li><a class="text-light" href="about.html">About</a></li>
                    <li><a class="text-light" href="#">Page</a>
                        <ul class="submenu">
                            <li><a class="text-light" href="blog.html">Blog</a></li>
                            <li><a class="text-light" href="single-blog.html">Blog Details</a></li>
                            <li><a class="text-light" href="elements.html">Elements</a></li>
                            <li><a class="text-light" href="job_details.html">job Details</a></li>
                        </ul>
                    </li>
                    <li><a class="text-light" href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>          
        <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
        </div>

    </div>

</div>
</div>
</header>