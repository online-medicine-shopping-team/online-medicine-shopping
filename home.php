<?php

include_once './Classes/Class_HomeQuery.php';
include_once './Classes/Class_Category_Query.php';

$HomeObjects;

$Product=array();
$category=array();

$HomeObjects = new Class_HomeQuery();
$Product     = $HomeObjects->Get_HomeObjects();

$HomeObjects = new Class_Category_Query();
$category    = $HomeObjects->GetAllCategorys();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>Online Medicine Shopping</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl-carousel.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.html" class="logo-text">
                     Medicine <span style="color:#39BAF0; font-size:40px">STORE</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
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
                                    <li class="first " ><a href="home.html">Home</a></li>
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
                <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" >
                    <div id="top_right">
                        <div id="cart">
                            <div class="text">
                                <div class="img">
                                    <a href="#"> <img class="img-responsive" src="images/cart.png" alt="" title="" width="26" height="27" /></a>
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
                                            <li class="first "><a href="home.html">Home</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">My Acocount</a></li>
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
                                <input type="submit" id="x" value="Search" name ="search"style="color:white ;background-color:#8EBE08;border:none;" />
                                 
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

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <div id="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 left_sidebar1">
                        <div id="left_part">
                            <div class="bs-example">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Categories</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    <i  id="accordan_plus" class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="infoBoxContents">

<!------------------------------------------------------------------------ Desplay Category Start----------------------------->

                                                    <a href="#">Flu Categoory</a>&nbsp;(94)<br />
                                                    <a href="#">Eczema Treatment Category </a>&nbsp;(9)<br />
                                                    <a href="#">Joint Category</a>&nbsp;(5)<br />
                                                  
