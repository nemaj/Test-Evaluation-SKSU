<?php 

$sql = "SELECT * FROM tbl_teacher_subject WHERE teach_id = ".$_GET['Tid'];

$teachSubj = mysqli_query($conn, $sql);

$teachSubj_data = [];

while ($teachRow = mysqli_fetch_assoc($teachSubj)) {
	$select_sql = mysqli_query($conn, "SELECT * FROM tbl_subject WHERE subject_id=".$teachRow['subject_id']);
	$teachSubj_data[] = mysqli_fetch_array($select_sql);
}

$teachSubj = mysqli_query($conn, $sql);
