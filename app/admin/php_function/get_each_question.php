<?php 

$sql = "SELECT * FROM tbl_question WHERE q_id='".$_GET['Qid']."'";

$question_each = mysqli_query($conn, $sql);

$question_data = mysqli_fetch_array($question_each);

$_subjectID = $question_data['subject_id'];
$_GET['Sid'] = $question_data['subject_id'];