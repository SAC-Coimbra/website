<!DOCTYPE html>
<html lang="pt-PT">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php echo get_bloginfo('name'); ?></title>

  <!-- Mobile Metas -->
  <meta name= "viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts  -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

  <!-- Libs and Plugins CSS -->
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/include/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/include/animations/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/include/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/style.css">
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/mobile.css">
  <link rel="stylesheet" href"<?php echo get_home_url(); ?>/wp-content/themes/website/include/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href"<?php echo get_home_url(); ?>/wp-content/themes/website/include/owl-carousel/css/owl.theme.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/website/css/theme.css">

</head>
  <body data-spy="scroll" data-target="#main-navbar">
  <div class="body">
    <?php get_header( 'home' );?>
  </div>

  <section id="about-section" class="page bg-style1">
            <!-- Begin page header-->
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2>Sobre</h2>
                        <hr class="small">

                        <!-- <div class="devider"></div> -->
                    </div>
                </div>
            </div>
            <!-- End page header-->

            <!-- Begin rotate box-1 -->
            <div class="rotate-box-1-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Quem somos?</h4>
                                    <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                                <div class="rotate-box-info">
                                    <h4>O que fazemos?</h4>
                                    <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Porque fazemos?</h4>
                                    <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                <div class="rotate-box-info">
                                    <h4>Desde quando?</h4>
                                    <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                </div>
                            </a>
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
            <!-- End rotate box-1 -->

            <div class="extra-space-l"></div>
      </section>




  <!-- Plugins JS -->
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/stellar/js/jquery.stellar.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/animations/js/wow.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/waypoints.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/classie.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/jquery.easing.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/jquery.counterup.min.js"></script>
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/include/smoothscroll.js"></script>

  <!-- Theme JS -->
  <script src="<?php echo get_home_url(); ?>/wp-content/themes/website/js/theme.js"></script>
</body>
