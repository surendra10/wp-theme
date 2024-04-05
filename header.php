<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Nandi Group</title>
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.png">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/ranger_slider.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/scroll_button.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/custom_spacing.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/colorfulTab.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/animated_barfiller.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">


<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="home_2">

    <!--==========================
        HEADER 2 START
    ===========================-->
    <header class="header_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 d-none d-md-block">
                    <div class="header_left">
                        <p><i class="fa fa-truck"></i> Free Express shipping over $200!</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="header_right">
                        <ul>
                            <li>
                               <!--  <select class="select_js">
                                    <option value="">English</option>
                                    <option value="">Japanes</option>
                                    <option value="">Korean</option>
                                    <option value="">Urdu</option>
                                    <option value="">Chines</option>
                                    <option value="">Arabic</option>
                                </select> -->
                                <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i> </a>
                            </li>
                            <li>
                                <!-- <select class="select_js">
                                    <option value="">$ USD</option>
                                    <option value="">ট BDT</option>
                                    <option value="">€ EUR</option>
                                    <option value="">£ GBP</option>
                                    <option value="">¥ JPY</option>
                                </select> -->
                                 <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i> </a>
                            </li>
                            <!-- <li>
                                <a href="dashboard.html">
                                    <span><img src="assets/images/user_icon_2.png" alt="user"
                                            class="img-fluid w-100"></span>
                                    My Account
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==========================
        HEADER 2 END
    ===========================-->


    <!--==========================
        MENU 2 START
    ===========================-->
    <nav class="navbar navbar-expand-lg main_menu main_menu_2">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/masalaclub/">
                <?php  $logoimage = get_header_image(); ?>
                <img src="<?php  echo $logoimage;  ?>" >
                <!-- <h3 style="color:#ab162c;"><strong>LOGO</strong></h3> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars bar_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- <ul class="navbar-nav m-auto"> -->
               
                    <?php
                        wp_nav_menu(array('theme-location' => 'primary', 'menu_class' => 'navmenu'))
                    
                    ?>
                
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">RESTAURANTS <i class="fal fa-plus"></i></a>
                        <ul class="droap_menu">
                            <li><a href="index.html">Wiesloch</a></li>
                            <li><a  href="#">Heidelberg</a></li>
                           
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Home </a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About </a></li>

                     <li class="nav-item">
                        <a class="nav-link" href="#">Food <i class="fal fa-plus"></i></a>
                         <ul class="droap_menu">
                            <li><a href="index.html">Vegetable Korma</a></li>
                            <li><a  href="#">Biryani</a></li>
                           
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Services <i class="fal fa-plus"></i></a>
                        <ul class="droap_menu">
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Catering</a></li>
                            <li><a href="#">Delivery Service</a></li>
                           
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">RESERVATION</a>
                      
                    </li> -->

                      <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Order Online <i class="fal fa-plus"></i></a>
                        <ul class="droap_menu">
                            <li><a href="index.html">Wiesloch</a></li>
                            <li><a  href="#">Heidelberg</a></li>
                           
                        </ul>
                    </li> -->

                   <!--  <li class="nav-item">
                        <a class="nav-link" href="blogs.html">Blog <i class="fal fa-plus"></i></a>
                        <ul class="droap_menu">
                            <li><a href="blogs.html">blogs</a></li>
                            <li><a href="#">blog details</a></li>
                        </ul>
                    </li> -->
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Pages <i class="fal fa-plus"></i></a>
                        <ul class="droap_menu">
                            <li><a href="chefs.html">chefs</a></li>
                            <li><a href="#">chef details</a></li>
                            <li><a href="cart_view.html">cart view</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="dashboard.html">dashboard</a></li>
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="payment.html">payment</a></li>
                            <li><a href="reservation.html">reservation</a></li>
                            <li><a href="service.html">service</a></li>
                            <li><a href="service_details.html">service details</a></li>
                            <li><a href="sign_in.html">sign in</a></li>
                            <li><a href="sign_up.html">sign up</a></li>
                            <li><a href="forgot_password.html">forgot password</a></li>
                            <li><a href="privacy_policy.html">privacy policy</a></li>
                            <li><a href="terms_condition.html">terms & condition</a></li>
                            <li><a href="error.html">error/404</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="branch.html">Branch</a>
                    </li> -->
              <!--  </ul> -->
                <ul class="menu_right">
                    <li>
                        <a class="menu_order common_btn" href="#">
                            <span class="icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart_icon_2.png" alt="order" class="img-fluid w-100">
                            </span>
                            order Online
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--==========================
        MENU 2 END
    ===========================-->