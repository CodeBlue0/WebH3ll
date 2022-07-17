<?php
    include_once "sqlstart.php";
    $title=$_POST['title'];
    $category=$_POST['category'];
    $content=$_POST['content'];
    $filename="";
    $filepath="";

    if($_FILES["file"]["error"] == 0 && $_FILES["file"]["size"] <= 1000000) {
        $target_loca = "./file/".rand().".".strtolower(pathinfo($_FILES["file"]["tmp_name"],PATHINFO_EXTENSION));
        print_r($_FILES);
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_loca)) {
            echo $target_loca;
            $filename=$_FILES["file"]["name"];
            $filepath=$target_loca;
        }
    }
    $id=$_SESSION['id'];
    $query = "INSERT INTO community (id,title,content,category,filename,filepath) VALUES ('$id','$title','$content','$category','$filename','$filepath')";
    mysqli_query($connect,$query);
    Header("Location: community.php?page=1");
?> 