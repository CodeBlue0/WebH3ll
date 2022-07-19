<?php
    include_once "sqlstart.php";
 
#    $_SESSION['islogin'] = 0;
    session_destroy();
    Header("Location: main.php");