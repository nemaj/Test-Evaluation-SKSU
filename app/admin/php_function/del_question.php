<?php 

include'../../php_con/db_connect.php';

$id = $_GET['id'];
$subject = $_GET['subject'];

echo "$id";

$sql = "DELETE FROM tbl_question WHERE q_id='$id'";

if(mysqli_query($conn, $sql)===TRUE){
	header('location: ../subject.php?Sid='.$subject);
	// header('location: ../teachers.php');
}else{
	echo "error";
	die();
}
