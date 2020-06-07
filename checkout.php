<?php
    session_start();
    if (!(isset($_SESSION['total']) && $_SESSION['total'] > 0))
        header("location:home.php");
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="icon" href="images/favicon.png" />
     <title>MediStore</title>
     <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
     <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/custom.js"></script>
 </head>

 <body>
     <!-- Header-->
     <?php
        if (isset($_SESSION['type']))
            include('Frames\headerFrameWithoutLogin.php');
        else
            include('Frames\headerFrameLoginSignup.html');
        ?>

     <div class="container">
         <div class="row" id="search_manu" style="margin-top: 10px">
             <div class="col-md-6 col-xs-12">
                 <!--             SEARCHING FORM            -->
                 <form name="quick_find" method="GET" action="search_result.php">
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" placeholder="Enter search keywords here" name="s" class="form-control input-lg" id="inputGroup" />
                             <span class="input-group-addon">
                                 <input type="submit" id="x" value="Search" name="search" style="color:white ;background-color:#8EBE08;border:none;" />

                             </span>
                         </div>
                     </div>
                 </form>
             </div>

             <div class="col-md-6 col-xs-12">

                 <form name="manufacturers">
                     <div class="form-group">
                         <div class="">

                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>


     <div class="main-content">
         <div class="container checkout">
             <div class="breadcrumbs">
                 <a href="home.html"><i class="fa fa-home"></i></a>
                 <a href="checkout.php">Checkout</a>
             </div>
             <h2 class="text-center text-uppercase text-bold">checkout</h2>
             <hr class="small-line">
             <div id="accordion" class="panel-group margin-top">


                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">Step 1: Delivery Details <i class="fa fa-caret-down"></i></a></h4>
                     </div>
                     <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="">
                         <div class="panel-body">

                             <!--order form-->
                             <form class="form-horizontal" action="features/checkout_process.php" method="post">
                                 <div class="form-group required">
                                     <label for="input-shipping-firstname" class="col-sm-2 control-label"> Name</label>
                                     <div class="col-sm-10">
                                         <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" name="name" required>
                                     </div>
                                 </div>


                                 <div class="form-group required">
                                     <label for="input-shipping-address-1" class="col-sm-2 control-label">Address</label>
                                     <div class="col-sm-10">
                                         <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Your Address" name="address" required>
                                     </div>
                                 </div>

                                 <div class="form-group required">
                                     <label for="input-shipping-city" class="col-sm-2 control-label">City</label>
                                     <div class="col-sm-10">
                                         <input type="text" class="form-control" id="input-shipping-city" placeholder="City" name="city" required>
                                     </div>
                                 </div>
                                 <div class="form-group required">
                                     <label for="input-shipping-postcode" class="col-sm-2 control-label">Postal Code</label>
                                     <div class="col-sm-10">
                                         <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code" name="pc" required>
                                     </div>
                                 </div>


                                 <div class="form-group required">
                                     <label for="input-shipping-postcode" class="col-sm-2 control-label">Mobile Phone</label>
                                     <div class="col-sm-10">
                                         <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Phone Number" name="phone" required="">
                                     </div>
                                 </div>


                                 <div class="form-group required">
                                     <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                                     <div class="col-sm-10">
                                         <select class="form-control" id="input-shipping-country" name="country_id">
                                             <option value=""> --- Please Select --- </option>
                                             <option value="244">Aaland Islands</option>
                                             <option value="1">Afghanistan</option>
                                             <option value="2">Albania</option>
                                             <option value="3">Algeria</option>
                                             <option value="4">American Samoa</option>
                                             <option value="5">Andorra</option>
                                             <option value="6">Angola</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="form-group required">
                                     <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                                     <div class="col-sm-10">
                                         <select class="form-control" id="input-shipping-zone" name="state">
                                             <option value=""> --- Please Select --- </option>
                                             <option value="3513">Aberdeen</option>
                                             <option value="3514">Aberdeenshire</option>
                                             <option value="3515">Anglesey</option>
                                             <option value="3516">Angus</option>
                                             <option value="3517">Argyll and Bute</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="buttons">
                                     <div class="pull-right">
                                         <input type="submit" class="btn btn-primary" id="button-payment-method" value="Submit" name="checkoutButton">
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
                 

             </div>



         </div>
     </div>

     <!--Footer-->
     <?php include('Frames\footer.html'); ?>

 </body>

 </html>