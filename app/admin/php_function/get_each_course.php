<?php

if(empty($_GET['id'])){
	$sql = "SELECT * FROM tbl_course WHERE course_id='".$subject_data['course_id']."'";
}else{
	$sql = "SELECT * FROM tbl_course WHERE course_id='".$_GET['id']."'";
}

$course_each = mysqli_query($conn, $sql);

$course_data = mysqli_fetch_array($course_each);
