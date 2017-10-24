<?php

$sql = "SELECT * FROM tbl_question WHERE subject_id='".$_GET['Sid']."'";

$question = mysqli_query($conn, $sql);
