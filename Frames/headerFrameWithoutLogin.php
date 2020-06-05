<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4" id="logo">
            <a href="home.php" class="logo-text">
                Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
            </a>
        </div>
        <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide">
            <nav role="navigation" class="navbar navbar-inverse">
                <a href="home.php" style="float: left" class="logo-text">
                    Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
                </a>
                <div id="nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                            style="background: #8EBE08; border: none; margin-right: 0">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav site_nav_menu1">
                            <li class="first "><a href="home.php">Home</a></li>
                            <li><a href="features/accountProcess.php">MY Account</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12">
            <div id="top_right">
                <div id="cart">
                    <div class="text">
                        <div class="img">
                            <a href="cart.php"> <img class="img-responsive" src="images/cart.png" alt="" title=""
                                    width="26" height="27" /></a>
                        </div>
                          <span>Your cart:</span>
                          <span class="cart_total"> € <?php echo @$_SESSION['total']  ;  ?>

                          <span class="cart_items">( <?php echo @count($_SESSION['cart']) ?> 
                            items)</span>
                    </div>
                </div>
                <div id="bottom_right">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 wd_auto">
                            <div class="left">
                                <div class="login">
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
                    <nav role="navigation" class="navbar navbar-inverse" id="nav_show">
                        <div id="nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav site_nav_menu1">
                                    <li class="first "><a href="home.php">Home</a></li>
                                    <li><a href="features/accountProcess.php">MY Account</a></li>
                                    <li><a href="#">About us</a></li>
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