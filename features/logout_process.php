<?php
echo "adaafa" ;
//resume seesion
session_start();
//unset session data
session_unset();
//destroy session
session_destroy();

header("Location: ../home.php");
?>