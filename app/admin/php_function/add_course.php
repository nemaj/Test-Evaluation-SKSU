<?php

include'../../php_con/db_connect.php';

$course = strtoupper($_POST['course']);
$desc = strtoupper($_POST['description']);

$sql = "INSERT INTO tbl_course (course, description) VALUES ('$course','$desc')";

if(mysqli_query($conn, $sql)===TRUE){
    header('location: ../index.php');
}else{
    echo "error";
    die();
}
