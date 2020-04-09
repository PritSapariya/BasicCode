<?php
    $college = $_POST['college'];
    $category = $_POST['category'];
    $merit = $_POST['merit'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $board = $_POST['board'];
    $id = $_POST['id'];
    $token = $college."/".$id;

    include("dao.php");

    $sql1 ="insert into apply_tbl (id,college,category,merit) values ($id,'$college','$category',$merit) ";
    mysqli_query($connection,$sql1);

    $sql2 ="insert into student_details (id,name,city,board,token_id) values ($id,'$name','$city','$board','$token') ";
    mysqli_query($connection,$sql2);

    header("location:apply.php");
?>
