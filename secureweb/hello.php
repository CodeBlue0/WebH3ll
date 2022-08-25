<?php
    include_once "sqlstart.php";

    if(!$_SESSION['islogin']) {
?>
<form method="post" action="login.php">
<table border = "1">
    <tr>
        <th> 아이디 </th>
        <td> <input name="id"> </td>
    </tr>
    <tr>
        <th> 비밀번호 </th>
        <td> <input name="password" type="password">
    </tr>
    <tr align="center">
        <td colspan = "2"> <input type="submit" value = "로그인"> </td> 
    </tr>
</table>
</form>
<a href="join.php">회원가입</a>
<?php } else {
    //print_r($_SESSION);
    echo "반갑습니다 ".$_SESSION['name'];
    ?>
<br>
<a href="logout.php">로그아웃</a>
<?php } ?>