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

    <style> 
        a:link { color: black; text-decoration: none;}
        a:visited { color: black; text-decoration: none;} 
        a:hover { color: blue; text-decoration: none;}
    </style>

</head>
<body style="overflow-x: hidden">
<div id="wrap">
    <?php include "head.php";?>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-4">
        <div style="min-height: 70vh; height: auto">
        
        <p style="font-family: 'Nanum Myeongjo'; font-size:44px; color: #0d2d84; font-weight:bold; text-align: start;">Q&As</p> 
        <p>&nbsp;</p> 
        <!-- 본론쓰는 란 -->
        <?php 
            $first=1;
            $list_num=5;
            $start=($page-1)*$list_num;
            $query = "select * from community limit $start, $list_num;";
            $tem=mysqli_query($connect,$query);
            while($result = mysqli_fetch_array($tem)){
                if($first==1) $first=0; else {
                //print_r($result);
        ?>
        <hr><?php } ?>
        <a href='detailQA.php?idx=<?=$result['idx']?>' class="text-decoration-none">
            <p style="font-family: 'Nanum Myeongjo'; font-size:18px; font-weight:bold; text-align: start;"><?=$result['title']?></p>  
                <p><?php
                    if($result['isscret']!='on'){
                    if(strlen($result['content']) < 100) { echo $result['content']; } 
                    else { echo substr($result['content'],0,300).'...'; }} else echo "비밀 게시판입니다.";
                ?></p>
            <?php } ?>
        </a>
        </div>
        <div class="d-flex justify-content-between">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item <?php if($page==1) {echo "disabled";}?>">
                    <a class="page-link" href="community.php?page=<?=$page-1?>">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#"><?=$page?></a></li>
                    <li class="page-item"> <a class="page-link" href="community.php?page=<?=$page+1?>"><?=$page+1?></a></li>
                    <li class="page-item"><a class="page-link" href="community.php?page=<?=$page+2?>"><?=$page+2?></a></li>
                    <li class="page-item"><a class="page-link" href="community.php?page=<?=$page+3?>"><?=$page+3?></a></li>
                    <li class="page-item"><a class="page-link" href="community.php?page=<?=$page+4?>"><?=$page+4?></a></li>
                    <li class="page-item">
                    <a class="page-link" href="community.php?page=<?=$page+1?>">Next</a>
                    </li>
                </ul>
            </nav>
            <div>
                <button type="button" class="btn btn-outline-primary" onclick="location.href='writemain.php'" style="width='10px';">글쓰기</button>
            </div>
        </div>
    </div>
    </div>
    </div>  
    <?php include "foot.php";?>
</body>
</html>

