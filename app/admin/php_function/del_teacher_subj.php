<?php 

include'../../php_con/db_connect.php';

$id = $_GET['id'];
$Tid = $_GET['Tid'];

echo "$id $Tid";

$sql = "DELETE FROM tbl_teacher_subject WHERE id='$id'";

if(mysqli_query($conn, $sql)===TRUE){
	header('location: ../assign_subj.php?Tid='.$Tid);
	die();
}else{
	echo "error";
	die();
}