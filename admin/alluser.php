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
    <title>List View - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->
    <!-- onclick='dele(".$checked[$i]['theid'].")' -->
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
           
            <div class="content-body">
                <div class="card">
                <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="users-list-filter">
                                <form>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <label for="users-list-type">Acc_type</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-type" >
                                                        <option value="">All</option>
                                                        <option value="landlord">Landlord</option>
                                                        <option value="customer">Customer</option>
                                                        <option value="agent">Agents</option>
                                                    </select>
                                                </fieldset>
                                            </div>

                                            
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <label for="users-list-district">District</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-district">
                                                    <option value="">-- Select District --</option>
                                                    <?php
                                                        $district=getdistrict();
                                                       foreach($district as $disst){
                                                        ?>
                                                        <option value="<?php echo $disst["id"];?>"><?php echo $disst["name"];?></option>
                                                    <?php }; ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <label for="users-list-address">Address</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-address">
                                                        <option value="" class="address">-- Select Address --</option>
                                                        
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <!-- <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view" >
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>First-name</th>
                                    <th>last-name</th>
                                    <th>Username</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Acc_type</th>            
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                
                               
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">User Information</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">

                                <div class="data-fields px-2 mt-3">
                                <form id="formm" action="">
                                    <div class="row">
                                        
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-fname">First-name</label>
                                            <input type="text" class="form-control" id="data-fname">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-lname">Last-name</label>
                                            <input type="text" class="form-control" id="data-lname">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-username">Username</label>
                                            <input type="text" class="form-control" id="data-username">
                                        </div>

                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-username">Gender</label>
                                           <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="gender" value="male"  class="form-control ">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">Male</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="gender" value="female" class="form-control ">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">Female</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                           </ul>
                                        </div>

                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-numba">Phone-Number</label>
                                            <input type="hidden" id="hidden">
                                            <input type="number" class="form-control" id="data-numba">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-district">District <span style="color:rgb(240, 63, 63);">*District name can only be changed from locations</span> </label>
                                            <select class="form-control" id="data-district">
                                                    <option value="">-- Select District --</option>
                                                    <?php
                                                        $district=getdistrict();
                                                       foreach($district as $disst){
                                                        ?>
                                                        <option value="<?php echo $disst["id"];?>"><?php echo $disst["name"];?></option>
                                                    <?php }; ?>
                                                    </select>
                                        </div>
                                         <div class="col-sm-12 data-field-col">
                                            <label for="data-address">Address <span style="color:rgb(240, 63, 63);">*Address name can only be changed from locations</span> </label>
                                                <select class="form-control" id="data-address">
                                                <option value="">-- Select Address --</option> 
                                               
                                                </select>
                                        </div>
                                        
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-email">Email</label>
                                            <input type="text" class="form-control" id="data-email">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-acc_type">Acc Type</label>
                                            <select class="form-control" id="data-acc_type">
                                                <option value="agent">Agent</option>
                                                <option value="landlord">Landlord</option>
                                                <option value="customer">Customer</option>
                                               
                                            </select>
                                        </div>
                                        </form>
                                        <!-- form end -->
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary updating">Update</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

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
    <script src="../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <script>
        // console.log($('table'))
    </script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/extensions/toastr.js"></script>
    <script src="../app-assets/js/scripts/ui/data-list-view.js"></script>
    <script src="ajax.js"></script>
    <!-- <script src="../app-assets/js/scripts/extensions/sweet-alerts.js"></script> -->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>