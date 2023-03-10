<?php
include "functions.php"
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
    <title>Toastr - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->
</head>
<style>
    .del{
        position: relative;
        left: 5px;
    }
</style>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

   <?php
   include "nav.php";
   ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                       
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <div class="card">
                <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="users-list-filter">
                                <form>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                               
                                            <fieldset class="form-group">
                                                    <select class="form-control" id="list-district">
                                                    <option value="">-- Select District --</option>
                                                    <?php
                                                        $district=getdistrict();
                                                       foreach($district as $disst){
                                                        ?>
                                                        <option value="<?php echo $disst["id"];?>"><?php echo $disst["name"];?></option>
                                                    <?php }; ?>
                                                    </select>
                                                </fieldset>
                                                </fieldset>
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-4" style="display:none" id="ggg">
                                                <fieldset class="form-group">
                                                <input type="search" class="form-control" placeholder="Search Address" id="search">
                                                </fieldset>
                                            </div>
                                            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               

                <div class="container">
                    <div class="row">
                        <div class="col">
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                    <th>Selected District</th>
                                    <th>Long.</th>
                                    <th>Lat.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="disttab">
                               
                            </tbody>
                        </table>
                        </div>


                        <div class="col">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>All District Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="addrtab">
                            </tbody>
                        </table>
                  
                        </div>
                    </div>
                </div>

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
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/extensions/toastr.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="allloc.js"></script>
    <script src="../app-assets/js/jquery-3.6.0.min.js"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>