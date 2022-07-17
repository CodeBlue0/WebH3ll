<?php
    include_once "sqlstart.php";
 
    $_SESSION['islogin'] = 0;
    Header("Location: main.php");