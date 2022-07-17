<?php
    include_once "sqlstart.php";
    //name,id,password
    print_r($_POST);
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $id = $_POST['id'];
    $password = $_POST['password'];

    $query = "INSERT INTO login (name,nickname,id,password) VALUES ('$name','$nickname','$id',password('$password'))";
    mysqli_query($connect,$query);
?>

<script>
    location.href="loginmain.php";
</script>
