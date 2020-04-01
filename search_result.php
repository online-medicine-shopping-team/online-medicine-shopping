<?php
//require('includes/config.php');
//include_once 'DBConection/DbConnection.php';
session_start();
include_once './Classes/Class_SearchRresult_query.php';
$ob_SearchRresult;
$row=array();
    if(!empty($_GET['s'])){
    $ob_SearchRresult=new Class_SearchRresult_query();
    $row=$ob_SearchRresult->selectRusalt($_GET['s']);
    /*echo "<pre>";
    print_r($SearchRresults);
    echo "<pre>";*/
 }
 if(!empty($_GET['name'])){
    $ob_SearchRresult=new Class_SearchRresult_query();
    $row=$ob_SearchRresult->selectRusalt($_GET['name']);
    
    /*echo "<pre>";
    print_r($SearchRresults);
    echo "<pre>";*/
 }
/*$conn=mysqli_connect("localhost","root","","online_medicine_shopping");

 

 
   
    $search=$_GET['s'];



    $query="SELECT * FROM `product` WHERE name like '$search%'";
    
    $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
    while ($value = mysqli_fetch_assoc($res)) {
        $row=$value;
    }
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
        <link href="style.css" type="text/css" rel="stylesheet" />
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
                            <a class="btn btn-default reg_button" href="register.php">Signup</a>
                            <a class="btn btn-default reg_button" href="features/logout_process.php">Logout</a>
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

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

       
            <div class="container cart-block-style">          
                <div class="breadcrumbs">
                    <a href="home.html"><i class="fa fa-home"></i></a>
                    <a href="#">Shopping Cart</a>
                </div>
                <div class="contentText">
                    <h1>Shopping Cart      
                    </h1>
                </div>
                






      <!-- start page -->

                <div class="entry">

                <table width="95%" style="margin-left:40px" >
            <?php 
            
    //code...

            // print_r($_SESSION);
   
                     //to show the real  photo
                     //echo' <img src="'.$row[0]['image'].'"  width="100%">';
                    //form search 
                    //if(isset($row)){ 
                     //   $i=count($row);

                        $i=0;

                      //echo $row[0]['image'];\
                      //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row[0]['image'] ).'"    width="130px"/>';
                while( $i<count($row)){
                    
                
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
                                                
                                                <img src="data:image/jpeg;base64,'.base64_encode( $row[0]['image'] ).'"  width="130px">
                                                    
                                                    </td>
                                                </tr>
                                            
                                                <tr> 
                                                    <td width="50%" height="100%">
                                                        <table border="0"  width="100%" height="100%">
                                                            <tr valign="top">
                                                                <td align="right" width="10%">NAME</td>
                                                                <td width="6%">: </td>
                                                                <td align="left">'.$row[$i]['name'].'</td>
                                                            </tr>

                                                           <tr>
                                                                <td align="right"> Category</td>
                                                                <td>: </td>
                                                                <td align="left">'.$row[$i]['cat_name'].'</td>
                                                            </tr>

                                                             <tr>
                                                                <td align="right"> Made By</td>
                                                                <td>: </td>
                                                                <td align="left">'.$row[$i]['sup_id'].'</td>
                                                            </tr>



                                                                                
                                                            <tr>
                                                                <td align="right"> PRICE</td>
                                                                <td>: </td>
                                                                <td align="left">'.$row[$i]['price'].' $</td>
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
                                             
                                             '.$row[$i]['pro_desc'].'
                                                                                

                                             
                                             <tr><td colspan=2><hr color="purple"></td></tr>
                                            
                                            <table border="0" width="100%">
                                                
                                                 <tr align="center" bgcolor="#EEE9F3">';
                                              /*array holdt information about medicine*/
                                         
                                        
                                       
                                           
                                                 
                                                 if(isset($_SESSION['type']))
                                                 {

                                        
                                       echo '<td style="background-color:white"> <a href="cart_processes.php?name='.$row[$i]['name'].'&cat_name='.$row[$i]['cat_name'].'&price='.$row[$i]['price'].'">
                                                        <img src="images/add-to-cart.png" width=50px;height=50px>
                                                    </a></td>';
                                            
                                                 }     
                                                else
                                                {
        echo '<td style="background-color:white"><img src="images/add-to-cart.png" width=55px;height=60px><br><a href="login.php"> <h4>Please Login..</h4></a></td>';
                                                }
                                                echo '</tr>
                                            </table>';
$i++;
                
         
                } 
                
                if(empty($row)){
                    echo'<tr>';
                echo'<td>';
                echo "<h4 style='color: gray ;text-align: center;margin-top: 5%'>Sorry :( this Medicine is not found</h4>";
                echo'</td>';
                echo '</tr>';
                }

                //end while
                //end search form
            //}//end of if
               // else{
                //echo'<tr>';
                //echo'<td>';
                //echo "<h4 style='color: gray ;text-align: center;margin-top: 5%'>Sorry :( this Medicine is not found</h4>";
                //echo'</td>';
                //echo '</tr>';
                //}
           

            ?>

                </table>
                
                </div>

               </div>
           </body>


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
           