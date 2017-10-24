<?php 

$sql_ans = "SELECT * FROM tbl_answer WHERE question_id='".$row['q_id']."'";

$ans_data = mysqli_query($conn, $sql_ans);

$question_ans = [];

while($a_row = mysqli_fetch_assoc($ans_data)){
	$question_ans[] = $a_row;
}

