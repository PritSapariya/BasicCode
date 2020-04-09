<?php
    $id = $_POST['id'];
    $college = $_POST['college'];
    $category = $_POST['category'];
    $merit = $_POST['merit'];

    include("dao.php");

    $sql ="update apply_tbl set college='$college', category='$category', merit=$merit WHERE id='$id'";
    mysqli_query($connection,$sql);

    header("location:display.php");
?>
