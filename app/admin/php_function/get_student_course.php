<?php 

$sql_c = "SELECT * FROM tbl_course WHERE course_id='".$row['course']."'";

$result_c = mysqli_query($conn, $sql_c);

$std_course = mysqli_fetch_array($result_c);