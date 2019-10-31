<?php 

$sql_ans = "SELECT * FROM tbl_answer WHERE question_id='".$_GET['Qid']."'";

$answer = mysqli_query($conn, $sql_ans);