<!------------------------------------------------------------------------ Desplay Category End  ----------------------------->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Bestsellers</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContents" id="sidebar">
                                                    <a href="single-product.html">
                                                        <img src="images/img4.jpg"  class="img-responsive" />
                                                    </a>
                                                    <a href="single-product.html">Lorem Big Block</a><br /><del></del>
                                                    <span class="productSpecialPrice">€21.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Specials</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">

                                                <div class="infoBoxContents" id="sidebar">

                                                    <a href="single-product.html">
                                                        <img src="images/img6.jpg"  class="img-responsive" />
                                                    </a>
                                                    <a href="single-product.html">Lorem Big Block</a><br /><del></del>
                                                    <span class="productSpecialPrice">€21.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <script>
                            function toggleChevron(e) {
                                $(e.target)
                                        .prev('.panel-heading')
                                        .find("i.indicator")
                                        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
                            }
                            $('#accordion').on('hidden.bs.collapse', toggleChevron);
                            $('#accordion').on('shown.bs.collapse', toggleChevron);
                        </script>

                    </div> 
                    <div class="col-md-9 col-sm-8 col-xs-12 right_sidebar1">
                        <div id="right_part">
                            <div class="contentContainer">
                                <div class="contentText">
                                    <div class="breadcrumbs">
                                        <a href="home.html" class="headerNavigation"><i class="fa fa-home"></i></a>         
                                    </div>
                                </div>

                                <!----slidder start-!-->
                                <div class="contentText">
                                    <div class="infoBoxHeading">Today Bestsellers</div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"  >
                                            <!--                                        <div class="bg_best">-->
                                            <div class="bg_best">
       <!---------------------------------------------------------Today Bestsellers---------------------------------------------->

                                                 <div class="owl-carousel">
                                                    <div class="item">
                                                        <span>
                                                         <?php
                                                         $Medicine_number=0;
                                                         echo'
                                                            <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                            </a>
                                                            ';
                                                            ?>
                                                            </span>
                                                        <a   href="#" role="button" >
                                                    
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                          <?php
                                                           $Medicine_number=1;
                                                           echo'
                                                             <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                            </a>
                                                            ';
                                                           ?>
                                                        </span>
                                                        <a   href="#" role="button" >
                                                        
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <?php
                                                           $Medicine_number=2;
                                                           echo'
                                                            <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                            </a>
                                                            ';
                                                          ?>
                                                        </span>
                                                        <a   href="#" role="button" >
                                                          
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                           <?php
                                                             $Medicine_number=3;
                                                             echo'
                                                            <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                            </a>
                                                            ';
                                                          ?>
                                                        </span>
                                                        <a  href="#" role="button" >
                                                     
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                          <?php
                                                             $Medicine_number=4;
                                                             echo'
                                                            <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                            </a>
                                                            ';
                                                          ?>
                                                        </span>
                                                        <a   href="#" role="button" >
                                                          
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                          <?php
                                                             $Medicine_number=5;
                                                             echo'
                                                            <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                            </a>
                                                            ';
                                                          ?>
                                                        </span>
                                                        <a   href="#" role="button" >
                                                           
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                            <a href="#">
                                                              <?php
                                                               $Medicine_number=6;
                                                               echo'
                                                               <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                               </a>
                                                                ';
                                                              ?>
                                                            </a></span>
                                                        <a   href="#" role="button" >
                                                          
                                                        </a>
                                                    </div>
                                               
                                                    <div class="item">
                                                        <span>
                                                          <?php
                                                             $Medicine_number=7;
                                                             echo'
                                                            <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                            </a>
                                                            ';
                                                          ?>
                                                        </span>
                                                        <a   href="#" role="button" >
                                                           
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                           <?php
                                                             $Medicine_number=8;
                                                             echo'
                                                              <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                              </a>
                                                              ';
                                                           ?>
                                                        </span>
                                                        <a   href="#" role="button" >
                                                           
                                                        </a>
                                                    </div>
                                                    <div class="item">
                                                        <span>
                                                           <?php
                                                             $Medicine_number=9;
                                                             echo'
                                                             <a href="search_result.php?name='.$Product[$Medicine_number]['name'].'">
                                                                
                                                                    <img  class="carasoul_image" src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'"  width="130px">
                                                                
                                                             </a>
                                                             ';
                                                           ?>
                                                        </span>
                                                        <a   href="#" role="button" >
                                                           
                                                        </a>
                                                    </div>
                                                </div>
       <!---------------------------------------------------------Today Bestsellers---------------------------------------------->
                                                <script>
                                                    $(document).ready(function () {
                                                        $('.owl-carousel').owlCarousel({
                                                            loop: true,
                                                            margin: 10,
                                                            responsiveClass: true,
                                                            responsive: {
                                                                0: {
                                                                    items: 2,
                                                                    nav: true
                                                                },
                                                                600: {
                                                                    items: 3,
                                                                    nav: false
                                                                },
                                                                1000: {
                                                                    items: 5,
                                                                    nav: true,
                                                                    loop: false,
                                                                    margin: 20
                                                                }

                                                            }
                                                        })
                                                    })
                                                </script>
                                            </div>
                                            <!--                                    </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!----slidder End-!-->
                                <!----content_1--!-->
                                <div class="contentText Static">
                                    <h1>What is MEDISTORE</h1>
                                    <p>An online pharmacy, Internet pharmacy, or mail-order pharmacy is a pharmacy that operates over the Internet and sends the orders to customers through the mail or shipping companies.</p>
                                </div>
                                <!----content_1 End--!-->

                                
                                <!----content_2 For New Products--!-->
                                <?php
                            
                             $Medicine_number=0;
                             echo'
                 <form action="search_result.php" method="GET" >
                                <div class="contentText">
                                    <h1>New Products </h1>
                                    <div class="row margin-top product-layout_width">
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                  <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                            </div></li>

                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                                    <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                '.$Product[$Medicine_number]['pro_desc'].'

                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                  <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                            </div></li>

                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                                    <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                '.$Product[$Medicine_number]['pro_desc'].'

                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                  <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                            </div></li>

                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                                    <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                '.$Product[$Medicine_number]['pro_desc'].'

                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                  <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                            </div></li>

                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                                    <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                '.$Product[$Medicine_number]['pro_desc'].'

                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                  <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                            </div></li>

                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                                    <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                '.$Product[$Medicine_number]['pro_desc'].'

                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                                Buy Now!
                                                            </a>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb-height">
                                            <div class="product-thumb transition">
                                                <ul>
                                                    <li class="li_product_title">
                                                        <div class="product_title">
                                                              <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                        </div></li>

                                                    <li class="li_product_image">
                                                        <div class="image">
                                                            <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                                <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                            </a>

                                                        </div>
                                                    </li>
                                                    <li class="li_product_price">
                                                        <span class="old_price1"></span>
                                                        <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                        <span class="saving1"></span><li>
                                                    <li class="li_product_desc">
                                                        <div class="caption">
                                                            <p>
                                                            '.$Product[$Medicine_number]['pro_desc'].'

                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li class="li_product_buy_button">
                                                        <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                            Buy Now!
                                                        </a>
                                                        <div class="pull-right">
                                                            <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                            <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb-height">
                                        <div class="product-thumb transition">
                                            <ul>
                                                <li class="li_product_title">
                                                    <div class="product_title">
                                                          <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                    </div></li>

                                                <li class="li_product_image">
                                                    <div class="image">
                                                        <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                            <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                        </a>

                                                    </div>
                                                </li>
                                                <li class="li_product_price">
                                                    <span class="old_price1"></span>
                                                    <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                    <span class="saving1"></span><li>
                                                <li class="li_product_desc">
                                                    <div class="caption">
                                                        <p>
                                                        '.$Product[$Medicine_number]['pro_desc'].'

                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="li_product_buy_button">
                                                    <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                        Buy Now!
                                                    </a>
                                                    <div class="pull-right">
                                                        <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                        <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb-height">
                                    <div class="product-thumb transition">
                                        <ul>
                                            <li class="li_product_title">
                                                <div class="product_title">
                                                      <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                                </div></li>

                                            <li class="li_product_image">
                                                <div class="image">
                                                    <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                        <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                    </a>

                                                </div>
                                            </li>
                                            <li class="li_product_price">
                                                <span class="old_price1"></span>
                                                <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                                <span class="saving1"></span><li>
                                            <li class="li_product_desc">
                                                <div class="caption">
                                                    <p>
                                                    '.$Product[$Medicine_number]['pro_desc'].'

                                                    </p>
                                                </div>
                                            </li>
                                            <li class="li_product_buy_button">
                                                <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number++]['name'].'" role="button" >
                                                    Buy Now!
                                                </a>
                                                <div class="pull-right">
                                                    <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                    <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                            <div class="product-thumb-height">
                                <div class="product-thumb transition">
                                    <ul>
                                        <li class="li_product_title">
                                            <div class="product_title">
                                                  <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" >'.$Product[$Medicine_number]['name'].'</a>
                                            </div></li>

                                        <li class="li_product_image">
                                            <div class="image" height = 160px>
                                                <a href="search_result.php?&name='.$Product[$Medicine_number]['name'].'">
                                                    <img src="data:image/jpeg;base64,'.base64_encode( $Product[$Medicine_number]['image'] ).'" class="img-responsive"  />
                                                </a>

                                            </div>
                                        </li>
                                        <li class="li_product_price">
                                            <span class="old_price1"></span>
                                            <span class="new_price1">€'.$Product[$Medicine_number]['price'].'</span>
                                            <span class="saving1"></span><li>
                                        <li class="li_product_desc">
                                            <div class="caption">
                                                <p>
                                                '.$Product[$Medicine_number]['pro_desc'].'

                                                </p>
                                            </div>
                                        </li>
                                        <li class="li_product_buy_button">
                                            <a class="btn btn-default" id="but" href="search_result.php?&name='.$Product[$Medicine_number]['name'].'" role="button" >
                                                Buy Now!
                                            </a>
                                            <div class="pull-right">
                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   </div>
                 </div>
             </form>
                            ';
                            ?>
                                <!----content_2 End--!-->

                                <!----content_3--!-->
                                
                                <!----content_3 End--!-->
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
                                <a href="home.html">
                                    <span class="logo-text">DRUGSTORE</span>
                                </a>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div id="footer_menu">
                                    <a href="home.html">Home</a> | 
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
                                    <a href="#" target="_blank">One+Team.</a>
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