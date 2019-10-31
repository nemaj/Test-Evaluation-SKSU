<?php 

$sql_subj = "SELECT * FROM tbl_subject WHERE subject_id=".$row['subject_id'];

$subj_res = mysqli_query($conn, $sql_subj);

$subj_row = mysqli_fetch_array($subj_res);