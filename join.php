<?php
    include_once "sqlstart.php";
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
        html,
        body {
          height: 100%;
          background-color: rgb(242, 242, 242);
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgb(242, 242, 242);
        }
        .logincontainer {
            
            width: 500px; 
            display: flex;
            flex-direction: column;
            justify-content: center;    
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>   

</head>
<body style="overflow-x: hidden">
<div class="container"> 
    <div class="logincontainer p-5 ">
        <a href="/main.php" class="d-flex align-items-center justify-content-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" style="width: 404px;">
            <p class="fs-1 fw-bold text-black">WeBHell</p>
        </a>
    <form method="post" action="joinsql.php" onsubmit="return joinOk();">
        <div class="py-1">
            <label for="basic-url" class="form-label">이름</label>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" name="name" id="inputName" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="py-1">
            <label for="basic-url" class="form-label">별명</label>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" name="nickname" id="inputNickname" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <br><br>
        <div class="py-1">
            <label for="basic-url" class="form-label">아이디</label>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" name="id" id="inputId" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="py-1">
            <label for="basic-url" class="form-label">비밀번호</label>
            <div class="input-group input-group-lg">
                <input type="password" class="form-control" name="password" id="inputPassword" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="py-1">
            <label for="basic-url" class="form-label">비밀번호 재확인</label>
            <div class="input-group input-group-lg">
                <input type="password" class="form-control" id="inputPassword2" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
                
    <button class="btn btn-primary my-4" type="submit">가입하기</button>  
    </form>
  </div>
</div>
        <?php include "foot2.php"; ?>
</body>
</html>

<script>
    function joinOk() {
        if(document.getElementById("inputName").value=="") {
            document.getElementById("inputName").focus();
            return false;
        } else if(document.getElementById("inputNickname").value=="") {
            document.getElementById("inputNickName").focus();
            return false;
        } else if(document.getElementById("inputId").value=="") {
            document.getElementById("inputId").focus();
            return false;
        } else if(document.getElementById("inputPassword").value=="") {
            document.getElementById("inputPassword").focus();
            return false;
        } else if(document.getElementById("inputPassword").value !=
        document.getElementById("inputPassword2").value) {
            document.getElementById("inputPassword2").focus();
            return false;
        } else return true;
    }
</script>
