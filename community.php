<?php
    include_once "sqlstart.php";
    if($_SESSION['islogin'] != 1) {Header("Location: loginmain.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    

</head>
<body style="overflow-x: hidden">
<div id="wrap">
    <?php include "head.php";?>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3">
       <div style="height: 70vh;">
       본론쓰는 란
        </div>
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"> <a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </div>  
    <?php include "foot.php";?>
</body>
</html>

