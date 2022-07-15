<?php
    include_once "sqlstart.php";
    //name,id,password
    print_r($_POST);
    $name = $_POST['name'];
    $id = $_POST['id'];
    $password = $_POST['password'];

    $query = "INSERT INTO login (name,id,password) VALUES ('$name','$id',password('$password'))";
    mysqli_query($connect,$query);
?>

<script>
    location.href="loginmain.php";
</script>
