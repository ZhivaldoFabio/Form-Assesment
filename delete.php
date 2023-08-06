<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from warga_dampingan where id_wd=$id";
    $result=pg_query($conn,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(pg_last_error($conn));
    }
}

?>