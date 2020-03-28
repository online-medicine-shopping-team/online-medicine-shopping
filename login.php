<?php

 session_start();
 include_once './Classes/Class_user.php';
 //include_once './Classes/sign_in_query.php';

 $errormessage="";//Because it inside if statement

 if(isset($_COOKIE['username'])&&isset($_COOKIE['password']))
 {
    $username=$_COOKIE['username'];
    $password=$_COOKIE['password'];
 }

 if(isset($_POST['login']))
 {
  
   $username=$_POST['username'];
   $password=$_POST['password'];


   if(is_numeric($username))
   {
       $errormessage="<font color='red'>Only Characters are allowed</font>";
   }

   else
   {

       $user_object =new Class_user();
       $user_object->set_username($username);
       $user_object->set_password($password);
       $return_value=$user_object->login();

       if($return_value){ 
        
        $_SESSION['id']=$user_object->get_id();
        $_SESSION['username']=$user_object->get_username();
        $_SESSION['password']=$user_object->get_password();
        $_SESSION['fullname']=$user_object->fullname;
        $_SESSION['phone']=$user_object->phone;
        $_SESSION['type']=$user_object->get_user_type();
        $_SESSION['userid']=$user_object->get_id();


       
       if($_SESSION['type']=='1')
        header("location:admin_home.php");
       else
       header("location:user_account.php");
       //echo $user_object->phone;
       exit();
        }
        else{
            echo $return_value;
              $errormessage="<font color='red'>Invalid username or password,Try again</font>";
              session_unset();//To Clear and Destroy the session if login again to disable the footer
        }

   }
 }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>Medicine Store</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>



        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.php" class="logo-text">
                        Medicine <span style="color:#39BAF0; font-size:40px">STORE</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.php" style="float: left" class="logo-text">
                            Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
                        </a>
                        <div id="nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: #8EBE08; border: none; margin-right: 0">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav site_nav_menu1"  >
                                    <li class="first " ><a href="home.php">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Guarantee</a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                    <li><a href="#">Shipping & Payment</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Add Medicine</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" >
                    <div id="top_right">
                        <div id="cart">
                            <div class="text">
                                <div class="img">
                                    <a href="cart.php"> <img class="img-responsive" src="images/cart.png" alt="" title="" width="26" height="27" /></a>
                                </div><span>Your cart:</span><span class="cart_total">€0.00</span><span class="cart_items">(0 items)</span>
                            </div> 
                        </div>
                       <div id="bottom_right">
                            <div class="row">
                                <div class="col-md-6 col-xs-6 wd_auto">
                                    <div class="left">
                                        <div class="login">
                            <a class="btn btn-default reg_button" href="login.php">Login</a> 
                            <a class="btn btn-default reg_button" href="#">Signup</a>
                            <a class="btn btn-default reg_button" href="#">Logout</a>
                                        </div>          
                                    </div>
                                </div> 
                                <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                    <div class="row">
                                        <div class=" pl-0 col-md-6 col-xs-6">

                                            <div class="dropdown btn-group">
                                               
                                            
                                            </div>
                                        </div>

                                        <div class="pl_0 col-md-6 col-xs-6">
                                            <div class="dropdown btn-group">
                                                
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> 


        <div class="container-fluid bg-color">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <nav  role="navigation" class="navbar navbar-inverse" id="nav_show">
                                <div id="nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav site_nav_menu1"  >
                                            <li class="first "><a href="home.php">Home</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Guarantee</a></li>
                                            <li><a href="#">Disclaimer</a></li>
                                            <li><a href="#">Shipping & Payment</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row" id="search_manu" style="margin-top: 10px">
                <div class="col-md-6 col-xs-12">

                     <!--             SEARCHING FORM            -->
                    <form  name="quick_find" method="GET" action="#">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" placeholder="Enter search keywords here" name="s" class="form-control input-lg" id="inputGroup"/>
                                <span class="input-group-addon">
                                <input type="submit" id="x" value="Search" style="color:white ;background-color:#8EBE08;border:none;" />
                                 
                                </span>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-6 col-xs-12">

                    <form  name="manufacturers"> 
                        <div class="form-group">
                            <div class="">
                                <select  style="font-size: 14px; background: #EAEAEA; border: none;" name="manufacturers_id"  size="1" class="input-lg form-control arrow-hide date_class">
                                    <option value="" selected="selected">Please Select manufacturers</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                    <option>lorem</option>
                                </select>
                                <!--                                <span class="input-group-addon" style="border-radius: 0px 20px 20px 0; padding: 0 15px">
                                                                    <a href="#" style="color:white" id="testt">
                                                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                                                    </a>
                                                                </span>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="site_content">
            <div class="container">
                <div class="row"><aside class="col-sm-3 hidden-xs" id="column-left">
                        <div class="list-group">
                            <a class="list-group-item" href="#">Login</a> 
                            <a class="list-group-item" href="#">Register</a> 
                            <a class="list-group-item" href="#">Forgotten Password</a>
                            <a class="list-group-item" href="#">My Account</a>
                            <a class="list-group-item" href="#">Address Book</a>
                            <a class="list-group-item" href="#">Wish List</a> 
                            <a class="list-group-item" href="#">Order History</a> 
                            <a class="list-group-item" href="#">Downloads</a>
                            <a class="list-group-item" href="#">Recurring payments</a>
                            <a class="list-group-item" href="#">Reward Points</a> 
                            <a class="list-group-item" href="#">Returns</a> 
                            <a class="list-group-item" href="#">Transactions</a> 
                            <a class="list-group-item" href="#">Newsletter</a>
                        </div>
                    </aside>
                    <div class="col-sm-9" id="content">            
                        <div class="breadcrumbs">
                            <a href="home.php"><i class="fa fa-home"></i></a>
                            <a href="login.php">Login</a>
                        </div>
                        <div class="contentText">
                            <h1>Welcome, Please Sign In</h1>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--<div class="well">!-->
                                    <h2>New Customer</h2>
                                    <p>I am a new customer.</p>
                                    <p>By creating an account at steroid-shop.to you will be able to shop faster, be up to date on an orders status,
                                        and keep track of the orders you have previously made.</p>
                                    <a class="btn btn-primary reg_button" href="">
                                        <i class="fa fa-caret-right"></i>&nbsp;
                                        Continue
                                    </a>
                                    <!--</div>!-->
                                </div>
                                <div style="border-left: 1px dashed #c1bebe" class="col-sm-6">
                                    <!--<div class="well">!-->
                                    <h2>Returning Customer</h2>
                                    <p>I am a returning customer</p>
                                    
                    <form enctype="multipart/form-data"  role="form" class="form-horizontal add_margin" action="login.php" method="post">
                                        <div class="form-group">
                                            <label  class="control-label col-sm-4">User Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control"placeholder="user name" value="" name="username" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-password" class="control-label col-sm-4">Password</label>
                                            <div class="col-sm-8">
                            <input type="password" class="form-control" id="input-password" placeholder="password" value="" name="password" required>

                                            </div>

                                        </div>
                                        <p class="cat_name"> <a href="#">Forgot Passowrd? Click here.</a></p>
                                        <input type="submit" value="Login" class="btn btn-primary reg_button"  name="login"/>
                                    <!--  <button class="btn btn-primary reg_button" value="Login" type="submit" name="login">
                                            <i class="fa fa-key"></i>&nbsp;
                                            Login                            
                                        </button>-->
                                    </form>
                                    <!--</div>!-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer1">
            <div class="container-fluid footer-background">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-12 txt-center">
                                <a href="home.php">
                                    <span class="logo-text">DRUGSTORE</span>
                                </a>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div id="footer_menu">
                                    <a href="home.php">Home</a> | 
                                    <a href="#">About Us</a> | 
                                    <a href="#">Disclaimer</a> | 
                                    <a href="#">Guarantee</a> | 
                                    <a href="#">Shipping & Payment</a> | 
                                    <a href="#">Privacy Policy</a> <br class="disable_content" />
                                    <a href="#">Terms & Conditions</a> | 
                                    <a href="#">Contact Us</a> | 
                                    <a href="#">Site Map<span></span></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div id="social_icons" class="pull-right">
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-yahoo"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-envelope"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-linkedin"></i></a>	
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="copyright">
                                    <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                                    © 2020 All right reserved. Designed by
                                    <a href="#" target="_blank">One+team</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>








    </body>
</html> 


<!-- echo "<pre>";
       print_r($user_object->get_user_values()[0]['username']);
       echo "</pre>";
       $user_object->get_user_values();
       echo $user_object->get_username();
     -->