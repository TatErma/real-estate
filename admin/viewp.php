<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Product Details - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-ecommerce-details.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns ecommerce-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

   <?php
   include "functions.php";
   $id=$_POST['id'];
   $prop=prop($id);
//    die(var_dump($prop[0][9][0]));
   include "nav.php";
   
   ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5 mt-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="../app-assets/images/elements/macbook-pro.png" class="img-fluid" alt="product image">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    
                                    <div class="form-label-group">
                                        <input type="text" id="prop" class="form-control" name="prop" placeholder="Property name" required value="<?php echo $prop[0]['pname']; ?>">
                                        <label for="prop">Property name</label>
                                    </div>
                                    <!-- <p class="text-muted">by Apple</p> -->
                                    <div class="ecommerce-details-price d-flex flex-wrap">

                                        <p class="text-primary font-medium-3 mr-1 mb-0">
                                            <input type="number" class="form-control" placeholder="Price" value="<?php echo $prop[0]['cost']; ?>">
                                        </p>
                                        <p class="font-weight-bold mb-25"> <i class="feather icon-info mr-50 font-medium-2"></i>Available
                                    </p>
                                        <!-- <span class="pl-1 font-medium-3 border-left">
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-secondary"></i>
                                        </span> -->
                                        <!-- <span class="ml-50 text-dark font-medium-1">424 ratings</span> -->
                                    </div>
                                    <hr>
                                    <div class="form-label-group">
                                    <h5>Location Info</h5>
                                    </div>
                                   
                                    <div class="form-label-group">
                                        <input type="text" id="district" class="form-control" name="district" placeholder="Property District" required value="<?php echo $prop[0]['pname']; ?>">
                                        <label for="district">Property District</label>
                                    </div>
                                    
                                    <div class="form-label-group">
                                        <input type="text" id="propaddress" class="form-control" name="propaddress" placeholder="Property Address" required value="<?php echo $prop[0]['address_name']; ?>">
                                        <label for="propaddress">Property Address</label>
                                    </div>
                                    
                                   
                                    <!-- <p class="font-weight-bold mb-25"> <i class="feather icon-info mr-50 font-medium-2"></i>Available
                                    </p> -->
                                   
                                    <hr>
                                    <div class="ecommerce-details-price d-flex flex-wrap">

                                        <p class="text-primary font-medium-3 mr-1 mb-0">Fea</p>
                                        <span class="pl-1 font-medium-3 border-left">
                                        <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="feature" class="form-control" placeholder="add feature" aria-describedby="button-addon2" >
                                            <div class="input-group-append" id="button-addon2">
                                                <button class="btn btn-primary" type="button" id="addf">Add Feature</button>
                                            </div>
                                        </div> 
                                    </div>
                                        </span>
                                       
                                    </div>
                                   
                                    <hr>
                                   

                                    <div class="d-flex flex-column flex-sm-row">
                                        <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-edit mr-25"></i>UPDATE</button>
                                        <button class="btn btn-outline-danger"><i class="feather icon-trash mr-25"></i>DELETE PROPERTY</button>
                                    </div>
                                    <hr>
                                    <!-- <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button> -->
                                </div>
                            </div>
                        </div>
                        <div class="item-features py-5">
                            <div class="row text-center pt-2">
                                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                    <div class="w-75 mx-auto">
                                        <i class="feather icon-award text-primary font-large-2"></i>
                                        <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                        <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i class="feather icon-clock text-primary font-large-2"></i>
                                        <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                        <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i class="feather icon-shield text-primary font-large-2"></i>
                                        <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                        <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-4 mb-2 text-center">
                                <h2>RELATED PRODUCTS</h2>
                                <p>People also search for this items</p>
                            </div>
                            <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide rounded swiper-shadow">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                Bowers Wilkins - CM10 S2 Triple 6-1/2" 3-Way Floorstanding Speaker (Each) - Gloss Black
                                            </p>
                                            <p>
                                                <small>by</small>
                                                <small>Bowers & Wilkins</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-2 py-75">
                                            <img src="../app-assets/images/elements/apple-watch.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-secondary"></i>
                                            </div>
                                            <p class="text-primary mb-0">$19.98</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rounded swiper-shadow">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                Alienware - 17.3" Laptop - Intel Core i7 - 16GB Memory - NVIDIA GeForce GTX 1070 - 1TB Hard Drive +
                                                128GB Solid State Drive - Silver
                                            </p>
                                            <p>
                                                <small>by</small>
                                                <small>Alienware</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-2 py-75">
                                            <img src="../app-assets/images/elements/beats-headphones.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-secondary"></i>
                                            </div>
                                            <p class="text-primary mb-0">$35.98</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rounded swiper-shadow">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                Canon - EOS 5D Mark IV DSLR Camera with 24-70mm f/4L IS USM Lens
                                            </p>
                                            <p>
                                                <small>by</small>
                                                <small>Canon</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-3 py-50">
                                            <img src="../app-assets/images/elements/macbook-pro.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-secondary"></i>
                                            </div>
                                            <p class="text-primary mb-0">$49.98</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rounded swiper-shadow">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                Apple - 27" iMac with Retina 5K display - Intel Core i7 - 32GB Memory - 2TB Fusion Drive - Silver
                                            </p>
                                            <p>
                                                <small>by</small>
                                                <small>Apple</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-2 py-75">
                                            <img src="../app-assets/images/elements/homepod.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-secondary"></i>
                                            </div>
                                            <p class="text-primary mb-0">$29.98</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rounded swiper-shadow">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                Bowers Wilkins - CM10 S2 Triple 6-1/2" 3-Way Floorstanding Speaker (Each) - Gloss Black
                                            </p>
                                            <p>
                                                <small>by</small>
                                                <small>Bowers & Wilkins</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-2 py-75">
                                            <img src="../app-assets/images/elements/magic-mouse.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-secondary"></i>
                                            </div>
                                            <p class="text-primary mb-0">$99.98</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide rounded swiper-shadow">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                Garmin - fenix 3 Sapphire GPS Watch - Silver
                                            </p>
                                            <p>
                                                <small>by</small>
                                                <small>Garmin</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-2 py-75">
                                            <img src="../app-assets/images/elements/iphone-x.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-secondary"></i>
                                            </div>
                                            <p class="text-primary mb-0">$59.98</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- app ecommerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="../app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-ecommerce-details.js"></script>
    <script src="../app-assets/js/scripts/forms/number-input.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>