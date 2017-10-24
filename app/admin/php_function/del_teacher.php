<?php 

include'../../php_con/db_connect.php';

$id = $_GET['id'];

echo "$id";

$sql = "DELETE FROM tbl_teacher WHERE teach_id='$id'";

if(mysqli_query($conn, $sql)===TRUE){
	header('location: ../teachers.php');
}else{
	echo "error";
	die();
}
