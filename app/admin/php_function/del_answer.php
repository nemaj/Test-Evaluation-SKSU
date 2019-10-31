<?php 

include'../../php_con/db_connect.php';

$id = $_GET['id'];
$question = $_GET['question'];

echo "$id";

$sql = "DELETE FROM tbl_answer WHERE a_id='$id'";

if(mysqli_query($conn, $sql)===TRUE){
	header('location: ../question_ans.php?Qid='.$question);
	// header('location: ../teachers.php');
}else{
	echo "error";
	die();
}
