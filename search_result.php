<?php

session_start();
include_once './Classes/Class_SearchRresult_query.php';
$ob_SearchRresult;
$row = array();
if (!empty($_GET['s'])) {
    $ob_SearchRresult = new Class_SearchRresult_query();
    $row = $ob_SearchRresult->selectRusalt($_GET['s']);
}
if (!empty($_GET['name'])) {
    $ob_SearchRresult = new Class_SearchRresult_query();
    $row = $ob_SearchRresult->selectRusalt($_GET['name']);
}


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
    <link href="style.css" type="text/css" rel="stylesheet" />
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


    <div class="container cart-block-style">
        <div class="breadcrumbs">
            <a href="home.php"><i class="fa fa-home"></i></a>
            <a href="#">Shopping Cart</a>
        </div>
        <div class="contentText">
            <h1>Shopping Cart
            </h1>
        </div>







        <!-- start page -->

        <div class="entry">

            <table width="95%" style="margin-left:40px">
                <?php

                //code...

                // print_r($_SESSION);

                //to show the real  photo
                //echo' <img src="'.$row[0]['image'].'"  width="100%">';
                //form search 
                //if(isset($row)){ 
                //   $i=count($row);

                $i = 0;

                //echo $row[0]['image'];\
                //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row[0]['image'] ).'"    width="130px"/>';
                while ($i < count($row)) {


                    echo '  <table border="0" width="100%"  >
                                                 <tr>
                                                    <td><hr ></td>
                                                </tr>
                                                 <tr align="center" bgcolor="#EEE9F3" width="100%" style="height:35px" >
                                                     <td>Item Details</td>
                                                </tr>
                                                <tr>
                                                    <td><hr color="purple"></td>
                                                </tr>
                                             </table>
                                            
                                            <table border="0"   width="80%" bgcolor="#ffffff">
                                                <tr> 
                                                    
                                                    <td width="15%" rowspan="3">
                                                
                                                <img src="data:image/jpeg;base64,' . base64_encode($row[0]['image']) . '"  width="130px">
                                                    
                                                    </td>
                                                </tr>
                                            
                                                <tr> 
                                                    <td width="50%" height="100%">
                                                        <table border="0"  width="100%" height="100%">
                                                            <tr valign="top">
                                                                <td align="right" width="10%">NAME</td>
                                                                <td width="6%">: </td>
                                                                <td align="left">' . $row[$i]['name'] . '</td>
                                                            </tr>

                                                           <tr>
                                                                <td align="right"> Category</td>
                                                                <td>: </td>
                                                                <td align="left">' . $row[$i]['cat_name'] . '</td>
                                                            </tr>

                                                             <tr>
                                                                <td align="right"> Made By</td>
                                                                <td>: </td>
                                                                <td align="left">' . $row[$i]['sup_id'] . '</td>
                                                            </tr>



                                                                                
                                                            <tr>
                                                                <td align="right"> PRICE</td>
                                                                <td>: </td>
                                                                <td align="left">' . $row[$i]['price'] . ' $</td>
                                                            </tr>
                                                        </table>
                                        
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                                
                                            <table border="0" width="100%">
                                                 <tr>
                                                    <td><hr color="purple"></td>
                                                </tr>
                                                 <tr align="center" bgcolor="#EEE9F3" style="height:35px">
                                                     <td>DESCRIPTION</td>
                                                </tr>
                                                <tr>
                                                    <td><hr color="purple"></td>
                                                </tr>
                                                                        
                                             </table>
                                             
                                             ' . $row[$i]['pro_desc'] . '
                                                                                

                                             
                                             <tr><td colspan=2><hr color="purple"></td></tr>
                                            
                                            <table border="0" width="100%">
                                                
                                                 <tr align="center" bgcolor="#EEE9F3">';
                    /*array holdt information about medicine*/





                    if (isset($_SESSION['type'])) {


                        echo '<td style="background-color:white"> <a href="features/cart_processes.php?name=' . $row[$i]['name'] . '&cat_name=' . $row[$i]['cat_name'] . '&price=' . $row[$i]['price'] . '">
                                                        <img src="images/add-to-cart.png" width=50px;height=50px>
                                                    </a></td>';
                    } else {
                        echo '<td style="background-color:white"><img src="images/add-to-cart.png" width=55px;height=60px><br><a href="login.php"> <h4>Please Login..</h4></a></td>';
                    }
                    echo '</tr>
                                            </table>';
                    $i++;
                }

                if (empty($row)) {
                    echo '<tr>';
                    echo '<td>';
                    echo "<h4 style='color: gray ;text-align: center;margin-top: 5%'>Sorry :( this Medicine is not found</h4>";
                    echo '</td>';
                    echo '</tr>';
                }

                //end while
                //end search form

                ?>

            </table>

        </div>

    </div>
</body>

<!--Footer-->
<?php include('Frames\footer.html'); ?>

</body>

</html>