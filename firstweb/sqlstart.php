<?php
    error_reporting(1);
    ini_set("display_errors",1);

    $connect = mysqli_connect("localhost","users","users123","users");

    if(mysqli_connect_error()) {
        echo "mysql 접속 중 오류가 발생했습니다.";
        echo mysqli_connect_error();
    }

    session_start();
?>