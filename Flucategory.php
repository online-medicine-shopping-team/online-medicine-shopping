<?php

 if(!empty($_GET)) {

    session_start();
    include_once './Classes/Class_Category_Query.php';
    $ob_SearchRresult;
    
    //----Get_CategoryProducts--
    $categoryProducts=array();
    if(!empty($_GET['cat_name']))
    {
      $ob_SearchRresult = new Class_Category_Query();
      $categoryProducts = $ob_SearchRresult->Get_CategoryProducts($_GET['cat_name']);
    }
   elseif(!empty($_GET['category']))
    {
      $ob_SearchRresult = new Class_Category_Query();
      $categoryProducts = $ob_SearchRresult->Get_CategoryProducts($_GET['category']);

    }
 }else
    {
        die('<H1 style="width: 1500px;height: 50px; font-size:200px; text-align :-moz-center;margin-top:170px "> Sorry 404</H1>');
    }

    //---GetAllCategorys---
    $ob_SearchRresult = new Class_Category_Query();
    $category    = $ob_SearchRresult->GetAllCategorys();


    
   

   /// echo  ($categoryProducts[0].gethostname).; 
    /*
    echo "<pre>";
    print_r($categoryProducts);
    echo "<pre>";
    */
   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
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
                    <a href="home.html" class="logo-text">
                        Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
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
                                    <li><a href="user_account.php">My Account</a></li>
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
                                    <a href="cart.html"> <img class="img-responsive" src="images/cart.png" alt="" title="" width="26" height="27" /></a>
                                </div><span>Your cart:</span><span class="cart_total">€0.00</span><span class="cart_items">(0 items)</span>
                            </div> 
                        </div>
                        <div id="bottom_right">
                            <div class="row">
                                <div class="col-md-6 col-xs-6 wd_auto">
                                    <div class="left">
                                        <div class="login">
                                            <a class="btn btn-default reg_button" href="login.php">Login</a> 
                                            <a class="btn btn-default reg_button" href="register.php">Signup</a>
                                        </div>			
                                    </div>
                                </div> 
                                <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                    <div class="row">
                                        <div class="pl-0 col-md-6 col-xs-6">

                                            <div class="dropdown btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">language
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">German</a></li>
                                                    <li><a href="#">Dutch</a></li>
                                                    <li><a href="#">Swedish</a></li>
                                                    <li><a href="#">Danish</a></li>
                                                    <li><a href="#">Portuguese</a></li>
                                                    <li><a href="#">Finish</a></li>
                                                    <li><a href="#">German</a></li><li><a href="#">Norwegian</a></li>

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="pl_0 col-md-6 col-xs-6">
                                            <div class="dropdown btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">currency
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">U.S. Dollar</a></li>
                                                    <li><a href="#">Euro</a></li>
                                                    <li><a href="#">Pounds Sterling</a></l>
                                                </ul>
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
                    <form  name="quick_find" method="GET" action="search_result.php">
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
                                                    <?php
                                                    $counter = 0;
                                                    while( $counter<count($category))
                                                    { 
                                                        echo
                                                        '
                                                        <a href="Flucategory.php?cat_name='.$category[$counter]['cat_name'].'"> '.$category[$counter]['cat_name'].' </a><br />
                                                        ';
                                                        $counter++;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What's New?</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right accordan_plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContainer">  
                                                    <div class="infoBoxHeading">
                                                        <a href="#">What's New?</a>
                                                    </div> 
                                                    <div class="infoBoxContents" id="sidebar">
                                                        <div>
                                                            <a href="single-product.html">
                                                                <img src="images/img1.png"  class="img-responsive" />
                                                            </a>
                                                        </div>
                                                        <a href="single-product.html">Lorem Simply</a><br />€21.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Information</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContents">    
                                                    <a href="#">Shipping &amp; Returns</a><br />   
                                                    <a href="#">Privacy Notice</a><br />   
                                                    <a href="#">Conditions of Use</a><br />   
                                                    <a href="#">Contact Us</a> 
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
                                                        <img src="images/img1.png"  class="img-responsive" />
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
                                                        <img src="images/img6.jpg" class="img-responsive" />
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


                   
                       <form action="search_result.php" method="GET">
                    <div class="col-md-9 col-sm-8 col-xs-12" id="content">            
                        <div class="contentText">
                            <div class="breadcrumbs">
                                <a href="home.html"><i class="fa fa-home"></i></a>
                                <a href="#">Product</a>
                            </div>
                            <?php
                            $ProductNumber = rand(0,( count($categoryProducts)-1 ) );
                            echo
                            '
                            <h1>'.$categoryProducts[$ProductNumber]['name'].'</h1>
                            <div class="row">
                                  <div class="col-sm-2 col-xs-6">
                                       <img class="img-thumbnail"   src="data:image/jpeg;base64,'.base64_encode( $categoryProducts[$ProductNumber]['image'] ).'" (12).jpg">
                                  </div>
                                  <div class="col-sm-10 col-xs-6">
                                      <p>
                                        '.$categoryProducts[$ProductNumber]['pro_desc'].'
                                      </p>
                                  </div>
                            </div>
                            ';
                            ?>
                            <hr>
                            <h3>Refine Search</h3>
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul>
                                        <li><a href="#">Ab (0)</a></li>
                                        <li><a href="#">AB-one (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a id="compare-total" href="#">Product Compare (0)</a></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="btn-group hidden-xs">
                                        <a class="btn btn-default" id="list-view" href="product-list.html"><i class="fa fa-th-list"></i></a>
                                        <a class="btn btn-default" id="grid-view"><i class="fa fa-th"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-2 text-right txt-left">
                                    <label for="input-sort" class="control-label" style="margin-top: 7px">Sort By:</label>
                                </div>
                                <div class="col-md-3 text-right">
                                    <select  class="form-control" id="input-sort">
                                        <option selected="selected">Default</option>
                                        <option>Name (Z - A)</option>
                                    </select>
                                </div>
                                <div class="col-md-1 text-right txt-left">
                                    <label for="input-limit" class="control-label" style="margin-top: 7px">Show:</label>
                                </div>
                                <div class="col-md-2 text-right">
                                    <select  class="form-control" id="input-limit">
                                        <option selected="selected">15</option>
                                        <option>25</option>
                                        <option>50</option>
                                        <option>75</option>
                                    </select>
                                </div>
                              </div>

        <div class="row margin-top product-layout_width">
           <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="product-thumb">
                    <div class="image"><a href="search_result.php?name=Walgreens Mucus Relief Chest Congestion Immediate-Release Tablets"><img class="img-responsive"  src="images/900 (3).jpg" width="200" height="200"></a></div>
                       <div>
                            <div class="caption">
                                <h4 class="product_title"><a href="search_result.php?name=Walgreens Mucus Relief Chest Congestion Immediate-Release Tablets">Walgreens Mucus Relief Chest Congestion Immediate-Release Tablets</a></h4>
                                   <p>
                                   </p>
                                    <p class="price">
                                    <span class="new_price">€110.00</span> 
                                    <span class="old_price">€122.00</span>
                                    <span class="price-tax">Ex Tax: €90.00</span>
                                    </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="search_result.php?name=Walgreens Mucus Relief Chest Congestion Immediate-Release Tablets">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="search_result.php?name=Walgreens Wal-Phed PE Nasal Decongestant Tablets"><img class="img-responsive"  src="images/900 (5).jpg" width="200" height="200" ></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="search_result.php?name=Walgreens Wal-Phed PE Nasal Decongestant Tablets"> Walgreens Wal-Phed PE Nasal Decongestant Tablets</a></h4>
                                                <p>
                                                •  Relieves sinus congestion & pressure <br>
•  For nasal congestion
</p>
                                                <p class="price">
                                                    <span class="new_price">€81.00</span> 

                                                    <span class="price-tax">Ex Tax: €90.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="search_result.php?name=Walgreens Wal-Phed PE Nasal Decongestant Tablets">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="search_result.php?name=Walgreens Wal-Four Nasal Decongestant Spray"><img class="img-responsive"  src="images/walfour.jpg" width="200" height="200" ></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="search_result.php?name=Walgreens Wal-Four Nasal Decongestant Spray">Walgreens Wal-Four Nasal Decongestant Spray</a></h4>
                                                <p>
                                                •  For dry nasal membranes <br>
•  Pharmacist recommended
</p>
                                                <p class="price">
                                                    <span class="new_price">€81.00</span> 

                                                    <span class="price-tax">Ex Tax: €90.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="search_result.php?name=Walgreens Wal-Four Nasal Decongestant Spray">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>

                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image"><a href="search_result.php?name=Walgreens Wal-Tussin Chest Congestion"><img class="img-responsive"  src="images/walgreen.jpg" width="200" height="200" ></a></div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title"><a href="search_result.php?name=Walgreens Wal-Tussin Chest Congestion">Walgreens Wal-Tussin Chest Congestion </a></h4>
                                                <p>
                                                   •	Loosens and thins bronchial secretions <br>
•	Helps make coughs more productive <br>

 </p>
                                                <p class="price">
                                                    <span class="new_price">€26.00</span> 
                                                    <span class="old_price">€34.00</span>
                                                    <span class="price-tax">Ex Tax: €21.00</span>
                                                </p>
                                            </div>
                                            <!--<div class="button-group">!-->
                                            <a class="btn book-btn btn-default reg_button" href="search_result.php?name=Walgreens Wal-Tussin Chest Congestion">BUY NOW!</a>
                                            <div class="pull-right">
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button  title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                               
                               
                                            <!--<div class="button-group">!-->
                                            
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 text-left"></div>
                                <div class="col-sm-6 text-right">Showing 1 to 12 of 12 (1 Pages)</div>
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
                                    © 2017 All right reserved. Designed by
                                    <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
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
