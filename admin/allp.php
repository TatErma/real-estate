<?php
include "functions.php";
?>
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
    <title>Shop - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/select/select2.min.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/noui-slider.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-ecommerce-shop.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout content-detached-left-sidebar ecommerce-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-left-sidebar" data-layout="dark-layout">
<?php
include "nav.php";
?>
 
 <!-- BEGIN: Content-->
 <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- Ecommerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                                        </button>
                                        <div class="search-results" id="rno">
                                       
                                        </div>
                                    </div>
                                    <div class="view-options">
                                        <!-- <select class="price-options form-control" id="ecommerce-price-options">
                                            <option>Asc/Desc</option>
                                            <option value="1">Lowest</option>
                                            <option value="2">Highest</option>
                                        </select> -->
                                        <div class="view-btn-option">
                                            <button class="btn btn-white view-btn grid-view-btn active">
                                                <i class="feather icon-grid"></i>
                                            </button>
                                            <button class="btn btn-white list-view-btn view-btn">
                                                <i class="feather icon-list"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Content Section Starts -->
                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="shop-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- Ecommerce Search Bar Starts -->
                    <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Search here">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Search Bar Ends -->

                    <!-- Ecommerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                    <!-- <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html"> <img class="img-fluid" src="../app-assets/images/pages/eCommerce/4.png" alt="img-placeholder"></a>
                                </div>
                                <div class="card-body">
                                <div class="item-wrapper">
                                        
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                            Property Name
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-wrapper">
                                        
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $49.99
                                            </h6>
                                        </div>
                                    </div>
                                   
                                    <div>
                                        <p class="item-description">
                                         Extra Notes
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                <div class="item-wrapper">
                                        
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                Property Name
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-wrapper">
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $49.99
                                            </h6>
                                        </div>
                                    </div>
                                     <div class="wishlist">
                                      <a href=""><i class="fa fa-home mr-25">View Property</i></a> 
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </section> 
                    <!-- Ecommerce Pagination Ends -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                            </div>
                        </div>
                        <span class="sidebar-close-icon d-block d-md-none">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="price-slider">
                                    <div class="price-slider-title mt-1">
                                        <h6 class="filter-title mb-0">Price Range</h6>
                                    </div>
                                    <div class="price-slider">
                                        <div class="price_slider_amount mb-2">
                                        </div>
                                        <div class="form-group">
                                            <div class="slider-sm my-1 range-slider" id="price-slider"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Price Range -->

                                <hr>
                                <!-- Rating section starts -->
                                <div id="ratings">
                                    <div class="ratings-title mt-1 pb-75">
                                        <h6 class="filter-title mb-0">Location</h6>
                                    </div>
                                    
                                    <fieldset class="form-group">
                                           
                                           <select class="form-control" id="users-list-district" name="distr">
                                                    <option value="">-- Select District --</option>
                                                    <?php
                                                        $district=getdistrict();
                                                       foreach($district as $disst){
                                                        ?>
                                                        <option value="<?php echo $disst["id"];?>"><?php echo $disst["name"];?></option>
                                                    <?php }; ?>
                                                    </select>
                                    </fieldset>

                                                <fieldset class="form-group">
                                           <label for="basicselect2">Address</label>
                                                    <select class="form-control" id="Address">
                                                        <option value="">-- Select Address --</option>
                                                        
                                                       
                                                    </select>
                                                </fieldset>

                                                
                                </div>
                                <!-- Rating section Ends -->
                                <hr>
                                <div id="ratings">
                                    <div class="ratings-title mt-1 pb-75">
                                        <h6 class="filter-title mb-0">Property Owner</h6>
                                    </div>
                                    
                                    <fieldset class="form-group">
                                   
                                             <select class="form-control" id="prop-owner" name="propowner" required>
                                                    <option value="">-- Select Property Owner--</option>
                                                    <?php
                                                        $owners=landlords();
                                                        // die(var_dump($owners));
                                                       foreach($owners as $own){
                                                        ?>
                                                        <option value="<?php echo $own["id"];?>"><?php echo $own["name"]." ".$own["lname"];?></option>
                                                    <?php }; ?>
                                                    </select>
                                     </fieldset>
                                </div>
                                <hr>
                                <!-- Categories Starts -->
                                <div id="product-categories">
                                    <div class="product-category-title">
                                        <h6 class="filter-title mb-1">Property Type</h6>
                                    </div>
                                    <ul class="list-unstyled categories-list">
                                    <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="" checked id="both">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">All</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="rent" id="rent">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Rent</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="sale" id="sale">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> Sale</span>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <!-- Categories Ends -->
                                <!-- <hr> -->
                                <!-- Brands -->
                                <!-- <div class="brands">
                                    <div class="brand-title mt-1 pb-1">
                                        <h6 class="filter-title mb-0">Features</h6>
                                    </div>
                                    <div class="brand-list" id="brands">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <input type="text" id="feature" class="form-control" required placeholder="add feature" aria-describedby="button-addon2">
                                                        <div class="input-group-append" id="button-addon2">
                                                            <button class="btn btn-primary" type="button" onclick="addfeature()">Add</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                      </div>
                                               
                                    </div> -->
                                </div>
                                <!-- /Brand -->
                                
                                <hr>
                                <!-- Clear Filters Starts -->
                                <div id="clear-filters">
                                    <button class="btn btn-block btn-primary">CLEAR ALL FILTERS</button>
                                </div>
                                <!-- Clear Filters Ends -->

                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->

                </div>
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
    <script src="../app-assets/vendors/js/ui/prism.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/wNumb.js"></script>
    <script src="../app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
    <script>
        
        
        function addfeature(){
            var fet=$("#feature").val();
            var thefet=`<div class="input-group" style="margin-top:5px">
                        <input type="text" class="form-control" aria-describedby="button-addon2" value="${fet}" class="allfet">
                        <div class="input-group-append" id="button-addon2">
                            <button class="btn btn-danger" type="button" onclick="empty()">x</button>
                        </div>
                    </div>`
             $("#brands").append(thefet);
             document.getElementById("feature").value="";
            
        }
       
    </script>
    <script src="ajax2.js"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>