<?php
    include_once "sqlstart.php";
    if($_SESSION['islogin'] != 1) {Header("Location: main.php");}
    if('admin' != $_SESSION['id']) { ?>
        <script>
            alert('금지된 접근입니다.');
            location.href='http://localhost/main.php';
        </script>
    <?php }
?>

7JWE7KO87JWE7KO87JWE7KO8IOyLnO2BrOumv+2VnCDsoJXrs7QhISENCjog64KY64qUIOyVhOyjvCEhIOyhuOumrOuLpC4=
123