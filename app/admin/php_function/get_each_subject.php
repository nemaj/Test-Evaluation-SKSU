<?php 

$sql = "SELECT * FROM tbl_subject WHERE subject_id='".$_GET['Sid']."'";

$subject_each = mysqli_query($conn, $sql);

$subject_data = mysqli_fetch_array($subject_each);