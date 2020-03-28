<?php
//resume seesion
session_start();
//unset session data
session_unset();
//destroy session
session_destroy();
include("home.php");
?>