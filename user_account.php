<?php
session_start();
include_once './Classes/Class_userAccount_Query.php';
$userAccountobject = new Class_userAccount_Query();
$Orders = $userAccountobject->GetUserOrders($_SESSION['userid']);
$Products = [];
// $ProductsRow = [];
foreach ($Orders as $order) 
{
    $Product_inOrder = $userAccountobject->GetOrderProduct($order['ord_id']);

    foreach ($Product_inOrder as $product )
    {
        $singleProduct = $userAccountobject->GetProduct($product['pro_id']);
        $ProductsRow['ord_id']     = $order['ord_id'];
        $ProductsRow['order_date'] = $order['order_date'];
        $ProductsRow['TotalPrice'] = $order['TotalPrice'];
        $ProductsRow['product_quantity'] = $product['product_quantity'];
        $ProductsRow['name']       = $singleProduct[0]['name'];
        $ProductsRow['price']       = $singleProduct[0]['price'];

        $Products[] = $ProductsRow;
        $ProductsRow = [];
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.png" />
    <title>My Account</title>
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4" id="logo">
                <a href="home.html" class="logo-text">
                    <span style="color:#8EBE08 ; font-size:40px">M y_A c c o u n t</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide">
                <nav role="navigation" class="navbar navbar-inverse">
                    <a href="home.html" style="float: left" class="logo-text">
                        Medicine <span style="color:darkgreen; font-size:40px">STORE</span>
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
                            <ul class="nav navbar-nav site_nav_menu1">
                                <li class="first "><a href="home.html">Home</a></li>



                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12">
                <div id="top_right">
                    <div id="cart">

                    </div>
                    <div id="bottom_right">
                        <div class="row">

                            <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                <div class="row">


                                    <div class="pl_0 col-md-6 col-xs-6">
                                        <div class="dropdown btn-group">

                                            <p style="margin-top: 17px; color: #8EBE08 ;font-size:40px">
                                                WElCOME:<?php echo $_SESSION['username']; ?>
                                            </p>

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
                        <nav role="navigation" class="navbar navbar-inverse" id="nav_show">
                            <div id="nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>


                                    <!--upper bar processes-->




                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav site_nav_menu1">
                                        <li class="first "><a href="home.php">Home</a></li>

                                        <li><a href="cart.php">My Cart</a></li>
                                        <li><a href="logout_process.php">Logout <img src="images/exit-icon-3.png" width="20px"></a></li>



                                    </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="search_manu" style="margin-top: 10px">
            <div class="col-md-6 col-xs-12">
                <!--             SEARCHING FORM            -->
                <form name="quick_find" method="GET" action="search_result.php">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" placeholder="Enter search keywords here" name="s" class="form-control input-lg" id="inputGroup" />
                            <span class="input-group-addon">
                                <input type="submit" id="x" value="Search" style="color:white ;background-color:#8EBE08;border:none;" />

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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">My
                                                Account</a>


                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel-body">
                                            <img src="images/user.png" width="230px">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="infoBoxHeading">

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
                                                            <img src="images/img4.jpg" class="img-responsive" />
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
                                                    <img src="images/img4.jpg" class="img-responsive" />
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
                <div class="col-md-9 col-sm-8 col-xs-12 right_sidebar1">
                    <div id="right_part">
                        <div class="contentContainer">
                            <div class="contentText">
                                <div class="breadcrumbs">
                                    <a href="#" class="headerNavigation"><i class="fa fa-home"></i>
                                        Your Order History</a>
                                </div>
                            </div>

                            <!----slidder start-!-->
                            <div class="panel panel-default">

                                <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="">
                                    <div class="panel-body">
                                        <form class="form-horizontal">




                                            <!--        -->
                                            <table border="1" style="border-color:gray ; width:810px ; text-align: center;">
                                                <thead>
                                                    <tr style="background-color:#39BAF0 ;color:white;">
                                                        <th style="text-align: center;">Order NO.</th>
                                                        <th style="text-align: center;">Total order Price</th>
                                                        <th style="text-align: center;">Date</th>
                                                        <th style="text-align: center;">Medicine name</th>
                                                        <th style="text-align: center;">Quantity</th>
                                                        <th style="text-align: center;">Price</th>
                                                        

                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <?php

                                                    foreach($Products as $prodect) {
                                                        echo "<tr >";
                                                        echo "<td style='text-align:center'>" . $prodect['ord_id'] . "</td>";
                                                        echo "<td style='text-align:center'>" . $prodect['TotalPrice'] . "</td>";
                                                        echo "<td style='text-align:center'>" . $prodect['order_date'] . "</td>";
                                                        echo "<td style='text-align:center'>" . $prodect['name'] . "</td>";
                                                        echo "<td style='text-align:center'>" . $prodect['product_quantity'] . "</td>";
                                                        echo "<td style='text-align:center'>" . $prodect['price'] . "</td>";
                                                        echo "</tr>";
                                                    }

                                                    ?>



                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <!-- end content -->

                                    </form>
                                </div>
                            </div>





                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include('Frames\footer.html'); ?>
    <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

</body>

</html>