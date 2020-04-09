<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    include("dao.php");
    $sql ="select * from login_tbl where username = '$username' and password = '$password'";
    
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result);
    $id = $row[0];

    if($row){   
        header("location:display.php?id=".$row[0]);
    }else{
        header("location:login.php?error=1");
    }
?>
