<?php
    include_once "sqlstart.php";
    //id,password
    //print_r($_POST);
    //$name = $_POST['name'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM LOGIN WHERE id='$id' AND password=password('$password')";
    $sel = mysqli_query($connect,$query);
    $user = mysqli_fetch_array($sel);

    if($user) {
        $_SESSION['islogin'] = 1;  
        $_SESSION['name'] = $user['name'];
        //print_r($user);
    } else { ?>
    <script>
        alert("로그인 정보가 올바르지 않습니다");
        history.back(1);
    </script>
    <?php } ?>

<script>
    location.href="main.php";
</script>
