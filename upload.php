<?php
    include_once "sqlstart.php";
    print_r($_POST);
    $title=$_POST['title'];
    $category=$_POST['category'];
    $content=$_POST['content'];
    if(isset($_POST['isscret']) && $_POST['isscret'] =='on') $isscret = 'on';
    else $isscret=''; 
    $filename="";
    $filepath="";

    if($_FILES["file"]["error"] == 0 && $_FILES["file"]["size"] <= 1000000) {
        $target_loca = "./file/".rand().".".strtolower(pathinfo("./".$_FILES["file"]["name"],PATHINFO_EXTENSION));
        print_r($_FILES);
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_loca)) {
            echo $target_loca;
            $filename=$_FILES["file"]["name"];
            $filepath=$target_loca;
        }
    }
    $id=$_SESSION['id'];
    $query = "INSERT INTO community (id,title,content,category,isscret,filename,filepath) VALUES ('$id','$title','$content','$category','$isscret','$filename','$filepath')";
    mysqli_query($connect,$query);
    Header("Location: community.php?page=1");
?> 