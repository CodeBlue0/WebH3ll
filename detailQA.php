<?php
    include_once "sqlstart.php";
    if($_SESSION['islogin'] != 1) {Header("Location: loginmain.php");}

    $idx = $_GET['idx'];
    $prevPage = $_SERVER['HTTP_REFERER'];
    if(!isset($idx) || !($idx>0)) $idx=1;
    $query = "select * from community where idx='$idx';";
    $tem=mysqli_query($connect,$query);
    $result = mysqli_fetch_array($tem);
    if(!isset($result['id']) || $result['id']=='') header('location:'.$prevPage);
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
    <p style="font-family: 'Nanum Myeongjo'; font-size:44px; color: #0d2d84; font-weight:bold; text-align: start;">Q&As</p>  
            <div class="mb-2 my-4">
                <p><div class="d-flex justify-content-between">
                    <h2><?=$result['title']?></h2>
                    <div class="text-end pt-2">아이디 : <?=$result['id']?></div>
                </div></p>
            </div>
            <div class="mb-2">
            <select class="form-select form-select-sm" aria-label="Disabled select example" disabled>
                <option selected><?php 
                    $cate = array('없음','Service 오류','웹 사이트 네트워크 오류','로그인 오류');
                    echo $cate[$result['category']];
                 ?></option>
            </select>
            </div>
            <div class="mb-5">
                <input class="form-check-input" type="hidden" name="isscret" id="flexCheckDefault" disabled>
                <label class="form-check-label" for="flexCheckDefault">
                    비밀 게시글
                </label>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="content" disabled><?=$result['content']?></textarea>
            </div>
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">파일 다운로드</label>
                <?php if($result['filename'] == '') echo "없음"; else { ?>
                    
                <a href='download.php?down=<?=$result['filepath']?>' target='_blank' class="text-decoration-none"><?=$result['filename']?></a>
                <?php } ?>
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-primary" onClick="location.href='detailQA.php?idx=<?=$idx-1?>'" <?php if($idx==1) echo "disabled"; ?>>이전</button>
                <button type="submit" class="btn btn-outline-primary" onClick="location.href='detailQA.php?idx=<?=$idx+1?>'">다음</button>
            </div>  
            </div>
    </div>
</div>  
    <?php include "foot.php";?>
</body>
</html>

