<?php
include'../../php_con/db_connect.php';

$code = strtoupper($_POST['code']);
$desc = strtoupper($_POST['description']);
$course = strtoupper($_GET['id']);

if(empty($_POST['courseID'])){

	$sql = "INSERT INTO tbl_subject (subject_code,description,course_id) VALUES ('$code','$desc','$course')";

	if(mysqli_query($conn, $sql)===TRUE){
	  header('location: ../course.php?id='.$course);
	}else{
	  echo "error";
	  die();
	}

}else{

	$id = $_POST['courseID'];

	$sql = "UPDATE tbl_subject SET subject_code='$code', description='$desc' WHERE subject_id='$id'";

	if(mysqli_query($conn, $sql)===TRUE){
	  header('location: ../course.php?id='.$course);
	}else{
	  echo "error";
	  die();
	}

}

