<?php
    $id=$_GET['id'];

    include 'db/connect.php';

    $sql = "delete from ots where id='".$id."'";
    $result = mysqli_query($connection, $sql);

    if($result){
        header("Location: index.php");
    } else {
        echo "no deleted";
    }
?>