<?php 

$sql_allSubj = "SELECT * FROM tbl_subject";

$allSubj_res = mysqli_query($conn, $sql_allSubj);

$allSubject = [];

while ($row_subj = mysqli_fetch_assoc($allSubj_res)) {
	$allSubject[] = $row_subj;
}