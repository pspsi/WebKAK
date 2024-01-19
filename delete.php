<?php
session_start();
if ((isset($_SESSION['id'])) && ($_SESSION['role']=='a')) {
    $i=$_GET ['id'];
    echo" ลบdกระทู้ หมายเลข $i<br>";
}else{
    header("location:index.php");
    die();
}



?>