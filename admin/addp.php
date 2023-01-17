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
    <title>File Uploader - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <style>
           #ll{
            /* border: 1px solid; */
            width: auto;
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            overflow: hidden;
            }
            .hh{
            /* width:88px; */
            position: relative;
            align-items: flex-end;
            /* width: fit-content; */
            min-width: 120px;
            max-width: 500px;
            background:rgb(96, 96, 107);
            border:none;
            margin-top:2px;
            border-radius:5px;
            /* color:white; */
            }
            .gg{
            position: relative;
            right:17.5px;
            /* height: 18px; */
            /* top:2px; */
            text-align: start;
            float:right;
            margin-top:2px;
            border:none;
            border-radius:5px;
            }
            .ff{
                /* background:blue; */
                height:30px;
                width:auto;
            }
           
    </style>
    <!-- END: Custom CSS-->

</head>
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
            <!--  -->
            <div class="content-body">
                             <!-- // Basic multiple Column Form section start -->
                             <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">REGISTER PROPERTY</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="POST" action="processor.php">
                                            <?php
                                            //  $owners=landlords();
                                            //  die(var_dump($owners));
                                            ?>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="Property Name" name="propname" required >
                                                            <label for="first-name-column">Property Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
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
                                                            <label for="last-name-column">Property Owner</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                        <select class="form-control" id="users-list-district" name="propdistrict" required>
                                                    <option value="">-- Select District--</option>
                                                    <?php
                                                        $district=getdistrict();
                                                       foreach($district as $disst){
                                                        ?>
                                                        <option value="<?php echo $disst["id"];?>"><?php echo $disst["name"];?></option>
                                                    <?php }; ?>
                                                    </select>
                                                    <label for="users-list-district">Property District</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="country-floating" class="form-control" name="propaddress" placeholder="Property Address" required>
                                                            <label for="country-floating">Property Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                        <select class="form-control" id="SR" name="SR">
                                                        <option value="sale">Sale</option>
                                                        <option value="rent">Rent</option>
                                                    
                                                        </select>
                                                            <label for="company-column">For Sale/Rent</label>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="number" id="cost" class="form-control" name="cost" placeholder="Property Cost">
                                                            <label for="cost">Cost</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-12 col-md-6 " id="hiddendiv" style="display:none" >
                                                    <div class="col-md-6 ">
                                                        <div class="form-label-group">
                                                        <input type="number" class="form-control" placeholder="No of rooms" name="NR" id="NR" value=0 required>
                                                       <label for="NR">Available Rooms</label>
                                                       </div>
                                                    </div>
                                                       <div class="col-md-6 ">
                                                           <div class="form-label-group">
                                                        <input type="number" class="form-control" placeholder="Available Rooms" name="AR" id="AR" value=0 required>
                                                        <label for="AR">Available Rooms</label>
                                                    </div>
                                                   </div>
                                                    </div>
                                                    <div class="form-group row col-12">
                                                    <div class="col-md-6 ">
                                                    <div class="input-group">
                                                        <input type="text" id="feature" class="form-control" placeholder="add feature" aria-describedby="button-addon2" >
                                                        <div class="input-group-append" id="button-addon2">
                                                            <button class="btn btn-primary" type="button" id="addf">Add Feature</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div id="ll">
                                                            
                                                        </div>
                                                    </div>
                                                        
                                                    <div class="col-12" style="margin-top:15px">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1" name="addprop">Register</button>
                                                        <!-- <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->

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
    <script src="../app-assets/vendors/js/ui/prism.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/extensions/dropzone.js"></script>
    
    <script>
        $("#SR").change(function(){
            var vals=$("#SR").val();
            if(vals=="rent"){
                // console.log($("#hiddendiv").css("display","block"))
                $("#hiddendiv").css("display","block")
            }else if(vals=="sale"){
                $("#hiddendiv").css("display","none")
                $("#NR").val(0); 
                $("#AR").val(0);  
            }
            
        })

        $("#addf").click(function(){
            var nn=$("#feature").val();
            var x=`<div class="ff"><input type="text" class="hh" value="${nn}" style="width:${nn.length}ch" name="hh[]">
                <button class="gg btn-danger" onclick="this.parentElement.remove()">x</button>`
             $("#ll").append(x);
             document.getElementById("feature").value="";
        })
    </script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>