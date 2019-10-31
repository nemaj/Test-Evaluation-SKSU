<?php 

include'../../php_con/db_connect.php';

$teach_id = $_GET['id'];
$subj_id = $_POST['subj'];

$check_sql = "SELECT * FROM tbl_teacher_subject WHERE teach_id='$teach_id' AND subject_id='$subj_id'";

if(mysqli_num_rows(mysqli_query($conn, $check_sql))>0){
	echo "Subject is already added.";
	$_SESSION['subj_error'] = "Subject is already added.";
	header('location: ../assign_subj.php?Tid='.$teach_id);
	die();
}else{
	$sql_ins = "INSERT INTO tbl_teacher_subject (teach_id,subject_id) VALUES ('$teach_id','$subj_id')";

	if(mysqli_query($conn, $sql_ins)===TRUE){
		header('location: ../assign_subj.php?Tid='.$teach_id);
	}else{
		echo "error";
		die();
	}
}
