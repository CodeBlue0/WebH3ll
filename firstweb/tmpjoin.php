<?php
    include_once "sqlstart.php"
?>

<form method="post" action="joininsql.php">
<table border = "1">
    <tr>
        <th> 이름 </th>
        <td> <input name="name"> </td>
    </tr>
    <tr>
        <th> 아이디 </th>
        <td> <input name="id"> </td>
    </tr>
    <tr>
        <th> 비밀번호 </th>
        <td> <input name="password" type="password">
    </tr>
    <tr align="center">
        <td colspan = "2"> <input type="submit" value = "회원가입"> </td> 
    </tr>
</table>
</form>
