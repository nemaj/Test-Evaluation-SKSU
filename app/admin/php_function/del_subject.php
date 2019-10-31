<?php 

include'../../php_con/db_connect.php';

$id = $_GET['id'];
$course = $_GET['course'];

echo "$id";

$sql = "DELETE FROM tbl_subject WHERE subject_id='$id'";

if(mysqli_query($conn, $sql)===TRUE){
	header('location: ../course.php?id='.$course);
	// header('location: ../teachers.php');
}else{
	echo "error";
	die();
}
