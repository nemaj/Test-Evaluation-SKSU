<?php
include'../../php_con/db_connect.php';

$value = $_POST['value'];
$status = $_POST['status'];
$question = $_GET['id'];

$check_correct = "SELECT * FROM tbl_answer WHERE question_id='$question' and is_answer='1'";

$correct = mysqli_num_rows(mysqli_query($conn, $check_correct));

if(empty($_POST['ansID'])){

	if($correct>0&&$status>0){
	  $_SESSION['answer_error'] = "Correct Answer is already inserted.";
	  header('location: ../question_ans.php?Qid='.$question);
	  die();
	}

	$sql = "INSERT INTO tbl_answer (value,is_answer,question_id) VALUES ('$value','$status','$question')";

	if(mysqli_query($conn, $sql)===TRUE){
	  header('location: ../question_ans.php?Qid='.$question);
	}else{
	  echo "error";
	  die();
	}

}else{

	if($correct>0&&$status>0){
	  $_SESSION['answer_error'] = "Correct Answer is already inserted.";
	  header('location: ../question_ans.php?Qid='.$question);
	  die();
	}

	$id = $_POST['ansID'];

	$sql = "UPDATE tbl_answer SET value='$value', is_answer='$status' WHERE a_id='$id'";

	if(mysqli_query($conn, $sql)===TRUE){
	  header('location: ../question_ans.php?Qid='.$question);
	}else{
	  echo "error";
	  die();
	}

}

