<?php
    include_once "sqlstart.php";
    if($_SESSION['islogin'] != 1) {Header("Location: loginmain.php");}
    $page = $_GET['page'];
    if(!isset($page) || !($page>0)) $page = 1;
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
    <div class="col-md-4">
        <div style="height: 70vh;">
        <p>&nbsp;</p> 
        <p style="font-family: 'Nanum Myeongjo'; font-size:44px; color: #0d2d84; font-weight:bold; text-align: start;">Q&As</p>  
        <!-- 본론쓰는 란 -->
        <?php 
            $list_num=5;
            $start=($page-1)*$list_num;
            $query = "select * from community limit $start, $list_num;";
            $tem=mysqli_query($connect,$query);
            while($result = mysqli_fetch_array($tem)){
                //print_r($result);
        ?>
        <p style="font-family: 'Nanum Myeongjo'; font-size:18px; font-weight:bold; text-align: start;"><?=$result['title']?></p>  
            <p><?php
                if(strlen($result['content']) < 100) { echo $result['content']; } 
                else { echo substr($result['content'],0,300).'...'; }
            ?></p>
        <hr>
        <?php } ?>
        
        </div>
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item <?php if($page==1) {echo "disabled";}?>">
                <a class="page-link" href="community.php?page=<?=$page-1?>">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#"><?=$page?></a></li>
                <li class="page-item"> <a class="page-link" href="community.php?page=<?=$page+1?>"><?=$page+1?></a></li>
                <li class="page-item"><a class="page-link" href="community.php?page=<?=$page+2?>"><?=$page+2?></a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
                <li>
                    <button type="button" class="btn btn-outline-primary mx-5" onclick="location.href='writemain.php'">글쓰기</button>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </div>  
    <?php include "foot.php";?>
</body>
</html>

