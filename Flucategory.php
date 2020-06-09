<?php

if (!empty($_GET))
{

    session_start();
    include_once './Classes/Class_Category_Query.php';
    $ob_SearchRresult;

    //----Get_CategoryProducts--
    $categoryProducts = array();
    if (!empty($_GET['cat_name']))
     {
        $ob_SearchRresult = new Class_Category_Query();
        $categoryProducts = $ob_SearchRresult->Get_CategoryProducts($_GET['cat_name']);
    }
    elseif (!empty($_GET['category']))
    {
        $ob_SearchRresult = new Class_Category_Query();
        $categoryProducts = $ob_SearchRresult->Get_CategoryProducts($_GET['category']);
    }
} 
else 
{
    die('<H1 style="width: 1500px;height: 50px; font-size:200px; text-align :-moz-center;margin-top:170px "> Sorry 404</H1>');
}

//---GetAllCategorys---
$ob_SearchRresult = new Class_Category_Query();
$category    = $ob_SearchRresult->GetAllCategorys();





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.png" />
    <title>MediStore</title>
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
                            <select style="font-size: 14px; background: #EAEAEA; border: none;" name="manufacturers_id" size="1" class="input-lg form-control arrow-hide date_class">
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
                                                <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-------------------View Category-------------------------------->
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="infoBoxContents">
                                               <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="infoBoxContents">
                                                            <!---------  Desplay Category Start --------------------------->
                                                            <?php
                                                            include('Frames\category.php');
                                                            ?>
                                                            <!---------  Desplay Category End   ---------------------------->

                                                        </div>
                                                    </div>
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
                                                        <a href="#">
                                                            <img src="images/img1.png" class="img-responsive" />
                                                        </a>
                                                    </div>
                                                    <a href="#">Lorem Simply</a><br />€21.00
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
                                                <a href="#">
                                                    <img src="images/img1.png" class="img-responsive" />
                                                </a>
                                                <a href="#">Lorem Big Block</a><br /><del></del>
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

                                                <a href="#">
                                                    <img src="images/img6.jpg" class="img-responsive" />
                                                </a>
                                                <a href="#">Lorem Big Block</a><br /><del></del>
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
                                <a href="home.php"><i class="fa fa-home"></i></a>
                                <a href="#">Category's Products</a>
                            
                            </div>
                            <?php
                            $ProductNumber = rand(0, (count($categoryProducts) - 1));
                            echo
                                '
                            <h1>' . $categoryProducts[$ProductNumber]['name'] . '</h1>
                            <div class="row">
                                  <div class="col-sm-2 col-xs-6">
                                       <img class="img-thumbnail"   src="data:image/jpeg;base64,' . base64_encode($categoryProducts[$ProductNumber]['image']) . '" (12).jpg">
                                  </div>
                                  <div class="col-sm-10 col-xs-6">
                                      <p>
                                        ' . $categoryProducts[$ProductNumber]['pro_desc'] . '
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
                                    <select class="form-control" id="input-sort">
                                        <option selected="selected">Default</option>
                                        <option>Name (Z - A)</option>
                                    </select>
                                </div>
                                <div class="col-md-1 text-right txt-left">
                                    <label for="input-limit" class="control-label" style="margin-top: 7px">Show:</label>
                                </div>
                                <div class="col-md-2 text-right">
                                    <select class="form-control" id="input-limit">
                                        <option selected="selected">15</option>
                                        <option>25</option>
                                        <option>50</option>
                                        <option>75</option>
                                    </select>
                                </div>
                            </div>



                            <div class="row margin-top product-layout_width">

                                 <!--product Display start -->
                                 <?php
                                 foreach ($categoryProducts as $product)
                                 {
                                 echo '
                                <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-thumb"  width="200" height="200">
                                        <div class="image">
                                          <a href="search_result.php?name='.$product['name'].'">
                                            <img class="img-responsive" style="width:200;height:200px"  src= "data:image/jpeg;base64,' . base64_encode($product['image']) .'" >
                                          </a>
                                        </div>
                                        <div>
                                            <div class="caption">
                                                <h4 class="product_title">
                                                   <a href="search_result.php?name='.$product['name'].'">
                                                      '.$product['name'].'
                                                   </a>
                                                </h4>
                                                <p style="width:200;height:100px">
                                                  '.$product['pro_desc'].'
                                                </p>
                                                <p class="price">
                                                    <span class="new_price">'.$product['price'].'</span>
                                                    <span class="old_price">'.$product['old_price'].'</span>
                                                </p>
                                            </div>
                                               <!--<div class="button-group">!-->
                                               <a class="btn book-btn btn-default reg_button" href="search_result.php?name='.$product['name'].'">
                                                  BUY NOW!
                                                </a>
                                            <div class="pull-right">
                                                <button title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-heart"></i></button>
                                                <button title="" data-toggle="tooltip" type="button" class="btn wish_button btn-default reg_button"><i class="fa fa-exchange"></i></button>
                                            </div>
                                            <!--</div>!-->
                                        </div>
                                    </div>
                                </div>
                                ';}
                                ?>
                                 <!--product Display end-->


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

    <!--Footer-->
    <?php include('Frames\footer.html'); ?>

</body>

</html>