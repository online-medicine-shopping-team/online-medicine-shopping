<?php
session_start();
include_once './Classes/Class_HomeQuery.php';
include_once './Classes/Class_Category_Query.php';

$HomeObjects;

// $Product = array();
// $category = array();

$HomeObjects = new Class_HomeQuery();
$Products     = $HomeObjects->Get_HomeObjects();

$HomeObjects = new Class_Category_Query();
$category    = $HomeObjects->GetAllCategorys();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.png" />
    <title>Online Medicine Shopping</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl-carousel.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/owl-carousel.js"></script>
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
                                                    <!--#-->
                                                    <img src="images/img4.jpg" class="img-responsive" />
                                                </a>
                                                <a href="#">
                                                    <!--#-->Lorem Big Block</a><br /><del></del>
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
                                                    <!--#-->
                                                    <img src="images/img6.jpg" class="img-responsive" />
                                                </a>
                                                <a href="#">
                                                    <!--#-->Lorem Big Block</a><br /><del></del>
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
                                    <a href="home.php" class="headerNavigation"><i class="fa fa-home"></i></a>
                                </div>
                            </div>

                            <!----slidder start-!-->
                            <div class="contentText">
                                <div class="infoBoxHeading">Today Bestsellers</div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="bg_best">

                                            <!---------------------------------------------------------Today Bestsellers---------------------------------------------->
                                            <div class="owl-carousel">
                                                <?php
                                                $i = 1;
                                                foreach ($Products as $Product) {
                                                    echo '
                                                <div class="item">
                                                    <span>
                                                        <a href="search_result.php?name=' . $Product['name'] . '">
                                                        <img  class="carasoul_image" src="data:image/jpeg;base64,' . base64_encode($Product['image']) . '"  width="130px">
                                                        </a>
                                                    </span>
                                                    <a href="#" role="button">

                                                    </a>
                                                </div>
                                                ';
                                                    $i += 1;
                                                    if ($i == 12) {
                                                        break;
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <!---------------------------------------------------------Today Bestsellers End---------------------------------------------->
                                            <script>
                                                $(document).ready(function() {
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
                                                                loop: true,
                                                                margin: 20
                                                            }

                                                        }
                                                    })
                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contentText Static">
                                <h1>What is MEDISTORE</h1>
                                <p>An online pharmacy, Internet pharmacy, or mail-order pharmacy is a pharmacy that operates over the Internet and sends the orders to customers through the mail or shipping companies.</p>
                            </div>

                            <form action="search_result.php" method="GET">
                                <div class="contentText">
                                    <h1>New Products </h1>
                                    <div class="row margin-top product-layout_width">

                                        <!--Product Display-->
                                        <?php
                                        $i=0;
                                        foreach ($Products as $product) {
                                            // echo'<pre>';
                                            // print_r($product);
                                            // echo'/pre>';
                                            echo '
                                            <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                                <div class="product-thumb-height">
                                                    <div class="product-thumb transition">
                                                        <ul>
                                                            <li class="li_product_title">
                                                                <div class="product_title">
                                                                    <a href="search_result.php?&name=' . $product['name'] . '">' . $product['name'] . '</a>
                                                                </div>
                                                            </li>

                                                            <li class="li_product_image">
                                                                <div class="image">
                                                                    <a href="search_result.php?&name=' . $product['name'] . '">
                                                                        <img src="data:image/jpeg;base64,' . base64_encode($product['image']) . '" class="img-responsive" />
                                                                    </a>

                                                                </div>
                                                            </li>
                                                            <li class="li_product_price">
                                                                <span class="old_price1"></span>
                                                                <span class="new_price1">€' . $product['price'] . '</span>
                                                                <span class="saving1"></span>
                                                            <li>
                                                            <li class="li_product_desc">
                                                                <div class="caption">
                                                                    <p>
                                                                        ' . $product['pro_desc'] . '

                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li class="li_product_buy_button">
                                                                <a class="btn btn-default" id="but" href="search_result.php?&name=' . $product['name'] . '" role="button">
                                                                    Buy Now!
                                                                </a>
                                                                <div class="pull-right">
                                                                    <button type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                    <button type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                        $i+=1;
                                        if($i==9){break;}
                                        }
                                        ?>
                                        <!--End--->

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