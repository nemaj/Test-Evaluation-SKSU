<?php 

$sql = "SELECT * FROM tbl_teacher WHERE teach_id='".$_GET['Tid']."'";

$teacher_each = mysqli_query($conn, $sql);

$teacher_data = mysqli_fetch_array($teacher_each);