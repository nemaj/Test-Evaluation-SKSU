<?php

$sql = "SELECT * FROM tbl_question WHERE subject_id='".$_GET['id']."'";

$question = mysqli_query($conn, $sql);
