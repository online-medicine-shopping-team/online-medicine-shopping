<?php
session_start();

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

    <div class="main-content">
        <div class="container cart-block-style">
            <div class="breadcrumbs">
                <a href="home.php"><i class="fa fa-home"></i></a>
                <a href="#">Shopping Cart</a>
            </div>
            <div class="contentText">
                <h1>Shopping Cart
                </h1>
            </div>
            <!--       view cart content          -->
            <div id="page">
                <!-- start content -->
                <div id="content">


                    <div class="entry">


                        <form action="features/cart_processes.php" method="POST">
                            <table width="100%" border="1" style="text-align: center; border-color:gray">



                                <?php

                                $total = 0;
                                $i = 1;



                                if (isset($_SESSION['cart'])) {


                                    foreach ($_SESSION['cart'] as $id => $x) {



                                        $total = $total + ($x['qty'] * $x['price']);
                                        $i++;
                                    }
                                } else {

                                    // echo 'empty session cart'.$_SESSION['cart'];

                                    echo "<h5 style='color:red'>Cart is empty</h5>";
                                }

                                ?>

                                <!--<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>-->

                                <tr>
                                    <td colspan="6" align="right">
                                        <h4>.Total Bill.</h4>

                                    </td>
                                    <td>
                                        <h4>€ <?php echo $total;
                                                $_SESSION['total'] = $total;
                                                ?> </h4>
                                    </td>
                                </tr>
                                <!--<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>-->

                                <Br>
                            </table>

                            <br><br>
                            <center>
                                <input type="submit" value=" Re-Calculate " style="background-color:#7AA307;color: white;border:none;height:35px">

                            </center>
                        </form>
                    </div>



                </div>
                <!-- end content -->





                <div class="buttons">
                    <div class="pull-left"><a class="btn btn-default" href="home.php"><i class="fa fa-caret-right"></i>&nbsp;Continue Shopping</a></div>
                    <div class="pull-right"><a class="btn btn-primary reg_button" href="">Confirm & Checkout</a></div>
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