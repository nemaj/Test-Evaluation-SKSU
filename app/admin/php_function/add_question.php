<?php
include'../../php_con/db_connect.php';

$question = $_POST['question'];
$subject = $_GET['id'];

if(empty($_POST['quesID'])){

	$sql = "INSERT INTO tbl_question (question,subject_id) VALUES ('$question','$subject')";

	if(mysqli_query($conn, $sql)===TRUE){
	  header('location: ../subject.php?Sid='.$subject);
	}else{
	  echo "error";
	  die();
	}

}else{

	$id = $_POST['quesID'];

	$sql = "UPDATE tbl_question SET question='$question' WHERE q_id='$id'";

	if(mysqli_query($conn, $sql)===TRUE){
	  header('location: ../subject.php?Sid='.$subject);
	}else{
	  echo "error";
	  die();
	}

}

