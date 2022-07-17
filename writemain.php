<?php
    include_once "sqlstart.php";
    if($_SESSION['islogin'] != 1) {Header("Location: loginmain.php");}
    $page = $_GET['page'];
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
    <div class="col-md-5">
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <div style="height: 60vh;">
            <div class="mb-2 my-4">
                <label for="exampleFormControlInput1" class="form-label">제목</label>
                <input class="form-control" id="exampleFormControlInput1" name="title">
            </div>
            <div class="mb-5">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category">
                    <option selected value="0">질문 유형</option>
                    <option value="1">Service 오류</option>
                    <option value="2">웹 사이트 네트워크 오류</option>
                    <option value="3">로그인 오류</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">질문내용</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="content"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label m-3">파일</label>
                <input class="form-control-sm" type="file" id="formFileMultiple" multiple name="file">
            </div>  
            </div>
            <button type="submit" class="btn btn-primary">제출하기</button>
        </div>
    </form>
    </div>
</div>  
    <?php include "foot.php";?>
</body>
</html>

